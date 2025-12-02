<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\EventRegistration;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class EventRegistrationController extends Controller
{
    /**
     * Show registration form
     */
    public function create(Request $request)
    {
        $eventId = $request->query('event_id');
        
        // Get upcoming events
        $events = Events::where('date_from', '>=', now())->get();
        
        $selectedEvent = null;
        if ($eventId) {
            $selectedEvent = Events::findOrFail($eventId);
        }
        
        return view('event-registration.create', compact('events', 'selectedEvent'));
    }

    /**
     * Store registration
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'event_id' => 'required|exists:events,id',
            'aadhaar_number' => 'required|digits:12|unique:event_registrations,aadhaar_number',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:event_registrations,email',
            'phone' => 'required|string|max:15',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'pincode' => 'required|string|max:10',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'emergency_contact_name' => 'nullable|string|max:100',
            'emergency_contact_phone' => 'nullable|string|max:15',
            'special_requirements' => 'nullable|string',
            'country' => 'nullable|string|max:100',
        ]);

        // Load Event
        $event = Events::findOrFail($data['event_id']);

        // Check if event full
        if (method_exists($event, 'isFull') && $event->isFull()) {
            return back()->with('error', 'Sorry, this event is already full!')
                ->withInput();
        }

        // 1. UPLOAD PHOTO OUTSIDE OF TRANSACTION
        $profilePicturePath = null;
        try {
            $profilePicturePath = Storage::disk('public')
                ->putFile('profile_pictures', $request->file('profile_picture'));
        } catch (\Throwable $e) {
            Log::error('Profile picture upload failed: ' . $e->getMessage());
            return back()
                ->with('error', 'Failed to upload profile picture. Please try again.')
                ->withInput();
        }

        DB::beginTransaction();
        try {
            // Generate unique registration ID
            $registrationId = EventRegistration::generateUniqueRegistrationId();

            // Create Registration (Status is always 'pending' initially)
            $registration = EventRegistration::create([
                'registration_id' => $registrationId,
                'event_id' => $data['event_id'],
                'aadhaar_number' => $data['aadhaar_number'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'date_of_birth' => $data['date_of_birth'],
                'gender' => $data['gender'],
                'address' => $data['address'],
                'city' => $data['city'],
                'state' => $data['state'],
                'pincode' => $data['pincode'],
                'country' => $data['country'] ?? 'India',
                'profile_picture' => $profilePicturePath,
                'special_requirements' => $data['special_requirements'] ?? null,
                'emergency_contact_name' => $data['emergency_contact_name'] ?? null,
                'emergency_contact_phone' => $data['emergency_contact_phone'] ?? null,
                'event_name' => $event->name ?? null,
                'event_location' => $event->location ?? null,
                'event_date_from' => $event->date_from ?? null,
                'event_date_to' => $event->date_to ?? null,
                'registration_status' => 'pending',
            ]);

            DB::commit();

            // ----------------------------------------------------------------
            // 2. EMAIL SENDING AND FINAL STATUS UPDATE - OUTSIDE TRANSACTION
            // ----------------------------------------------------------------
            
            // Prepare Email Variables
            $participantName = $registration->full_name;
            $eventName = $event->name ?? 'Event';

            // Format Dates
            $eventDate = 'TBA';
            $eventTime = 'TBA';
            if ($event->date_from) {
                try {
                    $carbonDate = Carbon::parse($event->date_from);
                    $eventDate = $carbonDate->format('F j, Y');
                    $eventTime = $carbonDate->format('g:i A');
                } catch (\Exception $e) {
                    Log::warning('Date parsing failed for event', [
                        'event_id' => $event->id,
                        'date_from' => $event->date_from
                    ]);
                }
            }

            $eventLocation = $event->location ?? 'TBA';

            // Get event image URL
            $eventImageUrl = null;
            if (!empty($event->featured_image)) {
                $eventImageUrl = filter_var($event->featured_image, FILTER_VALIDATE_URL)
                    ? $event->featured_image
                    : asset('storage/' . $event->featured_image);
            }

            // Get profile picture URL
            $profilePictureUrl = $registration->profile_picture_url;

            Log::info('Preparing email data', [
                'registration_id' => $registrationId,
                'participant_name' => $participantName,
                'event_name' => $eventName,
                'profile_picture_url' => $profilePictureUrl,
                'event_image_url' => $eventImageUrl,
                'mail_driver' => config('mail.default'),
                'mail_host' => config('mail.mailers.smtp.host'),
                'mail_from' => config('mail.from.address'),
            ]);

            // Render Email HTML
            $html = view('emails.event-registration-confirmation', [
                'registration' => $registration,
                'event' => $event,
                'eventName' => $eventName,
                'participantName' => $participantName,
                'registrationId' => $registrationId,
                'eventDate' => $eventDate,
                'eventTime' => $eventTime,
                'eventLocation' => $eventLocation,
                'eventImage' => $eventImageUrl,
            ])->render();

            // Check if HTML was rendered properly
            if (empty($html)) {
                Log::error('Email HTML render returned empty', [
                    'registration_id' => $registrationId
                ]);
                throw new \Exception('Failed to render email template - empty result');
            }

            if (strlen($html) < 100) {
                Log::warning('Email HTML seems too short', [
                    'registration_id' => $registrationId,
                    'html_length' => strlen($html),
                    'html_preview' => substr($html, 0, 200)
                ]);
            }

            Log::info('Email HTML rendered successfully', [
                'registration_id' => $registrationId,
                'html_length' => strlen($html)
            ]);

            // Send Email - IMPROVED VERSION
            $sent = false;
            $emailError = null;

            try {
                Log::info('Attempting to send email via Laravel Mail', [
                    'to' => $registration->email,
                    'registration_id' => $registrationId,
                ]);

                // Use Mail::send with proper error checking
                Mail::send([], [], function ($message) use ($html, $registration, $participantName, $eventName) {
                    $message->to($registration->email, $participantName)
                            ->subject('Registration Confirmed — ' . $eventName)
                            ->html($html);
                });

                // Check for mail failures
                $failures = Mail::failures();
                
                if (empty($failures)) {
                    $sent = true;
                    Log::info('Email sent successfully', [
                        'registration_id' => $registrationId,
                        'recipient' => $registration->email
                    ]);
                } else {
                    $emailError = 'Mail delivery failed: ' . implode(', ', $failures);
                    Log::error($emailError, [
                        'registration_id' => $registrationId,
                        'failures' => $failures
                    ]);
                }

            } catch (\Throwable $e) {
                $emailError = $e->getMessage();
                Log::error("Email send exception: " . $emailError, [
                    'registration_id' => $registrationId,
                    'exception_class' => get_class($e),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTraceAsString()
                ]);
                $sent = false;
            }

            // Update Status based on email success
            if ($sent) {
                $registration->update([
                    'registration_status' => 'confirmed'
                ]);
                Log::info('Registration status updated to confirmed', [
                    'registration_id' => $registrationId
                ]);
            } else {
                Log::warning('Registration status remains pending due to email failure', [
                    'registration_id' => $registrationId,
                    'error' => $emailError
                ]);
            }

            // Prepare success message
            $successMessage = 'Registration successful! ';
            if ($sent) {
                $successMessage .= 'Check your email for confirmation.';
            } else {
                $successMessage .= 'However, there was an issue sending the confirmation email. Please contact support with your registration ID: ' . $registrationId;
            }

            // Redirect to success page
            return redirect()
                ->route('frontend.events.index')
                ->with('success', $successMessage)
                ->with('registration_id', $registrationId);

        } catch (\Throwable $e) {
            DB::rollBack();

            // Clean up uploaded file
            if ($profilePicturePath) {
                Storage::disk('public')->delete($profilePicturePath);
                Log::info('Cleaned up profile picture after registration rollback', [
                    'path' => $profilePicturePath
                ]);
            }

            Log::error("Registration failed: " . $e->getMessage(), [
                'exception_class' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()
                ->with('error', 'Something went wrong. Please try again. Error: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Show registration details (success page)
     */
    public function show($registrationId)
    {
        $registration = EventRegistration::with('event')
            ->where('registration_id', $registrationId)
            ->firstOrFail();

        $event = $registration->event ?? Events::find($registration->event_id);

        return view('event-registration.show', compact('registration', 'event'));
    }

    /**
     * List all registrations
     */
    public function index()
    {
        $registrations = EventRegistration::with('event')->latest()->paginate(20);
        return view('event-registration.index', compact('registrations'));
    }
}
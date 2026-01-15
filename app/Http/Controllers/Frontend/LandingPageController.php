<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use App\Models\Landing; // Create this model for DR program registrations
use App\Models\Setting;
use Exception;
use Illuminate\Support\Facades\Validator;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LandingPageController extends Controller
{
    protected $razorpayKey;
    protected $razorpaySecret;

    public function __construct()
    {
        $this->razorpayKey = config('razorpay.key');
        $this->razorpaySecret = config('razorpay.secret');
    }

     public function index()
    {
        $settings = Setting::all();
        $meta_page_type = 'online-rehab-program';
        return view('frontend.online-rehab-program', compact( 'settings', 'meta_page_type'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'aadhaar_number' => 'required|string|size:12|regex:/^[0-9]{12}$/',
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|size:10|regex:/^[6-9][0-9]{9}$/',
            'gender' => 'required|in:male,female,other',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|string|size:6|regex:/^[0-9]{6}$/',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'profile_picture' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'special_requirements' => 'nullable|string|max:500',
            'payment' => 'required|in:499,3500',
        ], [
            'aadhaar_number.required' => 'Aadhaar number is required',
            'aadhaar_number.size' => 'Aadhaar number must be exactly 12 digits',
            'aadhaar_number.regex' => 'Aadhaar number must contain only digits',
            'first_name.required' => 'First name is required',
            'first_name.min' => 'First name must be at least 2 characters',
            'last_name.required' => 'Last name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'phone.required' => 'Phone number is required',
            'phone.size' => 'Phone number must be exactly 10 digits',
            'phone.regex' => 'Please enter a valid Indian mobile number',
            'gender.required' => 'Please select your gender',
            'city.required' => 'City is required',
            'state.required' => 'State is required',
            'pincode.required' => 'Pincode is required',
            'pincode.size' => 'Pincode must be exactly 6 digits',
            'pincode.regex' => 'Pincode must contain only digits',
            'country.required' => 'Country is required',
            'address.required' => 'Address is required',
            'profile_picture.image' => 'Profile picture must be an image',
            'profile_picture.mimes' => 'Profile picture must be jpeg, jpg, or png',
            'profile_picture.max' => 'Profile picture must not exceed 2MB',
            'payment.required' => 'Please select a payment option',
            'payment.in' => 'Invalid payment option selected',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $api = new Api($this->razorpayKey, $this->razorpaySecret);

        try {
            // Convert payment amount to paise (₹499 = 49900 paise, ₹3500 = 350000 paise)
            $paymentAmount = (int)$request->payment;
            $amountInPaise = $paymentAmount * 100;

            // Create Razorpay order
            $order = $api->order->create([
                'amount' => $amountInPaise,
                'currency' => 'INR',
                'receipt' => 'order_dr_' . uniqid(),
                'payment_capture' => 1
            ]);

            $validated = $validator->validated();

            dd($request->hasFile('profile_picture'));

            // Handle profile picture upload
            $profilePicturePath = null;
            if ($request->hasFile('profile_picture')) {
                $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            }

          

            // Create registration record
            $landing = EventRegistration::create([
                'aadhaar_number' => $validated['aadhaar_number'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'gender' => $validated['gender'],
                'city' => $validated['city'],
                'state' => $validated['state'],
                'pincode' => $validated['pincode'],
                'country' => $validated['country'],
                'address' => $validated['address'],
                'profile_picture' => $profilePicturePath,
                'special_requirements' => $validated['special_requirements'] ?? null,
                'order_id' => $order['id'],
                'amount' => $paymentAmount,
                'currency' => 'INR',
                'landing_page_name' => 'Online Rehab Program',
                'status' => 'pending'
            ]);

            return response()->json([
                'success' => true,
                'order_id' => $order['id'],
                'razorpay_key' => $this->razorpayKey,
                'amount' => $amountInPaise,
                'customer_name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'customer_email' => $validated['email'],
                'customer_contact' => $validated['phone']
            ]);

        } catch (Exception $e) {
            Log::error('DR Program Registration Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Registration failed. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function verify(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'razorpay_order_id' => 'required|string',
            'razorpay_payment_id' => 'required|string',
            'razorpay_signature' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid payment details'
            ], 422);
        }

        $api = new Api($this->razorpayKey, $this->razorpaySecret);

        try {
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];

            // Verify payment signature
            $api->utility->verifyPaymentSignature($attributes);

            // Find registration by order_id
            $registration = EventRegistration::where('order_id', $request->razorpay_order_id)->first();

            if (!$registration) {
                return response()->json([
                    'success' => false,
                    'message' => 'Registration not found'
                ], 404);
            }

            // Update registration status
            $registration->update([
                'status' => 'paid',
                'r_payment_id' => $request->razorpay_payment_id
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Payment verified successfully! Registration confirmed.',
                'redirect' => route('frontend.landing.success') // Optional: redirect to success page
            ]);

        } catch (Exception $e) {
            Log::error('Payment Verification Error: ' . $e->getMessage());
            
            // Update registration as failed
            if (isset($registration)) {
                $registration->update([
                    'status' => 'failed'
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Payment verification failed. Please contact support.'
            ], 400);
        }
    }

    public function success()
    {
        return view('frontend.success');
    }
}
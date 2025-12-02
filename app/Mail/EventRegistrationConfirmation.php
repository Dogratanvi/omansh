<?php

namespace App\Mail;

use App\Models\EventRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class EventRegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;
    public $event;

    /**
     * Create a new message instance.
     */
    public function __construct(EventRegistration $registration)
    {
        $this->registration = $registration;
        $this->event = $registration->event;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            subject: 'Event Registration Confirmation - ' . $this->event->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.event-registration-confirmation',
            with: [
                'registration' => $this->registration,
                'event' => $this->event,
                'participantName' => $this->registration->full_name,
                'registrationId' => $this->registration->registration_id,
                'eventName' => $this->event->name,
                'eventDate' => $this->event->date_from->format('l, F d, Y'),
                'eventTime' => $this->event->date_from->format('h:i A'),
                'eventLocation' => $this->event->location,
                'eventImage' => $this->event->featured_image,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
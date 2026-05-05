<?php

namespace App\Mail;

use App\Models\WebinarRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WebinarReminderMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public WebinarRegistration $registration;

    public function __construct(WebinarRegistration $registration)
    {
        $this->registration = $registration;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reminder: Your Upcoming Webinar - '.$this->registration->webinar->title
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.webinar-reminder',
            with: [
                'registration' => $this->registration,
                'webinar' => $this->registration->webinar,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

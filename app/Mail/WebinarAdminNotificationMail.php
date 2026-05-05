<?php

namespace App\Mail;

use App\Models\WebinarRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WebinarAdminNotificationMail extends Mailable implements ShouldQueue
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
            subject: 'New Webinar Registration - '.$this->registration->webinar->title
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.webinar-admin-notification',
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

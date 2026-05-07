<?php

namespace App\Mail;

use App\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class UserContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public ContactForm $contact;
    public bool $isProjectEnquiry;

    /**
     * Create a new message instance.
     */
    public function __construct(ContactForm $contact, bool $isProjectEnquiry = false)
    {
        $this->contact = $contact;
        $this->isProjectEnquiry = $isProjectEnquiry;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->isProjectEnquiry ? 'Thanks for your project enquiry' : 'Thank you for contacting us'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->isProjectEnquiry ? 'emails.project-enquiry-user' : 'emails.contact-user',
            with: [
                'contact' => $this->contact,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}

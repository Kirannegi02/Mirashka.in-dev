<?php

namespace App\Jobs;

use App\Mail\AdminContactMail;
use App\Mail\UserContactMail;
use App\Models\ContactForm;
use App\Models\EmailLog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendContactEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 5;

    public array $backoff = [10, 30, 60, 120, 300];

    public int $timeout = 60;

    public function __construct(
        public ContactForm $contact
    ) {
        $this->onQueue('emails');
    }

    public function handle(): void
    {
        $contact = $this->contact->fresh();

        if (! $contact) {
            Log::warning('SendContactEmails: Contact not found', [
                'contact_id' => $this->contact->id,
            ]);

            return;
        }

        $this->logAttempt($contact);

        $this->sendUserEmail($contact);
        $this->sendAdminEmail($contact);

        $contact->markEmailSent();

        Log::info('SendContactEmails: Completed', [
            'contact_id' => $contact->id,
            'email' => $contact->email,
        ]);
    }

    private function logAttempt(ContactForm $contact): void
    {
        EmailLog::create([
            'to_email' => $contact->email,
            'subject' => 'Thank you for contacting us',
            'template' => UserContactMail::class,
            'status' => 'pending',
            'attempt' => $this->attempts(),
        ]);

        EmailLog::create([
            'to_email' => config('mail.admin_email'),
            'subject' => 'New Contact Form Submission',
            'template' => AdminContactMail::class,
            'status' => 'pending',
            'attempt' => $this->attempts(),
        ]);
    }

    private function sendUserEmail(ContactForm $contact): void
    {
        try {
            Mail::to($contact->email)->send(new UserContactMail($contact));

            Log::info('SendContactEmails: User email sent', [
                'contact_id' => $contact->id,
            ]);
        } catch (\Throwable $e) {
            Log::error('SendContactEmails: User email failed', [
                'contact_id' => $contact->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    private function sendAdminEmail(ContactForm $contact): void
    {
        try {
            Mail::to(config('mail.admin_email'))->send(new AdminContactMail($contact));

            Log::info('SendContactEmails: Admin email sent', [
                'contact_id' => $contact->id,
            ]);
        } catch (\Throwable $e) {
            Log::warning('SendContactEmails: Admin email failed (non-critical)', [
                'contact_id' => $contact->id,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function failed(\Throwable $exception): void
    {
        Log::critical('SendContactEmails: Permanently failed', [
            'contact_id' => $this->contact->id,
            'email' => $this->contact->email,
            'error' => $exception->getMessage(),
        ]);

        $this->contact->markEmailFailed($exception->getMessage());
    }
}

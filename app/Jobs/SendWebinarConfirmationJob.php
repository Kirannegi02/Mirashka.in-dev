<?php

namespace App\Jobs;

use App\Mail\WebinarAdminNotificationMail;
use App\Mail\WebinarConfirmationMail;
use App\Models\EmailLog;
use App\Models\WebinarRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendWebinarConfirmationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 5;

    public array $backoff = [10, 30, 60, 120, 300];

    public int $timeout = 60;

    public function __construct(
        public WebinarRegistration $registration
    ) {
        $this->onQueue('emails');
    }

    public function handle(): void
    {
        $registration = $this->registration->fresh(['webinar']);

        if (! $registration) {
            Log::warning('SendWebinarConfirmationJob: Registration not found', [
                'registration_id' => $this->registration->id,
            ]);

            return;
        }

        $this->logAttempt($registration);

        $this->sendUserConfirmation($registration);
        $this->sendAdminNotification($registration);

        $registration->markEmailSent();

        Log::info('SendWebinarConfirmationJob: Completed', [
            'registration_id' => $registration->id,
            'email' => $registration->email,
        ]);
    }

    private function logAttempt(WebinarRegistration $registration): void
    {
        EmailLog::create([
            'to_email' => $registration->email,
            'subject' => 'Webinar Registration Confirmed',
            'template' => WebinarConfirmationMail::class,
            'status' => 'pending',
            'attempt' => $this->attempts(),
        ]);
    }

    private function sendUserConfirmation(WebinarRegistration $registration): void
    {
        try {
            Mail::to($registration->email)->send(new WebinarConfirmationMail($registration));

            Log::info('SendWebinarConfirmationJob: User confirmation sent', [
                'registration_id' => $registration->id,
            ]);
        } catch (\Throwable $e) {
            Log::error('SendWebinarConfirmationJob: User confirmation failed', [
                'registration_id' => $registration->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    private function sendAdminNotification(WebinarRegistration $registration): void
    {
        try {
            Mail::to(config('mail.admin_email'))->send(new WebinarAdminNotificationMail($registration));

            Log::info('SendWebinarConfirmationJob: Admin notification sent', [
                'registration_id' => $registration->id,
            ]);
        } catch (\Throwable $e) {
            Log::warning('SendWebinarConfirmationJob: Admin notification failed (non-critical)', [
                'registration_id' => $registration->id,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function failed(\Throwable $exception): void
    {
        Log::critical('SendWebinarConfirmationJob: Permanently failed', [
            'registration_id' => $this->registration->id,
            'email' => $this->registration->email,
            'error' => $exception->getMessage(),
        ]);

        $this->registration->markEmailFailed($exception->getMessage());
    }
}

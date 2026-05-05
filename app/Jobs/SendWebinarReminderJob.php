<?php

namespace App\Jobs;

use App\Mail\WebinarReminderMail;
use App\Models\EmailLog;
use App\Models\WebinarRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendWebinarReminderJob implements ShouldQueue
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

        if (! $registration || $registration->status !== 'registered') {
            Log::warning('SendWebinarReminderJob: Skipping invalid registration', [
                'registration_id' => $this->registration->id,
                'status' => $registration?->status,
            ]);

            return;
        }

        $this->logAttempt($registration);

        try {
            Mail::to($registration->email)->send(new WebinarReminderMail($registration));

            $registration->markReminderSent();

            Log::info('SendWebinarReminderJob: Reminder sent', [
                'registration_id' => $registration->id,
                'email' => $registration->email,
            ]);
        } catch (\Throwable $e) {
            Log::error('SendWebinarReminderJob: Reminder failed', [
                'registration_id' => $registration->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    private function logAttempt(WebinarRegistration $registration): void
    {
        EmailLog::create([
            'to_email' => $registration->email,
            'subject' => 'Webinar Reminder',
            'template' => WebinarReminderMail::class,
            'status' => 'pending',
            'attempt' => $this->attempts(),
        ]);
    }

    public function failed(\Throwable $exception): void
    {
        Log::critical('SendWebinarReminderJob: Permanently failed', [
            'registration_id' => $this->registration->id,
            'email' => $this->registration->email,
            'error' => $exception->getMessage(),
        ]);
    }
}

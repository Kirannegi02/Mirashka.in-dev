<?php

namespace App\Jobs;

use App\Mail\AdminContactMail;
use App\Mail\UserContactMail;
use App\Mail\WebinarAdminNotificationMail;
use App\Mail\WebinarConfirmationMail;
use App\Models\ContactForm;
use App\Models\WebinarRegistration;
use App\Services\MailService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendLeadEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 60;

    public function backoff(): array
    {
        return [60, 300, 900];
    }

    public function __construct(
        public ContactForm|WebinarRegistration $lead,
        public string $leadType
    ) {
        $this->onQueue('emails');
    }

    public function handle(MailService $mailService): void
    {
        $lead = $this->lead->fresh();

        if (! $lead) {
            Log::warning('Lead not found', [
                'lead_type' => $this->leadType,
                'lead_id' => $this->lead->id,
            ]);

            return;
        }

        if ($this->attempts() > 1) {
            $lead->markEmailRetrying();
        }

        $lead->incrementAttempts();

        $mailable = $this->getMailable($lead);
        $template = $this->getTemplateName($mailable);

        try {
            $mailService->send($lead, $mailable, $template);
            $lead->markEmailSent();

            $this->sendAdminNotification($lead);

        } catch (Throwable $e) {
            $lead->markEmailFailed($e->getMessage());
            throw $e;
        }
    }

    private function getMailable(object $lead): Mailable
    {
        return match (true) {
            $lead instanceof ContactForm => new UserContactMail($lead),
            $lead instanceof WebinarRegistration => new WebinarConfirmationMail($lead),
            default => throw new \InvalidArgumentException('Unknown lead type: '.get_class($lead)),
        };
    }

    private function getTemplateName(Mailable $mailable): string
    {
        return match (true) {
            $mailable instanceof UserContactMail => 'contact-user',
            $mailable instanceof AdminContactMail => 'contact-admin',
            $mailable instanceof WebinarConfirmationMail => 'webinar-confirmation',
            $mailable instanceof WebinarAdminNotificationMail => 'webinar-admin-notification',
            default => 'unknown',
        };
    }

    private function sendAdminNotification(object $lead): void
    {
        $adminEmail = Config::get('mail.admin_email');

        if (! $adminEmail) {
            return;
        }

        try {
            $mailable = $lead instanceof ContactForm
                ? new AdminContactMail($lead)
                : new WebinarAdminNotificationMail($lead);

            Mail::mailer('smtp')->to($adminEmail)->send($mailable);

            Log::info('Admin notification sent', [
                'lead_type' => $this->leadType,
                'lead_id' => $lead->id,
            ]);

        } catch (Throwable $e) {
            Log::warning('Admin notification failed (non-critical)', [
                'lead_type' => $this->leadType,
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function failed(Throwable $exception): void
    {
        $lead = $this->lead->fresh();

        if ($lead) {
            $lead->markEmailFailed($exception->getMessage());
        }

        Log::critical('SendLeadEmailJob permanently failed', [
            'lead_type' => $this->leadType,
            'lead_id' => $this->lead->id,
            'error' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString(),
        ]);

        $this->sendAdminAlert($exception);
    }

    private function sendAdminAlert(Throwable $exception): void
    {
        $adminEmail = Config::get('mail.admin_email');

        if (! $adminEmail) {
            return;
        }

        try {
            $lead = $this->lead->fresh();

            Mail::mailer('smtp')
                ->to($adminEmail)
                ->send(new \Illuminate\Mail\Mailable([
                    'subject' => 'Email Delivery Failed - Action Required',
                    'view' => 'emails.alert-admin',
                    'with' => [
                        'leadType' => $this->leadType,
                        'leadId' => $this->lead->id,
                        'error' => $exception->getMessage(),
                        'attempts' => $this->attempts(),
                    ],
                ]));

        } catch (Throwable $e) {
            Log::error('Admin alert email failed (non-critical)', [
                'original_error' => $exception->getMessage(),
                'alert_error' => $e->getMessage(),
            ]);
        }
    }
}

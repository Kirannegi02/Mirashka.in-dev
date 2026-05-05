<?php

namespace App\Services;

use App\Models\EmailLog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EmailService
{
    private const MAX_ATTEMPTS = 5;

    private const RETRY_DELAYS = [10, 30, 60, 120, 300];

    public function send(object $recipient, string $mailableClass, array $params = [], ?string $queue = 'emails'): bool
    {
        $toEmail = $this->extractEmail($recipient);
        $toName = $this->extractName($recipient);

        if (! $toEmail) {
            Log::error('EmailService: Invalid recipient', ['recipient' => $recipient]);

            return false;
        }

        $emailLog = $this->createEmailLog($recipient, $mailableClass, $params);

        try {
            $mailable = $this->createMailable($mailableClass, $params);

            if (! $mailable) {
                throw new \Exception("Failed to create mailable: {$mailableClass}");
            }

            Mail::to($toEmail, $toName)->send($mailable);

            $this->markAsSent($emailLog);

            Log::info('EmailService: Email sent successfully', [
                'to' => $toEmail,
                'template' => $mailableClass,
                'log_id' => $emailLog->id,
            ]);

            return true;
        } catch (\Throwable $e) {
            $this->markAsFailed($emailLog, $e->getMessage());

            Log::error('EmailService: Email send failed', [
                'to' => $toEmail,
                'template' => $mailableClass,
                'error' => $e->getMessage(),
                'log_id' => $emailLog->id,
            ]);

            return false;
        }
    }

    public function sendToAdmin(object $data, string $mailableClass, array $params = []): bool
    {
        $adminEmail = config('mail.admin_email');

        if (! $adminEmail) {
            Log::error('EmailService: Admin email not configured');

            return false;
        }

        $emailLog = $this->createEmailLog($data, $mailableClass, $params, $adminEmail);

        try {
            $mailable = $this->createMailable($mailableClass, array_merge($params, ['isAdmin' => true]));

            if (! $mailable) {
                throw new \Exception("Failed to create mailable: {$mailableClass}");
            }

            Mail::to($adminEmail)->send($mailable);

            $this->markAsSent($emailLog);

            Log::info('EmailService: Admin email sent', [
                'template' => $mailableClass,
                'log_id' => $emailLog->id,
            ]);

            return true;
        } catch (\Throwable $e) {
            $this->markAsFailed($emailLog, $e->getMessage());

            Log::error('EmailService: Admin email failed', [
                'template' => $mailableClass,
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }

    public function retry(int $emailLogId): bool
    {
        $emailLog = EmailLog::find($emailLogId);

        if (! $emailLog) {
            return false;
        }

        if ($emailLog->attempt >= self::MAX_ATTEMPTS) {
            Log::warning('EmailService: Max attempts reached', ['log_id' => $emailLogId]);

            return false;
        }

        $delay = self::RETRY_DELAYS[$emailLog->attempt] ?? 300;

        $emailLog->update([
            'status' => 'pending',
            'attempt' => $emailLog->attempt + 1,
            'error_message' => null,
        ]);

        Log::info('EmailService: Email retry queued', [
            'log_id' => $emailLogId,
            'attempt' => $emailLog->attempt,
            'delay' => $delay,
        ]);

        return true;
    }

    public function retryAllFailed(): int
    {
        $failedLogs = EmailLog::where('status', 'failed')
            ->where('attempt', '<', self::MAX_ATTEMPTS)
            ->get();

        $count = 0;

        foreach ($failedLogs as $log) {
            if ($this->retry($log->id)) {
                $count++;
            }
        }

        Log::info('EmailService: Batch retry completed', ['count' => $count]);

        return $count;
    }

    public function getFailedEmails(int $limit = 50): \Illuminate\Database\Eloquent\Collection
    {
        return EmailLog::where('status', 'failed')
            ->orderBy('updated_at', 'desc')
            ->limit($limit)
            ->get();
    }

    public function getPendingEmails(int $limit = 50): \Illuminate\Database\Eloquent\Collection
    {
        return EmailLog::where('status', 'pending')
            ->orderBy('created_at', 'asc')
            ->limit($limit)
            ->get();
    }

    public function getStats(): array
    {
        return [
            'total' => EmailLog::count(),
            'sent' => EmailLog::where('status', 'sent')->count(),
            'failed' => EmailLog::where('status', 'failed')->count(),
            'pending' => EmailLog::where('status', 'pending')->count(),
            'today_sent' => EmailLog::where('status', 'sent')
                ->whereDate('sent_at', today())
                ->count(),
        ];
    }

    private function createEmailLog(object $recipient, string $mailableClass, array $params, ?string $toEmail = null): EmailLog
    {
        return EmailLog::create([
            'to_email' => $toEmail ?? $this->extractEmail($recipient),
            'subject' => $this->getMailableSubject($mailableClass),
            'template' => $mailableClass,
            'status' => 'pending',
            'attempt' => 1,
        ]);
    }

    private function createMailable(string $mailableClass, array $params)
    {
        if (! class_exists($mailableClass)) {
            Log::error('EmailService: Mailable class not found', ['class' => $mailableClass]);

            return null;
        }

        $constructorParams = [];

        if (isset($params['contact'])) {
            $constructorParams[] = $params['contact'];
        } elseif (isset($params['registration'])) {
            $constructorParams[] = $params['registration'];
        } elseif (isset($params['user'])) {
            $constructorParams[] = $params['user'];
        } else {
            foreach ($params as $value) {
                if (is_object($value)) {
                    $constructorParams[] = $value;
                    break;
                }
            }
        }

        try {
            return empty($constructorParams)
                ? new $mailableClass
                : new $mailableClass(...$constructorParams);
        } catch (\Throwable $e) {
            Log::error('EmailService: Failed to instantiate mailable', [
                'class' => $mailableClass,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    private function getMailableSubject(string $mailableClass): string
    {
        $subjects = [
            \App\Mail\UserRegistered::class => 'Welcome to Elevate One Media',
            \App\Mail\UserContactMail::class => 'Thank you for contacting us',
            \App\Mail\AdminContactMail::class => 'New Contact Form Submission',
            \App\Mail\WebinarConfirmationMail::class => 'Webinar Registration Confirmed',
            \App\Mail\WebinarAdminNotificationMail::class => 'New Webinar Registration',
            \App\Mail\WebinarReminderMail::class => 'Webinar Reminder',
        ];

        return $subjects[$mailableClass] ?? 'Email from Elevate One Media';
    }

    private function extractEmail(object $recipient): ?string
    {
        if (is_object($recipient) && isset($recipient->email)) {
            return $recipient->email;
        }

        if (is_string($recipient) && filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
            return $recipient;
        }

        return null;
    }

    private function extractName(object $recipient): ?string
    {
        if (is_object($recipient) && isset($recipient->name)) {
            return $recipient->name;
        }

        if (is_object($recipient) && isset($recipient->first_name)) {
            return $recipient->first_name;
        }

        return null;
    }

    private function markAsSent(EmailLog $emailLog): void
    {
        $emailLog->update([
            'status' => 'sent',
            'sent_at' => now(),
        ]);
    }

    private function markAsFailed(EmailLog $emailLog, string $errorMessage): void
    {
        $emailLog->update([
            'status' => 'failed',
            'error_message' => Str::limit($errorMessage, 500),
        ]);
    }
}

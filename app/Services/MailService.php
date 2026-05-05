<?php

namespace App\Services;

use App\Models\EmailLog;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class MailService
{
    public function send(object $lead, Mailable $mailable, string $template = 'unknown'): void
    {
        $leadType = $this->getLeadType($lead);
        $leadId = $lead->id;
        $toEmail = $lead->email;
        $subject = $this->extractSubject($mailable);

        if (! $toEmail || ! filter_var($toEmail, FILTER_VALIDATE_EMAIL)) {
            Log::error('Invalid email address', ['email' => $toEmail, 'lead_id' => $leadId]);
            throw new \InvalidArgumentException('Invalid email address: '.$toEmail);
        }

        try {
            Mail::to($toEmail)->send($mailable);

            $this->logSuccess($lead, $toEmail, $subject, $template);

            Log::info('Email sent successfully', [
                'lead_type' => $leadType,
                'lead_id' => $leadId,
                'to_email' => $toEmail,
                'template' => $template,
            ]);

        } catch (Throwable $e) {
            $this->logFailure($lead, $toEmail, $subject, $template, $e->getMessage());

            Log::error('Email send failed', [
                'lead_type' => $leadType,
                'lead_id' => $leadId,
                'to_email' => $toEmail,
                'template' => $template,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    private function getLeadType(object $lead): string
    {
        return class_basename($lead);
    }

    private function extractSubject(Mailable $mailable): string
    {
        try {
            $envelope = $mailable->envelope();

            return $envelope->subject ?? 'No Subject';
        } catch (Throwable $e) {
            return 'Unknown Subject';
        }
    }

    private function logSuccess(object $lead, string $toEmail, string $subject, string $template): void
    {
        $leadType = $this->getLeadType($lead);

        EmailLog::create([
            'lead_type' => $leadType,
            'lead_id' => $lead->id,
            'to_email' => $toEmail,
            'subject' => $subject,
            'template' => $template,
            'status' => 'sent',
            'attempt' => $this->getCurrentAttempt($lead),
            'sent_at' => now(),
        ]);
    }

    private function logFailure(object $lead, string $toEmail, string $subject, string $template, string $error): void
    {
        $leadType = $this->getLeadType($lead);

        EmailLog::create([
            'lead_type' => $leadType,
            'lead_id' => $lead->id,
            'to_email' => $toEmail,
            'subject' => $subject,
            'template' => $template,
            'status' => 'failed',
            'attempt' => $this->getCurrentAttempt($lead),
            'error_message' => $error,
        ]);
    }

    private function getCurrentAttempt(object $lead): int
    {
        return method_exists($lead, 'email_attempts') ? ($lead->email_attempts + 1) : 1;
    }
}

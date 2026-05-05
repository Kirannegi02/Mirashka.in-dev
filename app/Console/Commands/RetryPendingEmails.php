<?php

namespace App\Console\Commands;

use App\Jobs\SendLeadEmailJob;
use App\Models\ContactForm;
use App\Models\WebinarRegistration;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class RetryPendingEmails extends Command
{
    protected $signature = 'emails:retry-pending {--include-failed : Also retry emails with failed status}';

    protected $description = 'Re-queue pending emails that have been stuck for more than 5 minutes';

    public function handle(): int
    {
        $retryStatuses = ['pending', 'retrying'];

        if ($this->option('include-failed')) {
            $retryStatuses[] = 'failed';
        }

        $stuckContacts = ContactForm::whereIn('email_status', $retryStatuses)
            ->where(function ($query) {
                $query->where('created_at', '<', now()->subMinutes(5))
                    ->orWhere('updated_at', '<', now()->subMinutes(5));
            })
            ->where(function ($query) {
                $query->whereNull('email_attempts')
                    ->orWhere('email_attempts', '<', 3);
            })
            ->get();

        foreach ($stuckContacts as $contact) {
            $contact->resetEmailStatus();
            SendLeadEmailJob::dispatch($contact, 'ContactForm');
            $this->info("Re-queued contact #{$contact->id} ({$contact->email})");
        }

        $stuckRegistrations = WebinarRegistration::whereIn('email_status', $retryStatuses)
            ->where(function ($query) {
                $query->where('created_at', '<', now()->subMinutes(5))
                    ->orWhere('updated_at', '<', now()->subMinutes(5));
            })
            ->where(function ($query) {
                $query->whereNull('email_attempts')
                    ->orWhere('email_attempts', '<', 3);
            })
            ->get();

        foreach ($stuckRegistrations as $registration) {
            $registration->resetEmailStatus();
            SendLeadEmailJob::dispatch($registration, 'WebinarRegistration');
            $this->info("Re-queued registration #{$registration->id} ({$registration->email})");
        }

        $total = $stuckContacts->count() + $stuckRegistrations->count();

        if ($total > 0) {
            Log::info('RetryPendingEmails: Re-queued emails', [
                'contacts' => $stuckContacts->count(),
                'registrations' => $stuckRegistrations->count(),
            ]);
            $this->info("Re-queued {$total} email(s).");
        } else {
            $this->info('No emails to retry.');
        }

        return Command::SUCCESS;
    }
}

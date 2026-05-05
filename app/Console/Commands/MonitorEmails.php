<?php

namespace App\Console\Commands;

use App\Models\EmailLog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MonitorEmails extends Command
{
    protected $signature = 'emails:monitor
                            {--stats : Show email statistics}
                            {--failed : List failed emails}
                            {--retry : Retry all failed emails}
                            {--cleanup : Clean up old email logs}
                            {--days=30 : Days to keep email logs}';

    protected $description = 'Monitor and manage email queue system';

    public function handle(): int
    {
        if ($this->option('stats')) {
            return $this->showStats();
        }

        if ($this->option('failed')) {
            return $this->listFailed();
        }

        if ($this->option('retry')) {
            return $this->retryFailed();
        }

        if ($this->option('cleanup')) {
            return $this->cleanupOldLogs();
        }

        $this->showStats();

        if ($this->confirm('Do you want to retry failed emails?')) {
            $this->retryFailed();
        }

        return Command::SUCCESS;
    }

    private function showStats(): int
    {
        $stats = [
            'Total Emails' => EmailLog::count(),
            'Sent Successfully' => EmailLog::where('status', 'sent')->count(),
            'Failed' => EmailLog::where('status', 'failed')->count(),
            'Pending' => EmailLog::where('status', 'pending')->count(),
            'Sent Today' => EmailLog::where('status', 'sent')->whereDate('sent_at', today())->count(),
            'Failed Today' => EmailLog::where('status', 'failed')->whereDate('updated_at', today())->count(),
        ];

        $this->info('Email Statistics');
        $this->line('================');
        $this->newLine();

        foreach ($stats as $label => $value) {
            $this->line("{$label}: <fg={$this->getColorForLabel($label)}>{$value}</>");
        }

        $this->newLine();

        $recentFails = EmailLog::where('status', 'failed')
            ->whereDate('updated_at', today())
            ->count();

        if ($recentFails > 0) {
            $this->warn("⚠️  {$recentFails} email(s) failed today. Run `php artisan emails:monitor --retry` to retry.");
        }

        return Command::SUCCESS;
    }

    private function listFailed(): int
    {
        $failedEmails = EmailLog::where('status', 'failed')
            ->orderBy('updated_at', 'desc')
            ->limit(20)
            ->get(['id', 'to_email', 'template', 'subject', 'attempt', 'error_message', 'updated_at']);

        if ($failedEmails->isEmpty()) {
            $this->info('No failed emails found.');

            return Command::SUCCESS;
        }

        $this->info('Failed Emails (Last 20)');
        $this->line('===================');
        $this->newLine();

        $headers = ['ID', 'Email', 'Template', 'Attempts', 'Error', 'Date'];
        $rows = [];

        foreach ($failedEmails as $email) {
            $rows[] = [
                $email->id,
                $email->to_email,
                class_basename($email->template),
                "{$email->attempt}/5",
                Str::limit($email->error_message, 30),
                $email->updated_at->format('Y-m-d H:i'),
            ];
        }

        $this->table($headers, $rows);

        return Command::SUCCESS;
    }

    private function retryFailed(): int
    {
        $failedEmails = EmailLog::where('status', 'failed')
            ->where('attempt', '<', 5)
            ->get();

        if ($failedEmails->isEmpty()) {
            $this->info('No emails to retry.');

            return Command::SUCCESS;
        }

        $this->info("Retrying {$failedEmails->count()} failed email(s)...");

        $retried = 0;

        DB::beginTransaction();

        try {
            foreach ($failedEmails as $email) {
                $email->update([
                    'status' => 'pending',
                    'attempt' => $email->attempt + 1,
                    'error_message' => null,
                ]);

                $retried++;
            }

            DB::commit();

            $this->info("✓ {$retried} email(s) re-queued for retry.");

            Log::info('MonitorEmails: Batch retry completed', ['count' => $retried]);
        } catch (\Throwable $e) {
            DB::rollBack();

            $this->error("Failed to retry emails: {$e->getMessage()}");

            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }

    private function cleanupOldLogs(): int
    {
        $days = (int) $this->option('days');

        $this->info("Cleaning up email logs older than {$days} days...");

        $deleted = EmailLog::where('created_at', '<', now()->subDays($days))
            ->where('status', '!=', 'pending')
            ->delete();

        $this->info("✓ Deleted {$deleted} old email log(s).");

        return Command::SUCCESS;
    }

    private function getColorForLabel(string $label): string
    {
        return match ($label) {
            'Failed', 'Pending' => 'red',
            'Sent Successfully', 'Sent Today' => 'green',
            default => 'yellow',
        };
    }
}

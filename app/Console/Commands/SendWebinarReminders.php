<?php

namespace App\Console\Commands;

use App\Jobs\SendWebinarReminderJob;
use App\Models\WebinarRegistration;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendWebinarReminders extends Command
{
    protected $signature = 'webinars:send-reminders {--hours=24 : Hours before webinar to send reminder}';

    protected $description = 'Send reminder emails to webinar registrants';

    public function handle(): int
    {
        $hours = (int) $this->option('hours');
        $this->info("Checking for webinars starting in {$hours} hours...");

        $targetTime = Carbon::now()->addHours($hours);

        $registrations = WebinarRegistration::where('status', 'registered')
            ->whereNull('reminder_sent_at')
            ->whereHas('webinar', function ($query) use ($targetTime) {
                $query->where('status', 'upcoming')
                    ->where('is_active', true)
                    ->whereDate('start_date', $targetTime->toDateString())
                    ->whereTime('start_time', '>=', $targetTime->format('H:i:00'))
                    ->whereTime('start_time', '<=', $targetTime->addMinutes(59)->format('H:i:00'));
            })
            ->with('webinar')
            ->get();

        $count = 0;
        foreach ($registrations as $registration) {
            try {
                SendWebinarReminderJob::dispatch($registration);
                $count++;
                $this->line("Reminder queued for: {$registration->email}");
            } catch (\Throwable $e) {
                Log::error('Failed to queue webinar reminder', [
                    'registration_id' => $registration->id,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        $this->info("Queued {$count} reminder emails.");

        return Command::SUCCESS;
    }
}

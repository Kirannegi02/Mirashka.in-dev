<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Update webinar status daily at midnight
        $schedule->command('webinars:update-status')
            ->daily()
            ->withoutOverlapping()
            ->appendOutputTo(storage_path('logs/webinar-status.log'));

        // Send 24-hour reminder every hour
        $schedule->command('webinars:send-reminders --hours=24')
            ->hourly()
            ->withoutOverlapping()
            ->appendOutputTo(storage_path('logs/webinar-reminders.log'));

        // Send 1-hour reminder every 30 minutes
        $schedule->command('webinars:send-reminders --hours=1')
            ->everyThirtyMinutes()
            ->withoutOverlapping()
            ->appendOutputTo(storage_path('logs/webinar-reminders.log'));

        // Retry pending emails every 5 minutes
        $schedule->command('emails:retry-pending')
            ->everyFiveMinutes()
            ->withoutOverlapping();

        // Process pending image optimizations every 5 minutes
        $schedule->command('images:process-pending --limit=50')
            ->everyFiveMinutes()
            ->withoutOverlapping()
            ->appendOutputTo(storage_path('logs/image-optimization.log'));

        // Cleanup orphaned image records daily
        $schedule->command('images:cleanup-orphans')
            ->daily()
            ->withoutOverlapping()
            ->appendOutputTo(storage_path('logs/image-cleanup.log'));
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

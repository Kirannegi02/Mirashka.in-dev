<?php

namespace App\Services;

use App\Jobs\SendLeadEmailJob;
use App\Models\webinar;
use App\Models\WebinarRegistration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RegistrationService
{
    public function __construct(
        private WebinarService $webinarService
    ) {}

    public function register(array $data): WebinarRegistration
    {
        $webinar = Webinar::findOrFail($data['webinar_id']);

        if (! $this->webinarService->isRegistrationOpen($webinar)) {
            throw new \Exception('Registration is closed for this webinar.');
        }

        if ($this->isAlreadyRegistered($data['webinar_id'], $data['email'])) {
            throw new \Exception('You are already registered for this webinar.');
        }

        $registration = DB::transaction(function () use ($data) {
            return WebinarRegistration::create([
                'webinar_id' => $data['webinar_id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'company' => $data['company'] ?? null,
                'job_title' => $data['job_title'] ?? null,
                'industry' => $data['industry'] ?? null,
                'country' => $data['country'] ?? null,
                'status' => 'registered',
            ]);
        });

        try {
            SendLeadEmailJob::dispatch($registration, 'WebinarRegistration');
            Log::info('Webinar confirmation job dispatched', ['registration_id' => $registration->id]);
        } catch (\Throwable $e) {
            Log::error('Failed to dispatch webinar confirmation job', [
                'registration_id' => $registration->id,
                'error' => $e->getMessage(),
            ]);
        }

        return $registration;
    }

    public function isAlreadyRegistered(int $webinarId, string $email): bool
    {
        return WebinarRegistration::where('webinar_id', $webinarId)
            ->where('email', $email)
            ->exists();
    }

    public function getRegistrationsForWebhook(int $webinarId): \Illuminate\Database\Eloquent\Collection
    {
        return WebinarRegistration::where('webinar_id', $webinarId)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function getRegistrationsPendingReminder(): \Illuminate\Database\Eloquent\Collection
    {
        return WebinarRegistration::where('status', 'registered')
            ->whereNull('reminder_sent_at')
            ->whereHas('webinar', function ($query) {
                $query->where('status', 'upcoming')
                    ->whereDate('start_date', now()->addHours(25)->toDateString());
            })
            ->get();
    }
}

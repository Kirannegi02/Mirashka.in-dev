<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class WebinarRegistration extends Model
{
    use HasFactory;

    protected $table = 'webinar_registrations';

    protected $fillable = [
        'webinar_id',
        'name',
        'email',
        'phone',
        'company',
        'job_title',
        'industry',
        'country',
        'status',
        'email_sent_at',
        'reminder_sent_at',
        'email_status',
        'email_attempts',
        'email_last_error',
    ];

    protected $casts = [
        'email_sent_at' => 'datetime',
        'reminder_sent_at' => 'datetime',
    ];

    public function webinar(): BelongsTo
    {
        return $this->belongsTo(Webinar::class);
    }

    public function emailLogs(): MorphMany
    {
        return $this->morphMany(EmailLog::class, 'lead', 'lead_type', 'lead_id');
    }

    public function markAsAttended(): void
    {
        $this->update(['status' => 'attended']);
    }

    public function markAsNoShow(): void
    {
        $this->update(['status' => 'no_show']);
    }

    public function markEmailSent(): void
    {
        $this->update([
            'email_sent_at' => now(),
        ]);
    }

    public function markReminderSent(): void
    {
        $this->update(['reminder_sent_at' => now()]);
    }

    public function markEmailFailed(string $error): void
    {
        $this->update([
            'email_status' => 'failed',
            'email_last_error' => $error,
        ]);
    }

    public function markEmailRetrying(): void
    {
        $this->update([
            'email_status' => 'retrying',
        ]);
    }

    public function incrementAttempts(): void
    {
        $this->increment('email_attempts');
    }

    public function resetEmailStatus(): void
    {
        $this->update([
            'email_status' => 'pending',
            'email_last_error' => null,
            'email_attempts' => 0,
        ]);
    }

    public function scopeRegistered($query)
    {
        return $query->where('status', 'registered');
    }

    public function scopePendingReminder($query)
    {
        return $query->where('status', 'registered')
            ->whereNull('reminder_sent_at');
    }
}

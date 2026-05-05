<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ContactForm extends Model
{
    use HasFactory;

    protected $table = 'contact_forms';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'company_name',
        'message',
        'email_status',
        'email_attempts',
        'email_last_error',
        'email_sent_at',
    ];

    protected $casts = [
        'email_sent_at' => 'datetime',
    ];

    public function emailLogs(): MorphMany
    {
        return $this->morphMany(EmailLog::class, 'lead', 'lead_type', 'lead_id');
    }

    public function markEmailSent(): void
    {
        $this->update([
            'email_status' => 'sent',
            'email_sent_at' => now(),
            'email_last_error' => null,
        ]);
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
}

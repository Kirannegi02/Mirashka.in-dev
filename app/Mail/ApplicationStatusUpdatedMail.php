<?php

namespace App\Mail;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationStatusUpdatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public $status;

    public $statusMessage;

    public function __construct(JobApplication $application)
    {
        $this->application = $application;
        $this->status = $application->status;

        $this->statusMessage = match ($application->status) {
            'shortlisted' => 'We will contact you soon',
            'rejected' => 'We appreciate your effort',
            'selected' => 'Congratulations',
            'reviewed' => 'Your application has been reviewed',
            default => 'Your application status has been updated',
        };
    }

    public function build()
    {
        $subject = match ($this->status) {
            'shortlisted' => 'Congratulations! You have been shortlisted',
            'rejected' => 'Application Status Update',
            'selected' => 'Congratulations! You have been selected',
            'reviewed' => 'Application Reviewed',
            default => 'Application Status Update',
        };

        return $this->subject($subject)
            ->view('emails.application-status-updated')
            ->with([
                'candidateName' => $this->application->name,
                'jobTitle' => $this->application->job->title ?? 'Unknown Position',
                'status' => $this->status,
                'statusMessage' => $this->statusMessage,
                'companyName' => config('app.name', 'Mirashka'),
            ]);
    }
}


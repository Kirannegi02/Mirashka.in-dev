<?php

require __DIR__.'/bootstrap/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Mail\ApplicationStatusUpdatedMail;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Mail;

$application = JobApplication::with('job')->find(1);

if (! $application) {
    echo "Application not found!\n";
    exit;
}

echo 'Testing email for: '.$application->email."\n";
echo 'Name: '.$application->name."\n";
echo 'Status: '.$application->status."\n";
echo 'Job: '.($application->job->title ?? 'Unknown')."\n\n";

try {
    Mail::to($application->email)->send(new ApplicationStatusUpdatedMail($application));
    echo "SUCCESS: Email sent!\n";
} catch (\Exception $e) {
    echo 'ERROR: '.$e->getMessage()."\n";
}

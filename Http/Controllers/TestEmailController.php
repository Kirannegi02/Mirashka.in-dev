<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationStatusUpdatedMail;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Mail;

class TestEmailController extends Controller
{
    public function test()
    {
        try {
            Mail::raw('Test email from Elevate One Media', function ($message) {
                $message->to('test@example.com')
                    ->subject('Test Email');
            });

            return response()->json(['success' => true, 'message' => 'Test email sent!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function sendToCandidate($applicationId)
    {
        $application = JobApplication::with('job')->find($applicationId);

        if (! $application) {
            return response()->json(['success' => false, 'error' => 'Application not found']);
        }

        try {
            Mail::to($application->email)->send(new ApplicationStatusUpdatedMail($application));

            return response()->json([
                'success' => true,
                'message' => 'Email sent to '.$application->email,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }
}

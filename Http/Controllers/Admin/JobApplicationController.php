<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApplicationStatusUpdatedMail;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function index(Request $request)
    {
        $query = JobApplication::with('job');

        if ($request->has('job_id') && $request->job_id !== 'all') {
            $query->where('job_id', $request->job_id);
        }

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        $applications = $query->orderBy('created_at', 'desc')->paginate(20);
        $jobs = Job::orderBy('title')->get();

        return view('admin.jobs.applications', compact('applications', 'jobs'));
    }

    public function show(JobApplication $application)
    {
        $application->load('job');

        if ($application->status === 'new') {
            $application->update(['status' => 'reviewed']);
        }

        return view('admin.jobs.application-detail', compact('application'));
    }

    public function updateStatus(Request $request, JobApplication $application)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,reviewed,rejected,shortlisted,selected',
        ]);

        $oldStatus = $application->status;
        $newStatus = $validated['status'];

        $application->status = $newStatus;
        $application->save();

        $message = match ($newStatus) {
            'new' => 'Application marked as new',
            'reviewed' => 'Application marked as reviewed',
            'rejected' => 'Application has been rejected',
            'shortlisted' => 'Application has been shortlisted!',
            'selected' => 'Application has been selected!',
        };

        if ($oldStatus !== $newStatus) {
            $application->load('job');

            try {
                Mail::to($application->email)->send(new ApplicationStatusUpdatedMail($application));
                $message .= ' & Email sent successfully.';
            } catch (\Exception $e) {
                Log::error('Email error for application '.$application->id.': '.$e->getMessage());
                $message .= ' (Email error: '.$e->getMessage().')';
            }
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'status' => $newStatus,
                'message' => $message,
            ]);
        }

        return redirect()->back()->with('success', $message);
    }

    public function sendStatusEmail(JobApplication $application)
    {
        $application->load('job');

        Log::info('sendStatusEmail called for application ID: '.$application->id.', email: '.$application->email);

        try {
            Mail::to($application->email)->send(new ApplicationStatusUpdatedMail($application));

            Log::info('Email sent successfully to: '.$application->email);

            return response()->json([
                'success' => true,
                'message' => 'Email sent successfully to '.$application->email,
            ]);
        } catch (\Swift_TransportException $e) {
            Log::error('Swift Transport Error for application '.$application->id.': '.$e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Email configuration error. Please check SMTP settings.',
            ], 500);
        } catch (\Exception $e) {
            Log::error('Email error for application '.$application->id.': '.$e->getMessage());
            Log::error('Stack trace: '.$e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Failed to send email: '.$e->getMessage(),
            ], 500);
        }
    }

    public function downloadResume(JobApplication $application)
    {
        if (! $application->resume) {
            return redirect()->back()->with('error', 'No resume file attached!');
        }

        $filePath = storage_path('app/public/resumes/'.$application->resume);

        if (! file_exists($filePath)) {
            return redirect()->back()->with('error', 'Resume file not found on server!');
        }

        $extension = pathinfo($application->resume, PATHINFO_EXTENSION);
        $filename = 'resume_'.$application->name.'.'.$extension;

        return response()->download($filePath, $filename);
    }

    public function destroy(JobApplication $application)
    {
        if ($application->resume) {
            Storage::disk('public')->delete('resumes/'.$application->resume);
        }

        $application->delete();

        return redirect()->route('admin.applications.index')
            ->with('success', 'Application deleted successfully!');
    }
}

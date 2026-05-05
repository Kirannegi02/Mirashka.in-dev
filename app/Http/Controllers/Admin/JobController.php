<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query()->withCount('applications');

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('department', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%");
            });
        }

        $jobs = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'job_type' => 'required|in:full-time,part-time,internship,contract',
            'experience' => 'nullable|string|max:50',
            'salary_range' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'status' => 'required|in:active,inactive,closed',
            'last_date' => 'nullable|date|after_or_equal:today',
        ]);

        $validated['slug'] = Str::slug($request->title);

        $existingJob = Job::where('slug', $validated['slug'])->first();
        if ($existingJob) {
            $validated['slug'] = $validated['slug'].'-'.time();
        }

        Job::create($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job created successfully!');
    }

    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'job_type' => 'required|in:full-time,part-time,internship,contract',
            'experience' => 'nullable|string|max:50',
            'salary_range' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'status' => 'required|in:active,inactive,closed',
            'last_date' => 'nullable|date',
        ]);

        if ($job->title !== $request->title) {
            $newSlug = Str::slug($request->title);
            $existingJob = Job::where('slug', $newSlug)->where('id', '!=', $job->id)->first();
            if ($existingJob) {
                $newSlug = $newSlug.'-'.time();
            }
            $validated['slug'] = $newSlug;
        }

        $job->update($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job updated successfully!');
    }

    public function destroy(Job $job)
    {
        Log::info('Delete job hit: '.$job->id);
        
        $job->delete();

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job deleted successfully!');
    }

    public function toggleStatus(Job $job)
    {
        $currentStatus = $job->status;
        $newStatus = match ($currentStatus) {
            'active' => 'inactive',
            'inactive' => 'active',
            'closed' => 'active',
        };

        $job->update(['status' => $newStatus]);

        $message = match ($newStatus) {
            'active' => 'Job is now active!',
            'inactive' => 'Job is now inactive!',
            'closed' => 'Job is now closed!',
        };

        return response()->json([
            'success' => true,
            'status' => $newStatus,
            'message' => $message,
        ]);
    }
}

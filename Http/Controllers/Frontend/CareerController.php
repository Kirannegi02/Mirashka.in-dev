<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::active();

        if ($request->has('department') && $request->department) {
            $query->where('department', $request->department);
        }

        if ($request->has('location') && $request->location) {
            $query->where('location', 'like', '%'.$request->location.'%');
        }

        if ($request->has('type') && $request->type) {
            $query->where('job_type', $request->type);
        }

        $jobs = $query->orderBy('created_at', 'desc')->paginate(3);
        $departments = Job::active()->distinct()->pluck('department')->sort()->values();
        $locations = Job::active()->distinct()->pluck('location')->sort()->values();

        return view('frontend.pages.careers', compact('jobs', 'departments', 'locations'));
    }

    public function show($slug)
    {
        $job = Job::where('slug', $slug)->firstOrFail();

        $relatedJobs = Job::active()
            ->where('id', '!=', $job->id)
            ->where(function ($query) use ($job) {
                $query->where('department', $job->department)
                    ->orWhere('location', $job->location);
            })
            ->limit(3)
            ->get();

        return view('frontend.pages.career-detail', compact('job', 'relatedJobs'));
    }

    public function apply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_id' => 'required|exists:career_jobs,id',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'nullable|string|max:2000',
        ], [
            'resume.mimes' => 'The resume must be a PDF, DOC, or DOCX file.',
            'resume.max' => 'The resume must not be larger than 2MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $job = Job::findOrFail($request->job_id);

        if (! $job->isOpen()) {
            return redirect()->back()
                ->with('error', 'This position is no longer accepting applications.');
        }

        $existingApplication = JobApplication::where('job_id', $request->job_id)
            ->where('email', $request->email)
            ->first();

        if ($existingApplication) {
            return redirect()->back()
                ->with('error', 'You have already applied for this position.');
        }

        $resumePath = null;
        if ($request->hasFile('resume') && $request->file('resume')->isValid()) {
            $file = $request->file('resume');
            $filename = Str::slug($request->name).'_'.time().'.'.$file->getClientOriginalExtension();
            $resumePath = $file->storeAs('resumes', $filename, 'public');
        }

        JobApplication::create([
            'job_id' => $request->job_id,
            'name' => strip_tags($request->name),
            'email' => strip_tags($request->email),
            'phone' => strip_tags($request->phone),
            'resume' => $filename ?? null,
            'cover_letter' => strip_tags($request->cover_letter),
            'status' => 'new',
        ]);

        return redirect()->route('careers.show', $job->slug)
            ->with('success', 'Your application has been submitted successfully! We will review your profile and get back to you soon.');
    }
}

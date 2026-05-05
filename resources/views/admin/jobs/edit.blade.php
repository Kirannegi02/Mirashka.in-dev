@extends('admin.layouts.app')

@section('title', 'Edit Job - ' . $job->title)

@section('content')
<h2>Edit Job</h2>
<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="support-ticket-system support-ticket-system--search">
                    <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between">
                        <div class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                            <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">Edit Job: {{ $job->title }}</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary btn-sm">
                                <i class="uil uil-arrow-left me-1"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="card border-0">
                            <div class="card-body">
                                <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Job Title *</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                                       id="title" name="title" value="{{ old('title', $job->title) }}" required>
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status *</label>
                                                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                                    <option value="active" {{ old('status', $job->status) == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="inactive" {{ old('status', $job->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    <option value="closed" {{ old('status', $job->status) == 'closed' ? 'selected' : '' }}>Closed</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="department" class="form-label">Department *</label>
                                                <input type="text" class="form-control @error('department') is-invalid @enderror" 
                                                       id="department" name="department" value="{{ old('department', $job->department) }}" required>
                                                @error('department')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="location" class="form-label">Location *</label>
                                                <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                                       id="location" name="location" value="{{ old('location', $job->location) }}" required>
                                                @error('location')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="job_type" class="form-label">Job Type *</label>
                                                <select class="form-select @error('job_type') is-invalid @enderror" id="job_type" name="job_type" required>
                                                    <option value="full-time" {{ old('job_type', $job->job_type) == 'full-time' ? 'selected' : '' }}>Full Time</option>
                                                    <option value="part-time" {{ old('job_type', $job->job_type) == 'part-time' ? 'selected' : '' }}>Part Time</option>
                                                    <option value="internship" {{ old('job_type', $job->job_type) == 'internship' ? 'selected' : '' }}>Internship</option>
                                                    <option value="contract" {{ old('job_type', $job->job_type) == 'contract' ? 'selected' : '' }}>Contract</option>
                                                </select>
                                                @error('job_type')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="experience" class="form-label">Experience</label>
                                                <input type="text" class="form-control @error('experience') is-invalid @enderror" 
                                                       id="experience" name="experience" value="{{ old('experience', $job->experience) }}" placeholder="e.g., 2-4 years">
                                                @error('experience')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="salary_range" class="form-label">Salary Range</label>
                                                <input type="text" class="form-control @error('salary_range') is-invalid @enderror" 
                                                       id="salary_range" name="salary_range" value="{{ old('salary_range', $job->salary_range) }}" placeholder="e.g., ₹8-12 LPA">
                                                @error('salary_range')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="last_date" class="form-label">Application Last Date</label>
                                                <input type="date" class="form-control @error('last_date') is-invalid @enderror" 
                                                       id="last_date" name="last_date" value="{{ old('last_date', $job->last_date?->format('Y-m-d')) }}">
                                                @error('last_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Job Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                                  id="description" name="description" rows="5">{{ old('description', $job->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="responsibilities" class="form-label">Responsibilities</label>
                                        <textarea class="form-control @error('responsibilities') is-invalid @enderror" 
                                                  id="responsibilities" name="responsibilities" rows="5">{{ old('responsibilities', $job->responsibilities) }}</textarea>
                                        @error('responsibilities')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="requirements" class="form-label">Requirements</label>
                                        <textarea class="form-control @error('requirements') is-invalid @enderror" 
                                                  id="requirements" name="requirements" rows="5">{{ old('requirements', $job->requirements) }}</textarea>
                                        @error('requirements')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="uil uil-save me-1"></i> Update Job
                                        </button>
                                        <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">
                                            <i class="uil uil-arrow-left me-1"></i> Back to List
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('responsibilities');
    CKEDITOR.replace('requirements');
</script>
@endpush

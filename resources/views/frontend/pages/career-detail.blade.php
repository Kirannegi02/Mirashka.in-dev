@extends('frontend.layouts.app')

@section('title', $job->title . ' - Careers')

@section('content')

<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            {{ $job->title }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('careers') }}">Careers</a></li>
                            <li class="active">{{ $job->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="job-detail-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(!$job->isOpen())
                    <div class="alert alert-warning">
                        <i class="fa fa-exclamation-triangle me-2"></i> This position is no longer accepting applications.
                    </div>
                @endif

                <div class="job-header bg_light_1 rounded_radius p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
                        <div>
                            <h2 class="mb-2">{{ $job->title }}</h2>
                            <div class="job-meta d-flex flex-wrap gap-3">
                                <span class="text-muted">
                                    <i class="fa fa-building me-1"></i> {{ $job->department }}
                                </span>
                                <span class="text-muted">
                                    <i class="fa fa-map-marker me-1"></i> {{ $job->location }}
                                </span>
                                <span class="badge bg-info">{{ $job->job_type_label }}</span>
                                @if($job->experience)
                                    <span class="text-muted">
                                        <i class="fa fa-briefcase me-1"></i> {{ $job->experience }}
                                    </span>
                                @endif
                            </div>
                            @if($job->salary_range)
                                <p class="text-success mt-2 mb-0">
                                    <i class="fa fa-inr me-1"></i> {{ $job->salary_range }}
                                </p>
                            @endif
                        </div>
                        @if($job->last_date)
                            <div class="text-end">
                                <p class="text-muted small mb-1">Application Deadline</p>
                                <strong class="text-danger">{{ $job->last_date->format('M d, Y') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                @if($job->description)
                <div class="job-content mb-4">
                    <h4 class="mb-3">Job Description</h4>
                    <div class="content-text">
                        {!! nl2br(e($job->description)) !!}
                    </div>
                </div>
                @endif

                @if($job->responsibilities)
                <div class="job-content mb-4">
                    <h4 class="mb-3">Key Responsibilities</h4>
                    <div class="content-text">
                        {!! nl2br(e($job->responsibilities)) !!}
                    </div>
                </div>
                @endif

                @if($job->requirements)
                <div class="job-content mb-4">
                    <h4 class="mb-3">Requirements</h4>
                    <div class="content-text">
                        {!! nl2br(e($job->requirements)) !!}
                    </div>
                </div>
                @endif

                @if($relatedJobs->count() > 0)
                <div class="related-jobs mt-5">
                    <h4 class="mb-4">Similar Opportunities</h4>
                    <div class="row">
                        @foreach($relatedJobs as $relatedJob)
                        <div class="col-md-6 mb-3">
                            <div class="related-job-card bg_light_1 rounded_radius p-3">
                                <h6 class="mb-2">
                                    <a href="{{ route('careers.show', $relatedJob->slug) }}" class="text-decoration-none">
                                        {{ $relatedJob->title }}
                                    </a>
                                </h6>
                                <div class="small text-muted">
                                    <span><i class="fa fa-map-marker me-1"></i> {{ $relatedJob->location }}</span>
                                    <span class="ms-2"><i class="fa fa-clock me-1"></i> {{ $relatedJob->job_type_label }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <div class="col-lg-4">
                <div class="apply-sidebar sticky-top" style="top: 20px;">
                    @if($job->isOpen())
                        <div class="apply-card bg_light_1 rounded_radius p-4">
                            <h4 class="mb-3">Apply for this Position</h4>
                            
                            <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0 ps-3">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required
                                           placeholder="Enter your full name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}" required
                                           placeholder="Enter your email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" value="{{ old('phone') }}"
                                           placeholder="Enter your phone number">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="resume" class="form-label">Resume *</label>
                                    <input type="file" class="form-control @error('resume') is-invalid @enderror" 
                                           id="resume" name="resume" required accept=".pdf,.doc,.docx">
                                    <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max 2MB)</small>
                                    @error('resume')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="cover_letter" class="form-label">Cover Letter</label>
                                    <textarea class="form-control @error('cover_letter') is-invalid @enderror" 
                                              id="cover_letter" name="cover_letter" rows="4"
                                              placeholder="Tell us why you're a great fit...">{{ old('cover_letter') }}</textarea>
                                    @error('cover_letter')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="theme-btn one w-100">
                                    <i class="fa fa-paper-plane me-2"></i> Submit Application
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="apply-card bg-light rounded_radius p-4 text-center">
                            <i class="fa fa-lock fa-3x text-muted mb-3"></i>
                            <h5>Position Closed</h5>
                            <p class="text-muted mb-0">This position is no longer accepting applications.</p>
                            <a href="{{ route('careers') }}" class="btn btn-outline-primary mt-3">
                                View Other Opportunities
                            </a>
                        </div>
                    @endif

                    <div class="contact-card bg_light_1 rounded_radius p-4 mt-4">
                        <h5 class="mb-3">Questions?</h5>
                        <p class="text-muted small mb-3">If you have any questions about this role, feel free to reach out.</p>
                        <a href="mailto:careers@elevateonemedia.com" class="btn btn-outline-secondary w-100">
                            <i class="fa fa-envelope me-2"></i> Contact HR Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd_top_80"></div>
</section>

@endsection

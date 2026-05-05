@extends('admin.layouts.app')

@section('title', 'Application Details - ' . $application->name)

@section('content')
<h2>Application Details</h2>
<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="support-ticket-system support-ticket-system--search">
                    <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between">
                        <div class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                            <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">Application Details</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                
                            <a href="{{ route('admin.applications.index') }}" class="btn btn-secondary btn-sm">
                                <i class="uil uil-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <h6 class="text-muted mb-2">Personal Information</h6>
                                                <p class="mb-1"><strong>Name:</strong> {{ $application->name }}</p>
                                                <p class="mb-1"><strong>Email:</strong> <a href="mailto:{{ $application->email }}">{{ $application->email }}</a></p>
                                                <p class="mb-1"><strong>Phone:</strong> {{ $application->phone ?? 'Not provided' }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted mb-2">Application Info</h6>
                                                <p class="mb-1"><strong>Job:</strong> <a href="{{ route('admin.jobs.edit', $application->job_id) }}">{{ $application->job->title }}</a></p>
                                                <p class="mb-1"><strong>Applied:</strong> {{ $application->created_at->format('M d, Y g:i A') }}</p>
                                                <p class="mb-1"><strong>Last Updated:</strong> {{ $application->updated_at->format('M d, Y g:i A') }}</p>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="mb-4">
                                            <h6 class="text-muted mb-2">Cover Letter</h6>
                                            <div class="p-3 bg-light rounded">
                                                {!! nl2br(e($application->cover_letter ?? 'No cover letter provided')) !!}
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card border-0 mb-3">
                                    <div class="card-body">
                                        <h6 class="mb-3">Update Status</h6>
                                        <form id="statusUpdateForm" action="{{ route('admin.applications.update-status', $application->id) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <select name="status" id="statusSelect" class="form-select @error('status') is-invalid @enderror">
                                                    <option value="new" {{ $application->status == 'new' ? 'selected' : '' }}>New</option>
                                                    <option value="reviewed" {{ $application->status == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                                                    <option value="shortlisted" {{ $application->status == 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                                                    <option value="selected" {{ $application->status == 'selected' ? 'selected' : '' }}>Selected</option>
                                                    <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">
                                                <i class="uil uil-save me-1"></i> Update Status
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="card border-0">
                                    <div class="card-body">
                                        <h6 class="mb-3">Quick Actions</h6>
                                        <button type="button" id="sendEmailBtn" class="btn btn-outline-primary btn-sm w-100 mb-2" data-id="{{ $application->id }}">
                                            <i class="uil uil-envelope me-1"></i> Send Status Email
                                        </button>
                                        <a href="{{ route('admin.applications.download', $application->id) }}" class="btn btn-outline-success btn-sm w-100 mb-2">
                                            <i class="uil uil-download me-1"></i> Download Resume
                                        </a>
                                        <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm w-100">
                                                <i class="uil uil-trash me-1"></i> Delete Application
                                            </button>
                                        </form>
                                    </div>
                                </div>
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
<script>
    $(document).ready(function() {
        $('#statusUpdateForm').on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const submitBtn = form.find('button[type="submit"]');
            const originalBtnText = submitBtn.html();
            
            submitBtn.prop('disabled', true).html('<i class="uil uil-spinner fa-spin"></i> Saving...');
            
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: form.serialize(),
                success: function(response) {
                    if (response.success) {
                        notify('success', response.message);
                        
                        const statusSelect = $('#statusSelect');
                        statusSelect.val(response.status);
                        
                        const statusBadge = $('.userDatatable-content-status');
                        statusBadge.removeClass('bg-primary bg-info bg-danger bg-success bg-secondary');
                        
                        const newClass = response.status === 'new' ? 'bg-primary' :
                                        response.status === 'reviewed' ? 'bg-info' :
                                        response.status === 'shortlisted' ? 'bg-success' : 'bg-danger';
                        statusBadge.addClass(newClass);
                        statusBadge.text(response.status.charAt(0).toUpperCase() + response.status.slice(1));
                    }
                },
                error: function() {
                    notify('error', 'Failed to update status. Please try again.');
                },
                complete: function() {
                    submitBtn.prop('disabled', false).html(originalBtnText);
                }
            });
        });
        
        // Send Email Button
        $('#sendEmailBtn').on('click', function() {
            const btn = $(this);
            const applicationId = btn.data('id');
            const originalText = btn.html();
            
            btn.prop('disabled', true).html('<i class="uil uil-spinner fa-spin"></i> Sending...');
            
            $.ajax({
                url: '{{ route("admin.applications.send-email", ":id") }}'.replace(':id', applicationId),
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        notify('success', response.message);
                    } else {
                        notify('error', response.message);
                    }
                },
                error: function(xhr) {
                    const message = xhr.responseJSON?.message || 'Failed to send email';
                    notify('error', message);
                },
                complete: function() {
                    btn.prop('disabled', false).html(originalText);
                }
            });
        });
    });
</script>
@endpush

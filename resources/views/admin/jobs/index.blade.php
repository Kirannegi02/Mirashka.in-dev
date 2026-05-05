@extends('admin.layouts.app')

@section('title', 'Job Listings')

@section('content')
<h2>Job Listings</h2>
<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="support-ticket-system support-ticket-system--search">
                    <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between">
                        <div class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                            <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">All Jobs</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary d-flex align-items-center gap-1 px-3">
                                <i class="las la-plus fs-5"></i> Add New Job
                            </a>
                        </div>
                    </div>
                    <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <form method="GET" action="{{ route('admin.jobs.index') }}">
                                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                        <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All Status</option>
                                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form method="GET" action="{{ route('admin.jobs.index') }}">
                                    <input type="text" name="search" class="form-control form-control-sm" 
                                           placeholder="Search jobs..." value="{{ request('search') }}">
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped table-hover datatable">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th><span class="userDatatable-title">Sr. No</span></th>
                                        <th><span class="userDatatable-title">Title</span></th>
                                        <th><span class="userDatatable-title">Department</span></th>
                                        <th><span class="userDatatable-title">Location</span></th>
                                        <th><span class="userDatatable-title">Type</span></th>
                                        <th><span class="userDatatable-title">Status</span></th>
                                        <th><span class="userDatatable-title">Applications</span></th>
                                        <th><span class="userDatatable-title">Last Date</span></th>
                                        <th class="actions"><span class="userDatatable-title">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($jobs as $job)
                                    <tr>
                                        <td>{{ $jobs->firstItem() + $loop->index }}</td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ $job->title }}</div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ $job->department }}</div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ $job->location }}</div>
                                        </td>
                                        <td>
                                            <span class="bg-opacity-info color-info userDatatable-content-status">{{ $job->job_type }}</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm toggle-status" 
                                                    data-job-id="{{ $job->id }}"
                                                    data-status="{{ $job->status }}">
                                                <span class="{{ $job->status_badge_class }} userDatatable-content-status">{{ ucfirst($job->status) }}</span>
                                            </button>
                                        </td>
                                        <td>
                                            <span class="bg-opacity-secondary color-secondary userDatatable-content-status">{{ $job->applications_count }}</span>
                                        </td>
                                        <td>
                                            @if($job->last_date)
                                                <div class="userDatatable-content--subject">{{ $job->last_date->format('M d, Y') }}</div>
                                            @else
                                                <span class="text-muted">Not set</span>
                                            @endif
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="{{ route('admin.jobs.edit', $job->id) }}" class="edit" title="Edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.applications.index') }}?job_id={{ $job->id }}" class="view" title="View Applications">
                                                        <i class="uil uil-users-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="remove border-0 bg-transparent p-0" title="Delete">
                                                            <i class="uil uil-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No jobs found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end pt-30">
                            {{ $jobs->withQueryString()->links('pagination::bootstrap-5') }}
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
        $('.toggle-status').on('click', function() {
            const jobId = $(this).data('job-id');
            const button = $(this);
            
            $.ajax({
                url: '/admin/jobs/' + jobId + '/toggle-status',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        const badge = button.find('.badge');
                        badge.removeClass('bg-success bg-warning bg-danger bg-secondary');
                        
                        if (response.status === 'active') {
                            badge.addClass('bg-success');
                        } else if (response.status === 'inactive') {
                            badge.addClass('bg-warning');
                        } else {
                            badge.addClass('bg-danger');
                        }
                        
                        badge.text(response.status.charAt(0).toUpperCase() + response.status.slice(1));
                        button.data('status', response.status);
                        
                        Swal.fire('Success', response.message, 'success');
                    }
                },
                error: function() {
                    Swal.fire('Error', 'Something went wrong!', 'error');
                }
            });
        });
    });
</script>
@endpush

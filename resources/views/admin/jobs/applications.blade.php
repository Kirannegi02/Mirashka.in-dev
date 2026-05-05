@extends('admin.layouts.app')

@section('title', 'Job Applications')

@section('content')
<h2>Job Applications</h2>
<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="support-ticket-system support-ticket-system--search">
                    <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between">
                        <div class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                            <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">All Applications</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="bg-opacity-primary color-primary userDatatable-content-status">{{ $applications->total() }} Total</span>
                        </div>
                    </div>
                    <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <form method="GET" action="{{ route('admin.applications.index') }}">
                                    <select name="job_id" class="form-select form-select-sm" onchange="this.form.submit()">
                                        <option value="all">All Jobs</option>
                                        @foreach($jobs as $job)
                                            <option value="{{ $job->id }}" {{ request('job_id') == $job->id ? 'selected' : '' }}>
                                                {{ $job->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <form method="GET" action="{{ route('admin.applications.index') }}">
                                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                        <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All Status</option>
                                        <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                                        <option value="reviewed" {{ request('status') == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                                        <option value="shortlisted" {{ request('status') == 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form method="GET" action="{{ route('admin.applications.index') }}">
                                    <input type="text" name="search" class="form-control form-control-sm" 
                                           placeholder="Search by name, email, phone..." value="{{ request('search') }}">
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped table-hover datatable">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th><span class="userDatatable-title">Sr. No</span></th>
                                        <th><span class="userDatatable-title">Candidate</span></th>
                                        <th><span class="userDatatable-title">Email</span></th>
                                        <th><span class="userDatatable-title">Phone</span></th>
                                        <th><span class="userDatatable-title">Job</span></th>
                                        <th><span class="userDatatable-title">Status</span></th>
                                        <th><span class="userDatatable-title">Applied</span></th>
                                        <th class="actions"><span class="userDatatable-title">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($applications as $application)
                                    <tr>
                                        <td>{{ $applications->firstItem() + $loop->index }}</td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ $application->name }}</div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ $application->email }}</div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ $application->phone ?? '-' }}</div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ Str::limit($application->job->title, 30) }}</div>
                                        </td>
                                        <td>
                                            <span class="{{ $application->status_badge_class }} userDatatable-content-status">{{ $application->status_label }}</span>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">{{ $application->created_at->format('M d, Y') }}</div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="{{ route('admin.applications.show', $application->id) }}" class="view" title="View">
                                                        <i class="uil uil-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.applications.download', $application->id) }}" class="view" title="Download Resume">
                                                        <i class="uil uil-download"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" class="delete-form">
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
                                        <td colspan="8" class="text-center">No applications found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end pt-30">
                            {{ $applications->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush

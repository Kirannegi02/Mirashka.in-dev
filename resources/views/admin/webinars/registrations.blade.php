@extends('admin.layouts.app')

@section('content')
    <h2>Webinar Registrations</h2>

    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-breadcrumb mb-4">
                        <div class="breadcrumb-main add-contact justify-content-between align-items-center flex-wrap">
                            <div class="d-flex align-items-center">
                                <a href="{{ route('admin.webinars.index') }}" class="btn btn-secondary btn-sm">
                                    <i class="uil uil-arrow-left"></i> Back to Webinars
                                </a>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 mb-30">
                    <div class="support-ticket-system support-ticket-system--search">
                        <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped table-hover datatable">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>Sr. No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Company</th>
                                            <th>Job Title</th>
                                            <th>Status</th>
                                            <th>Registered At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($registrations as $reg)
                                            <tr>
                                                <td>{{ $registrations->firstItem() + $loop->index }}</td>
                                                <td>{{ $reg->name }}</td>
                                                <td>{{ $reg->email }}</td>
                                                <td>{{ $reg->phone }}</td>
                                                <td>{{ $reg->company ?? '-' }}</td>
                                                <td>{{ $reg->job_title ?? '-' }}</td>
                                                <td>
                                                    @if($reg->status === 'registered')
                                                        <span class=" btnpawan bg-success">Registered</span>
                                                    @elseif($reg->status === 'attended')
                                                        <span class="btnpawan bg-primary">Attended</span>
                                                    @else
                                                        <span class="btnpawan bg-warning">No Show</span>
                                                    @endif
                                                </td>
                                                <td>{{ $reg->created_at->format('d M, Y h:i A') }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No registrations found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end pt-30">
                                {{ $registrations->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

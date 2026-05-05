@extends('admin.layouts.app')

@section('content')

<h2>Webinars List</h2>

<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-breadcrumb mb-4">
                    <div class="breadcrumb-main add-contact justify-content-between align-items-center flex-wrap">
                        <div class="d-flex align-items-center"></div>
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn btn-primary d-flex align-items-center gap-1 px-3"
                                onclick="openWebinarModal('add')">
                                <i class="las la-plus fs-5"></i> Add New
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Area -->
        <div class="row">
            <div class="col-12 mb-30">
                <div class="support-ticket-system support-ticket-system--search">
                    <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped table-hover datatable">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th><span class="userDatatable-title">Sr. No</span></th>
                                        <th><span class="userDatatable-title">Image</span></th>
                                        <th><span class="userDatatable-title">Title</span></th>
                                        <th><span class="userDatatable-title">Date</span></th>
                                        <th><span class="userDatatable-title">Time</span></th>
                                        <th><span class="userDatatable-title">Status</span></th>
                                        <th><span class="userDatatable-title">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($webinars as $node)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img class="rounded-circle wh-34"
                                                src="{{ imageUrl($node->image, 'admin_assets/img/tm1.png') }}"
                                                alt="{{ $node->title }}">
                                        </td>
                                        <td>{{ $node->title }}</td>
                                        <td>{{ \Carbon\Carbon::parse($node->start_date)->format('M d, Y') }}</td>
                                        <td>{{ $node->start_time ? \Carbon\Carbon::parse($node->start_time)->format('h:i A') : '' }}</td>
                                        <td>
                                            @if($node->status == 'upcoming')
                                            <span class="bg-opacity-success color-success userDatatable-content-status active">Upcoming</span>
                                            @elseif($node->status == 'completed' || $node->status == 'past')
                                            <span class="bg-opacity-primary color-primary userDatatable-content-status">Completed</span>
                                            @elseif($node->status == 'cancelled')
                                            <span class="bg-opacity-danger color-danger userDatatable-content-status">Cancelled</span>
                                            @endif
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="{{ route('admin.webinars.registrations', $node->id) }}" title="View Registrations">
                                                        <i class="uil uil-users-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" onclick='openWebinarModal("edit", @json($node))'>
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.webinars.destroy', $node->id) }}" method="POST" class="delete-form">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="remove border-0 bg-transparent p-0">
                                                            <i class="uil uil-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No webinars found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end pt-30">
                            {{ $webinars->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
#webinarModal .modal-dialog { max-height: 90vh; margin: 1.75rem auto; }
#webinarModal .modal-body { overflow-y: auto; max-height: calc(90vh - 120px); }
</style>

<!-- Webinar Modal -->
<div class="modal fade" id="webinarModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="webinarModalLabel">Add / Edit Webinar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="webinarForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" id="formMethod" value="POST">
                <div class="modal-body">

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Webinar Title *</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                            id="title">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image + Date -->
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Image *</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                            <small class="text-muted">Required for new webinars</small>
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div id="currentImage" class="mt-2"></div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Start Date *</label>
                            <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" 
                                id="start_date">
                            @error('start_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Start Time *</label>
                            <input type="time" name="start_time" class="form-control @error('start_time') is-invalid @enderror" 
                                id="start_time">
                            @error('start_time')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Duration + Timezone -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Duration</label>
                            <input type="text" name="duration" class="form-control" id="duration" 
                                placeholder="eg: 60 mins">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Timezone</label>
                            <select name="timezone" class="form-select @error('timezone') is-invalid @enderror" id="timezone">
                                <option value="">-- Select Timezone --</option>
                                <option value="Asia/Kolkata">Asia/Kolkata</option>
                                <option value="UTC">UTC</option>
                            </select>
                            @error('timezone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Meeting Link -->
                    <div class="mb-3">
                        <label class="form-label">Meeting Link (Zoom/Meet/Teams URL)</label>
                        <input type="url" name="meeting_link" class="form-control" id="meeting_link" 
                            placeholder="https://zoom.us/j/...">
                    </div>

                    <!-- Speaker + Host -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Speaker Name *</label>
                            <input type="text" name="speaker_name" class="form-control @error('speaker_name') is-invalid @enderror" 
                                id="speaker_name">
                            @error('speaker_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Speaker Designation</label>
                            <input type="text" name="speaker_designation" class="form-control" id="speaker_designation">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description *</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" 
                            rows="4" id="description"></textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Why Attend -->
                    <div class="mb-3">
                        <label class="form-label">Why Attend (one per line)</label>
                        <textarea name="why_attend_text" class="form-control" rows="3" id="why_attend_text" 
                            placeholder="Enter each point on a new line"></textarea>
                        <small class="text-muted">Enter each point on a new line</small>
                    </div>

                    <!-- Features -->
                    <div class="mb-3">
                        <label class="form-label">Key Features (one per line)</label>
                        <textarea name="features_text" class="form-control" rows="3" id="features_text" 
                            placeholder="Enter each point on a new line"></textarea>
                        <small class="text-muted">Enter each point on a new line</small>
                    </div>

                    <!-- What You Get -->
                    <div class="mb-3">
                        <label class="form-label">What You Will Get (one per line)</label>
                        <textarea name="what_you_get_text" class="form-control" rows="3" id="what_you_get_text" 
                            placeholder="Enter each point on a new line"></textarea>
                        <small class="text-muted">Enter each point on a new line</small>
                    </div>

                    <!-- Resources -->
                    <div class="mb-3">
                        <label class="form-label">Resources</label>
                        <input type="text" name="resources" class="form-control" id="resources">
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select @error('status') is-invalid @enderror" id="status">
                            <option value="upcoming">Upcoming</option>
                            <option value="past">Past</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="modalSubmitBtn">Save Webinar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function openWebinarModal(mode, webinar = null) {
    const form = document.getElementById('webinarForm');
    const submitBtn = document.getElementById('modalSubmitBtn');
    const formMethod = document.getElementById('formMethod');
    const modalLabel = document.getElementById('webinarModalLabel');

    // Clear old input values from form to prevent stale data
    form.querySelectorAll('input:not([type="hidden"]), textarea, select').forEach(el => {
        if (el.type === 'checkbox') {
            el.checked = false;
        } else if (el.type === 'radio') {
            el.checked = false;
        } else {
            el.value = '';
        }
    });

    // Reset form to clear any previous validation errors
    form.classList.remove('was-validated');
    form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));

    if (mode === 'add') {
        form.action = "{{ route('admin.webinars.store') }}";
        formMethod.value = "POST";
        submitBtn.innerText = "Add Webinar";
        modalLabel.innerText = "Add Webinar";
        
        document.getElementById('currentImage').innerHTML = "";
        
    } else if (mode === 'edit') {
        form.action = "{{ url('admin/webinars') }}/" + webinar.id;
        formMethod.value = "PUT";
        submitBtn.innerText = "Update Webinar";
        modalLabel.innerText = "Edit Webinar";

        // Fill fields with webinar data
        document.getElementById('title').value = webinar.title || '';
        document.getElementById('start_date').value = webinar.start_date || '';
        
        // Format time for HTML time input (HH:MM:SS -> HH:MM)
        const timeValue = webinar.start_time ? webinar.start_time.substring(0, 5) : '';
        document.getElementById('start_time').value = timeValue;
        
        document.getElementById('duration').value = webinar.duration || '';
        document.getElementById('timezone').value = webinar.timezone || '';
        document.getElementById('meeting_link').value = webinar.meeting_link || '';
        document.getElementById('speaker_name').value = webinar.speaker_name || '';
        document.getElementById('speaker_designation').value = webinar.speaker_designation || '';
        document.getElementById('description').value = webinar.description || '';
        document.getElementById('resources').value = webinar.resources || '';
        document.getElementById('status').value = webinar.status || 'upcoming';
        
        // JSON array fields to textarea
        document.getElementById('why_attend_text').value = webinar.why_attend && webinar.why_attend.length 
            ? webinar.why_attend.join('\n') : '';
        document.getElementById('features_text').value = webinar.features && webinar.features.length 
            ? webinar.features.join('\n') : '';
        document.getElementById('what_you_get_text').value = webinar.what_you_get && webinar.what_you_get.length 
            ? webinar.what_you_get.join('\n') : '';

        // Image preview
        if (webinar.image) {
            document.getElementById('currentImage').innerHTML = 
                `<img src="/assets/admin/image/webinar/${webinar.image}" width="100" class="img-thumbnail">`;
        } else {
            document.getElementById('currentImage').innerHTML = "";
        }
    }

    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('webinarModal'));
    modal.show();
}
</script>

@endsection

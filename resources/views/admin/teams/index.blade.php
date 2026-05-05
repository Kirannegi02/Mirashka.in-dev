@extends('admin.layouts.app')

@section('content')

    <h2>Team Members</h2>

    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-breadcrumb mb-4">
                        <div class="breadcrumb-main add-contact justify-content-between align-items-center flex-wrap">
                            <div class="d-flex align-items-center"></div>

                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-primary d-flex align-items-center gap-1 px-3"
                                    onclick="openTeamModal('add')">
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

                        <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between">
                            <div class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                <div
                                    class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                    <h4 class="text-capitalize fw-500 breadcrumb-title">Data Table</h4>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped table-hover datatable">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">Sr. No</span></th>
                                            <th><span class="userDatatable-title">Image</span></th>
                                            <th><span class="userDatatable-title">Name</span></th>
                                            <th><span class="userDatatable-title">Designation</span></th>
                                            <th><span class="userDatatable-title">CTA</span></th>
                                            <th><span class="userDatatable-title">Status</span></th>
                                            <th class="actions"><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse($teams as $team)
                                            <tr>

                                                <td>{{ $loop->iteration }}</td>

                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable-inline-title">
                                                            <img class="rounded-circle wh-34"
                                                                src="{{ imageUrl($team->image, 'admin_assets/img/tm1.png') }}">
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content--subject">
                                                        {{ $team->name }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content--subject">
                                                        {{ $team->designation }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content--subject">
                                                        @if($team->contact_cta_link)
                                                            <a href="{{ $team->contact_cta_link }}" target="_blank">Visit</a>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        @if($team->status)
                                                            <span
                                                                class="bg-opacity-success color-success userDatatable-content-status active">Active</span>
                                                        @else
                                                            <span
                                                                class="bg-opacity-danger color-danger userDatatable-content-status">Inactive</span>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                                        <!-- EDIT -->
                                                        <li>
                                                            <a href="javascript:void(0);" class="edit"
                                                                onclick='openTeamModal("edit", {!! $team->toJson() !!})'>
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>

                                                        <!-- DELETE -->
                                                        <li>
                                                        <form action="{{ route('admin.teams.destroy', $team->id) }}"
                                                            method="POST"
                                                            class="delete-form">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit"
                                                                class="remove border-0 bg-transparent p-0">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                        </li>

                                                    </ul>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No team members found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-end pt-30">
                                {{ $teams->links('pagination::bootstrap-5') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        /* Ensure modal scrolls when content is tall */
        #webinarModal .modal-dialog {
            max-height: 90vh;
            /* max 90% of viewport height */
            margin: 1.75rem auto;
            /* default Bootstrap margin */
        }

        #webinarModal .modal-body {
            overflow-y: auto;
            max-height: calc(90vh - 120px);
            /* subtract header+footer height */
        }
    </style>

    <div class="modal fade" id="teamModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add / Edit Team</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form id="teamForm" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">

                        <!-- BASIC -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name *</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Designation *</label>
                                <input type="text" name="designation" id="designation" class="form-control">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tagline</label>
                                <input type="text" name="short_tagline" id="short_tagline" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Contact Link</label>
                                <input type="text" name="contact_cta_link" id="contact_cta_link" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Person Image (370*370) px </label>
                                <input type="file" name="image" class="form-control">
                                <!-- FEATURED IMAGE -->
                                <div id="featuredPreview" class="mt-2"></div>

                            </div>
                        </div>

                        <!-- SOCIAL -->
                        <label class="form-label"> Social Links </label>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" name="facebook" class="form-control" placeholder="Facebook">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" name="instagram" class="form-control" placeholder="Instagram">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                            </div>
                        </div>

                        <!-- VISION -->
                        <label class="form-label"> Vision (370*370) px </label>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="file" name="vision_image" class="form-control">
                                <!-- VISION IMAGE -->
                                <div id="visionPreview" class="mt-2"></div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <textarea name="vision_content" class="form-control"
                                    placeholder="Vision Content"></textarea>
                            </div>
                        </div>

                        <!-- ACHIEVEMENTS -->
                        <label class="form-label">Achievements </label>

                        <div id="achievement-wrapper" class="mb-2"></div>

                        <button type="button" onclick="addAchievement()" class="btn btn-primary btn-sm mb-3">
                            + Add Achievement
                        </button>

                        <!-- GALLERY -->
                        <label class="form-label"> Gallery Image (500*500) px </label>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="file" name="gallery_images[]" multiple class="form-control">
                                <!-- GALLERY -->
                                <div id="galleryPreview" class="mt-2"></div>
                            </div>
                        </div>

                        <!-- STATUS -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Team</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        const BASE_IMAGE_PATH = "{{ url('assets/admin/image/team') }}";

        // =========================
        // ADD ACHIEVEMENT
        // =========================
        function addAchievement() {
            let html = `
                    <div class="row mb-3 achievement-item align-items-start">

                        <input type="hidden" name="achievement_id[]" value="">

                        <div class="col-md-4">
                            <input type="file" name="achievement_image[]" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <textarea name="achievement_content[]" class="form-control" placeholder="Content"></textarea>
                        </div>

                        <div class="col-md-2 text-end">
                            <button type="button" class="btn btn-danger btn-sm remove-achievement">X</button>
                        </div>

                    </div>
                    `;
            document.getElementById('achievement-wrapper').insertAdjacentHTML('beforeend', html);
        }

        // =========================
        // REMOVE ACHIEVEMENT
        // =========================
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-achievement')) {
                e.target.closest('.achievement-item').remove();
            }
        });


        // =========================
        // OPEN MODAL (ADD / EDIT)
        // =========================
        function openTeamModal(mode, team = null) {

            let form = document.getElementById('teamForm');

            let featuredPreview = document.getElementById('featuredPreview');
            let visionPreview = document.getElementById('visionPreview');
            let galleryPreview = document.getElementById('galleryPreview');

            // RESET
            if (featuredPreview) featuredPreview.innerHTML = '';
            if (visionPreview) visionPreview.innerHTML = '';
            if (galleryPreview) galleryPreview.innerHTML = '';

            document.getElementById('achievement-wrapper').innerHTML = '';

            // =========================
            // ADD MODE
            // =========================
            if (mode === 'add') {

                form.action = "{{ route('admin.teams.store') }}";
                form.reset();

                let method = form.querySelector('input[name="_method"]');
                if (method) method.remove();

            } else {

                // SAFETY CHECK
                if (!team) {
                    console.error('Team data missing');
                    return;
                }

                // =========================
                // EDIT MODE
                // =========================
                form.action = "{{ url('admin/teams') }}/" + team.id;

                let methodInput = form.querySelector('input[name="_method"]');

                if (!methodInput) {
                    methodInput = document.createElement('input');
                    methodInput.type = "hidden";
                    methodInput.name = "_method";
                    form.appendChild(methodInput);
                }

                methodInput.value = "PUT";

                // =========================
                // BASIC FIELDS
                // =========================
                let setVal = (id, value) => {
                    let el = document.getElementById(id);
                    if (el) el.value = value ?? '';
                };

                setVal('name', team.name);
                setVal('designation', team.designation);
                setVal('description', team.description);
                setVal('short_tagline', team.short_tagline);
                setVal('contact_cta_link', team.contact_cta_link);
                setVal('status', team.status ?? 1);

                // =========================
                // FEATURED IMAGE
                // =========================
                if (team.image && featuredPreview) {
                    featuredPreview.innerHTML =
                        `<img src="${BASE_IMAGE_PATH}/${team.image}" width="80" class="mt-2">`;
                }

                // =========================
                // SOCIAL LINKS
                // =========================
                if (team.social) {
                    let setSocial = (name, value) => {
                        let el = document.querySelector('[name="' + name + '"]');
                        if (el) el.value = value ?? '';
                    };

                    setSocial('facebook', team.social.facebook);
                    setSocial('instagram', team.social.instagram);
                    setSocial('linkedin', team.social.linkedin);
                    setSocial('twitter', team.social.twitter);
                }

                // =========================
                // VISION
                // =========================
                if (team.vision) {

                    let visionInput = document.querySelector('[name="vision_content"]');
                    if (visionInput) visionInput.value = team.vision.content ?? '';

                    if (team.vision.image && visionPreview) {
                        visionPreview.innerHTML =
                            `<img src="${BASE_IMAGE_PATH}/${team.vision.image}" width="80" class="mt-2">`;
                    }
                }

                // =========================
                // ACHIEVEMENTS
                // =========================
                if (team.achievements && Array.isArray(team.achievements)) {

                    team.achievements.forEach(function (item) {

                        let html = `
                                <div class="row mb-3 achievement-item align-items-start">

                                    <input type="hidden" name="achievement_id[]" value="${item.id}">

                                    <div class="col-md-4">
                                        <input type="file" name="achievement_image[]" class="form-control">
    ${item.image ? `<img src="${BASE_IMAGE_PATH}/${item.image}" width="60" class="mt-1">` : ''}
                                        </div>

                                    <div class="col-md-6">
                                        <textarea name="achievement_content[]" class="form-control">${item.content ?? ''}</textarea>
                                    </div>

                                    <div class="col-md-2 text-end">
                                        <button type="button" class="btn btn-danger btn-sm remove-achievement">X</button>
                                    </div>

                                </div>
                                `;

                        document.getElementById('achievement-wrapper').insertAdjacentHTML('beforeend', html);
                    });
                }

                // =========================
                // GALLERY (FIXED SAFE VERSION)
                // =========================
                if (team.galleries && Array.isArray(team.galleries) && galleryPreview) {

                    team.galleries.forEach(function (img) {

                        if (img && img.image) {

                            galleryPreview.innerHTML += `
                    <div style="position:relative; display:inline-block; margin:5px;">

                        <img src="${BASE_IMAGE_PATH}/${img.image}" width="70">

                        <!-- DELETE FLAG -->
                        <input type="hidden" name="existing_gallery_ids[]" value="${img.id}">

                        <!-- DELETE BUTTON -->
                        <button type="button" 
                            onclick="markGalleryDelete(this, ${img.id})"
                            style="position:absolute; top:0; right:0; background:red; color:#fff; border:none;">
                            X
                        </button>

                    </div>
                `;
                        }

                    });

                }
            }

            // =========================
            // OPEN MODAL (SAFE)
            // =========================
            let modalEl = document.getElementById('teamModal');
            if (modalEl) {
                new bootstrap.Modal(modalEl).show();
            } else {
                console.error('Modal not found');
            }
        }

        function markGalleryDelete(btn, id) {

            // hidden input create for delete
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'delete_gallery[]';
            input.value = id;

            document.getElementById('teamForm').appendChild(input);

            // remove UI
            btn.closest('div').remove();
        }

    </script>

@endsection
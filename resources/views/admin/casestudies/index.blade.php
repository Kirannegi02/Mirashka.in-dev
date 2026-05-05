@extends('admin.layouts.app')

@section('content')

<h2> Case Study</h2>

<div class="contents">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">

                <div class="contact-breadcrumb mb-4">
                    <div class="breadcrumb-main add-contact justify-content-between align-items-center flex-wrap">

                        <div></div>

                        <div class="d-flex align-items-center gap-2">

                            <button type="button"
                                class="btn btn-primary d-flex align-items-center gap-1 px-3"
                                onclick="openCaseStudyModal('add')">

                                <i class="las la-plus fs-5"></i> Add Case Study
                            </button>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- TABLE -->
        <div class="row">
            <div class="col-12 mb-30">

                <div class="support-ticket-system support-ticket-system--search">

                    <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between">
                        <div class="d-flex flex-wrap breadcrumb-main__wrapper">

                            <div class="d-flex align-items-center ticket__title me-md-25 mb-md-0 mb-20">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">
                                    Case Studies
                                </h4>
                            </div>

                        </div>
                    </div>


                    <div class="userDatatable mt-1">

                        <div class="table-responsive">

                            <table class="table mb-0 table-striped table-hover datatable">

                                <thead>

                                    <tr class="userDatatable-header">

                                        <th>Sr. No</th>

                                        <th>Image</th>

                                        <th>Title</th>

                                        <th>Client</th>

                                        <th>Industry</th>

                                        <th>Description</th>

                                        <th>Result</th>

                                        <th>Status</th>

                                        <th class="actions">Actions</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    @foreach($caseStudies as $index => $case)

                                    <tr>

                                        <td>{{ $index + 1 }}</td>


                                        <td>

                                            @if($case->featured_image)

                                            <img
                                                class="rounded wh-50"
                                                src="{{ imageUrl($case->featured_image) }}">

                                            @else

                                            <img
                                                class="rounded wh-50"
                                                src="{{ asset('admin_assets/img/default.png') }}">

                                            @endif
                                        </td>


                                        <td>{{Str::limit($case->title, 10) }}</td>

                                        <td>{{ $case->client_name }}</td>

                                        <td>{{ $case->industry }}</td>

                                        <td style="max-width:250px;">
                                            {{ Str::limit($case->short_description, 10) }}
                                        </td>

                                        <td>
                                            {{ Str::limit($case->results, 10) }}
                                        </td>




                                        <td>

                                            @if($case->status == 1)

                                            <span class="bg-opacity-success color-success userDatatable-content-status active">
                                                Active
                                            </span>

                                            @else

                                            <span class="bg-opacity-danger color-danger userDatatable-content-status disabled">
                                                Disabled
                                            </span>

                                            @endif



                                        </td>


                                        <td>

                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                                <a href="javascript:void(0)"
                                                    class="edit-case-study"
                                                    data-case='{{ $case->toJson() }}'>

                                                    <i class="uil uil-edit"></i>

                                                </a>


                                                <li>

                                                    <form
                                                        action="{{ route('admin.casestudies.destroy',$case->id) }}"
                                                        method="POST"
                                                        class="delete-form">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            type="submit"
                                                            class="remove border-0 bg-transparent p-0">

                                                            <i class="uil uil-trash-alt"></i>

                                                        </button>

                                                    </form>

                                                </li>

                                            </ul>

                                        </td>

                                    </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>


                        <div class="d-flex justify-content-end pt-30">
                            {{ $caseStudies->links('pagination::bootstrap-5') }}
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

<!-- Case Study Modal -->
<div class="modal fade" id="caseStudyModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="caseStudyModalLabel">Add / Edit Case Study</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="caseStudyForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="casestudy_id">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" name="client_name" class="form-control" id="client_name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Industry</label>
                            <input type="text" name="industry" class="form-control" id="industry">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Reach</label>
                            <input type="text" name="reach" class="form-control" id="reach">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Short Description</label>
                            <textarea name="short_description" class="form-control" rows="3" id="short_description"></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Challenge</label>
                            <textarea name="challenge" class="form-control" rows="3" id="challenge"></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Solution</label>
                            <textarea name="solution" class="form-control" rows="3" id="solution"></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Strategy</label>
                            <textarea name="strategy" class="form-control" rows="3" id="strategy"></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Results</label>
                            <textarea name="results" class="form-control" rows="3" id="results"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Impact Highlights</label>
                            <textarea name="impact_highlights" class="form-control" rows="3" id="impact_highlights"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Media Coverage</label>
                            <input type="text" name="media_coverage" class="form-control" id="media_coverage">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Featured Image (1200 × 800 px)</label>
                            <input type="file" name="featured_image" class="form-control" id="featured_image">
                            <div id="currentImage" class="mt-2"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Banner Image (1920 × 1080 px ) </label>
                            <input type="file" name="image_one" class="form-control">
                            <div id="currentImageOne" class="mt-2"></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Client Overview 1 (1296 × 864 px ) </label>
                            <input type="file" name="image_two" class="form-control">
                            <div id="currentImageTwo" class="mt-2"></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Client Overview 2 (883 × 588 px )</label>
                            <input type="file" name="image_three" class="form-control">
                            <div id="currentImageThree" class="mt-2"></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Challenge (883 × 588 px )</label>
                            <input type="file" name="image_four" class="form-control">
                            <div id="currentImageFour" class="mt-2"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status *</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="1">Active</option>
                                <option value="0">Disabled</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Gallery Images (Multiple - Max 2MB each)</label>
                            <input type="file" name="gallery_images[]" class="form-control" id="gallery_images" multiple accept="image/*">
                            <small class="text-muted">Select multiple images to upload</small>
                            <div id="galleryPreview" class="mt-2 d-flex flex-wrap gap-2"></div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="modalSubmitBtn">Save Case Study</button>
                </div>

            </form>

        </div>
    </div>
</div>


<script>
    // Handle edit button clicks
    document.querySelectorAll('.edit-case-study').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const caseData = JSON.parse(this.getAttribute('data-case'));
            openCaseStudyModal('edit', caseData);
        });
    });

    function openCaseStudyModal(mode, casestudy = null) {

        const form = document.getElementById('caseStudyForm');
        const submitBtn = document.getElementById('modalSubmitBtn');

        if (mode === 'add') {

            form.action = "{{ route('admin.casestudies.store') }}";

            submitBtn.innerText = "Add Case Study";

            form.reset();

            document.getElementById('currentImage').innerHTML = "";
            document.getElementById('currentImageOne').innerHTML = "";
            document.getElementById('currentImageTwo').innerHTML = "";
            document.getElementById('currentImageThree').innerHTML = "";
            document.getElementById('currentImageFour').innerHTML = "";

            document.getElementById('caseStudyModalLabel').innerText = "Add Case Study";

            const methodInput = form.querySelector('input[name="_method"]');

            if (methodInput) methodInput.remove();

        } else if (mode === 'edit') {

            form.action = "{{ url('admin/case-studies') }}/" + casestudy.id;

            submitBtn.innerText = "Update Case Study";

            if (!form.querySelector('input[name="_method"]')) {

                const methodInput = document.createElement('input');

                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';

                form.appendChild(methodInput);

            }

            document.getElementById('title').value = casestudy.title ?? '';
            document.getElementById('client_name').value = casestudy.client_name ?? '';
            document.getElementById('industry').value = casestudy.industry ?? '';
            document.getElementById('reach').value = casestudy.reach ?? '';
            document.getElementById('short_description').value = casestudy.short_description ?? '';
            document.getElementById('impact_highlights').value = casestudy.impact_highlights ?? '';
            document.getElementById('challenge').value = casestudy.challenge ?? '';
            document.getElementById('solution').value = casestudy.solution ?? '';
            document.getElementById('strategy').value = casestudy.strategy ?? '';
            document.getElementById('results').value = casestudy.results ?? '';
            document.getElementById('media_coverage').value = casestudy.media_coverage ?? '';
            document.getElementById('status').value = casestudy.status ?? 1;

            // Featured Image
            if (casestudy.featured_image) {
                document.getElementById('currentImage').innerHTML =
                    `<img src="/assets/admin/image/case-study/${casestudy.featured_image}" width="100">`;
            }

            // Image One
            if (casestudy.image_one) {
                document.getElementById('currentImageOne').innerHTML =
                    `<img src="/assets/admin/image/case-study/${casestudy.image_one}" width="100">`;
            }

            // Image Two
            if (casestudy.image_two) {
                document.getElementById('currentImageTwo').innerHTML =
                    `<img src="/assets/admin/image/case-study/${casestudy.image_two}" width="100">`;
            }

            // Image Three
            if (casestudy.image_three) {
                document.getElementById('currentImageThree').innerHTML =
                    `<img src="/assets/admin/image/case-study/${casestudy.image_three}" width="100">`;
            }

            // Image Four
            if (casestudy.image_four) {
                document.getElementById('currentImageFour').innerHTML =
                    `<img src="/assets/admin/image/case-study/${casestudy.image_four}" width="100">`;
            }

            // Gallery Images
            let galleryHtml = '';
            if (casestudy.media && casestudy.media.length > 0) {
                casestudy.media.forEach(function(media) {
                    galleryHtml += `
                        <div class="position-relative" style="display:inline-block;">
                            <img src="/assets/admin/image/case-study/media/${media.image}" width="80" class="me-2 mb-2 rounded">
                            <button type="button" class="btn btn-sm btn-danger position-absolute" style="top:0;right:0;" 
                                onclick="deleteGalleryImage(${media.id})">
                                <i class="uil uil-trash"></i>
                            </button>
                        </div>
                    `;
                });
            }
            document.getElementById('galleryPreview').innerHTML = galleryHtml;

            document.getElementById('caseStudyModalLabel').innerText = "Edit Case Study";

        }

        const modal = new bootstrap.Modal(document.getElementById('caseStudyModal'));

        modal.show();

    }

    function deleteGalleryImage(mediaId) {
        if (confirm('Are you sure you want to delete this image?')) {
            fetch(`/admin/case-studies/media/${mediaId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Failed to delete image');
                }
            })
            .catch(error => {
                alert('Error deleting image');
            });
        }
    }
</script>

@endsection
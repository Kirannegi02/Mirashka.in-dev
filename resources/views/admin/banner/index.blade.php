@extends('admin.layouts.app')

@section('content')

    <h2>Banners List</h2>

    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-breadcrumb mb-4">
                        <div class="breadcrumb-main add-contact justify-content-between align-items-center flex-wrap">
                            <div class="d-flex align-items-center">
                            </div>
                            <div class="d-flex align-items-center gap-2">

                                <button type="button" class="btn btn-primary d-flex align-items-center gap-1 px-3"
                                    data-bs-toggle="modal" data-bs-target="#webinarModal">
                                    <i class="las la-plus fs-5"></i> Add New
                                </button>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Area -->
            <div class="row">
                <div class="col-12 mb-30">
                    <div class="support-ticket-system support-ticket-system--search">

                        <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
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
                                            <th>
                                                <span class="userDatatable-title">Sr. No</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title"> Image</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Title</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Sub Heading</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Description </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title"> button Text</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title"> button link</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Status</span>
                                            </th>
                                            <th class="actions">
                                                <span class="userDatatable-title">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($banners as $index => $banner)
                                            <tr>
                                                <!-- Sr. No -->
                                                <td>{{ $index + 1 }}</td>

                                                <!-- Image -->
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable-inline-title">
                                                             @if($banner->image)
                                                                 <img class="rounded-circle wh-34"
                                                                     src="{{ imageUrl($banner->image) }}"
                                                                     alt="Banner Image">
                                                            @else
                                                                 <img class="rounded-circle wh-34"
                                                                     src="{{ asset('admin_assets/img/default.png') }}"
                                                                     alt="No Image">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Title -->
                                                <td>
                                                    <div class="userDatatable-content--subject">{{ $banner->title }}</div>
                                                </td>

                                                <!-- Sub Heading -->
                                                <td>
                                                    <div class="userDatatable-content--subject">{{ $banner->sub_heading }}</div>
                                                </td>

                                                <!-- Description -->
                                                <td>
                                                    <div class="userDatatable-content--priority">{{ $banner->description }}
                                                    </div>
                                                </td>

                                                <!-- Button Text -->
                                                <td>
                                                    <div class="userDatatable-content--priority">{{ $banner->button_text }}
                                                    </div>
                                                </td>

                                                <!-- Button Link -->
                                                <td>
                                                    <div class="userDatatable-content--priority">
                                                        @if($banner->button_link)
                                                            <a href="{{ $banner->button_link }}" target="_blank">Visit</a>
                                                        @endif
                                                    </div>
                                                </td>

                                                <!-- Status -->
                                                <td>
                                                    @if($banner->status == 'active')
                                                        <span
                                                            class="bg-opacity-success color-success userDatatable-content-status active">Active</span>
                                                    @else
                                                        <span
                                                            class="bg-opacity-danger color-danger userDatatable-content-status disabled">Disabled</span>
                                                    @endif
                                                </td>

                                                <!-- Actions -->
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <!-- Edit -->
                                                        <a href="javascript:void(0);" class="edit"
                                                            onclick='openBannerModal("edit", {!! $banner->toJson() !!})'>
                                                            <i class="uil uil-edit"></i>
                                                        </a>


                                                        <!-- Delete -->
                                                        <li>
                                                            <form action="{{ route('admin.banners.destroy', $banner->id) }}"
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
                                        @endforeach
                                    </tbody>


                                </table>
                            </div>
                            <div class="d-flex justify-content-end pt-30">
                                {{ $banners->links('pagination::bootstrap-5') }}
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

    <!-- Banner Modal -->
    <div class="modal fade" id="webinarModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="webinarModalLabel">Add / Edit Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form id="webinarForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="webinar_id" id="webinar_id"> <!-- for edit -->

                    <div class="modal-body">

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>

                        <!-- Sub Heading -->
                        <div class="mb-3">
                            <label class="form-label">Sub Heading</label>
                            <input type="text" name="sub_heading" class="form-control" id="sub_heading">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description *</label>
                            <textarea name="description" class="form-control" rows="4" id="description" required></textarea>
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <div id="currentImage" class="mt-2"></div>
                        </div>

                        <!-- Button Text -->
                        <div class="mb-3">
                            <label class="form-label">Button Text</label>
                            <input type="text" name="button_text" class="form-control" id="button_text">
                        </div>

                        <!-- Button Link -->
                        <div class="mb-3">
                            <label class="form-label">Button Link</label>
                            <input type="text" name="button_link" class="form-control" id="button_link">
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label">Status *</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="active">Active</option>
                                <option value="disabled">Disabled</option>
                            </select>
                        </div>

                    </div> <!-- modal-body -->

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="modalSubmitBtn">Save Banner</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script>
        function openBannerModal(mode, banner = null) {
            const form = document.getElementById('webinarForm');
            const submitBtn = document.getElementById('modalSubmitBtn');

            if (mode === 'add') {
                form.action = "{{ route('admin.banners.store') }}";
                form.method = "POST";
                submitBtn.innerText = "Add Banner";
                form.reset();
                document.getElementById('currentImage').innerHTML = "";
                document.getElementById('webinarModalLabel').innerText = "Add Banner";

                const methodInput = form.querySelector('input[name="_method"]');
                if (methodInput) methodInput.remove();

            } else if (mode === 'edit') {
                form.action = "{{ url('admin/banners') }}/" + banner.id;
                form.method = "POST";
                submitBtn.innerText = "Update Banner";

                if (!form.querySelector('input[name="_method"]')) {
                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'PUT';
                    form.appendChild(methodInput);
                }

                document.getElementById('webinar_id').value = banner.id;
                document.getElementById('title').value = banner.title;
                document.getElementById('sub_heading').value = banner.sub_heading ?? '';
                document.getElementById('description').value = banner.description ?? '';
                document.getElementById('button_text').value = banner.button_text ?? '';
                document.getElementById('button_link').value = banner.button_link ?? '';
                document.getElementById('status').value = banner.status ?? 'active';

                if (banner.image) {
                    document.getElementById('currentImage').innerHTML =
                        `<img src="/assets/admin/image/banner/${banner.image}" width="100">`;
                } else {
                    document.getElementById('currentImage').innerHTML = "";
                }

                document.getElementById('webinarModalLabel').innerText = "Edit Banner";
            }

            const modal = new bootstrap.Modal(document.getElementById('webinarModal'));
            modal.show();
        }
    </script>




@endsection
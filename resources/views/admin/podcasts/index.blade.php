@extends('admin.layouts.app')
@section('content')
   <h2>podcast List</h2>
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
                           data-bs-toggle="modal" data-bs-target="#podcastModal">
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
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
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
                                    <span class="userDatatable-title">Image</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">Podcast Title</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">Publish Date</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">Audio</span>
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
                              @forelse($podcasts as $node)
                                                      <tr>
                                                         <!-- Sr No -->
                                                         <td>{{ $loop->iteration }}</td>
                                                         <!-- Image -->
                                                          <td>
                                                             <img class="rounded-circle wh-34" src="{{ imageUrl($node->image, 'admin_assets/img/tm1.png') }}" alt="{{ $node->tittle }}">
                                                          </td>
                                                         <!-- Podcast Title -->
                                                         <td>
                                                            <div class="userDatatable-content--subject">
                                                               {{ $node->tittle }}
                                                            </div>
                                                         </td>
                                                         <!-- Publish Date -->
                                                         <td>
                                                            <div class="userDatatable-content--subject">
                                                               {{ \Carbon\Carbon::parse($node->publish_date)->format('M d, Y') }}
                                                            </div>
                                                         </td>
                                                         <!-- Audio -->
                                                         <td>
                                                            @if($node->audio)
                                                               <audio controls style="width:120px">
                                                                  <source src="{{ asset('assets/admin/audio/podcast/' . $node->audio) }}">
                                                               </audio>
                                                            @else
                                                               N/A
                                                            @endif
                                                         </td>
                                                         <td>
                                                            @if($node->status == 'active')
                                                               <span class="bg-opacity-success color-success userDatatable-content-status active">
                                                                  Active
                                                               </span>
                                                            @else
                                                               <span class="bg-opacity-danger color-danger userDatatable-content-status">
                                                                  Disabled
                                                               </span>
                                                            @endif
                                                         </td>
                                                         <!-- Actions -->
                                                         <td>
                                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                               <!-- EDIT -->
                                                               <li>
                                                                  <a href="javascript:void(0);" class="edit"
                                                                     onclick="editPodcast({{ $node->id }})">
                                                                     <i class="uil uil-edit"></i>
                                                                  </a>
                                                               </li>
                                                               <!-- DELETE -->
                                                               <li>
                                                                   <form action="{{ route('admin.podcasts.destroy', $node->id) }}" method="POST"
                                                                       class="delete-form">
                                                                      @csrf
                                                                      @method('DELETE')
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
                                    <td colspan="7" class="text-center">No podcast found.</td>
                                 </tr>
                              @endforelse
                           </tbody>
                        </table>
                     </div>
                      <div class="d-flex justify-content-end pt-30">
                         {{ $podcasts->links('pagination::bootstrap-5') }}
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <style>
      /* Ensure modal scrolls when content is tall */
      #podcastModal .modal-dialog {
         max-height: 90vh;
         /* max 90% of viewport height */
         margin: 1.75rem auto;
         /* default Bootstrap margin */
      }

      #podcastModal .modal-body {
         overflow-y: auto;
         max-height: calc(90vh - 120px);
         /* subtract header+footer height */
      }
   </style>
   <!-- Podcast Modal -->
   <div class="modal fade" id="podcastModal" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="podcastModalLabel">Add Podcast</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="podcastForm" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="modal-body">
                  <!-- Title -->
                  <div class="mb-3">
                     <label class="form-label">Podcast Title *</label>
                     <input type="text" name="tittle" id="title" class="form-control" required>
                  </div>
                  <!-- Image -->
                  <div class="mb-3">
                     <label class="form-label">Image *</label>
                     <input type="file" name="image" id="image" class="form-control">
                     <div id="currentImage" class="mt-2"></div>
                  </div>
                  <!-- Audio -->
                  <div class="mb-3">
                     <label class="form-label">Audio File *</label>
                     <input type="file" name="audio" id="audio" class="form-control">
                     <div id="currentAudio" class="mt-2"></div>
                  </div>
                  <!-- Publish Date -->
                  <div class="mb-3">
                     <label class="form-label">Publish Date *</label>
                     <input type="date" name="publish_date" id="publish_date" class="form-control" required>
                  </div>
                  <!-- Description -->
                  <div class="mb-3">
                     <label class="form-label">Description</label>
                     <textarea name="description" id="description" rows="4" class="form-control"></textarea>
                  </div>
                  <!-- Status -->
                  <div class="mb-3">
                     <label class="form-label">Status *</label>
                     <select name="status" id="status" class="form-select" required>
                        <option value="active">Active</option>
                        <option value="disabled">Disabled</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" id="modalSubmitBtn">
                     Save Podcast
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      const PODCAST_IMAGE_PATH = "{{ url('assets/admin/image/podcast') }}";
      const PODCAST_AUDIO_PATH = "{{ url('assets/admin/audio/podcast') }}";
      function openPodcastModal(mode, podcast = null) {

         const form = document.getElementById('podcastForm');
         const submitBtn = document.getElementById('modalSubmitBtn');

         if (mode === 'add') {

            form.action = "{{ route('admin.podcasts.store') }}";
            submitBtn.innerText = "Add Podcast";
            form.reset();

            document.getElementById('currentImage').innerHTML = "";
            document.getElementById('currentAudio').innerHTML = "";
            document.getElementById('podcastModalLabel').innerText = "Add Podcast";

            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) methodInput.remove();

         } else {

            form.action = "{{ url('admin/podcasts') }}/" + podcast.id;
            submitBtn.innerText = "Update Podcast";

            if (!form.querySelector('input[name="_method"]')) {
               const input = document.createElement('input');
               input.type = "hidden";
               input.name = "_method";
               input.value = "PUT";
               form.appendChild(input);
            }

            document.getElementById('title').value = podcast.tittle;
            document.getElementById('publish_date').value = podcast.publish_date;
            document.getElementById('description').value = podcast.description ?? '';
            document.getElementById('status').value = podcast.status ?? 'active';


            if (podcast.image) {
               document.getElementById('currentImage').innerHTML =
                  `<img src="${PODCAST_IMAGE_PATH}/${podcast.image}" width="100">`;
            }

            if (podcast.audio) {
               document.getElementById('currentAudio').innerHTML =
                  `<audio controls src="${PODCAST_AUDIO_PATH}/${podcast.audio}" style="width:200px"></audio>`;
            }
            document.getElementById('podcastModalLabel').innerText = "Edit Podcast";
         }

         new bootstrap.Modal(document.getElementById('podcastModal')).show();
      }
      function editPodcast(id) {

         fetch("{{ url('admin/podcasts') }}/" + id + "/edit")
            .then(res => res.json())
            .then(podcast => {
               openPodcastModal('edit', podcast);
            });

      }
   </script>
@endsection
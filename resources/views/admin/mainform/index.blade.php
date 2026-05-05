@extends('admin.layouts.app')
@section('content')
<h2>Contact Form Submissions</h2>
<div class="contents">
   <div class="container-fluid">
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
                              <th><span class="userDatatable-title">Sr. No</span></th>
                              <th><span class="userDatatable-title">Name</span></th>
                              <th><span class="userDatatable-title">Email</span></th>
                              <th><span class="userDatatable-title">Phone</span></th>
                              <th><span class="userDatatable-title">Company</span></th>
                              <th><span class="userDatatable-title">Email Status</span></th>
                              <th><span class="userDatatable-title">Submitted Date</span></th>
                              <th class="actions"><span class="userDatatable-title">Actions</span></th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse($contact_forms as $contact)
                           <tr>
                              <td>{{ $contact_forms->firstItem() + $loop->index }}</td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $contact->name }}</div>
                              </td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $contact->email }}</div>
                              </td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $contact->phone }}</div>
                              </td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $contact->company_name ?? '—' }}</div>
                              </td>
                              <td>
                                 @if($contact->email_status === 'sent')
                                    <span class="bg-opacity-success color-success userDatatable-content-status active">Sent</span>
                                 @elseif($contact->email_status === 'failed')
                                    <div class="d-flex align-items-center gap-1">
                                       <span class="bg-opacity-danger color-danger userDatatable-content-status">Failed</span>
                                       <form action="{{ route('admin.mainform.retry-email', $contact->id) }}" method="POST" style="display:inline;">
                                          @csrf
                                          <button type="submit" class="btn btn-sm " title="Retry Email">
                                             <i class="uil uil-redo"></i>
                                          </button>
                                       </form>
                                    </div>
                                    @if($contact->email_last_error)
                                      
                                    @endif
                                 @elseif($contact->email_status === 'retrying')
                                    <span class="bg-opacity-primary color-primary userDatatable-content-status">Retrying</span>
                                 @else
                                    <span class="bg-opacity-warning color-warning userDatatable-content-status">Pending</span>
                                 @endif
                              </td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $contact->created_at->format('M d, Y') }}</div>
                              </td>
                              <td>
                                 <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                    <li>
                                       <a href="javascript:void(0);" class="view" onclick='viewContact(@json($contact))'>
                                          <i class="uil uil-eye"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                           @empty
                           <tr>
                              <td colspan="8" class="text-center">No contact form found.</td>
                           </tr>
                           @endforelse
                        </tbody>
                     </table>
                  </div>
                  <div class="d-flex justify-content-end pt-30">
                     {{ $contact_forms->links('pagination::bootstrap-5') }}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="contactViewModal" tabindex="-1">
   <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Contact Form Details</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
         </div>
         <div class="modal-body">
            <div class="row g-3">
               <div class="col-md-6">
                  <strong>Name:</strong>
                  <div id="v_name"></div>
               </div>
               <div class="col-md-6">
                  <strong>Email:</strong>
                  <div id="v_email"></div>
               </div>
               <div class="col-md-6">
                  <strong>Phone:</strong>
                  <div id="v_phone"></div>
               </div>
               <div class="col-md-6">
                  <strong>Company:</strong>
                  <div id="v_company"></div>
               </div>
               <div class="col-12">
                  <strong>Message:</strong>
                  <div class="border rounded p-2 mt-1" id="v_message"></div>
               </div>
               <div class="col-12 text-muted">
                  Submitted on: <span id="v_date"></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function viewContact(contact){
       document.getElementById('v_name').innerText = contact.name;
       document.getElementById('v_email').innerText = contact.email;
       document.getElementById('v_phone').innerText = contact.phone;
       document.getElementById('v_company').innerText = contact.company_name ?? '—';
       document.getElementById('v_message').innerText = contact.message;
       document.getElementById('v_date').innerText = new Date(contact.created_at).toLocaleString();
       new bootstrap.Modal(document.getElementById('contactViewModal')).show();
   }
</script>
@endsection

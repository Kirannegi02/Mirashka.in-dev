@extends('admin.layouts.app')
@section('content')
<h2>User Management</h2>
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 mb-30">
            <div class="support-ticket-system support-ticket-system--search">
               <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                  <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                     <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                        <h4 class="text-capitalize fw-500 breadcrumb-title">All Users</h4>
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
                              <th><span class="userDatatable-title">Role</span></th>
                              <th><span class="userDatatable-title">Status</span></th>
                           
                              <th><span class="userDatatable-title">Joined</span></th>
                              <th class="actions"><span class="userDatatable-title">Actions</span></th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse($users as $user)
                           <tr>
                              <td>{{ $users->firstItem() + $loop->index }}</td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $user->name }}</div>
                                 <div class="userDatatable-content--email text-muted">{{ $user->username }}</div>
                              </td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $user->email }}</div>
                              </td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $user->phone ?? '—' }}</div>
                              </td>
                              <td>
                                 <div class="userDatatable-content--subject">{{ $user->company_name ?? '—' }}</div>
                              </td>
                              <td>
                                 @if($user->role_id == 1)
                                    <span class="bg-opacity-primary color-primary userDatatable-content-status">Admin</span>
                                 @else
                                    <span class="bg-opacity-secondary color-secondary userDatatable-content-status">User</span>
                                 @endif
                              </td>
                              <td>
                                 @if($user->status === 'approved')
                                    <span class="bg-opacity-success color-success userDatatable-content-status active">Approved</span>
                                 @elseif($user->status === 'pending')
                                    <span class="bg-opacity-warning color-warning userDatatable-content-status">Pending</span>
                                 @elseif($user->status === 'suspended')
                                    <span class="bg-opacity-danger color-danger userDatatable-content-status">Suspended</span>
                                 @else
                                    <span class="bg-opacity-secondary color-secondary userDatatable-content-status">{{ $user->status }}</span>
                                 @endif
                              </td>
                              
                              <td>
                                 <div class="userDatatable-content--subject">{{ $user->created_at->format('M d, Y') }}</div>
                              </td>
                               <td>
                                  <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                     <li>
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="view" title="View">
                                           <i class="uil uil-eye"></i>
                                        </a>
                                     </li>
                                     @if($user->is_active)
                                     <li>
                                         <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="delete-form">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-sm text-danger delete-form" title="Delete User">
                                              <i class="uil uil-trash"></i>
                                           </button>
                                        </form>
                                     </li>
                                     @endif
                                  </ul>
                               </td>
                           </tr>
                           @empty
                           <tr>
                              <td colspan="10" class="text-center">No users found.</td>
                           </tr>
                           @endforelse
                        </tbody>
                     </table>
                  </div>
                  <div class="d-flex justify-content-end pt-30">
                     {{ $users->links('pagination::bootstrap-5') }}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

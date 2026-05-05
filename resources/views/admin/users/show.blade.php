@extends('admin.layouts.app')
@section('content')
<h2>User Details</h2>
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="card mb-30">
               <div class="card-header">
                  <h4 class="mb-0">{{ $user->name }}</h4>
               </div>
               <div class="card-body">
                  <div class="row g-3">
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Email</label>
                           <div>{{ $user->email }}</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Username</label>
                           <div>{{ $user->username }}</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Phone</label>
                           <div>{{ $user->phone ?? '—' }}</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Company</label>
                           <div>{{ $user->company_name ?? '—' }}</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Role</label>
                           <div>
                              @if($user->role_id == 1)
                                 <span class="badge bg-primary">Admin</span>
                              @else
                                 <span class="badge bg-secondary">User</span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Status</label>
                           <div>
                              @if($user->status === 'approved')
                                 <span class="badge bg-success">Approved</span>
                              @elseif($user->status === 'pending')
                                 <span class="badge bg-warning">Pending</span>
                              @elseif($user->status === 'suspended')
                                 <span class="badge bg-danger">Suspended</span>
                              @else
                                 <span class="badge bg-secondary">{{ $user->status }}</span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Active</label>
                           <div>
                              @if($user->is_active)
                                 <span class="badge bg-success">Active</span>
                              @else
                                 <span class="badge bg-danger">Inactive</span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Industry</label>
                           <div>{{ $user->industry ?? '—' }}</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Approved At</label>
                           <div>{{ $user->approved_at ? $user->approved_at->format('M d, Y h:i A') : '—' }}</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Last Login</label>
                           <div>{{ $user->last_login_at ? $user->last_login_at->format('M d, Y h:i A') : 'Never' }}</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label fw-bold">Joined</label>
                           <div>{{ $user->created_at->format('M d, Y h:i A') }}</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <div class="d-flex gap-2">
                     @if($user->is_active)
                        <form action="{{ route('admin.users.revoke', $user->id) }}" method="POST">
                           @csrf
                           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to revoke access?')">
                              <i class="uil uil-ban"></i> Revoke Access
                           </button>
                        </form>
                     @else
                        <form action="{{ route('admin.users.activate', $user->id) }}" method="POST">
                           @csrf
                           <button type="submit" class="btn btn-success">
                              <i class="uil uil-check"></i> Activate User
                           </button>
                        </form>
                     @endif
                      <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="delete-form">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-outline-danger">
                            <i class="uil uil-trash"></i> Delete User
                         </button>
                      </form>
                     <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
                        <i class="uil uil-arrow-left"></i> Back to Users
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

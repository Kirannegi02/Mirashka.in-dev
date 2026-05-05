@extends('user.layouts.app')

@section('content')
    <div class="welcome-banner">
        <h2>Welcome back, {{ $user->name }}!</h2>
        <p class="mb-0">Access your webinars, case studies, and exclusive content from your personalized dashboard.</p>
    </div>
    
 
@endsection

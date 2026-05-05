{{-- Global Notification System - Flash Messages --}}
{{-- Usage: Include this in layouts to auto-display session flash messages --}}

@php
    $flashMessages = [];
    
    if (session('success'))
        $flashMessages[] = ['type' => 'success', 'message' => strip_tags(session('success'))];
    
    if (session('error'))
        $flashMessages[] = ['type' => 'error', 'message' => strip_tags(session('error'))];
    
    if (session('warning'))
        $flashMessages[] = ['type' => 'warning', 'message' => strip_tags(session('warning'))];
    
    if (session('info'))
        $flashMessages[] = ['type' => 'info', 'message' => strip_tags(session('info'))];
    
    if (session('errors') && session('errors')->any())
        $flashMessages[] = ['type' => 'error', 'message' => strip_tags(session('errors')->first())];
@endphp

@foreach($flashMessages as $flash)
<div class="js-flash-message" 
     data-type="{{ $flash['type'] }}" 
     data-message="{{ e($flash['message']) }}" 
     style="display:none;"></div>
@endforeach

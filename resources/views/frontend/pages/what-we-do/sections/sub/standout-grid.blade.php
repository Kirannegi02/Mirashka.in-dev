@php
    $section = $service['standout'] ?? null;
@endphp
@if(!empty($section))
    @include('frontend.pages.what-we-do.sections.dashboard-standout', ['section' => $section])
@endif

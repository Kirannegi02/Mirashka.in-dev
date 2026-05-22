@php
    $imageLeft = $section['image_left'] ?? true;
    $listTitle = $section['list_title'] ?? $section['title'];
    $theme = $theme ?? 'light';
    $isDark = $theme === 'dark';
@endphp

<section class="content-section why-mirashka-block {{ $isDark ? 'why-mirashka-section--dark bg_dark_3' : 'bg_light_1' }}" id="{{ $section['id'] }}">
    <div class="pd_top_90"></div>
    <div class="container">
        <div class="row gutter_15px align-items-center">
            @if($imageLeft)
                <div class="col-xl-6 col-lg-12 mb-5 mb-xl-0">
                    @include('frontend.layouts.common.sections.why-mirashka-image', ['section' => $section])
                </div>
                <div class="col-xl-6 col-lg-12 pd_left_35">
                    @include('frontend.layouts.common.sections.why-mirashka-content', ['section' => $section, 'listTitle' => $listTitle, 'isDark' => $isDark])
                </div>
            @else
                <div class="col-xl-6 col-lg-12 pd_right_35 order-lg-1 order-2">
                    @include('frontend.layouts.common.sections.why-mirashka-content', ['section' => $section, 'listTitle' => $listTitle, 'isDark' => $isDark])
                </div>
                <div class="col-xl-6 col-lg-12 mb-5 mb-xl-0 order-lg-2 order-1">
                    @include('frontend.layouts.common.sections.why-mirashka-image', ['section' => $section])
                </div>
            @endif
        </div>
    </div>
    <div class="pd_bottom_90"></div>
</section>

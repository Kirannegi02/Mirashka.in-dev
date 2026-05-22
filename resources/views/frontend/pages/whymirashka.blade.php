@extends('frontend.layouts.app')

@php
    $page = config('why_mirashka');
    $hero = $page['hero'];
    $hraas = $page['hraas'];
    $taglines = $page['taglines'];
@endphp

@section('content')

<style>
    .why-mirashka-hero.single_banner.style_one .slider_content h1 {
        font-size: 38px;
        line-height: 50px;
        font-weight: 800;
        margin-bottom: 20px;
    }
    .why-mirashka-hero.single_banner.style_one {
        padding-top: 50px;
    }
    .why-mirashka-hero.custom_black_overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.75);
        z-index: 0;
    }
    .why-mirashka-hero .container {
        position: relative;
        z-index: 1;
    }
    .why-mirashka-hero .theme-btn.two {
        color: #fff;
        border-color: #fff;
    }
    .why-mirashka-hero .theme-btn.two:hover {
        background: #fff;
        color: #006039;
        border-color: #fff;
    }
    /* Dark taglines band */
    .why-mirashka-taglines-band {
        padding: 44px 0 40px;
        background: linear-gradient(160deg, #0d1612 0%, #1a2332 45%, #122820 100%);
    }
    .why-mirashka-taglines-band__label {
        display: inline-block;
        font-size: 12px;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: #7dcea8;
        font-weight: 600;
        margin-bottom: 6px;
    }
    .why-mirashka-taglines-band__heading {
        color: #fff;
        font-size: 1.4rem;
        font-weight: 700;
        line-height: 1.35;
        margin: 0 0 24px;
    }
    .why-mirashka-taglines-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
        align-items: stretch;
    }
    .why-mirashka-taglines-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 18px 16px;
        min-height: 96px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(125, 206, 168, 0.22);
        border-left: 3px solid #006039;
        border-radius: 8px;
        transition: background 0.2s ease, border-color 0.2s ease;
    }
    .why-mirashka-taglines-item:hover {
        background: rgba(0, 96, 57, 0.2);
        border-color: rgba(125, 206, 168, 0.45);
    }
    .why-mirashka-taglines-item__num {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        line-height: 36px;
        text-align: center;
        font-size: 14px;
        font-weight: 800;
        color: #fff;
        background: #006039;
        border-radius: 6px;
    }
    .why-mirashka-taglines-item p {
        margin: 0;
        font-size: 0.95rem;
        font-weight: 500;
        line-height: 1.45;
        color: rgba(255, 255, 255, 0.92);
    }
    .why-mirashka-taglines-band__cta {
        margin-top: 22px;
    }
    @media (max-width: 991px) {
        .why-mirashka-taglines-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 575px) {
        .why-mirashka-taglines-grid {
            grid-template-columns: 1fr;
        }
        .why-mirashka-taglines-band {
            padding: 36px 0 32px;
        }
    }
    .why-mirashka-hraas-grid > [class*="col-"] {
        display: flex;
    }
    .why-mirashka-hraas-section .project_box.style_two {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        margin-bottom: 0;
    }
    .why-mirashka-hraas-section .project_box.style_two .entry-thumbnail.image {
        flex-shrink: 0;
    }
    .why-mirashka-hraas-section .project_box.style_two .image img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }
    .why-mirashka-hraas-section .project_box.style_two .content_inner {
        flex: 1;
        display: flex;
        flex-direction: column;
        height: 180px;
        min-height: 180px;
        margin-top: -25px;
    }
    .why-mirashka-hraas-section .project_box.style_two .content_inner h2 {
        margin-bottom: 8px;
    }
    .why-mirashka-hraas-section .project_box.style_two .content_inner h2 a {
        font-size: 18px;
        line-height: 1.35;
        color: #192437;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .why-mirashka-hraas-section .project_box.style_two .content_inner .meta_value {
        flex: 1;
        font-size: 14px;
        line-height: 1.55;
        color: #475569;
        margin: 0;
    }
    .why-mirashka-hraas-section .stteps {
        position: absolute;
        top: 0;
        right: -15px;
        background: #006039;
        padding: 5px 18px;
        border-radius: 7px;
        color: #fff;
        font-weight: 800;
        border-bottom: 1px solid #fff;
        font-size: 18px;
        z-index: 2;
    }
    .why-mirashka-hraas-section .entry-thumbnail.image {
        overflow: visible !important;
    }
    .why-mirashka-hraas-section .title_sections {
        position: relative;
    }
    .why-mirashka-hraas-section .why-mirashka-subtitle {
        font-size: 1.125rem;
        line-height: 1.65;
        color: #334155;
        font-weight: 500;
        max-width: 820px;
        margin: 16px auto 0;
    }
    .why-mirashka-hraas-section .why-mirashka-list-heading {
        color: #006039;
        font-weight: 700;
        font-size: 1.15rem;
        margin-bottom: 1.5rem;
    }
    /* Alternating dark sections */
    .why-mirashka-section--dark {
        background: var(--primary-color-five, #1a2332) !important;
    }
    .why-mirashka-section--dark .why-mirashka-list-label {
        color: #7dcea8;
        font-weight: 700;
    }
    .why-mirashka-section--dark.why-mirashka-hraas-section .why-mirashka-subtitle {
        color: rgba(255, 255, 255, 0.88);
    }
    .why-mirashka-section--dark.why-mirashka-hraas-section .why-mirashka-list-heading {
        color: #7dcea8;
    }
    .why-mirashka-section--dark.why-mirashka-hraas-section .title_all_box.light_color .before_title,
    .why-mirashka-section--dark.why-mirashka-hraas-section .title_all_box.light_color .title {
        color: #fff;
    }
</style>

{{-- Hero --}}
<section class="single_banner style_one bg_op_1 why-mirashka-hero custom_black_overlay position-relative"
    style="background-image: url({{ asset($hero['background']) }});">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="pd_top_80"></div>
                <div class="slider_content light_color">
                    <h6>{{ $hero['label'] }}</h6>
                    <div class="pd_bottom_10"></div>
                    <h1 class="color_white">{{ $hero['title'] }}</h1>
                    <p class="description color_white">{{ $hero['description'] }}</p>
                    <ul class="d_inline_block">
                        <li>
                            <div class="theme_btn_all color_two">
                                <a href="{{ route('projectenquiries') }}" class="theme-btn one primary-color-two">
                                    Get HR Support
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="theme_btn_all">
                                <a href="{{ route('whatwedo') }}" class="theme-btn two">
                                    Explore HRaaS Solutions
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pd_bottom_80"></div>
            </div>
        </div>
    </div>
</section>

@foreach($page['sections'] as $index => $section)
    @include('frontend.layouts.common.sections.why-mirashka-block', [
        'section' => $section,
        'theme' => $index % 2 === 0 ? 'light' : 'dark',
    ])
@endforeach

@php
    $hraasTheme = count($page['sections']) % 2 === 0 ? 'light' : 'dark';
    $hraasIsDark = $hraasTheme === 'dark';
@endphp

{{-- HRaaS benefits + taglines (single section) --}}
<section class="content-section why-mirashka-benefit why-mirashka-hraas-section {{ $hraasIsDark ? 'why-mirashka-section--dark bg_dark_3' : 'bg_light_1' }}" id="hraas-future">
    <div class="pd_top_90"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto text-center">
                <div class="title_all_box style_one {{ $hraasIsDark ? 'light_color' : 'dark_color' }} text-center">
                    <div class="title_sections">
                        <div class="before_title">{{ $hraas['before_title'] }}</div>
                        <h2 class="title">{{ $hraas['title'] }}</h2>
                        <p class="why-mirashka-subtitle">{{ $hraas['subtitle'] }}</p>
                    </div>
                </div>
                <div class="pd_bottom_40"></div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12 text-center">
                <h3 class="why-mirashka-list-heading">{{ $hraas['list_title'] }}</h3>
            </div>
        </div>
        <div class="row clearfix why-mirashka-hraas-grid">
            @foreach($hraas['items'] as $index => $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="project_box style_two h-100">
                        <div class="entry-thumbnail image">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" width="255" height="250">
                            <small class="stteps">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</small>
                        </div>
                        <div class="content_inner">
                            <h2><a href="#">{{ $item['title'] }}</a></h2>
                            <div class="meta_value">{{ $item['text'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_60"></div>
</section>

{{-- Taglines: compact dark band --}}
<section class="why-mirashka-taglines-band" id="hraas-taglines">
    <div class="container">
        <div class="text-center">
            <span class="why-mirashka-taglines-band__label">HRaaS at a Glance</span>
            <h3 class="why-mirashka-taglines-band__heading">{{ $page['taglines_heading'] }}</h3>
        </div>
        <div class="why-mirashka-taglines-grid">
            @foreach($taglines as $index => $tagline)
                <div class="why-mirashka-taglines-item">
                    <span class="why-mirashka-taglines-item__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <p>{{ $tagline }}</p>
                </div>
            @endforeach
        </div>
        <div class="why-mirashka-taglines-band__cta text-center">
            <div class="theme_btn_all color_two">
                <a href="{{ route('whatwedo') }}" class="theme-btn one primary-color-two">View HRaaS Solutions</a>
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.common.sections.testimonials', [
    'sectionClass' => 'px-3 px-md-5',
    'compactTop' => true,
])

@include('frontend.layouts.common.sections.casestudies')

@endsection

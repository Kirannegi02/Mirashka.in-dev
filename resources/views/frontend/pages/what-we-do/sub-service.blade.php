@extends('frontend.layouts.app')

@php
    $categorySlug = $categorySlug ?? 'compliance-workplace-integrity';
    $category = $category ?? config('what-we-do-categories.' . $categorySlug, []);
    $subConfigKey = $category['sub_services_config'] ?? 'compliance-sub-services';
    $parent = config($subConfigKey . '.shared', []);
    $allServices = config($subConfigKey . '.services', []);
    $subRouteName = ($category['route_name'] ?? 'compliance') . '.sub';
    $parentRouteName = $category['route_name'] ?? 'compliance';
    $relatedHeading = $category['related_heading'] ?? 'More solutions from Mirashka';
@endphp

@section('content')

@include('frontend.layouts.common.sections.compliance.hraas-ui-styles')

<div class="cwi-sub-page">
    {{-- Hero --}}
    <section
        class="cwi-sub-hero hraas-hero single_banner style_one custom_black_overlay"
        style="background-image: url({{ asset($service['hero']['image']) }});"
    >
        <div class="container">
            <div class="slider_content">
                <nav class="cwi-sub-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ route($parentRouteName) }}">{{ $parent['parent_label'] ?? $category['label'] }}</a>
                    <span aria-hidden="true">/</span>
                    <span style="color: rgba(255,255,255,0.9);">{{ $service['hero']['label'] }}</span>
                </nav>
                <h6>{{ $service['hero']['label'] }}</h6>
                <h1>{{ $service['hero']['heading'] }}</h1>
                <p class="hero-intro">{{ $service['hero']['content'] }}</p>
                <div class="theme_btn_all color_two">
                    <a href="{{ route('projectenquiries') }}" class="theme-btn one">
                        {{ $service['page_cta']['button'] ?? 'Speak to an HR Advisor' }} <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Focus card + sidebar — light --}}
    <section class="content-section cwi-focus-split cwi-sub-section--light bg_light_1">
        <div class="container">
            <div class="row gutter_30px align-items-stretch">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    @php $focus = $service['focus']; @endphp
                    <article class="hraas-focus-card">
                        <div class="hraas-focus-card__image">
                            <img
                                src="{{ asset($focus['image']) }}"
                                alt="{{ $focus['title'] }}"
                                loading="lazy"
                                style="object-position: {{ $focus['image_position'] ?? 'center center' }};"
                            >
                        </div>
                        <div class="hraas-focus-card__body">
                            <span class="hraas-focus-card__tag">{{ $focus['tag'] }}</span>
                            <h2 class="hraas-focus-card__title">{{ $focus['title'] }}</h2>
                            <p class="hraas-focus-card__text">{{ $focus['content'] }}</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0 cwi-focus-sidebar-col hraas-people-sidebar-col">
                    @php $sidebar = $service['sidebar']; @endphp
                    <aside class="hraas-focus-sidebar">
                        <div class="hraas-focus-sidebar__label">
                            <span class="hraas-focus-sidebar__label-dot" aria-hidden="true"></span>
                            {{ $sidebar['label'] }}
                        </div>
                        <h3 class="hraas-focus-sidebar__heading">{{ $sidebar['heading'] }}</h3>
                        <p class="hraas-focus-sidebar__text">{{ $sidebar['content'] }}</p>
                        <ul class="hraas-focus-sidebar__list">
                            @foreach($sidebar['items'] as $item)
                                <li>
                                    <span class="hraas-focus-sidebar__list-icon" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
                                    <span>{{ $item['label'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <div class="hraas-focus-sidebar__actions theme_btn_all color_one">
                            <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $sidebar['cta'] }}</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    {{-- Named content sections (process steps) — dark --}}
    <section class="content-section cwi-sub-section--dark hraas-section--dark bg_dark_3">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="title_all_box style_one text-center light_color">
                <div class="title_sections">
                    <div class="before_title">{{ $service['process']['before_title'] }}</div>
                    <h2 class="title">{{ $service['process']['heading'] }}</h2>
                </div>
            </div>
            <div class="pd_top_40"></div>
            <div class="row gutter_30px">
                @foreach($service['process']['steps'] as $index => $step)
                    <div class="col-lg col-md-6 col-sm-12 mb-4 mb-lg-0">
                        <article class="hraas-process-card">
                            <span class="hraas-process-card__icon" aria-hidden="true"><i class="{{ $step['icon'] }}"></i></span>
                            <div class="hraas-process-card__body">
                                <span class="hraas-process-card__num" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <h3 class="hraas-process-card__title">{{ $step['title'] }}</h3>
                                <p class="hraas-process-card__text">{{ $step['text'] }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pd_bottom_80"></div>
    </section>

    {{-- Tabbed service focus — light --}}
    <section class="content-section cwi-sub-section--light bg_light_1">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="title_all_box style_one dark_color text-center">
                <div class="title_sections">
                    <div class="before_title">{{ $service['dashboard']['before_title'] }}</div>
                    <h2 class="title">{{ $service['dashboard']['heading'] }}</h2>
                    <p>{{ $service['dashboard']['content'] }}</p>
                </div>
            </div>
            <div class="hraas-dashboard-panel" data-hraas-dashboard>
                <div class="hraas-dashboard-tabs" role="tablist">
                    @foreach($service['dashboard']['tabs'] as $index => $tab)
                        <button
                            type="button"
                            class="hraas-dashboard-tab{{ $index === 0 ? ' is-active' : '' }}"
                            role="tab"
                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                            data-hraas-dashboard-tab="{{ $index }}"
                        >
                            <span class="hraas-dashboard-tab__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                            {{ $tab['label'] }}
                        </button>
                    @endforeach
                    <a href="{{ route('projectenquiries') }}" class="hraas-dashboard-cta">
                        <span class="hraas-dashboard-cta__icon" aria-hidden="true"><i class="ri-phone-line"></i></span>
                        {{ $service['dashboard']['cta'] }}
                    </a>
                </div>
                <div class="hraas-dashboard-stage">
                    @foreach($service['dashboard']['tabs'] as $index => $tab)
                        <div
                            class="hraas-dashboard-pane{{ $index === 0 ? ' is-active' : '' }}"
                            data-hraas-dashboard-pane="{{ $index }}"
                            role="tabpanel"
                        >
                            <div
                                class="hraas-dashboard-pane__bg"
                                style="background-image: url('{{ asset($tab['image']) }}');"
                                aria-hidden="true"
                            ></div>
                            <div class="hraas-dashboard-pane__overlay" aria-hidden="true"></div>
                            <div class="hraas-dashboard-pane__inner">
                                <div class="hraas-dashboard-pane__copy">
                                    <div class="before_title">{{ $service['dashboard']['before_title'] }}</div>
                                    <h3 class="hraas-dashboard-pane__title">{{ $tab['heading'] }}</h3>
                                    <p class="hraas-dashboard-pane__text">{{ $tab['content'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="pd_bottom_80"></div>
    </section>

    {{-- Page CTA band — dark --}}
    <section class="content-section cwi-sub-page-cta cwi-sub-section--dark bg_dark_3">
        <div class="pd_top_60"></div>
        <div class="container">
            <div class="cwi-sub-page-cta__inner text-center light_color">
                <div class="title_all_box style_one light_color">
                    <div class="title_sections">
                        <div class="before_title">Ready to move forward?</div>
                        <h2 class="title">{{ $service['process']['steps'][count($service['process']['steps']) - 1]['title'] ?? 'Get started' }}</h2>
                        <p class="cwi-sub-page-cta__text">{{ $service['focus']['content'] ?? $service['hero']['content'] }}</p>
                    </div>
                </div>
                <div class="theme_btn_all color_two">
                    <a href="{{ route('projectenquiries') }}" class="theme-btn one">
                        {{ $service['page_cta']['button'] ?? 'Speak to an Advisor' }} <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="pd_bottom_60"></div>
    </section>

    {{-- Related sub-services — dark --}}
    <section class="content-section cwi-sub-section--dark hraas-section--dark bg_dark_3 cwi-related-services">
        <div class="container">
            <div class="title_all_box style_one text-center light_color">
                <div class="title_sections">
                    <div class="before_title">Related Services</div>
                    <h2 class="title">{{ $relatedHeading }}</h2>
                </div>
            </div>
            <div class="pd_top_32"></div>
            <div class="row gutter_30px">
                @foreach($allServices as $serviceSlug => $related)
                    @if($serviceSlug === $slug)
                        @continue
                    @endif
                    <div class="col-lg-4 col-md-6 mb-4">
                        <article class="cwi-related-services__card">
                            <a href="{{ route($subRouteName, $serviceSlug) }}">
                                <img src="{{ asset($related['card']['image']) }}" alt="{{ $related['card']['title'] }}" loading="lazy">
                            </a>
                            <div class="cwi-related-services__body">
                                <h3><a href="{{ route($subRouteName, $serviceSlug) }}">{{ $related['card']['title'] }}</a></h3>
                                <a href="{{ route($subRouteName, $serviceSlug) }}" class="cwi-related-services__link">Read More <i class="icon-right-arrow"></i></a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pd_bottom_60"></div>
    </section>

    @include('frontend.layouts.common.sections.compliance.cta', [
        'cta' => $parent['cta'] ?? null,
        'primaryLabel' => $service['page_cta']['button'] ?? null,
        'secondaryLabel' => $service['page_cta']['secondary'] ?? null,
    ])
</div>

@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('[data-hraas-dashboard]');
    if (!root) return;
    var tabs = root.querySelectorAll('[data-hraas-dashboard-tab]');
    var panes = root.querySelectorAll('[data-hraas-dashboard-pane]');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var idx = tab.getAttribute('data-hraas-dashboard-tab');
            tabs.forEach(function (t) {
                t.classList.remove('is-active');
                t.setAttribute('aria-selected', 'false');
            });
            panes.forEach(function (p) { p.classList.remove('is-active'); });
            tab.classList.add('is-active');
            tab.setAttribute('aria-selected', 'true');
            var pane = root.querySelector('[data-hraas-dashboard-pane="' + idx + '"]');
            if (pane) pane.classList.add('is-active');
        });
    });
})();
</script>
@endpush

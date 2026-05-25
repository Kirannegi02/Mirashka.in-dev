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

    $subSectionViews = [
        'hero',
        'focus',
        'experience-banner',
        'standout-grid',
        'process',
        'dashboard',
        'outcome',
        'related',
    ];
@endphp

@section('content')

@include('frontend.layouts.common.sections.compliance.hraas-ui-styles')
@include('frontend.pages.what-we-do.sub-service-extra-styles')
@include('frontend.layouts.common.sections.what-we-do.sub-service-animations')

<div class="cwi-sub-page cwi-page" data-cwi-page>
    @foreach($subSectionViews as $sectionView)
        @include('frontend.pages.what-we-do.sections.sub.' . $sectionView, [
            'service' => $service,
            'category' => $category,
            'parent' => $parent,
            'parentRouteName' => $parentRouteName,
            'allServices' => $allServices,
            'subRouteName' => $subRouteName,
            'slug' => $slug,
            'relatedHeading' => $relatedHeading,
        ])
    @endforeach

    @php
        $bottomCta = array_merge($parent['cta'] ?? [], $service['bottom_cta'] ?? []);
    @endphp
    @include('frontend.layouts.common.sections.compliance.cta', [
        'cta' => $bottomCta,
        'primaryLabel' => $service['page_cta']['button'] ?? null,
        'secondaryLabel' => $service['page_cta']['secondary'] ?? null,
        'sectionClass' => 'cwi-section--dark',
    ])
</div>

@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('[data-cwi-page]');
    if (!root) return;

    var animatedSelector = [
        '.cwi-anim',
        '.cwi-title-draw',
        '.hraas-process-card',
        '.hraas-focus-card',
        '.hraas-focus-sidebar',
        '.hraas-dashboard-panel',
        '.cwi-standout__header',
        '.cwi-standout__col--left',
        '.cwi-standout__col--center',
        '.cwi-standout__col--right',
        '.cwi-experience__main',
        '.cwi-experience__pillars',
        '.cwi-related-services__card',
        '.cwi-sub-page-cta__inner'
    ].join(', ');

    var revealAll = function () {
        root.querySelectorAll(animatedSelector).forEach(function (el) {
            el.classList.add('is-visible');
        });
    };

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        revealAll();
    } else {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 });

        root.querySelectorAll(animatedSelector).forEach(function (el) {
            observer.observe(el);
        });
    }

    var dashRoot = root.querySelector('[data-hraas-dashboard]');
    if (!dashRoot) return;
    var tabs = dashRoot.querySelectorAll('[data-hraas-dashboard-tab]');
    var panes = dashRoot.querySelectorAll('[data-hraas-dashboard-pane]');
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
            var pane = dashRoot.querySelector('[data-hraas-dashboard-pane="' + idx + '"]');
            if (pane) pane.classList.add('is-active');
        });
    });
})();
</script>
@endpush

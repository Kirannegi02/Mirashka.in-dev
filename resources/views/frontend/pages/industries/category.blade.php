@extends('frontend.layouts.app')

@php
    $p = $page ?? [];
    $grid = $p['sub_industries'] ?? [];
    $heroBg = asset($p['hero']['image'] ?? 'assets/frontend/img/Whatwedo/we-build-influence-banner.webp');
    $heroBgFallback = asset($p['hero']['image_fallback'] ?? 'assets/frontend/img/Whatwedo/we-build-influence-banner.webp');
@endphp

@section('content')
@include('frontend.pages.industries.partials.page-styles')
@include('frontend.layouts.common.sections.compliance.hraas-ui-styles')
@include('frontend.layouts.common.sections.what-we-do.sub-service-animations')
@include('frontend.pages.what-we-do.category-extra-styles')

<div id="content" class="site-content">

{{-- Hero — same markup & spacing as whatwedo.blade.php (outside .industries-page) --}}
<style type="text/css">
    #industriesHeroBanner.single_banner.style_one .slider_content h1 {
        font-size: 38px;
        line-height: 50px;
        font-weight: 800;
        margin-bottom: 20px;
    }
    #industriesHeroBanner.single_banner.style_one {
        padding-top: 50px;
    }
    #industriesHeroBanner.custom_black_overlay {
        position: relative;
        z-index: 1;
    }
    #industriesHeroBanner.custom_black_overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: -1;
    }
    #industriesHeroBanner .slider_content {
        text-align: center;
    }
    #industriesHeroBanner .slider_content h6 {
        margin-bottom: 0;
    }
    #industriesHeroBanner .slider_content .description.color_white {
        color: #fff;
        font-size: 16px;
        line-height: 26px;
        margin: 0 auto 18px;
        max-width: 960px;
    }
    #industriesHeroBanner .slider_content .description.color_white:last-of-type {
        margin-bottom: 28px;
    }
    #industriesHeroBanner .d_inline_block {
        margin: 0;
        padding: 0;
    }
</style>
<section
    id="industriesHeroBanner"
    class="single_banner style_one bg_op_1 custom_black_overlay p-0"
    style="background-image: url('{{ $heroBg }}');"
    role="img"
    aria-label="{{ $p['hero']['heading'] ?? '' }}"
>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 text-center">
                <div class="pd_top_80"></div>
                <div class="slider_content light_color">
                    <h6>{{ $p['hero']['label'] ?? '' }}</h6>
                    <div class="pd_bottom_10"></div>
                    <h1 class="color_white">{{ $p['hero']['heading'] ?? '' }}</h1>
                    <div class="middle"></div>
                    @foreach ($p['hero']['subheading'] ?? [] as $para)
                        <p class="description color_white">{{ $para }}</p>
                    @endforeach
                    <ul class="d_inline_block">
                        @foreach ($p['hero']['ctas'] ?? [] as $cta)
                            <li>
                                <div class="theme_btn_all {{ $loop->first ? 'color_two' : '' }}">
                                    <a
                                        href="{{ $cta['href'] }}"
                                        class="theme-btn {{ $loop->first ? 'one primary-color-two' : 'two' }}"
                                    >{{ $cta['label'] }}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="pd_bottom_80"></div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var banner = document.getElementById('industriesHeroBanner');
        if (!banner) return;
        var img = new Image();
        img.onerror = function () {
            banner.style.backgroundImage = "url('{{ $heroBgFallback }}')";
        };
        img.src = '{{ $heroBg }}';
    });
</script>

<div class="industries-page cwi-sub-page cwi-page" data-cwi-page>
    {{-- 2. Workforce challenges — standout 3-column grid (same UI as compliance sub-services) --}}
    @include('frontend.pages.industries.sections.reality-tabs', ['reality' => $p['reality'] ?? []])

    {{-- 3. Sub-industries / segments — Creote tab section --}}
    <div id="industry-subcategories" class="industries-section--dark">
        @include('frontend.pages.industries.sections.sub-industries-tabs', [
            'grid' => $grid,
            'categoryLabel' => $category['label'] ?? 'Healthcare',
        ])
    </div>

    {{-- 4. PULSE framework (light) --}}
    @include('frontend.pages.industries.sections.pulse-framework', ['pulse' => $p['pulse'] ?? []])

    {{-- 5. Services delivered (dark) --}}
    @include('frontend.pages.industries.sections.services-deliver', ['services' => $p['services'] ?? []])

    {{-- 6. Hiring & workforce strategy (light) --}}
    @include('frontend.pages.industries.sections.hiring-strategy-reality', ['hiring_strategy' => $p['hiring_strategy'] ?? []])

    {{-- 7. Compliance & documentation — service cards grid --}}
    @include('frontend.pages.industries.sections.compliance-services-grid', ['compliance' => $p['compliance'] ?? []])

    {{-- 8. Case studies (light) --}}
    @include('frontend.pages.industries.sections.use-cases-collage', [
        'useCases' => $p['use_cases'] ?? [],
    ])

    {{-- 9. HR health check (dark) --}}
    @include('frontend.pages.industries.sections.health-check-showcase', ['health' => $p['health_check'] ?? []])

    {{-- 10. Lead form (light) --}}
    @include('frontend.pages.industries.sections.lead-form-showcase', ['form' => $p['form'] ?? []])

    {{-- 11. FAQ (dark — same layout as industries-we-serve) --}}
    @include('frontend.pages.industries.sections.faq-showcase', ['faq_blog' => $p['faq_blog'] ?? []])
</div>
</div>

@push('scripts')
<script>
(function () {
    var root = document.querySelector('[data-cwi-page]');
    if (root) {
        root.querySelectorAll('.hraas-dashboard-panel, .cwi-anim').forEach(function (el) {
            el.classList.add('is-visible');
        });
    }
})();
document.addEventListener('DOMContentLoaded', function () {
    var subMap = @json($p['form']['industries'] ?? []);
    var industrySelect = document.getElementById('industry-select');
    var subSelect = document.getElementById('sub-industry-select');

    if (industrySelect && subSelect && Object.keys(subMap).length) {
        function fillSubIndustry(industry) {
            subSelect.innerHTML = '<option value="">Select segment</option>';
            (subMap[industry] || []).forEach(function (sub) {
                var opt = document.createElement('option');
                opt.value = sub;
                opt.textContent = sub;
                subSelect.appendChild(opt);
            });
        }

        industrySelect.addEventListener('change', function () {
            fillSubIndustry(this.value);
        });

        if (industrySelect.options.length === 2) {
            industrySelect.selectedIndex = 1;
            fillSubIndustry(industrySelect.value);
        }
    }

});
</script>
@endpush
@endsection

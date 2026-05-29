@extends('frontend.layouts.app')

@php
    $p = $page ?? [];
    $grid = $p['sub_industries'] ?? [];
    $gridCards = $grid['cards'] ?? [];
    $heroBg = asset($p['hero']['image'] ?? 'assets/frontend/img/compliance/cwi-integrity.png');
    $heroBgFallback = asset($p['hero']['image_fallback'] ?? 'assets/frontend/img/hraas/hraas-v3-hero.png');
    $useCaseImages = collect($gridCards)->map(fn ($card) => [
        'image' => $card['image'] ?? '',
        'fallback' => $card['image_fallback'] ?? ($card['image'] ?? ''),
    ])->values();
@endphp

@section('content')
@include('frontend.pages.industries.partials.page-styles')
@include('frontend.layouts.common.sections.compliance.hraas-ui-styles')
@include('frontend.layouts.common.sections.what-we-do.sub-service-animations')
@include('frontend.pages.what-we-do.category-extra-styles')

<div id="content" class="site-content">
<div class="industries-page cwi-sub-page cwi-page" data-cwi-page>
    {{-- 1. Hero (dark) — same as industries main page --}}
    <section id="industriesHeroBanner" class="home2-pmv-section">
        <div class="tab-content">
            <div
                class="tab-pane fade boxsl2 active show"
                style="background-image: url('{{ $heroBg }}'); background-size: cover; background-position: center;"
                role="img"
                aria-label="{{ $p['hero']['heading'] ?? '' }}"
            >
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-10 col-lg-11 col-md-12">
                            <div class="tentArea">
                                <h2 class="text-white">{{ $p['hero']['heading'] ?? '' }}</h2>
                                <p class="gold textbg">{{ $p['hero']['label'] ?? '' }}</p>
                                <span class="line"></span>
                                @foreach ($p['hero']['subheading'] ?? [] as $para)
                                    <p class="text-white">{{ $para }}</p>
                                @endforeach
                                <ul class="animate_down hero-cta-list">
                                    @foreach ($p['hero']['ctas'] ?? [] as $cta)
                                        <li class="theme_btn_all">
                                            <a href="{{ $cta['href'] }}" class="theme-btn {{ $loop->first ? 'one' : 'two' }}">{{ $cta['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var pane = document.querySelector('#industriesHeroBanner .tab-pane');
            if (!pane) return;
            var img = new Image();
            img.onerror = function () {
                pane.style.backgroundImage = "url('{{ $heroBgFallback }}')";
            };
            img.src = '{{ $heroBg }}';
        });
    </script>

    {{-- 2. Workforce reality (light) --}}
    @include('frontend.pages.industries.sections.reality-dashboard', ['reality' => $p['reality'] ?? []])

    {{-- 3. Sub-industries / segments (light) — industries grid from main page --}}
    @if (!empty($gridCards))
    <section id="industry-subcategories" class="service-section bg-light-section industries-grid-showcase">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="title_all_box style_one text-center dark_color">
                <div class="title_sections">
                    <div class="before_title">{{ $grid['label'] ?? '' }}</div>
                    <h2>{{ $grid['heading'] ?? '' }}</h2>
                    <p>{{ $grid['content'] ?? '' }}</p>
                </div>
            </div>
            <div class="industries-grid-showcase__wrap">
                <div class="industries-grid-showcase__stage">
                    <div class="industries-grid-showcase__inner">
                        <div class="industries-grid-showcase__panel">
                            <div class="industries-grid-showcase__nav" role="tablist" aria-label="Healthcare segments">
                                @foreach ($gridCards as $i => $card)
                                    <button
                                        type="button"
                                        class="industries-grid-showcase__tab {{ $i === 0 ? 'active' : '' }}"
                                        data-industry-tab="{{ $i }}"
                                        aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                                    >
                                        <span class="industries-grid-showcase__tab-num">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}.</span>
                                        <span>{{ $card['title'] }}</span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        <div class="industries-grid-showcase__view">
                            <img
                                id="industry-grid-image"
                                src="{{ asset($gridCards[0]['image'] ?? '') }}"
                                data-fallback="{{ asset($gridCards[0]['image_fallback'] ?? ($gridCards[0]['image'] ?? '')) }}"
                                onerror="this.onerror=null;this.src=this.dataset.fallback;"
                                alt="{{ $gridCards[0]['title'] ?? '' }}"
                            >
                            <div class="industries-grid-showcase__view-overlay"></div>
                            <div class="industries-grid-showcase__content">
                                <p class="industries-grid-showcase__kicker">{{ $category['label'] ?? 'Industry' }}</p>
                                <h3 class="industries-grid-showcase__title" id="industry-grid-title">{{ $gridCards[0]['title'] }}</h3>
                                <ul class="industries-grid-showcase__pills" id="industry-grid-pills">
                                    @foreach ($gridCards[0]['subcategories'] ?? [] as $sub)
                                        <li>{{ $sub }}</li>
                                    @endforeach
                                </ul>
                                <p class="industries-grid-showcase__desc" id="industry-grid-desc">{{ $gridCards[0]['description'] }}</p>
                                <a id="industry-grid-cta" href="{{ $gridCards[0]['href'] ?? '#industry-form' }}" class="theme-btn one industries-grid-showcase__cta">
                                    {{ $gridCards[0]['cta'] ?? 'Explore' }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_80"></div>
    </section>
    @endif

    {{-- 4. PULSE framework (dark) --}}
    @include('frontend.pages.industries.sections.pulse-framework', ['pulse' => $p['pulse'] ?? []])

    {{-- 5. Services delivered (dark) --}}
    @include('frontend.pages.industries.sections.services-deliver', ['services' => $p['services'] ?? []])

    {{-- 6. Hiring & workforce strategy (light) --}}
    @include('frontend.pages.industries.sections.challenges-model', ['challenges' => $p['hiring_strategy'] ?? []])
    @if (!empty($p['hiring_strategy']['cta']))
        <section class="bg-light-section">
            <div class="container section-cta text-center" style="padding-bottom: 48px;">
                <a href="{{ $p['hiring_strategy']['cta']['href'] ?? '#industry-form' }}" class="theme-btn one">{{ $p['hiring_strategy']['cta']['label'] }}</a>
            </div>
        </section>
    @endif

    {{-- 7. Compliance & documentation (light) --}}
    @include('frontend.pages.what-we-do.sections.split-feature', ['section' => $p['compliance'] ?? []])

    {{-- 8. Case studies (dark) --}}
    @include('frontend.pages.industries.sections.use-cases-collage', [
        'useCases' => $p['use_cases'] ?? [],
        'imagePool' => $useCaseImages->all(),
        'firstImage' => $useCaseImages->get(0),
        'lastImage' => $useCaseImages->get(1, $useCaseImages->get(0)),
    ])

    {{-- 9. HR health check (light) --}}
    @include('frontend.pages.industries.sections.health-check-showcase', ['health' => $p['health_check'] ?? []])

    {{-- 10. Lead form (light) --}}
    @include('frontend.pages.industries.sections.lead-form-showcase', ['form' => $p['form'] ?? []])

    {{-- 11. FAQ + blog preview (dark) --}}
    @if (!empty($p['faq_blog']))
    <section class="faqs-section bg-dark-section">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="title_all_box style_one text-center light_color">
                <div class="title_sections">
                    <div class="before_title">{{ $p['faq_blog']['label'] }}</div>
                    <h2>{{ $p['faq_blog']['heading'] }}</h2>
                </div>
            </div>
            <div class="row faq-layout g-4 align-items-stretch">
                <div class="col-lg-7 faq-left">
                    <div class="faq_section type_one">
                        <div class="block_faq">
                            <div class="accordion">
                                <dl>
                                    @foreach ($p['faq_blog']['faqs'] ?? [] as $i => $faq)
                                        <dt class="faq_header {{ $i === 0 ? 'active' : '' }}">
                                            <span class="icon-play"></span> {{ $faq['question'] }}
                                        </dt>
                                        <dd class="accordion-content" style="{{ $i === 0 ? 'display:block;' : '' }}">
                                            <p>{{ $faq['answer'] }}</p>
                                        </dd>
                                    @endforeach
                                </dl>
                            </div>
                        </div>
                    </div>
                    @if (!empty($p['faq_blog']['cta']))
                        <div class="section-cta">
                            <a href="{{ url($p['faq_blog']['cta']['href']) }}" class="theme-btn one">{{ $p['faq_blog']['cta']['label'] }}</a>
                        </div>
                    @endif
                </div>
                <div class="col-lg-5">
                    <div class="row g-3">
                        @foreach ($p['faq_blog']['blogs'] ?? [] as $blogTitle)
                            <div class="col-12">
                                <div class="blog-preview-card">
                                    <h4>{{ $blogTitle }}</h4>
                                    <a href="{{ url('/blog') }}" class="read_more">Read article <i class="icon-right-arrow-long"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_80"></div>
    </section>
    @endif
</div>
</div>

@php
    $industryCardsForJs = collect($gridCards)->map(function ($card) {
        return [
            'title' => $card['title'] ?? '',
            'subcategories' => $card['subcategories'] ?? [],
            'description' => $card['description'] ?? '',
            'cta' => $card['cta'] ?? 'Explore',
            'href' => $card['href'] ?? '#industry-form',
            'image' => asset($card['image'] ?? ($card['image_fallback'] ?? '')),
            'image_fallback' => asset($card['image_fallback'] ?? ($card['image'] ?? '')),
        ];
    })->values();
@endphp

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
    var industryCards = @json($industryCardsForJs);
    var industryTabs = document.querySelectorAll('[data-industry-tab]');
    var industryImage = document.getElementById('industry-grid-image');
    var industryTitle = document.getElementById('industry-grid-title');
    var industryPills = document.getElementById('industry-grid-pills');
    var industryDesc = document.getElementById('industry-grid-desc');
    var industryCta = document.getElementById('industry-grid-cta');

    function setIndustry(index) {
        var card = industryCards[index];
        if (!card) return;
        if (industryImage) {
            industryImage.src = card.image;
            industryImage.dataset.fallback = card.image_fallback || card.image;
            industryImage.alt = card.title || 'Segment';
        }
        if (industryTitle) industryTitle.textContent = card.title || '';
        if (industryDesc) industryDesc.textContent = card.description || '';
        if (industryCta) {
            industryCta.textContent = card.cta || 'Explore';
            industryCta.href = card.href || '#industry-form';
        }
        if (industryPills) {
            industryPills.innerHTML = (card.subcategories || []).map(function (sub) {
                return '<li>' + sub + '</li>';
            }).join('');
        }
        industryTabs.forEach(function (tab, i) {
            var active = i === index;
            tab.classList.toggle('active', active);
            tab.setAttribute('aria-selected', active ? 'true' : 'false');
        });
    }

    industryTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            setIndustry(parseInt(tab.getAttribute('data-industry-tab'), 10));
        });
    });

    var subMap = @json($p['form']['industries'] ?? []);
    var industrySelect = document.getElementById('industry-select');
    var subSelect = document.getElementById('sub-industry-select');

    if (industrySelect && subSelect) {
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

    var pulseWrap = document.querySelector('.industries-pulse-wrap');
    if (pulseWrap) {
        var pills = pulseWrap.querySelectorAll('[data-pulse-tab]');
        var pulseCards = pulseWrap.querySelectorAll('[data-pulse-card]');
        var pulseGrid = pulseWrap.querySelector('.pulse-cards-grid');

        if (pulseGrid) {
            pulseGrid.classList.add('is-single-view');
        }

        function setActivePulse(index) {
            pills.forEach(function (btn, i) {
                var isActive = i === index;
                btn.classList.toggle('active', isActive);
                btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
            });
            pulseCards.forEach(function (card, i) {
                var isActiveCard = i === index;
                card.classList.toggle('is-highlighted', isActiveCard);
                card.setAttribute('aria-hidden', isActiveCard ? 'false' : 'true');
                var col = card.closest('.col');
                if (col) {
                    col.classList.toggle('is-active', isActiveCard);
                }
            });
        }

        pills.forEach(function (btn) {
            btn.addEventListener('click', function () {
                setActivePulse(parseInt(btn.getAttribute('data-pulse-tab'), 10));
            });
        });
        pulseCards.forEach(function (card) {
            card.addEventListener('click', function (e) {
                if (e.target.closest('a')) {
                    return;
                }
                setActivePulse(parseInt(card.getAttribute('data-pulse-card'), 10));
            });
        });
        setActivePulse(0);
    }
});
</script>
@endpush
@endsection

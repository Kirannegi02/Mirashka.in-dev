@php
    $strategy = $hiring_strategy ?? $strategy ?? [];
    $sectionId = $strategy['section_id'] ?? 'industry-hiring-strategy';
    $introParagraphs = $strategy['intro'] ?? [];
    if (is_string($introParagraphs)) {
        $introParagraphs = [$introParagraphs];
    }
    $groups = $strategy['groups'] ?? [];
    $defaultIcons = [
        'ri-file-list-3-line',
        'ri-graduation-cap-line',
        'ri-map-pin-line',
        'ri-user-search-line',
        'ri-filter-3-line',
        'ri-shield-check-line',
        'ri-calendar-check-line',
        'ri-money-dollar-circle-line',
        'ri-user-add-line',
        'ri-bar-chart-box-line',
        'ri-time-line',
        'ri-calculator-line',
        'ri-folder-user-line',
        'ri-presentation-line',
        'ri-emotion-happy-line',
        'ri-pie-chart-2-line',
        'ri-user-star-line',
        'ri-focus-2-line',
    ];
    $iconIndex = 0;
    $storyImages = $strategy['images'] ?? [];
    if (empty($storyImages)) {
        $storyImages = array_values(array_filter([
            [
                'src' => $strategy['image'] ?? 'assets/frontend/img/industries/healthcare-hiring-workforce-strategy.webp',
                'fallback' => $strategy['image_fallback'] ?? 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                'alt' => $strategy['image_alt'] ?? 'Healthcare hiring strategy',
            ],
            ! empty($strategy['image_secondary']) || ! empty($strategy['image_secondary_fallback'])
                ? [
                    'src' => $strategy['image_secondary'] ?? 'assets/frontend/img/industries/healthcare-workforce-challenge.webp',
                    'fallback' => $strategy['image_secondary_fallback'] ?? 'assets/frontend/img/hraas/hraas-v3-hero.png',
                    'alt' => $strategy['image_secondary_alt'] ?? 'Healthcare workforce strategy',
                ]
                : null,
        ]));
    }
    $ctaHref = $strategy['cta']['href'] ?? '#industry-form';
    if (! str_starts_with($ctaHref, '#')) {
        $ctaHref = url($ctaHref);
    }
@endphp

@include('frontend.layouts.common.sections.home-growth-reality-styles')

<style>
    #{{ $sectionId }}.home-growth-reality {
        padding-top: var(--industries-section-pad, 80px) !important;
        padding-bottom: var(--industries-section-pad, 80px) !important;
    }
    #{{ $sectionId }} .home-growth-reality__header-wrap {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
    }
    #{{ $sectionId }} .home-growth-reality__shell {
        grid-template-columns: minmax(300px, 34%) minmax(0, 66%);
        align-items: stretch;
    }
    #{{ $sectionId }} .home-growth-reality__story {
        display: flex;
        flex-direction: column;
        justify-content: stretch;
        align-items: stretch;
        gap: 14px;
        height: 100%;
        min-height: 100%;
        padding: 20px;
        background: #f4f6f5;
        box-sizing: border-box;
        align-self: stretch;
    }
    #{{ $sectionId }} .home-growth-reality__aside {
        align-self: stretch;
    }
    #{{ $sectionId }} .home-growth-reality__story-image {
        position: relative;
        width: 100%;
        max-width: none;
        flex: 1 1 0;
        min-height: 220px;
        overflow: hidden;
        border-radius: 8px;
        background: #e8eeeb;
    }
    #{{ $sectionId }} .home-growth-reality__story-image img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    #{{ $sectionId }} .home-growth-reality__pain-group {
        margin-top: 18px;
    }
    #{{ $sectionId }} .home-growth-reality__pain-group:first-of-type {
        margin-top: 0;
    }
    #{{ $sectionId }} .home-growth-reality__pain-group-title {
        margin: 0 0 12px;
        font-size: 15px;
        font-weight: 800;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #006039;
        text-align: left;
    }
    #{{ $sectionId }} .home-growth-reality__pains-intro {
        margin: 0 0 16px;
        text-align: center;
        color: #4a4e56;
        font-size: 16px;
        line-height: 1.65;
    }
    .industries-page #{{ $sectionId }} .title_sections h2.title {
        font-size: clamp(1.35rem, 2.8vw, 2rem) !important;
        max-width: 1140px;
        margin-left: auto;
        margin-right: auto;
    }
    .industries-page #{{ $sectionId }} .title_sections > p {
        max-width: 1140px !important;
        width: 100%;
        font-size: 17px !important;
        line-height: 1.75 !important;
    }
    .industries-page #{{ $sectionId }} .title_sections > .middle {
        display: inline-block;
        margin: 16px auto;
    }
    .industries-page #{{ $sectionId }} .home-growth-reality__header-wrap {
        margin-bottom: 0;
        max-width: 1280px;
    }
    .industries-page #{{ $sectionId }} .home-growth-reality__inner {
        margin-top: 48px;
        padding-bottom: 0;
    }
    #{{ $sectionId }} .home-growth-reality__pains {
        padding: 24px 28px 20px;
        border-top: none;
    }
    #{{ $sectionId }} .home-growth-reality__shell {
        max-width: 1180px;
        margin-left: auto;
        margin-right: auto;
    }
    #{{ $sectionId }} .home-growth-reality__pain-list {
        max-width: none;
        margin-left: 0;
        margin-right: 0;
    }
    #{{ $sectionId }} .home-growth-reality__cta-panel.home-growth-reality__cta-panel--button-only {
        justify-content: center !important;
        align-items: center !important;
        text-align: center;
    }
    #{{ $sectionId }} .home-growth-reality__cta-panel .home-growth-reality__cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin: 0 auto;
    }
    #{{ $sectionId }} .home-growth-reality__cta-panel {
        padding: 20px 28px 24px;
    }
    .industries-page #{{ $sectionId }} .home-growth-reality__pains-title {
        font-size: 22px !important;
        line-height: 1.35 !important;
    }
    .industries-page #{{ $sectionId }} .home-growth-reality__pain-item {
        font-size: 15px !important;
    }
    .industries-page #{{ $sectionId }} .home-growth-reality__pain-item i {
        font-size: 20px;
        flex-shrink: 0;
    }
    @media (max-width: 991px) {
        #{{ $sectionId }} .home-growth-reality__story {
            padding: 20px 16px;
            min-height: auto;
        }
        #{{ $sectionId }} .home-growth-reality__story-image {
            flex: 0 0 auto;
            min-height: 280px;
            aspect-ratio: 4 / 3;
        }
    }
    @media (max-width: 575px) {
        #{{ $sectionId }} .home-growth-reality__header-wrap {
            padding: 0 16px;
        }
        #{{ $sectionId }} .home-growth-reality__inner {
            padding-left: 16px;
            padding-right: 16px;
        }
        #{{ $sectionId }} .home-growth-reality__cta-panel.home-growth-reality__cta-panel--button-only {
            align-items: center !important;
        }
        #{{ $sectionId }} .home-growth-reality__shell {
            grid-template-columns: 1fr;
        }
    }
</style>

<section
    class="content-section home-growth-reality industries-section--light"
    id="{{ $sectionId }}"
    data-hgr-section
    aria-labelledby="{{ $sectionId }}-title"
>
    <div class="home-growth-reality__header-wrap">
        <div class="title_all_box style_one text-center dark_color industries-section-header">
            <div class="title_sections">
                <div class="before_title">{{ $strategy['label'] ?? 'Talent Strategy' }}</div>
                <h2 class="title" id="{{ $sectionId }}-title">{{ $strategy['heading'] ?? '' }}</h2>
                <div class="middle"></div>
                @foreach ($introParagraphs as $paragraph)
                    <p>{{ $paragraph }}</p>
                    @if (! $loop->last)
                        <div class="middle"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="home-growth-reality__inner">
        <div class="home-growth-reality__shell hgr-reveal hgr-reveal--scale" data-hgr-delay="1">
            <div class="home-growth-reality__story hgr-reveal hgr-reveal--left" data-hgr-delay="2">
                @foreach ($storyImages as $storyImage)
                    @php
                        $imgSrc = asset($storyImage['src'] ?? $storyImage['image'] ?? '');
                        $imgFallback = asset($storyImage['fallback'] ?? $storyImage['image_fallback'] ?? $storyImage['src'] ?? '');
                    @endphp
                    <div class="home-growth-reality__story-image">
                        <img
                            src="{{ $imgSrc }}"
                            alt="{{ $storyImage['alt'] ?? '' }}"
                            loading="lazy"
                            width="400"
                            height="400"
                            onerror="this.onerror=null;this.src='{{ $imgFallback }}';"
                        >
                    </div>
                @endforeach
            </div>
            <div class="home-growth-reality__aside hgr-reveal hgr-reveal--right" data-hgr-delay="2">
                <div class="home-growth-reality__pains hgr-reveal" data-hgr-delay="4">
                    @if (!empty($strategy['card_title']))
                        <h3 class="home-growth-reality__pains-title">{{ $strategy['card_title'] }}</h3>
                    @endif
                    @if (!empty($strategy['card_intro']))
                        <p class="home-growth-reality__pains-intro">{{ $strategy['card_intro'] }}</p>
                    @endif
                    @if (!empty($strategy['card_title']) || !empty($strategy['card_intro']))
                        <hr>
                    @endif
                    @foreach ($groups as $group)
                        <div class="home-growth-reality__pain-group">
                            @if (!empty($group['title']))
                                <h4 class="home-growth-reality__pain-group-title">{{ $group['title'] }}</h4>
                            @endif
                            <ul class="home-growth-reality__pain-list hgr-stagger">
                                @foreach ($group['items'] ?? [] as $item)
                                    @php
                                        $itemText = is_array($item) ? ($item['text'] ?? '') : $item;
                                        $itemIcon = is_array($item) ? ($item['icon'] ?? null) : null;
                                        if (! $itemIcon) {
                                            $itemIcon = $defaultIcons[$iconIndex % count($defaultIcons)];
                                            $iconIndex++;
                                        }
                                    @endphp
                                    <li class="home-growth-reality__pain-item">
                                        <i class="{{ $itemIcon }}" aria-hidden="true"></i>
                                        <span>{{ $itemText }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                @if (!empty($strategy['cta']['label']))
                    <div class="home-growth-reality__cta-panel home-growth-reality__cta-panel--button-only hgr-reveal" data-hgr-delay="5">
                        <a href="{{ $ctaHref }}" class="home-growth-reality__cta theme-btn one">
                            {{ $strategy['cta']['label'] }}
                            <i class="ri-arrow-right-line" aria-hidden="true"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<script>
(function () {
    var section = document.getElementById(@json($sectionId));
    if (!section) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        section.classList.add('hgr-is-active');
        return;
    }
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            section.classList.add('hgr-is-active');
            observer.disconnect();
        });
    }, { rootMargin: '0px 0px -10% 0px', threshold: 0.15 });
    observer.observe(section);
})();
</script>

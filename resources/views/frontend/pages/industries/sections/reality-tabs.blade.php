@php
    $d = $reality ?? [];
    $section = $d['standout'] ?? null;

    if (empty($section)) {
        $painPoints = $d['pain_points'] ?? [];
        $paragraphs = $d['paragraphs'] ?? [];
        $ctaHref = $d['cta_href'] ?? '#industry-form';
        if (! str_starts_with($ctaHref, '#')) {
            $ctaHref = url($ctaHref);
        }
        $mid = (int) ceil(count($painPoints) / 2);

        $section = [
            'before_title' => $d['before_title'] ?? $d['label'] ?? '',
            'heading' => $d['heading'] ?? $d['challenges_heading'] ?? '',
            'grid' => [
                'left_image' => $d['image'] ?? 'assets/frontend/img/compliance/cwi-bento-meeting.png',
                'left_image_fallback' => 'assets/frontend/img/compliance/cwi-card-training.png',
                'left_card' => [
                    'icon' => 'ri-hospital-line',
                    'title' => $d['challenges_heading'] ?? 'Key Challenges',
                    'list' => array_slice($painPoints, 0, $mid),
                ],
                'center' => [
                    'icon' => 'ri-heart-pulse-line',
                    'title' => $d['challenges_heading'] ?? 'Why Healthcare Workforce Management Is Different',
                    'paragraphs' => $paragraphs,
                    'cta' => $d['cta'] ?? 'Discuss Workforce Challenges',
                    'cta_url' => $ctaHref,
                ],
                'right_card' => [
                    'icon' => 'ri-shield-check-line',
                    'title' => $d['challenges_heading'] ?? 'Key Challenges',
                    'list' => array_slice($painPoints, $mid),
                ],
                'right_image' => 'assets/frontend/img/compliance/cwi-integrity.png',
                'right_image_fallback' => 'assets/frontend/img/compliance/cwi-bento-advisor.png',
            ],
        ];
    } else {
        $center = $section['grid']['center'] ?? [];
        $ctaHref = $center['cta_url'] ?? $d['cta_href'] ?? '#industry-form';
        if (! str_starts_with($ctaHref, '#')) {
            $ctaHref = url($ctaHref);
        }
        $section['grid']['center']['cta_url'] = $ctaHref;
    }

    $section['use_industries_header'] = true;
    $section['list_use_fontawesome'] = $section['list_use_fontawesome'] ?? true;
    $section['paragraph_separators'] = true;
@endphp

@if (! empty($section))
<div id="industry-reality" class="industries-reality-standout industries-section--light">
    @include('frontend.pages.what-we-do.sections.dashboard-standout', ['section' => $section])
</div>

<style>
    .industries-reality-standout .cwi-standout {
        padding-top: var(--industries-section-pad, 80px);
        padding-bottom: var(--industries-section-pad, 80px);
    }
    .industries-reality-standout .cwi-standout > .container {
        max-width: 1300px;
        width: 100%;
        padding-left: 28px;
        padding-right: 28px;
    }
    .industries-reality-standout .title_all_box.industries-section-header {
        margin-bottom: 48px;
    }
    .industries-reality-standout .cwi-standout__grid {
        align-items: stretch;
        gap: 20px;
    }
    .industries-reality-standout .cwi-standout__col--left,
    .industries-reality-standout .cwi-standout__col--right {
        height: 100%;
        min-height: 100%;
    }
    .industries-reality-standout .cwi-standout__photo {
        flex: 1 1 0;
        display: flex;
        min-height: 200px;
        margin: 0;
    }
    .industries-reality-standout .cwi-standout__photo img {
        width: 100%;
        height: 100%;
        min-height: 200px;
        object-fit: cover;
    }
    .industries-reality-standout .cwi-standout__photo--landscape img {
        min-height: 200px;
        max-height: none;
    }
    .industries-reality-standout .cwi-standout__col--right .cwi-standout__photo--landscape img {
        min-height: 200px;
        max-height: none;
    }
    .industries-reality-standout .cwi-standout__card:not(.cwi-standout__card--tall) {
        flex: 0 0 auto;
        padding: 16px 18px;
    }
    .industries-reality-standout .cwi-standout__card--tall {
        height: 100%;
        min-height: 100%;
        padding: 16px 18px;
    }
    .industries-reality-standout .cwi-standout__card-head {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
    }
    .industries-reality-standout .cwi-standout__card-head h3 {
        margin: 0;
        font-size: 1.2rem;
        line-height: 1.3;
    }
    .industries-reality-standout .cwi-standout__card-icon {
        width: 64px;
        height: 64px;
        min-width: 64px;
        font-size: 32px;
        margin-bottom: 0;
        flex-shrink: 0;
    }
    .industries-reality-standout .cwi-standout__center-copy {
        flex: 1 1 auto;
        min-width: 0;
    }
    .industries-reality-standout .cwi-standout__center-copy p {
        margin: 0;
        font-size: 0.92rem;
        line-height: 1.6;
    }
    .industries-reality-standout .cwi-standout__center-copy .middle.left {
        display: block;
        width: 190px;
        margin: 16px 0;
        text-align: left;
    }
    .industries-reality-standout .cwi-standout__center-copy .middle.left::after {
        left: 0 !important;
    }
    .industries-reality-standout .cwi-standout__list--fa {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .industries-reality-standout .cwi-standout__list--fa li {
        display: grid;
        grid-template-columns: auto 1fr;
        column-gap: 10px;
        align-items: start;
        margin-bottom: 8px;
        padding-left: 0 !important;
        position: static;
        font-size: 0.9rem;
        line-height: 1.45;
        color: #4a4e56;
    }
    .industries-reality-standout .cwi-standout__list--fa li::before {
        display: none !important;
        content: none !important;
    }
    .industries-reality-standout .cwi-standout__list--fa li:last-child {
        margin-bottom: 0;
    }
    .industries-reality-standout .cwi-standout__list--fa li i {
        grid-column: 1;
        grid-row: 1;
        align-self: start;
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 1.05rem;
        height: 1.05rem;
        margin: calc((1.45em - 1.05rem) / 2) 0 0;
        font-size: 1.05rem;
        line-height: 1;
        color: #006039;
    }
    .industries-reality-standout .cwi-standout__list--fa li span {
        grid-column: 2;
        grid-row: 1;
        min-width: 0;
        line-height: 1.45;
    }
    .industries-reality-standout .cwi-standout__card > p {
        margin: 0 0 10px;
    }
    .industries-reality-standout .cwi-standout__cta-wrap {
        margin-top: auto;
        padding-top: 14px;
    }
    @media (min-width: 1600px) {
        .industries-reality-standout .cwi-standout > .container {
            max-width: 1520px;
        }
    }
    @media (max-width: 991.98px) {
        .industries-reality-standout .cwi-standout {
            padding-top: var(--industries-section-pad, 56px);
            padding-bottom: var(--industries-section-pad, 56px);
        }
        .industries-reality-standout .cwi-standout__photo {
            flex: 0 0 auto;
            min-height: 220px;
        }
        .industries-reality-standout .cwi-standout__photo img {
            min-height: 220px;
        }
    }
</style>
@endif

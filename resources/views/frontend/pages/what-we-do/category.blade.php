@extends('frontend.layouts.app')

@php
    $categorySlug = $categorySlug ?? 'compliance-workplace-integrity';
    $category = $category ?? config('what-we-do-categories.' . $categorySlug, []);
    $page = $page ?? config($category['page_config'] ?? 'compliance-workplace-integrity', []);
    $hero = $page['hero'] ?? [];
    $subServices = config(($category['sub_services_config'] ?? 'compliance-sub-services') . '.services', []);
    $serviceSlugs = array_keys($subServices);
    $subRouteName = ($category['route_name'] ?? 'compliance') . '.sub';
    $faqKey = $category['faq_key'] ?? 'compliance';
    $exploreHeading = $category['explore_heading'] ?? ($category['short_label'] ?? 'HR') . ' solutions in detail';

    $pageSections = $page['sections'] ?? [
        'hero', 'risk', 'services', 'framework', 'workplace_integrity', 'deliverables', 'suitable_for', 'sub_services',
    ];
    $sectionViews = [
        'hero' => 'hero',
        'risk' => 'risk',
        'services' => 'services',
        'framework' => 'framework',
        'workplace_integrity' => 'split-feature',
        'payroll_workflow' => 'workflow',
        'remote_desk' => 'split-feature',
        'reporting_dashboard' => 'dashboard',
        'board_advisory' => 'split-feature',
        'succession_journey' => 'journey',
        'assessment_tools' => 'card-grid',
        'candidate_quality' => 'split-feature',
        'staffing_models' => 'card-grid',
        'hiring_dashboard' => 'dashboard',
        'dedicated_partner' => 'split-feature',
        'monthly_review' => 'monthly-review',
        'engagement_plans' => 'card-grid',
        'deliverables' => 'deliverables',
        'suitable_for' => 'suitable-for',
        'sub_services' => 'sub-services',
    ];
@endphp

@section('content')

<style>
    .cwi-page {
        --cwi-green: #006039;
        --cwi-mint: #7dcea8;
        --cwi-navy: #0f172a;
        --cwi-dark: #060d0a;
        --cwi-slate: #64748b;
        overflow-x: clip;
    }
    .cwi-section--dark {
        background: linear-gradient(165deg, #060d0a 0%, #122820 45%, #1a2332 100%);
        color: #fff;
    }
    .cwi-section--dark .before_title { color: var(--cwi-mint); }
    .cwi-section--dark .title { color: #fff; }
    .cwi-section--dark p { color: rgba(255, 255, 255, 0.78); }
    .cwi-section--light {
        background: #f6f8f7;
        color: var(--cwi-navy);
    }
    .cwi-section--light .before_title { color: var(--cwi-green); }
    .cwi-section--light .title { color: var(--cwi-navy); }
    /* 1. Hero — same banner as HRaaS */
    .cwi-hero.hraas-hero.single_banner.style_one {
        padding: 90px 0 100px !important;
        min-height: 520px;
        background-color: #0d1612 !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
        background-size: cover !important;
        overflow: hidden;
    }
    .cwi-hero.hraas-hero.custom_black_overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(8, 14, 12, 0.78);
        z-index: 0;
    }
    .cwi-hero.hraas-hero .container {
        position: relative;
        z-index: 1;
    }
    .cwi-hero.hraas-hero .slider_content {
        text-align: center;
        width: 100%;
    }
    .cwi-hero.hraas-hero .d_inline_block {
        display: flex !important;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 14px;
        padding: 0;
        margin: 0;
    }
    .cwi-hero.hraas-hero .d_inline_block li {
        list-style: none;
    }
    .cwi-hero.hraas-hero.single_banner.style_one .slider_content h1 {
        font-size: 36px;
        line-height: 1.25;
        font-weight: 800;
        margin-bottom: 16px;
        color: #fff !important;
    }
    .cwi-hero.hraas-hero.single_banner.style_one .slider_content h6 {
        background: transparent !important;
        color: #7dcea8 !important;
        padding: 0 !important;
        border-radius: 0;
        font-size: 14px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .cwi-hero.hraas-hero .hero-tagline {
        color: #d3a126 !important;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .cwi-hero.hraas-hero .hero-headline {
        color: #fff !important;
        font-size: 1.15rem;
        font-weight: 700;
        line-height: 1.45;
        margin: 0 auto 14px;
        max-width: 720px;
    }
    .cwi-hero.hraas-hero .hero-intro {
        color: rgba(255, 255, 255, 0.92) !important;
        font-size: 1.05rem;
        line-height: 1.7;
        margin: 0 auto 24px;
        max-width: 960px;
    }
    .cwi-hero.hraas-hero .theme-btn.two {
        color: #fff !important;
        border-color: #fff !important;
    }
    @media (max-width: 991.98px) {
        .cwi-hero.hraas-hero.single_banner.style_one {
            padding: 70px 0 80px !important;
            min-height: auto;
        }
        .cwi-hero.hraas-hero.custom_black_overlay::before {
            background: rgba(8, 14, 12, 0.88);
        }
    }

    /* 2. Risk Reality — editorial intro + card / visual split */
    .cwi-risk {
        padding: 76px 0 48px;
        background: linear-gradient(180deg, #f4f7f5 0%, #fff 100%);
    }
    .cwi-risk__header {
        max-width: 960px;
        margin: 0 auto 28px;
        text-align: center;
    }
    .cwi-risk__eyebrow {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--cwi-green);
        margin-bottom: 10px;
    }
    .cwi-risk__header h2 {
        margin: 0 0 12px;
        font-size: clamp(1.65rem, 3vw, 2.15rem);
        font-weight: 800;
        line-height: 1.22;
        color: var(--cwi-navy);
        letter-spacing: -0.02em;
    }
    .cwi-risk__header .cwi-risk__lead {
        margin: 0 0 8px;
        font-size: 1.05rem;
        font-weight: 600;
        color: var(--cwi-navy);
        line-height: 1.5;
    }
    .cwi-risk__header .cwi-risk__text {
        margin: 0;
        font-size: 0.98rem;
        color: var(--cwi-slate);
        line-height: 1.65;
    }
    .cwi-risk__body {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 20px;
        align-items: stretch;
        max-width: 1080px;
        margin: 0 auto;
    }
    .cwi-risk__card {
        background: #fff;
        border: 1px solid #e3e9ef;
        border-radius: 18px;
        padding: 26px 24px 24px;
        box-shadow: 0 14px 40px rgba(15, 23, 42, 0.07);
        display: flex;
        flex-direction: column;
    }
    .cwi-risk__card-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--cwi-green);
        margin-bottom: 16px;
    }
    .cwi-risk__card-label i {
        font-size: 1.1rem;
    }
    .cwi-risk__list {
        list-style: none;
        margin: 0 0 20px;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 8px;
        flex: 1;
    }
    .cwi-risk__list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 10px 12px;
        background: #f8faf9;
        border-radius: 10px;
        border: 1px solid #e8eeeb;
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--cwi-navy);
        line-height: 1.4;
    }
    .cwi-risk__list li i {
        flex-shrink: 0;
        width: 22px;
        height: 22px;
        border-radius: 6px;
        background: rgba(220, 38, 38, 0.1);
        color: #dc2626;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        margin-top: 1px;
    }
    .cwi-risk__card .theme-btn.one {
        align-self: flex-start;
    }
    .cwi-risk__visual {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        min-height: 100%;
        border: 1px solid #e3e9ef;
        box-shadow: 0 14px 40px rgba(15, 23, 42, 0.1);
    }
    .cwi-risk__visual img {
        width: 100%;
        height: 100%;
        min-height: 340px;
        object-fit: cover;
        display: block;
    }
    .cwi-risk__visual-cap {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 18px 20px;
        background: linear-gradient(0deg, rgba(6, 13, 10, 0.92) 0%, transparent 100%);
        color: #fff;
    }
    .cwi-risk__visual-cap strong {
        display: block;
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 4px;
    }
    .cwi-risk__visual-cap span {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.82);
        line-height: 1.45;
    }
    .cwi-risk__visual-col {
        display: flex;
        flex-direction: column;
        gap: 0;
        min-height: 100%;
    }
    .cwi-risk__visual--no-cap img {
        border-radius: 18px 18px 0 0;
    }
    .cwi-risk__visual-cap-below {
        padding: 20px 22px;
        background: #fff;
        border: 1px solid #e3e9ef;
        border-top: none;
        border-radius: 0 0 18px 18px;
        box-shadow: 0 14px 40px rgba(15, 23, 42, 0.08);
    }
    .cwi-risk__visual-cap-below strong {
        display: block;
        font-size: 1.05rem;
        font-weight: 800;
        color: var(--cwi-navy);
        margin-bottom: 8px;
        line-height: 1.35;
    }
    .cwi-risk__visual-cap-below p {
        margin: 0;
        font-size: 0.92rem;
        line-height: 1.6;
        color: var(--cwi-slate);
    }

    /* 3. Services — dark process split (steps + center image) */
    .cwi-services {
        padding: 48px 0 80px;
        margin-top: 0;
    }
    .cwi-services .title_all_box {
        margin-bottom: 0;
    }
    .cwi-services .title_sections .before_title {
        font-size: 14px !important;
        line-height: 1.4 !important;
        padding-bottom: 6px !important;
    }
    .cwi-services .title_sections .title {
        font-size: clamp(1.65rem, 3vw, 2.15rem) !important;
        line-height: 1.28 !important;
        padding-bottom: 8px !important;
    }
    .cwi-services .title_sections p {
        max-width: 720px;
        margin: 8px auto 0;
        font-size: 1rem;
        line-height: 1.65;
        padding-bottom: 0 !important;
        color: rgba(255, 255, 255, 0.78);
    }
    .cwi-services__process {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(240px, 320px) minmax(0, 1fr);
        gap: 28px 36px;
        align-items: center;
        margin-top: 32px;
    }
    .cwi-services__col {
        display: flex;
        flex-direction: column;
    }
    .cwi-services-step {
        position: relative;
        padding: 22px 0 26px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
    }
    .cwi-services-step:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .cwi-services-step:first-child {
        padding-top: 0;
    }
    .cwi-services-step__watermark {
        position: absolute;
        top: 0;
        left: 0;
        font-size: clamp(3.5rem, 6vw, 4.75rem);
        font-weight: 800;
        line-height: 1;
        color: rgba(255, 255, 255, 0.07);
        pointer-events: none;
        user-select: none;
        z-index: 0;
    }
    .cwi-services-step--right {
        text-align: right;
    }
    .cwi-services-step--right .cwi-services-step__watermark {
        left: auto;
        right: 0;
    }
    .cwi-services-step__icon {
        position: relative;
        z-index: 1;
        display: inline-flex;
        margin-bottom: 10px;
        font-size: 42px;
        line-height: 1;
        color: var(--cwi-mint);
    }
    .cwi-services-step--right .cwi-services-step__icon {
        justify-content: flex-end;
        width: 100%;
    }
    .cwi-services-step__body {
        position: relative;
        z-index: 1;
    }
    .cwi-services-step__body h3 {
        margin: 0 0 8px;
        font-size: 1.05rem;
        font-weight: 700;
        line-height: 1.35;
        color: #fff;
    }
    .cwi-services-step__body p {
        margin: 0;
        font-size: 0.9rem;
        line-height: 1.55;
        color: rgba(255, 255, 255, 0.72);
    }
    .cwi-services-step__link {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .cwi-services-step__link:hover { color: var(--cwi-mint); }
    .cwi-services__media {
        margin: 0;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 22px 50px rgba(0, 0, 0, 0.35);
        border: 1px solid rgba(125, 206, 168, 0.25);
    }
    .cwi-services__media img {
        display: block;
        width: 100%;
        height: auto;
        min-height: 440px;
        object-fit: cover;
        vertical-align: middle;
    }

    /* 4. Framework — light, horizontal pipeline */
    .cwi-framework { padding: 88px 0; }
    .cwi-framework__track {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 0;
        margin-top: 48px;
        position: relative;
    }
    .cwi-framework__track::before {
        content: '';
        position: absolute;
        top: 36px;
        left: 8%;
        right: 8%;
        height: 3px;
        background: linear-gradient(90deg, var(--cwi-green), var(--cwi-mint));
        z-index: 0;
        transform: scaleX(0);
        transform-origin: left center;
        transition: transform 1.15s cubic-bezier(0.22, 1, 0.36, 1) 0.2s;
    }
    .cwi-framework__track.is-visible::before {
        transform: scaleX(1);
    }
    .cwi-framework-step {
        text-align: center;
        padding: 0 12px;
        position: relative;
        z-index: 1;
    }
    .cwi-framework-step__dot {
        width: 72px;
        height: 72px;
        margin: 0 auto 18px;
        border-radius: 50%;
        background: #fff;
        border: 3px solid var(--cwi-green);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: var(--cwi-green);
        box-shadow: 0 8px 24px rgba(0, 96, 57, 0.15);
    }
    .cwi-framework-step__title {
        margin: 0;
        font-size: 1.15rem;
        font-weight: 800;
        color: var(--cwi-green);
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }
    .cwi-framework-step__subtitle {
        margin: 0 0 8px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--cwi-slate);
        text-transform: uppercase;
        letter-spacing: 0.08em;
    }
    .cwi-framework-step p {
        margin: 0;
        font-size: 0.875rem;
        line-height: 1.55;
        color: var(--cwi-slate);
    }

    /* 5. Integrity — split copy + hex visual with float cards */
    .cwi-integrity { padding: 80px 0; }
    .cwi-integrity__layout {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 40px 48px;
        align-items: center;
    }
    .cwi-integrity__eyebrow {
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        color: var(--cwi-mint);
        margin-bottom: 8px;
        letter-spacing: 0.02em;
    }
    .cwi-integrity__copy h2 {
        margin: 0 0 14px;
        font-size: clamp(1.75rem, 3.2vw, 2.35rem);
        font-weight: 800;
        line-height: 1.2;
        color: #fff;
        letter-spacing: -0.02em;
    }
    .cwi-integrity__intro {
        margin: 0 0 24px;
        font-size: 1rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.78);
        max-width: 520px;
    }
    .cwi-integrity-feature {
        display: flex;
        gap: 16px;
        margin-bottom: 22px;
        align-items: flex-start;
    }
    .cwi-integrity-feature__icon {
        flex-shrink: 0;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: var(--cwi-green);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        box-shadow: 0 8px 20px rgba(0, 96, 57, 0.35);
    }
    .cwi-integrity-feature h3 {
        margin: 0 0 6px;
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
        line-height: 1.35;
    }
    .cwi-integrity-feature p {
        margin: 0;
        font-size: 0.9rem;
        line-height: 1.55;
        color: rgba(255, 255, 255, 0.72);
    }
    .cwi-integrity__actions {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: flex-start;
        gap: 24px 32px;
        margin-top: 8px;
    }
    .cwi-integrity__actions .theme_btn_all {
        flex: 0 0 auto;
        width: auto !important;
        max-width: none;
        margin: 0 !important;
        display: inline-block;
    }
    .cwi-integrity__actions .theme-btn.one {
        white-space: nowrap;
    }
    .cwi-integrity__trust {
        flex: 0 1 auto;
        min-width: 0;
        max-width: 360px;
        margin: 0;
    }
    /* Paired CTAs: dark = outline → filled on hover; light = filled → outline on hover */
    a.cwi-btn-cta.theme-btn.one {
        border: 2px solid transparent;
        transition: background 0.35s ease, color 0.35s ease, border-color 0.35s ease, border-radius 0.35s ease;
    }
    a.cwi-btn-cta--on-dark {
        background: transparent !important;
        border-color: var(--cwi-mint) !important;
        color: var(--cwi-mint) !important;
    }
    a.cwi-btn-cta--on-dark:hover,
    a.cwi-btn-cta--on-dark:focus-visible {
        background: var(--cwi-green) !important;
        border-color: var(--cwi-green) !important;
        color: #fff !important;
        border-radius: 0 10px 0 10px;
    }
    a.cwi-btn-cta--on-dark:hover i,
    a.cwi-btn-cta--on-dark:hover i::before,
    a.cwi-btn-cta--on-dark:focus-visible i,
    a.cwi-btn-cta--on-dark:focus-visible i::before {
        color: #fff !important;
    }
    a.cwi-btn-cta--on-light {
        background: var(--cwi-green) !important;
        border-color: var(--cwi-green) !important;
        color: #fff !important;
    }
    a.cwi-btn-cta--on-light:hover,
    a.cwi-btn-cta--on-light:focus-visible {
        background: transparent !important;
        border-color: var(--cwi-mint) !important;
        color: var(--cwi-green) !important;
        border-radius: 0 10px 0 10px;
    }
    a.cwi-btn-cta--on-light:hover i,
    a.cwi-btn-cta--on-light:hover i::before,
    a.cwi-btn-cta--on-light:focus-visible i,
    a.cwi-btn-cta--on-light:focus-visible i::before {
        color: var(--cwi-green) !important;
    }
    .cwi-integrity__trust strong {
        display: block;
        font-size: 0.95rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 2px;
    }
    .cwi-integrity__trust span {
        font-size: 0.82rem;
        color: rgba(255, 255, 255, 0.65);
    }
    .cwi-integrity__visual {
        position: relative;
        min-height: 480px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .cwi-integrity__hex {
        position: relative;
        width: 100%;
        max-width: 380px;
        margin: 0 auto;
        aspect-ratio: 4 / 5;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        overflow: hidden;
        box-shadow: 0 28px 60px rgba(0, 0, 0, 0.4);
        border: 3px solid rgba(125, 206, 168, 0.35);
    }
    .cwi-integrity__hex img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .cwi-integrity-float {
        position: absolute;
        z-index: 2;
        max-width: 250px;
        background: #fff;
        border-radius: 12px;
        padding: 18px 18px 16px;
        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.22);
    }
    .cwi-integrity-float--top {
        top: 6%;
        left: 0;
    }
    .cwi-integrity-float--bottom {
        bottom: 8%;
        right: 0;
    }
    .cwi-integrity-float__icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: rgba(0, 96, 57, 0.1);
        color: var(--cwi-green);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        margin-bottom: 10px;
    }
    .cwi-integrity-float h4 {
        margin: 0 0 6px;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--cwi-navy);
        line-height: 1.3;
    }
    .cwi-integrity-float p {
        margin: 0 0 10px;
        font-size: 0.8rem;
        line-height: 1.5;
        color: var(--cwi-slate);
    }
    .cwi-integrity-float__link {
        font-size: 0.78rem;
        font-weight: 700;
        color: var(--cwi-green);
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }
    .cwi-integrity-float__link:hover {
        color: var(--cwi-navy);
    }

    /* 6. Deliverables — dark, three solution cards */
    .cwi-deliverables { padding: 80px 0; }
    .cwi-deliverables .title_sections .title {
        color: #fff !important;
    }
    .cwi-deliverables .title_sections p {
        max-width: 680px;
        margin: 10px auto 0;
        font-size: 1rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.78);
    }
    .cwi-deliverables__cards {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
        margin-top: 40px;
        align-items: stretch;
    }
    .cwi-del-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        min-height: 420px;
        background: #0a1210;
        border: 1px solid rgba(125, 206, 168, 0.18);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
    }
    .cwi-del-card__bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0.45;
    }
    .cwi-del-card__bg::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(6, 13, 10, 0.2) 0%, rgba(6, 13, 10, 0.85) 100%);
    }
    .cwi-del-card--featured .cwi-del-card__bg {
        opacity: 0.85;
    }
    .cwi-del-card--featured .cwi-del-card__bg::after {
        background: linear-gradient(180deg, transparent 35%, rgba(6, 13, 10, 0.92) 100%);
    }
    .cwi-del-card__panel {
        position: absolute;
        left: 16px;
        right: 16px;
        bottom: 16px;
        background: #fff;
        border-radius: 12px;
        padding: 22px 20px 20px;
        z-index: 2;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.18);
    }
    .cwi-del-card--standard .cwi-del-card__panel {
        top: auto;
    }
    .cwi-del-card__icon {
        width: 52px;
        height: 52px;
        border-radius: 10px;
        background: rgba(0, 96, 57, 0.1);
        color: var(--cwi-green);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin-bottom: 12px;
    }
    .cwi-del-card__panel h3 {
        margin: 0 0 8px;
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--cwi-navy);
        line-height: 1.35;
    }
    .cwi-del-card__panel > p {
        margin: 0 0 14px;
        font-size: 0.88rem;
        line-height: 1.55;
        color: var(--cwi-slate);
    }
    .cwi-del-card__bullets {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .cwi-del-card__bullets li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.84rem;
        line-height: 1.45;
        color: var(--cwi-navy);
        font-weight: 500;
        margin-bottom: 8px;
    }
    .cwi-del-card__bullets li:last-child {
        margin-bottom: 0;
    }
    .cwi-del-card__bullets li::before {
        content: '';
        flex-shrink: 0;
        width: 8px;
        height: 8px;
        margin-top: 5px;
        background: var(--cwi-green);
        border-radius: 2px;
    }
    .cwi-del-card--featured .cwi-del-card__panel {
        padding-top: 18px;
    }
    .cwi-del-card--featured .cwi-del-card__panel > p {
        margin-bottom: 0;
    }

    /* 7. Suitable — light, circular step icons */
    .cwi-suitable {
        padding: 80px 0;
        background: #fff;
    }
    .cwi-suitable .title_sections .before_title {
        font-size: 14px !important;
        line-height: 1.4 !important;
        padding-bottom: 6px !important;
    }
    .cwi-suitable .title_sections .title {
        font-size: clamp(1.65rem, 3vw, 2.15rem) !important;
        line-height: 1.28 !important;
        color: var(--cwi-navy) !important;
    }
    .cwi-suitable__steps {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 28px 20px;
        margin-top: 48px;
    }
    .cwi-suitable-step {
        text-align: center;
        padding: 0 8px;
    }
    .cwi-suitable-step__icon-wrap {
        position: relative;
        width: 150px;
        height: 150px;
        margin: 0 auto 22px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 14px 45px rgba(15, 23, 42, 0.1);
        border: 1px solid #eef2f6;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }
    .cwi-suitable-step:hover .cwi-suitable-step__icon-wrap {
        box-shadow: 0 18px 50px rgba(0, 96, 57, 0.15);
        transform: translateY(-4px);
    }
    .cwi-suitable-step__num {
        position: absolute;
        top: 4px;
        right: 4px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: var(--cwi-green);
        color: #fff;
        font-size: 0.8rem;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 16px rgba(0, 96, 57, 0.35);
        z-index: 1;
    }
    .cwi-suitable-step__icon {
        font-size: 52px;
        line-height: 1;
        color: var(--cwi-navy);
    }
    .cwi-suitable-step h3 {
        margin: 0 0 10px;
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--cwi-navy);
        line-height: 1.35;
    }
    .cwi-suitable-step p {
        margin: 0 auto;
        max-width: 240px;
        font-size: 0.88rem;
        line-height: 1.55;
        color: var(--cwi-slate);
    }

    /* Sub-service nav cards (shared with sub-pages) */
    .cwi-related-services__card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #e8edf2;
        height: 100%;
        transition: box-shadow 0.25s ease;
    }
    .cwi-related-services__card:hover { box-shadow: 0 12px 32px rgba(0, 96, 57, 0.12); }
    .cwi-related-services__card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        display: block;
    }
    .cwi-related-services__body { padding: 20px 20px 22px; }
    .cwi-related-services__body h3 {
        margin: 0 0 12px;
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--cwi-navy);
        line-height: 1.35;
    }
    .cwi-related-services__body h3 a { color: inherit; text-decoration: none; }
    .cwi-related-services__link {
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--cwi-green);
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }
    .cwi-related-services__link:hover { color: var(--cwi-navy); }

    /* 8. CTA — shared partial */
    .cwi-cta { padding: 48px 0 0; background: #f6f8f7; }
    #faqs-compliance.mirashka-faq-category {
        padding-top: 28px;
    }
    #faqs-compliance.mirashka-faq-category > .pt-5,
    #faqs-compliance.mirashka-faq-category > .pd_top_80 {
        display: none;
    }
    .cwi-cta__card {
        border-radius: 20px;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr auto;
        align-items: stretch;
        background-size: cover;
        background-position: center;
        min-height: 300px;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.15);
    }
    .cwi-cta__overlay {
        grid-column: 1 / -1;
        grid-row: 1;
        background: linear-gradient(105deg, rgba(6, 13, 10, 0.94) 0%, rgba(0, 96, 57, 0.82) 100%);
        display: grid;
        grid-template-columns: 1fr auto;
        align-items: center;
        padding: 48px 40px;
        gap: 24px;
    }
    .cwi-cta__copy h2 {
        color: #fff;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        margin: 0 0 12px;
    }
    .cwi-cta__copy p {
        color: rgba(255, 255, 255, 0.85);
        margin: 0 0 22px;
        max-width: 520px;
        line-height: 1.65;
    }
    .cwi-cta__actions { display: flex; flex-wrap: wrap; gap: 12px; }
    .cwi-cta__actions .theme-btn.two {
        color: #fff !important;
        border-color: rgba(255, 255, 255, 0.9) !important;
        background: transparent !important;
    }
    .cwi-cta__actions .theme-btn.two:hover {
        color: var(--cwi-navy) !important;
        background: #fff !important;
        border-color: #fff !important;
    }
    .cwi-cta__person {
        max-height: 280px;
        width: auto;
        object-fit: contain;
        align-self: flex-end;
    }

    @media (max-width: 1199px) {
        .cwi-deliverables__cards,
        .cwi-suitable__steps { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .cwi-framework__track { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 32px; }
        .cwi-framework__track::before { display: none; }
    }
    @media (max-width: 991px) {
        .cwi-risk__body {
            grid-template-columns: 1fr;
        }
        .cwi-risk__visual img {
            min-height: 280px;
        }
        .cwi-services__process {
            grid-template-columns: 1fr;
            gap: 32px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }
        .cwi-services__media { order: -1; }
        .cwi-services__media img { min-height: 320px; }
        .cwi-services-step--right { text-align: left; }
        .cwi-services-step--right .cwi-services-step__watermark {
            left: 0;
            right: auto;
        }
        .cwi-services-step--right .cwi-services-step__icon {
            justify-content: flex-start;
            width: auto;
        }
        .cwi-integrity__layout { grid-template-columns: 1fr; }
        .cwi-integrity__visual {
            min-height: 420px;
            order: -1;
            max-width: 400px;
            margin: 0 auto;
        }
        .cwi-integrity-float--top { left: -4%; }
        .cwi-integrity-float--bottom { right: -4%; }
        .cwi-integrity__actions {
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 16px 24px;
        }
        .cwi-integrity__actions .theme_btn_all {
            width: 100% !important;
        }
        .cwi-integrity__trust { max-width: none; flex: 1 1 100%; }
        .cwi-cta__overlay { grid-template-columns: 1fr; }
        .cwi-cta__person { display: none; }
    }
    @media (max-width: 575px) {
        .cwi-deliverables__cards,
        .cwi-suitable__steps,
        .cwi-framework__track { grid-template-columns: 1fr; }
        .cwi-suitable-step__icon-wrap {
            width: 130px;
            height: 130px;
        }
        .cwi-del-card { min-height: 380px; }
        .cwi-integrity__visual {
            min-height: auto;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .cwi-integrity-float {
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            bottom: auto;
            max-width: none;
            margin-top: 14px;
        }
        .cwi-integrity-float--top { order: 2; }
        .cwi-integrity__hex { order: 1; max-width: 280px; }
        .cwi-integrity-float--bottom { order: 3; }
    }
</style>

@include('frontend.pages.what-we-do.category-extra-styles')
@include('frontend.layouts.common.sections.what-we-do.category-animations')

<div class="cwi-page" data-cwi-page>

@foreach($pageSections as $sectionId)
    @php
        $viewName = $sectionViews[$sectionId] ?? null;
        if ($sectionId === 'payroll_workflow' && ($page['payroll_workflow']['layout'] ?? '') === 'tabs') {
            $viewName = 'payroll-workflow-tabs';
        }
        if ($sectionId === 'monthly_review' && ($page['monthly_review']['layout'] ?? '') === 'media-split') {
            $viewName = 'monthly-review-media';
        }
        if (in_array($sectionId, ['reporting_dashboard', 'hiring_dashboard'], true)
            && ($page[$sectionId]['layout'] ?? '') === 'standout-grid') {
            $viewName = 'dashboard-standout';
        }
        if (! $viewName) {
            continue;
        }
        if ($sectionId === 'sub_services' && ! count($subServices)) {
            continue;
        }
        $sectionAliases = [
            'workplace_integrity' => ['workplace_integrity', 'integrity', 'board_advisory', 'remote_desk', 'candidate_quality', 'dedicated_partner'],
        ];
        if ($sectionId === 'hero') {
            $sectionData = $hero;
        } elseif (isset($sectionAliases[$sectionId])) {
            $sectionData = null;
            foreach ($sectionAliases[$sectionId] as $aliasKey) {
                if (! empty($page[$aliasKey])) {
                    $sectionData = $page[$aliasKey];
                    break;
                }
            }
        } else {
            $sectionData = $page[$sectionId] ?? null;
        }
        if ($sectionId !== 'hero' && $sectionId !== 'sub_services' && empty($sectionData)) {
            continue;
        }
    @endphp
    @include('frontend.pages.what-we-do.sections.' . $viewName, [
        'section' => $sectionData,
        'hero' => $hero,
        'serviceSlugs' => $serviceSlugs,
        'subRouteName' => $subRouteName,
        'subServices' => $subServices,
        'exploreHeading' => $exploreHeading,
    ])
@endforeach

@include('frontend.layouts.common.sections.compliance.cta', ['cta' => $page['cta'] ?? null])

@include('frontend.layouts.common.sections.faqs.category', [
    'categoryKey' => $faqKey,
    'sectionClass' => 'cwi-section--light cwi-section-glow',
    'compactTop' => true,
    'animate' => true,
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
        '.cwi-risk__card',
        '.cwi-risk__list',
        '.cwi-risk__visual',
        '.cwi-services-step',
        '.cwi-services__media',
        '.cwi-framework__track',
        '.cwi-framework-step',
        '.cwi-integrity__hex',
        '.cwi-integrity-float',
        '.cwi-del-card',
        '.cwi-suitable-step',
        '.cwi-related-services__card',
        '.cwi-workflow__step',
        '.cwi-workflow__visual',
        '.cwi-payroll-tabs__header',
        '.cwi-payroll-tabs__panel',
        '.cwi-dashboard__metric',
        '.cwi-dashboard__figure',
        '.cwi-standout__header',
        '.cwi-standout__col--left',
        '.cwi-standout__col--center',
        '.cwi-standout__col--right',
        '.cwi-journey__phase',
        '.cwi-card-grid__card',
        '.cwi-monthly__visual',
        '.cwi-monthly__agenda li',
        '.cwi-monthly-media__header',
        '.cwi-monthly-media__visual',
        '.cwi-monthly-media__grid-item',
        '.cwi-risk__visual-col',
        '.mirashka-faq-category.cwi-anim'
    ].join(', ');

    var revealAll = function () {
        root.querySelectorAll(animatedSelector).forEach(function (el) {
            el.classList.add('is-visible');
        });
    };

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        revealAll();
        return;
    }

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
})();
</script>
@endpush

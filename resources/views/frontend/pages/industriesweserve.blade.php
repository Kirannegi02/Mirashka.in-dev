@extends('frontend.layouts.app')

@php
    $p = config('industries-we-serve');
@endphp

@section('content')
<style>
    p.gold {
        margin-bottom: 0;
        margin-top: 10px;
    }
    .textbg {
        background-color: #FFFFFF;
        padding: 10px !important;
        border-radius: 8px !important;
    }
    #industriesHeroBanner {
        position: relative;
    }
    #industriesHeroBanner .tab-content {
        position: relative;
        min-height: max(680px, 82vh);
    }
    #industriesHeroBanner .tab-pane {
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: max(680px, 82vh);
        height: auto !important;
        padding-bottom: 88px;
        box-sizing: border-box;
    }
    #industriesHeroBanner .tab-pane::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse 85% 75% at 50% 42%, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0.72) 72%),
            linear-gradient(180deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.62) 50%, rgba(0, 0, 0, 0.5) 100%);
        z-index: 1;
        pointer-events: none;
    }
    #industriesHeroBanner .tab-pane .container {
        padding-top: 72px;
        padding-bottom: 24px;
        position: relative;
        z-index: 2;
    }
    #industriesHeroBanner .tentArea {
        padding-bottom: 12px;
        max-width: 1060px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }
    #industriesHeroBanner .tentArea h2.text-white {
        font-size: var(--industries-heading);
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 12px;
    }
    #industriesHeroBanner .tentArea p.text-white {
        margin: 12px 0 20px;
        max-width: 100%;
    }
    #industriesHeroBanner .tentArea .textbg {
        display: inline-block;
        width: auto;
        max-width: 100%;
    }
    #industriesHeroBanner .animate_down {
        margin-top: 20px;
        margin-bottom: 0;
    }
    #industriesHeroBanner .container {
        position: relative;
        z-index: 2;
    }
    #industriesHeroBanner .hero-cta-list {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        padding: 0;
        margin: 0;
        list-style: none;
        justify-content: center;
    }
    #industriesHeroBanner .tentArea .line {
        display: block;
        margin: 12px auto 0;
    }
    #industriesHeroBanner .theme_btn_all .theme-btn {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 0 28px !important;
        min-height: 52px !important;
        min-width: 160px !important;
        font-size: var(--industries-text) !important;
        font-weight: 600 !important;
        line-height: 1.25 !important;
        text-decoration: none !important;
        border-radius: 10px 0 10px 0 !important;
        transition: all 0.5s ease !important;
    }
    #industriesHeroBanner .theme_btn_all .theme-btn.one {
        background: var(--primary-color-one, #006039) !important;
        color: #fff !important;
        border: 1px solid var(--primary-color-one, #006039) !important;
    }
    #industriesHeroBanner .theme_btn_all .theme-btn.one:hover {
        background: #fff !important;
        color: var(--primary-color-one, #006039) !important;
        border-color: var(--primary-color-one, #006039) !important;
        border-radius: 0 10px 0 10px !important;
    }
    #industriesHeroBanner .theme_btn_all .theme-btn.two {
        background: transparent !important;
        color: #fff !important;
        border: 1px solid #fff !important;
    }
    #industriesHeroBanner .theme_btn_all .theme-btn.two:hover {
        background: #fff !important;
        color: var(--primary-color-one, #006039) !important;
        border-color: #fff !important;
        border-radius: 0 10px 0 10px !important;
    }
    @media (max-width: 768px) {
        #industriesHeroBanner .tab-content,
        #industriesHeroBanner .tab-pane {
            min-height: max(560px, 78vh);
        }
        #industriesHeroBanner .tab-pane {
            padding-bottom: 72px;
        }
        #industriesHeroBanner .tab-pane .container {
            padding-top: 48px;
        }
        #industriesHeroBanner .tentArea {
            text-align: center;
            margin: auto;
        }
    }

    .industries-page {
        --industries-radius: 8px;
        --industries-text: 17px;
        --industries-heading: clamp(1.75rem, 3.2vw, 2.25rem);
        --industries-eyebrow: 12px;
        --industries-line: 1.7;
    }
    .industries-page,
    .industries-page p,
    .industries-page li,
    .industries-page label,
    .industries-page input,
    .industries-page textarea,
    .industries-page select,
    .industries-page .theme-btn {
        font-size: var(--industries-text);
        line-height: 1.7;
    }
    .industries-page .before_title {
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }
    .industries-page .title_all_box .title_sections .before_title {
        text-decoration: none;
        padding-bottom: 0;
    }
    .industries-page .cwi-title-draw .title_sections .before_title::after,
    .industries-page .cwi-title-draw.is-visible .title_sections .before_title::after {
        display: none !important;
        content: none !important;
    }
    .industries-reality-dashboard .pd_top_80 {
        padding-top: 48px;
    }
    .industries-reality-dashboard .pd_bottom_80 {
        padding-bottom: 48px;
    }
    .industries-reality-dashboard .hraas-dashboard-panel {
        grid-template-columns: minmax(280px, 320px) 1fr;
        align-items: center;
        min-height: 0;
        margin-top: 28px;
    }
    .industries-reality-dashboard .hraas-dashboard-tabs {
        align-self: center;
    }
    .industries-reality-dashboard .hraas-dashboard-sidebar-pain {
        padding: 16px 20px 12px;
    }
    .industries-reality-dashboard .hraas-dashboard-sidebar-pain-list {
        list-style: none;
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .industries-reality-dashboard .hraas-dashboard-sidebar-pain-list li {
        position: relative;
        padding: 5px 0 5px 14px;
        font-size: 0.8125rem;
        font-weight: 500;
        line-height: 1.35;
        color: #475569;
        border-top: 1px solid #eef2f6;
    }
    .industries-reality-dashboard .hraas-dashboard-sidebar-pain-list li:first-child {
        border-top: none;
        padding-top: 0;
    }
    .industries-reality-dashboard .hraas-dashboard-sidebar-pain-list li:last-child {
        padding-bottom: 0;
    }
    .industries-reality-dashboard .hraas-dashboard-sidebar-pain-list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0.72em;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #006039;
    }
    .industries-reality-dashboard .hraas-dashboard-sidebar-pain-list li:first-child::before {
        top: 0.45em;
    }
    .industries-reality-dashboard .hraas-dashboard-cta {
        padding: 16px 20px;
    }
    .industries-reality-dashboard .hraas-dashboard-cta__icon {
        width: 38px;
        height: 38px;
        font-size: 18px;
    }
    .industries-reality-dashboard .hraas-dashboard-stage {
        min-height: 380px;
    }
    .industries-reality-dashboard .hraas-dashboard-pane__overlay {
        background: linear-gradient(180deg, rgba(15, 23, 42, 0.55) 0%, rgba(15, 23, 42, 0.82) 100%);
    }
    .industries-reality-dashboard .hraas-dashboard-pane__inner {
        align-items: center;
        justify-content: center;
        padding: 28px 48px;
    }
    .industries-reality-dashboard .hraas-dashboard-pane__text {
        margin: 0;
        text-align: center;
    }
    .industries-reality-dashboard .hraas-dashboard-pane__text + .hraas-dashboard-pane__text {
        margin-top: 0.75rem;
    }
    .industries-reality-dashboard .hraas-dashboard-pane__copy--full .industry-reality-separator.line {
        display: block;
        width: 80px;
        border: 2px solid #f19c31;
        margin: 18px auto;
    }
    .industries-reality-dashboard .hraas-dashboard-pane__copy--full {
        max-width: 620px;
        margin: 0 auto;
        text-align: center;
    }
    .industries-reality-dashboard .hraas-dashboard-pane__subtitle {
        margin: 1.25rem 0 0.5rem;
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }
    .industries-reality-dashboard .hraas-dashboard-pane .before_title {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        font-size: 0.85rem;
        margin-bottom: 0.5rem;
    }
    @media (max-width: 991px) {
        .industries-reality-dashboard .hraas-dashboard-panel {
            grid-template-columns: 1fr;
        }
        .industries-reality-dashboard .hraas-dashboard-tabs {
            margin-right: 0;
            margin-bottom: 24px;
        }
        .industries-reality-dashboard .hraas-dashboard-stage {
            min-height: 320px;
        }
        .industries-reality-dashboard .hraas-dashboard-pane__inner {
            padding: 24px 20px;
            align-items: center;
            justify-content: center;
        }
        .industries-reality-dashboard .hraas-dashboard-pane__copy--full {
            max-width: 100%;
        }
    }
    .industries-page .industry-card,
    .industries-page .pulse-card,
    .industries-page .challenge-box,
    .industries-page .usecase-card,
    .industries-page .faq-card,
    .industries-page .blog-preview-card,
    .industries-page .industry-form-wrap,
    .industries-page .process_box_outer_two,
    .industries-page .service-mini-card,
    .industries-page input,
    .industries-page select,
    .industries-page textarea,
    .industries-page .video_box,
    .industries-page .industry-thumb,
    .industries-page .bg-light-section { background: #f4f6f8; }
    .industries-page .bg-dark-section {
        background: #101820;
        color: #fff;
    }
    .industries-page .bg-dark-section h1,
    .industries-page .bg-dark-section h2,
    .industries-page .bg-dark-section h3,
    .industries-page .bg-dark-section h4,
    .industries-page .bg-dark-section .before_title,
    .industries-page .bg-dark-section p,
    .industries-page .bg-dark-section li {
        color: #fff;
    }
    .industries-page .industry-card,
    .industries-page .pulse-card,
    .industries-page .challenge-box,
    .industries-page .usecase-card,
    .industries-page .faq-card,
    .industries-page .blog-preview-card,
    .industries-page .service-mini-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        padding: 24px;
        height: 100%;
    }
    .industries-page .bg-dark-section .industry-card,
    .industries-page .bg-dark-section .pulse-card,
    .industries-page .bg-dark-section .challenge-box,
    .industries-page .bg-dark-section .usecase-card,
    .industries-page .bg-dark-section .faq-card,
    .industries-page .bg-dark-section .blog-preview-card,
    .industries-page .bg-dark-section .service-mini-card,
    .industries-page .bg-dark-section .industry-form-wrap,
    .industries-page .bg-dark-section .process_box_outer_two {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(255, 255, 255, 0.2);
    }
    .industries-page .industry-thumb {
        width: 100%;
        object-fit: cover;
        margin-bottom: 16px;
    }
    .industries-page .industry-card .industry-thumb { aspect-ratio: 16/10; }
    .industries-page .service-list {
        list-style: disc;
        padding-left: 22px;
        margin-bottom: 0;
    }
    .industries-page .service-list li { margin-bottom: 6px; }
    .industries-page .section-cta { margin-top: 28px; }
    .industries-grid-showcase {
        position: relative;
        isolation: isolate;
        overflow: hidden;
    }
    .industries-grid-showcase::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 100vw;
        transform: translateX(-50%);
        background-image: url('{{ asset('assets/frontend/img/tab-sec-bg.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 0;
    }
    .industries-grid-showcase .container {
        position: relative;
        z-index: 1;
    }
    .industries-grid-showcase .pd_top_80 {
        padding-top: 48px !important;
        padding-bottom: 0 !important;
    }
    .industries-grid-showcase .pd_bottom_80 {
        padding-top: 0 !important;
        padding-bottom: 48px !important;
    }
    .industries-grid-showcase__wrap {
        margin-top: 32px;
    }
    .industries-grid-showcase__stage {
        position: relative;
        min-height: 500px;
        border-radius: 12px;
        overflow: visible;
    }
    .industries-grid-showcase__inner {
        position: relative;
        z-index: 2;
        display: block;
        min-height: 500px;
    }
    .industries-grid-showcase__panel {
        position: absolute;
        left: 30px;
        top: -30px;
        transform: none;
        width: 280px;
        background: #fff;
        border-radius: 12px;
        box-shadow: none;
        border: 1px solid #e5edf3;
        z-index: 4;
        margin-right: 0;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }
    .industries-grid-showcase__nav {
        background: transparent;
    }
    .industries-grid-showcase__tab {
        width: 100%;
        border: 0;
        border-bottom: 1px solid #e8edf2;
        background: transparent;
        color: #64748b;
        padding: 20px 24px;
        text-align: left;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.25;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: background 0.2s ease, color 0.2s ease;
    }
    .industries-grid-showcase__tab:last-child { border-bottom: 0; }
    .industries-grid-showcase__tab-num {
        color: #006847;
        min-width: 36px;
        font-weight: 800;
    }
    .industries-grid-showcase__tab.active {
        background: rgba(0, 96, 57, 0.06);
        color: #006039;
    }
    .industries-grid-showcase__call {
        margin-top: auto;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 22px 24px;
        background: #006039;
        color: #fff !important;
        font-size: 0.95rem;
        font-weight: 700;
        line-height: 1.2;
        text-decoration: none;
    }
    .industries-grid-showcase__call:hover {
        background: #004d2e;
        color: #fff !important;
    }
    .industries-grid-showcase__call i {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    .industries-grid-showcase__view {
        position: relative;
        flex: 1 1 auto;
        height: 500px;
        width: 100%;
        min-height: 0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 16px 48px rgba(15, 23, 42, 0.18);
        background: #1a2332;
    }
    .industries-grid-showcase__view img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        object-position: 35% center;
        display: block;
        transform: scale(1.06);
        transform-origin: center center;
    }
    .industries-grid-showcase__view-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(105deg, rgba(0, 0, 0, 0.78) 0%, rgba(0, 0, 0, 0.22) 60%, rgba(0, 0, 0, 0.1) 100%);
        z-index: 1;
    }
    .industries-grid-showcase__content {
        position: absolute;
        left: 0;
        right: auto;
        top: 0;
        bottom: 0;
        z-index: 2;
        color: #fff;
        width: min(100%, 1040px);
        padding: 48px 28px 48px 344px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .industries-grid-showcase__kicker {
        margin: 0 0 6px;
        font-size: 0.95rem;
        text-decoration: underline;
        text-underline-offset: 3px;
        color: rgba(255, 255, 255, 0.95);
    }
    .industries-grid-showcase__title {
        margin: 0 0 14px;
        color: #fff;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        line-height: 1.2;
    }
    .industries-grid-showcase__pills {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin: 0 0 14px;
        padding: 0;
        list-style: none;
    }
    .industries-grid-showcase__pills li {
        background: rgba(255, 255, 255, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.28);
        color: #fff;
        border-radius: 8px;
        padding: 4px 10px;
        font-size: 0.74rem;
        line-height: 1.35;
        white-space: nowrap;
    }
    .industries-grid-showcase__desc {
        margin: 0 0 16px;
        color: rgba(255, 255, 255, 0.92);
        max-width: 820px;
        font-size: 1rem;
        line-height: 1.65;
    }
    .industries-grid-showcase__cta {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: auto !important;
        min-width: 260px;
        min-height: 44px;
        padding: 0 26px !important;
        background: #006847 !important;
        border-color: #006847 !important;
        color: #fff !important;
        font-size: 0.96rem !important;
        line-height: 1.2 !important;
        align-self: flex-start;
    }
    .industries-grid-showcase__cta:hover {
        background: #fff !important;
        color: #006847 !important;
        border-color: #fff !important;
    }
    @media (max-width: 991px) {
        .industries-grid-showcase .pd_top_80 {
            padding-top: 36px !important;
        }
        .industries-grid-showcase .pd_bottom_80 {
            padding-bottom: 36px !important;
        }
        .industries-grid-showcase__stage {
            min-height: 0;
        }
        .industries-grid-showcase__inner {
            display: flex;
            flex-direction: column;
            gap: 16px;
            min-height: 0;
        }
        .industries-grid-showcase__panel {
            position: relative;
            left: auto;
            top: auto;
            transform: none;
            width: 100%;
            margin-right: 0;
            border-radius: 12px;
        }
        .industries-grid-showcase__tab {
            padding: 16px 18px;
        }
        .industries-grid-showcase__view {
            height: 300px;
        }
        .industries-grid-showcase__view img {
            height: 300px;
        }
        .industries-grid-showcase__content {
            width: 100%;
            padding: 32px 24px;
        }
    }
    .industries-approach-section.service_section.bg-dark-section {
        background: #101820 !important;
    }
    .industries-approach-section .title_all_box.light_color .before_title {
        color: var(--primary-color-one, #078586);
    }
    .industries-approach-section .title_all_box.light_color .title,
    .industries-approach-section .title_all_box.light_color h2,
    .industries-approach-section .title_all_box.light_color p {
        color: #fff;
    }
    .industries-approach-section .industries-approach-cards {
        align-items: stretch;
    }
    .industries-approach-section .industries-approach-col {
        display: flex;
        margin-bottom: 20px;
    }
    .industries-approach-section .industries-approach-card {
        width: 100%;
        display: flex;
        flex-direction: column;
    }
    .industries-approach-section .industries-approach-card .service_content_two,
    .industries-approach-section .industries-approach-card .content_inner {
        flex: 1;
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    .industries-approach-section .industries-approach-card .content_inner {
        min-height: 340px;
        padding: 16px;
        background-size: cover;
        background-position: center;
        position: relative;
    }
    .industries-approach-section .industries-approach-card .content_inner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(16, 24, 32, 0.45);
        border-radius: var(--industries-radius, 8px);
        pointer-events: none;
    }
    .industries-approach-section .industries-approach-card .content_inner_in {
        position: relative;
        z-index: 1;
        flex: 1;
        display: flex;
        flex-direction: column;
        min-height: 100%;
        background: #1a2332 !important;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--industries-radius, 8px) 0 var(--industries-radius, 8px) 0;
        padding: 22px 20px;
    }
    .industries-approach-section .industries-approach-card .content_inner_in h2 {
        margin-bottom: 10px;
    }
    .industries-approach-section .industries-approach-card .content_inner_in h2 a {
        color: #fff !important;
    }
    .industries-approach-section .industries-approach-card .content_inner_in p {
        flex: 1;
        margin-bottom: 0;
        color: rgba(255, 255, 255, 0.78) !important;
    }
    .industries-approach-section .service_content_two {
        border-radius: var(--industries-radius, 8px);
        height: 100%;
    }
    .industries-approach-section .icon_image {
        flex-shrink: 0;
        margin-bottom: 16px !important;
    }
    .industries-approach-section .icon_image i {
        font-size: 52px;
        line-height: 1;
        color: var(--primary-color-one, #078586);
    }
    .industries-approach-section .ovarlay_link,
    .industries-approach-section .overlay_content {
        display: none !important;
    }
    .industries-pulse-wrap {
        --mi-red: #D94125;
        --mi-green: #006847;
        --mi-blue: #2980B9;
        --mi-gold: #D48C24;
    }
    .industries-pulse-hero {
        background: linear-gradient(135deg, #006847 0%, #005a3a 50%, #004530 100%);
        padding: 64px 0 96px;
        overflow: visible;
    }
    .industries-pulse-hero__bg {
        position: absolute;
        inset: 0;
        overflow: hidden;
        opacity: 0.14;
        pointer-events: none;
    }
    .industries-pulse-hero__bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 15%;
    }
    .industries-pulse-hero .pulse-kicker {
        font-size: 0.875rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 12px;
    }
    .industries-pulse-hero .pulse-heading {
        color: #fff;
        font-weight: 800;
        margin-bottom: 12px;
    }
    .industries-pulse-hero .pulse-intro {
        color: rgba(255, 255, 255, 0.92);
        margin-bottom: 0;
        max-width: 560px;
    }
    .industries-pulse-hero__preview {
        border-radius: calc(var(--industries-radius, 8px) + 6px);
        overflow: hidden;
        max-height: 220px;
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.35);
        border: 2px solid rgba(255, 255, 255, 0.2);
    }
    .industries-pulse-hero__preview img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        object-position: center 18%;
        display: block;
    }
    .industries-pulse-hero .pulse-pill-wrap {
        background: #1e2329;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 5px 8px;
    }
    .industries-pulse-hero .pulse-pills {
        display: flex;
        flex-wrap: nowrap;
        align-items: stretch;
        margin: 0;
        padding: 0;
        list-style: none;
        width: 100%;
    }
    .industries-pulse-hero .pulse-pills .nav-item {
        flex: 1 1 0;
        min-width: 0;
        display: flex;
        position: relative;
    }
    .industries-pulse-hero .pulse-pills .nav-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: 0;
        top: 18%;
        height: 64%;
        width: 1px;
        background: rgba(255, 255, 255, 0.16);
        pointer-events: none;
    }
    .industries-pulse-hero .pulse-pills .nav-link {
        border-radius: 8px !important;
        padding: 10px 14px;
        font-size: clamp(0.75rem, 1.35vw, 0.9rem);
        font-weight: 600;
        color: #fff !important;
        background: transparent;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        white-space: nowrap;
        transition: background 0.25s ease, color 0.25s ease;
    }
    .industries-pulse-hero .pulse-pills .nav-link i,
    .industries-pulse-hero .pulse-pills .nav-link .pulse-pill-title {
        color: #fff !important;
    }
    .industries-pulse-hero .pulse-pills .nav-link i {
        font-size: 0.95rem;
        flex-shrink: 0;
    }
    .industries-pulse-hero .pulse-pills .nav-link.active {
        background: var(--mi-gold);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    .industries-pulse-hero .pulse-pills .nav-link.active i,
    .industries-pulse-hero .pulse-pills .nav-link.active .pulse-pill-title {
        color: #fff !important;
    }
    .industries-pulse-panel-wrap {
        margin-top: -64px;
        position: relative;
        z-index: 3;
        padding-bottom: 80px;
    }
    .industries-pulse-panel-wrap .pulse-panel {
        background: #fff;
        border-radius: calc(var(--industries-radius, 8px) + 10px);
        padding: 24px 24px 20px;
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.18);
        border: 1px solid rgba(0, 0, 0, 0.06);
    }
    .industries-pulse-panel-wrap .pulse-cards-grid > .col {
        display: flex;
    }
    .industries-pulse-panel-wrap .pulse-ignite-card {
        border-radius: calc(var(--industries-radius, 8px) + 6px);
        border: 2px solid rgba(15, 23, 42, 0.08);
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
        width: 100%;
        min-height: 360px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        transition: border-color 0.3s ease, box-shadow 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
        cursor: pointer;
    }
    .industries-pulse-panel-wrap .pulse-cards-grid.is-filtered .pulse-ignite-card:not(.is-highlighted) {
        opacity: 0.52;
    }
    .industries-pulse-panel-wrap .pulse-ignite-card.is-highlighted {
        border-color: var(--mi-green);
        box-shadow: 0 16px 40px rgba(0, 104, 71, 0.22);
        opacity: 1 !important;
        transform: translateY(-4px);
    }
    .industries-pulse-panel-wrap .pulse-ignite-thumb {
        height: 160px;
        flex-shrink: 0;
        overflow: hidden;
        border-radius: calc(var(--industries-radius, 8px) + 6px) calc(var(--industries-radius, 8px) + 6px) 0 0;
    }
    .industries-pulse-panel-wrap .pulse-ignite-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        transition: transform 0.45s ease;
    }
    .industries-pulse-panel-wrap .pulse-ignite-card:hover .pulse-ignite-thumb img {
        transform: scale(1.05);
    }
    .industries-pulse-panel-wrap .pulse-ignite-card .card-body h6 {
        font-weight: 700;
        color: #111;
    }
    .industries-pulse-panel-wrap .pulse-ignite-card .card-body p {
        color: #4b5563;
        font-size: 0.92rem;
        line-height: 1.55;
    }
    .industries-pulse-panel-wrap .pulse-ignite-card .card-footer {
        margin-top: auto;
        font-size: 0.9rem;
    }
    .industries-pulse-panel-wrap .pulse-card-link {
        color: var(--mi-green);
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.2s ease, color 0.2s ease;
    }
    .industries-pulse-panel-wrap .pulse-card-link:hover {
        color: #004d30;
        gap: 12px;
    }
    .industries-pulse-panel-wrap .pulse-card-link i {
        color: inherit;
    }
    @media (max-width: 991px) {
        .industries-pulse-hero .pulse-pill-wrap {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .industries-pulse-hero .pulse-pills {
            min-width: 640px;
        }
        .industries-pulse-hero {
            padding-bottom: 80px;
        }
        .industries-pulse-panel-wrap {
            margin-top: -48px;
        }
    }
    .industries-page .process-flow-note {
        text-align: center;
        margin-top: 24px;
        font-weight: 600;
    }
    /* Keep custom rebuilt sections isolated so following blocks don't overlap */
    .industries-page .industry-video-hr,
    .industries-page .industry-video-hero,
    .industries-page .industry-health-showcase,
    .industries-page .industry-lead-showcase,
    .industries-page .faqs-section {
        position: relative;
        z-index: 1;
        clear: both;
    }
    .industries-page .industry-video-hr,
    .industries-page .industry-video-hero,
    .industries-page .industry-health-showcase,
    .industries-page .industry-lead-showcase {
        overflow: hidden;
    }
    .industries-page .faqs-section {
        margin-top: 24px;
        padding-top: 56px;
        padding-bottom: 64px;
        background: linear-gradient(165deg, #081711 0%, #0b2018 45%, #0a1812 100%) !important;
        color: #fff;
    }
    .industries-page .faqs-section .pd_top_80,
    .industries-page .faqs-section .pd_bottom_80 {
        display: none;
    }
    .industries-page .faqs-section .title_all_box .before_title {
        color: #7dcea8;
    }
    .industries-page .faqs-section .title_all_box h2 {
        color: #fff;
    }
    .industries-page .faqs-section .accordion dd,
    .industries-page .faqs-section .accordion .accordion-content {
        position: relative;
    }
    .industries-page .faqs-section .faq_section.type_one .accordion dl dt,
    .industries-page .faqs-section .faq_section.type_one .accordion dl dt.faq_header {
        color: #fff;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        padding-bottom: 18px;
        margin-bottom: 0;
        margin-left: 50px;
    }
    .industries-page .faqs-section .faq_section.type_one .accordion dl dt span,
    .industries-page .faqs-section .faq_section.type_one .accordion dl dt.faq_header span {
        background: #006847;
        color: #fff;
    }
    .industries-page .faqs-section .faq_section.type_one .accordion dl dt.active {
        margin-bottom: 12px;
        color: #fff;
    }
    .industries-page .faqs-section .faq_section.type_one .accordion dl dd,
    .industries-page .faqs-section .faq_section.type_one .accordion dl dd.accordion-content {
        border-bottom-color: rgba(255, 255, 255, 0.2);
        border-left-color: rgba(255, 255, 255, 0.2);
        margin-bottom: 24px;
        padding-bottom: 18px;
    }
    .industries-page .faqs-section .faq_section.type_one .accordion dl dd p,
    .industries-page .faqs-section .faq_section .accordion-content p {
        color: rgba(255, 255, 255, 0.78);
    }
    .industries-page .faqs-section .faq_section .faq_header {
        border-bottom-color: rgba(255, 255, 255, 0.12);
        color: #fff;
    }
    .industries-page .faqs-section .section-cta {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    .industries-page .faqs-section .section-cta .theme-btn.one {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        background: #006847 !important;
        border-color: #006847 !important;
        color: #fff !important;
    }
    .industries-page .faqs-section .section-cta .theme-btn.one:hover {
        background: #fff !important;
        color: #006847 !important;
        border-color: #006847 !important;
    }
    .industries-page .usecase-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 28px;
    }
    .industries-page .usecase-tags span {
        background: #006039;
        color: #fff;
        padding: 6px 14px;
        font-size: 15px;
        border-radius: var(--industries-radius);
    }
    .industries-page .storyline-list {
        list-style: decimal;
        padding-left: 22px;
        max-width: 720px;
        margin: 0 auto 28px;
        text-align: left;
    }
    .industries-page .health-output {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        padding: 20px 24px;
        margin-top: 20px;
    }
    .industries-page .bg-dark-section .health-output {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.25);
    }
    .industries-page .contact_form_box_inner label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
    }
    .industries-page .contact_form_box_inner input,
    .industries-page .contact_form_box_inner select,
    .industries-page .contact_form_box_inner textarea {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #d1d5db;
        margin-bottom: 4px;
    }
    .industries-page .faq_section .faq_header {
        cursor: pointer;
        padding: 16px 0;
        border-bottom: 1px solid #e5e7eb;
        font-weight: 600;
    }
    .industries-page .faq_section .accordion-content {
        padding: 0 0 16px;
    }
</style>

@php
    $heroBg = asset($p['hero']['image']);
    $heroBgFallback = asset($p['hero']['image_fallback'] ?? 'assets/frontend/images/sliders/banner-10.jpg');
@endphp

@include('frontend.layouts.common.sections.compliance.hraas-ui-styles')
@include('frontend.layouts.common.sections.what-we-do.sub-service-animations')

<div id="content" class="site-content">
<div class="industries-page cwi-sub-page" data-cwi-page>
    {{-- Section 1: Hero (same UI as home banner) --}}
    <section id="industriesHeroBanner" class="home2-pmv-section">
        <div class="tab-content">
            <div
                class="tab-pane fade boxsl2 active show"
                style="background-image: url('{{ $heroBg }}'); background-size: cover; background-position: center;"
                role="img"
                aria-label="{{ $p['hero']['heading'] }}">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-10 col-lg-11 col-md-12">
                            <div class="tentArea">
                                <h2 class="text-white">{{ $p['hero']['heading'] }}</h2>
                                <p class="gold textbg">{{ $p['hero']['label'] }}</p>
                                <span class="line"></span>
                                @foreach ($p['hero']['subheading'] as $para)
                                    <p class="text-white">{{ $para }}</p>
                                @endforeach
                                <ul class="animate_down hero-cta-list">
                                    @foreach ($p['hero']['ctas'] as $cta)
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

    {{-- Section 2: Industry Reality (full-content dashboard UI) --}}
    @include('frontend.pages.industries.sections.reality-dashboard', ['reality' => $p['reality']])

    {{-- Section 3: Approach (service_box style_two cards) --}}
    @include('frontend.pages.industries.sections.approach-service', ['approach' => $p['approach']])

    {{-- Section 4: Industries Grid --}}
    <section id="industries-grid" class="service-section bg-light-section industries-grid-showcase">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="title_all_box style_one text-center dark_color">
                <div class="title_sections">
                    <div class="before_title">{{ $p['industries_grid']['label'] }}</div>
                    <h2>{{ $p['industries_grid']['heading'] }}</h2>
                    <p>{{ $p['industries_grid']['content'] }}</p>
                </div>
            </div>
            <div class="industries-grid-showcase__wrap">
                <div class="industries-grid-showcase__stage">
                    <div class="industries-grid-showcase__inner">
                        <div class="industries-grid-showcase__panel">
                            <div class="industries-grid-showcase__nav" role="tablist" aria-label="Industry cards">
                                @foreach ($p['industries_grid']['cards'] as $i => $card)
                                    <button
                                        type="button"
                                        class="industries-grid-showcase__tab {{ $i === 0 ? 'active' : '' }}"
                                        data-industry-tab="{{ $i }}"
                                        aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                                    >
                                        <span class="industries-grid-showcase__tab-num">{{ str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) }}.</span>
                                        <span>{{ $card['title'] }}</span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        <div class="industries-grid-showcase__view">
                            <img
                                id="industry-grid-image"
                                src="{{ asset($p['industries_grid']['cards'][0]['image'] ?? ($p['industries_grid']['cards'][0]['image_fallback'] ?? '')) }}"
                                data-fallback="{{ asset($p['industries_grid']['cards'][0]['image_fallback'] ?? ($p['industries_grid']['cards'][0]['image'] ?? '')) }}"
                                onerror="this.onerror=null;this.src=this.dataset.fallback;"
                                alt="{{ $p['industries_grid']['cards'][0]['title'] }}"
                            >
                            <div class="industries-grid-showcase__view-overlay"></div>
                            <div class="industries-grid-showcase__content">
                                <p class="industries-grid-showcase__kicker">Why Mirashka</p>
                                <h3 class="industries-grid-showcase__title" id="industry-grid-title">{{ $p['industries_grid']['cards'][0]['title'] }}</h3>
                                <ul class="industries-grid-showcase__pills" id="industry-grid-pills">
                                    @foreach ($p['industries_grid']['cards'][0]['subcategories'] as $sub)
                                        <li>{{ $sub }}</li>
                                    @endforeach
                                </ul>
                                <p class="industries-grid-showcase__desc" id="industry-grid-desc">{{ $p['industries_grid']['cards'][0]['description'] }}</p>
                                <a id="industry-grid-cta" href="{{ route($p['industries_grid']['cards'][0]['route']) }}" class="theme-btn one industries-grid-showcase__cta">
                                    {{ $p['industries_grid']['cards'][0]['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_80"></div>
    </section>

    {{-- Section 5: PULSE Framework --}}
    @include('frontend.pages.industries.sections.pulse-framework', ['pulse' => $p['pulse']])

    {{-- Section 6: What We Deliver (home Why Mirashka UI) --}}
    @include('frontend.pages.industries.sections.services-deliver', ['services' => $p['services']])

    {{-- Section 7: Challenges (home HR OS style) --}}
    @include('frontend.pages.industries.sections.challenges-model', ['challenges' => $p['challenges']])

    {{-- Section 8: Use Cases (collage UI) --}}
    @php
        $useCaseImages = collect($p['industries']['cards'] ?? [])->map(fn ($card) => [
            'image' => $card['image'],
            'fallback' => $card['image_fallback'] ?? $card['image'],
        ])->values();
    @endphp
    @include('frontend.pages.industries.sections.use-cases-collage', [
        'useCases' => $p['use_cases'],
        'imagePool' => $useCaseImages->all(),
        'firstImage' => $useCaseImages->get(0),
        'lastImage' => $useCaseImages->get(1, $useCaseImages->get(0)),
    ])

    {{-- Section 9: Video (hero showcase UI) --}}
    @include('frontend.pages.industries.sections.video-showcase', [
        'video' => $p['video'],
        'industryThumbs' => $p['industries_grid']['cards'] ?? [],
    ])

    {{-- Section 10: Health Check (split showcase UI) --}}
    @include('frontend.pages.industries.sections.health-check-showcase', [
        'health' => $p['health_check'],
    ])

    {{-- Section 11: Lead Form (light showcase UI) --}}
    @include('frontend.pages.industries.sections.lead-form-showcase', [
        'form' => $p['form'],
    ])

    {{-- Section 12: FAQ --}}
    <section class="faqs-section bg-dark-section">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="title_all_box style_one text-center light_color">
                <div class="title_sections">
                    <div class="before_title">{{ $p['faq_blog']['label'] }}</div>
                    <h2>{{ $p['faq_blog']['heading'] }}</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="faq_section type_one">
                        <div class="block_faq">
                            <div class="accordion">
                                <dl>
                                    @foreach ($p['faq_blog']['faqs'] as $i => $faq)
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
                </div>
            </div>
            <div class="text-center section-cta">
                <a href="{{ url($p['faq_blog']['cta']['href']) }}" class="theme-btn one">{{ $p['faq_blog']['cta']['label'] }}</a>
            </div>
        </div>
        <div class="pd_bottom_80"></div>
    </section>
</div>
</div>

{{-- Uniform typography (loads after section partial styles) --}}
<style>
    .industries-page p,
    .industries-page li,
    .industries-page dd,
    .industries-page label,
    .industries-page input,
    .industries-page select,
    .industries-page textarea,
    .industries-page .theme-btn,
    .industries-page .accordion-content p,
    .industries-page .service-list li,
    .industries-page .industry-card p,
    .industries-page .hraas-dashboard-pane__text,
    .industries-page .hraas-dashboard-sidebar-pain-list li,
    .industries-page .industries-approach-card .content_inner_in p,
    .industries-page .pulse-intro,
    .industries-page .pulse-ignite-card .card-body p,
    .industries-page .pulse-ignite-card .card-footer,
    .industries-page .pulse-card-link,
    .industries-page [class*="__content"],
    .industries-page [class*="__intro"],
    .industries-page [class*="__text"],
    .industries-page [class*="__card"] p,
    .industries-page [class*="__node"] p,
    .industries-page [class*="__node-num"],
    .industries-page [class*="__story-item"] span,
    .industries-page .industry-video-hero__lead,
    .industries-page .industry-video-hero__caption,
    .industries-page [class*="__storyline"] li span,
    .industries-page [class*="__hub"],
    .industries-page [class*="__marquee-track"] span,
    .industries-page [class*="__metric-banner"],
    .industries-page [class*="__dash"] span,
    .industries-page [class*="__dash"] strong,
    .industries-page [class*="__card"] h4 + p,
    .industries-page .usecase-card p,
    .industries-page .gold.textbg {
        font-size: var(--industries-text) !important;
        line-height: var(--industries-line) !important;
    }
    .industries-page .title_sections h2,
    .industries-page .title_all_box h2,
    .industries-page .pulse-heading,
    .industries-page .home-why-mirashka__title,
    .industries-page .industry-challenge-model__title,
    .industries-page .industry-video-hr__title,
    .industries-page .industry-video-hero__title,
    .industries-page .industry-health-showcase__title,
    .industries-page .industry-lead-showcase__title,
    .industries-page .industry-usecases-collage__head h2,
    .industries-page #industriesHeroBanner .tentArea h2.text-white {
        font-size: var(--industries-heading) !important;
        line-height: 1.25 !important;
    }
    .industries-page [class*="__storyline-title"] {
        font-size: var(--industries-text) !important;
        font-weight: 700;
    }
    .industries-page h3,
    .industries-page h4,
    .industries-page h5,
    .industries-page h6,
    .industries-page .faq_section.type_one .accordion dl dt,
    .industries-page .faq_section .faq_header,
    .industries-page .industry-challenge-model__node h4,
    .industries-page .home-why-mirashka__card h3,
    .industries-page .pulse-ignite-card .card-body h6,
    .industries-page .industries-approach-card .content_inner_in h2,
    .industries-page .industries-approach-card .content_inner_in h2 a,
    .industries-page [class*="__card"] h4,
    .industries-page .usecase-card h4 {
        font-size: var(--industries-text) !important;
        line-height: var(--industries-line) !important;
    }
    .industries-page .before_title,
    .industries-page [class*="__eyebrow"],
    .industries-page [class*="__kicker"],
    .industries-page .industry-video-hero__badge,
    .industries-page .pulse-kicker,
    .industries-page .industry-challenge-model__eyebrow {
        font-size: var(--industries-eyebrow) !important;
        line-height: 1.4 !important;
    }
    .industries-page .industries-pulse-hero .pulse-pills .nav-link,
    .industries-page .industries-pulse-hero .pulse-pills .nav-link .pulse-pill-title {
        font-size: var(--industries-text) !important;
        line-height: var(--industries-line) !important;
    }
    #industriesHeroBanner .theme_btn_all .theme-btn {
        font-size: var(--industries-text) !important;
    }
    /* Decorative / icon sizes — keep visual hierarchy */
    .industries-page .home-why-mirashka__card-num,
    .industries-page .industries-approach-section .icon_image i,
    .industries-page [class*="__card-icon"],
    .industries-page [class*="__play"],
    .industries-page .industry-video-hero__nav-btn i {
        font-size: 22px !important;
    }
    .industries-page .home-why-mirashka__card-num {
        font-size: clamp(2.75rem, 5vw, 4rem) !important;
    }
    .industries-page .industry-challenge-model__node-icon {
        font-size: 24px !important;
    }
</style>

@php
    $industryCardsForJs = collect($p['industries_grid']['cards'] ?? [])->map(function ($card) {
        return [
            'title' => $card['title'] ?? '',
            'subcategories' => $card['subcategories'] ?? [],
            'description' => $card['description'] ?? '',
            'cta' => $card['cta'] ?? 'Explore',
            'href' => route($card['route'] ?? 'home'),
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
    var industryCards = @json($industryCardsForJs ?? []);
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
            industryImage.alt = card.title || 'Industry';
        }
        if (industryTitle) industryTitle.textContent = card.title || '';
        if (industryDesc) industryDesc.textContent = card.description || '';
        if (industryCta) {
            industryCta.textContent = card.cta || 'Explore';
            industryCta.href = card.href || '#';
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

    var subMap = @json($p['form']['industries']);
    var industrySelect = document.getElementById('industry-select');
    var subSelect = document.getElementById('sub-industry-select');

    function fillSubIndustry(industry) {
        subSelect.innerHTML = '<option value="">Select sub-industry</option>';
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

    var pulseWrap = document.querySelector('.industries-pulse-wrap');
    if (pulseWrap) {
        var pills = pulseWrap.querySelectorAll('[data-pulse-tab]');
        var pulseCards = pulseWrap.querySelectorAll('[data-pulse-card]');

        function setActivePulse(index) {
            pills.forEach(function (btn, i) {
                var isActive = i === index;
                btn.classList.toggle('active', isActive);
                btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
            });
            pulseCards.forEach(function (card, i) {
                card.classList.toggle('is-highlighted', i === index);
            });
            var activeCard = pulseCards[index];
            if (activeCard) {
                activeCard.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'nearest' });
            }
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
    }
});
</script>
@endpush
@endsection

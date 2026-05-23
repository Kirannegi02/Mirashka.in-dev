@extends('frontend.layouts.app')

@php
    $page = config('compliance-workplace-integrity');
    $hero = $page['hero'];
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
    .cwi-reveal {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.65s ease, transform 0.65s ease;
    }
    .cwi-reveal.is-visible { opacity: 1; transform: translateY(0); }

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
        flex-wrap: wrap;
        align-items: center;
        gap: 20px 28px;
        margin-top: 8px;
    }
    .cwi-integrity__actions .theme-btn.one.bordered {
        border: 2px solid var(--cwi-mint);
        color: var(--cwi-mint);
        background: transparent;
    }
    .cwi-integrity__actions .theme-btn.one.bordered:hover {
        background: var(--cwi-green);
        border-color: var(--cwi-green);
        color: #fff;
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

    /* 8. CTA — light band with dark card (Guardian close) */
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
    @media (prefers-reduced-motion: reduce) {
        .cwi-reveal { opacity: 1; transform: none; transition: none; }
    }
</style>

<div class="cwi-page" data-cwi-page>

{{-- 1. Hero — same banner UI as HRaaS --}}
<section class="single_banner style_one bg_op_1 cwi-hero hraas-hero custom_black_overlay position-relative"
    style="background-image: url({{ asset($hero['image']) }});">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12">
                <div class="pd_top_40"></div>
                <div class="slider_content light_color text-center">
                    <h6>{{ $hero['label'] }}</h6>
                    <p class="hero-tagline">{{ $hero['tagline'] }}</p>
                    <h1 class="color_white">{{ $hero['title'] }}</h1>
                    @if(!empty($hero['headline']))
                        <p class="hero-headline">{{ $hero['headline'] }}</p>
                    @endif
                    <p class="hero-intro">{{ $hero['content'] }}</p>
                    <ul class="d_inline_block">
                        <li>
                            <div class="theme_btn_all color_two">
                                <a href="{{ route('projectenquiries') }}" class="theme-btn one primary-color-two">{{ $hero['primary_cta'] }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="theme_btn_all">
                                <a href="{{ route('projectenquiries') }}" class="theme-btn two">{{ $hero['secondary_cta'] }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pd_bottom_60"></div>
            </div>
        </div>
    </div>
</section>

{{-- 2. Risk Reality --}}
<section class="cwi-risk cwi-section--light">
    <div class="container">
        <header class="cwi-risk__header cwi-reveal">
            <span class="cwi-risk__eyebrow">{{ $page['risk']['before_title'] }}</span>
            <h2>{{ $page['risk']['heading'] }}</h2>
            <p class="cwi-risk__lead">{{ $page['risk']['lead'] }}</p>
            <p class="cwi-risk__text">{{ $page['risk']['content'] }}</p>
        </header>

        <div class="cwi-risk__body">
            <div class="cwi-risk__card cwi-reveal">
                <span class="cwi-risk__card-label">
                    <i class="ri-alert-line" aria-hidden="true"></i>
                    Common compliance gaps
                </span>
                <ul class="cwi-risk__list">
                    @foreach($page['risk']['risks'] as $risk)
                        <li>
                            <i class="ri-close-line" aria-hidden="true"></i>
                            {{ $risk }}
                        </li>
                    @endforeach
                </ul>
                <div class="theme_btn_all">
                    <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $page['risk']['cta'] }} <i class="icon-right-arrow"></i></a>
                </div>
            </div>
            <figure class="cwi-risk__visual cwi-reveal">
                <img src="{{ asset($page['risk']['image']) }}" alt="HR compliance dashboard — from scattered risks to structured people operations" loading="lazy">
                <figcaption class="cwi-risk__visual-cap">
                    <strong>From risk chaos to HR clarity</strong>
                    <span>Structured policies, documentation and compliance visibility in one place.</span>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

{{-- 3. Services — steps flanking center image --}}
@php
    $serviceItems = $page['services']['items'];
    $serviceLeft = array_slice($serviceItems, 0, 2);
    $serviceRight = array_slice($serviceItems, 2, 2);
@endphp
<section class="cwi-services cwi-section--dark">
    <div class="container">
        <div class="title_all_box style_one text-center light_color cwi-reveal">
            <div class="title_sections">
                <div class="before_title">— {{ $page['services']['before_title'] }} —</div>
                <h2 class="title">{{ $page['services']['heading'] }}</h2>
                @if(!empty($page['services']['content']))
                    <p>{{ $page['services']['content'] }}</p>
                @endif
            </div>
        </div>

        <div class="cwi-services__process">
            <div class="cwi-services__col cwi-services__col--left">
                @foreach($serviceLeft as $service)
                    <article class="cwi-services-step cwi-reveal">
                        <span class="cwi-services-step__watermark" aria-hidden="true">{{ $service['step'] }}</span>
                        <span class="cwi-services-step__icon" aria-hidden="true"><i class="{{ $service['icon'] }}"></i></span>
                        <div class="cwi-services-step__body">
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['text'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>

            <figure class="cwi-services__media cwi-reveal">
                <img
                    src="{{ asset($page['services']['image']) }}"
                    alt="{{ $page['services']['image_alt'] ?? $page['services']['heading'] }}"
                    loading="lazy"
                    width="640"
                    height="800"
                >
            </figure>

            <div class="cwi-services__col cwi-services__col--right">
                @foreach($serviceRight as $service)
                    <article class="cwi-services-step cwi-services-step--right cwi-reveal">
                        <span class="cwi-services-step__watermark" aria-hidden="true">{{ $service['step'] }}</span>
                        <span class="cwi-services-step__icon" aria-hidden="true"><i class="{{ $service['icon'] }}"></i></span>
                        <div class="cwi-services-step__body">
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['text'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- 4. Framework — light --}}
<section class="cwi-framework cwi-section--light">
    <div class="container">
        <div class="title_all_box style_one text-center dark_color cwi-reveal">
            <div class="title_sections">
                <div class="before_title">{{ $page['framework']['before_title'] }}</div>
                <h2 class="title">{{ $page['framework']['heading'] }}</h2>
                <p>{{ $page['framework']['content'] }}</p>
            </div>
        </div>
        <div class="cwi-framework__track">
            @foreach($page['framework']['steps'] as $step)
                <div class="cwi-framework-step cwi-reveal">
                    <span class="cwi-framework-step__dot" aria-hidden="true"><i class="{{ $step['icon'] }}"></i></span>
                    <p class="cwi-framework-step__subtitle">{{ $step['subtitle'] }}</p>
                    <h3 class="cwi-framework-step__title">{{ $step['title'] }}</h3>
                    <p>{{ $step['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 5. Integrity — split + hex visual & float cards --}}
<section class="cwi-integrity cwi-section--dark">
    <div class="container">
        <div class="cwi-integrity__layout">
            <div class="cwi-integrity__copy cwi-reveal">
                <span class="cwi-integrity__eyebrow">{{ $page['integrity']['eyebrow'] }}</span>
                <h2>{{ $page['integrity']['heading'] }}</h2>
                <p class="cwi-integrity__intro">{{ $page['integrity']['content'] }}</p>

                @foreach($page['integrity']['features'] as $feature)
                    <div class="cwi-integrity-feature">
                        <span class="cwi-integrity-feature__icon" aria-hidden="true"><i class="{{ $feature['icon'] }}"></i></span>
                        <div>
                            <h3>{{ $feature['title'] }}</h3>
                            <p>{{ $feature['text'] }}</p>
                        </div>
                    </div>
                @endforeach

                <div class="cwi-integrity__actions">
                    <a href="{{ route('projectenquiries') }}" class="theme-btn one bordered">{{ $page['integrity']['cta'] }} <i class="icon-right-arrow"></i></a>
                    <div class="cwi-integrity__trust">
                        <strong>{{ $page['integrity']['trust_name'] }}</strong>
                        <span>{{ $page['integrity']['trust_role'] }}</span>
                    </div>
                </div>
            </div>

            <div class="cwi-integrity__visual cwi-reveal">
                <div class="cwi-integrity__hex">
                    <img
                        src="{{ asset($page['integrity']['image']) }}"
                        alt="{{ $page['integrity']['image_alt'] ?? $page['integrity']['heading'] }}"
                        loading="lazy"
                    >
                </div>
                @foreach($page['integrity']['float_cards'] as $index => $card)
                    <div class="cwi-integrity-float {{ $index === 0 ? 'cwi-integrity-float--top' : 'cwi-integrity-float--bottom' }}">
                        <span class="cwi-integrity-float__icon" aria-hidden="true"><i class="{{ $card['icon'] }}"></i></span>
                        <h4>{{ $card['title'] }}</h4>
                        <p>{{ $card['text'] }}</p>
                        @if(!empty($card['link']))
                            <a href="{{ $card['link'] }}" class="cwi-integrity-float__link">Read more <i class="icon-right-arrow"></i></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- 6. Deliverables — three solution cards --}}
<section class="cwi-deliverables cwi-section--dark">
    <div class="container">
        <div class="title_all_box style_one text-center cwi-reveal">
            <div class="title_sections light_color">
                <div class="before_title">— {{ $page['deliverables']['before_title'] }} —</div>
                <h2 class="title">{{ $page['deliverables']['heading'] }}</h2>
                @if(!empty($page['deliverables']['content']))
                    <p>{{ $page['deliverables']['content'] }}</p>
                @endif
            </div>
        </div>
        <div class="cwi-deliverables__cards">
            @foreach($page['deliverables']['cards'] as $card)
                <article class="cwi-del-card cwi-del-card--{{ $card['style'] }} cwi-reveal">
                    <div
                        class="cwi-del-card__bg"
                        style="background-image: url('{{ asset($card['image']) }}');"
                        aria-hidden="true"
                    ></div>

                    <div class="cwi-del-card__panel">
                        @if($card['style'] === 'standard' && !empty($card['icon']))
                            <span class="cwi-del-card__icon" aria-hidden="true"><i class="{{ $card['icon'] }}"></i></span>
                        @endif
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                        @if(!empty($card['bullets']))
                            <ul class="cwi-del-card__bullets">
                                @foreach($card['bullets'] as $bullet)
                                    <li>{{ $bullet }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. Suitable For — circular steps --}}
<section class="cwi-suitable cwi-section--light">
    <div class="container">
        <div class="title_all_box style_one text-center dark_color cwi-reveal">
            <div class="title_sections">
                <div class="before_title">— {{ $page['suitable_for']['before_title'] }} —</div>
                <h2 class="title">{{ $page['suitable_for']['heading'] }}</h2>
            </div>
        </div>
        <div class="cwi-suitable__steps">
            @foreach($page['suitable_for']['segments'] as $seg)
                <article class="cwi-suitable-step cwi-reveal">
                    <div class="cwi-suitable-step__icon-wrap">
                        <span class="cwi-suitable-step__num" aria-hidden="true">{{ $seg['step'] }}</span>
                        <i class="{{ $seg['icon'] }} cwi-suitable-step__icon" aria-hidden="true"></i>
                    </div>
                    <h3>{{ $seg['label'] }}</h3>
                    <p>{{ $seg['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. CTA --}}
<section class="cwi-cta">
    <div class="container cwi-reveal">
        <div class="cwi-cta__card" style="background-image: url({{ asset($page['cta']['bg_image']) }});">
            <div class="cwi-cta__overlay">
                <div class="cwi-cta__copy">
                    <h2>{{ $page['cta']['heading'] }}</h2>
                    <p>{{ $page['cta']['content'] }}</p>
                    <div class="cwi-cta__actions theme_btn_all color_two">
                        <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $page['cta']['button'] }} <i class="icon-right-arrow"></i></a>
                        <a href="{{ route('projectenquiries') }}" class="theme-btn two">{{ $page['cta']['secondary'] }}</a>
                    </div>
                </div>
                <img class="cwi-cta__person d-none d-lg-block" src="{{ asset($page['cta']['image']) }}" alt="" loading="lazy" aria-hidden="true">
            </div>
        </div>
    </div>
</section>

</div>

@include('frontend.layouts.common.sections.faqs.category', [
    'categoryKey' => 'compliance',
    'sectionClass' => 'cwi-section--light',
    'compactTop' => true,
])

@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('[data-cwi-page]');
    if (!root || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        if (root) root.querySelectorAll('.cwi-reveal').forEach(function (el) { el.classList.add('is-visible'); });
        return;
    }
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -6% 0px', threshold: 0.1 });
    root.querySelectorAll('.cwi-reveal').forEach(function (el) { observer.observe(el); });
})();
</script>
@endpush

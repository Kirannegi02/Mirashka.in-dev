@extends('frontend.layouts.app')

@php
    $page = config('hraas');
    $hero = $page['hero'];
@endphp

@section('content')

<style>
    .hraas-hero.single_banner.style_one {
        padding: 90px 0 100px !important;
        min-height: 520px;
        background-color: #0d1612 !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
        background-size: cover !important;
        overflow: hidden;
    }
    .hraas-hero.custom_black_overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(8, 14, 12, 0.78);
        z-index: 0;
    }
    .hraas-hero .container {
        position: relative;
        z-index: 1;
    }
    .hraas-hero .slider_content {
        text-align: center;
        width: 100%;
    }
    .hraas-hero .d_inline_block {
        display: flex !important;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 14px;
        padding: 0;
        margin: 0;
    }
    .hraas-hero .d_inline_block li {
        list-style: none;
    }
    .hraas-hero.single_banner.style_one .slider_content h1 {
        font-size: 36px;
        line-height: 1.25;
        font-weight: 800;
        margin-bottom: 16px;
        color: #fff !important;
    }
    .hraas-hero.single_banner.style_one .slider_content h6 {
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
    .hraas-hero .hero-tagline {
        color: #d3a126 !important;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .hraas-hero .hero-intro {
        color: rgba(255, 255, 255, 0.92) !important;
        font-size: 1.05rem;
        line-height: 1.7;
        margin: 0 auto 24px;
        max-width: 960px;
    }
    .hraas-hero .theme-btn.two {
        color: #fff !important;
        border-color: #fff !important;
    }
    @media (max-width: 991.98px) {
        .hraas-hero.single_banner.style_one {
            padding: 70px 0 80px !important;
            min-height: auto;
            background-position: center center !important;
        }
        .hraas-hero.custom_black_overlay::before {
            background: rgba(8, 14, 12, 0.88);
        }
    }
    .hraas-section-heading {
        font-size: 1.75rem;
        font-weight: 700;
        color: #192437;
        margin-bottom: 16px;
        line-height: 1.3;
    }
    .hraas-section-intro {
        color: #475569;
        font-size: 1.05rem;
        line-height: 1.65;
        max-width: 820px;
    }
    .hraas-trust-strip {
        background: var(--bg-light, #f8fafc);
        border-top: 1px solid #e8edf2;
        border-bottom: 1px solid #e8edf2;
        padding: 48px 0 44px;
    }
    .hraas-trust-strip .hraas-section-heading,
    .hraas-trust-strip .hraas-section-intro {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    .hraas-trust-strip .hraas-section-intro {
        max-width: 900px;
        margin-bottom: 32px;
    }
    .hraas-icon-strip {
        display: flex;
        align-items: stretch;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0;
        margin-top: 8px;
        padding: 24px 16px;
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        box-shadow: 0 4px 18px rgba(15, 23, 42, 0.05);
    }
    .hraas-icon-strip__item {
        flex: 1 1 140px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 12px 20px;
        min-width: 120px;
    }
    .hraas-icon-strip__icon {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: linear-gradient(145deg, #006039 0%, #0d4d32 100%);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 12px;
        flex-shrink: 0;
    }
    .hraas-icon-strip__label {
        font-size: 0.95rem;
        font-weight: 700;
        color: #192437;
        line-height: 1.3;
    }
    .hraas-icon-strip__divider {
        width: 1px;
        background: #d9e2ec;
        align-self: stretch;
        margin: 8px 0;
        flex-shrink: 0;
    }
    @media (max-width: 767.98px) {
        .hraas-icon-strip {
            flex-direction: column;
            align-items: center;
            gap: 0;
            padding: 20px 12px;
        }
        .hraas-icon-strip__divider {
            width: 80%;
            height: 1px;
            margin: 4px 0;
        }
        .hraas-icon-strip__item {
            flex: 0 0 auto;
            width: 100%;
            padding: 16px 12px;
        }
    }
    .hraas-handles-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px;
    }
    .hraas-handle-card {
        background: #fff;
        border: 1px solid #e7ebf0;
        border-radius: 10px;
        padding: 26px 14px 22px;
        text-align: center;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
    .hraas-handle-card:hover {
        border-color: #006039;
        box-shadow: 0 8px 24px rgba(0, 96, 57, 0.08);
    }
    .hraas-handle-card__icon {
        width: 52px;
        height: 52px;
        margin: 0 auto 14px;
        border-radius: 50%;
        background: rgba(0, 96, 57, 0.1);
        color: #006039;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        line-height: 1;
    }
    .hraas-handle-card__label {
        display: block;
        font-size: 0.9375rem;
        font-weight: 600;
        color: #192437;
        line-height: 1.35;
    }
    .hraas-growth-engine {
        max-width: 1080px;
        margin: 0 auto;
        padding: 0 8px;
    }
    .hraas-growth-engine__entablature {
        background: #fff;
        border-radius: 10px 10px 0 0;
        padding: 18px 20px 16px;
        text-align: center;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }
    .hraas-growth-engine__entablature-icon {
        width: 44px;
        height: 44px;
        margin: 0 auto 8px;
        border-radius: 50%;
        background: rgba(0, 96, 57, 0.12);
        color: #006039;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }
    .hraas-growth-engine__entablature-title {
        margin: 0;
        font-size: 1.05rem;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.02em;
    }
    .hraas-growth-engine__pillars {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 6px;
        padding: 0 10px;
        background: #fff;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }
    .hraas-pillar {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        text-decoration: none;
        color: inherit;
        transition: transform 0.2s ease;
    }
    .hraas-pillar:hover {
        transform: translateY(-4px);
    }
    .hraas-pillar__cap {
        height: 10px;
        margin: 0 6px;
        background: linear-gradient(180deg, #e8eef5 0%, #fff 100%);
        border-radius: 3px 3px 0 0;
        border: 1px solid #d0dae8;
        border-bottom: none;
    }
    .hraas-pillar__media {
        position: relative;
        margin: 0 6px;
        min-height: 220px;
        background: #1e3a5f;
        overflow: hidden;
        border-left: 2px solid #d0dae8;
        border-right: 2px solid #d0dae8;
    }
    .hraas-pillar__media img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        display: block;
    }
    .hraas-pillar__media-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(15, 35, 65, 0.25) 0%, rgba(15, 35, 65, 0.82) 100%);
        pointer-events: none;
    }
    .hraas-pillar__icon-wrap {
        position: relative;
        height: 0;
        margin: 0 6px;
        z-index: 2;
    }
    .hraas-pillar__icon {
        position: absolute;
        top: -26px;
        left: 50%;
        transform: translateX(-50%);
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: #006039;
        border: 3px solid #7dcea8;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: #fff;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.28);
    }
    .hraas-pillar__band {
        height: 5px;
        margin: 0 6px;
        background: #006039;
        border-left: 2px solid #d0dae8;
        border-right: 2px solid #d0dae8;
    }
    .hraas-pillar__foot {
        margin: 0 6px;
        padding: 30px 8px 16px;
        background: #fff;
        border: 2px solid #d0dae8;
        border-top: none;
        border-radius: 0 0 4px 4px;
        text-align: center;
        flex: 1;
    }
    .hraas-pillar__title {
        margin: 0;
        font-size: 0.72rem;
        font-weight: 700;
        line-height: 1.35;
        color: #006039;
    }
    .hraas-growth-engine__stylobate {
        background: #fff;
        border-radius: 0 0 10px 10px;
        padding: 14px 20px 18px;
        text-align: center;
        border-top: 3px solid #006039;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18);
    }
    .hraas-growth-engine__stylobate-text {
        margin: 0;
        font-size: 0.85rem;
        font-weight: 700;
        color: #334155;
        letter-spacing: 0.02em;
    }
    .hraas-growth-engine__stylobate-text i {
        color: #006039;
        font-size: 0.9rem;
        margin: 0 8px;
        vertical-align: middle;
        opacity: 0.75;
    }
    @media (max-width: 991.98px) {
        .hraas-growth-engine__pillars {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            padding: 12px;
        }
        .hraas-growth-engine__entablature {
            border-radius: 10px 10px 0 0;
        }
        .hraas-growth-engine__stylobate {
            border-radius: 0 0 10px 10px;
        }
        .hraas-pillar:nth-child(5) {
            grid-column: 1 / -1;
            max-width: 50%;
            margin: 0 auto;
            width: 100%;
        }
        .hraas-pillar__media {
            min-height: 200px;
        }
    }
    @media (max-width: 575px) {
        .hraas-growth-engine__pillars {
            grid-template-columns: 1fr;
            padding: 12px;
        }
        .hraas-pillar:nth-child(5) {
            max-width: none;
        }
        .hraas-pillar__media {
            min-height: 180px;
        }
    }
    .hraas-section-visual {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 12px 32px rgba(15, 23, 42, 0.1);
    }
    .hraas-section-visual img {
        width: 100%;
        display: block;
        border-radius: 12px;
    }
    .hraas-section--dark .hraas-section-visual {
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }
    .hraas-process-grid {
        margin-top: 8px;
    }
    .hraas-process-card {
        position: relative;
        height: 100%;
        padding-top: 42px;
    }
    .hraas-process-card__body {
        position: relative;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(125, 206, 168, 0.18);
        border-radius: 0 0 72px 0;
        box-shadow: 0 12px 36px rgba(0, 0, 0, 0.28);
        padding: 52px 22px 28px;
        min-height: 260px;
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        transition: border-color 0.2s ease, background 0.2s ease;
    }
    .hraas-process-card:hover .hraas-process-card__body {
        background: rgba(255, 255, 255, 0.09);
        border-color: rgba(125, 206, 168, 0.35);
    }
    .hraas-process-card__icon {
        position: absolute;
        top: 0;
        left: 22px;
        z-index: 2;
        width: 84px;
        height: 84px;
        border-radius: 50%;
        background: var(--primary-color-one, #006039);
        border: 5px solid #1a2332;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.35);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
        color: #fff;
        line-height: 1;
    }
    .hraas-process-card__num {
        position: absolute;
        top: 18px;
        right: 18px;
        font-size: 3.25rem;
        font-weight: 800;
        line-height: 1;
        color: rgba(255, 255, 255, 0.07);
        pointer-events: none;
        user-select: none;
    }
    .hraas-process-card__title {
        margin: 0 0 12px;
        font-size: 1.125rem;
        font-weight: 700;
        line-height: 1.35;
        color: #fff;
        padding-right: 36px;
    }
    .hraas-process-card__text {
        margin: 0 0 20px;
        flex: 1;
        font-size: 0.92rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.72);
    }
    @media (max-width: 991.98px) {
        .hraas-process-card__body {
            min-height: 220px;
            border-radius: 0 0 56px 0;
        }
    }
    .hraas-people-section {
        background: #f4f6f8 !important;
    }
    .hraas-focus-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 36px rgba(15, 23, 42, 0.08);
        margin-bottom: 28px;
    }
    .hraas-focus-card:last-child {
        margin-bottom: 0;
    }
    .hraas-focus-card__image {
        position: relative;
        overflow: hidden;
        line-height: 0;
        background: #e8edf2;
        aspect-ratio: 16 / 9;
        min-height: 260px;
        max-height: 320px;
    }
    .hraas-focus-card__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        display: block;
    }
    .hraas-focus-quote {
        position: absolute;
        z-index: 2;
        max-width: min(200px, 42%);
        padding: 10px 14px 12px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.14);
        font-size: 0.72rem;
        line-height: 1.45;
        font-weight: 600;
        color: #334155;
        text-align: left;
    }
    .hraas-focus-quote::before {
        content: '\201C';
        display: block;
        font-size: 1.25rem;
        line-height: 1;
        color: #006039;
        margin-bottom: 4px;
        font-weight: 700;
    }
    .hraas-focus-quote--tl {
        top: 10%;
        left: 5%;
    }
    .hraas-focus-quote--tr {
        top: 8%;
        right: 5%;
    }
    .hraas-focus-quote--bl {
        bottom: 12%;
        left: 5%;
    }
    .hraas-people-sidebar-col {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .hraas-knowledge-hub-showcase {
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 36px rgba(15, 23, 42, 0.08);
        border: 1px solid #e8edf2;
        flex: 1 1 auto;
        min-height: 0;
        max-height: 100%;
    }
    .hraas-knowledge-hub-showcase__photo {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        display: block;
    }
    .hraas-focus-card__body {
        padding: 26px 28px 30px;
    }
    .hraas-focus-card__tag {
        display: block;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #006039;
        margin-bottom: 14px;
    }
    .hraas-focus-card__title {
        margin: 0 0 14px;
        font-size: clamp(1.15rem, 2vw, 1.4rem);
        font-weight: 700;
        line-height: 1.35;
        color: #0f172a;
    }
    .hraas-focus-card__text {
        margin: 0;
        font-size: 0.95rem;
        line-height: 1.7;
        color: #64748b;
    }
    .hraas-focus-sidebar {
        background: #fff;
        border-radius: 12px;
        padding: 28px 26px 32px;
        box-shadow: 0 10px 36px rgba(15, 23, 42, 0.08);
        flex-shrink: 0;
    }
    .hraas-focus-sidebar__label {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 22px;
        font-size: 1.05rem;
        font-weight: 700;
        color: #0f172a;
    }
    .hraas-focus-sidebar__label::before {
        content: '';
        width: 28px;
        height: 3px;
        background: #006039;
        border-radius: 2px;
    }
    .hraas-focus-sidebar__label-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #006039;
        flex-shrink: 0;
    }
    .hraas-focus-sidebar__heading {
        margin: 0 0 14px;
        font-size: 1.5rem;
        font-weight: 800;
        line-height: 1.3;
        color: #0f172a;
    }
    .hraas-focus-sidebar__text {
        margin: 0 0 20px;
        font-size: 0.95rem;
        line-height: 1.65;
        color: #64748b;
    }
    .hraas-focus-sidebar__list {
        list-style: none;
        margin: 0 0 24px;
        padding: 0;
    }
    .hraas-focus-sidebar__list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 14px;
        font-size: 0.9rem;
        line-height: 1.5;
        color: #475569;
    }
    .hraas-focus-sidebar__list li:last-child {
        margin-bottom: 0;
    }
    .hraas-focus-sidebar__list-icon {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: rgba(0, 96, 57, 0.1);
        color: #006039;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        line-height: 1;
    }
    .hraas-focus-sidebar .theme-btn.one {
        width: 100%;
        text-align: center;
        justify-content: center;
    }
    @media (max-width: 991.98px) {
        .hraas-people-sidebar-col {
            gap: 24px;
        }
        .hraas-knowledge-hub-showcase {
            flex: none;
        }
        .hraas-focus-sidebar {
            margin-top: 8px;
        }
        .hraas-focus-card__image {
            min-height: 200px;
            max-height: 260px;
        }
        .hraas-focus-quote {
            max-width: 46%;
            font-size: 0.65rem;
            padding: 8px 10px;
        }
    }
    .hraas-health-check-section {
        background: linear-gradient(135deg, #f0f7f4 0%, #f8fafc 100%) !important;
    }
    .hraas-health-check-card {
        background: #fff;
        border-radius: 12px;
        padding: 28px 24px;
        box-shadow: 0 8px 28px rgba(0, 96, 57, 0.08);
        border: 1px solid #e2e8f0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .hraas-business-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 16px;
        max-width: 1140px;
        margin: 0 auto;
    }
    .hraas-business-card {
        position: relative;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hraas-business-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.28);
    }
    .hraas-business-card__media {
        position: relative;
        height: 168px;
        overflow: hidden;
        background: #1e3a5f;
    }
    .hraas-business-card__media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .hraas-business-card__icon-wrap {
        position: relative;
        height: 0;
        z-index: 2;
    }
    .hraas-business-card__icon {
        position: absolute;
        top: -28px;
        left: 50%;
        transform: translateX(-50%);
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: #fff;
        border: 3px solid #006039;
        color: #006039;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }
    .hraas-business-card__body {
        padding: 34px 14px 22px;
    }
    .hraas-business-card__tag {
        display: block;
        font-size: 0.7rem;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #006039;
        margin-bottom: 6px;
    }
    .hraas-business-card__body h4 {
        margin: 0 0 8px;
        font-size: 0.95rem;
        font-weight: 700;
        line-height: 1.35;
        color: #0f172a;
    }
    .hraas-business-card__body p {
        margin: 0;
        font-size: 0.85rem;
        line-height: 1.5;
        color: #64748b;
    }
    @media (max-width: 991.98px) {
        .hraas-business-card__media {
            height: 150px;
        }
    }
    .hraas-dashboard-panel {
        display: grid;
        grid-template-columns: minmax(240px, 280px) 1fr;
        gap: 0;
        align-items: stretch;
        margin-top: 40px;
        min-height: 440px;
    }
    .hraas-dashboard-tabs {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 16px 48px rgba(15, 23, 42, 0.12);
        z-index: 3;
        margin-right: -48px;
        align-self: center;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }
    .hraas-dashboard-tab {
        display: block;
        width: 100%;
        text-align: left;
        padding: 20px 26px;
        border: none;
        border-bottom: 1px solid #e8edf2;
        background: transparent;
        font-size: 1rem;
        font-weight: 600;
        color: #64748b;
        cursor: pointer;
        transition: color 0.2s ease, background 0.2s ease;
        font-family: inherit;
    }
    .hraas-dashboard-tab:last-of-type {
        border-bottom: none;
    }
    .hraas-dashboard-tab:hover {
        color: #006039;
        background: rgba(0, 96, 57, 0.04);
    }
    .hraas-dashboard-tab.is-active {
        color: #006039;
        background: rgba(0, 96, 57, 0.06);
    }
    .hraas-dashboard-tab__num {
        font-weight: 700;
        margin-right: 4px;
    }
    .hraas-dashboard-cta {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: auto;
        padding: 22px 26px;
        background: #006039;
        color: #fff;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.95rem;
        line-height: 1.35;
        transition: background 0.2s ease;
    }
    .hraas-dashboard-cta:hover {
        background: #004d2e;
        color: #fff;
    }
    .hraas-dashboard-cta__icon {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    .hraas-dashboard-stage {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        min-height: 440px;
        box-shadow: 0 16px 48px rgba(15, 23, 42, 0.18);
    }
    .hraas-dashboard-pane {
        position: absolute;
        inset: 0;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
    }
    .hraas-dashboard-pane.is-active {
        opacity: 1;
        visibility: visible;
    }
    .hraas-dashboard-pane__bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
    }
    .hraas-dashboard-pane__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(105deg, rgba(15, 23, 42, 0.15) 0%, rgba(15, 23, 42, 0.55) 40%, rgba(15, 23, 42, 0.88) 100%);
    }
    .hraas-dashboard-pane__inner {
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-end;
        text-align: left;
        padding: 48px 56px 48px 100px;
    }
    .hraas-dashboard-pane__copy {
        max-width: 480px;
        color: #fff;
    }
    .hraas-dashboard-pane__copy .before_title {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 12px;
    }
    .hraas-dashboard-pane__copy .before_title::after {
        background: rgba(255, 255, 255, 0.5);
    }
    .hraas-dashboard-pane__title {
        margin: 0 0 16px;
        font-size: clamp(1.75rem, 3vw, 2.25rem);
        font-weight: 800;
        line-height: 1.2;
        color: #fff;
    }
    .hraas-dashboard-pane__text {
        margin: 0;
        font-size: 1rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.82);
    }
    @media (max-width: 991.98px) {
        .hraas-dashboard-panel {
            grid-template-columns: 1fr;
            gap: 0;
            min-height: 0;
        }
        .hraas-dashboard-tabs {
            margin-right: 0;
            margin-bottom: -24px;
            border-radius: 12px 12px 0 0;
        }
        .hraas-dashboard-tab {
            padding: 16px 20px;
        }
        .hraas-dashboard-stage {
            min-height: 380px;
        }
        .hraas-dashboard-pane__inner {
            align-items: flex-start;
            padding: 56px 28px 36px;
        }
    }
    .hraas-resources-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
        margin-top: 28px;
    }
    .hraas-resource-card {
        background: #fff;
        border: 1px solid #e7ebf0;
        border-radius: 10px;
        padding: 20px 16px;
        display: flex;
        gap: 14px;
        align-items: flex-start;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
    .hraas-resource-card:hover {
        border-color: #006039;
        box-shadow: 0 8px 20px rgba(0, 96, 57, 0.08);
    }
    .hraas-resource-card__icon {
        width: 44px;
        height: 44px;
        flex-shrink: 0;
        border-radius: 8px;
        background: rgba(0, 96, 57, 0.1);
        color: #006039;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    .hraas-resource-card h4 {
        font-size: 0.95rem;
        font-weight: 700;
        color: #192437;
        margin: 0 0 4px;
        line-height: 1.35;
    }
    .hraas-resource-card p {
        margin: 0;
        color: #64748b;
        font-size: 0.82rem;
    }
    .hraas-final-cta-section {
        background: #f4f6f8 !important;
    }
    .hraas-cta-banner {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        min-height: 300px;
        box-shadow: 0 16px 48px rgba(15, 23, 42, 0.18);
    }
    .hraas-cta-banner__bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        transform: scale(1.06);
        filter: blur(3px);
    }
    .hraas-cta-banner__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(105deg, rgba(13, 22, 18, 0.94) 0%, rgba(13, 22, 18, 0.82) 52%, rgba(13, 22, 18, 0.55) 100%);
    }
    .hraas-cta-banner__inner {
        position: relative;
        z-index: 2;
        padding: 40px 32px 0 40px;
        min-height: 300px;
    }
    .hraas-cta-banner__title {
        margin: 0;
        font-size: clamp(1.65rem, 3vw, 2.25rem);
        font-weight: 800;
        line-height: 1.25;
        color: #fff;
        max-width: 520px;
    }
    .hraas-cta-banner__contact {
        margin-top: 28px;
        max-width: 560px;
    }
    .hraas-cta-banner__contact-label {
        margin: 0 0 8px;
        font-size: 1.15rem;
        font-weight: 700;
        color: #fff;
        line-height: 1.35;
    }
    .hraas-cta-banner__contact-text {
        margin: 0;
        font-size: 0.92rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.82);
    }
    .hraas-cta-banner__actions {
        margin-top: 24px;
        padding-bottom: 40px;
    }
    .hraas-cta-banner__figure {
        position: relative;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        padding: 0 16px 0 0;
        min-height: 300px;
    }
    .hraas-cta-banner__person {
        max-height: 340px;
        width: auto;
        max-width: 100%;
        object-fit: contain;
        object-position: bottom center;
        display: block;
        margin-bottom: 0;
        filter: drop-shadow(0 12px 28px rgba(0, 0, 0, 0.35));
    }
    @media (max-width: 991.98px) {
        .hraas-cta-banner__inner {
            padding: 32px 24px 0;
        }
        .hraas-cta-banner__figure {
            min-height: 260px;
            padding: 0 12px;
        }
        .hraas-cta-banner__person {
            max-height: 280px;
        }
    }
    .hraas-section--light {
        background: var(--bg-light, #f8fafc) !important;
    }
    .hraas-section--dark {
        background: var(--primary-color-five, #1a2332) !important;
    }
    .hraas-section--dark .hraas-section-heading,
    .hraas-section--dark .title_all_box.light_color .title {
        color: #fff;
    }
    .hraas-section--dark .hraas-section-intro,
    .hraas-section--dark .title_all_box.light_color p {
        color: rgba(255, 255, 255, 0.88);
    }
    .hraas-section--dark .title_all_box.light_color .before_title {
        color: #7dcea8;
    }
    .hraas-problem-visual {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    }
    .hraas-problem-visual img {
        width: 100%;
        display: block;
        border-radius: 12px;
    }
    .hraas-page-img {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
        min-height: 280px;
    }
    @media (max-width: 1199px) {
        .hraas-business-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 991px) {
        .hraas-handles-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .hraas-business-grid { grid-template-columns: repeat(2, 1fr); }
        .hraas-resources-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 575px) {
        .hraas-handles-grid,
        .hraas-business-grid { grid-template-columns: 1fr; }
        .hraas-growth-engine__pillars { grid-template-columns: 1fr; }
        .hraas-resources-grid { grid-template-columns: 1fr; }
    }
</style>

{{-- Section 1: Hero --}}
<section class="single_banner style_one bg_op_1 hraas-hero custom_black_overlay position-relative"
    style="background-image: url({{ asset($hero['image']) }});">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12">
                <div class="pd_top_40"></div>
                <div class="slider_content light_color text-center">
                    <h6>{{ $hero['label'] }}</h6>
                    <p class="hero-tagline">{{ $hero['tagline'] }}</p>
                    <h1 class="color_white">{{ $hero['title'] }}</h1>
                    <p class="hero-intro">{{ $hero['intro'] }}</p>
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

{{-- Section 2: Trust strip --}}
<section class="hraas-trust-strip hraas-section--light">
    <div class="container">
        <h2 class="hraas-section-heading">{{ $page['trust_strip']['heading'] }}</h2>
        <p class="hraas-section-intro">{{ $page['trust_strip']['content'] }}</p>
        <div class="hraas-icon-strip" role="list" aria-label="Business types we serve">
            @foreach($page['trust_strip']['segments'] as $index => $segment)
                @if($index > 0)
                    <span class="hraas-icon-strip__divider" aria-hidden="true"></span>
                @endif
                <div class="hraas-icon-strip__item" role="listitem">
                    <span class="hraas-icon-strip__icon" aria-hidden="true">
                        <i class="{{ $segment['icon'] }}"></i>
                    </span>
                    <span class="hraas-icon-strip__label">{{ $segment['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 3: Problem story (Creote-style split, dark) --}}
<section class="content-section hraas-section--dark bg_dark_3 hraas-problem-section">
    <div class="pd_top_90"></div>
    <div class="container">
        <div class="row align-items-center gutter_30px">
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <div class="title_all_box style_one light_color">
                    <div class="title_sections">
                        <div class="before_title">{{ $page['problem']['before_title'] }}</div>
                        <h2 class="title">{{ $page['problem']['heading'] }}</h2>
                        <p>{{ $page['problem']['content'] }}</p>
                    </div>
                </div>
                <div class="pd_top_20"></div>
                <div class="theme_btn_all color_two">
                    <a href="{{ route('projectenquiries') }}" class="theme-btn one primary-color-two">Talk to Our HR Experts <i class="icon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="hraas-problem-visual">
                    <img src="{{ asset($page['problem']['image']) }}" alt="Scattered HR tasks organized into one central dashboard" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_90"></div>
</section>

{{-- Section 4: What Mirashka handles --}}
<section class="content-section hraas-section--light bg_light_1 hraas-handles-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one text-center dark_color">
            <div class="title_sections">
                <div class="before_title">{{ $page['handles']['before_title'] }}</div>
                <h2 class="title">{{ $page['handles']['heading'] }}</h2>
            </div>
        </div>
        <div class="pd_top_30"></div>
        <div class="hraas-handles-grid" role="list" aria-label="{{ $page['handles']['before_title'] }}">
            @foreach($page['handles']['items'] as $item)
                <div class="hraas-handle-card" role="listitem">
                    <span class="hraas-handle-card__icon" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
                    <span class="hraas-handle-card__label">{{ $item['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

{{-- Section 5: Five core categories — People Growth Engine --}}
<section class="content-section hraas-section--dark bg_dark_3 hraas-categories-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one text-center light_color">
            <div class="title_sections">
                <div class="before_title">{{ $page['categories']['before_title'] }}</div>
                <h2 class="title">{{ $page['categories']['heading'] }}</h2>
            </div>
        </div>
        <div class="pd_top_32"></div>
        <div class="hraas-growth-engine" aria-label="{{ $page['categories']['engine_label'] }}">
            <div class="hraas-growth-engine__entablature">
                <span class="hraas-growth-engine__entablature-icon" aria-hidden="true"><i class="ri-team-line"></i></span>
                <h3 class="hraas-growth-engine__entablature-title">{{ $page['categories']['engine_label'] }}</h3>
            </div>
            <div class="hraas-growth-engine__pillars" role="list">
                @foreach($page['categories']['items'] as $item)
                    @php
                        $pillarHref = !empty($item['route']) ? route($item['route']) : null;
                        $pillarTag = $pillarHref ? 'a' : 'div';
                    @endphp
                    <{{ $pillarTag }}
                        @if($pillarHref) href="{{ $pillarHref }}" @endif
                        class="hraas-pillar"
                        role="listitem">
                        <span class="hraas-pillar__cap" aria-hidden="true"></span>
                        <span class="hraas-pillar__media">
                            @if(!empty($item['image']))
                                <img src="{{ asset($item['image']) }}" alt="" loading="lazy" aria-hidden="true">
                            @endif
                            <span class="hraas-pillar__media-overlay" aria-hidden="true"></span>
                        </span>
                        <span class="hraas-pillar__icon-wrap">
                            <span class="hraas-pillar__icon" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
                        </span>
                        <span class="hraas-pillar__band" aria-hidden="true"></span>
                        <span class="hraas-pillar__foot">
                            <h3 class="hraas-pillar__title">{{ $item['label'] }}</h3>
                        </span>
                    </{{ $pillarTag }}>
                @endforeach
            </div>
            <div class="hraas-growth-engine__stylobate">
                <p class="hraas-growth-engine__stylobate-text">
                    <i class="ri-settings-3-line" aria-hidden="true"></i>
                    {{ $page['categories']['engine_tagline'] }}
                    <i class="ri-settings-3-line" aria-hidden="true"></i>
                </p>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

{{-- Section 6: Human expert + digital --}}
<section class="content-section hraas-section--light bg_light_1">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="row align-items-center gutter_30px">
            <div class="col-lg-5 pd_right_35 order-lg-1 order-2">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections">
                        <div class="before_title">{{ $page['expert_digital']['before_title'] }}</div>
                        <h2 class="title">{{ $page['expert_digital']['heading'] }}</h2>
                        <p>{{ $page['expert_digital']['content'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mb-4 mb-lg-0 order-lg-2 order-1">
                <div class="hraas-section-visual">
                    <img src="{{ asset($page['expert_digital']['image']) }}" alt="Human HR advisor on one side, HR workflow dashboard on the other" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

{{-- Section 7: How it works — Creote-style process cards --}}
<section class="content-section hraas-section--dark bg_dark_3 hraas-process-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one text-center light_color">
            <div class="title_sections">
                <div class="before_title">{{ $page['process']['before_title'] }}</div>
                <h2 class="title">{{ $page['process']['heading'] }}</h2>
            </div>
        </div>
        <div class="pd_top_40"></div>
        <div class="row hraas-process-grid gutter_30px">
            @foreach($page['process']['steps'] as $index => $step)
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

{{-- Section 8: HR Health Check CTA --}}
<section class="content-section hraas-section--light hraas-health-check-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="row align-items-center gutter_30px">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="hraas-health-check-card">
                    <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                            <div class="before_title">{{ $page['health_check']['before_title'] }}</div>
                            <h2 class="title">{{ $page['health_check']['heading'] }}</h2>
                            <p>{{ $page['health_check']['content'] }}</p>
                        </div>
                    </div>
                    <div class="pd_top_20"></div>
                    <div class="theme_btn_all color_one">
                        <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $page['health_check']['cta'] }} <i class="icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hraas-section-visual">
                    <img src="{{ asset($page['health_check']['image']) }}" alt="HR Health Check checklist with compliance shield and people icons" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

{{-- Section 9: Solutions by business type --}}
<section class="content-section hraas-section--dark bg_dark_3">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one text-center light_color">
            <div class="title_sections">
                <div class="before_title">{{ $page['business_types']['before_title'] }}</div>
                <h2 class="title">{{ $page['business_types']['heading'] }}</h2>
            </div>
        </div>
        <div class="pd_top_40"></div>
        <div class="hraas-business-grid">
            @foreach($page['business_types']['blocks'] as $block)
                <article class="hraas-business-card">
                    <div class="hraas-business-card__media">
                        <img src="{{ asset($block['image']) }}" alt="{{ $block['title'] }}" loading="lazy">
                    </div>
                    <span class="hraas-business-card__icon-wrap">
                        <span class="hraas-business-card__icon" aria-hidden="true"><i class="{{ $block['icon'] }}"></i></span>
                    </span>
                    <div class="hraas-business-card__body">
                        <span class="hraas-business-card__tag">{{ $block['tag'] }}</span>
                        <h4>{{ $block['title'] }}</h4>
                        <p>{{ $block['text'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

{{-- Section 10: HR Operating Dashboard — Creote tabbed panel --}}
<section class="content-section hraas-section--light bg_light_1 hraas-dashboard-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one dark_color text-center">
            <div class="title_sections">
                <div class="before_title">{{ $page['dashboard']['before_title'] }}</div>
                <h2 class="title">{{ $page['dashboard']['heading'] }}</h2>
                <p>{{ $page['dashboard']['content'] }}</p>
            </div>
        </div>
        <div class="hraas-dashboard-panel" data-hraas-dashboard>
            <div class="hraas-dashboard-tabs" role="tablist" aria-label="{{ $page['dashboard']['heading'] }}">
                @foreach($page['dashboard']['tabs'] as $index => $tab)
                    <button
                        type="button"
                        class="hraas-dashboard-tab{{ $index === 0 ? ' is-active' : '' }}"
                        role="tab"
                        id="hraas-dashboard-tab-{{ $index }}"
                        aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-controls="hraas-dashboard-pane-{{ $index }}"
                        data-hraas-dashboard-tab="{{ $index }}">
                        <span class="hraas-dashboard-tab__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                        {{ $tab['label'] }}
                    </button>
                @endforeach
                <a href="{{ route('projectenquiries') }}" class="hraas-dashboard-cta">
                    <span class="hraas-dashboard-cta__icon" aria-hidden="true"><i class="ri-phone-line"></i></span>
                    <span>{{ $page['dashboard']['cta'] }}</span>
                </a>
            </div>
            <div class="hraas-dashboard-stage">
                @foreach($page['dashboard']['tabs'] as $index => $tab)
                    <div
                        class="hraas-dashboard-pane{{ $index === 0 ? ' is-active' : '' }}"
                        role="tabpanel"
                        id="hraas-dashboard-pane-{{ $index }}"
                        aria-labelledby="hraas-dashboard-tab-{{ $index }}"
                        data-hraas-dashboard-pane="{{ $index }}"
                        @if($index !== 0) hidden @endif>
                        <div
                            class="hraas-dashboard-pane__bg"
                            style="background-image: url('{{ asset($tab['image']) }}');"
                            aria-hidden="true"></div>
                        <div class="hraas-dashboard-pane__overlay" aria-hidden="true"></div>
                        <div class="hraas-dashboard-pane__inner">
                            <div class="hraas-dashboard-pane__copy">
                                <div class="before_title">{{ $page['dashboard']['before_title'] }}</div>
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

{{-- Section 11–12: Leadership + Employee Experience — Creote blog-card layout --}}
<section class="content-section hraas-section--light hraas-people-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="row gutter_30px align-items-stretch">
            <div class="col-lg-8">
                @foreach($page['people_excellence']['cards'] as $card)
                    <article class="hraas-focus-card">
                        <div class="hraas-focus-card__image">
                            <img
                                src="{{ asset($card['image']) }}"
                                alt="{{ $card['title'] }}"
                                loading="lazy"
                                style="object-position: {{ $card['image_position'] ?? 'center center' }};">
                            @if(!empty($card['quotes']))
                                @foreach($card['quotes'] as $quote)
                                    <span class="hraas-focus-quote {{ $quote['class'] }}">{{ $quote['text'] }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="hraas-focus-card__body">
                            <span class="hraas-focus-card__tag">{{ $card['tag'] }}</span>
                            <h3 class="hraas-focus-card__title">{{ $card['title'] }}</h3>
                            <p class="hraas-focus-card__text">{{ $card['content'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="col-lg-4 hraas-people-sidebar-col">
                @php $sidebar = $page['people_excellence']['sidebar']; @endphp
                <aside class="hraas-focus-sidebar">
                    <div class="hraas-focus-sidebar__label">
                        <span class="hraas-focus-sidebar__label-dot" aria-hidden="true"></span>
                        {{ $sidebar['label'] }}
                    </div>
                    <h3 class="hraas-focus-sidebar__heading">{{ $sidebar['heading'] }}</h3>
                    <p class="hraas-focus-sidebar__text">{{ $sidebar['content'] }}</p>
                    <ul class="hraas-focus-sidebar__list">
                        @foreach($page['resources']['items'] as $resource)
                            <li>
                                <span class="hraas-focus-sidebar__list-icon" aria-hidden="true"><i class="{{ $resource['icon'] }}"></i></span>
                                <span>{{ $resource['label'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="theme_btn_all color_one">
                        <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $sidebar['cta'] }} <i class="icon-right-arrow"></i></a>
                    </div>
                </aside>
                <div class="hraas-knowledge-hub-showcase">
                    <img
                        class="hraas-knowledge-hub-showcase__photo"
                        src="{{ asset($page['resources']['showcase_image']) }}"
                        alt="HR team collaboration"
                        loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

{{-- Section 13: Final CTA — Creote contact banner --}}
<section class="content-section hraas-final-cta-section">
    <div class="pd_top_60"></div>
    <div class="container">
        <div class="hraas-cta-banner">
            <div
                class="hraas-cta-banner__bg"
                style="background-image: url('{{ asset($page['final_cta']['bg_image'] ?? $page['final_cta']['image']) }}');"
                aria-hidden="true"></div>
            <div class="hraas-cta-banner__overlay" aria-hidden="true"></div>
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-7">
                    <div class="hraas-cta-banner__inner">
                        <h2 class="hraas-cta-banner__title">{{ $page['final_cta']['heading'] }}</h2>
                        <div class="hraas-cta-banner__contact">
                            <p class="hraas-cta-banner__contact-label">{{ $page['final_cta']['cta'] }}</p>
                            <p class="hraas-cta-banner__contact-text">{{ $page['final_cta']['content'] }}</p>
                        </div>
                        <div class="hraas-cta-banner__actions">
                            <div class="theme_btn_all color_two">
                                <a href="{{ route('projectenquiries') }}" class="theme-btn one primary-color-two">{{ $page['final_cta']['cta'] }} <i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="hraas-cta-banner__figure w-100">
                        <img
                            class="hraas-cta-banner__person"
                            src="{{ asset($page['final_cta']['image']) }}"
                            alt=""
                            loading="lazy"
                            aria-hidden="true">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_60"></div>
</section>

@include('frontend.layouts.common.sections.faqs.category', [
    'categoryKey' => 'hraas',
    'sectionClass' => 'hraas-section--light bg_light_1',
])

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
            var index = tab.getAttribute('data-hraas-dashboard-tab');

            tabs.forEach(function (t) {
                var active = t.getAttribute('data-hraas-dashboard-tab') === index;
                t.classList.toggle('is-active', active);
                t.setAttribute('aria-selected', active ? 'true' : 'false');
            });

            panes.forEach(function (pane) {
                var active = pane.getAttribute('data-hraas-dashboard-pane') === index;
                pane.classList.toggle('is-active', active);
                if (active) {
                    pane.removeAttribute('hidden');
                } else {
                    pane.setAttribute('hidden', '');
                }
            });
        });
    });
})();
</script>
@endpush

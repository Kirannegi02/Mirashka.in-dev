<style>
    .cwi-sub-page,
    .compliance-shared-cta {
        --cwi-green: #006039;
        --cwi-mint: #7dcea8;
    }
    .cwi-sub-page { overflow-x: clip; }
    .cwi-sub-hero.single_banner.style_one {
        padding: 72px 0 80px !important;
        min-height: 420px;
        background-color: #0d1612 !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
        background-size: cover !important;
        overflow: hidden;
    }
    .cwi-sub-hero.custom_black_overlay::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(8, 14, 12, 0.82);
        z-index: 0;
    }
    .cwi-sub-hero .container { position: relative; z-index: 1; }
    .cwi-sub-hero .slider_content { text-align: center; width: 100%; }
    .cwi-sub-hero h6 {
        color: #7dcea8 !important;
        font-size: 13px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 10px;
    }
    .cwi-sub-hero h1 {
        color: #fff !important;
        font-size: clamp(1.5rem, 3vw, 2.1rem);
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 14px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }
    .cwi-sub-hero .hero-intro {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.05rem;
        line-height: 1.65;
        max-width: 820px;
        margin: 0 auto 18px;
    }
    .cwi-sub-breadcrumb {
        margin-bottom: 16px;
        font-size: 0.85rem;
    }
    .cwi-sub-breadcrumb a {
        color: rgba(255, 255, 255, 0.75);
        text-decoration: none;
    }
    .cwi-sub-breadcrumb a:hover { color: #fff; }
    .cwi-sub-breadcrumb span { color: rgba(255, 255, 255, 0.5); margin: 0 8px; }
    .cwi-sub-section-visual {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 12px 32px rgba(15, 23, 42, 0.1);
    }
    .cwi-sub-section-visual img { width: 100%; display: block; }
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
    }
    .hraas-process-card__icon {
        position: absolute;
        top: 0;
        left: 22px;
        z-index: 2;
        width: 84px;
        height: 84px;
        border-radius: 50%;
        background: #006039;
        border: 5px solid #1a2332;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
        color: #fff;
    }
    .hraas-process-card__num {
        position: absolute;
        top: 18px;
        right: 18px;
        font-size: 3.25rem;
        font-weight: 800;
        color: rgba(255, 255, 255, 0.07);
    }
    .hraas-process-card__title {
        margin: 0 0 12px;
        font-size: 1.125rem;
        font-weight: 700;
        color: #fff;
        padding-right: 36px;
    }
    .hraas-process-card__text {
        margin: 0;
        flex: 1;
        font-size: 0.92rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.72);
    }
    .hraas-dashboard-panel {
        display: grid;
        grid-template-columns: minmax(240px, 280px) 1fr;
        gap: 0;
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
        font-family: inherit;
    }
    .hraas-dashboard-tab.is-active { color: #006039; background: rgba(0, 96, 57, 0.06); }
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
    }
    .hraas-dashboard-cta:hover { background: #004d2e; color: #fff; }
    .hraas-dashboard-cta__icon {
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
    .hraas-dashboard-pane.is-active { opacity: 1; visibility: visible; }
    .hraas-dashboard-pane__bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
    }
    .hraas-dashboard-pane__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(105deg, rgba(15, 23, 42, 0.15) 0%, rgba(15, 23, 42, 0.88) 100%);
    }
    .hraas-dashboard-pane__inner {
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 48px 56px 48px 100px;
    }
    .hraas-dashboard-pane__copy { max-width: 480px; color: #fff; }
    .hraas-dashboard-pane__title {
        margin: 0 0 16px;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        color: #fff;
    }
    .hraas-dashboard-pane__text {
        margin: 0;
        font-size: 1rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.88);
    }
    /* Focus split — matches HRaaS people_excellence layout */
    .cwi-focus-split {
        padding: 56px 0 40px;
        background: #f4f6f8 !important;
    }
    .cwi-focus-split .hraas-focus-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 36px rgba(15, 23, 42, 0.08);
        margin-bottom: 0;
        width: 100%;
    }
    .cwi-focus-split .hraas-focus-card__image {
        position: relative;
        overflow: hidden;
        line-height: 0;
        background: #e8edf2;
        aspect-ratio: 16 / 9;
        min-height: 260px;
        max-height: 320px;
    }
    .cwi-focus-split .hraas-focus-card__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .cwi-focus-split .hraas-focus-card__body {
        padding: 26px 28px 30px;
    }
    .cwi-focus-split .hraas-focus-card__tag {
        display: block;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #006039;
        margin-bottom: 14px;
    }
    .cwi-focus-split .hraas-focus-card__title {
        margin: 0 0 14px;
        font-size: clamp(1.15rem, 2vw, 1.4rem);
        font-weight: 700;
        line-height: 1.35;
        color: #0f172a;
    }
    .cwi-focus-split .hraas-focus-card__text {
        margin: 0;
        font-size: 0.95rem;
        line-height: 1.7;
        color: #64748b;
    }
    .cwi-focus-split .cwi-focus-sidebar-col {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .cwi-focus-split .hraas-focus-sidebar {
        background: #fff;
        border-radius: 12px;
        padding: 28px 26px 32px;
        box-shadow: 0 10px 36px rgba(15, 23, 42, 0.08);
        flex-shrink: 0;
        width: 100%;
        box-sizing: border-box;
    }
    .cwi-focus-split .hraas-focus-sidebar__label {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 22px;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #006039;
    }
    .cwi-focus-split .hraas-focus-sidebar__label-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #006039;
        flex-shrink: 0;
    }
    .cwi-focus-split .hraas-focus-sidebar__heading {
        margin: 0 0 14px;
        font-size: 1.5rem;
        font-weight: 800;
        line-height: 1.3;
        color: #0f172a;
    }
    .cwi-focus-split .hraas-focus-sidebar__text {
        margin: 0 0 20px;
        font-size: 0.95rem;
        line-height: 1.65;
        color: #64748b;
    }
    .cwi-focus-split .hraas-focus-sidebar__list {
        list-style: none;
        margin: 0 0 24px;
        padding: 0;
    }
    .cwi-focus-split .hraas-focus-sidebar__list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 14px;
        font-size: 0.9rem;
        line-height: 1.5;
        color: #475569;
    }
    .cwi-focus-split .hraas-focus-sidebar__list li:last-child {
        margin-bottom: 0;
    }
    .cwi-focus-split .hraas-focus-sidebar__list-icon {
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
    .cwi-focus-split .hraas-focus-sidebar__actions {
        margin-top: 0;
        padding-top: 0;
    }
    .cwi-focus-split .hraas-focus-sidebar .theme-btn.one,
    .cwi-focus-split .hraas-focus-sidebar__actions .theme-btn.one {
        width: 100%;
        display: inline-flex;
        justify-content: center;
        text-align: center;
    }
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
        color: #0f172a;
        line-height: 1.35;
    }
    .cwi-related-services__link {
        font-size: 0.85rem;
        font-weight: 700;
        color: #006039;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }
    .cwi-related-services__link:hover { color: #0f172a; }
    .compliance-shared-cta {
        padding: 0 0 56px;
        background: #f6f8f7;
    }
    .compliance-shared-cta__card {
        border-radius: 20px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        min-height: 300px;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.15);
    }
    .compliance-shared-cta__overlay {
        background: linear-gradient(105deg, rgba(6, 13, 10, 0.94) 0%, rgba(0, 96, 57, 0.82) 100%);
        display: grid;
        grid-template-columns: 1fr auto;
        align-items: center;
        padding: 48px 40px;
        gap: 24px;
        min-height: 300px;
    }
    .compliance-shared-cta__copy h2 {
        color: #fff;
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        margin: 0 0 12px;
    }
    .compliance-shared-cta__copy p {
        color: rgba(255, 255, 255, 0.85);
        margin: 0 0 22px;
        max-width: 520px;
        line-height: 1.65;
    }
    .compliance-shared-cta__actions { display: flex; flex-wrap: wrap; gap: 12px; }
    .compliance-shared-cta__actions .theme-btn.two {
        color: #fff !important;
        border-color: rgba(255, 255, 255, 0.9) !important;
        background: transparent !important;
    }
    .compliance-shared-cta__actions .theme-btn.two:hover {
        background: #fff !important;
        color: #0f172a !important;
    }
    .compliance-shared-cta__person {
        max-height: 280px;
        width: auto;
        object-fit: contain;
        align-self: flex-end;
    }
    .cwi-sub-page-cta__inner {
        max-width: 760px;
        margin: 0 auto;
    }
    .cwi-sub-page-cta__text {
        color: rgba(255, 255, 255, 0.88);
        font-size: 1.05rem;
        line-height: 1.65;
        margin: 0 auto 22px;
    }
    .cwi-sub-section--light { background: #f6f8f7; }
    .cwi-sub-section--dark.bg_dark_3 { background: #0d1612 !important; }

    @media (max-width: 991.98px) {
        .cwi-focus-split { padding: 40px 0 32px; }
        .cwi-focus-split .cwi-focus-sidebar-col {
            gap: 24px;
        }
        .cwi-focus-split .hraas-focus-card__image {
            min-height: 200px;
            max-height: 260px;
        }
        .hraas-dashboard-panel { grid-template-columns: 1fr; }
        .hraas-dashboard-tabs {
            margin-right: 0;
            margin-bottom: 16px;
        }
        .hraas-dashboard-pane__inner { padding: 32px 24px; justify-content: flex-start; }
        .compliance-shared-cta__overlay { grid-template-columns: 1fr; }
        .compliance-shared-cta__person { display: none; }
    }
</style>

<style>
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
        min-height: 0;
    }
    #industriesHeroBanner .tab-pane {
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 0;
        height: auto !important;
        padding-bottom: 0;
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
        padding-top: 30px;
        padding-bottom: 30px;
        position: relative;
        z-index: 2;
    }
    #industriesHeroBanner .tentArea {
        padding: 40px 0;
        max-width: 1060px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }
    #industriesHeroBanner .tentArea > :first-child {
        margin-top: 0 !important;
    }
    #industriesHeroBanner .tentArea > :last-child {
        margin-bottom: 0 !important;
    }
    #industriesHeroBanner .tentArea h2.text-white {
        font-size: var(--industries-heading);
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 12px;
    }
    #industriesHeroBanner .tentArea p.text-white {
        margin: 12px 0 12px;
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
        padding-bottom: 0;    }
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
            min-height: 0;
        }
        #industriesHeroBanner .tab-pane {
            padding-bottom: 0;
        }
        #industriesHeroBanner .tab-pane .container {
            padding-top: 0;
            padding-bottom: 24px;
        }
        #industriesHeroBanner .tentArea {
            text-align: center;
            margin: auto;
            padding: 24px 0;
        }
    }

    .industries-page {
        --industries-radius: 8px;
        --industries-text: 17px;
        --industries-heading: clamp(1.75rem, 3.2vw, 2.25rem);
        --industries-eyebrow: clamp(16px, 1.25vw, 20px);
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
        text-decoration: underline;
        text-underline-offset: 0.18em;
        text-decoration-thickness: 2px;
    }
    .industries-page .title_all_box .title_sections .before_title {
        text-decoration: underline;
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
        align-items: stretch;
        min-height: 0;
        margin-top: 28px;
    }
    .industries-reality-dashboard .hraas-dashboard-tabs {
        align-self: stretch;
        height: 100%;
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
        display: flex;
        align-items: flex-start;
        gap: 8px;
        padding: 6px 0;
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
    .industries-reality-dashboard .hraas-dashboard-point-icon {
        flex: 0 0 16px;
        width: 16px;
        height: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-top: 0.5em;
        color: #006039;
        font-size: 0.78rem;
        line-height: 1;
    }
    .industries-reality-dashboard .hraas-dashboard-point-icon i {
        display: block;
        line-height: 1;
    }
    .industries-reality-dashboard .hraas-dashboard-point-text {
        display: block;
        flex: 1 1 auto;
        min-width: 0;
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
        height: 100%;
    }
    .industries-reality-dashboard .hraas-dashboard-pane {
        min-height: 100%;
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
    /* Uniform section spacing across industries page */
    .industries-page > section {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding-top: 72px !important;
        padding-bottom: 72px !important;
    }
    .industries-page > section#industriesHeroBanner {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .industries-page > section#industry-health-check {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .industries-page > section .pd_top_80,
    .industries-page > section .pd_top_90,
    .industries-page > section .pd_top_100,
    .industries-page > section .pd_bottom_70,
    .industries-page > section .pd_bottom_80,
    .industries-page > section .pd_bottom_90 {
        display: none !important;
        height: 0 !important;
        padding: 0 !important;
        margin: 0 !important;
    }
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
        margin-top: 52px;
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
        font-size: 16px;
        font-weight: 600;
        line-height: 28px;
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
        font-size: 16px;
        line-height: 28px;
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
        margin: 0 0 15px;
        font-size: 34px !important;
        line-height: 44px !important;
        font-weight: 600;
        text-decoration: underline;
        text-underline-offset: 3px;
        color: rgba(255, 255, 255, 0.95);
    }
    .industries-grid-showcase__title {
        margin: 0 0 20px;
        color: #fff;
        font-size: 50px !important;
        line-height: 60px !important;
        font-weight: 700 !important;
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
        color: rgba(255, 255, 255, 0.82);
        max-width: 820px;
        font-size: 16px !important;
        line-height: 30px !important;
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
    .industries-approach-section .pd_top_50 {
        padding-top: 6px !important;
    }
    .industries-approach-section .pd_bottom_50 {
        padding-bottom: 6px !important;
    }
    .industries-approach-section .pd_bottom_20 {
        padding-bottom: 4px !important;
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
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .industries-pulse-hero {
        background: linear-gradient(135deg, #006847 0%, #005a3a 50%, #004530 100%);
        padding: 48px 0 96px !important;
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
        text-decoration: underline;
        text-underline-offset: 0.2em;
        text-decoration-thickness: 2px;
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
        padding-bottom: 0 !important;
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
    .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view {
        display: block;
    }
    .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view > .col {
        display: none;
    }
    .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view > .col.is-active {
        display: block;
        width: 100%;
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
    @media (min-width: 992px) {
        .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view .pulse-ignite-card {
            display: grid;
            grid-template-columns: minmax(280px, 38%) 1fr;
            grid-template-rows: auto auto;
            min-height: 0;
        }
        .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view .pulse-ignite-thumb {
            grid-column: 1;
            grid-row: 1 / span 2;
            height: 240px;
            border-radius: calc(var(--industries-radius, 8px) + 6px) 0 0 calc(var(--industries-radius, 8px) + 6px);
        }
        .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view .pulse-ignite-thumb img {
            height: 240px;
        }
        .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view .pulse-ignite-card .card-body {
            grid-column: 2;
            grid-row: 1;
            justify-content: flex-start;
        }
        .industries-pulse-panel-wrap .pulse-cards-grid.is-single-view .pulse-ignite-card .card-footer {
            grid-column: 2;
            grid-row: 2;
            margin-top: 0;
            border-top: 1px solid rgba(15, 23, 42, 0.08) !important;
        }
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
    .industries-page .faqs-section .title_all_box {
        text-align: left !important;
        margin-bottom: 28px;
    }
    .industries-page .faqs-section .title_all_box .title_sections {
        max-width: 760px;
        margin: 0;
    }
    .industries-page .faqs-section .faq-layout {
        align-items: stretch;
    }
    .industries-page .faqs-section .faq-left {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .industries-page .faqs-section .faq-visual {
        position: relative;
        min-height: 100%;
        height: 100%;
        width: 100%;
        display: flex;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid rgba(125, 206, 168, 0.28);
        box-shadow: 0 18px 42px rgba(0, 0, 0, 0.28);
        background: #0d1f18;
    }
    .industries-page .faqs-section .faq-visual img {
        flex: 1 1 auto;
        width: 100%;
        height: 100%;
        min-height: 0;
        object-fit: cover;
        object-position: center top;
        display: block;
    }
    .industries-page .faqs-section .faq-visual::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(165deg, rgba(10, 28, 20, 0.1) 0%, rgba(10, 28, 20, 0.45) 100%);
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
        justify-content: flex-start;
        text-align: left;
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
    .industries-page .faqs-section .faq-layout > [class*="col-lg-"] {
        display: flex;
    }
    @media (max-width: 991px) {
        .industries-page .faqs-section .title_all_box {
            text-align: center !important;
        }
        .industries-page .faqs-section .title_all_box .title_sections {
            margin: 0 auto;
        }
        .industries-page .faqs-section .faq-visual img {
            min-height: 280px;
        }
        .industries-page .faqs-section .faq-layout > [class*="col-lg-"] {
            display: block;
        }
        .industries-page .faqs-section .section-cta {
            justify-content: center;
            text-align: center;
        }
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
    .industries-page p,
    .industries-page li,
    .industries-page dd,
    .industries-page label,
    .industries-page input,
    .industries-page select,
    .industries-page textarea,
    .industries-page .theme-btn,
    .industries-page .accordion-content p,
    .industries-page .hraas-dashboard-pane__text,
    .industries-page .hraas-dashboard-sidebar-pain-list li,
    .industries-page .gold.textbg {
        font-size: var(--industries-text) !important;
        line-height: var(--industries-line) !important;
    }
    .industries-page .title_sections h2,
    .industries-page .title_all_box h2,
    .industries-page .pulse-heading,
    .industries-page .home-why-mirashka__title,
    .industries-page .industry-challenge-model__title,
    .industries-page .industry-health-showcase__title,
    .industries-page .industry-lead-showcase__title,
    .industries-page .industry-usecases-collage__head h2,
    #industriesHeroBanner .tentArea h2.text-white {
        font-size: var(--industries-heading) !important;
        line-height: 1.25 !important;
    }
    .industries-page .before_title,
    .industries-page .pulse-kicker,
    .industries-page .industry-health-showcase__label {
        font-size: var(--industries-eyebrow) !important;
        line-height: 1.4 !important;
    }
    .industries-page .industries-grid-showcase__kicker {
        font-size: 34px !important;
        line-height: 44px !important;
        font-weight: 600 !important;
    }
    .industries-page .industries-grid-showcase__title {
        font-size: var(--industries-heading) !important;
        line-height: 1.25 !important;
        font-weight: 800 !important;
    }
    #industriesHeroBanner .theme_btn_all .theme-btn {
        font-size: var(--industries-text) !important;
    }
</style>

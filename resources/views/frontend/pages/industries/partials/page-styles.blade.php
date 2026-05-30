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
    .industries-page {
        --industries-radius: 8px;
        --industries-text: 17px;
        --industries-heading: clamp(1.75rem, 3.2vw, 2.25rem);
        --industries-eyebrow: clamp(16px, 1.25vw, 20px);
        --industries-line: 1.7;
        --industries-section-pad: 80px;
        --industries-off-white: #fafafa;
        --industries-section-alt: #e5e5e5;
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
    /* Uniform section header rhythm: label → title → divider → intro */
    .industries-page .industries-section-header,
    .industries-page .title_all_box.style_one.text-center.dark_color {
        margin-bottom: 0;
        padding-top: 0;
    }
    .industries-page .industries-section-header .title_sections .before_title,
    .industries-page .title_all_box.style_one.text-center.dark_color .title_sections .before_title {
        display: block;
        margin: 0 auto 14px;
        padding: 0 0 8px;
    }
    .industries-page .industries-section-header .title_sections h2.title,
    .industries-page .industries-section-header .title_sections > h2,
    .industries-page .title_all_box.style_one.text-center.dark_color .title_sections h2.title,
    .industries-page .title_all_box.style_one.text-center.dark_color .title_sections > h2 {
        margin: 0 auto 22px;
        padding: 0;
    }
    .industries-page .industries-section-header .title_sections > .middle,
    .industries-page .title_all_box.style_one.text-center.dark_color .title_sections > .middle {
        display: inline-block;
        margin: 0 auto 24px;
    }
    .industries-page .industries-section-header .title_sections > p,
    .industries-page .title_all_box.style_one.text-center.dark_color .title_sections > p {
        max-width: 900px;
        margin: 0 auto 16px;
        padding: 0;
    }
    .industries-page .industries-section-header .title_sections > p:last-child,
    .industries-page .title_all_box.style_one.text-center.dark_color .title_sections > p:last-child {
        margin-bottom: 0;
    }
    .industries-page .home-growth-reality .home-growth-reality__inner,
    .industries-page .industries-pulse-section__title + .slider-container,
    .industries-page .industries-segments-tabs-wrap > .industries-segments-tabs,
    .industries-page .industries-reality-tabs .inner_section {
        margin-top: 48px;
    }
    .industries-page .industries-reality-tabs .industries-reality-tabs__challenges-title {
        margin-top: 28px;
    }
    .industries-page .industries-segments-tabs-wrap .title_all_box,
    .industries-page .industries-reality-standout .title_all_box.industries-section-header,
    .industries-page .industries-reality-tabs__header {
        margin-bottom: 0;
    }
    .industries-page .cwi-title-draw .title_sections .before_title::after,
    .industries-page .cwi-title-draw.is-visible .title_sections .before_title::after {
        display: none !important;
        content: none !important;
    }
    /* Reality tab section (Creote type_one) */
    .industries-reality-tabs__section-name {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--primary-color-one, #006039);
        margin: 0 0 10px;
    }
    .industries-reality-tabs__intro {
        max-width: 920px;
        margin: 0 auto 8px;
    }
    .industries-reality-tabs__intro p {
        font-size: var(--industries-text, 17px);
        line-height: 1.75;
        color: var(--text-color-dark, #4a4e56);
        margin: 0 0 16px;
    }
    .industries-reality-tabs__intro p:last-child {
        margin-bottom: 0;
    }
    .industries-reality-tabs__challenges-title {
        font-size: clamp(1.25rem, 2.5vw, 1.5rem);
        font-weight: 800;
        color: var(--heading-dark, #282f3b);
        margin: 28px 0 0;
    }
    .industries-reality-tabs .inner_section {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        padding-top: 24px;
        padding-bottom: 24px;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header {
        max-height: 520px;
        overflow-y: auto;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header ul li a {
        font-size: 15px;
        line-height: 1.4;
        padding: 16px 0;
        white-space: normal;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tab_content .content_image {
        max-width: 720px;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tab_content .content_image h6 {
        font-size: clamp(1rem, 2vw, 1.35rem);
        line-height: 1.35;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tab_content .content_image h2 {
        font-size: clamp(1.35rem, 2.8vw, 2rem);
        line-height: 1.25;
        margin-bottom: 16px;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tab_content .content_image p {
        font-size: var(--industries-text, 16px);
        line-height: 1.7;
        opacity: 0.92;
        margin-bottom: 14px;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tab_content .content_image p:last-of-type {
        margin-bottom: 20px;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tab_content .content_image a.rd_more {
        opacity: 1;
        font-size: 13px;
        font-weight: 600;
    }
    @media (max-width: 991.98px) {
        .industries-reality-tabs .tabs_all_box.type_one .tab_content .content_image {
            margin-left: 0;
            padding: 180px 24px 48px;
        }
        .industries-reality-tabs .tabs_all_box.type_one .tabs_header {
            position: relative;
            left: auto;
            top: auto;
            width: 100%;
            max-height: none;
            margin-bottom: 24px;
        }
        .industries-reality-tabs .tabs_all_box.type_one .tab_content {
            min-height: 420px;
        }
    }
    /* Tab sidebar: theme `a:hover` turns toll_free label green on green bg */
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header .toll_free a,
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header .toll_free a {
        color: #fff !important;
        line-height: 1.35;
        white-space: normal;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header .toll_free a:hover,
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header .toll_free a:focus,
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header .toll_free a:hover,
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header .toll_free a:focus {
        color: #fff !important;
    }
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header .toll_free:hover,
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header .toll_free:hover {
        filter: brightness(1.06);
    }
    /* Bootstrap nav-pills `.active` uses white text — invisible on white tab card */
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header .nav-pills .nav-link.active,
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header .nav-pills .nav-link.active,
    .industries-reality-tabs .tabs_all_box.type_one .tabs_header .nav-pills .nav-link:hover,
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header .nav-pills .nav-link:hover {
        color: var(--primary-color-one, #006039) !important;
    }

    /* Sub-industries segments tab section (section pad on #industry-subcategories) */
    .industries-segments-tabs-wrap {
        padding-top: 0;
        padding-bottom: 0;
    }
    .industries-segments-tabs-wrap .title_all_box {
        margin-bottom: 0;
    }
    .industries-segments-tabs-wrap .title_sections p {
        margin-bottom: 0;
    }
    .industries-segments-tabs {
        margin-top: 20px;
    }
    .industries-segments-tabs .inner_section {
        padding: 20px 0;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tab_over_all_box {
        position: relative;
        min-height: 460px;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header {
        position: absolute;
        left: 50px;
        top: 50% !important;
        transform: translateY(-50%);
        margin-top: 0 !important;
        padding-top: 0 !important;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header ul {
        padding-top: 0;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header ul li:first-child a {
        padding-top: 14px;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tab_content {
        min-height: 460px;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tab_content .content_image {
        margin-left: 320px;
        padding: 48px 40px 40px !important;
        min-height: 460px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tab_content .content_image h6 {
        font-size: clamp(1rem, 2vw, 1.35rem);
        line-height: 1.35;
        margin-bottom: 10px;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tab_content .content_image h2 {
        font-size: clamp(1.5rem, 2.8vw, 2.25rem);
        line-height: 1.2;
        margin-bottom: 14px;
    }
    .industries-segments-tabs .tabs_all_box.type_one .tabs_header ul li a {
        font-size: 15px;
        line-height: 1.4;
        padding: 14px 0;
        white-space: normal;
    }
    .industries-segments-tabs .content_image .industry-segment-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin: 0 0 14px;
        padding: 0;
        list-style: none;
    }
    .industries-segments-tabs .content_image .industry-segment-pills li {
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.35);
        color: #fff;
        border-radius: 8px;
        padding: 6px 12px;
        font-size: 13px;
        line-height: 1.35;
        font-weight: 500;
    }
    .industries-segments-tabs .content_image .industry-segment-cta {
        margin-top: 8px;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        width: auto !important;
        max-width: 100%;
        min-width: 0;
        min-height: 52px;
        padding: 0 28px !important;
        border-radius: 10px 0 10px 0 !important;
        white-space: normal;
        text-align: center;
        align-self: flex-start;
    }
    .industries-segments-tabs .content_image p {
        margin-bottom: 16px;
        max-width: 640px;
    }
    @media (max-width: 991.98px) {
        .industries-segments-tabs .inner_section {
            padding: 16px 0;
        }
        .industries-segments-tabs .tabs_all_box.type_one .tab_over_all_box {
            min-height: 0;
        }
        .industries-segments-tabs .tabs_all_box.type_one .tab_content {
            min-height: 400px;
        }
        .industries-segments-tabs .tabs_all_box.type_one .tab_content .content_image {
            margin-left: 0;
            min-height: 0;
            padding: 120px 24px 32px !important;
            justify-content: flex-end;
        }
        .industries-segments-tabs .tabs_all_box.type_one .tabs_header {
            position: relative;
            left: auto;
            top: auto !important;
            transform: none;
            width: 100%;
            margin-bottom: 24px;
        }
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
    .industries-page .bg-light-section { background: var(--industries-section-alt, #e5e5e5); }
    /* Alternate section backgrounds — light: 2, 4, 6, 8, 10 (off-white) | dark: 3, 7, 9 (grey) */
    .industries-page .industries-section--light,
    .industries-page #industry-reality.industries-section--light,
    .industries-page #industry-reality.industries-section--light .cwi-standout,
    .industries-page #pulse.industries-section--light,
    .industries-page #industry-hiring-strategy.industries-section--light,
    .industries-page #industry-use-cases.industries-section--light,
    .industries-page #industry-form.industries-section--light {
        background: var(--industries-off-white, #fafafa) !important;
    }
    .industries-page .industries-section--dark,
    .industries-page #industry-subcategories.industries-section--dark,
    .industries-page #industry-compliance.industries-section--dark,
    .industries-page #industry-health-check.industries-section--dark {
        background: var(--industries-section-alt, #e5e5e5) !important;
    }
    .industries-page .industries-compliance-services.bg_light_1 {
        background: var(--industries-section-alt, #e5e5e5) !important;
    }
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
    /* Uniform section spacing — match What We Do (80px top & bottom) */
    .industries-page > section,
    .industries-page > #industry-subcategories {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding-top: var(--industries-section-pad) !important;
        padding-bottom: var(--industries-section-pad) !important;
    }
    .industries-page .industry-challenge-solution,
    .industries-page .cwi-integrity {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .industries-page .industries-compliance-services .mr_bottom_20 {
        margin-bottom: 20px;
    }
    .industries-page > section .pd_top_80,
    .industries-page > section .pd_top_90,
    .industries-page > section .pd_top_100,
    .industries-page > section .pd_bottom_40,
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
    .industries-pulse-section .industries-pulse-section__title {
        margin-top: 0;
        padding-top: 0;
    }
    .industries-pulse-section .title_sections p {
        max-width: 920px;
        margin-left: auto;
        margin-right: auto;
    }
    .industries-page .process-flow-note {
        text-align: center;
        margin-top: 24px;
        font-weight: 600;
    }
    /* Keep custom rebuilt sections isolated so following blocks don't overlap */
    .industries-page .industry-video-hr,
    .industries-page .industry-video-hero,
    .industries-page .industry-health-industries,
    .industries-page .industry-lead-showcase,
    .industries-page .faqs-section {
        position: relative;
        z-index: 1;
        clear: both;
    }
    .industries-page .industry-video-hr,
    .industries-page .industry-video-hero,
    .industries-page .industry-health-industries,
    .industries-page .industry-lead-showcase {
        overflow: hidden;
    }
    .industries-page .faqs-section {
        margin-top: 0 !important;
        padding-top: var(--industries-section-pad, 80px) !important;
        padding-bottom: var(--industries-section-pad, 80px) !important;
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
    .industries-page .industry-health-industries .title_sections .title,
    .industries-page .industry-lead-showcase__title,
    .industries-page .industries-use-cases-tabs .title_sections .title,
    .industries-page .industries-use-cases-tabs .title_sections h2.title,
    .industries-page .industries-reality-standout .title_sections h2.title,
    .industries-page .industries-reality-standout .title_sections > h2 {
        font-size: var(--industries-heading) !important;
        line-height: 1.25 !important;
    }
    .industries-page .before_title,
    .industries-page .pulse-kicker,
    .industries-page .industry-health-industries .before_title {
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
    @media (max-width: 991.98px) {
        .industries-page {
            --industries-section-pad: 56px;
        }
    }
</style>

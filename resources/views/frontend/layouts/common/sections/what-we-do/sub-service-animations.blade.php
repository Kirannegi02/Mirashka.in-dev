@include('frontend.layouts.common.sections.what-we-do.category-animations')

<style>
    .cwi-sub-page .hraas-focus-card,
    .cwi-sub-page .hraas-focus-sidebar,
    .cwi-sub-page .hraas-process-card,
    .cwi-sub-page .hraas-dashboard-panel,
    .cwi-sub-page .cwi-sub-page-cta__inner {
        transition: transform 0.5s var(--cwi-ease-out), box-shadow 0.5s ease;
    }
    .cwi-sub-page .hraas-process-card.is-visible:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 48px rgba(0, 96, 57, 0.16);
    }
    .cwi-sub-page .hraas-process-card__icon {
        transition: transform 0.4s var(--cwi-ease-spring);
    }
    .cwi-sub-page .hraas-process-card.is-visible:hover .hraas-process-card__icon {
        transform: scale(1.1) rotate(-5deg);
    }
    .cwi-sub-page .hraas-focus-card.is-visible:hover {
        transform: translateY(-6px);
        box-shadow: 0 24px 52px rgba(15, 23, 42, 0.12);
    }
    .cwi-sub-page .hraas-dashboard-tab {
        transition: background 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }
    .cwi-sub-page .hraas-dashboard-tab.is-active {
        animation: cwiTabPulse 2.8s ease-in-out infinite;
    }
    @keyframes cwiTabPulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(125, 206, 168, 0.25); }
        50% { box-shadow: 0 0 0 6px rgba(125, 206, 168, 0); }
    }
    .cwi-sub-page .hraas-dashboard-pane.is-active .hraas-dashboard-pane__bg {
        animation: cwiPaneKenBurns 18s ease-in-out infinite alternate;
    }
    @keyframes cwiPaneKenBurns {
        0% { transform: scale(1); }
        100% { transform: scale(1.06); }
    }
    .cwi-sub-page .hraas-focus-sidebar__list li {
        opacity: 0;
        transform: translateX(12px);
        transition: opacity 0.45s var(--cwi-ease-out), transform 0.45s var(--cwi-ease-out);
    }
    .cwi-sub-page .hraas-focus-sidebar.is-visible .hraas-focus-sidebar__list li {
        opacity: 1;
        transform: translateX(0);
    }
    .cwi-sub-page .hraas-focus-sidebar.is-visible .hraas-focus-sidebar__list li:nth-child(1) { transition-delay: 0.06s; }
    .cwi-sub-page .hraas-focus-sidebar.is-visible .hraas-focus-sidebar__list li:nth-child(2) { transition-delay: 0.12s; }
    .cwi-sub-page .hraas-focus-sidebar.is-visible .hraas-focus-sidebar__list li:nth-child(3) { transition-delay: 0.18s; }
    .cwi-sub-page .hraas-focus-sidebar.is-visible .hraas-focus-sidebar__list li:nth-child(4) { transition-delay: 0.24s; }
    .cwi-sub-page .cwi-sub-hero .slider_content > * {
        opacity: 0;
        transform: translateY(28px);
        animation: cwiHeroIn 0.9s var(--cwi-ease-out) forwards;
    }
    .cwi-sub-page .cwi-sub-hero .slider_content .cwi-anim { animation: none; opacity: 1; transform: none; }
    .cwi-sub-page .cwi-sub-hero .slider_content h6 { animation-delay: 0.1s; }
    .cwi-sub-page .cwi-sub-hero .slider_content h1 { animation-delay: 0.28s; }
    .cwi-sub-page .cwi-sub-hero .slider_content .hero-intro { animation-delay: 0.44s; }
    .cwi-sub-page .cwi-sub-hero .slider_content .theme_btn_all { animation-delay: 0.6s; }
</style>

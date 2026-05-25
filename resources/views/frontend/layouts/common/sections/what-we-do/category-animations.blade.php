{{-- Category page motion system (what-we-do/category.blade.php only) --}}
<style>
    .cwi-page {
        --cwi-ease-out: cubic-bezier(0.22, 1, 0.36, 1);
        --cwi-ease-spring: cubic-bezier(0.34, 1.4, 0.64, 1);
    }

    /* Base animation states */
    .cwi-anim {
        opacity: 0;
        transition-property: opacity, transform, filter;
        transition-duration: 0.85s;
        transition-timing-function: var(--cwi-ease-out);
        will-change: opacity, transform;
    }
    .cwi-anim.is-visible {
        opacity: 1;
        transform: none;
        filter: none;
    }
    .cwi-anim--up { transform: translateY(48px); }
    .cwi-anim--down { transform: translateY(-32px); }
    .cwi-anim--left { transform: translateX(-56px); }
    .cwi-anim--right { transform: translateX(56px); }
    .cwi-anim--scale { transform: scale(0.88); }
    .cwi-anim--zoom { transform: scale(1.12); filter: blur(6px); }
    .cwi-anim--tilt { transform: perspective(900px) rotateX(14deg) translateY(36px); transform-origin: center bottom; }

    .cwi-anim[data-cwi-delay="1"] { transition-delay: 0.08s; }
    .cwi-anim[data-cwi-delay="2"] { transition-delay: 0.16s; }
    .cwi-anim[data-cwi-delay="3"] { transition-delay: 0.24s; }
    .cwi-anim[data-cwi-delay="4"] { transition-delay: 0.32s; }
    .cwi-anim[data-cwi-delay="5"] { transition-delay: 0.4s; }
    .cwi-anim[data-cwi-delay="6"] { transition-delay: 0.48s; }
    .cwi-anim[data-cwi-delay="7"] { transition-delay: 0.56s; }
    .cwi-anim[data-cwi-delay="8"] { transition-delay: 0.64s; }

    /* Hero — load sequence + Ken Burns */
    .cwi-hero::after {
        content: "";
        position: absolute;
        inset: -8%;
        background: radial-gradient(ellipse 70% 55% at 50% 40%, rgba(125, 206, 168, 0.18) 0%, transparent 68%);
        z-index: 0;
        pointer-events: none;
        animation: cwiHeroGlow 8s ease-in-out infinite alternate;
    }
    @keyframes cwiHeroGlow {
        0% { opacity: 0.45; transform: scale(1); }
        100% { opacity: 0.85; transform: scale(1.08); }
    }
    .cwi-hero .slider_content > * {
        opacity: 0;
        transform: translateY(28px);
        animation: cwiHeroIn 0.9s var(--cwi-ease-out) forwards;
    }
    .cwi-hero .slider_content h6 { animation-delay: 0.1s; }
    .cwi-hero .slider_content .hero-tagline { animation-delay: 0.2s; }
    .cwi-hero .slider_content h1 { animation-delay: 0.32s; }
    .cwi-hero .slider_content .hero-headline { animation-delay: 0.44s; }
    .cwi-hero .slider_content .hero-intro { animation-delay: 0.56s; }
    .cwi-hero .slider_content .d_inline_block { animation-delay: 0.72s; }
    @keyframes cwiHeroIn {
        to { opacity: 1; transform: translateY(0); }
    }
    .cwi-hero.hraas-hero.single_banner.style_one {
        animation: cwiHeroKenBurns 22s ease-in-out infinite alternate;
    }
    @keyframes cwiHeroKenBurns {
        0% { background-size: 100% auto; }
        100% { background-size: 108% auto; }
    }

    /* Section ambient orbs */
    .cwi-section-glow {
        position: relative;
        overflow: hidden;
    }
    .cwi-section-glow::before {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 96, 57, 0.09) 0%, transparent 70%);
        top: -120px;
        right: -100px;
        pointer-events: none;
        z-index: 0;
        animation: cwiOrbDrift 14s ease-in-out infinite alternate;
    }
    .cwi-section--dark.cwi-section-glow::before {
        background: radial-gradient(circle, rgba(125, 206, 168, 0.12) 0%, transparent 70%);
    }
    @keyframes cwiOrbDrift {
        0% { transform: translate(0, 0) scale(1); }
        100% { transform: translate(-30px, 24px) scale(1.15); }
    }
    .cwi-section-glow > .container {
        position: relative;
        z-index: 1;
    }

    /* Risk — list stagger + card hover lift */
    .cwi-risk__card {
        transition: transform 0.45s var(--cwi-ease-out), box-shadow 0.45s var(--cwi-ease-out);
    }
    .cwi-risk__card.is-visible:hover {
        transform: translateY(-6px);
        box-shadow: 0 22px 50px rgba(0, 96, 57, 0.14);
    }
    .cwi-risk__list li {
        opacity: 0;
        transform: translateX(-20px);
        transition: opacity 0.5s var(--cwi-ease-out), transform 0.5s var(--cwi-ease-out);
    }
    .cwi-risk__list.is-visible li {
        opacity: 1;
        transform: translateX(0);
    }
    .cwi-risk__list.is-visible li:nth-child(1) { transition-delay: 0.05s; }
    .cwi-risk__list.is-visible li:nth-child(2) { transition-delay: 0.12s; }
    .cwi-risk__list.is-visible li:nth-child(3) { transition-delay: 0.19s; }
    .cwi-risk__list.is-visible li:nth-child(4) { transition-delay: 0.26s; }
    .cwi-risk__list.is-visible li:nth-child(5) { transition-delay: 0.33s; }
    .cwi-risk__list.is-visible li:nth-child(6) { transition-delay: 0.4s; }
    .cwi-risk__visual {
        transition: transform 0.6s var(--cwi-ease-out), box-shadow 0.6s var(--cwi-ease-out);
    }
    .cwi-risk__visual.is-visible:hover {
        transform: scale(1.02);
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.18);
    }
    .cwi-risk__visual img {
        transition: transform 0.8s var(--cwi-ease-out);
    }
    .cwi-risk__visual.is-visible:hover img {
        transform: scale(1.04);
    }

    /* Services — step hover + icon pulse */
    .cwi-services-step {
        transition: transform 0.4s var(--cwi-ease-out);
    }
    .cwi-services-step.is-visible:hover {
        transform: translateX(6px);
    }
    .cwi-services-step--right.is-visible:hover {
        transform: translateX(-6px);
    }
    .cwi-services-step__icon {
        transition: transform 0.35s var(--cwi-ease-spring), color 0.3s ease;
    }
    .cwi-services-step.is-visible:hover .cwi-services-step__icon {
        transform: scale(1.12) rotate(-6deg);
        color: var(--cwi-mint);
    }
    .cwi-services__media {
        transition: transform 0.65s var(--cwi-ease-out), box-shadow 0.65s ease;
    }
    .cwi-services__media.is-visible {
        animation: cwiMediaFloat 6s ease-in-out infinite;
    }
    @keyframes cwiMediaFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .cwi-services__media.is-visible:hover {
        animation: none;
        transform: scale(1.03);
        box-shadow: 0 28px 60px rgba(0, 0, 0, 0.35);
    }

    /* Framework — dot pulse (connector line animates in main category styles) */
    .cwi-framework-step {
        position: relative;
    }
    .cwi-framework-step__dot {
        transition: transform 0.45s var(--cwi-ease-spring), box-shadow 0.45s ease;
    }
    .cwi-framework-step.is-visible .cwi-framework-step__dot {
        animation: cwiDotPulse 2.5s ease-in-out infinite;
    }
    .cwi-framework-step.is-visible:hover .cwi-framework-step__dot {
        transform: scale(1.15);
        box-shadow: 0 0 0 8px rgba(0, 96, 57, 0.15);
    }
    @keyframes cwiDotPulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(125, 206, 168, 0.35); }
        50% { box-shadow: 0 0 0 12px rgba(125, 206, 168, 0); }
    }

    /* Integrity — float cards gentle motion */
    .cwi-integrity-float.is-visible {
        animation: cwiFloatCard 5s ease-in-out infinite;
    }
    .cwi-integrity-float--top.is-visible { animation-delay: 0s; }
    .cwi-integrity-float--bottom.is-visible { animation-delay: 1.2s; }
    @keyframes cwiFloatCard {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .cwi-integrity-feature {
        transition: transform 0.35s ease, background 0.35s ease;
    }
    .cwi-integrity-feature:hover {
        transform: translateX(8px);
        background: rgba(125, 206, 168, 0.06);
        border-radius: 12px;
    }
    .cwi-integrity__visual.is-visible .cwi-integrity__hex {
        animation: cwiHexReveal 1s var(--cwi-ease-out) forwards;
    }
    @keyframes cwiHexReveal {
        from { opacity: 0; transform: scale(0.92) rotate(-4deg); }
        to { opacity: 1; transform: scale(1) rotate(0); }
    }

    /* Deliverables — 3D tilt on hover */
    .cwi-del-card {
        transition: transform 0.5s var(--cwi-ease-out), box-shadow 0.5s ease;
    }
    .cwi-del-card.is-visible:hover {
        transform: translateY(-12px) rotate(-0.5deg);
        box-shadow: 0 28px 55px rgba(0, 96, 57, 0.2);
    }
    .cwi-del-card__panel {
        transition: transform 0.45s var(--cwi-ease-out);
    }
    .cwi-del-card.is-visible:hover .cwi-del-card__panel {
        transform: translateY(-4px);
    }

    /* Suitable — icon ring spin-in */
    .cwi-suitable-step__icon-wrap {
        transition: transform 0.5s var(--cwi-ease-spring), box-shadow 0.5s ease;
    }
    .cwi-suitable-step.is-visible:hover .cwi-suitable-step__icon-wrap {
        transform: translateY(-8px) scale(1.05);
        box-shadow: 0 20px 45px rgba(0, 96, 57, 0.18);
    }
    .cwi-suitable-step.is-visible .cwi-suitable-step__num {
        animation: cwiNumPop 0.6s var(--cwi-ease-spring) backwards;
    }
    @keyframes cwiNumPop {
        from { transform: scale(0); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }

    /* FAQ block on category pages */
    .mirashka-faq-category.cwi-anim.is-visible dt.faq_header {
        animation: cwiFaqIn 0.55s var(--cwi-ease-out) backwards;
    }
    .mirashka-faq-category.cwi-anim.is-visible dt.faq_header:nth-of-type(1) { animation-delay: 0.08s; }
    .mirashka-faq-category.cwi-anim.is-visible dt.faq_header:nth-of-type(2) { animation-delay: 0.14s; }
    .mirashka-faq-category.cwi-anim.is-visible dt.faq_header:nth-of-type(3) { animation-delay: 0.2s; }
    .mirashka-faq-category.cwi-anim.is-visible dt.faq_header:nth-of-type(4) { animation-delay: 0.26s; }
    .mirashka-faq-category.cwi-anim.is-visible dt.faq_header:nth-of-type(5) { animation-delay: 0.32s; }
    @keyframes cwiFaqIn {
        from { opacity: 0; transform: translateY(16px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Sub-service cards */
    .cwi-related-services__card {
        transition: transform 0.45s var(--cwi-ease-out), box-shadow 0.45s ease;
    }
    .cwi-related-services__card.is-visible:hover {
        transform: translateY(-10px);
        box-shadow: 0 18px 42px rgba(0, 96, 57, 0.15);
    }
    .cwi-related-services__card img {
        transition: transform 0.55s var(--cwi-ease-out);
    }
    .cwi-related-services__card.is-visible:hover img {
        transform: scale(1.06);
    }

    /* Title underline draw */
    .cwi-title-draw .title_sections .before_title {
        position: relative;
        display: inline-block;
    }
    .cwi-title-draw.is-visible .title_sections .before_title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 100%;
        height: 2px;
        background: currentColor;
        animation: cwiUnderline 0.8s var(--cwi-ease-out) forwards;
    }
    @keyframes cwiUnderline {
        from { transform: scaleX(0); }
        to { transform: scaleX(1); }
    }

    @media (prefers-reduced-motion: reduce) {
        .cwi-anim,
        .cwi-hero .slider_content > *,
        .cwi-risk__list li,
        .cwi-services__media.is-visible,
        .cwi-framework-step.is-visible .cwi-framework-step__dot,
        .cwi-integrity-float.is-visible,
        .cwi-integrity__visual.is-visible .cwi-integrity__hex {
            opacity: 1 !important;
            transform: none !important;
            filter: none !important;
            animation: none !important;
            transition: none !important;
        }
        .cwi-framework__track::before {
            transform: scaleX(1);
        }
    }
</style>

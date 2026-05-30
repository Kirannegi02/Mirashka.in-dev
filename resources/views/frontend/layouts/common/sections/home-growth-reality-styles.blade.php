<style>
    .home-growth-reality {
        position: relative;
        padding: 0 0 100px;
        margin-top: -1px;
        background: #eef2f0;
        overflow: hidden;
    }
    .home-growth-reality__inner {
        position: relative;
        z-index: 1;
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px 0;
    }
    .home-growth-reality__shell {
        display: grid;
        grid-template-columns: minmax(280px, 36%) minmax(0, 64%);
        align-items: stretch;
        gap: 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 32px 80px rgba(6, 13, 10, 0.14);
        border: 1px solid rgba(0, 96, 57, 0.12);
        background: #fff;
    }
    .home-growth-reality__story {
        padding: 36px 28px 32px;
        background: linear-gradient(165deg, #0a1410 0%, #122820 55%, #1a3d32 100%);
    }
    .home-growth-reality__aside {
        display: flex;
        flex-direction: column;
        min-height: 100%;
        background: #f8faf9;
        border-left: 1px solid #e2ebe6;
    }
    .home-growth-reality__pains {
        flex: 0 0 auto;
        padding: 18px 24px 14px;
        background: #fff;
        border-top: 1px solid #e8eeeb;
    }
    .home-growth-reality__pains-title {
        margin: 0 0 14px;
        font-size: 26px;
        font-weight: 800;
        color: #000;
        text-align: center;
    }
    .home-growth-reality__pain-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }
    .home-growth-reality__pain-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 11px 12px;
        background: #f8faf9;
        border: 1px solid #e8eeeb;
        border-radius: 8px;
        font-size: 18px;
        font-weight: 600;
        color: #1e293b;
        line-height: 1.35;
    }
    .home-growth-reality__pain-item i {
        width: 40px;
        height: 40px;
        border-radius: 7px;
        background: rgb(0 96 57);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
    }
    .home-growth-reality .hgr-reveal {
        opacity: 0;
        transform: translateY(32px);
        transition: opacity 0.75s cubic-bezier(0.22, 1, 0.36, 1), transform 0.75s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .home-growth-reality .hgr-reveal--left {
        transform: translateX(-40px);
    }
    .home-growth-reality .hgr-reveal--right {
        transform: translateX(40px);
    }
    .home-growth-reality .hgr-reveal--scale {
        transform: scale(0.92);
    }
    .home-growth-reality.hgr-is-active .hgr-reveal,
    .home-growth-reality.hgr-is-active .hgr-reveal--left,
    .home-growth-reality.hgr-is-active .hgr-reveal--right,
    .home-growth-reality.hgr-is-active .hgr-reveal--scale {
        opacity: 1;
        transform: none;
    }
    .home-growth-reality .hgr-reveal[data-hgr-delay="1"] { transition-delay: 0.06s; }
    .home-growth-reality .hgr-reveal[data-hgr-delay="2"] { transition-delay: 0.14s; }
    .home-growth-reality .hgr-reveal[data-hgr-delay="3"] { transition-delay: 0.22s; }
    .home-growth-reality .hgr-reveal[data-hgr-delay="4"] { transition-delay: 0.3s; }
    .home-growth-reality .hgr-reveal[data-hgr-delay="5"] { transition-delay: 0.38s; }
    .home-growth-reality .hgr-stagger > * {
        opacity: 0;
        transform: translateY(16px);
        transition: opacity 0.5s cubic-bezier(0.22, 1, 0.36, 1), transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .home-growth-reality.hgr-is-active .hgr-stagger > * {
        opacity: 1;
        transform: none;
    }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(1) { transition-delay: 0.32s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(2) { transition-delay: 0.38s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(3) { transition-delay: 0.44s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(4) { transition-delay: 0.5s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(5) { transition-delay: 0.56s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(6) { transition-delay: 0.62s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(7) { transition-delay: 0.68s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(8) { transition-delay: 0.74s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(9) { transition-delay: 0.8s; }
    .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(10) { transition-delay: 0.86s; }
    @media (prefers-reduced-motion: reduce) {
        .home-growth-reality .hgr-reveal,
        .home-growth-reality .hgr-stagger > * {
            opacity: 1;
            transform: none;
            transition: none;
        }
    }
    .home-growth-reality__cta-panel {
        flex: 0 0 auto;
        padding: 18px 24px 22px;
        background: #f4f8f6;
        border-top: 1px solid #e2ebe6;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 14px 20px;
    }
    .home-growth-reality__cta-copy strong {
        display: block;
        font-size: 20px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 4px;
    }
    .home-growth-reality__cta-copy span {
        font-size: 0.85rem;
        color: #64748b;
    }
    .home-growth-reality__cta-panel--button-only {
        justify-content: center;
    }
    @media (max-width: 991px) {
        .home-growth-reality__shell {
            grid-template-columns: 1fr;
        }
        .home-growth-reality__aside {
            border-left: none;
            border-top: 1px solid #e2ebe6;
        }
    }
    @media (max-width: 575px) {
        .home-growth-reality {
            padding-bottom: 72px;
        }
        .home-growth-reality__inner {
            padding-left: 16px;
            padding-right: 16px;
        }
        .home-growth-reality__story {
            padding: 32px 24px 28px;
        }
        .home-growth-reality__cta-panel {
            padding: 22px 20px;
            flex-direction: column;
            align-items: stretch;
        }
        .home-growth-reality__cta {
            justify-content: center;
        }
        .home-growth-reality__pain-list {
            grid-template-columns: 1fr;
        }
    }
</style>

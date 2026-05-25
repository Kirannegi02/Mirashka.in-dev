{{-- Standout grid (shared with category pages) + experience banner for sub-services --}}
@include('frontend.pages.what-we-do.category-extra-styles')

<style>
    /* Experience banner — sub-service pages */
    .cwi-experience {
        position: relative;
        padding: 0;
        background-color: #0d1612;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        overflow: hidden;
    }
    .cwi-experience__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            105deg,
            rgba(6, 13, 10, 0.92) 0%,
            rgba(0, 96, 57, 0.78) 55%,
            rgba(15, 23, 42, 0.88) 100%
        );
        pointer-events: none;
    }
    .cwi-experience__container {
        position: relative;
        z-index: 1;
        padding: 72px 15px 0;
    }
    .cwi-experience__main {
        display: grid;
        grid-template-columns: auto minmax(0, 1fr);
        gap: 40px 48px;
        align-items: center;
        max-width: 1000px;
        margin: 0 auto;
        padding-bottom: 56px;
    }
    .cwi-experience__badge-col {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .cwi-experience__badge {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: #fff;
        color: var(--cwi-green, #006039);
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.35);
        transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.35s ease;
    }
    .cwi-experience__main:hover .cwi-experience__badge {
        transform: scale(1.04);
        box-shadow: 0 22px 56px rgba(0, 96, 57, 0.35);
    }
    .cwi-experience__badge-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        line-height: 1;
    }
    .cwi-experience__heading {
        margin: 0 0 16px;
        font-size: clamp(1.65rem, 3.5vw, 2.35rem);
        font-weight: 800;
        line-height: 1.2;
        color: #fff;
    }
    .cwi-experience__text {
        margin: 0 0 24px;
        font-size: 1rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.88);
        max-width: 560px;
    }
    .cwi-experience__btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 28px;
        background: var(--cwi-green, #006039);
        color: #fff !important;
        font-size: 0.9rem;
        font-weight: 700;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.25s ease, transform 0.25s ease;
    }
    .cwi-experience__btn:hover {
        background: #004d2e;
        color: #fff !important;
        transform: translateY(-2px);
    }
    .cwi-experience__pillars {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
        padding: 32px 0 40px;
        max-width: 1100px;
        margin: 0 auto;
    }
    .cwi-experience__pillar {
        display: flex;
        flex-wrap: wrap;
        align-items: baseline;
        gap: 8px 12px;
    }
    .cwi-experience__pillar-num {
        font-size: clamp(2rem, 4vw, 2.75rem);
        font-weight: 800;
        line-height: 1;
        color: #fff;
    }
    .cwi-experience__pillar-title {
        font-size: 1rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.95);
        line-height: 1.35;
        flex: 1;
        min-width: 140px;
    }
    @media (max-width: 991px) {
        .cwi-experience__main {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 28px;
        }
        .cwi-experience__badge-col { justify-content: center; }
        .cwi-experience__text { margin-left: auto; margin-right: auto; }
        .cwi-experience__pillars {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
    @media (max-width: 767px) {
        .cwi-experience__container { padding-top: 56px; }
        .cwi-experience__badge {
            width: 96px;
            height: 96px;
        }
        .cwi-experience__badge-icon { font-size: 38px; }
    }
</style>

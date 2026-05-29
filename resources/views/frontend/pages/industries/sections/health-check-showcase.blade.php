@php
    $health = $health ?? [];
    $covers = $health['covers'] ?? [];
    $leftFeatureTitle = $covers[0] ?? 'Hiring process';
    $leftFeatureText = $covers[1] ?? 'Role clarity';
    $rightFeatureTitle = $covers[2] ?? 'Payroll structure';
    $rightFeatureText = $covers[3] ?? 'Employee documentation';
    $healthVideoUrl = $health['video_url'] ?? 'https://www.youtube.com/embed/-VK0axfge4A';
@endphp

<style>
    .industry-health-showcase {
        padding: 0;
        background: #f4f6f8;
    }
    .industry-health-showcase__inner {
        display: grid;
        grid-template-columns: minmax(0, 1.15fr) minmax(0, 0.85fr);
        align-items: stretch;
    }
    .industry-health-showcase__left {
        background: #006847;
        color: #fff;
        padding: 48px 56px 44px;
    }
    .industry-health-showcase__label {
        color: #fff;
        text-decoration: underline;
        text-underline-offset: 4px;
        text-decoration-thickness: 2px;
        margin-bottom: 10px;
        font-weight: 700;
        font-size: var(--industries-eyebrow, 18px);
        line-height: 1.4;
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }
    .industry-health-showcase__title {
        color: #fff;
        margin: 0 0 12px;
        font-size: clamp(2rem, 3.5vw, 3rem);
        line-height: 1.15;
        font-weight: 800;
    }
    .industry-health-showcase__content {
        color: rgba(255, 255, 255, 0.92);
        margin: 0 0 18px;
        line-height: 1.7;
        max-width: 640px;
    }
    .industry-health-showcase__features {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px 22px;
        margin-bottom: 18px;
    }
    .industry-health-showcase__feature {
        display: grid;
        grid-template-columns: 44px minmax(0, 1fr);
        gap: 12px;
        align-items: center;
    }
    .industry-health-showcase__feature i {
        width: 44px;
        height: 44px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        color: #006847;
        font-size: 22px;
        margin-top: 4px;
        align-self: center;
    }
    .industry-health-showcase__feature h4 {
        margin: 0 0 3px;
        color: #fff;
        font-size: 1.1rem;
        line-height: 1.3;
        font-weight: 700;
    }
    .industry-health-showcase__feature p {
        margin: 0;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.92rem;
        line-height: 1.45;
    }
    .industry-health-showcase__meta {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }
    .industry-health-showcase__cta.theme-btn.one {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        width: 100%;
        max-width: 520px;
        padding: 0 24px !important;
        line-height: 1.35 !important;
        background: #101820 !important;
        border-color: #101820 !important;
        color: #fff !important;
        min-height: 50px;
    }
    .industry-health-showcase__cta.theme-btn.one:hover {
        background: #fff !important;
        color: #006847 !important;
        border-color: #fff !important;
    }
    .industry-health-showcase__output {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.92rem;
    }
    .industry-health-showcase__right {
        position: relative;
        min-height: 420px;
        background: #e5ecea;
    }
    .industry-health-showcase__right img {
        width: 100%;
        height: 100%;
        min-height: 420px;
        object-fit: cover;
        display: block;
    }
    .industry-health-showcase__play {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 62px;
        height: 62px;
        border-radius: 50%;
        background: #006847;
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        box-shadow: 0 10px 26px rgba(0, 104, 71, 0.35);
    }
    @media (max-width: 991px) {
        .industry-health-showcase__inner {
            grid-template-columns: 1fr;
        }
        .industry-health-showcase__left {
            padding: 38px 22px 34px;
        }
        .industry-health-showcase__features {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="industry-health-showcase" id="industry-health-check">
    <div class="industry-health-showcase__inner">
        <div class="industry-health-showcase__left">
            <div class="industry-health-showcase__label">{{ $health['label'] ?? '' }}</div>
            <h2 class="industry-health-showcase__title">{{ $health['heading'] ?? '' }}</h2>
            <p class="industry-health-showcase__content">{{ $health['content'] ?? '' }}</p>

            <div class="industry-health-showcase__features">
                <article class="industry-health-showcase__feature">
                    <i class="ri-scales-3-line"></i>
                    <div>
                        <h4>{{ $leftFeatureTitle }}</h4>
                        <p>{{ $leftFeatureText }}</p>
                    </div>
                </article>
                <article class="industry-health-showcase__feature">
                    <i class="ri-hospital-line"></i>
                    <div>
                        <h4>{{ $rightFeatureTitle }}</h4>
                        <p>{{ $rightFeatureText }}</p>
                    </div>
                </article>
            </div>

            <div class="industry-health-showcase__meta">
                <a href="{{ $health['cta']['href'] ?? '#industry-form' }}" class="theme-btn one industry-health-showcase__cta">
                    {{ $health['cta']['label'] ?? 'Request Industry HR Health Check' }}
                </a>
                <p class="industry-health-showcase__output mb-0">{{ $health['output'] ?? '' }}</p>
            </div>
        </div>

        <div class="industry-health-showcase__right">
            <img
                src="{{ asset($health['image'] ?? 'assets/frontend/img/industries/industry-hr-health-dashboard.webp') }}"
                onerror="this.onerror=null;this.src='{{ asset($health['image_fallback'] ?? 'assets/frontend/img/compliance/cwi-bento-meeting.png') }}';"
                alt="Industry-wise HR maturity dashboard with six industry clusters and risk score indicators"
            >
            <a
                href="{{ $healthVideoUrl }}"
                class="industry-health-showcase__play"
                data-fancybox="industry-health-video"
                data-type="iframe"
                aria-label="Play industry health check video"
            >
                <i class="icon-play"></i>
            </a>
        </div>
    </div>
</section>

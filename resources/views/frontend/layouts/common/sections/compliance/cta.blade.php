{{--
    Shared compliance CTA banner.
    Pass $cta array or rely on config('compliance-sub-services.shared.cta').
    Optional: $primaryLabel, $secondaryLabel to override button text.
--}}
@once
<style>
    .compliance-shared-cta { padding: 0 0 56px; background: #f6f8f7; }
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
    @media (max-width: 991px) {
        .compliance-shared-cta__overlay { grid-template-columns: 1fr; }
        .compliance-shared-cta__person { display: none; }
    }
</style>
@endonce
@php
    $cta = $cta ?? config('compliance-sub-services.shared.cta', config('compliance-workplace-integrity.cta', []));
    $primaryLabel = $primaryLabel ?? ($cta['button'] ?? 'Get Compliance Readiness Review');
    $secondaryLabel = $secondaryLabel ?? ($cta['secondary'] ?? 'Speak to an HR Advisor');
@endphp

<section class="compliance-shared-cta">
    <div class="container">
        <div class="compliance-shared-cta__card" style="background-image: url({{ asset($cta['bg_image'] ?? '') }});">
            <div class="compliance-shared-cta__overlay">
                <div class="compliance-shared-cta__copy">
                    <h2>{{ $cta['heading'] ?? '' }}</h2>
                    <p>{{ $cta['content'] ?? '' }}</p>
                    <div class="compliance-shared-cta__actions theme_btn_all color_two">
                        <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $primaryLabel }} <i class="icon-right-arrow"></i></a>
                        <a href="{{ route('projectenquiries') }}" class="theme-btn two">{{ $secondaryLabel }}</a>
                    </div>
                </div>
                @if(!empty($cta['image']))
                    <img
                        class="compliance-shared-cta__person d-none d-lg-block"
                        src="{{ asset($cta['image']) }}"
                        alt=""
                        loading="lazy"
                        aria-hidden="true"
                    >
                @endif
            </div>
        </div>
    </div>
</section>

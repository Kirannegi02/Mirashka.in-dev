@php
    $services = $services ?? [];
    $cards = $services['cards'] ?? [];
    $leftCards = array_slice($cards, 0, (int) ceil(count($cards) / 2));
    $rightCards = array_slice($cards, count($leftCards));
    $leftTop = array_slice($leftCards, 0, 2);
    $leftBottom = array_slice($leftCards, 2, 2);
    $rightTop = array_slice($rightCards, 0, 2);
    $rightBottom = array_slice($rightCards, 2, 2);
    $serviceImage = asset($services['image'] ?? 'assets/frontend/img/home/home-why-mirashka-hero.png');
    $serviceImageFallback = asset($services['image_fallback'] ?? 'assets/frontend/img/hraas/hraas-v3-hero.png');
    $serviceImageSecondary = asset($services['image_secondary'] ?? 'assets/frontend/img/leadership/ldr-hero-boardroom.png');
    $serviceImageSecondaryFallback = asset($services['image_secondary_fallback'] ?? $services['image_fallback'] ?? 'assets/frontend/img/hraas/hraas-page-partner.png');
@endphp

<style>
    .industries-services-deliver.home-why-mirashka {
        padding: 88px 0 64px;
        background: linear-gradient(165deg, #0a1410 0%, #0f1f18 38%, #152a22 70%, #0d1612 100%);
        overflow: hidden;
    }
    .industries-services-deliver .home-why-mirashka__inner {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 28px;
    }
    .industries-services-deliver .home-why-mirashka__header {
        text-align: center;
        max-width: 1100px;
        margin: 0 auto 52px;
    }
    .industries-services-deliver .home-why-mirashka__eyebrow {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: #7dcea8;
        margin-bottom: 14px;
        text-decoration: underline;
        text-underline-offset: 0.2em;
        text-decoration-thickness: 2px;
    }
    .industries-services-deliver .home-why-mirashka__title {
        font-size: clamp(1.75rem, 3.8vw, 2.65rem);
        font-weight: 800;
        line-height: 1.2;
        color: #fff;
        margin: 0 0 16px;
    }
    .industries-services-deliver .home-why-mirashka__intro {
        font-size: 1rem;
        line-height: 1.75;
        color: rgba(255, 255, 255, 0.78);
        margin: 0;
    }
    .industries-services-deliver .home-why-mirashka__stage {
        display: flex;
        flex-direction: column;
        gap: 32px;
        width: 100%;
    }
    .industries-services-deliver .home-why-mirashka__row {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(280px, 400px) minmax(0, 1fr);
        gap: 28px 48px;
        align-items: stretch;
    }
    .industries-services-deliver .home-why-mirashka__col {
        display: flex;
        flex-direction: column;
    }
    .industries-services-deliver .home-why-mirashka__col--left {
        align-items: flex-end;
        text-align: right;
    }
    .industries-services-deliver .home-why-mirashka__col--right {
        align-items: flex-start;
        text-align: left;
    }
    .industries-services-deliver .home-why-mirashka__card {
        position: relative;
        padding: 22px 12px 24px;
        max-width: 420px;
        width: 100%;
    }
    .industries-services-deliver .home-why-mirashka__card + .home-why-mirashka__card {
        border-top: 1px solid rgba(125, 206, 168, 0.18);
    }
    .industries-services-deliver .home-why-mirashka__card-num {
        position: absolute;
        top: 14px;
        font-size: clamp(2.75rem, 5vw, 4rem);
        font-weight: 800;
        line-height: 1;
        color: rgba(255, 255, 255, 0.06);
        pointer-events: none;
    }
    .industries-services-deliver .home-why-mirashka__col--left .home-why-mirashka__card-num { right: 0; }
    .industries-services-deliver .home-why-mirashka__col--right .home-why-mirashka__card-num { left: 0; }
    .industries-services-deliver .home-why-mirashka__card-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 96px;
        height: 96px;
        margin-bottom: 16px;
        color: #7dcea8;
        font-size: 4.2rem !important;
        line-height: 1;
    }
    .industries-services-deliver .home-why-mirashka__card-icon i {
        font-size: 4.2rem !important;
        line-height: 1;
    }
    .industries-services-deliver .home-why-mirashka__card h3 {
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
        margin: 0 0 8px;
        line-height: 1.35;
        position: relative;
        z-index: 1;
    }
    .industries-services-deliver .home-why-mirashka__card p {
        font-size: 0.9rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.75);
        margin: 0;
        position: relative;
        z-index: 1;
    }
    .industries-services-deliver .home-why-mirashka__center {
        width: 100%;
        max-width: 400px;
        justify-self: center;
        display: flex;
        align-self: stretch;
        min-height: 0;
    }
    .industries-services-deliver .home-why-mirashka__center-img {
        flex: 1 1 auto;
        display: flex;
        width: 100%;
        min-height: 100%;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(125, 206, 168, 0.2);
    }
    .industries-services-deliver .home-why-mirashka__center-img img {
        display: block;
        width: 100%;
        height: 100%;
        min-height: 340px;
        object-fit: cover;
        object-position: center;
    }
    .industries-services-deliver .home-why-mirashka__cta-wrap {
        text-align: center;
        margin-top: 28px;
    }
    .industries-services-deliver .home-why-mirashka__cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .industries-services-deliver .home-why-mirashka__cta.theme-btn.one {
        background: #006847 !important;
        color: #fff !important;
        border: 1px solid #006847 !important;
    }
    .industries-services-deliver .home-why-mirashka__cta.theme-btn.one:hover {
        background: #fff !important;
        color: #006847 !important;
        border-color: #006847 !important;
    }
    .industries-services-deliver .home-why-mirashka__cta.theme-btn.one i {
        color: inherit !important;
    }
    @media (max-width: 991px) {
        .industries-services-deliver .home-why-mirashka__row {
            grid-template-columns: 1fr;
            gap: 0;
        }
        .industries-services-deliver .home-why-mirashka__center {
            max-width: 360px;
            margin: 0 auto 16px;
            order: -1;
        }
        .industries-services-deliver .home-why-mirashka__row .home-why-mirashka__col {
            order: 0;
        }
        .industries-services-deliver .home-why-mirashka__center {
            align-self: auto;
        }
        .industries-services-deliver .home-why-mirashka__center-img {
            min-height: auto;
        }
        .industries-services-deliver .home-why-mirashka__center-img img {
            height: 240px;
            min-height: 240px;
        }
        .industries-services-deliver .home-why-mirashka__col--left,
        .industries-services-deliver .home-why-mirashka__col--right {
            align-items: stretch;
            text-align: left;
        }
        .industries-services-deliver .home-why-mirashka__card {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }
        .industries-services-deliver .home-why-mirashka__col--left .home-why-mirashka__card-num {
            left: 0;
            right: auto;
        }
    }
</style>

<section class="content-section home-why-mirashka industries-services-deliver" id="industries-services">
    <div class="home-why-mirashka__inner">
        <header class="home-why-mirashka__header">
            <span class="home-why-mirashka__eyebrow">{{ $services['label'] ?? '' }}</span>
            <h2 class="home-why-mirashka__title">{{ $services['heading'] ?? '' }}</h2>
            <p class="home-why-mirashka__intro">{{ $services['content'] ?? '' }}</p>
        </header>

        <div class="home-why-mirashka__stage">
            {{-- Row 1: services 01–02 | image 1 | services 05–06 --}}
            <div class="home-why-mirashka__row home-why-mirashka__row--top">
                <div class="home-why-mirashka__col home-why-mirashka__col--left">
                    @foreach ($leftTop as $index => $card)
                        <article class="home-why-mirashka__card">
                            <span class="home-why-mirashka__card-num" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="{{ $card['icon'] ?? 'ri-checkbox-circle-line' }}"></i></span>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['text'] }}</p>
                        </article>
                    @endforeach
                </div>
                <div class="home-why-mirashka__center">
                    <div class="home-why-mirashka__center-img">
                        <img
                            src="{{ $serviceImage }}"
                            onerror="this.onerror=null;this.src='{{ $serviceImageFallback }}';"
                            alt="HR professionals reviewing workforce strategy"
                            loading="lazy"
                            width="400"
                            height="280"
                        >
                    </div>
                </div>
                <div class="home-why-mirashka__col home-why-mirashka__col--right">
                    @foreach ($rightTop as $index => $card)
                        @php $num = count($leftCards) + $index + 1; @endphp
                        <article class="home-why-mirashka__card">
                            <span class="home-why-mirashka__card-num" aria-hidden="true">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="{{ $card['icon'] ?? 'ri-checkbox-circle-line' }}"></i></span>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['text'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>

            {{-- Row 2: services 03–04 | image 2 | services 07–08 --}}
            <div class="home-why-mirashka__row home-why-mirashka__row--bottom">
                <div class="home-why-mirashka__col home-why-mirashka__col--left">
                    @foreach ($leftBottom as $index => $card)
                        @php $num = 2 + $index + 1; @endphp
                        <article class="home-why-mirashka__card">
                            <span class="home-why-mirashka__card-num" aria-hidden="true">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="{{ $card['icon'] ?? 'ri-checkbox-circle-line' }}"></i></span>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['text'] }}</p>
                        </article>
                    @endforeach
                </div>
                <div class="home-why-mirashka__center">
                    <div class="home-why-mirashka__center-img">
                        <img
                            src="{{ $serviceImageSecondary }}"
                            onerror="this.onerror=null;this.src='{{ $serviceImageSecondaryFallback }}';"
                            alt="Leadership and board advisory in a modern workplace"
                            loading="lazy"
                            width="400"
                            height="280"
                        >
                    </div>
                </div>
                <div class="home-why-mirashka__col home-why-mirashka__col--right">
                    @foreach ($rightBottom as $index => $card)
                        @php $num = count($leftCards) + 2 + $index + 1; @endphp
                        <article class="home-why-mirashka__card">
                            <span class="home-why-mirashka__card-num" aria-hidden="true">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="{{ $card['icon'] ?? 'ri-checkbox-circle-line' }}"></i></span>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['text'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="home-why-mirashka__cta-wrap">
            <a href="{{ route($services['cta']['href'] ?? 'whatwedo') }}" class="home-why-mirashka__cta theme-btn one">
                {{ $services['cta']['label'] ?? 'Explore Mirashka HR Services' }}
                <i class="ri-arrow-right-line" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>

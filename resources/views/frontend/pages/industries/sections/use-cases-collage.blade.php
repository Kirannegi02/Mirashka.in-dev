@php
    $useCases = $useCases ?? [];
    $cards = array_slice($useCases['cards'] ?? [], 0, 6);
    $imagePool = $imagePool ?? [];
    if (empty($imagePool)) {
        $imagePool = [
            ['image' => 'assets/frontend/img/industries/industry-financial-services.webp', 'fallback' => 'assets/frontend/img/compliance/cwi-card-policy.png'],
            ['image' => 'assets/frontend/img/industries/industry-healthcare.webp', 'fallback' => 'assets/frontend/img/hraas/hraas-card-engagement.png'],
        ];
    }
    $firstImage = $firstImage ?? $imagePool[0];
    $lastImage = $lastImage ?? ($imagePool[count($imagePool) - 1] ?? $imagePool[0]);
    $rowOneContent = array_slice($cards, 0, 3);
    $rowTwoContent = array_slice($cards, 3, 3);
@endphp

<style>
    .industry-usecases-collage {
        padding: 76px 0;
        background: linear-gradient(165deg, #081711 0%, #0b2018 45%, #0a1812 100%);
        position: relative;
        overflow: hidden;
    }
    .industry-usecases-collage::before {
        content: '';
        position: absolute;
        inset: 0;
        opacity: 0.2;
        pointer-events: none;
        background-image: linear-gradient(rgba(125, 206, 168, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(125, 206, 168, 0.08) 1px, transparent 1px);
        background-size: 48px 48px;
    }
    .industry-usecases-collage .container {
        position: relative;
        z-index: 2;
    }
    .industry-usecases-collage__head {
        text-align: center;
        margin-bottom: 28px;
    }
    .industry-usecases-collage__head .before_title {
        color: #7dcea8;
    }
    .industry-usecases-collage__head h2 {
        margin-bottom: 12px;
        color: #fff;
    }
    .industry-usecases-collage__tags {
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }
    .industry-usecases-collage__tags span {
        background: rgba(0, 104, 71, 0.55);
        border: 1px solid rgba(125, 206, 168, 0.35);
        color: #fff;
        border-radius: 8px;
        padding: 6px 12px;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .industry-usecases-collage__grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 12px;
    }
    .industry-usecases-collage__grid + .industry-usecases-collage__grid {
        margin-top: 12px;
    }
    .industry-usecases-collage__tile {
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid rgba(125, 206, 168, 0.2);
        background: linear-gradient(180deg, rgba(22, 43, 35, 0.95) 0%, rgba(17, 36, 30, 0.98) 100%);
        aspect-ratio: 1 / 1;
    }
    .industry-usecases-collage__tile--image {
        padding: 0;
        background: #0d1f19;
    }
    .industry-usecases-collage__tile--image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .industry-usecases-collage__tile--text {
        padding: 16px 14px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .industry-usecases-collage__tile--text .tile-num {
        font-size: 1.5rem;
        line-height: 1;
        margin: 0 0 8px;
        color: rgba(125, 206, 168, 0.35);
        font-weight: 800;
    }
    .industry-usecases-collage__tile--text h5 {
        margin: 0 0 8px;
        font-size: 1.05rem;
        line-height: 1.35;
        font-weight: 700;
        color: #fff;
    }
    .industry-usecases-collage__tile--text p {
        margin: 0;
        font-size: 0.9rem;
        line-height: 1.55;
        color: rgba(255, 255, 255, 0.76);
    }
    .industry-usecases-collage__cta-wrap {
        text-align: center;
        margin-top: 24px;
    }
    .industry-usecases-collage__cta.theme-btn.one {
        background: #006847 !important;
        border-color: #006847 !important;
        color: #fff !important;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .industry-usecases-collage__cta.theme-btn.one:hover {
        background: #fff !important;
        color: #006847 !important;
    }
    @media (max-width: 991px) {
        .industry-usecases-collage__grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 575px) {
        .industry-usecases-collage__grid {
            grid-template-columns: 1fr;
        }
        .industry-usecases-collage__tile {
            aspect-ratio: auto;
            min-height: 200px;
        }
        .industry-usecases-collage__tile--image {
            min-height: 240px;
        }
    }
</style>

<section class="industry-usecases-collage industry-usecases-collage--dark" id="industry-use-cases">
    <div class="container">
        <div class="industry-usecases-collage__head">
            <div class="before_title">{{ $useCases['label'] ?? '' }}</div>
            <h2>{{ $useCases['heading'] ?? '' }}</h2>
            <div class="industry-usecases-collage__tags">
                @foreach (($useCases['tags'] ?? []) as $tag)
                    <span>{{ $tag }}</span>
                @endforeach
            </div>
        </div>

        <div class="industry-usecases-collage__grid">
            <div class="industry-usecases-collage__tile industry-usecases-collage__tile--image">
                <img
                    src="{{ asset($firstImage['image']) }}"
                    onerror="this.onerror=null;this.src='{{ asset($firstImage['fallback'] ?? $firstImage['image']) }}';"
                    alt="Industry HR impact"
                    loading="lazy"
                >
            </div>
            @foreach ($rowOneContent as $case)
                <article class="industry-usecases-collage__tile industry-usecases-collage__tile--text">
                    <span class="tile-num">{{ str_pad((string) ($case['number'] ?? $loop->iteration), 2, '0', STR_PAD_LEFT) }}</span>
                    <h5>{{ $case['title'] }}</h5>
                    <p>{{ $case['text'] }}</p>
                </article>
            @endforeach
        </div>

        <div class="industry-usecases-collage__grid">
            @foreach ($rowTwoContent as $case)
                <article class="industry-usecases-collage__tile industry-usecases-collage__tile--text">
                    <span class="tile-num">{{ str_pad((string) ($case['number'] ?? ($loop->iteration + 3)), 2, '0', STR_PAD_LEFT) }}</span>
                    <h5>{{ $case['title'] }}</h5>
                    <p>{{ $case['text'] }}</p>
                </article>
            @endforeach
            <div class="industry-usecases-collage__tile industry-usecases-collage__tile--image">
                <img
                    src="{{ asset($lastImage['image']) }}"
                    onerror="this.onerror=null;this.src='{{ asset($lastImage['fallback'] ?? $lastImage['image']) }}';"
                    alt="Industry workforce outcomes"
                    loading="lazy"
                >
            </div>
        </div>

        <div class="industry-usecases-collage__cta-wrap">
            <a href="{{ url($useCases['cta']['href'] ?? '#industry-form') }}" class="theme-btn one industry-usecases-collage__cta">
                {{ $useCases['cta']['label'] ?? 'View Industry Case Studies' }} <i class="ri-arrow-right-line"></i>
            </a>
        </div>
    </div>
</section>

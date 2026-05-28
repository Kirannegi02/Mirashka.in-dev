@php
    $challenges = $challenges ?? [];
    $blocks = $challenges['blocks'] ?? [];
    $icons = [
        'ri-user-unfollow-line',
        'ri-team-line',
        'ri-shield-check-line',
        'ri-user-star-line',
        'ri-money-dollar-circle-line',
        'ri-megaphone-line',
    ];
@endphp

<style>
    .industry-challenge-model {
        position: relative;
        padding: 76px 0 72px;
        background: #f3f6f5;
        overflow: hidden;
    }
    .industry-challenge-model__grid-bg {
        position: absolute;
        inset: 0;
        opacity: 0.35;
        pointer-events: none;
        background-image: linear-gradient(rgba(0, 104, 71, 0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 104, 71, 0.06) 1px, transparent 1px);
        background-size: 48px 48px;
    }
    .industry-challenge-model__inner {
        position: relative;
        z-index: 2;
    }
    .industry-challenge-model__top {
        display: grid;
        grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
        gap: 18px 32px;
        align-items: end;
        margin-bottom: 28px;
    }
    .industry-challenge-model__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 12px;
        border-radius: 8px;
        border: 1px solid rgba(0, 104, 71, 0.25);
        background: rgba(0, 104, 71, 0.08);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #006847;
        margin-bottom: 14px;
    }
    .industry-challenge-model__title {
        margin: 0;
        color: #1f2937;
        font-size: clamp(1.7rem, 3.2vw, 2.65rem);
        line-height: 1.2;
        font-weight: 800;
        max-width: 760px;
    }
    .industry-challenge-model__intro {
        margin: 0 0 16px;
        color: #4b5563;
        font-size: 1rem;
        line-height: 1.7;
    }
    .industry-challenge-model__cta.theme-btn.one {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        gap: 8px;
        width: 100%;
        max-width: 100%;
        padding: 0 24px !important;
        line-height: 1.35 !important;
        min-height: 52px;
        background: #006847 !important;
        color: #fff !important;
        border-color: #006847 !important;
    }
    .industry-challenge-model__cta.theme-btn.one i {
        margin: 0;
        line-height: 1;
        flex-shrink: 0;
    }
    .industry-challenge-model__cta.theme-btn.one:hover {
        background: #fff !important;
        color: #006847 !important;
        border-color: #006847 !important;
    }
    .industry-challenge-model__hub {
        width: fit-content;
        margin: 0 auto 20px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 9px 16px;
        border-radius: 8px;
        border: 1px solid rgba(0, 104, 71, 0.2);
        background: #fff;
        color: #006847;
        font-size: 0.95rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
    }
    .industry-challenge-model__nodes {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 12px;
    }
    .industry-challenge-model__node {
        min-height: 220px;
        border-radius: 8px;
        border: 1px solid #dce5e1;
        background: #fff;
        padding: 16px 14px 14px;
        box-shadow: 0 10px 28px rgba(15, 23, 42, 0.06);
    }
    .industry-challenge-model__node-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 8px;
    }
    .industry-challenge-model__node-num {
        font-size: 0.76rem;
        letter-spacing: 0.14em;
        font-weight: 700;
        color: rgba(0, 104, 71, 0.55);
    }
    .industry-challenge-model__node-icon {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 104, 71, 0.1);
        color: #006847;
        font-size: 24px;
    }
    .industry-challenge-model__node h4 {
        margin: 0 0 8px;
        color: #111827;
        font-size: 1.35rem;
        line-height: 1.25;
        font-weight: 700;
    }
    .industry-challenge-model__node p {
        margin: 0;
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.62;
    }
    @media (max-width: 991px) {
        .industry-challenge-model__top {
            grid-template-columns: 1fr;
        }
        .industry-challenge-model__nodes {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 640px) {
        .industry-challenge-model {
            padding: 62px 0 56px;
        }
        .industry-challenge-model__nodes {
            grid-template-columns: 1fr;
        }
        .industry-challenge-model__node {
            min-height: 0;
        }
    }
</style>

<section class="industry-challenge-model industry-challenge-model--light" id="industry-challenges-model">
    <div class="industry-challenge-model__grid-bg" aria-hidden="true"></div>
    <div class="container industry-challenge-model__inner">
        <div class="industry-challenge-model__top">
            <div>
                <span class="industry-challenge-model__eyebrow">
                    <i class="ri-node-tree"></i>{{ $challenges['label'] ?? 'Common Workforce Challenges' }}
                </span>
                <h2 class="industry-challenge-model__title">{{ $challenges['heading'] ?? '' }}</h2>
            </div>
            <div>
                <p class="industry-challenge-model__intro">{{ $challenges['content'] ?? '' }}</p>
                <a href="{{ $challenges['cta']['href'] ?? '#industry-form' }}" class="industry-challenge-model__cta theme-btn one">
                    {{ $challenges['cta']['label'] ?? 'Discuss My Industry Challenge' }} <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>

        <div class="text-center">
            <span class="industry-challenge-model__hub"><i class="ri-share-circle-line"></i> Industry Challenge Map</span>
        </div>
        <div class="industry-challenge-model__nodes">
            @foreach ($blocks as $index => $block)
                <article class="industry-challenge-model__node">
                    <div class="industry-challenge-model__node-head">
                        <span class="industry-challenge-model__node-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="industry-challenge-model__node-icon"><i class="{{ $icons[$index % count($icons)] }}"></i></span>
                    </div>
                    <h4>{{ $block['title'] }}</h4>
                    <p>{{ $block['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

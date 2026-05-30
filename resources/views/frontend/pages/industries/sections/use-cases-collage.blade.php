@php
    $useCases = $useCases ?? [];
    $cards = array_slice($useCases['cards'] ?? [], 0, 4);
    $tabId = 'industryUseCasesTab';
    $ctaHref = $useCases['cta']['href'] ?? '#industry-form';
    if (! str_starts_with($ctaHref, '#')) {
        $ctaHref = url($ctaHref);
    }
    $ctaLabel = $useCases['cta']['label'] ?? 'Discuss a Similar Healthcare Case';
@endphp

@if (! empty($cards))
<section class="industries-use-cases-tabs industries-section--light" id="industry-use-cases">
    <div class="container">
    <div class="industries-use-cases-tabs__shell tabs-container">
        <div class="title_all_box style_one text-center light_color bg_dark_1 industries-use-cases-tabs__header industries-section-header">
            <div class="title_sections">
                @if (! empty($useCases['label']))
                    <div class="before_title">{{ $useCases['label'] }}</div>
                @endif
                @if (! empty($useCases['heading']))
                    <h2 class="title">{{ $useCases['heading'] }}</h2>
                @endif
                @if (! empty($useCases['intro']))
                    <p>{{ $useCases['intro'] }}</p>
                @endif
            </div>
            @if (! empty($useCases['tags']))
                <div class="industries-use-cases-tabs__tags">
                    @foreach ($useCases['tags'] as $tag)
                        <span>{{ $tag }}</span>
                    @endforeach
                </div>
            @endif
        </div>

        <ul class="nav nav-tabs custom-tabs industries-use-cases-tabs__nav" id="{{ $tabId }}" role="tablist">
            @foreach ($cards as $card)
                @php
                    $slug = $card['tab_id'] ?? \Illuminate\Support\Str::slug($card['tab_label'] ?? $card['title'] ?? 'case-' . $loop->iteration, '-');
                    $tabLabel = $card['tab_label'] ?? ('Case ' . $loop->iteration);
                @endphp
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link {{ $loop->first ? 'active' : '' }}"
                        id="{{ $slug }}-tab"
                        data-bs-toggle="tab"
                        href="#{{ $slug }}"
                        role="tab"
                        aria-controls="{{ $slug }}"
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                    >{{ $tabLabel }}</a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content industries-use-cases-tabs__content" id="{{ $tabId }}Content">
            @foreach ($cards as $card)
                @php
                    $slug = $card['tab_id'] ?? \Illuminate\Support\Str::slug($card['tab_label'] ?? $card['title'] ?? 'case-' . $loop->iteration, '-');
                    $paneHeading = $card['pane_heading'] ?? $card['title'] ?? '';
                    $imagePath = $card['image'] ?? 'assets/frontend/img/compliance/cwi-bento-meeting.png';
                    $imageFallback = $card['image_fallback'] ?? $imagePath;
                @endphp
                <div
                    class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                    id="{{ $slug }}"
                    role="tabpanel"
                    aria-labelledby="{{ $slug }}-tab"
                >
                    <div class="card cs industries-use-cases-tabs__pane">
                        <div class="card-body-custom">
                            <div class="card-text-container">
                                <h5 class="card-title custom-heading">{{ $paneHeading }}</h5>
                                <div class="middle left"></div>
                                @if (! empty($card['challenge']))
                                    <p><strong>Challenge:</strong> {{ $card['challenge'] }}</p>
                                    @if (! empty($card['approach']) || ! empty($card['outcome']))
                                        <div class="middle left"></div>
                                    @endif
                                @endif
                                @if (! empty($card['approach']))
                                    <p><strong>Mirashka Approach:</strong> {{ $card['approach'] }}</p>
                                    @if (! empty($card['outcome']))
                                        <div class="middle left"></div>
                                    @endif
                                @endif
                                @if (! empty($card['outcome']))
                                    <p><strong>Outcome:</strong> {{ $card['outcome'] }}</p>
                                @endif
                                <a href="{{ $ctaHref }}" class="theme-btn one industries-use-cases-tabs__cta">
                                    {{ $ctaLabel }}
                                    <i class="ri-arrow-right-line" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="card-image-container">
                                <img
                                    src="{{ asset($imagePath) }}"
                                    class="card-img-top"
                                    alt="{{ $card['image_alt'] ?? $card['title'] ?? '' }}"
                                    loading="lazy"
                                    onerror="this.onerror=null;this.src='{{ asset($imageFallback) }}';"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>

<style>
    .industries-use-cases-tabs {
        padding-top: var(--industries-section-pad, 80px) !important;
        padding-bottom: var(--industries-section-pad, 80px) !important;
    }
    .industries-use-cases-tabs > .container {
        padding-left: 28px;
        padding-right: 28px;
    }
    .industries-use-cases-tabs__shell {
        position: relative;
        max-width: 1180px;
        margin: 0 auto;
        border: none;
        border-radius: 2rem;
        box-shadow: 0 34px 44px 0 rgba(29, 20, 99, 0.12);
        overflow: hidden;
        background: #f8f9fa;
    }
    .industries-use-cases-tabs__header {
        border-radius: 2rem 2rem 0 0 !important;
        padding: 40px 32px 32px !important;
    }
    .industries-use-cases-tabs__header .title_sections .before_title {
        display: block;
        margin: 0 auto 14px;
        padding: 0 0 8px;
        color: #7dcea8;
    }
    .industries-use-cases-tabs__header .title_sections h2.title {
        margin: 0 auto 24px;
        color: #fff;
        max-width: 900px;
    }
    .industries-use-cases-tabs__header .title_sections p {
        max-width: 900px;
        margin: 0 auto 20px;
        color: rgba(255, 255, 255, 0.9);
    }
    .industries-use-cases-tabs__tags {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin: 0;
        padding-top: 4px;
    }
    .industries-use-cases-tabs__tags span {
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(125, 206, 168, 0.35);
        color: #fff;
        border-radius: 8px;
        padding: 6px 14px;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .industries-use-cases-tabs__nav.custom-tabs {
        display: flex;
        justify-content: space-around;
        border-bottom: none;
        padding: 0;
        margin: 0;
        background: #f8f9fa;
    }
    .industries-use-cases-tabs__nav.custom-tabs .nav-item {
        flex: 1;
        padding-top: 20px;
    }
    .industries-use-cases-tabs__nav.custom-tabs .nav-link {
        display: block;
        text-align: center;
        padding: 0.5rem 0.75rem;
        color: #706c6c;
        border: none;
        margin: 0;
        font-size: 1rem;
        font-weight: 700;
        background: transparent;
        border-radius: 0;
    }
    .industries-use-cases-tabs__nav.custom-tabs .nav-link.active {
        background-color: #f8f9fa;
        color: #025d4c;
        text-decoration: underline #e1a300;
        text-decoration-thickness: 2px;
        text-underline-offset: 2px;
    }
    .industries-use-cases-tabs__nav.custom-tabs .nav-link.active::before {
        content: '';
        display: inline-block;
        width: 8px;
        height: 8px;
        background-color: #e59b0a;
        border-radius: 50%;
        margin-right: 8px;
        vertical-align: middle;
    }
    .industries-use-cases-tabs__nav.custom-tabs .nav-link:hover {
        color: #000;
    }
    .industries-use-cases-tabs__content {
        padding: 0 0 8px;
    }
    .industries-use-cases-tabs__pane.card.cs {
        border: none;
        background: transparent;
        margin: 0;
    }
    .industries-use-cases-tabs .card-body-custom {
        display: flex;
        align-items: stretch;
        background-color: #f8f9fa;
        gap: 0;
    }
    .industries-use-cases-tabs .card-image-container {
        flex: 0 0 42%;
        max-width: 42%;
    }
    .industries-use-cases-tabs .card-text-container {
        flex: 1;
        padding: 1.75rem 2rem 2rem;
    }
    .industries-use-cases-tabs .card-text-container > .middle.left {
        display: block;
        width: 190px;
        margin: 16px 0;
        text-align: left;
    }
    .industries-use-cases-tabs .card-text-container > .middle.left::after {
        left: 0 !important;
    }
    .industries-use-cases-tabs .card-img-top {
        width: 100%;
        height: 100%;
        min-height: 320px;
        object-fit: cover;
        border-radius: 1rem 0 0 1rem;
    }
    .industries-use-cases-tabs h5.card-title.custom-heading {
        margin: 8px 0 12px;
        text-align: left;
        font-size: 1.15rem;
        line-height: 1.4;
        color: #025d4c;
        font-weight: 700;
    }
    .industries-use-cases-tabs .card-text-container p {
        text-align: left;
        margin: 0;
        font-size: 0.95rem;
        line-height: 1.6;
        color: #4a4e56;
    }
    .industries-use-cases-tabs .card-text-container p strong {
        color: #006039;
    }
    .industries-use-cases-tabs .industries-use-cases-tabs__cta.theme-btn.one {
        margin-top: 28px;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: auto !important;
        max-width: 100%;
        min-width: 160px;
        min-height: 56px;
        line-height: 1.35 !important;
        padding: 0 28px !important;
        border-radius: 10px 0 10px 0 !important;
        white-space: normal;
        text-align: center;
        align-self: flex-start;
        font-weight: 600;
        text-decoration: none;
    }
    .industries-use-cases-tabs .industries-use-cases-tabs__cta.theme-btn.one:hover {
        border-radius: 0 10px 0 10px !important;
    }
    .industries-use-cases-tabs .industries-use-cases-tabs__cta.theme-btn.one i {
        font-size: 1.1rem;
        line-height: 1;
    }
    @media (max-width: 991.98px) {
        .industries-use-cases-tabs {
            padding-top: var(--industries-section-pad, 56px) !important;
            padding-bottom: var(--industries-section-pad, 56px) !important;
        }
        .industries-use-cases-tabs__nav.custom-tabs {
            flex-wrap: wrap;
        }
        .industries-use-cases-tabs__nav.custom-tabs .nav-item {
            flex: 0 0 50%;
        }
        .industries-use-cases-tabs .card-body-custom {
            flex-direction: column;
        }
        .industries-use-cases-tabs .card-image-container {
            flex: 0 0 auto;
            max-width: 100%;
            order: -1;
        }
        .industries-use-cases-tabs .card-img-top {
            min-height: 240px;
            border-radius: 0;
        }
        .industries-use-cases-tabs .card-text-container {
            padding: 1.25rem 1.25rem 1.5rem;
        }
    }
    @media (max-width: 575.98px) {
        .industries-use-cases-tabs__shell {
            border-radius: 1rem;
        }
        .industries-use-cases-tabs__header {
            border-radius: 1rem 1rem 0 0 !important;
            padding: 32px 20px 28px !important;
        }
        .industries-use-cases-tabs__nav.custom-tabs .nav-item {
            flex: 0 0 100%;
        }
        .industries-use-cases-tabs__nav.custom-tabs .nav-link {
            font-size: 0.9rem;
        }
    }
</style>
@endif

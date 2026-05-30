@php
    $compliance = $compliance ?? $section ?? [];
    $cards = $compliance['cards'] ?? [];
    if (empty($cards) && ! empty($compliance['features'])) {
        foreach ($compliance['features'] as $feature) {
            $cards[] = array_merge($feature, [
                'bullets' => $feature['bullets'] ?? array_filter(array_map('trim', preg_split('/,\s*/', $feature['text'] ?? ''))),
            ]);
        }
        foreach ($compliance['float_cards'] ?? [] as $feature) {
            $cards[] = array_merge($feature, [
                'bullets' => $feature['bullets'] ?? array_filter(array_map('trim', preg_split('/,\s*/', $feature['text'] ?? ''))),
            ]);
        }
    }
    $cards = array_slice($cards, 0, 6);
    $cardImages = [
        'assets/frontend/img/compliance/cwi-bento-meeting.png',
        'assets/frontend/img/compliance/cwi-services.png',
        'assets/frontend/img/compliance/cwi-card-policy.png',
        'assets/frontend/img/compliance/cwi-integrity.png',
        'assets/frontend/img/compliance/cwi-bento-advisor.png',
        'assets/frontend/img/compliance/cwi-risk.png',
    ];
    $ctaHref = $compliance['cta_href'] ?? '#industry-form';
    if (! str_starts_with($ctaHref, '#')) {
        $ctaHref = url($ctaHref);
    }
    $introParagraphs = $compliance['intro'] ?? [];
    if (empty($introParagraphs) && ! empty($compliance['content'])) {
        $introParagraphs = [$compliance['content']];
    }
    if (is_string($introParagraphs)) {
        $introParagraphs = [$introParagraphs];
    }
@endphp

@if (! empty($cards))
<section class="service_section bg_light_1 industries-compliance-services industries-section--dark" id="industry-compliance">
    <div class="container">
        <div class="row">
            <div class="col-12 industries-compliance-cards-header">
                <div class="title_all_box style_one text-center dark_color industries-section-header">
                    <div class="title_sections">
                        <div class="before_title">{{ $compliance['label'] ?? $compliance['eyebrow'] ?? 'Compliance & HR Operations' }}</div>
                        <h2>{{ $compliance['heading'] ?? '' }}</h2>
                        @if (! empty($compliance['heading']))
                            <div class="middle"></div>
                        @endif
                        @foreach ($introParagraphs as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 industries-compliance-cards-header">
                <div class="pd_bottom_20"></div>
            </div>
        </div>
        <div class="row industries-compliance-cards">
            @foreach ($cards as $index => $card)
                @php
                    $bgImage = asset($card['image'] ?? $cardImages[$index % count($cardImages)]);
                    $cardHref = $card['href'] ?? $ctaHref;
                    $isActive = ! empty($card['active']);
                @endphp
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 industries-compliance-col">
                    <div class="service_box style_two dark_color industries-compliance-card">
                        <div class="service_content_two {{ $isActive ? 'active_ser' : '' }}">
                            <div class="content_inner" style="background-image:url('{{ $bgImage }}');">
                                <div class="content_inner_in">
                                    <div class="icon_image">
                                        @if (! empty($card['icon_image']))
                                            <img src="{{ asset($card['icon_image']) }}" class="img-fluid" alt="{{ $card['title'] ?? '' }}">
                                        @else
                                            <i class="{{ $card['icon'] ?? 'ri-shield-check-line' }}" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                    <h2>
                                        <a href="{{ $cardHref }}">{{ $card['title'] ?? '' }}</a>
                                    </h2>
                                    @if (! empty($card['text']))
                                        <p>{{ $card['text'] }}</p>
                                    @endif
                                    @if (! empty($card['bullets']))
                                        <ul>
                                            @foreach ($card['bullets'] as $bullet)
                                                <li>{{ $bullet }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="ovarlay_link">
                                <a href="{{ $cardHref }}" aria-label="{{ $card['title'] ?? 'Learn more' }}">
                                    <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                            <div class="overlay_content">
                                <h2>
                                    <a href="{{ $cardHref }}">{{ $card['title'] ?? '' }}</a>
                                </h2>
                                @if (! empty($card['text']))
                                    <p>{{ $card['text'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mr_bottom_20"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .industries-compliance-services .row.industries-compliance-cards {
        align-items: stretch;
    }
    .industries-compliance-services .industries-compliance-col {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }
    .industries-compliance-services .industries-compliance-card {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }
    .industries-compliance-services .industries-compliance-card .service_content_two {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        width: 100%;
        min-height: 420px;
    }
    .industries-compliance-services .industries-compliance-card .content_inner {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        min-height: 420px;
        box-sizing: border-box;
    }
    .industries-compliance-services .industries-compliance-card .content_inner_in {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        min-height: 380px;
        box-sizing: border-box;
    }
    .industries-compliance-services .industries-compliance-card .content_inner_in ul {
        margin-top: auto;
    }
    .industries-compliance-services .industries-compliance-col .mr_bottom_20 {
        display: none;
    }
    .industries-compliance-services .icon_image i {
        font-size: 52px;
        line-height: 1;
        color: var(--primary-color-one, #006039);
    }
    .industries-compliance-services .title_all_box .before_title {
        color: var(--primary-color-one, #006039);
    }
    .industries-page .industries-compliance-services .title_sections > p {
        max-width: 1140px;
    }
    .industries-compliance-services .industries-compliance-card .content_inner_in p {
        flex: 1 1 auto;
    }
    .industries-compliance-services .industries-compliance-card .service_content_two .ovarlay_link {
        top: 36%;
        left: 50%;
        right: auto;
        bottom: auto;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        z-index: 3;
    }
    .industries-compliance-services .industries-compliance-card .service_content_two:hover .ovarlay_link,
    .industries-compliance-services .industries-compliance-card .service_content_two.active_ser .ovarlay_link {
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
    }
    @media (max-width: 991.98px) {
        .industries-compliance-services .industries-compliance-card .service_content_two,
        .industries-compliance-services .industries-compliance-card .content_inner {
            min-height: 380px;
        }
        .industries-compliance-services .industries-compliance-card .content_inner_in {
            min-height: 340px;
        }
    }
</style>
@endif

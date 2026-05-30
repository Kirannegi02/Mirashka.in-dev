@php
    $health = $health ?? [];
    $covers = $health['covers'] ?? [];
    $items = $health['items'] ?? [];
    if (empty($items) && ! empty($covers)) {
        foreach ($covers as $cover) {
            if (is_array($cover)) {
                $items[] = $cover;
            } else {
                $items[] = ['title' => $cover, 'text' => ''];
            }
        }
    }
    $defaultIcons = [
        'ri-user-search-line',
        'ri-file-list-3-line',
        'ri-graduation-cap-line',
        'ri-folder-user-line',
        'ri-file-text-line',
        'ri-money-dollar-circle-line',
        'ri-calendar-check-line',
        'ri-shield-check-line',
        'ri-book-2-line',
        'ri-group-2-line',
        'ri-line-chart-line',
        'ri-user-star-line',
        'ri-computer-line',
        'ri-bar-chart-box-line',
    ];
    $ctaHref = $health['cta']['href'] ?? '#industry-form';
    if (! str_starts_with($ctaHref, '#')) {
        $ctaHref = url($ctaHref);
    }
    $ctaLabel = $health['cta']['label'] ?? 'Request Healthcare HR Health Check';
@endphp

<style>
    .industry-health-industries {
        padding-top: var(--industries-section-pad, 80px) !important;
        padding-bottom: var(--industries-section-pad, 80px) !important;
    }
    .industry-health-industries .container {
        padding-left: 28px;
        padding-right: 28px;
    }
    .industry-health-industries .industries-section-header {
        margin-bottom: 48px;
        padding-top: 0;
    }
    .industry-health-industries__cards-row {
        align-items: stretch;
    }
    .industry-health-industries__cards-row > [class*='col-'] {
        display: flex;
        margin-bottom: 30px;
    }
    .industry-health-industries .choose_box.type_two {
        width: 100%;
        height: 100%;
        min-height: 260px;
        margin-bottom: 0;
        display: flex;
        flex-direction: column;
    }
    .industry-health-industries .choose_box.type_two .content_box {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .industry-health-industries .choose_box.type_two .content_box h2 {
        min-height: 3.75rem;
        margin-bottom: 10px;
    }
    .industry-health-industries .choose_box.type_two .content_box h2 a {
        pointer-events: none;
        color: inherit;
        text-decoration: none;
    }
    .industry-health-industries .choose_box.type_two .content_box p {
        flex: 1;
        margin: 0;
    }
    .industry-health-industries .choose_box.type_two .content_box p:empty {
        display: none;
    }
    .industry-health-industries .choose_box.type_two .step {
        margin-top: auto;
        flex-shrink: 0;
    }
    .industry-health-industries .choose_box.type_two .step::before {
        display: none;
    }
    .industry-health-industries .choose_box.type_two .icon_image i {
        font-size: 40px;
        line-height: 90px;
        color: var(--primary-color-one, #006039);
    }
    .industry-health-industries .title_sections .title {
        margin-bottom: 24px;
        text-align: center;
    }
    .industry-health-industries .title_sections .before_title {
        text-align: center;
    }
    .industry-health-industries__subheading {
        position: static;
        display: block;
        margin: 0 auto;
        padding: 0 12px;
        max-width: 52rem;
        font-size: 1.05rem;
        line-height: 1.65;
        font-weight: 500;
        color: rgba(15, 23, 42, 0.72);
        text-align: center;
    }
    .industry-health-industries__footer {
        margin-top: 0;
    }
    .industry-health-industries__output {
        text-align: center;
        max-width: 52rem;
        margin: 36px auto 28px;
        font-size: 1rem;
        line-height: 1.65;
        color: rgba(15, 23, 42, 0.72);
    }
    .industry-health-industries__cta-wrap {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-top: 8px;
    }
    .industry-health-industries__cta-wrap .theme_btn_all {
        margin: 0;
        display: inline-block;
    }
    .industry-health-industries__cta-wrap .theme-btn.one {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        width: auto !important;
        min-width: 220px;
    }
    @media (max-width: 991.98px) {
        .industry-health-industries {
            padding-top: var(--industries-section-pad, 56px) !important;
            padding-bottom: var(--industries-section-pad, 56px) !important;
        }
        .industry-health-industries .industries-section-header {
            margin-bottom: 36px;
        }
    }
</style>

<section class="process-section industry-health-industries bg_light_1 industries-section--dark" id="industry-health-check">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="title_all_box style_seven text-center dark_color industries-section-header">
                    <div class="title_sections">
                        @if (! empty($health['label']))
                            <div class="before_title">{{ $health['label'] }}</div>
                        @endif
                        @if (! empty($health['heading']))
                            <div class="title">{{ $health['heading'] }}</div>
                        @endif
                        @if (! empty($health['content']))
                            <p class="industry-health-industries__subheading">{{ $health['content'] }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if (! empty($items))
            <div class="row industry-health-industries__cards-row">
                @foreach ($items as $index => $item)
                    @php
                        $itemTitle = $item['title'] ?? '';
                        $itemText = $item['text'] ?? '';
                        $itemIcon = $item['icon'] ?? $defaultIcons[$index % count($defaultIcons)];
                    @endphp
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="choose_box type_two">
                            <div class="icon_box">
                                <div class="icon_image">
                                    <i class="{{ $itemIcon }}" aria-hidden="true"></i>
                                </div>
                                <span class="icon_bg_rotate"></span>
                            </div>
                            <div class="content_box">
                                <h2><a href="{{ $ctaHref }}">{{ $itemTitle }}</a></h2>
                                @if ($itemText !== '')
                                    <p>{{ $itemText }}</p>
                                @endif
                            </div>
                            <div class="step">
                                <h6 class="step_no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        @if (! empty($health['output']) || ! empty($health['cta']['label']))
            <div class="row industry-health-industries__footer">
                <div class="col-lg-10 col-xl-8 m-auto text-center">
                    @if (! empty($health['output']))
                        <p class="industry-health-industries__output">{{ $health['output'] }}</p>
                    @endif

                    @if (! empty($health['cta']['label']))
                        <div class="industry-health-industries__cta-wrap">
                            <div class="theme_btn_all color_one">
                                <a href="{{ $ctaHref }}" class="theme-btn one">{{ $ctaLabel }}</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>

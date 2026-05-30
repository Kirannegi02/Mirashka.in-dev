@php
    $grid = $grid ?? [];
    $gridCards = $grid['cards'] ?? [];
    $categoryLabel = $categoryLabel ?? ($grid['kicker'] ?? 'Healthcare');
    $bgInner = asset($grid['section_bg'] ?? 'assets/frontend/img/tab-sec-bg.jpg');
    $ctaHref = $grid['cta_href'] ?? '#industry-form';
    $ctaLabel = $grid['cta'] ?? 'Speak to a Healthcare HR Advisor';
@endphp

@if (!empty($gridCards))
<div class="industries-segments-tabs-wrap">
    @if (!empty($grid['heading']) || !empty($grid['label']))
    <div class="container">
        <div class="title_all_box style_one text-center dark_color industries-section-header">
            <div class="title_sections">
                @if (!empty($grid['label']))
                    <div class="before_title">{{ $grid['label'] }}</div>
                @endif
                @if (!empty($grid['heading']))
                    <h2 class="title">{{ $grid['heading'] }}</h2>
                @endif
                @if (!empty($grid['heading']))
                    <div class="middle"></div>
                @endif
                @if (!empty($grid['content']))
                    <p>{{ $grid['content'] }}</p>
                @endif
            </div>
        </div>
    </div>
    @endif

    <section class="tab-section pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15 industries-segments-tabs">
        <div class="inner_section bg_op_1 rounded_radius" style="background-image:url('{{ $bgInner }}');">
            <div class="container industries-segments-tabs__container">
                <div class="row">
                    <div class="tabs_all_box tabs_all_box_start type_one">
                        <div class="tab_over_all_box">
                            <div class="tabs_header clearfix">
                                <ul class="showcase_tabs_btns nav-pills nav clearfix" role="tablist">
                                    @foreach ($gridCards as $card)
                                        @php $tabId = 'industry-segment-tab-' . $loop->iteration; @endphp
                                        <li class="nav-item" role="presentation">
                                            <a
                                                class="s_tab_btn nav-link {{ $loop->first ? 'active' : '' }}"
                                                href="#{{ $tabId }}"
                                                data-tab="#{{ $tabId }}"
                                                role="tab"
                                                aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                            >{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}. {{ $card['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="toll_free">
                                    <a href="{{ $ctaHref }}">
                                        <i class="icon-phone-call" aria-hidden="true"></i>{{ $ctaLabel }}
                                    </a>
                                </div>
                            </div>
                            <div class="s_tab_wrapper">
                                <div class="s_tabs_content">
                                    @foreach ($gridCards as $card)
                                        @php
                                            $tabId = 'industry-segment-tab-' . $loop->iteration;
                                            $paneBg = asset($card['image'] ?? 'assets/frontend/img/compliance/cwi-bento-meeting.png');
                                            $paneFallback = asset($card['image_fallback'] ?? ($card['image'] ?? ''));
                                        @endphp
                                        <div
                                            class="s_tab fade {{ $loop->first ? 'active-tab show' : '' }}"
                                            id="{{ $tabId }}"
                                            role="tabpanel"
                                        >
                                            <div
                                                class="tab_content one industry-segment-tab-pane"
                                                style="background-image:url('{{ $paneBg }}');"
                                                data-fallback="{{ $paneFallback }}"
                                            >
                                                <div class="content_image">
                                                    <h6>{{ $card['kicker'] ?? $categoryLabel }}</h6>
                                                    <h2>{{ $card['title'] }}</h2>
                                                    @if (!empty($card['subcategories']))
                                                        <ul class="industry-segment-pills">
                                                            @foreach ($card['subcategories'] as $sub)
                                                                <li>{{ $sub }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    <p>{{ $card['description'] ?? '' }}</p>
                                                    <a
                                                        href="{{ $card['href'] ?? $ctaHref }}"
                                                        class="theme-btn one industry-segment-cta"
                                                    >{{ $card['cta'] ?? 'Explore' }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.industries-segments-tabs .industry-segment-tab-pane').forEach(function (pane) {
        var fallback = pane.getAttribute('data-fallback');
        if (!fallback) return;
        var img = new Image();
        img.onerror = function () {
            pane.style.backgroundImage = "url('" + fallback + "')";
        };
        img.src = pane.style.backgroundImage.replace(/^url\(["']?|["']?\)$/g, '');
    });
});
</script>
@endif

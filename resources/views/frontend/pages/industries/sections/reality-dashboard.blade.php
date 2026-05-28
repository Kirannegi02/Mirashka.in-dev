@php
    $d = $reality ?? [];
    $paragraphs = $d['paragraphs'] ?? (empty($d['content']) ? [] : [$d['content']]);
    $painPoints = $d['pain_points'] ?? [];
@endphp
<section class="content-section cwi-sub-section--light bg_light_1 cwi-section-glow industries-reality-dashboard" id="industry-reality">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one dark_color text-center cwi-title-draw cwi-anim cwi-anim--up">
            <div class="title_sections">
                <div class="before_title">{{ $d['before_title'] ?? $d['label'] ?? '' }}</div>
                <h2 class="title">{{ $d['heading'] ?? '' }}</h2>
            </div>
        </div>
        <div class="hraas-dashboard-panel cwi-anim cwi-anim--scale" data-cwi-delay="2">
            <div class="hraas-dashboard-tabs" aria-label="Pain points">
                @if (!empty($painPoints))
                    <div class="hraas-dashboard-sidebar-pain">
                        <ul class="hraas-dashboard-sidebar-pain-list">
                            @foreach ($painPoints as $point)
                                <li>
                                    <span class="hraas-dashboard-point-icon" aria-hidden="true">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </span>
                                    <span class="hraas-dashboard-point-text">{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <a href="{{ $d['cta_href'] ?? '#industry-form' }}" class="hraas-dashboard-cta">
                    <span class="hraas-dashboard-cta__icon" aria-hidden="true"><i class="ri-phone-line"></i></span>
                    {{ $d['cta'] ?? 'Get Industry HR Assessment' }}
                </a>
            </div>
            <div class="hraas-dashboard-stage">
                <div class="hraas-dashboard-pane is-active" role="region" aria-label="Industry reality content">
                    <div class="hraas-dashboard-pane__bg" aria-hidden="true">
                        <img
                            class="hraas-dashboard-pane__img"
                            src="{{ asset($d['image'] ?? 'assets/frontend/img/compliance/cwi-bento-meeting.png') }}"
                            alt="{{ $d['image_alt'] ?? '' }}"
                            loading="lazy"
                            @if (!empty($d['image_fallback']))
                                onerror="this.onerror=null;this.src='{{ asset($d['image_fallback']) }}';"
                            @endif
                            style="object-position: {{ $d['image_position'] ?? 'center center' }};"
                        >
                    </div>
                    <div class="hraas-dashboard-pane__overlay" aria-hidden="true"></div>
                    <div class="hraas-dashboard-pane__inner">
                        <div class="hraas-dashboard-pane__copy hraas-dashboard-pane__copy--full">
                            @foreach ($paragraphs as $index => $paragraph)
                                <p class="hraas-dashboard-pane__text">{{ $paragraph }}</p>
                                @if ($index === 0 && isset($paragraphs[1]))
                                    <span class="line industry-reality-separator" aria-hidden="true"></span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

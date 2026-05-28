<section class="content-section cwi-sub-section--light bg_light_1 cwi-section-glow">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one dark_color text-center cwi-title-draw cwi-anim cwi-anim--up">
            <div class="title_sections">
                <div class="before_title">{{ $service['dashboard']['before_title'] ?? $service['dashboard']['label'] ?? '' }}</div>
                <h2 class="title">{{ $service['dashboard']['heading'] }}</h2>
                @if (!empty($service['dashboard']['content']))
                    <p>{{ $service['dashboard']['content'] }}</p>
                @endif
            </div>
        </div>
        <div class="hraas-dashboard-panel cwi-anim cwi-anim--scale" data-cwi-delay="2" data-hraas-dashboard>
            <div class="hraas-dashboard-tabs" role="tablist">
                @foreach($service['dashboard']['tabs'] as $index => $tab)
                    <button
                        type="button"
                        class="hraas-dashboard-tab{{ $index === 0 ? ' is-active' : '' }}"
                        role="tab"
                        aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                        data-hraas-dashboard-tab="{{ $index }}"
                    >
                        <span class="hraas-dashboard-tab__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                        {{ $tab['label'] }}
                    </button>
                @endforeach
                <a href="{{ $service['dashboard']['cta_href'] ?? route('projectenquiries') }}" class="hraas-dashboard-cta">
                    <span class="hraas-dashboard-cta__icon" aria-hidden="true"><i class="ri-phone-line"></i></span>
                    {{ $service['dashboard']['cta'] }}
                </a>
            </div>
            <div class="hraas-dashboard-stage">
                @foreach($service['dashboard']['tabs'] as $index => $tab)
                    <div
                        class="hraas-dashboard-pane{{ $index === 0 ? ' is-active' : '' }}"
                        data-hraas-dashboard-pane="{{ $index }}"
                        role="tabpanel"
                    >
                        <div class="hraas-dashboard-pane__bg" aria-hidden="true">
                            <img
                                class="hraas-dashboard-pane__img"
                                src="{{ asset($tab['image']) }}"
                                alt="{{ $tab['image_alt'] ?? '' }}"
                                loading="lazy"
                                @if (!empty($tab['image_fallback']))
                                    onerror="this.onerror=null;this.src='{{ asset($tab['image_fallback']) }}';"
                                @endif
                                style="object-position: {{ $tab['image_position'] ?? 'center center' }};"
                            >
                        </div>
                        <div class="hraas-dashboard-pane__overlay" aria-hidden="true"></div>
                        <div class="hraas-dashboard-pane__inner">
                            <div class="hraas-dashboard-pane__copy{{ !empty($tab['pain_points']) ? ' hraas-dashboard-pane__copy--list' : '' }}">
                                @php
                                    $paneEyebrow = $tab['eyebrow'] ?? ($service['dashboard']['before_title'] ?? $service['dashboard']['label'] ?? '');
                                @endphp
                                @if ($paneEyebrow !== '')
                                    <div class="before_title">{{ $paneEyebrow }}</div>
                                @endif
                                <h3 class="hraas-dashboard-pane__title">{{ $tab['heading'] }}</h3>
                                @if (!empty($tab['paragraphs']))
                                    @foreach ($tab['paragraphs'] as $paragraph)
                                        <p class="hraas-dashboard-pane__text">{{ $paragraph }}</p>
                                    @endforeach
                                @elseif (!empty($tab['pain_points']))
                                    @if (!empty($tab['content']))
                                        <p class="hraas-dashboard-pane__text">{{ $tab['content'] }}</p>
                                    @endif
                                    <ul class="hraas-dashboard-pane__list">
                                        @foreach ($tab['pain_points'] as $point)
                                            <li>{{ $point }}</li>
                                        @endforeach
                                    </ul>
                                @elseif (!empty($tab['content']))
                                    <p class="hraas-dashboard-pane__text">{{ $tab['content'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

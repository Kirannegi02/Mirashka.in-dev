<section class="content-section cwi-sub-section--light bg_light_1 cwi-section-glow">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one dark_color text-center cwi-title-draw cwi-anim cwi-anim--up">
            <div class="title_sections">
                <div class="before_title">{{ $service['dashboard']['before_title'] }}</div>
                <h2 class="title">{{ $service['dashboard']['heading'] }}</h2>
                <p>{{ $service['dashboard']['content'] }}</p>
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
                <a href="{{ route('projectenquiries') }}" class="hraas-dashboard-cta">
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
                                alt=""
                                loading="lazy"
                                style="object-position: {{ $tab['image_position'] ?? 'center center' }};"
                            >
                        </div>
                        <div class="hraas-dashboard-pane__overlay" aria-hidden="true"></div>
                        <div class="hraas-dashboard-pane__inner">
                            <div class="hraas-dashboard-pane__copy">
                                <div class="before_title">{{ $service['dashboard']['before_title'] }}</div>
                                <h3 class="hraas-dashboard-pane__title">{{ $tab['heading'] }}</h3>
                                <p class="hraas-dashboard-pane__text">{{ $tab['content'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

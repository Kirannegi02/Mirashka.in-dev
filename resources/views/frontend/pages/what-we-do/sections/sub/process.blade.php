<section class="content-section cwi-sub-section--dark hraas-section--dark bg_dark_3 cwi-section-glow">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="title_all_box style_one text-center light_color cwi-title-draw cwi-anim cwi-anim--up">
            <div class="title_sections">
                <div class="before_title">{{ $service['process']['before_title'] }}</div>
                <h2 class="title">{{ $service['process']['heading'] }}</h2>
            </div>
        </div>
        <div class="pd_top_40"></div>
        <div class="row gutter_30px">
            @foreach($service['process']['steps'] as $index => $step)
                <div class="col-lg col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <article class="hraas-process-card cwi-anim cwi-anim--up" data-cwi-delay="{{ min($index + 1, 8) }}">
                        <span class="hraas-process-card__icon" aria-hidden="true"><i class="{{ $step['icon'] }}"></i></span>
                        <div class="hraas-process-card__body">
                            <span class="hraas-process-card__num" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3 class="hraas-process-card__title">{{ $step['title'] }}</h3>
                            <p class="hraas-process-card__text">{{ $step['text'] }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

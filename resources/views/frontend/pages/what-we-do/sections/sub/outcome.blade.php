@php $outcome = $service['outcome'] ?? []; @endphp
<section class="content-section cwi-sub-page-cta cwi-sub-section--dark bg_dark_3 cwi-section-glow">
    <div class="pd_top_60"></div>
    <div class="container">
        <div class="cwi-sub-page-cta__inner text-center light_color">
            <div class="title_all_box style_one light_color cwi-title-draw cwi-anim cwi-anim--up">
                <div class="title_sections">
                    <div class="before_title">{{ $outcome['before_title'] ?? 'Outcome' }}</div>
                    <h2 class="title">{{ $outcome['heading'] ?? 'Ready to move forward' }}</h2>
                    <p class="cwi-sub-page-cta__text">{{ $outcome['content'] ?? $service['hero']['content'] }}</p>
                </div>
            </div>
            <div class="theme_btn_all color_two cwi-anim cwi-anim--up" data-cwi-delay="2">
                <a href="{{ route('projectenquiries') }}" class="theme-btn one">
                    {{ $outcome['button'] ?? $service['page_cta']['button'] ?? 'Speak to an Advisor' }} <i class="icon-right-arrow"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="pd_bottom_60"></div>
</section>

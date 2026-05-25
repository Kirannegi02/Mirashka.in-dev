<section
    class="cwi-sub-hero cwi-hero hraas-hero single_banner style_one custom_black_overlay cwi-section--dark"
    style="background-image: url({{ asset($service['hero']['image']) }});"
>
    <div class="container">
        <div class="slider_content">
            <nav class="cwi-sub-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route($parentRouteName) }}">{{ $parent['parent_label'] ?? $category['label'] }}</a>
                <span aria-hidden="true">/</span>
                <span style="color: rgba(255,255,255,0.9);">{{ $service['hero']['label'] }}</span>
            </nav>
            <h6>{{ $service['hero']['label'] }}</h6>
            <h1>{{ $service['hero']['heading'] }}</h1>
            <p class="hero-intro">{{ $service['hero']['content'] }}</p>
            <div class="theme_btn_all color_two">
                <a href="{{ route('projectenquiries') }}" class="theme-btn one">
                    {{ $service['page_cta']['button'] ?? 'Speak to an HR Advisor' }} <i class="icon-right-arrow"></i>
                </a>
            </div>
        </div>
    </div>
</section>

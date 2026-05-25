<section class="single_banner style_one bg_op_1 cwi-hero hraas-hero custom_black_overlay position-relative"
    style="background-image: url({{ asset($hero['image']) }});">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12">
                <div class="pd_top_40"></div>
                <div class="slider_content light_color text-center">
                    <h6>{{ $hero['label'] }}</h6>
                    <p class="hero-tagline">{{ $hero['tagline'] }}</p>
                    <h1 class="color_white">{{ $hero['title'] }}</h1>
                    @if(!empty($hero['headline']))
                        <p class="hero-headline">{{ $hero['headline'] }}</p>
                    @endif
                    <p class="hero-intro">{{ $hero['content'] }}</p>
                    <ul class="d_inline_block">
                        <li>
                            <div class="theme_btn_all color_two">
                                <a href="{{ route('projectenquiries') }}" class="theme-btn one primary-color-two">{{ $hero['primary_cta'] }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="theme_btn_all">
                                <a href="{{ route('projectenquiries') }}" class="theme-btn two">{{ $hero['secondary_cta'] }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pd_bottom_60"></div>
            </div>
        </div>
    </div>
</section>

@extends('frontend.layouts.app')


@section('content')


<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets/frontend/img/team/banner-1.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">{{ $team->name }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="about-section">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 ">
                <div class="about_content position-relative z_99">
                    <div class="title_all_box style_one text-left  dark_color">
                        <div class="title_sections">
                            <div class="before_title">About</div>
                            <h2>{{ $team->name }}</h2>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_15"></div>
                    <!--===============spacing==============-->
                    <div class="extra_content image_with_content dark_color" style="padding-bottom: 20px;">
                        <div class="simple_image ">
                            <img src="{{ imageUrl($team->image) }}" alt="img">
                            <h2 style="padding-top: 11px;"> {{ $team->designation }}</h2>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                    <div class="description_box">
                        <p>{{ $team->description  }} </p>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                    <div class="row gutter_15px">
                        <div class="col-lg-6 col-md-12">
                            <div class="icon_box_all  style_two">
                                <div class="icon_content  icon_imgs ">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/icon-img-n-1.png') }}" class="img-fluid svg_image" alt="icon png">
                                    </div>
                                    <div class="txt_content">
                                        <h3><a href="#" target="_blank" rel="nofollow">Driving Strategic  &amp; Brand Communication</a>
                                        </h3>
                                    </div>
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_25"></div>
                                <!--===============spacing==============-->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="icon_box_all  style_two">
                                <div class="icon_content  icon_imgs ">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon png">
                                    </div>
                                    <div class="txt_content">
                                        <h3><a href="#" target="_blank" rel="nofollow">Delivering Measurable Business Impact</a></h3>
                                    </div>
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_25"></div>
                                <!--===============spacing==============-->
                            </div>
                        </div>
                    </div>

                    <div class="theme_btn_all color_one">
                       <a href="{{ $team->contact_cta_link }}"
   target="_blank"
   rel="nofollow noopener noreferrer"
   class="theme-btn five">
   Contact us <i class="icon-right-arrow"></i>
</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="image_boxes style_two">
                    <img src="{{ asset('assets/frontend/images/shape-1.png') }}" class="background_image" alt="image">
                    <div class="image one">
                        <img src="{{ imageUrl($team->image) }}" class="img-fluid" alt="image">
                    </div>
                    <div class="image two">
                        <img src="{{ asset('assets/frontend/images/about/about-7.png') }}" class="img-fluid" alt="image">

                    </div>
                    <div class="authour_quotes">
                        <i class="icon-quote"></i>
                        <h6>{{ $team->short_tagline }}</h6>
                        <p>/ {{ $team->designation }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_70"></div>
    <!--===============spacing==============-->
</section>

<section class="about-section bg_op_1" style="background-image: url({{ asset('assets/frontend/images/about-11-bg.jpg') }});">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
   <div class="container">
    <div class="row gutter_30px align-items-center">

        <!-- LEFT CONTENT -->
        <div class="col-xl-6 col-lg-10 col-md-12">
            <div class="title_all_box style_one dark_color">
                <div class="title_sections">
                    <div class="before_title"> Vision </div>
                    <h2> Our Vision for Growth</h2>

                    <p>
                        {{ $team->vision->content ?? 'No vision available' }}
                    </p>
                </div>
            </div>

            <div class="pd_bottom_20"></div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="image_boxes style_seven">
                <div class="image_box">

                    <img 
                        src="{{ $team->vision && $team->vision->image 
                                ? imageUrl($team->vision->image) 
                                : asset('assets/frontend/images/about/about-3.jpg') }}"
                        class="img-fluid height_500 object-fit-cover"
                        alt="vision">

                    <div class="experience">
                        <div class="experience_inner">
                            <h2> Innovate. Create. Elevate</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
    <!--===============spacing==============-->
    <div class="pd_bottom_90"></div>
    <!--===============spacing==============-->
</section>



<section class="image_box_carousel_content image_covered">
    <div class="pd_top_100"></div>

    <div class="title_all_box style_seven text-center dark_color">
        <div class="title_sections">
            <div class="before_title">
               Our Work Showcase
            </div>
            <h2>
               Gallery
            </h2>
        </div>
    </div>

    <div class="pd_bottom_40"></div>

    <div class="container">

        @if(isset($team) && $team->galleries && $team->galleries->count())

            <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
                 id="teamGalleryCarousel"
                 data-options='{
                    "loop": true,
                    "margin": 20,
                    "autoheight": true,
                    "nav": true,
                    "dots": true,
                    "autoplay": true,
                    "autoplayTimeout": 7000,
                    "smartSpeed": 1800,
                    "responsive": {
                        "0": {"items": 1},
                        "768": {"items": 2},
                        "1000": {"items": 3},
                        "1200": {"items": 4}
                    }
                 }'>

                @foreach($team->galleries as $gallery)

                    <div class="mg_image_box">

                        <div class="image_box position-relative">

                            <!-- Fancybox -->
                            <a href="{{ imageUrl($gallery->image) }}"
                               data-fancybox="team-gallery"
                               data-caption="
                                    <h5>{{ $gallery->title }}</h5>
                                    <p>{{ $gallery->description }}</p>
                               ">

                                <img 
                                    src="{{ imageUrl($gallery->image) }}"
                                    class="img"
                                    loading="lazy"
                                    alt="{{ $gallery->alt_text ?? $gallery->title ?? 'gallery image' }}"
                                >

                            </a>

                            <!-- Overlay -->
                            <div class="overlay">
                                <h6>{{ $gallery->title ?? '' }}</h6>
                                <span>{{ $gallery->category ?? '' }}</span>
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else
            <p class="text-center">No gallery images available</p>
        @endif

    </div>
      <div class="pd_bottom_100"></div>
</section>




@endsection
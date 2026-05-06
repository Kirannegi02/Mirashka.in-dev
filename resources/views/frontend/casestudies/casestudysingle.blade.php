@extends('frontend.layouts.app')


@section('content')

<style>
    /* HERO */
    .elevate-hero {
        position: relative;
        background-size: cover;
        background-position: center;
        padding: 140px 0 120px;
        overflow: hidden;
    }

    /* Gradient Overlay */
    .elevate-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg,
                rgba(0, 0, 0, 0.65) 0%,
                rgba(0, 0, 0, 0.55) 40%,
                rgba(0, 0, 0, 0.85) 100%);
    }

    /* CONTENT */
    .elevate-content {
        position: relative;
        z-index: 2;
    }

    /* Glass Client Tag */
    .elevate-client {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 12px;
        background: rgb(0, 96, 57);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        color: #fff;
        font-weight: 600;
        font-size: 16px;
        border: 1px solid rgba(255, 255, 255, 0.25);
        margin-bottom: 20px;
    }

    /* Animated Title */
    .elevate-title {
        font-size: 48px;
        font-weight: 700;
        color: #fff;
        line-height: 1.2;
        animation: elevateFadeUp 1s ease;
    }

    /* Meta */
    .elevate-meta {
        margin-top: 20px;
        font-size: 18px;
        color: #ddd;
    }

    /* Animation */
    @keyframes elevateFadeUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Scroll Indicator */
    .elevate-scroll {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        width: 24px;
        height: 40px;
        border: 2px solid #fff;
        border-radius: 20px;
        display: flex;
        justify-content: center;
    }

    .elevate-scroll span {
        width: 4px;
        height: 8px;
        background: #fff;
        border-radius: 2px;
        margin-top: 6px;
        animation: elevateScroll 1.5s infinite;
    }

    @keyframes elevateScroll {
        0% {
            opacity: 0;
            transform: translateY(0);
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            transform: translateY(10px);
        }
    }

    /* MOBILE FIX */
    @media (max-width:768px) {

        .elevate-hero {
            padding: 90px 0 80px;
        }

        .elevate-title {
            font-size: 28px;
        }

        .elevate-meta {
            font-size: 15px;
        }

    }
</style>


<section class="elevate-hero"
    style="background-image:url('{{ imageUrl($caseStudy->featured_image) }}');">

    <div class="elevate-overlay"></div>

    <div class="container elevate-content text-center">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="elevate-client">
                    {{ $caseStudy->client_name }}
                </div>

                <h1 class="elevate-title">
                    {{ $caseStudy->title }}
                </h1>

                <div class="elevate-meta">
                    <strong>Industry:</strong> {{ $caseStudy->industry }}
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <strong>Reach:</strong> {{ $caseStudy->reach }}
                </div>

            </div>
        </div>

    </div>

    <!-- Scroll Indicator -->
    <div class="elevate-scroll">
        <span></span>
    </div>

</section>


<section class="about-section">

    <div class="pd_top_80"></div>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12">

                <div class="title_all_box style_one dark_color">

                    <div class="title_sections left">

                        <div class="before_title">
                            Client Overview
                        </div>

                        <h2 class="title">
                            {{ $caseStudy->client_name }}
                        </h2>

                        <p>
                            {{ $caseStudy->short_description }}
                        </p>

                        <p>
                            Industry: {{ $caseStudy->industry }} <br>
                            Reach: {{ $caseStudy->reach }}
                        </p>

                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-10 col-md-12">

                <div class="elevate-images">

                   @if($caseStudy->image_two || $caseStudy->image_three)
                        @if($caseStudy->image_two)
                            <div class="elevate-img-main">
                                <img src="{{ imageUrl($caseStudy->image_two) }}"
                                    class="img-fluid">
                            </div>
                        @endif

                        @if($caseStudy->image_three)
                            <div class="elevate-img-small">
                                <img src="{{ imageUrl($caseStudy->image_three) }}"
                                    class="img-fluid">
                            </div>
                        @endif
                    @else
                        <div class="elevate-img-main text-center">
                            <img src="{{ asset('assets/frontend/img/page/cmc11.webp') }}" class="img-fluid">
                        </div>
                    @endif

                </div>
            </div>


        </div>
    </div>

    <div class="pd_bottom_80"></div>

</section>
<style>
    .elevate-about {
        padding: 80px 0;
    }

    .elevate-images {
        position: relative;
    }

    .elevate-img-main img {
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .elevate-img-small {
        position: absolute;
        bottom: -30px;
        right: -30px;
        width: 65%;
    }

    .elevate-img-small img {
        border-radius: 12px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        border: 6px solid #fff;
    }


    @media(max-width:768px) {

        .elevate-img-small {
            position: relative;
            right: 0;
            bottom: 0;
            margin-top: 20px;
            width: 100%;
        }



    }
</style>


<section class="about_us_section bg_light_1">

    <div class="pd_top_100"></div>

    <div class="container pd_zero">

        <div class="row flex-xl-row-reverse">

            <!-- TEXT -->
            <div class="col-xl-6 col-lg-12">

                <div class="title_all_box style_one dark_color">

                    <div class="title_sections left">

                        <div class="before_title">
                            The Challenge
                        </div>

                        <h2>
                            What Problem Needed to be Solved
                        </h2>

                        <p>
                            {!! $caseStudy->challenge !!}
                        </p>

                    </div>
                </div>
            </div>


            <!-- IMAGE -->
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">

                <div class="image_boxes style_six">

                    <div class="image_box">

                        @if($caseStudy->image_four)
                            <img src="{{ imageUrl($caseStudy->image_four) }}"
                            class="img-fluid height_510px object-fit-cover" alt="about">
                        @else
                            <img src="{{ asset('assets/frontend/img/page/wws/expertise.webp') }}" class="img-fluid">
                        @endif

                        <div class="video_inner type_six">
                            <p>Challenge</p>
                        </div>

                        <div class="experience">
                            <div class="experience_inner">
                                <h2> Reach: {{ $caseStudy->reach }}</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="pd_bottom_80"></div>

</section>

<section class="about_us_section">

    <div class="pd_top_100"></div>

    <div class="container pd_zero">

        <div class="row">

            <div class="col-xl-12">

                <div class="title_all_box style_seven text-center dark_color">

                    <div class="title_sections">

                        <div class="before_title">
                            Our Approach
                        </div>

                        <h2>
                            Solution & Strategy
                        </h2>

                    </div>
                </div>

                <div class="pd_bottom_40"></div>

            </div>

            <div class="col-xl-6 col-lg-12">

                <div class="process_box style_one dark_color">

                    <div class="process_box_outer">

                        <div class="icon">
                            <span class="icon-line-chart"></span>
                            <div class="number">01</div>
                        </div>

                        <div class="content_box">

                            <h2>Solution</h2>

                            <p>
                                {!! $caseStudy->solution !!}
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-xl-6 col-lg-12">

                <div class="process_box style_one dark_color">

                    <div class="process_box_outer">

                        <div class="icon">
                            <span class="icon-line-chart"></span>
                            <div class="number">02</div>
                        </div>

                        <div class="content_box">

                            <h2>Strategy</h2>

                            <p>
                                {!! $caseStudy->strategy !!}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="pd_bottom_80"></div>

</section>


<section class="tab-section  bg_light_1">

    <div class="pd_top_90"></div>


    <div class="title_all_box style_one dark_color text-center">

        <div class="title_sections">

            <div class="before_title">

                Proven Impact
            </div>

            <div class="title">
                Results & Impact
            </div>

            <div class="small_text_sub">
                Real Results from Strategy, Storytelling & Media Excellence
            </div>

        </div>

        <div class="pd_bottom_40"></div>

    </div>

    <div class="container">

        <div class="row">

            <section class="tabs_all_box tabs_all_box_start type_two">

                <div class="tab_over_all_box">

                    <div class="tabs_header clearfix">

                        <ul class="showcase_tabs_btns nav-pills nav clearfix">

                            <li class="nav-item">
                                <a class="s_tab_btn nav-link active" data-tab="#tabone">
                                    Results
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabtwo">
                                    Impact Highlights
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="s_tab_btn nav-link" data-tab="#tabthree">
                                    Media Coverage
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="s_tab_wrapper">

                        <div class="s_tabs_content">

                            <!-- Results -->
                            <div class="s_tab fade active-tab show" id="tabone">
                                <div class="tab_content one">
                                    <p>
                                        {!! $caseStudy->results !!}
                                    </p>
                                </div>
                            </div>

                            <!-- Impact Highlights -->
                            <div class="s_tab fade" id="tabtwo">
                                <div class="tab_content one">
                                    <p>
                                        {{ $caseStudy->impact_highlights }}
                                    </p>
                                </div>
                            </div>

                            <!-- Media Coverage -->
                            <div class="s_tab fade" id="tabthree">
                                <div class="tab_content one">
                                    <p>
                                        {!! $caseStudy->media_coverage !!}
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

    <div class="pd_bottom_80"></div>

</section>

<section class="image_box_carousel_content image_covered">
    <div class="pd_top_100"></div>

    <div class="title_all_box style_seven text-center dark_color">
        <div class="title_sections">
            <div class="before_title">
                In The Spotlight
            </div>
            <h2>
                Media Coverage Across Platforms
            </h2>
        </div>
    </div>

    <div class="pd_bottom_40"></div>

    <div class="container">

        @if($caseStudy->media && $caseStudy->media->count())

            <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
                 id="caseStudyGallery"
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

                @foreach($caseStudy->media as $item)
                    <div class="mg_image_box">

                        <div class="image_box">

                            <!-- FANCYBOX WITH SWIPE + ARROWS -->
                            <a href="{{ imageUrl($item->image, 'admin_assets/img/default.png', 'case-study/media') }}"
                               data-fancybox="case-study-gallery"
                               data-caption="Media Coverage">

                                <img 
                                    src="{{ imageUrl($item->image, 'admin_assets/img/default.png', 'case-study/media') }}"
                                    class="img"
                                    loading="lazy"
                                    alt="case study image"
                                >

                            </a>

                        </div>

                    </div>
                @endforeach

            </div>

        @endif

    </div>
</section>

<!---about us  --->
<section class="about-section">

    <!--===============spacing==============-->
    <div class="container">

        <!--===============spacing==============-->
        <div class="pd_bottom_40"></div>
        <!--===============spacing==============-->
        <div class="row">
            <div class="col-xl-6 col-lg-6 mb-5 mb-lg-0 mb-xl-0">
                <div class="link_box_contents style_one">
                    <div class="link_content_bx">
                        <div class="image_box">
                            <img src="{{ asset('assets/frontend/img/1.webp') }}" alt="img">
                        </div>
                        <div class="con_box">
                            <h2>Discover how we transform leadership into influence</h2>
                            <a href="#enquiry">More About Us <i class="icon-right-arrow-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="link_box_contents style_two">
                    <div class="link_content_bx">
                        <div class="con_box">
                            <h2>Why India’s CXOs choose Mirashka</h2>
                            <a href="https://calendly.com/elevateonemedia/30min">Get Appointment <i
                                    class="icon-right-arrow-long"></i></a>
                        </div>
                        <div class="image_box">
                            <img src="{{ asset('assets/frontend/img/2.webp') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->
</section>
<!---about us  --->




@endsection
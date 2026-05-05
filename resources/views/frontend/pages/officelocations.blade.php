@extends('frontend.layouts.app')

@section('content')
<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <div class="simpleParallax"><img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Office Locations </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Office Locations </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----header----->


<section class="process-section">
    <div class="pd_top_60"></div>
    <div class="auto-container">
        <div class="row gutter_30px">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pd_right_30">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections">
                        <div class="title">Connect With Our Global Offices</div>
                        <p>We're strategically located to serve clients across time zones. Reach out to our team for inquiries, partnerships, or support.</p>
                    </div>
                    <div class="pd_bottom_20"></div>
                </div>

                <div class="icon_box_all style_five">
                    <div class="icon_content">
                        <div class="icon">
                            <span class="icon-support"></span>
                        </div>
                        <small>01</small>
                        <div class="text_box">
                            <h2>India Operations</h2>
                            <p>Headquarters serving South Asian markets and global coordination.</p>
                        </div>
                        <div class="hover_content">
                            <div class="content">
                                <div class="inner">
                                    <p>Noida, India | GMT+5:30 | Monday–Friday, 9:30 AM – 6:30 PM</p>
                                    <a href="#" class="read_more">Read More <span class="icon-right-arrow-long"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pd_left_30">
                <div class="icon_box_all style_five">
                    <div class="icon_content">
                        <div class="icon">
                            <span class="icon-united"></span>
                        </div>
                        <small>02</small>
                        <div class="text_box">
                            <h2>Middle East Hub</h2>
                            <p>Serving GCC markets and emerging business opportunities.</p>
                        </div>
                        <div class="hover_content">
                            <div class="content">
                                <div class="inner">
                                    <p>Dubai, UAE | GMT+4 | Sunday–Thursday, 9:00 AM – 6:00 PM</p>
                                    <a href="#" class="read_more">Read More <span class="icon-right-arrow-long"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd_bottom_50"></div>
                <div class="icon_box_all style_five">
                    <div class="icon_content">
                        <div class="icon">
                            <span class="icon-solution"></span>
                        </div>
                        <small>03</small>
                        <div class="text_box">
                            <h2>Southeast Asia</h2>
                            <p>Expanding presence across ASEAN markets.</p>
                        </div>
                        <div class="hover_content">
                            <div class="content">
                                <div class="inner">
                                    <p>Singapore | GMT+8 | Monday–Friday, 9:00 AM – 6:00 PM</p>
                                    <a href="#" class="read_more">Read More <span class="icon-right-arrow-long"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

<section class="video-section">
    <div class="container-fluid pd_zero">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 overflow-hidden pd_zero bg_op_1 rounded_top_right_30 rounded_bottom_right_30"
                style="background: url('{{ asset('assets/frontend/images/about/about-2.jpg') }}');">
                <div class="pd_top_240"></div>
                <div class="pd_top_60"></div>
                <div class="text-center">
                    <div class="video_box">
                        <a href="https://www.youtube.com/71EZb94AS1k" class="lightbox-image"><i class="icon-play"></i></a>
                    </div>
                </div>
                <div class="pd_bottom_240"></div>
                <div class="pd_bottom_50"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pd_zero pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15">
                <div class="pd_top_110"></div>
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections">
                        <div class="before_title">Global Reach</div>
                        <div class="title">Our Presence Worldwide</div>
                        <p>With strategic partnerships across continents, we deliver localized expertise with global perspective.</p>
                    </div>
                </div>
                <div class="pd_bottom_5"></div>
                <div class="row align-items-center gutter_25px">
                    <div class="col-lg-7 col-md-12">
                        <div class="progress_bar">
                            <h2>Client Satisfaction <span>98%</span></h2>
                            <div class="bar">
                                <div class="bar-inner count-bar counted" data-percent="93%"></div>
                            </div>
                        </div>
                        <div class="pd_bottom_15"></div>
                        <div class="progress_bar">
                            <h2>Project Success <span>95%</span></h2>
                            <div class="bar">
                                <div class="bar-inner count-bar counted" data-percent="83%"></div>
                            </div>
                        </div>
                        <div class="pd_bottom_15"></div>
                        <div class="progress_bar">
                            <h2>Client Retention <span>92%</span></h2>
                            <div class="bar">
                                <div class="bar-inner count-bar counted" data-percent="99%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <img src="{{ asset('assets/frontend/images/blog/blog-image-8.jpg') }}"
                            class="img-fluid object-fit-cover-center height_200px rounded_radius" alt="img" />
                    </div>
                </div>
                <div class="pd_bottom_25"></div>
                <div class="row align-items-center gutter_25px">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="theme_btn_all color_one">
                            <a href="#" class="theme-btn two">Read More</a>
                        </div>
                        <div class="pd_bottom_20"></div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="authour_box_content">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/images/sign.png') }}" class="img-fluid sign_image" alt="authour Image">
                            </div>
                            <div class="text">
                                <h6>Rajiv Mehta, <span>Founder & CEO</span></h6>
                            </div>
                        </div>
                        <div class="pd_bottom_20"></div>
                    </div>
                </div>
                <div class="pd_bottom_90"></div>
            </div>
        </div>
    </div>
</section>

<!--contact-->
<section class="blog-section pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15">
    <div class="pd_top_120"></div>
    <div class="inner_section bg_op_1 rounded_radius" style="background: url('{{ asset('assets/frontend/images/contact-hm-15.jpg') }}');">
        <div class="pd_top_120"></div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8 col-sm-12 m-auto">
                    <div class="title_all_box style_one text-center light_color">
                        <div class="title_sections">
                            <div class="before_title">
                                Get In Touch
                            </div>
                            <div class="title">
                                Let's Start a Conversation <br> Today
                            </div>
                        </div>
                    </div>
                    <div class="pd_bottom_20"></div>
                    <div class="theme_btn_all text-center color_one">
                        <a href="#" class="theme-btn one">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_120"></div>
    </div>
</section>

<!---contact end-->



<!--===============spacing==============-->
<div class="pd_top_90"></div>
<!--===============spacing==============-->



@endsection
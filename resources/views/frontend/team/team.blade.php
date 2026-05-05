@extends('frontend.layouts.app')


@section('content')
<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets/frontend/img/page/team-banner.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">Our Team</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="image-section-two">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                <div class="image_boxes style_three">
                    <img src="{{ asset('assets/frontend/img/page/our-team.jpeg') }}" class="background_image" alt="image">

                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections ">
                        <div class="before_title"> Our Team </div>
                        <h2>Meet the Minds Behind ElevateOneMedia</h2>

                        <p>
                            At Elevate One Media, our strength lies in a team of creative thinkers, strategists,
                            and digital experts who are passionate about building impactful brand stories.
                            We believe that every brand has a unique voice, and our mission is to amplify it
                            through innovative ideas, strategic planning, and result-oriented execution.

                            By combining creativity with data-driven insights, we craft campaigns that not only
                            capture attention but also drive meaningful engagement and measurable growth.



                        </p>
                    </div>
                </div>

                <div class="creote-themebtns">
                    <div class="theme_btn_all color_one">
                        <a href="{{ url('case-studies') }}" target="_blank" rel="nofollow" class="theme-btn one"> View All Work </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_90"></div>
    <!--===============spacing==============-->
</section>

<section class="team-section bg_light_1">
    <div class="pd_top_90"></div>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">Dedicated Team</div>
                        <h2>Professional Individuals</h2>
                    </div>
                    <div class="pd_bottom_20"></div>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($teams as $team)
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_one">
                    <div class="team_box_outer">

                        {{-- IMAGE --}}
                        <div class="member_image">
                            <img src="{{ imageUrl($team->image) }}"
                                alt="team image">
                        </div>

                        <div class="about_member">

                            {{-- SOCIAL --}}
                            <div class="share_media">
                                <ul class="first">
                                    <li class="text">Share</li>
                                    <li><i class="fa fa-share-alt"></i></li>
                                </ul>

                                <ul>
                                    <li class="shar_alt"><i class="fa fa-share-alt"></i></li>

                                    @if($team->social)

                                    @if($team->social->facebook)
                                    <li>
                                        <a href="{{ $team->social->facebook }}" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    @endif

                                    @if($team->social->twitter)
                                    <li>
                                        <a href="{{ $team->social->twitter }}" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    @endif

                                    @if($team->social->linkedin)
                                    <li>
                                        <a href="{{ $team->social->linkedin }}" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    @endif

                                    @if($team->social->instagram)
                                    <li>
                                        <a href="{{ $team->social->instagram }}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    @endif

                                    @endif
                                </ul>
                            </div>

                            {{-- DETAILS --}}
                            <div class="authour_details">
                                <span>{{ $team->designation }}</span>
                                <h6>{{ $team->name }}</h6>

                                <div class="button_view">
                                    <a href="{{ route('teamsingle', $team->slug) }}"
                                        target="_blank"
                                        rel="nofollow"
                                        class="theme-btn one">
                                        View Profile
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

    <div class="pd_bottom_70"></div>
</section>



@endsection
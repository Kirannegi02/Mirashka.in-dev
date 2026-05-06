@extends('frontend.layouts.app')

@section('content')

   <style type="text/css">
      .theme-btn.two {

         color: #ffffff;
         border: 1px solid #ffffff;

      }

      .single_banner.style_one .slider_content h1 {
         font-size: 38px;
         line-height: 50px;
         font-weight: 800;
         margin-bottom: 20px;
      }

      .single_banner.style_one {
         padding-top: 50px;

      }
      .custom_black_overlay {
   position: relative;
   z-index: 1;
}

.custom_black_overlay::before {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background: rgba(0, 0, 0, 0.8); /* 80% black */
   z-index: -1;
}
   </style>
   <!---sliders-->
   <section class="single_banner style_one bg_op_1  custom_black_overlay"
      style="background-image: url(assets/frontend/img/Whatwedo/we-build-influence-banner.webp);">
      <div class="container">
         <div class="row d-flex align-items-center">

            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

               <div class="pd_top_80"></div>

               <div class="slider_content light_color">

                  <!-- TOP LABEL -->
                  <h6>Mirashka</h6>

                  <div class="pd_bottom_10"></div>

                  <!-- UPDATED HEADLINE -->
                  <h1 class="color_white">
                     We Build Influence, Visibility, and Reputation That Moves Markets
                  </h1>

                  <!-- UPDATED SUBHEADLINE -->
                  <p class="description color_white">
                     Mirashka partners with founders, CXOs, corporates, and high-visibility personalities to
                     transform leadership narratives into measurable media impact, thought leadership, recognition, and
                     market trust.
                  </p>


                  <!-- CTA + VIDEO -->
                  <ul class="d_inline_block">

                     <!-- CTA 1 -->
                     <li>
                        <div class="theme_btn_all color_two">
                           <a href="tel:08796927200" class="theme-btn one primary-color-two">
                              Book a Discovery Call
                           </a>
                        </div>
                     </li>

                     <!-- CTA 2 -->
                     <li>
                        <div class="theme_btn_all">
                           <a href="#servicescustom" class="theme-btn two">
                              Explore Our Services
                           </a>
                        </div>
                     </li>

                     <!-- VIDEO -->
                     <li class="vd_bx">
                        <div class="video_box">
                           <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                              <i class="icon-play"></i>
                           </a>
                        </div>
                     </li>

                  </ul>

               </div>

               <div class="pd_bottom_80"></div>

            </div>

            <!-- RIGHT IMAGE -->
            <!-- <div class="col-lg-4 hidden-md image_column">
               <div class="slider_image margin_extra">
                  <img src="{{ asset('assets/frontend/images/cal-img.png') }}" class="img-fluid" alt="slider image">
               </div>
            </div> -->

         </div>
      </div>
   </section>
   <!---sliders-->
   <section class="image-section-two">
      <!--===============spacing==============-->
      <div class="pd_top_90"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
               <div class="image_boxes style_three">
                  <img src="{{ asset('assets/frontend/img/Whatwedo/from-visibility-to-authority.webp') }}" class="background_image" alt="image">

               </div>
            </div>
            <div class="col-xl-6 col-lg-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections ">
                     <div class="before_title"> Mirashka </div>
                     <h2>From Visibility to Authority. From Presence to Impact</h2>

                     <p class="short_desc pt-3">
                        Mirashka is built for leaders and brands that want more than publicity. We design
                        communication and visibility systems that strengthen authority, sharpen perception, and build
                        long-term reputation capital. Whether the objective is media presence, digital thought leadership,
                        podcast-led influence, awards positioning, investor visibility, or regional communication
                        relevance, our role is to convert attention into trust and trust into strategic advantage.</p>
                  </div>
               </div>


            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_90"></div>
      <!--===============spacing==============-->
   </section>



   <section class="service-section bg_op_1 position-relative"
      style="background: url('{{ asset('assets/frontend/images/home-13-service-bg.jpg') }}');">

      <div class="pd_top_90"></div>

      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 m-auto">

               <!-- TITLE AREA -->
               <div class="title_all_box style_six text-center light_color">
                  <div class="title_sections">

                     <!-- SMALL TITLE -->
                     <div class="before_title">
                        <span class="icon-briefcase icon"></span>
                        WHO WE WORK WITH
                     </div>

                     <!-- MAIN HEADING -->
                     <div class="title">
                        Built for Leaders, Brands, and Public-Facing Growth Stories
                     </div>

                     <!-- BODY COPY -->
                     <p class="description_text">
                        Our work is especially relevant for founders building market presence, CXOs shaping external
                        credibility, business owners entering new visibility stages, celebrities and influencers building
                        strategic authority, investor-facing leaders strengthening confidence, and brands that need a
                        sharper public narrative.
                     </p>

                  </div>

                  <div class="pd_bottom_20"></div>
               </div>

            </div>
         </div>

         <!-- SERVICE CARDS -->
         <div class="row">
            <div class="col-lg-12">
               <div class="service_all_styles carousel owl_new_one">

                  <div class="owl_nav_none owl_dots_none owl_type_two theme_carousel owl-theme owl-carousel"
                     data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "3" } , "1000":{ "items" : "3" }}}'>

                     <!-- FOUNDERS -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/founders-&-entrepreneurs.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-user icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Founders & Entrepreneurs</a>
                           </h2>
                           <p>Build leadership authority, shape perception, and create strong market visibility.</p>

                        </div>
                     </div>

                     <!-- CXOs -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/cxos-&-senior-leadership.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-briefcase icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">CXOs & Senior Leadership</a>
                           </h2>
                           <p>Strengthen trust, influence stakeholders, and elevate executive presence.</p>

                        </div>
                     </div>

                     <!-- BUSINESS OWNERS -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/business-owners-&-promoters.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-thumbs-up icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Business Owners & Promoters</a>
                           </h2>
                           <p>Sharpen positioning, enhance credibility, and build long-term brand trust.</p>

                        </div>
                     </div>

                     <!-- CELEBRITIES -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/celebrities-&-influencers.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-star icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Celebrities & Influencers</a>
                           </h2>
                           <p>Convert visibility into a powerful, reputation-led personal brand.</p>

                        </div>
                     </div>

                     <!-- CORPORATES -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/corporates-&-institutions.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-building icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Corporates & Institutions</a>
                           </h2>
                           <p>Align communication with growth, trust, and stakeholder perception.</p>

                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="pd_bottom_90"></div>

      <!-- SHAPE KEEP SAME -->
      <div class="position_absolute curve_shape_bottom_1">
         <!-- SVG remains unchanged -->
      </div>

   </section>


   <!---service--->
   <section class="service-section" id="servicescustom">

      <div class="pd_top_80"></div>

      <div class="container">
         <div class="title_all_box style_seven text-center dark_color">

            <div class="title">One Reputation-Led Approach</div>
            <div class="before_title">OUR SERVICE UNIVERSE</div>
            <p> Our service architecture is designed to cover the full journey of modern visibility and influence.
               Each category solves a different part of the reputation, authority, and leadership-presence puzzle.</p>
            </p>
            <div class="pd_bottom_40"></div>
         </div>

         <!-- SERVICES GRID -->
         <div class="row">

            <!-- 1 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/executive-influence-media-authority.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-megaphone"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="{{ url('/executive-in-fluence-media-authority') }}">Executive Influence & Media Authority</a>
                     </h2>
                     <p class="short_desc">
                        Strategic media visibility, executive profiling, thought leadership placements, and
                        authority-building earned media.
                     </p>
                     <a class="read_more" href="#">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 2 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/cxo-digital-presence-&-thought-leadership.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-user"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">CXO Digital Presence & Thought Leadership</a>
                     </h2>
                     <p class="short_desc">
                        LinkedIn authority, influence coaching, leadership media training, and digital thought-leadership
                        strategy.
                     </p>
                     <a class="read_more" href="{{ url('/digital-presence-thought-leadership') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 3 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/voice-of-leadership-podcast-&-audio-ip.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-mic"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">Voice of Leadership – Podcast & Audio IP</a>
                     </h2>
                     <p class="short_desc">
                        Podcast concept development, executive audio positioning, editorial architecture, and voice-led
                        thought leadership platforms.
                     </p>
                     <a class="read_more" href="{{ url('/voice-of-leadership-podcast-audioip') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 4 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/reputation-capital-&-awards-positioning.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <!-- FIXED ICON -->
                        <span class="icon icon-star"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">Reputation Capital & Awards Positioning</a>
                     </h2>
                     <p class="short_desc">
                        Awards consulting, recognition strategy, founder and CXO positioning, and reputation-strengthening
                        external validation.
                     </p>
                     <a class="read_more" href="{{ url('/reputation-capital-awards-positioning') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 5 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/cxo-presence-&-industry-visibility.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <!-- FIXED ICON -->
                        <span class="icon icon-briefcase"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="{{ url('/cxo-presence-industry-visibility') }}">CXO Presence & Industry Visibility</a>
                     </h2>
                     <p class="short_desc">
                        Speaking engagements, investor visibility, capital markets communication, and strategic stage-led
                        leadership presence.
                     </p>
                     <a class="read_more" href="#">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 6 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/regional-impact-communication.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <!-- FIXED ICON -->
                        <span class="icon icon-world"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">Regional Impact Communication</a>
                     </h2>
                     <p class="short_desc">
                        Localised media strategy, regional relevance, multi-market communication, and geography-sensitive
                        brand trust building.
                     </p>
                     <a class="read_more" href="{{ url('/regional-impact-communication') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_80"></div>

   </section>


   <section class="about-section bg_light_1">

      <div class="pd_top_80"></div>

      <div class="container">
         <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">

                     <!-- SMALL TITLE -->
                     <div class="before_title">THE PROBLEM WE SOLVE</div>

                     <!-- MAIN HEADING -->
                     <h2 class="title">
                        Why Leaders and Brands Usually Come to Us
                     </h2>

                     <!-- BODY INTRO -->
                     <p>
                        Most clients do not come because they need PR. They come because something more strategic is
                        happening.
                     </p>

                     <!-- LIST -->
                     <div class="list_item_box style_two style_list">
                        <ul class="list-inline">

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are entering a bigger market
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are becoming more visible
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are preparing for funding, partnerships, expansion, or recognition
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are already doing meaningful work, but the market does not yet see them with the
                                 seriousness they deserve
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are present in fragments, but not yet positioned with clarity
                              </small>
                           </li>

                        </ul>
                     </div>

                  </div>
               </div>

               <div class="pd_bottom_10"></div>



            </div>

            <!-- RIGHT IMAGES -->
            <div class="col-xl-6 col-lg-10 col-md-12">
               <div class="image_boxes style_five">

                  <div class="image_box one">
                     <img src="{{ asset('assets/frontend/img/Whatwedo/image_1.webp') }}" class="img-fluid" alt="img">
                  </div>

                  <div class="image_box two">
                     <img src="{{ asset('assets/frontend/img/Whatwedo/image_2.webp') }}" class="img-fluid two" alt="img">
                  </div>

               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_80"></div>

   </section>

   <section class="process-section" id="industries">

      <div class="pd_top_60"></div>

      <div class="container">

         <!-- TITLE -->
         <div class="row">
            <div class="col-lg-7 m-auto">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">

                     <div class="before_title">WHAT CLIENTS GET</div>

                     <div class="title">
                        What Mirashka Helps You Build
                     </div>

                     <!-- SUBHEADLINE -->
                     <div class="small_text_sub">
                        Our work is designed to create business-grade visibility outcomes, not surface-level exposure.
                     </div>

                     <!-- BODY COPY -->
                     <p class="mt-3">
                        Every engagement is built to strengthen how you are perceived, remembered, and trusted in the
                        market.
                        We focus on long-term reputation, not short-term visibility spikes.
                     </p>

                  </div>

                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>

         <!-- VALUE BLOCKS -->
         <div class="row">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-star"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Authority</a></h2>
                     <p>We help leadership and brands look more credible, more serious, and more category-relevant.</p>
                  </div>
               </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-checked"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Trust</a></h2>
                     <p>We strengthen how customers, investors, partners, and the wider market perceive you.</p>
                  </div>
               </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-eye"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Recall</a></h2>
                     <p>Your name, story, and leadership identity stay in the minds of the people who matter.</p>
                  </div>
               </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-briefcase"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Reputation Capital</a></h2>
                     <p>We create assets that generate value across PR, sales, investor trust, and public perception.</p>
                  </div>
               </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-world"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Influence</a></h2>
                     <p>Enter the conversations, platforms, and ecosystems where real market influence is built.</p>
                  </div>
               </div>
            </div>

            <!-- 6 (NEW - BALANCE CARD) -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-settings"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Strategic Positioning</a></h2>
                     <p>We align your narrative, visibility, and messaging into a clear, powerful market position.</p>
                  </div>
               </div>
            </div>

         </div>

      </div>

      <div class="pd_bottom_60"></div>

   </section>


   <section class="service-section bg_light_1" id="services">

      <div class="pd_top_80"></div>

      <div class="container">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">
                     <div class="before_title">SECTORS WE UNDERSTAND</div>
                     <h2>Strategic Communication Across High-Impact Sectors</h2>
                     <p>Different industries need different media narratives. We tailor story positioning to sector
                        maturity, audience intent, and stakeholder expectations.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="theme_btn_all color_one text-md-end">
                  <a href="{{ route('strategicmediaplacements') }}" class="theme-btn one">Explore All Services</a>
                  <div class="pd_bottom_30"></div>
               </div>
            </div>

            <div class="pd_bottom_20"></div>
         </div>
      </div>

      <div class="row">
         <div class="col-xxl-1 hidden-xl"></div>
         <div class="col-xxl-10 col-xl-12">

            <div class="service_caro_section carousel style_one">
               <div class="swiper-container" data-swiper='{
                  "autoplay": {"delay": 6000},
                  "freeMode": true,
                  "loop": true,
                  "speed": 1000,
                  "slidesPerView": 4,
                  "breakpoints": {
                  "1200": {"slidesPerView": 4},
                  "1024": {"slidesPerView": 4},
                  "768": {"slidesPerView": 3},
                  "576": {"slidesPerView": 1},
                  "0": {"slidesPerView": 1}
                  }
               }'>

                  <div class="swiper-wrapper">

                     <!-- 1 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/executive.png') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/Executive.svg') }}"></span>
         </div>
         <h2 class="title_service"><a href="#">Enterprise Tech & B2B SaaS</a></h2>
         <p class="text-white">
            Positioning products, platforms, and founders through strategic storytelling across high-trust business and technology media platforms globally.
         </p>
      </div>
   </div>
</div>

<!-- 2 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/ai-deep-tech-&-innovation.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/CXO-Digital.svg') }}"></span>
         </div>
         <h2 class="title_service">
            <a href="{{ route('aideeptech') }}">AI, Deep Tech & Innovation</a>
         </h2>
         <p class="text-white">
            Translating complex technologies into clear, compelling narratives that media, investors, and stakeholders can understand and engage with effectively.
         </p>
      </div>
   </div>
</div>

<!-- 3 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/health-&-wellness.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/Voice.svg') }}"></span>
         </div>
         <h2 class="title_service"><a href="#">Health & Wellness</a></h2>
         <p class="text-white">
            Building expert-led credibility through trusted storytelling that connects with audiences while reinforcing long-term value, care, and impact.
         </p>
      </div>
   </div>
</div>

<!-- 4 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/BFSI-&-fintech.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/Reputation.svg') }}"></span>
         </div>
         <h2 class="title_service">
            <a href="{{ route('bfsifintech') }}">BFSI & Fintech</a>
         </h2>
         <p class="text-white">
            Driving trust through consistent communication, leadership visibility, and credibility-focused narratives across evolving financial and regulatory ecosystems.
         </p>
      </div>
   </div>
</div>

<!-- 5 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/luxury-&-premium-brands.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/CXO.svg') }}"></span>
         </div>
         <h2 class="title_service">
            <a href="{{ route('luxurybrands') }}">Luxury & Premium Brands</a>
         </h2>
         <p class="text-white">
            Crafting aspirational brand narratives that enhance perception, desirability, and visibility while maintaining exclusivity and strong market positioning.
         </p>
      </div>
   </div>
</div>

                  </div>

                  <div class="p_pagination">
                     <div class="swiper-pagination"></div>
                  </div>

               </div>
            </div>

         </div>
         <div class="col-xxl-1 hidden-xl"></div>
      </div>

      <div class="pd_bottom_80"></div>

   </section>
   <section class="content-section">

      <div class="pd_top_50"></div>

      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 m-auto">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Service Delivery Methodology</div>
                     <div class="title">From Discovery to Dominance</div>
                     <div class="small_text_sub">
                        A structured, strategic approach that transforms visibility into authority, influence, and
                        long-term market impact.
                     </div>
                  </div>
                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>

         <div class="row">

            <!-- 01 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">01</span>
                     <div class="text_box">
                        <h2><a href="#">Discover</a></h2>
                        <p>We understand your story, business context, visibility gap, and long-term ambition.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 02 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">02</span>
                     <div class="text_box">
                        <h2><a href="#">Diagnose</a></h2>
                        <p>We identify gaps in perception, positioning, communication, and market presence.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 03 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">03</span>
                     <div class="text_box">
                        <h2><a href="#">Strategise</a></h2>
                        <p>We build a roadmap aligned with your audience, category, timing, and business goals.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 04 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">04</span>
                     <div class="text_box">
                        <h2><a href="#">Craft</a></h2>
                        <p>We shape narratives, media assets, and visibility architecture to create real impact.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 05 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">05</span>
                     <div class="text_box">
                        <h2><a href="#">Engage</a></h2>
                        <p>We activate the right media, digital, event, and influence channels.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 06 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">06</span>
                     <div class="text_box">
                        <h2><a href="#">Amplify</a></h2>
                        <p>We extend each visibility outcome across platforms and stakeholder touchpoints.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 07 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">07</span>
                     <div class="text_box">
                        <h2><a href="#">Report & Optimise</a></h2>
                        <p>We continuously refine strategy so visibility builds authority and long-term momentum.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">08</span>
                     <div class="text_box">
                        <h2><a href="#">Sustain & Scale</a></h2>
                        <p>We build continuity through ongoing media momentum, strengthening long-term visibility,
                           authority, and brand recall.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>
   <section class="content-section bg_light_1">

      <div class="pd_top_90"></div>

      <div class="container">
         <div class="row gutter_15px">

            <!-- LEFT IMAGE BLOCK (UNCHANGED DESIGN, UPDATED TEXT) -->
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
               <div class="creote-image-box image-box-overlap">
                  <div class="image_boxes style_eight">
                     <img src="{{ asset('assets/frontend/img/Whatwedo/why.webp') }}"
                        class="img-fluid image_fit height_500px pd_right_30" alt="img">
                     <div class="row no-space">
                        <div class="col-lg-5"></div>
                        <div
                           class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                           style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                           <div class="title_all_box style_one light_color">
                              <div class="title_sections left">
                                 <div class="before_title color_white">Why Mirashka</div>
                                 <p class="color_white">
                                    A reputation-led approach designed for leaders, brands, and high-visibility growth
                                    journeys
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-xl-6 col-lg-12 pd_left_35">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">
                     <div class="before_title">WHY Mirashka</div>
                     <h2 class="title">Why Mirashka Is a Different Kind of Partner</h2>

                  </div>
               </div>

               <!-- LIST START -->
               <div class="list_item_box style_two">
                  <ul class="list-inline">

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We build authority, not noise —</strong> Visibility is never random. We create
                              structured systems that strengthen perception, credibility, and long-term market positioning.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We work at leadership level —</strong> Our thinking is built for founders, CXOs,
                              public figures, and brands where trust, perception, and reputation directly impact growth.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We connect services into one reputation engine —</strong> Media, digital presence,
                              podcasts, awards, speaking, and regional communication work together—not in silos.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We think in business outcomes —</strong> The goal is not coverage alone, but trust,
                              relevance, distinction, and stakeholder action.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We understand premium positioning —</strong> For high-visibility leaders and brands,
                              how you are perceived matters as much as where you appear.
                           </a>
                        </small>
                     </li>

                  </ul>
               </div>
               <!-- LIST END -->

               <div class="pd_bottom_20"></div>

               <div class="theme_btn_all color_one">
                  <a href="{{ route('projectenquiries') }}" class="theme-btn one">
                     Start a Conversation
                  </a>
               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_90"></div>

   </section>
     @include('frontend.layouts.common.sections.clients')
   @include('frontend.layouts.common.sections.casestudies')
    <section class="faqs-section">

      <div class="pd_top_80"></div>

      <div class="container">

         <!-- TITLE -->
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">FAQs</div>
                     <div class="title">Frequently Asked Questions</div>
                     <div class="small_text_sub">Clarity on how we work, who we work with, and what to expect</div>
                  </div>
                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>

         <div class="row">

            <!-- LEFT SIDE (UNCHANGED IMAGES + METRICS) -->
            <div class="col-xl-3 col-lg-6 mb-5">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Client Satisfaction <span>98%</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" style="width: 98%;"></div>
                  </div>
               </div>
            </div>

            <div class="col-xl-3 col-lg-6 mb-5">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Engagement Impact <span>100+</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" style="width: 100%;"></div>
                  </div>
               </div>
            </div>

            <!-- FAQ RIGHT -->
            <div class="col-xl-6 col-lg-12">
               <div class="faq_section type_one">
                  <div class="block_faq">
                     <div class="accordion">
                        <dl>

                           <!-- 1 -->
                           <dt class="faq_header active">
                              <span class="icon-play"></span> Do you only work with CXOs and founders?
                           </dt>
                           <dd class="accordion-content" style="display:block;">
                              <p>
                                 No. We also work with business owners, brands, institutions, public figures, and
                                 high-visibility professionals who need stronger authority and strategic communication.
                              </p>
                           </dd>

                           <!-- 2 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Do clients usually take one service or multiple?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 It depends on the need. Some clients begin with one service, while others engage across
                                 media, digital presence, awards, speaking, and reputation-building together.
                              </p>
                           </dd>

                           <!-- 3 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Is this only for large brands?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 No. It is equally valuable for emerging leaders and growth-stage businesses that need
                                 stronger market credibility.
                              </p>
                           </dd>

                           <!-- 4 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> What makes your approach different from a traditional PR
                              agency?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 Our approach is reputation-led, leadership-centric, and strategy-driven. We focus on how
                                 visibility translates into authority and long-term business relevance.
                              </p>
                           </dd>

                           <!-- 5 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Can this support investor trust, partnerships, or market
                              expansion?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 Yes. Strong communication and visibility often improve stakeholder confidence across
                                 funding, partnerships, and expansion.
                              </p>
                           </dd>

                           <!-- 6 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Can celebrities and influencers also use these services?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 Yes. Especially when the goal is to move from visibility alone to stronger authority,
                                 trust, and long-term positioning.
                              </p>
                           </dd>

                        </dl>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_60"></div>

   </section>
   @include('frontend.layouts.common.sections.success')








@endsection
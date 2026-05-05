@extends('frontend.layouts.app')

@section('content')
<style type="text/css">
   .auto-container, .auto_container {
    max-width: 1400px !important;
}
</style>
   <!----banner---->
   <section class="banner-section bg_op_1"
      style="background-image: url('{{ asset('assets/frontend/img/excutive/banner-1.webp') }}');">
      <!--===============spacing==============-->
      <div class="pd_top_100"></div>
      <!--===============spacing==============-->
      <div class="auto-container">
         <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 col-md-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">
                     <div class="custom-badge">Executive Media Authority</div>

                     <h2 class="title_big text-white">Build Media Authority That Shapes Perception, Trust, and Business
                        Relevance</h2>
                     <p class="text-white">Your brand does not become influential simply because it is visible. It becomes
                        influential when the right people see it, understand it, and begin to trust it. Elevate One Media
                        helps founders, CXOs, business leaders, and public-facing personalities build executive influence
                        through premium media authority, thought-led positioning, and strategic visibility that creates
                        long-term reputational value.</p>

                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
               <div class="slider_row">
                  <div class="swiper-container" data-swiper='{
         "loop": true,
         "autoplay": { "delay": 0, "reverseDirection": true, "disableOnInteraction": false },
         "speed": 3000,
         "centeredSlides": false,
         "slidesPerView": 6,
         "spaceBetween": 20,
         "freeMode": true,
         "freeModeMomentum": false,
         "breakpoints": {
           "1200": { "slidesPerView": 6 },
           "1024": { "slidesPerView": 5 },
           "768":  { "slidesPerView": 3 },
           "576":  { "slidesPerView": 3 },
           "0":    { "slidesPerView": 4 }
         }
       }'>
                     <div class="swiper-wrapper">
                        <!-- repeat same swiper-slides or different set -->
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/11.png') }}"
                                 alt="clients-logo-1" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/22.png') }}"
                                 alt="clients-logo-2" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/23.png') }}"
                                 alt="clients-logo-3" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/24.png') }}"
                                 alt="clients-logo-1" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/25.png') }}"
                                 alt="clients-logo-2" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/26.png') }}"
                                 alt="clients-logo-3" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/27.png') }}"
                                 alt="clients-logo-1" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/28.png') }}"
                                 alt="clients-logo-2" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/29.png') }}"
                                 alt="clients-logo-3" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/30.png') }}"
                                 alt="clients-logo-1" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/31.png') }}"
                                 alt="clients-logo-2" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/32.png') }}"
                                 alt="clients-logo-3" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/33.png') }}"
                                 alt="clients-logo-1" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/34.png') }}"
                                 alt="clients-logo-2" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/35.png') }}"
                                 alt="clients-logo-3" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/36.png') }}"
                                 alt="clients-logo-1" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/37.png') }}"
                                 alt="clients-logo-2" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/38.png') }}"
                                 alt="clients-logo-3" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/39.png') }}"
                                 alt="clients-logo-1" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/40.png') }}"
                                 alt="clients-logo-2" class="img-fluid" />
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="image"><img src="{{ asset('assets/frontend/img/client/41.png') }}"
                                 alt="clients-logo-3" class="img-fluid" />
                           </div>
                        </div>

                        <!-- ... add all your other logos ... -->
                     </div>
                  </div>
               </div>



               <!--===============spacing==============-->
               <div class="pd_bottom_40"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-1 hidden-lg"></div>
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="contact_form_box_all type_five">
                  <div class="contact_form_box_inner simple_form">
                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <div class="before_title">We here to help you</div>
                           <h6 class="font_24">Book Appointment</h6>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_10"></div>
                     <!--===============spacing==============-->
                     @include('frontend.layouts.common.mainform')
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_100"></div>
      <!--===============spacing==============-->
   </section>
   <!----banner end---->
   <!---call to action--->
   <section class="call-to-action">
      <div class="call_to_action style_one">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="left_content">
                     <div class="main_content">

                        <div class="video_box">
                           <a href="#" class="lightbox-image">
                              <i class="fa fa-star"></i> </a>
                        </div>

                        <h6 class="text-black">
                           Strategic Media Positioning
                        </h6>

                        <h1 class="text-black">
                           Visibility Is Powerful. Authority Is Transformational.
                        </h1>

                        <p class="text-black">
                           Media presence matters most when it does more than create attention. It should reinforce
                           leadership credibility, sharpen market perception, and position you as a serious voice in your
                           category. This service category is built for leaders and brands that want to move beyond random
                           coverage and build a media presence that actually supports trust, stature, and growth.
                        </p>

                        <div class="bottom_content">
                           <div class="button_content">
                              <a href="tel:918287938388" class="theme-btn three">
                                 Book a Discovery Call
                                 <i class="icon-right-arrow-long"></i>
                              </a>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!---call to action end--->





   <style type="text/css">
      .service_carousel.style_one .content .icon_box img {
         width: 65px;
      }
   </style>
   <!--service-->
   <section class="service-section bg_light_1" id="services">
      <div class="pd_top_80"></div>

      <div class="container">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">
                     <div class="before_title">What We Do</div>
                     <h2>Integrated PR & Influence Services</h2>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="theme_btn_all color_one text-md-end">
                  <a href="#" target="_blank" rel="nofollow" class="theme-btn one">Explore All Services</a>
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
                  "centeredSlides": false,
                  "slidesPerView": 4,
                  "spaceBetween": 0,
                  "pagination": {"el": ".swiper-pagination","clickable": true},
                  "breakpoints": {
                  "1200": {"slidesPerView": 4},
                  "1024": {"slidesPerView": 4},
                  "768": {"slidesPerView": 3},
                  "576": {"slidesPerView": 1},
                  "0": {"slidesPerView": 1}
                  }
               }'>

                  <div class="swiper-wrapper">

                     <!-- UPDATED -->
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/strategic-media-placements.webp') }}">
                           </div>
                           <div class="content">
                             
                              <h2 class="title_service"><a href="#">Strategic Media Placements</a></h2>
                              <p class="text-white">High-impact placements in credible publications that build authority
                                 and trust.</p>
                           </div>
                        </div>
                     </div>

                     <!-- UPDATED -->
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/executive-profiling.webp') }}">
                           </div>
                           <div class="content">
                             
                              <h2 class="title_service"><a href="#">Executive Profiling</a></h2>
                              <p class="text-white">Strong leadership narratives that position founders and CXOs with
                                 clarity and credibility.</p>
                           </div>
                        </div>
                     </div>

                     <!-- UPDATED -->
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/thought-leadership-placements.webp') }}">
                           </div>
                           <div class="content">
                              
                              <h2 class="title_service"><a href="#">Thought Leadership Placements</a></h2>
                              <p class="text-white">Expert-led articles and insights that establish authority in your
                                 category.</p>
                           </div>
                        </div>
                     </div>

                     <!-- UPDATED -->
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/founder-storytelling.webp') }}">
                           </div>
                           <div class="content">
                              
                              <h2 class="title_service"><a href="#">Founder Storytelling</a></h2>
                              <p class="text-white">Compelling founder journeys crafted to build emotional connection and
                                 trust.</p>
                           </div>
                        </div>
                     </div>

                     <!-- UPDATED -->
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/business-&-sector-media-visibility.webp') }}">
                           </div>
                           <div class="content">
                              
                              <h2 class="title_service"><a href="#">Business & Sector Media Visibility</a></h2>
                              <p class="text-white">Consistent visibility across relevant business and industry media
                                 platforms.</p>
                           </div>
                        </div>
                     </div>

                     <!-- KEEP REST SAME (unchanged services below) -->

                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/reputation-risk-&-crisis-preparedness.webp') }}">
                           </div>
                           <div class="content">
                              
                              <h2 class="title_service"><a href="#">Reputation Risk & Crisis Preparedness</a></h2>
                              <p class="text-white">Speaking Engagements & Events</p>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/capital-markets-communication.webp') }}">
                           </div>
                           <div class="content">
                              
                              <h2 class="title_service"><a href="#">Capital Markets Communication</a></h2>
                              <p class="text-white">Investor Visibility</p>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/leadership-media-training.webp') }}">
                           </div>
                           <div class="content">
                              
                              <h2 class="title_service"><a href="#">Leadership Media Training</a></h2>
                              <p class="text-white">Influence Coaching</p>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/excutive/what/regional-impact-communication.webp') }}">
                           </div>
                           <div class="content">
                             
                              <h2 class="title_service"><a href="#">Regional Impact Communication</a></h2>
                              <p class="text-white">Localised Media Strategy</p>
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
   <!--service end-->

   <section class="about-section">
      <div class="pd_top_80"></div>

      <div class="container">
         <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">

                     <div class="before_title">What Strategic Placements Can Achieve</div>
                     <h2 class="title">What Strategic Placements Can Achieve</h2>

                     <p>
                        When done right, media placements do more than create visibility. They shape perception, build
                        credibility, and create sustained authority in the market.
                     </p>

                     <!-- THEME LIST START -->
                     <div class="list_item_box style_two style_list">
                        <ul class="list-inline">

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#">
                                    Strengthen executive presence and brand authority in high-trust environments
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#">
                                    Build trust with investors, clients, and key stakeholders
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#">
                                    Improve recall and position your brand clearly within its category
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#">
                                    Support fundraising, partnerships, and expansion with stronger narratives
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#">
                                    Create high-value media assets usable across website, decks, and sales conversations
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#">
                                    Position founders and leadership as credible voices in their domain
                                 </a>
                              </small>
                           </li>

                        </ul>
                     </div>
                     <!-- THEME LIST END -->

                  </div>
               </div>

               <div class="pd_bottom_10"></div>


            </div>

            <!-- RIGHT IMAGES (UNCHANGED) -->
            <div class="col-xl-6 col-lg-10 col-md-12">
               <div class="image_boxes style_five">
                  <div class="image_box one">
                     <img src="{{ asset('assets/frontend/img/excutive/what-strategic-placements-can-achieve.webp') }}" class="img-fluid" alt="img">
                  </div>
                  <div class="image_box two">
                     <img src="{{ asset('assets/frontend/img/excutive/what-strategic-placements-can-achieve-2.webp') }}" class="img-fluid two" alt="img">
                  </div>
               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_80"></div>
   </section>
   <!----about end---->
   <!---service--->
   <section class="service-section">
      <div class="title-sec bg_dark_3 pd_top_100">
         <div class="container">

            <div class="row gutter_30px">
               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="title_all_box style_one light_color">
                     <div class="title_sections left">
                        <div class="before_title">Outcomes & Business Value</div>
                        <h2>What This Category Helps You Achieve</h2>
                     </div>
                  </div>
               </div>

               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="description_box color_white text-md-end">
                     <p>
                        A media presence that builds credibility, strengthens perception, and supports real business
                        outcomes — not just visibility.
                     </p>
                  </div>
               </div>
            </div>

         </div>

         <div class="pd_bottom_190"></div>
      </div>

      <div class="service-box-wrapper pd_bottom_60 bg_light_1">
         <div class="container">

            <div class="row gutter_30px">

               <!-- CARD 1 -->
               <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_five dark_color mr_top_minus_160">
                     <div class="service_content">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/excutive/outcomes/a-sharper-leadership-profile.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-human-resources"></span>
                           <div class="text_box">
                              <h2><a href="#">A Sharper Leadership Profile</a></h2>
                              <p>Position founders and CXOs with clarity, credibility, and a stronger market presence.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pd_bottom_30"></div>
               </div>

               <!-- CARD 2 -->
               <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                     <div class="service_content">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/excutive/outcomes/stronger-market-credibility.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-audit"></span>
                           <div class="text_box">
                              <h2><a href="#">Stronger Market Credibility</a></h2>
                              <p>Build trust with customers, investors, partners, and key stakeholders.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pd_bottom_30"></div>
               </div>

               <!-- CARD 3 -->
               <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                     <div class="service_content">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/excutive/outcomes/better-recall-&-market-positioning.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-heartbeat"></span>
                           <div class="text_box">
                              <h2><a href="#">Better Recall & Market Positioning</a></h2>
                              <p>Ensure your brand is clearly remembered and associated with the right category.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pd_bottom_30"></div>
               </div>

            </div>

         </div>
      </div>
   </section>


   <!---service end--->


   <section class="content-section ">

      <div class="pd_top_90"></div>

      <div class="container">
         <div class="row gutter_15px">

            <!-- LEFT IMAGE BLOCK (UNCHANGED) -->
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
               <div class="creote-image-box image-box-overlap">
                  <div class="image_boxes style_eight">
                     <img src="{{ asset('assets/frontend/images/banner-four-bg.jpg') }}"
                        class="img-fluid image_fit height_500px pd_right_30" alt="img">
                     <div class="row no-space">
                        <div class="col-lg-5"></div>
                        <div
                           class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                           style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                           <div class="title_all_box style_one light_color">
                              <div class="title_sections left">
                                 <p class="color_white">We build authority that drives real business outcomes</p>
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
                     <div class="before_title">Why Elevate One Media</div>
                     <h2 class="title">Why Elevate One Media Is the Right Partner</h2>
                     <p>
                        We do not chase visibility for optics. We build authority for impact.
                     </p>
                  </div>
               </div>

               <!-- LIST START -->
               <div class="list_item_box style_two">
                  <ul class="list-inline">

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              We work with leadership seriousness, not generic PR packaging
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              We combine media, executive positioning, and reputation thinking into one aligned system
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              We understand how to make a founder, CXO, or brand look not just present, but powerful
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              We focus on credibility, clarity, and long-term perception—not short-term visibility spikes
                           </a>
                        </small>
                     </li>

                  </ul>
               </div>
               <!-- LIST END -->

               <div class="pd_bottom_20"></div>


            </div>

         </div>
      </div>

      <div class="pd_bottom_90"></div>

   </section>


   <section class="project-section  bg_light_1" id="Case">
      <div class="pd_top_40"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Proven Impact</div>
                     <h2>Our&amp; Case Studies </h2>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>

            </div>
         </div>
         <div class="project_all filt_style_eight filter_enabled">
            <div class="row">
               <div class="col-lg-12">
                  <div class="fliter_group" style="text-align:center!important;">
                     <ul class="project_filter dark clearfix">
                        <li data-filter="*" class="current">View All</li>
                        <li data-filter=".project_category-leadership">Leadership</li>
                        <li data-filter=".project_category-culture">Culture</li>
                        <li data-filter=".project_category-corporate">Corporate</li>
                        <li data-filter=".project_category-branding">Branding</li>
                        <li data-filter=".project_category-infrastructure">Infrastructure</li>
                        <li data-filter=".project_category-entertainment">Entertainment</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="project_container clearfix">
               <div class="row clearfix">

                  <!-- Case Study 1 -->
                  <div
                     class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 project_category-leadership">
                     <div class="project_post style_eight">
                        <div class="inner_box">
                           <div class="image_box">
                              <img src="{{ asset('assets/frontend/img/Manas-Talukdar.jpg') }}" alt="img">
                              <a data-fancybox="gallery" href="assets/img/Manas-Talukdar.jpg">
                                 <span class="icon-plus zoom_icon"></span>
                              </a>
                           </div>
                           <div class="content_box">
                              <h2 class="title_pro">
                                 <a href="#" rel="bookmark">Positioning Shri Amitava Mukherjee, CMD, NMDC as a Thought
                                    Leader</a>
                              </h2>
                              <p>leadership</p>
                              <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Case Study 2 -->
                  <div
                     class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 project_category-culture">
                     <div class="project_post style_eight">
                        <div class="inner_box">
                           <div class="image_box">
                              <img src="{{ asset('assets/frontend/img/VR.jpg') }}" alt="img">
                              <a data-fancybox="gallery" href="assets/img/VR.jpg">
                                 <span class="icon-plus zoom_icon"></span>
                              </a>
                           </div>
                           <div class="content_box">
                              <h2 class="title_pro">
                                 <a href="#" rel="bookmark">VR Mall Art Festivals: A Fine Balance of Culture and
                                    Community</a>
                              </h2>
                              <p>culture</p>
                              <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Case Study 3 -->
                  <div
                     class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 project_category-corporate">
                     <div class="project_post style_eight">
                        <div class="inner_box">
                           <div class="image_box">
                              <img src="{{ asset('assets/frontend/img/Servokon-PR.jpg') }}" alt="img">
                              <a data-fancybox="gallery" href="assets/img/Servokon-PR.jpg">
                                 <span class="icon-plus zoom_icon"></span>
                              </a>
                           </div>
                           <div class="content_box">
                              <h2 class="title_pro">
                                 <a href="#" rel="bookmark">Servokon: Building IPO-Readiness & Industry Credibility</a>
                              </h2>
                              <p>corporate</p>
                              <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Case Study 4 -->
                  <div
                     class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 project_category-branding">
                     <div class="project_post style_eight">
                        <div class="inner_box">
                           <div class="image_box">
                              <img src="{{ asset('assets/frontend/img/Tanishq.jpg') }}" alt="img">
                              <a data-fancybox="gallery" href="assets/img/Tanishq.jpg">
                                 <span class="icon-plus zoom_icon"></span>
                              </a>
                           </div>
                           <div class="content_box">
                              <h2 class="title_pro">
                                 <a href="#" rel="bookmark">Tanishq: Immersive Jewellery Storytelling through Tech</a>
                              </h2>
                              <p>branding</p>
                              <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Case Study 5 -->
                  <div
                     class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 project_category-infrastructure">
                     <div class="project_post style_eight">
                        <div class="inner_box">
                           <div class="image_box">
                              <img src="{{ asset('assets/frontend/img/Raksha-Pipes.jpg') }}" alt="img">
                              <a data-fancybox="gallery" href="assets/img/Raksha-Pipes.jpg">
                                 <span class="icon-plus zoom_icon"></span>
                              </a>
                           </div>
                           <div class="content_box">
                              <h2 class="title_pro">
                                 <a href="#" rel="bookmark">Raksha Pipes: Rebranding & National Media Strategy</a>
                              </h2>
                              <p>infrastructure</p>
                              <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Case Study 6 -->
                  <div
                     class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 project_category-entertainment">
                     <div class="project_post style_eight">
                        <div class="inner_box">
                           <div class="image_box">
                              <img src="{{ asset('assets/frontend/img/Scheherazade.jpg') }}" alt="img">
                              <a data-fancybox="gallery" href="assets/img/Scheherazade.jpg">
                                 <span class="icon-plus zoom_icon"></span>
                              </a>
                           </div>
                           <div class="content_box">
                              <h2 class="title_pro">
                                 <a href="#" rel="bookmark">Ice Show by Tatiana Navka: Global Entertainment in
                                    Ahmedabad</a>
                              </h2>
                              <p>entertainment</p>
                              <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
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
   <section class="client_logo_carousel type_one pt-5 pb-5 " id="Clients">
      <div class="title_all_box style_seven text-center dark_color">
         <div class="title_sections">
            <div class="title">Our Clients</div>
            <div class="before_title">Our clients drive our growth, success, and shared milestones</div>
            <div class="small_text_sub">Together, We Build Success</div>
         </div>
         <div class="pd_bottom_40"></div>
      </div>

      <!-- First row: normal direction -->
      <div class="slider_row">
         <div class="swiper-container" data-swiper='{
         "loop": true,
         "autoplay": { "delay": 0, "disableOnInteraction": false },
         "speed": 3000,
         "centeredSlides": false,
         "slidesPerView": 6,
         "spaceBetween": 20,
         "freeMode": true,
         "freeModeMomentum": false,
         "breakpoints": {
           "1200": { "slidesPerView": 6 },
           "1024": { "slidesPerView": 5 },
           "768":  { "slidesPerView": 3 },
           "576":  { "slidesPerView": 3 },
           "0":    { "slidesPerView": 2 }
         }
       }'>
            <div class="swiper-wrapper">
               <!-- repeat your swiper-slides here -->
               <!-- example few items, copy rest -->
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/1.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/2.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/3.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/4.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/5.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/6.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/7.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/8.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/9.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/10.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/11.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/12.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/13.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/14.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/15.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/16.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/17.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/18.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/19.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/20.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/21.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>

               <!-- ... add all your other logos ... -->
            </div>
         </div>
      </div>

      <!-- Second row: reverse direction -->
      <div class="slider_row">
         <div class="swiper-container" data-swiper='{
         "loop": true,
         "autoplay": { "delay": 0, "reverseDirection": true, "disableOnInteraction": false },
         "speed": 3000,
         "centeredSlides": false,
         "slidesPerView": 6,
         "spaceBetween": 20,
         "freeMode": true,
         "freeModeMomentum": false,
         "breakpoints": {
           "1200": { "slidesPerView": 6 },
           "1024": { "slidesPerView": 5 },
           "768":  { "slidesPerView": 3 },
           "576":  { "slidesPerView": 3 },
           "0":    { "slidesPerView": 2 }
         }
       }'>
            <div class="swiper-wrapper">
               <!-- repeat same swiper-slides or different set -->
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/11.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/22.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/23.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/24.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/25.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/26.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/27.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/28.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/29.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/30.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/31.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/32.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/33.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/34.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/35.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/36.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/37.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/38.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/39.png') }}" alt="clients-logo-1"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/40.png') }}" alt="clients-logo-2"
                        class="img-fluid" /></div>
               </div>
               <div class="swiper-slide">
                  <div class="image"><img src="{{ asset('assets/frontend/img/client/41.png') }}" alt="clients-logo-3"
                        class="img-fluid" /></div>
               </div>

               <!-- ... add all your other logos ... -->
            </div>
         </div>
      </div>
   </section>


   <!---Proof of Impact---->

   <!---Proof of Impact end---->

   <section class="testimonial-section pd_left_100 pd_right_100  bg_light_1" id="Impact">
      <div class="pd_top_85"></div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Proof of Impact</div>
                     <h2>Success &amp; Stories</h2>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-11 m-auto">
               <div class="testimonial_sec dark_color style_two">
                  <div class="swiper single_swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="testimonial_box">
                              <div class="authour_image">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/NEC.svg') }}" alt="Prashant Shrivastava">
                              </div>
                              <div class="comment">
                                 “The team’s strategic guidance has strengthened NEC Group’s brand voice across India,
                                 driving real business value.”
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="testimonial_box">
                              <div class="authour_image">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/Liv.svg') }}" alt="Jasmeet Singh">
                              </div>
                              <div class="comment">
                                 “From media coverage to stakeholder engagement, their tailored approach positioned Liv
                                 India Management as an industry leader.”
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="testimonial_box">
                              <div class="authour_image">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/colston-concepts.svg') }}" alt="Anil Ahuja">
                              </div>
                              <div class="comment">
                                 “Their award strategy and brand storytelling helped Colston Concepts gain international
                                 recognition.”
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="testimonial_box">
                              <div class="authour_image">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/IMT-Ghaziabad.svg') }}"
                                    alt="Dr. Atish Chattopadhyay">
                              </div>
                              <div class="comment">
                                 “A data-driven and creative approach enhanced IMT Ghaziabad’s visibility among students
                                 and academia.”
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>
                  </div>
                  <div class="swiper single_swiper_tab">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="auth_details">
                              <h2>Prashant Shrivastava</h2>
                              <span>MD, NEC Group India</span>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="auth_details">
                              <h2>Jasmeet Singh</h2>
                              <span>MD, Liv India Management Group</span>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="auth_details">
                              <h2>Anil Ahuja</h2>
                              <span>CEO, Colston Concepts</span>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="auth_details">
                              <h2>Dr. Atish Chattopadhyay</h2>
                              <span>Director, IMT Ghaziabad</span>
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
   <!-- - faqs --->
   <section class="faqs-section">
      <div class="pd_top_80"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">
                        FAQs
                     </div>
                     <div class="title">Frequently Asked Questions</div>
                     <div class="small_text_sub">Have questions? We’re here to help.</div>
                  </div>
                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax" alt="image">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Client Satisfaction <span>98%</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" data-percent="98%" style="width: 98%;"></div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax" alt="image">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Media Reach <span>120+</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" data-percent="100%" style="width: 100%;"></div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-12">
               <div class="faq_section type_one">
                  <div class="block_faq">
                     <div class="accordion">
                        <dl>
                           <dl>

                              <dt class="faq_header">
                                 <span class="icon-play"></span> Is this only for founders and CXOs?
                              </dt>
                              <dd class="accordion-content hide">
                                 <p>
                                    No. It is also valuable for brands and organisations that need stronger authority
                                    through earned visibility.
                                 </p>
                              </dd>

                              <dt class="faq_header">
                                 <span class="icon-play"></span> Do you only focus on top-tier national media?
                              </dt>
                              <dd class="accordion-content hide">
                                 <p>
                                    No. We focus on the right mix of publications, platforms, and category-specific
                                    visibility.
                                 </p>
                              </dd>

                              <dt class="faq_header">
                                 <span class="icon-play"></span> Can this support investor or partner trust?
                              </dt>
                              <dd class="accordion-content hide">
                                 <p>
                                    Yes. Strong media authority often improves stakeholder confidence before direct
                                    conversations begin.
                                 </p>
                              </dd>

                              <dt class="faq_header">
                                 <span class="icon-play"></span> Is this useful for B2B businesses too?
                              </dt>
                              <dd class="accordion-content hide">
                                 <p>
                                    Very much so. In B2B, authority and trust often matter more than mass awareness.
                                 </p>
                              </dd>

                              <dt class="faq_header active">
                                 <span class="icon-play"></span> How do I get started?
                              </dt>
                              <dd class="accordion-content hide" style="display: block;">
                                 <p>
                                    You can start with a discovery call where we understand your goals and outline the
                                    right media authority approach for you.
                                 </p>
                              </dd>

                           </dl>
                        </dl>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pd_bottom_60"></div>
   </section>
   <!--- faqs end- -->


@endsection
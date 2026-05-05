@extends('frontend.layouts.app')
@section('content')

   <style type="text/css">
      .auto-container,
      .auto_container {
         max-width: 1400px !important;
      }
   </style>



   <!----banner---->
     <section class="banner-section bg_op_1 position-relative overflow-hidden" style="background-image: url('{{ asset('assets/frontend/img/whatwedointernalpages/reputation/banner-1.webp') }}');
      background-size: cover;
      background-position: center;">

      <!-- Overlay -->
      <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.65); z-index:1;"></div>

      <!-- Content -->
      <div class="position-relative" style="z-index:2;">

         <!--===============spacing==============-->
         <div class="pd_top_100"></div>
         <!--===============spacing==============-->
   <div class="auto-container">
      <div class="row align-items-center">
         <div class="col-xl-7 col-lg-6 col-md-12">
            <div class="title_all_box style_one dark_color">
                <div class="title_sections">
                        <div class="custom-badge">REPUTATION CAPITAL & AWARDS POSITIONING</div>
                  <h2 class="title_big text-white">Build Recognition, Credibility, and Reputation Capital That Lasts
</h2>
                   <p class="text-white">Awards and recognitions should do more than decorate a brand. They should validate excellence, sharpen market standing, and strengthen long-term trust. </p>

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
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/11.png') }}" alt="clients-logo-1" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/22.png') }}" alt="clients-logo-2" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/23.png') }}" alt="clients-logo-3" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/24.png') }}" alt="clients-logo-1" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/25.png') }}" alt="clients-logo-2" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/26.png') }}" alt="clients-logo-3" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/27.png') }}" alt="clients-logo-1" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/28.png') }}" alt="clients-logo-2" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/29.png') }}" alt="clients-logo-3" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/30.png') }}" alt="clients-logo-1" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/31.png') }}" alt="clients-logo-2" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/32.png') }}" alt="clients-logo-3" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/33.png') }}" alt="clients-logo-1" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/34.png') }}" alt="clients-logo-2" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/35.png') }}" alt="clients-logo-3" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/36.png') }}" alt="clients-logo-1" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/37.png') }}" alt="clients-logo-2" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/38.png') }}" alt="clients-logo-3" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/39.png') }}" alt="clients-logo-1" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/40.png') }}" alt="clients-logo-2" class="img-fluid" />
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="image"><img src="{{ asset('assets/frontend/img/client/41.png') }}" alt="clients-logo-3" class="img-fluid" />
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
                  <div class="contact_form_shortcode">
                     @include('frontend.layouts.common.mainform')
                  </div>
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
                     <!-- VIDEO -->
                     <div class="video_box">
                        <a href="#" class="lightbox-image">
                        <i class="fa fa-check-circle"></i>
                        </a>
                     </div>
                     <!-- SMALL HEADING -->
                     <h6 class="text-black">
                        Recognition & Credibility
                        <i class="icon-badge-check"></i>
                     </h6>
                     <!-- MAIN TITLE -->
                     <h1 class="text-black">
                        Recognition Should Strengthen Reputation, Not Just Decoration
                     </h1>
                     <!-- DESCRIPTION -->
                     <p class="text-black">
                        Third-party validation matters because markets believe credibility faster when it is externally reinforced.
                        This category is designed to help leaders and brands identify the right recognitions, shape stronger narratives,
                        and build a reputation that looks earned.
                     </p>
                     <!-- CTA BUTTON -->
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
                  <div class="before_title">Reputation Capital</div>
                  <h2>What We Build Under Reputation Capital & Awards Positioning</h2>
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

                  <!-- 1 -->
                  <div class="swiper-slide">
                     <div class="service_carousel style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img src="{{ asset('assets/frontend/img/executive.png') }}">
                        </div>
                        <div class="content">
                           
                           <h2 class="title_service"><a href="#">Awards Consulting</a></h2>
                           <p class="text-white">
                              Strategic guidance to identify, evaluate, and secure the right industry awards that build credibility.
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- 2 -->
                  <div class="swiper-slide">
                     <div class="service_carousel style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img src="{{ asset('assets/frontend/img/cxo.png') }}">
                        </div>
                        <div class="content">
                          
                           <h2 class="title_service"><a href="#">Founder & CXO Recognition Strategy</a></h2>
                           <p class="text-white">
                              Positioning founders and CXOs for high-value recognition across industry and leadership platforms.
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- 3 -->
                  <div class="swiper-slide">
                     <div class="service_carousel style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img src="{{ asset('assets/frontend/img/voice.png') }}">
                        </div>
                        <div class="content">
                           
                           <h2 class="title_service"><a href="#">Submission Narrative Development</a></h2>
                           <p class="text-white">
                              Crafting compelling award narratives and structured submissions that increase selection success.
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- 4 -->
                  <div class="swiper-slide">
                     <div class="service_carousel style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img src="{{ asset('assets/frontend/img/reputation.png') }}">
                        </div>
                        <div class="content">
                          
                           <h2 class="title_service"><a href="#">Reputation Positioning</a></h2>
                           <p class="text-white">
                              Building long-term credibility through strategic visibility and reputation architecture.
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- 5 -->
                  <div class="swiper-slide">
                     <div class="service_carousel style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img src="{{ asset('assets/frontend/img/presence.png') }}">
                        </div>
                        <div class="content">
                           
                           <h2 class="title_service"><a href="#">Reputation Risk & Crisis Preparedness</a></h2>
                           <p class="text-white">
                              Proactive strategies to safeguard leadership reputation during crises and high-risk situations.
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
<!--service end-->
<section class="about-section">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">

         <!-- LEFT CONTENT -->
         <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">

                  <div class="before_title">Why Now</div>

                  <h2 class="title">
                     When Credibility Needs to Be Seen, Not Assumed
                  </h2>

                  <p>
                     This category becomes especially relevant when a brand is scaling, entering new markets, approaching investors,
                     competing in crowded categories, or trying to make leadership more visible and more believable to external stakeholders.
                  </p>

                  <!-- THEME LIST START -->
                  <div class="list_item_box style_two style_list">
                     <ul class="list-inline">

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-eye"></i></span>
                              <a class="nav_link" href="#">
                                 Increase visibility during critical growth and expansion phases
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-eye"></i></span>
                              <a class="nav_link" href="#">
                                 Strengthen investor and stakeholder confidence through public credibility
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-eye"></i></span>
                              <a class="nav_link" href="#">
                                 Improve leadership visibility in competitive and saturated markets
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-eye"></i></span>
                              <a class="nav_link" href="#">
                                 Support fundraising, partnerships, and expansion conversations
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-eye"></i></span>
                              <a class="nav_link" href="#">
                                 Build stronger perception of authority in the industry ecosystem
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-eye"></i></span>
                              <a class="nav_link" href="#">
                                 Position leadership as visible, credible, and trusted voices
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
                  <img src="{{ asset('assets/frontend/img/whatwedointernalpages/reputation/what/image-1.webp') }}" class="img-fluid" alt="img">
               </div>
               <div class="image_box two">
                  <img src="{{ asset('assets/frontend/img/whatwedointernalpages/reputation/what/image-2.webp') }}" class="img-fluid two" alt="img">
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
                     <div class="before_title">Outcomes</div>
                     <h2>What This Category Helps You Achieve</h2>
                  </div>
               </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="description_box color_white text-md-end">
                  <p>
                     Stronger market trust. Better award-fit strategy. Higher-quality recognition opportunities.
                     Improved founder and brand authority. A reputation asset that supports media, sales,
                     partnerships, and hiring.
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
                        <img src="{{ asset('assets/frontend/img/whatwedointernalpages/reputation/outcomes/a-sharper-leadership-profile.webp') }}" class="img-fluid">
                     </div>
                     <div class="content_inner">
                        <span class="icon-human-resources"></span>
                        <div class="text_box">
                           <h2><a href="#">Stronger Market Trust</a></h2>
                           <p>
                              Build deeper credibility with customers, investors, and stakeholders through validated positioning.
                           </p>
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
                        <img src="{{ asset('assets/frontend/img/whatwedointernalpages/reputation/outcomes/better-recall-&-market-positioning.webp') }}" class="img-fluid">
                     </div>
                     <div class="content_inner">
                        <span class="icon-audit"></span>
                        <div class="text_box">
                           <h2><a href="#">Better Award-Fit Strategy</a></h2>
                           <p>
                              Identify and target the most relevant recognition platforms for maximum impact.
                           </p>
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
                        <img src="{{ asset('assets/frontend/img/whatwedointernalpages/reputation/outcomes/stronger-market-credibility.webp') }}" class="img-fluid">
                     </div>
                     <div class="content_inner">
                        <span class="icon-heartbeat"></span>
                        <div class="text_box">
                           <h2><a href="#">Higher-Quality Recognition</a></h2>
                           <p>
                              Secure meaningful awards and recognition that enhance long-term authority.
                           </p>
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
                  <img src="{{ asset('assets/frontend/img/whatwedointernalpages/reputation/why-elevate.webp') }}" class="img-fluid image_fit height_500px pd_right_30" alt="img">

                  <div class="row no-space">
                     <div class="col-lg-5"></div>
                     <div class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1" style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                        <div class="title_all_box style_one light_color">
                           <div class="title_sections left">
                              <p class="color_white">
                                 We build authority that drives real business outcomes
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>

         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">

                  <div class="before_title">Why Elevate One Media</div>

                  <h2 class="title">
                     Why Elevate One Media Is Different
                  </h2>

                  <p>
                     We do not chase vanity recognitions. We focus on recognition that strengthens real market standing.
                     We understand how to connect awards, PR, executive profiling, and reputation architecture into one coherent strategy.
                  </p>

                  <!-- THEME LIST START -->
                  <div class="list_item_box style_two style_list">
                     <ul class="list-inline">

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-star"></i></span>
                              <a class="nav_link" href="#">
                                 We align digital identity with leadership ambition and category positioning
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-star"></i></span>
                              <a class="nav_link" href="#">
                                 We prioritize long-term credibility over short-term visibility spikes
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-star"></i></span>
                              <a class="nav_link" href="#">
                                 We integrate PR, awards, and executive positioning into one unified strategy
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-star"></i></span>
                              <a class="nav_link" href="#">
                                 We help leaders look stronger, not louder, in their category
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

         <div class="pd_bottom_10"></div>
      </div>
   </div>

   <div class="pd_bottom_90"></div>
</section>
@include('frontend.layouts.common.sections.casestudies')
@include('frontend.layouts.common.sections.clients')
@include('frontend.layouts.common.sections.success')
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

                  <div class="title">
                     Frequently Asked Questions
                  </div>

                  <div class="small_text_sub">
                     Clear answers about awards, recognition, and reputation strategy.
                  </div>

               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>

      <div class="row">

         <!-- LEFT IMAGES (UNCHANGED) -->
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

         <!-- FAQ ACCORDION -->
         <div class="col-xl-6 col-lg-12">
            <div class="faq_section type_one">
               <div class="block_faq">
                  <div class="accordion">
                     <dl>

                        <dt class="faq_header">
                           <span class="icon-play"></span> Do you guarantee wins?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              No. Awards and recognition cannot be guaranteed, but we maximize your positioning, narrative strength,
                              and selection probability through strategic alignment.
                           </p>
                        </dd>

                        <dt class="faq_header">
                           <span class="icon-play"></span> Is this only for large companies?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              No. We work with startups, scaling businesses, and established enterprises — the strategy adapts to your stage.
                           </p>
                        </dd>

                        <dt class="faq_header">
                           <span class="icon-play"></span> Do you help choose the right awards?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. We identify the most relevant, credible, and high-impact awards based on your industry and positioning goals.
                           </p>
                        </dd>

                        <dt class="faq_header">
                           <span class="icon-play"></span> Can recognition support PR and digital authority too?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Recognition strengthens PR narratives, improves digital authority, and builds long-term brand credibility across platforms.
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
<!--- faqs end- -->
@endsection
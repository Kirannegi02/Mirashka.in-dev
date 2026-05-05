
@extends('frontend.layouts.app')

  @section('content')
   <style type="text/css">
      .auto-container,
      .auto_container {
         max-width: 1400px !important;
      }
   </style>



   <!----banner---->
     <section class="banner-section bg_op_1 position-relative overflow-hidden" style="background-image: url('{{ asset('assets/frontend/img/whatwedointernalpages/voice/banner-1.webp') }}');
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
                        <div class="custom-badge">VOICE OF LEADERSHIP </div>
                  <h2 class="title_big text-white">Build a Digital Presence That Reflects Leadership, Not Just Activity
</h2>
                   <p class="text-white">When voice is used well, it creates trust, memory, and closeness faster than most content formats ever can. Elevate One Media helps leaders and brands build premium podcast and audio IP that turns expertise into a long-term thought-leadership asset.</p>

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

                     <div class="video_box">
                        <a href="#" class="lightbox-image">
                           <i class="fa fa-microphone"></i>
                        </a>
                     </div>

                     <h6 class="text-black">
                        Voice-Led Influence
                     </h6>

                     <h1 class="text-black">
                        When Voice Becomes a Reputation Asset
                     </h1>

                     <p class="text-black">
                        A podcast is not just content. It is an owned platform for influence. It allows your ideas to land with depth, your personality to feel real, and your thought leadership to travel further than short-form visibility ever can.
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
                  <h2>What We Build Under Voice of Leadership
</h2>
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
<!-- UPDATED -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/executive.png') }}">
      </div>
      <div class="content">

         <h2 class="title_service"><a href="#">Podcast Concept Development</a></h2>
         <p class="text-white">Define a clear podcast idea, format, and narrative aligned with your leadership positioning.</p>
      </div>
   </div>
</div>

<!-- UPDATED -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/cxo.png') }}">
      </div>
      <div class="content">
         
         <h2 class="title_service"><a href="#">Executive Podcast Positioning</a></h2>
         <p class="text-white">Position the host as a credible voice with clarity, authority, and a strong point of view.</p>
      </div>
   </div>
</div>

<!-- UPDATED -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/voice.png') }}">
      </div>
      <div class="content">
         
         <h2 class="title_service"><a href="#">Episode Architecture & Editorial Planning</a></h2>
         <p class="text-white">Structure episodes and content flow to ensure consistency, depth, and audience relevance.</p>
      </div>
   </div>
</div>

<!-- UPDATED -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/reputation.png') }}">
      </div>
      <div class="content">
         
         <h2 class="title_service"><a href="#">Guest Strategy</a></h2>
         <p class="text-white">Curate the right guests to enhance credibility, reach, and meaningful conversations.</p>
      </div>
   </div>
</div>

<!-- UPDATED -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/presence.png') }}">
      </div>
      <div class="content">
         <h2 class="title_service"><a href="#">Launch & Amplification</a></h2>
         <p class="text-white">Launch and scale your podcast with distribution and visibility strategies that build influence.</p>
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
            When done right, media placements do more than create visibility. They shape perception, build credibility, and create sustained authority in the market.
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
                  <img src="{{ asset('assets/frontend/img/whatwedointernalpages/voice/what/image-1.webp') }}" class="img-fluid" alt="img">
               </div>
               <div class="image_box two">
                  <img src="{{ asset('assets/frontend/img/whatwedointernalpages/voice/what/image-2.webp') }}" class="img-fluid two" alt="img">
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
                     A media presence that builds credibility, strengthens perception, and supports real business outcomes — not just visibility.
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
                        <img src="{{ asset('assets/frontend/img/whatwedointernalpages/voice/outcomes/a-sharper-leadership-profile.webp') }}" class="img-fluid">
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
                        <img src="{{ asset('assets/frontend/img/whatwedointernalpages/voice/outcomes/better-recall-&-market-positioning.webp') }}" class="img-fluid">
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
                        <img src="{{ asset('assets/frontend/img/whatwedointernalpages/voice/outcomes/stronger-market-credibility.webp') }}" class="img-fluid">
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
                  <img src="{{ asset('assets/frontend/img/whatwedointernalpages/voice/why-elevate.webp') }}" class="img-fluid image_fit height_500px pd_right_30" alt="img">
                  <div class="row no-space">
                     <div class="col-lg-5"></div>
                     <div class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1" style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
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
  <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
   <div class="title_all_box style_one dark_color">
      <div class="title_sections left">

         <div class="before_title">Why Elevate One Media</div>
         <h2 class="title">Why Elevate One Media Is Different</h2>

         <p>
            We do not create random podcasts. We build strategic audio properties designed for long-term influence.
         </p>

         <!-- THEME LIST START -->
         <div class="list_item_box style_two style_list">
            <ul class="list-inline">

               <li class="list_items pd_bottom_10">
                  <small class="d-flex align-items-center">
                     <span class="icon_bx"><i class="icon-checked"></i></span>
                     <a class="nav_link" href="#">
                        We align your show with your visibility goals, leadership identity, and broader reputation strategy
                     </a>
                  </small>
               </li>

               <li class="list_items pd_bottom_10">
                  <small class="d-flex align-items-center">
                     <span class="icon_bx"><i class="icon-checked"></i></span>
                     <a class="nav_link" href="#">
                        We design podcasts as owned platforms, not one-off content experiments
                     </a>
                  </small>
               </li>

               <li class="list_items pd_bottom_10">
                  <small class="d-flex align-items-center">
                     <span class="icon_bx"><i class="icon-checked"></i></span>
                     <a class="nav_link" href="#">
                        We combine content, positioning, and audience-building into a cohesive voice strategy
                     </a>
                  </small>
               </li>

               <li class="list_items pd_bottom_10">
                  <small class="d-flex align-items-center">
                     <span class="icon_bx"><i class="icon-checked"></i></span>
                     <a class="nav_link" href="#">
                        We treat your voice as a serious brand asset that compounds in value over time
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

   <div class="pd_bottom_10"></div>
</div>

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

   <dt class="faq_header">
      <span class="icon-play"></span> Is this only for experienced hosts?
   </dt>
   <dd class="accordion-content hide">
      <p>
         No. We work with both first-time hosts and experienced voices, helping you build clarity, confidence, and structure from the ground up.
      </p>
   </dd>

   <dt class="faq_header">
      <span class="icon-play"></span> Do you support concept and positioning, not just execution?
   </dt>
   <dd class="accordion-content hide">
      <p>
         Yes. We focus on concept, positioning, and narrative first—ensuring the podcast is strategically aligned before execution begins.
      </p>
   </dd>

   <dt class="faq_header">
      <span class="icon-play"></span> Can this work for B2B and expert-led brands?
   </dt>
   <dd class="accordion-content hide">
      <p>
         Absolutely. Podcasts are especially powerful for B2B and expert-led brands where depth, insight, and trust matter more than reach alone.
      </p>
   </dd>

   <dt class="faq_header">
      <span class="icon-play"></span> Can this be built for a company as well as an individual?
   </dt>
   <dd class="accordion-content hide">
      <p>
         Yes. We design podcast platforms for both individual leaders and organisations, depending on your brand and visibility goals.
      </p>
   </dd>

   <dt class="faq_header active">
      <span class="icon-play"></span> How do I get started?
   </dt>
   <dd class="accordion-content hide" style="display: block;">
      <p>
         Start with a discovery call where we understand your goals and design the right podcast and voice strategy for you.
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
@extends('frontend.layouts.app')
@section('content')
   <style type="text/css">
      .auto-container,
      .auto_container {
         max-width: 1400px !important;
      }
   </style>



   <!----banner---->
   <section class="banner-section bg_op_1 position-relative overflow-hidden" style="background-image: url('{{ asset('assets/frontend/img/whatwedointernalpages/regional/banner-1.webp') }}');
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
                        <div class="custom-badge">
                           REGIONAL IMPACT COMMUNICATION</div>
                        <h2 class="title_big text-white">Build Communication That Feels Relevant in the Markets You Want to Win

                        </h2>
                        <p class="text-white">A brand can be nationally visible and still feel locally distant. Elevate One Media helps organisations build stronger regional relevance through localised media strategy, market-sensitive messaging, and communication systems designed to feel credible in the places that matter most</p>

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
                              <i class="fa fa-map-marker-alt"></i>
                           </a>
                        </div>

                        <!-- SMALL HEADING -->
                        <h6 class="text-black">
                           Regional Presence & Visibility Strategy
                           <i class="icon-badge-check"></i>
                        </h6>

                        <!-- MAIN TITLE -->
                        <h1 class="text-black">
                           National Visibility Alone Is Not Enough
                        </h1>

                        <!-- DESCRIPTION -->
                        <p class="text-black">
                           Real trust is often built locally. Regional impact communication helps brands connect with local
                           priorities,
                           local media ecosystems, language nuances, and audience perception.
                           This approach ensures your presence is not just seen — but meaningfully understood across
                           geographies.
                        </p>

                        <!-- CTA BUTTON -->
                        <div class="bottom_content">
                           <div class="button_content">
                              <a href="tel:918796927200" class="theme-btn three">
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

                     <div class="before_title">
                        Regional Impact Communication
                     </div>

                     <h2>
                        What We Build Under Regional Impact Communication
                     </h2>

                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="theme_btn_all color_one text-md-end">
                  <a href="#" target="_blank" rel="nofollow" class="theme-btn one">
                     Explore All Services
                  </a>
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
                            
                              <h2 class="title_service">
                                 <a href="#">Localised Media Strategy</a>
                              </h2>
                              <p class="text-white">
                                 Mapping region-specific media ecosystems to ensure stronger local relevance and
                                 visibility.
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
                             
                              <h2 class="title_service">
                                 <a href="#">Regional Narrative Development</a>
                              </h2>
                              <p class="text-white">
                                 Crafting narratives aligned with local culture, language, and audience perception.
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
                              
                              <h2 class="title_service">
                                 <a href="#">Multi-Market Visibility Planning</a>
                              </h2>
                              <p class="text-white">
                                 Structuring visibility across multiple regions with consistent yet adaptive messaging.
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
                              
                              <h2 class="title_service">
                                 <a href="#">Vernacular Media Relevance</a>
                              </h2>
                              <p class="text-white">
                                 Strengthening presence through regional language and local media ecosystems.
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
                             
                              <h2 class="title_service">
                                 <a href="#">Geographic Stakeholder Communication</a>
                              </h2>
                              <p class="text-white">
                                 Aligning communication with regional stakeholders and influence ecosystems.
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
   <section class="about-section">
      <div class="pd_top_80"></div>
      <div class="container">
         <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">

                     <div class="before_title">
                        Why Now
                     </div>

                     <h2 class="title">
                        If You Are Expanding Regionally, Your Communication Must Travel Better Than Your Ads
                     </h2>



                     <!-- THEME LIST START -->
                     <div class="list_item_box style_two style_list">
                        <ul class="list-inline">

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-eye"></i></span>
                                 <a class="nav_link" href="#">
                                    Improve message relevance across regional markets and audiences
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-eye"></i></span>
                                 <a class="nav_link" href="#">
                                    Strengthen trust by aligning communication with local perception
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-eye"></i></span>
                                 <a class="nav_link" href="#">
                                    Ensure leadership messaging adapts to regional expectations
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-eye"></i></span>
                                 <a class="nav_link" href="#">
                                    Support expansion into new markets with credible communication layers
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-eye"></i></span>
                                 <a class="nav_link" href="#">
                                    Improve perception consistency across multiple geographies
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-eye"></i></span>
                                 <a class="nav_link" href="#">
                                    Build stronger local credibility beyond national-level visibility
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
                     <img src="{{ asset('assets/frontend/img/whatwedointernalpages/regional/what/image-1.webp') }}" class="img-fluid" alt="img">
                  </div>
                  <div class="image_box two">
                     <img src="{{ asset('assets/frontend/img/whatwedointernalpages/regional/what/image-2.webp') }}" class="img-fluid two" alt="img">
                  </div>
               </div>
            </div>

         </div>
      </div>
      <div class="pd_bottom_80"></div>
   </section><!---service--->
   <section class="service-section">
      <div class="title-sec bg_dark_3 pd_top_100">
         <div class="container">
            <div class="row gutter_30px">

               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="title_all_box style_one light_color">
                     <div class="title_sections left">

                        <div class="before_title">
                           Outcomes
                        </div>

                        <h2>
                           What This Category Helps You Achieve
                        </h2>

                     </div>
                  </div>
               </div>

               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="description_box color_white text-md-end">
                     <p>
                        Stronger regional trust. Better local acceptance. More effective market-entry communication.
                        Higher relevance across local media ecosystems. A stronger bridge between national identity
                        and local perception that drives meaningful market connection.
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
                           <img src="{{ asset('assets/frontend/img/whatwedointernalpages/regional/outcomes/a-sharper-leadership-profile.webp') }}" class="img-fluid">
                        </div>

                        <div class="content_inner">
                           <span class="icon-human-resources"></span>
                           <div class="text_box">
                              <h2><a href="#">Stronger Regional Trust</a></h2>
                              <p>
                                 Build credibility within regional ecosystems through culturally aligned and locally
                                 relevant communication.
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
                           <img src="{{ asset('assets/frontend/img/whatwedointernalpages/regional/outcomes/better-recall-&-market-positioning.webp') }}" class="img-fluid">
                        </div>

                        <div class="content_inner">
                           <span class="icon-audit"></span>
                           <div class="text_box">
                              <h2><a href="#">Better Local Acceptance</a></h2>
                              <p>
                                 Improve how your brand is perceived by aligning messaging with local audience expectations
                                 and behavior.
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
                           <img src="{{ asset('assets/frontend/img/whatwedointernalpages/regional/outcomes/stronger-market-credibility.webp') }}" class="img-fluid">
                        </div>

                        <div class="content_inner">
                           <span class="icon-heartbeat"></span>
                           <div class="text_box">
                              <h2><a href="#">Stronger Market Entry Communication</a></h2>
                              <p>
                                 Enable smoother entry into new regions with communication that resonates from day one.
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

                     <img src="{{ asset('assets/frontend/img/whatwedointernalpages/regional/why-elevate.webp') }}"
                        class="img-fluid image_fit height_500px pd_right_30" alt="img">

                     <div class="row no-space">
                        <div class="col-lg-5"></div>
                        <div
                           class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                           style="background-image: url({{ asset('assets/images/pannern-n3.png') }}) !important;" </div>
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

                     <div class="before_title">
                        Why Elevate One Media
                     </div>

                     <h2 class="title">
                        Why Elevate One Media Is Different
                     </h2>

                     <p>
                        We do not just translate messaging. We localise meaning, relevance, and trust.
                        We help brands maintain a strong central identity while ensuring communication feels native,
                        culturally aligned, and contextually relevant to each target market.
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
                        Clear answers about CXO visibility, recognition, and reputation strategy.
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
                              <span class="icon-play"></span> Is this only about vernacular media?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 No. It is not limited to vernacular media. The focus is on choosing the right mix of
                                 national,
                                 regional, and industry-specific platforms where your message creates real credibility and
                                 trust.
                              </p>
                           </dd>

                           <dt class="faq_header">
                              <span class="icon-play"></span> Will localisation dilute our core identity?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 Not at all. Localisation adapts the message, not the identity. Your core brand positioning
                                 remains
                                 consistent while the communication is tailored to fit regional context and audience
                                 behaviour.
                              </p>
                           </dd>

                           <dt class="faq_header">
                              <span class="icon-play"></span> Is this useful for growth-stage businesses too?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 Yes. Growth-stage businesses benefit significantly because structured visibility helps
                                 build trust,
                                 attract investors, and strengthen market perception early in the scale journey.
                              </p>
                           </dd>

                           <dt class="faq_header">
                              <span class="icon-play"></span> Can this support India market entry?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 Yes. We design visibility and communication strategies specifically for India entry by
                                 aligning
                                 messaging with local media, stakeholder expectations, and regional market understanding.
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
@endsection
 @extends('frontend.layouts.app')


@section('content')  

  <style type="text/css">
         .contact_form_box_all.type_four label i {
         top: 50px;
         right: 10px;
         }
         .title_all_box.style_one .title_sections .title, .title_all_box.style_one .title_sections h1, .title_all_box.style_one .title_sections h2, .title_all_box.style_one .title_sections h3, .title_all_box.style_one .title_sections h4, .title_all_box.style_one .title_sections h5, .title_all_box.style_one .title_sections h6, .title_all_box.style_two .title_sections .title, .title_all_box.style_two .title_sections h1, .title_all_box.style_two .title_sections h2, .title_all_box.style_two .title_sections h3, .title_all_box.style_two .title_sections h4, .title_all_box.style_two .title_sections h5, .title_all_box.style_two .title_sections h6 {
    font-size: 32px;
    line-height: 40px;
    
}
.textbg{
        background-color: #FFFFFF;
       padding: 10px 10px 10px 10px !important;
    border-radius: 10px 10px 10px 10px !important;
}

.contact_form_box_all.type_five {
    background-color: #FFFFFF;
    padding: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
}
.contact_form_box_all.type_five label i {
    position: absolute;
    top: 46px;
    right: 7px;
}
      </style>
 <div id="content" class="site-content ">
         <!--banner home-->
        <section class="banner-section bg_op_1 position-relative text-white" 
            style="background: url('{{ asset('assets/frontend/img/company-packages/banner-1.webp') }}') center/cover no-repeat;">
            <!-- Dark Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>
            <div class="pd_top_100"></div>
            <div class="auto-container position-relative">
               <div class="row align-items-center">
                  <!-- LEFT CONTENT -->
                  <div class="col-xl-7 col-lg-6 col-md-12">
                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <!-- Headline -->
                           <h1 class="title_big text-white ">
We Elevate CXOs From Leaders to Industry Icons.
                               <!-- Sub-headline -->
                           <p class="gold textbg">
Premium PR for CXOs, Founders & Mid-Level Management — crafted in India, trusted across the world.

                           </p>
                           <hr class="border-light w-25 my-4 opacity-75">
                           <!-- Value Statement -->
                           <p class="mb-4">
In a world racing toward tomorrow, we bring back the timeless art of reputation, influence, and narrative power—elevated through modern strategy, global media, and AI-driven precision.

  </p>
                           <div class="title_sections">
                           <div class="before_title text-white">MEDIA PARTNER</div>
              
                        </div>
                         <div class="slider_row">
               <div class="swiper-container swiper-initialized swiper-horizontal swiper-free-mode" data-swiper="{
      &quot;loop&quot;: true,
      &quot;autoplay&quot;: { &quot;delay&quot;: 0, &quot;reverseDirection&quot;: true, &quot;disableOnInteraction&quot;: false },
      &quot;speed&quot;: 3000,
      &quot;centeredSlides&quot;: false,
      &quot;slidesPerView&quot;: 6,
      &quot;spaceBetween&quot;: 20,
      &quot;freeMode&quot;: true,
      &quot;freeModeMomentum&quot;: false,
      &quot;breakpoints&quot;: {
        &quot;1200&quot;: { &quot;slidesPerView&quot;: 6 },
        &quot;1024&quot;: { &quot;slidesPerView&quot;: 5 },
        &quot;768&quot;:  { &quot;slidesPerView&quot;: 3 },
        &quot;576&quot;:  { &quot;slidesPerView&quot;: 3 },
        &quot;0&quot;:    { &quot;slidesPerView&quot;: 4 }
      }
    }">
                  <div class="swiper-wrapper" id="swiper-wrapper-f49778cbb10646285" aria-live="off" style="transition-duration: 3000ms; transform: translate3d(-560.833px, 0px, 0px);"><div class="swiper-slide" role="group" aria-label="8 / 21" data-swiper-slide-index="7" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/ap.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="9 / 21" data-swiper-slide-index="8" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/BBC.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="10 / 21" data-swiper-slide-index="9" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/business-insider.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="11 / 21" data-swiper-slide-index="10" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/forbes.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="12 / 21" data-swiper-slide-index="11" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/cio.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="13 / 21" data-swiper-slide-index="12" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/fortune.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide swiper-slide-next" role="group" aria-label="14 / 21" data-swiper-slide-index="13" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/gq.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="15 / 21" data-swiper-slide-index="14" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/ibt.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="16 / 21" data-swiper-slide-index="15" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/mashabl.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="17 / 21" data-swiper-slide-index="16" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/the-guardian.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="18 / 21" data-swiper-slide-index="17" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/usa-today.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="19 / 21" data-swiper-slide-index="18" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/cio.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="20 / 21" data-swiper-slide-index="19" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/tech-advisor.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="21 / 21" data-swiper-slide-index="20" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/gq.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div>
                     <!-- repeat same swiper-slides or different set -->
                     <div class="swiper-slide" role="group" aria-label="1 / 21" data-swiper-slide-index="0" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/variety.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div>
                     <div class="swiper-slide" role="group" aria-label="2 / 21" data-swiper-slide-index="1" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/wsj.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div>
                  
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     

                     <!-- ... add all your other logos ... -->
                  </div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
                           <!-- CTA Buttons -->
                           <!--<ul class="animate_down list-unstyled d-flex flex-wrap gap-3 mt-4">-->
                           <!--   <li class="theme_btn_all">-->
                           <!--      <a href="#services" class="theme-btn one"-->
                           <!--         style="color:#fff; background-color:#f19c31; border-color:#f19c31;">-->
                           <!--      Start Your Visibility Journey-->
                           <!--      </a>-->
                           <!--   </li>-->
                           <!--   <li class="theme_btn_all">-->
                           <!--      <a href="#pricing" class="theme-btn one">-->
                           <!--      Explore CXO & Company Packages-->
                           <!--      </a>-->
                           <!--   </li>-->
                           <!--</ul>-->
                        </div>
                     </div>
                     <div class="pd_bottom_20"></div>
                     <!-- LOGO SLIDER (UNCHANGED) -->
                     <div class="slider_row">
                        <!-- KEEP your existing swiper code exactly as is -->
                        <!-- PASTED ORIGINAL SWIPER HERE -->
                        <!-- --------------------------------------- -->
                        <!-- SWIPER START -->
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
                              <!-- ⭐ KEEP ALL YOUR LOGO SLIDES SAME -->
                              <!-- (paste your swiper slides here exactly as in original) -->
                           </div>
                        </div>
                        <!-- SWIPER END -->
                        <!-- --------------------------------------- -->
                     </div>
                     <div class="pd_bottom_40"></div>
                  </div>
                  <!-- RIGHT SIDE FORM (UNCHANGED) -->
                  <div class="col-xl-1 hidden-lg"></div>
                  <div class="col-xl-4 col-lg-6 col-md-12">
                     <div class="contact_form_box_all type_five">
                        <div class="contact_form_box_inner simple_form">
                           <div class="title_all_box style_one dark_color">
                              <div class="title_sections">
                                 <div class="before_title">We’re here to help you</div>
                                 <h6 class="font_24">Book Appointment</h6>
                              </div>
                           </div>
                           <div class="pd_bottom_10"></div>
<div class="contact_form_shortcode">

@include('frontend.layouts.common.mainform')




</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_100"></div>
            <!-- Scroll Icon -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
               <a href="#about" class="text-white">
               <i class="fa fa-angle-down fs-1 d-block"></i>
               </a>
            </div>
         </section>
         <section class="image-section-two" id="OURPROMISE">
            <!--===============spacing==============-->
            <div class="pd_top_80"></div>
            <!--===============spacing==============-->
            <div class="container">
               <div class="row">
                  <!-- Left Image + Video -->
                  <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                     <div class="image_boxes style_one">
                        <div class="image one">
                           <img src="{{ asset('assets/frontend/img/cxo-page/our-promise.webp') }}" class="img-fluid" alt="image" />
                        </div>
                     </div>
                  </div>
                  <!-- Right Content -->
                  <div class="col-xl-6 col-lg-12">
                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <div class="before_title">Our Promise</div>
                           <h2>We don’t just promote leaders. We position them where the industry listens.</h2>
                           <p>
                              While everyone chases hacks, shortcuts, and viral noise, we take the disciplined route—the one real leaders respect.Because for CXOs and rising leaders, reputation isn’t a marketing checkbox.                             It opens boardroom doors, accelerates careers, attracts investors, inspires teams, and strengthens leadership influence.


                           </p>
                              <p><strong>We believe in the power of:</strong>
                           


                           </p>
                           <ul>
                              <li>Thought leadership over loud self-promotion</li>
                              <li>Strategic visibility over random mentions</li>
                              <li>Reputation engineering over one-time publicity</li>
                             <li>Consistency over campaign bursts</li>

                           </ul>
                           <p>Titles can get you into meetings.

Visibility gets you remembered.

Authority gets you followed.

</p>
                        </div>
                     </div>
                     <!-- Progress / Stat -->
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_80"></div>
            <!--===============spacing==============-->
         </section>
         <section class="service-section bg_light_1"   id="OFFERINGS" >
            <!--===============spacing==============-->
            <div class="pd_top_80"></div>
            <!--===============spacing==============-->
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-lg-8">
                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <div class="before_title">Who We serve</div>
                           <h2>High-performing individuals and companies who refuse to remain invisible.</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="theme_btn_all color_one text-md-end">
                        <a href="#explorepackages"  class="theme-btn one ">Explore Packages</a>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_30"></div>
                        <!--===============spacing==============-->
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
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
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/cxos.webp') }}" alt="Executive Influence">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/cxo-page/who/cxos.webp') }}"></span></div>
                                    <h2 class="title_service"><a href="#">CXOs</a></h2>
                                    <p class="text-white">Strategic Media Placements</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/founders.webp') }}" alt="CXO Digital Presence">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/CXO-Digital.svg') }}"></span></div>
                                    <h2 class="title_service"><a href="#">Founders</a></h2>
                                    <p class="text-white">LinkedIn Authority Building</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/podcast.webp') }}" alt="Podcast Development">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Voice.svg') }}"></span></div>
                                    <h2 class="title_service"><a href="#">Tech Leaders</a> </h2>
                                    <p class="text-white">Podcasting Services</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/scale-ups.webp') }}" alt="Awards Positioning">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Reputation.svg') }}"></span></div>
                                    <h2 class="title_service"><a href="#">Startups</a></h2>
                                    <p class="text-white">Awards Consulting</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/AI-companies.webp') }}" alt="Speaking Engagements">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/CXO.svg') }}"></span></div>
                                    <h2 class="title_service"><a href="#">AI Companies</a></h2>
                                    <p class="text-white">Speaking Engagements & Events</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/cxos.webp') }}" alt="Crisis Preparedness">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Reputation-Risk.svg') }}"></span></div>
                                    <h2 class="title_service"><a href="#">Scale-ups</a></h2>
                                    <p class="text-white">Speaking Engagements & Events</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/BFSI-leaders.webp') }}" alt="Capital Markets">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Capital.svg') }}"></span></div>
                                    <h2 class="title_service"><a href="#">BFSI Leaders</a></h2>
                                    <p class="text-white">Investor Visibility</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/healthcare-innovators.webp') }}" alt="Media Training">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Leadership.svg') }}"></span></div>
                                    <h2 class="title_service"><a href="#">Healthcare Innovators</a></h2>
                                    <p class="text-white"> Influence Coaching</p>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="service_carousel style_one">
                                 <div class="image">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/frontend/img/cxo-page/who/Emerging-category-creators.webp') }}" alt="Regional Impact">
                                 </div>
                                 <div class="content">
                                    <div class="icon_box"><span><img src="assets/frontend/img/Regional.svg"></span></div>
                                    <h2 class="title_service"><a href="#">Emerging category creators</a></h2>
                                    <p class="text-white"> Localised Media Strateg</p>
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
            <!--===============spacing==============-->
            <div class="pd_bottom_80"></div>
            <!--===============spacing==============-->
         </section>
         <!----service end---->
         <section class="contact-section   pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15">
            <div class="pd_top_80"></div>
            <div class="inner_section rounded_radius bg_op_1" style="background: url({{ asset('assets/frontend/img/cxo-page/featured-offerings.webp') }});">
               <div class="pd_top_80"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title_all_box style_one light_color">
                           <div class="title_sections">
                              <div class="before_title">Featured Offerings</div>
                              <h2>Strategic Programs built for reputation, influence & authority.</h2>
                           </div>
                           <div class="pd_bottom_20"></div>
                        </div>
                        <div class="video_btn_all left">
                           <div class="video_box color_white">
                              <a href="#" class="lightbox-image">
                              <i class="icon-play"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 hidden-lg"></div>
                  </div>
               </div>
               <div class="pd_bottom_80"></div>
            </div>
         </section>
         <section class="contact-box-sections ">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="funfacts">
                        <div class="pd_top_80"></div>
                        <div class="row gutter_25px">
                           <!-- OFFER BLOCK 1 -->
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <div class="counter-block style_three count-box counted">
                                 <div class="icon_box icon_yes ">
                                    <div class="icon">
                                       <img src="{{ asset('assets/frontend/img/icon1.svg') }}">
                                    </div>
                                 </div>
                                 <div class="content_box">
                                    <h6>
                                      For CXOs & Leaders                                   
                                    </h6>
                                    <small class="opacity-75">
                                    A 3-tier pathway to global executive presence.
                                    </small>
                                 </div>
                              </div>
                           </div>
                           <!-- OFFER BLOCK 2 -->
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <div class="counter-block style_three count-box counted">
                                 <div class="icon_box icon_yes ">
                                    <div class="icon">
                                       <img src="{{ asset('assets/frontend/img/icon2.svg') }}">
                                    </div>
                                 </div>
                                 <div class="content_box">
                                    <h6>
                                    For Companies  </h6>
                                    <small class="opacity-75">
                                    Built for companies ready to lead with influence.
                                    </small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pd_bottom_25"></div>
                        <div class="description_box">
                           <p>
                              Each offering is crafted with deep strategy, ongoing execution, 
                              and measurable visibility impact — not just activity.
                           </p>
                           <div class="theme_btn_all color_one text-md-start mt-5">
                              <a href="https://calendly.com/elevateonemedia/30min"  class="theme-btn one">Book Free 30-Min Audit</a>
                              <!--===============spacing==============-->
                              <div class="pd_bottom_30"></div>
                              <!--===============spacing==============-->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="contact_form_box_all type_four mr_top_minus_320 mr_md_top_zero">
                        <div class="title_all_box style_one text-center dark_color">
                           <div class="title_sections">
                              <div class="before_title">Work With Us</div>
                              <h2>Send a Message</h2>
                           </div>
                           <div class="pd_bottom_20"></div>
                        </div>
                        <div class="contact_form_box_inner simple_form">
<div class="contact_form_shortcode">



 @include('frontend.layouts.common.mainform')

                        </div>
                        <div class="pd_bottom_20"></div>
                        <div class="contact_box_content style_two">
                           <div class="contact_box_inner color_one">
                              <div class="text ">
                                 <h3>General Enquiries</h3>
                                 <hr>
                                 <p>Phone: +91 8796927200 | Email: info@mirashka.in</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_80"></div>
         </section>
         <section class="creote-service-box bg_light_1"  id="PREMIUMSERVICE">
            <div class="pd_top_80"></div>
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Premium Service Suite</div>
                  <h2>Precision PR, built for leaders and brands that mean business</h2>
               </div>
               <div class="mr_bottom_25"></div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="service_post style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img loading="lazy" src="{{ asset('assets/frontend/img/cxo-page/premium/CXO-Profiling.webp') }}" alt="">
                        </div>
                        <div class="service_content icon_yes">
                           <div class="icon_box"><span class="icon icon-thumbs-up"></span></div>
                           <h2 class="title_service"><a href="#">CXO Profiling & Leadership Branding</a></h2>
                           <p class="short_desc">Architecting visibility for leaders shaping industries.</p>

                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="service_post style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img loading="lazy" src="{{ asset('assets/frontend/img/cxo-page/premium/Founder-&-Company.webp') }}" alt="">
                        </div>
                        <div class="service_content icon_yes">
                           <div class="icon_box"><span class="icon icon-thumbs-up"></span></div>
                           <h2 class="title_service"><a href="#">Founder & Company Reputation Engineering</a></h2>
                           <p class="short_desc">Positioning brands as trusted industry authorities.</p>

                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="service_post style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img loading="lazy" src="{{ asset('assets/frontend/img/cxo-page/premium/Thought-Leadership-Content-Studio.webp') }}" alt="">
                        </div>
                        <div class="service_content icon_yes">
                           <div class="icon_box"><span class="icon icon-thumbs-up"></span></div>
                           <h2 class="title_service"><a href="#">Thought Leadership Content Studio</a></h2>
                           <p class="short_desc">LinkedIn ghostwriting • Articles • Brand narratology • SEO authority.</p>

                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="service_post style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img loading="lazy" src="{{ asset('assets/frontend/img/cxo-page/premium/Global-PR-&-Media-Relations.webp') }}" alt="">
                        </div>
                        <div class="service_content icon_yes">
                           <div class="icon_box"><span class="icon icon-thumbs-up"></span></div>
                           <h2 class="title_service"><a href="#">Global PR & Media Relations</a></h2>
                           <p class="short_desc">US + EU + APAC coverage across business, tech & niche media.</p>

                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="service_post style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img loading="lazy" src="{{ asset('assets/frontend/img/cxo-page/premium/Podcast.webp') }}" alt="">
                        </div>
                        <div class="service_content icon_yes">
                           <div class="icon_box"><span class="icon icon-thumbs-up"></span></div>
                           <h2 class="title_service"><a href="#">Podcast & Speaker Outreach</a></h2>
                           <p class="short_desc">Panels, AMAs, global summits, recorded interviews.</p>

                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="service_post style_one">
                        <div class="image">
                           <div class="overlay"></div>
                           <img loading="lazy" src="{{ asset('assets/frontend/img/cxo-page/premium/Awards.webp') }}" alt="">
                        </div>
                        <div class="service_content icon_yes">
                           <div class="icon_box"><span class="icon icon-thumbs-up"></span></div>
                           <h2 class="title_service"><a href="#">Awards & Recognition Management</a></h2>
                           <p class="short_desc">Global awards, innovation lists, credibility-driven recognition.</p>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_80"></div>
         </section>
         <section class="process-section" id="CXOPROCESS">
            <div class="pd_top_80"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                           <div class="before_title">The Steps of</div>
                           <h2>CXO Profiling Process</h2>
                        </div>
                        <div class="mr_bottom_25"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- Step 01 -->
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="process_box style_four dark_color">
                        <div class="process_box_outer_four">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/service-ico-3.png') }}" class="img-fluid svg_image" alt="icon">
                              <h6>01</h6>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Understand Your Story</a></h2>
                              <p>We deep-dive into your journey, achievements, and positioning to frame your narrative.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Step 02 -->
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="mr_bottom_25"></div>
                     <div class="process_box style_four dark_color">
                        <div class="process_box_outer_four">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/process-icon-im-1.png') }}" class="img-fluid svg_image" alt="icon">
                              <h6>02</h6>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Draft & Refine Content</a></h2>
                              <p>We create articles, profiles, and talking points—refined with your feedback.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Step 03 -->
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="process_box style_four dark_color">
                        <div class="process_box_outer_four">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid svg_image" alt="icon">
                              <h6>03</h6>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Podcast & Media Pitching</a></h2>
                              <p>We pitch you for podcasts, interviews, features, and award nominations.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Step 04 -->
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="mr_bottom_35"></div>
                     <div class="process_box style_four dark_color">
                        <div class="process_box_outer_four">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/process-icon-im-2.png') }}" class="img-fluid svg_image" alt="icon">
                              <h6>04</h6>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Reporting & Wins</a></h2>
                              <p>We share monthly performance reports and celebrate every feature secured.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_80"></div>
         </section>
         <!---Proof of Impact end---->
         <section class="tab-section  bg_light_1" id="CXOPLANS">
            <div class="pd_top_80"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 " style="padding-bottom: 48px;">
                     <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                           <div class="before_title">Premium CXO Plans</div>
                           <h2>Engineered for Industry Leaders</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gutter_40px">
                  <div class="col-lg-12">
                     <div class="price_plan_with_tab price_tb_style_one">
                        <div class="row">
                           <!-- Package 1 -->
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                              <div class="price_plan_box style_one">
                                 <div class="inner_box">
                                    <div class="top">
                                       <h2> Visibility Starter</h2>
                                       <p>Perfect for leaders beginning their public presence.</p>
                                    </div>
                                    <div class="mid">
            <h4>$799</h4>
                                       <p>Entry-level executive visibility program.</p>
                                    </div>
                                    <div class="bottom">
                                       <ul>
                                          <li><span>Monthly press coverage</span><i class="fa fa-check"></i></li>
                                          <li><span>LinkedIn content support</span><i class="fa fa-check"></i></li>
                                          <li><span>Podcast shortlist & award entry</span><i class="fa fa-check"></i></li>
                                          <li><span>Profile review call</span><i class="fa fa-check"></i></li>
                                       </ul>
                                       <a href="https://calendly.com/elevateonemedia/30min" class="theme-btn two">Book Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Package 2 -->
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                              <div class="price_plan_box style_one tag_enables">
                                 <div class="tag">Most Popular</div>
                                 <div class="inner_box">
                                    <div class="top">
                                       <h2>Authority Builder</h2>
                                       <p>For leaders ready to scale influence & industry trust.</p>
                                    </div>
                                    <div class="mid">
            <h4>$999</h4>
                                       <p>Accelerated positioning & deeper media footprint.</p>
                                    </div>
                                    <div class="bottom">
                                       <ul>
                                          <li><span>2–3 media features monthly</span><i class="fa fa-check"></i></li>
                                          <li><span>SEO blog & expert LinkedIn rewrite</span><i class="fa fa-check"></i></li>
                                          <li><span>Podcast shortlists + awards</span><i class="fa fa-check"></i></li>
                                          <li><span>Quarterly strategy workshop</span><i class="fa fa-check"></i></li>
                                       </ul>
                                       <a href="https://calendly.com/elevateonemedia/30min" class="theme-btn two">Book Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Package 3 -->
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                              <div class="price_plan_box style_one">
                                 <div class="inner_box">
                                    <div class="top">
                                       <h2> Elite Signature</h2>
                                       <p>For leaders pursuing global recognition & keynote presence.</p>
                                    </div>
                                    <div class="mid">
            <h4>$1299</h4>
                                       <p>Full-spectrum personal brand & reputation ecosystem.</p>
                                    </div>
                                    <div class="bottom">
                                       <ul>
                                          <li><span>High-impact global media</span><i class="fa fa-check"></i></li>
                                          <li><span>LinkedIn upgrades + video branding</span><i class="fa fa-check"></i></li>
                                          <li><span>Podcast + keynote speaking outreach</span><i class="fa fa-check"></i></li>
                                          <li><span>Monthly performance report</span><i class="fa fa-check"></i></li>
                                       </ul>
                                       <a href="https://calendly.com/elevateonemedia/30min" class="theme-btn two">Book Now</a>
                                    </div>
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
         
         <section class="image-section-two">
            <!--===============spacing==============-->
            <div class="pd_top_80"></div>
            <!--===============spacing==============-->
            <div class="container">
               <div class="row">
                     <!-- Right Content -->
                  <div class="col-xl-6 col-lg-12">
                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <div class="before_title">Why Elevate  One Media</div>
                           <h2>Premium positioning. Boutique service. Global standards.</h2>
                           <P>We operate as a global visibility engine rooted in India, delivering world-class PR outcomes with precision and consistency. Our productised engagement models ensure speed, clarity, and seamless execution—removing ambiguity from the leadership visibility journey. Every narrative we build blends AI-enhanced intelligence with refined, human-crafted storytelling designed to resonate with media, stakeholders, and audiences.</P>
                          
                           <ul>
                              <li>Global visibility from an India-based premium PR powerhouse</li>
                              <li>Productised packages designed for speed, clarity, and consistency</li>
                              <li>AI-enhanced research + human-curated storytelling</li>
                             <li>Media-first narrative architecture</li>
                            <li>CXO & founder reputation specialists</li>
                            <li>Precise execution with enterprise-grade discipline</li>



                           </ul>
   
                        </div>
                     </div>
                     <!-- Progress / Stat -->
                  </div>
                  <!-- Left Image + Video -->
                  <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                     <div class="image_boxes style_one">
                        <div class="image one">
                           <img src="{{ asset('assets/frontend/img/cxo-page/Premium-positioning.webp') }}" class="img-fluid" alt="image">
                        </div>
                     </div>
                  </div>
                
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_80"></div>
            <!--===============spacing==============-->
         </section>
         
         <section class="project-section bg_light_1" id="Case">
            <div class="pd_top_80"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="title_all_box style_one text-center  dark_color">
                        <div class="title_sections">
                           <div class="before_title">Our Case Studies</div>
                           <h2>Proven Impact</h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                     </div>
                  </div>
               </div>
               <div class="project_all filt_style_eight">
                  <div class="project_container clearfix">
                     <div class="row clearfix">
                        <!-- Case Study 1 -->
                        <div class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="project_post style_eight">
                              <div class="inner_box">
                                 <div class="image_box">
                                    <img src="{{ asset('assets/frontend/img/cxo-page/ai.webp') }}" alt="AI Consultant">
                                    <a data-fancybox="gallery" href="{{ asset('assets/frontend/img/cxo-page/ai.webp') }}">
                                    <span class="icon-plus zoom_icon"></span>
                                    </a>
                                 </div>
                                 <div class="content_box">
                                    <h2 class="title_pro">
                                       <a href="#" rel="bookmark">AI Consultant Goes Global</a>
                                    </h2>
                                    <p>From almost invisible online to featured in 20+ global publications and invited to three international tech summits within eight months.</p>
                                    <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Case Study 2 -->
                        <div class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="project_post style_eight">
                              <div class="inner_box">
                                 <div class="image_box">
                                    <img src="{{ asset('assets/frontend/img/cxo-page/saas.webp') }}" alt="SaaS Europe Growth">
                                    <a data-fancybox="gallery" href="{{ asset('assets/frontend/img/cxo-page/saas.webp') }}">
                                    <span class="icon-plus zoom_icon"></span>
                                    </a>
                                 </div>
                                 <div class="content_box">
                                    <h2 class="title_pro">
                                       <a href="#" rel="bookmark">SaaS Scale-Up Wins Europe</a>
                                    </h2>
                                    <p>180% website traffic growth, 6 Tier-1 features, and funding PR that doubled inbound investor interest.</p>
                                    <a href="#" class="arrow_btn"><span class="icon-right-arrow-long"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Case Study 3 -->
                        <div class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="project_post style_eight">
                              <div class="inner_box">
                                 <div class="image_box">
                                    <img src="{{ asset('assets/frontend/img/cxo-page/founder.webp') }}" alt="Founder Brand Growth">
                                    <a data-fancybox="gallery" href="{{ asset('assets/frontend/img/cxo-page/founder.webp') }}">
                                    <span class="icon-plus zoom_icon"></span>
                                    </a>
                                 </div>
                                 <div class="content_box">
                                    <h2 class="title_pro">
                                       <a href="#" rel="bookmark">Founder Personal Brand Transformation</a>
                                    </h2>
                                    <p>Zero LinkedIn presence to a top industry voice in just 12 weeks.</p>
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
         <!---Proof of Impact---->
         <!---call to action--->
         <section class="call-to-action  position-relative z_99">
            <div class="pd_top_80"></div>
            <div class="container">
               <div class="call_to_action style_two">
                  <div class="image">
                     <img src="{{ asset('assets/frontend/images/call-to-pric-bg-1.jpg') }}" class="img-fluid" alt="image">
                  </div>
                  <div class="auto-container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="left_content">
                              <div class="main_content">
                                 <h1>Your Reputation Is Your Biggest Business Asset.</h1>
                                    <!-- WhatsApp CTA -->
   <div class="whatsapp_cta mt-3">
      <a href="https://wa.me/918796927200?text=Hi%20ElevateOne%20Media,%20I%20would%20like%20to%20know%20more." " 
         class="btn  rounded-pill px-4 py-2 d-inline-flex align-items-center"
         style="font-weight:500; gap:8px; background-color:#006039; color:#fff;">
         <i class="fab fa-whatsapp" style="font-size:20px;  "></i> Connect on WhatsApp
      </a>
   </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="image_right">
                              <img src="{{ asset('assets/frontend/images/cal-img.png') }}" alt="image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_80"></div>
         </section>
<style>

#Clients .swiper-slide .image {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 110px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}

#Clients .swiper-slide img {
    max-width: 140px; 
    height: auto;
}
#Clients .slider_row {
    padding-left: 90px;
    padding-right: 90px;
}

#Clients .swiper-slide .image {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 120px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

#Clients .swiper-slide img {
    width: 100%;
    max-width: 140px;   
    object-fit: contain;
}

</style>

<section class="client_logo_carousel type_one pt-5 pb-5 bg_light_1" id="Clients">

    <div class="pd_top_80"></div>

    <div class="title_all_box style_one text-center dark_color">
        <div class="title_sections">
            <div class="before_title">Our Clients</div>
            <h2>Together, We Build Success</h2>
        </div>
        <div class="pd_bottom_20"></div>
    </div>

    <!-- First Row -->
    <div class="slider_row">
        <div class="swiper-container" data-swiper='{
            "loop": true,
            "autoplay": { "delay": 0, "disableOnInteraction": false },
            "speed": 3000,
            "slidesPerView": 5,
            "spaceBetween": 30,
            "freeMode": true,
            "breakpoints": {
                "1200": { "slidesPerView": 5 },
                "1024": { "slidesPerView": 4 },
                "768":  { "slidesPerView": 3 },
                "576":  { "slidesPerView": 2 },
                "0":    { "slidesPerView": 2 }
            }
        }'>

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/NEC.svg') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/callino.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Colston.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/CREO.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Dial-Desk.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/down-earth.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Eaton.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/eurocan.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/fll.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/FPA-India.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Handicap-International.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/ICAEW.png') }}"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="slider_row mt-4">
        <div class="swiper-container" data-swiper='{
            "loop": true,
            "autoplay": { "delay": 0, "reverseDirection": true, "disableOnInteraction": false },
            "speed": 3000,
            "slidesPerView": 5,
            "spaceBetween": 30,
            "freeMode": true,
            "breakpoints": {
                "1200": { "slidesPerView": 5 },
                "1024": { "slidesPerView": 4 },
                "768":  { "slidesPerView": 3 },
                "576":  { "slidesPerView": 2 },
                "0":    { "slidesPerView": 2 }
            }
        }'>

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Tribes-India.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/smartcities.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/SimplyMarry.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/RNW.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/religare.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Reliance-Retail.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Novartis.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/NEC.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/love-matters.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/JCCD.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/IMT-Gzb.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/ICAEW.png') }}"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="pd_bottom_80"></div>

</section>


<!--- faqs : CXO Personal Branding ---> 
<section class="faqs-section">
   <div class="pd_top_80"></div>
   <div class="container">

      <!-- HEADER -->
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">
                     CXO Branding FAQs
                  </div>
                  <div class="title">From Leadership to Industry Authority</div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>

      <div class="row">

         <!-- LEFT VISUAL BLOCK -->
         <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
            <div class="simple_image_boxes height_360px parallax_cover">
               <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax" alt="CXO Branding">
            </div>
            <div class="mr_bottom_25"></div>
            <div class="progress_bar">
               <h2>Leadership Authority <span>96%</span></h2>
               <div class="bar">
                  <div class="bar-inner count-bar counted" data-percent="96%" style="width: 96%;"></div>
               </div>
            </div>
         </div>

         <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
            <div class="simple_image_boxes height_360px parallax_cover">
               <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax" alt="Global Visibility">
            </div>
            <div class="mr_bottom_25"></div>
            <div class="progress_bar">
               <h2>Global Reach <span>20+</span></h2>
               <div class="bar">
                  <div class="bar-inner count-bar counted" data-percent="100%" style="width: 100%;"></div>
               </div>
            </div>
         </div>

         <!-- FAQ SECTION -->
         <div class="col-xl-6 col-lg-12">
            <div class="faq_section type_one">
               <div class="block_faq">
                  <div class="accordion">
                     <dl>

                        <!-- FAQ 1 -->
                        <dt class="faq_header active">
                           <span class="icon-play"></span> Why is personal branding critical for CXOs today?
                        </dt>
                        <dd class="accordion-content hide" style="display:block;">
                           <p>
                              In today’s landscape, leadership visibility directly impacts influence. A strong personal brand builds trust with investors, attracts opportunities, and positions you as a voice the industry listens to.
                           </p>
                        </dd>

                        <!-- FAQ 2 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> How do you position CXOs differently from influencers?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              We focus on thought leadership, credibility, and narrative depth—not vanity metrics. Our approach ensures you’re respected for insight and authority, not just visibility.
                           </p>
                        </dd>

                        <!-- FAQ 3 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> What platforms and channels do you focus on?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              We build your presence across high-impact platforms including global media, LinkedIn authority content, podcasts, speaking opportunities, and industry publications.
                           </p>
                        </dd>

                        <!-- FAQ 4 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> What kind of outcomes can a CXO expect?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              You can expect increased industry recognition, stronger stakeholder trust, premium media features, speaking invitations, and a long-term authority position in your domain.
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
<!--- faqs end--->

@endsection

@extends('frontend.layouts.app')


@section('title', 'Home Page')

@section('content')

<style>
   p.gold {

      font-size: 20px;
      margin-bottom: 0;
      margin-top: 10px;
   }

   .textbg {
      background-color: #FFFFFF;
      padding: 10px 10px 10px 10px !important;
      border-radius: 10px !important;
   }

   #homeOneBanner .tab-pane {
      position: relative;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 70vh;

      align-items: center;
   }

   /* Dark overlay */
   #homeOneBanner .banner-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
      /* adjust darkness here */
      z-index: 1;
   }

   /* Content above overlay */
   #homeOneBanner .container {
      position: relative;
      z-index: 2;
   }

   /* Mobile responsive height */
   @media (max-width: 768px) {
      #homeOneBanner .tab-pane {
         min-height: 60vh;
         padding: 40px 0;
      }
   }

   /* Banner content control */
   .tentArea {
      max-width: 520px;
   }

   /* Desktop title */
   #homeOneBanner h2 {
      font-size: 32px;
      line-height: 1.2;
   }

   /* Mobile fixes */
   @media (max-width: 768px) {

      #homeOneBanner h2 {
         font-size: 28px;
         /* title small */
         line-height: 1.3;
      }

      #homeOneBanner p {
         font-size: 15px;
      }

      .tentArea {
         text-align: center;
         margin: auto;
      }

      .animate_down {
         margin-top: 15px;
      }

      .theme_btn_all a {
         padding: 10px 22px;
         font-size: 14px;
      }

      .gold {
         font-size: 16px;
      }
   }
.stteps{
    position: absolute;
    top: 0px;
    right: -15px;
    background: #006039;
    padding: 5px 35px;
    border-radius: 7px;
    color: #fff;
   font-weight: 800;
    border-bottom: 1px solid #fff;
    font-size: 18px;
}
.entry-thumbnail.image {
    overflow: visible !important;
}
.client_logo_carousel .swiper-slide .image img {
     box-shadow: none; 
}
.client_logo_carousel .swiper-slide .image img:hover {
    box-shadow: none;
}
</style>
<div id="content" class="site-content ">
   <!--banner home-->
   <section id="homeOneBanner" class="home2-pmv-section">

      <div class="tab-content">

         @foreach($banners as $key => $banner)
         <div
            class="tab-pane fade boxsl{{ $key+2 }} {{ $key == 0 ? 'active show' : '' }}"
            id="para{{ $key+2 }}"
            style="background-image: url('{{ imageUrl($banner->image) }}'); background-size: cover; background-position: center;"
            role="img"
            aria-label="{{ $banner->title }}">
            <!--<div class="banner-overlay"></div>-->
            <div class="container">
               <div class="row align-items-center-">
                  <div class="col-lg-6 col-sm-12">
                     <div class="tentArea">

                        <h2 class="text-white">
                           {{ $banner->title }}
                        </h2>

                        <p class="gold textbg">
                           {{ $banner->sub_heading }}
                        </p>

                        <span class="line"></span>

                        <p class="text-white">
                           {{ $banner->description }}
                        </p>

                        @if($banner->button_link)
                        <ul class="animate_down list-unstyled">
                           <li class="theme_btn_all">
                              <a href="{{ $banner->button_link }}" class="theme-btn one">
                                 {{ $banner->button_text ?? 'Our Service' }}
                              </a>
                           </li>
                        </ul>
                        @endif

                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach

      </div>

      <div class="pmv-bottom">
         <div class="container">
            <div class="pmv-nav">
               <ul class="nav">
                  @foreach($banners as $key => $banner)
                  <li>
                     <a href="#para{{ $key+2 }}" class="{{ $key==0 ? 'active' : '' }}">
                        {{ $banner->nav_title ?? ' '.($key+1) }}
                     </a>
                  </li>
                  @endforeach
               </ul>
            </div>
         </div>
      </div>

   </section>


   <script>
      document.addEventListener('DOMContentLoaded', function() {
         const tabs = document.querySelectorAll('#homeOneBanner .tab-pane');
         const tabLinks = document.querySelectorAll('#homeOneBanner .pmv-nav .nav a');
         let currentIndex = 0;
         const totalSlides = tabs.length;

         function showSlide(index) {
            tabs.forEach((tab, i) => {
               tab.classList.remove('active', 'show');
               tabLinks[i].classList.remove('active');
            });
            tabs[index].classList.add('active', 'show');
            tabLinks[index].classList.add('active');
            currentIndex = index;
         }

         function nextSlide() {
            const nextIndex = (currentIndex + 1) % totalSlides;
            showSlide(nextIndex);
         }

         setInterval(nextSlide, 5000);

         tabLinks.forEach((link, i) => {
            link.addEventListener('click', (e) => {
               e.preventDefault(); // prevent default jump
               showSlide(i);
            });
         });

         showSlide(currentIndex);
      });
   </script>

   <!--banner home-->




   <!---about us  --->
   <section class="about-section" id="about">
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="image_boxes style_one">
                  <div class="image one">
                     <img src="{{ asset('assets/frontend/img/who-we-are.webp') }}" class="img-fluid" alt="who we are first" width="486" height="729" />
                  </div>
                  <div class="image two">
                     <img src="{{ asset('assets/frontend/img/video.webp') }}" class="img-fluid" alt="who-we-are second" width="241" height="241" />

                  </div>
                  <div class="year_of_experience">
                     <div class="year">15+</div> <!-- Changed here -->
                     <div class="content">
                        <h2>Years of Excellence</h2>
                        <span class="icon-thumbs-up"></span>
                     </div>
                  </div>

               </div>
            </div>
            <div class="col-xl-6 col-lg-10 col-md-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">
                     <div class="before_title">Who We Are</div>
                     <h2>We Elevate CXO Influence & Brand Impact</h2>
                     <div class="description_box">
                        <p>We help CXOs, Corporates & Brands to become industry thought leaders through elite PR and content – delivering brand authority and qualified leads
                        </p>
                        <p>At Elevate One Media, we specialize in premium PR and authority-building for CXOs and corporate leaders—combining top-tier media placements with business-focused storytelling that fuels visibility, credibility, and qualified pipeline growth.
                        </p>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_top_20"></div>
                     <!--===============spacing==============-->
                  </div>
               </div>

               <!--===============spacing==============-->
               <div class="pd_top_20"></div>
               <!--===============spacing==============-->
               <div class="tabs_all_box tabs_all_box_start type_three">
                  <div class="tab_over_all_box">
                     <div class="tabs_header clearfix">
                        <ul class="showcase_tabs_btns nav-pills nav clearfix">
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link active" data-tab="#tabtabone">Mission</a>
                           </li>
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link" data-tab="#tabtabtwo">Vision</a>
                           </li>
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link" data-tab="#tabtabthree">Values</a>
                           </li>
                        </ul>
                     </div>
                     <div class="s_tab_wrapper">
                        <div class="s_tabs_content">
                           <div class="s_tab fade active-tab show" id="tabtabone">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>To amplify visionary voices and build reputations that move markets—through insight-driven PR, executive positioning, and creative content.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="s_tab fade" id="tabtabtwo">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>To become India’s most respected boutique PR partner for CXOs, founders, and purpose-led brands looking to lead conversations and drive change.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="s_tab fade" id="tabtabthree">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>Integrity, agility, and creativity guide us. We listen deeply, act transparently, and stay relentlessly curious to deliver real, lasting impact.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_40"></div>
         <!--===============spacing==============-->
         <div class="row">
            <div class="col-xl-6 col-lg-6 mb-5 mb-lg-0 mb-xl-0">
               <div class="link_box_contents style_one">
                  <div class="link_content_bx">
                     <div class="image_box">
                        <img src="{{ asset('assets/frontend/img/1.webp') }}" alt="discover how we transform" width="138" height="190">
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
                        <h2>Why India’s CXOs choose Elevate One Media</h2>
                        <a href="https://calendly.com/elevateonemedia/30min">Get Appointment <i class="icon-right-arrow-long"></i></a>
                     </div>
                     <div class="image_box">
                        <img src="{{ asset('assets/frontend/img/2.webp') }}" alt="why india’s cxos choose" width="138" height="190">
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


   <!----CTA END -->
   <section class="contact-section"
      style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.4)), url('{{ asset('assets/frontend/img/from-discovery-to-dominance.webp') }}') center center / cover no-repeat;">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">
                     <div class="before_title text-white">Our Methodology</div>
                     <h2 class="text-white">From Discovery to Dominance</h2>
                     <p class="text-white">A proven seven-step engagement path: Discover → Diagnose → Strategise → Craft → Engage → Amplify → Report & Optimise. Each stage crafted to turn CXO narratives into measurable media impact.</p>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="video_btn_all left">
                  <div class="video_box color_dark">
                     <a href="https://www.youtube.com/71EZb94AS1k" class="lightbox-image"><i class="icon-play"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 hidden-lg">
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
   </section>


   <section class="contact-box-sections" id="enquiry">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="funfacts">
                  <!--===============spacing==============-->
                  <div class="pd_top_80"></div>
                  <!--===============spacing==============-->
                  <div class="row gutter_25px">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="counter-block style_three count-box counted">
                           <div class="icon_box icon_yes ">
                              <div class="icon">
                                 <img src="{{ asset('assets/frontend/img/icon1.svg') }}" alt = "successful media placements" width="60" height="60">
                              </div>
                           </div>
                           <div class="content_box">
                              <p>Successful media placements & award wins for CXOs across sectors.</p>
                              <h6>
                                 <div class="coun_ter">
                                    <span class="count-text" data-speed="1500" data-stop="320">250</span>
                                    <small>+</small>
                                 </div>
                                 Projects Delivered
                              </h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="counter-block style_three count-box counted">
                           <div class="icon_box icon_yes ">
                              <div class="icon">
                                 <img src="{{ asset('assets/frontend/img/icon2.svg') }}" alt = "Strategic reputation campaigns" width="60" height="60">
                              </div>
                           </div>
                           <div class="content_box">
                              <p>Strategic reputation campaigns uniquely tailored for India’s top CXOs & founders</p>
                              <h6>
                                 <div class="coun_ter">
                                    <span class="count-text" data-speed="1500" data-stop="85">100</span>
                                    <small>+</small>
                                 </div>
                                 CXOs Impacted
                              </h6>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_25"></div>
                  <!--===============spacing==============-->
                  <div class="description_box">
                     <p>ElevateOne Media partners with founders & CXOs to transform leadership narratives into measurable media impact, thought leadership, and awards recognition.</p>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_30"></div>
                  <!--===============spacing==============-->
                  <div class="theme_btn_all color_one">
                     <a href="#enquiry" class="theme-btn one">Contact Us</a>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_50"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="contact_form_box_all type_four mr_top_minus_320 mr_md_top_zero">
                  <div class="title_all_box style_one text-center dark_color">
                     <div class="title_sections">
                        <div class="before_title">
                           Reach Us
                        </div>
                        <h2>Send a Message</h2>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
                  </div>
                  @include('frontend.layouts.common.mainform')

                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
                  <div class="contact_box_content style_two">
                     <div class="contact_box_inner color_one">
                        <div class="text ">
                           <h3>General Enquiries</h3>
                           <hr>
                           <p>Phone: +91 8796927200
                              &nbsp;|&nbsp; Email: info@mirashka.in


                           </p>
                        </div>
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

   <!----CTA START -->




   <!--service-->
   <section class="service-section bg_light_1" id="services">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
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
                              <img src="{{ asset('assets/frontend/img/executive.png') }}" alt="Executive Influence" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Executive.svg') }}" alt="Executive Influence icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">Executive Influence & Media Authority</a></h2>
                              <p class="text-white">Strategic Media Placements</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/cxo.png') }}" alt="cxo digital presence" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/CXO-Digital.svg') }}" alt="cxo digital presence icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">CXO Digital Presence & Thought Leadership</a></h2>
                              <p class="text-white">LinkedIn Authority Building</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/voice.png') }}" alt="voice of leadership" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Voice.svg') }}" alt="voice of leadership icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">Voice of Leadership – Podcast & Audio IP</a></h2>
                              <p class="text-white">Podcasting Services</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/reputation.png') }}" alt="reputation capital awards" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Reputation.svg') }}" alt="reputation capital awards icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">Reputation Capital & Awards Positioning</a></h2>
                              <p class="text-white">Awards Consulting</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/presence.png') }}" alt="cxo presence industry visibility" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/CXO.svg') }}" alt="cxo presence industry visibility icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">CXO Presence & Industry Visibility</a></h2>
                              <p class="text-white">Speaking Engagements & Events</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/reputation-risk.png') }}" alt="reputation risk crisis preparedness" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Reputation-Risk.svg') }}" alt="reputation risk crisis preparedness icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">Reputation Risk & Crisis Preparedness</a></h2>
                              <p class="text-white">Speaking Engagements & Events</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/capital.png') }}" alt="capital markets communication" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Capital.svg') }}" alt="capital markets communication icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">Capital Markets Communication</a></h2>
                              <p class="text-white">Investor Visibility</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/leadership.png') }}" alt="leadership media training" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Leadership.svg') }}" alt="leadership media training icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">Leadership Media Training</a></h2>
                              <p class="text-white"> Influence Coaching</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset('assets/frontend/img/regional.png') }}" alt="regional impact communication" width="279" height="400">
                           </div>
                           <div class="content">
                              <div class="icon_box"><span><img src="{{ asset('assets/frontend/img/Regional.svg') }}" alt="regional impact communication icon" width="30" height="30"></span></div>
                              <h2 class="title_service"><a href="#">Regional Impact Communication</a></h2>
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
   <!--Industries We Amplify-->
   <section class="process-section" id="industries">
      <!--===============spacing==============-->
      <div class="pd_top_60"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-lg-6 m-auto">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Industries We Amplify</div>
                     <div class="title">Strategic Communications Across Sectors</div>
                     <div class="small_text_sub">Focused expertise where it matters most</div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_40"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/Enterprise.svg') }}" class="img-fluid svg_image" alt="enterprise tech icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Enterprise Tech & B2B SaaS</a></h2>
                     <p>Building authority for high-growth software and enterprise technology brands.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">01</h6>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/AI.svg') }}" class="img-fluid svg_image" alt="ai, deep tech icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">AI, Deep Tech & Innovation</a></h2>
                     <p>Positioning cutting-edge pioneers and disruptive innovators in emerging tech.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">02</h6>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/Health.svg') }}" class="img-fluid svg_image" alt="health wellness icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Health & Wellness</a></h2>
                     <p>Crafting credible narratives for healthcare, wellness, and lifestyle brands.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">03</h6>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/BFSI.svg') }}" class="img-fluid svg_image" alt="bfsi intech icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">BFSI & Fintech</a></h2>
                     <p>Driving trust, credibility, and visibility for financial services and fintech disruptors.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">04</h6>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/Infrastructure.svg') }}" class="img-fluid svg_image" alt="infrastructure energy icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Infrastructure, Energy & Sustainability</a></h2>
                     <p>Enhancing reputation for brands driving impact in energy transition and infrastructure.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">05</h6>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/Luxury.svg') }}" class="img-fluid svg_image" alt="luxury premium consumer icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Luxury & Premium Consumer Brands</a></h2>
                     <p>Creating aspirational positioning and influence for high-end consumer products.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">06</h6>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/International.svg') }}" class="img-fluid svg_image" alt="international brands entering icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">International Brands Entering India</a></h2>
                     <p>Localizing global stories and building market relevance for international entrants.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">07</h6>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <img src="{{ asset('assets/frontend/img/Public.svg') }}" class="img-fluid svg_image" alt="public sector policy icon" width="50" height="50">
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Public Sector & Policy Advocacy</a></h2>
                     <p>Supporting advocacy, reputation, and visibility initiatives in public policy and governance.</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">08</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_60"></div>
      <!--===============spacing==============-->
   </section>
   <!---Industries We Amplify end-->
   <!--Strategic Partnership-->
   <section class="contact-section"
      style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.7)), url('https://media.istockphoto.com/id/1487387511/photo/interior-of-modern-design-office-with-no-people.jpg?s=1024x1024&w=is&k=20&c=dGS7TrOlYINbSURq68TEBxVkSLoKPrGMweOYa1eMiZ4=') center center / cover no-repeat;">
      <div class="pd_top_80"></div>
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="title_all_box style_one light_color">
                  <div class="title_sections">
                     <div class="before_title color_white">Strategic Partnership</div>
                     <h2>Amplify Your CXO Visibility</h2>
                     <p>Discover how ElevateOne Media helps leaders craft powerful narratives, secure targeted media, and drive outcomes that matter to business growth and reputation.</p>
                  </div>
               </div>
               <div class="content_box_cn style_one light_color">
                  <div class="txt_content">
                     <h3><a href="#" class="color_white">Discover & Diagnose</a></h3>
                     <p>We analyze your current brand positioning, goals, and market landscape to identify the most impactful opportunities.</p>
                  </div>
               </div>
               <div class="pd_bottom_20"></div>
               <div class="content_box_cn style_one light_color">
                  <div class="txt_content">
                     <h3><a href="#" class="color_white">Strategise & Craft</a></h3>
                     <p>We build precision messaging and thought leadership content tailored to your target audience and industry trends.</p>
                  </div>
               </div>
               <div class="pd_bottom_20"></div>
               <div class="content_box_cn style_one light_color">
                  <div class="txt_content">
                     <h3><a href="#" class="color_white">Engage & Amplify</a></h3>
                     <p>From media placements and podcasts to industry events and awards, we turn strategy into measurable influence.</p>
                  </div>
               </div>
               <div class="pd_bottom_20"></div>
               <div class="content_box_cn style_one light_color">
                  <div class="txt_content">
                     <h3><a href="#" class="color_white">Report & Optimise</a></h3>
                     <p>Transparent reporting and insights ensure your visibility keeps growing and stays aligned with business objectives.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-12">
               <div class="contact_form_box_all type_two">
                  <div class="contact_form_box_inner">
                     @include('frontend.layouts.common.mainform')

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pd_bottom_80"></div>
   </section>
   <!--Strategic Partnership end -->

   <!--Why CXOs Choose Us-->
   <section class="content-section">
      <!--===============spacing==============-->
      <div class="pd_top_50"></div>
      <!--===============spacing==============-->
      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 m-auto">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Why CXOs Choose Us</div>
                     <div class="title">Our Edge</div>
                     <div class="small_text_sub">Strategic Precision Meets Executive Partnership</div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_40"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="cxo-level engagement icon" width="60" height="60">
                  </div>
                  <div class="content_box">
                     <span class="step_no">01</span>
                     <div class="text_box">
                        <h2><a href="#">CXO-level Engagement</a></h2>
                        <p>Direct senior leadership collaboration ensuring clarity, speed & trust.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/Owned.svg') }}" class="img-fluid svg_image" alt="owned earned integration icon" width="60" height="60">
                  </div>
                  <div class="content_box">
                     <span class="step_no">02</span>
                     <div class="text_box">
                        <h2><a href="#">Owned + Earned Integration</a></h2>
                        <p>Unified storytelling across platforms for stronger, consistent brand presence.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/Reputation-ip.svg') }}" class="img-fluid svg_image" alt="reputation IP development icon" width="60" height="60">
                  </div>
                  <div class="content_box">
                     <span class="step_no">03</span>
                     <div class="text_box">
                        <h2><a href="#">Reputation IP Development</a></h2>
                        <p>Creating proprietary thought leadership & unique brand assets to stand out.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/Insight-driven.svg') }}" class="img-fluid svg_image" alt="insight driven strategy icon" width="60" height="60">
                  </div>
                  <div class="content_box">
                     <span class="step_no">04</span>
                     <div class="text_box">
                        <h2><a href="#">Insight-driven Strategy</a></h2>
                        <p>Research-led, data-informed communications strategies tailored to your business.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>


   <!----project end---->
   <!---Why CXOs Choose Us end -->
   <!---Meet the Leaders--->
   <!--<section class="team bg_light_1"   id="team">-->
   <!--   <div class="pd_top_80"></div>-->
   <!--   <div class="container">-->
   <!--      <div class="row align-items-end">-->
   <!--         <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
   <!--            <div class="title_all_box style_one  dark_color">-->
   <!--               <div class="title_sections">-->
   <!--                  <div class="before_title">Our Team</div>-->
   <!--                  <h2>Meet the Leaders</h2>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--         <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
   <!--            <div class="description_box">-->
   <!--               <p>At ElevateOne Media, our leadership combines decades of experience in PR strategy, digital media, and thought leadership advisory to help CXOs and brands shape impactful narratives.</p>-->
   <!--               <div class="mr_bottom_20"></div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--         <div class="mr_bottom_30"></div>-->
   <!--      </div>-->
   <!--      <div class="row">-->
   <!--         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
   <!--            <div class="team_box style_one">-->
   <!--               <div class="team_box_outer">-->
   <!--                  <div class="member_image">-->
   <!--                     <img src="{{ asset('assets/frontend/img/manoj.jpg') }}" alt="Manoj Barman" />-->
   <!--                  </div>-->
   <!--                  <div class="about_member">-->
   <!--                     <div class="authour_details">-->
   <!--                        <span>Founder &amp; MD</span>-->
   <!--                        <h6>Manoj Barman</h6>-->
   <!--                        <p class="text-white">With over two decades in strategic communications, Manoj has led transformative campaigns for Fortune 500 firms, shaping reputation and visibility in complex markets. His expertise lies in CXO advisory, crisis preparedness, and media strategy.</p>-->
   <!--                        <div class="button_view">-->
   <!--                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View LinkedIn </a>-->
   <!--                        </div>-->
   <!--                     </div>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--            <div class="mr_bottom_30"></div>-->
   <!--         </div>-->
   <!--         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
   <!--            <div class="team_box style_one">-->
   <!--               <div class="team_box_outer">-->
   <!--                  <div class="member_image">-->
   <!--                     <img src="{{ asset('assets/frontend/img/divya.jpg') }}" alt="Divya Burman" />-->
   <!--                  </div>-->
   <!--                  <div class="about_member">-->
   <!--                     <div class="authour_details">-->
   <!--                        <span>Co-Founder</span>-->
   <!--                        <h6>Divya Burman</h6>-->
   <!--                        <p class="text-white">Divya brings a sharp editorial vision and expertise in content IP, thought leadership, and brand storytelling. She helps CXOs craft authentic narratives that align business goals with audience trust and industry impact.</p>-->
   <!--                        <div class="button_view">-->
   <!--                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View LinkedIn </a>-->
   <!--                        </div>-->
   <!--                     </div>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--            <div class="mr_bottom_30"></div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--   </div>-->
   <!--   <div class="pd_bottom_60"></div>-->
   <!--</section>-->
   <!--- Meet the Leaders end--->
   <!---Proof of Impact---->


   <!---our Methodology---->
   <section class="project-section bg_light_1" id="method">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Our Methodology</div>
                     <h2>From Discovery to Dominance</h2>
                  </div>
                  <!--===============spacing==============-->
                  <div class="mr_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
         <div class="row clearfix">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Discover.png') }}" alt="Discover" loading="lazy" width="255" height="250">
                     <small class="stteps">01 &nbsp <i class="fa fa-long-arrow-right"></i></small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Discover</a></h2>
                     <div class="meta_value">Uncover brand strengths & audience insights</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Diagnose.png') }}" alt="Diagnose" loading="lazy" width="255" height="250">
                     <small class="stteps">02 &nbsp <i class="fa fa-long-arrow-right"></i></small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Diagnose</a></h2>
                     <div class="meta_value">Pinpoint visibility gaps & growth challenges</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Strategise.png') }}" alt="Strategise" loading="lazy" width="255" height="250">
                     <small class="stteps">03 &nbsp <i class="fa fa-long-arrow-right"></i></small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Strategise</a></h2>
                     <div class="meta_value">Build precision PR & content gameplans</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Craft.png') }}" alt="Craft" loading="lazy" width="255" height="250">
                     <small class="stteps">04 &nbsp <i class="fa fa-long-arrow-right"></i></small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Craft</a></h2>
                     <div class="meta_value">Develop compelling narratives & media assets</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Engage.png') }}" alt="Engage" loading="lazy" width="255" height="250">
                     <small class="stteps">05 &nbsp <i class="fa fa-long-arrow-right"></i></small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Engage</a></h2>
                     <div class="meta_value">Activate earned & owned media, influencers</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Amplify.png') }}" alt="Amplify" loading="lazy" width="255" height="250">
                     <small class="stteps">06 &nbsp <i class="fa fa-long-arrow-right"></i></small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Amplify</a></h2>
                     <div class="meta_value">Expand reach via integrated campaigns</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Report.png') }}" alt="Report & Optimise" loading="lazy" width="255" height="250">
                     <small class="stteps">07 &nbsp <i class="fa fa-long-arrow-right"></i></small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Report & Optimise</a></h2>
                     <div class="meta_value">Measure impact, refine & enhance strategy</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Sustain.png') }}" alt="sustain scale" loading="lazy" width="255" height="250">
                     <small class="stteps">08 &nbsp </small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Sustain & Scale</a></h2>
                     <div class="meta_value">Drive long-term visibility & market leadership</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_60"></div>
      <!--===============spacing==============-->
   </section>
   <!---our Methodology end---->

   <section class="client_logo_carousel type_one pt-5 pb-5 " id="Clients">

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

              @for ($i = 1; $i <= 33; $i++)
                   <div class="swiper-slide">
                       <div class="image">
                           <img src="{{ asset('assets/frontend/img/page/client/' . $i . '.jpg') }}" alt="client {{ $i }}" width="103" height="41">
                       </div>
                   </div>
               @endfor

            </div>
         </div>
      </div>

      <div class="pd_bottom_80"></div>

   </section>
  

   <section class="testimonial-section px-3 px-md-5 bg_light_1" id="Impact">
      <div class="pt-5"></div>
      <div class="container">
         <div class="row">
            <div class="col-12 text-center">
               <div class="title_all_box style_seven dark_color">
                  <div class="title_sections">
                     <div class="before_title">Proof of Impact</div>
                     <div class="title">Success Stories</div>
                     <div class="small_text_sub">Measurable Outcomes, Credible Wins</div>
                  </div>
                  <div class="pb-4"></div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-lg-11 mx-auto">
               <div class="testimonial_sec dark_color style_two">

                  <!-- Main Testimonials Swiper -->
                  <div class="swiper single_swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="testimonial_box text-center">
                              <div class="authour_image mb-3">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/NEC.svg') }}" alt="Prashant Shrivastava" width="120" height="120"/>
                              </div>
                              <div class="comment">
                                 “The team’s strategic guidance has strengthened NEC Group’s brand voice across India, driving real business value.”
                              </div>
                           </div>
                        </div>

                        <div class="swiper-slide">
                           <div class="testimonial_box text-center">
                              <div class="authour_image mb-3">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/Liv.svg') }}" alt="Jasmeet Singh" width="120" height="120"/>
                              </div>
                              <div class="comment">
                                 “From media coverage to stakeholder engagement, their tailored approach positioned Liv India Management as an industry leader.”
                              </div>
                           </div>
                        </div>

                        <div class="swiper-slide">
                           <div class="testimonial_box text-center">
                              <div class="authour_image mb-3">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/colston-concepts.svg') }}" alt="Anil Ahuja" width="120" height="120" />
                              </div>
                              <div class="comment">
                                 “Their award strategy and brand storytelling helped Colston Concepts gain international recognition.”
                              </div>
                           </div>
                        </div>

                        <div class="swiper-slide">
                           <div class="testimonial_box text-center">
                              <div class="authour_image mb-3">
                                 <i class="icon-quote"></i>
                                 <img src="{{ asset('assets/frontend/img/IMT-Ghaziabad.svg') }}" alt="Dr. Atish Chattopadhyay" width="120" height="120" />
                              </div>
                              <div class="comment">
                                 “A data-driven and creative approach enhanced IMT Ghaziabad’s visibility among students and academia.”
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Arrows for Desktop -->
                     <div class="swiper-button-next d-none d-md-block"></div>
                     <div class="swiper-button-prev d-none d-md-block"></div>
                  </div>

                  <!-- Author Info Swiper -->
                  <div class="swiper single_swiper_tab mt-3">
                     <div class="swiper-wrapper text-center">
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
      <div class="pb-5"></div>
   </section>


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
                              <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax" alt="client satisfaction" width="255" height="360">
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
                              <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax" alt="media reach" width="255" height="360">
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
                                          <span class="icon-play"></span> What services do you offer?
                                       </dt>
                                       <dd class="accordion-content hide">
                                          <p>
                                             We provide strategic PR, CXO positioning, award consulting, media training, and digital presence solutions tailored to elevate your brand.
                                          </p>
                                       </dd>
                                       <dt class="faq_header">
                                          <span class="icon-play"></span> Do you work with startups or only large companies?
                                       </dt>
                                       <dd class="accordion-content hide">
                                          <p>
                                             We partner with growth-stage startups, SMEs, and large enterprises alike—focusing on brands that want to build credible market influence.
                                          </p>
                                       </dd>
                                       <dt class="faq_header">
                                          <span class="icon-play"></span> How soon can I see results?
                                       </dt>
                                       <dd class="accordion-content hide">
                                          <p>
                                             Timelines vary, but most clients start seeing media traction or digital visibility improvements within the first 60–90 days of engagement.
                                          </p>
                                       </dd>
                                       <dt class="faq_header">
                                          <span class="icon-play"></span> Do you guarantee media coverage?
                                       </dt>
                                       <dd class="accordion-content hide">
                                          <p>
                                             While we cannot promise specific headlines, our team uses strong editorial networks and insight-driven strategies to maximize coverage potential.
                                          </p>
                                       </dd>
                                       <dt class="faq_header active">
                                          <span class="icon-play"></span> How do I get started?
                                       </dt>
                                       <dd class="accordion-content hide" style="display: block;">
                                          <p>
                                             Simply reach out through our website contact form or schedule a discovery call with our consultants to discuss your goals and next steps.
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
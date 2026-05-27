@extends('frontend.layouts.app')


@section('title', 'Home Page')

@section('content')

@include('frontend.pages.home-sections.home-typography')

<style>
   p.gold {
      margin-bottom: 0;
      margin-top: 10px;
   }

   .textbg {
      background-color: #FFFFFF;
      padding: 10px 10px 10px 10px !important;
      border-radius: 8px !important;
   }

   #homeOneBanner {
      position: relative;
   }

   #homeOneBanner .tab-content {
      position: relative;
      min-height: max(680px, 82vh);
   }

   #homeOneBanner .tab-pane {
      position: relative;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: max(680px, 82vh);
      height: auto !important;
      padding-bottom: 88px;
      box-sizing: border-box;
   }

   #homeOneBanner .tab-pane .container {
      padding-top: 72px;
      padding-bottom: 24px;
   }

   #homeOneBanner .tentArea {
      padding-bottom: 12px;
   }

   #homeOneBanner .animate_down {
      margin-top: 20px;
      margin-bottom: 0;
   }

   #homeOneBanner .pmv-bottom {
      position: relative;
      z-index: 5;
      margin-top: -72px;
      margin-bottom: 24px;
      pointer-events: none;
   }

   #homeOneBanner .pmv-bottom .pmv-nav,
   #homeOneBanner .pmv-bottom .container,
   #homeOneBanner .pmv-bottom a {
      pointer-events: auto;
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
      #homeOneBanner .tab-content {
         min-height: max(560px, 78vh);
      }

      #homeOneBanner .tab-pane {
         min-height: max(560px, 78vh);
         padding-bottom: 72px;
      }

      #homeOneBanner .tab-pane .container {
         padding-top: 48px;
      }

      #homeOneBanner .pmv-bottom {
         margin-top: -56px;
         margin-bottom: 16px;
      }
   }

   /* Banner content control */
   .tentArea {
      max-width: 520px;
   }

   /* Mobile fixes */
   @media (max-width: 768px) {
      .tentArea {
         text-align: center;
         margin: auto;
      }

      .animate_down {
         margin-top: 15px;
      }
   }
{{-- Legacy methodology card styles live in home-sections.methodology-legacy --}}
.client_logo_carousel .swiper-slide .image img {
     box-shadow: none; 
}
.client_logo_carousel .swiper-slide .image img:hover {
    box-shadow: none;
}
</style>
<div id="content" class="site-content mirashka-home">
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
                        {{ $key + 1 }}
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
   <style>
      .about-section .who-we-are-tab-icon {
         margin-right: 6px;
         font-size: 1.05em;
         vertical-align: -2px;
         color: var(--primary-color-one, #006039);
      }
      .about-section .tabs_header ul li a.active .who-we-are-tab-icon {
         color: inherit;
      }
   </style>
   <section class="about-section" id="about">
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="image_boxes style_one">
                  <div class="image one">
                     <img src="{{ asset('assets/frontend/img/hraas/hraas-v3-partner.png') }}" class="img-fluid" alt="Business leader with HR consultant" width="486" height="729" loading="lazy" />
                  </div>
                  <div class="image two">
                     <img src="{{ asset('assets/frontend/img/workforce/wfm-reporting-team-hands.png') }}" class="img-fluid" alt="Team collaboration and onboarding" width="241" height="241" loading="lazy" />

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
                     <h2>We Build People Systems That Help Businesses Scale</h2>
                     <div class="description_box">
                        <p>Mirashka is a Human Resource, staffing and HRaaS partner for startups, MSMEs, family businesses, franchises and growing companies. We help organizations find the right talent, strengthen leadership, manage compliance, streamline HR operations and build people-first systems that support business growth.</p>
                        <p>At Mirashka, we believe the right people shape the future of businesses. Our mission is to connect visionary leaders with transformative opportunities while helping companies build structured, compliant and high-performing teams.</p>
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
                              <a class="s_tab_btn nav-link active" data-tab="#tabtabone"><i class="ri-focus-3-line who-we-are-tab-icon" aria-hidden="true"></i> Mission</a>
                           </li>
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link" data-tab="#tabtabtwo"><i class="ri-eye-line who-we-are-tab-icon" aria-hidden="true"></i> Vision</a>
                           </li>
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link" data-tab="#tabtabthree"><i class="ri-heart-3-line who-we-are-tab-icon" aria-hidden="true"></i> Values</a>
                           </li>
                        </ul>
                     </div>
                     <div class="s_tab_wrapper">
                        <div class="s_tabs_content">
                           <div class="s_tab fade active-tab show" id="tabtabone">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>To democratize professional HR support through flexible HRaaS models, helping new entrepreneurs, startups and growing companies access the tools, talent and HR systems they need to build and scale.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="s_tab fade" id="tabtabtwo">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>To become the go-to HR partner for emerging businesses and established enterprises by redefining workforce management with agile, affordable and expert-led HR solutions.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="s_tab fade" id="tabtabthree">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>Integrity, clarity, responsiveness, compliance discipline, people-first thinking and business ownership guide every Mirashka HR engagement.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_25"></div>
               <!--===============spacing==============-->
               <div class="theme_btn_all color_one">
                  <a href="{{ route('aboutus') }}" class="theme-btn one">More About Mirashka HR</a>
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
                        <h2>Discover how we help businesses build stronger people systems</h2>
                        <a href="{{ route('aboutus') }}">More About Mirashka HR <i class="icon-right-arrow-long"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="link_box_contents style_two">
                  <div class="link_content_bx">
                     <div class="con_box">
                        <h2>Why India's CXOs choose Mirashka</h2>
                        <a href="https://calendly.com/elevateonemedia/30min">Get Appointment <i class="icon-right-arrow-long"></i></a>
                     </div>
                     <div class="image_box">
                        <img src="{{ asset('assets/frontend/img/2.webp') }}" alt="why india's cxos choose" width="138" height="190">
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

   {{-- Section 3: Why Mirashka (home-only) --}}
   <style>
      .home-why-mirashka {
         padding: 88px 0 96px;
         background: linear-gradient(165deg, #0a1410 0%, #0f1f18 38%, #152a22 70%, #0d1612 100%);
         overflow: hidden;
      }
      .home-why-mirashka__inner {
         max-width: 1400px;
         margin: 0 auto;
         padding: 0 28px;
      }
      .home-why-mirashka__header {
         text-align: center;
         max-width: 1100px;
         margin: 0 auto 52px;
         padding: 0;
      }
      .home-why-mirashka__eyebrow {
         display: inline-block;
         font-size: 12px;
         font-weight: 700;
         letter-spacing: 0.14em;
         text-transform: uppercase;
         color: #7dcea8;
         margin-bottom: 14px;
      }
      .home-why-mirashka__title {
         font-size: clamp(1.75rem, 3.8vw, 2.65rem);
         font-weight: 800;
         line-height: 1.2;
         color: #fff;
         margin: 0 0 16px;
      }
      .home-why-mirashka__tagline {
         font-size: 1.05rem;
         font-weight: 600;
         color: rgba(255, 255, 255, 0.92);
         margin: 0 0 14px;
         line-height: 1.5;
      }
      .home-why-mirashka__intro {
         font-size: 1rem;
         line-height: 1.75;
         color: rgba(255, 255, 255, 0.78);
         margin: 0;
      }
      .home-why-mirashka__stage {
         display: grid;
         grid-template-columns: minmax(0, 1fr) minmax(320px, 380px) minmax(0, 1fr);
         gap: 32px 56px;
         align-items: center;
         width: 100%;
         margin: 0 auto;
         padding: 0;
      }
      .home-why-mirashka__col {
         display: flex;
         flex-direction: column;
         gap: 0;
      }
      .home-why-mirashka__col--left {
         align-items: flex-end;
         text-align: right;
      }
      .home-why-mirashka__col--right {
         align-items: flex-start;
         text-align: left;
      }
      .home-why-mirashka__card {
         position: relative;
         padding: 28px 12px 32px;
         max-width: 420px;
         width: 100%;
      }
      .home-why-mirashka__card + .home-why-mirashka__card {
         border-top: 1px solid rgba(125, 206, 168, 0.18);
      }
      .home-why-mirashka__card-num {
         position: absolute;
         top: 18px;
         font-size: clamp(3.5rem, 6vw, 5rem);
         font-weight: 800;
         line-height: 1;
         color: rgba(255, 255, 255, 0.06);
         pointer-events: none;
         user-select: none;
      }
      .home-why-mirashka__col--left .home-why-mirashka__card-num { right: 0; }
      .home-why-mirashka__col--right .home-why-mirashka__card-num { left: 0; }
      .home-why-mirashka__card-icon {
         display: inline-flex;
         align-items: center;
         justify-content: center;
         width: 56px;
         height: 56px;
         margin-bottom: 16px;
         color: #7dcea8;
         font-size: 36px;
         line-height: 1;
      }
      .home-why-mirashka__card h3 {
         font-size: 1.1rem;
         font-weight: 700;
         color: #fff;
         margin: 0 0 10px;
         line-height: 1.35;
         position: relative;
         z-index: 1;
      }
      .home-why-mirashka__card p {
         font-size: 0.92rem;
         line-height: 1.65;
         color: rgba(255, 255, 255, 0.75);
         margin: 0;
         position: relative;
         z-index: 1;
      }
      .home-why-mirashka__center {
         flex-shrink: 0;
         width: 100%;
         max-width: 380px;
      }
      .home-why-mirashka__center img {
         display: block;
         width: 100%;
         height: auto;
         min-height: 400px;
         max-height: 500px;
         object-fit: cover;
         border-radius: 8px;
         box-shadow: 0 28px 64px rgba(0, 0, 0, 0.45);
         border: 1px solid rgba(125, 206, 168, 0.2);
      }
      .home-why-mirashka__cta-wrap {
         text-align: center;
         margin-top: 48px;
         padding: 0 15px;
      }
      @media (max-width: 991px) {
         .home-why-mirashka__stage {
            grid-template-columns: 1fr;
            gap: 0;
         }
         .home-why-mirashka__center {
            width: 100%;
            max-width: 360px;
            margin: 0 auto 8px;
            order: -1;
         }
         .home-why-mirashka__col--left,
         .home-why-mirashka__col--right {
            align-items: stretch;
            text-align: left;
         }
         .home-why-mirashka__card {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
         }
         .home-why-mirashka__col--left .home-why-mirashka__card-num { left: 0; right: auto; }
      }
   </style>
   <section class="content-section home-why-mirashka" id="home-why-mirashka">
      <div class="home-why-mirashka__inner">
         <header class="home-why-mirashka__header">
            <span class="home-why-mirashka__eyebrow">Why Mirashka</span>
            <h2 class="home-why-mirashka__title">Why Growing Businesses Choose Mirashka HR</h2>
            <p class="home-why-mirashka__intro">Because Mirashka does not work like a conventional placement agency. We work as an extended people partner — combining HR strategy, recruitment execution, payroll coordination, legal and compliance awareness, leadership hiring and HR technology into one practical operating model.</p>
         </header>

         <div class="home-why-mirashka__stage">
            <div class="home-why-mirashka__col home-why-mirashka__col--left">
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">01</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-briefcase-4-line"></i></span>
                  <h3>End-to-End HR Solutions</h3>
                  <p>Recruitment, compliance, payroll, documentation, legal support and workforce advisory under one roof.</p>
               </article>
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">02</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-user-star-line"></i></span>
                  <h3>Leadership Hiring Expertise</h3>
                  <p>Specialized search support for senior roles, CXOs and transformational leaders.</p>
               </article>
            </div>

            <div class="home-why-mirashka__center">
               <img
                  src="{{ asset('assets/frontend/img/home/home-why-mirashka-hero.png') }}"
                  alt="Founder and HR consultant reviewing workforce strategy in a modern office"
                  loading="lazy"
                  width="300"
                  height="420"
               >
            </div>

            <div class="home-why-mirashka__col home-why-mirashka__col--right">
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">03</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-shield-check-line"></i></span>
                  <h3>Tailored Legal &amp; Compliance Support</h3>
                  <p>Employment-law-aligned guidance, policy support, audits and workplace risk mitigation.</p>
               </article>
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">04</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-line-chart-line"></i></span>
                  <h3>HRaaS Flexibility</h3>
                  <p>Scalable HR support designed for startups, MSMEs and growing businesses that need expert HR without heavy fixed cost.</p>
               </article>
            </div>
         </div>

         <div class="home-why-mirashka__cta-wrap">
            <a href="https://calendly.com/elevateonemedia/30min" class="home-why-mirashka__cta theme-btn one" target="_blank" rel="noopener noreferrer">
               Book Your 30-Minute Discovery Call <i class="ri-arrow-right-line" aria-hidden="true"></i>
            </a>
         </div>
      </div>
   </section>

   {{-- Section 4: The Growth Reality (home-only) --}}
   <style>
      .home-growth-reality {
         position: relative;
         padding: 0 0 100px;
         margin-top: -1px;
         background: #eef2f0;
         overflow: hidden;
      }
      .home-growth-reality__wave {
         display: block;
         width: 100%;
         height: 56px;
         line-height: 0;
         color: #0d1612;
         transform: translateY(1px);
      }
      .home-growth-reality__wave svg {
         display: block;
         width: 100%;
         height: 56px;
      }
      .home-growth-reality__bg {
         position: absolute;
         inset: 56px 0 0;
         background:
            radial-gradient(ellipse 80% 50% at 100% 0%, rgba(0, 96, 57, 0.08) 0%, transparent 55%),
            radial-gradient(ellipse 60% 40% at 0% 100%, rgba(125, 206, 168, 0.12) 0%, transparent 50%),
            linear-gradient(180deg, #eef2f0 0%, #f8faf9 100%);
         pointer-events: none;
      }
      .home-growth-reality__inner {
         position: relative;
         z-index: 1;
         max-width: 1280px;
         margin: 0 auto;
         padding: 48px 24px 0;
      }
      .home-growth-reality__shell {
         display: grid;
         grid-template-columns: minmax(280px, 36%) minmax(0, 64%);
         align-items: stretch;
         gap: 0;
         border-radius: 8px;
         overflow: hidden;
         box-shadow: 0 32px 80px rgba(6, 13, 10, 0.14);
         border: 1px solid rgba(0, 96, 57, 0.12);
         background: #fff;
      }
      .home-growth-reality__story {
         padding: 36px 28px 32px;
         background: linear-gradient(165deg, #0a1410 0%, #122820 55%, #1a3d32 100%);
         color: #fff;
         position: relative;
      }
      .home-growth-reality__story::after {
         content: '';
         position: absolute;
         top: 0;
         right: 0;
         width: 120px;
         height: 100%;
         background: linear-gradient(90deg, transparent, rgba(125, 206, 168, 0.06));
         pointer-events: none;
      }
      .home-growth-reality__label-pill {
         display: inline-flex;
         align-items: center;
         gap: 8px;
         padding: 6px 14px 6px 10px;
         border-radius: 8px;
         background: rgba(125, 206, 168, 0.12);
         border: 1px solid rgba(125, 206, 168, 0.28);
         font-size: 11px;
         font-weight: 700;
         letter-spacing: 0.12em;
         text-transform: uppercase;
         color: #7dcea8;
         margin-bottom: 20px;
      }
      .home-growth-reality__label-pill i {
         font-size: 14px;
      }
      .home-growth-reality__title {
         font-size: clamp(1.45rem, 2.5vw, 2rem);
         font-weight: 800;
         line-height: 1.25;
         margin: 0 0 24px;
         letter-spacing: -0.02em;
      }
      .home-growth-reality__title-lead {
         display: block;
         color: #fff;
      }
      .home-growth-reality__title-accent {
         display: block;
         color: #7dcea8;
         margin-top: 4px;
      }
      .home-growth-reality__aside {
         display: flex;
         flex-direction: column;
         min-height: 100%;
         background: #f8faf9;
         border-left: 1px solid #e2ebe6;
      }
      .home-growth-reality__timeline {
         list-style: none;
         margin: 0 0 20px;
         padding: 0;
         display: flex;
         flex-direction: column;
         gap: 0;
      }
      .home-growth-reality__timeline li {
         display: grid;
         grid-template-columns: 48px minmax(0, 1fr);
         gap: 14px;
         padding: 14px 0;
         border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      }
      .home-growth-reality__timeline li:last-child {
         border-bottom: none;
         padding-bottom: 0;
      }
      .home-growth-reality__timeline-marker {
         display: flex;
         flex-direction: column;
         align-items: center;
         gap: 0;
      }
      .home-growth-reality__timeline-dot {
         width: 12px;
         height: 12px;
         border-radius: 50%;
         background: #7dcea8;
         box-shadow: 0 0 0 4px rgba(125, 206, 168, 0.25);
         flex-shrink: 0;
      }
      .home-growth-reality__timeline-line {
         flex: 1;
         width: 2px;
         min-height: 24px;
         margin-top: 6px;
         background: linear-gradient(180deg, rgba(125, 206, 168, 0.5), transparent);
      }
      .home-growth-reality__timeline li:last-child .home-growth-reality__timeline-line {
         display: none;
      }
      .home-growth-reality__timeline-step {
         font-size: 0.8125rem;
         font-weight: 800;
         letter-spacing: 0.1em;
         text-transform: uppercase;
         color: #7dcea8;
         margin-bottom: 4px;
      }
      .home-growth-reality__timeline p {
         margin: 0;
         font-size: 0.92rem;
         line-height: 1.65;
         color: rgba(255, 255, 255, 0.78);
      }
      .home-growth-reality__solution {
         display: flex;
         align-items: flex-start;
         gap: 14px;
         padding: 18px 20px;
         border-radius: 8px;
         background: rgba(0, 96, 57, 0.35);
         border: 1px solid rgba(125, 206, 168, 0.25);
      }
      .home-growth-reality__solution-icon {
         flex-shrink: 0;
         width: 40px;
         height: 40px;
         border-radius: 8px;
         background: #006039;
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 20px;
      }
      .home-growth-reality__solution p {
         margin: 0;
         font-size: 0.9rem;
         line-height: 1.6;
         color: rgba(255, 255, 255, 0.9);
         font-weight: 500;
      }
      .home-growth-reality__visual {
         position: relative;
         flex: 1 1 auto;
         min-height: 200px;
         height: auto;
         max-height: none;
         margin: 0;
      }
      .home-growth-reality__visual img {
         position: absolute;
         inset: 0;
         width: 100%;
         height: 100%;
         object-fit: cover;
         display: block;
      }
      .home-growth-reality__visual-badge {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 52px;
         height: 52px;
         border-radius: 50%;
         background: #fff;
         color: #006039;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 24px;
         box-shadow: 0 8px 28px rgba(0, 0, 0, 0.2);
         border: 3px solid #7dcea8;
         z-index: 2;
      }
      .home-growth-reality__visual-tag {
         position: absolute;
         padding: 8px 14px;
         border-radius: 8px;
         font-size: 0.68rem;
         font-weight: 800;
         letter-spacing: 0.08em;
         text-transform: uppercase;
         z-index: 2;
      }
      .home-growth-reality__visual-tag--before {
         top: 16px;
         left: 16px;
         background: rgba(30, 41, 59, 0.88);
         color: #f1f5f9;
      }
      .home-growth-reality__visual-tag--after {
         bottom: 16px;
         right: 16px;
         background: #006039;
         color: #fff;
      }
      .home-growth-reality__pains {
         flex: 0 0 auto;
         padding: 18px 24px 14px;
         background: #fff;
         border-top: 1px solid #e8eeeb;
      }
      .home-growth-reality__pains-title {
         margin: 0 0 14px;
         font-size: 0.75rem;
         font-weight: 800;
         letter-spacing: 0.12em;
         text-transform: uppercase;
         color: #006039;
      }
      .home-growth-reality__pain-list {
         list-style: none;
         margin: 0;
         padding: 0;
         display: grid;
         grid-template-columns: repeat(2, minmax(0, 1fr));
         gap: 10px;
      }
      .home-growth-reality__pain-item {
         display: flex;
         align-items: center;
         gap: 10px;
         padding: 11px 12px;
         background: #f8faf9;
         border: 1px solid #e8eeeb;
         border-radius: 8px;
         font-size: 0.84rem;
         font-weight: 600;
         color: #1e293b;
         line-height: 1.35;
      }
      .home-growth-reality__pain-item i {
         flex-shrink: 0;
         width: 30px;
         height: 30px;
         border-radius: 8px;
         background: rgba(220, 38, 38, 0.08);
         color: #dc2626;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 15px;
      }
      /* Scroll animations */
      .home-growth-reality .hgr-reveal {
         opacity: 0;
         transform: translateY(32px);
         transition: opacity 0.75s cubic-bezier(0.22, 1, 0.36, 1), transform 0.75s cubic-bezier(0.22, 1, 0.36, 1);
      }
      .home-growth-reality .hgr-reveal--left {
         transform: translateX(-40px);
      }
      .home-growth-reality .hgr-reveal--right {
         transform: translateX(40px);
      }
      .home-growth-reality .hgr-reveal--scale {
         transform: scale(0.92);
      }
      .home-growth-reality.hgr-is-active .hgr-reveal,
      .home-growth-reality.hgr-is-active .hgr-reveal--left,
      .home-growth-reality.hgr-is-active .hgr-reveal--right,
      .home-growth-reality.hgr-is-active .hgr-reveal--scale {
         opacity: 1;
         transform: none;
      }
      .home-growth-reality .hgr-reveal[data-hgr-delay="1"] { transition-delay: 0.06s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="2"] { transition-delay: 0.14s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="3"] { transition-delay: 0.22s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="4"] { transition-delay: 0.3s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="5"] { transition-delay: 0.38s; }
      .home-growth-reality .hgr-stagger > * {
         opacity: 0;
         transform: translateY(16px);
         transition: opacity 0.5s cubic-bezier(0.22, 1, 0.36, 1), transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
      }
      .home-growth-reality.hgr-is-active .hgr-stagger > * {
         opacity: 1;
         transform: none;
      }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(1) { transition-delay: 0.32s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(2) { transition-delay: 0.38s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(3) { transition-delay: 0.44s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(4) { transition-delay: 0.5s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(5) { transition-delay: 0.56s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(6) { transition-delay: 0.62s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(7) { transition-delay: 0.68s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(8) { transition-delay: 0.74s; }
      .home-growth-reality.hgr-is-active .home-growth-reality__visual-badge {
         animation: hgrBadgePulse 2s ease-in-out infinite;
      }
      @keyframes hgrBadgePulse {
         0%, 100% { box-shadow: 0 8px 28px rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(125, 206, 168, 0.5); }
         50% { box-shadow: 0 8px 28px rgba(0, 0, 0, 0.2), 0 0 0 10px rgba(125, 206, 168, 0); }
      }
      .home-growth-reality.hgr-is-active .home-growth-reality__timeline-dot {
         animation: hgrDotGlow 2.5s ease-in-out infinite;
      }
      .home-growth-reality.hgr-is-active .home-growth-reality__timeline li:nth-child(2) .home-growth-reality__timeline-dot {
         animation-delay: 0.4s;
      }
      .home-growth-reality.hgr-is-active .home-growth-reality__timeline li:nth-child(3) .home-growth-reality__timeline-dot {
         animation-delay: 0.8s;
      }
      @keyframes hgrDotGlow {
         0%, 100% { box-shadow: 0 0 0 4px rgba(125, 206, 168, 0.25); }
         50% { box-shadow: 0 0 0 8px rgba(125, 206, 168, 0.12); }
      }
      @media (prefers-reduced-motion: reduce) {
         .home-growth-reality .hgr-reveal,
         .home-growth-reality .hgr-stagger > * {
            opacity: 1;
            transform: none;
            transition: none;
         }
         .home-growth-reality__visual-badge,
         .home-growth-reality__timeline-dot {
            animation: none !important;
         }
      }
      .home-growth-reality__cta-panel {
         flex: 0 0 auto;
         padding: 18px 24px 22px;
         background: #f4f8f6;
         border-top: 1px solid #e2ebe6;
         display: flex;
         flex-wrap: wrap;
         align-items: center;
         justify-content: space-between;
         gap: 14px 20px;
      }
      .home-growth-reality__cta-copy strong {
         display: block;
         font-size: 1rem;
         font-weight: 800;
         color: #0f172a;
         margin-bottom: 4px;
      }
      .home-growth-reality__cta-copy span {
         font-size: 0.85rem;
         color: #64748b;
      }
      @media (max-width: 991px) {
         .home-growth-reality__shell {
            grid-template-columns: 1fr;
         }
         .home-growth-reality__aside {
            border-left: none;
            border-top: 1px solid #e2ebe6;
         }
         .home-growth-reality__visual {
            flex: 0 0 auto;
            min-height: 260px;
            height: auto;
            max-height: none;
         }
      }
      @media (max-width: 575px) {
         .home-growth-reality {
            padding-bottom: 72px;
         }
         .home-growth-reality__inner {
            padding-left: 16px;
            padding-right: 16px;
         }
         .home-growth-reality__story {
            padding: 32px 24px 28px;
         }
         .home-growth-reality__cta-panel {
            padding: 22px 20px;
            flex-direction: column;
            align-items: stretch;
         }
         .home-growth-reality__cta {
            justify-content: center;
         }
         .home-growth-reality__pain-list {
            grid-template-columns: 1fr;
         }
      }
   </style>
   <section class="content-section home-growth-reality" id="home-growth-reality" data-hgr-section aria-labelledby="home-growth-reality-title">
      <div class="home-growth-reality__wave" aria-hidden="true">
         <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M0,32 C240,56 480,8 720,28 C960,48 1200,16 1440,40 L1440,56 L0,56 Z"/>
         </svg>
      </div>
      <div class="home-growth-reality__bg" aria-hidden="true"></div>
      <div class="home-growth-reality__inner">
         <div class="home-growth-reality__shell hgr-reveal hgr-reveal--scale" data-hgr-delay="1">
            <div class="home-growth-reality__story hgr-reveal hgr-reveal--left" data-hgr-delay="2">
               <span class="home-growth-reality__label-pill">
                  <i class="ri-pulse-line" aria-hidden="true"></i> The Growth Reality
               </span>
               <h2 class="home-growth-reality__title" id="home-growth-reality-title">
                  <span class="home-growth-reality__title-lead">When business grows,</span>
                  <span class="home-growth-reality__title-accent">HR cannot remain informal.</span>
               </h2>
               <ol class="home-growth-reality__timeline">
                  <li>
                     <div class="home-growth-reality__timeline-marker">
                        <span class="home-growth-reality__timeline-dot"></span>
                        <span class="home-growth-reality__timeline-line"></span>
                     </div>
                     <div>
                        <span class="home-growth-reality__timeline-step">Stage 01 — Early days</span>
                        <p>In the beginning, a company can manage people through founder decisions, phone calls, spreadsheets and informal processes.</p>
                     </div>
                  </li>
                  <li>
                     <div class="home-growth-reality__timeline-marker">
                        <span class="home-growth-reality__timeline-dot"></span>
                        <span class="home-growth-reality__timeline-line"></span>
                     </div>
                     <div>
                        <span class="home-growth-reality__timeline-step">Stage 02 — Scale breaks</span>
                        <p>As the team expands, the same approach creates delays, confusion and risk. Hiring becomes urgent. Payroll needs accuracy. Policies and compliance can no longer be ignored.</p>
                     </div>
                  </li>
                  <li>
                     <div class="home-growth-reality__timeline-marker">
                        <span class="home-growth-reality__timeline-dot"></span>
                     </div>
                     <div>
                        <span class="home-growth-reality__timeline-step">Stage 03 — HR as growth system</span>
                        <p>HR is no longer administrative alone — it becomes the operating system for people, performance and compliant growth.</p>
                     </div>
                  </li>
               </ol>
               <div class="home-growth-reality__solution">
                  <span class="home-growth-reality__solution-icon" aria-hidden="true"><i class="ri-shield-check-line"></i></span>
                  <p>Mirashka steps in at this point to convert scattered HR activities into a structured, measurable and compliant people operating system.</p>
               </div>
            </div>
            <div class="home-growth-reality__aside hgr-reveal hgr-reveal--right" data-hgr-delay="2">
               <figure class="home-growth-reality__visual hgr-reveal" data-hgr-delay="3">
                  <img
                     src="{{ asset('assets/frontend/img/home/home-growth-reality.png') }}"
                     alt="Before and after HR transformation — from scattered spreadsheets to a structured HR dashboard"
                     loading="lazy"
                     width="640"
                     height="400"
                  >
                  <span class="home-growth-reality__visual-badge" aria-hidden="true"><i class="ri-arrow-right-line"></i></span>
                  <span class="home-growth-reality__visual-tag home-growth-reality__visual-tag--before">Informal</span>
                  <span class="home-growth-reality__visual-tag home-growth-reality__visual-tag--after">Structured</span>
               </figure>
               <div class="home-growth-reality__pains hgr-reveal" data-hgr-delay="4">
                  <h3 class="home-growth-reality__pains-title">When headcount grows, these show up first</h3>
                  <ul class="home-growth-reality__pain-list hgr-stagger">
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-time-line" aria-hidden="true"></i>
                        <span>Hiring delays</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-calculator-line" aria-hidden="true"></i>
                        <span>Payroll confusion</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-file-warning-line" aria-hidden="true"></i>
                        <span>Weak documentation</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-alert-line" aria-hidden="true"></i>
                        <span>Compliance exposure</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-focus-2-line" aria-hidden="true"></i>
                        <span>Unclear roles and KRAs</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-emotion-unhappy-line" aria-hidden="true"></i>
                        <span>Employee dissatisfaction</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-user-star-line" aria-hidden="true"></i>
                        <span>Founder dependency</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-team-line" aria-hidden="true"></i>
                        <span>Leadership gaps</span>
                     </li>
                  </ul>
               </div>
               <div class="home-growth-reality__cta-panel hgr-reveal" data-hgr-delay="5">
                  <div class="home-growth-reality__cta-copy">
                     <strong>Know where your HR stands today</strong>
                     <span>Free readiness review — gaps, risks and next steps.</span>
                  </div>
                  <a href="{{ route('projectenquiries') }}" class="home-growth-reality__cta theme-btn one">
                     Get HR Health Check <i class="ri-arrow-right-line" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
   (function () {
      var section = document.getElementById('home-growth-reality');
      if (!section) return;
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
         section.classList.add('hgr-is-active');
         return;
      }
      var observer = new IntersectionObserver(function (entries) {
         entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            section.classList.add('hgr-is-active');
            observer.disconnect();
         });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.15 });
      observer.observe(section);
   })();
   </script>

   {{-- Section 5: Mirashka HR Operating System (home-only) --}}
   @php
      $homeHrOsPillars = [
         [
            'num' => '01',
            'title' => 'Compliance & Workplace Integrity',
            'text' => 'Proactive legal and HR safeguards to protect business and workforce.',
            'icon' => 'ri-shield-check-line',
            'route' => 'compliance',
         ],
         [
            'num' => '02',
            'title' => 'Workforce Management & Process Optimization',
            'text' => 'Payroll, policy, records and remote HR systems that improve operational efficiency.',
            'icon' => 'ri-flow-chart',
            'route' => 'workforce',
         ],
         [
            'num' => '03',
            'title' => 'Leadership & Organizational Excellence',
            'text' => 'Leadership hiring, board advisory, succession planning, talent strategy and transformation.',
            'icon' => 'ri-vip-crown-line',
            'route' => 'leadership-organization',
         ],
         [
            'num' => '04',
            'title' => 'Talent Acquisition & Staffing Excellence',
            'text' => 'Flexible hiring, IT staffing, general staffing, RPO, NAPS and executive search.',
            'icon' => 'ri-user-search-line',
            'route' => 'talent-acquisition',
         ],
         [
            'num' => '05',
            'title' => 'HR as a Service',
            'text' => 'Your dedicated HR partner for outsourcing, employer branding, engagement, retention and HR technology.',
            'icon' => 'ri-dashboard-3-line',
            'route' => 'hr-as-a-service',
         ],
      ];
   @endphp
   <style>
      .home-hr-os {
         position: relative;
         padding: 64px 0 72px;
         background: linear-gradient(165deg, #060d0a 0%, #0c1814 40%, #0f1f1a 100%);
         overflow: hidden;
      }
      .home-hr-os__grid-bg {
         position: absolute;
         inset: 0;
         opacity: 0.28;
         background-image:
            linear-gradient(rgba(125, 206, 168, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(125, 206, 168, 0.05) 1px, transparent 1px);
         background-size: 40px 40px;
         mask-image: radial-gradient(ellipse 80% 70% at 50% 50%, #000 15%, transparent 72%);
         pointer-events: none;
      }
      .home-hr-os__glow {
         position: absolute;
         width: 480px;
         height: 280px;
         border-radius: 50%;
         background: radial-gradient(ellipse, rgba(0, 96, 57, 0.4) 0%, transparent 70%);
         top: 38%;
         left: 50%;
         transform: translate(-50%, -50%);
         pointer-events: none;
      }
      .home-hr-os__inner {
         position: relative;
         z-index: 1;
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 24px;
      }
      .home-hr-os__top {
         display: grid;
         grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
         gap: 28px 40px;
         align-items: end;
         margin-bottom: 36px;
      }
      .home-hr-os__eyebrow {
         display: inline-flex;
         align-items: center;
         gap: 8px;
         padding: 5px 14px;
         border-radius: 8px;
         border: 1px solid rgba(125, 206, 168, 0.35);
         background: rgba(0, 96, 57, 0.2);
         font-size: 10px;
         font-weight: 700;
         letter-spacing: 0.14em;
         text-transform: uppercase;
         color: #7dcea8;
         margin-bottom: 14px;
      }
      .home-hr-os__title {
         font-size: clamp(1.5rem, 2.8vw, 2.15rem);
         font-weight: 800;
         line-height: 1.22;
         color: #fff;
         margin: 0;
         letter-spacing: -0.02em;
      }
      .home-hr-os__top-right {
         display: flex;
         flex-direction: column;
         align-items: flex-start;
         gap: 18px;
      }
      .home-hr-os__intro {
         margin: 0;
         font-size: 0.95rem;
         line-height: 1.65;
         color: rgba(255, 255, 255, 0.72);
      }
      .home-hr-os__constellation {
         position: relative;
         padding-top: 20px;
      }
      .home-hr-os__connector {
         position: absolute;
         top: 54px;
         left: 4%;
         right: 4%;
         height: 2px;
         background: linear-gradient(90deg, transparent, rgba(125, 206, 168, 0.35) 12%, rgba(125, 206, 168, 0.55) 50%, rgba(125, 206, 168, 0.35) 88%, transparent);
         pointer-events: none;
         z-index: 0;
      }
      .home-hr-os.hos-is-active .home-hr-os__connector {
         animation: hosLinePulse 3s ease-in-out infinite;
      }
      @keyframes hosLinePulse {
         0%, 100% { opacity: 0.65; }
         50% { opacity: 1; }
      }
      .home-hr-os__hub {
         position: absolute;
         top: -32px;
         left: 50%;
         transform: translateX(-50%);
         z-index: 3;
         display: flex;
         align-items: center;
         gap: 10px;
         padding: 10px 18px 10px 12px;
         border-radius: 8px;
         background: linear-gradient(135deg, #006039 0%, #0a2a1f 100%);
         border: 1px solid rgba(125, 206, 168, 0.45);
         box-shadow: 0 8px 32px rgba(0, 96, 57, 0.45);
         white-space: nowrap;
      }
      .home-hr-os__hub-icon {
         width: 36px;
         height: 36px;
         border-radius: 50%;
         background: rgba(125, 206, 168, 0.15);
         color: #7dcea8;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 18px;
         flex-shrink: 0;
      }
      .home-hr-os__hub strong {
         font-size: 0.875rem;
         font-weight: 800;
         letter-spacing: 0.06em;
         text-transform: uppercase;
         color: #fff;
         line-height: 1.3;
      }
      .home-hr-os__nodes {
         position: relative;
         z-index: 1;
         display: grid;
         grid-template-columns: repeat(5, minmax(0, 1fr));
         gap: 12px;
         padding-top: 72px;
      }
      .home-hr-os__node {
         position: relative;
         display: flex;
         flex-direction: column;
         align-items: flex-start;
         gap: 10px;
         padding: 16px 14px 14px;
         min-height: 168px;
         border-radius: 8px;
         background: rgba(255, 255, 255, 0.04);
         border: 1px solid rgba(125, 206, 168, 0.16);
         text-decoration: none;
         color: inherit;
         transition: background 0.25s ease, border-color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
         overflow: hidden;
      }
      .home-hr-os__node::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         height: 3px;
         background: linear-gradient(90deg, #006039, #7dcea8);
         opacity: 0;
         transition: opacity 0.25s ease;
      }
      .home-hr-os__node:hover {
         background: rgba(0, 96, 57, 0.28);
         border-color: rgba(125, 206, 168, 0.45);
         transform: translateY(-4px);
         box-shadow: 0 12px 32px rgba(0, 0, 0, 0.35);
      }
      .home-hr-os__node:hover::before {
         opacity: 1;
      }
      .home-hr-os__node-head {
         display: flex;
         align-items: center;
         justify-content: space-between;
         width: 100%;
         gap: 8px;
      }
      .home-hr-os__node-num {
         font-size: 0.65rem;
         font-weight: 800;
         letter-spacing: 0.1em;
         color: rgba(125, 206, 168, 0.7);
      }
      .home-hr-os__node-icon {
         width: 36px;
         height: 36px;
         border-radius: 8px;
         background: rgba(0, 96, 57, 0.4);
         color: #7dcea8;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 18px;
         flex-shrink: 0;
      }
      .home-hr-os__node-title {
         margin: 0;
         font-size: 0.8rem;
         font-weight: 700;
         color: #fff;
         line-height: 1.35;
         display: -webkit-box;
         -webkit-line-clamp: 3;
         -webkit-box-orient: vertical;
         overflow: hidden;
      }
      .home-hr-os__node-text {
         margin: 0;
         font-size: 0.76rem;
         line-height: 1.5;
         color: rgba(255, 255, 255, 0.62);
         display: -webkit-box;
         -webkit-line-clamp: 2;
         -webkit-box-orient: vertical;
         overflow: hidden;
      }
      .home-hr-os__node-arrow {
         margin-top: auto;
         font-size: 16px;
         color: #7dcea8;
         opacity: 0;
         transform: translateX(-6px);
         transition: opacity 0.2s ease, transform 0.2s ease;
      }
      .home-hr-os__node:hover .home-hr-os__node-arrow {
         opacity: 1;
         transform: translateX(0);
      }
      .home-hr-os__node-dot {
         position: absolute;
         top: -58px;
         left: 50%;
         transform: translateX(-50%);
         width: 10px;
         height: 10px;
         border-radius: 50%;
         background: #7dcea8;
         box-shadow: 0 0 0 4px rgba(125, 206, 168, 0.2);
         z-index: 2;
      }
      .home-hr-os .hos-reveal {
         opacity: 0;
         transform: translateY(28px);
         transition: opacity 0.7s cubic-bezier(0.22, 1, 0.36, 1), transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
      }
      .home-hr-os.hos-is-active .hos-reveal {
         opacity: 1;
         transform: none;
      }
      .home-hr-os .hos-reveal[data-hos-delay="1"] { transition-delay: 0.06s; }
      .home-hr-os .hos-reveal[data-hos-delay="2"] { transition-delay: 0.14s; }
      .home-hr-os .hos-stagger > * {
         opacity: 0;
         transform: translateY(20px);
         transition: opacity 0.5s cubic-bezier(0.22, 1, 0.36, 1), transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
      }
      .home-hr-os.hos-is-active .hos-stagger > * {
         opacity: 1;
         transform: none;
      }
      .home-hr-os.hos-is-active .hos-stagger > *:nth-child(1) { transition-delay: 0.2s; }
      .home-hr-os.hos-is-active .hos-stagger > *:nth-child(2) { transition-delay: 0.26s; }
      .home-hr-os.hos-is-active .hos-stagger > *:nth-child(3) { transition-delay: 0.32s; }
      .home-hr-os.hos-is-active .hos-stagger > *:nth-child(4) { transition-delay: 0.38s; }
      .home-hr-os.hos-is-active .hos-stagger > *:nth-child(5) { transition-delay: 0.44s; }
      @media (prefers-reduced-motion: reduce) {
         .home-hr-os .hos-reveal,
         .home-hr-os .hos-stagger > * {
            opacity: 1;
            transform: none;
            transition: none;
         }
         .home-hr-os__connector { animation: none !important; }
      }
      @media (max-width: 1100px) {
         .home-hr-os__nodes {
            grid-template-columns: repeat(3, minmax(0, 1fr));
         }
         .home-hr-os__connector {
            display: none;
         }
         .home-hr-os__node-dot {
            display: none;
         }
         .home-hr-os__hub {
            position: static;
            transform: none;
            margin-bottom: 20px;
            width: fit-content;
         }
         .home-hr-os__constellation {
            padding-top: 0;
         }
         .home-hr-os__nodes {
            padding-top: 0;
         }
      }
      @media (max-width: 991px) {
         .home-hr-os__top {
            grid-template-columns: 1fr;
            gap: 16px;
            margin-bottom: 28px;
         }
         .home-hr-os__top-right {
            align-items: stretch;
         }
      }
      @media (max-width: 640px) {
         .home-hr-os {
            padding: 52px 0 60px;
         }
         .home-hr-os__nodes {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
         }
         .home-hr-os__node {
            min-height: 0;
            padding: 14px 12px;
         }
         .home-hr-os__node-text {
            -webkit-line-clamp: 3;
         }
         .home-hr-os__hub {
            width: 100%;
            justify-content: center;
            white-space: normal;
            text-align: center;
         }
         .home-hr-os__hub strong {
            font-size: 0.8125rem;
         }
      }
      @media (max-width: 400px) {
         .home-hr-os__nodes {
            grid-template-columns: 1fr;
         }
      }
   </style>
   <section class="content-section home-hr-os" id="home-hr-os" data-hos-section aria-labelledby="home-hr-os-title">
      <div class="home-hr-os__grid-bg" aria-hidden="true"></div>
      <div class="home-hr-os__glow" aria-hidden="true"></div>
      <div class="home-hr-os__inner">
         <div class="home-hr-os__top hos-reveal">
            <div>
               <span class="home-hr-os__eyebrow"><i class="ri-node-tree" aria-hidden="true"></i> The Mirashka Model</span>
               <h2 class="home-hr-os__title" id="home-hr-os-title">One HR operating system. Five connected service pillars.</h2>
            </div>
            <div class="home-hr-os__top-right">
               <p class="home-hr-os__intro">Mirashka brings together strategy, process, people, compliance and execution through five integrated HR pillars. A business can start with one service and gradually scale into a complete HRaaS model.</p>
               <a href="{{ route('whatwedo') }}" class="home-hr-os__cta theme-btn one">
                  Explore HR Services <i class="ri-arrow-right-line" aria-hidden="true"></i>
               </a>
            </div>
         </div>

         <div class="home-hr-os__constellation hos-reveal" data-hos-delay="2">
            <div class="home-hr-os__hub" role="img" aria-label="Mirashka HR Operating System — five-pillar circular system">
               <span class="home-hr-os__hub-icon" aria-hidden="true"><i class="ri-share-circle-line"></i></span>
               <strong>Mirashka HR Operating System</strong>
            </div>
            <div class="home-hr-os__connector" aria-hidden="true"></div>
            <div class="home-hr-os__nodes hos-stagger">
               @foreach($homeHrOsPillars as $pillar)
                  <a href="{{ route($pillar['route']) }}" class="home-hr-os__node" aria-label="{{ $pillar['title'] }}">
                     <span class="home-hr-os__node-dot" aria-hidden="true"></span>
                     <div class="home-hr-os__node-head">
                        <span class="home-hr-os__node-num">{{ $pillar['num'] }}</span>
                        <span class="home-hr-os__node-icon" aria-hidden="true"><i class="{{ $pillar['icon'] }}"></i></span>
                     </div>
                     <h3 class="home-hr-os__node-title">{{ $pillar['title'] }}</h3>
                     <p class="home-hr-os__node-text">{{ $pillar['text'] }}</p>
                     <i class="ri-arrow-right-up-line home-hr-os__node-arrow" aria-hidden="true"></i>
                  </a>
               @endforeach
            </div>
         </div>
      </div>
   </section>
   <script>
   (function () {
      var section = document.getElementById('home-hr-os');
      if (!section) return;
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
         section.classList.add('hos-is-active');
         return;
      }
      var observer = new IntersectionObserver(function (entries) {
         entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            section.classList.add('hos-is-active');
            observer.disconnect();
         });
      }, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 });
      observer.observe(section);
   })();
   </script>

   @include('frontend.pages.home-sections.pillars')
   @include('frontend.pages.home-sections.home-sections-ui-fixes')

   {{-- Section 11: Mirashka Methodology (HR — banner + photo-card grid) --}}
   @include('frontend.pages.home-sections.methodology-banner-legacy')
   @include('frontend.pages.home-sections.methodology-legacy')

   {{-- Section 12: Integrated HR & Workforce Services --}}
   @include('frontend.pages.home-sections.integrated-hr-services')


   {{-- Section 13: Industries We Serve --}}
   @include('frontend.pages.home-sections.industries')

   {{-- Section 14: Strategic Partnership + HR Enquiry Form --}}
   @include('frontend.pages.home-sections.strategic-partnership')

   {{-- Section 15: Why Choose Mirashka / Our Edge --}}
   @include('frontend.pages.home-sections.why-choose')

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
   <!--               <p>At Mirashka, our leadership combines decades of experience in PR strategy, digital media, and thought leadership advisory to help CXOs and brands shape impactful narratives.</p>-->
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

   {{-- Section 16: Proof, FAQs (Insights & Final CTA follow via layout) --}}
   @php $homeBottom = config('home-bottom', []); @endphp
   @include('frontend.pages.home-sections.clients')

   @include('frontend.layouts.common.sections.testimonials', [
      'sectionClass' => 'px-3 px-md-5',
      'compactTop' => true,
      'beforeTitle' => $homeBottom['testimonials']['before_title'] ?? 'Proof of Impact',
      'sectionTitle' => $homeBottom['testimonials']['section_title'] ?? 'Client Testimonials',
      'sectionSubtitle' => $homeBottom['testimonials']['section_subtitle'] ?? '',
   ])

   @include('frontend.pages.home-sections.faqs')




@endsection

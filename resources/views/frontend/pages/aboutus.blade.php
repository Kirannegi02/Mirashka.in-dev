@extends('frontend.layouts.app')

@section('content')


   <style type="text/css">
   .single_banner.style_one {
    padding-top: 0;
}
.single_banner.style_one {
    padding: 40px 0px;
}
   .margin_extra {
    margin: 0 -100px -100px 0px !important;
}
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
.custom-counter-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px 20px;
    transition: all 0.35s ease;
    position: relative;
}

/* Hover Effect */
.custom-counter-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    z-index: 2;
}

/* Optional subtle border highlight */
.custom-counter-card::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 8px;
    border: 1px solid transparent;
    transition: all 0.3s ease;
}

.custom-counter-card:hover::after {
    border-color: rgba(0, 128, 96, 0.15); /* brand green tint */
}

/* Icon slight animation */
.custom-counter-card:hover .icon_box img {
    transform: scale(1.08);
}

.icon_box img {
    transition: transform 0.3s ease;
}
.counter-block.style_one {
    margin-top: 20px;
  
}
.elevate-title{
   word-break: normal;
   overflow-wrap: normal;
   white-space: normal;
   hyphens: none;
   line-height: 1.3;
           font-size: 22px;
}


   </style>
   <!---sliders-->
   <section class="single_banner style_one bg_op_1  custom_black_overlay"
      style="background-image: url(assets/frontend/img/page2/os_banner.webp);">
      <div class="container">
         <div class="row d-flex align-items-center">

            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

               <div class="pd_top_80"></div>

               <div class="slider_content light_color">

                  <!-- TOP LABEL -->
                  <h6>Elevate One Media</h6>

                  <div class="pd_bottom_10"></div>

                  <!-- UPDATED HEADLINE -->
                  <h1 class="color_white">
                     Our Journey — 15+ Years of Building Reputations That Matter
                  </h1>

                  <!-- UPDATED SUBHEADLINE -->
                  <p class="description color_white">
                   From a bold beginning with two clients and a dream, to becoming India's most trusted premium PR partner for CXOs, Corporates, and Brands.
                  </p>
                                    <p class="description color_white">

Every great agency has a founding story. Ours is built on trust, grit, and an unshakable belief that powerful communications can transform businesses and careers. What started as a small but ambitious consulting firm in May 2009 has grown, evolved, and scaled into one of India's most respected premium PR agencies — Elevate One Media.
                  </p>

                  <!-- CTA + VIDEO -->
                  <ul class="d_inline_block pt-3">

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
                           <a href="#viewjourney" class="theme-btn two">
                              View Our Journey
                           </a>
                        </div>
                     </li>

                 

                  </ul>

               </div>

               <div class="pd_bottom_80"></div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-4 hidden-md image_column">
               <div class="slider_image margin_extra">
                  <img src="{{ asset('assets/frontend/img/page/manoj-sir-1.webp') }}" class="img-fluid" alt="slider image" style="width: 95%;">
               </div>
            </div>

         </div>
      </div>
   </section>
   <!---sliders-->
<!----page header----->
<!--===============PAGE CONTENT==============-->
<!--===============PAGE CONTENT==============-->
<div id="content" class="site-content ">

 <!---about us  --->
<section class="about-section" id="about">
   <div class="pd_top_80"></div>

   <div class="pd_bottom_80"></div>

   <div class="container">
      <div class="row">

         <!-- LEFT IMAGE (UNCHANGED) -->
         <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_one">
               <div class="image one">
                  <img src="{{ asset('assets/frontend/img/page2/os_fs_1.webp') }}" class="img-fluid" alt="image" />
               </div>
               <div class="image two">
                  <img src="{{ asset('assets/frontend/img/page2/os_fs_2.webp') }}" class="img-fluid" alt="image" />
               </div>

               <div class="year_of_experience">
                  <div class="year">15+</div>
                  <div class="content">
                     <h2>Years of Excellence</h2>
                     <span class="icon-thumbs-up"></span>
                  </div>
               </div>
            </div>
         </div>

         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-10 col-md-12">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">

                  <div class="before_title">Founding Story</div>
                  <h2>Where It All Began — May 2009</h2>

                  <div class="description_box">

                     <p>
                        In May 2009, we incorporated Whiz Consulting — built on a simple belief: the right story, told the right way, to the right audience, has the power to shape outcomes.
                    
                        We began with just two clients who trusted us when we had little more than conviction, expertise, and a deep commitment to delivering results. That early trust became the foundation of everything we have built since.
                     </p>

                     <p>
                        With a lean team but strong ambition, we focused on what mattered—building media relationships, crafting meaningful narratives, and delivering consistent impact for the brands that believed in us.
                     </p>

                     <!-- HIGHLIGHT QUOTE -->
                     <div style="
                        background: #006039;
                        color: #ffffff;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
                        margin-top: 20px;
                     ">
                        <p style="margin:0; font-weight:500;">
                           “Every industry legend started with someone who believed before there was much to believe in. Our first two clients gave us exactly that — and we have never forgotten it.”
                        </p>
                     </div>

                  </div>

                  <div class="pd_top_20"></div>

               </div>
            </div>

          

         </div>
      </div>

      <div class="pd_bottom_40"></div>
   </div>
</section>
<!---about us end--->

  









<!---timeline--->
<section class="timeline-section bg_light_1">
   <div class="pd_top_80"></div>

   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Our Journey</div>
                  <h2>Milestones That Shaped Who We Are</h2>
               </div>
               <div class="pd_bottom_80"></div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-lg-12">
            <div class="time_line_section style_two">
               <div class="swiper-container" data-swiper='{
                        "autoplay": {"delay": 6000},
                        "freeMode": true,
                        "loop": true,
                        "speed": 1000,
                        "centeredSlides": false,
                        "slidesPerView": 3,
                        "spaceBetween": 30,
                        "pagination": {"el": ".swiper-pagination","clickable": true},
                        "breakpoints": {
                           "1200": {"slidesPerView": 3},
                           "1024": {"slidesPerView": 3},
                           "768": {"slidesPerView": 2},
                           "576": {"slidesPerView": 1},
                           "0": {"slidesPerView": 1}
                        }
                      }'>

                  <div class="swiper-wrapper">

                     <!-- 2009 -->
                     <div class="swiper-slide ">
                        <div class="event_box type_two">
                           <div class="date_box ">
                              <h6 class="bg_dark_3">2009</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/page2/os_oj_tb.webp') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">The Beginning</a></h2>
                                 <p>
                                    Incorporated as Whiz Consulting. Started with a lean team and two clients, building trust through strong media coverage across print, TV, and radio.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- 2010–2012 -->
                     <div class="swiper-slide">
                        <div class="event_box type_two">
                           <div class="date_box ">
                              <h6 class="bg_dark_3">2010–2012</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/page2/os_oj_fof.webp') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">Finding Our Footing</a></h2>
                                 <p>
                                    Expanded across industries and built strong media relationships, delivering consistent editorial coverage across national and regional platforms.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- 2013–2015 -->
                     <div class="swiper-slide">
                        <div class="event_box type_two">
                           <div class="date_box">
                              <h6 class="bg_dark_3">2013–2015</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/page2/os_oj_gp.webp') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">Growing With Purpose</a></h2>
                                 <p>
                                    Crossed 50+ clients and expanded into diverse sectors, strengthening our reputation for reliable media coverage and strategic storytelling.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- 2016–2018 -->
                     <div class="swiper-slide">
                        <div class="event_box type_two">
                           <div class="date_box ">
                              <h6 class="bg_dark_3">2016–2018</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/page2/os_oj_sc.webp') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">Expanding Horizons</a></h2>
                                 <p>
                                    Moved into strategic communications, managing reputation, spokesperson training, and serving 100+ clients across India.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- 2019–2021 -->
                     <div class="swiper-slide">
                        <div class="event_box type_two">
                           <div class="date_box">
                              <h6 class="bg_dark_3">2019–2021</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/page2/os_oj_dps.webp') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">Digital PR Shift</a></h2>
                                 <p>
                                    Embraced digital media and LinkedIn authority building, helping clients maintain visibility and credibility during critical market shifts.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- 2022–2023 -->
                     <div class="swiper-slide">
                        <div class="event_box type_two">
                           <div class="date_box">
                              <h6 class="bg_dark_3" >2022–2023</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/page2/os_oj_cxo.webp') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">Strategic Evolution</a></h2>
                                 <p>
                                    Pivoted to Premium PR, launched CXO-focused services, and rebranded as Elevate One Media after serving 200+ clients.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- 2024–2025 -->
                     <div class="swiper-slide">
                        <div class="event_box type_two">
                           <div class="date_box">
                              <h6 class="bg_dark_3">2024–2025</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/page2/eom.webp') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">Elevate One Media</a></h2>
                                 <p>
                                    Introduced structured PR frameworks, expanded services, and strengthened the team with senior strategists and media experts.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- 2026 -->
                     <div class="swiper-slide">
                        <div class="event_box type_two">
                           <div class="date_box">
                              <h6 class="bg_dark_3">2026</h6>
                           </div>
                           <div class="content_box bg_dark_3">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/images/projects/project-3-img.jpg') }}">
                              </div>
                              <div class="c_box">
                                 <h2><a href="#">The Next Chapter</a></h2>
                                 <p>
                                    15+ years strong, serving diverse sectors across India, now positioned as a leading Premium PR partner with growing global ambitions.
                                 </p>
                              </div>
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
      </div>
   </div>

   <div class="pd_bottom_60"></div>
</section>
<!---timeline end--->





<!--about-->
<section class="about-section">
   <div class="pd_top_90"></div>

   <div class="auto-container">
      <div class="row">
         <div class="col-lg-10 m-auto">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">The Evolution Story</div>
                  <div class="title">From Whiz Consulting to Elevate One Media — Why We Evolved</div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>

      <div class="row">
         <!-- LEFT IMAGES (UNCHANGED) -->
         <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="image_boxes style_two">
               <img src="{{ asset('assets/frontend/images/shape-1.png') }}" class="background_image" alt="image">
               <div class="image one">
                  <img src="{{ asset('assets/frontend/img/page2/os_tes_1.webp') }}" class="img-fluid" alt="image">
               </div>
               <div class="image two">
                  <img src="{{ asset('assets/frontend/img/page2/os_tes_2.webp') }}" class="img-fluid" alt="image">
               </div>
            </div>
         </div>

         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-6 col-md-12 pd_left_60 md_pd_left_15">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">
                  <h5 class="title font_20">
                     What began as a traditional PR firm evolved into a strategic reputation and influence partner.
                  </h5>
               </div>
            </div>

            <div class="pd_bottom_10"></div>

            <div class="description_box">
               <p>
                  When we started as Whiz Consulting in 2009, PR was driven by print, television, and radio visibility. That was the currency of credibility—and we mastered it early.
               </p>
            </div>

            <div class="pd_bottom_15"></div>

            <div class="description_box">
               <p>
                  As the landscape evolved, so did expectations. Digital platforms grew, leadership visibility became critical, and audiences began evaluating not just brands—but the people behind them.
               </p>
            </div>

            <div class="pd_bottom_25"></div>

            <!-- ICON POINTS -->
            <div class="row gutter_25px">

               <div class="col-lg-6">
                  <div class="icon_box_all style_two">
                     <div class="icon_content icon_imgs">
                        <div class="icon">
                           <img src="{{ asset('assets/frontend/images/icon-img-n-1.png') }}" class="img-fluid svg_image" alt="icon png">
                        </div>
                        <div class="txt_content">
                           <h3><a href="#">From Media Coverage to Reputation Capital</a></h3>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-6">
                  <div class="icon_box_all style_two">
                     <div class="icon_content icon_imgs">
                        <div class="icon">
                           <img src="{{ asset('assets/frontend/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon png">
                        </div>
                        <div class="txt_content">
                           <h3><a href="#">From PR Execution to Influence Strategy</a></h3>
                        </div>
                     </div>
                  </div>
               </div>

            </div>

            <div class="pd_bottom_15"></div>

          


           
         </div>
      </div>
   </div>

   <div class="pd_bottom_90"></div>
</section>
<!--about end-->

<section class="funfact-section bg_light_1">
   <div class="pd_bottom_80"></div>

   <div class="container">
      <div class="row">
         <div class="col-lg-12">
             <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">By The Numbers</div>
                  <h2>15+ Years. Distilled Into Impact</h2>
               </div>
               <div class="mr_bottom_30"></div>
            </div>
         </div>
      </div>

      <div class="row">

         <!-- 1 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-1.png" class="img-fluid" alt="">
                  <h2><span class="count-text" data-speed="1500" data-stop="200">200</span>+</h2>
               </div>
               <h6>Satisfied Clients</h6>
               <p>Across CXOs, corporates & brands</p>
            </div>
         </div>

         <!-- 2 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-2.png" class="img-fluid" alt="">
                  <h2><span class="count-text" data-stop="15">15</span>+</h2>
               </div>
               <h6>Years of Experience</h6>
               <p>Building reputation & influence</p>
            </div>
         </div>

         <!-- 3 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-3.png" class="img-fluid" alt="">
                  <h2><span class="count-text" data-stop="500">500</span>+</h2>
               </div>
               <h6>Media Relationships</h6>
               <p>National, regional & digital reach</p>
            </div>
         </div>

         <!-- 4 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-4.png" class="img-fluid" alt="">
                  <h2><span class="count-text" data-stop="250">250</span>+</h2>
               </div>
               <h6>Projects Delivered</h6>
               <p>Strategic campaigns executed</p>
            </div>
         </div>

         <!-- 5 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-1.png" class="img-fluid" alt="">
                  <h2><span class="count-text" data-stop="100">100</span>+</h2>
               </div>
               <h6>CXOs Positioned</h6>
               <p>As credible thought leaders</p>
            </div>
         </div>

         <!-- 6 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-2.png" class="img-fluid" alt="">
                  <h2><span class="count-text" data-stop="15">15</span>+</h2>
               </div>
               <h6>Industries Served</h6>
               <p>Diverse sectors & categories</p>
            </div>
         </div>

         <!-- 7 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-3.png" class="img-fluid" alt="">
                  <h2>Pan-India</h2>
               </div>
               <h6>Presence</h6>
               <p>Serving across major cities</p>
            </div>
         </div>

         <!-- 8 -->
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="counter-block style_one text-center custom-counter-card">
               <div class="icon_box">
                  <img src="assets/images/fun-4.png" class="img-fluid" alt="">
                  <h2>Multiple</h2>
               </div>
               <h6>Award-Winning Campaigns</h6>
               <p>Recognised industry work</p>
            </div>
         </div>

      </div>
   </div>

   <div class="pd_bottom_70"></div>
</section>
<section class="process">
   <div class="pd_top_80"></div>

   <div class="container">
      <div class="row">

         <!-- TITLE -->
         <div class="title_all_box style_one text-center dark_color">
            <div class="title_sections">
               <div class="before_title">What Stayed the Same</div>
               <h2>What Changed. What Never Will.</h2>
            </div>
            <div class="pd_bottom_30"></div>
         </div>

         <!-- CARD 1 -->
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="process_box style_two dark_color">
               <div class="process_box_outer_two">
                  <div class="number">Trust</div>

                  <div class="content_box clearfix">
                     <div class="icon">
                        <div class="img">
                           <img src="{{ asset('assets/frontend/images/service-ico-3.png') }}" 
                                class="img-fluid svg_image" alt="Trust Icon">
                        </div>
                     </div>

                     <h2 class="elevate-title">Commitment to Trust</h2>
                  </div>

                  <p>
                     Our first clients trusted us before we had a portfolio. That trust still defines every relationship we build today.
                  </p>
               </div>
            </div>
            <div class="mr_bottom_30"></div>
         </div>

         <!-- CARD 2 -->
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="process_box style_two dark_color">
               <div class="process_box_outer_two">
                  <div class="number">Story</div>

                  <div class="content_box clearfix">
                     <div class="icon">
                        <div class="img">
                           <img src="{{ asset('assets/frontend/images/process-icon-im-1.png') }}" 
                                class="img-fluid svg_image" alt="Story Icon">
                        </div>
                     </div>

                     <h2 class="elevate-title">Power of Storytelling</h2>
                  </div>

                  <p>
                     From first press notes to CXO narratives, we believe strong storytelling shapes perception and drives growth.
                  </p>
               </div>
            </div>
            <div class="mr_bottom_30"></div>
         </div>

         <!-- CARD 3 -->
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="process_box style_two dark_color">
               <div class="process_box_outer_two">
                  <div class="number">Results</div>

                  <div class="content_box clearfix">
                     <div class="icon">
                        <div class="img">
                           <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" 
                                class="img-fluid svg_image" alt="Results Icon">
                        </div>
                     </div>

                     <h2 class="elevate-title">Focus on Outcomes</h2>
                  </div>

                  <p>
                     We measure PR by outcomes — visibility, media coverage, reputation building, and sustained impact.
                  </p>
               </div>
            </div>
            <div class="mr_bottom_30"></div>
         </div>

         <!-- CARD 4 -->
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="process_box style_two dark_color">
               <div class="process_box_outer_two">
                  <div class="number">Respect</div>

                  <div class="content_box clearfix">
                     <div class="icon">
                        <div class="img">
                           <img src="{{ asset('assets/frontend/images/process-icon-im-2.png') }}" 
                                class="img-fluid svg_image" alt="Respect Icon">
                        </div>
                     </div>

                     <h2 class="elevate-title">Respect for Every Client</h2>
                  </div>

                  <p>
                     Every client receives equal attention — from early-stage brands to established institutions, across every phase of growth.
                  </p>
               </div>
            </div>
         </div>

      </div>
   </div>

   <div class="pd_bottom_60"></div>
</section>
  @include('frontend.layouts.common.sections.success')

 @include('frontend.layouts.common.sections.clients')
@endsection
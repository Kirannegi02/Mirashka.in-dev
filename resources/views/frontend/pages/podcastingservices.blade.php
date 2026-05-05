@extends('frontend.layouts.app')

@section('content')

   <!----banner---->
   <section class="banner-section bg_op_1"
      style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/ps-banner.webp') }}');">

      <!--===============spacing==============-->
      <div class="pd_top_100"></div>
      <!--===============spacing==============-->

      <div class="auto-container">
         <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-xl-7 col-lg-6 col-md-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">

                     <!-- Eyebrow -->
                     <div class="before_title">Voice of Leadership – Podcast & Audio IP</div>

                     <!-- Headline -->
                     <h2 class="title_big">
                        Build a Leadership Voice That Travels Further Than the Room
                     </h2>

                     <!-- Subheadline -->
                     <p>
                        We help founders, CXOs, industry experts, and brands create podcast and audio properties that turn
                        insight into influence, conversations into credibility, and voice into a long-term leadership
                        asset.
                     </p>

                  </div>
               </div>

               <!-- spacing -->
               <div class="pd_bottom_20"></div>
               <div class="pd_bottom_30"></div>

               <!-- LOGO SLIDER (UNCHANGED) -->
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
                        @for ($i = 11; $i <= 41; $i++)
                           <div class="swiper-slide">
                              <div class="image">
                                 <img src="{{ asset('assets/frontend/img/client/' . $i . '.png') }}" class="img-fluid"
                                    alt="client-logo">
                              </div>
                           </div>
                        @endfor
                     </div>
                  </div>
               </div>

               <!-- spacing -->
               <div class="pd_bottom_40"></div>
            </div>

            <div class="col-xl-1 hidden-lg"></div>

            <!-- FORM SECTION (UNCHANGED STRUCTURE) -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="contact_form_box_all type_five">
                  <div class="contact_form_box_inner simple_form">

                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <div class="before_title">Start the Conversation</div>
                           <h6 class="font_24">Request a Podcast & Audio Strategy</h6>
                        </div>
                     </div>

                     <div class="pd_bottom_10"></div>

                     <div class="contact_form_shortcode">
                        <form action="#" method="post" class="wpcf7-form init">
                           <p>
                              <label>
                                 <input type="text" name="your-name" placeholder="Enter Your Name">
                                 <i class="fa fa-user"></i>
                              </label>
                           </p>
                           <p>
                              <label>
                                 <input type="email" name="your-email" placeholder="Enter Your Email">
                                 <i class="fa fa-envelope"></i>
                              </label>
                           </p>
                           <p>
                              <label>
                                 <input type="text" name="your-subject" placeholder="Enter Your Requirement">
                                 <i class="fa fa-folder"></i>
                              </label>
                           </p>
                           <p>
                              <input type="submit" value="Submit">
                           </p>
                        </form>
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
                           <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                              <i class="icon-play"></i>
                           </a>
                        </div>

                        <h6 class="text-black">
                           Voice of Leadership | Founders | CXOs | Experts | Brands
                        </h6>

                        <h1 class="text-black">
                           Turn Leadership Insight into a Distinct Audio Property
                        </h1>

                        <p class="text-black">
                           A podcast is not just a content format. When built well, it becomes a strategic platform for
                           thought leadership, executive visibility, audience trust, and brand differentiation.

                           At Elevate One Media, we help leaders and organizations conceptualize, shape, and activate
                           podcast and audio IP that reflects their expertise and amplifies their presence. From concept
                           creation and show positioning to guest strategy, narrative direction, and visibility planning,
                           we build audio platforms that do more than publish episodes—they build influence.
                        </p>

                        <div class="bottom_content">
                           <div class="button_content">
                              <a href="#" target="_blank" rel="nofollow" class="theme-btn three">
                                 Start Your Podcast Strategy <i class="icon-right-arrow-long"></i>
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

   <!---service--->
   <section class="service-section bg_light_1">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->

      <div class="container">

         <!-- TITLE -->
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">

                     <div class="before_title">Why Podcast & Audio IP Matters</div>
                     <h2>Why Voice Has Become a Powerful Leadership Medium</h2>

                  </div>

                  <div class="mr_bottom_20"></div>
               </div>
            </div>
         </div>

         <!-- CARDS -->
         <div class="row gutter_30px">
            <div class="col-lg-12">
               <div class="service_section grid_all three_column news_wrapper_grid dark_color">
                  <div class="grid_show_case grid_layout clearfix">

                     <!-- Card 1 -->
                     <div class="grid_box _card">
                        <div class="service_post style_five">
                           <div class="image_box">
                              <img loading="lazy" width="500" height="500"
                                 src="{{ asset('assets/frontend/img/page/wpm/1.webp') }}" alt="img">
                              <div class="gradient"></div>
                           </div>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#" rel="bookmark">Voice Builds Trust Faster</a>
                              </h2>
                              <p class="short_desc">
                                 Audio creates a sense of proximity and authenticity that written content often cannot
                                 replicate.
                              </p>
                           </div>
                           <div class="icon_box">
                              <span class="icon icon-thumbs-up icons"></span>
                           </div>
                        </div>
                     </div>

                     <!-- Card 2 -->
                     <div class="grid_box _card">
                        <div class="service_post style_five">
                           <div class="image_box">
                              <img width="500" height="500"
                                 src="{{ asset('assets/frontend/img/page/wpm/2.webp') }}" alt="img"
                                 loading="lazy">
                              <div class="gradient"></div>
                           </div>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#" rel="bookmark">Ideas Travel Better Through Conversation</a>
                              </h2>
                              <p class="short_desc">
                                 Complex thinking becomes more human, memorable, and persuasive when expressed through
                                 voice.
                              </p>
                           </div>
                           <div class="icon_box">
                              <span class="icon icon-thumbs-up icons"></span>
                           </div>
                        </div>
                     </div>

                     <!-- Card 3 -->
                     <div class="grid_box _card">
                        <div class="service_post style_five">
                           <div class="image_box">
                              <img width="500" height="500"
                                 src="{{ asset('assets/frontend/img/page/wpm/3.webp') }}" alt="img"
                                 loading="lazy">
                              <div class="gradient"></div>
                           </div>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#" rel="bookmark">Leadership Presence Extends Beyond Events and Posts</a>
                              </h2>
                              <p class="short_desc">
                                 A strong audio property allows leaders to stay present in the minds of stakeholders over
                                 time.
                              </p>
                           </div>
                           <div class="icon_box">
                              <span class="icon icon-thumbs-up icons"></span>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>

      </div>

      <!--===============spacing==============-->
      <div class="pd_bottom_70"></div>
      <!--===============spacing==============-->
   </section>
   <!---service end--->


   <section class="service_section " id="service">

      <div class="pd_top_80"></div>

      <div class="container">
         <div class="row">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="title">What We Do</div>
                  <div class="before_title">What Our Podcast & Audio IP Service Includes</div>
                  <div class="small_text_sub">Strategic podcast and audio IP development for leadership visibility</div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>

            <div class="pd_bottom_20"></div>

            <!-- CARD 1 -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two ">
                     <div class="content_inner"
                        style="background-image: url('{{ asset('assets/frontend/img/page/podcast.webp') }}');">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2><a href="#">Podcast Concept Development</a></h2>
                           <p>We define the strategic foundation of your podcast as a leadership and influence platform.
                           </p>
                           <ul>
                              <li>Show purpose and positioning</li>
                              <li>Target audience definition</li>
                              <li>Long-term influence strategy</li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="#"><i class="icon-right-arrow"></i></a>
                     </div>
                     <div class="overlay_content">
                        <h2><a href="#">Show Direction & Strategic Framing</a></h2>
                        <p>We align the podcast concept with your expertise, authority, and leadership narrative.</p>
                     </div>
                  </div>
               </div>
               <div class="mr_bottom_20"></div>
            </div>

            <!-- CARD 2 -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two active_ser">
                     <div class="content_inner"
                        style="background-image: url('{{ asset('assets/frontend/img/page/editorial.webp') }}');">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2><a href="#">Show Identity & Content Architecture</a></h2>
                           <p>We design a distinct audio identity and structured content flow for long-term consistency.
                           </p>
                           <ul>
                              <li>Show title and narrative design</li>
                              <li>Episode formats and themes</li>
                              <li>Content planning structure</li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="#"><i class="icon-right-arrow"></i></a>
                     </div>
                     <div class="overlay_content">
                        <h2><a href="#">Editorial Structure & Voice Design</a></h2>
                        <p>We ensure every episode follows a clear narrative style and consistent storytelling direction.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="mr_bottom_20"></div>
            </div>

            <!-- CARD 3 -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two ">
                     <div class="content_inner"
                        style="background-image: url('{{ asset('assets/frontend/img/page/Guest.webp') }}');">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2><a href="#">Guest Strategy & Visibility Amplification</a></h2>
                           <p>We build the ecosystem around your podcast to maximize reach, relevance, and authority.</p>
                           <ul>
                              <li>Guest and collaboration strategy</li>
                              <li>Thought leadership positioning</li>
                              <li>Distribution and visibility planning</li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="#"><i class="icon-right-arrow"></i></a>
                     </div>
                     <div class="overlay_content">
                        <h2><a href="#">Launch & Influence Expansion</a></h2>
                        <p>We align podcast distribution with PR, LinkedIn, and executive branding for maximum impact.</p>
                     </div>
                  </div>
               </div>
               <div class="mr_bottom_20"></div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_70"></div>

   </section>
   <style type="text/css">
      .service_carousel.style_one .content .icon_box img {
         width: 65px;
      }
   </style>


   <!----about end---->
   <section class="service-section">

      <div class="title-sec bg_dark_3 pd_top_100">
         <div class="container">
            <div class="row gutter_30px">

               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="title_all_box style_one light_color">
                     <div class="title_sections left">

                        <h2>What This Helps You Achieve</h2>

                     </div>
                  </div>
               </div>

               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="description_box color_white text-md-end">
                     <p>
                        From content creation to leadership ownership, podcast and audio IP becomes a long-term
                        platform for influence, authority, and meaningful audience connection.
                     </p>
                  </div>
               </div>

            </div>
         </div>

         <div class="pd_bottom_190"></div>
      </div>

      <div class="service-box-wrapper pd_bottom_60 ">
         <div class="container">

            <div class="row gutter_30px">

               <!-- 1 -->
               <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_five dark_color mr_top_minus_160">
                     <div class="service_content">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page/build.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-human-resources"></span>
                           <div class="text_box">
                              <h2><a href="#">Build a Distinct Leadership Platform</a></h2>
                              <p>
                                 Create a recognizable voice-led property that reflects your perspective, expertise, and
                                 leadership credibility.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pd_bottom_30"></div>
               </div>

               <!-- 2 -->
               <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                     <div class="service_content">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page/strengthen.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-audit"></span>
                           <div class="text_box">
                              <h2><a href="#">Strengthen Thought Leadership</a></h2>
                              <p>
                                 Turn ideas, experience, and market understanding into a consistent influence engine.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pd_bottom_30"></div>
               </div>

               <!-- 3 -->
               <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                     <div class="service_content">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page/deepen.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-heartbeat"></span>
                           <div class="text_box">
                              <h2><a href="#">Deepen Audience Connection</a></h2>
                              <p>
                                 Audio allows audiences to spend longer, more meaningful time with your thinking and
                                 perspective.
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

   <!----process---->
  <section class="about-section bg_light_1">

   <div class="pd_top_80"></div>

   <div class="container">
      <div class="row">

         <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">
                  <div class="before_title">Outcomes of Strong Audio IP</div>
                  <h2 class="title">What Strong Audio IP Can Deliver</h2>

                  <p>
                     Done well, a podcast is not just a media product. It becomes a reputation platform that compounds
                     influence, credibility, and leadership value over time.
                  </p>

                  <!-- THEME LIST START -->
                  <div class="list_item_box style_two style_list">
                     <ul class="list-inline">

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 A more human and credible leadership presence
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Stronger thought leadership positioning
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Greater audience trust and recall
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 A differentiated owned-media asset
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 More opportunities for ecosystem engagement
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Long-term content value across multiple channels
                              </a>
                           </small>
                        </li>

                     </ul>
                  </div>
                  <!-- THEME LIST END -->

               </div>
            </div>

            <div class="pd_bottom_10"></div>

            <div class="extra_content download_docs dark_color">
               <div class="download_box_content">
                  <a href="#" download>
                     Download Podcast & Audio IP Overview <i class="icon-download-symbol"></i>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-xl-6 col-lg-10 col-md-12">
            <div class="image_boxes style_five">
               <div class="image_box one">
                  <img src="{{ asset('assets/frontend/img/page/outcomes1.webp') }}" class="img-fluid" alt="img">
               </div>
               <div class="image_box two">
                  <img src="{{ asset('assets/frontend/img/page/outcomes2.webp') }}" class="img-fluid two" alt="img">
               </div>
            </div>
         </div>

      </div>
   </div>

   <div class="pd_bottom_80"></div>

</section>
   <!----process end---->
   <section class="content-section">

   <div class="pd_top_50"></div>

   <div class="auto-container">
      <div class="row">
         <div class="col-lg-8 m-auto">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Our Approach</div>
                  <div class="title">A Structured Path to Podcast & Audio Influence</div>
                  <div class="small_text_sub">
                     A multi-stage methodology built around discovery, diagnosis, strategy, crafting, engagement,
                     amplification, and continuous optimisation of your audio property.
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
                  <img src="{{ asset('assets/frontend/img/page/icon/discover.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">01</span>
                  <div class="text_box">
                     <h2><a href="#">Discover</a></h2>
                     <p>We understand the leader, brand, industry context, audience priorities, and why an audio property should exist.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- 02 -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="choose_box type_one">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/icon/diagnose.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">02</span>
                  <div class="text_box">
                     <h2><a href="#">Diagnose</a></h2>
                     <p>We identify visibility gaps, authority opportunities, content whitespace, and positioning possibilities.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- 03 -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="choose_box type_one">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/icon/strategise.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">03</span>
                  <div class="text_box">
                     <h2><a href="#">Strategise</a></h2>
                     <p>We define the show concept, purpose, format, audience, tone, and long-term influence goals.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- 04 -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="choose_box type_one">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/icon/craft.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">04</span>
                  <div class="text_box">
                     <h2><a href="#">Craft</a></h2>
                     <p>We build the show narrative, episode architecture, editorial framework, host direction, and launch assets.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- 05 -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="choose_box type_one">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/icon/engage.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">05</span>
                  <div class="text_box">
                     <h2><a href="#">Engage</a></h2>
                     <p>We activate the podcast through recording planning, conversation design, guest strategy, and publishing rhythm.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- 06 -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="choose_box type_one">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/icon/amplify.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">06</span>
                  <div class="text_box">
                     <h2><a href="#">Amplify</a></h2>
                     <p>We extend each episode across PR, social media, LinkedIn, founder branding, and owned communication channels.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- 07 -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="choose_box type_one">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/icon/report.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">07</span>
                  <div class="text_box">
                     <h2><a href="#">Report & Optimise</a></h2>
                     <p>We review resonance, audience response, content performance, and refine the show for greater long-term impact.</p>
                  </div>
               </div>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/sustain.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">08</span>
                    <div class="text_box">
                       <h2><a href="#">Sustain</a></h2>
                       <p>We ensure continuity in presence, building long-term stage authority and sustained professional influence.</p>
                    </div>
                 </div>
              </div>
           </div>


      </div>
   </div>

</section>

<section class="service-section bg_light_1" id="services">

   <div class="pd_top_80"></div>

   <div class="container">
      <div class="row align-items-end">
         <div class="col-lg-8">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections">
                  <div class="before_title">Who This Service Is For</div>
                  <h2>Built for Leaders and Brands with Something Worth Hearing</h2>
                  
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
                           <h2 class="title_service"><a href="#">Founders Building Industry Visibility</a></h2>
                           <p class="text-white">
                              Ideal for founders who want to build a strong, recognizable presence through consistent
                              storytelling and voice-led content.
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
                           <div class="icon_box">
                              <span><img src="{{ asset('assets/frontend/img/CXO-Digital.svg') }}"></span>
                           </div>
                           <h2 class="title_service"><a href="#">CXOs Strengthening Leadership Presence</a></h2>
                           <p class="text-white">
                              For executives looking to shape perception, credibility, and leadership authority in their
                              industry.
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
                           <div class="icon_box">
                              <span><img src="{{ asset('assets/frontend/img/Voice.svg') }}"></span>
                           </div>
                           <h2 class="title_service"><a href="#">Experts Building Thought Leadership</a></h2>
                           <p class="text-white">
                              For professionals creating a long-term platform to share insights, experience, and domain
                              authority.
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
                           <div class="icon_box">
                              <span><img src="{{ asset('assets/frontend/img/Reputation.svg') }}"></span>
                           </div>
                           <h2 class="title_service"><a href="#">Brands Creating Premium Content IP</a></h2>
                           <p class="text-white">
                              For organizations building a premium, leadership-driven content property anchored in voice
                              and narrative.
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
                           <div class="icon_box">
                              <span><img src="{{ asset('assets/frontend/img/CXO.svg') }}"></span>
                           </div>
                           <h2 class="title_service"><a href="#">Organizations Launching Conversation-Led Initiatives</a></h2>
                           <p class="text-white">
                              For brands building engagement through structured conversations and narrative-led
                              communication.
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
<section class="content-section ">

   <div class="pd_top_90"></div>

   <div class="container">
      <div class="row gutter_15px">

         <!-- LEFT IMAGE BLOCK (UNCHANGED) -->
         <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
            <div class="creote-image-box image-box-overlap">
               <div class="image_boxes style_eight">
                  <img src="{{ asset('assets/frontend/img/page/why-choose-elevate.webp') }}"
                     class="img-fluid image_fit height_500px pd_right_30" alt="img">
                  <div class="row no-space">
                     <div class="col-lg-5"></div>
                     <div
                        class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                        style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                        <div class="title_all_box style_one light_color">
                           <div class="title_sections left">
                              <div class="before_title color_white">Why Elevate One Media</div>
                              <p class="color_white">
                                 Podcast & Audio IP Strategy for Leadership Visibility
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
                  <div class="before_title">Why Elevate One Media</div>
                  <h2 class="title">Why Elevate One Media for Podcast & Audio IP</h2>
                  <p>
                     The site positions Elevate One Media around CXO-level engagement, owned-plus-earned integration,
                     reputation IP development, and insight-driven strategy.
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
                           We do not begin with equipment or episode lists. We begin with purpose, audience, and positioning.
                        </a>
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <a class="nav_link" href="#">
                           We shape audio properties around the authority, personality, and market relevance of the host.
                        </a>
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <a class="nav_link" href="#">
                           We build podcasts not as isolated content experiments, but as enduring influence platforms.
                        </a>
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <a class="nav_link" href="#">
                           We align the audio property with PR, digital presence, executive branding, and broader communication strategy.
                        </a>
                     </small>
                  </li>

               </ul>
            </div>
            <!-- LIST END -->

            <div class="pd_bottom_20"></div>

            <div class="theme_btn_all color_one">
               <a href="{{ route('projectenquiries') }}" class="theme-btn one">Contact us</a>
            </div>
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
                  <div class="before_title">FAQs</div>
                  <div class="title">Frequently Asked Questions</div>
                  <div class="small_text_sub">Have questions? We’re here to help.</div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>

      <div class="row">

         <!-- LEFT SIDE (UNCHANGED) -->
         <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
            <div class="simple_image_boxes height_360px parallax_cover">
               <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax">
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
               <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax">
            </div>
            <div class="mr_bottom_25"></div>
            <div class="progress_bar">
               <h2>Podcast Strategy Depth <span>100%</span></h2>
               <div class="bar">
                  <div class="bar-inner count-bar counted" data-percent="100%" style="width: 100%;"></div>
               </div>
            </div>
         </div>

         <!-- FAQ CONTENT -->
         <div class="col-xl-6 col-lg-12">
            <div class="faq_section type_one">
               <div class="block_faq">
                  <div class="accordion">
                     <dl>

                        <!-- 1 -->
                        <dt class="faq_header active">
                           <span class="icon-play"></span> Is this only for people who already have podcast experience?
                        </dt>
                        <dd class="accordion-content hide" style="display: block;">
                           <p>
                              No. We support both first-time hosts and experienced leaders looking to create a stronger,
                              more strategic show.
                           </p>
                        </dd>

                        <!-- 2 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Do you only help with the content side?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              No. The service is built around strategy, concept, positioning, narrative direction, and
                              visibility integration.
                           </p>
                        </dd>

                        <!-- 3 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Is a podcast useful for B2B leaders?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. In many B2B and expertise-led sectors, audio is a powerful way to build trust and authority
                              over time.
                           </p>
                        </dd>

                        <!-- 4 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Can this align with LinkedIn and PR?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Podcast and audio IP works best when integrated with broader executive visibility and
                              communication strategy.
                           </p>
                        </dd>

                        <!-- 5 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Is this for individuals or companies?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Both. It can be designed around a founder, CXO, spokesperson, or a branded organizational
                              platform.
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
  @extends('frontend.layouts.app')

  @section('content')

  <!----banner---->
  <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/lab-banner.webp') }}');">
     <!--===============spacing==============-->
     <div class="pd_top_100"></div>
     <!--===============spacing==============-->
     <div class="auto-container">
        <div class="row align-items-center">
           <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">

                    <!-- Eyebrow -->
                    <div class="before_title">Digital Presence & Thought Leadership</div>

                    <!-- Headline -->
                    <h2 class="title_big">
                       LinkedIn Authority Building That Turns Expertise into Influence
                    </h2>

                    <!-- Subheadline -->
                    <p>
                       We help founders, CXOs, and senior leaders build a credible, consistent, and high-impact LinkedIn presence that strengthens authority, attracts the right audience, and supports business growth.
                    </p>

                 </div>
              </div>

              <!--===============spacing==============-->
              <div class="pd_bottom_20"></div>
              <!--===============spacing==============-->


              <!--===============spacing==============-->
              <div class="pd_bottom_30"></div>
              <!--===============spacing==============-->

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
                             <img src="{{ asset('assets/frontend/img/client/'.$i.'.png') }}" class="img-fluid" alt="client-logo">
                          </div>
                    </div>
                    @endfor
                 </div>
              </div>
           </div>

           <!--===============spacing==============-->
           <div class="pd_bottom_40"></div>
           <!--===============spacing==============-->
        </div>

        <div class="col-xl-1 hidden-lg"></div>

        <!-- FORM SECTION (TEXT UPDATED ONLY) -->
        <div class="col-xl-4 col-lg-6 col-md-12">
           <div class="contact_form_box_all type_five">
              <div class="contact_form_box_inner simple_form">
                 <div class="title_all_box style_one dark_color">
                    <div class="title_sections">
                       <div class="before_title">Start the Conversation</div>
                       <h6 class="font_24">Request a LinkedIn Authority Strategy</h6>
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
                          <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image"><i
                                class="icon-play"></i></a>
                       </div>
                       <h6 class="text-black">For CXOs | Founders | Corporates | High-Growth Brands</h6>

                       <!-- Section Title -->
                       <h1 class="text-black">Build a Presence That Reflects Leadership, Not Noise</h1>

                       <!-- Copy -->
                       <p class="text-black">
                          A powerful LinkedIn presence does more than improve visibility. It shapes how investors, clients, peers, media, talent, and industry stakeholders perceive your leadership.

                          At Elevate One Media, we help leaders move beyond inconsistent posting and generic personal branding. Our LinkedIn Authority Building service is designed to create a digital presence that reflects clarity of thought, credibility of experience, and strategic relevance in your industry. The objective is not just to post more—but to be remembered for the right ideas.
                       </p>

                       <div class="bottom_content">
                          <div class="button_content">
                             <a href="#" target="_blank" rel="nofollow" class="theme-btn three">
                                Book a Discovery Call<i class="icon-right-arrow-long"></i>
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
        <div class="row">
           <div class="col-lg-12">
              <div class="title_all_box style_one text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">Why LinkedIn Authority Matters</div>
                    <h2>Why LinkedIn Authority Has Become a Strategic Business Asset</h2>

                 </div>

                 <!--===============spacing==============-->
                 <div class="mr_bottom_20"></div>
                 <!--===============spacing==============-->
              </div>
           </div>
        </div>
        <div class="row gutter_30px">
           <div class="col-lg-12">
              <div class="service_section grid_all three_column  news_wrapper_grid dark_color">
                 <div class="grid_show_case grid_layout clearfix">

                    <!-- Card 1 -->
                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/why-lab1.webp') }}" alt="img">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Trust Starts Before the First Meeting</a></h2>
                             <p class="short_desc">
                                Decision-makers often form their first impression through your digital presence.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/why-lab2.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Leadership Visibility Drives Opportunity</a></h2>
                             <p class="short_desc">
                                A credible LinkedIn presence can open doors to clients, media, partnerships, talent, and speaking opportunities.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/why-lab3.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="" rel="bookmark">Thought Leadership Builds Differentiation</a></h2>
                             <p class="short_desc">
                                When leaders share informed perspectives consistently, they become known for their clarity—not just their designation.
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
                 <div class="before_title">What Our LinkedIn Authority Building Service Includes</div>
                 <div class="small_text_sub">Structured, strategic execution to build a credible and high-impact LinkedIn presence</div>
              </div>
              <div class="pd_bottom_40"></div>
           </div>

           <div class="pd_bottom_20"></div>

           <!-- CARD 1 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/profile.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Profile Positioning & Optimisation</a></h2>
                          <p>We refine your LinkedIn profile to reflect authority, clarity, and relevance across every section.</p>
                          <ul>
                             <li>Headline & summary refinement</li>
                             <li>Experience & credibility markers</li>
                             <li>Profile structure & visual presentation</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Thought Leadership Strategy</a></h2>
                       <p>We define your voice, expertise areas, and content pillars to build a strong and consistent authority framework.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <!-- CARD 2 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/executive.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Content Planning & Development</a></h2>
                          <p>We create structured, insight-led content that builds credibility and audience relevance.</p>
                          <ul>
                             <li>Content calendar & themes</li>
                             <li>Industry & perspective-led posts</li>
                             <li>Audience-focused storytelling</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Executive Narrative Building</a></h2>
                       <p>We shape how your leadership journey, philosophy, and point of view are communicated digitally.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <!-- CARD 3 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/audience.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Audience & Visibility Strategy</a></h2>
                          <p>We enhance reach through consistent content rhythm and platform-aligned visibility strategies.</p>
                          <ul>
                             <li>Engagement direction</li>
                             <li>Network relevance</li>
                             <li>Platform-driven distribution</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Reputation-Led Presence Management</a></h2>
                       <p>We ensure your LinkedIn presence remains consistent, credible, and aligned with your broader leadership goals.</p>
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

                       <h2>From Visibility to Professional Influence</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       A strong LinkedIn presence helps shape perception, build credibility, and create consistent professional influence across your industry and stakeholder ecosystem.
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
                          <img src="{{ asset('assets/frontend/img/page/build-executive.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Build Executive Credibility</a></h2>
                             <p>
                                Present yourself as a serious, informed, and respected leader in your domain.
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
                          <img src="{{ asset('assets/frontend/img/page/strengthen-market.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Strengthen Market Perception</a></h2>
                             <p>
                                Create a professional identity that reflects the quality of your work, vision, and leadership.
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
                          <img src="{{ asset('assets/frontend/img/page/attract.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Attract the Right Stakeholders</a></h2>
                             <p>
                                Draw attention from potential clients, collaborators, investors, media, and talent.
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <!-- 4 -->
              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/support.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Support Business Development Indirectly</a></h2>
                             <p>
                                A strong LinkedIn presence improves trust and response quality before sales conversations begin.
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <!-- 5 -->
              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/create.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Create Long-Term Recall</a></h2>
                             <p>
                                When your voice is consistent, people remember your perspective—not just your profile.
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>


              <!-- 6 -->
              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/position.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Position Yourself as a Thought Leader</a></h2>
                             <p>
                                Consistent, insight-driven content helps establish your voice as a trusted perspective in your industry.
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
                    <div class="before_title">Outcomes</div>
                    <h2 class="title">What Strong LinkedIn Authority Can Deliver</h2>

                    <p>
                       Done right, LinkedIn becomes more than a content channel. It becomes a reputation engine.
                    </p>

                    <!-- THEME LIST START -->
                    <div class="list_item_box style_two style_list">
                       <ul class="list-inline">

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   A sharper and more credible leadership presence
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Stronger trust among prospects and stakeholders
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Higher quality engagement from relevant audiences
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Improved consistency in personal brand communication
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Greater visibility for ideas, expertise, and business narrative
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   A long-term digital asset that compounds authority over time
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
                       Download our LinkedIn Authority Overview <i class="icon-download-symbol"></i>
                    </a>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-10 col-md-12">
              <div class="image_boxes style_five">
                 <div class="image_box one">
                    <img src="{{ asset('assets/frontend/img/page/lab2.webp') }}" class="img-fluid" alt="img">
                 </div>
                 <div class="image_box two">
                    <img src="{{ asset('assets/frontend/img/page/lab1.webp') }}" class="img-fluid two" alt="img">
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
                    <div class="title">A Structured Path to LinkedIn Authority</div>
                    <div class="small_text_sub">
                       The site’s visible methodology emphasizes a structured path from discovery to measurable influence.
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
                       <p>We understand your leadership role, industry context, business goals, and current digital presence.</p>
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
                       <p>We assess perception gaps, profile weaknesses, content inconsistencies, and missed authority opportunities.</p>
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
                       <p>We define your positioning, audience focus, content pillars, voice style, and visibility goals.</p>
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
                       <p>We build profile enhancements, post concepts, thought leadership themes, and content frameworks.</p>
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
                       <p>We activate your presence through strategic posting, audience-aligned content, and meaningful positioning.</p>
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
                       <p>We strengthen reach and impact through integrated visibility across your digital and earned channels.</p>
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
                       <p>We review performance, audience response, narrative pull-through, and refine the next phase.</p>
                    </div>
                 </div>
              </div>
           </div>

           <!-- 08 -->
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/sustain.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">08</span>
                    <div class="text_box">
                       <h2><a href="#">Sustain & Scale</a></h2>
                       <p>We ensure continuity in your presence, building long-term authority and sustained professional influence.</p>
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
                    <h2>Built for Leaders Who Need More Than Personal Branding</h2>
                    <p>
                       This service is ideal for founders, CXOs, and subject-matter experts who want to build credible, consistent, and influence-driven LinkedIn authority rather than just personal visibility.
                    </p>
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
                             <h2 class="title_service"><a href="#">Founders Building Market Presence</a></h2>
                             <p class="text-white">
                                Establishing a strong leadership voice and consistent narrative to build trust and recognition.
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
                             <h2 class="title_service">
                                <a href="#">CXOs & Leadership Teams</a>
                             </h2>
                             <p class="text-white">
                                Strengthening thought leadership and executive presence across relevant professional audiences.
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
                             <h2 class="title_service"><a href="#">Subject-Matter Experts</a></h2>
                             <p class="text-white">
                                Positioning niche expertise into visible, high-value insights that build authority over time.
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
                             <h2 class="title_service">
                                <a href="#">Consultants & B2B Leaders</a>
                             </h2>
                             <p class="text-white">
                                Leveraging trust-based communication to attract relevant clients and long-term engagements.
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
                             <h2 class="title_service">
                                <a href="#">Executives in Transition</a>
                             </h2>
                             <p class="text-white">
                                Building a strong digital presence for professionals moving into more visible or public leadership roles.
                             </p>
                          </div>
                       </div>
                    </div>

                    <!-- 6 (NEW CARD) -->
                    <div class="swiper-slide">
                       <div class="service_carousel style_one">
                          <div class="image">
                             <div class="overlay"></div>
                             <img src="{{ asset('assets/frontend/img/authority.png') }}">
                          </div>
                          <div class="content">
                             <div class="icon_box">
                                <span><img src="{{ asset('assets/frontend/img/LinkedIn.svg') }}"></span>
                             </div>
                             <h2 class="title_service">
                                <a href="#">Leaders Focused on LinkedIn Authority</a>
                             </h2>
                             <p class="text-white">
                                Individuals aiming to build consistent visibility, credibility, and long-term influence through strategic LinkedIn positioning.
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
                    <img src="{{ asset('assets/frontend/img/page/why-choose-lab.webp') }}" class="img-fluid image_fit height_500px pd_right_30" alt="img">
                    <div class="row no-space">
                       <div class="col-lg-5"></div>
                       <div class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1" style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                          <div class="title_all_box style_one light_color">
                             <div class="title_sections left">
                                <div class="before_title color_white">Why Choose Us</div>
                                <p class="color_white">Strategic LinkedIn authority built for leadership credibility and long-term visibility</p>
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
                    <div class="before_title">Why Choose Us</div>
                    <h2 class="title">Why Elevate One Media for LinkedIn Authority Building</h2>
                    <p>
                       We help leaders build LinkedIn into a strategic authority platform—focused on credibility, consistency, and meaningful professional influence rather than superficial personal branding.
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
                             <strong>Executive-Level Positioning</strong> — We build LinkedIn presence around leadership substance, not superficial personal branding.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Strategy Before Content</strong> — We start with positioning, audience definition, and communication purpose before creating any content.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Reputation-Led Thinking</strong> — We align LinkedIn with your broader visibility, PR, and thought leadership ecosystem.
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
               <h2>Content & Visibility Coverage <span>100+</span></h2>
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
                           <span class="icon-play"></span> Is LinkedIn Authority Building only about posting content?
                        </dt>
                        <dd class="accordion-content hide" style="display: block;">
                           <p>
                              No. It includes positioning, profile strength, narrative clarity, content strategy, and overall visibility direction.
                           </p>
                        </dd>

                        <!-- 2 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Is this useful only for founders and CXOs?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              No. It is valuable for any leader, expert, or senior professional whose credibility influences business or market trust.
                           </p>
                        </dd>

                        <!-- 3 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Can this help with lead generation?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Indirectly, yes. A strong LinkedIn presence improves trust, recall, and response quality, which supports business development.
                           </p>
                        </dd>

                        <!-- 4 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Do you help optimise the LinkedIn profile as well?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Profile optimisation is a core part of building authority, ensuring your positioning, messaging, and credibility are clearly communicated.
                           </p>
                        </dd>

                        <!-- 5 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Can this align with PR and media visibility?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. LinkedIn authority works best when aligned with broader PR, media presence, and executive communication strategy.
                           </p>
                        </dd>

                        <!-- 6 (NEW) -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> How long does it take to build LinkedIn authority?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              LinkedIn authority is built over time through consistency, strategic positioning, and meaningful engagement. Results compound as your narrative and visibility strengthen.
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
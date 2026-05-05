  @extends('frontend.layouts.app')

  @section('content')

  <!----banner---->
  <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/lmt-banner.webp') }}');">
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
                       Leadership Media Training That Builds Presence, Precision, and Public Confidence
                    </h2>

                    <!-- Subheadline -->
                    <p>
                       We help founders, CXOs, spokespersons, and senior leaders communicate with clarity, credibility, and composure across interviews, panels, podcasts, public appearances, and high-stakes media moments.
                    </p>

                 </div>
              </div>

              <!--===============spacing==============-->
              <div class="pd_bottom_20"></div>
              <!--===============spacing==============-->

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
                             <img src="{{ asset('assets/frontend/img/client/'.$i.'.png') }}" class="img-fluid" alt="client-logo">
                          </div>
                    </div>
                    @endfor
                 </div>
              </div>
           </div>

        </div>

        <!-- FORM SECTION (UNCHANGED) -->
        <div class="col-xl-4 col-lg-6 col-md-12">
           <div class="contact_form_box_all type_five">
              <div class="contact_form_box_inner simple_form">
                 <div class="title_all_box style_one dark_color">
                    <div class="title_sections">
                       <div class="before_title">Start the Conversation</div>
                       <h6 class="font_24">Request a Training Strategy</h6>
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

     <div class="pd_bottom_100"></div>
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

                       <h6 class="text-black">For CXOs | Founders | Corporates | High-Growth Brands</h6>

                       <!-- Section Title -->
                       <h1 class="text-black">Prepare Leaders to Speak with Authority When It Matters Most</h1>

                       <!-- Copy -->
                       <p class="text-black">
                          Leadership media training is not about scripted soundbites or artificial polish. It is about helping senior leaders express ideas clearly, respond thoughtfully, stay composed under pressure, and represent the organization with confidence.

                          At Elevate One Media, we train leaders to communicate in a way that strengthens trust, protects reputation, and reinforces authority. Whether the requirement is for media interviews, investor-facing communication, keynote appearances, podcast conversations, internal leadership visibility, or public-facing brand representation, our approach ensures that the leader’s presence matches the seriousness of the role.
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
                    <div class="before_title">Why Leadership Media Training Matters</div>
                    <h2>Why Media Readiness Has Become a Leadership Imperative</h2>
                 </div>

                 <!--===============spacing==============-->
                 <div class="mr_bottom_20"></div>
                 <!--===============spacing==============-->
              </div>
           </div>
        </div>

        <div class="row gutter_30px">
           <div class="col-lg-12">
              <div class="service_section grid_all three_column news_wrapper_grid dark_color">
                 <div class="grid_show_case grid_layout clearfix">

                    <!-- Card 1 -->
                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/lmtm1.webp') }}" alt="img">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service">
                                <a href="#" rel="bookmark">Visibility Without Preparation Creates Risk</a>
                             </h2>
                             <p class="short_desc">
                                As leaders become more visible, every public appearance can shape perception positively or negatively.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/lmtm2.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service">
                                <a href="#" rel="bookmark">Confidence Must Be Backed by Communication Discipline</a>
                             </h2>
                             <p class="short_desc">
                                Strong ideas lose impact if they are delivered without clarity, structure, or composure.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/lmtm3.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service">
                                <a href="#" rel="bookmark">Reputation Often Rests on Leadership Presence</a>
                             </h2>
                             <p class="short_desc">
                                Tone, body language, framing, and response quality all influence how stakeholders perceive trust and credibility.
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
                 <div class="before_title">What Our Leadership Media Training Service Includes</div>
                 <div class="small_text_sub">Structured preparation to help leaders communicate with clarity, confidence, and authority in high-stakes environments</div>
              </div>
              <div class="pd_bottom_40"></div>
           </div>

           <div class="pd_bottom_20"></div>

           <!-- CARD 1 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/lmt1.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Spokesperson Readiness Training</a></h2>
                          <p>We prepare leaders to speak clearly, confidently, and strategically in media and stakeholder-facing situations.</p>
                          <ul>
                             <li>Clarity in messaging delivery</li>
                             <li>Confidence under observation</li>
                             <li>Stakeholder-aligned communication</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Message Discipline & Alignment</a></h2>
                       <p>We ensure leaders communicate with consistency, precision, and alignment to organizational priorities.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <!-- CARD 2 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/lmt2.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Message Framing & Verbal Precision</a></h2>
                          <p>We help leaders structure responses, sharpen key messages, and communicate with clarity and intent.</p>
                          <ul>
                             <li>Structured response building</li>
                             <li>Key message articulation</li>
                             <li>Clarity and conciseness training</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Controlled & Impactful Communication</a></h2>
                       <p>We refine how ideas are delivered so they remain clear, composed, and strategically effective.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <!-- CARD 3 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/lmt3.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Interview Preparedness</a></h2>
                          <p>We simulate real media scenarios including challenging questions, follow-ups, and pressure situations.</p>
                          <ul>
                             <li>Mock interview simulations</li>
                             <li>Handling tough questions</li>
                             <li>Real-time response practice</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">High-Pressure Scenario Training</a></h2>
                       <p>We prepare leaders to stay composed and effective in unpredictable and high-stakes communication environments.</p>
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
                       <h2>From Communication Skill to Leadership Credibility</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       Leadership media training strengthens how leaders think, speak, and respond in high-stakes environments—translating communication ability into trust, authority, and long-term reputation.
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
                          <img src="{{ asset('assets/frontend/img/page/speak.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Speak with More Confidence</a></h2>
                             <p>
                                Leaders become more composed and assured in visible conversations and public interactions.
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
                          <img src="{{ asset('assets/frontend/img/page/improve.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Improve Message Clarity</a></h2>
                             <p>
                                Complex business ideas are structured and communicated in a way that is clear, concise, and impactful.
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
                          <img src="{{ asset('assets/frontend/img/page/Handle.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Handle Difficult Questions Better</a></h2>
                             <p>
                                Leaders learn to respond to tough or unexpected questions without losing control, credibility, or intent.
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
                    <h2 class="title">What Strong Leadership Media Training Can Deliver</h2>


                    <!-- THEME LIST START -->
                    <div class="list_item_box style_two style_list">
                       <ul class="list-inline">

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   More confident and composed communication in high-visibility situations
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Clear, structured, and impactful message delivery
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Improved ability to handle tough or unexpected questions
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Stronger executive presence across media, panels, and public forums
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Better alignment between intent, tone, and delivery
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Reduced communication risk during high-stakes or scrutiny-driven moments
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
                       Download our Leadership Media Training Overview <i class="icon-download-symbol"></i>
                    </a>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-10 col-md-12">
              <div class="image_boxes style_five">
                 <div class="image_box one">
                    <img src="{{ asset('assets/frontend/img/page/1lmt.webp') }}" class="img-fluid" alt="img">
                 </div>
                 <div class="image_box two">
                    <img src="{{ asset('assets/frontend/img/page/2lmt.webp') }}" class="img-fluid two" alt="img">
                 </div>
              </div>
           </div>

        </div>
     </div>

     <div class="pd_bottom_80"></div>

  </section>



  <section class="content-section">

     <div class="pd_top_50"></div>

     <div class="auto-container">
        <div class="row">
           <div class="col-lg-8 m-auto">
              <div class="title_all_box style_seven text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">Our Approach</div>
                    <div class="title">A Structured Path to Leadership Readiness</div>
                    <div class="small_text_sub">
                       A defined methodology that takes leaders from assessment to confident, high-impact communication in real-world scenarios.
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
                       <p>We understand the leader’s role, communication context, visibility needs, and current strengths.</p>
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
                       <p>We identify message gaps, delivery weaknesses, hesitation points, and reputation-sensitive challenges.</p>
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
                       <p>We define communication priorities, spokesperson objectives, audience types, and training outcomes.</p>
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
                       <p>We develop key talking points, response frameworks, style guidance, and scenario-based preparation.</p>
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
                       <p>We conduct live training sessions, mock interviews, simulations, and coaching exercises.</p>
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
                       <p>We help align trained communication with broader PR, digital presence, and leadership visibility.</p>
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
                       <p>We review progress, assess improvement areas, and strengthen readiness for future engagements.</p>
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
                  <h2>Built for Leaders Who Represent More Than Themselves</h2>
                  <p>
                     This service is ideal for individuals and organizations that need leaders to communicate with clarity, confidence, and control in high-visibility and high-stakes environments.
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
                           <h2 class="title_service"><a href="#">Founders & Startup Leaders</a></h2>
                           <p class="text-white">
                              Leaders who need to communicate vision, build trust, and represent their brand in public and investor-facing scenarios.
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
                              <a href="#">CXOs & Business Leaders</a>
                           </h2>
                           <p class="text-white">
                              Senior executives responsible for representing the organization in media, internal forums, and external engagements.
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
                           <h2 class="title_service"><a href="#">Promoters & Spokespersons</a></h2>
                           <p class="text-white">
                              Individuals who act as the voice of the organization and require consistency, clarity, and alignment in communication.
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
                              <a href="#">Senior Professionals in Public Roles</a>
                           </h2>
                           <p class="text-white">
                              Leaders transitioning into roles that require interviews, panels, podcasts, keynote appearances, and public representation.
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
                              <a href="#">Leaders Facing Media & Investor Interaction</a>
                           </h2>
                           <p class="text-white">
                              Professionals preparing for interviews, investor discussions, or high-pressure communication environments.
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- 6 -->
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
                              <a href="#">Organizations Building Leadership Communication Capability</a>
                           </h2>
                           <p class="text-white">
                              Companies that want their leadership teams to communicate with greater polish, alignment, and consistency across all touchpoints.
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
                  <img src="{{ asset('assets/frontend/img/page/why-choose-elevate.webp') }}" class="img-fluid image_fit height_500px pd_right_30" alt="img">
                  <div class="row no-space">
                     <div class="col-lg-5"></div>
                     <div class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1" style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                        <div class="title_all_box style_one light_color">
                           <div class="title_sections left">
                              <div class="before_title color_white">Why Choose Us</div>
                              <p class="color_white">Leadership media training built for clarity, confidence, and high-stakes communication</p>
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
                  <h2 class="title">Why Elevate One Media for Leadership Media Training</h2>
                  <p>
                     We help leaders communicate with clarity, confidence, and control in high-stakes environments—aligning messaging with business priorities, reputation, and stakeholder expectations.
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
                           <strong>Leadership-Centric Coaching</strong> — We train leaders with respect to seniority, context, and reputational responsibility.
                        </a>
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <a class="nav_link" href="#">
                           <strong>Strategy Before Performance</strong> — We focus on what leaders communicate, why it matters, and how it aligns with business goals.
                        </a>
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <a class="nav_link" href="#">
                           <strong>Reputation-Led Preparation</strong> — Our approach strengthens credibility, trust, and consistency across all communication touchpoints.
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
               <h2>Training & Coverage <span>100+</span></h2>
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
                           <span class="icon-play"></span> Is this only for TV or press interviews?
                        </dt>
                        <dd class="accordion-content hide" style="display: block;">
                           <p>
                              No. It also applies to podcasts, panel discussions, public speaking, investor interactions, internal leadership visibility, and digital appearances.
                           </p>
                        </dd>

                        <!-- 2 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Is this useful for experienced leaders too?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Even highly experienced leaders benefit from sharper message framing, structured delivery, and scenario-based practice.
                           </p>
                        </dd>

                        <!-- 3 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Do you include mock interviews?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Scenario-based simulations and mock interviews are a core part of the training to prepare leaders for real-world situations.
                           </p>
                        </dd>

                        <!-- 4 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Can this be customised for a company’s specific context?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Training is tailored based on industry, leadership role, communication environment, and organizational priorities.
                           </p>
                        </dd>

                        <!-- 5 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Does this also help with difficult-question handling?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Leaders are trained in response structuring, pressure handling, and maintaining control during challenging or unexpected questions.
                           </p>
                        </dd>

                        <!-- 6 (NEW) -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> How long does leadership media training take?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              The duration depends on objectives and depth of training required. It can range from focused sessions for specific scenarios to comprehensive programs covering multiple communication situations.
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
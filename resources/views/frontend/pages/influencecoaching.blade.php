  @extends('frontend.layouts.app')

  @section('content')

  <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/ic-banner.webp') }}');">
     <div class="pd_top_100"></div>
     <div class="auto-container">
        <div class="row align-items-center">
           <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">

                    <div class="before_title">Digital Presence & Thought Leadership</div>

                    <h2 class="title_big">
                       Influence Coaching That Turns Leadership Presence into Lasting Impact
                    </h2>

                    <p>
                       We help founders, CXOs, experts, and emerging public leaders strengthen their voice, sharpen their presence, and build the kind of influence that earns trust across media, industry, digital platforms, and high-value stakeholder circles.
                    </p>

                 </div>
              </div>

              <div class="pd_bottom_20"></div>
              <div class="pd_bottom_30"></div>

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

                       <h1 class="text-black">Build Influence with Intention, Not Just Exposure</h1>

                       <p class="text-black">
                          In today’s professional landscape, influence is one of the most valuable leadership assets. It shapes how people listen, how they remember, and how they respond to your ideas.

                          At Elevate One Media, our Influence Coaching service is designed for leaders who want more than surface-level visibility. We help build presence that is grounded in thought clarity, communication confidence, and strategic positioning—so your words, actions, and digital footprint work together to strengthen trust and authority over time.
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
     <div class="pd_top_80"></div>
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="title_all_box style_one text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">The Power of Strategic Presence</div>
                    <h2>Why Influence Has Become a Leadership Advantage</h2>
                 </div>

                 <div class="mr_bottom_20"></div>
              </div>
           </div>
        </div>

        <div class="row gutter_30px">
           <div class="col-lg-12">
              <div class="service_section grid_all three_column news_wrapper_grid dark_color">
                 <div class="grid_show_case grid_layout clearfix">

                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/tpsp1.webp') }}" alt="img">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service">
                                <a href="#" rel="bookmark">Leadership Is Judged by Presence as Much as Performance</a>
                             </h2>
                             <p class="short_desc">
                                People often decide how seriously to take a leader by how clearly and confidently that leader communicates.
                             </p>
                          </div>
                          <div class="icon_box">
                             <span class="icon icon-thumbs-up icons"></span>
                          </div>
                       </div>
                    </div>

                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/tpsp2.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service">
                                <a href="#" rel="bookmark">Influence Creates Opportunity & Authority Needs Structure</a>
                             </h2>
                             <p class="short_desc">
                                A credible voice attracts attention from partners and media. Expertise alone is not influence; it must be expressed with consistency.
                             </p>
                          </div>
                          <div class="icon_box">
                             <span class="icon icon-thumbs-up icons"></span>
                          </div>
                       </div>
                    </div>

                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/tpsp3.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service">
                                <a href="#" rel="bookmark">Perception Shapes High-Stakes Outcomes</a>
                             </h2>
                             <p class="short_desc">
                                Whether in business or industry circles, influence directly affects trust, recall, and the speed of decision-making.
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
     <div class="pd_bottom_70"></div>
  </section>
  <!---service end--->

  <section class="service_section " id="service">

     <div class="pd_top_80"></div>

     <div class="container">
        <div class="row">
           <div class="title_all_box style_seven text-center dark_color">
              <div class="title_sections">
                 <div class="title">What We Do</div>
                 <div class="before_title">What Our Influence Coaching Service Includes</div>
                 <div class="small_text_sub">Strategic guidance to help leaders build presence, sharpen their voice, and strengthen their authority across all platforms.</div>
              </div>
              <div class="pd_bottom_40"></div>
           </div>

           <div class="pd_bottom_20"></div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/personal.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Personal Influence Assessment</a></h2>
                          <p>We evaluate your current presence, communication style, positioning strengths, and authority gaps.</p>
                          <ul>
                             <li>Presence & Style Evaluation</li>
                             <li>Authority Gap Analysis</li>
                             <li>Positioning Strategy</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Leadership Positioning Coaching</a></h2>
                       <p>We help define how you should be perceived in your industry, market, and professional ecosystem.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/tla.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Voice & Communication Development</a></h2>
                          <p>We strengthen how you express ideas, frame opinions, and communicate with confidence and clarity.</p>
                          <ul>
                             <li>Thought Clarity Training</li>
                             <li>Framing & Narrative Building</li>
                             <li>Confidence & Articulation</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Thought Leadership Alignment</a></h2>
                       <p>We connect your expertise, insights, and leadership philosophy into a coherent influence narrative.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/executive.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Executive Presence Coaching</a></h2>
                          <p>We work on credibility signals such as composure, articulation, conviction, and audience connection.</p>
                          <ul>
                             <li>Credibility & Composure</li>
                             <li>Stakeholder Connection</li>
                             <li>Conviction & Delivery</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Digital & Public Influence Guidance</a></h2>
                       <p>We align your LinkedIn, media presence, and speaking visibility with your broader influence goals.</p>
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
                       <h2>From Professional Visibility to Personal Influence</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       What This Helps You Achieve: Build a distinct leadership identity, communicate with conviction, and create a reputation asset that compounds over time.
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

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color mr_top_minus_160">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/clarify.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Clarify How You Want to Be Known</a></h2>
                             <p>
                                Build a distinct and memorable leadership identity and strengthen how you express ideas in high-value conversations.
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/increase.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Increase Trust and Recall</a></h2>
                             <p>
                                Become known for a clear point of view, not just a title or designation, ensuring your expertise is remembered.
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/strengthen-stakeholder.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Strengthen Stakeholder Response</a></h2>
                             <p>
                                Improve how clients, partners, and media engage with you, creating long-term leadership equity that lasts.
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
                    <h2 class="title">What Strong Influence Coaching Delivers</h2>

                    <p>
                       Done well, influence coaching does not make leaders louder. It makes them clearer, more trusted, and more effective in the rooms and platforms that matter.
                    </p>

                    <div class="list_item_box style_two style_list">
                       <ul class="list-inline">

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Sharper executive and personal presence
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Greater confidence in visible interactions
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Stronger thought leadership alignment
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   More consistent stakeholder perception
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Higher trust and credibility across audiences
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   A more compelling and influential leadership identity
                                </a>
                             </small>
                          </li>

                       </ul>
                    </div>
                 </div>
              </div>

              <div class="pd_bottom_10"></div>

              <div class="extra_content download_docs dark_color">
                 <div class="download_box_content">
                    <a href="#" download>
                       Download our Influence Coaching Overview <i class="icon-download-symbol"></i>
                    </a>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-10 col-md-12">
              <div class="image_boxes style_five">
                 <div class="image_box one">
                    <img src="{{ asset('assets/frontend/img/page/ic1.webp') }}" class="img-fluid" alt="img">
                 </div>
                 <div class="image_box two">
                    <img src="{{ asset('assets/frontend/img/page/ic2.webp') }}" class="img-fluid two" alt="img">
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
                    <div class="title">A Structured Path to Stronger Influence</div>
                    <div class="small_text_sub">
                       Our defined methodology takes leaders from initial presence assessment to long-term authority building and sustained professional impact.
                    </div>
                 </div>
                 <div class="pd_bottom_40"></div>
              </div>
           </div>
        </div>

        <div class="row">

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/discover.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">01</span>
                    <div class="text_box">
                       <h2><a href="#">Discover</a></h2>
                       <p>We understand your role, aspirations, audience context, and current leadership presence.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/diagnose.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">02</span>
                    <div class="text_box">
                       <h2><a href="#">Diagnose</a></h2>
                       <p>We identify perception gaps, communication blockers, positioning weaknesses, and missed influence opportunities.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/strategise.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">03</span>
                    <div class="text_box">
                       <h2><a href="#">Strategise</a></h2>
                       <p>We define your influence goals, authority themes, audience priorities, and growth pathway.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/craft.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">04</span>
                    <div class="text_box">
                       <h2><a href="#">Craft</a></h2>
                       <p>We shape the narratives, communication patterns, and visibility elements that support your influence.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/engage.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">05</span>
                    <div class="text_box">
                       <h2><a href="#">Engage</a></h2>
                       <p>We activate coaching through guided sessions, real scenarios, messaging refinement, and feedback loops.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/amplify.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">06</span>
                    <div class="text_box">
                       <h2><a href="#">Amplify</a></h2>
                       <p>We align your influence with digital platforms, leadership visibility, speaking opportunities, and public presence.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/report.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">07</span>
                    <div class="text_box">
                       <h2><a href="#">Report & Optimise</a></h2>
                       <p>We assess improvement, refine the approach, and strengthen long-term influence-building momentum.</p>
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
                    <h2>Built for Leaders Who Need to Be Felt, Not Just Seen</h2>
                    <p>
                       This service is ideal for founders, CXOs, and experts who want more than surface-level visibility—leaders who want to build a presence grounded in trust, clarity, and authority.
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
                                Visionaries building industry stature and representing their brand in high-stakes investor-facing scenarios.
                             </p>
                          </div>
                       </div>
                    </div>

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
                                <a href="#">CXOs & Business Heads</a>
                             </h2>
                             <p class="text-white">
                                Senior executives strengthening leadership presence and becoming more public-facing in industry circles.
                             </p>
                          </div>
                       </div>
                    </div>

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
                             <h2 class="title_service"><a href="#">Promoters & Key Speakers</a></h2>
                             <p class="text-white">
                                Business heads transitioning from operational excellence to visible leadership and stakeholder influence.
                             </p>
                          </div>
                       </div>
                    </div>

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
                                <a href="#">Experts & Strategic Consultants</a>
                             </h2>
                             <p class="text-white">
                                Thought leaders who grow through trust, credibility, and a clear point of view across digital and media platforms.
                             </p>
                          </div>
                       </div>
                    </div>

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
                                <a href="#">Executives in Strategic Roles</a>
                             </h2>
                             <p class="text-white">
                                Professionals preparing for larger leadership mandates that require polished communication and executive presence.
                             </p>
                          </div>
                       </div>
                    </div>

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
                                <a href="#">Firms Scaling Leadership Equity</a>
                             </h2>
                             <p class="text-white">
                                Organizations seeking to align their leadership team's voice for consistent trust and long-term authority building.
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
                                <p class="color_white">Strategic influence coaching built for authority, credibility, and long-term leadership equity.</p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-12 pd_left_35">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">
                    <div class="before_title">Why Choose Us</div>
                    <h2 class="title">Why Elevate One Media for Influence Coaching</h2>
                    <p>
                       We help leaders build a presence that is grounded in thought clarity, communication confidence, and strategic positioning—ensuring your professional footprint strengthens trust and authority.
                    </p>
                 </div>
              </div>

              <div class="list_item_box style_two">
                 <ul class="list-inline">

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Leadership-First Perspective</strong> — We coach influence in the context of real leadership responsibilities, not generic personal branding.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Strategy Before Visibility</strong> — We begin with how you should be perceived, then build the communication and presence to support it.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Reputation-Led Thinking</strong> — Our coaching strengthens trust, credibility, and long-term authority—not short-term impressions.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Integrated Presence Development</strong> — We connect your influence journey across digital presence, media readiness, and speaking visibility.
                          </a>
                       </small>
                    </li>

                 </ul>
              </div>
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

           <div class="col-xl-6 col-lg-12">
              <div class="faq_section type_one">
                 <div class="block_faq">
                    <div class="accordion">
                       <dl>

                          <dt class="faq_header active">
                             <span class="icon-play"></span> Is influence coaching the same as personal branding?
                          </dt>
                          <dd class="accordion-content hide" style="display: block;">
                             <p>
                                No. Personal branding is one part of it. Influence coaching goes deeper into presence, communication, perception, and authority to build long-term leadership equity.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this only for very senior leaders?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                No. It is useful for founders, CXOs, experts, and emerging leaders who need stronger credibility and visibility to reach the next level of their professional journey.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Does this include communication coaching?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Communication style, articulation, and message clarity are vital components of influence building, ensuring your ideas are heard and remembered.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Can this align with LinkedIn and thought leadership?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Influence coaching works best when aligned with digital presence, content strategy, and external visibility to create a consistent professional narrative.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this helpful for client-facing or consulting professionals?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Influence is especially valuable in trust-led businesses where credibility and authority directly shape opportunity and stakeholder response.
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
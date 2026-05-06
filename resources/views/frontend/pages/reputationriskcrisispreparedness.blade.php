  @extends('frontend.layouts.app')

  @section('content')
  <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/rrc-banner.webp') }}');">
     <div class="pd_top_100"></div>
     <div class="auto-container">
        <div class="row align-items-center">
           <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">

                    <div class="before_title">Reputation Capital & Awards Positioning</div>

                    <h2 class="title_big">
                       Reputation Risk & Crisis Preparedness That Protects Trust Before It Is Tested
                    </h2>

                    <p>
                       We help founders, CXOs, brands, and organisations prepare for high-stakes moments with clear communication frameworks, response discipline, and reputation-first crisis readiness.
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

           <div class="pd_bottom_40"></div>
        </div>

        <div class="col-xl-1 hidden-lg"></div>

        <div class="col-xl-4 col-lg-6 col-md-12">
           <div class="contact_form_box_all type_five">
              <div class="contact_form_box_inner simple_form">
                 <div class="title_all_box style_one dark_color">
                    <div class="title_sections">
                       <div class="before_title">Start the Conversation</div>
                       <h6 class="font_24">Request a Crisis Readiness Strategy</h6>
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

                       <h1 class="text-black">Prepare Before the Pressure Arrives</h1>

                       <p class="text-black">
                          A crisis does not begin when the news breaks. It begins much earlier—when a risk is ignored, a narrative is unmonitored, or a response system is unclear.

                          At Mirashka, we help organisations prepare for reputation-sensitive situations with strategic foresight and disciplined communication planning. Whether the concern is media scrutiny, leadership controversy, stakeholder backlash, misinformation, operational disruption, regulatory sensitivity, or social media escalation, our approach is built to reduce confusion, protect trust, and strengthen response confidence.
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
  <section class="service-section bg_light_1">
     <div class="pd_top_80"></div>
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="title_all_box style_one text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">Why Crisis Preparedness Matters</div>
                    <h2>Why Reputation Risk Readiness Has Become a Leadership Imperative</h2>
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
                             <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/speed.webp') }}" alt="img">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Speed Alone Is Not Enough</a></h2>
                             <p class="short_desc">
                                In a crisis, responding quickly matters—but responding clearly, calmly, and credibly matters even more.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/silence.webp') }}" alt="img" loading="lazy">
                             <div class="gradient-overlay"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Silence Can Deepen Damage</a></h2>
                             <p class="short_desc">
                                When an organisation is unprepared, delays and inconsistencies often create more harm than the event itself.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/leadership.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="" rel="bookmark">Leadership Is Judged in Difficult Moments</a></h2>
                             <p class="short_desc">
                                How founders, CXOs, and spokespersons respond during pressure shapes long-term stakeholder trust.
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


  <section class="service_section " id="service">

     <div class="pd_top_80"></div>

     <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="title_all_box style_seven text-center dark_color">
                 <div class="title_sections">
                    <div class="title">What We Do</div>
                    <div class="before_title">What Our Reputation Risk & Crisis Preparedness Service Includes</div>
                    <div class="small_text_sub">Strategic identification and narrative frameworks to protect trust and ensure response discipline during high-stakes moments.</div>
                 </div>
                 <div class="pd_bottom_40"></div>
              </div>
           </div>

           <div class="pd_bottom_20"></div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/wwd1.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Risk Communication Assessment</a></h2>
                          <p>We identify reputational vulnerabilities and high-sensitivity scenarios that require readiness.</p>
                          <ul>
                             <li>Vulnerability mapping</li>
                             <li>Communication weak points</li>
                             <li>Sensitivity analysis</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Crisis Messaging Frameworks</a></h2>
                       <p>We develop holding statements, response principles, escalation language, and narrative control structures.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/wwd2.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Leadership & Spokesperson Readiness</a></h2>
                          <p>We prepare senior leaders to communicate with clarity, authority, and composure under pressure.</p>
                          <ul>
                             <li>High-pressure training</li>
                             <li>Articulation discipline</li>
                             <li>Composure coaching</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Scenario Planning & Simulation</a></h2>
                       <p>We design crisis scenarios and response drills to improve organisational confidence and coordination.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/wapm2.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Stakeholder Response Strategy</a></h2>
                          <p>We shape communication for employees, customers, partners, and media based on the situation.</p>
                          <ul>
                             <li>Employee alignment</li>
                             <li>Investor & Partner comms</li>
                             <li>Media response management</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Reputation Recovery Support</a></h2>
                       <p>We advise on how to rebuild confidence, restore narrative balance, and strengthen trust after a visible issue.</p>
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

  <section class="service-section">

     <div class="title-sec bg_dark_3 pd_top_100">
        <div class="container">
           <div class="row gutter_30px">
              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="title_all_box style_one light_color">
                    <div class="title_sections left">
                       <h2>From Reaction to Readiness</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       Protect your leadership credibility and organisational confidence with a structured communication response that limits escalation and supports faster reputation recovery.
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
                          <img src="{{ asset('assets/frontend/img/page/frr1.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Reduce Communication Chaos</a></h2>
                             <p>Ensure teams know exactly what to say, what not to say, and who is authorised to respond.</p>
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
                          <img src="{{ asset('assets/frontend/img/page/frr3.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Protect Leadership Credibility</a></h2>
                             <p>Help founders and CXOs appear composed, responsible, and trustworthy in difficult situations.</p>
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
                          <img src="{{ asset('assets/frontend/img/page/frr5.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Strengthen Org Confidence</a></h2>
                             <p>Give internal stakeholders the structure needed to act with discipline under high-pressure scenarios.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/frr2.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Limit Narrative Escalation</a></h2>
                             <p>Prepared messaging reduces the risk of confusion, contradiction, and unnecessary news amplification.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/frr4.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Recover Faster After Impact</a></h2>
                             <p>A strong communication response supports quicker trust restoration and long-term reputation recovery.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/frr6.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Stakeholder Trust Safeguard</a></h2>
                             <p>Maintain transparency and authority with investors, media, and partners during operational disruptions.</p>
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

  <section class="about-section bg_light_1">

     <div class="pd_top_80"></div>

     <div class="container">
        <div class="row">

           <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections left">
                    <div class="before_title">Outcomes</div>
                    <h2 class="title">What Strong Crisis Preparedness Can Deliver</h2>

                    <p>
                       Done well, crisis preparedness does not create fear. It creates clarity. It allows organisations to face difficult moments with control instead of confusion.
                    </p>

                    <div class="list_item_box style_two style_list">
                       <ul class="list-inline">

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Better preparedness for reputation-sensitive events
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Sharper and more consistent crisis communication
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Stronger leadership response quality
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Reduced confusion across stakeholders
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Greater confidence in handling scrutiny and escalation
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Faster pathway to trust recovery after impact
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
                       Download our Crisis Preparedness Overview <i class="icon-download-symbol"></i>
                    </a>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-10 col-md-12">
              <div class="image_boxes style_five">
                 <div class="image_box one">
                    <img src="{{ asset('assets/frontend/img/page/outc2.webp') }}" class="img-fluid" alt="img">
                 </div>
                 <div class="image_box two">
                    <img src="{{ asset('assets/frontend/img/page/outc1.webp') }}" class="img-fluid two" alt="img">
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
                    <div class="title">A Structured Path to Reputation Readiness</div>
                    <div class="small_text_sub">
                       Our defined methodology moves from identifying vulnerabilities to building high-impact response discipline for measurable reputation protection.
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
                       <p>We understand your business, stakeholder environment, reputation sensitivities, and potential pressure points.</p>
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
                       <p>We identify exposure areas, response gaps, message risks, and scenario vulnerabilities across the organization.</p>
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
                       <p>We define crisis principles, communication priorities, decision pathways, and response protocols.</p>
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
                       <p>We develop messaging frameworks, scenario responses, spokesperson guidance, and preparedness tools.</p>
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
                       <p>We align leadership teams, conduct simulations, and build response confidence through practical preparation.</p>
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
                       <p>We ensure crisis communication aligns with broader reputation, PR, digital presence, and trust strategy.</p>
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
                       <p>We review preparedness maturity, identify learning gaps, and refine the framework for future resilience.</p>
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
                       <p>We provide ongoing advisory to ensure long-term stability and continued readiness in changing environments.</p>
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
                        <h2>Built for Organisations That Cannot Afford Reputation Drift</h2>
                        <p>
                            This service is ideal for listed companies, founder-led brands, and organisations in trust-sensitive sectors that require structured crisis communication readiness to protect their market standing.
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
                                    <h2 class="title_service"><a href="#">Founder-Led Companies</a></h2>
                                    <p class="text-white">
                                        Ensuring visible leadership remains protected during periods of rapid growth or increased public scrutiny.
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
                                        <a href="#">CXOs & Management Teams</a>
                                    </h2>
                                    <p class="text-white">
                                        Equipping senior leadership with the response discipline needed to navigate sensitive stakeholder interactions.
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
                                    <h2 class="title_service"><a href="#">High-Visibility Brands</a></h2>
                                    <p class="text-white">
                                        Supporting high-growth brands as they transition into phases that require increased regulatory or public attention.
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
                                        <a href="#">Investor-Facing Businesses</a>
                                    </h2>
                                    <p class="text-white">
                                        Protecting market valuation and investor confidence through structured and transparent communication protocols.
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
                                        <a href="#">Trust-Sensitive Sectors</a>
                                    </h2>
                                    <p class="text-white">
                                        Organisations in finance, tech, or regulated industries where reputation is the primary business asset.
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
                                        <a href="#">Expansion-Ready Firms</a>
                                    </h2>
                                    <p class="text-white">
                                        Companies entering new markets that want structured crisis readiness as part of their broader risk management.
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
                                <p class="color_white">Strategic reputation safeguards built for leadership credibility and stakeholder trust</p>
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
                    <h2 class="title">Why Mirashka for Reputation Risk & Crisis Preparedness</h2>
                    <p>
                       We help organizations and leaders protect their most valuable asset—trust. Our approach moves beyond reactive statements to build a disciplined foundation of foresight, framework, and response clarity.
                    </p>
                 </div>
              </div>

              <div class="list_item_box style_two">
                 <ul class="list-inline">

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Leadership-Centric Thinking</strong> — We understand that reputation risk often concentrates around leadership perception as much as brand perception.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Strategy Before Messaging</strong> — We do not just draft statements. We build the thinking, framework, and discipline behind them.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Reputation-Led Preparedness</strong> — Our approach protects not only immediate response quality, but also long-term trust and stakeholder confidence.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Integrated Communication Perspective</strong> — We align crisis preparedness with PR, digital presence, executive visibility, and broader brand reputation.
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
                 <h2>Readiness Score <span>100+</span></h2>
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
                             <span class="icon-play"></span> Is this only for companies already facing a crisis?
                          </dt>
                          <dd class="accordion-content hide" style="display: block;">
                             <p>
                                No. The strongest value comes from preparing before a crisis occurs. Strategic foresight and predefined frameworks ensure you are ready when high-stakes moments arrive.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Do you help with leadership communication during sensitive moments?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Leadership readiness is a central part of crisis preparedness. We train founders and CXOs to maintain authority and composure when communicating with stakeholders.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this only for large corporations?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                No. Founder-led businesses, emerging brands, and growth-stage firms can face serious reputation risks too. Preparedness is essential for any brand whose value is built on trust.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Does this include media-response planning?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Media messaging, holding statements, and response discipline are critical components of the service, ensuring your narrative remains controlled and consistent.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Can this align with broader PR and reputation work?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Crisis preparedness is most effective when integrated with your overall communication strategy, digital presence, and long-term leadership visibility goals.
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
  @extends('frontend.layouts.app')

  @section('content')
  <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/cxo-banner.webp') }}');">
     <div class="pd_top_100"></div>
     <div class="auto-container">
        <div class="row align-items-center">
           <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">
                    <div class="before_title">CXO Presence & Industry Visibility</div>

                    <h2 class="title_big">
                       Speaking Engagements & Events That Turn Leadership Presence into Industry Influence
                    </h2>

                    <p>
                       We help founders, CXOs, and senior leaders secure the right speaking platforms, shape compelling stage narratives, and build visibility through events that strengthen authority, trust, and market recall.
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
                       <h6 class="font_24">Request a Speaking Strategy</h6>
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

                       <h1 class="text-black">Put Leadership in the Right Rooms, On the Right Stage</h1>

                       <p class="text-black">
                          Speaking engagements are not just appearances. They are reputation moments. The right event, audience, and message can elevate a leader from being known in a circle to being respected across an industry.
                          <br><br>
                          At Mirashka, we help leaders and brands build meaningful visibility through conferences, panels, summits, roundtables, keynote opportunities, fireside chats, and curated industry events. Our focus is not on volume, but on relevance—placing leaders where their voice can create the greatest strategic impact.
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
                    <div class="before_title">Why Speaking Engagements Matter</div>
                    <h2>Why Stage Visibility Has Become a Strategic Leadership Asset</h2>
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
                             <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/matter1.webp') }}" alt="img">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Authority Is Built in Public Moments</a></h2>
                             <p class="short_desc">
                                When leaders speak with clarity and substance on the right platforms, they strengthen industry trust and perception.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/matter2.webp') }}" alt="img" loading="lazy">
                             <div class="gradient-overlay"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Events Create High-Value Visibility</a></h2>
                             <p class="short_desc">
                                Industry gatherings bring together decision-makers, media, peers, partners, and investors in one place.
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
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/matter3.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="" rel="bookmark">Credible Thought Leadership</a></h2>
                             <p class="short_desc">
                                A visible stage presence reinforces expertise in a way that static profiles and digital content often cannot.
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
                    <div class="before_title">What Our Speaking Engagements & Events Service Includes</div>
                    <div class="small_text_sub">Strategic platform identification and narrative development to turn stage presence into industry influence.</div>
                 </div>
                 <div class="pd_bottom_40"></div>
              </div>
           </div>
        </div>

        <div class="row">

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/launch.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Speaking Platform Mapping</a></h2>
                          <p>We identify the conferences, summits, and leadership platforms most aligned with your positioning goals.</p>
                          <ul>
                             <li>Conference & Summit mapping</li>
                             <li>Industry forum assessment</li>
                             <li>Platform alignment strategy</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Speaker Positioning Strategy</a></h2>
                       <p>We define how the founder or CXO should be presented to organisers, audiences, and industry stakeholders.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/leadership.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Topic & Narrative Development</a></h2>
                          <p>We shape compelling talk themes and keynote angles that reflect authority and relevance.</p>
                          <ul>
                             <li>Keynote & Panel themes</li>
                             <li>Message discipline training</li>
                             <li>Authority-led storytelling</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Panel & Keynote Preparation</a></h2>
                       <p>We help leaders prepare for fireside chats and major stage appearances with clarity and confidence.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/lviv.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Opportunity Identification</a></h2>
                          <p>We support strategic visibility through targeted outreach for relevant speaking opportunities.</p>
                          <ul>
                             <li>Targeted event outreach</li>
                             <li>Curated industry placement</li>
                             <li>Strategic event positioning</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Post-Event Amplification</a></h2>
                       <p>We extend the impact of stage moments through LinkedIn, PR, and digital executive branding.</p>
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
                       <h2>From Visibility to Industry Presence</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       We help leaders and brands move beyond the audience and onto the stage. This service is designed for those ready to turn their insight into a strategic leadership asset.
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
                          <img src="{{ asset('assets/frontend/img/page/bcf.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Strengthen Leadership Authority</a></h2>
                             <p>Build recognition as a credible voice within your sector and stakeholder ecosystem.</p>
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
                          <img src="{{ asset('assets/frontend/img/page/sla.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Enhance Market Positioning</a></h2>
                             <p>Use stage presence to reinforce expertise, business vision, and category relevance.</p>
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
                          <img src="{{ asset('assets/frontend/img/page/dcm.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Improve Stakeholder Trust</a></h2>
                             <p>Events create direct and indirect confidence among partners, clients, media, and industry peers.</p>
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
                          <img src="{{ asset('assets/frontend/img/page/ssp.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Create Networking Momentum</a></h2>
                             <p>Speaking opportunities often open the door to collaborations, partnerships, and strategic conversations.</p>
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
                          <img src="{{ asset('assets/frontend/img/page/cra.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Long-term Reputation Assets</a></h2>
                             <p>A strong event presence can feed PR, digital content, and long-term executive visibility.</p>
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
                          <img src="{{ asset('assets/frontend/img/page/bmv.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Scaling Organisations</a></h2>
                             <p>Companies preparing for market entry, new partnerships, or major growth phases through event-led positioning.</p>
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
                    <h2 class="title">What Strong Event Visibility Can Deliver</h2>

                    <p>
                       Done well, speaking engagements are not isolated appearances. They become an important part of how leadership authority is built and remembered.
                    </p>

                    <div class="list_item_box style_two style_list">
                       <ul class="list-inline">

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Stronger executive and founder visibility
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Greater credibility in industry circles
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Sharper perception of leadership expertise
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Higher-value networking and stakeholder engagement
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   More reusable content and visibility assets
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   A stronger platform for long-term thought leadership
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
                       Download our Speaking & Events Overview <i class="icon-download-symbol"></i>
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
                    <div class="title">A Structured Path to Stage-Led Influence</div>
                    <div class="small_text_sub">
                       A proven methodology built to turn leadership presence into measurable industry visibility and stage-led authority.
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
                       <p>We understand the leader’s role, business priorities, industry context, and visibility ambitions.</p>
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
                       <p>We identify stage-fit opportunities, positioning gaps, audience priorities, and missed event-led potential.</p>
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
                       <p>We define speaking objectives, target event categories, topic pillars, and leadership positioning themes.</p>
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
                       <p>We build speaker narratives, topic framing, event messaging, keynote structures, and discussion angles.</p>
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
                       <p>We activate the strategy through event targeting, speaking opportunities, and comprehensive leader preparation.</p>
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
                       <p>We extend the value of appearances across media, LinkedIn, content, and executive branding channels.</p>
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
                       <p>We review outcomes, audience resonance, visibility quality, and refine the next phase of event strategy.</p>
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
                  <h2>Presence Over Attendance</h2>
                  
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
                           <h2 class="title_service"><a href="#">Founders & Entrepreneurs</a></h2>
                           <p class="text-white">
                              Visionaries building category authority and seeking high-impact stages to validate their leadership and growth story.
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
                              <a href="#">CXOs & Senior Leaders</a>
                           </h2>
                           <p class="text-white">
                              Established leaders seeking stronger industry visibility and a platform to influence market and stakeholder perception.
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
                           <h2 class="title_service"><a href="#">Promoters & Public Leaders</a></h2>
                           <p class="text-white">
                              Business promoters and leaders entering public-facing roles who require a structured and credible stage strategy.
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
                              <a href="#">Experts & Consultants</a>
                           </h2>
                           <p class="text-white">
                              Subject-matter experts who scale their business through trust and need a visible platform to share high-value thought leadership.
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
                              <a href="#">Visibility-Led Brands</a>
                           </h2>
                           <p class="text-white">
                              High-growth organizations that want leadership-led visibility to be the center of their market entry or brand strategy.
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
                                <p class="color_white">Strategic visibility built for stage authority and long-term industry influence</p>
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
                    <h2 class="title">Why Mirashka for Speaking Engagements & Events</h2>
                    <p>
                       We help leaders and organizations turn presence into influence. Our approach moves beyond just filling calendars to ensuring every stage appearance serves a deliberate reputation goal.
                    </p>
                 </div>
              </div>

              <div class="list_item_box style_two">
                 <ul class="list-inline">

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Strategy Before Stage</strong> — We do not chase random event appearances. We pursue the right rooms for the right reasons, ensuring maximum ROI on your time.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Leadership-Centric Positioning</strong> — We shape speaking visibility around the leader’s specific strengths, unique expertise, and market relevance.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Reputation-Led Thinking</strong> — Every speaking opportunity is treated as a high-stakes credibility-building moment, not a one-time appearance.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Amplification Beyond the Event</strong> — We help convert stage presence into digital content, PR value, and long-term executive visibility across platforms.
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
                 <h2>Event Impact Score <span>100+</span></h2>
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
                             <span class="icon-play"></span> Is this only for very senior leaders?
                          </dt>
                          <dd class="accordion-content hide" style="display: block;">
                             <p>
                                No. It is valuable for founders, CXOs, subject-matter experts, and emerging leaders with strong industry relevance who want to establish a credible public voice.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Do you only help after an event is confirmed?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                No. Strategic identification is a core part of what we do. We help identify, vet, and shape the right speaking opportunities from the very start.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Can this align with LinkedIn and PR?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Speaking visibility becomes significantly stronger when integrated with your digital presence and earned media, creating a cohesive authority-building engine.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Do you help with topic and panel preparation?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Topic positioning, keynote framing, and appearance preparation are central parts of the service to ensure you deliver with maximum impact and clarity.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this valuable for B2B and niche industries?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Very much so. In many niche sectors, the right event platform can create high-quality authority and trust among a concentrated audience of decision-makers and peers.
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
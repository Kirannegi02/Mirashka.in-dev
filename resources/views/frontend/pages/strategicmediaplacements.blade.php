  @extends('frontend.layouts.app')

  @section('content')

  <!----banner---->
  <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/smp-banner.webp') }}');">
     <!--===============spacing==============-->
     <div class="pd_top_100"></div>
     <!--===============spacing==============-->
     <div class="auto-container">
        <div class="row align-items-center">
           <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">
                    <div class="before_title">Executive Influence & Media Authority</div>
                    <h2 class="title_big">Strategic Media Placements That Build Authority, Trust, and Market Relevance</h2>
                    <p>We help CXOs, founders, and brands secure the right visibility in the right publications—so every media mention strengthens credibility, sharpens positioning, and supports business growth.</p>

                 </div>
              </div>
              <!--===============spacing==============-->
              <div class="pd_bottom_20"></div>
              <!--===============spacing==============-->
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
                       <!-- repeat same swiper-slides or different set -->
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/11.png') }}" alt="clients-logo-1" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/22.png') }}" alt="clients-logo-2" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/23.png') }}" alt="clients-logo-3" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/24.png') }}" alt="clients-logo-1" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/25.png') }}" alt="clients-logo-2" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/26.png') }}" alt="clients-logo-3" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/27.png') }}" alt="clients-logo-1" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/28.png') }}" alt="clients-logo-2" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/29.png') }}" alt="clients-logo-3" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/30.png') }}" alt="clients-logo-1" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/31.png') }}" alt="clients-logo-2" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/32.png') }}" alt="clients-logo-3" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/33.png') }}" alt="clients-logo-1" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/34.png') }}" alt="clients-logo-2" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/35.png') }}" alt="clients-logo-3" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/36.png') }}" alt="clients-logo-1" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/37.png') }}" alt="clients-logo-2" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/38.png') }}" alt="clients-logo-3" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/39.png') }}" alt="clients-logo-1" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/40.png') }}" alt="clients-logo-2" class="img-fluid" />
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="image"><img src="{{ asset('assets/frontend/img/client/41.png') }}" alt="clients-logo-3" class="img-fluid" />
                          </div>
                       </div>

                       <!-- ... add all your other logos ... -->
                    </div>
                 </div>
              </div>



              <!--===============spacing==============-->
              <div class="pd_bottom_40"></div>
              <!--===============spacing==============-->
           </div>
           <div class="col-xl-1 hidden-lg"></div>
           <div class="col-xl-4 col-lg-6 col-md-12">
              <div class="contact_form_box_all type_five">
                 <div class="contact_form_box_inner simple_form">
                    <div class="title_all_box style_one dark_color">
                       <div class="title_sections">
                          <div class="before_title">We here to help you</div>
                          <h6 class="font_24">Request a Media Strategy</h6>
                       </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_10"></div>
                    <!--===============spacing==============-->
                    <div class="contact_form_shortcode">
                       <form action="#" method="post" class="wpcf7-form init">
                          <p>
                             <label><br>
                                <input type="text" name="your-name" value="" size="40" aria-required="true"
                                   aria-invalid="false" placeholder="Enter Your Name"></span><br>
                                <i class="fa fa-user"></i><br>
                             </label>
                          </p>
                          <p><label><br>
                                <input type="email" name="your-email" value="" size="40" aria-required="true"
                                   aria-invalid="false" placeholder="Enter Your Email"></span><br>
                                <i class="fa fa-envelope"></i><br>
                             </label>
                          </p>
                          <p>
                             <label><br>
                                <input type="text" name="your-subject" value="" size="40" aria-required="true"
                                   aria-invalid="false" placeholder="Enter Your Subject"></span><br>
                                <i class="fa fa-folder"></i><br>
                             </label>
                          </p>
                          <p><input type="submit" value="Submit"> </p>

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
                       <h1 class="text-black">Media Visibility with Strategic Intent</h1>
                       <p class="text-black">Strategic media placements are not about chasing random press mentions. They are about placing your voice where it matters most—before customers, investors, partners, policy stakeholders, and industry decision-makers.

                          At Elevate One Media, we combine messaging clarity, editorial relevance, and relationship-led outreach to secure meaningful coverage that strengthens authority. Whether the objective is category leadership, market entry, investor confidence, product credibility, or executive profiling, every placement is pursued with a defined communication outcome in mind.</p>

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
                    <div class="before_title">Why This Matters</div>
                    <h2>Why Strategic Media Placements Matter More Than Ever</h2>
                     <p class="text-black">Strategic media placements in authoritative publications amplify your brand's credibility and reach your target audience effectively.</p>
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
                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/credibility.webp') }}" alt="img">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Credibility at Scale</a></h2>
                             <p class="short_desc">Third-party validation through respected media creates trust faster than self-promotion ever can.</p>

                          </div>
                          <div class="icon_box">
                             <span class="icon icon-thumbs-up icons"></span>
                          </div>
                       </div>
                    </div>
                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/stakeholder.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Stakeholder Confidence</a></h2>
                             <p class="short_desc">Customers, investors, employees, and partners all respond differently when a brand is consistently visible in credible media.</p>
                          </div>
                          <div class="icon_box">
                             <span class="icon icon-thumbs-up icons"></span>
                          </div>
                       </div>
                    </div>
                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/business.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="" rel="bookmark">Business-Led Visibility</a></h2>
                             <p class="short_desc">Well-placed media coverage supports lead generation, employer branding, partnerships, and long-term reputation.</p>
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
                 <div class="title">What We Deliver</div>
                 <div class="before_title">What Our Strategic Media Placement Service Includes</div>
                 <div class="small_text_sub">Strategic visibility that builds authority</div>
              </div>
              <div class="pd_bottom_40"></div>
           </div>

           <div class="pd_bottom_20"></div>

           <!-- CARD 1 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/media.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Media Narrative Development</a></h2>
                          <p>We shape compelling story angles from your business milestones, vision, expertise, and market relevance.</p>
                          <ul>
                             <li>Brand story positioning</li>
                             <li>Angle creation for media</li>
                             <li>Messaging clarity</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Publication Mapping</a></h2>
                       <p>We identify the right media mix across business, trade, startup, mainstream, and sectoral platforms.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <!-- CARD 2 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/launch.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Editorial Outreach</a></h2>
                          <p>Our team pitches stories with precision, context, and timing to maximize editorial interest and fit.</p>
                          <ul>
                             <li>Targeted journalist outreach</li>
                             <li>Story pitching strategy</li>
                             <li>Media relationship management</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Launch & Announcement Coverage</a></h2>
                       <p>From new ventures and partnerships to funding, expansion, and innovation announcements—we create visibility around key milestones.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <!-- CARD 3 -->
           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/interview.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Interview & Quote Opportunities</a></h2>
                          <p>We create opportunities for founder and CXO voices to appear as experts, commentators, and category leaders.</p>
                          <ul>
                             <li>Expert positioning</li>
                             <li>Media interview setup</li>
                             <li>Quote placements</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Thought Leadership Placement</a></h2>
                       <p>We place authored articles, opinion pieces, and expert commentary to strengthen long-term authority.</p>
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

                       <h2>The Right Visibility Across the Right Media Ecosystem</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       We pursue strategic placements across media platforms to build credibility, visibility, and long-term brand positioning.
                    </p>
                 </div>
              </div>

           </div>
        </div>

        <div class="pd_bottom_190"></div>
     </div>

     <div class="service-box-wrapper pd_bottom_60 bg_light_1">
        <div class="container">

           <div class="row gutter_30px">

              <!-- 1 -->
              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color mr_top_minus_160">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/business-media.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Business Media</a></h2>
                             <p>
                                For corporate credibility, founder visibility, market positioning, and strong leadership profiling across business ecosystems.
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
                          <img src="{{ asset('assets/frontend/img/page/trade.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Trade & Industry Media</a></h2>
                             <p>
                                For sector authority, ecosystem relevance, channel trust, and deeper engagement within niche industry audiences.
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
                          <img src="{{ asset('assets/frontend/img/page/startup.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Startup & Innovation Platforms</a></h2>
                             <p>
                                For founders, emerging brands, growth-stage companies, and disruptive category stories within startup ecosystems.
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
  <section class="about-section">

     <div class="pd_top_80"></div>

     <div class="container">
        <div class="row">

           <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections left">
                    <div class="before_title">What Strategic Placements Can Achieve</div>
                    <h2 class="title">What Strategic Placements Can Achieve</h2>

                    <p>When done right, media placements do more than generate buzz. They create perception momentum.</p>

                    <!-- THEME LIST START -->
                    <div class="list_item_box style_two style_list">
                       <ul class="list-inline">

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Strengthen executive and brand authority
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Build trust with prospects and stakeholders
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Improve market recall and category association
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Support fundraising, partnerships, and expansion narratives
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Create assets that can be reused across website, decks, sales, and social media
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Position leadership as credible voices in their domain
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
                       Download our latest presentation <i class="icon-download-symbol"></i>
                    </a>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-10 col-md-12">
              <div class="image_boxes style_five">
                 <div class="image_box one">
                    <img src="{{ asset('assets/frontend/img/page/strategic-placements1.webp') }}" class="img-fluid" alt="img">
                 </div>
                 <div class="image_box two">
                    <img src="{{ asset('assets/frontend/img/page/strategic-placements2.webp') }}" class="img-fluid two" alt="img">
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
                    <div class="before_title">From Story to Strategic Visibility</div>
                    <div class="title">Our Methodology</div>
                    <div class="small_text_sub">The live site emphasizes a step-based communications process and a “From Discovery to Dominance” approach. </div>
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
                       <p>We understand your brand, leadership voice, business priorities, media readiness, and communication goals.</p>
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
                       <p>We identify visibility gaps, narrative strengths, positioning opportunities, and reputation-building priorities.</p>
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
                       <p>We define story pillars, target publications, media angles, spokesperson priorities, and campaign rhythm.</p>
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
                       <p>We build sharp media assets—press notes, profiles, commentary hooks, interview themes, and contributed article concepts.</p>
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
                       <p>We pitch, follow up, align editorial relevance, and open meaningful media conversations.</p>
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
                       <p>We repurpose placements across LinkedIn, website, leadership profiles, decks, and brand channels.</p>
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
                       <p>We review traction, publication quality, message pull-through, and next opportunities to improve future outcomes.</p>
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
                       <p>We build continuity through ongoing media momentum, strengthening long-term visibility, authority, and brand recall.</p>
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
                    <div class="before_title">Strategic Media Placement Across High-Impact Sectors</div>
                    <h2>Integrated PR & Influence Services</h2>
                    <p>Different industries need different media narratives. We tailor story positioning to sector maturity, audience intent, and stakeholder expectations.</p>
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
                             <h2 class="title_service"><a href="#">Enterprise Tech & B2B SaaS</a></h2>
                             <p class="text-white">
                                Positioning products, platforms, founders, and category insights across high-trust business and technology media platforms.
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
                                <a href="{{ route('aideeptech') }}">AI, Deep Tech & Innovation</a>
                             </h2>
                             <p class="text-white">
                                Translating complex innovation into compelling narratives that media, stakeholders, and markets can easily understand and engage with.
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
                             <h2 class="title_service"><a href="#">Health & Wellness</a></h2>
                             <p class="text-white">
                                Building expert-led credibility through narratives rooted in trust, relevance, and long-term impact across key audience segments.
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
                                <a href="{{ route('bfsifintech') }}">BFSI & Fintech</a>
                             </h2>
                             <p class="text-white">
                                Driving confidence through measured communication, leadership commentary, and credibility-led media visibility across financial ecosystems.
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
                                <a href="{{ route('luxurybrands') }}">Luxury & Premium Brands</a>
                             </h2>
                             <p class="text-white">
                                Creating aspirational narratives that align brand visibility with premium perception, desirability, and strong market positioning.
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
                                <p class="color_white">Strategic thinking that aligns communication with business outcomes</p>
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
                    <h2 class="title">Why Clients Trust Elevate One Media for Strategic Placements</h2>
                    <p>
                       We combine strategic thinking with execution excellence to deliver placements that build credibility, authority, and long-term brand value.
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
                             We work with leadership intent, not just PR activity—ensuring every placement aligns with larger business and reputation objectives.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             We integrate story and strategy by shaping messaging that delivers both editorial value and meaningful stakeholder impact.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             We prioritise relevance, credibility, and positioning strength over vanity coverage to ensure lasting brand perception.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             We adopt an amplification mindset—turning every placement into long-term authority across channels and communication touchpoints.
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
                 <h2>Media Reach <span>120+</span></h2>
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
                             <span class="icon-play"></span> Do you guarantee media placements?
                          </dt>
                          <dd class="accordion-content hide" style="display: block;">
                             <p>
                                We do not believe in generic promises. We build strong editorially relevant opportunities and pursue high-fit placements with rigor, relationships, and precision.
                             </p>
                          </dd>

                          <!-- 2 -->
                          <dt class="faq_header">
                             <span class="icon-play"></span> Which publications do you target?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                That depends on your sector, audience, goals, and story angle. We map a customised mix of business, trade, digital, and regional media.
                             </p>
                          </dd>

                          <!-- 3 -->
                          <dt class="faq_header">
                             <span class="icon-play"></span> Can this service support founder branding?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Strategic media placements are a strong pillar of founder visibility and executive authority across markets and industries.
                             </p>
                          </dd>

                          <!-- 4 -->
                          <dt class="faq_header">
                             <span class="icon-play"></span> Do you also help with content creation?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. We support story angles, press material, quote development, article concepts, spokesperson positioning, and amplification content.
                             </p>
                          </dd>

                          <!-- 5 -->
                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this useful only for large companies?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                No. Growth-stage brands, startups, premium service firms, and emerging category leaders benefit when the narrative is strong and well targeted.
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
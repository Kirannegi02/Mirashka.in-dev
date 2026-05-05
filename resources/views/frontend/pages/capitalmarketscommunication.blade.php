@extends('frontend.layouts.app')

@section('content')

   <!----banner---->
   <section class="banner-section bg_op_1"
      <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/cmc-banner.webp') }}');">
      <!--===============spacing==============-->
      <div class="pd_top_100"></div>
      <!--===============spacing==============-->
      <div class="auto-container">
         <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 col-md-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">

                     <!-- Eyebrow -->
                     <div class="before_title">Investor Confidence & Market Credibility</div>

                     <!-- Headline -->
                     <h2 class="title_big">
                        Capital Markets Communication That Builds Trust at Every Stage
                     </h2>

                     <!-- Subheadline -->
                     <p>
                        We help listed companies, IPO-bound businesses, promoters, and leadership teams communicate with
                        clarity, confidence, and credibility across investors, analysts, media, and market stakeholders.
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
                                 <img src="{{ asset('assets/frontend/img/client/' . $i . '.png') }}" class="img-fluid"
                                    alt="client-logo">
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

            <!-- FORM SECTION (UNCHANGED) -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="contact_form_box_all type_five">
                  <div class="contact_form_box_inner simple_form">
                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <div class="before_title">Start the Conversation</div>
                           <h6 class="font_24">Request an Investor Visibility Strategy</h6>
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
                           <a href="#" class="lightbox-image"><i class="icon-play"></i></a>
                        </div>

                        <h6 class="text-black">Strategic Communication for the Capital Markets Ecosystem</h6>

                        <h1 class="text-black">
                           Strategic Communication for the Capital Markets Ecosystem
                        </h1>

                        <p class="text-black">
                           Capital markets communication is not just about announcements. It is about ensuring that every
                           interaction with investors, analysts, media, and market participants reflects clarity,
                           consistency, and strategic intent.

                           At Elevate One Media, we help organizations manage visibility around high-stakes corporate
                           moments—whether it is pre-IPO positioning, investor trust-building, leadership communication,
                           major announcements, or sustained post-listing visibility. Our approach combines message
                           discipline, market sensitivity, and reputation intelligence to create communication that
                           supports long-term credibility.
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
                     <div class="before_title">Why This Matters</div>
                     <h2>Why Capital Markets Communication Matters</h2>
                     <p class="text-black">
                        Capital markets communication plays a critical role in shaping how investors, analysts, and
                        stakeholders interpret business performance, leadership intent, and long-term direction.
                     </p>
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
                              <img loading="lazy" width="500" height="500"
                                 src="{{ asset('assets/frontend/img/page/cmc.webp') }}" alt="img">
                              <div class="gradient"></div>
                           </div>
                           <div class="content_box">
                              <h2 class="title_service"><a href="#" rel="bookmark">Investor Trust Is Earned Through
                                    Communication</a></h2>
                              <p class="short_desc">
                                 Numbers matter, but how the story is framed around governance, vision, performance, and
                                 resilience shapes investor confidence.
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
                                 src="{{ asset('assets/frontend/img/page/mrc.webp') }}" alt="img"
                                 loading="lazy">
                              <div class="gradient"></div>
                           </div>
                           <div class="content_box">
                              <h2 class="title_service"><a href="#" rel="bookmark">Markets Reward Clarity</a></h2>
                              <p class="short_desc">
                                 Clear, timely, and credible communication reduces ambiguity and strengthens stakeholder
                                 perception.
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
                                 src="{{ asset('assets/frontend/img/page/lviv.webp') }}" alt="img"
                                 loading="lazy">
                              <div class="gradient"></div>
                           </div>
                           <div class="content_box">
                              <h2 class="title_service"><a href="" rel="bookmark">Leadership Visibility Impacts Valuation
                                    Narratives</a></h2>
                              <p class="short_desc">
                                 Promoters and senior leadership play a central role in how the market interprets ambition,
                                 execution capability, and long-term value.
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
                  <div class="before_title">What Our Capital Markets Communication Service Includes</div>
                  <div class="small_text_sub">Strategic communication that builds investor trust and market confidence
                  </div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>

            <div class="pd_bottom_20"></div>

            <!-- CARD 1 -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two ">
                     <div class="content_inner"
                        style="background-image: url('{{ asset('assets/frontend/img/page/ind.webp') }}');">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2><a href="#">Investor Narrative Development</a></h2>
                           <p>We craft a compelling equity story around business model, growth trajectory, governance,
                              strategy, and future opportunity.</p>
                           <ul>
                              <li>Equity story development</li>
                              <li>Growth & strategy positioning</li>
                              <li>Governance-led messaging</li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="#"><i class="icon-right-arrow"></i></a>
                     </div>
                     <div class="overlay_content">
                        <h2><a href="#">IPO & Pre-IPO Communication Support</a></h2>
                        <p>We shape market-facing narratives that enhance visibility and prepare stakeholders for upcoming
                           public market milestones.</p>
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
                        style="background-image: url('{{ asset('assets/frontend/img/page/mfpe.webp') }}');">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2><a href="#">Leadership Positioning</a></h2>
                           <p>We build promoter and CXO communication that reinforces confidence, credibility, and
                              strategic direction.</p>
                           <ul>
                              <li>Promoter visibility</li>
                              <li>CXO communication strategy</li>
                              <li>Leadership narrative building</li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="#"><i class="icon-right-arrow"></i></a>
                     </div>
                     <div class="overlay_content">
                        <h2><a href="#">Media & Financial Press Engagement</a></h2>
                        <p>We support targeted visibility across business and financial media to ensure the company
                           narrative is well represented.</p>
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
                        style="background-image: url('{{ asset('assets/frontend/img/page/cac.webp') }}');">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2><a href="#">Corporate Announcement Communication</a></h2>
                           <p>From expansion and partnerships to restructuring, milestones, and strategic developments—we
                              shape communication with precision and market sensitivity.</p>
                           <ul>
                              <li>Milestone communication</li>
                              <li>Strategic announcements</li>
                              <li>Market-sensitive messaging</li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="#"><i class="icon-right-arrow"></i></a>
                     </div>
                     <div class="overlay_content">
                        <h2><a href="#">Reputation Preparedness</a></h2>
                        <p>We identify communication risks and build response-ready messaging around scrutiny, volatility,
                           or high-attention business events.</p>
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

                        <h2>Where Capital Markets Communication Creates the Greatest Value</h2>
                     </div>
                  </div>
               </div>

               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="description_box color_white text-md-end">
                     <p>
                        Strategic communication plays a critical role during high-impact business moments where investor
                        perception, clarity, and credibility directly influence outcomes.
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
                           <img src="{{ asset('assets/frontend/img/page/Pre-IPO.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-human-resources"></span>
                           <div class="text_box">
                              <h2><a href="#">Pre-IPO & Market Entry Visibility</a></h2>
                              <p>
                                 For companies preparing to enter public markets and establish strong investor-facing
                                 credibility before listing.
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
                           <img src="{{ asset('assets/frontend/img/page/Post-Listing.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-audit"></span>
                           <div class="text_box">
                              <h2><a href="#">Post-Listing & Ongoing Market Communication</a></h2>
                              <p>
                                 For maintaining investor trust through consistent communication, quarterly updates, and
                                 long-term reputation management.
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
                           <img src="{{ asset('assets/frontend/img/page/High-Stakes.webp') }}" class="img-fluid">
                        </div>
                        <div class="content_inner">
                           <span class="icon-heartbeat"></span>
                           <div class="text_box">
                              <h2><a href="#">High-Stakes Corporate Milestones</a></h2>
                              <p>
                                 For acquisitions, expansion, restructuring, fundraising, and leadership positioning where
                                 communication directly impacts market perception.
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
                     <h2 class="title">What Effective Capital Markets Communication Delivers</h2>

                     <p>
                        When thoughtfully executed, capital markets communication becomes a strategic business asset—not
                        merely a disclosure function.
                     </p>

                     <!-- THEME LIST START -->
                     <div class="list_item_box style_two style_list">
                        <ul class="list-inline">

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#" rel="nofollow">
                                    Build stronger investor confidence
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#" rel="nofollow">
                                    Sharpen the company’s market narrative
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#" rel="nofollow">
                                    Strengthen promoter and CXO credibility
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#" rel="nofollow">
                                    Improve message consistency across stakeholders
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#" rel="nofollow">
                                    Support reputation resilience during critical periods
                                 </a>
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 <a class="nav_link" href="#" rel="nofollow">
                                    Increase trust among analysts, investors, partners, and media
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
                        Download our Capital Markets Communication Overview <i class="icon-download-symbol"></i>
                     </a>
                  </div>
               </div>
            </div>

            <div class="col-xl-6 col-lg-10 col-md-12">
               <div class="image_boxes style_five">
                  <div class="image_box one">
                     <img src="{{ asset('assets/frontend/img/page/cmc12.webp') }}" class="img-fluid" alt="img">
                  </div>
                  <div class="image_box two">
                     <img src="{{ asset('assets/frontend/img/page/cmc11.webp') }}" class="img-fluid two" alt="img">
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
                     <div class="title">From Market Narrative to Stakeholder Confidence</div>
                     <div class="small_text_sub">
                        A structured methodology-driven engagement model designed to build clarity, credibility, and
                        confidence across capital market stakeholders.
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
                        <p>We study the business, leadership, market context, communication history, and key stakeholder
                           expectations.</p>
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
                        <p>We identify perception gaps, communication risks, message inconsistencies, and reputation
                           opportunities.</p>
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
                        <p>We define narrative pillars, visibility priorities, communication themes, and stakeholder
                           engagement pathways.</p>
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
                        <p>We create market-sensitive messaging, executive narratives, announcement frameworks, and
                           supporting media assets.</p>
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
                        <p>We activate the narrative across media, leadership touchpoints, and strategic visibility
                           opportunities.</p>
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
                        <p>We extend narrative strength through owned, earned, and executive-led communication channels.
                        </p>
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
                        <p>We evaluate message pull-through, stakeholder resonance, visibility outcomes, and next-stage
                           communication actions.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 08 (kept for UI balance) -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/page/icon/sustain.png') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">08</span>
                     <div class="text_box">
                        <h2><a href="#">Sustain & Scale</a></h2>
                        <p>We build continuity through ongoing communication, strengthening long-term investor confidence,
                           credibility, and market positioning.</p>
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
                     <h2>Built for Businesses Navigating Investor Attention</h2>
                     <p>
                        This service is designed for organizations and leadership teams that need structured, credible, and
                        market-facing investor visibility.
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
                              <h2 class="title_service"><a href="#">IPO-Bound Companies</a></h2>
                              <p class="text-white">
                                 Building visibility and narrative strength ahead of public market entry and investor
                                 scrutiny.
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
                                 <a href="#">Listed Companies</a>
                              </h2>
                              <p class="text-white">
                                 Strengthening narrative control, investor communication, and ongoing market perception.
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
                              <h2 class="title_service"><a href="#">Promoter-Led High-Growth Businesses</a></h2>
                              <p class="text-white">
                                 Supporting founders and leadership teams entering expansion phases with stronger market
                                 visibility.
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
                                 <a href="#">PE & VC-Backed Companies</a>
                              </h2>
                              <p class="text-white">
                                 Preparing businesses for broader market visibility and investor engagement beyond funding
                                 cycles.
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
                                 <a href="#">Strategic Transformation & Leadership Visibility</a>
                              </h2>
                              <p class="text-white">
                                 Supporting companies in transition and leadership teams that require stronger
                                 investor-facing credibility.
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
                        <div
                           class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                           style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                           <div class="title_all_box style_one light_color">
                              <div class="title_sections left">
                                 <div class="before_title color_white">Why Elevate One Media</div>
                                 <p class="color_white">Capital markets communication requires precision, credibility, and
                                    leadership-aligned strategy</p>
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
                     <h2 class="title">Why Elevate One Media for Capital Markets Communication</h2>
                     <p>
                        We bring together strategic clarity, leadership-focused communication, and market-sensitive
                        execution to build credibility where it matters most.
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
                              Strategic Precision — We align every message with the company’s broader business, reputation,
                              and stakeholder priorities.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              Leadership-Led Communication Thinking — We recognise that in capital markets, leadership
                              voice is as critical as corporate messaging.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              Integrated Narrative Design — We connect investor communication with media visibility,
                              executive presence, and long-term reputation strategy.
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



<section class="content-section">

   <div class="pd_top_90"></div>

   <div class="container">
      <div class="row gutter_15px">

         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-12 pd_left_35">

            <div class="title_all_box style_one dark_color">
               <div class="title_sections">

                  <div class="before_title">WHY ELEVATE ONE MEDIA</div>

                  <h2 class="title">
                     Why Elevate One Media Is a Different Kind of Partner
                  </h2>

                  <p>
                     What makes Elevate One Media different is not just the services. It is the way the work is thought through.
                  </p>

               </div>
            </div>

            <!-- DIFFERENTIATORS -->
            <div class="list_item_box style_two">
               <ul class="list-inline">

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <strong>We build authority, not noise —</strong> We do not approach visibility as random activity. We build systems that strengthen perception over time.
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <strong>We work at leadership level —</strong> Our thinking is designed for founders, CXOs, public figures, and high-trust brands where reputation matters.
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <strong>We connect services into one reputation engine —</strong> Media, digital presence, audio IP, awards, speaking visibility, and regional communication work together, not in silos.
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <strong>We think in business outcomes —</strong> The goal is not coverage for its own sake, but trust, relevance, distinction, and stakeholder response.
                     </small>
                  </li>

                  <li class="list_items mr_bottom_15">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <strong>We understand premium positioning —</strong> For high-visibility leaders and brands, how you look in the market matters as much as where you appear.
                     </small>
                  </li>

               </ul>
            </div>

            <div class="pd_bottom_20"></div>

            <!-- CTA -->
            <div class="theme_btn_all color_one">
               <a href="{{ route('projectenquiries') }}" class="theme-btn one">
                  Book a Discovery Call
               </a>
            </div>

         </div>

         <!-- LEFT IMAGE BLOCK (UPDATED TEXT ONLY) -->
         <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
            <div class="creote-image-box image-box-overlap">
               <div class="image_boxes style_eight">
                  <img src="{{ asset('assets/frontend/img/page/iv1.webp') }}" class="img-fluid image_fit height_500px pd_right_30" alt="img">

                  <div class="row no-space">
                     <div class="col-lg-5"></div>

                     <div class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                        style="background-image: url({{ asset('assets/frontend/images/pattern-n3.png') }})!important;">

                        <div class="title_all_box style_one light_color">
                           <div class="title_sections left">

                              <div class="before_title color_white">WHY ELEVATE ONE MEDIA</div>

                              <p class="color_white">
                                 A reputation-led, leadership-first approach to building influence, trust, and market authority.
                              </p>

                           </div>
                        </div>

                     </div>
                  </div>
               </div>
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
                              <span class="icon-play"></span> Is this only for listed companies?
                           </dt>
                           <dd class="accordion-content hide" style="display: block;">
                              <p>
                                 No. This service is equally valuable for IPO-bound businesses, growth companies,
                                 promoter-led firms, and organizations entering phases of increased investor visibility.
                              </p>
                           </dd>

                           <!-- 2 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Do you help with investor-facing storytelling?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 Yes. We shape narratives around business model, growth strategy, governance, leadership
                                 positioning, and long-term direction to strengthen investor confidence.
                              </p>
                           </dd>

                           <!-- 3 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Do you work only with financial media?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 Not necessarily. Based on objectives, we engage business, sectoral, strategic, and
                                 leadership-focused media platforms to ensure the right narrative reach.
                              </p>
                           </dd>

                           <!-- 4 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Can you support leadership communication during sensitive
                              periods?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 Yes. We bring message clarity and communication discipline during high-stakes or
                                 high-attention situations to ensure consistency and credibility.
                              </p>
                           </dd>

                           <!-- 5 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Is this the same as investor relations?
                           </dt>
                           <dd class="accordion-content hide">
                              <p>
                                 It is adjacent but not identical. We focus on strategic communication, narrative design,
                                 visibility, and reputation support around capital market stakeholders.
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
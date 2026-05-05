  @extends('frontend.layouts.app')

  @section('content')

 <!----banner---->
<section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/iv-banner.webp') }}');">
   <!--===============spacing==============-->
   <div class="pd_top_100"></div>
   <!--===============spacing==============-->
   <div class="auto-container">
      <div class="row align-items-center">
         <div class="col-xl-7 col-lg-6 col-md-12">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections">
                  
                  <!-- Eyebrow -->
                  <div class="before_title">Capital Markets Presence & Stakeholder Confidence</div>
                  
                  <!-- Headline -->
                  <h2 class="title_big">
                     Investor Visibility That Strengthens Market Confidence and Leadership Credibility
                  </h2>
                  
                  <!-- Subheadline -->
                  <p>
                     We help companies, promoters, and leadership teams build meaningful visibility among investors, analysts, financial media, and market stakeholders through strategic communication that is clear, credible, and confidence-building.
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
                     <!-- KEEP ALL YOUR EXISTING LOGOS -->
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

         <!-- FORM SECTION (ONLY TEXT UPDATED) -->
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
                          <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image"><i
                                class="icon-play"></i></a>
                       </div>
                       <h6 class="text-black">For CXOs | Founders | Corporates | High-Growth Brands</h6>
                       <h1 class="text-black">Visibility That Builds Investor Trust</h1>
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
                  <div class="before_title">Why Investor Visibility Matters</div>
                  <h2>Why Investor Visibility Is a Strategic Advantage</h2>
                  <p class="text-black">
                     Investor perception is shaped not only by performance, but by how clearly, consistently, and credibly a company communicates its narrative, leadership intent, and market positioning.
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
                           <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/confidence.webp') }}" alt="img">
                           <div class="gradient"></div>
                        </div>
                        <div class="content_box">
                           <h2 class="title_service"><a href="#" rel="bookmark">Confidence Begins with Clarity</a></h2>
                           <p class="short_desc">
                              Investors respond better to companies that communicate clearly, consistently, and credibly.
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
                           <img width="500" height="500" src="{{ asset('assets/frontend/img/page/mpio.webp') }}" alt="img" loading="lazy">
                           <div class="gradient"></div>
                        </div>
                        <div class="content_box">
                           <h2 class="title_service"><a href="#" rel="bookmark">Market Perception Influences Opportunity</a></h2>
                           <p class="short_desc">
                              How a company is seen by investors, analysts, and financial media often shapes long-term market confidence.
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
                           <img width="500" height="500" src="{{ asset('assets/frontend/img/page/lvnc.webp') }}" alt="img" loading="lazy">
                           <div class="gradient"></div>
                        </div>
                        <div class="content_box">
                           <h2 class="title_service"><a href="" rel="bookmark">Leadership Visibility & Narrative Control</a></h2>
                           <p class="short_desc">
                              Promoters and senior leaders reinforce trust through visibility, while the absence of a clear narrative can lead markets to form their own assumptions.
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
               <div class="before_title">What Our Investor Visibility Service Includes</div>
               <div class="small_text_sub">Strategic visibility that builds investor trust and market confidence</div>
            </div>
            <div class="pd_bottom_40"></div>
         </div>

         <div class="pd_bottom_20"></div>

         <!-- CARD 1 -->
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="service_box style_two dark_color">
               <div class="service_content_two ">
                  <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/investor-facing.webp') }}');">
                     <div class="content_inner_in">
                        <div class="icon_image">
                           <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                        </div>
                        <h2><a href="#">Investor-Facing Narrative Design</a></h2>
                        <p>We shape a compelling narrative around business strength, growth opportunity, governance, and long-term direction.</p>
                        <ul>
                           <li>Business story development</li>
                           <li>Growth & market positioning</li>
                           <li>Messaging clarity for investors</li>
                        </ul>
                     </div>
                  </div>
                  <div class="ovarlay_link">
                     <a href="#"><i class="icon-right-arrow"></i></a>
                  </div>
                  <div class="overlay_content">
                     <h2><a href="#">Promoter & CXO Visibility</a></h2>
                     <p>We position founders, promoters, and leadership teams as credible, strategic, and market-aware voices.</p>
                  </div>
               </div>
            </div>
            <div class="mr_bottom_20"></div>
         </div>

         <!-- CARD 2 -->
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="service_box style_two dark_color">
               <div class="service_content_two active_ser">
                  <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/strategic-milestone.webp') }}');">
                     <div class="content_inner_in">
                        <div class="icon_image">
                           <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                        </div>
                        <h2><a href="#">Financial & Business Media Visibility</a></h2>
                        <p>We enable presence across relevant financial, business, and sector media platforms where investor attention matters.</p>
                        <ul>
                           <li>Targeted media mapping</li>
                           <li>Investor-focused publications</li>
                           <li>Strategic media outreach</li>
                        </ul>
                     </div>
                  </div>
                  <div class="ovarlay_link">
                     <a href="#"><i class="icon-right-arrow"></i></a>
                  </div>
                  <div class="overlay_content">
                     <h2><a href="#">Strategic Milestone Communication</a></h2>
                     <p>We align communication around expansion, partnerships, innovation, and business developments that influence perception.</p>
                  </div>
               </div>
            </div>
            <div class="mr_bottom_20"></div>
         </div>

         <!-- CARD 3 -->
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="service_box style_two dark_color">
               <div class="service_content_two ">
                  <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/thought-leadership.webp') }}');">
                     <div class="content_inner_in">
                        <div class="icon_image">
                           <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                        </div>
                        <h2><a href="#">Thought Leadership for Market Credibility</a></h2>
                        <p>We develop expert-led communication that strengthens authority and builds long-term trust.</p>
                        <ul>
                           <li>Expert commentary</li>
                           <li>Insight-driven articles</li>
                           <li>Authority building</li>
                        </ul>
                     </div>
                  </div>
                  <div class="ovarlay_link">
                     <a href="#"><i class="icon-right-arrow"></i></a>
                  </div>
                  <div class="overlay_content">
                     <h2><a href="#">Reputation-Sensitive Communication Support</a></h2>
                     <p>We help maintain message discipline during periods of scrutiny, transition, or heightened market attention.</p>
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

                     <h2>What Investor Visibility Can Help You Achieve</h2>
                  </div>
               </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="description_box color_white text-md-end">
                  <p>
                     Strategic investor visibility helps shape perception, strengthen leadership credibility, and build long-term confidence among market stakeholders.
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
                        <img src="{{ asset('assets/frontend/img/page/wivs1.webp') }}" class="img-fluid">
                     </div>
                     <div class="content_inner">
                        <span class="icon-human-resources"></span>
                        <div class="text_box">
                           <h2><a href="#">Build Confidence Before Major Corporate Milestones</a></h2>
                           <p>
                              Ideal for companies entering new phases of growth, fundraising, restructuring, or public market readiness.
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
                        <img src="{{ asset('assets/frontend/img/page/wivs2.webp') }}" class="img-fluid">
                     </div>
                     <div class="content_inner">
                        <span class="icon-audit"></span>
                        <div class="text_box">
                           <h2><a href="#">Improve Promoter and Leadership Credibility</a></h2>
                           <p>
                              Strengthen how leadership is perceived by investors, analysts, and market observers.
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
                        <img src="{{ asset('assets/frontend/img/page/wivs3.webp') }}" class="img-fluid">
                     </div>
                     <div class="content_inner">
                        <span class="icon-heartbeat"></span>
                        <div class="text_box">
                           <h2><a href="#">Increase Strategic Visibility & Build Long-Term Reputation</a></h2>
                           <p>
                              Build consistent presence in relevant media while developing communication continuity that reinforces trust beyond one-time announcements.
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
                  <div class="before_title">Outcomes That Matter in the Investor Ecosystem</div>
                  <h2 class="title">Outcomes That Matter in the Investor Ecosystem</h2>

                  <p>
                     Done well, investor visibility becomes a strategic credibility asset. It helps a company move from being noticed to being trusted.
                  </p>

                  <!-- THEME LIST START -->
                  <div class="list_item_box style_two style_list">
                     <ul class="list-inline">

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Stronger investor and analyst confidence
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Sharper market perception
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 More credible promoter and CXO presence
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Higher trust around business direction and governance
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Better visibility across investor-relevant channels
                              </a>
                           </small>
                        </li>

                        <li class="list_items pd_bottom_10">
                           <small class="d-flex align-items-center">
                              <span class="icon_bx"><i class="icon-checked"></i></span>
                              <a class="nav_link" href="#" rel="nofollow">
                                 Greater narrative control during high-attention moments
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
                     Download our Investor Visibility Overview <i class="icon-download-symbol"></i>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-xl-6 col-lg-10 col-md-12">
            <div class="image_boxes style_five">
               <div class="image_box one">
                  <img src="{{ asset('assets/frontend/img/page/iv1.webp') }}" class="img-fluid" alt="img">
               </div>
               <div class="image_box two">
                  <img src="{{ asset('assets/frontend/img/page/iv2.webp') }}" class="img-fluid two" alt="img">
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
                  <div class="title">A Structured Path to Market-Facing Visibility</div>
                  <div class="small_text_sub">
                     A multi-stage methodology centered on discovery, diagnosis, strategy, crafting, engagement, amplification, and continuous optimisation.
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
                     <p>We understand your business, leadership story, market context, and visibility objectives.</p>
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
                     <p>We identify communication gaps, perception risks, and investor-facing narrative opportunities.</p>
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
                     <p>We define the visibility roadmap, message pillars, media priorities, and leadership positioning themes.</p>
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
                     <p>We build sharp narratives, communication frameworks, profile angles, and supporting media assets.</p>
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
                     <p>We activate your story across relevant media and strategic communication opportunities.</p>
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
                     <p>We extend visibility through integrated executive presence, owned channels, and strategic content use.</p>
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
                     <p>We track resonance, publication quality, and message pull-through to refine the next phase.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- 08 (kept as continuity step for UI balance) -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="choose_box type_one">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/icon/sustain.png') }}" class="img-fluid svg_image" alt="icon">
               </div>
               <div class="content_box">
                  <span class="step_no">08</span>
                  <div class="text_box">
                     <h2><a href="#">Sustain & Scale</a></h2>
                     <p>We ensure continuity through ongoing visibility, strengthening long-term investor confidence and market positioning.</p>
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
                     This service is designed for organizations and leadership teams that need structured, credible, and market-facing investor visibility.
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
                              Building visibility and narrative strength ahead of public market entry and investor scrutiny.
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
                              Supporting founders and leadership teams entering expansion phases with stronger market visibility.
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
                              Preparing businesses for broader market visibility and investor engagement beyond funding cycles.
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
                              Supporting companies in transition and leadership teams that require stronger investor-facing credibility.
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
                           <span class="icon-play"></span> Is investor visibility only useful for listed companies?
                        </dt>
                        <dd class="accordion-content hide" style="display: block;">
                           <p>
                              No. It is also highly relevant for IPO-bound businesses, growth-stage firms, and promoter-led organizations seeking stronger market credibility.
                           </p>
                        </dd>

                        <!-- 2 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Does this include financial media outreach?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes, where relevant. We align visibility with financial, business, and sector media based on your communication objectives.
                           </p>
                        </dd>

                        <!-- 3 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Can this help improve promoter visibility?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. Promoter and CXO visibility is a key part of investor confidence building.
                           </p>
                        </dd>

                        <!-- 4 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Is this a replacement for investor relations?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              No. It complements investor relations by strengthening narrative, visibility, and communication-led trust.
                           </p>
                        </dd>

                        <!-- 5 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Can you support communication during sensitive periods?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes. We help create disciplined communication during periods of scrutiny, transition, or heightened market attention.
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
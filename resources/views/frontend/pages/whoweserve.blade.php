@extends('frontend.layouts.app')

@section('content')

   <style type="text/css">
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
   </style>
   <!---sliders-->
   <section class="single_banner style_one bg_op_1"
      style="background-image: url(assets/frontend/images/sliders/banner-10.jpg);">
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
                     Strategic Communication Built for Industries Where Reputation Drives Growth
                  </h1>

                  <!-- UPDATED SUBHEADLINE -->
                  <p class="description color_white">
                     At Elevate One Media, we partner with leaders across technology, finance, healthcare, sustainability,
                     luxury, education, and sports to build reputation-led visibility, authority, and long-term market
                     trust.
                  </p>

                  <!-- SUPPORTING LINE (NEW ADDITION) -->
                  <p class="description color_white">
                     Our industry-specific strategies combine storytelling, targeted media presence, and measurable
                     communication outcomes to position brands and leaders as trusted authorities in their domain.
                  </p>

                  <!-- CTA + VIDEO -->
                  <ul class="d_inline_block">

                     <!-- CTA 1 -->
                     <li>
                        <div class="theme_btn_all color_two">
                           <a href="#" class="theme-btn one primary-color-two">
                              Book a Strategy Call
                           </a>
                        </div>
                     </li>

                     <!-- CTA 2 -->
                     <li>
                        <div class="theme_btn_all">
                           <a href="#" class="theme-btn two">
                              Explore Practice Areas
                           </a>
                        </div>
                     </li>

                     <!-- VIDEO -->
                     <li class="vd_bx">
                        <div class="video_box">
                           <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                              <i class="icon-play"></i>
                           </a>
                        </div>
                     </li>

                  </ul>

               </div>

               <div class="pd_bottom_80"></div>

            </div>

            <!-- RIGHT IMAGE -->
            <!-- <div class="col-lg-4 hidden-md image_column">
               <div class="slider_image margin_extra">
                  <img src="{{ asset('assets/frontend/images/cal-img.png') }}" class="img-fluid" alt="slider image">
               </div>
            </div> -->

         </div>
      </div>
   </section>
   <!---sliders-->
   <section class="image-section-two">
      <div class="pd_top_90"></div>
      <div class="container">
         <div class="row">

            <!-- IMAGE -->
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
               <div class="image_boxes style_three">
                  <img src="{{ asset('assets/frontend/images/about/about-12.jpg') }}" class="background_image"
                     alt="strategy boardroom">
               </div>
            </div>

            <!-- CONTENT -->
            <div class="col-xl-6 col-lg-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">

                     <div class="before_title">Elevate One Media</div>

                     <h2>Industry Expertise Is Not a Label. It Is a Strategic Advantage.</h2>

                     <p class="short_desc ">
                        The strongest communication strategy is built on industry understanding. At Elevate One Media, we
                        approach every mandate through the lens of category context—what the market values, what the media
                        responds to, what stakeholders need to hear, and what kind of visibility actually builds trust.
                     </p>

                     <p class="short_desc">
                        This sector-led approach helps us create campaigns that are sharper in message, stronger in
                        positioning, and more effective in outcome. Whether the brief is about executive authority, brand
                        reputation, product credibility, investor confidence, or public perception, our work is shaped by
                        the realities of the industry itself.
                     </p>

                  </div>
               </div>
            </div>

         </div>
      </div>
      <div class="pd_bottom_90"></div>
   </section>
<section class="service-section bg_light_1">
   <div class="pd_top_80"></div>
   <div class="container">

      <div class="title_all_box style_one text-center dark_color">
         <div class="title_sections">
            <div class="before_title">Technology & Innovation</div>
            <h2>Turning Complex Technology Into Market Authority</h2>
            <p>
               We help enterprise tech, SaaS, and AI brands simplify complexity and build credibility through structured communication.
            </p>
         </div>
         <div class="pd_bottom_20"></div>
      </div>

      <div class="row">

         <!-- Card 1 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img loading="lazy" src="{{ asset('assets/frontend/images/service/service-image-2.png') }}" class="img-fluid" alt="tech">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon icon-monitor"></span>
                  </div>
                  <h2 class="title_service">
                     <a href="#">Enterprise Tech & B2B SaaS</a>
                  </h2>
                  <p class="short_desc">
                     Executive visibility, product storytelling, and enterprise-grade positioning.
                  </p>
                  <a class="read_more" href="#">
                     Read More <i class="icon-right-arrow-long"></i>
                  </a>
               </div>
            </div>
         </div>

         <!-- Card 2 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img loading="lazy" src="{{ asset('assets/frontend/images/service/service-image-3.png') }}" class="img-fluid" alt="ai">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon icon-cpu"></span>
                  </div>
                  <h2 class="title_service">
                     <a href="#">AI & Deep Tech</a>
                  </h2>
                  <p class="short_desc">
                     Innovation positioning, analyst narratives, and category leadership building.
                  </p>
                  <a class="read_more" href="#">
                     Read More <i class="icon-right-arrow-long"></i>
                  </a>
               </div>
            </div>
         </div>

         <!-- Card 3 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img loading="lazy" src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}" class="img-fluid" alt="innovation">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon icon-lightbulb"></span>
                  </div>
                  <h2 class="title_service">
                     <a href="#">Innovation Brands</a>
                  </h2>
                  <p class="short_desc">
                     Thought leadership, future positioning, and high-impact narrative building.
                  </p>
                  <a class="read_more" href="#">
                     Read More <i class="icon-right-arrow-long"></i>
                  </a>
               </div>
            </div>
         </div>

      </div>
   </div>

   <div class="pd_bottom_80"></div>
</section>
<section class="service-section">
   <div class="pd_top_80"></div>
   <div class="container">

      <div class="title_all_box style_one text-center dark_color">
         <div class="title_sections">
            <div class="before_title">Growth & Emerging Brands</div>
            <h2>Building Visibility That Converts Into Trust</h2>
            <p>
               For startups and scaling brands, we create strong narratives that drive recognition, recall, and investor confidence.
            </p>
         </div>
         <div class="pd_bottom_20"></div>
      </div>
      <div class="row">

         <!-- 1 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-2.png') }}" class="img-fluid">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-monitor"></span></div>
                  <h2 class="title_service"><a href="#">Enterprise Tech & B2B SaaS</a></h2>
                  <p class="short_desc">Executive visibility and enterprise positioning.</p>
                  <a class="read_more" href="#">Read More <i class="icon-right-arrow-long"></i></a>
               </div>
            </div>
         </div>

         <!-- 2 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-3.png') }}">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-cpu"></span></div>
                  <h2 class="title_service"><a href="#">AI & Deep Tech</a></h2>
                  <p class="short_desc">Innovation narratives and category leadership.</p>
                  <a class="read_more" href="#">Read More <i class="icon-right-arrow-long"></i></a>
               </div>
            </div>
         </div>

         <!-- 3 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-lightbulb"></span></div>
                  <h2 class="title_service"><a href="#">Innovation Brands</a></h2>
                  <p class="short_desc">Thought leadership and future positioning.</p>
                  <a class="read_more" href="#">Read More <i class="icon-right-arrow-long"></i></a>
               </div>
            </div>
         </div>

      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>
<section class="service-section bg_light_1">
   <div class="pd_top_80"></div>
   <div class="container">

      <div class="title_all_box style_one text-center dark_color">
         <div class="title_sections">
            <div class="before_title">High-Impact & Premium Sectors</div>
            <h2>Precision Positioning for High-Stakes Industries</h2>
            <p>
               We shape perception for industries where credibility, scale, and trust define success.
            </p>
         </div>
         <div class="pd_bottom_20"></div>
      </div>
      <div class="row">

         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-2.png') }}">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-settings"></span></div>
                  <h2 class="title_service"><a href="#">Infrastructure & Energy</a></h2>
                  <p class="short_desc">Scale and transformation storytelling.</p>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>

         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-3.png') }}">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-globe"></span></div>
                  <h2 class="title_service"><a href="#">Sustainability</a></h2>
                  <p class="short_desc">Environmental credibility and impact.</p>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>

         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-diamond"></span></div>
                  <h2 class="title_service"><a href="#">Luxury Brands</a></h2>
                  <p class="short_desc">Aspirational storytelling and perception.</p>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>

      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>
<section class="service-section">
   <div class="pd_top_80"></div>
   <div class="container">

      <div class="title_all_box style_one text-center dark_color">
         <div class="title_sections">
            <div class="before_title">Influence-Led Sectors</div>
            <h2>Storytelling That Builds Belief and Momentum</h2>
            <p>
               In sectors driven by perception and public trust, we create narratives that influence audiences at scale.
            </p>
         </div>
         <div class="pd_bottom_20"></div>
      </div>

      <div class="row">

         <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-2.png') }}">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-book"></span></div>
                  <h2 class="title_service"><a href="#">Education & Edtech</a></h2>
                  <p class="short_desc">Credibility and institutional positioning.</p>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>

         <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image"><div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/images/service/service-image-3.png') }}">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box"><span class="icon icon-football"></span></div>
                  <h2 class="title_service"><a href="#">Sports</a></h2>
                  <p class="short_desc">Narrative momentum and fan engagement.</p>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>

        

      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>

<!----process---->
<section class="about-section bg_light_1">

   <div class="pd_top_80"></div>

   <div class="container">
      <div class="row">

         <!-- LEFT CONTENT -->
         <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">

            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">

                  <!-- FIXED HEADING STRUCTURE -->
                  <div class="before_title">Why Practice-Area Depth Matters</div>
                  <h2 class="title">Sector-Specific Strategy Drives Stronger Communication Outcomes</h2>

                  <p>
                     A generic PR campaign may generate noise. A sector-intelligent communication strategy generates trust.
                     It ensures every narrative is aligned with how the industry thinks, evaluates, and responds.
                  </p>

                  <p>
                     Practice-area depth allows us to identify the right spokesperson angle, the right editorial framing,
                     the right media categories, and the right narrative tension for every brand and leader.
                     This is what transforms visibility into credibility.
                  </p>

              
               </div>
            </div>

            <div class="pd_bottom_10"></div>

      

         </div>

         <!-- RIGHT IMAGES -->
         <div class="col-xl-6 col-lg-10 col-md-12">
            <div class="image_boxes style_five">
               <div class="image_box one">
                  <img src="{{ asset('assets/frontend/images/about/about-11.jpg') }}" class="img-fluid" alt="strategy">
               </div>
               <div class="image_box two">
                  <img src="{{ asset('assets/frontend/images/about/about-2.jpg') }}" class="img-fluid two" alt="insights">
               </div>
            </div>
         </div>

      </div>
   </div>

   <div class="pd_bottom_80"></div>

</section>


<section class="image-box-section">
   <!--===============spacing==============-->
   <div class="pd_top_80"></div>
   <!--===============spacing==============-->

   <div class="container">
      <div class="row">

         <!-- LEFT IMAGE -->
         <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_three">
               <img src="{{ asset('assets/frontend/images/about/about-8.jpg') }}" class="img-fluid height_500 object-fit-cover" alt="image">
              
            </div>
         </div>

         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-12">

            <div class="title_all_box style_one dark_color">
               <div class="title_sections">

                  <div class="before_title">Why Our Sector Work Delivers</div>
                  <h2>What Practice-Led Communication Looks Like in the Real World</h2>

                  <p>
                     When communication is shaped with sector understanding, it performs differently. It builds faster trust, stronger recall, better stakeholder response, and more credible visibility.
                  </p>

                 

               </div>
            </div>

            <!-- PROGRESS SECTION -->
            <div class="progress_bar style_two">

               <div class="progress_new">
                  <div class="ProgressBar ProgressBar--animateText" data-progress="84">
                     <svg class="ProgressBar-contentCircle" height="170" width="170">
                        <circle class="ProgressBar-background" cx="85" cy="85" r="75"></circle>
                        <circle transform="rotate(-90, 85, 85)" class="ProgressBar-circle" cx="85" cy="85" r="75"></circle>
                     </svg>
                  </div>

                  <div class="progress-value">
                     <div>
                        <h6>Reputation & Visibility Alignment</h6>
                     </div>
                  </div>
               </div>

               <div class="content_box">
                  <h2>84%</h2>
                  <h3>Reputation & Visibility Alignment</h3>
                  <p>
                     Brands using sector-led communication frameworks see stronger alignment between messaging, credibility, and stakeholder perception.
                  </p>
               </div>

            </div>


            

         </div>

      </div>
   </div>

   <!--===============spacing==============-->
   <div class="pd_bottom_80"></div>
   <!--===============spacing==============-->
</section>
<section class="about-section bg_light_1">
   <!--===============spacing==============-->
   <div class="pd_top_85"></div>
   <!--===============spacing==============-->

   <div class="container">
      <div class="row">

         <!-- LEFT IMAGES -->
         <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_four">

               <div class="image_box one">
                  <img src="{{ asset('assets/frontend/images/about/about-11.jpg') }}" class="img-fluid" alt="about">
               </div>

               <div class="image_box">
                  <div class="row">
                     <div class="col-lg-6 col-md-12 ps-0 pe-lg-3 mb-4 mb-lg-0">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/images/about/about-3.jpg') }}" class="img-fluid one_img" alt="about">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 ps-lg-3">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/images/about/about-4.jpg') }}" class="img-fluid one_img" alt="about">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="image_content_inner viceo_en">
                  <h2>National & International Media Reach</h2>
                  <div class="video_box_null">
                     <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                        <i class="icon-play"></i>
                     </a>
                  </div>
               </div>

            </div>
         </div>

         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-12">
            <div class="pd_left_20">

               <!-- TITLE -->
               <div class="pd_top_25"></div>

               <div class="title_all_box style_three dark_color">
                  <div class="title_sections three left">

                     <div class="before_title">Our Media Network</div>
                     <h2>National Reach. International Access</h2>

                     <p>
                        A strong media strategy depends not only on story quality, but also on access, fit, and relevance.
                        Elevate One Media works with a broad ecosystem of national and international media environments
                        across business, technology, lifestyle, finance, sectoral, leadership, and mainstream visibility spaces.
                     </p>

                    

                  </div>
               </div>

               <div class="mr_bottom_25"></div>

               <!-- MEDIA BLOCKS -->
               <div class="row gutter_15px">

                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="txt_content">
                              <h3><a href="#">National Media Network</a></h3>
                              <p>Business media, mainstream press, sector publications, lifestyle titles, digital platforms, regional reach</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="txt_content">
                              <h3><a href="#">International Media Network</a></h3>
                              <p>Global business publications, international digital visibility, executive profiling platforms, cross-border storytelling</p>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>

               <div class="mr_bottom_30"></div>

               <!-- CTA -->
               <div class="theme_btn_all color_one">
                  <a href="#" class="theme-btn five">
                     Explore Media Reach <i class="icon-right-arrow"></i>
                  </a>
               </div>

            </div>
         </div>

      </div>
   </div>

   <!--===============spacing==============-->
   <div class="pd_bottom_60"></div>
   <!--===============spacing==============-->
</section>
   @include('frontend.layouts.common.sections.clients')
   @include('frontend.layouts.common.sections.casestudies')
   <section class="faqs-section">

      <div class="pd_top_80"></div>

      <div class="container">

         <!-- TITLE -->
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">FAQs</div>
                     <div class="title">Frequently Asked Questions</div>
                     <div class="small_text_sub">Clarity on how we work, who we work with, and what to expect</div>
                  </div>
                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>

         <div class="row">

            <!-- LEFT SIDE (UNCHANGED IMAGES + METRICS) -->
            <div class="col-xl-3 col-lg-6 mb-5">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Client Satisfaction <span>98%</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" style="width: 98%;"></div>
                  </div>
               </div>
            </div>

            <div class="col-xl-3 col-lg-6 mb-5">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Engagement Impact <span>100+</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" style="width: 100%;"></div>
                  </div>
               </div>
            </div>

            <!-- FAQ RIGHT -->
            <div class="col-xl-6 col-lg-12">
               <div class="faq_section type_one">
                  <div class="block_faq">
                     <div class="accordion">
                        <dl>

                          <!-- 1 -->
<dt class="faq_header active">
   <span class="icon-play"></span> Do you create separate communication strategies for each industry?
</dt>
<dd class="accordion-content" style="display:block;">
   <p>
      Yes. Every industry operates within a different communication environment, media landscape, and stakeholder expectation. Our strategies are tailored accordingly.
   </p>
</dd>

<!-- 2 -->
<dt class="faq_header">
   <span class="icon-play"></span> Can one brand fit across multiple practice areas?
</dt>
<dd class="accordion-content">
   <p>
      Absolutely. Many modern brands operate across multiple sectors such as technology, finance, healthcare, and consumer ecosystems. We align communication to reflect this.
   </p>
</dd>

<!-- 3 -->
<dt class="faq_header">
   <span class="icon-play"></span> Do you only work with large corporates?
</dt>
<dd class="accordion-content">
   <p>
      No. We work with founders, growth-stage companies, public-facing experts, and institutions looking to build stronger credibility and visibility.
   </p>
</dd>

<!-- 4 -->
<dt class="faq_header">
   <span class="icon-play"></span> Can you support brands looking for both India and international visibility?
</dt>
<dd class="accordion-content">
   <p>
      Yes. Our communication approach is designed to support both domestic and global visibility, depending on the brand’s growth ambitions.
   </p>
</dd>

<!-- 5 -->
<dt class="faq_header">
   <span class="icon-play"></span> What makes Elevate One Media different in industry-led communications?
</dt>
<dd class="accordion-content">
   <p>
      We combine sector intelligence with strategic storytelling. This ensures communication is not just visible, but credible, relevant, and aligned with how each industry evaluates authority.
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
   @include('frontend.layouts.common.sections.success')








@endsection
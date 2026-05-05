@extends('frontend.layouts.app')
@section('content')
<section class="expertise">
   <div class="area_of_expertise">
      <div class="simpleParallax">
         <img id="expertise-image" src="{{ asset('assets/frontend/img/page/wws/et-banner.webp') }}" class="cover-parallax" alt="Enterprise Tech & SaaS">
      </div>
      <div class="title_and_video">
         <div class="auto-container">
            <div class="row align-items-center">
               <!-- EMPTY COLUMN (REPLACES VIDEO SPACE FOR BALANCE) -->
               <div class="col-lg-4"></div>
               <div class="col-lg-2"></div>
               <div class="col-lg-6">
                  <div class="title_all_box style_one text-end">
                     <div class="title_sections">
                        <!-- UPDATED CONTENT -->
                        <h2 id="expertise-title">
                           Building Category Authority for Enterprise Tech & B2B SaaS Leaders
                        </h2>
                        <p id="expertise-desc">
                           Elevate One Media helps enterprise technology brands, SaaS founders, and B2B leadership teams build trust, sharpen positioning, and create the kind of visibility that influences buyers, investors, partners, and the wider market.
                        </p>
                     </div>
                     <div class="theme_btn">
                        <a id="expertise-link" href="#contact" class="theme-btn one">
                        Book a Discovery Call
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<style>
   /* Optional: smooth fade effect */
   #expertise-image {
   transition: opacity 0.4s ease-in-out;
   }
</style>
<!---about section--->
<section class="about-section">
   <div class="pd_top_85"></div>
   <div class="container">
      <div class="row">
         <!-- IMAGES (UNCHANGED) -->
         <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_four">
               <div class="image_box one">
                  <img src="{{ asset('assets/frontend/img/page/wws/et1.webp') }}" class="img-fluid" alt="Enterprise Tech">
               </div>
               <div class="image_box">
                  <div class="row">
                     <div class="col-lg-6 col-md-12 ps-0 pe-0 pe-lg-3 mb-4 mb-lg-0">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/img/page/wws/et2.webp') }}" class="img-fluid one_img" alt="SaaS">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/img/page/wws/et3.webp') }}" class="img-fluid one_img" alt="B2B Tech">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- CONTENT -->
         <div class="col-xl-6 col-lg-12">
            <div class="pd_left_20">
               <div class="pd_top_25"></div>
               <div class="title_all_box style_three dark_color">
                  <div class="title_sections three left">
                     <!-- SECTION TAG -->
                     <div class="before_title">
                        Who We Serve — Enterprise Tech & B2B SaaS
                     </div>
                     <!-- HEADING -->
                     <h2>
                        In Enterprise Technology, Clarity Builds Credibility
                     </h2>
                     <!-- BODY -->
                     <p>
                        Enterprise technology and SaaS brands often solve complex, high-value problems for sophisticated decision-makers. That means visibility alone is not enough. Communication must make the product relevant, the leadership credible, and the business easier to trust.
                     </p>
                  </div>
               </div>
               <!-- EXTENDED COPY -->
               <div class="description_box">
                  <p>
                     We help enterprise tech brands shape narratives that turn product depth, transformation impact, and innovation into stronger market authority.
                  </p>
               </div>
               <div class="mr_bottom_25"></div>
               <!-- ICON POINTS -->
               <div class="row gutter_15px">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/icon-img-n-1.png') }}" class="img-fluid svg_image" alt="icon">
                           </div>
                           <div class="txt_content">
                              <h3>
                                 <a href="#">Category Positioning & Market Relevance</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon">
                           </div>
                           <div class="txt_content">
                              <h3>
                                 <a href="#">Investor, Buyer & Partner Visibility</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mr_bottom_30"></div>
               <!-- CTA -->
               <div class="theme_btn_all color_one">
                  <a href="#contact" class="theme-btn five">
                  Book a Discovery Call <i class="icon-right-arrow"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_60"></div>
</section>
<!---about section end--->
<!----service---->
<section class="service-section bg_light_1">
   <div class="pd_top_80"></div>
   <div class="container">
      <!-- SECTION HEADER -->
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">What We Do</div>
                  <h2>Strategic Visibility That Builds Market Authority</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- SERVICE CARDS -->
      <div class="row">
         <div class="col-lg-12">
            <div class="service_section grid_all three_column news_wrapper_grid dark_color">
               <div class="grid_show_case grid_layout clearfix">
                  <!-- CARD 1 -->
                  <div class="grid_box _card">
                     <div class="service_post style_four">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page/wws/executive.webp') }}" class="img-fluid" alt="Executive Media Positioning">
                        </div>
                        <div class="content_in_box">
                           <div class="icon_box">
                              <span class="icon icon-thumbs-up icons"></span>
                           </div>
                           <span class="icon icon-thumbs-up bg_im"></span>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#">Executive Media Positioning</a>
                              </h2>
                              <p class="short_desc">
                                 Place your founder, CEO, CTO, or business head in high-value business and technology media to strengthen trust, category presence, and leadership authority.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- CARD 2 -->
                  <div class="grid_box _card">
                     <div class="service_post style_four">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page/wws/analyst.webp') }}" class="img-fluid" alt="Narrative Support">
                        </div>
                        <div class="content_in_box">
                           <div class="icon_box">
                              <span class="icon icon-thumbs-up icons"></span>
                           </div>
                           <span class="icon icon-thumbs-up bg_im"></span>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#">Analyst, Buyer & Investor Narrative Support</a>
                              </h2>
                              <p class="short_desc">
                                 Craft communication that helps enterprise buyers understand your value, helps investors see scale, and helps the market place your brand more clearly.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- CARD 3 -->
                  <div class="grid_box _card">
                     <div class="service_post style_four">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page/wws/thought.webp') }}" class="img-fluid" alt="Thought Leadership">
                        </div>
                        <div class="content_in_box">
                           <div class="icon_box">
                              <span class="icon icon-thumbs-up icons"></span>
                           </div>
                           <span class="icon icon-thumbs-up bg_im"></span>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#">Thought Leadership & Content Strategy</a>
                              </h2>
                              <p class="short_desc">
                                 Build long-form articles, LinkedIn authority, contributed pieces, and executive visibility content that position your team as trusted voices in enterprise transformation.
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
   <div class="pd_bottom_60"></div>
</section>
<section class="about-section">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row align-items-center">
         <!-- LEFT IMAGE -->
         <div class="col-xl-6 col-lg-12 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_six">
               <div class="image_box">
                  <img src="{{ asset('assets/frontend/img/page/wws/enterprise-expertise.webp') }}" 
                     class="img-fluid height_510px object-fit-cover" alt="enterprise tech">
                  <div class="video_inner type_six">
                     <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                     <i class="icon-play"></i>
                     </a>
                     <p>Play Video</p>
                  </div>
                  <div class="experience">
                     <div class="experience_inner">
                        <h2>Enterprise Expertise</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-12">
            <div class="title_all_box style_five dark_color">
               <div class="title_sections five">
                  <div class="before_title">Our Edge in Enterprise Tech</div>
                  <h2>We Speak the Language of Technology — and the Markets That Buy It</h2>
                  <div class="description_box">
                     <p>
                        Enterprise technology communication requires more than generic PR language. 
                        Buyers, analysts, investors, partners, and the media all look for different 
                        signals before they take a technology brand seriously.
                     </p>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_20"></div>
            <!-- ICON BLOCKS -->
            <div class="row gutter_15px">
               <div class="col-md-6">
                  <div class="icon_box_all style_six">
                     <div class="icon_content">
                        <div class="icon">
                           <span class="icon-line-chart"></span>
                        </div>
                        <div class="text_box">
                           <h2>
                              <a href="http://localhost/elevateonemedia/public/case-studies">
                              Trusted by Growth-Stage Brands
                              </a>
                           </h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="icon_box_all style_six">
                     <div class="icon_content">
                        <div class="icon">
                           <span class="icon-bow-and-arrow"></span>
                        </div>
                        <div class="text_box">
                           <h2>
                              <a href="{{ url('/media-coverage') }}">
                              Positioned Across Media
                              </a>
                           </h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_30"></div>
         </div>
      </div>
   </div>
</section>
<section class="contact-section  pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15">
   <div class="pd_top_80"></div>
   <div class="inner_section rounded_radius bg_op_1"
      style="background: url('{{ asset('assets/frontend/images/home-16-contact-bg.jpg') }}');">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="title_all_box style_one light_color">
                  <div class="title_sections">
                     <div class="before_title">Ready to Build Authority for Your Enterprise Tech Brand?</div>
                     <h2>Extensive experience across all industries.</h2>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="video_btn_all left">
                  <div class="video_box color_white">
                     <a href="https://www.youtube.com/71EZb94AS1k" class="lightbox-image"><i
                        class="icon-play"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 hidden-lg">
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
   </div>
</section>
<section class="contact-box-sections">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="funfacts">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="row gutter_25px">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="counter-block style_three count-box counted">
                        <div class="icon_box icon_yes ">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/img/icon1.svg') }}">
                           </div>
                        </div>
                        <div class="content_box">
                           <p>Successful media placements & award wins for CXOs across sectors.</p>
                           <h6>
                              <div class="coun_ter">
                                 <span class="count-text" data-speed="1500" data-stop="320">250</span>
                                 <small>+</small>
                              </div>
                              Projects Delivered
                           </h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="counter-block style_three count-box counted">
                        <div class="icon_box icon_yes ">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/img/icon2.svg') }}">
                           </div>
                        </div>
                        <div class="content_box">
                           <p>Strategic reputation campaigns uniquely tailored for India’s top CXOs & founders</p>
                           <h6>
                              <div class="coun_ter">
                                 <span class="count-text" data-speed="1500" data-stop="85">100</span>
                                 <small>+</small>
                              </div>
                              CXOs Impacted
                           </h6>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_25"></div>
               <!--===============spacing==============-->
               <div class="description_box">
                  <p>From emerging SaaS players to enterprise-facing technology brands, we help shape the narratives that make B2B leaders more visible, more credible, and more category-relevant </p>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="contact_form_box_all type_four mr_top_minus_320 mr_md_top_zero">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">
                        Reach Us
                     </div>
                     <h2>Send a message</h2>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="contact_form_box_inner simple_form">
                  <div class="contact_form_shortcode">
                     <form id="contact" class="wpcf7-form init">
                        <div class="row gutter_15px">
                           <div class="col-lg-6">
                              <label> Your name *<br>
                              <span class="wpcf7-form-control-wrap" data-name="your-name">
                              <input type="text" name="name" placeholder="Enter Your Name" required>
                              </span><br>
                              <i class="fa fa-user"></i><br>
                              </label>
                              <span class="name text-danger"></span>
                           </div>
                           <div class="col-lg-6">
                              <label> Phone Number *<br>
                              <span class="wpcf7-form-control-wrap" data-name="tel-922">
                              <input type="tel" name="phone" placeholder="Enter Your Number" required>
                              </span><br>
                              <i class="fa fa-phone"></i><br>
                              </label>
                              <span class="phone text-danger"></span>
                           </div>
                           <div class="col-lg-12">
                              <label class="w-100"> Your email *<br>
                              <span class="wpcf7-form-control-wrap" data-name="your-email">
                              <input type="email" name="email" placeholder="Enter Your Email" required>
                              </span><br>
                              <i class="fa fa-envelope"></i><br>
                              </label>
                              <span class="email text-danger"></span>
                           </div>
                           <div class="col-lg-12 text_area">
                              <label> Your message<br>
                              <span class="wpcf7-form-control-wrap" data-name="your-message">
                              <textarea name="message" cols="40" rows="10"
                                 placeholder="Enter Your Message"></textarea>
                              </span><br>
                              <i class="fa fa-comments"></i><br>
                              </label>
                           </div>
                           <div class="col-lg-12">
                              <button type="submit" class="w-100">Submit</button>
                              <span class="message text-danger"></span>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
               <div class="contact_box_content style_two">
                  <div class="contact_box_inner color_one">
                     <div class="text ">
                        <h3>General Enquiries</h3>
                        <hr>
                        <p>Phone: +91-8287938388
                           &nbsp;|&nbsp; Email: hello@elevateonemedia.com
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--===============spacing==============-->
   <!--===============spacing==============-->
</section>
<div class="pd_top_90"></div>
<!--===============spacing==============-->
<!---contact-client--->
<section class="contact-client-carousel-section">
   <div class="row">
      <div class="col-xxl-5 col-xl-5 col-lg-12 bg_op_1" style="background: url('{{ asset('assets/frontend/images/testimonialbg.jpg') }}');">
         <div class="videobtns text-center pd_right_100 pd_left_100 pd_top_100 pd_bottom_100">
            <!--===============spacing==============-->
            <div class="pd_top_10"></div>
            <!--===============spacing==============-->
            <div class="video_btn_all">
               <div class="video_box">
                  <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image color_white">
                  <i class="icon-play"></i>
                  </a>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_30"></div>
               <!--===============spacing==============-->
            </div>
            <h2 class="color_white">Turning Innovation into Industry Authority</h2>
            <!--===============spacing==============-->
            <!--===============spacing==============-->
         </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-12 bg_op_1"
         style="background-image: url('{{ asset('assets/frontend/images/home-12-testi.jpg') }}');">
         <!--===============spacing==============-->
         <div class="pd_top_90"></div>
         <!--===============spacing==============-->
         <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-9 col-md-12">
               <div class="client-brand-wrapper">
                  <div class="title_all_box style_one light_color">
                     <div class="title_sections left">
                        <h2>Trusted by Technology Leaders Building the Future of Business</h2>
                        <p>From enterprise software and SaaS platforms to innovation-led technology brands, our work is built for companies that need authority in high-trust B2B markets.</p>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <!-- <div class="pd_bottom_15"></div> -->
                  <!--===============spacing==============-->
                  <!-- <div class="client_logo_carousel type_two">
                     <div class="swiper-container" data-swiper='{
                        "autoplay": { "delay": 6000 },
                        "freeMode": true,
                        "loop": true,
                        "speed": 1000,
                        "centeredSlides": false,
                        "slidesPerView": 4,
                        "spaceBetween": 30,
                        "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                        },
                        "breakpoints": {
                        "1200": { "slidesPerView": 4 },
                        "1024": { "slidesPerView": 4 },
                        "768": { "slidesPerView": 4 },
                        "576": { "slidesPerView": 3 },
                        "250": { "slidesPerView": 2 },
                        "0": { "slidesPerView": 1 }
                        }
                        }'>
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="image text-start">
                                 <img src="{{ asset('assets/frontend/img/client/CREO.png') }}" alt="clients-logo" style="width: 160px!important;">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="image text-start">
                                 <img src="{{ asset('assets/frontend/img/client/CREO.png') }}" alt="clients-logo" style="width: 200px!important;">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="image text-start">
                                 <img src="{{ asset('assets/frontend/img/client/CREO.png') }}" alt="clients-logo" style="width: 137px!important;">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="image text-start">
                                 <img src="{{ asset('assets/frontend/img/client/CREO.png') }}" alt="clients-logo" style="width: 100px!important;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <!--===============spacing==============-->
                  <!-- <div class="pd_bottom_40"></div> -->
                  <!--===============spacing==============-->
               </div>
            </div>
            <div class="col-lg-2"></div>
         </div>
      </div>
   </div>
</section>
<!---contact-client-end--->
<section class="creote-service-box">
   <div class="pd_top_90"></div>
   <!-- SECTION HEADER -->
   <div class="title_all_box style_seven text-center dark_color">
      <div class="title_sections">
         <div class="before_title">Our Capabilities</div>
         <div class="title">Specialised Services for Technology & B2B Leaders</div>
         <div class="small_text_sub">
            Built to strengthen market positioning, leadership visibility, and long-term brand authority.
         </div>
      </div>
   </div>
   <div class="pd_bottom_50"></div>
   <div class="container">
      <div class="row">
         <!-- CARD 1 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/img/page/wws/bwws.webp') }}" alt="service">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon-line-chart"></span>
                  </div>
                  <h2 class="title_service"><a href="#">Product & Platform Storytelling</a></h2>
                  <p class="short_desc">
                     Translate complex technical capabilities into clear commercial relevance for enterprise buyers and stakeholders.
                  </p>
               </div>
            </div>
         </div>
         <!-- CARD 2 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/img/page/wws/fwws.webp') }}" alt="service">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon-user"></span>
                  </div>
                  <h2 class="title_service"><a href="#">Founder & CXO Authority Building</a></h2>
                  <p class="short_desc">
                     Position leadership teams as trusted voices across digital transformation, SaaS growth, AI adoption, and enterprise innovation.
                  </p>
               </div>
            </div>
         </div>
         <!-- CARD 3 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/img/page/wws/lwws.webp') }}" alt="service">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon-share"></span>
                  </div>
                  <h2 class="title_service"><a href="#">LinkedIn Authority for Technology Leaders</a></h2>
                  <p class="short_desc">
                     Build a strong digital presence for founders, CEOs, CTOs, and category experts within the B2B ecosystem.
                  </p>
               </div>
            </div>
         </div>
         <!-- CARD 4 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/img/page/wws/swws.webp') }}" alt="service">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon-megaphone"></span>
                  </div>
                  <h2 class="title_service"><a href="#">Speaking Engagements & Industry Visibility</a></h2>
                  <p class="short_desc">
                     Secure presence for enterprise leaders across tech conferences, business forums, and ecosystem events.
                  </p>
               </div>
            </div>
         </div>
         <!-- CARD 5 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/img/page/wws/cwws.webp') }}" alt="service">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon-mic"></span>
                  </div>
                  <h2 class="title_service"><a href="#">Podcast & Audio IP for Tech Leaders</a></h2>
                  <p class="short_desc">
                     Create voice-led thought leadership formats for founders and operators shaping technology categories.
                  </p>
               </div>
            </div>
         </div>
         <!-- CARD 6 -->
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="service_post style_one">
               <div class="image">
                  <div class="overlay"></div>
                  <img src="{{ asset('assets/frontend/img/page/wws/rwws.webp') }}" alt="service">
               </div>
               <div class="service_content icon_yes">
                  <div class="icon_box">
                     <span class="icon-shield"></span>
                  </div>
                  <h2 class="title_service"><a href="#">Reputation & Crisis Preparedness</a></h2>
                  <p class="short_desc">
                     Strengthen narrative control during product issues, market scrutiny, leadership visibility spikes, and critical moments.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>
<!--===============spacing==============-->
<section class="call-to-action mr_bottom_minus_140">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="call_to_action style_two">
               <!-- BACKGROUND IMAGE -->
               <div class="image">
                  <img src="{{ asset('assets/frontend/images/call-to-pric-bg-1.jpg') }}" 
                     class="img-fluid" alt="cta background">
               </div>
               <div class="auto-container">
                  <div class="row align-items-center">
                     <!-- LEFT CONTENT -->
                     <div class="col-lg-8">
                        <div class="left_content">
                           <div class="main_content">
                              <h1>
                                 Is Your Technology Brand Visible Where Enterprise Trust Is Built?
                              </h1>
                              <!-- CTA BUTTON -->
                              <div class="theme_btn_all color_one">
                                 <a href="{{ url('/contact') }}" class="theme-btn five">
                                 Book Your 30-Minute Discovery Call
                                 <i class="icon-right-arrow"></i>
                                 </a>
                              </div>
                              <!-- CONTACT INFO -->
                              <div class="bottom_content mt-4">
                                 <div class="call_content">
                                    <span class="icon-phone-call1 icon"></span>
                                    <div class="content_bx">
                                       <p>
                                          Email: hello@elevateonemedia.com <br>
                                          Phone: +91-8287938388
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- RIGHT IMAGE -->
                     <div class="col-lg-4">
                        <div class="image_right text-center">
                           <img src="{{ asset('assets/frontend/images/cal-img.png') }}" 
                              alt="cta image" class="img-fluid">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="service-section bg_light_1">
   <div class="pd_top_230"></div>
   <div class="container">
      <!-- SECTION HEADER -->
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Next Steps</div>
                  <h2>Explore, Engage, or Get Started</h2>
               </div>
               <div class="pd_bottom_30"></div>
            </div>
         </div>
      </div>
      <!-- CARDS -->
      <div class="row">
         <!-- CARD 1 -->
         <div class="col-lg-4">
            <div class="service_box style_four dark_color">
               <div class="service_content">
                  <a href="{{ url('/case-studies') }}">
                     <div class="image_box">
                        <img src="{{ asset('assets/frontend/img/page/wws/ns1.webp') }}" 
                           class="img-fluid" alt="Case Studies">
                        <span class="icon-line-chart"></span>
                     </div>
                  </a>
                  <div class="content_inner">
                     <h2>
                        <a href="{{ url('/case-studies') }}">
                        See Our Technology Work
                        </a>
                     </h2>
                     <p>Case Studies</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- CARD 2 -->
         <div class="col-lg-4">
            <div class="service_box style_four dark_color">
               <div class="service_content">
                  <a href="{{ url('/contact') }}">
                     <div class="image_box">
                        <img src="{{ asset('assets/frontend/img/page/wws/ns2.webp') }}" 
                           class="img-fluid" alt="Book a Call">
                        <span class="icon-user"></span>
                     </div>
                  </a>
                  <div class="content_inner">
                     <h2>
                        <a href="{{ url('/project-enquiries') }}">
                        Talk to a Strategist
                        </a>
                     </h2>
                     <p>Book a Call</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- CARD 3 -->
         <div class="col-lg-4">
            <div class="service_box style_four dark_color">
               <div class="service_content">
                  <a href="{{ url('/services') }}">
                     <div class="image_box">
                        <img src="{{ asset('assets/frontend/img/page/wws/ns3.webp') }}" 
                           class="img-fluid" alt="Services">
                        <span class="icon-development"></span>
                     </div>
                  </a>
                  <div class="content_inner">
                     <h2>
                        <a href="{{ url('/what-we-do') }}">
                        Explore Our Services
                        </a>
                     </h2>
                     <p>What We Do</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_90"></div>
</section>
@include('frontend.layouts.common.sections.clients')

@endsection
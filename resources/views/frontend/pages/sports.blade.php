@extends('frontend.layouts.app')
@section('content')
<style type="text/css">
.area_of_expertise::before {
    background: linear-gradient(90deg, var(--primary-color-two) 40%, rgba(0, 0, 0, 0.09) 100%);
}
</style>
<section class="expertise">
   <div class="area_of_expertise">
      <div class="simpleParallax">
         <img id="expertise-image" src="{{ asset('assets/frontend/img/page2/s_banner.jpg') }}" class="cover-parallax" alt="Sports Ecosystem">
      </div>
      <div class="title_and_video">
         <div class="auto-container">
            <div class="row align-items-center">
               
               <!-- EMPTY COLUMN (BALANCE) -->

               <div class="col-lg-6">
                  <div class="title_all_box style_one">
                     <div class="title_sections">
                        
                        <!-- UPDATED CONTENT -->
                        <h2 id="expertise-title">
                           Building Visibility, Momentum, and Brand Authority for Sports Ecosystems
                        </h2>

                        <p id="expertise-desc">
                           Elevate One Media helps sports brands, teams, academies, leagues, athletes, and sports-business leaders build communication that creates relevance, strengthens credibility, and turns visibility into lasting influence.
                        </p>

                     </div>

                     <div class="theme_btn">
                        <a id="expertise-link" href="tel:+918287938388" class="theme-btn one">Book a Discovery Call</a>
                     </div>

                  </div>
               </div>
               <div class="col-lg-4"></div>
               <div class="col-lg-2"></div>

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
                  <img src="{{ asset('assets/frontend/img/page2/s_wws_1.jpg') }}" class="img-fluid" alt="Enterprise Tech">
               </div>
               <div class="image_box">
                  <div class="row">
                     <div class="col-lg-6 col-md-12 ps-0 pe-0 pe-lg-3 mb-4 mb-lg-0">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/img/page2/s_wws_2.jpg') }}" class="img-fluid one_img" alt="SaaS">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/img/page2/s_wws_3.jpg') }}" class="img-fluid one_img" alt="B2B Tech">
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
                       Who We Serve
                     </div>
                     <!-- HEADING -->
                     <h2>
In Sports, Attention Comes Fast                     </h2>
                     <!-- BODY -->
                     <p>
Sports is one of the most visible and emotionally charged categories in the market. But real value in this space is created when energy is matched by credibility, consistency, and narrative control. We help sports-led brands and personalities build communication that strengthens public relevance, sponsor confidence, media visibility, and long-term category presence                  </div>
</p></div>
              
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
                                 <a href="#">Athlete, Founder & Team Visibility</a>
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
                                 <a href="#">Sponsor-Friendly Narrative Building</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mr_bottom_30"></div>
               <!-- CTA -->
               <div class="theme_btn_all color_one">
                  <a href="tel:+918287938388" class="theme-btn five">
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
                  <h2>Strategic Visibility That Builds Sports Authority</h2>
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
                           <img src="{{ asset('assets/frontend/img/page2/eae_wwd_emp.webp') }}" 
                                class="img-fluid" alt="Athlete & Leadership Media Positioning">
                        </div>
                        <div class="content_in_box">
                           <div class="icon_box">
                              <span class="icon-user icons"></span>
                           </div>
                           <span class="icon-user bg_im"></span>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#">Athlete, Founder & Leadership Media Positioning</a>
                              </h2>
                              <p class="short_desc">
                                 Place athletes, team owners, founders, coaches, and sports-business leaders in the right media and thought-leadership environments to build authority.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- CARD 2 -->
                  <div class="grid_box _card">
                     <div class="service_post style_four">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page2/eae_wwd_abains.webp') }}" 
                                class="img-fluid" alt="Event & League Visibility">
                        </div>
                        <div class="content_in_box">
                           <div class="icon_box">
                              <span class="icon-megaphone icons"></span>
                           </div>
                           <span class="icon-megaphone bg_im"></span>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#">Event, League & Brand Visibility Strategy</a>
                              </h2>
                              <p class="short_desc">
                                 Craft communication that amplifies sporting moments, strengthens event visibility, and builds long-term narrative value around teams, properties, and partnerships.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- CARD 3 -->
                  <div class="grid_box _card">
                     <div class="service_post style_four">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/page2/eae_wwd_tlacs.webp') }}" 
                                class="img-fluid" alt="Sports Thought Leadership">
                        </div>
                        <div class="content_in_box">
                           <div class="icon_box">
                              <span class="icon-edit icons"></span>
                           </div>
                           <span class="icon-edit bg_im"></span>
                           <div class="content_box">
                              <h2 class="title_service">
                                 <a href="#">Thought Leadership & Content Strategy</a>
                              </h2>
                              <p class="short_desc">
                                 Build interviews, LinkedIn authority, profiles, articles, and voice-led storytelling that position sports leaders and brands with more clarity and credibility.
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
                  <img src="{{ asset('assets/frontend/img/page2/s_sce.jpg') }}" 
                     class="img-fluid height_510px object-fit-cover" alt="sports communication">

                  <div class="video_inner type_six">
                     <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                        <i class="icon-play"></i>
                     </a>
                     <p>Play Video</p>
                  </div>

                  <div class="experience">
                     <div class="experience_inner">
                        <h2>Sports Communication Expertise</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- RIGHT CONTENT -->
         <div class="col-xl-6 col-lg-12">
            <div class="title_all_box style_five dark_color">
               <div class="title_sections five">

                  <div class="before_title">Our Edge in Sports Communication</div>

                  <h2>
                     We Understand How to Turn Sporting Energy into Strategic Visibility
                  </h2>

                  <div class="description_box">
                     <p>
                        Sports communication cannot rely on excitement alone. It has to work across multiple audiences at once — fans, sponsors, partners, media, institutions, and the broader public. That means the story has to be emotionally strong, commercially relevant, and structurally well managed.
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
                           <span class="icon-activity"></span>
                        </div>
                        <div class="text_box">
                           <h2>
                              <a href="{{ url('/case-studies') }}">
                                 Built for High-Energy, Public-Facing Categories
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
                           <span class="icon-globe"></span>
                        </div>
                        <div class="text_box">
                           <h2>
                              <a href="{{ url('/media-coverage') }}">
                                 Positioned Across Sports, Lifestyle, Business, and Leadership Media
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
                     <div class="before_title">Ready to Build Stronger Visibility for Your Sports Brand or Personality?</div>
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
                  <p>Tell us about your sport, platform, event, visibility need, or branding challenge, and we will map the right communication strategy for your category.</p>
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
         <div class="title">Specialised Services for Sports Ecosystems</div>
         <div class="small_text_sub">
            Built to strengthen visibility, leadership presence, and long-term authority across sports, business, and media.
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
                     <span class="icon-user"></span>
                  </div>
                  <h2 class="title_service">
                     <a href="#">Personal Brand Strategy for Athletes & Sports Leaders</a>
                  </h2>
                  <p class="short_desc">
                     Build stronger public identity, authority, and long-term visibility beyond the immediate sporting moment.
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
                     <span class="icon-briefcase"></span>
                  </div>
                  <h2 class="title_service">
                     <a href="#">Founder, Team & Management Authority Building</a>
                  </h2>
                  <p class="short_desc">
                     Position sports founders, owners, league heads, and strategic operators as visible leaders within the ecosystem.
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
                  <h2 class="title_service">
                     <a href="#">LinkedIn Authority for Sports-Business Leaders</a>
                  </h2>
                  <p class="short_desc">
                     Strengthen digital presence for sports entrepreneurs, executives, and public-facing professionals.
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
                  <h2 class="title_service">
                     <a href="#">Speaking Engagements & Sports Industry Visibility</a>
                  </h2>
                  <p class="short_desc">
                     Secure stronger presence across sports summits, leadership forums, brand events, entrepreneurship panels, and media stages.
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
                  <h2 class="title_service">
                     <a href="#">Podcast & Audio IP for Sports Voices</a>
                  </h2>
                  <p class="short_desc">
                     Create voice-led storytelling for athletes, founders, team leaders, and sports experts who want deeper audience connection.
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
                     <span class="icon-star"></span>
                  </div>
                  <h2 class="title_service">
                     <a href="#">Awards, Recognition & Reputation Building</a>
                  </h2>
                  <p class="short_desc">
                     Support awards strategy, recognition positioning, and third-party validation for sports-led brands and personalities.
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
                                Is Your Sports Story Visible in a Way That Builds More Than Buzz?
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
See Our Sports Work                     </a>
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
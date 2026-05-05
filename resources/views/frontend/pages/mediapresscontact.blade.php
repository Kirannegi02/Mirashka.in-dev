
@extends('frontend.layouts.app')

  @section('content')

<div class="page_header_default style_one ">
   <div class="parallax_cover">
      <div class="simpleParallax"><img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax"></div>
   </div>
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     Media Press Contact
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="index.html">Home</a></li>
                     <li class="active">                     Media Press Contact
</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!----header----->


<section class="about_us_section" id="about">
   <div class="pd_top_100"></div>
   <div class="container pd_zero">
      <div class="row">
         <div class="col-xl-6 col-lg-12">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">
                  <div class="before_title">Media & Press</div>
                  <h2>Strategic Media Relations</h2>
                  <p>We build meaningful relationships with media outlets to amplify your brand's voice and secure impactful coverage.</p>
               </div>
            </div>
            <div class="pd_bottom_20"></div>
            <div class="process_box style_one dark_color">
               <div class="process_box_outer">
                  <div class="icon">
                     <span class="icon-line-chart"></span>
                     <div class="number">01</div>
                  </div>
                   <div class="content_box">
                      <h2>
                         <a href="#" target="_blank" rel="nofollow">Media Outreach</a>
                      </h2>
                      <p>Strategic placement of your stories in relevant publications and broadcast channels.</p>
                   </div>
               </div>
            </div>
            <div class="process_box style_one dark_color">
               <div class="process_box_outer">
                  <div class="icon">
                     <span class="icon-line-chart"></span>
                     <div class="number">02</div>
                  </div>
                   <div class="content_box">
                      <h2>
                         <a href="#" target="_blank" rel="nofollow">Press Release Distribution</a>
                      </h2>
                      <p>Wide distribution of your announcements to targeted media lists and news wires.</p>
                   </div>
               </div>
            </div>
            <div class="pd_bottom_30"></div>

         </div>
         <div class="col-xl-6 col-lg-12">
            <div class="service_wrapper">
               <div class="move_image_absolute">
                  <img src="{{ asset('assets/frontend/images/about/about-1-1.png') }}" class="class-fluid" alt="image" />
               </div>
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="service_box style_one dark_color">
                        <div class="service_content">
                           <div class="image">
                              <img src="{{ asset('assets/frontend/images/service-illu-1.png') }}" class="img-fluid" alt="Service Image" />
                           </div>
                           <div class="content_inner">
                            <h2>
                                  <a href="#">Media Training</a>
                               </h2>
                               <p>Expert coaching to help your spokespeople communicate effectively with journalists.</p>
                              <a href="#" class="read_more">Read more</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="pd_top_100"></div>
                     <div class="pd_top_100 d_md_none"></div>
                     <div class="service_box style_one dark_color last">
                        <div class="service_content">
                           <div class="image">
                              <img src="{{ asset('assets/frontend/images/service-illu-1.png') }}" class="img-fluid" alt="Service Image" />
                           </div>
                           <div class="content_inner">
                            <h2>
                                  <a href="#">Crisis Communications</a>
                               </h2>
                               <p>Rapid response strategies to protect and manage your brand reputation during critical moments.</p>
                              <a href="#" class="read_more">Read more</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>

     <section class="contact-section bg_op_1" style="background: url('{{ asset('assets/frontend/images/contact-bg-6.jpg') }}');">
         <!--===============spacing==============-->
         <div class="pd_top_80"></div>
         <!--===============spacing==============-->
            <div class="medium-container">
               <div class="row">
                  <div class="col-xl-6 col-lg-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                     <!--===============spacing==============-->
                     <div class="pd_top_30"></div>
                     <!--===============spacing==============-->
                     <div class="title_all_box style_five  dark_color">
                       <div class="title_sections five left">
                            <div class="before_title">The Steps of</div>
                            <h2>Our Process</h2>
                            <p>We follow a structured approach to ensure your media relations goals are met with precision and measurable results.</p>
                         </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
                     <div class="content_box_cn style_one">
                        <div class="txt_content">
                           <h3><a href="#" target="_blank" rel="nofollow">Understanding Your Goals</a></h3>
                            <p>We begin by deeply understanding your communication objectives and target audiences.</p>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
                     <div class="content_box_cn style_one">
                        <div class="txt_content">
                           <h3><a href="#" target="_blank" rel="nofollow">Crafting the Narrative</a></h3>
                            <p>We develop compelling stories and angles that resonate with your key media targets.</p>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
                     <div class="content_box_cn style_one">
                        <div class="txt_content">
                           <h3><a href="#" target="_blank" rel="nofollow">Building Relationships</a></h3>
                            <p>We leverage our media network to connect your story with the right journalists and editors.</p>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
                     <div class="content_box_cn style_one">
                        <div class="txt_content">
                           <h3><a href="#" target="_blank" rel="nofollow">Securing Coverage</a></h3>
                            <p>We work to secure placements and provide comprehensive coverage reports.</p>
                        </div>
                     </div>
                 
                  </div>
                  <div class="col-xl-6 col-lg-12">
                     <div class="contact_form_box_all type_two">
                        <div class="contact_form_box_inner">
                           <img src="{{ asset('assets/frontend/images/contact-man-1.png') }}" alt="image">
                           <div class="contact_form_shortcode">
                              <div class="heading">
                                 <h2>Request <span>Free Consultation</span></h2>
                              </div>
                              <div class="_form">
                                 <div role="form" class="wpcf7" id="wpcf7-f2367-p2076-o1" lang="en-US" dir="ltr">
                                    <form action="#" method="post"  class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                       
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <label> Your name<br>
                                                <span class="wpcf7-form-control-wrap" data-name="your-name"><input
                                                      type="text" name="your-name" value="" size="40"
                                                      class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                      aria-required="true" aria-invalid="false"
                                                      placeholder="Enter Your Name"></span><br>
                                                <i class="fa fa-user"></i><br>
                                             </label>
                                          </div>
                                          <div class="col-lg-6">
                                             <label> Your email<br>
                                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                      type="email" name="your-email" value="" size="40"
                                                      class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                      aria-required="true" aria-invalid="false"
                                                      placeholder="Enter Your Email"></span><br>
                                                <i class="fa fa-envelope"></i><br>
                                             </label>
                                          </div>
                                          <div class="col-lg-6">
                                             <label> Phone Number<br>
                                                <span class="wpcf7-form-control-wrap" data-name="tel-922"><input
                                                      type="tel" name="tel-922" value="" size="40"
                                                      class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                      aria-invalid="false" placeholder="Enter Your Number"></span><br>
                                                <i class="fa fa-phone"></i><br>
                                             </label>
                                          </div>
                                          <div class="col-lg-6">
                                             <label> Subject<br>
                                                <span class="wpcf7-form-control-wrap" data-name="your-subject"><input
                                                      type="text" name="your-subject" value="" size="40"
                                                      class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                      aria-required="true" aria-invalid="false"
                                                      placeholder="Enter Your Subject"></span><br>
                                                <i class="fa fa-folder"></i><br>
                                             </label>
                                          </div>
                                          <div class="col-lg-12 text_area">
                                             <label> Your message (optional)<br>
                                                <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea
                                                      name="your-message" cols="40" rows="10"
                                                      class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                      placeholder="Enter Your Message"></textarea></span><br>
                                                <i class="fa fa-comments"></i><br>
                                             </label>
                                          </div>
                                          <div class="col-lg-12">
                                             <input type="submit" value="Submit"  class="wpcf7-form-control has-spinner wpcf7-submit"> 
                                          </div>
                                       </div>
                                      
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_90"></div>
                        <!--===============spacing==============-->
                     </div>
                  </div>
               </div>
            </div>
      
         </section>
<section class="faqs-section">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">
                     FAQs
                  </div>
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
               <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax" alt="image">
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
               <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax" alt="image">
            </div>
            <div class="mr_bottom_25"></div>
            <div class="progress_bar">
               <h2>Media Reach <span>120+</span></h2>
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
                        <dt class="faq_header">
                           <span class="icon-play"></span> What services do you offer?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              We provide strategic PR, CXO positioning, award consulting, media training, and digital
                              presence solutions tailored to elevate your brand.
                           </p>
                        </dd>
                        <dt class="faq_header">
                           <span class="icon-play"></span> Do you work with startups or only large companies?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              We partner with growth-stage startups, SMEs, and large enterprises alike—focusing on
                              brands that want to build credible market influence.
                           </p>
                        </dd>
                        <dt class="faq_header">
                           <span class="icon-play"></span> How soon can I see results?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Timelines vary, but most clients start seeing media traction or digital visibility
                              improvements within the first 60–90 days of engagement.
                           </p>
                        </dd>
                        <dt class="faq_header">
                           <span class="icon-play"></span> Do you guarantee media coverage?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              While we cannot promise specific headlines, our team uses strong editorial networks and
                              insight-driven strategies to maximize coverage potential.
                           </p>
                        </dd>
                        <dt class="faq_header active">
                           <span class="icon-play"></span> How do I get started?
                        </dt>
                        <dd class="accordion-content hide" style="display: block;">
                           <p>
                              Simply reach out through our website contact form or schedule a discovery call with our
                              consultants to discuss your goals and next steps.
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

<section class="client_logo_carousel type_one pt-5 pb-5 bg_light_1" id="Clients">
   <div class="title_all_box style_seven text-center dark_color">
      <div class="title_sections">
         <div class="title">Our Clients</div>
         <div class="before_title">Our clients drive our growth, success, and shared milestones</div>
         <div class="small_text_sub">Together, We Build Success</div>
      </div>
      <div class="pd_bottom_40"></div>
   </div>

   <!-- First row: normal direction -->
   <div class="slider_row">
      <div class="swiper-container" data-swiper='{
      "loop": true,
      "autoplay": { "delay": 0, "disableOnInteraction": false },
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
        "0":    { "slidesPerView": 2 }
      }
    }'>
         <div class="swiper-wrapper">
            <!-- repeat your swiper-slides here -->
            <!-- example few items, copy rest -->
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/1.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/2.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/3.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/4.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/5.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/6.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/7.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/8.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/9.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/10.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/11.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/12.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/13.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/14.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/15.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/16.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/17.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/18.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/19.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/20.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/21.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>

            <!-- ... add all your other logos ... -->
         </div>
      </div>
   </div>

   <!-- Second row: reverse direction -->
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
        "0":    { "slidesPerView": 2 }
      }
    }'>
         <div class="swiper-wrapper">
            <!-- repeat same swiper-slides or different set -->
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/11.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/22.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/23.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/24.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/25.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/26.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/27.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/28.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/29.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/30.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/31.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/32.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/33.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/34.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/35.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/36.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/37.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/38.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/39.png') }}" alt="clients-logo-1" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/40.png') }}" alt="clients-logo-2" class="img-fluid" /></div>
            </div>
            <div class="swiper-slide">
               <div class="image"><img src="{{ asset('assets/frontend/img/client/41.png') }}" alt="clients-logo-3" class="img-fluid" /></div>
            </div>

            <!-- ... add all your other logos ... -->
         </div>
      </div>
   </div>
</section>


<section class="testimonial-section pd_left_100 pd_right_100" id="Impact">
   <div class="pd_top_85"></div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Proof of Impact</div>
                  <div class="title">Success Stories</div>
                  <div class="small_text_sub">Measurable Outcomes, Credible Wins</div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-11 m-auto">
            <div class="testimonial_sec dark_color style_two">
               <div class="swiper single_swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="testimonial_box">
                           <div class="authour_image">
                              <i class="icon-quote"></i>
                              <img src="{{ asset('assets/frontend/img/NEC.svg') }}" alt="Prashant Shrivastava">
                           </div>
                           <div class="comment">
                              “The team’s strategic guidance has strengthened NEC Group’s brand voice across India,
                              driving real business value.”
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial_box">
                           <div class="authour_image">
                              <i class="icon-quote"></i>
                              <img src="{{ asset('assets/frontend/img/Liv.svg') }}" alt="Jasmeet Singh">
                           </div>
                           <div class="comment">
                              “From media coverage to stakeholder engagement, their tailored approach positioned Liv
                              India Management as an industry leader.”
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial_box">
                           <div class="authour_image">
                              <i class="icon-quote"></i>
                              <img src="{{ asset('assets/frontend/img/colston-concepts.svg') }}" alt="Anil Ahuja">
                           </div>
                           <div class="comment">
                              “Their award strategy and brand storytelling helped Colston Concepts gain international
                              recognition.”
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial_box">
                           <div class="authour_image">
                              <i class="icon-quote"></i>
                              <img src="{{ asset('assets/frontend/img/IMT-Ghaziabad.svg') }}" alt="Dr. Atish Chattopadhyay">
                           </div>
                           <div class="comment">
                              “A data-driven and creative approach enhanced IMT Ghaziabad’s visibility among students
                              and academia.”
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
               <div class="swiper single_swiper_tab">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="auth_details">
                           <h2>Prashant Shrivastava</h2>
                           <span>MD, NEC Group India</span>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="auth_details">
                           <h2>Jasmeet Singh</h2>
                           <span>MD, Liv India Management Group</span>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="auth_details">
                           <h2>Anil Ahuja</h2>
                           <span>CEO, Colston Concepts</span>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="auth_details">
                           <h2>Dr. Atish Chattopadhyay</h2>
                           <span>Director, IMT Ghaziabad</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>




@endsection
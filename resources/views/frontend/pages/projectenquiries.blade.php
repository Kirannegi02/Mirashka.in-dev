
 @extends('frontend.layouts.app')

  @section('content')
<div class="page_header_default style_one ">
   <div class="parallax_cover">
      <div class="simpleParallax"><img src="{{ asset('assets/frontend/images/page-header-default.jpg') }}" alt="bg_image"
            class="cover-parallax"></div>
   </div>
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     Project Enquiry
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="index.html">Home</a></li>
                     <li class="active">Project Enquiry
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
                   <div class="before_title">Project Enquiry</div>
                   <h2>Transform Your Brand</h2>
                   <p>Share your project goals and let us help you build a powerful media presence.</p>
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
                         <a href="#" target="_blank" rel="nofollow">Strategic Consultation</a>
                      </h2>
                      <p>We analyze your brand and create a tailored media strategy.</p>
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
                         <a href="#" target="_blank" rel="nofollow">Media Execution</a>
                      </h2>
                      <p>We execute campaigns across targeted media channels.</p>
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
                                  <a href="#">PR Services</a>
                               </h2>
                               <p>Comprehensive public relations solutions to enhance your brand visibility and reputation.</p>
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
                                  <a href="#">Media Training</a>
                               </h2>
                               <p>Expert coaching to help your team communicate effectively with media and stakeholders.</p>
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

<section class="contact-section bg_light_1">
   <div class="pd_top_90"></div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
            <div class="contact_form_box_all type_one">
               <div class="contact_form_box_inner">
                  <div class="contact_form_shortcode">
                     <form id="project-enquiry-form" class="contactForm" method="post" action="{{ route('contact.submit') }}" role="form">
                        @csrf
                        <input type="hidden" name="lead_type" value="project_enquiry">
                        <div class="messages"></div>
                        <div class="controls">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Your Name<br /></label>
                                    <input type="text" name="name" placeholder="Your Name *" required="required"
                                       data-error="Enter Your Name">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Your Phone<br /></label>
                                    <input type="tel" name="phone" placeholder="Phone *" required="required"
                                       data-error="Enter Your Phone Number">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Your Email<br /></label>
                                    <input type="email" name="email" placeholder="Email *" required="required"
                                       data-error="Enter Your Email">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Project Name<br /></label>
                                    <input type="text" name="project_name" placeholder="Project Name *"
                                       required="required" data-error="Enter Project Name">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Project Details<br /></label>
                                    <textarea name="project_details" placeholder="Describe your project..." rows="4"
                                       required="required" data-error="Please, provide project details."></textarea>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group mg_top apbtn">
                                    <button class="theme_btn submitBtn" type="submit">Submit Enquiry</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 pd_left_30">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">
                  <div class="before_title">Project Enquiry</div>
                  <h2>Reach Our Expert Team</h2>
                  <p>Send us your project requirements using this form. For urgent enquiries, please use the contact
                     details below.</p>
               </div>
            </div>

            <div class="contact_box_content style_one">
               <div class="contact_box_inner icon_yes">
                  <div class="icon_bx">
                     <span class="icon-placeholder"></span>
                  </div>
                  <div class="contnet">
                     <h3>Office Address</h3>
                     <p>GT-43, First Floor, Sector 117 Noida (U.P.) -201301</p>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_15"></div>
            <div class="contact_box_content style_one">
               <div class="contact_box_inner icon_yes">
                  <div class="icon_bx">
                     <span class="icon-phone-call"></span>
                  </div>
                  <div class="contnet">
                     <h3>Contact Us</h3>
                     <p>Phone: +91 8796927200 & Email: info@mirashka.in</p>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_15"></div>
            <div class="contact_box_content style_one">
               <div class="contact_box_inner icon_yes">
                  <div class="icon_bx">
                     <span class="fa fa-clock-o"></span>
                  </div>
                  <div class="contnet">
                     <h3>Business Hours</h3>
                     <p>Mon–Fri: 9:30 am – 6:30 pm (Sat–Sun: Closed)</p>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_40"></div>
            <div class="social_media_v_one style_two">
               <ul>
                  <li>
                     <a href="#"><span class="fa fa-facebook"></span><small>facebook</small></a>
                  </li>
                  <li>
                     <a href="#"><span class="fa fa-twitter"></span><small>twitter</small></a>
                  </li>
                  <li>
                     <a href="#"><span class="fa fa-skype"></span><small>skype</small></a>
                  </li>
                  <li>
                     <a href="#"><span class="fa fa-instagram"></span><small>instagram</small></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_top_70"></div>
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
                              presence solutions tailored to strengthen your brand.
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


@include('frontend.layouts.common.sections.testimonials', [
    'sectionClass' => 'pd_left_100 pd_right_100',
    'useFluidContainer' => true,
])



  @endsection

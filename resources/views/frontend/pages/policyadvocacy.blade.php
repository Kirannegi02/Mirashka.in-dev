

 @extends('frontend.layouts.app')

  @section('content')


<section class="expertise">
  <div class="area_of_expertise">
    <div class="simpleParallax">
      <img id="expertise-image" src="{{ asset('assets/frontend/images/areaof-ecp-1.jpg') }}" class="cover-parallax" alt="image">
    </div>
    <div class="title_and_video">
      <div class="auto-container">
        <div class="row">
          <div class="col-lg-4">
            <div class="video_box text-center">
              <a id="expertise-video" href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                <i class="icon-play"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-6">
            <div class="title_all_box style_one text-end">
              <div class="title_sections">
                <h2 id="expertise-title">Create Meaningful Experiences for employees</h2>
                <p id="expertise-desc">Our power of choice is untrammelled and when nothing prevents our able to do what
                  we like best every pleasure is to be welcomed and occur that pleasures have to be repudiated.</p>
              </div>
              <div class="theme_btn">
                <a id="expertise-link" href="service-default.html" class="theme-btn one">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabs -->
    <div class="expertise">
      <div class="auto-container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
            <div class="step_number">
              <h1>01.</h1>
            </div>
            <h2 class="title">
              <a href="#" class="expertise-tab" data-index="0">Payroll Management</a>
            </h2>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
            <div class="step_number">
              <h1>02.</h1>
            </div>
            <h2 class="title">
              <a href="#" class="expertise-tab" data-index="1">Employee Compensation</a>
            </h2>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
            <div class="step_number">
              <h1>03.</h1>
            </div>
            <h2 class="title">
              <a href="#" class="expertise-tab" data-index="2">Benefits Management</a>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Data for each tab
  const expertiseData = [
    {
      img: "assets/images/areaof-ecp-1.jpg",
      title: "Create Meaningful Experiences for employees",
      desc: "Our power of choice is untrammelled and when nothing prevents our able to do what we like best...",
      link: "service-default.html",
      video: "https://www.youtube.com/embed/-VK0axfge4A"
    },
    {
      img: "assets/images/sliders/slider-1-1.jpg",
      title: "Enhance Employee Compensation Strategy",
      desc: "We help you design fair, competitive compensation structures tailored to your organization.",
      link: "service-compensation.html",
      video: "https://www.youtube.com/embed/EXAMPLE2"
    },
    {
      img: "assets/images/areaof-ecp-1.jpg",
      title: "Optimize Benefits Management",
      desc: "Streamline employee benefits, improve satisfaction and reduce administrative burden.",
      link: "service-benefits.html",
      video: "https://www.youtube.com/embed/EXAMPLE3"
    }
  ];

  // Add click event to tabs
  document.querySelectorAll(".expertise-tab").forEach(tab => {
    tab.addEventListener("click", function(e) {
      e.preventDefault();
      const index = this.getAttribute("data-index");
      const data = expertiseData[index];

      // Update content
      document.getElementById("expertise-image").src = data.img;
      document.getElementById("expertise-title").innerText = data.title;
      document.getElementById("expertise-desc").innerText = data.desc;
      document.getElementById("expertise-link").href = data.link;
      document.getElementById("expertise-video").href = data.video;

      // Optional: add fade effect
      const imgEl = document.getElementById("expertise-image");
      imgEl.style.opacity = 0;
      setTimeout(() => {
        imgEl.src = data.img;
        imgEl.style.opacity = 1;
      }, 200);
    });
  });
</script>

<style>
  /* Optional: smooth fade effect */
  #expertise-image {
    transition: opacity 0.4s ease-in-out;
  }
</style>

 <!---about section--->
<section class="about-section">
   <!--===============spacing==============-->
   <div class="pd_top_85"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_four">
               <div class="image_box one">
                  <img src="{{ asset('assets/frontend/images/about/about-11.jpg') }}" class="img-fluid" alt="about">
               </div>
               <div class="image_box">
                  <div class="row">
                     <div class="col-lg-6 col-md-12 ps-0 ps-lg-0 pe-0 pe-lg-3 pe-xl-3 mb-4 mb-lg-0 mb-xl-0">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/images/about/about-3.jpg') }}" class="img-fluid one_img" alt="about">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0 pe-lg-0 pe-xl-0">
                        <div class="imgs">
                           <img src="{{ asset('assets/frontend/images/about/about-4.jpg') }}" class="img-fluid one_img" alt="about">
                        </div>
                     </div>
                  </div>
               </div>
            
            </div>
         </div>
         <div class="col-xl-6 col-lg-12">
            <div class="pd_left_20">
               <!--===============spacing==============-->
               <div class="pd_top_25"></div>
               <!--===============spacing==============-->
                <div class="title_all_box style_three dark_color">
                   <div class="title_sections three left">
                      <div class="before_title">Our Expertise</div>
                      <h2>Strategic Policy Communication</h2>
                      <p>We help organizations navigate complex policy landscapes and communicate effectively with stakeholders and decision-makers.</p>
                   </div>
                </div>
              
               <div class="description_box">
                   <p>Our team combines deep industry knowledge with communication expertise to help you influence policy discussions and shape industry narratives.</p>
                </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_25"></div>
               <!--===============spacing==============-->
               <div class="row gutter_15px">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/icon-img-n-1.png') }}" class="img-fluid svg_image" alt="icon png">
                           </div>
                            <div class="txt_content">
                               <h3><a href="#" target="_blank" rel="nofollow">Stakeholder Engagement</a></h3>
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon png">
                           </div>
                            <div class="txt_content">
                               <h3><a href="#" target="_blank" rel="nofollow">Policy Research</a></h3>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_30"></div>
               <!--===============spacing==============-->
               <div class="theme_btn_all color_one">
                   <a href="#" target="_blank" rel="nofollow" class="theme-btn five">
                      Learn More<i class="icon-right-arrow"></i>
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
<!---about section end--->

 <!----service---->
<section class="service-section bg_light_1">
  <!--===============spacing==============-->
  <div class="pd_top_80"></div>
  <!--===============spacing==============-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title_all_box style_one text-center dark_color">
          <div class="title_sections">
            <div class="before_title">What We Offer</div>
            <h2>Policy Communication Services</h2>
            <p>Comprehensive solutions to help you influence policy, engage stakeholders, <br> and build thought leadership in your industry.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="service_section grid_all three_column news_wrapper_grid dark_color">
          <div class="grid_show_case grid_layout clearfix" style="position: relative; height: 538px;">
            
            <div class="grid_box _card">
              <div class="service_post style_four">
                <div class="image_box">
                  <img src="{{ asset('assets/frontend/images/service/service-image-6.jpg') }}" class="img-fluid" alt="img">
                </div>
                <div class="content_in_box">
                  <div class="icon_box">
                    <span class="icon icon-thumbs-up icons"></span>
                  </div>
                  <span class="icon icon-thumbs-up bg_im"></span>
                  <div class="content_box ">
                    <h2 class="title_service">
                      <a href="index.html/service/talent-management/" rel="bookmark">Policy Strategy</a>
                    </h2>
                    <p class="short_desc">We develop comprehensive policy communication strategies aligned with your organizational goals.</p>
                    <a class="read_more" href="index.html/service/talent-management/">
                      Read More<i class="icon-right-arrow-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="grid_box _card">
              <div class="service_post style_four">
                <div class="image_box">
                  <img src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}" class="img-fluid" alt="img">
                </div>
                <div class="content_in_box">
                  <div class="icon_box">
                    <span class="icon icon-thumbs-up icons"></span>
                  </div>
                  <span class="icon icon-thumbs-up bg_im"></span>
                  <div class="content_box ">
                    <h2 class="title_service">
                      <a href="index.html/service/health-care-benefits/" rel="bookmark">Stakeholder Relations</a>
                    </h2>
                    <p class="short_desc">Building and maintaining productive relationships with policymakers, media, and key influencers.</p>
                    <a class="read_more" href="index.html/service/health-care-benefits/">
                      Read More<i class="icon-right-arrow-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="grid_box _card">
              <div class="service_post style_four">
                <div class="image_box">
                  <img src="{{ asset('assets/frontend/images/service/service-image-4.jpg') }}" class="img-fluid" alt="img">
                </div>
                <div class="content_in_box">
                  <div class="icon_box">
                    <span class="icon icon-thumbs-up icons"></span>
                  </div>
                  <span class="icon icon-thumbs-up bg_im"></span>
                  <div class="content_box ">
                    <h2 class="title_service">
                      <a href="index.html/service/risk-management/" rel="bookmark">Thought Leadership</a>
                    </h2>
                    <p class="short_desc">Positioning your executives as industry experts through strategic speaking and publishing opportunities.</p>
                    <a class="read_more" href="index.html/service/risk-management/">
                      Read More<i class="icon-right-arrow-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===============spacing==============-->
  <div class="pd_bottom_60"></div>
  <!--===============spacing==============-->
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
                                            <div class="before_title">Just Watch Our Work Process</div>
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
                                        <p>We deliver measurable results through strategic communication initiatives that advance your policy objectives and build organizational credibility. </p>
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
                           <p>Phone: +91 8796927200
                              &nbsp;|&nbsp; Email: info@mirashka.in


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
        <div class="pd_top_80"></div>
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
        <h2 class="color_white">Building Industry Influence</h2>
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
                <h2>Shaping Industry Standards Through Strategic Communication</h2>
                <p>We help organizations build influential voices that shape industry dialogue and policy discussions.</p>
              </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_15"></div>
            <!--===============spacing==============-->
            <div class="client_logo_carousel type_two">
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
                      <img src="{{ asset('assets/frontend/images/CLIENT-logo-w.png') }}" alt="clients-logo" style="width: 160px!important;">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image text-start">
                      <img src="{{ asset('assets/frontend/images/CLIENT-logo-3-w.png') }}" alt="clients-logo" style="width: 200px!important;">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image text-start">
                      <img src="{{ asset('assets/frontend/images/CLIENT-logo-2-w.png') }}" alt="clients-logo" style="width: 137px!important;">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image text-start">
                      <img src="{{ asset('assets/frontend/images/CLIENT-logo-1-w.png') }}" alt="clients-logo" style="width: 100px!important;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_40"></div>
            <!--===============spacing==============-->
            <div class="row gutter_20px">
              <div class="col-lg-5 col-md-12">
                <div class="contact_box_content style_two">
                  <div class="contact_box_inner color_two">
                    <div class="icon_bx">
                      <span class="fa fa-whatsapp"></span>
                    </div>
                    <div class="text">
                      <h3>WhatsApp</h3>
                      <p>+91 8796927200</p>
                    </div>
                  </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
              </div>
              <div class="col-lg-5 col-md-12">
                <div class="contact_box_content style_two">
                  <div class="contact_box_inner color_two">
                    <div class="icon_bx">
                      <span class="fa fa-skype"></span>
                    </div>
                    <div class="text">
                      <h3>Video Meeting</h3>
                      <p>info@mirashka.in</p>
                    </div>
                  </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_60"></div>
      <!--===============spacing==============-->
    </div>
  </div>
</section>
<!---contact-client-end--->

<section class="creote-service-box">
            <div class="pd_top_90"></div>

  <div class="title_all_box style_seven text-center dark_color">
    <div class="title_sections">
      <div class="title">Our Services</div>
      <div class="before_title">Comprehensive Policy Communication Solutions</div>
      <div class="small_text_sub">From strategy to execution</div>
    </div>
    <div class="pd_bottom_40"></div>
  </div>
  <div class="container">
    <div class="row">
    
      <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="service_post style_one">
          <div class="image">
            <div class="overlay"></div>
            <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-6.jpg') }}" alt="img">
          </div>
          <div class="service_content icon_yes">
            <div class="icon_box">
              <span class="icon icon-thumbs-up icon"></span>
            </div>
            <h2 class="title_service"><a href="#" rel="bookmark">Government Relations</a></h2>
            <p class="short_desc">Strategic engagement with government bodies and regulatory authorities.</p>
            <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="service_post style_one">
          <div class="image">
            <div class="overlay"></div>
            <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}" alt="img">
          </div>
          <div class="service_content icon_yes">
            <div class="icon_box">
              <span class="icon icon-thumbs-up icon"></span>
            </div>
            <h2 class="title_service"><a href="#" rel="bookmark">Media Strategy</a></h2>
            <p class="short_desc">Building media narratives that support your policy positions and organizational goals.</p>
            <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="service_post style_one">
          <div class="image">
            <div class="overlay"></div>
            <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-4.jpg') }}" alt="img">
          </div>
          <div class="service_content icon_yes">
            <div class="icon_box">
              <span class="icon icon-thumbs-up icon"></span>
            </div>
            <h2 class="title_service"><a href="#" rel="bookmark">Industry Advocacy</a></h2>
            <p class="short_desc">Representing your interests in industry associations and policy forums.</p>
            <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="service_post style_one">
          <div class="image">
            <div class="overlay"></div>
            <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-3.png') }}" alt="img">
          </div>
          <div class="service_content icon_yes">
            <div class="icon_box">
              <span class="icon icon-thumbs-up icon"></span>
            </div>
            <h2 class="title_service"><a href="#" rel="bookmark">Crisis Communication</a></h2>
            <p class="short_desc">Rapid response strategies to protect your reputation during policy-related crises.</p>
            <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="service_post style_one">
          <div class="image">
            <div class="overlay"></div>
            <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-2.png') }}" alt="img">
          </div>
          <div class="service_content icon_yes">
            <div class="icon_box">
              <span class="icon icon-thumbs-up icon"></span>
            </div>
            <h2 class="title_service"><a href="#" rel="bookmark">Coalition Building</a></h2>
            <p class="short_desc">Forming strategic alliances to amplify your policy positions and influence.</p>
            <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="service_post style_one">
          <div class="image">
            <div class="overlay"></div>
            <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-1.png') }}" alt="img">
          </div>
          <div class="service_content icon_yes">
            <div class="icon_box">
              <span class="icon icon-thumbs-up icon"></span>
            </div>
            <h2 class="title_service"><a href="#" rel="bookmark">Research & Analysis</a></h2>
            <p class="short_desc">Data-driven insights to support your policy positions and advocacy strategies.</p>
            <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!--===============spacing==============-->
<div class="pd_top_80"></div>

    <!---faqs--->
<section class="call-to-action mr_bottom_minus_140">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="call_to_action style_two">
          <div class="image">
            <img src="{{ asset('assets/frontend/images/call-to-pric-bg-1.jpg') }}" class="img-fluid" alt="image">
          </div>
          <div class="auto-container">
            <div class="row">
              <div class="col-lg-8">
                <div class="left_content">
                  <div class="main_content">
                    <h1>Let's Shape Policy Together</h1>
                    <div class="bottom_content">
                      <div class="call_content">
                        <span class="icon-phone-call1 icon"></span>
                        <div class="content_bx">
                          <h2>Contact Us</h2>
                          <p>Email: info@mirashka.in &amp; Phone: +91 8796927200</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="image_right">
                  <img src="{{ asset('assets/frontend/images/cal-img.png') }}" alt="image">
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
  <!--===============spacing==============-->
  <div class="pd_top_230"></div>
  <!--===============spacing==============-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title_all_box style_one text-center dark_color">
           <div class="title_sections">
             <div class="before_title">Our Expertise</div>
             <h2>Additional Services</h2>
           </div>
          <!--===============spacing==============-->
          <div class="pd_bottom_25"></div>
          <!--===============spacing==============-->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="service_box style_four dark_color">
          <div class="service_content">
            <a href="#">
              <div class="image_box">
                <img src="{{ asset('assets/frontend/images/projects/project-6-img.jpg') }}" class="img-fluid" alt="Service Image">
                <span class=" icon-video-player"></span>
              </div>
            </a>
             <div class="content_inner">
               <h2><a href="#">Live Events</a></h2>
               <p>Policy forums</p>
             </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="service_box style_four dark_color">
          <div class="service_content">
            <a href="#">
              <div class="image_box">
                <img src="{{ asset('assets/frontend/images/about/about-12.jpg') }}" class="img-fluid" alt="Service Image">
                <span class=" icon-businessman-1"></span>
              </div>
            </a>
             <div class="content_inner">
               <h2><a href="#">Expert Consultation</a></h2>
               <p>Advisory services</p>
             </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="service_box style_four dark_color">
          <div class="service_content">
            <a href="#">
              <div class="image_box">
                <img src="{{ asset('assets/frontend/images/blog/blog-image-10.jpg') }}" class="img-fluid" alt="Service Image">
                <span class="icon-development"></span>
              </div>
            </a>
             <div class="content_inner">
               <h2><a href="#">Support & Growth</a></h2>
               <p>Ongoing guidance</p>
             </div>
          </div>
        </div>
      </div>   
      
    </div>
  </div>
  <!--===============spacing==============-->
  <div class="pd_bottom_90"></div>
  <!--===============spacing==============-->
</section>

            <section class="client-brand">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-3 mb-lg-0 mb-xl-0">
                        <div class="title_all_box style_one  dark_color">
                           <div class="title_sections left">
                              <div class="before_title">List of Our</div>
                              <h2>Business Partners</h2>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <p>Denounce with righteous indignation and dislike men who are beguiled and demoralized by the
                           charms of pleasure.</p>
                        <div class="theme_btn_all color_one">
                           <a href="#" target="_blank" rel="nofollow" class="theme-btn four">Contact Us <i
                                 class="icon-right-arrow"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
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
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_80"></div>
               <!--===============spacing==============-->
            </section>    
   

     @endsection
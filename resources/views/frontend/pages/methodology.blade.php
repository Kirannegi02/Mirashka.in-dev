   @extends('frontend.layouts.app')

  @section('content')
   <!----page header----->
<div class="page_header_default style_one ">
   <div class="parallax_cover">
      <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
   </div>
   <div class="page_header_content">
      . <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     Methodology                 </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="index.html">Home</a> </li>
                     <li class="active"> Methodology                   </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!----page header----->   
   
  <!--about-->
      <section class="about-section">
   <!--===============spacing==============-->
   <div class="pd_top_90"></div>
   <!--===============spacing==============-->
   <div class="auto-container">
      <div class="row">
         <div class="col-lg-10 m-auto">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Our Approach</div>
                  <div class="title">A Systematic Path to Brand Excellence</div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_40"></div>
               <!--===============spacing==============-->
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="image_boxes style_two">
               <img src="{{ asset('assets/frontend/images/shape-1.png') }}" class="background_image" alt="image">
               <div class="image one">
                  <img src="{{ asset('assets/frontend/img/page2/m_oa_1.webp') }}" class="img-fluid" alt="image">
               </div>
               <div class="image two">
                  <img src="{{ asset('assets/frontend/img/page2/m_oa_2.webp') }}" class="img-fluid" alt="image">
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 pd_left_60 md_pd_left_15">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">
                  <h5 class="title font_20">We follow a proven, data-driven methodology to build your brand's reputation and media presence.</h5>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_10"></div>
            <!--===============spacing==============-->
            <div class="description_box">
               <p>Our approach combines strategic planning with creative execution to deliver measurable results in brand visibility and reputation management.</p>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_15"></div>
            <!--===============spacing==============-->
            <div class="description_box">
               <p>Each step is carefully executed with attention to detail, ensuring your brand story resonates with the right audiences.</p>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_25"></div>
            <!--===============spacing==============-->
            <div class="row gutter_25px">
               <div class="col-lg-6">
                  <div class="icon_box_all style_two">
                     <div class="icon_content icon_imgs">
                        <div class="icon">
                           <img src="{{ asset('assets/frontend/images/icon-img-n-1.png') }}" class="img-fluid svg_image" alt="icon png">
                        </div>
                        <div class="txt_content">
                            <h3><a href="#">Expert Guidance</a></h3>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="icon_box_all style_two">
                     <div class="icon_content icon_imgs">
                        <div class="icon">
                           <img src="{{ asset('assets/frontend/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon png">
                        </div>
                        <div class="txt_content">
                            <h3><a href="#">Proven Results</a></h3>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_15"></div>
            <!--===============spacing==============-->
            <div class="theme_btn_all color_one">
               <a href="#" class="theme-btn one">Download</a>
            </div>
         </div>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_90"></div>
   <!--===============spacing==============-->
</section>

            <!--about end-->
   <!---our Methodology---->
   <section class="project-section bg_light_1" id="method">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Our Methodology</div>
                     <h2>From Discovery to Dominance</h2>
                  </div>
                  <!--===============spacing==============-->
                  <div class="mr_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
         <div class="row clearfix">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Discover.png') }}" alt="Discover" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Discover</a></h2>
                     <div class="meta_value">Uncover brand strengths & audience insights</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Diagnose.png') }}" alt="Diagnose" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Diagnose</a></h2>
                     <div class="meta_value">Pinpoint visibility gaps & growth challenges</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Strategise.png') }}" alt="Strategise" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Strategise</a></h2>
                     <div class="meta_value">Build precision PR & content gameplans</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Craft.png') }}" alt="Craft" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Craft</a></h2>
                     <div class="meta_value">Develop compelling narratives & media assets</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Engage.png') }}" alt="Engage" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Engage</a></h2>
                     <div class="meta_value">Activate earned & owned media, influencers</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Amplify.png') }}" alt="Amplify" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Amplify</a></h2>
                     <div class="meta_value">Expand reach via integrated campaigns</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Report.png') }}" alt="Report & Optimise" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Report & Optimise</a></h2>
                     <div class="meta_value">Measure impact, refine & enhance strategy</div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     <img src="{{ asset('assets/frontend/img/Sustain.png') }}" alt="Sustain & Scale" loading="lazy">
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">Sustain & Scale</a></h2>
                     <div class="meta_value">Drive long-term visibility & market leadership</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_60"></div>
      <!--===============spacing==============-->
   </section>
   <!---our Methodology end---->
      <!--Why CXOs Choose Us-->
   <section class="content-section">
      <!--===============spacing==============-->
      <div class="pd_top_50"></div>
      <!--===============spacing==============-->
      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 m-auto">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Why CXOs Choose Us</div>
                     <div class="title">Our Edge</div>
                     <div class="small_text_sub">Strategic Precision Meets Executive Partnership</div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_40"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">01</span>
                     <div class="text_box">
                        <h2><a href="#">CXO-level Engagement</a></h2>
                        <p>Direct senior leadership collaboration ensuring clarity, speed & trust.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/Owned.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">02</span>
                     <div class="text_box">
                        <h2><a href="#">Owned + Earned Integration</a></h2>
                        <p>Unified storytelling across platforms for stronger, consistent brand presence.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/Reputation-ip.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">03</span>
                     <div class="text_box">
                        <h2><a href="#">Reputation IP Development</a></h2>
                        <p>Creating proprietary thought leadership & unique brand assets to stand out.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/Insight-driven.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">04</span>
                     <div class="text_box">
                        <h2><a href="#">Insight-driven Strategy</a></h2>
                        <p>Research-led, data-informed communications strategies tailored to your business.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>


   
  @endsection
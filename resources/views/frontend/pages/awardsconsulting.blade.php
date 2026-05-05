  @extends('frontend.layouts.app')

  @section('content')

  <section class="banner-section bg_op_1" style="background-image: linear-gradient(45deg, #ffffff, transparent), url('{{ asset('assets/frontend/img/page/ac-banner.webp') }}');">
     <div class="pd_top_100"></div>
     <div class="auto-container">
        <div class="row align-items-center">
           <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">

                    <div class="before_title">Reputation Capital & Awards Positioning</div>

                    <h2 class="title_big">
                       Awards Consulting That Turns Credibility into Recognised Distinction
                    </h2>

                    <p>
                       We help founders, CXOs, brands, and organisations identify the right awards, shape compelling nominations, and build recognition strategies that strengthen reputation, authority, and market trust.
                    </p>

                 </div>
              </div>

              <div class="pd_bottom_20"></div>
              <div class="pd_bottom_30"></div>
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
                             <img src="{{ asset('assets/frontend/img/client/'.$i.'.png') }}" class="img-fluid" alt="client-logo">
                          </div>
                    </div>
                    @endfor
                 </div>
              </div>
           </div>

           <div class="pd_bottom_40"></div>
        </div>

        <div class="col-xl-1 hidden-lg"></div>

        <div class="col-xl-4 col-lg-6 col-md-12">
           <div class="contact_form_box_all type_five">
              <div class="contact_form_box_inner simple_form">
                 <div class="title_all_box style_one dark_color">
                    <div class="title_sections">
                       <div class="before_title">Start the Conversation</div>
                       <h6 class="font_24">Request a Recognition Strategy</h6>
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

     <div class="pd_bottom_100"></div>
  </section>



  <!---call to action--->
  <section class="call-to-action">
     <div class="call_to_action style_one">
        <div class="auto-container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="left_content">
                    <div class="main_content">
                       <div class="video_box">
                          <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                             <i class="icon-play"></i>
                          </a>
                       </div>

                       <h6 class="text-black">For CXOs | Founders | Corporates | High-Growth Brands</h6>

                       <h1 class="text-black">Recognition That Builds Reputation Capital</h1>

                       <p class="text-black">
                          In a crowded market, third-party recognition can play a critical role in shaping how a leader or brand is perceived. Awards help validate excellence, reinforce authority, and create high-trust moments that can influence customers, investors, partners, media, and internal stakeholders.

                          At Elevate One Media, our Awards Consulting service is designed to ensure that recognition is never left to chance. We help identify the most relevant awards, strengthen submission quality, sharpen storytelling, and align the recognition journey with broader reputation and visibility goals.
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
  <section class="service-section bg_light_1">
     <div class="pd_top_80"></div>
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="title_all_box style_one text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">Why Awards Positioning Matters</div>
                    <h2>Why Awards Have Become a Strategic Reputation Lever</h2>
                 </div>

                 <div class="mr_bottom_20"></div>
              </div>
           </div>
        </div>
        <div class="row gutter_30px">
           <div class="col-lg-12">
              <div class="service_section grid_all three_column news_wrapper_grid dark_color">
                 <div class="grid_show_case grid_layout clearfix">

                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/img/page/wapm1.webp') }}" alt="img">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Third-Party Validation Builds Trust</a></h2>
                             <p class="short_desc">
                                Awards provide an external signal that your leadership, innovation, or brand work stands above the ordinary.
                             </p>
                          </div>
                          <div class="icon_box">
                             <span class="icon icon-thumbs-up icons"></span>
                          </div>
                       </div>
                    </div>

                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/wapm2.webp') }}" alt="img" loading="lazy">
                             <div class="gradient-overlay"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="#" rel="bookmark">Recognition Sharpens Market Perception</a></h2>
                             <p class="short_desc">
                                The right award can strengthen how customers, investors, media, and industry peers view your business.
                             </p>
                          </div>
                          <div class="icon_box">
                             <span class="icon icon-thumbs-up icons"></span>
                          </div>
                       </div>
                    </div>

                    <div class="grid_box _card">
                       <div class="service_post style_five">
                          <div class="image_box">
                             <img width="500" height="500" src="{{ asset('assets/frontend/img/page/wapm3.webp') }}" alt="img" loading="lazy">
                             <div class="gradient"></div>
                          </div>
                          <div class="content_box">
                             <h2 class="title_service"><a href="" rel="bookmark">Award Wins Create Long-Term Assets</a></h2>
                             <p class="short_desc">
                                Recognition can be leveraged across websites, sales decks, employer branding, PR, and digital presence.
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
     <div class="pd_bottom_70"></div>
  </section>


  <section class="service_section " id="service">

     <div class="pd_top_80"></div>

     <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="title_all_box style_seven text-center dark_color">
                 <div class="title_sections">
                    <div class="title">What We Do</div>
                    <div class="before_title">What Our Awards Consulting Service Includes</div>
                    <div class="small_text_sub">Strategic identification and narrative crafting to turn leadership excellence into recognized distinction.</div>
                 </div>
                 <div class="pd_bottom_40"></div>
              </div>
           </div>

           <div class="pd_bottom_20"></div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/wwd1.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Awards Landscape Mapping</a></h2>
                          <p>We identify the rankings, recognitions, and forums most relevant to your sector and goals.</p>
                          <ul>
                             <li>Sector-specific mapping</li>
                             <li>Ranking relevance assessment</li>
                             <li>Positioning goal alignment</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Nomination Strategy</a></h2>
                       <p>We define which categories to pursue, how to sequence submissions, and how to maximize credibility and fit.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/wwd2.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Submission Narrative Development</a></h2>
                          <p>We craft evidence-led, compelling entries that communicate impact and distinction.</p>
                          <ul>
                             <li>Compelling storytelling</li>
                             <li>Evidence-led impact data</li>
                             <li>Distinction-focused drafting</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Founder & CXO Positioning</a></h2>
                       <p>We help leaders build recognition around entrepreneurship, innovation, leadership, and market impact.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/img/page/wapm2.webp') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Org recognition Strategy</a></h2>
                          <p>We position companies for awards related to growth, innovation, and workplace culture.</p>
                          <ul>
                             <li>Growth & Excellence framing</li>
                             <li>Culture & Transformation awards</li>
                             <li>Innovation positioning</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Post-Win Visibility Amplification</a></h2>
                       <p>We turn recognition into reputation value through PR, LinkedIn, and executive branding integration.</p>
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
                       <h2>From Recognition to Reputation Value</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       Awards consulting isn't just about winning—it's about building reputation capital that creates high-trust signals and differentiates your leadership in competitive markets.
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

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color mr_top_minus_160">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/bcf.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Build Credibility Faster</a></h2>
                             <p>Awards help create high-trust signals in competitive categories and stakeholder environments.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/sla.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Strengthen Leadership Authority</a></h2>
                             <p>Recognition can elevate founders and CXOs beyond simple visibility into industry-wide stature.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color mr_top_minus_160 mr_md_top_zero">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/dcm.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Differentiate in Crowded Markets</a></h2>
                             <p>Awards create professional distinction when many brands claim similar strengths in your industry.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/ssp.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Support Strategic Partnerships</a></h2>
                             <p>Recognised excellence improves trust in commercial conversations and strategic business development.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/cra.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Create Reputation Assets</a></h2>
                             <p>An award win strengthens multiple brand touchpoints long after the initial announcement ceremony.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="pd_bottom_30"></div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="service_box style_five dark_color">
                    <div class="service_content">
                       <div class="image_box">
                          <img src="{{ asset('assets/frontend/img/page/bmv.webp') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Build Market Validation</a></h2>
                             <p>Leverage third-party recognition to validate your innovation, excellence, and organizational transformation.</p>
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
  <section class="content-section">

     <div class="pd_top_50"></div>

     <div class="auto-container">
        <div class="row">
           <div class="col-lg-8 m-auto">
              <div class="title_all_box style_seven text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">Our Approach</div>
                    <div class="title">A Structured Path to Recognition That Matters</div>
                    <div class="small_text_sub">
                       A proven engagement path built to turn leadership excellence into measurable media impact and recognized distinction.
                    </div>
                 </div>
                 <div class="pd_bottom_40"></div>
              </div>
           </div>
        </div>

        <div class="row">

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/discover.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">01</span>
                    <div class="text_box">
                       <h2><a href="#">Discover</a></h2>
                       <p>We understand your leadership story, business achievements, market context, and recognition objectives.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/diagnose.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">02</span>
                    <div class="text_box">
                       <h2><a href="#">Diagnose</a></h2>
                       <p>We assess perception gaps, proof points, award readiness, and recognition opportunities.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/strategise.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">03</span>
                    <div class="text_box">
                       <h2><a href="#">Strategise</a></h2>
                       <p>We define the awards roadmap, category priorities, nomination sequencing, and positioning themes.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/craft.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">04</span>
                    <div class="text_box">
                       <h2><a href="#">Craft</a></h2>
                       <p>We build submission narratives, supporting evidence structures, and differentiation angles.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/engage.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">05</span>
                    <div class="text_box">
                       <h2><a href="#">Engage</a></h2>
                       <p>We prepare entries, coordinate timelines, and align the recognition process with quality and precision.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/amplify.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">06</span>
                    <div class="text_box">
                       <h2><a href="#">Amplify</a></h2>
                       <p>We leverage nominations and wins across PR, executive presence, digital channels, and brand storytelling.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/report.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">07</span>
                    <div class="text_box">
                       <h2><a href="#">Report & Optimise</a></h2>
                       <p>We review outcomes, improve future positioning, and strengthen the long-term recognition strategy.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/page/icon/sustain.png') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">08</span>
                    <div class="text_box">
                       <h2><a href="#">Sustain & Scale</a></h2>
                       <p>We ensure continuity in your presence, building long-term authority and sustained professional influence.</p>
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
                    <h2>Built for Leaders and Brands Ready for Credible Recognition</h2>
                    <p>
                       This service is ideal for founders, CXOs, and high-growth organisations that want to turn innovation and leadership stories into industry-wide distinction through strategic awards positioning.
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
                             <h2 class="title_service"><a href="#">Founders & Entrepreneurs</a></h2>
                             <p class="text-white">
                                Visionaries building market stature and seeking third-party validation for their leadership and growth journey.
                             </p>
                          </div>
                       </div>
                    </div>

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
                                <a href="#">CXOs & Senior Leaders</a>
                             </h2>
                             <p class="text-white">
                                Decision-makers seeking stronger external recognition and reputational weight within their industry ecosystem.
                             </p>
                          </div>
                       </div>
                    </div>

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
                             <h2 class="title_service"><a href="#">High-Growth Brands</a></h2>
                             <p class="text-white">
                                Scaling companies pursuing industry distinction to support market entry and competitive positioning.
                             </p>
                          </div>
                       </div>
                    </div>

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
                                <a href="#">Innovative Organisations</a>
                             </h2>
                             <p class="text-white">
                                Entities with strong transformation stories that need to be packaged into compelling, award-winning narratives.
                             </p>
                          </div>
                       </div>
                    </div>

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
                                <a href="#">Executive Leadership Teams</a>
                             </h2>
                             <p class="text-white">
                                Teams that want strategic awards to support broader reputation-building and employer branding goals.
                             </p>
                          </div>
                       </div>
                    </div>

                    <div class="swiper-slide">
                       <div class="service_carousel style_one">
                          <div class="image">
                             <div class="overlay"></div>
                             <img src="{{ asset('assets/frontend/img/authority.png') }}">
                          </div>
                          <div class="content">
                             <div class="icon_box">
                                <span><img src="{{ asset('assets/frontend/img/LinkedIn.svg') }}"></span>
                             </div>
                             <h2 class="title_service">
                                <a href="#">Market Entrants</a>
                             </h2>
                             <p class="text-white">
                                Organisations entering new territories that require instant credibility and trusted third-party validation.
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
                                <p class="color_white">Strategic awards consulting built for recognized distinction and reputation capital</p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-12 pd_left_35">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">
                    <div class="before_title">Why Choose Us</div>
                    <h2 class="title">Why Elevate One Media for Awards Consulting</h2>
                    <p>
                       We help leaders and organizations turn achievements into recognized distinction—focusing on strategic selection, narrative strength, and long-term reputation value rather than vanity recognitions.
                    </p>
                 </div>
              </div>

              <div class="list_item_box style_two">
                 <ul class="list-inline">

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Strategic, Not Opportunistic</strong> — We do not chase awards for vanity. We pursue recognitions that add real credibility to your leadership.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Leadership-Centric Positioning</strong> — We understand how founder and CXO recognition contributes to broader reputation building.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Narrative Strength</strong> — We know that strong submissions require more than achievements—they require sharp framing and evidence-led storytelling.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Amplification Beyond the Win</strong> — We ensure that recognition supports your PR, digital presence, and overall market standing.
                          </a>
                       </small>
                    </li>

                 </ul>
              </div>
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
                 <h2>Recognition Success Rate <span>100+</span></h2>
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

                          <dt class="faq_header active">
                             <span class="icon-play"></span> Do you guarantee award wins?
                          </dt>
                          <dd class="accordion-content hide" style="display: block;">
                             <p>
                                No credible consultant should. We improve the strategy, positioning, and quality of submissions to significantly strengthen your chances through evidence-led storytelling.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this only for large companies?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                No. Founders, growth-stage businesses, emerging brands, and established companies can all benefit from a strategic approach to industry recognition.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Do you help choose which awards to apply for?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Strategic selection is one of the most important parts of effective awards consulting, ensuring the recognition aligns with your long-term reputation goals.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Can awards support PR and digital visibility?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. A well-utilised recognition can strengthen media outreach, website trust, leadership branding, and LinkedIn authority across your professional ecosystem.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this useful for founders personally, or only for organisations?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Both. Awards can build immense credibility for individual leaders (entrepreneurship/innovation awards) as well as the organisations they represent (excellence/growth awards).
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



  @endsection
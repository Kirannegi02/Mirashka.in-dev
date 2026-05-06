  @extends('frontend.layouts.app')

  @section('content')
  <section class="banner-section bg_op_1" style="background-image: url('{{ asset('assets/frontend/images/sliders/banner-9.jpg') }}');">
     <div class="pd_top_100"></div>
     <div class="auto-container">
        <div class="row align-items-center">
           <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections">
                    <div class="before_title">Regional Impact Communication</div>

                    <h2 class="title_big">
                       Localised Media Strategy That Makes Your Brand Relevant Where It Matters Most
                    </h2>

                    <p>
                       We help brands, corporates, founders, and institutions build stronger regional visibility through market-specific media strategies that align messaging, culture, language, and local relevance with business objectives.
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
                       <h6 class="font_24">Request a Regional Media Strategy</h6>
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
                             <input type="text" name="your-subject" placeholder="Enter Target Regions (e.g. South India, Tier 2 Markets)">
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

                       <h1 class="text-black">Communication That Connects with Regional Reality</h1>

                       <p class="text-black">
                          A message that works in one market does not always work in another. Regional audiences respond to different priorities, media ecosystems, cultural cues, language patterns, and trust signals.

                          At Mirashka, we help brands move beyond one-size-fits-all communication and build market-sensitive visibility strategies tailored to local realities. Whether the goal is geographic expansion, regional reputation building, policy communication, city-led brand activation, or stronger relevance in a specific state or cluster, our approach ensures that visibility feels native, not imported.
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
                  <div class="before_title">Why Localised Media Strategy Matters</div>
                  <h2>Why Regional Relevance Is a Strategic Advantage</h2>
                  <p class="text-black">
                     A message that works in one market does not always work in another. Regional audiences respond to different priorities, cultural cues, and trust signals.
                  </p>
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
                           <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-6.jpg') }}" alt="img">
                           <div class="gradient"></div>
                        </div>
                        <div class="content_box">
                           <h2 class="title_service"><a href="#" rel="bookmark">Trust Is Often Built Locally</a></h2>
                           <p class="short_desc">
                              People respond more strongly to narratives that reflect their specific language, cultural context, and lived realities.
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
                           <img width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}" alt="img" loading="lazy">
                           <div class="gradient"></div>
                        </div>
                        <div class="content_box">
                           <h2 class="title_service"><a href="#" rel="bookmark">Strengthen Market Penetration</a></h2>
                           <p class="short_desc">
                              Market-specific strategies help brands become accepted in city, state, and region-specific clusters through local relevance.
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
                           <img width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-4.jpg') }}" alt="img" loading="lazy">
                           <div class="gradient"></div>
                        </div>
                        <div class="content_box">
                           <h2 class="title_service"><a href="" rel="bookmark">Communication Efficiency</a></h2>
                           <p class="short_desc">
                              Adapting to regional media landscapes and conversation triggers creates stronger resonance and better stakeholder response.
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
                    <div class="before_title">What Our Localised Media Strategy Service Includes</div>
                    <div class="small_text_sub">Strategic mapping and narrative adaptation to ensure your brand resonates across diverse regional markets.</div>
                 </div>
                 <div class="pd_bottom_40"></div>
              </div>
           </div>
        </div>

        <div class="row">

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/images/service/service-image-1.png') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Regional Media Mapping</a></h2>
                          <p>We identify the most relevant local, vernacular, and market-specific media platforms for your goals.</p>
                          <ul>
                             <li>Vernacular media identification</li>
                             <li>Regional influencer mapping</li>
                             <li>Market-specific platform audit</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Message Localisation Strategy</a></h2>
                       <p>We adapt core brand messaging to fit regional culture, language sensibility, and audience expectation.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two active_ser">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/images/service/service-image-2.png') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Regional Narrative Development</a></h2>
                          <p>We shape story angles that connect corporate narratives with local market realities.</p>
                          <ul>
                             <li>City-specific visibility plans</li>
                             <li>Geographic expansion support</li>
                             <li>Cultural context tailoring</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Multi-Market Coordination</a></h2>
                       <p>We help brands maintain a strong central narrative while allowing regional communication to remain authentic.</p>
                    </div>
                 </div>
              </div>
              <div class="mr_bottom_20"></div>
           </div>

           <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="service_box style_two dark_color">
                 <div class="service_content_two ">
                    <div class="content_inner" style="background-image: url('{{ asset('assets/frontend/images/service/service-image-3.png') }}');">
                       <div class="content_inner_in">
                          <div class="icon_image">
                             <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Service Image" />
                          </div>
                          <h2><a href="#">Stakeholder Communication</a></h2>
                          <p>We tailor communication for local customers, policymakers, and regional business communities.</p>
                          <ul>
                             <li>Local media relationship building</li>
                             <li>Ecosystem audience engagement</li>
                             <li>Vernacular PR coordination</li>
                          </ul>
                       </div>
                    </div>
                    <div class="ovarlay_link">
                       <a href="#"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="overlay_content">
                       <h2><a href="#">Vernacular Media Outreach</a></h2>
                       <p>Strategic placements across Hindi, South Indian, and other regional language publications to drive trust.</p>
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
  <section class="service-section">

     <div class="title-sec bg_dark_3 pd_top_100">
        <div class="container">
           <div class="row gutter_30px">
              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="title_all_box style_one light_color">
                    <div class="title_sections left">
                       <h2>From Broad Visibility to Market-Level Relevance</h2>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="description_box color_white text-md-end">
                    <p>
                       We help brands move beyond generic communication to build market-sensitive visibility strategies that ensure your message feels native and credible in every region.
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
                          <img src="{{ asset('assets/frontend/images/service/service-image-1.png') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Strengthen Regional Trust</a></h2>
                             <p>Build a brand presence that feels closer, more credible, and more relatable to local audiences.</p>
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
                          <img src="{{ asset('assets/frontend/images/service/service-image-3.png') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Support Market Entry</a></h2>
                             <p>Use communication to improve acceptance and brand recall in new cities, states, or regional clusters.</p>
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
                          <img src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Stakeholder Engagement</a></h2>
                             <p>Create stronger resonance with local communities, channel networks, and regional media ecosystems.</p>
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
                          <img src="{{ asset('assets/frontend/images/service/service-image-1.png') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-human-resources"></span>
                          <div class="text_box">
                             <h2><a href="#">Effective National Narratives</a></h2>
                             <p>Translate broader brand messaging into formats and cultural contexts that work better in specific geographies.</p>
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
                          <img src="{{ asset('assets/frontend/images/service/service-image-3.png') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-audit"></span>
                          <div class="text_box">
                             <h2><a href="#">Stronger On-Ground Recall</a></h2>
                             <p>Become known in the specific places where your commercial and reputational growth is actually happening.</p>
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
                          <img src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}" class="img-fluid">
                       </div>
                       <div class="content_inner">
                          <span class="icon-heartbeat"></span>
                          <div class="text_box">
                             <h2><a href="#">Localised Authority</a></h2>
                             <p>Establish your brand or leadership as a respected local voice that understands the nuances of the region.</p>
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



  <section class="about-section bg_light_1">

     <div class="pd_top_80"></div>

     <div class="container">
        <div class="row">

           <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
              <div class="title_all_box style_one dark_color">
                 <div class="title_sections left">
                    <div class="before_title">Outcomes</div>
                    <h2 class="title">What Strong Localised Media Strategy Can Deliver</h2>

                    <p>
                       Done well, localised media strategy does not fragment a brand. It strengthens it by making the same brand story more believable, relevant, and trusted across diverse markets.
                    </p>

                    <div class="list_item_box style_two style_list">
                       <ul class="list-inline">

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Stronger regional visibility and credibility
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Higher trust in target local markets
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Better alignment between brand message and audience context
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   Greater relevance across vernacular and regional media environments
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   More effective support for expansion and reputation-building
                                </a>
                             </small>
                          </li>

                          <li class="list_items pd_bottom_10">
                             <small class="d-flex align-items-center">
                                <span class="icon_bx"><i class="icon-checked"></i></span>
                                <a class="nav_link" href="#" rel="nofollow">
                                   A stronger bridge between national brand identity and local perception
                                </a>
                             </small>
                          </li>

                       </ul>
                    </div>
                 </div>
              </div>

              <div class="pd_bottom_10"></div>

              <div class="extra_content download_docs dark_color">
                 <div class="download_box_content">
                    <a href="#" download>
                       Download our Regional Impact Overview <i class="icon-download-symbol"></i>
                    </a>
                 </div>
              </div>
           </div>

           <div class="col-xl-6 col-lg-10 col-md-12">
              <div class="image_boxes style_five">
                 <div class="image_box one">
                    <img src="{{ asset('assets/frontend/images/about/about-11.jpg') }}" class="img-fluid" alt="img">
                 </div>
                 <div class="image_box two">
                    <img src="{{ asset('assets/frontend/images/about/about-2.jpg') }}" class="img-fluid two" alt="img">
                 </div>
              </div>
           </div>

        </div>
     </div>

     <div class="pd_bottom_80"></div>

  </section>


  <section class="content-section">

     <div class="pd_top_50"></div>

     <div class="auto-container">
        <div class="row">
           <div class="col-lg-8 m-auto">
              <div class="title_all_box style_seven text-center dark_color">
                 <div class="title_sections">
                    <div class="before_title">Our Approach</div>
                    <div class="title">A Structured Path to Regional Relevance</div>
                    <div class="small_text_sub">
                       Our methodology ensures your brand narrative remains consistent yet culturally resonant across diverse regional media ecosystems.
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
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">01</span>
                    <div class="text_box">
                       <h2><a href="#">Discover</a></h2>
                       <p>We understand the brand, the geography, the stakeholders, and the purpose behind the regional communication effort.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">02</span>
                    <div class="text_box">
                       <h2><a href="#">Diagnose</a></h2>
                       <p>We assess market realities, perception gaps, media landscapes, and local communication challenges.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">03</span>
                    <div class="text_box">
                       <h2><a href="#">Strategise</a></h2>
                       <p>We define the regional communication roadmap, priority markets, message adaptations, and platform mix.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">04</span>
                    <div class="text_box">
                       <h2><a href="#">Craft</a></h2>
                       <p>We build market-specific narratives, media angles, message frameworks, and supporting communication assets.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">05</span>
                    <div class="text_box">
                       <h2><a href="#">Engage</a></h2>
                       <p>We activate the strategy across selected local, regional, and vernacular media environments.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">06</span>
                    <div class="text_box">
                       <h2><a href="#">Amplify</a></h2>
                       <p>We extend regional visibility through digital channels, executive communication, and integrated storytelling.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">07</span>
                    <div class="text_box">
                       <h2><a href="#">Report & Optimise</a></h2>
                       <p>We measure market resonance, platform effectiveness, and communication pull-through to refine the next phase.</p>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="choose_box type_one">
                 <div class="image_box">
                    <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                 </div>
                 <div class="content_box">
                    <span class="step_no">08</span>
                    <div class="text_box">
                       <h2><a href="#">Sustain</a></h2>
                       <p>We provide ongoing advisory to maintain long-term regional stability and continued market relevance.</p>
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
                    <h2>Built for Brands That Need to Matter in Specific Markets</h2>
                    
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
                             <h2 class="title_service"><a href="#">Expanding Brands</a></h2>
                             <p class="text-white">
                                Businesses entering new regions or Tier-2 markets that require a "native" presence to drive acceptance and trust.
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
                                <a href="#">Founders & Promoters</a>
                             </h2>
                             <p class="text-white">
                                Leadership teams entering state-specific markets where personal credibility must align with local cultural cues.
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
                             <h2 class="title_service"><a href="#">Global Entrants</a></h2>
                             <p class="text-white">
                                International brands entering India needing to navigate the complex media landscape and diverse linguistic preferences.
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
                                <a href="#">Public Initiatives</a>
                             </h2>
                             <p class="text-white">
                                Programs and advocacy efforts that require geographic resonance to influence local policymakers and communities.
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
                                <a href="#">Multi-Market Groups</a>
                             </h2>
                             <p class="text-white">
                                Large organizations running multi-city communication efforts that must feel authentic at every local touchpoint.
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
                    <img src="{{ asset('assets/frontend/images/banner-four-bg.jpg') }}" class="img-fluid image_fit height_500px pd_right_30" alt="img">
                    <div class="row no-space">
                       <div class="col-lg-5"></div>
                       <div class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1" style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                          <div class="title_all_box style_one light_color">
                             <div class="title_sections left">
                                <div class="before_title color_white">Why Choose Us</div>
                                <p class="color_white">Strategic regional visibility built for local trust and long-term market influence</p>
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
                    <h2 class="title">Why Mirashka for Localised Media Strategy</h2>
                    <p>
                       We help brands and organizations turn regional visibility into local influence. Our approach moves beyond simple translation to ensure every market-specific strategy serves a deliberate reputation goal.
                    </p>
                 </div>
              </div>

              <div class="list_item_box style_two">
                 <ul class="list-inline">

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Strategy Before Translation</strong> — We do not merely adapt words. We adapt meaning, relevance, and trust signals for each specific market.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Region-Sensitive Positioning</strong> — We understand that local audiences respond to context, cultural cues, and community relevance, not just communication volume.
                          </a>
                       </small>
                    </li>

                    <li class="list_items mr_bottom_15">
                       <small class="d-flex align-items-start">
                          <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                          <a class="nav_link" href="#">
                             <strong>Unified Yet Flexible Narrative Design</strong> — We help you maintain a strong brand center while tailoring your expression to regional realities and vernacular sensibilities.
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
                 <h2>Regional Trust Factor <span>95%</span></h2>
                 <div class="bar">
                    <div class="bar-inner count-bar counted" data-percent="95%" style="width: 95%;"></div>
                 </div>
              </div>
           </div>

           <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
              <div class="simple_image_boxes height_360px parallax_cover">
                 <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax">
              </div>
              <div class="mr_bottom_25"></div>
              <div class="progress_bar">
                 <h2>Market Relevance <span>100%</span></h2>
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
                             <span class="icon-play"></span> Is localised media strategy only about vernacular media?
                          </dt>
                          <dd class="accordion-content hide" style="display: block;">
                             <p>
                                No. It includes vernacular, regional, city-specific, and locally influential communication ecosystems. We map the right platforms based on your specific regional objectives and audience behavior.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Will localisation dilute our core brand identity?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Not when done strategically. Our approach is to preserve your brand’s central values and narrative while adapting the expression and context to make it more trusted and relevant in each specific market.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Is this useful only for large brands?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                No. Growth-stage companies, institutions, public initiatives, and expanding businesses can benefit significantly. Localised strategy is often the key differentiator for brands trying to compete in diverse geographies.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Can this support market entry in India?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. It is especially valuable for brands entering new states, cities, or regional business ecosystems where understanding the local media landscape and cultural nuances is critical for successful adoption.
                             </p>
                          </dd>

                          <dt class="faq_header">
                             <span class="icon-play"></span> Does this align with PR and digital visibility?
                          </dt>
                          <dd class="accordion-content hide">
                             <p>
                                Yes. Localised media strategy works best when integrated with your broader communication and reputation efforts, ensuring that your regional wins amplify your overall brand authority.
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
  @include('frontend.layouts.common.sections.blogs')


  @endsection
@extends('frontend.layouts.app')


@section('content')  





                 <style type="text/css">
         .contact_form_box_all.type_four label i {
         top: 50px;
         right: 10px;
         }
         .title_all_box.style_one .title_sections .title, .title_all_box.style_one .title_sections h1, .title_all_box.style_one .title_sections h2, .title_all_box.style_one .title_sections h3, .title_all_box.style_one .title_sections h4, .title_all_box.style_one .title_sections h5, .title_all_box.style_one .title_sections h6, .title_all_box.style_two .title_sections .title, .title_all_box.style_two .title_sections h1, .title_all_box.style_two .title_sections h2, .title_all_box.style_two .title_sections h3, .title_all_box.style_two .title_sections h4, .title_all_box.style_two .title_sections h5, .title_all_box.style_two .title_sections h6 {
    font-size: 32px;
    line-height: 40px;
    
}
.textbg{
        background-color: #FFFFFF;
       padding: 10px 10px 10px 10px !important;
    border-radius: 10px 10px 10px 10px !important;
}
      </style>
      
      <div id="content" class="site-content ">
         <!--banner home-->
         <section class="banner-section bg_op_1 position-relative text-white" 
            style="background: url('{{ asset('assets/frontend/img/cxo-page/banner-1.webp') }}') center/cover no-repeat;">
            <!-- Dark Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>
            <div class="pd_top_100"></div>
            <div class="auto-container position-relative">
               <div class="row align-items-center">
                  <!-- LEFT CONTENT -->
                  <div class="col-xl-7 col-lg-6 col-md-12">
                     <div class="title_all_box style_one dark_color">
                        <div class="title_sections">
                           <!-- Headline -->
                           <h1 class="title_big text-white ">
                           Guaranteed Exposure                          </h1>
                           <!-- Sub-headline -->
                           <p class="gold textbg">
Elevate One Media makes growing your brand simple with assured visibility and effortless promotion.                           </p>
                           <hr class="border-light w-25 my-4 opacity-75">
                           <!-- Value Statement -->
                           <p class="mb-4">
Elevate One Media makes growing your brand effortless with assured visibility and seamless promotion. Connect with your audience, amplify your reach, and let your brand stand out — all without the hassle.     </p>
                           <div class="title_sections">
                           <div class="before_title text-white">MEDIA PARTNER</div>
              
                        </div>
                           <div class="slider_row">
               <div class="swiper-container swiper-initialized swiper-horizontal swiper-free-mode" data-swiper="{
      &quot;loop&quot;: true,
      &quot;autoplay&quot;: { &quot;delay&quot;: 0, &quot;reverseDirection&quot;: true, &quot;disableOnInteraction&quot;: false },
      &quot;speed&quot;: 3000,
      &quot;centeredSlides&quot;: false,
      &quot;slidesPerView&quot;: 6,
      &quot;spaceBetween&quot;: 20,
      &quot;freeMode&quot;: true,
      &quot;freeModeMomentum&quot;: false,
      &quot;breakpoints&quot;: {
        &quot;1200&quot;: { &quot;slidesPerView&quot;: 6 },
        &quot;1024&quot;: { &quot;slidesPerView&quot;: 5 },
        &quot;768&quot;:  { &quot;slidesPerView&quot;: 3 },
        &quot;576&quot;:  { &quot;slidesPerView&quot;: 3 },
        &quot;0&quot;:    { &quot;slidesPerView&quot;: 4 }
      }
    }">
                  <div class="swiper-wrapper" id="swiper-wrapper-f49778cbb10646285" aria-live="off" style="transition-duration: 3000ms; transform: translate3d(-560.833px, 0px, 0px);"><div class="swiper-slide" role="group" aria-label="8 / 21" data-swiper-slide-index="7" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/ap.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="9 / 21" data-swiper-slide-index="8" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/BBC.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="10 / 21" data-swiper-slide-index="9" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/business-insider.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="11 / 21" data-swiper-slide-index="10" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/forbes.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="12 / 21" data-swiper-slide-index="11" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/cio.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="13 / 21" data-swiper-slide-index="12" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/fortune.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide swiper-slide-next" role="group" aria-label="14 / 21" data-swiper-slide-index="13" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/gq.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="15 / 21" data-swiper-slide-index="14" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/ibt.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="16 / 21" data-swiper-slide-index="15" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/mashabl.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="17 / 21" data-swiper-slide-index="16" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/the-guardian.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="18 / 21" data-swiper-slide-index="17" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/usa-today.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="19 / 21" data-swiper-slide-index="18" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/gq.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="20 / 21" data-swiper-slide-index="19" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/tech-advisor.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div><div class="swiper-slide" role="group" aria-label="21 / 21" data-swiper-slide-index="20" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/forbes.svg') }}" alt="clients-logo-3" class="img-fluid textbg">
                        </div>
                     </div>
                     <!-- repeat same swiper-slides or different set -->
                     <div class="swiper-slide" role="group" aria-label="1 / 21" data-swiper-slide-index="0" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/variety.svg') }}" alt="clients-logo-1" class="img-fluid textbg">
                        </div>
                     </div>
                     <div class="swiper-slide" role="group" aria-label="2 / 21" data-swiper-slide-index="1" style="width: 92.1667px; margin-right: 20px;">
                        <div class="image"><img src="{{ asset('assets/frontend/img/wsj.svg') }}" alt="clients-logo-2" class="img-fluid textbg">
                        </div>
                     </div>
                  
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     

                     <!-- ... add all your other logos ... -->
                  </div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
                           <!-- CTA Buttons -->
                           <!--<ul class="animate_down list-unstyled d-flex flex-wrap gap-3 mt-4">-->
                           <!--   <li class="theme_btn_all">-->
                           <!--      <a href="#services" class="theme-btn one"-->
                           <!--         style="color:#fff; background-color:#f19c31; border-color:#f19c31;">-->
                           <!--      Start Your Visibility Journey-->
                           <!--      </a>-->
                           <!--   </li>-->
                           <!--   <li class="theme_btn_all">-->
                           <!--      <a href="#pricing" class="theme-btn one">-->
                           <!--      Explore CXO & Company Packages-->
                           <!--      </a>-->
                           <!--   </li>-->
                           <!--</ul>-->
                        </div>
                     </div>
                     <div class="pd_bottom_20"></div>
                     <!-- LOGO SLIDER (UNCHANGED) -->
                     <div class="slider_row">
                        <!-- KEEP your existing swiper code exactly as is -->
                        <!-- PASTED ORIGINAL SWIPER HERE -->
                        <!-- --------------------------------------- -->
                        <!-- SWIPER START -->
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
                              <!-- ⭐ KEEP ALL YOUR LOGO SLIDES SAME -->
                              <!-- (paste your swiper slides here exactly as in original) -->
                           </div>
                        </div>
                        <!-- SWIPER END -->
                        <!-- --------------------------------------- -->
                     </div>
                     <div class="pd_bottom_40"></div>
                  </div>
                  <!-- RIGHT SIDE FORM (UNCHANGED) -->
                  <div class="col-xl-1 hidden-lg"></div>
                <div class="col-xl-4 col-lg-6 col-md-12">
   <div class="contact_form_box_all type_five text-center">
      <div class="contact_form_box_inner simple_form">
         
         <div class="pd_bottom_10"></div>

         <img src="https://spynn.co/lovable-uploads/86563bf6-4bf8-4e57-9b3f-64a8e9fc98c6.png" class="img-fluid mb-3" alt="Brand Image">

         <div class="theme_btn_all color_one">
            <a href="#enquiry" class="theme-btn one">Start Now</a>
         </div>

      </div>
   </div>
</div>

               </div>
            </div>
            <div class="pd_bottom_100"></div>
            <!-- Scroll Icon -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
               <a href="#about" class="text-white">
               <i class="fa fa-angle-down fs-1 d-block"></i>
               </a>
            </div>
         </section>
     
     
     <section class="service_section " id="service">

   <!--===============spacing==============-->
   <div class="pd_top_80"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row">
         <div class="title_all_box style_seven text-center dark_color">
            <div class="title_sections">
               <div class="title">How We Get You Featured</div>
               <div class="before_title">Showcase your business through Forbes' premium features</div>
               <div class="small_text_sub">Expert positioning, enhanced credibility, global recognition</div>
            </div>
            <div class="pd_bottom_40"></div>
         </div>

         <!--===============spacing==============-->
         <div class="pd_bottom_20"></div>
         <!--===============spacing==============-->

         <!-- Editorial -->
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="service_box style_two dark_color">
               <div class="service_content_two">
                  <div class="content_inner" style="background-image:url({{ asset('assets/frontend/images/service/service-image-1.png') }});">
                     <div class="content_inner_in">
                        <div class="icon_image">
                           <img src="{{ asset('assets/frontend/images/010-job-search.png') }}" class="img-fluid" alt="Editorial" />
                        </div>
                        <h2>
                           <a href="#">Editorial Features</a>
                        </h2>
                        <p>Establish thought leadership with Forbes Q&A sessions. Address industry challenges, share insights, and position yourself as a global business expert.</p>
                        <ul>
                           <li>Thought leadership</li>
                           <li>Industry insights</li>
                           <li>Expert positioning</li>
                        </ul>
                     </div>
                  </div>
                  <div class="ovarlay_link">
                     <a href="#">
                        <i class="icon-right-arrow"></i>
                     </a>
                  </div>
                  <div class="overlay_content">
                     <h2>
                        <a href="#">Editorial Features</a>
                     </h2>
                     <p>Establish thought leadership with Forbes Q&A sessions. Address industry challenges, share insights, and position yourself as a global business expert.</p>
                  </div>
               </div>
            </div>
            <div class="mr_bottom_20"></div>
         </div>

         <!-- Interview -->
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="service_box style_two dark_color">
               <div class="service_content_two active_ser">
                  <div class="content_inner" style="background-image:url({{ asset('assets/frontend/images/service/service-image-2.png') }});">
                     <div class="content_inner_in">
                        <div class="icon_image">
                           <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Interview" />
                        </div>
                        <h2>
                           <a href="#">Exclusive Interviews</a>
                        </h2>
                        <p>Build credibility with Forbes interviews. Share your business insights, predictions, and success strategies with a prestigious audience worldwide.</p>
                        <ul>
                           <li>Business insights</li>
                           <li>Industry predictions</li>
                           <li>Success strategies</li>
                        </ul>
                     </div>
                  </div>
                  <div class="ovarlay_link">
                     <a href="#">
                        <i class="icon-right-arrow"></i>
                     </a>
                  </div>
                  <div class="overlay_content">
                     <h2>
                        <a href="#">Exclusive Interviews</a>
                     </h2>
                     <p>Build credibility with Forbes interviews. Share your business insights, predictions, and success strategies with a prestigious audience worldwide.</p>
                  </div>
               </div>
            </div>
            <div class="mr_bottom_20"></div>
         </div>

         <!-- Comparison -->
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="service_box style_two dark_color">
               <div class="service_content_two">
                  <div class="content_inner" style="background-image:url({{ asset('assets/frontend/images/service/service-image-3.png') }});">
                     <div class="content_inner_in">
                        <div class="icon_image">
                           <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Comparison" />
                        </div>
                        <h2>
                           <a href="#">Business Comparisons</a>
                        </h2>
                        <p>Showcase your competitive edge with Forbes comparison articles. Highlight your unique value and position yourself against industry leaders.</p>
                        <ul>
                           <li>Competitive analysis</li>
                           <li>Unique value proposition</li>
                           <li>Industry positioning</li>
                        </ul>
                     </div>
                  </div>
                  <div class="ovarlay_link">
                     <a href="#">
                        <i class="icon-right-arrow"></i>
                     </a>
                  </div>
                  <div class="overlay_content">
                     <h2>
                        <a href="#">Business Comparisons</a>
                     </h2>
                     <p>Showcase your competitive edge with Forbes comparison articles. Highlight your unique value and position yourself against industry leaders.</p>
                  </div>
               </div>
            </div>
            <div class="mr_bottom_20"></div>
         </div>

<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 order-xl-1">
   <div class="service_box style_two dark_color">
      <div class="service_content_two active_ser">
         <div class="content_inner" style="background-image:url({{ asset('assets/frontend/images/service/service-image-2.png') }});">
            <div class="content_inner_in">
               <div class="icon_image">
                  <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Interview" />
               </div>
               <h2><a href="#">Forbes Leadership Interviews</a></h2>
               <p>Share your journey, insights, and future vision through exclusive Forbes interviews read by global decision-makers.</p>
               <ul>
                  <li>Founder &amp; CEO interviews</li>
                  <li>Vision &amp; growth stories</li>
                  <li>Global audience reach</li>
               </ul>
            </div>
         </div>
         <div class="ovarlay_link"><a href="#"><i class="icon-right-arrow"></i></a></div>
         <div class="overlay_content">
            <h2><a href="#">Forbes Leadership Interviews</a></h2>
            <p>Share your journey, insights, and future vision through exclusive Forbes interviews read by global decision-makers.</p>
         </div>
      </div>
   </div>
</div>


<!-- Interview -->
<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
   <div class="service_box style_two dark_color">
      <div class="service_content_two active_ser">
         <div class="content_inner" style="background-image:url({{ asset('assets/frontend/images/service/service-image-2.png') }});">
            <div class="content_inner_in">
               <div class="icon_image">
                  <img src="{{ asset('assets/frontend/images/service-ico-1.png') }}" class="img-fluid" alt="Announcements" />
               </div>
               <h2>
                  <a href="#">Forbes Business Announcements</a>
               </h2>
               <p>Announce key business milestones through Forbes. From strategic partnerships to market expansions, share updates that build trust and market credibility.</p>
               <ul>
                  <li>Strategic partnerships</li>
                  <li>Funding &amp; growth milestones</li>
                  <li>Expansion announcements</li>
               </ul>
            </div>
         </div>
         <div class="ovarlay_link">
            <a href="#">
               <i class="icon-right-arrow"></i>
            </a>
         </div>
         <div class="overlay_content">
            <h2>
               <a href="#">Forbes Business Announcements</a>
            </h2>
            <p>Announce key business milestones through Forbes. From strategic partnerships to market expansions, share updates that build trust and market credibility.</p>
         </div>
      </div>
   </div>
   <div class="mr_bottom_20"></div>
</div>

<!-- Comparison / Market Demand -->
<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
   <div class="service_box style_two dark_color">
      <div class="service_content_two">
         <div class="content_inner" style="background-image:url({{ asset('assets/frontend/images/service/service-image-3.png') }});">
            <div class="content_inner_in">
               <div class="icon_image">
                  <img src="{{ asset('assets/frontend/images/service-ico-2.png') }}" class="img-fluid" alt="Market Demand" />
               </div>
               <h2>
                  <a href="#">Market Demand Positioning</a>
               </h2>
               <p>Position your brand as a market leader by showcasing demand, relevance, and competitive strength.</p>
               <ul>
                  <li>Market relevance proof</li>
                  <li>Competitive benchmarking</li>
                  <li>Trust &amp; demand signals</li>
               </ul>
            </div>
         </div>
         <div class="ovarlay_link">
            <a href="#">
               <i class="icon-right-arrow"></i>
            </a>
         </div>
         <div class="overlay_content">
            <h2>
               <a href="#">Market Demand Positioning</a>
            </h2>
            <p>Position your brand as a market leader by showcasing demand, relevance, and competitive strength.</p>
         </div>
      </div>
   </div>
   <div class="mr_bottom_20"></div>
</div>



      </div>
   </div>

   <div class="pd_bottom_70"></div>
</section>
<style>

#Clients .swiper-slide .image {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 110px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}

#Clients .swiper-slide img {
    max-width: 140px; 
    height: auto;
}
#Clients .slider_row {
    padding-left: 90px;
    padding-right: 90px;
}

#Clients .swiper-slide .image {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 120px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

#Clients .swiper-slide img {
    width: 100%;
    max-width: 140px;   
    object-fit: contain;
}

</style>

<section class="client_logo_carousel type_one pt-5 pb-5 bg_light_1" id="Clients">

    <div class="pd_top_80"></div>
  
    <div class="title_all_box style_one text-center dark_color">
        <div class="title_sections">
            <div class="before_title">Our  Guaranteed Publications</div>
            <div class="title">100% Guaranteed Features</div>

        <p>Be featured in prestigious global publications with our 100% guarantee. Elevate your story to the visibility it deserves.</p>

        </div>
        <div class="pd_bottom_20"></div>
    </div>

    <!-- First Row -->
    <div class="slider_row">
        <div class="swiper-container" data-swiper='{
            "loop": true,
            "autoplay": { "delay": 0, "disableOnInteraction": false },
            "speed": 3000,
            "slidesPerView": 5,
            "spaceBetween": 30,
            "freeMode": true,
            "breakpoints": {
                "1200": { "slidesPerView": 5 },
                "1024": { "slidesPerView": 4 },
                "768":  { "slidesPerView": 3 },
                "576":  { "slidesPerView": 2 },
                "0":    { "slidesPerView": 2 }
            }
        }'>

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/NEC.svg') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/callino.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Colston.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/CREO.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Dial-Desk.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/down-earth.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Eaton.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/eurocan.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/fll.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/FPA-India.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Handicap-International.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/ICAEW.png') }}"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="slider_row mt-4">
        <div class="swiper-container" data-swiper='{
            "loop": true,
            "autoplay": { "delay": 0, "reverseDirection": true, "disableOnInteraction": false },
            "speed": 3000,
            "slidesPerView": 5,
            "spaceBetween": 30,
            "freeMode": true,
            "breakpoints": {
                "1200": { "slidesPerView": 5 },
                "1024": { "slidesPerView": 4 },
                "768":  { "slidesPerView": 3 },
                "576":  { "slidesPerView": 2 },
                "0":    { "slidesPerView": 2 }
            }
        }'>

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Tribes-India.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/smartcities.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/SimplyMarry.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/RNW.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/religare.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Reliance-Retail.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/Novartis.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/NEC.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/love-matters.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/JCCD.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/IMT-Gzb.png') }}"></div>
                </div>

                <div class="swiper-slide">
                    <div class="image"><img src="{{ asset('assets/frontend/img/client/ICAEW.png') }}"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="pd_bottom_80"></div>

</section>
<section class="creote-service-box">
    <div class="pd_top_90"></div>

    <div class="title_all_box style_seven text-center dark_color">
        <div class="title_sections">
            <div class="title">Our Services</div>
            <div class="before_title">Powerful PR solutions designed to elevate your brand visibility.</div>
            <div class="small_text_sub">Strategy • Coverage • Growth</div>
        </div>
        <div class="pd_bottom_40"></div>
    </div>

    <div class="container">
        <div class="row">

            <!-- Guaranteed Media Placements -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                    <div class="image">
                        <div class="overlay"></div>
                        <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-6.jpg') }}" alt="Guaranteed Media Placements">
                    </div>
                    <div class="service_content icon_yes">
                        <div class="icon_box">
                            <span class="icon icon-thumbs-up icon"></span>
                        </div>
                        <h2 class="title_service"><a href="#" rel="bookmark">Guaranteed Media Placements</a></h2>
                        <p class="short_desc">We secure your story in top-tier publications through our trusted media network, ensuring maximum visibility.</p>
                        <a class="read_more" href="#">View Pricing<i class="icon-right-arrow-long"></i></a>
                    </div>
                </div>
            </div>

            <!-- Expert Story Development -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                    <div class="image">
                        <div class="overlay"></div>
                        <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-5.jpg') }}" alt="Expert Story Development">
                    </div>
                    <div class="service_content icon_yes">
                        <div class="icon_box">
                            <span class="icon icon-thumbs-up icon"></span>
                        </div>
                        <h2 class="title_service"><a href="#" rel="bookmark">Expert Story Development</a></h2>
                        <p class="short_desc">Our team crafts compelling narratives that journalists want to cover and audiences love to read.</p>
                        <a class="read_more" href="#">View Pricing<i class="icon-right-arrow-long"></i></a>
                    </div>
                </div>
            </div>

            <!-- Multi-Platform Distribution -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                    <div class="image">
                        <div class="overlay"></div>
                        <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-4.jpg') }}" alt="Multi-Platform Distribution">
                    </div>
                    <div class="service_content icon_yes">
                        <div class="icon_box">
                            <span class="icon icon-thumbs-up icon"></span>
                        </div>
                        <h2 class="title_service"><a href="#" rel="bookmark">Multi-Platform Distribution</a></h2>
                        <p class="short_desc">Your story reaches the right audience across print, digital, and broadcast media channels seamlessly.</p>
                        <a class="read_more" href="#">View Pricing<i class="icon-right-arrow-long"></i></a>
                    </div>
                </div>
            </div>

            <!-- Performance Analytics -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                    <div class="image">
                        <div class="overlay"></div>
                        <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-3.png') }}" alt="Performance Analytics">
                    </div>
                    <div class="service_content icon_yes">
                        <div class="icon_box">
                            <span class="icon icon-thumbs-up icon"></span>
                        </div>
                        <h2 class="title_service"><a href="#" rel="bookmark">Performance Analytics</a></h2>
                        <p class="short_desc">Track your media coverage impact with detailed analytics and engagement metrics to measure success.</p>
                        <a class="read_more" href="#">View Pricing<i class="icon-right-arrow-long"></i></a>
                    </div>
                </div>
            </div>

            <!-- Ongoing Media Relations -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                    <div class="image">
                        <div class="overlay"></div>
                        <img loading="lazy" width="500" height="500" src="{{ asset('assets/frontend/images/service/service-image-2.png') }}" alt="Ongoing Media Relations">
                    </div>
                    <div class="service_content icon_yes">
                        <div class="icon_box">
                            <span class="icon icon-thumbs-up icon"></span>
                        </div>
                        <h2 class="title_service"><a href="#" rel="bookmark">Ongoing Media Relations</a></h2>
                        <p class="short_desc">Build lasting relationships with key journalists and media outlets in your industry for continuous coverage.</p>
                        <a class="read_more" href="#">View Pricing<i class="icon-right-arrow-long"></i></a>
                    </div>
                </div>
            </div>

            <!-- View Pricing -->
           

        </div>
    </div>
</section>

    <section class="tab-section  bg_light_1" id="CXOPLANS">
            <div class="pd_top_80"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 " style="padding-bottom: 48px;">
                     <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                           <div class="before_title">Premium CXO Plans</div>
                           <h2>Engineered for Industry Leaders</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gutter_40px">
                  <div class="col-lg-12">
                     <div class="price_plan_with_tab price_tb_style_one">
                        <div class="row">
                           <!-- Package 1 -->
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                              <div class="price_plan_box style_one">
                                 <div class="inner_box">
                                    <div class="top">
                                       <h2> Visibility Starter</h2>
                                       <p>Perfect for leaders beginning their public presence.</p>
                                    </div>
                                    <div class="mid">
            <h4>$799</h4>
                                       <p>Entry-level executive visibility program.</p>
                                    </div>
                                    <div class="bottom">
                                       <ul>
                                          <li><span>Monthly press coverage</span><i class="fa fa-check"></i></li>
                                          <li><span>LinkedIn content support</span><i class="fa fa-check"></i></li>
                                          <li><span>Podcast shortlist & award entry</span><i class="fa fa-check"></i></li>
                                          <li><span>Profile review call</span><i class="fa fa-check"></i></li>
                                       </ul>
                                       <a href="https://calendly.com/elevateonemedia/30min" class="theme-btn two">Book Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Package 2 -->
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                              <div class="price_plan_box style_one tag_enables">
                                 <div class="tag">Most Popular</div>
                                 <div class="inner_box">
                                    <div class="top">
                                       <h2>Authority Builder</h2>
                                       <p>For leaders ready to scale influence & industry trust.</p>
                                    </div>
                                    <div class="mid">
            <h4>$999</h4>
                                       <p>Accelerated positioning & deeper media footprint.</p>
                                    </div>
                                    <div class="bottom">
                                       <ul>
                                          <li><span>2–3 media features monthly</span><i class="fa fa-check"></i></li>
                                          <li><span>SEO blog & expert LinkedIn rewrite</span><i class="fa fa-check"></i></li>
                                          <li><span>Podcast shortlists + awards</span><i class="fa fa-check"></i></li>
                                          <li><span>Quarterly strategy workshop</span><i class="fa fa-check"></i></li>
                                       </ul>
                                       <a href="https://calendly.com/elevateonemedia/30min" class="theme-btn two">Book Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Package 3 -->
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                              <div class="price_plan_box style_one">
                                 <div class="inner_box">
                                    <div class="top">
                                       <h2> Elite Signature</h2>
                                       <p>For leaders pursuing global recognition & keynote presence.</p>
                                    </div>
                                    <div class="mid">
            <h4>$1299</h4>
                                       <p>Full-spectrum personal brand & reputation ecosystem.</p>
                                    </div>
                                    <div class="bottom">
                                       <ul>
                                          <li><span>High-impact global media</span><i class="fa fa-check"></i></li>
                                          <li><span>LinkedIn upgrades + video branding</span><i class="fa fa-check"></i></li>
                                          <li><span>Podcast + keynote speaking outreach</span><i class="fa fa-check"></i></li>
                                          <li><span>Monthly performance report</span><i class="fa fa-check"></i></li>
                                       </ul>
                                       <a href="https://calendly.com/elevateonemedia/30min" class="theme-btn two">Book Now</a>
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
         
 <section class="contact-section  pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15">
    <div class="pd_top_80"></div>

                    <div class="inner_section rounded_radius bg_op_1"
                        style="background: url({{ asset('assets/frontend/images/home-16-contact-bg.jpg') }});">
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
                                        <p>In job gives you handcrafted options such as front admin reviews or email
                                            notifications. It also gives employer management for apps. </p>
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
 @include('frontend.layouts.common.mainform')
`

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
                                            <div class="pd_bottom_80"></div>

                    <!--===============spacing==============-->
                </section>

                               <!---Proof of Impact end---->
           
            <section class="testimonial-section px-3 px-md-5 bg_light_1" id="Impact">
  <div class="pt-5"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="title_all_box style_seven dark_color">
          <div class="title_sections">
            <div class="before_title">Proof of Impact</div>
            <div class="title">Success Stories</div>
            <div class="small_text_sub">Measurable Outcomes, Credible Wins</div>
          </div>
          <div class="pb-4"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-11 mx-auto">
        <div class="testimonial_sec dark_color style_two">

          <!-- Main Testimonials Swiper -->
          <div class="swiper single_swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial_box text-center">
                  <div class="authour_image mb-3">
                    <i class="icon-quote"></i>
                    <img src="{{ asset('assets/frontend/img/NEC.svg') }}" alt="Prashant Shrivastava" />
                  </div>
                  <div class="comment">
                    “The team’s strategic guidance has strengthened NEC Group’s brand voice across India, driving real business value.”
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial_box text-center">
                  <div class="authour_image mb-3">
                    <i class="icon-quote"></i>
                    <img src="{{ asset('assets/frontend/img/Liv.svg') }}" alt="Jasmeet Singh" />
                  </div>
                  <div class="comment">
                    “From media coverage to stakeholder engagement, their tailored approach positioned Liv India Management as an industry leader.”
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial_box text-center">
                  <div class="authour_image mb-3">
                    <i class="icon-quote"></i>
                    <img src="{{ asset('assets/frontend/img/colston-concepts.svg') }}" alt="Anil Ahuja" />
                  </div>
                  <div class="comment">
                    “Their award strategy and brand storytelling helped Colston Concepts gain international recognition.”
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial_box text-center">
                  <div class="authour_image mb-3">
                    <i class="icon-quote"></i>
                    <img src="{{ asset('assets/frontend/img/IMT-Ghaziabad.svg') }}" alt="Dr. Atish Chattopadhyay" />
                  </div>
                  <div class="comment">
                    “A data-driven and creative approach enhanced IMT Ghaziabad’s visibility among students and academia.”
                  </div>
                </div>
              </div>
            </div>

            <!-- Arrows for Desktop -->
            <div class="swiper-button-next d-none d-md-block"></div>
            <div class="swiper-button-prev d-none d-md-block"></div>
          </div>

          <!-- Author Info Swiper -->
          <div class="swiper single_swiper_tab mt-3">
            <div class="swiper-wrapper text-center">
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
  <div class="pb-5"></div>
  
</section>

<!-- Responsive Custom CSS -->
<style>
  @media (max-width: 768px)
    .testimonial_sec.style_two .testimonial_box .authour_image img {
    width: 100% !important;
    max-width: 80px;
    height: auto !important;
    object-fit: contain;
  }
  {
    .testimonial_box {
      padding: 20px;
    }

    .authour_image {
      width: 80px;
      margin: 0 auto;
    }

    .authour_image img {
      width: 100%;
      height: auto;
      object-fit: contain;
    }

    .comment {
      font-size: 15px;
      padding: 0 10px;
    }

    .auth_details h2 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .auth_details span {
      font-size: 14px;
      color: #666;
    }

    .swiper-button-next,
    .swiper-button-prev {
      display: none !important;
    }

    .single_swiper,
    .single_swiper_tab {
      padding: 0 10px;
    }
  }
</style>

    

<!--- faqs : Media Coverage ---> 
<section class="faqs-section ">
   <div class="pd_top_80"></div>
   <div class="container">

      <!-- HEADER -->
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">
                     Media Coverage FAQs
                  </div>
                  <div class="title">Guaranteed Visibility. Real Credibility.</div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>

      <div class="row">

         <!-- LEFT VISUAL BLOCK -->
         <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
            <div class="simple_image_boxes height_360px parallax_cover">
               <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax" alt="Media Coverage">
            </div>
            <div class="mr_bottom_25"></div>
            <div class="progress_bar">
               <h2>Placement Success <span>100%</span></h2>
               <div class="bar">
                  <div class="bar-inner count-bar counted" data-percent="100%" style="width: 100%;"></div>
               </div>
            </div>
         </div>

         <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
            <div class="simple_image_boxes height_360px parallax_cover">
               <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax" alt="Global Publications">
            </div>
            <div class="mr_bottom_25"></div>
            <div class="progress_bar">
               <h2>Global Publications <span>50+</span></h2>
               <div class="bar">
                  <div class="bar-inner count-bar counted" data-percent="100%" style="width: 100%;"></div>
               </div>
            </div>
         </div>

         <!-- FAQ SECTION -->
         <div class="col-xl-6 col-lg-12">
            <div class="faq_section type_one">
               <div class="block_faq">
                  <div class="accordion">
                     <dl>

                        <!-- FAQ 1 -->
                        <dt class="faq_header active">
                           <span class="icon-play"></span> What does “guaranteed media coverage” actually mean?
                        </dt>
                        <dd class="accordion-content hide" style="display:block;">
                           <p>
                              It means your brand will be featured in committed publications through our secured media network. Unlike traditional PR, we ensure confirmed placements—not uncertain pitches.
                           </p>
                        </dd>

                        <!-- FAQ 2 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Will the content be written by your team or us?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Our editorial team handles end-to-end content creation—from story development to final publishing—ensuring your narrative is compelling, credible, and media-ready.
                           </p>
                        </dd>

                        <!-- FAQ 3 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> How long does it take to get featured?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Timelines typically range between 7 to 21 days depending on the publication and format. We prioritise speed without compromising editorial quality.
                           </p>
                        </dd>

                        <!-- FAQ 4 -->
                        <dt class="faq_header">
                           <span class="icon-play"></span> Will these features actually help my brand grow?
                        </dt>
                        <dd class="accordion-content hide">
                           <p>
                              Yes—media coverage strengthens brand trust, improves online credibility, supports investor conversations, and enhances your overall market positioning when used strategically.
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
<!--- faqs end--->


@endsection
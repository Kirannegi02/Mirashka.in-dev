@extends('frontend.layouts.app')


@section('content')


<div class="page_header_default style_one">
   <div class="parallax_cover">
      <div class="simpleParallax"><img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax"></div>
   </div>
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     {{ $webinar->title }}
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="">Home</a></li>
                     <li class="active">{{ $webinar->title }}</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>



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
               <div class="pd_top_25"></div>


               <div class="title_all_box style_three dark_color">
                  <div class="title_sections three left">
                     <div class="before_title">Event Highlights</div>
                     <h2>Key Takeaways from This Webinar</h2>
                  </div>
               </div>


               <div class="description_box mt-5">
                  <p>
                     This session delivered valuable insights and practical strategies to help professionals
                     navigate communication challenges and strengthen their brand presence effectively.
                     It focused on real-world scenarios, highlighting how the right communication approach
                     can influence public perception and build long-term credibility.
                  </p>
               </div>
               <div class="description_box">
                  <p>
                     Participants also
                     gained a deeper understanding of handling critical situations, adapting to changing
                     media dynamics, and applying proven techniques to achieve consistent brand growth.
                  </p>
               </div>


               <div class="mr_bottom_30"></div>


               <div class="row gutter_20px">


                  <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/icon-img-n-1.png') }}" class="img-fluid svg_image" alt="icon">
                           </div>
                           <div class="txt_content">
                              <h3>
                                 <a href="#">Real-World Case Studies</a>
                              </h3>

                           </div>
                        </div>
                     </div>
                  </div>

                  {{-- Item 2 --}}
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                     <div class="icon_box_all style_two">
                        <div class="icon_content icon_imgs">
                           <div class="icon">
                              <img src="{{ asset('assets/frontend/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon">
                           </div>
                           <div class="txt_content">
                              <h3>
                                 <a href="#">Actionable PR Strategies</a>
                              </h3>

                           </div>
                        </div>
                     </div>
                  </div>

               </div>

               <div class="mr_bottom_30"></div>
            </div>
         </div>
      </div>
   </div>

   <div class="pd_bottom_60"></div>
</section>


<section class="about-section bg_light_1">
   <!--===============spacing==============-->
   <div class="pd_top_80"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">
                  <div class="before_title">About the Event</div>
                  <h2 class="title">{{ $webinar->title }}</h2>
                  <p>{{ $webinar->description }}</p>
               </div>

            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_10"></div>
            <!--===============spacing==============-->


         </div>
         <div class="col-xl-6 col-lg-10 col-md-12">

             <img src="{{ imageUrl($webinar->image) }}" class="img-fluid" alt="img">

         </div>

      </div>
   </div>
   </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_80"></div>
   <!--===============spacing==============-->
</section>




@endsection
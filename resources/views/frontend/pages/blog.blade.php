@extends('frontend.layouts.app')

@section('content')
<style>
   .pagination-area a {
      padding: 10px 15px;
      margin: 3px;
      border: 1px solid #ddd;
      text-decoration: none;
   }

   .pagination-area .btn-dark {
      background: #000;
      color: #fff;
   }
</style>
<div class="page_header_default style_one">
   <div class="parallax_cover">
      <div class="simpleParallax">
         <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax"></div>
   </div>
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     Blogs </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="{{ url('/') }}">Home</a></li>
                     <li class="active">Blog </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!----header----->
<!---blog--->
<section class="blog-section">
   <!--===============spacing==============-->
   <div class="pd_top_75"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row gutter_20px">
         <div class="col-lg-12">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Find Out Our</div>
                  <h2>Insights &amp; Intelligence</h2>
               </div>
               <div class="small_text_sub">Focused expertise where it matters most</div>

               <!--===============spacing==============-->
               <div class="pd_bottom_35"></div>
               <!--===============spacing==============-->
            </div>
         </div>
      </div>

      <div class="row gutter_30px">
         <div class="col-lg-12">
            <div class="blog_post_section three_column style_seven">
               <div class="grid_show_case grid_layout clearfix">

                  @if(!empty($posts))

                  @foreach($posts as $post)

                  @php
                  $image = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/images/default.jpg');
                  $imageAlt = $post['image_alt'] ?? strip_tags($post['title']['rendered'] ?? 'Blog post');
                  $author = $post['_embedded']['author'][0]['name'] ?? 'Mirashka';
                  @endphp

                  <div class="grid_box _card">
                     <div class="news_box style_seven">

                        <div class="image_box">
                           <img src="{{ $image }}" class="img-fluid" alt="{{ $imageAlt }}" loading="lazy">

                           <div class="date">
                              {{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}
                           </div>
                        </div>

                        <div class="content_box">

                           <ul>
                              <li>
                                 <a href="#">
                                    <span class="fa fa-user"></span> {{ $author }}
                                 </a>
                              </li>
                           </ul>

                           <h2 class="title">
                              <a href="{{ url('blog/'.$post['slug']) }}">
                                 {!! $post['title']['rendered'] !!}
                              </a>
                           </h2>

                           <p class="short_desc">
                              {{ \Illuminate\Support\Str::limit(strip_tags($post['excerpt']['rendered']),150) }}
                           </p>

                           <a href="{{ url('blog/'.$post['slug']) }}" class="read_more">
                              Read more <i class="icon-right-arrow-long"></i>
                           </a>

                        </div>

                     </div>
                  </div>

                  @endforeach

                  @else

                  <p>No posts found.</p>

                  @endif

               </div>
            </div>
         </div>
      </div>


   </div>
   <div class="row">
      <div class="col-lg-12">
         <nav aria-label="Page navigation example">
            <ul class="pagination text-center">

               {{-- Previous --}}
               @if($page > 1)
               <li class="prev_link">
                  <a href="{{ url('blog/page/'.($page-1)) }}">
                     <div class="nav-prev"><i class="fas fa-angle-left"></i></div>
                  </a>
               </li>
               @endif


               {{-- Page Numbers --}}
               @for($i = 1; $i <= $totalPages; $i++)
                  <li class="{{ $i == $page ? 'active' : '' }}">
                  <a href="{{ url('blog/page/'.$i) }}">{{ $i }}</a>
                  </li>
                  @endfor


                  {{-- Next --}}
                  @if($page < $totalPages)
                     <li class="next_link">
                     <a href="{{ url('blog/page/'.($page+1)) }}">
                        <div class="nav-next"><i class="fas fa-angle-right"></i></div>
                     </a>
                     </li>
                     @endif

            </ul>
         </nav>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_65"></div>
   <!--===============spacing==============-->
</section>
<!--- faqs --->
<section class="faqs-section bg_light_1">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">
                     FAQs
                  </div>
                  <div class="title">Frequently Asked Questions</div>
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
<!--- faqs end--->
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
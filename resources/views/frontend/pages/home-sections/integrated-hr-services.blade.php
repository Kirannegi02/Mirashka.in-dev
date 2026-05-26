@php
   $integrated = config('home-integrated-services', []);
   $services = $integrated['services'] ?? [];
@endphp
<style>
   .home-integrated-services {
      --his-mint: #7dcea8;
      position: relative;
      overflow: hidden;
      background: #030806;
      color: #fff;
   }
   .home-integrated-services__grid-bg {
      position: absolute;
      inset: 0;
      background-image:
         linear-gradient(rgba(125, 206, 168, 0.04) 1px, transparent 1px),
         linear-gradient(90deg, rgba(125, 206, 168, 0.04) 1px, transparent 1px);
      background-size: 48px 48px;
      mask-image: linear-gradient(180deg, #000 0%, transparent 95%);
      pointer-events: none;
   }
   .home-integrated-services__header-inner {
      padding-left: 15px;
      padding-right: 15px;
      position: relative;
      z-index: 1;
   }
   .home-integrated-services .title_all_box.style_one .before_title {
      color: var(--his-mint);
   }
   .home-integrated-services .title_all_box.style_one h2 {
      color: #fff;
   }
   .home-integrated-services__subheading {
      margin: 12px 0 0;
      max-width: 42rem;
      font-size: 1rem;
      line-height: 1.65;
      color: rgba(255, 255, 255, 0.68);
   }
   .home-integrated-services .service_caro_section,
   .home-integrated-services .row {
      position: relative;
      z-index: 1;
   }
   .home-integrated-services .p_pagination .swiper-pagination .swiper-pagination-bullet {
      border-color: rgba(125, 206, 168, 0.45);
      background: transparent;
      opacity: 1;
   }
   .home-integrated-services .p_pagination .swiper-pagination .swiper-pagination-bullet-active,
   .home-integrated-services .p_pagination .swiper-pagination .swiper-pagination-bullet:hover {
      background: var(--his-mint);
      border-color: var(--his-mint);
      width: 15px;
   }
   .home-integrated-services .p_pagination .swiper-pagination {
      padding-top: 36px;
   }
   .home-integrated-services__carousel-wrap {
      position: relative;
   }
   .home-integrated-services-swiper {
      overflow: hidden;
   }
   .home-integrated-services-swiper .swiper-slide {
      height: auto;
      box-sizing: border-box;
   }
   .service_carousel.style_one .content .icon_box span i {
      font-size: 30px;
      line-height: 70px;
   }
</style>
<section class="service-section home-integrated-services" id="services">
   <div class="home-integrated-services__grid-bg" aria-hidden="true"></div>
   <div class="pd_top_80"></div>
   <div class="row align-items-end home-integrated-services__header">
      <div class="col-xxl-1 hidden-xl"></div>
      <div class="col-xxl-10 col-xl-12">
         <div class="home-integrated-services__header-inner">
            <div class="row align-items-end">
               <div class="col-lg-8">
                  <div class="title_all_box style_one light_color">
                     <div class="title_sections">
                        <div class="before_title">{{ $integrated['label'] ?? 'What We Do' }}</div>
                        <h2>{{ $integrated['heading'] ?? 'Integrated HR & Workforce Services' }}</h2>
                        @if(!empty($integrated['subheading']))
                           <p class="home-integrated-services__subheading">{{ $integrated['subheading'] }}</p>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="theme_btn_all color_one text-md-end">
                     <a href="{{ route($integrated['cta_route'] ?? 'whatwedo') }}" class="theme-btn one">{{ $integrated['cta'] ?? 'Explore All Services' }}</a>
                     <div class="pd_bottom_30"></div>
                  </div>
               </div>
            </div>
            <div class="pd_bottom_20"></div>
         </div>
      </div>
      <div class="col-xxl-1 hidden-xl"></div>
   </div>
   <div class="row">
      <div class="col-xxl-1 hidden-xl"></div>
      <div class="col-xxl-10 col-xl-12">
         <div class="service_caro_section carousel style_one home-integrated-services__carousel-wrap">
            <div class="swiper-container home-integrated-services-swiper" data-swiper-manual="true">
               <div class="swiper-wrapper">
                  @foreach($services as $service)
                     @php
                        $href = !empty($service['route_params'])
                           ? route($service['route'], $service['route_params'])
                           : route($service['route']);
                     @endphp
                     <div class="swiper-slide">
                        <div class="service_carousel style_one">
                           <div class="image">
                              <div class="overlay"></div>
                              <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" width="279" height="400" loading="lazy">
                           </div>
                           <div class="content">
                              <div class="icon_box">
                                 <span><i class="{{ $service['icon'] }}" aria-hidden="true"></i></span>
                              </div>
                              <h2 class="title_service"><a href="{{ $href }}">{{ $service['title'] }}</a></h2>
                              <p class="text-white">{{ $service['subtitle'] }}</p>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
               <div class="p_pagination">
                  <div class="swiper-pagination home-integrated-services-pagination"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xxl-1 hidden-xl"></div>
   </div>
   <div class="pd_bottom_80"></div>
</section>

<script>
(function () {
   function initHomeIntegratedServicesSwiper() {
      var section = document.querySelector('.home-integrated-services');
      if (!section || typeof Swiper === 'undefined') return;

      var swiperEl = section.querySelector('.home-integrated-services-swiper');
      var paginationEl = section.querySelector('.home-integrated-services-pagination');
      if (!swiperEl || !paginationEl) return;

      if (swiperEl.swiper) {
         swiperEl.swiper.destroy(true, true);
      }

      var slideCount = swiperEl.querySelectorAll('.swiper-slide').length;
      if (slideCount < 1) return;

      new Swiper(swiperEl, {
         slidesPerView: 4,
         spaceBetween: 16,
         speed: 650,
         grabCursor: true,
         loop: false,
         watchOverflow: true,
         slidesPerGroup: 1,
         autoplay: slideCount > 4 ? {
            delay: 5500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
         } : false,
         pagination: {
            el: paginationEl,
            clickable: true,
            dynamicBullets: false,
         },
         breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 12 },
            576: { slidesPerView: 2, spaceBetween: 12 },
            992: { slidesPerView: 3, spaceBetween: 14 },
            1200: { slidesPerView: 4, spaceBetween: 16 },
         },
      });
   }

   if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initHomeIntegratedServicesSwiper);
   } else {
      initHomeIntegratedServicesSwiper();
   }
   window.addEventListener('load', initHomeIntegratedServicesSwiper);
})();
</script>

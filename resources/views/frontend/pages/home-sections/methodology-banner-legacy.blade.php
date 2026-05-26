@php $methodology = config('home-methodology', []); @endphp
{{-- Section 11 intro banner — original layout, content from config/home-methodology.php --}}
<section class="contact-section"
   style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.4)), url('{{ asset('assets/frontend/img/from-discovery-to-dominance.webp') }}') center center / cover no-repeat;">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections">
                  <div class="before_title text-white">{{ $methodology['label'] ?? 'Our Methodology' }}</div>
                  <h2 class="text-white">{{ $methodology['heading'] ?? 'From HR discovery to workforce excellence' }}</h2>
                  <p class="text-white">{{ $methodology['content'] ?? '' }}</p>
               </div>
               <div class="pd_bottom_20"></div>
            </div>
            <div class="video_btn_all left">
               <div class="video_box color_dark">
                  <a href="https://www.youtube.com/71EZb94AS1k" class="lightbox-image" aria-label="Play methodology overview"><i class="icon-play"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-6 hidden-lg"></div>
      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>

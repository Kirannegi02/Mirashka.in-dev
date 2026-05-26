@php $clients = config('home-bottom.clients', []); @endphp
<section class="client_logo_carousel type_one pt-5 pb-5" id="Clients">
   <div class="pd_top_80"></div>
   <div class="title_all_box style_one text-center dark_color">
      <div class="title_sections">
         <div class="before_title">{{ $clients['label'] ?? 'Our Clients' }}</div>
         <h2>{{ $clients['heading'] ?? 'Together, We Build Success' }}</h2>
         @if(!empty($clients['tagline']))
            <p class="home-clients__tagline">{{ $clients['tagline'] }}</p>
         @endif
      </div>
      <div class="pd_bottom_20"></div>
   </div>
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
            @for ($i = 1; $i <= ($clients['logo_count'] ?? 33); $i++)
               <div class="swiper-slide">
                  <div class="image">
                     <img src="{{ asset('assets/frontend/img/page/client/' . $i . '.jpg') }}" alt="client {{ $i }}" width="103" height="41" loading="lazy">
                  </div>
               </div>
            @endfor
         </div>
      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>
<style>
   .home-clients__tagline {
      max-width: 42rem;
      margin: 14px auto 0;
      font-size: 1rem;
      line-height: 1.65;
      color: #555;
      font-weight: 400;
   }
</style>

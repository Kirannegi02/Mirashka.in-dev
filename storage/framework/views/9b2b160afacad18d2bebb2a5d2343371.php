<section class="client_logo_carousel type_one pt-5 pb-5">
   <div class="title_all_box style_one text-center dark_color">
      <div class="title_sections">
         <div class="before_title">Our Clients</div>
         <h2>Together, We Build Success</h2>
         <div class="middle"></div>
         <p class="home-clients__tagline">Trusted by founders, business owners and leadership teams across industries.</p>
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
            <?php for($i = 1; $i <= 27; $i++): ?>
               <div class="swiper-slide">
                  <div class="image vjvjvj">
                     <img src="<?php echo e(asset('assets/img/client/' . $i . '.png')); ?>" alt="client <?php echo e($i); ?>" width="103" height="41" loading="lazy">
                  </div>
               </div>
            <?php endfor; ?>
         </div>
      </div>
   </div>
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
   .image.vjvjvj {
    background: #b3b3b3;
    padding: 7px !important;
        border-radius: 8px;
}
.image.vjvjvj img {
    height: 100px !important;
    object-fit: contain;
    width: 100% !important;
    background: transparent !important;
}
</style>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home-sections/homeClients.blade.php ENDPATH**/ ?>
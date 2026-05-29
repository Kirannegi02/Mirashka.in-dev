 <style type="text/css">
 .client_logo_carousel .swiper-slide .image img {
     box-shadow: none; 
}   
.client_logo_carousel .swiper-slide .image img:hover {
    box-shadow: none;
}
 </style>
  <section class="client_logo_carousel type_one pt-5 pb-5 " id="Clients">
     <div class="title_all_box style_seven text-center dark_color">
        <div class="title_sections">
           <div class="title">Our Clients</div>
           <div class="before_title">Our clients drive our growth, success, and shared milestones</div>
           <div class="small_text_sub">Together, We Build Success</div>
        </div>
        <div class="pd_bottom_40"></div>
     </div>

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

              <?php for($i = 1; $i <= 15; $i++): ?>
                   <div class="swiper-slide">
                       <div class="image">
                           <img src="<?php echo e(asset('assets/frontend/img/page/client/' . $i . '.jpg')); ?>" alt="client <?php echo e($i); ?>">
                       </div>
                   </div>
               <?php endfor; ?>

            </div>
        </div>
     </div>

</section><?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/common/sections/clients.blade.php ENDPATH**/ ?>
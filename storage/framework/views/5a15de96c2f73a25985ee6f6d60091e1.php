<?php
   $whyChoose = config('home-why-choose', []);
   $cards = $whyChoose['cards'] ?? [];
?>
<style>
   .home-why-choose .choose_box.type_one .text_box h2 a {
      font-size: 1.12rem;
      line-height: 1.35;
   }
</style>
<section class="content-section home-why-choose bg_light_1" id="why-mirashka">
   <div class="pd_top_50"></div>
   <div class="auto-container">
      <div class="row">
         <div class="col-lg-8 m-auto">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title"><?php echo e($whyChoose['label'] ?? 'Why Businesses Choose Mirashka HR'); ?></div>
                  <div class="title"><?php echo e($whyChoose['heading'] ?? 'Our Edge'); ?></div>
                  <?php if(!empty($whyChoose['subheading'])): ?>
                     <div class="small_text_sub"><?php echo e($whyChoose['subheading']); ?></div>
                  <?php endif; ?>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>
      <div class="row">
         <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="<?php echo e(asset($card['icon'])); ?>" class="img-fluid svg_image" alt="" width="60" height="60">
                  </div>
                  <div class="content_box">
                     <span class="step_no"><?php echo e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span>
                     <div class="text_box">
                        <h2><a href="#"><?php echo e($card['title']); ?></a></h2>
                        <p><?php echo e($card['text']); ?></p>
                     </div>
                  </div>
               </div>
            </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </div>
   <div class="pd_bottom_60"></div>
</section>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home-sections/why-choose.blade.php ENDPATH**/ ?>
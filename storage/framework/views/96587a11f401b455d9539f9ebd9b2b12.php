<?php
   $partnership = config('home-strategic-partnership', []);
   $steps = $partnership['steps'] ?? [];
   $bgImage = asset($partnership['background_image'] ?? 'assets/frontend/img/hraas/hraas-page-partner.png');
?>
<style>
   .home-strategic-partnership {
      position: relative;
      color: #fff;
   }
   .home-hr-enquiry-form select {
      width: 100%;
      min-height: 48px;
      border: 1px solid rgba(0, 0, 0, 0.12);
      border-radius: 4px;
      padding: 8px 12px;
      background: #fff;
      font-size: 0.95rem;
   }
   .home-hr-enquiry-form .submitBtn.theme-btn.one {
      border: none;
      cursor: pointer;
   }
   .home-strategic-partnership .contact_form_box_all.type_two {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 16px 48px rgba(0, 0, 0, 0.25);
      padding: 8px;
   }
</style>
<section class="contact-section home-strategic-partnership" id="enquiry"
   style="background: linear-gradient(rgba(0,0,0,0.82), rgba(0,0,0,0.72)), url('<?php echo e($bgImage); ?>') center center / cover no-repeat;">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="title_all_box style_one light_color">
               <div class="title_sections">
                  <div class="before_title color_white"><?php echo e($partnership['label'] ?? 'Strategic Partnership'); ?></div>
                  <h2><?php echo e($partnership['heading'] ?? 'Build Your People Function With Mirashka'); ?></h2>
                  <?php if(!empty($partnership['description'])): ?>
                     <p><?php echo e($partnership['description']); ?></p>
                  <?php endif; ?>
               </div>
            </div>
            <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="content_box_cn style_one light_color">
                  <div class="txt_content">
                     <h3><span class="color_white"><?php echo e($step['title']); ?></span></h3>
                     <p><?php echo e($step['text']); ?></p>
                  </div>
               </div>
               <?php if(!$loop->last): ?>
                  <div class="pd_bottom_20"></div>
               <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
         <div class="col-xl-6 col-lg-12">
            <div class="contact_form_box_all type_two">
               <?php echo $__env->make('frontend.pages.home-sections.partials.home-hr-enquiry-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home-sections/strategic-partnership.blade.php ENDPATH**/ ?>
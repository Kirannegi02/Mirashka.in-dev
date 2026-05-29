<?php $faqs = config('home-bottom.faqs', []); ?>
<section class="faqs-section" id="faqs">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title"><?php echo e($faqs['label'] ?? 'FAQs'); ?></div>
                  <div class="title"><?php echo e($faqs['heading'] ?? 'Frequently Asked Questions'); ?></div>
                  <div class="small_text_sub"><?php echo e($faqs['subtitle'] ?? 'Have questions? We are here to help.'); ?></div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>
      <div class="row">
         <?php
            $stats = $faqs['stats'] ?? [
               ['label' => 'Client Satisfaction', 'value' => '98%'],
               ['label' => 'Payroll & Compliance Accuracy', 'value' => '99%'],
            ];
         ?>
         <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="<?php echo e(asset('assets/frontend/img/faq' . ($index + 1) . '.jpg')); ?>" class="simp_img cover-parallax" alt="<?php echo e($stat['label']); ?>" width="255" height="360" loading="lazy">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2><?php echo e($stat['label']); ?> <span><?php echo e($stat['value']); ?></span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" data-percent="<?php echo e($stat['value']); ?>" style="width: <?php echo e(preg_replace('/[^0-9]/', '', $stat['value'])); ?>%;"></div>
                  </div>
               </div>
            </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <div class="col-xl-6 col-lg-12">
            <div class="faq_section type_one">
               <div class="block_faq">
                  <div class="accordion">
                     <dl>
                        <?php $__currentLoopData = $faqs['items'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <dt class="faq_header <?php echo e($loop->first ? 'active' : ''); ?>">
                              <span class="icon-play"></span> <?php echo e($item['question']); ?>

                           </dt>
                           <dd class="accordion-content hide" <?php if($loop->first): ?> style="display: block;" <?php endif; ?>>
                              <p><?php echo e($item['answer']); ?></p>
                           </dd>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </dl>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_60"></div>
</section>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home-sections/faqs.blade.php ENDPATH**/ ?>
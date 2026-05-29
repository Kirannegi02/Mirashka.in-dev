<?php
    $testimonials = config('testimonials', []);
    $sectionClass = $sectionClass ?? 'pd_left_100 pd_right_100';
    $beforeTitle = $beforeTitle ?? 'Proof of Impact';
    $sectionTitle = $sectionTitle ?? 'Client Testimonials';
    $sectionSubtitle = $sectionSubtitle ?? 'Trusted by Leaders Across Industries';
    $useFluidContainer = $useFluidContainer ?? false;
?>

<section class="testimonial-section <?php echo e($sectionClass); ?> bg_light_1" id="Impact">
    <div class="<?php echo e(isset($compactTop) && $compactTop ? 'pt-5' : 'pd_top_85'); ?>"></div>
    <div class="<?php echo e($useFluidContainer ? 'container-fluid' : 'container'); ?>">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title_all_box style_seven text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title"><?php echo e($beforeTitle); ?></div>
                        <div class="title"><?php echo e($sectionTitle); ?></div>
                    </div>
                    <?php if($sectionSubtitle): ?>
                        <p class="testimonial-section-subtitle"><?php echo e($sectionSubtitle); ?></p>
                    <?php endif; ?>
                    <div class="pb-4"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="testimonial_sec dark_color style_two">

                    <div class="swiper single_swiper">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="testimonial_box text-center">
                                        <div class="authour_image mb-3">
                                            <i class="icon-quote"></i>
                                            <?php if(!empty($testimonial['image']) && file_exists(public_path($testimonial['image']))): ?>
                                                <img src="<?php echo e(asset($testimonial['image'])); ?>"
                                                     alt="<?php echo e($testimonial['name']); ?>"
                                                     width="120" height="120"/>
                                            <?php else: ?>
                                                <div class="testimonial-avatar-initials" aria-hidden="true">
                                                    <?php echo e($testimonial['initials'] ?? strtoupper(substr($testimonial['name'], 0, 2))); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(!empty($testimonial['tagline'])): ?>
                                            <p class="testimonial-tagline"><?php echo e($testimonial['tagline']); ?></p>
                                        <?php endif; ?>
                                        <div class="comment">
                                            &ldquo;<?php echo e($testimonial['quote']); ?>&rdquo;
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="swiper-button-next d-none d-md-block"></div>
                        <div class="swiper-button-prev d-none d-md-block"></div>
                    </div>

                    <div class="swiper single_swiper_tab mt-3">
                        <div class="swiper-wrapper text-center">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="auth_details">
                                        <h2><?php echo e($testimonial['name']); ?></h2>
                                        <span><?php echo e($testimonial['role']); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="<?php echo e(isset($compactTop) && $compactTop ? 'pb-5' : 'pd_bottom_80'); ?>"></div>
</section>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/common/sections/testimonials.blade.php ENDPATH**/ ?>
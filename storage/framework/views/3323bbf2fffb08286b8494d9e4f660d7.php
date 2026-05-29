<?php
   $formConfig = config('home-strategic-partnership.form', []);
   $services = $formConfig['service_options'] ?? [];
   $teamSizes = $formConfig['team_size_options'] ?? [];
?>
<div class="contact_form_box_inner simple_form">
   <div class="contact_form_shortcode">
      <form class="contactForm home-hr-enquiry-form" method="POST" novalidate>
         <?php echo csrf_field(); ?>
         <input type="hidden" name="lead_type" value="<?php echo e($formConfig['lead_type'] ?? 'home_hr_enquiry'); ?>">
         <div class="row gutter_15px">
            <div class="col-lg-6">
               <label>Your Name *</label>
               <input type="text" name="name" required autocomplete="name">
            </div>
            <div class="col-lg-6">
               <label>Phone Number *</label>
               <input type="tel" name="phone" required autocomplete="tel">
            </div>
            <div class="col-lg-12">
               <label>Email *</label>
               <input type="email" name="email" required autocomplete="email">
            </div>
            <div class="col-lg-12">
               <label>Company Name</label>
               <input type="text" name="company_name" autocomplete="organization">
            </div>
            <div class="col-lg-6">
               <label>Team Size</label>
               <select name="team_size">
                  <option value="">Select team size</option>
                  <?php $__currentLoopData = $teamSizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($option); ?>"><?php echo e($option); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
            </div>
            <div class="col-lg-6">
               <label>Service Required</label>
               <select name="service_required">
                  <option value="">Select a service</option>
                  <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($option); ?>"><?php echo e($option); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
            </div>
            <div class="col-lg-12 text_area">
               <label>Message *</label>
               <textarea name="message" rows="5" required placeholder="Tell us about your HR priorities…"></textarea>
            </div>
            <div class="col-lg-12">
               <button type="submit" class="submitBtn w-100 theme-btn one"><?php echo e($formConfig['submit_label'] ?? 'Submit HR Enquiry'); ?></button>
            </div>
         </div>
      </form>
   </div>
</div>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home-sections/partials/home-hr-enquiry-form.blade.php ENDPATH**/ ?>
@php
   $formConfig = config('home-strategic-partnership.form', []);
   $services = $formConfig['service_options'] ?? [];
   $teamSizes = $formConfig['team_size_options'] ?? [];
@endphp
<div class="contact_form_box_inner simple_form">
   <div class="contact_form_shortcode">
      <form class="contactForm home-hr-enquiry-form" method="POST" novalidate>
         @csrf
         <input type="hidden" name="lead_type" value="{{ $formConfig['lead_type'] ?? 'home_hr_enquiry' }}">
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
                  @foreach($teamSizes as $option)
                     <option value="{{ $option }}">{{ $option }}</option>
                  @endforeach
               </select>
            </div>
            <div class="col-lg-6">
               <label>Service Required</label>
               <select name="service_required">
                  <option value="">Select a service</option>
                  @foreach($services as $option)
                     <option value="{{ $option }}">{{ $option }}</option>
                  @endforeach
               </select>
            </div>
            <div class="col-lg-12 text_area">
               <label>Message *</label>
               <textarea name="message" rows="5" required placeholder="Tell us about your HR priorities…"></textarea>
            </div>
            <div class="col-lg-12">
               <button type="submit" class="submitBtn w-100 theme-btn one">{{ $formConfig['submit_label'] ?? 'Submit HR Enquiry' }}</button>
            </div>
         </div>
      </form>
   </div>
</div>

@php
   $partnership = config('home-strategic-partnership', []);
   $steps = $partnership['steps'] ?? [];
   $bgImage = asset($partnership['background_image'] ?? 'assets/frontend/img/hraas/hraas-page-partner.png');
@endphp
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
   style="background: linear-gradient(rgba(0,0,0,0.82), rgba(0,0,0,0.72)), url('{{ $bgImage }}') center center / cover no-repeat;">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="title_all_box style_one light_color">
               <div class="title_sections">
                  <div class="before_title color_white">{{ $partnership['label'] ?? 'Strategic Partnership' }}</div>
                  <h2>{{ $partnership['heading'] ?? 'Build Your People Function With Mirashka' }}</h2>
                  @if(!empty($partnership['description']))
                     <p>{{ $partnership['description'] }}</p>
                  @endif
               </div>
            </div>
            @foreach($steps as $step)
               <div class="content_box_cn style_one light_color">
                  <div class="txt_content">
                     <h3><span class="color_white">{{ $step['title'] }}</span></h3>
                     <p>{{ $step['text'] }}</p>
                  </div>
               </div>
               @if(!$loop->last)
                  <div class="pd_bottom_20"></div>
               @endif
            @endforeach
         </div>
         <div class="col-xl-6 col-lg-12">
            <div class="contact_form_box_all type_two">
               @include('frontend.pages.home-sections.partials.home-hr-enquiry-form')
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_80"></div>
</section>

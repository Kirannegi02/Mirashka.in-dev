@php
   $industriesConfig = config('home-industries', []);
   $industries = $industriesConfig['industries'] ?? [];
@endphp
<style>
   .home-industries__cards-row {
      align-items: stretch;
   }
   .home-industries__cards-row > [class*="col-"] {
      display: flex;
      margin-bottom: 30px;
   }
   .home-industries .choose_box.type_two {
      width: 100%;
      height: 100%;
      min-height: 260px;
      margin-bottom: 0;
      display: flex;
      flex-direction: column;
   }
   .home-industries .choose_box.type_two .content_box {
      flex: 1;
      display: flex;
      flex-direction: column;
   }
   .home-industries .choose_box.type_two .content_box h2 {
      min-height: 3.75rem;
      margin-bottom: 10px;
   }
   .home-industries .choose_box.type_two .content_box p {
      flex: 1;
      margin: 0;
   }
   .home-industries .choose_box.type_two .step {
      margin-top: auto;
      flex-shrink: 0;
   }
   .home-industries .choose_box.type_two .step::before {
      display: none;
   }
   .home-industries .choose_box.type_two .icon_image i {
      font-size: 40px;
      line-height: 90px;
      color: var(--primary-color-one, #006039);
   }
   .home-industries__subheading {
      position: static;
      display: block;
      margin: 14px auto 0;
      padding: 0 12px;
      max-width: 42rem;
      font-size: 1.05rem;
      line-height: 1.65;
      font-weight: 500;
      color: rgba(15, 23, 42, 0.72);
      opacity: 1;
      -webkit-text-stroke: 0;
      text-shadow: none;
   }
   .home-industries__cta-wrap {
      text-align: center;
   }
</style>
<section class="process-section home-industries bg_light_1" id="industries">
   <div class="pd_top_60"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 m-auto">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">{{ $industriesConfig['label'] ?? 'Industries We Serve' }}</div>
                  <div class="title">{{ $industriesConfig['heading'] ?? 'HR Solutions Across Sectors' }}</div>
                  @if(!empty($industriesConfig['subheading']))
                     <p class="home-industries__subheading">{{ $industriesConfig['subheading'] }}</p>
                  @endif
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>
      <div class="row home-industries__cards-row">
         @foreach($industries as $index => $industry)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_image">
                        <i class="{{ $industry['icon'] }}" aria-hidden="true"></i>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="{{ route($industriesConfig['cta_route'] ?? 'projectenquiries') }}">{{ $industry['title'] }}</a></h2>
                     <p>{{ $industry['text'] }}</p>
                  </div>
                  <div class="step">
                     <h6 class="step_no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</h6>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
      <div class="pd_top_30 home-industries__cta-wrap">
         <div class="theme_btn_all color_one">
            <a href="{{ route($industriesConfig['cta_route'] ?? 'projectenquiries') }}" class="theme-btn one">{{ $industriesConfig['cta'] ?? 'Discuss Your Industry HR Needs' }}</a>
         </div>
      </div>
   </div>
   <div class="pd_bottom_60"></div>
</section>

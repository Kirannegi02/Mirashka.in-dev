@php
   $methodology = config('home-methodology', []);
   $steps = $methodology['steps'] ?? [];
@endphp
{{-- Section 11: photo-card methodology grid (original home UI) --}}
<style>
   .methodology-legacy .stteps {
      position: absolute;
      top: 0;
      right: -15px;
      background: #006039;
      padding: 5px 35px;
      border-radius: 7px;
      color: #fff;
      font-weight: 800;
      border-bottom: 1px solid #fff;
      font-size: 18px;
   }
   .methodology-legacy .entry-thumbnail.image {
      overflow: visible !important;
   }
   .methodology-legacy .methodology-legacy__grid {
      align-items: stretch;
   }
   .methodology-legacy .methodology-legacy__grid > [class*="col-"] {
      display: flex;
   }
   .methodology-legacy .project_box.style_two {
      width: 100%;
      display: flex;
      flex-direction: column;
      margin-bottom: 0;
   }
   .methodology-legacy .project_box.style_two .content_inner {
      flex: 1;
      min-height: 120px;
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
   }
   .methodology-legacy .project_box.style_two .content_inner h2 {
      min-height: 2.75rem;
      margin: 0 0 8px;
   }
   .methodology-legacy .project_box.style_two .content_inner h2 a {
      display: block;
      line-height: 1.35;
   }
   .methodology-legacy .project_box.style_two .content_inner .meta_value {
      margin: 0;
      line-height: 1.5;
   }
</style>

<section class="project-section bg_light_1 methodology-legacy" id="method">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <!-- <div class="before_title">{{ $methodology['label'] ?? 'Our Methodology' }}</div> -->
                  <h2>{{ $methodology['heading'] ?? 'From HR discovery to workforce excellence' }}</h2>
               </div>
               <div class="mr_bottom_20"></div>
            </div>
         </div>
      </div>
      <div class="row clearfix methodology-legacy__grid">
         @foreach($steps as $step)
            @php
               $num = $step['number'] ?? $loop->iteration;
               $image = $step['image'] ?? '';
               if ($image && ! str_contains($image, '/')) {
                  $image = 'assets/frontend/img/' . $image;
               }
            @endphp
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
               <div class="project_box style_two">
                  <div class="entry-thumbnail image">
                     @if($image)
                        <img src="{{ asset($image) }}" alt="{{ $step['title'] }}" loading="lazy" width="255" height="250">
                     @endif
                     <small class="stteps">
                        {{ str_pad((string) $num, 2, '0', STR_PAD_LEFT) }}
                        @if(!$loop->last)
                           &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        @endif
                     </small>
                  </div>
                  <div class="content_inner">
                     <h2><a href="#">{{ $step['title'] }}</a></h2>
                     <div class="meta_value">{{ $step['text'] }}</div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
      @if(!empty($methodology['cta']))
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="theme_btn_all color_one">
                  <a href="{{ route($methodology['cta_route'] ?? 'projectenquiries') }}" class="theme-btn one">{{ $methodology['cta'] }}</a>
               </div>
               <div class="pd_bottom_20"></div>
            </div>
         </div>
      @endif
   </div>
   <div class="pd_bottom_60"></div>
</section>

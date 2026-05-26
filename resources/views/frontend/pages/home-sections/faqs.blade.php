@php $faqs = config('home-bottom.faqs', []); @endphp
<section class="faqs-section" id="faqs">
   <div class="pd_top_80"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_seven text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">{{ $faqs['label'] ?? 'FAQs' }}</div>
                  <div class="title">{{ $faqs['heading'] ?? 'Frequently Asked Questions' }}</div>
                  <div class="small_text_sub">{{ $faqs['subtitle'] ?? 'Have questions? We are here to help.' }}</div>
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>
      <div class="row">
         @php
            $stats = $faqs['stats'] ?? [
               ['label' => 'Client Satisfaction', 'value' => '98%'],
               ['label' => 'Payroll & Compliance Accuracy', 'value' => '99%'],
            ];
         @endphp
         @foreach($stats as $index => $stat)
            <div class="col-xl-3 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq' . ($index + 1) . '.jpg') }}" class="simp_img cover-parallax" alt="{{ $stat['label'] }}" width="255" height="360" loading="lazy">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>{{ $stat['label'] }} <span>{{ $stat['value'] }}</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" data-percent="{{ $stat['value'] }}" style="width: {{ preg_replace('/[^0-9]/', '', $stat['value']) }}%;"></div>
                  </div>
               </div>
            </div>
         @endforeach
         <div class="col-xl-6 col-lg-12">
            <div class="faq_section type_one">
               <div class="block_faq">
                  <div class="accordion">
                     <dl>
                        @foreach($faqs['items'] ?? [] as $item)
                           <dt class="faq_header {{ $loop->first ? 'active' : '' }}">
                              <span class="icon-play"></span> {{ $item['question'] }}
                           </dt>
                           <dd class="accordion-content hide" @if($loop->first) style="display: block;" @endif>
                              <p>{{ $item['answer'] }}</p>
                           </dd>
                        @endforeach
                     </dl>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="pd_bottom_60"></div>
</section>

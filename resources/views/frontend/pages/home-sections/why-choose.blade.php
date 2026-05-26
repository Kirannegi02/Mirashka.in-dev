@php
   $whyChoose = config('home-why-choose', []);
   $cards = $whyChoose['cards'] ?? [];
@endphp
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
                  <div class="before_title">{{ $whyChoose['label'] ?? 'Why Businesses Choose Mirashka HR' }}</div>
                  <div class="title">{{ $whyChoose['heading'] ?? 'Our Edge' }}</div>
                  @if(!empty($whyChoose['subheading']))
                     <div class="small_text_sub">{{ $whyChoose['subheading'] }}</div>
                  @endif
               </div>
               <div class="pd_bottom_40"></div>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach($cards as $index => $card)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset($card['icon']) }}" class="img-fluid svg_image" alt="" width="60" height="60">
                  </div>
                  <div class="content_box">
                     <span class="step_no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                     <div class="text_box">
                        <h2><a href="#">{{ $card['title'] }}</a></h2>
                        <p>{{ $card['text'] }}</p>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
   <div class="pd_bottom_60"></div>
</section>

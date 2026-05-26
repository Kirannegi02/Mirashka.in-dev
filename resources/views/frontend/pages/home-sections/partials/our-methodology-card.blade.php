<article class="home-our-methodology__card {{ !empty($active) ? 'is-active' : '' }}"
   id="om-card-{{ $num }}"
   data-om-card="{{ $num }}"
   role="tabpanel">
   <div class="home-our-methodology__card-inner">
      <span class="home-our-methodology__card-glow" aria-hidden="true"></span>
      <div class="home-our-methodology__card-top">
         <span class="home-our-methodology__card-step">Step {{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
      </div>
      <div class="home-our-methodology__card-body">
         <div>
            <h3>{{ $step['title'] }}</h3>
            @if(!empty($step['icon_label']))
               <div class="home-our-methodology__card-icon-label">{{ $step['icon_label'] }}</div>
            @endif
         </div>
         <p>{{ $step['text'] }}</p>
         @if(!empty($step['image_cue']))
            <span class="home-our-methodology__card-cue">{{ $step['image_cue'] }}</span>
         @endif
      </div>
   </div>
</article>

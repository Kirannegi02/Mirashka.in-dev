{{-- Section 11: Mirashka Methodology — dark theme, animated pipeline --}}
@php
   $methodology = config('home-methodology', []);
   $steps = $methodology['steps'] ?? [];
@endphp

<style>
   .home-our-methodology .visually-hidden {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
   }
   .home-our-methodology {
      --om-green: #006039;
      --om-mint: #7dcea8;
      --om-glow: rgba(125, 206, 168, 0.45);
      position: relative;
      z-index: 2;
      padding: 48px 0 72px;
      overflow: hidden;
      background: #030806;
      color: #fff;
   }
   .home-our-methodology__aurora {
      position: absolute;
      inset: 0;
      pointer-events: none;
      overflow: hidden;
   }
   .home-our-methodology__aurora span {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.5;
      animation: om-aurora-drift 14s ease-in-out infinite alternate;
   }
   .home-our-methodology__aurora span:nth-child(1) {
      width: 420px;
      height: 420px;
      background: rgba(0, 96, 57, 0.55);
      top: -120px;
      left: -80px;
   }
   .home-our-methodology__aurora span:nth-child(2) {
      width: 360px;
      height: 360px;
      background: rgba(125, 206, 168, 0.2);
      bottom: -80px;
      right: -60px;
      animation-delay: -5s;
   }
   .home-our-methodology__aurora span:nth-child(3) {
      width: 280px;
      height: 280px;
      background: rgba(0, 96, 57, 0.35);
      top: 40%;
      left: 45%;
      animation-delay: -9s;
   }
   @keyframes om-aurora-drift {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(30px, -20px) scale(1.08); }
   }
   .home-our-methodology__grid-bg {
      position: absolute;
      inset: 0;
      background-image:
         linear-gradient(rgba(125, 206, 168, 0.04) 1px, transparent 1px),
         linear-gradient(90deg, rgba(125, 206, 168, 0.04) 1px, transparent 1px);
      background-size: 48px 48px;
      mask-image: linear-gradient(180deg, #000 0%, transparent 90%);
      pointer-events: none;
   }
   .home-our-methodology__inner {
      position: relative;
      z-index: 1;
      max-width: 1180px;
      margin: 0 auto;
      padding: 0 24px;
   }
   .home-our-methodology__steps-label {
      margin: 0 0 28px;
      text-align: center;
      font-size: 0.68rem;
      font-weight: 800;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(125, 206, 168, 0.85);
   }
   /* Animated pipeline rail */
   .home-our-methodology__pipeline {
      position: relative;
      margin-bottom: 36px;
      padding: 0 12px;
   }
   .home-our-methodology__pipeline-track {
      position: absolute;
      top: 36px;
      left: 8%;
      right: 8%;
      height: 3px;
      border-radius: 3px;
      background: rgba(125, 206, 168, 0.15);
      overflow: hidden;
   }
   .home-our-methodology__pipeline-fill {
      height: 100%;
      width: 0;
      border-radius: 3px;
      background: linear-gradient(90deg, var(--om-mint), var(--om-green), var(--om-mint));
      background-size: 200% 100%;
      animation: om-line-shimmer 3s linear infinite;
      transition: width 1.2s cubic-bezier(0.22, 1, 0.36, 1);
   }
   .home-our-methodology.om-is-active .home-our-methodology__pipeline-fill {
      width: 100%;
   }
   @keyframes om-line-shimmer {
      0% { background-position: 0% 50%; }
      100% { background-position: 200% 50%; }
   }
   .home-our-methodology__pipeline-nodes {
      display: flex;
      justify-content: space-between;
      gap: 4px;
      position: relative;
      z-index: 1;
      overflow-x: auto;
      padding-bottom: 8px;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
   }
   .home-our-methodology__pipeline-nodes::-webkit-scrollbar { display: none; }
   .home-our-methodology__node {
      flex: 1;
      min-width: 72px;
      max-width: 120px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      background: none;
      border: none;
      cursor: pointer;
      padding: 0;
      color: inherit;
      font-family: inherit;
      transition: transform 0.25s ease;
   }
   .home-our-methodology__node:hover { transform: translateY(-4px); }
   .home-our-methodology__node-ring {
      position: relative;
      width: 64px;
      height: 64px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
   }
   .home-our-methodology__node-ring::before {
      content: '';
      position: absolute;
      inset: -4px;
      border-radius: 50%;
      border: 2px solid transparent;
      border-top-color: var(--om-mint);
      opacity: 0;
      animation: om-spin 4s linear infinite;
      transition: opacity 0.3s ease;
   }
   .home-our-methodology__node.is-active .home-our-methodology__node-ring::before,
   .home-our-methodology__node:hover .home-our-methodology__node-ring::before {
      opacity: 1;
   }
   @keyframes om-spin {
      to { transform: rotate(360deg); }
   }
   .home-our-methodology__node-core {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      border: 2px solid rgba(125, 206, 168, 0.35);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 0;
      transition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
   }
   .home-our-methodology__node.is-active .home-our-methodology__node-core {
      background: var(--om-green);
      border-color: var(--om-mint);
      box-shadow: 0 0 28px var(--om-glow);
      transform: scale(1.06);
   }
   .home-our-methodology__node-num {
      font-size: 0.55rem;
      font-weight: 800;
      color: var(--om-mint);
      line-height: 1;
   }
   .home-our-methodology__node.is-active .home-our-methodology__node-num { color: #fff; }
   .home-our-methodology__node-num--solo {
      font-size: 0.85rem;
   }
   .home-our-methodology__node.is-active .home-our-methodology__node-num--solo { color: #fff; }
   .home-our-methodology__node-title {
      font-size: 0.68rem;
      font-weight: 700;
      color: rgba(255, 255, 255, 0.75);
      line-height: 1.25;
   }
   .home-our-methodology__node.is-active .home-our-methodology__node-title { color: #fff; }
   /* Uniform step cards — 3×3 grid, row 3 centered */
   .home-our-methodology__cards {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 16px;
      align-items: start;
   }
   .home-our-methodology__card:nth-child(7) {
      grid-column: 2 / 3;
   }
   .home-our-methodology__card {
      position: relative;
      border-radius: 16px;
      padding: 1px;
      background: linear-gradient(145deg, rgba(125, 206, 168, 0.4), rgba(0, 96, 57, 0.2));
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.3s ease;
      height: auto;
   }
   .home-our-methodology.om-is-active .home-our-methodology__card {
      opacity: 1;
      transform: translateY(0);
   }
   .home-our-methodology.om-is-active .home-our-methodology__card:nth-child(1) { transition-delay: 0.06s; }
   .home-our-methodology.om-is-active .home-our-methodology__card:nth-child(2) { transition-delay: 0.1s; }
   .home-our-methodology.om-is-active .home-our-methodology__card:nth-child(3) { transition-delay: 0.14s; }
   .home-our-methodology.om-is-active .home-our-methodology__card:nth-child(4) { transition-delay: 0.18s; }
   .home-our-methodology.om-is-active .home-our-methodology__card:nth-child(5) { transition-delay: 0.22s; }
   .home-our-methodology.om-is-active .home-our-methodology__card:nth-child(6) { transition-delay: 0.26s; }
   .home-our-methodology.om-is-active .home-our-methodology__card:nth-child(7) { transition-delay: 0.3s; }
   .home-our-methodology__card.is-active {
      box-shadow: 0 0 0 2px var(--om-mint), 0 12px 36px rgba(125, 206, 168, 0.2);
   }
   .home-our-methodology__card-inner {
      position: relative;
      height: auto;
      border-radius: 15px;
      background: rgba(10, 18, 14, 0.95);
      backdrop-filter: blur(10px);
      overflow: hidden;
      padding: 16px 16px 14px;
      display: flex;
      flex-direction: column;
      gap: 8px;
      transition: background 0.3s ease;
   }
   .home-our-methodology__card:hover .home-our-methodology__card-inner,
   .home-our-methodology__card.is-active .home-our-methodology__card-inner {
      background: rgba(0, 96, 57, 0.32);
   }
   .home-our-methodology__card-glow {
      position: absolute;
      top: -40%;
      right: -20%;
      width: 140px;
      height: 140px;
      border-radius: 50%;
      background: radial-gradient(circle, var(--om-glow) 0%, transparent 70%);
      opacity: 0;
      transition: opacity 0.4s ease;
      pointer-events: none;
   }
   .home-our-methodology__card:hover .home-our-methodology__card-glow,
   .home-our-methodology__card.is-active .home-our-methodology__card-glow {
      opacity: 1;
   }
   .home-our-methodology__card-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 12px;
   }
   .home-our-methodology__card-step {
      font-size: 0.65rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      color: var(--om-mint);
      padding: 4px 10px;
      border-radius: 100px;
      border: 1px solid rgba(125, 206, 168, 0.3);
      background: rgba(0, 0, 0, 0.25);
   }
   .home-our-methodology__card h3 {
      margin: 0;
      font-size: 1rem;
      font-weight: 800;
      color: #fff;
      line-height: 1.3;
   }
   .home-our-methodology__card-icon-label {
      font-size: 0.72rem;
      color: rgba(255, 255, 255, 0.5);
      margin-top: 2px;
   }
   .home-our-methodology__card-body {
      display: flex;
      flex-direction: column;
      gap: 6px;
   }
   .home-our-methodology__card p {
      margin: 0;
      font-size: 0.8rem;
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.65);
   }
   .home-our-methodology__card-cue {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-top: 2px;
      padding-top: 8px;
      border-top: 1px solid rgba(125, 206, 168, 0.15);
      font-size: 0.6rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--om-mint);
      line-height: 1.35;
   }
   .home-our-methodology__card-cue::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--om-mint);
      animation: om-pulse 2s ease-in-out infinite;
   }
   @keyframes om-pulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(0.85); }
   }
   .home-our-methodology__cta-row {
      margin-top: 40px;
      text-align: center;
   }
   .home-our-methodology__cta {
      position: relative;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 14px 32px;
      border-radius: 100px;
      background: var(--om-mint);
      color: #030806 !important;
      font-size: 0.9rem;
      font-weight: 800;
      text-decoration: none;
      overflow: hidden;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      box-shadow: 0 8px 32px rgba(125, 206, 168, 0.35);
   }
   .home-our-methodology__cta::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 60%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.45), transparent);
      animation: om-cta-shine 3.5s ease-in-out infinite;
   }
   @keyframes om-cta-shine {
      0% { left: -100%; }
      40%, 100% { left: 150%; }
   }
   .home-our-methodology__cta:hover {
      transform: translateY(-3px);
      box-shadow: 0 14px 40px rgba(125, 206, 168, 0.45);
   }
   .home-our-methodology .om-reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.7s ease, transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
   }
   .home-our-methodology.om-is-active .om-reveal {
      opacity: 1;
      transform: none;
   }
   @media (max-width: 991px) {
      .home-our-methodology__cards { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .home-our-methodology__card:nth-child(7) { grid-column: auto; }
   }
   @media (max-width: 575px) {
      .home-our-methodology { padding: 52px 0 60px; }
      .home-our-methodology__cards { grid-template-columns: 1fr; }
      .home-our-methodology__node-ring { width: 56px; height: 56px; }
      .home-our-methodology__node-core { width: 46px; height: 46px; }
   }
   @media (prefers-reduced-motion: reduce) {
      .home-our-methodology__aurora span,
      .home-our-methodology__pipeline-fill,
      .home-our-methodology__node-ring::before,
      .home-our-methodology__card-cue::before,
      .home-our-methodology__cta::after {
         animation: none;
      }
      .home-our-methodology .om-reveal,
      .home-our-methodology__card {
         opacity: 1;
         transform: none;
         transition: none;
      }
   }
</style>

<section class="home-our-methodology" id="our-methodology" data-om-section aria-labelledby="home-our-methodology-title">
   <div class="home-our-methodology__aurora" aria-hidden="true">
      <span></span><span></span><span></span>
   </div>
   <div class="home-our-methodology__grid-bg" aria-hidden="true"></div>

   <div class="home-our-methodology__inner">
      <h2 id="home-our-methodology-title" class="visually-hidden">{{ $methodology['heading'] ?? 'From HR discovery to workforce excellence' }}</h2>

      <p class="home-our-methodology__steps-label om-reveal">{{ $methodology['steps_heading'] ?? 'Methodology Steps' }}</p>

      <div class="home-our-methodology__pipeline om-reveal">
         <div class="home-our-methodology__pipeline-track" aria-hidden="true">
            <div class="home-our-methodology__pipeline-fill"></div>
         </div>
         <div class="home-our-methodology__pipeline-nodes" role="tablist" aria-label="Methodology steps">
            @foreach($steps as $step)
               @php $num = $step['number'] ?? $loop->iteration; @endphp
               <button type="button"
                  class="home-our-methodology__node {{ $loop->first ? 'is-active' : '' }}"
                  role="tab"
                  aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                  aria-controls="om-card-{{ $num }}"
                  data-om-step="{{ $num }}">
                  <span class="home-our-methodology__node-ring">
                     <span class="home-our-methodology__node-core">
                        <span class="home-our-methodology__node-num home-our-methodology__node-num--solo">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
                     </span>
                  </span>
                  <span class="home-our-methodology__node-title">{{ $step['title'] }}</span>
               </button>
            @endforeach
         </div>
      </div>

      <div class="home-our-methodology__cards">
         @foreach($steps as $step)
            @php $num = $step['number'] ?? $loop->iteration; @endphp
            @include('frontend.pages.home-sections.partials.our-methodology-card', [
               'step' => $step,
               'num' => $num,
               'active' => $loop->first,
            ])
         @endforeach
      </div>

      <div class="home-our-methodology__cta-row om-reveal">
         <a href="{{ route($methodology['cta_route'] ?? 'projectenquiries') }}" class="home-our-methodology__cta">
            {{ $methodology['cta'] ?? 'Start HR Discovery' }}
            <i class="ri-arrow-right-line" aria-hidden="true"></i>
         </a>
      </div>
   </div>
</section>

<script>
(function () {
   var section = document.querySelector('[data-om-section]');
   if (!section) return;
   var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
   if (reduced) {
      section.classList.add('om-is-active');
   } else {
      var io = new IntersectionObserver(function (entries) {
         entries.forEach(function (e) {
            if (e.isIntersecting) {
               section.classList.add('om-is-active');
               io.disconnect();
            }
         });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.12 });
      io.observe(section);
   }
   var nodes = section.querySelectorAll('.home-our-methodology__node');
   var cards = section.querySelectorAll('.home-our-methodology__card');
   nodes.forEach(function (node) {
      node.addEventListener('click', function () {
         var step = node.getAttribute('data-om-step');
         nodes.forEach(function (n) {
            var on = n.getAttribute('data-om-step') === step;
            n.classList.toggle('is-active', on);
            n.setAttribute('aria-selected', on ? 'true' : 'false');
         });
         cards.forEach(function (card) {
            card.classList.toggle('is-active', card.getAttribute('data-om-card') === step);
         });
         var target = section.querySelector('#om-card-' + step);
         if (target && window.matchMedia('(max-width: 991px)').matches) {
            target.scrollIntoView({ behavior: reduced ? 'auto' : 'smooth', block: 'nearest' });
         }
      });
   });
})();
</script>

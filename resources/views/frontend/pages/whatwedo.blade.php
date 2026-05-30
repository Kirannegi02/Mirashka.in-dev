@extends('frontend.layouts.app')

@section('content')

   <style type="text/css">
      .single_banner.style_one .slider_content h1 {
         font-size: 38px;
         line-height: 50px;
         font-weight: 800;
         margin-bottom: 20px;
      }

      .single_banner.style_one {
         padding-top: 50px;

      }
      .custom_black_overlay {
   position: relative;
   z-index: 1;
}

.custom_black_overlay::before {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background: rgba(0, 0, 0, 0.8); /* 80% black */
   z-index: -1;
}
   </style>
   <!---sliders-->
   <section class="single_banner style_one bg_op_1  custom_black_overlay p-0"
      style="background-image: url({{ asset('assets/frontend/img/Whatwedo/we-build-influence-banner.webp')  }});">
      <div class="container">
         <div class="row d-flex align-items-center">

            <div class="col-mg-12 text-center">

               <div class="pd_top_80"></div>

               <div class="slider_content light_color">

                  <!-- TOP LABEL -->
                  <h6>What We Do</h6>

                  <div class="pd_bottom_10"></div>

                  <!-- UPDATED HEADLINE -->
                  <h1 class="color_white">
                     One HR partner for every stage of your people journey
                  </h1>
                  <div class="middle"></div>

                  <!-- UPDATED SUBHEADLINE -->
                  <p class="description color_white">
                     From hiring your first employee to building leadership teams, managing compliance, structuring payroll and creating employee engagement systems, Mirashka helps businesses build the people foundation required for sustainable growth.
                  </p>

                  <p class="description color_white">
                     Every growing business reaches a point where people management becomes more than recruitment. It becomes a system of compliance, payroll, documentation, leadership, performance, culture and technology. Mirashka brings these moving parts together through a structured HRaaS-led model.
                  </p>


                  <!-- CTA + VIDEO -->
                  <ul class="d_inline_block">

                     <!-- CTA 1 -->
                     <li>
                        <div class="theme_btn_all color_two">
                           <a href="tel:08796927200" class="theme-btn one primary-color-two">
                              Book HR Discovery Call
                           </a>
                        </div>
                     </li>

                     <!-- CTA 2 -->
                     <li>
                        <div class="theme_btn_all">
                           <a href="#servicescustom" class="theme-btn two">
                              Explore PULSE Framework
                           </a>
                        </div>
                     </li>

                  </ul>

               </div>

               <div class="pd_bottom_80"></div>

            </div>

         </div>
      </div>
   </section>
   <!---sliders-->

   {{-- Section 4: The Growth Reality (home-only) --}}
   <style>
      .home-growth-reality {
         position: relative;
         padding: 0 0 100px;
         margin-top: -1px;
         background: #eef2f0;
         overflow: hidden;
      }
      .home-growth-reality__wave {
         display: block;
         width: 100%;
         height: 56px;
         line-height: 0;
         color: #0d1612;
         transform: translateY(1px);
      }
      .home-growth-reality__wave svg {
         display: block;
         width: 100%;
         height: 56px;
      }
      .home-growth-reality__bg {
         position: absolute;
         inset: 56px 0 0;
         background:
            radial-gradient(ellipse 80% 50% at 100% 0%, rgba(0, 96, 57, 0.08) 0%, transparent 55%),
            radial-gradient(ellipse 60% 40% at 0% 100%, rgba(125, 206, 168, 0.12) 0%, transparent 50%),
            linear-gradient(180deg, #eef2f0 0%, #f8faf9 100%);
         pointer-events: none;
      }
      .home-growth-reality__inner {
         position: relative;
         z-index: 1;
         max-width: 1280px;
         margin: 0 auto;
         padding: 0 24px 0;
      }
      .home-growth-reality__shell {
         display: grid;
         grid-template-columns: minmax(280px, 36%) minmax(0, 64%);
         align-items: stretch;
         gap: 0;
         border-radius: 8px;
         overflow: hidden;
         box-shadow: 0 32px 80px rgba(6, 13, 10, 0.14);
         border: 1px solid rgba(0, 96, 57, 0.12);
         background: #fff;
      }
      .home-growth-reality__story {
         padding: 36px 28px 32px;
         background: linear-gradient(165deg, #0a1410 0%, #122820 55%, #1a3d32 100%);

      }

      .home-growth-reality__label-pill {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          padding: 6px 14px 6px 10px;
          background: rgba(125, 206, 168, 0.12);
          border: 1px solid rgba(125, 206, 168, 0.28);
          font-size: 16px;
          font-weight: 700;
          color: #ffffff;
          margin-bottom: 20px;
      }
      .home-growth-reality__label-pill i {
         font-size: 14px;
      }
      .home-growth-reality__title {
         font-size: clamp(1.45rem, 2.5vw, 2rem);
         font-weight: 800;
         line-height: 1.25;
         margin: 0 0 24px;
         letter-spacing: -0.02em;
      }
      .home-growth-reality__title-lead {
         display: block;
         color: #fff;
      }
      .home-growth-reality__title-accent {
         display: block;
         color: #7dcea8;
      }
      .home-growth-reality__aside {
         display: flex;
         flex-direction: column;
         min-height: 100%;
         background: #f8faf9;
         border-left: 1px solid #e2ebe6;
      }
      .home-growth-reality__timeline {
         list-style: none;
         margin: 0 0 20px;
         padding: 0;
         display: flex;
         flex-direction: column;
         gap: 0;
      }
      .home-growth-reality__timeline li {
         display: grid;
         grid-template-columns: 48px minmax(0, 1fr);
         gap: 14px;
         padding: 14px 0;
         border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      }
      .home-growth-reality__timeline li:last-child {
         border-bottom: none;
         padding-bottom: 0;
      }
      .home-growth-reality__timeline-marker {
         display: flex;
         flex-direction: column;
         align-items: center;
         gap: 0;
      }
      .home-growth-reality__timeline-dot {
         width: 12px;
         height: 12px;
         border-radius: 50%;
         background: #7dcea8;
         box-shadow: 0 0 0 4px rgba(125, 206, 168, 0.25);
         flex-shrink: 0;
      }
      .home-growth-reality__timeline-line {
         flex: 1;
         width: 2px;
         min-height: 24px;
         margin-top: 6px;
         background: linear-gradient(180deg, rgba(125, 206, 168, 0.5), transparent);
      }
      .home-growth-reality__timeline li:last-child .home-growth-reality__timeline-line {
         display: none;
      }
      .home-growth-reality__timeline-step {
          font-size: 20px;
          font-weight: 800;
          margin-bottom: 4px;
          display: block;
          margin-top: -10px;
      }
      .home-growth-reality__timeline p {
         margin: 0;
         font-size: 0.92rem;
         line-height: 1.65;
         color: rgba(255, 255, 255, 0.78);
      }
      .home-growth-reality__solution {
         display: flex;
         align-items: flex-start;
         gap: 14px;
         padding: 18px 20px;
         border-radius: 8px;
         background: rgba(0, 96, 57, 0.35);
         border: 1px solid rgba(125, 206, 168, 0.25);
      }
      .home-growth-reality__solution-icon {
         flex-shrink: 0;
         width: 40px;
         height: 40px;
         border-radius: 8px;
         background: #006039;
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 20px;
      }
      .home-growth-reality__solution p {
         margin: 0;
         font-size: 0.9rem;
         line-height: 1.6;
         color: rgba(255, 255, 255, 0.9);
         font-weight: 500;
      }
      .home-growth-reality__visual {
         position: relative;
         flex: 1 1 auto;
         min-height: 200px;
         height: auto;
         max-height: none;
         margin: 0;
      }
      .home-growth-reality__visual img {
         position: absolute;
         inset: 0;
         width: 100%;
         height: 100%;
         object-fit: cover;
         display: block;
      }
      .home-growth-reality__visual-badge {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 52px;
         height: 52px;
         border-radius: 50%;
         background: #fff;
         color: #006039;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 24px;
         box-shadow: 0 8px 28px rgba(0, 0, 0, 0.2);
         border: 3px solid #7dcea8;
         z-index: 2;
      }
      .home-growth-reality__visual-tag {
          position: absolute;
          padding: 8px 14px;
          border-radius: 8px;
          font-weight: 800;
          letter-spacing: 0.08em;
          z-index: 2;
          font-size: 15px;
      }
      .home-growth-reality__visual-tag--before {
         top: 16px;
         left: 16px;
         background: rgba(30, 41, 59, 0.88);
         color: #f1f5f9;
      }
      .home-growth-reality__visual-tag--after {
         bottom: 16px;
         right: 16px;
         background: #006039;
         color: #fff;
      }
      .home-growth-reality__pains {
         flex: 0 0 auto;
         padding: 18px 24px 14px;
         background: #fff;
         border-top: 1px solid #e8eeeb;
      }
      .home-growth-reality__pains-title {
          margin: 0 0 14px;
          font-size: 26px;
          font-weight: 800;
          color: #000;
          text-align: center;
      }
      .home-growth-reality__pain-list {
         list-style: none;
         margin: 0;
         padding: 0;
         display: grid;
         grid-template-columns: repeat(2, minmax(0, 1fr));
         gap: 10px;
      }
      .home-growth-reality__pain-item {
         display: flex;
         align-items: center;
         gap: 10px;
         padding: 11px 12px;
         background: #f8faf9;
         border: 1px solid #e8eeeb;
         border-radius: 8px;
         font-size: 18px;
         font-weight: 600;
         color: #1e293b;
         line-height: 1.35;
      }
      .home-growth-reality__pain-item i {
          width: 40px;
          height: 40px;
          border-radius: 7px;
          background: rgb(0 96 57);
          color: #fff;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 26px;
      }
      /* Scroll animations */
      .home-growth-reality .hgr-reveal {
         opacity: 0;
         transform: translateY(32px);
         transition: opacity 0.75s cubic-bezier(0.22, 1, 0.36, 1), transform 0.75s cubic-bezier(0.22, 1, 0.36, 1);
      }
      .home-growth-reality .hgr-reveal--left {
         transform: translateX(-40px);
      }
      .home-growth-reality .hgr-reveal--right {
         transform: translateX(40px);
      }
      .home-growth-reality .hgr-reveal--scale {
         transform: scale(0.92);
      }
      .home-growth-reality.hgr-is-active .hgr-reveal,
      .home-growth-reality.hgr-is-active .hgr-reveal--left,
      .home-growth-reality.hgr-is-active .hgr-reveal--right,
      .home-growth-reality.hgr-is-active .hgr-reveal--scale {
         opacity: 1;
         transform: none;
      }
      .home-growth-reality .hgr-reveal[data-hgr-delay="1"] { transition-delay: 0.06s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="2"] { transition-delay: 0.14s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="3"] { transition-delay: 0.22s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="4"] { transition-delay: 0.3s; }
      .home-growth-reality .hgr-reveal[data-hgr-delay="5"] { transition-delay: 0.38s; }
      .home-growth-reality .hgr-stagger > * {
         opacity: 0;
         transform: translateY(16px);
         transition: opacity 0.5s cubic-bezier(0.22, 1, 0.36, 1), transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
      }
      .home-growth-reality.hgr-is-active .hgr-stagger > * {
         opacity: 1;
         transform: none;
      }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(1) { transition-delay: 0.32s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(2) { transition-delay: 0.38s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(3) { transition-delay: 0.44s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(4) { transition-delay: 0.5s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(5) { transition-delay: 0.56s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(6) { transition-delay: 0.62s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(7) { transition-delay: 0.68s; }
      .home-growth-reality.hgr-is-active .hgr-stagger > *:nth-child(8) { transition-delay: 0.74s; }
      .home-growth-reality.hgr-is-active .home-growth-reality__visual-badge {
         animation: hgrBadgePulse 2s ease-in-out infinite;
      }
      @keyframes hgrBadgePulse {
         0%, 100% { box-shadow: 0 8px 28px rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(125, 206, 168, 0.5); }
         50% { box-shadow: 0 8px 28px rgba(0, 0, 0, 0.2), 0 0 0 10px rgba(125, 206, 168, 0); }
      }
      .home-growth-reality.hgr-is-active .home-growth-reality__timeline-dot {
         animation: hgrDotGlow 2.5s ease-in-out infinite;
      }
      .home-growth-reality.hgr-is-active .home-growth-reality__timeline li:nth-child(2) .home-growth-reality__timeline-dot {
         animation-delay: 0.4s;
      }
      .home-growth-reality.hgr-is-active .home-growth-reality__timeline li:nth-child(3) .home-growth-reality__timeline-dot {
         animation-delay: 0.8s;
      }
      @keyframes hgrDotGlow {
         0%, 100% { box-shadow: 0 0 0 4px rgba(125, 206, 168, 0.25); }
         50% { box-shadow: 0 0 0 8px rgba(125, 206, 168, 0.12); }
      }
      @media (prefers-reduced-motion: reduce) {
         .home-growth-reality .hgr-reveal,
         .home-growth-reality .hgr-stagger > * {
            opacity: 1;
            transform: none;
            transition: none;
         }
         .home-growth-reality__visual-badge,
         .home-growth-reality__timeline-dot {
            animation: none !important;
         }
      }
      .home-growth-reality__cta-panel {
         flex: 0 0 auto;
         padding: 18px 24px 22px;
         background: #f4f8f6;
         border-top: 1px solid #e2ebe6;
         display: flex;
         flex-wrap: wrap;
         align-items: center;
         justify-content: space-between;
         gap: 14px 20px;
      }
      .home-growth-reality__cta-copy strong {
         display: block;
         font-size: 20px;
         font-weight: 800;
         color: #0f172a;
         margin-bottom: 4px;
      }
      .home-growth-reality__cta-copy span {
         font-size: 0.85rem;
         color: #64748b;
      }
      @media (max-width: 991px) {
         .home-growth-reality__shell {
            grid-template-columns: 1fr;
         }
         .home-growth-reality__aside {
            border-left: none;
            border-top: 1px solid #e2ebe6;
         }
         .home-growth-reality__visual {
            flex: 0 0 auto;
            min-height: 260px;
            height: auto;
            max-height: none;
         }
      }
      @media (max-width: 575px) {
         .home-growth-reality {
            padding-bottom: 72px;
         }
         .home-growth-reality__inner {
            padding-left: 16px;
            padding-right: 16px;
         }
         .home-growth-reality__story {
            padding: 32px 24px 28px;
         }
         .home-growth-reality__cta-panel {
            padding: 22px 20px;
            flex-direction: column;
            align-items: stretch;
         }
         .home-growth-reality__cta {
            justify-content: center;
         }
         .home-growth-reality__pain-list {
            grid-template-columns: 1fr;
         }
      }
   </style>

   <section class="content-section home-growth-reality" id="home-growth-reality" data-hgr-section aria-labelledby="home-growth-reality-title">
      <div class="title_all_box style_one text-center dark_color mt-5 pt-3">
         <div class="title_sections">
            <div class="before_title">The Business Reality</div>
            <h2 class="title">As companies grow, HR cannot remain informal</h2>
            <div class="middle"></div>
            <p>In the early stage, most companies manage HR through conversations, spreadsheets, phone calls and founder-led decisions. But growth changes everything.</p>
         </div>
      </div>
      <div class="home-growth-reality__inner">
         <div class="home-growth-reality__shell hgr-reveal hgr-reveal--scale" data-hgr-delay="1">
            <div class="home-growth-reality__story hgr-reveal hgr-reveal--left" data-hgr-delay="2">
               <img src="{{ asset('assets/img/piller4.png') }}" alt="Before" loading="lazy" width="640" height="400">
            </div>
            <div class="home-growth-reality__aside hgr-reveal hgr-reveal--right" data-hgr-delay="2">
               <div class="home-growth-reality__pains hgr-reveal" data-hgr-delay="4">
                  <h3 class="home-growth-reality__pains-title">Mirashka helps businesses move from informal HR handling to structured people management.</h3>
                  <p class="text-center">Hiring becomes urgent. Payroll becomes sensitive. Employees ask for policies. Compliance becomes important. Senior roles become difficult to fill. Workplace culture starts depending on systems, not only intention.</p>
                  <hr>
                  <ul class="home-growth-reality__pain-list hgr-stagger">
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-time-line" aria-hidden="true"></i>
                        <span>Delayed hiring </span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-calculator-line" aria-hidden="true"></i>
                        <span>Unclear roles and KRAs </span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-file-warning-line" aria-hidden="true"></i>
                        <span>Weak employee documentation </span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-alert-line" aria-hidden="true"></i>
                        <span>Payroll and attendance confusion </span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-focus-2-line" aria-hidden="true"></i>
                        <span>Compliance exposure </span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-emotion-unhappy-line" aria-hidden="true"></i>
                        <span>Lack of leadership pipeline </span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-user-star-line" aria-hidden="true"></i>
                        <span>Low employee engagement </span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-team-line" aria-hidden="true"></i>
                        <span>Founder dependency in HR decisions </span>
                     </li>
                  </ul>
               </div>
               <div class="home-growth-reality__cta-panel hgr-reveal" data-hgr-delay="5">
                  <div class="home-growth-reality__cta-copy">
                     <strong>Know where your HR stands today</strong>
                     <span>Free readiness review — gaps, risks and next steps.</span>
                  </div>
                  <a href="{{ route('projectenquiries') }}" class="home-growth-reality__cta theme-btn one">
                     Get HR Health Check <i class="ri-arrow-right-line" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
   (function () {
      var section = document.getElementById('home-growth-reality');
      if (!section) return;
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
         section.classList.add('hgr-is-active');
         return;
      }
      var observer = new IntersectionObserver(function (entries) {
         entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            section.classList.add('hgr-is-active');
            observer.disconnect();
         });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.15 });
      observer.observe(section);
   })();
   </script>


<style type="text/css">
   .qaswep .card{
   cursor: pointer;
   }
   .iskok h6 {
   height: 48px;
   }
   .iskok p.mb-0 {
   height: 96px;
   }
   .slider-container {
   width: 82%;
   margin: 0 auto 0;
   border-radius: 20px;
   overflow: hidden;
   position: relative;
   }
   .carousel-inner {
   position: relative;
   }
   .carousel-item {
   height: 500px;
   position: relative;
   background-size: cover;
   background-position: center;
   }
   .carousel-caption {
   position: absolute;
   bottom: 20px;
   left: 20px;
   background-color: rgba(255, 255, 255, 0.9);
   padding: 20px;
   border-radius: 15px;
   max-width: 400px;
   text-align: left;
   }
   .carousel-caption h5 {
       font-size: 25px;
       margin: 10px 0;
   }

   .carousel-caption p {
   font-size: 16px;
   color: #000;
   }
   .carousel-caption small {
   display: block;
   margin-bottom: 15px;
   color: #555;
   }
   .carousel-caption a {
   color: #e1a300;
   font-weight: bold;
   text-decoration: none;
   }
   .carousel-caption a:hover {
   text-decoration: underline;
   }
   .carousel-control-next,
   .carousel-control-prev {
   top: 50%;
   transform: translateY(-50%);
   width: 5%;
   }
   .pulse {
   text-align: center;
   padding: 10px;
   background-color: #006039;
   color: #fff;
   border-radius: 0 0 20px 20px;
   display: flex;
   justify-content: center;
   gap: 20px;
   }
   .pulse a {
   color: #fff;
   text-decoration: none;
   font-weight: 500;
   position: relative;
   padding: 5px 10px;
   font-size: 16px;
   }
   .pulse a:hover,
   .pulse a.active {
   color: #e1a300 !important;
   }
   .pulse a.active::before {
   content: '•';
   position: absolute;
   left: -10px;
   color: #e1a300;
   font-size: 24px;
   top: -2px;
   }
   .carousel-control-next-icon {
   background-color: black;
   border-radius: 5px;
   }
   div#customCarousel {
   height: auto;
   width: auto;
   }
   .carousel-caption .title-before {
       margin: initial;
   }
   .pulse span {
       background: #fff;
       color: #006039;
       width: 25px;
       display: inline-block;
       font-weight: 900;
       border-radius: 5px;
   }
   .pulse .active span {
       background: #e1a300;
       color: #fff;
   }
</style>
<div class="title_all_box style_one text-center dark_color mt-5 pt-3">
   <div class="container">
      <div class="title_sections">
         <div class="before_title">The Mirashka HR Framework</div>
         <h2 class="title">PULSE — The Mirashka People Operating Framework</h2>
         <div class="middle"></div>
         <p>Mirashka has organized its HR services into the PULSE Framework — a practical five-part model that helps businesses protect the organization, unify HR operations, build leadership, source the right talent and empower long-term workforce growth.</p>
      </div>
   </div>
</div>
<div class="slider-container pb-5">
   <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active" style="background-image: url({{ asset('assets/img/protect.png') }});">
            <div class="carousel-caption">
               <div class="title-before">P — Protect</div>
               <h5>Compliance & Workplace Integrity</h5>
               <div class="middle left"></div>
               <p>Protect the business with legal guidance, policy frameworks, HR audits, workplace ethics and POSH-compliant prevention training.</p>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url({{ asset('assets/img/unify.png') }});">
            <div class="carousel-caption">
               <div class="title-before">U — Unify</div>
               <h5>Workforce Management & Process Optimization</h5>
               <div class="middle left"></div>
               <p>Unify payroll, documentation, HR policies, onboarding, employee records and remote HR operations into one structured rhythm.</p>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url({{ asset('assets/img/lead.png') }});">
            <div class="carousel-caption">
               <div class="title-before">L — Lead</div>
               <h5>Leadership & Organizational Excellence</h5>
               <div class="middle left"></div>
               <p>Build future-ready leadership through executive search, CEO advisory, succession planning, family business governance, leadership assessment and transformation support.</p>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url({{ asset('assets/img/source.png') }});">
            <div class="carousel-caption">
               <div class="title-before">S — Source</div>
               <h5>Talent Acquisition & Staffing Excellence</h5>
               <div class="middle left"></div>
               <p>Source the right talent through IT staffing, general staffing, NAPS support, IT recruitment, RPO and executive search.</p>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url({{ asset('assets/img/empower.png') }});">
            <div class="carousel-caption">
               <div class="title-before">E — Empower</div>
               <h5>HR as a Service</h5>
               <div class="middle left"></div>
               <p>Empower the business with HR outsourcing, employer branding, candidate sourcing, employee engagement, surveys, retention and HR technology.</p>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#customCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </a>
   </div>
   <div class="pulse">
      <a href="#customCarousel" data-bs-slide-to="0" class="active"><span>P</span> — Protect</a>
      <a href="#customCarousel" data-bs-slide-to="1"><span>U</span> — Unify</a>
      <a href="#customCarousel" data-bs-slide-to="2"><span>L</span> — Lead</a>
      <a href="#customCarousel" data-bs-slide-to="3"><span>S</span> — Source</a>
      <a href="#customCarousel" data-bs-slide-to="4"><span>E</span> — Empower</a>
   </div>
</div>

<script>
   const carousel = document.getElementById('customCarousel');
   const pulseLinks = document.querySelectorAll('.pulse a');
   
   carousel.addEventListener('slid.bs.carousel', function (event) {
   
      pulseLinks.forEach(link => link.classList.remove('active'));
   
      
      const activeIndex = event.to;
      pulseLinks[activeIndex].classList.add('active');
   });
</script>


   @php
      $homeHrOsPillars = [
         [
            'title' => 'Compliance & Workplace Integrity',
            'text'  => 'Legal and HR safeguards to create a safer, policy-backed workplace.',
            'image' => 'assets/img/piller1.png',
            'route' => '/#piller-1',
         ],
         [
            'title' => 'Workforce Management & Process Optimization',
            'text'  => 'Payroll, HR records, policies and remote HR systems for smoother operations.',
            'image' => 'assets/img/piller2.png',
            'route' => '/#piller-2',
         ],
         [
            'title' => 'Leadership & Organizational Excellence',
            'text'  => 'Leadership hiring, advisory, succession, DEI, transformation and talent strategy.',
            'image' => 'assets/img/piller3.png',
            'route' => '/#piller-3',
         ],
         [
            'title' => 'Talent Acquisition & Staffing Excellence',
            'text'  => 'IT staffing, general staffing, RPO, apprenticeship and executive search.',
            'image' => 'assets/img/piller4.png',
            'route' => '/#piller-4',
         ],
         [
            'title' => 'HR as a <br> Service',
            'text'  => 'Dedicated HR support, outsourcing, employer branding, engagement and HR technology.',
            'image' => 'assets/img/piller5.png',
            'route' => '/#piller-5',
         ],
      ];
   @endphp
<style>
.title_all_box.style_three .title_sections .before_title::before {
    background: #ffffff;
}
</style>
   <section class="project-section bg_dark_1 mt-5">
      <!--===============spacing==============-->
         <div class="pd_top_85"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-12 text-center mb-sm-5 mb-md-0 mb-lg-0 mb-xl-0">
               <div class="title_all_box style_three light_color">
                  <div class="title_sections three left">
                     <div class="before_title text-white">Our Service Universe</div>
                     <h2>Five service pillars. One connected HR ecosystem.</h2>
                     <div class="middle whitte"></div>
                     <p>Mirashka does not treat recruitment, compliance, payroll, policies and leadership as separate silos. Each service is connected to the larger people operating system of the business. A company may begin with one immediate need — such as hiring, payroll, compliance audit or leadership search — and later expand into a complete HRaaS engagement.</p>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
               <div class="pd_bottom_35"></div>
            <!--===============spacing==============-->
         </div>
      </div>
         <div class="container-fluid pd_zero">
            <div class="row"> 
               <div class="col-lg-12">
                  <div class="project_caro_section style_two light_color">
                     <div class="swiper-container">
                        <div class="row">
                           @foreach($homeHrOsPillars as $pillar)
                           <div class="col project_post style_seven">
                              <div class="image_box">
                                 <img src="{{ asset($pillar['image']) }}" class="img-fluid" alt="img">
                              </div>
                              <div class="content_box ">
                                 <h2 class="title_pro"><a href="{{ url($pillar['route']) }}" rel="bookmark">{!! $pillar['title'] !!}</a></h2>
                                 <p style="color: #fff;border-bottom: 1px solid;border-radius: 7px;">Read More</p>
                                 <div class="image_zoom_box ">
                                    <a href="{{ asset($pillar['image']) }}" data-fancybox="gallery"><span
                                          class="fa fa-plus zoom_icon"></span></a>
                                 </div>
                              </div>
                              <div class="overlay ">
                                 <div class="text ">
                                    <h2 class="title_pro"><a href="{{ url($pillar['route']) }}" rel="bookmark">{!! $pillar['title'] !!}</a></h2>
                                    <p class="short_desc">{{ $pillar['text'] }}</p>
                                    <a href="{{ url($pillar['route']) }}" class="read_more tp_five ">Read More</a>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>                    
               </div>
            </div>
         </div>
      </div>
      
    <!--===============spacing==============-->
      <div class="pd_bottom_65"></div>
    <!--===============spacing==============-->

   </section>

   

   <section class="image-section-two">
      <!--===============spacing==============-->
      <div class="pd_top_90"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
               <div class="image_boxes style_three">
                  <img src="{{ asset('assets/frontend/img/Whatwedo/from-visibility-to-authority.webp') }}" class="background_image" alt="image">

               </div>
            </div>
            <div class="col-xl-6 col-lg-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections ">
                     <div class="before_title"> Mirashka </div>
                     <h2>From Visibility to Authority. From Presence to Impact</h2>

                     <p class="short_desc pt-3">
                        Mirashka is built for leaders and brands that want more than publicity. We design
                        communication and visibility systems that strengthen authority, sharpen perception, and build
                        long-term reputation capital. Whether the objective is media presence, digital thought leadership,
                        podcast-led influence, awards positioning, investor visibility, or regional communication
                        relevance, our role is to convert attention into trust and trust into strategic advantage.</p>
                  </div>
               </div>


            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_90"></div>
      <!--===============spacing==============-->
   </section>



   <section class="service-section bg_op_1 position-relative"
      style="background: url('{{ asset('assets/frontend/images/home-13-service-bg.jpg') }}');">

      <div class="pd_top_90"></div>

      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 m-auto">

               <!-- TITLE AREA -->
               <div class="title_all_box style_six text-center light_color">
                  <div class="title_sections">

                     <!-- SMALL TITLE -->
                     <div class="before_title">
                        <span class="icon-briefcase icon"></span>
                        WHO WE WORK WITH
                     </div>

                     <!-- MAIN HEADING -->
                     <div class="title">
                        Built for Leaders, Brands, and Public-Facing Growth Stories
                     </div>

                     <!-- BODY COPY -->
                     <p class="description_text">
                        Our work is especially relevant for founders building market presence, CXOs shaping external
                        credibility, business owners entering new visibility stages, celebrities and influencers building
                        strategic authority, investor-facing leaders strengthening confidence, and brands that need a
                        sharper public narrative.
                     </p>

                  </div>

                  <div class="pd_bottom_20"></div>
               </div>

            </div>
         </div>

         <!-- SERVICE CARDS -->
         <div class="row">
            <div class="col-lg-12">
               <div class="service_all_styles carousel owl_new_one">

                  <div class="owl_nav_none owl_dots_none owl_type_two theme_carousel owl-theme owl-carousel"
                     data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "3" } , "1000":{ "items" : "3" }}}'>

                     <!-- FOUNDERS -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/founders-&-entrepreneurs.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-user icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Founders & Entrepreneurs</a>
                           </h2>
                           <p>Build leadership authority, shape perception, and create strong market visibility.</p>

                        </div>
                     </div>

                     <!-- CXOs -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/cxos-&-senior-leadership.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-briefcase icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">CXOs & Senior Leadership</a>
                           </h2>
                           <p>Strengthen trust, influence stakeholders, and elevate executive presence.</p>

                        </div>
                     </div>

                     <!-- BUSINESS OWNERS -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/business-owners-&-promoters.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-thumbs-up icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Business Owners & Promoters</a>
                           </h2>
                           <p>Sharpen positioning, enhance credibility, and build long-term brand trust.</p>

                        </div>
                     </div>

                     <!-- CELEBRITIES -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/celebrities-&-influencers.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-star icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Celebrities & Influencers</a>
                           </h2>
                           <p>Convert visibility into a powerful, reputation-led personal brand.</p>

                        </div>
                     </div>

                     <!-- CORPORATES -->
                     <div class="service_box type_one clearfix">
                        <div class="image_box">
                           <img src="{{ asset('assets/frontend/img/Whatwedo/who-we-work/corporates-&-institutions.webp') }}" class="img-fluid"
                              alt="img" />
                           <div class="overlay"></div>
                        </div>
                        <div class="content_box">
                           <div class="icon_box clearfix">
                              <div class="icon_box_inner">
                                 <i class="icon icon-building icon"></i>
                              </div>
                           </div>
                           <h2 class="entry-title">
                              <a href="#">Corporates & Institutions</a>
                           </h2>
                           <p>Align communication with growth, trust, and stakeholder perception.</p>

                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="pd_bottom_90"></div>

      <!-- SHAPE KEEP SAME -->
      <div class="position_absolute curve_shape_bottom_1">
         <!-- SVG remains unchanged -->
      </div>

   </section>


   <!---service--->
   <section class="service-section" id="servicescustom">

      <div class="pd_top_80"></div>

      <div class="container">
         <div class="title_all_box style_seven text-center dark_color">

            <div class="title">One Reputation-Led Approach</div>
            <div class="before_title">OUR SERVICE UNIVERSE</div>
            <p> Our service architecture is designed to cover the full journey of modern visibility and influence.
               Each category solves a different part of the reputation, authority, and leadership-presence puzzle.</p>
            </p>
            <div class="pd_bottom_40"></div>
         </div>

         <!-- SERVICES GRID -->
         <div class="row">

            <!-- 1 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/executive-influence-media-authority.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-megaphone"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="{{ url('/executive-in-fluence-media-authority') }}">Executive Influence & Media Authority</a>
                     </h2>
                     <p class="short_desc">
                        Strategic media visibility, executive profiling, thought leadership placements, and
                        authority-building earned media.
                     </p>
                     <a class="read_more" href="#">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 2 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/cxo-digital-presence-&-thought-leadership.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-user"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">CXO Digital Presence & Thought Leadership</a>
                     </h2>
                     <p class="short_desc">
                        LinkedIn authority, influence coaching, leadership media training, and digital thought-leadership
                        strategy.
                     </p>
                     <a class="read_more" href="{{ url('/digital-presence-thought-leadership') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 3 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/voice-of-leadership-podcast-&-audio-ip.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-mic"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">Voice of Leadership – Podcast & Audio IP</a>
                     </h2>
                     <p class="short_desc">
                        Podcast concept development, executive audio positioning, editorial architecture, and voice-led
                        thought leadership platforms.
                     </p>
                     <a class="read_more" href="{{ url('/voice-of-leadership-podcast-audioip') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 4 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/reputation-capital-&-awards-positioning.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <!-- FIXED ICON -->
                        <span class="icon icon-star"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">Reputation Capital & Awards Positioning</a>
                     </h2>
                     <p class="short_desc">
                        Awards consulting, recognition strategy, founder and CXO positioning, and reputation-strengthening
                        external validation.
                     </p>
                     <a class="read_more" href="{{ url('/reputation-capital-awards-positioning') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 5 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/cxo-presence-&-industry-visibility.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <!-- FIXED ICON -->
                        <span class="icon icon-briefcase"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="{{ url('/cxo-presence-industry-visibility') }}">CXO Presence & Industry Visibility</a>
                     </h2>
                     <p class="short_desc">
                        Speaking engagements, investor visibility, capital markets communication, and strategic stage-led
                        leadership presence.
                     </p>
                     <a class="read_more" href="#">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

            <!-- 6 -->
            <div class="col-xl-4 col-lg-6 col-md-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img src="{{ asset('assets/frontend/img/Whatwedo/one-reputation/regional-impact-communication.webp') }}" class="img-fluid"
                        alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <!-- FIXED ICON -->
                        <span class="icon icon-world"></span>
                     </div>
                     <h2 class="title_service">
                        <a href="#">Regional Impact Communication</a>
                     </h2>
                     <p class="short_desc">
                        Localised media strategy, regional relevance, multi-market communication, and geography-sensitive
                        brand trust building.
                     </p>
                     <a class="read_more" href="{{ url('/regional-impact-communication') }}">Read More <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_80"></div>

   </section>


   <section class="about-section bg_light_1">

      <div class="pd_top_80"></div>

      <div class="container">
         <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">

                     <!-- SMALL TITLE -->
                     <div class="before_title">THE PROBLEM WE SOLVE</div>

                     <!-- MAIN HEADING -->
                     <h2 class="title">
                        Why Leaders and Brands Usually Come to Us
                     </h2>

                     <!-- BODY INTRO -->
                     <p>
                        Most clients do not come because they need PR. They come because something more strategic is
                        happening.
                     </p>

                     <!-- LIST -->
                     <div class="list_item_box style_two style_list">
                        <ul class="list-inline">

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are entering a bigger market
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are becoming more visible
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are preparing for funding, partnerships, expansion, or recognition
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are already doing meaningful work, but the market does not yet see them with the
                                 seriousness they deserve
                              </small>
                           </li>

                           <li class="list_items pd_bottom_10">
                              <small class="d-flex align-items-center">
                                 <span class="icon_bx"><i class="icon-checked"></i></span>
                                 They are present in fragments, but not yet positioned with clarity
                              </small>
                           </li>

                        </ul>
                     </div>

                  </div>
               </div>

               <div class="pd_bottom_10"></div>



            </div>

            <!-- RIGHT IMAGES -->
            <div class="col-xl-6 col-lg-10 col-md-12">
               <div class="image_boxes style_five">

                  <div class="image_box one">
                     <img src="{{ asset('assets/frontend/img/Whatwedo/image_1.webp') }}" class="img-fluid" alt="img">
                  </div>

                  <div class="image_box two">
                     <img src="{{ asset('assets/frontend/img/Whatwedo/image_2.webp') }}" class="img-fluid two" alt="img">
                  </div>

               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_80"></div>

   </section>

   <section class="process-section" id="industries">

      <div class="pd_top_60"></div>

      <div class="container">

         <!-- TITLE -->
         <div class="row">
            <div class="col-lg-7 m-auto">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">

                     <div class="before_title">WHAT CLIENTS GET</div>

                     <div class="title">
                        What Mirashka Helps You Build
                     </div>

                     <!-- SUBHEADLINE -->
                     <div class="small_text_sub">
                        Our work is designed to create business-grade visibility outcomes, not surface-level exposure.
                     </div>

                     <!-- BODY COPY -->
                     <p class="mt-3">
                        Every engagement is built to strengthen how you are perceived, remembered, and trusted in the
                        market.
                        We focus on long-term reputation, not short-term visibility spikes.
                     </p>

                  </div>

                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>

         <!-- VALUE BLOCKS -->
         <div class="row">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-star"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Authority</a></h2>
                     <p>We help leadership and brands look more credible, more serious, and more category-relevant.</p>
                  </div>
               </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-checked"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Trust</a></h2>
                     <p>We strengthen how customers, investors, partners, and the wider market perceive you.</p>
                  </div>
               </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-eye"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Recall</a></h2>
                     <p>Your name, story, and leadership identity stay in the minds of the people who matter.</p>
                  </div>
               </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-briefcase"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Reputation Capital</a></h2>
                     <p>We create assets that generate value across PR, sales, investor trust, and public perception.</p>
                  </div>
               </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-world"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Influence</a></h2>
                     <p>Enter the conversations, platforms, and ecosystems where real market influence is built.</p>
                  </div>
               </div>
            </div>

            <!-- 6 (NEW - BALANCE CARD) -->
            <div class="col-lg-4 col-md-6">
               <div class="choose_box type_two">
                  <div class="icon_box">
                     <div class="icon_box_inner">
                        <span class="icon icon-settings"></span>
                     </div>
                     <span class="icon_bg_rotate"></span>
                  </div>
                  <div class="content_box">
                     <h2><a href="#">Strategic Positioning</a></h2>
                     <p>We align your narrative, visibility, and messaging into a clear, powerful market position.</p>
                  </div>
               </div>
            </div>

         </div>

      </div>

      <div class="pd_bottom_60"></div>

   </section>


   <section class="service-section bg_light_1" id="services">

      <div class="pd_top_80"></div>

      <div class="container">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">
                     <div class="before_title">SECTORS WE UNDERSTAND</div>
                     <h2>Strategic Communication Across High-Impact Sectors</h2>
                     <p>Different industries need different media narratives. We tailor story positioning to sector
                        maturity, audience intent, and stakeholder expectations.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="theme_btn_all color_one text-md-end">
                  <a href="{{ route('strategicmediaplacements') }}" class="theme-btn one">Explore All Services</a>
                  <div class="pd_bottom_30"></div>
               </div>
            </div>

            <div class="pd_bottom_20"></div>
         </div>
      </div>

      <div class="row">
         <div class="col-xxl-1 hidden-xl"></div>
         <div class="col-xxl-10 col-xl-12">

            <div class="service_caro_section carousel style_one">
               <div class="swiper-container" data-swiper='{
                  "autoplay": {"delay": 6000},
                  "freeMode": true,
                  "loop": true,
                  "speed": 1000,
                  "slidesPerView": 4,
                  "breakpoints": {
                  "1200": {"slidesPerView": 4},
                  "1024": {"slidesPerView": 4},
                  "768": {"slidesPerView": 3},
                  "576": {"slidesPerView": 1},
                  "0": {"slidesPerView": 1}
                  }
               }'>

                  <div class="swiper-wrapper">

                     <!-- 1 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/executive.png') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/Executive.svg') }}"></span>
         </div>
         <h2 class="title_service"><a href="#">Enterprise Tech & B2B SaaS</a></h2>
         <p class="text-white">
            Positioning products, platforms, and founders through strategic storytelling across high-trust business and technology media platforms globally.
         </p>
      </div>
   </div>
</div>

<!-- 2 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/ai-deep-tech-&-innovation.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/CXO-Digital.svg') }}"></span>
         </div>
         <h2 class="title_service">
            <a href="{{ route('aideeptech') }}">AI, Deep Tech & Innovation</a>
         </h2>
         <p class="text-white">
            Translating complex technologies into clear, compelling narratives that media, investors, and stakeholders can understand and engage with effectively.
         </p>
      </div>
   </div>
</div>

<!-- 3 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/health-&-wellness.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/Voice.svg') }}"></span>
         </div>
         <h2 class="title_service"><a href="#">Health & Wellness</a></h2>
         <p class="text-white">
            Building expert-led credibility through trusted storytelling that connects with audiences while reinforcing long-term value, care, and impact.
         </p>
      </div>
   </div>
</div>

<!-- 4 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/BFSI-&-fintech.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/Reputation.svg') }}"></span>
         </div>
         <h2 class="title_service">
            <a href="{{ route('bfsifintech') }}">BFSI & Fintech</a>
         </h2>
         <p class="text-white">
            Driving trust through consistent communication, leadership visibility, and credibility-focused narratives across evolving financial and regulatory ecosystems.
         </p>
      </div>
   </div>
</div>

<!-- 5 -->
<div class="swiper-slide">
   <div class="service_carousel style_one">
      <div class="image">
         <div class="overlay"></div>
         <img src="{{ asset('assets/frontend/img/Whatwedo/sectors/luxury-&-premium-brands.webp') }}">
      </div>
      <div class="content">
         <div class="icon_box">
            <span><img src="{{ asset('assets/frontend/img/CXO.svg') }}"></span>
         </div>
         <h2 class="title_service">
            <a href="{{ route('luxurybrands') }}">Luxury & Premium Brands</a>
         </h2>
         <p class="text-white">
            Crafting aspirational brand narratives that enhance perception, desirability, and visibility while maintaining exclusivity and strong market positioning.
         </p>
      </div>
   </div>
</div>

                  </div>

                  <div class="p_pagination">
                     <div class="swiper-pagination"></div>
                  </div>

               </div>
            </div>

         </div>
         <div class="col-xxl-1 hidden-xl"></div>
      </div>

      <div class="pd_bottom_80"></div>

   </section>
   <section class="content-section">

      <div class="pd_top_50"></div>

      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 m-auto">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Service Delivery Methodology</div>
                     <div class="title">From Discovery to Dominance</div>
                     <div class="small_text_sub">
                        A structured, strategic approach that transforms visibility into authority, influence, and
                        long-term market impact.
                     </div>
                  </div>
                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>

         <div class="row">

            <!-- 01 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">01</span>
                     <div class="text_box">
                        <h2><a href="#">Discover</a></h2>
                        <p>We understand your story, business context, visibility gap, and long-term ambition.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 02 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">02</span>
                     <div class="text_box">
                        <h2><a href="#">Diagnose</a></h2>
                        <p>We identify gaps in perception, positioning, communication, and market presence.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 03 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">03</span>
                     <div class="text_box">
                        <h2><a href="#">Strategise</a></h2>
                        <p>We build a roadmap aligned with your audience, category, timing, and business goals.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 04 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">04</span>
                     <div class="text_box">
                        <h2><a href="#">Craft</a></h2>
                        <p>We shape narratives, media assets, and visibility architecture to create real impact.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 05 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">05</span>
                     <div class="text_box">
                        <h2><a href="#">Engage</a></h2>
                        <p>We activate the right media, digital, event, and influence channels.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 06 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">06</span>
                     <div class="text_box">
                        <h2><a href="#">Amplify</a></h2>
                        <p>We extend each visibility outcome across platforms and stakeholder touchpoints.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- 07 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">07</span>
                     <div class="text_box">
                        <h2><a href="#">Report & Optimise</a></h2>
                        <p>We continuously refine strategy so visibility builds authority and long-term momentum.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="choose_box type_one">
                  <div class="image_box">
                     <img src="{{ asset('assets/frontend/img/CXO-level.svg') }}" class="img-fluid svg_image" alt="icon">
                  </div>
                  <div class="content_box">
                     <span class="step_no">08</span>
                     <div class="text_box">
                        <h2><a href="#">Sustain & Scale</a></h2>
                        <p>We build continuity through ongoing media momentum, strengthening long-term visibility,
                           authority, and brand recall.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>
   <section class="content-section bg_light_1">

      <div class="pd_top_90"></div>

      <div class="container">
         <div class="row gutter_15px">

            <!-- LEFT IMAGE BLOCK (UNCHANGED DESIGN, UPDATED TEXT) -->
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
               <div class="creote-image-box image-box-overlap">
                  <div class="image_boxes style_eight">
                     <img src="{{ asset('assets/frontend/img/Whatwedo/why.webp') }}"
                        class="img-fluid image_fit height_500px pd_right_30" alt="img">
                     <div class="row no-space">
                        <div class="col-lg-5"></div>
                        <div
                           class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                           style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                           <div class="title_all_box style_one light_color">
                              <div class="title_sections left">
                                 <div class="before_title color_white">Why Mirashka</div>
                                 <p class="color_white">
                                    A reputation-led approach designed for leaders, brands, and high-visibility growth
                                    journeys
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-xl-6 col-lg-12 pd_left_35">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections">
                     <div class="before_title">WHY Mirashka</div>
                     <h2 class="title">Why Mirashka Is a Different Kind of Partner</h2>

                  </div>
               </div>

               <!-- LIST START -->
               <div class="list_item_box style_two">
                  <ul class="list-inline">

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We build authority, not noise —</strong> Visibility is never random. We create
                              structured systems that strengthen perception, credibility, and long-term market positioning.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We work at leadership level —</strong> Our thinking is built for founders, CXOs,
                              public figures, and brands where trust, perception, and reputation directly impact growth.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We connect services into one reputation engine —</strong> Media, digital presence,
                              podcasts, awards, speaking, and regional communication work together—not in silos.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We think in business outcomes —</strong> The goal is not coverage alone, but trust,
                              relevance, distinction, and stakeholder action.
                           </a>
                        </small>
                     </li>

                     <li class="list_items mr_bottom_15">
                        <small class="d-flex align-items-start">
                           <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                           <a class="nav_link" href="#">
                              <strong>We understand premium positioning —</strong> For high-visibility leaders and brands,
                              how you are perceived matters as much as where you appear.
                           </a>
                        </small>
                     </li>

                  </ul>
               </div>
               <!-- LIST END -->

               <div class="pd_bottom_20"></div>

               <div class="theme_btn_all color_one">
                  <a href="{{ route('projectenquiries') }}" class="theme-btn one">
                     Start a Conversation
                  </a>
               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_90"></div>

   </section>
     @include('frontend.layouts.common.sections.clients')
   @include('frontend.layouts.common.sections.casestudies')
    <section class="faqs-section">

      <div class="pd_top_80"></div>

      <div class="container">

         <!-- TITLE -->
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_seven text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">FAQs</div>
                     <div class="title">Frequently Asked Questions</div>
                     <div class="small_text_sub">Clarity on how we work, who we work with, and what to expect</div>
                  </div>
                  <div class="pd_bottom_40"></div>
               </div>
            </div>
         </div>

         <div class="row">

            <!-- LEFT SIDE (UNCHANGED IMAGES + METRICS) -->
            <div class="col-xl-3 col-lg-6 mb-5">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq1.jpg') }}" class="simp_img cover-parallax">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Client Satisfaction <span>98%</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" style="width: 98%;"></div>
                  </div>
               </div>
            </div>

            <div class="col-xl-3 col-lg-6 mb-5">
               <div class="simple_image_boxes height_360px parallax_cover">
                  <img src="{{ asset('assets/frontend/img/faq2.jpg') }}" class="simp_img cover-parallax">
               </div>
               <div class="mr_bottom_25"></div>
               <div class="progress_bar">
                  <h2>Engagement Impact <span>100+</span></h2>
                  <div class="bar">
                     <div class="bar-inner count-bar counted" style="width: 100%;"></div>
                  </div>
               </div>
            </div>

            <!-- FAQ RIGHT -->
            <div class="col-xl-6 col-lg-12">
               <div class="faq_section type_one">
                  <div class="block_faq">
                     <div class="accordion">
                        <dl>

                           <!-- 1 -->
                           <dt class="faq_header active">
                              <span class="icon-play"></span> Do you only work with CXOs and founders?
                           </dt>
                           <dd class="accordion-content" style="display:block;">
                              <p>
                                 No. We also work with business owners, brands, institutions, public figures, and
                                 high-visibility professionals who need stronger authority and strategic communication.
                              </p>
                           </dd>

                           <!-- 2 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Do clients usually take one service or multiple?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 It depends on the need. Some clients begin with one service, while others engage across
                                 media, digital presence, awards, speaking, and reputation-building together.
                              </p>
                           </dd>

                           <!-- 3 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Is this only for large brands?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 No. It is equally valuable for emerging leaders and growth-stage businesses that need
                                 stronger market credibility.
                              </p>
                           </dd>

                           <!-- 4 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> What makes your approach different from a traditional PR
                              agency?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 Our approach is reputation-led, leadership-centric, and strategy-driven. We focus on how
                                 visibility translates into authority and long-term business relevance.
                              </p>
                           </dd>

                           <!-- 5 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Can this support investor trust, partnerships, or market
                              expansion?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 Yes. Strong communication and visibility often improve stakeholder confidence across
                                 funding, partnerships, and expansion.
                              </p>
                           </dd>

                           <!-- 6 -->
                           <dt class="faq_header">
                              <span class="icon-play"></span> Can celebrities and influencers also use these services?
                           </dt>
                           <dd class="accordion-content">
                              <p>
                                 Yes. Especially when the goal is to move from visibility alone to stronger authority,
                                 trust, and long-term positioning.
                              </p>
                           </dd>

                        </dl>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <div class="pd_bottom_60"></div>

   </section>
   @include('frontend.layouts.common.sections.success')








@endsection
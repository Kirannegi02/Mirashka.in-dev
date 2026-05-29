


<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('frontend.pages.home-sections.home-typography', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
p.gold {
   margin-bottom: 0;
   margin-top: 10px;
}

.textbg {
   background-color: #FFFFFF;
   padding: 5px 10px 4px 10px !important;
   border-radius: 8px !important;
   width: fit-content;
}

.client_logo_carousel .swiper-slide .image img {
     box-shadow: none; 
}
.client_logo_carousel .swiper-slide .image img:hover {
    box-shadow: none;
}
</style>
<div id="content" class="site-content mirashka-home">

   <?php echo $__env->make('frontend.pages.home-sections.homeBanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!---about us  --->
   <style>
      .about-section .who-we-are-tab-icon {
         margin-right: 6px;
         font-size: 1.05em;
         vertical-align: -2px;
         color: var(--primary-color-one, #006039);
      }
      .about-section .tabs_header ul li a.active .who-we-are-tab-icon {
         color: inherit;
      }
   </style>
   <section class="about-section" id="about">
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
               <div class="image_boxes style_one">
                  <div class="image one">
                     <img src="<?php echo e(asset('assets/frontend/img/hraas/hraas-v3-partner.png')); ?>" class="img-fluid" alt="Business leader with HR consultant" width="486" height="729" loading="lazy" />
                  </div>
                  <div class="image two">
                     <img src="<?php echo e(asset('assets/frontend/img/workforce/wfm-reporting-team-hands.png')); ?>" class="img-fluid" alt="Team collaboration and onboarding" width="241" height="241" loading="lazy" />

                  </div>
                  <div class="year_of_experience">
                     <div class="year">15+</div> <!-- Changed here -->
                     <div class="content">
                        <h2>Years of Excellence</h2>
                        <span class="icon-thumbs-up"></span>
                     </div>
                  </div>

               </div>
            </div>
            <div class="col-xl-6 col-lg-10 col-md-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">
                     <div class="before_title">Who We Are</div>
                     <h2>We Build People Systems That Help Businesses Scale</h2>
                     <div class="description_box">
                        <p class="mb-0">Mirashka is a Human Resource, staffing and HRaaS partner for startups, MSMEs, family businesses, franchises and growing companies. We help organizations find the right talent, strengthen leadership, manage compliance, streamline HR operations and build people-first systems that support business growth.</p>
                        <p>At Mirashka, we believe the right people shape the future of businesses. Our mission is to connect visionary leaders with transformative opportunities while helping companies build structured, compliant and high-performing teams.</p>
                     </div>
                  </div>
               </div>

               <div class="tabs_all_box tabs_all_box_start type_three mt-3">
                  <div class="tab_over_all_box">
                     <div class="tabs_header clearfix">
                        <ul class="showcase_tabs_btns nav-pills nav clearfix">
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link active" data-tab="#tabtabone"><i class="ri-focus-3-line who-we-are-tab-icon" aria-hidden="true"></i> Mission</a>
                           </li>
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link" data-tab="#tabtabtwo"><i class="ri-eye-line who-we-are-tab-icon" aria-hidden="true"></i> Vision</a>
                           </li>
                           <li class="nav-item">
                              <a class="s_tab_btn nav-link" data-tab="#tabtabthree"><i class="ri-heart-3-line who-we-are-tab-icon" aria-hidden="true"></i> Values</a>
                           </li>
                        </ul>
                     </div>
                     <div class="s_tab_wrapper">
                        <div class="s_tabs_content">
                           <div class="s_tab fade active-tab show" id="tabtabone">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>To democratize professional HR support through flexible HRaaS models, helping new entrepreneurs, startups and growing companies access the tools, talent and HR systems they need to build and scale.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="s_tab fade" id="tabtabtwo">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>To become the go-to HR partner for emerging businesses and established enterprises by redefining workforce management with agile, affordable and expert-led HR solutions.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="s_tab fade" id="tabtabthree">
                              <div class="tab_content one">
                                 <div class="content_bx">
                                    <p>Integrity, clarity, responsiveness, compliance discipline, people-first thinking and business ownership guide every Mirashka HR engagement.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="theme_btn_all color_one">
                  <a href="<?php echo e(route('aboutus')); ?>" class="theme-btn one">More About Mirashka HR</a>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_40"></div>
         <!--===============spacing==============-->
         <div class="row">
            <div class="col-xl-6 col-lg-6 mb-5 mb-lg-0 mb-xl-0">
               <div class="link_box_contents style_one">
                  <div class="link_content_bx">
                     <div class="image_box">
                        <img src="<?php echo e(asset('assets/frontend/img/1.webp')); ?>" alt="discover how we transform" width="138" height="190">
                     </div>
                     <div class="con_box">
                        <h2>Discover how we help businesses build stronger people systems</h2>
                        <a href="<?php echo e(route('aboutus')); ?>">More About Mirashka HR <i class="icon-right-arrow-long"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="link_box_contents style_two">
                  <div class="link_content_bx">
                     <div class="con_box">
                        <h2>Why India's CXOs choose Mirashka</h2>
                        <a href="https://calendly.com/elevateonemedia/30min">Get Appointment <i class="icon-right-arrow-long"></i></a>
                     </div>
                     <div class="image_box">
                        <img src="<?php echo e(asset('assets/frontend/img/2.webp')); ?>" alt="why india's cxos choose" width="138" height="190">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
   </section>
   <!---about us  --->

   
   <style>
      .home-why-mirashka {
         padding: 88px 0 96px;
         background: #e5e5e5;
         overflow: hidden;
      }
      .home-why-mirashka__inner {
         max-width: 1400px;
         margin: 0 auto;
         padding: 0 28px;
      }
      .home-why-mirashka__header {
         text-align: center;
         max-width: 1100px;
         margin: 0 auto 52px;
         padding: 0;
      }
      .home-why-mirashka__eyebrow {
       font-size: 22px;
       line-height: 40px;
       font-weight: 700;
       padding: 0px 0px 10px 0px;
       text-decoration: underline;
       font-family: var(--creote-family-one);
      }
      .home-why-mirashka__title {
         font-size: clamp(1.75rem, 3.8vw, 2.65rem);
         font-weight: 800;
         line-height: 1.2;
         color: #fff;
         margin: 0 0 16px;
      }
      .home-why-mirashka__tagline {
         font-size: 1.05rem;
         font-weight: 600;
         color: rgba(255, 255, 255, 0.92);
         margin: 0 0 14px;
         line-height: 1.5;
      }
      .home-why-mirashka__intro {
         font-size: 1rem;
         line-height: 1.75;
         color: rgba(255, 255, 255, 0.78);
         margin: 0;
      }
      .home-why-mirashka__stage {
         display: grid;
         grid-template-columns: minmax(0, 1fr) minmax(320px, 380px) minmax(0, 1fr);
         gap: 32px 56px;
         align-items: center;
         width: 100%;
         margin: 0 auto;
         padding: 0;
      }
      .home-why-mirashka__col {
         display: flex;
         flex-direction: column;
         gap: 0;
      }
      .home-why-mirashka__col--left {
         align-items: flex-end;
         text-align: right;
      }
      .home-why-mirashka__col--right {
         align-items: flex-start;
         text-align: left;
      }
      .home-why-mirashka__card {
    position: relative;
    padding: 15px;
    width: 100%;
    background: #006039;
    margin: 16px 0;
    border-radius: 10px;
}
      .home-why-mirashka__card + .home-why-mirashka__card {
         border-top: 1px solid rgba(125, 206, 168, 0.18);
      }
      .home-why-mirashka__card-num {
         position: absolute;
         top: 18px;
         font-size: clamp(3.5rem, 6vw, 5rem);
         font-weight: 800;
         line-height: 1;
         color: rgba(255, 255, 255, 0.06);
         pointer-events: none;
         user-select: none;
      }
      .home-why-mirashka__col--left .home-why-mirashka__card-num { right: 0; }
      .home-why-mirashka__col--right .home-why-mirashka__card-num { left: 0; }
      .home-why-mirashka__card-icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 56px;
          height: 56px;
          margin-bottom: 16px;
          color: #006039;
          line-height: 1;
          background: #fff;
          border-radius: 10px;
      }
      .home-why-mirashka__card h3 {
         font-size: 1.1rem;
         font-weight: 700;
         color: #fff;
         margin: 0 0 10px;
         line-height: 1.35;
         position: relative;
         z-index: 1;
      }
      .home-why-mirashka__card p {
         font-size: 0.92rem;
         line-height: 1.65;
         color: rgba(255, 255, 255, 0.75);
         margin: 0;
         position: relative;
         z-index: 1;
      }
      .home-why-mirashka__center {
         flex-shrink: 0;
         width: 100%;
         max-width: 380px;
      }
      .home-why-mirashka__center img {
         display: block;
         width: 100%;
         height: auto;
         min-height: 400px;
         max-height: 500px;
         object-fit: cover;
         border-radius: 8px;
         box-shadow: 0 28px 64px rgba(0, 0, 0, 0.45);
         border: 1px solid rgba(125, 206, 168, 0.2);
      }
      .home-why-mirashka__cta-wrap {
         text-align: center;
         margin-top: 20px;
         padding: 0 15px;
      }
      @media (max-width: 991px) {
         .home-why-mirashka__stage {
            grid-template-columns: 1fr;
            gap: 0;
         }
         .home-why-mirashka__center {
            width: 100%;
            max-width: 360px;
            margin: 0 auto 8px;
            order: -1;
         }
         .home-why-mirashka__col--left,
         .home-why-mirashka__col--right {
            align-items: stretch;
            text-align: left;
         }
         .home-why-mirashka__card {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
         }
         .home-why-mirashka__col--left .home-why-mirashka__card-num { left: 0; right: auto; }
      }
   </style>
   <section class="content-section home-why-mirashka" id="home-why-mirashka">
      <div class="home-why-mirashka__inner">
         <header class="home-why-mirashka__header">
            <span class="home-why-mirashka__eyebrow">Why Mirashka</span>
            <h2 class="home-why-mirashka__title text-dark">Why Growing Businesses Choose Mirashka HR</h2>
            <div class="middle"></div>
            <p class="home-why-mirashka__intro text-dark">Because Mirashka does not work like a conventional placement agency. We work as an extended people partner — combining HR strategy, recruitment execution, payroll coordination, legal and compliance awareness, leadership hiring and HR technology into one practical operating model.</p>
         </header>

         <div class="home-why-mirashka__stage">
            <div class="home-why-mirashka__col home-why-mirashka__col--left">
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">01</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-briefcase-4-line"></i></span>
                  <h3>End-to-End HR Solutions</h3>
                  <p>Recruitment, compliance, payroll, documentation, legal support and workforce advisory under one roof.</p>
               </article>
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">02</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-user-star-line"></i></span>
                  <h3>Leadership Hiring Expertise</h3>
                  <p>Specialized search support for senior roles, CXOs and transformational leaders.</p>
               </article>
            </div>

            <div class="home-why-mirashka__center">
               <img src="<?php echo e(asset('assets/frontend/img/home/home-why-mirashka-hero.png')); ?>" alt="Founder" loading="lazy" width="300" height="420">
               <div class="home-why-mirashka__cta-wrap">
                  <a href="<?php echo e(url('contact-us')); ?>" class="home-why-mirashka__cta theme-btn one" target="_blank" rel="noopener noreferrer">
                     Book Your 30-Minute Discovery Call <i class="ri-arrow-right-line" aria-hidden="true"></i>
                  </a>
               </div>
            </div>

            <div class="home-why-mirashka__col home-why-mirashka__col--right">
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">03</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-shield-check-line"></i></span>
                  <h3>Tailored Legal &amp; Compliance Support</h3>
                  <p>Employment-law-aligned guidance, policy support, audits and workplace risk mitigation.</p>
               </article>
               <article class="home-why-mirashka__card">
                  <span class="home-why-mirashka__card-num" aria-hidden="true">04</span>
                  <span class="home-why-mirashka__card-icon" aria-hidden="true"><i class="ri-line-chart-line"></i></span>
                  <h3>HRaaS Flexibility</h3>
                  <p>Scalable HR support designed for startups, MSMEs and growing businesses that need expert HR without heavy fixed cost.</p>
               </article>
            </div>
         </div>

      </div>
   </section>

   
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
         padding: 48px 24px 0;
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
         color: #fff;
         position: relative;
      }
      .home-growth-reality__story::after {
         content: '';
         position: absolute;
         top: 0;
         right: 0;
         width: 120px;
         height: 100%;
         background: linear-gradient(90deg, transparent, rgba(125, 206, 168, 0.06));
         pointer-events: none;
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
          font-size: 32px;
          font-weight: 800;
          color: #006039;
          text-align: center;
          text-decoration: underline;
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
      <div class="home-growth-reality__bg" aria-hidden="true"></div>
      <div class="home-growth-reality__inner">
         <div class="home-growth-reality__shell hgr-reveal hgr-reveal--scale" data-hgr-delay="1">
            <div class="home-growth-reality__story hgr-reveal hgr-reveal--left" data-hgr-delay="2">
               <span class="home-growth-reality__label-pill">
                  <i class="ri-pulse-line" aria-hidden="true"></i> The Growth Reality
               </span>
               <h2 class="home-growth-reality__title" id="home-growth-reality-title">
                  <span class="home-growth-reality__title-lead">When business grows,</span>
                  <span class="home-growth-reality__title-accent">HR cannot remain informal.</span>
               </h2>
               <ol class="home-growth-reality__timeline">
                  <li>
                     <div class="home-growth-reality__timeline-marker">
                        <span class="home-growth-reality__timeline-dot"></span>
                        <span class="home-growth-reality__timeline-line"></span>
                     </div>
                     <div>
                        <span class="home-growth-reality__timeline-step">Stage 01 — Early days</span>
                        <p>In the beginning, a company can manage people through founder decisions, phone calls, spreadsheets and informal processes.</p>
                     </div>
                  </li>
                  <li>
                     <div class="home-growth-reality__timeline-marker">
                        <span class="home-growth-reality__timeline-dot"></span>
                        <span class="home-growth-reality__timeline-line"></span>
                     </div>
                     <div>
                        <span class="home-growth-reality__timeline-step">Stage 02 — Scale breaks</span>
                        <p>As the team expands, the same approach creates delays, confusion and risk. Hiring becomes urgent. Payroll needs accuracy. Policies and compliance can no longer be ignored.</p>
                     </div>
                  </li>
                  <li>
                     <div class="home-growth-reality__timeline-marker">
                        <span class="home-growth-reality__timeline-dot"></span>
                     </div>
                     <div>
                        <span class="home-growth-reality__timeline-step">Stage 03 — HR as growth system</span>
                        <p>HR is no longer administrative alone — it becomes the operating system for people, performance and compliant growth.</p>
                     </div>
                  </li>
               </ol>
               <div class="home-growth-reality__solution">
                  <span class="home-growth-reality__solution-icon" aria-hidden="true"><i class="ri-shield-check-line"></i></span>
                  <p>Mirashka steps in at this point to convert scattered HR activities into a structured, measurable and compliant people operating system.</p>
               </div>
            </div>
            <div class="home-growth-reality__aside hgr-reveal hgr-reveal--right" data-hgr-delay="2">
               <figure class="home-growth-reality__visual hgr-reveal" data-hgr-delay="3">
                  <img
                     src="<?php echo e(asset('assets/frontend/img/home/home-growth-reality.png')); ?>"
                     alt="Before and after HR transformation — from scattered spreadsheets to a structured HR dashboard"
                     loading="lazy"
                     width="640"
                     height="400"
                  >
                  <span class="home-growth-reality__visual-badge" aria-hidden="true"><i class="ri-arrow-right-line"></i></span>
                  <span class="home-growth-reality__visual-tag home-growth-reality__visual-tag--before">Informal</span>
                  <span class="home-growth-reality__visual-tag home-growth-reality__visual-tag--after">Structured</span>
               </figure>
               <div class="home-growth-reality__pains hgr-reveal" data-hgr-delay="4">
                  <h3 class="home-growth-reality__pains-title">When headcount grows, these show up first</h3>
                  <ul class="home-growth-reality__pain-list hgr-stagger">
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-time-line" aria-hidden="true"></i>
                        <span>Hiring delays</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-calculator-line" aria-hidden="true"></i>
                        <span>Payroll confusion</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-file-warning-line" aria-hidden="true"></i>
                        <span>Weak documentation</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-alert-line" aria-hidden="true"></i>
                        <span>Compliance exposure</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-focus-2-line" aria-hidden="true"></i>
                        <span>Unclear roles and KRAs</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-emotion-unhappy-line" aria-hidden="true"></i>
                        <span>Employee dissatisfaction</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-user-star-line" aria-hidden="true"></i>
                        <span>Founder dependency</span>
                     </li>
                     <li class="home-growth-reality__pain-item">
                        <i class="ri-team-line" aria-hidden="true"></i>
                        <span>Leadership gaps</span>
                     </li>
                  </ul>
               </div>
               <div class="home-growth-reality__cta-panel hgr-reveal" data-hgr-delay="5">
                  <div class="home-growth-reality__cta-copy">
                     <strong>Know where your HR stands today</strong>
                     <span>Free readiness review — gaps, risks and next steps.</span>
                  </div>
                  <a href="<?php echo e(route('projectenquiries')); ?>" class="home-growth-reality__cta theme-btn one">
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

   
   <?php
      $homeHrOsPillars = [
         [
            'title' => 'Compliance & Workplace Integrity',
            'text' => 'Proactive legal and HR safeguards to protect business and workforce.',
            'image' => 'assets/img/piller1.png',
            'route' => '#piller-1',
         ],
         [
            'title' => 'Workforce Management & Process Optimization',
            'text' => 'Payroll, policy, records and remote HR systems that improve operational efficiency.',
            'image' => 'assets/img/piller2.png',
            'route' => '#piller-2',
         ],
         [
            'title' => 'Leadership & Organizational Excellence',
            'text' => 'Leadership hiring, board advisory, succession planning, talent strategy and transformation.',
            'image' => 'assets/img/piller3.png',
            'route' => '#piller-3',
         ],
         [
            'title' => 'Talent Acquisition & Staffing Excellence',
            'text' => 'Flexible hiring, IT staffing, general staffing, RPO, NAPS and executive search.',
            'image' => 'assets/img/piller4.png',
            'route' => '#piller-4',
         ],
         [
            'title' => 'HR as a <br> Service',
            'text' => 'Your dedicated HR partner for outsourcing, employer branding, engagement, retention and HR technology.',
            'image' => 'assets/img/piller5.png',
            'route' => '#piller-5',
         ],
      ];
   ?>
<style>
.title_all_box.style_three .title_sections .before_title::before {
    background: #ffffff;
}
</style>
   <section class="project-section bg_dark_1">
      <!--===============spacing==============-->
         <div class="pd_top_85"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 col-sm-12 mb-sm-5 mb-md-0 mb-lg-0 mb-xl-0">
               <div class="title_all_box style_three light_color">
                  <div class="title_sections three left">
                     <div class="before_title text-white">The Mirashka Model</div>
                     <h2>One HR operating system. Five connected service pillars.</h2>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
               <div class="theme_btn_all color_one text-md-end">
                  <a href="#" target="_blank" rel="nofollow" class="home-growth-reality__cta theme-btn one">Explore HR Services <i class="icon-right-arrow"></i></a>
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
                           <?php $__currentLoopData = $homeHrOsPillars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pillar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="col project_post style_seven">
                              <div class="image_box">
                                 <img src="<?php echo e(asset($pillar['image'])); ?>" class="img-fluid" alt="img">
                              </div>
                              <div class="content_box ">
                                 <h2 class="title_pro"><a href="<?php echo e(url($pillar['route'])); ?>" rel="bookmark"><?php echo $pillar['title']; ?></a></h2>
                                 <p style="color: #fff;border-bottom: 1px solid;border-radius: 7px;">Read More</p>
                                 <div class="image_zoom_box ">
                                    <a href="<?php echo e(asset($pillar['image'])); ?>" data-fancybox="gallery"><span
                                          class="fa fa-plus zoom_icon"></span></a>
                                 </div>
                              </div>
                              <div class="overlay ">
                                 <div class="text ">
                                    <h2 class="title_pro"><a href="<?php echo e(url($pillar['route'])); ?>" rel="bookmark"><?php echo $pillar['title']; ?></a></h2>
                                    <p class="short_desc"><?php echo e($pillar['text']); ?></p>
                                    <a href="<?php echo e(url($pillar['route'])); ?>" class="read_more tp_five ">Read More</a>
                                 </div>
                              </div>
                           </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<style>
#piller-1 .icon_box_all.style_nine {
   padding: 25px 25px 10px 25px;
   min-height: 302px;
}

#piller-2 .service_content.icon_yes {
    background: #fff;
}
.nain .rounded_top_left_30 {
    border-top-left-radius: 30px !important;
}
.nain .rounded_bottom_right_30 {
    border-bottom-right-radius: 30px !important;
}
.nain .process_box.style_two .process_box_outer_two p {
    margin-bottom: 0;
}
#piller-4 .service_post.style_three .text_box .text_box_inner {
    padding: 20px 28px 10px;
    background: #e3e3e3;
}
</style>
   <section class="process-section" id="piller-1">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <div class="before_title">Pillar 01</div>
                     <h2 class="title">Protect your business before HR risks become disputes.</h2>
                     <div class="middle"></div>
                     <p>Compliance is not only about documents. It is about creating a workplace where every people decision is backed by clarity, policy, fairness and legal awareness. Mirashka helps businesses build safer, compliant and more trustworthy workplaces.</p>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero">
               <div class="icon_box_all style_nine  border_r_0">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="<?php echo e(asset('assets/frontend/images/010-job-search.png')); ?>" class="img-fluid svg_image" alt="icon png">
                     </div>
                     <div class="text_box">
                        <h2><a href="javascript:void();">Expert Legal & HR Consultations</a></h2>
                        <p>Real-time guidance on employment, compliance, workforce and people-related issues.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero">
               <div class="icon_box_all style_nine bg_light_2 border_r_0">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="<?php echo e(asset('assets/frontend/images/process-icon-im-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                     </div>
                     <div class="text_box">
                        <h2><a href="javascript:void();">Policy & Documentation Excellence</a></h2>
                        <p>Customized employee handbooks, HR policies, formats, letters and internal process documents.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero">
               <div class="icon_box_all style_nine  border_r_0">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="<?php echo e(asset('assets/frontend/images/service-ico-2.png')); ?>" class="img-fluid svg_image" alt="icon png">
                     </div>
                     <div class="text_box">
                        <h2><a href="javascript:void();">Compliance & Risk Assessments</a></h2>
                        <p>HR audits, workplace checks and risk reviews to identify compliance gaps early.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero">
               <div class="icon_box_all style_nine bg_light_2">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="<?php echo e(asset('assets/frontend/images/process-icon-im-2.png')); ?>" class="img-fluid svg_image" alt="icon png">
                     </div>
                     <div class="text_box">
                        <h2><a href="javascript:void();">Workplace Ethics & Prevention Training</a></h2>
                        <p>POSH-compliant training and workplace ethics programs for a safe and inclusive culture.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_90"></div>
      <!--===============spacing==============-->
   </section>

   <section class="service-section" id="piller-2" style="background: #e5e5e5;">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_two text-center dark_color">
                  <div class="title_sections two">
                     <div class="title-before">Pillar 02</div>
                     <h2>Streamline daily HR operations so leadership can focus on growth.</h2>
                     <div class="middle"></div>
                     <p>A growing company needs HR processes that are accurate, repeatable and easy to monitor. Mirashka helps businesses organize policies, payroll, employee records, onboarding, exits and remote HR support into a structured operating rhythm.</p>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_10"></div>
            <!--===============spacing==============-->
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img loading="lazy" width="350" height="220" src="<?php echo e(asset('assets/img/policy-design.png')); ?>" alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-thumbs-up icon"></span>
                     </div>
                     <h2 class="title_service"><a href="#" rel="bookmark">Policy Design & Compliance Audit</a></h2>
                     <p class="short_desc">Development and regular auditing of HR policies aligned with law and business goals.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img loading="lazy" width="350" height="220" src="<?php echo e(asset('assets/img/payrole.png')); ?>" alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-thumbs-up icon"></span>
                     </div>
                     <h2 class="title_service"><a href="#" rel="bookmark">Payroll Outsourcing & Administration</a></h2>
                     <p class="short_desc">Accurate salary processing support, tax compliance coordination and benefits administration.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_post style_one">
                  <div class="image">
                     <div class="overlay"></div>
                     <img loading="lazy" width="350" height="220" src="<?php echo e(asset('assets/img/remote-hr.png')); ?>" alt="img">
                  </div>
                  <div class="service_content icon_yes">
                     <div class="icon_box">
                        <span class="icon icon-thumbs-up icon"></span>
                     </div>
                     <h2 class="title_service"><a href="#" rel="bookmark">Remote HR<br> Solutions</a></h2>
                     <p class="short_desc">Virtual HR services acting as an external HR team for recruitment, onboarding, records and compliance.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
   </section>

   <section class="process-section position-relative z_99 nain" id="piller-3">  
      <div class="pd_bottom_65"></div>
      <div class="container">
         <div class="title_all_box style_one text-center dark_color">
            <div class="title_sections">
               <div class="before_title">Pillar 03</div>
               <h2 class="title">Businesses scale when leadership becomes stronger.</h2>
               <div class="middle"></div>
               <p>Hiring more people does not automatically create growth. Growth needs leaders who can think strategically, execute consistently, inspire teams and build systems. Mirashka helps organizations identify, assess, hire and develop leadership talent for long-term success.</p>
            </div>
         </div>
         <div class="row">

            <!-- Box 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 rounded_top_left_30 p-5 bg_dark_1 border_light_color">
               <div class="process_box style_two">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/service-ico-n-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#" class="color_white">Executive Search & Leadership Hiring</a></h2>
                     </div>
                     <p class="color_white">
                        Finding transformational leaders aligned with vision, culture and business goals.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pd_zero bg_light_1">
               <div class="process_box style_two dark_color p-5 bg_op_1">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/process-icon-im-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#">Board & CEO Advisory</a></h2>
                     </div>
                     <p>
                        Strategic advice for governance, decision-making and long-term planning.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 p-5 bg_dark_1">
               <div class="process_box style_two">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/service-ico-n-2.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#" class="color_white">CEO Succession & Performance Acceleration</a></h2>
                     </div>
                     <p class="color_white">
                        Succession planning and performance support for new leadership transitions.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 4 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 p-5 bg_light_1">
               <div class="process_box style_two dark_color">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/process-icon-im-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#">Executive Assessment & Leadership Consulting</a></h2>
                     </div>
                     <p>
                        Leadership evaluations and development roadmaps aligned with business strategy.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 5 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 p-5 bg_dark_1">
               <div class="process_box style_two">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/service-ico-n-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#" class="color_white">HR & Talent Strategy Advisory</a></h2>
                     </div>
                     <p class="color_white">
                        Workforce planning, culture transformation and future talent pipeline design.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 6 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pd_zero bg_light_1">
               <div class="process_box style_two dark_color p-5 bg_op_1">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/process-icon-im-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#">Digital Transformation & Workforce Evolution</a></h2>
                     </div>
                     <p>
                        Helping HR and leadership teams adapt to digital-first operations and HR technology.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 7 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 p-5 bg_dark_1">
               <div class="process_box style_two">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/service-ico-n-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#" class="color_white">Diversity, Equity & Inclusion Advisory</a></h2>
                     </div>
                     <p class="color_white">
                        Inclusive hiring, leadership and culture frameworks.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 8 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 p-5 bg_light_1">
               <div class="process_box style_two dark_color">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/process-icon-im-1.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#">Family Business Leadership Solutions</a></h2>
                     </div>
                     <p>
                        Governance, succession and leadership transition support for family-owned businesses.
                     </p>
                  </div>
               </div>
            </div>

            <!-- Box 9 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 rounded_bottom_right_30 p-5 bg_dark_1">
               <div class="process_box style_two">
                  <div class="process_box_outer_two">
                     <div class="content_box clearfix">
                        <div class="icon">
                           <div class="img">
                              <img src="<?php echo e(asset('assets/frontend/images/service-ico-n-2.png')); ?>" class="img-fluid svg_image" alt="icon png">
                           </div>
                        </div>
                        <h2><a href="#" class="color_white">Restructuring & Organizational Transformation</a></h2>
                     </div>
                     <p class="color_white">
                        Workforce redeployment, restructuring and cultural transformation support.
                     </p>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>

   <section class="service-section bg_op_3" style="background: url(<?php echo e(asset('assets/frontend/images/home-12-service-bg.jpg')); ?>); margin-top: 60px;" id="piller-4">
      <!--===============spacing==============-->
      <div class="pd_top_65"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center light_color">
                  <div class="title_sections">
                     <div class="before_title">Piller 04</div>
                     <div class="title">Hire faster, hire better and hire with business context.</div>
                     <div class="middle"></div>
                     <p>Good hiring is not resume forwarding. It requires role clarity, sourcing strategy, screening, candidate communication, culture fit assessment, interview coordination and closure discipline. Mirashka works as an extended recruitment and staffing partner for businesses.</p>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="row">
            <div class="service_section grid_all three_column dark_color">
               <div class="grid_show_case grid_layout clearfix">
                  <div class="grid_box _card">
                     <div class="service_post style_three">
                        <div class="image_box">
                           <img loading="lazy" width="350" height="220" src="<?php echo e(asset('assets/frontend/img/company-packages/who-we-serve/early-stage-startups.webp')); ?>" alt="img">
                        </div>
                        <div class="text_box">
                           <div class="text_box_inner">
                              <h2 class="title_service"><a href="javascript:void(0);">IT Staffing</a></h2>
                              <p class="short_desc">Skilled technology talent across emerging technologies and business-critical IT roles.</p>
                              <div class="bg_icon">
                                 <span class="icon icon-thumbs-up icon"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="grid_box _card">
                     <div class="service_post style_three">
                        <div class="image_box">
                           <img width="350" height="220" src="<?php echo e(asset('assets/frontend/img/company-packages/who-we-serve/ai-deep-tech-&-innovation-led-firms.webp')); ?>" alt="img" loading="lazy">
                        </div>
                        <div class="text_box">
                           <div class="text_box_inner">
                              <h2 class="title_service"><a href="javascript:void(0);">General Staffing</a></h2>
                              <p class="short_desc">End-to-end staffing for non-technical roles across departments and industries.</p>
                              <div class="bg_icon">
                                 <span class="icon icon-thumbs-up icon"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="grid_box _card">
                     <div class="service_post style_three">
                        <div class="image_box">
                           <img width="350" height="220" src="<?php echo e(asset('assets/frontend/img/company-packages/who-we-serve/category-creators-&-challenger-brands.webp')); ?>" alt="img" loading="lazy">
                        </div>
                        <div class="text_box">
                           <div class="text_box_inner">
                              <h2 class="title_service"><a href="javascript:void(0);">NAPS Apprenticeship Support</a></h2>
                              <p class="short_desc">Support for apprenticeship-based workforce development and government-linked talent programs.</p>
                              <div class="bg_icon">
                                 <span class="icon icon-thumbs-up icon"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="grid_box _card">
                     <div class="service_post style_three">
                        <div class="image_box">
                           <img loading="lazy" width="350" height="220" src="<?php echo e(asset('assets/frontend/img/company-packages/who-we-serve/tech-companies-&-SaaS-brands.webp')); ?>" alt="img">
                        </div>
                        <div class="text_box">
                           <div class="text_box_inner">
                              <h2 class="title_service"><a href="javascript:void(0);">IT Recruitment</a></h2>
                              <p class="short_desc">Specialist recruitment for technology, innovation and digital roles.</p>
                              <div class="bg_icon">
                                 <span class="icon icon-thumbs-up icon"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="grid_box _card">
                     <div class="service_post style_three">
                        <div class="image_box">
                           <img width="350" height="220" src="<?php echo e(asset('assets/frontend/img/company-packages/who-we-serve/funded-scale-ups.webp')); ?>" alt="img" loading="lazy">
                        </div>
                        <div class="text_box">
                           <div class="text_box_inner">
                              <h2 class="title_service"><a href="javascript:void(0);">Recruitment Process Outsourcing</a></h2>
                              <p class="short_desc">Extended recruitment team support for full-cycle hiring.</p>
                              <div class="bg_icon">
                                 <span class="icon icon-thumbs-up icon"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="grid_box _card">
                     <div class="service_post style_three">
                        <div class="image_box">
                           <img width="350" height="220" src="<?php echo e(asset('assets/frontend/img/company-packages/who-we-serve/enterprise-&-mid-market-leaders.webp')); ?>" alt="img" loading="lazy">
                        </div>
                        <div class="text_box">
                           <div class="text_box_inner">
                              <h2 class="title_service"><a href="javascript:void(0);">Executive Search</a></h2>
                              <p class="short_desc">Leadership hiring for senior and strategic positions.</p>
                              <div class="bg_icon">
                                 <span class="icon icon-thumbs-up icon"></span>
                              </div>
                           </div>
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

   <section class="project-section bg_op_1" style="background: url(<?php echo e(asset('assets/frontend/images/projects/project-background-6-min.jpg')); ?>);" id="piller-5">
      <!--===============spacing==============-->
      <div class="pd_top_65"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row align-items-end">
            <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5 mb-lg-0 mb-xl-0">
               <div class="title_all_box style_one  light_color">
                  <div class="title_sections left">
                     <div class="before_title">
                        Piller 05
                     </div>
                     <h2>Your dedicated HR partner, on demand.</h2>
                     <div class="middle left"></div>
                     <p>Mirashka HRaaS gives companies access to HR expertise, systems and execution without the burden of building a large internal HR department from day one. We manage the people side of business so founders and leadership teams can focus on growth.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="theme_btn_all color_one text-md-end">
                  <a href="#" target="_blank" rel="nofollow" class="theme-btn one">Build My HRaaS Plan</a>
                  <!--===============spacing==============-->
                  <div class="pd_top_20"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_top_20"></div>
            <!--===============spacing==============-->
         </div>
      </div>
      <div class="medium-container">
         <div class="row">
            <div class="col-lg-12">
               <div class="project_caro_section carousel style_three ">
                  <div class="swiper-container" data-swiper='{
                     "autoplay": {
                       "delay": 6000
                     },
                     "freeMode": true,
                     "loop": true,
                     "speed": 1000,
                     "centeredSlides": false,
                     "slidesPerView": 4,
                     "spaceBetween": 10,
                     "pagination": {
                       "el": ".swiper-pagination",
                       "clickable": true
                     },
                      
                     "breakpoints": {
                        "1200": {
                           "slidesPerView": 4
                        },
                        "1024": {
                         "slidesPerView": 3 
                        },
                       "768": {
                         "slidesPerView": 2 
                       },
                       "576": {
                         "slidesPerView": 1 
                       },
                       "0": {
                         "slidesPerView": 1 
                       }
                     }
                   }'>
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="project_post style_nine">
                              <div class="image">
                                 <img loading="lazy" width="295" height="400"
                                    src="<?php echo e(asset('assets/img/hr-outsourcing.png')); ?>" class="img-fluid" alt="img">
                              </div>
                              <div class="project_caro_content">
                                 <p>Full-service HR management including payroll, benefits administration and compliance oversight.</p>
                                 <h2 class="title_pro"><a href="javascript:void(0);">HR Outsourcing</a></h2>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="project_post style_nine">
                              <div class="image">
                                 <img width="295" height="400" src="<?php echo e(asset('assets/img/branding.png')); ?>"
                                    class="img-fluid" alt="img">
                              </div>
                              <div class="project_caro_content">
                                 <p>Positioning your company as an employer of choice to attract better talent.</p>
                                 <h2 class="title_pro"><a href="javascript:void(0);">Employer Branding</a></h2>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="project_post style_nine">
                              <div class="image">
                                 <img width="295" height="400" src="<?php echo e(asset('assets/img/candidate.png')); ?>"
                                    class="img-fluid" alt="img">
                              </div>
                              <div class="project_caro_content">
                                 <p>Curated candidate pipelines designed around skill, culture and hiring needs.</p>
                                 <h2 class="title_pro"><a href="javascript:void(0);">Candidate Sourcing</a></h2>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="project_post style_nine">
                              <div class="image">
                                 <img loading="lazy" width="295" height="400" src="<?php echo e(asset('assets/img/engagement.png')); ?>" class="img-fluid" alt="img">
                              </div>
                              <div class="project_caro_content">
                                 <p>Engagement strategies, performance frameworks and real-time employee feedback programs.</p>
                                 <h2 class="title_pro"><a href="javascript:void(0);">Employee Engagement & Performance Management</a></h2>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="project_post style_nine">
                              <div class="image"> 
                                 <img width="295" height="400" src="<?php echo e(asset('assets/img/surveys.png')); ?>"
                                    class="img-fluid" alt="img">
                              </div>
                              <div class="project_caro_content">
                                 <p>Continuous feedback mechanisms to improve satisfaction and retention.</p>
                                 <h2 class="title_pro"><a href="javascript:void(0);">Employee Surveys & Retention Strategies</a></h2>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="project_post style_nine">
                              <div class="image">
                                 <img loading="lazy" width="295" height="400" src="<?php echo e(asset('assets/img/hr-technology.png')); ?>" class="img-fluid" alt="img">
                              </div>
                              <div class="project_caro_content">
                                 <p>HR software, analytics platforms and automation tools to improve HR efficiency.</p>
                                 <h2 class="title_pro"><a href="javascript:void(0);">HR Technology Solutions</a></h2>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="p_pagination">
                        <div class="pswiper-pagination"></div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
   </section>


   <style type="text/css">
      .card-body-custom {
      display: flex;
      align-items: center;
      background-color: #f8f9fa;
      }
      .card-image-container {
      flex: 0 0 40%;
      max-width: 40%;
      }
      .card-text-container {
      flex: 1;
      padding: 1rem 2rem;
      }
      .pyscans .card-img-top {
      width: 100%;
      height: 357px;
      object-fit: cover;
      border-radius: 1rem 0 0;
      }
      .tabs-container {
      position: relative;
      background: #f8f9fa;
      }
      .containervj {
      max-width: 100%;
      border: none;
      border-radius: 2rem;
      box-shadow: 0 34px 44px 0 rgba(29, 20, 99, .2);
      transition: box-shadow 0.3s ease-in-out;
      margin: 80px 30px;
      z-index: 1;
      }
      .custom-tabs {
      display: flex;
      justify-content: space-around;
      border-bottom: none;
      padding: 0;
      }
      .custom-tabs .nav-item {
      flex: 1;
      padding-top: 20px;
      }
      .custom-tabs .nav-link {
      display: block;
      text-align: center;
      padding: 0.5rem 1rem;
      color: #706c6c;
      border: none;
      margin: 0;
      font-size: 19px;
      font-weight: 700;
      }
      .custom-tabs .nav-link.active {
      background-color: #f8f9fa;
      color: #025d4c;
      text-decoration: underline #e1a300;
      text-decoration-thickness: 2px;
      text-underline-offset: 2px;
      }
      .custom-tabs .nav-link.active::before {
      content: '';
      display: inline-block;
      width: 8px;
      height: 8px;
      background-color: #e59b0a;
      border-radius: 50%;
      margin-right: 8px;
      vertical-align: middle;
      }
      .custom-tabs .nav-link:hover {
      color: #000000;
      }   
      .fbdvs{
      background: linear-gradient(to right, #025d4c, #04a57d);
      color: #fff;
      font-size: 15px;
      font-weight: 400;
      padding: 3px 25px;
      border-radius: 32px;
      width: fit-content;
      }
      .custom-button {
      border: 2px solid;
      padding: 10px 25px;
      border-radius: 49px;
      color: #000;
      font-weight: 700;
      margin-top: 15px;
      display: block;
      width: fit-content;
      }
      .containervj small{
      display: block;
      font-size: 10px !important;
      }
      h5.card-title.custom-heading {
      margin: 8px 0;
      text-align: justify;    
      }
      .card.cs p {
      text-align: justify;
      }
   </style>
<div class="containervj tabs-container">
   <div class="title_all_box style_one text-center light_color bg_dark_1 pt-4 px-3 pb-2" style="border-radius: 2rem 2rem 0 0;">
      <div class="title_sections">
         <div class="before_title">Our Methodology</div>
         <h2 class="title">From HR discovery to workforce excellence</h2>
         <div class="middle whitte"></div>
         <p>Mirashka follows a structured engagement methodology that converts HR requirements into measurable execution. We do not start with random hiring or scattered advisory. We begin with diagnosis, build the right HR roadmap, deploy systems and continuously optimize the people function.</p>
      </div>
   </div>
   <ul class="nav nav-tabs custom-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
         <a class="nav-link active" id="Discover-tab" data-bs-toggle="tab" href="#Discover" role="tab" aria-controls="Discover" aria-selected="true">Discover</a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="Diagnose-tab" data-bs-toggle="tab" href="#Diagnose" role="tab" aria-controls="Diagnose" aria-selected="false">Diagnose</a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="Design-tab" data-bs-toggle="tab" href="#Design" role="tab" aria-controls="Design" aria-selected="false">Design</a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="Deploy-tab" data-bs-toggle="tab" href="#Deploy" role="tab" aria-controls="Deploy" aria-selected="false">Deploy</a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="Develop-tab" data-bs-toggle="tab" href="#Develop" role="tab" aria-controls="Develop" aria-selected="false">Develop</a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="Digitize-tab" data-bs-toggle="tab" href="#Digitize" role="tab" aria-controls="Digitize" aria-selected="false">Digitize</a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="Drive-tab" data-bs-toggle="tab" href="#Drive" role="tab" aria-controls="Drive" aria-selected="false">Drive</a>
      </li>
   </ul>
   <div class="tab-content mt-4 mb-50 pyscans" id="myTabContent">
      <div class="tab-pane fade show active" id="Discover" role="tabpanel" aria-labelledby="Discover-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h5 class="card-title custom-heading">We understand your business stage, team size, leadership structure, HR challenges and growth goals.</h5>
                  <div class="middle left"></div>
                  <p>We begin by understanding your business journey, organizational structure, workforce size, leadership vision, and operational challenges. Our team carefully studies your current HR practices, growth expectations, and company culture to identify the right people strategies that support long-term scalability, productivity, employee satisfaction, and sustainable business success across every stage of growth.</p>
                  <a href="#services" class="custom-button">Start HR Discovery <i class="fa fa-arrow-right"></i></a>
               </div>
               <div class="card-image-container">
                  <img src="<?php echo e(asset('assets/img/discover.png')); ?>" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="Diagnose" role="tabpanel" aria-labelledby="Diagnose-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h5 class="card-title custom-heading">We review hiring, payroll, policies, compliance, documentation, employee records and workforce risks.</h5>
                  <div class="middle left"></div>
                  <p>We conduct a detailed assessment of your existing HR systems, recruitment process, payroll management, employee documentation, statutory compliance, workplace policies, and operational gaps. This diagnosis helps uncover inefficiencies, workforce risks, and process bottlenecks while creating a clear understanding of areas that require immediate improvement, restructuring, or strategic HR intervention.</p>
                  <a href="#services" class="custom-button">Start HR Discovery <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="<?php echo e(asset('assets/img/diagnose.png')); ?>" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="Design" role="tabpanel" aria-labelledby="Design-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h5 class="card-title custom-heading">We create your HR roadmap, service model, policy framework, recruitment plan and reporting structure.</h5>
                  <div class="middle left"></div>
                  <p>Based on your business goals, we design customized HR frameworks, scalable recruitment strategies, employee policies, reporting systems, and workforce management processes. Our approach ensures that every HR structure aligns with your organizational culture, compliance requirements, and future expansion plans while creating a professional, employee-friendly, and performance-driven work environment.</p>
                  <a href="#services" class="custom-button">Start HR Discovery <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="<?php echo e(asset('assets/img/design.png')); ?>" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="Deploy" role="tabpanel" aria-labelledby="Deploy-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h5 class="card-title custom-heading">We activate recruitment, payroll coordination, HR documentation, compliance calendar, onboarding and employee support.</h5>
                  <div class="middle left"></div>
                  <p>We efficiently implement HR operations including hiring coordination, onboarding systems, payroll support, compliance tracking, employee documentation, and communication workflows. Our deployment process ensures smooth execution with minimal disruption to business activities while creating organized HR practices that improve employee experience, operational efficiency, accountability, and day-to-day workforce management.</p>
                  <a href="#services" class="custom-button">Start HR Discovery <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="<?php echo e(asset('assets/img/deploy.png')); ?>" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="Develop" role="tabpanel" aria-labelledby="Develop-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h5 class="card-title custom-heading">We build engagement, performance, leadership pipeline, employee communication and retention practices.</h5>
                  <div class="middle left"></div>
                  <p>We focus on strengthening employee engagement, leadership capabilities, performance management, internal communication, and retention strategies. Through structured HR initiatives, training support, and people-focused practices, we help businesses create motivated teams, positive workplace culture, stronger collaboration, and long-term employee commitment that contributes directly to organizational growth and operational stability.</p>
                  <a href="#services" class="custom-button">Start HR Discovery <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="<?php echo e(asset('assets/img/develop.png')); ?>" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="Digitize" role="tabpanel" aria-labelledby="Digitize-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h5 class="card-title custom-heading">We implement HR tools, dashboards, automation and analytics for better visibility and faster decisions.</h5>
                  <div class="middle left"></div>
                  <p>We introduce modern HR technologies, automated workflows, employee management systems, dashboards, and reporting tools to simplify HR operations. Digitization improves accuracy, reduces manual workload, increases visibility into workforce data, and enables faster decision-making while helping organizations manage employees, attendance, compliance, and performance through smart, technology-driven solutions and analytics.</p>
                  <a href="#services" class="custom-button">Start HR Discovery <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="<?php echo e(asset('assets/img/digitize.png')); ?>" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="Drive" role="tabpanel" aria-labelledby="Drive-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h5 class="card-title custom-heading">We review HR performance monthly, improve processes and align people systems with business growth.</h5>
                  <div class="middle left"></div>
                  <p>We continuously monitor HR performance, analyze operational efficiency, and optimize workforce processes to support business growth. Through regular reviews, reporting insights, policy improvements, and strategic guidance, we ensure your HR systems remain agile, compliant, and aligned with evolving organizational goals while maximizing productivity, employee satisfaction, and long-term business performance.</p>
                  <a href="#services" class="custom-button">Start HR Discovery <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="<?php echo e(asset('assets/img/drive.png')); ?>" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

   
   <?php echo $__env->make('frontend.pages.home-sections.integrated-hr-services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   
   <?php echo $__env->make('frontend.pages.home-sections.industries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
   <?php echo $__env->make('frontend.pages.home-sections.strategic-partnership', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
   <?php echo $__env->make('frontend.pages.home-sections.why-choose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
   <?php $homeBottom = config('home-bottom', []); ?>
   <?php echo $__env->make('frontend.pages.home-sections.homeClients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->make('frontend.layouts.common.sections.testimonials', [
      'sectionClass' => 'px-3 px-md-5',
      'compactTop' => true,
      'beforeTitle' => $homeBottom['testimonials']['before_title'] ?? 'Proof of Impact',
      'sectionTitle' => $homeBottom['testimonials']['section_title'] ?? 'Client Testimonials',
      'sectionSubtitle' => $homeBottom['testimonials']['section_subtitle'] ?? '',
   ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->make('frontend.pages.home-sections.faqs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home.blade.php ENDPATH**/ ?>
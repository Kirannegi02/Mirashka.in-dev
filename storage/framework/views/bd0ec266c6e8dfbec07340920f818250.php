
<style>
   .mirashka-home,
   body.page-home .blog-section,
   body.page-home .way-section {
      --mh-eyebrow: 0.8125rem;   /* 13px — section label */
      --mh-h1: clamp(2rem, 4vw, 3rem);       /* 32–48px — hero */
      --mh-h2: clamp(1.75rem, 3vw, 2.3rem); /* 28–36px — section heading */
      --mh-h3: 1.375rem;         /* 22px — card / block title */
      --mh-lead: 1.125rem;       /* 18px — intro under heading */
      --mh-body: 1rem;           /* 16px — paragraphs */
      --mh-small: 0.875rem;      /* 14px — captions, meta */
      --mh-btn: 0.9375rem;       /* 15px — buttons (matches theme-btn.one) */
      --mh-lh-tight: 1;
      --mh-lh-body: 1.65;
      --mh-radius: 8px;
      --mh-btn-shape: 10px 0 10px 0;
      --mh-btn-shape-hover: 0 10px 0 10px;
      --mh-btn-min-h: 52px;
      --mh-btn-pad-x: 28px;
      --mh-btn-min-w: 160px;
   }

   /* Base */
   .mirashka-home {
      font-size: var(--mh-body);
      line-height: var(--mh-lh-body);
   }

   /* —— Section headings (H2) —— */
   .mirashka-home #homeOneBanner h2,
   .mirashka-home .title_all_box.style_one .title_sections h2,
   .mirashka-home .title_all_box.style_seven .title_sections .title,
   .mirashka-home .home-why-mirashka__title,
   .mirashka-home .home-growth-reality__title,
   .mirashka-home .home-hr-os__title,
   .mirashka-home .home-pillar__heading,
   .mirashka-home .home-pillars h2,
   .mirashka-home .home-wfm-hub__body h2,
   .mirashka-home .home-talent-spine__body h2,
   .mirashka-home .home-hraas-suite__main h2,
   .mirashka-home .home-pillar__bento-main h2,
   .mirashka-home .home-integrated-services .title_all_box h2,
   .mirashka-home .testimonial-section .title_sections .title,
   .mirashka-home .faqs-section .title_sections .title,
   .mirashka-home .blog-section .title_sections h2,
   .mirashka-home .description_box h2,
   .mirashka-home .content_box_cn h3 span,
   body.page-home .blog-section .title_sections h2,
   body.page-home .way-inner-header h2 {
      font-size: var(--mh-h2) !important;
      line-height: var(--mh-lh-tight) !important;
   }

   /* Hero = H1 scale */
   .mirashka-home #homeOneBanner h2 {
      font-size: var(--mh-h1) !important;
   }

   /* —— Subheadings (H3) —— */
   .mirashka-home .home-pillars h3,
   .mirashka-home .home-pillar__bento-tile h3,
   .mirashka-home .home-pillar__bento-main h3,
   .mirashka-home .home-industries .choose_box.type_two .content_box h2,
   .mirashka-home .home-industries .choose_box.type_two .content_box h2 a,
   .mirashka-home .home-why-mirashka__card h3,
   .mirashka-home .home-hr-os__node-title,
   .mirashka-home .home-industries__card h3,
   .mirashka-home .project_box.style_two .content_inner h2,
   .mirashka-home .project_box.style_two .content_inner h2 a,
   .mirashka-home .service_carousel.style_one .title_service,
   .mirashka-home .service_carousel.style_one .title_service a,
   .mirashka-home .choose_box.type_one .text_box h2,
   .mirashka-home .choose_box.type_one .text_box h2 a,
   .mirashka-home .home-why-choose .choose_box.type_one .text_box h2 a {
      font-size: var(--mh-h3) !important;
      line-height: var(--mh-lh-tight) !important;
   }

   /* —— Lead / intro text —— */
   .mirashka-home .title_sections .small_text_sub,
   .mirashka-home .home-why-mirashka__intro,
   .mirashka-home .home-growth-reality__lead,
   .mirashka-home .home-hr-os__lead,
   .mirashka-home .home-hr-os__intro,
   .mirashka-home .home-pillars .home-pillar__lead,
   .mirashka-home .home-pillars .home-pillar__intro,
   .mirashka-home .home-integrated-services__subheading,
   .mirashka-home .home-industries__subheading,
   .mirashka-home .home-clients__tagline,
   .mirashka-home .testimonial-section-subtitle,
   .mirashka-home .home-insights__subheading,
   .mirashka-home .title_all_box.style_one .title_sections > p,
   .mirashka-home .methodology-banner-legacy .title_sections p,
   .mirashka-home .contact-section .title_sections p,
   body.page-home .blog-section .home-insights__subheading,
   body.page-home .way-inner-header p {
      font-size: var(--mh-lead) !important;
      line-height: var(--mh-lh-body) !important;
   }

   /* —— Body copy —— */
   .mirashka-home p,
   .mirashka-home .meta_value,
   .mirashka-home .home-why-mirashka__card p,
   .mirashka-home .home-hr-os__node-text,
   .mirashka-home .home-pillars p,
   .mirashka-home .home-pillars li,
   .mirashka-home .home-industries__card p,
   .mirashka-home .choose_box.type_one .text_box p,
   .mirashka-home .content_box_cn .txt_content p,
   .mirashka-home .service_carousel.style_one p,
   .mirashka-home .project_box.style_two .content_inner .meta_value,
   .mirashka-home .faq_section .accordion-content p,
   .mirashka-home .testimonial_box .comment,
   .mirashka-home .description_box p,
   .mirashka-home #homeOneBanner .tab-pane p,
   .mirashka-home p.gold {
      font-size: var(--mh-body) !important;
      line-height: var(--mh-lh-body) !important;
   }

   /* —— Small / meta —— */
   .mirashka-home .progress_bar h2,
   .mirashka-home .auth_details span,
   .mirashka-home .step_no,
   .mirashka-home .methodology-legacy .stteps,
   .mirashka-home label,
   .mirashka-home .home-hr-enquiry-form input,
   .mirashka-home .home-hr-enquiry-form select,
   .mirashka-home .home-hr-enquiry-form textarea {
      font-size: var(--mh-small) !important;
   }

   .mirashka-home .progress_bar h2 span {
      font-size: inherit !important;
   }

   /* —— Unified home CTA (theme-btn.one leaf shape) —— */
   .mirashka-home a.theme-btn.one,
   .mirashka-home button.theme-btn.one,
   .mirashka-home .home-why-mirashka__cta,
   .mirashka-home .home-growth-reality__cta,
   .mirashka-home .home-hr-os__cta,
   .mirashka-home .home-pillars a[class*="__cta"],
   body.page-home .way-section .way-inner-header .btn,
   body.page-home .way-section .way-inner-header .btn.btn-primary,
   #homeOneBanner .theme_btn_all .theme-btn.one {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 8px !important;
      padding: 0 var(--mh-btn-pad-x) !important;
      border-radius: var(--mh-btn-shape) !important;
      background: var(--primary-color-one, #006039) !important;
      color: #fff !important;
      border: 1px solid var(--primary-color-one, #006039) !important;
      line-height: 1.25 !important;
      min-height: var(--mh-btn-min-h) !important;
      min-width: var(--mh-btn-min-w) !important;
      font-weight: 600 !important;
      font-size: var(--mh-btn) !important;
      font-family: var(--creote-family-one, inherit) !important;
      text-align: center !important;
      text-decoration: none !important;
      text-transform: none !important;
      letter-spacing: normal !important;
      white-space: nowrap !important;
      box-shadow: none !important;
      box-sizing: border-box !important;
      cursor: pointer !important;
      transition: all 0.5s ease !important;
      width: auto !important;
   }

   .mirashka-home a.theme-btn.one:hover,
   .mirashka-home button.theme-btn.one:hover,
   .mirashka-home .home-why-mirashka__cta:hover,
   .mirashka-home .home-growth-reality__cta:hover,
   .mirashka-home .home-hr-os__cta:hover,
   .mirashka-home .home-pillars a[class*="__cta"]:hover,
   body.page-home .way-section .way-inner-header .btn:hover,
   body.page-home .way-section .way-inner-header .btn.btn-primary:hover,
   #homeOneBanner .theme_btn_all .theme-btn.one:hover {
      background: #fff !important;
      color: var(--primary-color-one, #006039) !important;
      border-color: var(--primary-color-one, #006039) !important;
      border-radius: var(--mh-btn-shape-hover) !important;
      transform: none !important;
   }

   .mirashka-home .home-pillar__bento-cta {
      width: 100% !important;
      min-width: 0 !important;
   }

   .mirashka-home .home-hr-enquiry-form .submitBtn.theme-btn.one {
      width: 100% !important;
      min-width: 0 !important;
   }

   #homeOneBanner .theme_btn_all {
      display: block;
      margin: 0;
      padding: 0;
      list-style: none;
   }

   @media (max-width: 768px) {
      .mirashka-home,
      body.page-home .way-section {
         --mh-btn-min-h: 46px;
         --mh-btn-pad-x: 22px;
         --mh-btn-min-w: 140px;
      }
      .mirashka-home a.theme-btn.one,
      .mirashka-home button.theme-btn.one,
      .mirashka-home .home-why-mirashka__cta,
      .mirashka-home .home-growth-reality__cta,
      .mirashka-home .home-hr-os__cta,
      .mirashka-home .home-pillars a[class*="__cta"],
      body.page-home .way-section .way-inner-header .btn,
      body.page-home .way-section .way-inner-header .btn.btn-primary,
      #homeOneBanner .theme_btn_all .theme-btn.one {
         font-size: 0.875rem !important;
      }
   }

   /* Testimonial author name = H3 */
   .mirashka-home .auth_details h2 {
      font-size: var(--mh-h3) !important;
   }

   /* Decorative numbers — keep large, not body text */
   .mirashka-home .home-why-mirashka__card-num,
   .mirashka-home .home-growth-reality__stat-value,
   .mirashka-home [class*="__card-num"]:not(.home-why-mirashka__card-num) {
      font-size: clamp(2.5rem, 5vw, 3.5rem) !important;
   }

   /* Icon sizes — not text */
   .mirashka-home .home-why-mirashka__card-icon {
      font-size: 2.25rem !important;
   }
   .mirashka-home .service_carousel .icon_box span i {
      font-size: 1.5rem !important;
   }

   @media (max-width: 767px) {
      .mirashka-home,
      body.page-home .blog-section,
      body.page-home .way-section {
         --mh-h1: 2rem;
         --mh-h2: 1.75rem;
         --mh-h3: 1.25rem;
         --mh-lead: 1.0625rem;
         --mh-body: 1rem;
      }
   }

   /* —— Uniform corner radius (8px) — keep circles at 50% —— */
   .mirashka-home .textbg,
   .mirashka-home img:not(.authour_image img):not(.testimonial-avatar-initials),
   .mirashka-home .theme_btn_all a:not(.theme-btn.one),
   .mirashka-home .theme-btn:not(.one):not(.submitBtn),
   .mirashka-home .choose_box,
   .mirashka-home .project_box,
   .mirashka-home .service_carousel,
   .mirashka-home .service_carousel .image,
   .mirashka-home .contact_form_box_all,
   .mirashka-home .contact_form_box_all.type_two,
   .mirashka-home .home-hr-enquiry-form input,
   .mirashka-home .home-hr-enquiry-form select,
   .mirashka-home .home-hr-enquiry-form textarea,
   .mirashka-home .home-why-mirashka__center img,
   .mirashka-home .home-growth-reality__shell,
   .mirashka-home .home-growth-reality__card,
   .mirashka-home .home-growth-reality__media,
   .mirashka-home .home-growth-reality__chip,
   .mirashka-home .home-hr-os__panel,
   .mirashka-home .home-hr-os__detail,
   .mirashka-home .home-hr-os__orbit-card,
   .mirashka-home .home-pillars [class*="__media"],
   .mirashka-home .home-pillars [class*="__tile"],
   .mirashka-home .home-pillars [class*="__bento"],
   .mirashka-home .home-pillars [class*="__panel"],
   .mirashka-home .home-pillars [class*="__hub"],
   .mirashka-home .home-pillars [class*="__suite"],
   .mirashka-home .home-pillars [class*="__spine"],
   .mirashka-home .home-pillars [class*="__card"]:not([class*="__card-num"]),
   .mirashka-home .home-pillars [class*="__chip"],
   .mirashka-home .home-pillars [class*="__tag"],
   .mirashka-home .methodology-legacy .stteps,
   .mirashka-home .methodology-legacy .project_box.style_two,
   .mirashka-home .methodology-legacy .entry-thumbnail.image img,
   .mirashka-home .methodology-legacy .content_inner,
   .mirashka-home .simple_image_boxes,
   .mirashka-home .faq_section .faq_header,
   .mirashka-home .progress_bar .bar,
   .mirashka-home .progress_bar .bar-inner,
   body.page-home .blog-section .news_box,
   body.page-home .blog-section .image_box,
   body.page-home .blog-section .image_box img,
   body.page-home .way-bg {
      border-radius: var(--mh-radius) !important;
   }

   /* True circles — stay round */
   .mirashka-home .home-hr-os__orbit-node,
   .mirashka-home .home-hr-os__node-dot,
   .mirashka-home .home-growth-reality__orbit-ring,
   .mirashka-home .icon_bg_rotate,
   .mirashka-home .testimonial-avatar-initials,
   .mirashka-home .authour_image img,
   .mirashka-home .swiper-pagination-bullet {
      border-radius: 50% !important;
   }
</style>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/pages/home-sections/home-typography.blade.php ENDPATH**/ ?>
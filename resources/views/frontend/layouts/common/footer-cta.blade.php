@php
    $finalCta = request()->is('/') ? config('home-bottom.final_cta', []) : [];
    $showEnquiryForm = ! request()->is('/') && ! request()->is('industries-we-serve*');
@endphp
@if($showEnquiryForm)
<section class="cm-support-section pricing-section doc-plan">
    <div class="container px-2">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-header-one">
                    <h2 class="section-title">{!! $finalCta['heading'] ?? 'You are one step closer to building<br> your next growth chapter' !!}</h2>
                    <div class="middle mt-2"></div>
                    <p>
                        {{ $finalCta['intro'] ?? 'Share your goals and project requirements with Mirashka. Our team will review your brief and connect with a practical strategy across brand, technology, and performance marketing.' }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-stretch g-3 doc-plan-split">
            <div class="col-lg-4 col-sm-12">
                <div class="card pricing-card pricing-card-active rounded-10 doc-plan-rise w-100 h-100">
                    <div class="card-body">
                        <div class="pricing-header">
                            <img src="{{ asset($finalCta['sidebar_image'] ?? 'assets/frontend/img/page/contact.jpg') }}" alt="{{ $finalCta['sidebar_image_alt'] ?? 'What is included' }}" class="doc-plan-card-img">
                        </div>
                        <div class="pricing-info">
                            <h2 class="text-white">{{ $finalCta['sidebar_title'] ?? 'What you get' }}</h2>
                            <hr class="doc-plan-card-divider">
                            <p class="text-white mb-0">
                                {{ $finalCta['sidebar_text'] ?? 'Discovery call, execution roadmap, and transparent next steps tailored to your business goals, team structure, timeline, and expected outcomes.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 d-flex">
                <div class="card contact-form-card rounded-10 doc-plan-rise w-100 h-100">
                    <div class="card-body d-flex flex-column pt-3 pb-3 px-3">
                        <form id="project-enquiry-form" class="contactForm cm-doc-plan-form d-flex flex-column" method="post" action="{{ route('contact.submit') }}" role="form" autocomplete="on">
                            @csrf
                            <input type="hidden" name="lead_type" value="project_enquiry">
                            <div class="row gx-3 gy-0 doc-plan-field-row">
                                <div class="col-md-6">
                                    <div class="doc-plan-field">
                                        <label class="doc-plan-label mb-2" for="project-enquiry-name">Your Name <span class="text-danger">*</span></label>
                                        <input type="text" id="project-enquiry-name" class="form-control form-control-sm" name="name" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="doc-plan-field">
                                        <label class="doc-plan-label mb-2" for="project-enquiry-email">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" id="project-enquiry-email" class="form-control form-control-sm" name="email" placeholder="Enter email address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="doc-plan-field">
                                        <label class="doc-plan-label mb-2" for="project-enquiry-phone">Your Phone <span class="text-danger">*</span></label>
                                        <input type="tel" id="project-enquiry-phone" class="form-control form-control-sm" name="phone" placeholder="Enter phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="doc-plan-field">
                                        <label class="doc-plan-label mb-2" for="project-enquiry-project">{{ $finalCta['form_project_label'] ?? 'Project Name' }} <span class="text-danger">*</span></label>
                                        <input type="text" id="project-enquiry-project" class="form-control form-control-sm" name="project_name" placeholder="{{ $finalCta['form_project_placeholder'] ?? 'Enter project name' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="doc-plan-field">
                                        <label class="doc-plan-label mb-2" for="project-enquiry-details">{{ $finalCta['form_details_label'] ?? 'Project Details' }} <span class="text-danger">*</span></label>
                                        <textarea class="form-control form-control-sm doc-plan-textarea" id="project-enquiry-details" rows="2" name="project_details" placeholder="{{ $finalCta['form_details_placeholder'] ?? 'Describe your project...' }}" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-btn mb-0 pt-1">
                                <button type="submit" class="btn btn-primary prime-btn submitBtn" id="project-enquiry-submit">{{ $finalCta['submit_label'] ?? 'Submit Enquiry' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .cm-support-section.pricing-section.doc-plan {
        box-sizing: border-box;
        border: 0;
        display: block;
        background-color: #ffffff;
        margin: 0;
        padding: 48px 0 36px;
        font-family: var(--font-sans);
        font-size: 0.9375rem;
        color: #01735c;
        line-height: 1.5;
    }

    .cm-support-section.pricing-section.doc-plan > .container {
        max-width: 1320px;
    }

    .cm-support-section.pricing-section.doc-plan .rounded-10 {
        border-radius: 15px;
    }

    .cm-support-section.pricing-section.doc-plan .doc-plan-split > [class*="col-"] {
        display: flex;
    }

    .cm-support-section.pricing-section.doc-plan .doc-plan-rise {
        min-height: 0;
    }

    .cm-support-section.pricing-section.doc-plan .section-header-one {
        margin-bottom: 1.5rem;
    }

    /* Heading width; subtitle uses full content width below */
    .cm-support-section.pricing-section.doc-plan .section-header-one .section-title {
        margin: 0 auto;
        color: #192233;
        font-weight: 700;
        line-height: 1.22;
        font-size: clamp(1.85rem, 3.1vw, 2.5rem);
        max-width: 100rem;
    }

    .cm-support-section.pricing-section.doc-plan .section-header-one .middle {
        width: 112px;
        height: 3px;
        border-radius: 3px;
        background: linear-gradient(90deg, #01735c 0%, #0a8f67 100%);
        margin-left: auto;
        margin-right: auto;
    }

    /* Match usable width with the row below (same container gutters) */
    .cm-support-section.pricing-section.doc-plan .section-header-one p {
        margin: 0.65rem auto 0;
        max-width: 100%;
        padding-left: 0;
        padding-right: 0;
        color: #01735c;
        font-size: 0.9375rem;
        line-height: 1.65;
        font-weight: 400;
    }

    .cm-support-section.pricing-section.doc-plan .doc-plan-card-img {
        width: 100%;
        height: 185px;
        object-fit: cover;
        border-radius: 12px;
        display: block;
    }

    .cm-support-section.pricing-section.doc-plan hr.doc-plan-card-divider {
        border: 0;
        border-top: 1px solid rgba(255, 255, 255, 0.72);
        opacity: 1;
        margin: 0 0 0.5rem;
    }

    .cm-support-section.pricing-section.doc-plan .pricing-card.pricing-card-active {
        overflow: hidden;
        border: 0;
        background: linear-gradient(120deg, #014d2f 0%, #026a3d 52%, #0b8a4d 100%);
        box-shadow: none;
        color: #fff;
    }

    .cm-support-section.pricing-section.doc-plan .pricing-card .card-body {
        padding: 1.6rem;
    }

    .cm-support-section.pricing-section.doc-plan .pricing-header {
        margin-bottom: 0;
    }

    .cm-support-section.pricing-section.doc-plan .pricing-info {
        padding-top: 1.2rem;
        padding-bottom: 0;
        text-align: left;
    }

    .cm-support-section.pricing-section.doc-plan .pricing-info h2 {
        font-size: 1.7rem;
        font-weight: 700;
        line-height: 1.25;
        margin: 0 0 1rem;
        text-align: left;
    }

    .cm-support-section.pricing-section.doc-plan .pricing-info p {
        font-size: 0.9375rem;
        line-height: 1.55;
        margin-top: 0.9rem;
        text-align: left;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card {
        border: 1px solid #e9ecef;
        background-color: #f8f9fa;
        box-shadow: none;
    }

    /* Match Connected-style card-body: padding 30px, flex fill */
    .cm-support-section.pricing-section.doc-plan .contact-form-card > .card-body {
        box-sizing: border-box;
        flex: 1 1 auto;
        margin: 0;
        padding: 30px !important;
        color: inherit;
    }

    .cm-support-section.pricing-section.doc-plan .cm-doc-plan-form {
        min-height: 0;
    }

    /* Reference: gap-3 wrappers + mb-2 labels + default .form-control (no shrink from .form-control-sm) */
    .cm-support-section.pricing-section.doc-plan .contact-form-card .doc-plan-field-row.row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card .doc-plan-field {
        margin-bottom: 0.75rem;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card .doc-plan-field-row > .col-md-12:last-child .doc-plan-field {
        margin-bottom: 0;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card label.doc-plan-label {
        display: block;
        margin-bottom: 0.3rem;
        padding-bottom: 0;
        font-size: 0.9375rem;
        line-height: 1.35;
        font-weight: 600;
        text-align: left;
        color: #212529;
    }

    /* Connected-style border/text; tighter overall box height */
    .cm-support-section.pricing-section.doc-plan .contact-form-card .form-control {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        border-radius: var(--bs-border-radius, 0.375rem);
        border-color: #E2E8F0;
        padding: 4px 12px;
        font-family: inherit;
        font-size: 15px;
        line-height: 1.3;
        font-weight: 400;
        color: #333333;
        background-color: #fff;
        -webkit-appearance: none;
        appearance: none;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card input.form-control[type="text"],
    .cm-support-section.pricing-section.doc-plan .contact-form-card input.form-control[type="email"],
    .cm-support-section.pricing-section.doc-plan .contact-form-card input.form-control[type="tel"],
    .cm-support-section.pricing-section.doc-plan .contact-form-card input.form-control[type="password"],
    .cm-support-section.pricing-section.doc-plan .contact-form-card input.form-control[type="search"],
    .cm-support-section.pricing-section.doc-plan .contact-form-card input.form-control[type="url"] {
        height: 36px;
        min-height: 36px;
        max-height: 36px;
        padding: 4px 12px;
        line-height: 1.25;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card textarea.doc-plan-textarea {
        resize: vertical;
        max-height: none;
        min-height: 72px;
        padding: 6px 12px;
        line-height: 1.35;
        font-size: 15px;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .cm-support-section.pricing-section.doc-plan .contact-form-card .form-control:focus {
        border-color: #01735c;
        box-shadow: 0 0 0 0.25rem rgba(1, 115, 92, 0.2);
        outline: 0;
    }

    /* Reference form-group-btn mb-0 */
    .cm-support-section.pricing-section.doc-plan .form-group-btn {
        text-align: left;
        margin-bottom: 0 !important;
        padding-top: 0.25rem;
    }

    .cm-support-section.pricing-section.doc-plan .prime-btn,
    .cm-support-section.pricing-section.doc-plan .prime-btn:hover,
    .cm-support-section.pricing-section.doc-plan .prime-btn:focus {
        display: inline-block;
        width: auto;
        min-width: 0;
        min-height: 0;
        padding: 0.5rem 1.25rem;
        font-size: 0.9375rem;
        line-height: 1.5;
        font-weight: 600;
        color: #fff !important;
        text-transform: none;
        letter-spacing: 0;
        border-radius: var(--bs-border-radius, 0.375rem);
        border: 0 !important;
        background: linear-gradient(120deg, #014d2f 0%, #026a3d 52%, #0b8a4d 100%) !important;
        box-shadow: none;
    }

    .cm-support-section.pricing-section.doc-plan .prime-btn:focus-visible {
        box-shadow: 0 0 0 0.25rem rgba(1, 115, 92, 0.35);
    }

    @media (max-width: 575px) {
        .cm-support-section.pricing-section.doc-plan {
            padding: 36px 0 28px;
        }

        .cm-support-section.pricing-section.doc-plan .section-header-one .section-title {
            max-width: 100%;
        }
    }
</style>
@endif
<section class="way-section py-2">
    <div class="container">
        <div class="way-bg">
            <div class="way-shapes-img">
                <div class="way-shapes-left">
                    <img src="https://connectedmind.in/assets/frontend/img/shape-06.png" alt="shape-image">
                </div>
                <div class="way-shapes-right">
                    <img src="https://connectedmind.in/assets/frontend/img/shape-07.png" alt="shape-image">
                </div>
            </div>

            <div class="row align-items-end mx-0">
                <div class="col-lg-7 col-md-12 px-2">
                    <div class="section-inner-header way-inner-header mb-0 py-2">
                        <h2>{{ $finalCta['way_heading'] ?? 'Take the first step towards accelerating your brand and business' }}</h2>
                        <p>{{ $finalCta['way_text'] ?? 'Get strategic clarity and expert execution tailored for your growth journey. Start today for stronger outcomes and scalable momentum' }}</p>
                        <a href="{{ url($finalCta['way_button_url'] ?? '/project-enquiries') }}" class="btn btn-primary theme-btn one">{{ $finalCta['way_button'] ?? 'Contact Us' }}</a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 px-2">
                    <div class="way-img">
                        <img src="{{ asset($finalCta['way_image'] ?? 'assets/img/boy.png') }}" class="img-fluid" alt="{{ $finalCta['way_image_alt'] ?? 'Contact Mirashka HR' }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .way-section {
        background: #fff;
        padding: 40px 0 !important;
        position: relative;
        z-index: 4;
    }

    .way-bg {
        position: relative;
        overflow: hidden;
        border-radius: 22px;
        background: linear-gradient(120deg, #014d2f 0%, #026a3d 52%, #0b8a4d 100%);
        min-height: 390px;
        padding: 0 70px 0;
        margin-bottom: 0 !important;
    }

    .way-bg .row {
        min-height: 400px;
        align-items: flex-end !important;
    }

    .way-inner-header {
        position: relative;
        z-index: 2;
        color: #fff;
        max-width: 720px;
        padding: 0 0 55px !important;
    }

    .way-inner-header h2 {
        color: #fff;
        font-size: 42px;
        line-height: 1.2;
        font-weight: 700;
        margin: 0 0 24px;
        max-width: 650px;
    }

    .way-inner-header p {
        color: #fff;
        font-size: 18px;
        line-height: 1.5;
        font-weight: 600;
        margin: 0 0 24px;
        max-width: 680px;
    }

    .way-inner-header .btn.btn-primary {
        background: #fff;
        color: #192233;
        border: 0;
        border-radius: 8px;
        padding: 12px 22px;
        font-weight: 700;
    }

    .way-img {
        position: absolute;
        right: 70px;
        bottom: 0;
        z-index: 3;
        width: 360px;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
    }

    .way-img img {
        height: 400px !important;
        max-height: none !important;
        width: auto !important;
        max-width: none !important;
        object-fit: contain;
        display: block;
    }

    .way-shapes-img {
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 1;
    }

    .way-shapes-left img {
        position: absolute;
        right: 330px;
        top: 45px;
        max-width: 230px;
    }

    .way-shapes-right img {
        position: absolute;
        right: -20px;
        top: 70px;
        max-width: 320px;
    }

    @media (max-width: 991px) {
        .way-bg {
            padding: 35px 25px 0;
            min-height: auto;
            text-align: center;
        }

        .way-bg .row {
            min-height: auto;
        }

        .way-inner-header {
            padding-bottom: 25px !important;
        }

        .way-inner-header h2 {
            font-size: 32px;
            max-width: 100%;
        }

        .way-inner-header p {
            font-size: 16px;
            max-width: 100%;
        }

        .way-img {
            position: relative;
            right: auto;
            bottom: auto;
            width: 100%;
            height: auto;
            justify-content: center;
        }

        .way-img img {
            height: 330px !important;
            max-width: 100% !important;
        }

        .way-shapes-right img {
            display: none;
        }
    }
</style>


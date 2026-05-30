@php
    $form = $form ?? [];
    $teamSizes = $form['team_size_options'] ?? [
        '1–25 employees',
        '26–100 employees',
        '101–500 employees',
        '500+ employees',
    ];
    $messageLabel = $form['message_label'] ?? 'Message *';
    $messagePlaceholder = $form['message_placeholder'] ?? 'Tell us about your HR priorities…';
@endphp

<style>
    #industry-form.industry-lead-showcase {
        background: #fff !important;
        padding-top: var(--industries-section-pad, 80px) !important;
        padding-bottom: var(--industries-section-pad, 80px) !important;
    }
    .industry-lead-showcase > .container {
        padding-left: 28px;
        padding-right: 28px;
    }
    .industry-lead-showcase__wrap {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
        gap: 28px;
        align-items: stretch;
    }
    .industry-lead-showcase__left {
        display: flex;
        flex-direction: column;
        height: 100%;
        min-height: 0;
    }
    .industry-lead-showcase__left .before_title {
        color: #006847;
        margin-bottom: 12px;
        flex-shrink: 0;
    }
    .industry-lead-showcase__title {
        color: #101828;
        font-size: clamp(1.85rem, 3.2vw, 2.75rem);
        line-height: 1.2;
        font-weight: 800;
        margin: 0 0 14px;
        max-width: 560px;
        flex-shrink: 0;
    }
    .industry-lead-showcase__content {
        color: #4b5563;
        font-size: 1rem;
        line-height: 1.75;
        margin: 0 0 20px;
        max-width: 620px;
        flex-shrink: 0;
    }
    .industry-lead-showcase__left-image {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #e5e7eb;
        background: #fff;
        flex: 1 1 auto;
        display: flex;
        min-height: 260px;
        margin-top: auto;
    }
    .industry-lead-showcase__left-image img {
        width: 100%;
        height: 100%;
        min-height: 260px;
        object-fit: cover;
        display: block;
    }
    .industry-lead-showcase__form-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.12);
        padding: 32px 36px 28px;
        height: 100%;
    }
    .industry-lead-showcase__form-card .industry-form-wrap,
    .industry-lead-showcase__form-card .contact_form_box_inner,
    .industry-lead-showcase__form-card .contact_form_shortcode {
        background: transparent !important;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form label {
        display: block;
        margin-bottom: 8px;
        font-size: 0.92rem;
        font-weight: 500;
        color: #1e293b;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form input,
    .industry-lead-showcase__form-card .industry-enquiry-form select,
    .industry-lead-showcase__form-card .industry-enquiry-form textarea {
        width: 100%;
        min-height: 48px;
        padding: 10px 14px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        background: #fff !important;
        color: #0f172a;
        font-size: 0.95rem;
        margin-bottom: 0;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form select {
        appearance: auto;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form textarea {
        min-height: 120px;
        resize: vertical;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form input:focus,
    .industry-lead-showcase__form-card .industry-enquiry-form select:focus,
    .industry-lead-showcase__form-card .industry-enquiry-form textarea:focus {
        border-color: #006847;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 104, 71, 0.12);
    }
    .industry-lead-showcase__form-card .industry-enquiry-form .row > [class*="col-"] {
        margin-bottom: 18px;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form .text_area {
        margin-bottom: 18px;
    }
    .industry-lead-showcase__form-actions {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 0 !important;
    }
    .industry-lead-showcase__form-actions .theme-btn.one.submitBtn,
    .industry-lead-showcase__form-actions .theme-btn.two {
        width: 100% !important;
        max-width: none !important;
        min-width: 0;
        min-height: 56px;
        line-height: 1.35 !important;
        padding: 0 28px !important;
        border-radius: 10px 0 10px 0 !important;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        text-align: center;
        white-space: normal;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.5s ease;
    }
    .industry-lead-showcase__form-actions .theme-btn.one.submitBtn:hover,
    .industry-lead-showcase__form-actions .theme-btn.two:hover {
        border-radius: 0 10px 0 10px !important;
    }
    @media (max-width: 991px) {
        #industry-form.industry-lead-showcase {
            padding-top: var(--industries-section-pad, 56px) !important;
            padding-bottom: var(--industries-section-pad, 56px) !important;
        }
        .industry-lead-showcase__wrap {
            grid-template-columns: 1fr;
        }
        .industry-lead-showcase__left-image {
            min-height: 220px;
            margin-top: 0;
        }
        .industry-lead-showcase__left-image img {
            min-height: 220px;
            height: 220px;
        }
        .industry-lead-showcase__form-card {
            padding: 24px 20px 20px;
        }
    }
    @media (min-width: 1200px) {
        .industry-lead-showcase__wrap {
            grid-template-columns: minmax(0, 0.85fr) minmax(0, 1.15fr);
            gap: 36px;
        }
    }
</style>

<section id="industry-form" class="industry-lead-showcase">
    <div class="container">
        <div class="industry-lead-showcase__wrap">
            <div class="industry-lead-showcase__left">
                <div class="before_title">{{ $form['label'] ?? 'Talk to Mirashka' }}</div>
                <h2 class="industry-lead-showcase__title">{{ $form['heading'] ?? '' }}</h2>
                <p class="industry-lead-showcase__content">{{ $form['content'] ?? '' }}</p>
                <div class="industry-lead-showcase__left-image">
                    <img
                        src="{{ asset($form['image'] ?? 'assets/frontend/img/industries/industry-form-consultant.webp') }}"
                        onerror="this.onerror=null;this.src='{{ asset($form['image_fallback'] ?? 'assets/frontend/img/compliance/cwi-bento-advisor.png') }}';"
                        alt="Mirashka HR consultant speaking with business owner while industry dashboard is visible"
                        loading="lazy"
                    >
                </div>
            </div>

            <div class="industry-lead-showcase__form-card">
                <div class="industry-form-wrap contact_form_box_inner simple_form">
                    <div class="contact_form_shortcode">
                        <form class="contactForm industry-enquiry-form" method="POST" novalidate>
                            @csrf
                            <input type="hidden" name="lead_type" value="{{ $form['lead_type'] ?? 'industry_hr_enquiry' }}">
                            <div class="row gutter_15px">
                                <div class="col-lg-6">
                                    <label for="industry-form-name">Your Name *</label>
                                    <input type="text" id="industry-form-name" name="name" required autocomplete="name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="industry-form-phone">Phone Number *</label>
                                    <input type="tel" id="industry-form-phone" name="phone" required autocomplete="tel">
                                </div>
                                <div class="col-lg-6">
                                    <label for="industry-form-email">Email *</label>
                                    <input type="email" id="industry-form-email" name="email" required autocomplete="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="industry-form-company">Company Name</label>
                                    <input type="text" id="industry-form-company" name="company_name" autocomplete="organization">
                                </div>

                                @if (! empty($form['segments']))
                                    <input type="hidden" name="industry" value="{{ $form['hidden_industry'] ?? 'Healthcare' }}">
                                    <div class="col-lg-6">
                                        <label for="segment-select">{{ $form['segment_label'] ?? 'Segment' }} *</label>
                                        <select name="{{ $form['segment_name'] ?? 'healthcare_segment' }}" id="segment-select" required>
                                            <option value="">Select option</option>
                                            @foreach ($form['segments'] as $segment)
                                                <option value="{{ $segment }}">{{ $segment }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if (! empty($form['show_branches']))
                                        <div class="col-lg-6">
                                            <label for="industry-form-branches">Number of Branches</label>
                                            <input type="text" id="industry-form-branches" name="branch_count" placeholder="e.g. 5–20">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-lg-6">
                                        <label for="industry-select">Industry *</label>
                                        <select name="industry" id="industry-select" required>
                                            <option value="">Select industry</option>
                                            @foreach (array_keys($form['industries'] ?? []) as $industry)
                                                <option value="{{ $industry }}">{{ $industry }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="sub-industry-select">Sub-Industry</label>
                                        <select name="sub_industry" id="sub-industry-select">
                                            <option value="">Select sub-industry</option>
                                        </select>
                                    </div>
                                @endif

                                <div class="col-lg-6">
                                    <label for="industry-form-team-size">Team Size</label>
                                    <select name="team_size" id="industry-form-team-size">
                                        <option value="">Select team size</option>
                                        @foreach ($teamSizes as $size)
                                            <option value="{{ $size }}">{{ $size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="industry-form-service">Service Required</label>
                                    <select name="service_required" id="industry-form-service">
                                        <option value="">Select a service</option>
                                        @foreach ($form['services'] ?? [] as $service)
                                            <option value="{{ $service }}">{{ $service }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @if ($form['show_call_time'] ?? true)
                                    <div class="col-lg-6">
                                        <label for="industry-form-call-time">Preferred Call Time</label>
                                        <input type="text" id="industry-form-call-time" name="preferred_call_time" placeholder="e.g. Weekdays 10 AM–1 PM">
                                    </div>
                                @endif

                                <div class="col-lg-12 text_area">
                                    <label for="industry-form-challenge">{{ $messageLabel }}</label>
                                    <textarea id="industry-form-challenge" name="message" rows="5" required placeholder="{{ $messagePlaceholder }}"></textarea>
                                </div>

                                <div class="col-lg-12 industry-lead-showcase__form-actions">
                                    <button type="submit" class="submitBtn theme-btn one">{{ $form['submit'] ?? 'Submit Industry HR Enquiry' }}</button>
                                    @if (! empty($form['secondary_cta']['label']))
                                        <a href="{{ $form['secondary_cta']['href'] ?? '#' }}" target="_blank" rel="noopener" class="theme-btn two">
                                            {{ $form['secondary_cta']['label'] }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

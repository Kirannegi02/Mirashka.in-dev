@php
    $form = $form ?? [];
@endphp

<style>
    .industry-lead-showcase {
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
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #dbe4ea;
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
        border: 1px solid #e7ebef;
        border-radius: 16px;
        box-shadow: 0 20px 48px rgba(16, 24, 40, 0.08);
        padding: 28px 28px 26px;
        height: 100%;
        display: flex;
        flex-direction: column;
        min-height: 0;
    }
    .industry-lead-showcase__form-card .industry-form-wrap,
    .industry-lead-showcase__form-card .industry-enquiry-form {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        min-height: 0;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form > .row {
        flex: 1 1 auto;
        display: flex;
        flex-wrap: wrap;
        align-content: flex-start;
        margin-bottom: 0;
    }
    .industry-lead-showcase__form-card .industry-enquiry-form > .row > [class*="col-"] {
        margin-bottom: 14px;
    }
    .industry-lead-showcase__challenge-field {
        display: flex;
        flex-direction: column;
        flex: 1 1 auto;
        min-height: 100px;
    }
    .industry-lead-showcase__challenge-field textarea {
        flex: 1 1 auto;
        min-height: 96px;
        resize: vertical;
    }
    .industry-lead-showcase__form-card label {
        font-size: 0.92rem;
        font-weight: 600;
        color: #334155;
        margin-bottom: 6px;
        display: block;
    }
    .industry-lead-showcase__form-card input,
    .industry-lead-showcase__form-card select,
    .industry-lead-showcase__form-card textarea {
        width: 100%;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        min-height: 48px;
        padding: 10px 12px;
        background: #fff;
        color: #0f172a;
    }
    .industry-lead-showcase__form-card textarea {
        min-height: 96px;
    }
    .industry-lead-showcase__form-card input:focus,
    .industry-lead-showcase__form-card select:focus,
    .industry-lead-showcase__form-card textarea:focus {
        border-color: #006847;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 104, 71, 0.14);
    }
    .industry-lead-showcase__form-actions {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: stretch;
        gap: 12px;
        margin-top: auto;
        margin-bottom: 0 !important;
        width: 100%;
    }
    .industry-lead-showcase__form-actions .theme-btn {
        flex: 1 1 0;
        min-width: 0;
        width: auto !important;
        max-width: none !important;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        text-align: center;
        white-space: normal;
        font-size: 0.8rem;
        line-height: 1.35;
        padding: 12px 14px;
        min-height: 48px;
    }
    .industry-lead-showcase__form-actions .theme-btn.one {
        background: #006847 !important;
        border-color: #006847 !important;
        color: #fff !important;
    }
    .industry-lead-showcase__form-actions .theme-btn.one:hover {
        background: #fff !important;
        color: #006847 !important;
    }
    .industry-lead-showcase__form-actions .theme-btn.two {
        background: transparent !important;
        color: #006847 !important;
        border-color: #006847 !important;
    }
    .industry-lead-showcase__form-actions .theme-btn.two:hover {
        background: #006847 !important;
        color: #fff !important;
    }
    @media (max-width: 991px) {
        .industry-lead-showcase {
            padding-top: var(--industries-section-pad, 56px) !important;
            padding-bottom: var(--industries-section-pad, 56px) !important;
        }
        .industry-lead-showcase__wrap {
            grid-template-columns: 1fr;
        }
        .industry-lead-showcase__left {
            height: auto;
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
            height: auto;
        }
        .industry-lead-showcase__form-actions {
            flex-direction: column;
        }
        .industry-lead-showcase__form-actions .theme-btn {
            width: 100% !important;
        }
    }
    @media (min-width: 1200px) {
        .industry-lead-showcase__wrap {
            grid-template-columns: minmax(0, 0.85fr) minmax(0, 1.15fr);
            gap: 36px;
        }
    }
</style>

<section id="industry-form" class="industry-lead-showcase industries-section--light">
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
                <div class="industry-form-wrap contact_form_box_inner">
                    <form class="contactForm industry-enquiry-form" method="POST" novalidate>
                        @csrf
                        <input type="hidden" name="lead_type" value="{{ $form['lead_type'] ?? 'industry_hr_enquiry' }}">
                        <div class="row gutter_15px">
                            <div class="col-md-6">
                                <label for="industry-form-name">Name</label>
                                <input type="text" id="industry-form-name" name="name" required autocomplete="name">
                            </div>
                            <div class="col-md-6">
                                <label for="industry-form-phone">Phone Number</label>
                                <input type="tel" id="industry-form-phone" name="phone" required autocomplete="tel">
                            </div>
                            <div class="col-md-6">
                                <label for="industry-form-email">Email</label>
                                <input type="email" id="industry-form-email" name="email" required autocomplete="email">
                            </div>
                            <div class="col-md-6">
                                <label for="industry-form-company">Company Name</label>
                                <input type="text" id="industry-form-company" name="company_name" autocomplete="organization">
                            </div>
                            @if (! empty($form['segments']))
                                <input type="hidden" name="industry" value="Healthcare">
                                <div class="col-md-6">
                                    <label for="healthcare-segment-select">Healthcare Segment</label>
                                    <select name="healthcare_segment" id="healthcare-segment-select" required>
                                        <option value="">Select segment</option>
                                        @foreach ($form['segments'] as $segment)
                                            <option value="{{ $segment }}">{{ $segment }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <div class="col-md-6">
                                    <label for="industry-select">Industry</label>
                                    <select name="industry" id="industry-select" required>
                                        <option value="">Select industry</option>
                                        @foreach (array_keys($form['industries'] ?? []) as $industry)
                                            <option value="{{ $industry }}">{{ $industry }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="sub-industry-select">Sub-Industry</label>
                                    <select name="sub_industry" id="sub-industry-select">
                                        <option value="">Select sub-industry</option>
                                    </select>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <label for="industry-form-team-size">Team Size</label>
                                <input type="text" id="industry-form-team-size" name="team_size" placeholder="e.g. 10–50">
                            </div>
                            <div class="col-md-6">
                                <label for="industry-form-service">Service Required</label>
                                <select name="service_required" id="industry-form-service">
                                    <option value="">Select service</option>
                                    @foreach ($form['services'] ?? [] as $service)
                                        <option value="{{ $service }}">{{ $service }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="industry-form-call-time">Preferred Call Time</label>
                                <input type="text" id="industry-form-call-time" name="preferred_call_time" placeholder="e.g. Weekdays 10 AM–1 PM">
                            </div>
                            <div class="col-12 industry-lead-showcase__challenge-field">
                                <label for="industry-form-challenge">Key HR Challenge</label>
                                <textarea id="industry-form-challenge" name="message" rows="3" required placeholder="Describe your key HR challenge…"></textarea>
                            </div>
                            <div class="col-12 industry-lead-showcase__form-actions">
                                <button type="submit" class="theme-btn one submitBtn">{{ $form['submit'] ?? 'Submit Industry HR Enquiry' }}</button>
                                <a href="{{ $form['secondary_cta']['href'] ?? '#' }}" target="_blank" rel="noopener" class="theme-btn two">
                                    {{ $form['secondary_cta']['label'] ?? 'Book 30-Minute Consultation' }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

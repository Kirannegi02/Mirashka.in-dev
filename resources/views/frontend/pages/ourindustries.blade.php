@extends('frontend.layouts.app')

@php
    $page = [
        'banner' => [
            'background' => 'assets/frontend/img/Whatwedo/we-build-influence-banner.webp',
            'label' => 'Our Industries',
            'title' => 'People Solutions Built for the Way Your Industry Actually Works',
            'paragraphs' => [
                'No two sectors hire, manage, or scale teams the same way. Banks need audit-ready processes. Healthcare needs dependable frontline teams. Tech needs agile hiring. Retail needs volume. Industrial businesses need discipline on the shop floor.',
                'Mirashka partners with organizations across industries to design HR, talent, and workforce systems that fit sector realities—so people operations support growth instead of slowing it down.',
            ],
            'ctas' => [
                [
                    'label' => 'Book Industry HR Consultation',
                    'href' => 'tel:08796927200',
                    'class' => 'theme-btn one primary-color-two',
                ],
                [
                    'label' => 'Explore Industries',
                    'href' => '#our-industries-grid',
                    'class' => 'theme-btn two',
                ],
            ],
        ],
        'industries_section' => [
            'before_title' => 'Industries Covered',
            'heading' => 'HR and talent solutions across six major industry clusters',
            'description' => 'Mirashka supports businesses across financial services, healthcare, technology, consumer and retail, industrial and energy, and automobile sectors. Each industry cluster has dedicated service thinking, role understanding and HR operating models.',
        ],
        'industries' => [
            [
                'title' => 'Financial Services',
                'description' => 'Compliance-driven talent solutions for institutions where trust, accuracy, documentation and customer responsibility matter deeply.',
                'subcategories' => ['Banking', 'Insurance', 'Asset Management'],
                'image' => 'assets/frontend/img/compliance/cwi-risk.png',
                'image_fallback' => 'assets/frontend/img/compliance/cwi-integrity.png',
                'route' => 'bfsifintech',
            ],
            [
                'title' => 'Healthcare',
                'description' => 'People solutions for healthcare businesses where reliability, empathy, process discipline and regulatory awareness are essential.',
                'subcategories' => ['Pharmaceuticals', 'Hospitals & Clinics', 'Medical Devices'],
                'image' => 'assets/frontend/img/compliance/cwi-integrity.png',
                'image_fallback' => 'assets/frontend/img/compliance/cwi-hero.png',
                'route' => 'healthwellness',
            ],
            [
                'title' => 'Technology',
                'description' => 'Fast, skill-led hiring and HR systems for technology companies where speed, specialization and retention drive growth.',
                'subcategories' => ['Software & SaaS', 'Hardware & Infrastructure', 'Emerging Technologies'],
                'image' => 'assets/frontend/img/compliance/cwi-bento-meeting.png',
                'image_fallback' => 'assets/frontend/img/compliance/cwi-risk.png',
                'route' => 'enterprisetechsaas',
            ],
            [
                'title' => 'Consumer & Retail',
                'description' => 'Scalable workforce solutions for customer-facing businesses where speed, service quality and operational consistency define success.',
                'subcategories' => ['E-commerce', 'Fashion & Apparel', 'Food & Beverage'],
                'image' => 'assets/frontend/img/compliance/cwi-hero.png',
                'image_fallback' => 'assets/frontend/img/compliance/cwi-services.png',
                'route' => 'luxurybrands',
            ],
            [
                'title' => 'Industrial & Energy',
                'description' => 'Structured HR, staffing and compliance support for operations-heavy industries where safety, productivity and skill reliability matter.',
                'subcategories' => ['Manufacturing', 'Oil & Gas', 'Renewable Energy'],
                'image' => 'assets/frontend/img/compliance/cwi-integrity.png',
                'image_fallback' => 'assets/frontend/img/compliance/cwi-bento-meeting.png',
                'route' => 'infrastructureenergy',
            ],
            [
                'title' => 'Automobile',
                'description' => 'Talent and HR solutions for automobile businesses where technical skill, customer service, process discipline and local market execution are critical.',
                'subcategories' => ['Automobile Accessories', 'Automobile Services', 'Automobile Dealerships & Mobility'],
                'image' => 'assets/frontend/img/compliance/cwi-risk.png',
                'image_fallback' => 'assets/frontend/img/compliance/cwi-hero.png',
                'route' => 'industriesweserve',
            ],
        ],
    ];
@endphp

@section('content')
<style type="text/css">
    .theme-btn.two {
        color: #ffffff;
        border: 1px solid #ffffff;
    }
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
        background: rgba(0, 0, 0, 0.8);
        z-index: -1;
    }
    .our-industries-card.service_post.style_four h2 a {
        margin-top: 0;
        margin-bottom: 8px;
    }
    .our-industries-card .our-industries-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .our-industries-card .our-industries-pill {
        display: inline-block;
        padding: 6px 12px;
        font-size: 13px;
        line-height: 1.35;
        font-weight: 500;
        color: var(--primary-color-one, #006039);
        background: rgba(0, 96, 57, 0.06);
        border: 1px solid rgba(0, 96, 57, 0.2);
        border-radius: 8px;
        text-decoration: none;
        transition: background 0.2s ease, border-color 0.2s ease, color 0.2s ease;
    }
    .our-industries-card .our-industries-pill:hover {
        background: var(--primary-color-one, #006039);
        border-color: var(--primary-color-one, #006039);
        color: #fff;
    }
    #our-industries-grid .our-industries-cards-row {
        --bs-gutter-x: 24px;
        --bs-gutter-y: 24px;
    }
    #our-industries-grid .our-industries-cards-row > [class*="col-"] {
        display: flex;
    }
    #our-industries-grid .our-industries-card {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }
    #our-industries-grid .our-industries-card .image_box {
        flex-shrink: 0;
        margin-bottom: 14px;
    }
    #our-industries-grid .our-industries-card .image_box img {
        height: 200px;
        width: 100%;
        object-fit: cover;
    }
    #our-industries-grid .our-industries-card .content_in_box {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 0 10px 16px !important;
    }
    #our-industries-grid .our-industries-card .content_box {
        flex: 1;
        display: flex;
        flex-direction: column;
        min-height: 0;
    }
    #our-industries-grid .our-industries-card .short_desc {
        margin: 0 0 10px;
    }
    #our-industries-grid .our-industries-card .our-industries-card-footer {
        margin-top: auto;
        padding-top: 10px;
    }
    #our-industries-grid .our-industries-card .our-industries-card-footer .read_more {
        display: inline-block;
        margin-top: 10px;
    }
    #our-industries-grid .our-industries-card.service_post.style_four p {
        margin-bottom: 0;
    }
</style>

<section
    class="single_banner style_one bg_op_1 custom_black_overlay p-0"
    style="background-image: url({{ asset($page['banner']['background']) }});"
>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 text-center">
                <div class="pd_top_80"></div>
                <div class="slider_content light_color">
                    <h6>{{ $page['banner']['label'] }}</h6>
                    <div class="pd_bottom_10"></div>
                    <h1 class="color_white">{{ $page['banner']['title'] }}</h1>
                    <div class="middle"></div>
                    @foreach ($page['banner']['paragraphs'] as $paragraph)
                        <p class="description color_white">{{ $paragraph }}</p>
                    @endforeach
                    <ul class="d_inline_block">
                        @foreach ($page['banner']['ctas'] as $cta)
                            <li>
                                <div class="theme_btn_all {{ $loop->first ? 'color_two' : '' }}">
                                    <a href="{{ $cta['href'] }}" class="{{ $cta['class'] }}">{{ $cta['label'] }}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="pd_bottom_80"></div>
            </div>
        </div>
    </div>
</section>

<section class="service-section" id="our-industries-grid">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">{{ $page['industries_section']['before_title'] }}</div>
                        <h2>{{ $page['industries_section']['heading'] }}</h2>
                        <p>{{ $page['industries_section']['description'] }}</p>
                    </div>
                    <div class="pd_bottom_10"></div>
                </div>
            </div>
        </div>
        <div class="row our-industries-cards-row">
            @foreach ($page['industries'] as $industry)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service_post style_four our-industries-card">
                        <div class="image_box">
                            <img
                                src="{{ asset($industry['image']) }}"
                                data-fallback="{{ asset($industry['image_fallback']) }}"
                                onerror="this.onerror=null;this.src=this.dataset.fallback;"
                                class="img-fluid"
                                alt="{{ $industry['title'] }}"
                                loading="lazy"
                            >
                        </div>
                        <div class="content_in_box">
                            <div class="content_box">
                                <h2 class="title_service">
                                    <a href="{{ route($industry['route']) }}" rel="bookmark">{{ $industry['title'] }}</a>
                                </h2>
                                <p class="short_desc">{{ $industry['description'] }}</p>
                                <div class="our-industries-card-footer">
                                    @if (!empty($industry['subcategories']))
                                        <div class="our-industries-pills" role="list">
                                            @foreach ($industry['subcategories'] as $subcategory)
                                                <a href="#" class="our-industries-pill" role="listitem">{{ $subcategory }}</a>
                                            @endforeach
                                        </div>
                                    @endif
                                    <a class="read_more" href="{{ route($industry['route']) }}">
                                        Read More<i class="icon-right-arrow-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>
@endsection

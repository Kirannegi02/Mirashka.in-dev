@php
    $services = $services ?? [];
    $cards = $services['cards'] ?? [];
    $ctaHref = $services['cta']['href'] ?? 'whatwedo';
    $ctaUrl = str_starts_with($ctaHref, '#') || str_starts_with($ctaHref, 'http')
        ? $ctaHref
        : route($ctaHref);
    $cardImagePool = [
        $services['image'] ?? 'assets/frontend/img/home/home-why-mirashka-hero.png',
        $services['image_secondary'] ?? 'assets/frontend/img/compliance/cwi-services.png',
        'assets/frontend/img/hraas/hraas-v3-hero.png',
        'assets/frontend/img/compliance/cwi-bento-meeting.png',
        'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
        'assets/frontend/img/leadership/ldr-hero-boardroom.png',
        'assets/frontend/img/workforce/wfm-card-payroll.png',
        'assets/frontend/img/hraas/hraas-card-engagement.png',
        'assets/frontend/img/compliance/cwi-card-policy.png',
        'assets/frontend/img/industries/industry-healthcare.webp',
    ];
    $sectionBg = asset('assets/frontend/images/projects/project-background-6-min.jpg');
@endphp

@if (!empty($cards))
<section
    class="project-section industries-services-deliver bg_dark_1 bg_op_1 light_color"
    id="industries-services"
    style="background-color: #006039; background-image: url('{{ $sectionBg }}');"
>
    <style type="text/css">
        .industries-services-deliver.project-section {
            background-color: #006039 !important;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            overflow: hidden;
        }
        .industries-services-deliver__head {
            margin-bottom: 44px;
            text-align: center;
        }
        .industries-services-deliver .title_sections {
            text-align: center !important;
        }
        .industries-services-deliver .title_all_box.style_one .title_sections .before_title,
        .industries-services-deliver .title_all_box.style_one .title_sections h2 {
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
        }
        .industries-services-deliver .title_all_box.style_one .before_title {
            color: #7dcea8;
            margin-bottom: 12px;
            text-align: center;
        }
        .industries-services-deliver .title_all_box.style_one h2 {
            color: #fff;
            font-size: clamp(1.65rem, 3.2vw, 2.35rem);
            line-height: 1.25;
            margin-bottom: 0;
            text-align: center;
            max-width: 1000px;
        }
        .industries-services-deliver__intro-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.05rem;
            line-height: 1.75;
            max-width: 900px;
            margin: 18px auto 0;
            text-align: center;
        }
        .industries-services-deliver__footer-cta {
            margin-top: 36px;
            text-align: center;
        }
        .industries-services-deliver__footer-cta .theme_btn_all .theme-btn.one {
            display: inline-flex !important;
            width: auto !important;
            min-width: 220px;
            max-width: 100%;
        }
        .industries-services-deliver .theme_btn_all {
            margin: 0;
        }
        .industries-services-deliver .theme_btn_all .theme-btn.one {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            line-height: 1.35 !important;
            min-height: 52px;
            width: 100%;
            padding: 12px 24px !important;
            white-space: normal;
            text-align: center;
            background: #fff !important;
            color: #006039 !important;
            border-color: #fff !important;
        }
        .industries-services-deliver .theme_btn_all .theme-btn.one:hover {
            background: transparent !important;
            color: #fff !important;
            border-color: #fff !important;
        }
        .industries-services-deliver__carousel-wrap {
            position: relative;
            z-index: 1;
            margin-top: 4px;
        }
        .industries-services-deliver .project_caro_section.carousel.style_three {
            margin: 0;
            padding: 0;
        }
        .industries-services-deliver .industries-services-swiper {
            overflow: hidden;
            padding: 4px 2px 0;
        }
        .industries-services-deliver .swiper-slide {
            height: auto;
            box-sizing: border-box;
        }
        .industries-services-deliver .project_post.style_nine {
            margin: 0;
            height: 100%;
            cursor: default;
            pointer-events: none;
        }
        .industries-services-deliver .project_post.style_nine .image_zoom_box {
            display: none !important;
        }
        .industries-services-deliver .project_post.style_nine:hover .image::after {
            bottom: -100%;
        }
        .industries-services-deliver .project_post.style_nine .image {
            height: 320px;
            border-radius: 8px;
        }
        @media (min-width: 1200px) {
            .industries-services-deliver .project_post.style_nine .image {
                height: 340px;
            }
        }
        @media (min-width: 1400px) {
            .industries-services-deliver .project_post.style_nine .image {
                height: 360px;
            }
        }
        .industries-services-deliver .project_post.style_nine .project_caro_content {
            padding: 22px 18px 28px;
        }
        .industries-services-deliver .project_post.style_nine .project_caro_content h2 {
            margin: 0 0 10px;
            line-height: 1.35;
        }
        .industries-services-deliver .project_post.style_nine .project_caro_content h2,
        .industries-services-deliver .project_post.style_nine .project_caro_content h2 span {
            font-size: 17px !important;
            font-weight: 700 !important;
            line-height: 1.35 !important;
            color: #fff;
            cursor: default;
            text-decoration: none;
            display: block;
        }
        .industries-services-deliver .project_post.style_nine .project_caro_content p {
            font-size: 13px !important;
            font-weight: 500 !important;
            line-height: 1.55 !important;
            margin-bottom: 0;
            color: rgba(255, 255, 255, 0.88);
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .industries-services-deliver .p_pagination {
            margin-top: 28px;
        }
        .industries-services-deliver .p_pagination .swiper-pagination {
            position: relative;
            padding: 0 !important;
        }
        .industries-services-deliver .p_pagination .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.45);
            opacity: 1;
            width: 10px;
            height: 10px;
            margin: 0 6px !important;
        }
        .industries-services-deliver .p_pagination .swiper-pagination-bullet-active {
            background: #fff;
            width: 28px;
            border-radius: 6px;
        }
        @media (max-width: 991.98px) {
            .industries-services-deliver__head {
                margin-bottom: 32px;
            }
            .industries-services-deliver__footer-cta {
                margin-top: 28px;
            }
        }
    </style>

    <div class="container">
        <div class="industries-services-deliver__head">
            <div class="title_all_box style_one text-center light_color industries-section-header">
                <div class="title_sections">
                    @if (!empty($services['label']))
                        <div class="before_title">{{ $services['label'] }}</div>
                    @endif
                    @if (!empty($services['heading']))
                        <h2>{{ $services['heading'] }}</h2>
                    @endif
                </div>
            </div>
            @if (!empty($services['content']))
                <p class="industries-services-deliver__intro-text">{{ $services['content'] }}</p>
            @endif
        </div>

        <div class="industries-services-deliver__carousel-wrap">
            <div class="project_caro_section carousel style_three">
                <div
                    class="swiper-container industries-services-swiper"
                    id="industries-services-swiper"
                    data-swiper='{
                        "autoplay": { "delay": 6000, "disableOnInteraction": false },
                        "freeMode": false,
                        "loop": true,
                        "speed": 800,
                        "centeredSlides": false,
                        "slidesPerView": 1,
                        "spaceBetween": 16,
                        "watchOverflow": true,
                        "pagination": {
                            "el": "#industries-services .industries-services-swiper-pagination",
                            "clickable": true
                        },
                        "breakpoints": {
                            "1600": { "slidesPerView": 5, "spaceBetween": 24 },
                            "1400": { "slidesPerView": 4, "spaceBetween": 22 },
                            "1200": { "slidesPerView": 3, "spaceBetween": 20 },
                            "768": { "slidesPerView": 2, "spaceBetween": 18 },
                            "576": { "slidesPerView": 1, "spaceBetween": 16 },
                            "0": { "slidesPerView": 1, "spaceBetween": 16 }
                        }
                    }'
                >
                    <div class="swiper-wrapper">
                        @foreach ($cards as $card)
                            @php
                                $cardImage = asset($card['image'] ?? $cardImagePool[$loop->index % count($cardImagePool)]);
                                $cardImageFallback = asset(
                                    $card['image_fallback']
                                        ?? $cardImagePool[($loop->index + 1) % count($cardImagePool)]
                                );
                            @endphp
                            <div class="swiper-slide">
                                <div class="project_post style_nine industries-services-deliver__card">
                                    <div class="image">
                                        <img
                                            loading="lazy"
                                            src="{{ $cardImage }}"
                                            class="img-fluid"
                                            alt="{{ $card['title'] ?? 'Healthcare HR service' }}"
                                            onerror="this.onerror=null;this.src='{{ $cardImageFallback }}';"
                                        >
                                    </div>
                                    <div class="project_caro_content">
                                        <h2 class="title_pro">
                                            <span>{{ $card['title'] ?? '' }}</span>
                                        </h2>
                                        <p>{{ $card['text'] ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="p_pagination">
                        <div class="swiper-pagination industries-services-swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        @if (!empty($services['cta']['label']))
            <div class="industries-services-deliver__footer-cta">
                <div class="theme_btn_all color_one">
                    <a href="{{ $ctaUrl }}" class="theme-btn one">{{ $services['cta']['label'] }}</a>
                </div>
            </div>
        @endif
    </div>
</section>
@endif

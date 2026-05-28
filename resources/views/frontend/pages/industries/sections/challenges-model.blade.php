@php
    $challenges = $challenges ?? [];
    $blocks = collect($challenges['blocks'] ?? [])->take(6)->values()->all();
    $cardImages = [
        'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
        'assets/frontend/img/workforce/wfm-card-policy.png',
        'assets/frontend/img/leadership/ldr-services-lifecycle.png',
    ];
@endphp

<style>
    .industry-challenge-solution {
        position: relative;
        padding: 88px 0 64px;
        background: #f7f8fa;
    }
    .industry-challenge-solution .title_all_box .before_title {
        color: #078586;
        text-decoration: underline;
        text-underline-offset: 4px;
    }
    .industry-challenge-solution .title_all_box .title_sections p {
        max-width: 760px;
        max-width: 760px;
        margin-left: auto;
        margin-right: auto;
    }
    .industry-challenge-solution .grid_show_case {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
        height: auto !important;
    }
    .industry-challenge-solution .grid_box._card {
        width: 100%;
        position: relative !important;
        left: auto !important;
        top: auto !important;
    }
    .industry-challenge-solution .service_post.style_three {
        height: 100%;
    }
    .industry-challenge-solution .service_post.style_three .image_box {
        height: 160px;
    }
    .industry-challenge-solution .service_post.style_three .image_box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .industry-challenge-solution .service_post.style_three .text_box .text_box_inner {
        min-height: 208px;
    }
    .industry-challenge-solution .service_post.style_three .text_box .text_box_inner h2 {
        margin-bottom: 10px;
        margin-top: 0;
    }
    .industry-challenge-solution .service_post.style_three .text_box .text_box_inner h2 a {
        font-size: 24px;
        line-height: 1.2;
        color: #111827;
    }
    .industry-challenge-solution .service_post.style_three .text_box .text_box_inner p {
        font-size: 16px;
        line-height: 1.6;
        color: #4a4e56;
    }
    .industry-challenge-solution .service_post.style_three .text_box .text_box_inner .read_more {
        text-transform: none;
        letter-spacing: 0;
        font-size: 16px;
        font-weight: 500;
        color: #111827;
        opacity: 1;
    }
    .industry-challenge-solution .service_post.style_three .text_box .text_box_inner .read_more i {
        margin-left: 6px;
    }
    .industry-challenge-solution .service_post.style_three:hover .text_box .text_box_inner h2 a,
    .industry-challenge-solution .service_post.style_three:hover .text_box .text_box_inner p,
    .industry-challenge-solution .service_post.style_three:hover .text_box .text_box_inner .read_more {
        color: #fff !important;
        opacity: 1 !important;
    }
    @media (max-width: 991px) {
        .industry-challenge-solution .grid_show_case {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 640px) {
        .industry-challenge-solution {
            padding: 62px 0 56px;
        }
        .industry-challenge-solution .grid_show_case {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="service-section industry-challenge-solution" id="industry-challenges-model">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">{{ $challenges['label'] ?? 'Leading' }}</div>
                        <h2>{{ $challenges['heading'] ?? 'Effective Solutions' }}</h2>
                        <p>{{ $challenges['content'] ?? '' }}</p>
                    </div>
                    <div class="pd_bottom_15"></div>
                </div>
            </div>
        </div>

        <div class="row gutter_30px">
            <div class="col-lg-12">
                <div class="service_section grid_all three_column dark_color">
                    <div class="grid_show_case grid_layout clearfix">
                        @foreach ($blocks as $index => $block)
                            <div class="grid_box _card">
                                <div class="service_post style_three">
                                    <div class="image_box">
                                        <img
                                            loading="lazy"
                                            width="500"
                                            height="500"
                                            src="{{ asset($cardImages[$index % count($cardImages)]) }}"
                                            alt="{{ $block['title'] ?? 'Industry challenge' }}"
                                        >
                                    </div>
                                    <div class="text_box">
                                        <div class="text_box_inner">
                                            <h2 class="title_service">
                                                <a href="{{ $challenges['cta']['href'] ?? '#industry-form' }}">{{ $block['title'] }}</a>
                                            </h2>
                                            <p class="short_desc">{{ $block['text'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

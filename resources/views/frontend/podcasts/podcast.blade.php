@extends('frontend.layouts.app')


@section('content')

<style>
    .service_post.style_one {
   
    border-radius: 12px;
}
    .podcast-date {
        position: absolute;
        top: 15px;
        left: 15px;
        background:#006039;
        color: #fff;
        padding: 6px 12px;
        font-size: 12px;
        border-radius: 12px;
        z-index: 2;
    }

    .service_post .image .overlay {
        z-index: 1;
    }
</style>

<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">Podcasts</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service-section">
    <div class="pd_top_80"></div>
    <div class="container">

        {{-- TITLE --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_two text-center dark_color">
                    <div class="title_sections two">
                        <div class="before_title"> Podcasts</div>
                        <h2>Latest Episodes</h2>
                        <p>Listen to our latest discussions and insights.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- PODCAST LOOP --}}
        <div class="row">
            @foreach($podcasts as $podcast)

            <div class="col-xl-4 col-lg-6 col-md-12 mb-4">

                <div class="service_post style_one h-100">

                    {{-- IMAGE --}}
                    <div class="image position-relative">
                        <div class="overlay"></div>

                        <img
                            src="{{ imageUrl($podcast->image) }}"
                            alt="{{ $podcast->tittle }}"
                            class="img-fluid w-100"
                            style="height:auto; object-fit:cover;border-radius: 12px 12px 0px 0px;"
                            loading="lazy">

                        {{-- DATE --}}
                        <span class="podcast-date">
                            {{ \Carbon\Carbon::parse($podcast->publish_date)->format('d M Y') }}
                        </span>
                    </div>

                    {{-- CONTENT --}}
                    <div class="service_content icon_yes">

                        <div class="icon_box">
                            <span class="icon icon-mic"></span>
                        </div>

                        <h2 class="title_service">
                            <a href="#">{{ $podcast->tittle }}</a>
                        </h2>

                        <p class="short_desc">
                            {{ Str::limit($podcast->description, 100) }}
                        </p>

                        {{-- AUDIO PLAYER 🔥 --}}
                        @if($podcast->audio)
                        <audio controls class="w-100 mb-2">
                            <source src="{{ asset('assets/admin/audio/podcast/'.$podcast->audio) }}" type="audio/mpeg">
                        </audio>
                        @endif


                    </div>

                </div>

            </div>

            @endforeach
        </div>

    </div>
    <div class="pd_bottom_80"></div>
</section>



@endsection
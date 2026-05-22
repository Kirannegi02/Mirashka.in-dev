@extends('frontend.layouts.app')

@section('content')

<div class="page_header_default style_one">
    <div class="parallax_cover">
        <div class="simpleParallax"><img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            <?php echo htmlspecialchars($post['title']['rendered']); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ url('/') }}">Home</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----header----->
<!----page-CONTENT----->
<div id="content" class="site-content">
    <div class="auto-container">
        <div class="row default_row">

            <!-- Blog Content -->
            <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12">
                <main id="main" class="site-main">

                    <div class="pd_top_90"></div>

                    <section class="blog_single_details_outer">

                        {{-- Featured Image --}}
                        <div class="single_content_upper">

                            @php
                            $image = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/images/default.jpg');
                            $imageAlt = $post['image_alt'] ?? strip_tags($post['title']['rendered'] ?? 'Blog post');
                            @endphp

                            <div class="blog_feature_image">
                                <img src="{{ $image }}" class="wp-post-image" alt="{{ $imageAlt }}" loading="lazy">
                            </div>

                            <div class="pd_bottom_20"></div>

                            <div class="post_single_content">

                                <h5>{!! $post['title']['rendered'] !!}</h5>

                                <div class="pd_bottom_15"></div>

                                <div class="description_box">

                                    <p class="post-date">
                                        {{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}
                                    </p>

                                    {!! $post['content']['rendered'] !!}

                                </div>

                            </div>

                        </div>


                        {{-- Related Posts --}}
                        <div class="related_post">

                            <div class="title_sections_inner">
                                <h2>Related Posts</h2>
                            </div>

                            <div class="swiper-container">

                                <div class="swiper-wrapper">

                                    @foreach($related_posts as $rel)

                                    @php
                                    $image = $rel['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/images/default.jpg');
                                    $imageAlt = $rel['image_alt'] ?? strip_tags($rel['title']['rendered'] ?? 'Related post');
                                    @endphp

                                    <div class="swiper-slide">

                                        <div class="news_box default_style list_view normal_view clearfix">

                                            <div class="image img_hover-1">
                                                <img src="{{ $image }}" class="img-fluid" alt="{{ $imageAlt }}" loading="lazy">

                                                <a href="{{ url('blog/'.$rel['slug']) }}" class="categories">
                                                    <i class="icon-folder"></i>
                                                    Blog
                                                </a>
                                            </div>

                                            <div class="content_box">

                                                <div class="date">
                                                    <span class="date_in_number">
                                                        {{ \Carbon\Carbon::parse($rel['date'])->format('F j, Y') }}
                                                    </span>
                                                </div>

                                                <h2 class="title">
                                                    <a href="{{ url('blog/'.$rel['slug']) }}">
                                                        {!! $rel['title']['rendered'] !!}
                                                    </a>
                                                </h2>

                                                <p class="short_desc">
                                                    {{ \Illuminate\Support\Str::limit(strip_tags($rel['excerpt']['rendered']),120) }}
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                    @endforeach

                                </div>

                            </div>

                        </div>

                    </section>

                    <div class="pd_bottom_70"></div>

                </main>
            </div>


            <!-- Sidebar -->
            <aside class="widget-area col-lg-4 col-md-12">

                <div class="side_bar">

                    <div class="pd_top_90"></div>

                    {{-- Categories --}}
                    <div class="widgets_grid_box">

                        <h2 class="widget-title">Post Categories</h2>

                        <ul class="wp-block-categories">

                            @foreach($categories as $cat)

                            <li>
                                <a href="#">
                                    {{ $cat['name'] }}
                                </a> ({{ $cat['count'] }})
                            </li>

                            @endforeach

                        </ul>

                    </div>


                    {{-- Recent Posts --}}
                    <div class="widgets_grid_box">

                        <h2 class="widget-title">Recent Posts</h2>

                        <div class="widget_post_box">

                            @foreach($recent_posts as $recent)

                            @php
                            $image = $recent['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/images/default.jpg');
                            $imageAlt = $recent['image_alt'] ?? strip_tags($recent['title']['rendered'] ?? 'Recent post');
                            @endphp

                            <div class="blog_in clearfix image_in">

                                <div class="image">
                                    <img src="{{ $image }}" alt="{{ $imageAlt }}" loading="lazy">
                                </div>

                                <div class="content_inner">

                                    <p class="post-date">
                                        <span class="icon-calendar"></span>
                                        {{ \Carbon\Carbon::parse($recent['date'])->format('F j, Y') }}
                                    </p>

                                    <h3>
                                        <a href="{{ url('blog/'.$recent['slug']) }}">
                                            {!! $recent['title']['rendered'] !!}
                                        </a>
                                    </h3>

                                </div>

                            </div>

                            @endforeach

                        </div>

                    </div>


                    {{-- Tags --}}
                    <div class="widgets_grid_box">

                        <h2 class="widget-title">Tag Clouds</h2>

                        <div class="wp-block-tag-cloud">

                            @foreach($tags as $tag)

                            <a href="#">
                                {{ $tag['name'] }}
                            </a>

                            @endforeach

                        </div>

                    </div>

                    <div class="pd_bottom_70"></div>

                </div>

            </aside>

        </div>
    </div>




</div>



@endsection
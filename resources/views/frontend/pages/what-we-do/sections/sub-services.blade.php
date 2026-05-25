@if(count($subServices ?? []))
@php
    $subColClass = count($subServices) <= 3 ? 'col-lg-4' : (count($subServices) <= 4 ? 'col-lg-3' : 'col-lg-4');
@endphp
<section class="cwi-sub-services-nav cwi-section--light cwi-section-glow" style="padding: 64px 0 48px; background: #f6f8f7;">
    <div class="container">
        <div class="title_all_box style_one text-center dark_color cwi-anim cwi-anim--up cwi-title-draw">
            <div class="title_sections">
                <div class="before_title">Explore Services</div>
                <h2 class="title">{{ $exploreHeading }}</h2>
            </div>
        </div>
        <div class="row gutter_30px" style="margin-top: 32px;">
            @foreach($subServices as $subSlug => $sub)
                <div class="{{ $subColClass }} col-md-6 mb-4">
                    <article class="cwi-related-services__card cwi-anim cwi-anim--up" data-cwi-delay="{{ min($loop->iteration, 6) }}">
                        <a href="{{ route($subRouteName, $subSlug) }}">
                            <img src="{{ asset($sub['card']['image']) }}" alt="{{ $sub['card']['title'] }}" loading="lazy">
                        </a>
                        <div class="cwi-related-services__body">
                            <h3><a href="{{ route($subRouteName, $subSlug) }}">{{ $sub['card']['title'] }}</a></h3>
                            <a href="{{ route($subRouteName, $subSlug) }}" class="cwi-related-services__link">Read More <i class="icon-right-arrow"></i></a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

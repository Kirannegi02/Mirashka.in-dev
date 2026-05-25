<section class="content-section cwi-sub-section--light bg_light_1 cwi-related-services cwi-section-glow">
    <div class="pd_top_60"></div>
    <div class="container">
        <div class="title_all_box style_one dark_color text-center cwi-title-draw cwi-anim cwi-anim--up">
            <div class="title_sections">
                <div class="before_title">Related Services</div>
                <h2 class="title">{{ $relatedHeading }}</h2>
            </div>
        </div>
        <div class="pd_top_32"></div>
        <div class="row gutter_30px">
            @foreach($allServices as $serviceSlug => $related)
                @if($serviceSlug === $slug)
                    @continue
                @endif
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="cwi-related-services__card cwi-anim cwi-anim--up" data-cwi-delay="{{ ($loop->index % 3) + 1 }}">
                        <a href="{{ route($subRouteName, $serviceSlug) }}">
                            <img src="{{ asset($related['card']['image']) }}" alt="{{ $related['card']['title'] }}" loading="lazy">
                        </a>
                        <div class="cwi-related-services__body">
                            <h3><a href="{{ route($subRouteName, $serviceSlug) }}">{{ $related['card']['title'] }}</a></h3>
                            <a href="{{ route($subRouteName, $serviceSlug) }}" class="cwi-related-services__link">Read More <i class="icon-right-arrow"></i></a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_60"></div>
</section>

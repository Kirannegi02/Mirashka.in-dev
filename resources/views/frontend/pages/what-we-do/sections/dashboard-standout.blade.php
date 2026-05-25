@php
    $section = $section ?? [];
    $grid = $section['grid'] ?? [];
    $center = $grid['center'] ?? [];
    $centerList = $center['list'] ?? $section['highlights'] ?? [];
@endphp
<section class="cwi-standout cwi-section--light cwi-section-glow">
    <div class="container">
        <header class="cwi-standout__header cwi-anim cwi-anim--up cwi-title-draw">
            @if(!empty($section['before_title']))
                <span class="cwi-standout__eyebrow">{{ $section['before_title'] }}</span>
            @endif
            <h2>{{ $section['heading'] }}</h2>
        </header>

        <div class="cwi-standout__grid">
            <div class="cwi-standout__col cwi-standout__col--left cwi-anim cwi-anim--left" data-cwi-delay="2">
                @if(!empty($grid['left_image']))
                <figure class="cwi-standout__photo cwi-standout__photo--landscape">
                    <img
                        src="{{ asset($grid['left_image']) }}"
                        alt="{{ $grid['left_image_alt'] ?? $section['heading'] }}"
                        loading="lazy"
                    >
                </figure>
                @endif
                @if(!empty($grid['left_card']))
                <article class="cwi-standout__card">
                    <span class="cwi-standout__card-icon" aria-hidden="true"><i class="{{ $grid['left_card']['icon'] }}"></i></span>
                    <h3>{{ $grid['left_card']['title'] }}</h3>
                    <p>{{ $grid['left_card']['text'] }}</p>
                </article>
                @endif
            </div>

            <article class="cwi-standout__card cwi-standout__card--tall cwi-standout__col--center cwi-anim cwi-anim--up" data-cwi-delay="3">
                @if(!empty($center['icon']))
                    <span class="cwi-standout__card-icon" aria-hidden="true"><i class="{{ $center['icon'] }}"></i></span>
                @endif
                <h3>{{ $center['title'] ?? $section['heading'] }}</h3>
                <p>{{ $center['text'] ?? $section['content'] }}</p>
                @if(count($centerList))
                <ul class="cwi-standout__list">
                    @foreach($centerList as $item)
                        <li>{{ is_array($item) ? ($item['text'] ?? $item['title'] ?? '') : $item }}</li>
                    @endforeach
                </ul>
                @endif
                @if(!empty($center['cta']))
                <div class="cwi-standout__cta-wrap">
                    <a href="{{ $center['cta_url'] ?? route('projectenquiries') }}" class="cwi-standout__cta">
                        {{ $center['cta'] }} <i class="icon-right-arrow"></i>
                    </a>
                </div>
                @endif
            </article>

            <div class="cwi-standout__col cwi-standout__col--right cwi-anim cwi-anim--right" data-cwi-delay="4">
                @if(!empty($grid['right_card']))
                <article class="cwi-standout__card">
                    <span class="cwi-standout__card-icon" aria-hidden="true"><i class="{{ $grid['right_card']['icon'] }}"></i></span>
                    <h3>{{ $grid['right_card']['title'] }}</h3>
                    <p>{{ $grid['right_card']['text'] }}</p>
                </article>
                @endif
                @if(!empty($grid['right_image']))
                <figure class="cwi-standout__photo cwi-standout__photo--landscape">
                    <img
                        src="{{ asset($grid['right_image']) }}"
                        alt="{{ $grid['right_image_alt'] ?? $section['heading'] }}"
                        loading="lazy"
                    >
                </figure>
                @endif
            </div>
        </div>
    </div>
</section>

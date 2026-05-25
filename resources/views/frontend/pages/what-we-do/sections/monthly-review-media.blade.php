@php
    $section = $section ?? [];
    $highlights = $section['highlights'] ?? $section['agenda'] ?? [];
    $quote = $section['quote'] ?? [];
    $secondaryImage = $section['secondary_image'] ?? $section['image'];
@endphp
<section class="cwi-monthly-media cwi-section--light cwi-section-glow">
    <div class="container">
        <header class="cwi-monthly-media__header cwi-anim cwi-anim--up cwi-title-draw">
            @if(!empty($section['before_title']))
                <span class="cwi-monthly-media__eyebrow">{{ $section['before_title'] }}</span>
            @endif
            <h2>{{ $section['heading'] }}</h2>
        </header>

        <div class="cwi-monthly-media__body">
            <div class="cwi-monthly-media__visual cwi-anim cwi-anim--left" data-cwi-delay="2">
                <div class="cwi-monthly-media__main-wrap">
                    <img
                        src="{{ asset($section['image']) }}"
                        alt="{{ $section['image_alt'] ?? $section['heading'] }}"
                        class="cwi-monthly-media__main"
                        loading="lazy"
                    >
                    @if(!empty($quote['text']))
                    <div class="cwi-monthly-media__quote">
                        <p>{{ $quote['text'] }}</p>
                        @if(!empty($quote['attribution']))
                            <span>{{ $quote['attribution'] }}</span>
                        @endif
                    </div>
                    @endif
                </div>
                @if(!empty($secondaryImage))
                <div class="cwi-monthly-media__secondary">
                    <img src="{{ asset($secondaryImage) }}" alt="" loading="lazy">
                    <span class="cwi-monthly-media__play" aria-hidden="true"><i class="ri-bar-chart-box-line"></i></span>
                </div>
                @endif
            </div>

            <div class="cwi-monthly-media__copy cwi-anim cwi-anim--right">
                @if(!empty($section['lead']))
                    <p class="cwi-monthly-media__lead">{{ $section['lead'] }}</p>
                @endif
                @if(!empty($section['content']))
                    <p class="cwi-monthly-media__text">{{ $section['content'] }}</p>
                @endif
                @if(count($highlights))
                <div class="cwi-monthly-media__grid">
                    @foreach($highlights as $item)
                        <div class="cwi-monthly-media__grid-item cwi-anim cwi-anim--up" data-cwi-delay="{{ min($loop->iteration, 4) }}">
                            <span class="cwi-monthly-media__grid-icon" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
                            <div>
                                <h3>{{ $item['title'] }}</h3>
                                <p>{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
                @if(!empty($section['cta']))
                    <div class="theme_btn_all">
                        <a href="{{ route('projectenquiries') }}" class="theme-btn one cwi-btn-cta cwi-btn-cta--on-light">{{ $section['cta'] }} <i class="icon-right-arrow"></i></a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

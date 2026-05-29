@php
    $section = $section ?? [];
    $theme = $section['theme'] ?? 'dark';
    $sectionClass = $theme === 'light' ? 'cwi-section--light' : 'cwi-section--dark';
@endphp
<section class="cwi-integrity {{ $sectionClass }} cwi-section-glow">
    <div class="container">
        <div class="cwi-integrity__layout">
            <div class="cwi-integrity__copy cwi-anim cwi-anim--left">
                <span class="cwi-integrity__eyebrow">{{ $section['eyebrow'] }}</span>
                <h2>{{ $section['heading'] }}</h2>
                <p class="cwi-integrity__intro">{{ $section['content'] }}</p>
                @foreach($section['features'] ?? [] as $feature)
                    <div class="cwi-integrity-feature cwi-anim cwi-anim--up" data-cwi-delay="{{ min($loop->iteration + 1, 4) }}">
                        <span class="cwi-integrity-feature__icon" aria-hidden="true"><i class="{{ $feature['icon'] }}"></i></span>
                        <div>
                            <h3>{{ $feature['title'] }}</h3>
                            <p>{{ $feature['text'] }}</p>
                        </div>
                    </div>
                @endforeach
                @if(!empty($section['cta']) || !empty($section['trust_name']))
                <div class="cwi-integrity__actions">
                    @if(!empty($section['cta']))
                    <div class="theme_btn_all">
                        <a href="{{ $section['cta_href'] ?? route('projectenquiries') }}" class="theme-btn one cwi-btn-cta cwi-btn-cta--on-dark">{{ $section['cta'] }} <i class="icon-right-arrow"></i></a>
                    </div>
                    @endif
                    @if(!empty($section['trust_name']))
                    <div class="cwi-integrity__trust">
                        <strong>{{ $section['trust_name'] }}</strong>
                        <span>{{ $section['trust_role'] ?? '' }}</span>
                    </div>
                    @endif
                </div>
                @endif
            </div>
            <div class="cwi-integrity__visual cwi-anim cwi-anim--right" data-cwi-delay="2">
                <div class="cwi-integrity__hex">
                    <img src="{{ asset($section['image']) }}" alt="{{ $section['image_alt'] ?? $section['heading'] }}" loading="lazy">
                </div>
                @foreach($section['float_cards'] ?? [] as $index => $card)
                    <div class="cwi-integrity-float cwi-anim cwi-anim--zoom {{ $index === 0 ? 'cwi-integrity-float--top' : 'cwi-integrity-float--bottom' }}" data-cwi-delay="{{ $index + 3 }}">
                        <span class="cwi-integrity-float__icon" aria-hidden="true"><i class="{{ $card['icon'] }}"></i></span>
                        <h4>{{ $card['title'] }}</h4>
                        <p>{{ $card['text'] }}</p>
                        @if(!empty($card['link']))
                            <a href="{{ $card['link'] }}" class="cwi-integrity-float__link">Read more <i class="icon-right-arrow"></i></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

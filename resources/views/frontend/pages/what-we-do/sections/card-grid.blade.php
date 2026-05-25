@php
    $section = $section ?? [];
    $theme = $section['theme'] ?? 'dark';
    $sectionClass = $theme === 'light' ? 'cwi-section--light' : 'cwi-section--dark';
    $cols = count($section['cards'] ?? []) >= 4 ? 4 : 3;
@endphp
<section class="cwi-card-grid {{ $sectionClass }} cwi-section-glow cwi-card-grid--cols-{{ $cols }}">
    <div class="container">
        <header class="cwi-card-grid__header cwi-anim cwi-anim--up cwi-title-draw">
            <span class="cwi-card-grid__eyebrow">{{ $section['before_title'] }}</span>
            <h2>{{ $section['heading'] }}</h2>
            @if(!empty($section['content']))
                <p>{{ $section['content'] }}</p>
            @endif
        </header>
        <div class="cwi-card-grid__items">
            @foreach($section['cards'] ?? [] as $card)
                <article class="cwi-card-grid__card cwi-anim cwi-anim--tilt" data-cwi-delay="{{ min($loop->iteration, 4) }}">
                    @if(!empty($card['tag']))
                        <span class="cwi-card-grid__tag">{{ $card['tag'] }}</span>
                    @endif
                    <span class="cwi-card-grid__icon" aria-hidden="true"><i class="{{ $card['icon'] }}"></i></span>
                    <h3>{{ $card['title'] }}</h3>
                    <p>{{ $card['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

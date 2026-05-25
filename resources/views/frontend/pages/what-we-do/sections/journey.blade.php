@php $section = $section ?? []; @endphp
<section class="cwi-journey cwi-section--light cwi-section-glow">
    <div class="container">
        <header class="cwi-journey__header cwi-anim cwi-anim--up cwi-title-draw">
            <span class="cwi-journey__eyebrow">{{ $section['before_title'] }}</span>
            <h2>{{ $section['heading'] }}</h2>
            <p>{{ $section['content'] }}</p>
        </header>
        <div class="cwi-journey__track">
            @foreach($section['phases'] ?? [] as $phase)
                <article class="cwi-journey__phase cwi-anim cwi-anim--up" data-cwi-delay="{{ min($loop->iteration, 4) }}">
                    <div class="cwi-journey__phase-marker">
                        <span class="cwi-journey__phase-step">{{ $phase['step'] }}</span>
                        <i class="{{ $phase['icon'] }}" aria-hidden="true"></i>
                    </div>
                    <div class="cwi-journey__phase-body">
                        <p class="cwi-journey__phase-sub">{{ $phase['subtitle'] }}</p>
                        <h3>{{ $phase['title'] }}</h3>
                        <p>{{ $phase['text'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

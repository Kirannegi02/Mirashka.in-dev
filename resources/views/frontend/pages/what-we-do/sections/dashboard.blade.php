@php
    $section = $section ?? [];
    $theme = $section['theme'] ?? 'dark';
    $sectionClass = $theme === 'light' ? 'cwi-section--light' : 'cwi-section--dark';
@endphp
<section class="cwi-dashboard {{ $sectionClass }} cwi-section-glow">
    <div class="container">
        <div class="cwi-dashboard__layout">
            <div class="cwi-dashboard__copy cwi-anim cwi-anim--left">
                <span class="cwi-dashboard__eyebrow">{{ $section['before_title'] }}</span>
                <h2>{{ $section['heading'] }}</h2>
                <p>{{ $section['content'] }}</p>
                @if(!empty($section['highlights']))
                    <ul class="cwi-dashboard__highlights">
                        @foreach($section['highlights'] as $item)
                            <li><i class="ri-check-double-line" aria-hidden="true"></i>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="cwi-dashboard__panel cwi-anim cwi-anim--right" data-cwi-delay="2">
                <figure class="cwi-dashboard__figure">
                    <img src="{{ asset($section['image']) }}" alt="{{ $section['image_alt'] ?? $section['heading'] }}" loading="lazy">
                </figure>
                <div class="cwi-dashboard__metrics">
                    @foreach($section['metrics'] ?? [] as $metric)
                        <div class="cwi-dashboard__metric cwi-anim cwi-anim--scale" data-cwi-delay="{{ min($loop->iteration, 4) }}">
                            <span class="cwi-dashboard__metric-icon" aria-hidden="true"><i class="{{ $metric['icon'] }}"></i></span>
                            <strong>{{ $metric['value'] }}</strong>
                            <span>{{ $metric['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

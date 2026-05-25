@php
    $section = $section ?? [];
    $theme = $section['theme'] ?? 'light';
    $sectionClass = $theme === 'dark' ? 'cwi-section--dark' : 'cwi-section--light';
@endphp
<section class="cwi-workflow {{ $sectionClass }} cwi-section-glow">
    <div class="container">
        <header class="cwi-workflow__header cwi-anim cwi-anim--up cwi-title-draw">
            <span class="cwi-workflow__eyebrow">{{ $section['before_title'] }}</span>
            <h2>{{ $section['heading'] }}</h2>
            @if(!empty($section['content']))
                <p>{{ $section['content'] }}</p>
            @endif
        </header>
        <div class="cwi-workflow__body">
            <figure class="cwi-workflow__visual cwi-anim cwi-anim--left" data-cwi-delay="2">
                <img src="{{ asset($section['image']) }}" alt="{{ $section['image_alt'] ?? $section['heading'] }}" loading="lazy">
            </figure>
            <ol class="cwi-workflow__steps">
                @foreach($section['steps'] ?? [] as $step)
                    <li class="cwi-workflow__step cwi-anim cwi-anim--right" data-cwi-delay="{{ min($loop->iteration, 5) }}">
                        <span class="cwi-workflow__step-num" aria-hidden="true">{{ $step['step'] ?? $loop->iteration }}</span>
                        <span class="cwi-workflow__step-icon" aria-hidden="true"><i class="{{ $step['icon'] }}"></i></span>
                        <div>
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['text'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>

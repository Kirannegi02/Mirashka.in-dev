@php $section = $section ?? []; @endphp
<section class="cwi-framework cwi-section--light cwi-section-glow">
    <div class="container">
        <div class="title_all_box style_one text-center dark_color cwi-anim cwi-anim--up cwi-title-draw">
            <div class="title_sections">
                <div class="before_title">{{ $section['before_title'] }}</div>
                <h2 class="title">{{ $section['heading'] }}</h2>
                <p>{{ $section['content'] }}</p>
            </div>
        </div>
        <div class="cwi-framework__track">
            @foreach($section['steps'] ?? [] as $step)
                <div class="cwi-framework-step cwi-anim cwi-anim--tilt" data-cwi-delay="{{ min($loop->iteration, 4) }}">
                    <span class="cwi-framework-step__dot" aria-hidden="true"><i class="{{ $step['icon'] }}"></i></span>
                    <p class="cwi-framework-step__subtitle">{{ $step['subtitle'] }}</p>
                    <h3 class="cwi-framework-step__title">{{ $step['title'] }}</h3>
                    <p>{{ $step['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

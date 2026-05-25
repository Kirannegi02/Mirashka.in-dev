@php $section = $section ?? []; @endphp
<section class="cwi-suitable cwi-section--light cwi-section-glow">
    <div class="container">
        <div class="title_all_box style_one text-center dark_color cwi-anim cwi-anim--up cwi-title-draw">
            <div class="title_sections">
                <div class="before_title">— {{ $section['before_title'] }} —</div>
                <h2 class="title">{{ $section['heading'] }}</h2>
            </div>
        </div>
        <div class="cwi-suitable__steps">
            @foreach($section['segments'] ?? [] as $seg)
                <article class="cwi-suitable-step cwi-anim cwi-anim--scale" data-cwi-delay="{{ min($loop->iteration, 4) }}">
                    <div class="cwi-suitable-step__icon-wrap">
                        <span class="cwi-suitable-step__num" aria-hidden="true">{{ $seg['step'] }}</span>
                        <i class="{{ $seg['icon'] }} cwi-suitable-step__icon" aria-hidden="true"></i>
                    </div>
                    <h3>{{ $seg['label'] }}</h3>
                    <p>{{ $seg['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

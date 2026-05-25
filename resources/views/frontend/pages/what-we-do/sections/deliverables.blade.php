@php $section = $section ?? []; @endphp
<section class="cwi-deliverables cwi-section--dark cwi-section-glow">
    <div class="container">
        <div class="title_all_box style_one text-center cwi-anim cwi-anim--up cwi-title-draw">
            <div class="title_sections light_color">
                <div class="before_title">— {{ $section['before_title'] }} —</div>
                <h2 class="title">{{ $section['heading'] }}</h2>
                @if(!empty($section['content']))
                    <p>{{ $section['content'] }}</p>
                @endif
            </div>
        </div>
        <div class="cwi-deliverables__cards">
            @foreach($section['cards'] ?? [] as $card)
                <article class="cwi-del-card cwi-del-card--{{ $card['style'] }} cwi-anim cwi-anim--up" data-cwi-delay="{{ min($loop->iteration, 3) }}">
                    <div class="cwi-del-card__bg" style="background-image: url('{{ asset($card['image']) }}');" aria-hidden="true"></div>
                    <div class="cwi-del-card__panel">
                        @if(($card['style'] ?? '') === 'standard' && !empty($card['icon']))
                            <span class="cwi-del-card__icon" aria-hidden="true"><i class="{{ $card['icon'] }}"></i></span>
                        @endif
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                        @if(!empty($card['bullets']))
                            <ul class="cwi-del-card__bullets">
                                @foreach($card['bullets'] as $bullet)
                                    <li>{{ $bullet }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

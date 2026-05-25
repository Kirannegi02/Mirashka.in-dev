@php $section = $section ?? []; @endphp
<section class="cwi-monthly cwi-section--light cwi-section-glow">
    <div class="container">
        <div class="cwi-monthly__layout">
            <div class="cwi-monthly__visual cwi-anim cwi-anim--left" data-cwi-delay="2">
                <img src="{{ asset($section['image']) }}" alt="{{ $section['image_alt'] ?? $section['heading'] }}" loading="lazy">
            </div>
            <div class="cwi-monthly__copy cwi-anim cwi-anim--right">
                <span class="cwi-monthly__eyebrow">{{ $section['before_title'] }}</span>
                <h2>{{ $section['heading'] }}</h2>
                <p class="cwi-monthly__intro">{{ $section['content'] }}</p>
                <ul class="cwi-monthly__agenda">
                    @foreach($section['agenda'] ?? [] as $item)
                        <li class="cwi-anim cwi-anim--up" data-cwi-delay="{{ min($loop->iteration, 5) }}">
                            <span class="cwi-monthly__agenda-icon" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
                            <div>
                                <h3>{{ $item['title'] }}</h3>
                                <p>{{ $item['text'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @if(!empty($section['cta']))
                    <div class="theme_btn_all">
                        <a href="{{ route('projectenquiries') }}" class="theme-btn one cwi-btn-cta cwi-btn-cta--on-light">{{ $section['cta'] }} <i class="icon-right-arrow"></i></a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

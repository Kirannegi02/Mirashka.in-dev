@php $section = $section ?? []; @endphp
<section class="cwi-risk cwi-section--light cwi-section-glow">
    <div class="container">
        <header class="cwi-risk__header cwi-anim cwi-anim--up cwi-title-draw">
            <span class="cwi-risk__eyebrow">{{ $section['before_title'] }}</span>
            <h2>{{ $section['heading'] }}</h2>
            <p class="cwi-risk__lead">{{ $section['lead'] }}</p>
            <p class="cwi-risk__text">{{ $section['content'] }}</p>
        </header>
        <div class="cwi-risk__body">
            <div class="cwi-risk__card cwi-anim cwi-anim--left" data-cwi-delay="2">
                <span class="cwi-risk__card-label">
                    <i class="ri-alert-line" aria-hidden="true"></i>
                    {{ $section['list_label'] ?? 'Key challenges we solve' }}
                </span>
                <ul class="cwi-risk__list">
                    @foreach($section['risks'] ?? [] as $risk)
                        <li><i class="ri-close-line" aria-hidden="true"></i>{{ $risk }}</li>
                    @endforeach
                </ul>
                <div class="theme_btn_all">
                    <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $section['cta'] }} <i class="icon-right-arrow"></i></a>
                </div>
            </div>
            @php $captionBelow = ($section['visual_caption_placement'] ?? 'overlay') === 'below'; @endphp
            <div class="cwi-risk__visual-col cwi-anim cwi-anim--right" data-cwi-delay="3">
                <figure class="cwi-risk__visual{{ $captionBelow ? ' cwi-risk__visual--no-cap' : '' }}">
                    <img src="{{ asset($section['image']) }}" alt="{{ $section['visual_alt'] ?? $section['heading'] }}" loading="lazy">
                    @if(!empty($section['visual_caption_title']) && ! $captionBelow)
                    <figcaption class="cwi-risk__visual-cap">
                        <strong>{{ $section['visual_caption_title'] }}</strong>
                        @if(!empty($section['visual_caption_text']))
                            <span>{{ $section['visual_caption_text'] }}</span>
                        @endif
                    </figcaption>
                    @endif
                </figure>
                @if(!empty($section['visual_caption_title']) && $captionBelow)
                <div class="cwi-risk__visual-cap-below">
                    <strong>{{ $section['visual_caption_title'] }}</strong>
                    @if(!empty($section['visual_caption_text']))
                        <p>{{ $section['visual_caption_text'] }}</p>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

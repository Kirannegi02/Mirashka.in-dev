@php
    $section = $section ?? [];
    $grid = $section['grid'] ?? [];
    $center = $grid['center'] ?? [];
    $centerList = $center['list'] ?? $section['highlights'] ?? [];
    $useIndustriesHeader = ! empty($section['use_industries_header']);
    $paragraphSeparators = ! empty($section['paragraph_separators']);
@endphp
<section class="cwi-standout cwi-section--light cwi-section-glow">
    <div class="container">
        @if ($useIndustriesHeader)
            <div class="title_all_box style_one text-center dark_color industries-section-header">
                <div class="title_sections">
                    @if (! empty($section['before_title']))
                        <div class="before_title">{{ $section['before_title'] }}</div>
                    @endif
                    @if (! empty($section['heading']))
                        <h2 class="title">{{ $section['heading'] }}</h2>
                        <div class="middle"></div>
                    @endif
                    @if (! empty($section['intro']))
                        <p>{{ $section['intro'] }}</p>
                    @endif
                </div>
            </div>
        @else
            <header class="cwi-standout__header cwi-anim cwi-anim--up cwi-title-draw">
                @if(!empty($section['before_title']))
                    <span class="cwi-standout__eyebrow">{{ $section['before_title'] }}</span>
                @endif
                <h2>{{ $section['heading'] }}</h2>
            </header>
        @endif

        <div class="cwi-standout__grid">
            <div class="cwi-standout__col cwi-standout__col--left cwi-anim cwi-anim--left" data-cwi-delay="2">
                @if(!empty($grid['left_image']))
                @php
                    $leftImageFallback = $grid['left_image_fallback'] ?? 'assets/frontend/img/compliance/cwi-bento-meeting.png';
                @endphp
                <figure class="cwi-standout__photo cwi-standout__photo--landscape">
                    <img
                        src="{{ asset($grid['left_image']) }}"
                        alt="{{ $grid['left_image_alt'] ?? $section['heading'] }}"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='{{ asset($leftImageFallback) }}';"
                    >
                </figure>
                @endif
                @if(!empty($grid['left_card']))
                <article class="cwi-standout__card">
                    @if(!empty($grid['left_card']['icon']) || !empty($grid['left_card']['title']))
                        <div class="cwi-standout__card-head">
                            @if(!empty($grid['left_card']['icon']))
                                <span class="cwi-standout__card-icon" aria-hidden="true"><i class="{{ $grid['left_card']['icon'] }}"></i></span>
                            @endif
                            @if(!empty($grid['left_card']['title']))
                                <h3>{{ $grid['left_card']['title'] }}</h3>
                            @endif
                        </div>
                    @endif
                    @if(!empty($grid['left_card']['text']))
                        <p>{{ $grid['left_card']['text'] }}</p>
                    @endif
                    @if(!empty($grid['left_card']['list']))
                        <ul class="cwi-standout__list {{ !empty($section['list_use_fontawesome']) ? 'cwi-standout__list--fa' : '' }}">
                            @foreach($grid['left_card']['list'] as $item)
                                @php
                                    $itemText = is_array($item) ? ($item['text'] ?? $item['title'] ?? '') : $item;
                                    $itemIcon = is_array($item) ? ($item['icon'] ?? 'fa-solid fa-circle-check') : 'fa-solid fa-circle-check';
                                @endphp
                                <li>
                                    @if(!empty($section['list_use_fontawesome']))
                                        <i class="{{ $itemIcon }}" aria-hidden="true"></i>
                                    @endif
                                    <span>{{ $itemText }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </article>
                @endif
            </div>

            <article class="cwi-standout__card cwi-standout__card--tall cwi-standout__col--center cwi-anim cwi-anim--up" data-cwi-delay="3">
                @if(!empty($center['icon']) && !empty($center['paragraphs']))
                    @if(!empty($center['icon']) || !empty($center['title']))
                        <div class="cwi-standout__card-head">
                            @if(!empty($center['icon']))
                                <span class="cwi-standout__card-icon" aria-hidden="true"><i class="{{ $center['icon'] }}"></i></span>
                            @endif
                            @if(!empty($center['title']))
                                <h3>{{ $center['title'] }}</h3>
                            @endif
                        </div>
                    @endif
                    <div class="cwi-standout__center-copy">
                        @foreach($center['paragraphs'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                            @if($paragraphSeparators && ! $loop->last)
                                <div class="middle left"></div>
                            @endif
                        @endforeach
                    </div>
                @else
                    @if(!empty($center['icon']) || !empty($center['title']))
                        <div class="cwi-standout__card-head">
                            @if(!empty($center['icon']))
                                <span class="cwi-standout__card-icon" aria-hidden="true"><i class="{{ $center['icon'] }}"></i></span>
                            @endif
                            @if(!empty($center['title']))
                                <h3>{{ $center['title'] }}</h3>
                            @endif
                        </div>
                    @endif
                    @if(!empty($center['paragraphs']))
                        @foreach($center['paragraphs'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                            @if($paragraphSeparators && ! $loop->last)
                                <div class="middle left"></div>
                            @endif
                        @endforeach
                    @else
                        <p>{{ $center['text'] ?? $section['content'] ?? '' }}</p>
                    @endif
                @endif
                @if(empty($center['paragraphs']) && count($centerList))
                <ul class="cwi-standout__list">
                    @foreach($centerList as $item)
                        <li>{{ is_array($item) ? ($item['text'] ?? $item['title'] ?? '') : $item }}</li>
                    @endforeach
                </ul>
                @endif
                @if(!empty($center['cta']))
                <div class="cwi-standout__cta-wrap">
                    <a href="{{ $center['cta_url'] ?? route('projectenquiries') }}" class="cwi-standout__cta">
                        {{ $center['cta'] }} <i class="icon-right-arrow"></i>
                    </a>
                </div>
                @endif
            </article>

            <div class="cwi-standout__col cwi-standout__col--right cwi-anim cwi-anim--right" data-cwi-delay="4">
                @if(!empty($grid['right_card']))
                <article class="cwi-standout__card">
                    @if(!empty($grid['right_card']['icon']) || !empty($grid['right_card']['title']))
                        <div class="cwi-standout__card-head">
                            @if(!empty($grid['right_card']['icon']))
                                <span class="cwi-standout__card-icon" aria-hidden="true"><i class="{{ $grid['right_card']['icon'] }}"></i></span>
                            @endif
                            @if(!empty($grid['right_card']['title']))
                                <h3>{{ $grid['right_card']['title'] }}</h3>
                            @endif
                        </div>
                    @endif
                    @if(!empty($grid['right_card']['text']))
                        <p>{{ $grid['right_card']['text'] }}</p>
                    @endif
                    @if(!empty($grid['right_card']['list']))
                        <ul class="cwi-standout__list {{ !empty($section['list_use_fontawesome']) ? 'cwi-standout__list--fa' : '' }}">
                            @foreach($grid['right_card']['list'] as $item)
                                @php
                                    $itemText = is_array($item) ? ($item['text'] ?? $item['title'] ?? '') : $item;
                                    $itemIcon = is_array($item) ? ($item['icon'] ?? 'fa-solid fa-circle-check') : 'fa-solid fa-circle-check';
                                @endphp
                                <li>
                                    @if(!empty($section['list_use_fontawesome']))
                                        <i class="{{ $itemIcon }}" aria-hidden="true"></i>
                                    @endif
                                    <span>{{ $itemText }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </article>
                @endif
                @if(!empty($grid['right_image']))
                @php
                    $rightImageFallback = $grid['right_image_fallback'] ?? 'assets/frontend/img/compliance/cwi-integrity.png';
                @endphp
                <figure class="cwi-standout__photo cwi-standout__photo--landscape">
                    <img
                        src="{{ asset($grid['right_image']) }}"
                        alt="{{ $grid['right_image_alt'] ?? $section['heading'] }}"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='{{ asset($rightImageFallback) }}';"
                    >
                </figure>
                @endif
            </div>
        </div>
    </div>
</section>

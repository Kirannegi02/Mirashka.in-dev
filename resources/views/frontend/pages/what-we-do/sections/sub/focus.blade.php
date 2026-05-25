@php $focus = $service['focus']; $sidebar = $service['sidebar']; @endphp
<section class="content-section cwi-focus-split cwi-sub-section--light bg_light_1 cwi-section-glow">
    <div class="container">
        <div class="row gutter_30px align-items-stretch">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <article class="hraas-focus-card cwi-anim cwi-anim--left">
                    <div
                        class="hraas-focus-card__image"
                        style="--cwi-focus-position: {{ $focus['image_position'] ?? 'center center' }};"
                    >
                        <img
                            src="{{ asset($focus['image']) }}"
                            alt="{{ $focus['title'] }}"
                            loading="lazy"
                            style="object-position: var(--cwi-focus-position);"
                        >
                    </div>
                    <div class="hraas-focus-card__body">
                        <span class="hraas-focus-card__tag">{{ $focus['tag'] }}</span>
                        <h2 class="hraas-focus-card__title">{{ $focus['title'] }}</h2>
                        <p class="hraas-focus-card__text">{{ $focus['content'] }}</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 cwi-focus-sidebar-col hraas-people-sidebar-col">
                <aside class="hraas-focus-sidebar cwi-anim cwi-anim--right" data-cwi-delay="2">
                    <div class="hraas-focus-sidebar__label">
                        <span class="hraas-focus-sidebar__label-dot" aria-hidden="true"></span>
                        {{ $sidebar['label'] }}
                    </div>
                    <h3 class="hraas-focus-sidebar__heading">{{ $sidebar['heading'] }}</h3>
                    <p class="hraas-focus-sidebar__text">{{ $sidebar['content'] }}</p>
                    <ul class="hraas-focus-sidebar__list">
                        @foreach($sidebar['items'] as $item)
                            <li>
                                <span class="hraas-focus-sidebar__list-icon" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
                                <span>{{ $item['label'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="hraas-focus-sidebar__actions theme_btn_all color_one">
                        <a href="{{ route('projectenquiries') }}" class="theme-btn one">{{ $sidebar['cta'] }}</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

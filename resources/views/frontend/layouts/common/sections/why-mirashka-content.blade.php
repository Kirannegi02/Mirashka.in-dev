@php
    $isDark = $isDark ?? false;
@endphp

<div class="title_all_box style_one {{ $isDark ? 'light_color' : 'dark_color' }}">
    <div class="title_sections">
        <div class="before_title">{{ $section['before_title'] }}</div>
        <h2 class="title">{{ $section['title'] }}</h2>
        @if(!empty($section['intro']))
            <p class="{{ $isDark ? 'color_white' : '' }}">{{ $section['intro'] }}</p>
        @endif
    </div>
</div>

@if(!empty($section['items']))
    <div class="pd_bottom_20"></div>
    @if(!empty($listTitle) && ($listTitle !== $section['title']))
        <h3 class="h5 mb-3 why-mirashka-list-label">{{ $listTitle }}</h3>
    @endif
    <div class="list_item_box style_two {{ $isDark ? 'light_color' : '' }}">
        <ul class="list-inline">
            @foreach($section['items'] as $item)
                <li class="list_items mr_bottom_15">
                    <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5"><i class="icon-checked"></i></span>
                        <span>
                            <strong>{{ $item['title'] }} –</strong>
                            {{ $item['text'] }}
                        </span>
                    </small>
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="pd_bottom_20"></div>
<div class="theme_btn_all {{ $isDark ? 'color_two' : 'color_one' }}">
    <a href="{{ route('projectenquiries') }}" class="theme-btn one {{ $isDark ? 'primary-color-two' : '' }}">Talk to Our HR Experts</a>
</div>

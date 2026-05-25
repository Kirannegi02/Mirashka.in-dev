@php
    $section = $section ?? [];
    $tabs = $section['tabs'] ?? $section['steps'] ?? [];
    $bgImage = asset($section['image'] ?? 'assets/admin/image/case-study/media/3vision-gallery-hrms.webp');
    $cta = $section['cta_box'] ?? [];
    $ctaText = $cta['text'] ?? 'Speak to an HR Advisor';
    $ctaUrl = $cta['url'] ?? route('projectenquiries');
    $ctaIcon = $cta['icon'] ?? 'icon-phone-call';
    $showReadMore = $section['show_read_more'] ?? true;
    $readMoreUrl = $section['read_more_url'] ?? route('workforce.sub', 'payroll-outsourcing-administration');
    $readMoreLabel = $section['read_more_label'] ?? 'Learn more';
@endphp
<section class="cwi-payroll-tabs cwi-section--light cwi-section-glow">
    <div class="container">
        @if(!empty($section['heading']) || !empty($section['content']))
        <header class="cwi-payroll-tabs__header cwi-anim cwi-anim--up cwi-title-draw">
            @if(!empty($section['before_title']))
                <span class="cwi-payroll-tabs__eyebrow">{{ $section['before_title'] }}</span>
            @endif
            @if(!empty($section['heading']))
                <h2>{{ $section['heading'] }}</h2>
            @endif
            @if(!empty($section['content']))
                <p>{{ $section['content'] }}</p>
            @endif
        </header>
        @endif

        <div class="cwi-payroll-tabs__panel cwi-anim cwi-anim--up" data-cwi-delay="2">
            <div class="tabs_all_box tabs_all_box_start type_one cwi-payroll-tabs__creote">
                <div class="tab_over_all_box">
                    <div class="tabs_header clearfix">
                        <ul class="showcase_tabs_btns nav clearfix" role="tablist">
                            @foreach($tabs as $tab)
                                @php
                                    $tabId = 'cwi-wfm-payroll-tab-' . $loop->iteration;
                                    $tabLabel = $tab['tab_label'] ?? (($tab['step'] ?? str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)) . '. ' . ($tab['title'] ?? 'Step'));
                                @endphp
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="s_tab_btn nav-link {{ $loop->first ? 'active' : '' }}"
                                        href="#{{ $tabId }}"
                                        data-tab="#{{ $tabId }}"
                                        role="tab"
                                        aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                    >{{ $tabLabel }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="toll_free">
                            <a href="{{ $ctaUrl }}">
                                <i class="{{ $ctaIcon }}" aria-hidden="true"></i>
                                {{ $ctaText }}
                            </a>
                        </div>
                    </div>
                    <div class="s_tab_wrapper">
                        <div class="s_tabs_content">
                            @foreach($tabs as $tab)
                                @php
                                    $tabId = 'cwi-wfm-payroll-tab-' . $loop->iteration;
                                    $paneEyebrow = $tab['eyebrow'] ?? $section['before_title'] ?? 'Payroll & Documentation';
                                    $paneTitle = $tab['pane_title'] ?? $tab['title'] ?? '';
                                    $paneText = $tab['text'] ?? '';
                                    $paneBg = !empty($tab['image']) ? asset($tab['image']) : $bgImage;
                                @endphp
                                <div
                                    class="s_tab fade {{ $loop->first ? 'active-tab show' : '' }}"
                                    id="{{ $tabId }}"
                                    role="tabpanel"
                                >
                                    <div
                                        class="tab_content one"
                                        style="background-image: url('{{ $paneBg }}');"
                                    >
                                        <div class="content_image">
                                            <h6>{{ $paneEyebrow }}</h6>
                                            <h2>{{ $paneTitle }}</h2>
                                            <p>{{ $paneText }}</p>
                                            @if($showReadMore && !empty($readMoreUrl))
                                                <a href="{{ $readMoreUrl }}">{{ strtoupper($readMoreLabel) }} <i class="icon-right-arrow"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

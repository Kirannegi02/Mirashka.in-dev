@php
    $tabs = config('hraas-categories.tabs', []);
    if ($tabs === []) {
        foreach (config('what-we-do-categories', []) as $cat) {
            $tabs[] = [
                'key' => $cat['megamenu_tab'] ?? '',
                'route' => $cat['route_name'] ?? '#',
                'label' => $cat['label'] ?? '',
                'menu_lines' => $cat['nav_tab_lines'] ?? [$cat['label'] ?? ''],
            ];
        }
    }
    $activeTab = $activeTab ?? 'compliance-integrity';
@endphp

<style>
    .hraas-category-tabs-wrap {
        background: #f8f9fa;
        border-bottom: 1px solid #e8e8e8;
        padding: 14px 0;
    }
    .hraas-category-tabs {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin: 0;
        padding: 0;
    }
    .hraas-category-tab {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 16px;
        border-radius: 6px;
        border: 1px solid #dde3e8;
        background: #fff;
        color: #374151;
        font-size: 18px;
        font-weight: 500;
        line-height: 1.3;
        text-decoration: none;
        text-align: center;
        transition: border-color 0.2s ease, color 0.2s ease, background 0.2s ease;
        font-family: inherit;
        max-width: 220px;
    }
    .hraas-category-tab__label {
        display: block;
    }
    .hraas-category-tab__line {
        display: block;
        white-space: nowrap;
    }
    .hraas-category-tab:hover {
        border-color: #d3a126;
        color: #806500;
    }
    .hraas-category-tab.is-active {
        background: #111827;
        border-color: #111827;
        color: #fff;
        font-weight: 600;
    }
    .hraas-category-tab.is-active:hover {
        color: #fff;
    }
    @media (max-width: 575.98px) {
        .hraas-category-tabs { gap: 8px; }
        .hraas-category-tab {
            font-size: 13px;
            padding: 7px 12px;
            flex: 1 1 calc(50% - 8px);
            max-width: calc(50% - 4px);
        }
    }
</style>

<nav class="hraas-category-tabs-wrap" aria-label="HR solution categories">
    <div class="container">
        <div class="hraas-category-tabs" role="navigation">
            @foreach($tabs as $tab)
                <a
                    href="{{ route($tab['route']) }}"
                    class="hraas-category-tab{{ $activeTab === $tab['key'] ? ' is-active' : '' }}"
                    title="{{ $tab['label'] }}"
                    @if($activeTab === $tab['key']) aria-current="page" @endif
                >
                    @if(!empty($tab['menu_lines']))
                        <span class="hraas-category-tab__label">
                            @foreach($tab['menu_lines'] as $line)
                                <span class="hraas-category-tab__line">{{ $line }}</span>
                            @endforeach
                        </span>
                    @else
                        {{ $tab['nav_label'] ?? $tab['label'] }}
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</nav>

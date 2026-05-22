{{--
    Reusable FAQ block — include on any page with a category key.

    @include('frontend.layouts.common.sections.faqs.category', ['categoryKey' => 'compliance'])

    Keys (config/faqs.php): compliance | workforce | leadership | talent | hraas

    Optional: showHeader, sectionClass, sectionId, compactTop, compactBottom
--}}
@php
    $categoryKey = $categoryKey ?? 'compliance';
    $faq = config("faqs.categories.{$categoryKey}");
    $showHeader = $showHeader ?? true;
    $sectionClass = $sectionClass ?? 'bg_light_1';
    $sectionId = $sectionId ?? 'faqs-'.$categoryKey;
@endphp

@if($faq)
<section class="mirashka-faq-category faqs-section {{ $sectionClass }}" id="{{ $sectionId }}">
    <div class="{{ ($compactTop ?? false) ? 'pt-5' : 'pd_top_80' }}"></div>
    <div class="container">
        @if($showHeader)
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="title_all_box style_seven text-center dark_color">
                    <div class="title_sections">
                        @if(!empty($faq['subtitle']))
                            <div class="before_title">{{ $faq['subtitle'] }}</div>
                        @endif
                        <div class="title">{{ $faq['title'] }}</div>
                    </div>
                    <div class="pd_bottom_30"></div>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-10 m-auto">
                @if(($faq['ui'] ?? 'dashed') === 'boxed')
                    @include('frontend.layouts.common.sections.faqs._accordion-boxed', [
                        'items' => $faq['items'],
                        'accordionId' => 'faq-'.$categoryKey,
                    ])
                @else
                    @include('frontend.layouts.common.sections.faqs._accordion-dashed', [
                        'items' => $faq['items'],
                        'accordionId' => 'faq-'.$categoryKey,
                    ])
                @endif
            </div>
        </div>
    </div>
    <div class="{{ ($compactBottom ?? false) ? 'pb-5' : 'pd_bottom_60' }}"></div>
</section>
@endif

@php
    $faq = $faq_blog ?? $faq ?? [];
    $faqs = $faq['faqs'] ?? [];
    $visualImage = $faq['image'] ?? 'assets/frontend/img/industries/industry-form-consultant.webp';
    $visualFallback = $faq['image_fallback'] ?? 'assets/frontend/img/compliance/cwi-bento-advisor.png';
@endphp

@if (! empty($faqs))
<section class="faqs-section bg-dark-section" id="industry-faqs">
    <div class="container">
        <div class="title_all_box style_one text-center light_color">
            <div class="title_sections">
                @if (! empty($faq['label']))
                    <div class="before_title">{{ $faq['label'] }}</div>
                @endif
                @if (! empty($faq['heading']))
                    <h2>{{ $faq['heading'] }}</h2>
                @endif
            </div>
        </div>
        <div class="row faq-layout g-4 align-items-stretch">
            <div class="col-lg-7 faq-left">
                <div class="faq_section type_one">
                    <div class="block_faq">
                        <div class="accordion">
                            <dl>
                                @foreach ($faqs as $i => $item)
                                    <dt class="faq_header {{ $i === 0 ? 'active' : '' }}">
                                        <span class="icon-play"></span> {{ $item['question'] ?? '' }}
                                    </dt>
                                    <dd class="accordion-content" style="{{ $i === 0 ? 'display:block;' : '' }}">
                                        <p>{{ $item['answer'] ?? '' }}</p>
                                    </dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>
                @if (! empty($faq['cta']['label']))
                    <div class="section-cta">
                        <a href="{{ url($faq['cta']['href'] ?? '/blog') }}" class="theme-btn one">{{ $faq['cta']['label'] }}</a>
                    </div>
                @endif
            </div>
            <div class="col-lg-5">
                <div class="faq-visual">
                    <img
                        src="{{ asset($visualImage) }}"
                        onerror="this.onerror=null;this.src='{{ asset($visualFallback) }}';"
                        alt="{{ $faq['image_alt'] ?? 'Mirashka healthcare HR consultant' }}"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </div>
</section>
@endif

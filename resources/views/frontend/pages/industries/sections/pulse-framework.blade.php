@php
    $pulse = $pulse ?? [];
    $cards = $pulse['cards'] ?? [];
    $carouselId = 'industryPulseCarousel';
@endphp

@if (!empty($cards))
<section class="industries-pulse-section industries-section--light" id="pulse">
    <style type="text/css">
        .industries-pulse-section.industries-section--light {
            padding-top: var(--industries-section-pad, 80px);
            padding-bottom: var(--industries-section-pad, 80px);
        }
        .industries-pulse-section .slider-container {
            width: 82%;
            margin: 0 auto 0;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }
        .industries-pulse-section .carousel-inner {
            position: relative;
        }
        .industries-pulse-section .carousel-item {
            height: 500px;
            position: relative;
            background-size: cover;
            background-position: center;
        }
        .industries-pulse-section .carousel-caption {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 15px;
            max-width: 420px;
            text-align: left;
        }
        .industries-pulse-section .carousel-caption h5 {
            font-size: 25px;
            margin: 10px 0;
        }
        .industries-pulse-section .carousel-caption .middle.left {
            margin-bottom: 10px;
        }
        .industries-pulse-section .carousel-caption p {
            font-size: 16px;
            color: #000;
            margin-bottom: 14px;
        }
        .industries-pulse-section .carousel-caption .industries-pulse-caption-cta {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            text-align: center !important;
            line-height: 1.35 !important;
            min-height: 48px;
            min-width: 0;
            width: auto;
            max-width: 100%;
            padding: 10px 22px !important;
            margin-top: 4px;
            white-space: normal;
            font-size: 14px !important;
        }
        .industries-pulse-section .carousel-caption .industries-pulse-caption-cta:hover {
            color: var(--primary-color-one, #006039) !important;
        }
        .industries-pulse-section .carousel-control-next,
        .industries-pulse-section .carousel-control-prev {
            top: 50%;
            transform: translateY(-50%);
            width: 5%;
        }
        .industries-pulse-section .carousel-control-next-icon {
            background-color: #000;
            border-radius: 5px;
        }
        .industries-pulse-section .carousel-control-prev-icon {
            background-color: #000;
            border-radius: 5px;
        }
        .industries-pulse-section #{{ $carouselId }} {
            height: auto;
            width: auto;
        }
        .industries-pulse-section .carousel-caption .title-before {
            margin: initial;
        }
        .industries-pulse-section .pulse {
            text-align: center;
            padding: 18px 16px 18px;
            background-color: #006039;
            color: #fff;
            border-radius: 0 0 20px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px 20px;
            box-sizing: border-box;
        }
        .industries-pulse-section .pulse a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            position: relative;
            display: inline-flex;
            align-items: center;
            padding: 6px 10px;
            font-size: 16px;
            line-height: 1.25;
        }
        .industries-pulse-section .pulse a:hover,
        .industries-pulse-section .pulse a.active {
            color: #e1a300 !important;
        }
        .industries-pulse-section .pulse a.active::before {
            content: '•';
            position: absolute;
            left: -10px;
            color: #e1a300;
            font-size: 24px;
            top: 50%;
            transform: translateY(-50%);
        }
        .industries-pulse-section .pulse span {
            background: #fff;
            color: #006039;
            width: 25px;
            display: inline-block;
            font-weight: 900;
            border-radius: 5px;
        }
        .industries-pulse-section .pulse .active span {
            background: #e1a300;
            color: #fff;
        }
        .industries-pulse-section .slider-container.pb-5 {
            padding-bottom: 0 !important;
        }
        @media (max-width: 767.98px) {
            .industries-pulse-section .slider-container {
                width: 100%;
            }
            .industries-pulse-section .carousel-item {
                height: 420px;
            }
            .industries-pulse-section .carousel-caption {
                max-width: calc(100% - 40px);
            }
            .industries-pulse-section .pulse {
                gap: 8px;
            }
            .industries-pulse-section .pulse a {
                font-size: 14px;
            }
        }
    </style>

    <div class="title_all_box style_one text-center dark_color industries-pulse-section__title industries-section-header">
        <div class="title_sections">
            @if (!empty($pulse['label']))
                <div class="before_title">{{ $pulse['label'] }}</div>
            @endif
            @if (!empty($pulse['heading']))
                <h2 class="title">{{ $pulse['heading'] }}</h2>
            @endif
            <div class="middle"></div>
            @if (!empty($pulse['content']))
                <p>{{ $pulse['content'] }}</p>
            @endif
        </div>
    </div>

    <div class="slider-container pb-5">
        <div id="{{ $carouselId }}" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($cards as $card)
                    @php
                        $slideBg = asset($card['image'] ?? 'assets/img/protect.png');
                        $slideFallback = asset($card['image_fallback'] ?? ($card['image'] ?? 'assets/img/protect.png'));
                        $letter = $card['letter'] ?? '';
                        $pillarTitle = $card['title'] ?? '';
                    @endphp
                    <div
                        class="carousel-item {{ $loop->first ? 'active' : '' }}"
                        style="background-image: url('{{ $slideBg }}');"
                        data-fallback="{{ $slideFallback }}"
                    >
                        <div class="carousel-caption">
                            <div class="title-before">{{ $letter }} — {{ $pillarTitle }}</div>
                            <h5>{{ $card['subtitle'] ?? '' }}</h5>
                            <div class="middle left"></div>
                            <p>{{ $card['text'] ?? '' }}</p>
                            @if (!empty($pulse['cta']['label']))
                                <a
                                    href="{{ $pulse['cta']['href'] ?? '#industry-form' }}"
                                    class="theme-btn one industries-pulse-caption-cta"
                                >{{ $pulse['cta']['label'] }}</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#{{ $carouselId }}" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#{{ $carouselId }}" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <div class="pulse" role="tablist" aria-label="PULSE framework pillars">
            @foreach ($cards as $card)
                @php
                    $letter = $card['letter'] ?? '';
                    $pillarTitle = $card['title'] ?? '';
                @endphp
                <a
                    href="#{{ $carouselId }}"
                    data-bs-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}"
                    role="tab"
                    aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                ><span>{{ $letter }}</span> — {{ $pillarTitle }}</a>
            @endforeach
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var carouselEl = document.getElementById('{{ $carouselId }}');
    if (!carouselEl) return;

    carouselEl.querySelectorAll('.carousel-item[data-fallback]').forEach(function (item) {
        var fallback = item.getAttribute('data-fallback');
        if (!fallback) return;
        var bg = item.style.backgroundImage.replace(/^url\(["']?|["']?\)$/g, '');
        var probe = new Image();
        probe.onerror = function () {
            item.style.backgroundImage = "url('" + fallback + "')";
        };
        probe.src = bg;
    });

    var pulseLinks = document.querySelectorAll('.industries-pulse-section .pulse a');
    carouselEl.addEventListener('slid.bs.carousel', function (event) {
        pulseLinks.forEach(function (link) {
            link.classList.remove('active');
            link.setAttribute('aria-selected', 'false');
        });
        var activeIndex = event.to;
        if (pulseLinks[activeIndex]) {
            pulseLinks[activeIndex].classList.add('active');
            pulseLinks[activeIndex].setAttribute('aria-selected', 'true');
        }
    });
});
</script>
@endif

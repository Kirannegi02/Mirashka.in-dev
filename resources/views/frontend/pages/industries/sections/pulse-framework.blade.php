@php
    $pulse = $pulse ?? [];
    $cards = $pulse['cards'] ?? [];
    $pulseImage = asset($pulse['image'] ?? 'assets/frontend/img/compliance/cwi-bento-advisor.png');
    $pulseImageFallback = asset($pulse['image_fallback'] ?? 'assets/frontend/img/compliance/cwi-bento-advisor.png');
    $pulseIcons = [
        'P' => 'fa-shield-halved',
        'U' => 'fa-people-group',
        'L' => 'fa-crown',
        'S' => 'fa-magnifying-glass',
        'E' => 'fa-bolt',
    ];
@endphp

<section class="industries-pulse-wrap" id="pulse">
    <div class="industries-pulse-hero position-relative pt-5">
        <div class="industries-pulse-hero__bg" aria-hidden="true">
            <img
                src="{{ $pulseImage }}"
                onerror="this.onerror=null;this.src='{{ $pulseImageFallback }}';"
                alt=""
            >
        </div>
        <div class="container position-relative">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="industries-pulse-hero__copy">
                        <h6 class="pulse-kicker">{{ $pulse['label'] ?? '' }}</h6>
                        <h3 class="pulse-heading">{{ $pulse['heading'] ?? '' }}</h3>
                        <p class="pulse-intro">{{ $pulse['content'] ?? '' }}</p>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="industries-pulse-hero__preview">
                        <img
                            src="{{ $pulseImage }}"
                            onerror="this.onerror=null;this.src='{{ $pulseImageFallback }}';"
                            alt="PULSE framework for industries"
                        >
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-xl-11">
                    <div class="pulse-pill-wrap" role="tablist" aria-label="PULSE framework">
                        <ul class="pulse-pills nav">
                            @foreach ($cards as $index => $card)
                                @php $letter = $card['letter']; @endphp
                                <li class="nav-item">
                                    <button
                                        type="button"
                                        class="nav-link{{ $index === 0 ? ' active' : '' }}"
                                        data-pulse-tab="{{ $index }}"
                                        role="tab"
                                        aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                                    >
                                        <i class="fa {{ $pulseIcons[$letter] ?? 'fa-circle' }}" aria-hidden="true"></i>
                                        <span class="pulse-pill-title">{{ $card['title'] }}</span>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="industries-pulse-panel-wrap">
        <div class="container">
            <div class="pulse-panel">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 g-3 pulse-cards-grid is-filtered">
                    @foreach ($cards as $index => $card)
                        @php
                            $cardImage = $card['image'] ?? ($pulse['image'] ?? 'assets/frontend/img/compliance/cwi-bento-advisor.png');
                            $cardImageFallback = $card['image_fallback'] ?? ($pulse['image_fallback'] ?? $cardImage);
                        @endphp
                        <div class="col">
                            <div
                                class="card pulse-ignite-card h-100{{ $index === 0 ? ' is-highlighted' : '' }}"
                                data-pulse-card="{{ $index }}"
                            >
                                <div class="pulse-ignite-thumb">
                                    <img
                                        src="{{ asset($cardImage) }}"
                                        onerror="this.onerror=null;this.src='{{ asset($cardImageFallback) }}';"
                                        alt="{{ $card['title'] }}"
                                        loading="lazy"
                                    >
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <h6 class="mb-2">{{ $card['title'] }}</h6>
                                    <p class="mb-0 flex-grow-1">{{ $card['text'] }}</p>
                                </div>
                                <div class="card-footer border-top bg-body p-4">
                                        <a class="pulse-card-link" href="{{ $pulse['cta']['href'] ?? '#industry-form' }}">
                                        <span>{{ $pulse['cta']['label'] ?? 'Apply PULSE to My Industry' }}</span>
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

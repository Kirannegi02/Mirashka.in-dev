@php
    $exp = $service['experience'] ?? null;
@endphp
@if(!empty($exp))
<section
    class="cwi-experience cwi-section--dark cwi-section-glow"
    style="background-image: url('{{ asset($exp['image'] ?? '') }}');"
>
    <div class="cwi-experience__overlay"></div>
    <div class="container cwi-experience__container">
        <div class="cwi-experience__main">
            <div class="cwi-experience__badge-col cwi-anim cwi-anim--left">
                <div class="cwi-experience__badge" aria-hidden="true">
                    <span class="cwi-experience__badge-icon">
                        <i class="{{ $exp['badge_icon'] ?? 'ri-customer-service-2-line' }}"></i>
                    </span>
                </div>
            </div>
            <div class="cwi-experience__copy cwi-anim cwi-anim--right" data-cwi-delay="2">
                <h2 class="cwi-experience__heading">{{ $exp['heading'] ?? '' }}</h2>
                @if(!empty($exp['content']))
                    <p class="cwi-experience__text">{{ $exp['content'] }}</p>
                @endif
                @if(!empty($exp['cta']))
                    <a href="{{ $exp['cta_url'] ?? route('projectenquiries') }}" class="cwi-experience__btn">
                        {{ $exp['cta'] }} <i class="icon-right-arrow"></i>
                    </a>
                @endif
            </div>
        </div>
        @if(!empty($exp['pillars']) && count($exp['pillars']))
            <div class="cwi-experience__pillars cwi-anim cwi-anim--up" data-cwi-delay="3">
                @foreach($exp['pillars'] as $pillar)
                    <div class="cwi-experience__pillar">
                        <span class="cwi-experience__pillar-num">{{ $pillar['num'] ?? '01' }}.</span>
                        <span class="cwi-experience__pillar-title">{{ $pillar['title'] ?? '' }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endif

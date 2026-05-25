@php
    $section = $section ?? [];
    $serviceItems = $section['items'] ?? [];
    $leftCount = (int) ceil(count($serviceItems) / 2);
    $serviceLeft = array_slice($serviceItems, 0, $leftCount);
    $serviceRight = array_slice($serviceItems, $leftCount);
@endphp
<section class="cwi-services cwi-section--dark cwi-section-glow">
    <div class="container">
        <div class="title_all_box style_one text-center light_color cwi-anim cwi-anim--up cwi-title-draw">
            <div class="title_sections">
                <div class="before_title">— {{ $section['before_title'] }} —</div>
                <h2 class="title">{{ $section['heading'] }}</h2>
                @if(!empty($section['content']))
                    <p>{{ $section['content'] }}</p>
                @endif
            </div>
        </div>
        <div class="cwi-services__process">
            <div class="cwi-services__col cwi-services__col--left">
                @foreach($serviceLeft as $service)
                    @php $serviceIndex = $loop->index; @endphp
                    <article class="cwi-services-step cwi-anim cwi-anim--left" data-cwi-delay="{{ min($loop->iteration, 6) }}">
                        <span class="cwi-services-step__watermark" aria-hidden="true">{{ $service['step'] }}</span>
                        <span class="cwi-services-step__icon" aria-hidden="true"><i class="{{ $service['icon'] }}"></i></span>
                        <div class="cwi-services-step__body">
                            <h3>
                                @if(isset($serviceSlugs[$serviceIndex]))
                                    <a href="{{ route($subRouteName, $serviceSlugs[$serviceIndex]) }}" class="cwi-services-step__link">{{ $service['title'] }}</a>
                                @else
                                    {{ $service['title'] }}
                                @endif
                            </h3>
                            <p>{{ $service['text'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
            <figure class="cwi-services__media cwi-anim cwi-anim--scale" data-cwi-delay="3">
                <img src="{{ asset($section['image']) }}" alt="{{ $section['image_alt'] ?? $section['heading'] }}" loading="lazy" width="640" height="800">
            </figure>
            <div class="cwi-services__col cwi-services__col--right">
                @foreach($serviceRight as $service)
                    @php $serviceIndex = $loop->index + $leftCount; @endphp
                    <article class="cwi-services-step cwi-services-step--right cwi-anim cwi-anim--right" data-cwi-delay="{{ min($loop->iteration, 6) }}">
                        <span class="cwi-services-step__watermark" aria-hidden="true">{{ $service['step'] }}</span>
                        <span class="cwi-services-step__icon" aria-hidden="true"><i class="{{ $service['icon'] }}"></i></span>
                        <div class="cwi-services-step__body">
                            <h3>
                                @if(isset($serviceSlugs[$serviceIndex]))
                                    <a href="{{ route($subRouteName, $serviceSlugs[$serviceIndex]) }}" class="cwi-services-step__link">{{ $service['title'] }}</a>
                                @else
                                    {{ $service['title'] }}
                                @endif
                            </h3>
                            <p>{{ $service['text'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

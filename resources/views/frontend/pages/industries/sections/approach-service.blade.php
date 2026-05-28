@php
    $a = $approach ?? [];
    $steps = $a['steps'] ?? [];
@endphp
<section class="service_section industries-approach-section bg-dark-section" id="industry-approach">
    <div class="pd_top_50"></div>
    <div class="container">
        <div class="row">
            <div class="title_all_box style_one text-center light_color">
                <div class="title_sections">
                    <div class="before_title">{{ $a['label'] ?? '' }}</div>
                    <h2>{{ $a['heading'] ?? '' }}</h2>
                    <p>{{ $a['content'] ?? '' }}</p>
                </div>
            </div>
            <div class="pd_bottom_20"></div>
        </div>
        <div class="row industries-approach-cards">
            @foreach ($steps as $step)
                @php
                    $cardImage = $step['image'] ?? 'assets/frontend/img/compliance/cwi-bento-meeting.png';
                @endphp
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 industries-approach-col">
                    <div class="service_box style_two dark_color industries-approach-card">
                        <div class="service_content_two">
                            <div class="content_inner" style="background-image:url('{{ asset($cardImage) }}');">
                                <div class="content_inner_in">
                                    <div class="icon_image">
                                        @if (!empty($step['icon']))
                                            <img src="{{ asset($step['icon']) }}" class="img-fluid" alt="">
                                        @else
                                            <i class="{{ $step['icon_class'] ?? 'ri-service-line' }}" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                    <h2>
                                        <a href="#industry-form">{{ $step['number'] }}. {{ $step['title'] }}</a>
                                    </h2>
                                    <p>{{ $step['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_50"></div>
</section>

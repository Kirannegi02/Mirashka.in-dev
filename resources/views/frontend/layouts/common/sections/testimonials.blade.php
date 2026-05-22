@php
    $testimonials = config('testimonials', []);
    $sectionClass = $sectionClass ?? 'pd_left_100 pd_right_100';
    $beforeTitle = $beforeTitle ?? 'Proof of Impact';
    $sectionTitle = $sectionTitle ?? 'Client Testimonials';
    $sectionSubtitle = $sectionSubtitle ?? 'Trusted by Leaders Across Industries';
    $useFluidContainer = $useFluidContainer ?? false;
@endphp

<section class="testimonial-section {{ $sectionClass }} bg_light_1" id="Impact">
    <div class="{{ isset($compactTop) && $compactTop ? 'pt-5' : 'pd_top_85' }}"></div>
    <div class="{{ $useFluidContainer ? 'container-fluid' : 'container' }}">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title_all_box style_seven dark_color">
                    <div class="title_sections">
                        <div class="before_title">{{ $beforeTitle }}</div>
                        <div class="title">{{ $sectionTitle }}</div>
                        @if($sectionSubtitle)
                            <div class="small_text_sub">{{ $sectionSubtitle }}</div>
                        @endif
                    </div>
                    <div class="pb-4"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="testimonial_sec dark_color style_two">

                    <div class="swiper single_swiper">
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial_box text-center">
                                        <div class="authour_image mb-3">
                                            <i class="icon-quote"></i>
                                            @if(!empty($testimonial['image']) && file_exists(public_path($testimonial['image'])))
                                                <img src="{{ asset($testimonial['image']) }}"
                                                     alt="{{ $testimonial['name'] }}"
                                                     width="120" height="120"/>
                                            @else
                                                <div class="testimonial-avatar-initials" aria-hidden="true">
                                                    {{ $testimonial['initials'] ?? strtoupper(substr($testimonial['name'], 0, 2)) }}
                                                </div>
                                            @endif
                                        </div>
                                        @if(!empty($testimonial['tagline']))
                                            <p class="testimonial-tagline">{{ $testimonial['tagline'] }}</p>
                                        @endif
                                        <div class="comment">
                                            &ldquo;{{ $testimonial['quote'] }}&rdquo;
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="swiper-button-next d-none d-md-block"></div>
                        <div class="swiper-button-prev d-none d-md-block"></div>
                    </div>

                    <div class="swiper single_swiper_tab mt-3">
                        <div class="swiper-wrapper text-center">
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="auth_details">
                                        <h2>{{ $testimonial['name'] }}</h2>
                                        <span>{{ $testimonial['role'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="{{ isset($compactTop) && $compactTop ? 'pb-5' : 'pd_bottom_80' }}"></div>
</section>

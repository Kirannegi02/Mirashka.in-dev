<div class="creote-image-box image-box-overlap">
    <div class="image_boxes style_eight">
        <img src="{{ asset($section['image']) }}"
             class="img-fluid image_fit height_500px pd_right_30"
             alt="{{ $section['title'] }}">
        <div class="row no-space">
            <div class="col-lg-5"></div>
            <div class="col-lg-7 bg_dark_2 mr_top_minus_150 pd_top_50 pd_left_70 pd_right_50 pd_bottom_20 bg_op_1"
                 style="background-image: url({{ asset('assets/images/pannern-n3.png') }})!important;">
                <div class="title_all_box style_one light_color">
                    <div class="title_sections left">
                        <div class="before_title color_white">{{ $section['before_title'] }}</div>
                        <p class="color_white mb-0">{{ $section['overlay_text'] ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

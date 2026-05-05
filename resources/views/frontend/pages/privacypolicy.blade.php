@extends('frontend.layouts.app')

@section('content')
<!----page header----->
<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        . <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Privacy Policy
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="index.html">Home</a> </li>
                            <li class="active"> Privacy Policy
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----page header----->
<section class="process-section" id="industries">
    <!--===============spacing==============-->
    <div class="pd_top_60"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="title_all_box style_seven text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">Our Commitment to Your Privacy</div>
                        <div class="title">Privacy Notice</div>
                        <div class="small_text_sub">Privacy Policy</div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_40"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
        </div>
        <div class="row">



            <p>Your use of this website is governed by our Privacy Policy outlined below.</p>
            <p>If you have any questions or need further details about our privacy practices, please email us at
                <a href="mailto:info@mirashka.in">info@mirashka.in</a>
                or write to: <strong>ElevateOne Media GT-43, First Floor, Sector 117 Noida (U.P.) -201301</strong>.
            </p>
            <p>We may collect information you provide when you subscribe, register, fill out forms, participate in
                surveys, or contact us by email. Additionally, we may collect data about your visits to
                <strong>www.elevateonemedia.com</strong>, including traffic data, location data, weblogs, and resources
                accessed.
            </p>
            <p>ElevateOne Media may also gather statistical data about browsing patterns and user behavior. This data is
                aggregated and does not identify individual users.</p>
            <p>We may use cookies to collect general information about how visitors use our website, such as the most
                visited pages, average time on site, and overall site performance. Cookies help us improve user
                experience. If you prefer, you can disable cookies through your browser settings.</p>
            <p>All data collected will be protected against unauthorized access. Your information may be shared with our
                affiliates and subsidiaries in accordance with applicable laws.</p>
            <p>If you do not wish us to use your information, you may opt out by selecting relevant options on our forms
                or by contacting us directly at the address or email above.</p>
            <h5 class="fw-semibold mt-4">Changes</h5>
            <p>We may update this Privacy Policy periodically. Any changes will be posted on this page before they take
                effect.</p>




            <h5 class="fw-semibold mt-4">GST Registration Details</h5>

            <p><strong>Legal Name:</strong> EOM CONSULTING LLP</p>
            <p><strong>Trade Name:</strong> EOM CONSULTING LLP</p>
            <p><strong>GST Registration Number:</strong> 09AAMFE5079K1ZS</p>
            <p><strong>Constitution of Business:</strong> Limited Liability Partnership</p>

            <p class="mt-3">
                <strong>Principal Place of Business:</strong><br>
                Building No./Flat No.: B9 – 1702<br>
                Road/Street: Gardenia Glory<br>
                Locality/Sub Locality: Sector 46<br>
                City: Noida<br>
                District: Gautambuddha Nagar<br>
                State: Uttar Pradesh<br>
                PIN Code: 201303
            </p>


        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_60"></div>
    <!--===============spacing==============-->
</section>

@endsection
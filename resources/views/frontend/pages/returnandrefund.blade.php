@extends('frontend.layouts.app')


@section('content')


<div id="content" class="site-content "></div>
<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets/frontend/img/page/banner/'.rand(1,20).'.webp') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">Return & Refund Policy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="process-section">
    <div class="pd_top_60"></div>
    <div class="container">
        <div class="row">

            <p>ElevateOne Media provides service-based digital and consulting solutions.</p>

            <h5 class="fw-semibold mt-4">Nature of Services</h5>
            <p>As our offerings are professional services, physical returns are not applicable.</p>

            <h5 class="fw-semibold mt-4">Refund Eligibility</h5>
            <ul style="list-style:none;padding-left:0;">
                <li>✔ Payment deducted but service not initiated.</li>
                <li>✔ Duplicate payment made.</li>
            </ul>

            <h5 class="fw-semibold mt-4">Non-Refundable Situations</h5>
            <ul style="list-style:none;padding-left:0;">
                <li>✔ Service already started.</li>
                <li>✔ Client changed requirements after approval.</li>
                <li>✔ Delays caused due to client dependencies.</li>
            </ul>

            <h5 class="fw-semibold mt-4">Refund Processing</h5>
            <p>Approved refunds will be credited within 7–10 working days to the original payment source.</p>

            <h5 class="fw-semibold mt-4">Cancellation</h5>
            <p>Service cancellations must be requested via official email before service initiation.</p>

            <h5 class="fw-semibold mt-4">Refund Contact</h5>
            <p>
                Email: info@mirashka.in<br>
                Address: GT-43, First Floor, Sector 117 Noida (U.P.) -201301
            </p>

        </div>
    </div>
    <div class="pd_bottom_60"></div>
</section>


@endsection
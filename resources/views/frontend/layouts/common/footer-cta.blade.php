<section class="cm-support-section">
    <div class="container px-2">
        <div class="row">
            <div class="col-12 text-center">
                <div class="cm-support-head">
                    <h2>You are one step closer to building your next growth chapter</h2>
                    <span class="cm-support-line"></span>
                    <p>
                        Share your goals and project requirements with Mirashka. Our team will review your brief and
                        connect with a practical strategy across brand, technology, and performance marketing.
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mx-0">
            <div class="col-lg-4 px-2">
                <div class="cm-support-card">
                    <img src="{{ asset('assets/frontend/img/page/contactUs.png') }}" alt="What is included" class="cm-support-card-img">
                    <h3>What you get</h3>
                    <hr>
                    <p>
                        Discovery call, execution roadmap, and transparent next steps tailored to your business goals,
                        team structure, timeline, and expected outcomes.
                    </p>
                </div>
            </div>

            <div class="col-lg-8 px-2">
                <div class="cm-support-form-wrap">
                    <form id="project-enquiry-form" class="cm-support-form contactForm" method="post" action="{{ route('contact.submit') }}" role="form">
                        @csrf
                        <input type="hidden" name="lead_type" value="project_enquiry">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Your Name <span>*</span></label>
                                <input type="text" name="name" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6">
                                <label>Your Phone <span>*</span></label>
                                <input type="tel" name="phone" placeholder="Phone *" required>
                            </div>
                            <div class="col-md-6">
                                <label>Your Email <span>*</span></label>
                                <input type="email" name="email" placeholder="Email *" required>
                            </div>
                            <div class="col-md-6">
                                <label>Project Name <span>*</span></label>
                                <input type="text" name="project_name" placeholder="Project Name *" required>
                            </div>
                            <div class="col-md-12">
                                <label>Project Details <span>*</span></label>
                                <textarea name="project_details" rows="4" placeholder="Describe your project..." required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="submitBtn" type="submit">Submit Enquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .cm-support-section {
        background: #fff;
        padding: 16px 0 84px;
    }

    .cm-support-section .container {
        max-width: 1320px;
    }

    .cm-support-head h2 {
        margin: 0;
        color: #1c2432;
        font-weight: 700;
        line-height: 1.2;
        font-size: clamp(1.85rem, 3.1vw, 3.15rem);
    }

    .cm-support-line {
        width: 112px;
        height: 3px;
        border-radius: 3px;
        background: linear-gradient(90deg, #01735c 0%, #0a8f67 100%);
        margin: 14px auto 12px;
        display: block;
    }

    .cm-support-head p {
        color: #24655a;
        font-size: 0.95rem;
        line-height: 1.7;
        margin: 0 auto 22px;
        max-width: 980px;
    }

    .cm-support-card {
        height: 100%;
        background: linear-gradient(140deg, #0c6e77 0%, #0a8f67 52%, #20b68a 100%);
        border-radius: 12px;
        padding: 18px;
        color: #fff;
    }

    .cm-support-card-img {
        width: 100%;
        height: 190px;
        object-fit: cover;
        border-radius: 10px;
    }

    .cm-support-card h3 {
        margin: 12px 0 6px;
        font-size: 2rem;
        font-weight: 700;
    }

    .cm-support-card hr {
        border-color: rgba(255, 255, 255, 0.7);
        opacity: 1;
    }

    .cm-support-card p {
        margin: 0;
        font-size: 1rem;
        line-height: 1.55;
    }

    .cm-support-form-wrap {
        height: 100%;
        border-radius: 12px;
        background: #f4f4f5;
        padding: 18px;
    }

    .cm-support-form label {
        display: block;
        margin: 0 0 6px;
        color: #242b38;
        font-size: 0.95rem;
        font-weight: 500;
    }

    .cm-support-form label span {
        color: #d6293e;
    }

    .cm-support-form input,
    .cm-support-form textarea {
        width: 100%;
        border: 1px solid #d6dbe1;
        border-radius: 4px;
        padding: 10px 12px;
        font-size: 0.92rem;
        background: #fff;
        outline: none;
    }

    .cm-support-form textarea {
        resize: vertical;
        min-height: 120px;
    }

    .cm-support-form button {
        background: linear-gradient(120deg, #014d2f 0%, #026a3d 52%, #0b8a4d 100%);
        color: #fff;
        border: 0;
        border-radius: 4px;
        padding: 10px 16px;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    @media (max-width: 991px) {
        .cm-support-section .row.mx-0 {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
    }
</style>
<section class="way-section py-2">
    <div class="container px-2">
        <div class="way-bg">
            <div class="way-shapes-img">
                <div class="way-shapes-left"><span></span></div>
                <div class="way-shapes-right"><span></span></div>
            </div>

            <div class="row align-items-end mx-0">
                <div class="col-lg-8 col-md-12 px-2">
                    <div class="section-inner-header way-inner-header mb-0 py-2">
                        <h2>
                            <span class="cm-line">Take the first step towards accelerating your</span>
                            <span class="cm-line">brand and business</span>
                        </h2>
                        <p>
                            <span class="cm-line">Get strategic clarity and expert execution tailored for your growth journey.</span>
                            <span class="cm-line">Start today for stronger outcomes and scalable momentum</span>
                        </p>
                        <a href="{{ url('/project-enquiries') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 px-2">
                    <div class="way-img">
                        <img src="{{ asset('assets/frontend/img/page/contactUs.png') }}" class="img-fluid" alt="doctor-way-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .way-section {
        display: block;
        box-sizing: border-box;
        padding-top: .5rem !important;
        padding-bottom: .5rem !important;
        background-color: #ffffff;
        margin: 0;
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 64px;
        position: relative;
        z-index: 4;
    }

    .way-section .container {
        max-width: 1320px;
    }

    .way-bg {
        position: relative;
        overflow: hidden;
        border-radius: 18px;
        background: linear-gradient(120deg, #014d2f 0%, #026a3d 52%, #0b8a4d 100%);
        padding: 6px 26px 0;
        min-height: 225px;
        margin-bottom: -92px;
    }

    .way-shapes-img {
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 1;
    }

    .way-shapes-left span {
        position: absolute;
        left: 44px;
        top: 70px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(39, 193, 165, 0.28);
    }

    .way-shapes-right span {
        position: absolute;
        right: -72px;
        top: 56px;
        width: 252px;
        height: 126px;
        border-radius: 999px;
        background: rgba(207, 234, 231, 0.52);
    }

    .way-inner-header {
        position: relative;
        z-index: 2;
        color: #fff;
        padding-top: 14px !important;
        padding-bottom: 10px !important;
    }

    .way-inner-header h2 {
        font-family: "Inter", sans-serif;
        font-size: clamp(1.85rem, 3vw, 2.7rem);
        line-height: 1.15;
        font-weight: 700;
        margin: 0 0 18px;
        color: #fff;
        max-width: 15ch;
    }

    .way-inner-header p {
        margin: 0 0 20px;
        color: rgba(255, 255, 255, 0.93);
        font-family: "Inter", sans-serif;
        font-size: 1.35rem;
        line-height: 1.4;
        max-width: 32ch;
    }

    .way-inner-header .cm-line {
        display: block;
        white-space: nowrap;
    }

    .way-inner-header .btn.btn-primary {
        margin-bottom: 20px;
        background: #fff;
        border: 0;
        color: #192233;
        border-radius: 8px;
        font-family: "Inter", sans-serif;
        font-size: 1rem;
        font-weight: 600;
        padding: 10px 20px;
        text-decoration: none;
        box-shadow: none;
    }

    .way-img {
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        min-height: 250px;
    }

    .way-img img {
        max-width: 100%;
        height: auto;
        width: 100%;
        vertical-align: middle;
        border: 0;
        object-fit: contain;
        object-position: bottom right;
    }

    @media (max-width: 991px) {
        .way-bg {
            margin-bottom: -54px;
            min-height: auto;
            padding: 18px 18px 0;
            text-align: center;
        }

        .way-inner-header h2 {
            max-width: 100%;
            font-size: 2.15rem;
        }

        .way-inner-header p {
            max-width: 100%;
            font-size: 1rem;
        }

        .way-img {
            justify-content: center;
            min-height: 230px;
        }

        .way-img img {
            width: auto;
            max-width: 100%;
            height: auto;
        }

        .way-shapes-right span {
            display: none;
        }
    }
</style>


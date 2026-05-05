<div class="contact_form_box_inner simple_form">
    <div class="contact_form_shortcode">

        <form class="contactForm" method="POST" novalidate>
            @csrf

            <div class="row gutter_15px">

                <div class="col-lg-6">
                    <label>Your name *</label>
                    <input type="text" name="name" required>
                </div>

                <div class="col-lg-6">
                    <label>Phone Number *</label>
                    <input type="tel" name="phone" required>
                </div>

                <div class="col-lg-12">
                    <label>Your email *</label>
                    <input type="email" name="email" required>
                </div>

                <div class="col-lg-12">
                    <label>Company Name</label>
                    <input type="text" name="company_name">
                </div>

                <div class="col-lg-12 text_area">
                    <label>Your message</label>
                    <textarea name="message" rows="6"></textarea>
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="submitBtn w-100">Submit</button>
                </div>

            </div>
        </form>

    </div>
</div>


<li class="menu-item menu-item-has-children dropdown active dropdown_full position-static mega_menu nav-item">
  <a href="#" class="dropdown-toggle nav-link">
    <span>Contact </span>
  </a>
 <ul class="dropdown-menu width_90_percentage mega-border">
  <li>
    <div class="row g-2 px-2 py-2">

      <div class="col-lg-4 col-md-6 col-12">
        <div class="icon_box_all style_one hover-effect">
          <div class="icon">
            <i class="ri-file-list-3-line fa-lg text-primary"></i>
          </div>
          <div class="txt_content">
            <h3><a href="{{ route('projectenquiries') }}">Project Enquiries Form</a></h3>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="icon_box_all style_one hover-effect">
          <div class="icon">
            <i class="ri-megaphone-line fa-lg text-success"></i>
          </div>
          <div class="txt_content">
            <h3><a href="{{ route('mediapresscontact') }}">Media / Press Contact</a></h3>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="icon_box_all style_one hover-effect">
          <div class="icon">
            <i class="ri-hand-coin-line fa-lg text-warning"></i>
          </div>
          <div class="txt_content">
            <h3><a href="{{ route('partnershipscontact') }}">Partnerships Contact</a></h3>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="icon_box_all style_one hover-effect">
          <div class="icon">
            <i class="ri-map-pin-line fa-lg text-danger"></i>
          </div>
          <div class="txt_content">
            <h3><a href="{{ route('officelocations') }}">Office Locations & Maps</a></h3>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="icon_box_all style_one hover-effect">
          <div class="icon">
            <i class="ri-login-box-line fa-lg text-info"></i>
          </div>
          <div class="txt_content">
            <h3><a href="{{ route('clientportallogin') }} ">Client Portal Login</a></h3>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="extra_content image_with_content dark_color mt-4 mr-2">
          <div class="simple_image">
            <img src="{{ asset('assets/frontend/img/india.png') }}" alt="img">
            <h2>Empowering media & marketing in India since 2010.</h2>
          </div>
        </div>
      </div>

    </div>
  </li>
</ul>

</li>
<style>
  .icon_box_all.style_one.hover-effect {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 12px 8px;
    /* smaller padding, more compact */
    background: #fff;
    border-radius: 8px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .icon_box_all.style_one.hover-effect:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);

  }

  .row.g-3 {
    --bs-gutter-x: 0.8rem;
    --bs-gutter-y: 0.8rem;
  }
</style>
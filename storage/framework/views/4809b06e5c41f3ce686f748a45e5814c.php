<style>
  /* Left box style */
  .left-box {
    border-right: 1px solid #e0e0e0;
    padding-right: 10px;
  }

  .right-box {
    border-left: 1px solid #e0e0e0;
    padding-left: 10px;
  }

  .left-title {
    font-size: 16px;
    font-weight: 600;
    color: #333;
  }

  /* Card style */
  .tab-card {
    display: flex;
    align-items: center;
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 10px;
    text-align: left;
    transition: box-shadow 0.2s, transform 0.2s;
  }

  .tab-card i {
    margin-right: 8px;
    font-size: 20px;
    flex-shrink: 0;
  }

  .tab-card:hover {
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
  }

  .tab-card h6 {
    margin: 0 0 4px;
    font-size: 14px;
    font-weight: 600;
  }

  .tab-card p {
    margin: 0;
    font-size: 12px;
    color: #555;
  }

  .card-link {
    text-decoration: none;
    color: inherit;
  }

  .tab-card i {
    margin-top: 0 !important;
  }

  .right-box .left-title {
    font-weight: inherit;
  }

  .right-box .wwa-innovation-award {
    font-size: 15px;
    font-weight: 700;
    color: #333;
    margin: 0 0 6px;
    line-height: 1.3;
  }

  .right-box .left-title a,
  .right-box .left-title a.wwa-learn-more-link {
    color: inherit;
    text-decoration: none;
    font-weight: 800 !important;
  }

  .right-box .left-title a:hover,
  .right-box .left-title a.wwa-learn-more-link:hover {
    color: #006039;
    text-decoration: underline;
  }

  .right-box .wwa-dummy-text {
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.5;
    color: #4b5563;
    text-align: left;
  }

  .right-box .wwa-dummy-text .wwa-line {
    display: block;
    white-space: nowrap;
  }

  .right-box .wwa-right-image {
    width: 100%;
    height: 280px;
    object-fit: cover;
    object-position: center;
    display: block;
  }

  /* Mobile adjustments */
  @media (max-width: 767px) {
    .left-box {
      border-right: none;
      border-bottom: 1px solid #e0e0e0;
      padding-bottom: 10px;
      margin-bottom: 10px;
    }

    .right-box .wwa-right-image {
      height: auto;
    }
  }
</style>
<li class="menu-item menu-item-has-children dropdown active dropdown_full position-static mega_menu nav-item">
  <a href="javascript:void(0);" class="dropdown-toggle nav-link">
    <span>Who We Are</span>
  </a>
  <ul class="dropdown-menu width_100_percentage mega-border">
    <li>
      <div class="row p-3 align-items-start">
        <!-- Left column: Image + Lottie -->
        <div class="col-lg-3 col-md-4 text-center left-box">
          <h3 class="left-title mb-2">Innovation Award Management Consulting</h3>
          <img src="<?php echo e(asset('assets/frontend/img/page/wwa-menu1.jpg')); ?>" alt="Image" class="img-fluid rounded mb-2 shadow-sm">

        </div>

        <!-- Right column: Cards -->
        <div class="col-lg-6 col-md-8">
          <div class="row g-3">
            <div class="col-md-6">
              <a href="<?php echo e(route('aboutus')); ?>"  class="card-link">
                <div class="tab-card">
                  <i class="ri-book-open-line fa-lg text-primary"></i>
                  <div>
                    <h6>Our Story</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('leadershipteam')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-user-star-line fa-lg text-success"></i>
                  <div>
                    <h6>Mission and values</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(url('/careers')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-team-line fa-lg text-warning"></i>
                  <div>
                    <h6>History</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('awards')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-award-line fa-lg text-danger"></i>
                  <div>
                    <h6>General Enquiries</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('methodology')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-slideshow-line fa-lg text-info"></i>
                  <div>
                    <h6>Employee Wellbeing</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(url('client')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-group-line fa-lg text-info"></i>
                  <div>
                    <h6>Community Engagement</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('leadershipteam')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-map-pin-2-line fa-lg text-success"></i>
                  <div>
                    <h6>Regional Offices</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('leadershipteam')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-global-line fa-lg text-success"></i>
                  <div>
                    <h6>Global Partnerships</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('leadershipteam')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-rocket-line fa-lg text-success"></i>
                  <div>
                    <h6>Lead with Impact</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('leadershipteam')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-line-chart-line fa-lg text-success"></i>
                  <div>
                    <h6>Scale with Agility</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('leadershipteam')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-user-heart-line fa-lg text-success"></i>
                  <div>
                    <h6>Attract &amp; Retain Top Talent</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?php echo e(route('careers')); ?>" class="card-link">
                <div class="tab-card">
                  <i class="ri-briefcase-line fa-lg text-success"></i>
                  <div>
                    <h6>Careers</h6>
                  </div>
                </div>
              </a>
            </div>
            
           
          </div>
        </div>

        <div class="col-lg-3 col-md-4 text-center right-box">
          <h3 class="left-title mb-2">
            <a href="<?php echo e(route('aboutus')); ?>" class="wwa-learn-more-link">Learn more Mirashka HR</a>
          </h3>
          <p class="wwa-dummy-text"><span class="wwa-line">Mirashka builds people-first HR strategy.</span><span class="wwa-line">We help businesses scale with confidence.</span></p>
          <img src="<?php echo e(asset('assets/frontend/img/page/wwa-menu2.png')); ?>" alt="Image" class="img-fluid rounded mb-2 shadow-sm wwa-right-image">
        </div>

      </div>
    </li>
  </ul>
</li>

<!-- Lottie player script - sirf ek baar page me -->
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/common/megamenu/services.blade.php ENDPATH**/ ?>
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
    align-items: flex-start;
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
    margin-top: 6px !important;

  }

  /* Mobile adjustments */
  @media (max-width: 767px) {
    .left-box {
      border-right: none;
      border-bottom: 1px solid #e0e0e0;
      padding-bottom: 10px;
      margin-bottom: 10px;
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
          <h3 class="left-title mb-2">Premium PR for CXOs, Corporates & Visionaries</h3>
          <img src="{{ asset('assets/frontend/img/page/wwa-menu1.png') }}" alt="Image" class="img-fluid rounded mb-2 shadow-sm">

        </div>

        <!-- Right column: Cards -->
        <div class="col-lg-6 col-md-8">
          <div class="row g-3">
            <div class="col-md-6">
              <a href="{{ route('aboutus') }}"  class="card-link">
                <div class="tab-card">
                  <i class="ri-book-open-line fa-lg text-primary"></i>
                  <div>
                    <h6>Our Story</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="{{ route('leadershipteam') }}" class="card-link">
                <div class="tab-card">
                  <i class="ri-user-star-line fa-lg text-success"></i>
                  <div>
                    <h6>Leadership Team</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="{{ url('/careers') }}" class="card-link">
                <div class="tab-card">
                  <i class="ri-team-line fa-lg text-warning"></i>
                  <div>
                    <h6>Culture & Careers</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="{{ route('awards') }}" class="card-link">
                <div class="tab-card">
                  <i class="ri-award-line fa-lg text-danger"></i>
                  <div>
                    <h6>Awards</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="{{ route('methodology') }}" class="card-link">
                <div class="tab-card">
                  <i class="ri-slideshow-line fa-lg text-info"></i>
                  <div>
                    <h6>Methodology</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="{{ url('client') }}" class="card-link">
                <div class="tab-card">
                  <i class="ri-user-tie fa-lg text-info"></i>
                  <div>
                    <h6>Our Clients</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-12">
              <h5 class="text-center" style="font-size: 16px;line-height: 20px;font-weight: 600;margin-bottom: 0;">Our proven methodology, guided by integrity and agility, is designed to turn CXO narratives into measurable media impact.</h5>   
            </div>
           
          </div>
        </div>

        <div class="col-lg-3 col-md-4 text-center right-box">
          <h3 class="left-title mb-2">From Discovery to Dominance</h3>
          <img src="{{ asset('assets/frontend/img/page/wwa-menu2.png') }}" alt="Image" class="img-fluid rounded mb-2 shadow-sm">
        </div>

      </div>
    </li>
  </ul>
</li>

<!-- Lottie player script - sirf ek baar page me -->

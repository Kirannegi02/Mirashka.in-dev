<style>
  .solutions-mega {
    padding: 24px;
  }

  .solutions-feature-card {
    text-align: center;
  }

  .solutions-feature-image {
    width: 100%;
    max-width: 220px;
    height: 105px;
    object-fit: cover;
    border-radius: 10px;
    margin: 0 auto 10px;
    display: block;
  }

  .solutions-feature-title {
    font-size: 24px;
    line-height: 1.2;
    margin: 0 0 8px;
    color: #0f172a;
    font-weight: 600;
  }

  .solutions-feature-text {
    font-size: 14px;
    line-height: 1.6;
    margin: 0 0 12px;
    color: #475569;
  }

  .solutions-feature-btn {
    display: inline-block;
    background: #f8b934;
    color: #fff;
    padding: 8px 14px;
    border-radius: 6px;
    font-size: 12px;
    text-decoration: none;
    font-weight: 600;
    text-transform: lowercase;
  }

  .solutions-links-list a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    font-size: 30px;
    line-height: 1.2;
    color: #111827;
    text-decoration: none;
    margin-bottom: 14px;
  }

  .solutions-links-list a:hover {
    color: #006039;
  }

  .solutions-media-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-top: 6px;
  }

  .solutions-media-grid img {
    width: 100%;
    height: 100px;
    object-fit: cover;
    border-radius: 6px;
  }

  .solutions-media-grid .solutions-video-tile {
    position: relative;
    width: 100%;
    height: 100px;
    border-radius: 6px;
    overflow: hidden;
    background: #000;
  }

  .solutions-media-grid .solutions-video-tile iframe {
    width: 100%;
    height: 100%;
    border: 0;
  }

  .solutions-video-control {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 34px;
    height: 34px;
    border: 0;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.62);
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    z-index: 2;
    cursor: pointer;
  }

  .solutions-video-control:hover {
    background: rgba(0, 0, 0, 0.78);
  }

  .solutions-divider {
    border-left: 1px solid #d1d5db;
  }

  .solutions-quote {
    padding-left: 24px;
  }

  .solutions-quote-icon {
    font-size: 42px;
    line-height: 1;
    color: #0f172a;
    margin-bottom: 12px;
  }

  .solutions-quote-text {
    font-size: 17px;
    line-height: 1.8;
    color: #1f2937;
    margin-bottom: 20px;
  }

  .solutions-author {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .solutions-author img {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    object-fit: cover;
  }

  .solutions-author h6 {
    margin: 0;
    font-size: 18px;
    color: #111827;
    font-weight: 600;
  }

  .solutions-author p {
    margin: 2px 0 0;
    font-size: 14px;
    color: #6b7280;
  }

  @media (max-width: 991.98px) {
    .solutions-divider {
      border-left: 0;
      border-top: 1px solid #d1d5db;
      margin-top: 18px;
      padding-top: 18px;
    }

    .solutions-quote {
      padding-left: 0;
    }

    .solutions-links-list a {
      font-size: 24px;
    }
  }
</style>

<li class="menu-item menu-item-has-children dropdown active dropdown_full position-static mega_menu nav-item">
  <a href="javascript:void(0);" class="dropdown-toggle nav-link">
    <span>Solutions</span>
  </a>
  <ul class="dropdown-menu width_100_percentage mega-border">
    <li>
      <div class="solutions-mega">
        <div class="row g-4 align-items-start">
          <div class="col-lg-3 col-md-4">
            <div class="solutions-feature-card">
              <img src="{{ asset('assets/frontend/img/page/r-menu.jpeg') }}" alt="Employee Growth & Upskilling" class="solutions-feature-image" loading="lazy">
              <h3 class="solutions-feature-title">Employee Growth &amp; Upskilling</h3>
              <p class="solutions-feature-text">Learning and development programs to enhance career progression.</p>
              <a href="{{ url('/partnerships-contact') }}" class="solutions-feature-btn">partnership opportunities</a>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="solutions-links-list">
              <a href="{{ url('/for-hr-teams') }}"><span>For HR Teams</span><i class="ri-arrow-right-line"></i></a>
              <a href="{{ url('/for-small-businesses') }}"><span>For Small Businesses</span><i class="ri-arrow-right-line"></i></a>
              <a href="{{ url('/for-franchises') }}"><span>For Franchises</span><i class="ri-arrow-right-line"></i></a>
              <a href="{{ url('/for-startups') }}"><span>For Startups</span><i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="solutions-media-grid">
              <img src="{{ asset('assets/frontend/img/page/r-menu.jpeg') }}" alt="Video 1" loading="lazy">
              <div class="solutions-video-tile">
                <iframe
                  id="solutions-youtube-video"
                  src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0&rel=0&playsinline=1&autoplay=0&mute=0&start=10&end=70&enablejsapi=1&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0"
                  title="Solutions video"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                  loading="lazy">
                </iframe>
                <button type="button" class="solutions-video-control" id="solutions-video-toggle" aria-label="Play video">
                  <i class="ri-play-fill" aria-hidden="true"></i>
                </button>
              </div>
              <img src="{{ asset('assets/frontend/img/page/wwa-menu1.jpg') }}" alt="Video 3" loading="lazy">
            </div>
          </div>

          <div class="col-lg-4 solutions-divider">
            <div class="solutions-quote">
              <div class="solutions-quote-icon"><i class="ri-double-quotes-l"></i></div>
              <p class="solutions-quote-text">
                Our people are the heart of our operations, which is why we're fanatical about finding the
                brightest problem solvers in the industry, and giving them a great place to make a difference.
              </p>
              <div class="solutions-author">
                <img src="{{ asset('assets/frontend/img/menu/Animesh-Singh-Chief-Talent-Architect.png') }}" alt="Animesh Singh" loading="lazy">
                <div>
                  <h6>Animesh Singh</h6>
                  <p>Chief Talent Architect</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</li>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var iframe = document.getElementById('solutions-youtube-video');
    var toggle = document.getElementById('solutions-video-toggle');
    if (!iframe || !toggle) return;

    function sendYouTubeCommand(command) {
      iframe.contentWindow.postMessage(
        JSON.stringify({ event: 'command', func: command, args: [] }),
        '*'
      );
    }

    toggle.addEventListener('click', function () {
      sendYouTubeCommand('playVideo');
      toggle.remove();
    });
  });
</script>

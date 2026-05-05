<li class="menu-item menu-item-has-children dropdown active dropdown_full position-static mega_menu nav-item">
  <a href="{{ route('whatwedo') }}" class="dropdown-toggle nav-link">
    <span>What We Do</span>
  </a>
<ul class="dropdown-menu width_100_percentage mega-border">
  <li>
    <div class="row p-3">

      <!-- Left Column -->
      <div class="col-lg-4 col-md-4" style="max-height:400px; overflow-y:auto;">
        <ul class="list-unstyled vertical-tab-list">
          <li><a href="{{ route('executiveinfluencemediaauthority') }}" class="dropdown-item active" onclick="showWhoServeContent(1)" onmouseover="showWhoServeContent(1)">Executive Influence & Media Authority</a></li>
          <li><a href="{{ route('digitalpresencethoughtleadership') }}" class="dropdown-item" onclick="showWhoServeContent(2)" onmouseover="showWhoServeContent(2)">Digital Presence & Thought Leadership</a></li>
          <li><a href="{{ route('voiceofleadershippodcastaudioip') }}" class="dropdown-item" onclick="showWhoServeContent(3)" onmouseover="showWhoServeContent(3)">Voice of Leadership – Podcast & Audio IP</a></li>
          <li><a href="{{ route('reputationcapitalawardspositioning') }}" class="dropdown-item" onclick="showWhoServeContent(4)" onmouseover="showWhoServeContent(4)">Reputation Capital & Awards Positioning</a></li>
          <li><a href="{{ route('cxopresenceindustryvisibility') }}" class="dropdown-item" onclick="showWhoServeContent(5)" onmouseover="showWhoServeContent(5)">CXO Presence & Industry Visibility</a></li>
          <li><a href="{{ route('regionalimpactcommunication') }}" class="dropdown-item" onclick="showWhoServeContent(6)" onmouseover="showWhoServeContent(6)">Regional Impact Communication</a></li>
        </ul>
      </div>

      <!-- Right Column -->
      <div class="col-lg-8 col-md-8">

        <!-- Content 1 -->
        <div class="who-serve-content" id="who-serve-content-1">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('strategicmediaplacements') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-bullhorn fa-lg text-primary"></i>
                  <div>
                    <h6>Strategic Media Placements</h6>
                    <p class="small">Boost executive visibility in top media.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('capitalmarketscommunication') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-chart-line fa-lg text-success"></i>
                  <div>
                    <h6>Capital Markets Communication</h6>
                    <p class="small">Position leadership for investors & markets.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('investorvisibility') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-user-tie fa-lg text-warning"></i>
                  <div>
                    <h6>Investor Visibility</h6>
                    <p class="small">Enhance reputation among stakeholders.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <!-- Content 2 -->
        <div class="who-serve-content" id="who-serve-content-2" style="display:none;">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('linkedinauthoritybuilding') }}" class="card-link">
                <div class="tab-card">
                  <i class="fab fa-linkedin fa-lg text-primary"></i>
                  <div>
                    <h6>LinkedIn Authority Building</h6>
                    <p class="small">Grow executive voice on LinkedIn.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('leadershipmediatraining') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-chalkboard-teacher fa-lg text-success"></i>
                  <div>
                    <h6>Leadership Media Training</h6>
                    <p class="small">Prepare leaders for media interviews.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('influencecoaching') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-comments fa-lg text-warning"></i>
                  <div>
                    <h6>Influence Coaching</h6>
                    <p class="small">Develop authentic executive influence.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <!-- Content 3 -->
        <div class="who-serve-content" id="who-serve-content-3" style="display:none;">
          <div class="row g-3">
            <div class="col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-podcast fa-lg text-danger"></i>
                  <div>
                    <h6>Podcasting Services</h6>
                    <p class="small">Launch branded podcasts & audio IP.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Content 4 -->
        <div class="who-serve-content" id="who-serve-content-4" style="display:none;">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('awardsconsulting') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-award fa-lg text-warning"></i>
                  <div>
                    <h6>Awards Consulting</h6>
                    <p class="small">Strategize & apply for industry awards.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('reputationriskcrisispreparedness') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-shield-alt fa-lg text-danger"></i>
                  <div>
                    <h6>Reputation Risk & Crisis Preparedness</h6>
                    <p class="small">Safeguard brand reputation proactively.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <!-- Content 5 -->
        <div class="who-serve-content" id="who-serve-content-5" style="display:none;">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('speakingengagementsevents') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-microphone fa-lg text-primary"></i>
                  <div>
                    <h6>Speaking Engagements & Events</h6>
                    <p class="small">Secure speaking slots for leaders.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('capitalmarketscommunication') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-chart-line fa-lg text-success"></i>
                  <div>
                    <h6>Capital Markets Communication</h6>
                    <p class="small">Communicate effectively with markets.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <!-- Content 6 -->
        <div class="who-serve-content" id="who-serve-content-6" style="display:none;">
          <div class="row g-3">
            <div class="col-md-6">
              <a href="{{ route('localisedmediastrategy') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-globe-asia fa-lg text-info"></i>
                  <div>
                    <h6>Localised Media Strategy</h6>
                    <p class="small">Tailored messaging for regional markets.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </li>
</ul>
</li>

<script>
  function showWhoServeContent(id) {
    document.querySelectorAll('.who-serve-content').forEach((content, idx) => {
      content.style.display = (idx + 1 === id) ? 'block' : 'none';
    });
    document.querySelectorAll('.vertical-tab-list .dropdown-item').forEach((el, idx) => {
      el.classList.toggle('active', (idx + 1) === id);
    });
  }
</script>

<style>
  /* Vertical Tabs */
  .vertical-tab-list li {
    margin-bottom: 6px;
  }

  .vertical-tab-list .dropdown-item {
    border: none;
    border-radius: 4px;
    padding: 8px 12px;
    display: block;
    transition: background-color 0.2s;
  }

  .vertical-tab-list .dropdown-item.active {
    background-color: #f0f0f0;
    color: #000;
    font-weight: 600;
  }

  .vertical-tab-list .dropdown-item:hover {
    background-color: #f8f9fa;
  }

  /* Light right border on the entire left column */
  .col-lg-4.col-md-4 {
    border-right: 1px solid #e0e0e0;
  }

  /* Right side cards aligned left */
  .tab-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    text-align: left;
    /* make content left aligned */
    padding: 12px;
    transition: box-shadow 0.2s, transform 0.2s;
    display: flex;
    align-items: flex-start;
    /* icon and text align to top */
    gap: 8px;

  }

  .tab-card i {
    margin-top: 15px;
    margin-right: 10px;
    flex-shrink: 0;
  }

  .tab-card:hover {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transform: translateY(-2px);
  }

  .card-link {
    text-decoration: none;
    color: inherit;
  }

  .tab-card h6 {
    margin: 0 0 4px;
    font-weight: 600;
    font-size: 14px;
  }

  .tab-card p {
    margin: 0;
    font-size: 13px;
    color: #555;
  }
</style>
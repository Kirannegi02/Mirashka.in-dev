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
          <li><a href="{{ route('executiveinfluencemediaauthority') }}" class="dropdown-item active" onclick="showWhoServeContent(1)" onmouseover="showWhoServeContent(1)">Compliance Integrity</a></li>
          <li><a href="{{ route('digitalpresencethoughtleadership') }}" class="dropdown-item" onclick="showWhoServeContent(2)" onmouseover="showWhoServeContent(2)">Workforce Efficiency</a></li>
          <li><a href="{{ route('voiceofleadershippodcastaudioip') }}" class="dropdown-item" onclick="showWhoServeContent(3)" onmouseover="showWhoServeContent(3)">Leadership Mastery</a></li>
          <li><a href="{{ route('reputationcapitalawardspositioning') }}" class="dropdown-item" onclick="showWhoServeContent(4)" onmouseover="showWhoServeContent(4)">Hiring Excellence</a></li>
          <li><a href="{{ route('cxopresenceindustryvisibility') }}" class="dropdown-item" onclick="showWhoServeContent(5)" onmouseover="showWhoServeContent(5)">HRaaS Solutions</a></li>
        </ul>
      </div>

      <!-- Right Column -->
      <div class="col-lg-8 col-md-8">

        <!-- Content 1 — Compliance Integrity -->
        <div class="who-serve-content" id="who-serve-content-1">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('strategicmediaplacements') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-graduation-cap fa-lg text-primary"></i>
                  <div>
                    <h6>Employee Growth &amp; Upskilling</h6>
                    <p class="small">Learning and development programs to enhance career progression.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('capitalmarketscommunication') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-balance-scale fa-lg text-success"></i>
                  <div>
                    <h6>Expert Legal &amp; HR Consultations</h6>
                    <p class="small">Specialist guidance on employment law and people policies.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('investorvisibility') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-file-contract fa-lg text-warning"></i>
                  <div>
                    <h6>Policy &amp; Documentation Excellence</h6>
                    <p class="small">Handbooks, contracts, and HR records built for clarity and compliance.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('strategicmediaplacements') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-clipboard-check fa-lg text-danger"></i>
                  <div>
                    <h6>Compliance &amp; Risk Assessments</h6>
                    <p class="small">Structured reviews to surface risk and strengthen controls.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('capitalmarketscommunication') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-hands-helping fa-lg text-info"></i>
                  <div>
                    <h6>Workplace Ethics &amp; Prevention Training</h6>
                    <p class="small">Training that reinforces respect, integrity, and prevention.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <!-- Content 2 — Workforce Efficiency -->
        <div class="who-serve-content" id="who-serve-content-2" style="display:none;">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('linkedinauthoritybuilding') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-bookmark fa-lg text-primary"></i>
                  <div>
                    <h6>Policy Design &amp; Compliance Audit</h6>
                    <p class="small">Development and regular auditing of HR policies to ensure legal compliance and alignment with organizational goals.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('leadershipmediatraining') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-chart-bar fa-lg text-success"></i>
                  <div>
                    <h6>Payroll Outsourcing &amp; Administration</h6>
                    <p class="small">End-to-end payroll management, ensuring accurate processing, tax compliance, and seamless benefits administration.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('influencecoaching') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-user-tie fa-lg text-warning"></i>
                  <div>
                    <h6>Remote HR Solutions</h6>
                    <p class="small">Virtual HR services acting as your external HR team, managing recruitment, onboarding, employee records, and compliance remotely.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <!-- Content 3 — Leadership Mastery -->
        <div class="who-serve-content" id="who-serve-content-3" style="display:none;">
          <div class="row g-3">

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-users fa-lg text-danger"></i>
                  <div>
                    <h6>Executive Search &amp; Leadership Hiring</h6>
                    <p class="small">Finding transformational leaders who align with your vision and culture.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-landmark fa-lg text-success"></i>
                  <div>
                    <h6>Board &amp; CEO Advisory</h6>
                    <p class="small">Strategic advice for boards and CEOs to enhance governance, leadership effectiveness, and long-term planning.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-arrow-trend-up fa-lg text-warning"></i>
                  <div>
                    <h6>CEO Succession &amp; Performance Acceleration</h6>
                    <p class="small">Seamless CEO succession planning and performance optimization for new leadership.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-user-check fa-lg text-success"></i>
                  <div>
                    <h6>Executive Assessment &amp; Leadership Consulting</h6>
                    <p class="small">Leadership evaluations and development roadmaps to align leadership capability with business strategy.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-sitemap fa-lg text-success"></i>
                  <div>
                    <h6>HR &amp; Talent Strategy Advisory</h6>
                    <p class="small">Strategic workforce planning, culture transformation, and future talent pipeline development.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-microchip fa-lg text-info"></i>
                  <div>
                    <h6>Digital Transformation &amp; Workforce Evolution</h6>
                    <p class="small">Helping HR teams and leadership adapt to digital-first operations through reskilling and HR tech integration.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-hand-holding-heart fa-lg text-primary"></i>
                  <div>
                    <h6>Diversity, Equity &amp; Inclusion Advisory</h6>
                    <p class="small">Designing and embedding inclusive hiring, leadership, and culture strategies.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-people-arrows fa-lg text-danger"></i>
                  <div>
                    <h6>Family Business Leadership Solutions</h6>
                    <p class="small">Specialized advisory for family-owned businesses on governance, succession, and leadership transitions.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ route('podcastingservices') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-project-diagram fa-lg text-primary"></i>
                  <div>
                    <h6>Restructuring &amp; Organizational Transformation</h6>
                    <p class="small">Advisory support for leadership teams navigating restructuring, workforce redeployment, and cultural transformation.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <!-- Content 4 — Hiring Excellence -->
        <div class="who-serve-content" id="who-serve-content-4" style="display:none;">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('awardsconsulting') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-gears fa-lg text-danger"></i>
                  <div>
                    <h6>IT Staffing</h6>
                    <p class="small">Placing skilled tech talent across emerging technologies.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('reputationriskcrisispreparedness') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-laptop-code fa-lg text-primary"></i>
                  <div>
                    <h6>IT Recruitment</h6>
                    <p class="small">Specialist hiring for technology and innovation roles.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('awardsconsulting') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-magnifying-glass fa-lg" style="color: #8b6914;"></i>
                  <div>
                    <h6>General Staffing</h6>
                    <p class="small">End-to-end staffing for non-technical roles across industries.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('reputationriskcrisispreparedness') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-building-user fa-lg text-success"></i>
                  <div>
                    <h6>Recruitment Process Outsourcing (RPO)</h6>
                    <p class="small">Acting as your extended recruitment team to handle full-cycle hiring.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('awardsconsulting') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-globe fa-lg text-primary"></i>
                  <div>
                    <h6>NAPS (National Apprenticeship Promotion Scheme)</h6>
                    <p class="small">Helping businesses leverage apprenticeships for future-ready talent and government incentives.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('reputationriskcrisispreparedness') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-user-tie fa-lg text-danger"></i>
                  <div>
                    <h6>Executive Search</h6>
                    <p class="small">Identifying and placing transformational leadership talent aligned with your business vision.</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <div class="who-serve-content" id="who-serve-content-5" style="display:none;">
          <div class="row g-3">

            <div class="col-md-6">
              <a href="{{ route('speakingengagementsevents') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-people-arrows fa-lg text-primary"></i>
                  <div>
                    <h6>HR Outsourcing</h6>
                    <p class="small">Full-service HR management including payroll, benefits administration, and compliance oversight, scaled to your needs.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('capitalmarketscommunication') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-users-gear fa-lg text-info"></i>
                  <div>
                    <h6>Employee Engagement &amp; Performance Management</h6>
                    <p class="small">Developing engagement strategies, performance frameworks, and real-time employee feedback programs.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('speakingengagementsevents') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-users fa-lg text-warning"></i>
                  <div>
                    <h6>Employer Branding</h6>
                    <p class="small">Positioning your company as an employer of choice to attract top talent.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('capitalmarketscommunication') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-clipboard-check fa-lg text-success"></i>
                  <div>
                    <h6>Employee Surveys &amp; Retention Strategies</h6>
                    <p class="small">Continuous feedback mechanisms to measure satisfaction and proactively improve retention.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('speakingengagementsevents') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-magnifying-glass fa-lg text-primary"></i>
                  <div>
                    <h6>Candidate Sourcing</h6>
                    <p class="small">Curated candidate pipelines designed to fit your culture and hiring needs.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="{{ route('capitalmarketscommunication') }}" class="card-link">
                <div class="tab-card">
                  <i class="fas fa-diagram-project fa-lg text-danger"></i>
                  <div>
                    <h6>HR Technology Solutions</h6>
                    <p class="small">Implementing HR software, analytics platforms, and process automation tools to enhance HR efficiency.</p>
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
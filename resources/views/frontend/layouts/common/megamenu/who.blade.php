<style>
  .whatwedo-mega {
    padding: 18px 22px 22px;
    background: #fff;
  }

  .whatwedo-tabs {
    display: flex;
    align-items: center;
    gap: 34px;
    border-bottom: 1px solid #e8e8e8;
    margin-bottom: 18px;
    overflow-x: auto;
    white-space: nowrap;
  }

  .whatwedo-tab-btn {
    border: 0;
    background: transparent;
    color: #111827;
    font-size: 18px;
    font-weight: 500;
    padding: 0 0 14px;
    position: relative;
    cursor: pointer;
    transition: color 0.2s ease;
    text-decoration: none;
    display: inline-block;
  }

  .whatwedo-tab-btn:hover {
    color: #806500;
  }

  .whatwedo-tab-btn.active {
    color: #d3a126;
    font-weight: 600;
  }

  .whatwedo-tab-btn.active::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: -1px;
    height: 2px;
    background: #111827;
  }

  .whatwedo-tab-page-group {
    display: inline-flex;
    align-items: flex-end;
    gap: 8px;
    flex-shrink: 0;
  }

  .whatwedo-tab-page-group .whatwedo-tab-btn {
    font-family: inherit;
    line-height: inherit;
    letter-spacing: inherit;
    text-transform: none;
  }

  .whatwedo-tab-open-page {
    position: relative;
    display: block;
    width: 30px;
    height: 30px;
    margin-bottom: 9px;
    padding: 0;
    border-radius: 50%;
    border: 1px solid #d3a126;
    background: #fff;
    color: #b8860b;
    text-decoration: none;
    flex-shrink: 0;
    opacity: 0;
    visibility: hidden;
    transform: scale(0.9);
    transition: opacity 0.2s ease, visibility 0.2s ease, transform 0.2s ease, background 0.2s ease;
  }

  .whatwedo-tab-open-page i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 15px;
    line-height: 1;
    margin: 0;
    padding: 0;
  }

  .whatwedo-tab-page-group.is-active .whatwedo-tab-open-page,
  .whatwedo-tab-page-group:hover .whatwedo-tab-open-page {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
  }

  .whatwedo-tab-page-group.is-active .whatwedo-tab-open-page:hover,
  .whatwedo-tab-page-group:hover .whatwedo-tab-open-page:hover {
    transform: scale(1);
  }

  .whatwedo-tab-open-page:hover {
    background: #d3a126;
    color: #fff;
    border-color: #d3a126;
  }

  .whatwedo-tab-open-page:hover i {
    color: #fff;
  }

  .whatwedo-pane {
    display: none;
    opacity: 0;
    transform: translateY(8px);
    transition: opacity 0.28s ease, transform 0.28s ease;
  }

  .whatwedo-pane.active {
    display: block;
    opacity: 1;
    transform: translateY(0);
  }

  @media (max-width: 575.98px) {
    .whatwedo-mega {
      padding: 14px;
    }

    .whatwedo-tabs {
      gap: 20px;
    }

    .whatwedo-tab-btn {
      font-size: 15px;
    }

  }
</style>

<li class="menu-item menu-item-has-children dropdown active dropdown_full position-static mega_menu nav-item">
  <a href="{{ route('whatwedo') }}" class="dropdown-toggle nav-link">
    <span>What We Do</span>
  </a>
  <ul class="dropdown-menu width_100_percentage mega-border">
    <li>
      <div class="whatwedo-mega">
        <div class="whatwedo-tabs" role="tablist" aria-label="What we do categories">
          <div class="whatwedo-tab-page-group whatwedo-tab-compliance-group is-active">
            <button class="whatwedo-tab-btn active" type="button" role="tab" aria-selected="true" data-whatwedo-tab="compliance-integrity">Compliance &amp; Workplace Integrity</button>
            <a href="{{ route('compliance') }}" class="whatwedo-tab-open-page" title="Open Compliance &amp; Workplace Integrity page" aria-label="Open Compliance &amp; Workplace Integrity page">
              <i class="ri-external-link-line"></i>
            </a>
          </div>
          <div class="whatwedo-tab-page-group whatwedo-tab-workforce-group">
            <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="workforce-efficiency">Workforce Management</button>
            <a href="{{ route('workforce') }}" class="whatwedo-tab-open-page" title="Open Workforce Management page" aria-label="Open Workforce Management page">
              <i class="ri-external-link-line"></i>
            </a>
          </div>
          <div class="whatwedo-tab-page-group whatwedo-tab-leadership-group">
            <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="leadership-mastery">Leadership &amp; Organization</button>
            <a href="{{ route('leadership-organization') }}" class="whatwedo-tab-open-page" title="Open Leadership &amp; Organization page" aria-label="Open Leadership &amp; Organization page">
              <i class="ri-external-link-line"></i>
            </a>
          </div>
          <div class="whatwedo-tab-page-group whatwedo-tab-talent-group">
            <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="hiring-excellence">Talent Acquisition &amp; Staffing</button>
            <a href="{{ route('talent-acquisition') }}" class="whatwedo-tab-open-page" title="Open Talent Acquisition &amp; Staffing page" aria-label="Open Talent Acquisition &amp; Staffing page">
              <i class="ri-external-link-line"></i>
            </a>
          </div>
          <div class="whatwedo-tab-page-group whatwedo-tab-hraas-group">
            <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="hraas-solutions">HR as a Service</button>
            <a href="{{ route('hr-as-a-service') }}" class="whatwedo-tab-open-page" title="Open HR as a Service page" aria-label="Open HR as a Service page">
              <i class="ri-external-link-line"></i>
            </a>
          </div>
        </div>

        @include('frontend.layouts.common.megamenu.who-sections.compliance-integrity')
        @include('frontend.layouts.common.megamenu.who-sections.workforce-efficiency')
        @include('frontend.layouts.common.megamenu.who-sections.leadership-mastery')
        @include('frontend.layouts.common.megamenu.who-sections.hiring-excellence')
        @include('frontend.layouts.common.megamenu.who-sections.hraas-solutions')
      </div>
    </li>
  </ul>
</li>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var tabButtons = document.querySelectorAll('.whatwedo-tab-btn');
    var panes = document.querySelectorAll('.whatwedo-pane');
    if (!tabButtons.length || !panes.length) return;

    function openMegaMenuDropdown(triggerEl) {
      var mega = triggerEl.closest('.mega_menu');
      if (!mega) return;
      mega.classList.add('show');
      var toggle = mega.querySelector('.dropdown-toggle');
      var menu = mega.querySelector('.dropdown-menu');
      if (toggle) {
        toggle.classList.add('show');
        toggle.setAttribute('aria-expanded', 'true');
      }
      if (menu) {
        menu.classList.add('show');
      }
    }

    var tabPageGroups = {
      'compliance-integrity': document.querySelector('.whatwedo-tab-compliance-group'),
      'workforce-efficiency': document.querySelector('.whatwedo-tab-workforce-group'),
      'leadership-mastery': document.querySelector('.whatwedo-tab-leadership-group'),
      'hiring-excellence': document.querySelector('.whatwedo-tab-talent-group'),
      'hraas-solutions': document.querySelector('.whatwedo-tab-hraas-group'),
    };

    function activateTab(tabKey, activeButton) {
      tabButtons.forEach(function (btn) {
        btn.classList.remove('active');
        btn.setAttribute('aria-selected', 'false');
      });

      panes.forEach(function (pane) {
        pane.classList.remove('active');
        pane.setAttribute('aria-hidden', 'true');
      });

      activeButton.classList.add('active');
      activeButton.setAttribute('aria-selected', 'true');

      Object.keys(tabPageGroups).forEach(function (key) {
        var group = tabPageGroups[key];
        if (group) {
          group.classList.toggle('is-active', tabKey === key);
        }
      });

      var activePane = document.querySelector('.whatwedo-pane[data-whatwedo-pane="' + tabKey + '"]');
      if (activePane) {
        activePane.classList.add('active');
        activePane.setAttribute('aria-hidden', 'false');
      }
    }

    tabButtons.forEach(function (button) {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        var tabKey = button.getAttribute('data-whatwedo-tab');

        activateTab(tabKey, button);
        openMegaMenuDropdown(button);
      });
    });

    var params = new URLSearchParams(window.location.search);
    var tabFromUrl = params.get('tab');
    if (tabFromUrl && tabPageGroups[tabFromUrl]) {
      var tabBtn = document.querySelector('.whatwedo-tab-btn[data-whatwedo-tab="' + tabFromUrl + '"]');
      if (tabBtn) {
        activateTab(tabFromUrl, tabBtn);
      }
    }

    document.querySelectorAll('.whatwedo-tab-open-page').forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    });
  });
</script>
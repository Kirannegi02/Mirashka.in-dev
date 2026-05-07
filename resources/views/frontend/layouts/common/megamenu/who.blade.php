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
          <button class="whatwedo-tab-btn active" type="button" role="tab" aria-selected="true" data-whatwedo-tab="compliance-integrity">Compliance Integrity</button>
          <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="workforce-efficiency">Workforce Efficiency</button>
          <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="leadership-mastery">Leadership Mastery</button>
          <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="hiring-excellence">Hiring Excellence</button>
          <button class="whatwedo-tab-btn" type="button" role="tab" aria-selected="false" data-whatwedo-tab="hraas-solutions">HRaaS Solutions</button>
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

    tabButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        var tabKey = button.getAttribute('data-whatwedo-tab');

        tabButtons.forEach(function (btn) {
          btn.classList.remove('active');
          btn.setAttribute('aria-selected', 'false');
        });

        panes.forEach(function (pane) {
          pane.classList.remove('active');
          pane.setAttribute('aria-hidden', 'true');
        });

        button.classList.add('active');
        button.setAttribute('aria-selected', 'true');

        var activePane = document.querySelector('.whatwedo-pane[data-whatwedo-pane="' + tabKey + '"]');
        if (activePane) {
          activePane.classList.add('active');
          activePane.setAttribute('aria-hidden', 'false');
        }
      });
    });
  });
</script>
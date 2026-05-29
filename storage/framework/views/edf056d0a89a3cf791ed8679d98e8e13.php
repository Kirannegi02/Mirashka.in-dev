<style>
  .whatwedo-mega {
    padding: 18px 22px 22px;
    background: #fff;
    overflow-x: hidden;
  }

  .whatwedo-tabs {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    column-gap: 28px;
    align-items: flex-end;
    border-bottom: 1px solid #e8e8e8;
    margin-bottom: 18px;
    padding: 0 4px;
    overflow: hidden;
    scrollbar-width: none;
    -ms-overflow-style: none;
  }

  .whatwedo-tabs::-webkit-scrollbar {
    display: none;
    width: 0;
    height: 0;
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
    display: block;
    width: 100%;
    max-width: 100%;
    white-space: normal;
    text-align: center;
    line-height: 1.3;
  }

  .whatwedo-tab-btn__label {
    display: block;
  }

  .whatwedo-tab-btn__line {
    display: block;
    white-space: nowrap;
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
    position: relative;
    display: block;
    min-width: 0;
    width: 100%;
    padding-right: 32px;
    overflow: visible;
  }

  .whatwedo-tab-page-group .whatwedo-tab-btn {
    width: 100%;
    min-width: 0;
  }

  .whatwedo-tab-page-group .whatwedo-tab-btn {
    font-family: inherit;
    line-height: inherit;
    letter-spacing: inherit;
    text-transform: none;
  }

  .whatwedo-tab-open-page {
    position: absolute;
    right: 0;
    bottom: 9px;
    display: block;
    width: 28px;
    height: 28px;
    padding: 0;
    border-radius: 50%;
    border: 1px solid #d3a126;
    background: #fff;
    color: #b8860b;
    text-decoration: none;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: scale(0.9);
    transition: opacity 0.2s ease, visibility 0.2s ease, transform 0.2s ease, background 0.2s ease, pointer-events 0s;
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
    pointer-events: auto;
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
      column-gap: 14px;
      padding: 0 2px;
    }

    .whatwedo-tab-btn {
      font-size: 15px;
    }

    .whatwedo-tab-open-page {
      width: 26px;
      height: 26px;
      margin-bottom: 8px;
    }

  }
</style>

<li class="menu-item menu-item-has-children dropdown active dropdown_full position-static mega_menu nav-item">
  <a href="<?php echo e(route('whatwedo')); ?>" class="dropdown-toggle nav-link">
    <span>What We Do</span>
  </a>
  <ul class="dropdown-menu width_100_percentage mega-border">
    <li>
      <div class="whatwedo-mega">
        <?php $whatWeDoCategories = config('what-we-do-categories', []); ?>
        <div class="whatwedo-tabs" role="tablist" aria-label="What we do categories">
          <?php $__currentLoopData = $whatWeDoCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $tabKey = $cat['megamenu_tab'] ?? '';
              $menuLines = $cat['nav_tab_lines'] ?? [$cat['label'] ?? ''];
              $pageLabel = $cat['label'] ?? '';
            ?>
            <div
              class="whatwedo-tab-page-group<?php echo e($loop->first ? ' is-active' : ''); ?>"
              data-whatwedo-tab="<?php echo e($tabKey); ?>"
            >
              <button
                class="whatwedo-tab-btn<?php echo e($loop->first ? ' active' : ''); ?>"
                type="button"
                role="tab"
                aria-selected="<?php echo e($loop->first ? 'true' : 'false'); ?>"
                data-whatwedo-tab="<?php echo e($tabKey); ?>"
              >
                <span class="whatwedo-tab-btn__label">
                  <?php $__currentLoopData = $menuLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="whatwedo-tab-btn__line"><?php echo e($line); ?></span>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
              </button>
              <a
                href="<?php echo e(route($cat['route_name'])); ?>"
                class="whatwedo-tab-open-page"
                title="Open <?php echo e($pageLabel); ?> page"
                aria-label="Open <?php echo e($pageLabel); ?> page"
              >
                <i class="ri-external-link-line"></i>
              </a>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php echo $__env->make('frontend.layouts.common.megamenu.who-sections.compliance-integrity', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.layouts.common.megamenu.who-sections.workforce-efficiency', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.layouts.common.megamenu.who-sections.leadership-mastery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.layouts.common.megamenu.who-sections.hiring-excellence', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.layouts.common.megamenu.who-sections.hraas-solutions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    var tabPageGroups = {};
    document.querySelectorAll('.whatwedo-tab-page-group[data-whatwedo-tab]').forEach(function (group) {
      var key = group.getAttribute('data-whatwedo-tab');
      if (key) {
        tabPageGroups[key] = group;
      }
    });

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
</script><?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/common/megamenu/who.blade.php ENDPATH**/ ?>
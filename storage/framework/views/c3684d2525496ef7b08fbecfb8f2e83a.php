<style>
  .whatwedo-leadership-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(240px, 1fr));
    gap: 10px;
    border-top: 1px solid #ececec;
    padding-top: 10px;
  }

  .whatwedo-leadership-card {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    background: #fff;
    border: 1px solid #e7e7e7;
    border-radius: 8px;
    padding: 10px 12px;
    min-height: 74px;
    text-decoration: none;
  }

  .whatwedo-leadership-card:hover {
    border-color: #d6d6d6;
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.06);
  }

  .whatwedo-leadership-icon {
    width: 38px;
    height: 38px;
    object-fit: contain;
    flex-shrink: 0;
  }

  .whatwedo-leadership-title {
    margin: 0 0 4px;
    color: #192437;
    font-size: 23px;
    line-height: 1.2;
    font-weight: 600;
  }

  .whatwedo-leadership-desc {
    margin: 0;
    color: #4b5563;
    font-size: 13px;
    line-height: 1.4;
  }

  @media (max-width: 1199.98px) {
    .whatwedo-leadership-title {
      font-size: 20px;
    }
  }

  @media (max-width: 991.98px) {
    .whatwedo-leadership-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="whatwedo-pane" data-whatwedo-pane="leadership-mastery" role="tabpanel" aria-hidden="true">
  <div class="whatwedo-leadership-grid">
    <a href="<?php echo e(route('leadership-organization.sub', 'executive-search-leadership-hiring')); ?>" class="whatwedo-leadership-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/leadership-consulting.png" alt="Executive Search and Leadership Hiring" class="whatwedo-leadership-icon" loading="lazy">
      <div>
        <h5 class="whatwedo-leadership-title">Executive Search &amp; Leadership Hiring</h5>
        <p class="whatwedo-leadership-desc">Finding transformational leaders who align with your vision and culture.</p>
      </div>
    </a>

    <a href="<?php echo e(route('leadership-organization.sub', 'board-ceo-advisory')); ?>" class="whatwedo-leadership-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/board-and-CEO-advisory.png" alt="Board and CEO Advisory" class="whatwedo-leadership-icon" loading="lazy">
      <div>
        <h5 class="whatwedo-leadership-title">Board &amp; CEO Advisory</h5>
        <p class="whatwedo-leadership-desc">Strategic advice for boards and CEOs to enhance governance, leadership effectiveness, and long-term planning.</p>
      </div>
    </a>

    <a href="<?php echo e(route('leadership-organization.sub', 'ceo-succession-performance-acceleration')); ?>" class="whatwedo-leadership-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/CEO-succession.png" alt="CEO Succession and Performance Acceleration" class="whatwedo-leadership-icon" loading="lazy">
      <div>
        <h5 class="whatwedo-leadership-title">CEO Succession &amp; Performance Acceleration</h5>
        <p class="whatwedo-leadership-desc">Seamless CEO succession planning and performance optimization for new leadership.</p>
      </div>
    </a>

    <a href="<?php echo e(route('leadership-organization.sub', 'leadership-assessment-consulting')); ?>" class="whatwedo-leadership-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/leadership-consulting-1.png" alt="Leadership Assessment and Consulting" class="whatwedo-leadership-icon" loading="lazy">
      <div>
        <h5 class="whatwedo-leadership-title">Leadership Assessment &amp; Consulting</h5>
        <p class="whatwedo-leadership-desc">Leadership evaluations and development roadmaps to align leadership capability with business strategy.</p>
      </div>
    </a>

    <a href="<?php echo e(route('leadership-organization.sub', 'hr-talent-strategy-advisory')); ?>" class="whatwedo-leadership-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/HR-and-talent.png" alt="HR and Talent Strategy Advisory" class="whatwedo-leadership-icon" loading="lazy">
      <div>
        <h5 class="whatwedo-leadership-title">HR &amp; Talent Strategy Advisory</h5>
        <p class="whatwedo-leadership-desc">Strategic workforce planning, culture transformation, and future talent pipeline development.</p>
      </div>
    </a>
  </div>
</div>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/common/megamenu/who-sections/leadership-mastery.blade.php ENDPATH**/ ?>
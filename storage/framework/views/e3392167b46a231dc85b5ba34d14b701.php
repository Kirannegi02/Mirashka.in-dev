<style>
  .whatwedo-hraas-layout {
    display: grid;
    grid-template-columns: 1.05fr 1.95fr;
    gap: 12px;
    border-top: 1px solid #ececec;
    padding-top: 10px;
  }

  .whatwedo-hraas-feature {
    border: 1px solid #e7e7e7;
    border-radius: 12px;
    padding: 0 0 12px;
    overflow: hidden;
    background: #fff;
  }

  .whatwedo-hraas-feature-img-link {
    display: block;
    text-decoration: none;
  }

  .whatwedo-hraas-feature img {
    width: 100%;
    height: 110px;
    object-fit: cover;
    display: block;
    margin-bottom: 8px;
  }

  .whatwedo-hraas-feature-img-link:hover img {
    opacity: 0.92;
  }

  .whatwedo-hraas-feature h5 {
    margin: 0 10px 8px;
    color: #192437;
    font-size: 33px;
    line-height: 1.1;
    font-weight: 600;
  }

  .whatwedo-hraas-feature p {
    margin: 0 10px 12px;
    color: #4b5563;
    font-size: 14px;
    line-height: 1.45;
  }

  .whatwedo-hraas-feature a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin: 0 15px;
    background: #e6a000;
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    border-radius: 6px;
    text-decoration: none;
    padding: 10px 14px;
    text-transform: lowercase;
    border: 1px solid #d19100;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
    line-height: 1;
    white-space: nowrap;
  }

  .whatwedo-hraas-feature a:hover {
    background: #d89200;
    border-color: #bf7f00;
    color: #fff;
  }

  .whatwedo-hraas-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(250px, 1fr));
    gap: 8px 10px;
  }

  .whatwedo-hraas-card {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    border: 1px solid #e7e7e7;
    border-radius: 8px;
    padding: 8px 10px;
    text-decoration: none;
    background: #fff;
    min-height: 66px;
  }

  .whatwedo-hraas-card:hover {
    border-color: #d9d9d9;
    box-shadow: 0 2px 7px rgba(15, 23, 42, 0.06);
  }

  .whatwedo-hraas-icon {
    width: 42px;
    height: 42px;
    object-fit: contain;
    flex-shrink: 0;
  }

  .whatwedo-hraas-title {
    margin: 0 0 3px;
    color: #192437;
    font-size: 28px;
    line-height: 1.16;
    font-weight: 600;
  }

  .whatwedo-hraas-desc {
    margin: 0;
    color: #4b5563;
    font-size: 13px;
    line-height: 1.32;
  }

  @media (max-width: 1199.98px) {
    .whatwedo-hraas-feature h5,
    .whatwedo-hraas-title {
      font-size: 22px;
    }
  }

  @media (max-width: 991.98px) {
    .whatwedo-hraas-layout {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 767.98px) {
    .whatwedo-hraas-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="whatwedo-pane" data-whatwedo-pane="hraas-solutions" role="tabpanel" aria-hidden="true">
  <div class="whatwedo-hraas-layout">
    <div class="whatwedo-hraas-feature">
      <a href="<?php echo e(route('hr-as-a-service')); ?>" class="whatwedo-hraas-feature-img-link">
        <img src="<?php echo e(asset('assets/frontend/img/hraas/hraas-v3-hero.png')); ?>" alt="Build Your HR Operating System" loading="lazy">
      </a>
      <h5>Build Your HR Operating System</h5>
      <p>From hiring and payroll to compliance and leadership, Mirashka works as your extended HR office.</p>
      <a href="<?php echo e(route('hr-as-a-service')); ?>">Explore HRaaS Solutions</a>
    </div>

    <div class="whatwedo-hraas-grid">
      <a href="<?php echo e(route('hr-as-a-service.sub', 'hr-outsourcing')); ?>" class="whatwedo-hraas-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2025/02/HR-Outsourcing.png" alt="HR Outsourcing" class="whatwedo-hraas-icon" loading="lazy">
        <div>
          <h6 class="whatwedo-hraas-title">HR Outsourcing</h6>
          <p class="whatwedo-hraas-desc">Full-service HR management including payroll, benefits administration, and compliance oversight, scaled to your needs.</p>
        </div>
      </a>

      <a href="<?php echo e(route('hr-as-a-service.sub', 'employer-branding')); ?>" class="whatwedo-hraas-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2025/02/employer-branding.png" alt="Employer Branding" class="whatwedo-hraas-icon" loading="lazy">
        <div>
          <h6 class="whatwedo-hraas-title">Employer Branding</h6>
          <p class="whatwedo-hraas-desc">Positioning your company as an employer of choice to attract top talent.</p>
        </div>
      </a>

      <a href="<?php echo e(route('hr-as-a-service.sub', 'candidate-sourcing')); ?>" class="whatwedo-hraas-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2025/02/candidate-Sourcing.png" alt="Candidate Sourcing" class="whatwedo-hraas-icon" loading="lazy">
        <div>
          <h6 class="whatwedo-hraas-title">Candidate Sourcing</h6>
          <p class="whatwedo-hraas-desc">Curated candidate pipelines designed to fit your culture and hiring needs.</p>
        </div>
      </a>

      <a href="<?php echo e(route('hr-as-a-service.sub', 'employee-engagement-performance')); ?>" class="whatwedo-hraas-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2025/02/employee-engagement.png" alt="Employee Engagement and Performance" class="whatwedo-hraas-icon" loading="lazy">
        <div>
          <h6 class="whatwedo-hraas-title">Employee Engagement &amp; Performance</h6>
          <p class="whatwedo-hraas-desc">Developing engagement strategies, performance frameworks, and real-time employee feedback programs.</p>
        </div>
      </a>

      <a href="<?php echo e(route('hr-as-a-service.sub', 'employee-surveys-retention')); ?>" class="whatwedo-hraas-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2025/02/employee-surveys.png" alt="Employee Surveys and Retention" class="whatwedo-hraas-icon" loading="lazy">
        <div>
          <h6 class="whatwedo-hraas-title">Employee Surveys &amp; Retention</h6>
          <p class="whatwedo-hraas-desc">Continuous feedback mechanisms to measure satisfaction and proactively improve retention.</p>
        </div>
      </a>

      <a href="<?php echo e(route('hr-as-a-service.sub', 'hr-technology-solutions')); ?>" class="whatwedo-hraas-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2025/02/HR-Technology-solution.png" alt="HR Technology Solutions" class="whatwedo-hraas-icon" loading="lazy">
        <div>
          <h6 class="whatwedo-hraas-title">HR Technology Solutions</h6>
          <p class="whatwedo-hraas-desc">Implementing HR software, analytics platforms, and process automation tools to enhance HR efficiency.</p>
        </div>
      </a>
    </div>
  </div>
</div>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/frontend/layouts/common/megamenu/who-sections/hraas-solutions.blade.php ENDPATH**/ ?>
<style>
  .whatwedo-service-cards {
    display: grid;
    grid-template-columns: repeat(3, minmax(220px, 1fr));
    gap: 0;
    border-top: 1px solid #ececec;
    border-left: 1px solid #ececec;
  }

  .whatwedo-service-card {
    border-right: 1px solid #ececec;
    border-bottom: 1px solid #ececec;
    padding: 18px 20px 16px;
    min-height: 236px;
    background: #fff;
    text-decoration: none;
    display: flex;
    flex-direction: column;
  }

  .whatwedo-service-head {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 12px;
  }

  .whatwedo-service-icon {
    width: 42px;
    height: 42px;
    border: 1px solid #dfdfdf;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #111827;
    font-size: 21px;
    flex-shrink: 0;
  }

  .whatwedo-service-icon.gold {
    background: #f3e9cf;
    border-color: #ead7aa;
  }

  .whatwedo-service-title {
    margin: 7px 0 0;
    font-size: 34px;
    line-height: 1.12;
    color: #111827;
    font-weight: 500;
    letter-spacing: -0.2px;
  }

  .whatwedo-service-desc {
    margin: 0 0 14px;
    color: #4b5563;
    font-size: 14px;
    line-height: 1.55;
    min-height: 96px;
  }

  .whatwedo-service-divider {
    border-top: 1px solid #e2e2e2;
    margin: 0 0 14px;
  }

  .whatwedo-service-link {
    margin-top: auto;
    color: #111827;
    font-size: 32px;
    line-height: 1;
    font-weight: 400;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .whatwedo-service-link i {
    font-size: 32px;
    line-height: 1;
  }

  @media (max-width: 1199.98px) {
    .whatwedo-service-title {
      font-size: 28px;
    }

    .whatwedo-service-link,
    .whatwedo-service-link i {
      font-size: 24px;
    }
  }

  @media (max-width: 991.98px) {
    .whatwedo-service-cards {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="whatwedo-pane" data-whatwedo-pane="workforce-efficiency" role="tabpanel" aria-hidden="true">
  <div class="whatwedo-service-cards">
    <a href="{{ route('linkedinauthoritybuilding') }}" class="whatwedo-service-card">
      <div class="whatwedo-service-head">
        <span class="whatwedo-service-icon gold"><i class="ri-bookmark-line"></i></span>
        <h5 class="whatwedo-service-title">Policy Design &amp; Compliance Audit</h5>
      </div>
      <p class="whatwedo-service-desc">Development and regular auditing of HR policies to ensure legal compliance and alignment with organizational goals.</p>
      <span class="whatwedo-service-divider"></span>
      <span class="whatwedo-service-link">Read More <i class="ri-arrow-right-line"></i></span>
    </a>

    <a href="{{ route('leadershipmediatraining') }}" class="whatwedo-service-card">
      <div class="whatwedo-service-head">
        <span class="whatwedo-service-icon"><i class="ri-bar-chart-box-line"></i></span>
        <h5 class="whatwedo-service-title">Payroll Outsourcing &amp; Administration</h5>
      </div>
      <p class="whatwedo-service-desc">End-to-end payroll management, ensuring accurate processing, tax compliance, and seamless benefits administration.</p>
      <span class="whatwedo-service-divider"></span>
      <span class="whatwedo-service-link">Read More <i class="ri-arrow-right-line"></i></span>
    </a>

    <a href="{{ route('influencecoaching') }}" class="whatwedo-service-card">
      <div class="whatwedo-service-head">
        <span class="whatwedo-service-icon"><i class="ri-user-line"></i></span>
        <h5 class="whatwedo-service-title">Remote HR Solutions</h5>
      </div>
      <p class="whatwedo-service-desc">Virtual HR services acting as your external HR team, managing recruitment, onboarding, employee records, and compliance remotely.</p>
      <span class="whatwedo-service-divider"></span>
      <span class="whatwedo-service-link">Read More <i class="ri-arrow-right-line"></i></span>
    </a>
  </div>
</div>

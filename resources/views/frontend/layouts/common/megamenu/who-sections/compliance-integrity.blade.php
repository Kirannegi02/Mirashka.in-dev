<style>
  .whatwedo-cards {
    display: grid;
    grid-template-columns: repeat(4, minmax(180px, 1fr));
    border-top: 1px solid #ececec;
    border-left: 1px solid #ececec;
  }

  .whatwedo-card {
    border-right: 1px solid #ececec;
    border-bottom: 1px solid #ececec;
    padding: 16px 18px 16px;
    min-height: 320px;
    background: #fff;
    display: flex;
    flex-direction: column;
    text-decoration: none;
    transition: background 0.2s ease;
  }

  .whatwedo-card:hover {
    background: #f8fafc;
  }

  .whatwedo-card.active-card {
    background: #031024;
    color: #fff;
    text-align: center;
    padding: 24px 20px 18px;
  }

  .whatwedo-card-img {
    width: 100%;
    height: 74px;
    border-radius: 22px;
    object-fit: cover;
    margin-bottom: 14px;
  }

  .whatwedo-card-title {
    margin: 0 0 8px;
    font-size: 36px;
    line-height: 1.14;
    color: #111827;
    font-weight: 600;
  }

  .whatwedo-card.active-card .whatwedo-card-title {
    font-size: 20px;
    line-height: 1.18;
    margin-bottom: 12px;
  }

  .whatwedo-card:not(.active-card) {
    padding: 16px 18px 14px;
    text-align: left;
    display: flex !important;
    flex-direction: column;
    justify-content: center;
  }

  .whatwedo-card:not(.active-card) .whatwedo-card-img {
    height: 145px;
    border-radius: 20px;
    margin-bottom: 14px;
  }

  .whatwedo-card:not(.active-card) .whatwedo-card-title {
    font-size: 14px;
    line-height: 1.25;
    font-weight: 600;
    letter-spacing: 0;
    margin: 0 0 12px;
    min-height: 34px;
    color: #192437;
  }

  .whatwedo-card:not(.active-card) .whatwedo-card-divider {
    margin: 8px 0 10px;
  }

  .whatwedo-card-divider {
    width: 100%;
    border-top: 1px solid #d9dde3;
    margin: 0 0 14px;
  }

  .whatwedo-card.active-card .whatwedo-card-title,
  .whatwedo-card.active-card .whatwedo-card-divider,
  .whatwedo-card.active-card .whatwedo-card-desc,
  .whatwedo-card.active-card .whatwedo-link {
    color: #fff;
  }

  .whatwedo-card.active-card .whatwedo-card-divider {
    border-top-color: rgba(255, 255, 255, 0.28);
  }

  .whatwedo-card-desc {
    margin: 0 0 12px;
    font-size: 15px;
    color: #374151;
    line-height: 1.55;
  }

  .whatwedo-card.active-card .whatwedo-card-desc {
    max-width: 220px;
    margin: 0 auto 14px;
  }

  .whatwedo-link {
    margin-top: auto;
    color: #111827;
    font-size: 15px;
    line-height: 1.2;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 7px;
  }

  .whatwedo-link i {
    font-size: 20px;
    line-height: 1;
  }

  .whatwedo-card:not(.active-card) .whatwedo-link {
    color: #192437;
    font-size: 13px;
    font-weight: 500;
    margin-top: 0 !important;
  }

  .whatwedo-card:not(.active-card) .whatwedo-link i {
    font-size: 18px;
  }

  @media (max-width: 1199.98px) {
    .whatwedo-card-title {
      font-size: 30px;
    }

    .whatwedo-card.active-card .whatwedo-card-title {
      font-size: 34px;
    }

    .whatwedo-card:not(.active-card) .whatwedo-card-title {
      font-size: 13px;
    }
  }

  @media (max-width: 991.98px) {
    .whatwedo-cards {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 575.98px) {
    .whatwedo-cards {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="whatwedo-pane active" data-whatwedo-pane="compliance-integrity" role="tabpanel">
  <div class="whatwedo-cards">
    <a href="https://mirashka.in/service/expert-legal-hr-consultations/" class="whatwedo-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/expert-legal-and-HR-consultation.webp" alt="Expert legal and HR consultations" class="whatwedo-card-img" loading="lazy">
      <h5 class="whatwedo-card-title">Expert Legal &amp; HR Consultations</h5>
      <span class="whatwedo-card-divider"></span>
      <span class="whatwedo-link">Read More <i class="ri-arrow-right-line"></i></span>
    </a>

    <a href="https://mirashka.in/service/policy-documentation-excellence/" class="whatwedo-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/pollution-documentation-excellence2.webp" alt="Policy and documentation excellence" class="whatwedo-card-img" loading="lazy">
      <h5 class="whatwedo-card-title">Policy &amp; Documentation Excellence</h5>
      <span class="whatwedo-card-divider"></span>
      <span class="whatwedo-link">Read More <i class="ri-arrow-right-line"></i></span>
    </a>

    <a href="https://mirashka.in/service/compliance-risk-assessments/" class="whatwedo-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/compliance-and-risk-assessment.webp" alt="Compliance and risk assessments" class="whatwedo-card-img" loading="lazy">
      <h5 class="whatwedo-card-title">Compliance &amp; Risk Assessments</h5>
      <span class="whatwedo-card-divider"></span>
      <span class="whatwedo-link">Read More <i class="ri-arrow-right-line"></i></span>
    </a>

    <a href="https://mirashka.in/service/workplace-ethics-prevention-training/" class="whatwedo-card">
      <img src="https://mirashka.co.in/wp-content/uploads/2024/06/workplace-ethics-prevention-training.webp" alt="Workplace ethics and prevention training" class="whatwedo-card-img" loading="lazy">
      <h5 class="whatwedo-card-title">Workplace Ethics &amp; Prevention Training</h5>
      <span class="whatwedo-card-divider"></span>
      <span class="whatwedo-link">Read More <i class="ri-arrow-right-line"></i></span>
    </a>
  </div>
</div>

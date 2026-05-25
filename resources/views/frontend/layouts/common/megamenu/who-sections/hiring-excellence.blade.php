<style>
  .whatwedo-hiring-layout {
    display: grid;
    grid-template-columns: 2.2fr 1fr;
    gap: 14px;
    border-top: 1px solid #ececec;
    padding-top: 10px;
  }

  .whatwedo-hiring-services {
    display: grid;
    grid-template-columns: repeat(2, minmax(250px, 1fr));
    gap: 8px 10px;
  }

  .whatwedo-hiring-card {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    border: 1px solid #e7e7e7;
    border-radius: 8px;
    background: #fff;
    text-decoration: none;
    padding: 9px 10px;
    min-height: 70px;
  }

  .whatwedo-hiring-card:hover {
    border-color: #d8d8d8;
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.06);
  }

  .whatwedo-hiring-icon {
    width: 46px;
    height: 46px;
    object-fit: contain;
    flex-shrink: 0;
    margin-top: 1px;
  }

  .whatwedo-hiring-title {
    margin: 0 0 4px;
    color: #192437;
    font-size: 24px;
    line-height: 1.18;
    font-weight: 600;
  }

  .whatwedo-hiring-desc {
    margin: 0;
    color: #4b5563;
    font-size: 13px;
    line-height: 1.35;
  }

  .whatwedo-hiring-quote {
    border-left: 1px solid #d8d8d8;
    padding-left: 18px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .whatwedo-hiring-quote-icon {
    font-size: 44px;
    line-height: 1;
    color: #111827;
    margin-bottom: 8px;
  }

  .whatwedo-hiring-quote-text {
    margin: 0 0 12px;
    color: #1f2937;
    font-size: 15px;
    line-height: 1.7;
  }

  .whatwedo-hiring-author {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .whatwedo-hiring-author img {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    object-fit: cover;
  }

  .whatwedo-hiring-author h6 {
    margin: 0;
    color: #192437;
    font-size: 22px;
    font-weight: 600;
  }

  .whatwedo-hiring-author p {
    margin: 1px 0 0;
    color: #6b7280;
    font-size: 13px;
  }

  @media (max-width: 1199.98px) {
    .whatwedo-hiring-title {
      font-size: 20px;
    }
  }

  @media (max-width: 991.98px) {
    .whatwedo-hiring-layout {
      grid-template-columns: 1fr;
    }

    .whatwedo-hiring-quote {
      border-left: 0;
      border-top: 1px solid #d8d8d8;
      padding-left: 0;
      padding-top: 14px;
    }
  }

  @media (max-width: 767.98px) {
    .whatwedo-hiring-services {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="whatwedo-pane" data-whatwedo-pane="hiring-excellence" role="tabpanel" aria-hidden="true">
  <div class="whatwedo-hiring-layout">
    <div class="whatwedo-hiring-services">
      <a href="{{ route('talent-acquisition.sub', 'it-staffing') }}" class="whatwedo-hiring-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2024/06/it-staffing-1.png" alt="IT Staffing" class="whatwedo-hiring-icon" loading="lazy">
        <div>
          <h5 class="whatwedo-hiring-title">IT Staffing</h5>
          <p class="whatwedo-hiring-desc">Placing skilled tech talent across emerging technologies.</p>
        </div>
      </a>

      <a href="{{ route('talent-acquisition.sub', 'general-staffing') }}" class="whatwedo-hiring-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2024/06/general-staffing-1.png" alt="General Staffing" class="whatwedo-hiring-icon" loading="lazy">
        <div>
          <h5 class="whatwedo-hiring-title">General Staffing</h5>
          <p class="whatwedo-hiring-desc">End-to-end staffing for non-technical roles across industries.</p>
        </div>
      </a>

      <a href="{{ route('talent-acquisition.sub', 'naps-apprenticeship-support') }}" class="whatwedo-hiring-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2024/06/National-apprenticeship-promotion-1.png" alt="NAPS Apprenticeship Support" class="whatwedo-hiring-icon" loading="lazy">
        <div>
          <h5 class="whatwedo-hiring-title">NAPS Apprenticeship Support</h5>
          <p class="whatwedo-hiring-desc">Helping businesses leverage apprenticeships for future-ready talent and government incentives.</p>
        </div>
      </a>

      <a href="{{ route('talent-acquisition.sub', 'it-recruitment') }}" class="whatwedo-hiring-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2024/06/it-recruitment-1.png" alt="IT Recruitment" class="whatwedo-hiring-icon" loading="lazy">
        <div>
          <h5 class="whatwedo-hiring-title">IT Recruitment</h5>
          <p class="whatwedo-hiring-desc">Specialist hiring for technology and innovation roles.</p>
        </div>
      </a>

      <a href="{{ route('talent-acquisition.sub', 'recruitment-process-outsourcing') }}" class="whatwedo-hiring-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2024/06/recruitment-process-outsourcing-1.png" alt="Recruitment Process Outsourcing" class="whatwedo-hiring-icon" loading="lazy">
        <div>
          <h5 class="whatwedo-hiring-title">Recruitment Process Outsourcing</h5>
          <p class="whatwedo-hiring-desc">Acting as your extended recruitment team to handle full-cycle hiring.</p>
        </div>
      </a>

      <a href="{{ route('talent-acquisition.sub', 'executive-search') }}" class="whatwedo-hiring-card">
        <img src="https://mirashka.co.in/wp-content/uploads/2024/06/executive-search-1.png" alt="Executive Search" class="whatwedo-hiring-icon" loading="lazy">
        <div>
          <h5 class="whatwedo-hiring-title">Executive Search</h5>
          <p class="whatwedo-hiring-desc">Identifying and placing transformational leadership talent aligned with your business vision.</p>
        </div>
      </a>
    </div>

    <aside class="whatwedo-hiring-quote">
      <div class="whatwedo-hiring-quote-icon"><i class="ri-double-quotes-l"></i></div>
      <p class="whatwedo-hiring-quote-text">
        Our people are the heart of our operations, which is why we&apos;re fanatical about finding the brightest problem solvers in the industry, and giving them a great place to make a difference.
      </p>
      <div class="whatwedo-hiring-author">
        <img src="{{ asset('assets/frontend/img/menu/Animesh-Singh-Chief-Talent-Architect.png') }}" alt="Animesh Singh" loading="lazy">
        <div>
          <h6>Animesh Singh</h6>
          <p>Chief Talent Architect</p>
        </div>
      </div>
    </aside>
  </div>
</div>

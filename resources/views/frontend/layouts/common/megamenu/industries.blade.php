<style>
  .industries-mega-wrap {
    padding: 20px 24px;
  }

  .industries-chip-grid {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .industries-chip-row {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    gap: 14px;
    width: 100%;
  }

  .industries-chip {
    display: flex !important;
    align-items: center;
    gap: 12px;
    min-height: 56px;
    width: auto;
    max-width: none;
    padding: 8px 16px 8px 8px;
    border: 1px solid #d8dde3;
    border-radius: 5px;
    background: #fff;
    text-decoration: none;
    color: #1f2937;
    transition: all 0.2s ease;
  }

  .industries-chip:hover {
    border-color: #006039;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
    transform: translateY(-1px);
    color: #006039;
  }

  .industries-chip-image {
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 5px;
    flex-shrink: 0;
  }

  .industries-chip-label {
    font-size: 18px;
    line-height: 1.25;
    font-weight: 500;
    margin: 0;
    color: inherit;
    white-space: nowrap;
  }

  .industries-mega-cta {
    text-align: center;
    margin-top: 24px;
  }

  .industries-mega-cta a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 26px;
    line-height: 1.2;
    color: #252b34;
    text-decoration: none;
    font-weight: 400;
  }

  .industries-mega-cta a:hover {
    color: #006039;
  }

  @media (max-width: 991.98px) {
    .industries-chip-row {
      flex-wrap: wrap;
    }

    .industries-chip-label {
      font-size: 16px;
    }

    .industries-mega-cta a {
      font-size: 22px;
    }
  }

  @media (max-width: 575.98px) {
    .industries-mega-wrap {
      padding: 16px;
    }

    .industries-chip-row {
      flex-direction: column;
      align-items: center;
    }

    .industries-chip-label {
      font-size: 15px;
    }

    .industries-mega-cta a {
      font-size: 18px;
    }
  }
</style>

<li class="menu-item menu-item-has-children dropdown active dropdown_full position-static mega_menu nav-item">
  <a href="{{ route('industriesweserve') }}" class="dropdown-toggle nav-link">
    <span>Industries</span>
  </a>
  <ul class="dropdown-menu width_100_percentage mega-border">
    <li>
      <div class="industries-mega-wrap">
        <div class="industries-chip-grid">
          <div class="industries-chip-row">
            <a href="{{ route('capitalmarketscommunication') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/bfsi.jpg') }}" class="industries-chip-image" alt="Asset Management" loading="lazy">
              <span class="industries-chip-label">Asset Management</span>
            </a>

            <a href="{{ route('infrastructureenergy') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/infrastructure-energy.jpg') }}" class="industries-chip-image" alt="Manufacturing" loading="lazy">
              <span class="industries-chip-label">Manufacturing</span>
            </a>

            <a href="{{ route('bfsifintech') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/bfsi.jpg') }}" class="industries-chip-image" alt="Insurance" loading="lazy">
              <span class="industries-chip-label">Insurance</span>
            </a>

            <a href="{{ route('healthwellness') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/health-wellness.jpg') }}" class="industries-chip-image" alt="Pharmaceuticals" loading="lazy">
              <span class="industries-chip-label">Pharmaceuticals</span>
            </a>
          </div>

          <div class="industries-chip-row">
            <a href="{{ route('healthwellness') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/health-wellness.jpg') }}" class="industries-chip-image" alt="Medical Devices" loading="lazy">
              <span class="industries-chip-label">Medical Devices</span>
            </a>

            <a href="{{ route('aideeptech') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/al-deep.jpg') }}" class="industries-chip-image" alt="Emerging Technologies" loading="lazy">
              <span class="industries-chip-label">Emerging Technologies</span>
            </a>

            <a href="{{ route('enterprisetechsaas') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/enterprise-tech.jpg') }}" class="industries-chip-image" alt="Software & SaaS" loading="lazy">
              <span class="industries-chip-label">Software &amp; SaaS</span>
            </a>

            <a href="{{ route('digitalpresencethoughtleadership') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/enterprise-tech.jpg') }}" class="industries-chip-image" alt="E-commerce" loading="lazy">
              <span class="industries-chip-label">E-commerce</span>
            </a>
          </div>

          <div class="industries-chip-row">
            <a href="{{ route('luxurybrands') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/luxury-brands.jpg') }}" class="industries-chip-image" alt="Fashion & Apparel" loading="lazy">
              <span class="industries-chip-label">Fashion &amp; Apparel</span>
            </a>

            <a href="{{ route('bfsifintech') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/bfsi.jpg') }}" class="industries-chip-image" alt="Banking" loading="lazy">
              <span class="industries-chip-label">Banking</span>
            </a>

            <a href="{{ route('infrastructureenergy') }}" class="industries-chip">
              <img src="{{ asset('assets/frontend/img/menu/infrastructure-energy.jpg') }}" class="industries-chip-image" alt="Oil & Gas" loading="lazy">
              <span class="industries-chip-label">Oil &amp; Gas</span>
            </a>
          </div>
        </div>

        <div class="industries-mega-cta">
          <a href="{{ route('whoweserve') }}">
            <span>Discover More Industries</span>
            <i class="ri-arrow-right-line" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </li>
  </ul>
</li>

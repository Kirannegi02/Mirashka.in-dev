{{-- Sections 6–10: Five HR pillar showcases (home-only) --}}
@php
   $homePillars = [
      [
         'id' => 'home-pillar-compliance',
         'label' => 'Pillar 01',
         'section' => 'Compliance & Workplace Integrity Solutions',
         'theme' => 'light',
         'layout' => 'bento',
         'heading' => 'Protect your business before HR risks become disputes.',
         'center_title' => 'Core Compliance Areas',
         'content' => 'Compliance is not only about documents. It is about creating a workplace where every people decision is backed by clarity, policy, fairness and legal awareness. Mirashka helps businesses build safer, compliant and more trustworthy workplaces.',
         'cta' => 'Request Compliance Readiness Review',
         'cta_route' => 'compliance',
         'category_route' => 'compliance',
         'image' => 'assets/frontend/img/compliance/cwi-bento-meeting.png',
         'image2' => 'assets/frontend/img/compliance/cwi-bento-advisor.png',
         'image_alt' => 'HR and legal professionals reviewing compliance policies in a modern office',
         'image2_alt' => 'HR advisor supporting faster, safer people decisions for leadership teams',
         'side_a' => [
            'icon' => 'ri-information-line',
            'title' => 'Why compliance matters',
            'text' => 'Mirashka helps businesses build safer, compliant workplaces with clarity, policy and legal awareness.',
         ],
         'side_b' => [
            'icon' => 'ri-shield-check-line',
            'title' => 'Faster, Safer HR Decisions',
            'text' => 'Move from informal advice to documented, defensible people decisions your leadership can stand behind.',
         ],
         'services' => [
            ['title' => 'Expert Legal & HR Consultations', 'text' => 'Real-time guidance on employment, compliance, workforce and people-related issues.', 'icon' => 'ri-scales-3-line'],
            ['title' => 'Policy & Documentation Excellence', 'text' => 'Customized employee handbooks, HR policies, formats, letters and internal process documents.', 'icon' => 'ri-file-text-line'],
            ['title' => 'Compliance & Risk Assessments', 'text' => 'HR audits, workplace checks and risk reviews to identify compliance gaps early.', 'icon' => 'ri-clipboard-line'],
            ['title' => 'Workplace Ethics & Prevention Training', 'text' => 'POSH-compliant training and workplace ethics programs for a safe and inclusive culture.', 'icon' => 'ri-group-line'],
         ],
      ],
      [
         'id' => 'home-pillar-workforce',
         'label' => 'Pillar 02',
         'section' => 'Workforce Management & Process Optimization',
         'theme' => 'dark',
         'layout' => 'ops-hub',
         'heading' => 'Streamline daily HR operations so leadership can focus on growth.',
         'content' => 'A growing company needs HR processes that are accurate, repeatable and easy to monitor. Mirashka helps businesses organize policies, payroll, employee records, onboarding, exits and remote HR support into a structured operating rhythm.',
         'cta' => 'Optimize HR Operations',
         'cta_route' => 'workforce',
         'category_route' => 'workforce',
         'image' => 'assets/frontend/img/workforce/wfm-hero.png',
         'image_alt' => 'Payroll and HR operations dashboard with employee records and compliance calendar',
         'services' => [
            ['title' => 'Policy Design & Compliance Audit', 'text' => 'Development and regular auditing of HR policies aligned with law and business goals.', 'icon' => 'ri-file-shield-2-line'],
            ['title' => 'Payroll Outsourcing & Administration', 'text' => 'Accurate salary processing support, tax compliance coordination and benefits administration.', 'icon' => 'ri-money-dollar-circle-line'],
            ['title' => 'Remote HR Solutions', 'text' => 'Virtual HR services acting as an external HR team for recruitment, onboarding, records and compliance.', 'icon' => 'ri-remote-control-line'],
         ],
      ],
      [
         'id' => 'home-pillar-leadership',
         'label' => 'Pillar 03',
         'section' => 'Leadership & Organizational Excellence',
         'theme' => 'light',
         'layout' => 'boardroom',
         'heading' => 'Businesses scale when leadership becomes stronger.',
         'content' => 'Hiring more people does not automatically create growth. Growth needs leaders who can think strategically, execute consistently, inspire teams and build systems. Mirashka helps organizations identify, assess, hire and develop leadership talent for long-term success.',
         'cta' => 'Build Leadership Pipeline',
         'cta_route' => 'leadership-organization',
         'category_route' => 'leadership-organization',
         'image' => 'assets/frontend/img/leadership/ldr-hero-boardroom.png',
         'image_alt' => 'Boardroom with leadership assessment cards and succession timeline',
         'services' => [
            ['title' => 'Executive Search & Leadership Hiring', 'text' => 'Finding transformational leaders aligned with vision, culture and business goals.', 'icon' => 'ri-user-star-line'],
            ['title' => 'Board & CEO Advisory', 'text' => 'Strategic advice for governance, decision-making and long-term planning.', 'icon' => 'ri-briefcase-4-line'],
            ['title' => 'CEO Succession & Performance Acceleration', 'text' => 'Succession planning and performance support for new leadership transitions.', 'icon' => 'ri-arrow-up-circle-line'],
            ['title' => 'Executive Assessment & Leadership Consulting', 'text' => 'Leadership evaluations and development roadmaps aligned with business strategy.', 'icon' => 'ri-bar-chart-box-line'],
            ['title' => 'HR & Talent Strategy Advisory', 'text' => 'Workforce planning, culture transformation and future talent pipeline design.', 'icon' => 'ri-pie-chart-2-line'],
            ['title' => 'Digital Transformation & Workforce Evolution', 'text' => 'Helping HR and leadership teams adapt to digital-first operations and HR technology.', 'icon' => 'ri-cpu-line'],
            ['title' => 'Diversity, Equity & Inclusion Advisory', 'text' => 'Inclusive hiring, leadership and culture frameworks.', 'icon' => 'ri-global-line'],
            ['title' => 'Family Business Leadership Solutions', 'text' => 'Governance, succession and leadership transition support for family-owned businesses.', 'icon' => 'ri-home-heart-line'],
            ['title' => 'Restructuring & Organizational Transformation', 'text' => 'Workforce redeployment, restructuring and cultural transformation support.', 'icon' => 'ri-refresh-line'],
         ],
      ],
      [
         'id' => 'home-pillar-talent',
         'label' => 'Pillar 04',
         'section' => 'Talent Acquisition & Staffing Excellence',
         'theme' => 'dark',
         'layout' => 'talent-spine',
         'heading' => 'Hire faster, hire better and hire with business context.',
         'content' => 'Good hiring is not resume forwarding. It requires role clarity, sourcing strategy, screening, candidate communication, culture fit assessment, interview coordination and closure discipline. Mirashka works as an extended recruitment and staffing partner for businesses.',
         'cta' => 'Start Hiring Support',
         'cta_route' => 'talent-acquisition',
         'category_route' => 'talent-acquisition',
         'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
         'image_alt' => 'Recruitment pipeline dashboard with candidate cards and interview stages',
         'services' => [
            ['title' => 'IT Staffing', 'text' => 'Skilled technology talent across emerging technologies and business-critical IT roles.', 'icon' => 'ri-code-box-line'],
            ['title' => 'General Staffing', 'text' => 'End-to-end staffing for non-technical roles across departments and industries.', 'icon' => 'ri-team-line'],
            ['title' => 'NAPS Apprenticeship Support', 'text' => 'Support for apprenticeship-based workforce development and government-linked talent programs.', 'icon' => 'ri-graduation-cap-line'],
            ['title' => 'IT Recruitment', 'text' => 'Specialist recruitment for technology, innovation and digital roles.', 'icon' => 'ri-computer-line'],
            ['title' => 'Recruitment Process Outsourcing', 'text' => 'Extended recruitment team support for full-cycle hiring.', 'icon' => 'ri-loop-left-line'],
            ['title' => 'Executive Search', 'text' => 'Leadership hiring for senior and strategic positions.', 'icon' => 'ri-user-search-line'],
         ],
      ],
      [
         'id' => 'home-pillar-hraas',
         'label' => 'Pillar 05',
         'section' => 'HR as a Service',
         'theme' => 'light',
         'layout' => 'hraas-suite',
         'heading' => 'Your dedicated HR partner, on demand.',
         'content' => 'Mirashka HRaaS gives companies access to HR expertise, systems and execution without the burden of building a large internal HR department from day one. We manage the people side of business so founders and leadership teams can focus on growth.',
         'cta' => 'Build My HRaaS Plan',
         'cta_route' => 'hr-as-a-service',
         'category_route' => 'hr-as-a-service',
         'image' => 'assets/frontend/img/hraas/hraas-v3-partner.png',
         'image_alt' => 'Dedicated HR manager beside a modern HR platform dashboard',
         'services' => [
            ['title' => 'HR Outsourcing', 'text' => 'Full-service HR management including payroll, benefits administration and compliance oversight.', 'icon' => 'ri-building-line'],
            ['title' => 'Employer Branding', 'text' => 'Positioning your company as an employer of choice to attract better talent.', 'icon' => 'ri-megaphone-line'],
            ['title' => 'Candidate Sourcing', 'text' => 'Curated candidate pipelines designed around skill, culture and hiring needs.', 'icon' => 'ri-user-add-line'],
            ['title' => 'Employee Engagement & Performance Management', 'text' => 'Engagement strategies, performance frameworks and real-time employee feedback programs.', 'icon' => 'ri-heart-pulse-line'],
            ['title' => 'Employee Surveys & Retention Strategies', 'text' => 'Continuous feedback mechanisms to improve satisfaction and retention.', 'icon' => 'ri-survey-line'],
            ['title' => 'HR Technology Solutions', 'text' => 'HR software, analytics platforms and automation tools to improve HR efficiency.', 'icon' => 'ri-dashboard-3-line'],
         ],
      ],
   ];
@endphp

<style>
   .home-pillars { --hp-green: #006039; --hp-mint: #7dcea8; --hp-dark: #0a1410; --hp-light: #f4f8f6; }
   .home-pillar {
      position: relative;
      overflow: hidden;
      padding: 72px 0;
   }
   .home-pillar--dark {
      background: linear-gradient(165deg, #060d0a 0%, #0c1814 45%, #122820 100%);
      color: #fff;
   }
   .home-pillar--light {
      background: linear-gradient(180deg, #f8faf9 0%, #eef4f1 100%);
      color: #0f172a;
   }
   .home-pillar__inner {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 1;
   }
   .home-pillar__label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 5px 14px;
      border-radius: 8px;
      font-size: 10px;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      margin-bottom: 14px;
   }
   .home-pillar--dark .home-pillar__label {
      background: rgba(125, 206, 168, 0.12);
      border: 1px solid rgba(125, 206, 168, 0.35);
      color: var(--hp-mint);
   }
   .home-pillar--light .home-pillar__label {
      background: rgba(0, 96, 57, 0.08);
      border: 1px solid rgba(0, 96, 57, 0.2);
      color: var(--hp-green);
   }
   .home-pillar__heading {
      font-size: clamp(1.45rem, 2.8vw, 2.1rem);
      font-weight: 800;
      line-height: 1.25;
      margin: 0 0 14px;
      letter-spacing: -0.02em;
   }
   .home-pillar--dark .home-pillar__heading { color: #fff; }
   .home-pillar--light .home-pillar__heading { color: #0f172a; }
   .home-pillar__content {
      margin: 0 0 22px;
      font-size: 0.98rem;
      line-height: 1.7;
      max-width: 54ch;
   }
   .home-pillar--dark .home-pillar__content { color: rgba(255, 255, 255, 0.76); }
   .home-pillar--light .home-pillar__content { color: #475569; }
   .home-pillar__cta {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 13px 28px;
      border-radius: 8px;
      font-size: 0.88rem;
      font-weight: 700;
      text-decoration: none;
      transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
   }
   .home-pillar--dark .home-pillar__cta {
      background: var(--hp-mint);
      color: #0a1410 !important;
      box-shadow: 0 10px 32px rgba(125, 206, 168, 0.25);
   }
   .home-pillar--dark .home-pillar__cta:hover {
      background: #fff;
      color: var(--hp-green) !important;
      transform: translateY(-2px);
   }
   .home-pillar--light .home-pillar__cta {
      background: var(--hp-green);
      color: #fff !important;
      box-shadow: 0 10px 32px rgba(0, 96, 57, 0.22);
   }
   .home-pillar--light .home-pillar__cta:hover {
      background: #004d2e;
      transform: translateY(-2px);
   }
   .home-pillar__media {
      position: relative;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 24px 64px rgba(0, 0, 0, 0.28);
   }
   .home-pillar__media img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
   }
   .home-pillar__media-badge {
      position: absolute;
      bottom: 14px;
      left: 14px;
      padding: 8px 14px;
      border-radius: 8px;
      background: rgba(10, 20, 16, 0.85);
      border: 1px solid rgba(125, 206, 168, 0.35);
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--hp-mint);
   }
   .home-pillar--light .home-pillar__media-badge {
      background: rgba(255, 255, 255, 0.92);
      color: var(--hp-green);
      border-color: rgba(0, 96, 57, 0.2);
   }
   /* Layout: shield (Pillar 01) */
   .home-pillar--shield .home-pillar__grid {
      display: grid;
      grid-template-columns: minmax(0, 0.92fr) minmax(0, 1.08fr);
      gap: 40px;
      align-items: center;
   }
   .home-pillar--shield .home-pillar__media { min-height: 380px; aspect-ratio: 4/5; max-height: 480px; }
   .home-pillar__svc-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
      margin-top: 8px;
   }
   .home-pillar__svc-card {
      display: flex;
      gap: 12px;
      padding: 14px;
      border-radius: 8px;
      text-decoration: none;
      transition: transform 0.22s ease, border-color 0.22s ease, background 0.22s ease;
   }
   .home-pillar--dark .home-pillar__svc-card {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(125, 206, 168, 0.14);
   }
   .home-pillar--dark .home-pillar__svc-card:hover {
      background: rgba(0, 96, 57, 0.25);
      border-color: rgba(125, 206, 168, 0.4);
      transform: translateY(-3px);
   }
   .home-pillar--light .home-pillar__svc-card {
      background: #fff;
      border: 1px solid #dce8e2;
      box-shadow: 0 4px 16px rgba(0, 96, 57, 0.06);
   }
   .home-pillar--light .home-pillar__svc-card:hover {
      border-color: var(--hp-green);
      transform: translateY(-3px);
      box-shadow: 0 12px 28px rgba(0, 96, 57, 0.1);
   }
   .home-pillar__svc-icon {
      flex-shrink: 0;
      width: 40px;
      height: 40px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
   }
   .home-pillar--dark .home-pillar__svc-icon {
      background: rgba(0, 96, 57, 0.45);
      color: var(--hp-mint);
   }
   .home-pillar--light .home-pillar__svc-icon {
      background: rgba(0, 96, 57, 0.1);
      color: var(--hp-green);
   }
   .home-pillar__svc-card strong {
      display: block;
      font-size: 0.82rem;
      font-weight: 700;
      line-height: 1.35;
      margin-bottom: 4px;
   }
   .home-pillar--dark .home-pillar__svc-card strong { color: #fff; }
   .home-pillar--light .home-pillar__svc-card strong { color: #0f172a; }
   .home-pillar__svc-card span {
      display: block;
      font-size: 0.74rem;
      line-height: 1.5;
   }
   .home-pillar--dark .home-pillar__svc-card span { color: rgba(255, 255, 255, 0.65); }
   .home-pillar--light .home-pillar__svc-card span { color: #64748b; }
   /* Layout: ops (Pillar 02) */
   .home-pillar--ops .home-pillar__grid {
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(0, 0.88fr);
      gap: 44px;
      align-items: center;
   }
   .home-pillar--ops .home-pillar__media { min-height: 360px; border-radius: 8px; }
   .home-pillar__steps {
      list-style: none;
      margin: 0 0 24px;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: 0;
   }
   .home-pillar__step {
      display: grid;
      grid-template-columns: 56px minmax(0, 1fr);
      gap: 16px;
      padding: 18px 0;
      border-bottom: 1px solid #dce8e2;
      align-items: start;
   }
   .home-pillar__step:last-child { border-bottom: none; padding-bottom: 0; }
   .home-pillar__step-num {
      width: 48px;
      height: 48px;
      border-radius: 8px;
      background: var(--hp-green);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      font-weight: 800;
   }
   .home-pillar__step strong {
      display: block;
      font-size: 0.92rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 4px;
   }
   .home-pillar__step p {
      margin: 0;
      font-size: 0.82rem;
      line-height: 1.55;
      color: #64748b;
   }
   .home-pillar__step i {
      font-size: 22px;
      color: var(--hp-green);
      margin-bottom: 6px;
      display: block;
   }
   /* Layout: ops-hub (Pillar 02 — dark, split hub) */
   .home-pillar--ops-hub {
      padding: 40px 0 48px;
      background: #060d0a;
   }
   .home-pillar--ops-hub .home-pillar__glow {
      display: none;
   }
   .home-pillar--ops-hub .home-pillar__inner {
      max-width: 1140px;
   }
   .home-wfm-hub {
      display: grid;
      grid-template-columns: minmax(0, 0.92fr) minmax(0, 1.08fr);
      gap: 0;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid rgba(125, 206, 168, 0.15);
      box-shadow: 0 28px 72px rgba(0, 0, 0, 0.5);
      background: #0a1410;
   }
   .home-wfm-hub__visual {
      position: relative;
      min-height: 420px;
   }
   .home-wfm-hub__visual img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
   }
   .home-wfm-hub__visual::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, transparent 40%, rgba(6, 13, 10, 0.85) 100%),
         linear-gradient(0deg, rgba(6, 13, 10, 0.5) 0%, transparent 40%);
      pointer-events: none;
   }
   .home-wfm-hub__visual-badge {
      position: absolute;
      top: 16px;
      left: 16px;
      z-index: 2;
      padding: 6px 12px;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.95);
      font-size: 0.65rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--hp-green);
   }
   .home-wfm-hub__visual-caption {
      position: absolute;
      bottom: 20px;
      left: 20px;
      z-index: 2;
      max-width: 220px;
      padding: 12px 14px;
      border-radius: 8px;
      background: rgba(0, 96, 57, 0.85);
      border: 1px solid rgba(125, 206, 168, 0.35);
      backdrop-filter: blur(8px);
   }
   .home-wfm-hub__visual-caption strong {
      display: block;
      font-size: 0.78rem;
      font-weight: 800;
      color: #fff;
      line-height: 1.35;
      margin-bottom: 4px;
   }
   .home-wfm-hub__visual-caption span {
      font-size: 0.7rem;
      line-height: 1.45;
      color: rgba(255, 255, 255, 0.85);
   }
   .home-wfm-hub__body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 28px 28px 28px 32px;
   }
   .home-wfm-hub__body .home-pillar__label {
      margin-bottom: 12px;
   }
   .home-wfm-hub__body h2 {
      margin: 0 0 10px;
      font-size: clamp(1.25rem, 2.2vw, 1.65rem);
      font-weight: 800;
      line-height: 1.25;
      color: #fff;
      letter-spacing: -0.02em;
   }
   .home-wfm-hub__intro {
      margin: 0 0 18px;
      font-size: 0.88rem;
      line-height: 1.65;
      color: rgba(255, 255, 255, 0.72);
   }
   .home-wfm-hub__rail {
      position: relative;
      margin: 0 0 20px;
      padding-left: 20px;
   }
   .home-wfm-hub__rail::before {
      content: '';
      position: absolute;
      left: 7px;
      top: 8px;
      bottom: 8px;
      width: 2px;
      background: linear-gradient(180deg, var(--hp-mint), rgba(125, 206, 168, 0.2));
      border-radius: 2px;
   }
   .home-wfm-hub__item {
      position: relative;
      display: grid;
      grid-template-columns: 40px minmax(0, 1fr);
      gap: 12px;
      padding: 12px 14px;
      margin-bottom: 8px;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(125, 206, 168, 0.1);
      transition: background 0.22s ease, border-color 0.22s ease, transform 0.22s ease;
   }
   .home-wfm-hub__item:last-child {
      margin-bottom: 0;
   }
   .home-wfm-hub__item:hover {
      background: rgba(0, 96, 57, 0.22);
      border-color: rgba(125, 206, 168, 0.35);
      transform: translateX(4px);
   }
   .home-wfm-hub__item-icon {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      background: rgba(0, 96, 57, 0.45);
      color: var(--hp-mint);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
   }
   .home-wfm-hub__item strong {
      display: block;
      font-size: 0.86rem;
      font-weight: 700;
      color: #fff;
      line-height: 1.35;
      margin-bottom: 3px;
   }
   .home-wfm-hub__item p {
      margin: 0;
      font-size: 0.78rem;
      line-height: 1.5;
      color: rgba(255, 255, 255, 0.65);
   }
   .home-wfm-hub__cta {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      width: fit-content;
      padding: 13px 28px;
      border-radius: 8px;
      background: var(--hp-mint);
      color: #0a1410 !important;
      font-size: 0.85rem;
      font-weight: 800;
      text-decoration: none;
      transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
      box-shadow: 0 8px 28px rgba(125, 206, 168, 0.25);
   }
   .home-wfm-hub__cta:hover {
      background: #fff;
      color: var(--hp-green) !important;
      transform: translateY(-2px);
      box-shadow: 0 12px 36px rgba(125, 206, 168, 0.35);
   }
   /* Layout: boardroom (Pillar 03) */
   .home-pillar--boardroom {
      padding: 44px 0 52px;
   }
   .home-pillar--boardroom.home-pillar--light {
      background: linear-gradient(180deg, #f8faf9 0%, #eef4f1 100%);
   }
   .home-pillar--boardroom .home-pillar__glow {
      background: radial-gradient(circle, rgba(125, 206, 168, 0.2) 0%, transparent 70%);
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      top: auto;
      width: 80%;
      height: 50%;
   }
   .home-pillar--boardroom .home-pillar__intro-row {
      display: grid;
      grid-template-columns: minmax(0, 1.05fr) minmax(260px, 0.85fr);
      gap: 32px;
      align-items: center;
      margin-bottom: 24px;
   }
   .home-pillar--boardroom .home-pillar__media {
      min-height: 260px;
      max-height: none;
      border-radius: 8px;
      border: 1px solid #dce8e2;
      box-shadow: 0 16px 48px rgba(0, 96, 57, 0.1);
   }
   .home-pillar--boardroom .home-pillar__content {
      max-width: none;
   }
   .home-pillar__mosaic {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 12px;
   }
   .home-pillar__mosaic-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 14px 16px;
      border-radius: 8px;
      transition: background 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
   }
   .home-pillar--light .home-pillar__mosaic-item {
      background: #fff;
      border: 1px solid #dce8e2;
      box-shadow: 0 4px 18px rgba(0, 96, 57, 0.06);
   }
   .home-pillar--light .home-pillar__mosaic-item:hover {
      background: #fff;
      border-color: var(--hp-green);
      box-shadow: 0 12px 32px rgba(0, 96, 57, 0.12);
      transform: translateY(-3px);
   }
   .home-pillar--dark .home-pillar__mosaic-item {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(125, 206, 168, 0.12);
   }
   .home-pillar--dark .home-pillar__mosaic-item:hover {
      background: rgba(0, 96, 57, 0.22);
      border-color: rgba(125, 206, 168, 0.35);
   }
   .home-pillar__mosaic-item i {
      flex-shrink: 0;
      width: 36px;
      height: 36px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin-top: 0;
   }
   .home-pillar--light .home-pillar__mosaic-item i {
      background: rgba(0, 96, 57, 0.1);
      color: var(--hp-green);
   }
   .home-pillar--dark .home-pillar__mosaic-item i {
      color: var(--hp-mint);
      background: transparent;
      width: auto;
      height: auto;
   }
   .home-pillar__mosaic-item strong {
      display: block;
      font-size: 0.82rem;
      font-weight: 700;
      line-height: 1.35;
      margin-bottom: 4px;
   }
   .home-pillar--light .home-pillar__mosaic-item strong {
      color: #0f172a;
   }
   .home-pillar--dark .home-pillar__mosaic-item strong {
      color: #fff;
   }
   .home-pillar__mosaic-item span {
      font-size: 0.76rem;
      line-height: 1.5;
   }
   .home-pillar--light .home-pillar__mosaic-item span {
      color: #64748b;
   }
   .home-pillar--dark .home-pillar__mosaic-item span {
      color: rgba(255, 255, 255, 0.58);
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
   }
   /* Layout: talent-spine (Pillar 04 — dark compact deck) */
   .home-pillar--talent-spine {
      padding: 36px 0 44px;
      background: #030806;
      position: relative;
      overflow: hidden;
   }
   .home-pillar--talent-spine::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
         radial-gradient(ellipse 55% 45% at 12% 18%, rgba(0, 96, 57, 0.35) 0%, transparent 55%),
         radial-gradient(ellipse 50% 40% at 88% 75%, rgba(125, 206, 168, 0.12) 0%, transparent 50%),
         linear-gradient(165deg, #030806 0%, #071210 45%, #040a08 100%);
      pointer-events: none;
   }
   .home-pillar--talent-spine .home-pillar__glow {
      display: none;
   }
   .home-pillar--talent-spine .home-pillar__inner {
      position: relative;
      z-index: 1;
      max-width: 1100px;
   }
   .home-pillar--talent-spine .home-pillar__label {
      background: rgba(125, 206, 168, 0.12);
      border-color: rgba(125, 206, 168, 0.35);
      color: var(--hp-mint);
   }
   .home-talent-spine__header {
      display: grid;
      grid-template-columns: minmax(0, 1fr);
      gap: 8px;
      margin-bottom: 16px;
   }
   .home-talent-spine__intro {
      margin: 0;
      font-size: 0.84rem;
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.65);
   }
   .home-talent-spine__deck {
      display: grid;
      grid-template-columns: minmax(200px, 32%) minmax(0, 1fr);
      gap: 0;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid rgba(125, 206, 168, 0.18);
      box-shadow: 0 20px 48px rgba(0, 0, 0, 0.45);
      background: rgba(8, 16, 13, 0.85);
   }
   .home-talent-spine__visual {
      position: relative;
      min-height: 0;
      align-self: stretch;
   }
   .home-talent-spine__visual img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
   }
   .home-talent-spine__visual::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(0deg, rgba(3, 8, 6, 0.88) 0%, transparent 55%);
   }
   .home-talent-spine__visual-label {
      position: absolute;
      bottom: 12px;
      left: 12px;
      right: 12px;
      z-index: 2;
      font-size: 0.62rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--hp-mint);
   }
   .home-talent-spine__body {
      display: flex;
      flex-direction: column;
      padding: 18px 20px 16px;
      gap: 12px;
   }
   .home-talent-spine__body h2 {
      margin: 0;
      font-size: clamp(1.05rem, 1.8vw, 1.35rem);
      font-weight: 800;
      line-height: 1.25;
      color: #fff;
      letter-spacing: -0.02em;
   }
   .home-talent-spine__matrix {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 8px;
   }
   .home-talent-spine__cell {
      display: grid;
      grid-template-columns: 28px minmax(0, 1fr);
      gap: 8px;
      align-items: start;
      padding: 10px;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(125, 206, 168, 0.12);
      transition: background 0.2s ease, border-color 0.2s ease;
   }
   .home-talent-spine__cell:hover {
      background: rgba(0, 96, 57, 0.28);
      border-color: rgba(125, 206, 168, 0.35);
   }
   .home-talent-spine__cell-icon {
      width: 28px;
      height: 28px;
      border-radius: 8px;
      background: rgba(125, 206, 168, 0.12);
      color: var(--hp-mint);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
   }
   .home-talent-spine__cell-text strong {
      display: block;
      font-size: 0.76rem;
      font-weight: 700;
      color: #fff;
      line-height: 1.3;
      margin-bottom: 2px;
   }
   .home-talent-spine__cell-text strong em {
      font-style: normal;
      font-size: 0.62rem;
      font-weight: 800;
      color: var(--hp-mint);
      margin-right: 4px;
   }
   .home-talent-spine__cell-text p {
      margin: 0;
      font-size: 0.68rem;
      line-height: 1.45;
      color: rgba(255, 255, 255, 0.58);
   }
   .home-talent-spine__foot {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      padding-top: 4px;
      border-top: 1px solid rgba(125, 206, 168, 0.1);
   }
   .home-talent-spine__foot-label {
      font-size: 0.65rem;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: rgba(125, 206, 168, 0.75);
   }
   .home-talent-spine__cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 22px;
      border-radius: 8px;
      background: var(--hp-mint);
      color: #030806 !important;
      font-size: 0.8rem;
      font-weight: 800;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.22s ease, transform 0.22s ease;
      box-shadow: 0 6px 20px rgba(125, 206, 168, 0.22);
   }
   .home-talent-spine__cta:hover {
      background: #fff;
      color: var(--hp-green) !important;
      transform: translateY(-1px);
   }
   /* Layout: hraas-suite (Pillar 05 — light) */
   .home-pillar--hraas-suite {
      padding: 40px 0 48px;
      background: linear-gradient(180deg, #f8fbf9 0%, #eef5f1 100%);
   }
   .home-pillar--hraas-suite .home-pillar__glow {
      background: radial-gradient(circle, rgba(0, 96, 57, 0.08) 0%, transparent 70%);
      top: 10%;
      right: 5%;
      width: 50%;
      height: 60%;
   }
   .home-pillar--hraas-suite .home-pillar__inner {
      max-width: 1100px;
   }
   .home-hraas-suite__header {
      margin-bottom: 18px;
      max-width: 760px;
   }
   .home-hraas-suite__intro {
      margin: 8px 0 0;
      font-size: 0.88rem;
      line-height: 1.6;
      color: #475569;
   }
   .home-hraas-suite__panel {
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(260px, 36%);
      gap: 0;
      border-radius: 8px;
      overflow: hidden;
      background: #fff;
      border: 1px solid #dce8e2;
      box-shadow: 0 18px 48px rgba(0, 96, 57, 0.08);
   }
   .home-hraas-suite__main {
      padding: 22px 24px 20px;
      display: flex;
      flex-direction: column;
      gap: 14px;
   }
   .home-hraas-suite__main h2 {
      margin: 0;
      font-size: clamp(1.1rem, 2vw, 1.45rem);
      font-weight: 800;
      line-height: 1.25;
      color: #0f172a;
      letter-spacing: -0.02em;
   }
   .home-hraas-suite__list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 8px 14px;
   }
   .home-hraas-suite__item {
      display: grid;
      grid-template-columns: 32px minmax(0, 1fr);
      gap: 10px;
      align-items: start;
      padding: 10px 10px 10px 12px;
      border-radius: 8px;
      border-left: 3px solid #dce8e2;
      background: #f8fbf9;
      transition: border-color 0.2s ease, background 0.2s ease, transform 0.2s ease;
   }
   .home-hraas-suite__item:hover {
      border-left-color: var(--hp-green);
      background: #fff;
      transform: translateX(3px);
      box-shadow: 0 6px 18px rgba(0, 96, 57, 0.08);
   }
   .home-hraas-suite__item-icon {
      width: 32px;
      height: 32px;
      border-radius: 8px;
      background: rgba(0, 96, 57, 0.1);
      color: var(--hp-green);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
   }
   .home-hraas-suite__item strong {
      display: block;
      font-size: 0.78rem;
      font-weight: 700;
      color: #0f172a;
      line-height: 1.3;
      margin-bottom: 2px;
   }
   .home-hraas-suite__item p {
      margin: 0;
      font-size: 0.7rem;
      line-height: 1.45;
      color: #64748b;
   }
   .home-hraas-suite__cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      width: fit-content;
      margin-top: 4px;
      padding: 11px 24px;
      border-radius: 8px;
      background: var(--hp-green);
      color: #fff !important;
      font-size: 0.82rem;
      font-weight: 700;
      text-decoration: none;
      transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
      box-shadow: 0 8px 22px rgba(0, 96, 57, 0.18);
   }
   .home-hraas-suite__cta:hover {
      background: #004d2e;
      transform: translateY(-2px);
      box-shadow: 0 12px 28px rgba(0, 96, 57, 0.22);
   }
   .home-hraas-suite__aside {
      position: relative;
      min-height: 100%;
      background: #e8f0ec;
      border-left: 1px solid #dce8e2;
   }
   .home-hraas-suite__aside img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
   }
   .home-hraas-suite__aside-cap {
      position: absolute;
      left: 14px;
      right: 14px;
      bottom: 14px;
      z-index: 2;
      padding: 12px 14px;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.94);
      border: 1px solid #dce8e2;
      box-shadow: 0 8px 24px rgba(0, 96, 57, 0.1);
   }
   .home-hraas-suite__aside-cap strong {
      display: block;
      font-size: 0.72rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--hp-green);
      margin-bottom: 4px;
   }
   .home-hraas-suite__aside-cap span {
      font-size: 0.75rem;
      line-height: 1.45;
      color: #475569;
   }
   .home-pillar__glow {
      position: absolute;
      width: 400px;
      height: 400px;
      border-radius: 50%;
      pointer-events: none;
      opacity: 0.4;
   }
   .home-pillar--dark .home-pillar__glow {
      background: radial-gradient(circle, rgba(0, 96, 57, 0.35) 0%, transparent 70%);
      top: -10%;
      right: -5%;
   }
   .home-pillar--light .home-pillar__glow {
      background: radial-gradient(circle, rgba(125, 206, 168, 0.35) 0%, transparent 70%);
      bottom: -15%;
      left: -5%;
   }
   /* Layout: bento (Pillar 01 — light, compact) */
   .home-pillar--bento {
      padding: 36px 0 40px;
   }
   .home-pillar--bento .home-pillar__glow {
      display: none;
   }
   .home-pillar--bento .home-pillar__inner {
      max-width: 1140px;
   }
   .home-pillar__bento {
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(0, 1.15fr) minmax(0, 1fr);
      gap: 10px;
      align-items: stretch;
   }
   .home-pillar__bento-col {
      display: flex;
      flex-direction: column;
      gap: 10px;
      min-height: 0;
      min-width: 0;
   }
   .home-pillar__bento-center {
      min-width: 0;
   }
   .home-pillar__bento-photo {
      border-radius: 8px;
      overflow: hidden;
      min-height: 0;
      box-shadow: 0 8px 28px rgba(0, 96, 57, 0.1);
      border: 1px solid #dce8e2;
   }
   .home-pillar__bento-col .home-pillar__bento-photo {
      flex: 1 1 0;
      display: flex;
      flex-direction: column;
      min-height: 140px;
   }
   .home-pillar__bento-photo img {
      width: 100%;
      height: 100%;
      flex: 1 1 auto;
      min-height: 0;
      object-fit: cover;
      object-position: center center;
      display: block;
   }
   .home-pillar__bento-col--left .home-pillar__bento-photo img {
      object-position: center 35%;
   }
   .home-pillar__bento-col--right .home-pillar__bento-photo img {
      object-position: center 20%;
   }
   .home-pillar__bento-col .home-pillar__bento-tile {
      flex: 0 0 auto;
      height: auto;
      padding: 11px 13px;
   }
   .home-pillar--bento .home-pillar__bento-col .home-pillar__bento-tile p {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
   }
   .home-pillar--bento .home-pillar__bento-tile-icon {
      width: 32px;
      height: 32px;
      font-size: 16px;
      margin-bottom: 6px;
   }
   .home-pillar--bento .home-pillar__bento-col .home-pillar__bento-tile h3 {
      margin-bottom: 4px;
      font-size: 0.95rem;
   }
   .home-pillar__bento-tile {
      border-radius: 8px;
      padding: 14px;
      height: auto;
      display: flex;
      flex-direction: column;
      background: #fff;
      border: 1px solid #dce8e2;
      box-shadow: 0 4px 18px rgba(0, 96, 57, 0.06);
   }
   .home-pillar__bento-main.home-pillar__bento-tile {
      height: 100%;
   }
   .home-pillar__bento-tile-icon {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(0, 96, 57, 0.1);
      color: var(--hp-green);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin-bottom: 8px;
      flex-shrink: 0;
   }
   .home-pillar__bento-tile h3 {
      margin: 0 0 6px;
      font-size: 0.92rem;
      font-weight: 800;
      line-height: 1.3;
      color: #0f172a;
   }
   .home-pillar__bento-tile p {
      margin: 0;
      font-size: 0.8rem;
      line-height: 1.55;
      color: #64748b;
   }
   .home-pillar__bento-main {
      display: flex;
      flex-direction: column;
      padding: 14px;
      gap: 0;
   }
   .home-pillar__bento-main .home-pillar__label {
      margin-bottom: 8px;
      padding: 4px 10px;
      font-size: 9px;
   }
   .home-pillar__bento-main-top {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 10px;
   }
   .home-pillar__bento-main-icon {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: rgba(0, 96, 57, 0.1);
      color: var(--hp-green);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      flex-shrink: 0;
   }
   .home-pillar__bento-main h2 {
      margin: 0;
      font-size: clamp(1rem, 1.8vw, 1.2rem);
      font-weight: 800;
      line-height: 1.28;
      color: #0f172a;
   }
   .home-pillar__bento-main h3 {
      margin: 0 0 8px;
      font-size: 0.88rem;
      font-weight: 800;
      color: #0f172a;
   }
   .home-pillar__bento-svc-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 8px;
      margin-bottom: 12px;
   }
   .home-pillar__bento-svc {
      padding: 10px;
      border-radius: 8px;
      background: #f8faf9;
      border: 1px solid #e8eeeb;
   }
   .home-pillar__bento-svc strong {
      display: block;
      font-size: 1.375rem;
      font-weight: 700;
      color: #0f172a;
      line-height: 1.25;
      margin-bottom: 6px;
   }
   .home-pillar__bento-svc span {
      display: block;
      font-size: 1rem;
      line-height: 1.65;
      color: #475569;
   }
   .home-pillar__bento-cta {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      width: 100%;
      padding: 11px 16px;
      border-radius: 8px;
      background: var(--hp-green);
      color: #fff !important;
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      text-decoration: none;
      transition: background 0.2s ease, transform 0.2s ease;
   }
   .home-pillar__bento-cta:hover {
      background: #004d2e;
      transform: translateY(-1px);
   }
   /* Scroll reveal */
   .home-pillar .hp-reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.7s cubic-bezier(0.22, 1, 0.36, 1), transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
   }
   .home-pillar.hp-is-active .hp-reveal {
      opacity: 1;
      transform: none;
   }
   .home-pillar .hp-stagger > * {
      opacity: 0;
      transform: translateY(16px);
      transition: opacity 0.5s ease, transform 0.5s ease;
   }
   .home-pillar.hp-is-active .hp-stagger > * {
      opacity: 1;
      transform: none;
   }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(1) { transition-delay: 0.1s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(2) { transition-delay: 0.16s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(3) { transition-delay: 0.22s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(4) { transition-delay: 0.28s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(5) { transition-delay: 0.34s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(6) { transition-delay: 0.4s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(7) { transition-delay: 0.46s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(8) { transition-delay: 0.52s; }
   .home-pillar.hp-is-active .hp-stagger > *:nth-child(9) { transition-delay: 0.58s; }
   @media (prefers-reduced-motion: reduce) {
      .home-pillar .hp-reveal,
      .home-pillar .hp-stagger > * {
         opacity: 1;
         transform: none;
         transition: none;
      }
   }
   @media (max-width: 991px) {
      .home-pillar__bento {
         grid-template-columns: 1fr 1fr;
      }
      .home-pillar__bento-center {
         grid-column: 1 / -1;
      }
      .home-pillar--shield .home-pillar__grid,
      .home-pillar--ops .home-pillar__grid,
      .home-hraas-suite__panel { grid-template-columns: 1fr; }
      .home-hraas-suite__aside { min-height: 220px; border-left: none; border-top: 1px solid #dce8e2; }
      .home-hraas-suite__list { grid-template-columns: 1fr; }
      .home-pillar--ops .home-pillar__grid { direction: ltr; }
      .home-wfm-hub {
         grid-template-columns: 1fr;
      }
      .home-wfm-hub__visual {
         min-height: 240px;
      }
      .home-wfm-hub__body {
         padding: 24px 20px;
      }
      .home-pillar--shield .home-pillar__media { max-height: 320px; aspect-ratio: 16/10; min-height: 0; }
      .home-pillar--boardroom .home-pillar__intro-row { grid-template-columns: 1fr; }
      .home-pillar__mosaic { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .home-talent-spine__deck { grid-template-columns: 1fr; }
      .home-talent-spine__visual { min-height: 180px; position: relative; }
      .home-talent-spine__matrix { grid-template-columns: repeat(2, minmax(0, 1fr)); }
   }
   @media (max-width: 640px) {
      .home-pillar { padding: 56px 0; }
      .home-pillar--bento { padding: 32px 0 36px; }
      .home-pillar__bento {
         grid-template-columns: 1fr;
      }
      .home-pillar__bento-center {
         grid-column: auto;
      }
      .home-pillar__bento-col .home-pillar__bento-photo {
         flex: 0 0 auto;
         aspect-ratio: 16 / 10;
         min-height: 200px;
      }
      .home-pillar__bento-svc-grid {
         grid-template-columns: 1fr;
      }
      .home-pillar__svc-grid,
      .home-hraas-suite__list,
      .home-pillar__mosaic,
      .home-talent-spine__matrix { grid-template-columns: 1fr; }
      .home-talent-spine__body { padding: 16px; }
   }
</style>

<div class="home-pillars" id="home-pillars">
   @foreach($homePillars as $pillar)
      <section
         class="home-pillar home-pillar--{{ $pillar['theme'] }} home-pillar--{{ $pillar['layout'] }}"
         id="{{ $pillar['id'] }}"
         data-hp-section
         aria-labelledby="{{ $pillar['id'] }}-title"
      >
         <div class="home-pillar__glow" aria-hidden="true"></div>
         <div class="home-pillar__inner">

            @if($pillar['layout'] === 'bento')
               @php $bentoIcon = $pillar['services'][0]['icon'] ?? 'ri-shield-check-line'; @endphp
               <div class="home-pillar__bento hp-reveal">
                  <div class="home-pillar__bento-col home-pillar__bento-col--left">
                     <div class="home-pillar__bento-photo">
                        <img src="{{ asset($pillar['image']) }}" alt="{{ $pillar['image_alt'] }}" loading="lazy" width="400" height="620">
                     </div>
                     <div class="home-pillar__bento-tile">
                        <span class="home-pillar__bento-tile-icon" aria-hidden="true"><i class="{{ $pillar['side_a']['icon'] }}"></i></span>
                        <h3>{{ $pillar['side_a']['title'] }}</h3>
                        <p>{{ $pillar['side_a']['text'] ?? $pillar['content'] }}</p>
                     </div>
                  </div>
                  <div class="home-pillar__bento-center home-pillar__bento-tile home-pillar__bento-main">
                     <span class="home-pillar__label">{{ $pillar['label'] }} — {{ $pillar['section'] }}</span>
                     <div class="home-pillar__bento-main-top">
                        <span class="home-pillar__bento-main-icon" aria-hidden="true"><i class="{{ $bentoIcon }}"></i></span>
                        <h2 id="{{ $pillar['id'] }}-title">{{ $pillar['heading'] }}</h2>
                     </div>
                     <h3>{{ $pillar['center_title'] }}</h3>
                     <div class="home-pillar__bento-svc-grid">
                        @foreach($pillar['services'] as $svc)
                           <div class="home-pillar__bento-svc">
                              <strong>{{ $svc['title'] }}</strong>
                              <span>{{ $svc['text'] }}</span>
                           </div>
                        @endforeach
                     </div>
                     <a href="{{ route($pillar['cta_route'] ?? 'projectenquiries') }}" class="home-pillar__bento-cta theme-btn one">
                        {{ $pillar['cta'] }} <i class="ri-arrow-right-line" aria-hidden="true"></i>
                     </a>
                  </div>
                  <div class="home-pillar__bento-col home-pillar__bento-col--right">
                     <div class="home-pillar__bento-tile">
                        <span class="home-pillar__bento-tile-icon" aria-hidden="true"><i class="{{ $pillar['side_b']['icon'] }}"></i></span>
                        <h3>{{ $pillar['side_b']['title'] }}</h3>
                        <p>{{ $pillar['side_b']['text'] }}</p>
                     </div>
                     <div class="home-pillar__bento-photo">
                        <img src="{{ asset($pillar['image2']) }}" alt="{{ $pillar['image2_alt'] ?? $pillar['section'] }}" loading="lazy" width="400" height="620">
                     </div>
                  </div>
               </div>

            @elseif($pillar['layout'] === 'shield')
               <div class="home-pillar__grid">
                  <div class="home-pillar__media hp-reveal">
                     <img src="{{ asset($pillar['image']) }}" alt="{{ $pillar['image_alt'] }}" loading="lazy" width="520" height="650">
                     <span class="home-pillar__media-badge">{{ $pillar['label'] }}</span>
                  </div>
                  <div class="hp-reveal">
                     <span class="home-pillar__label">{{ $pillar['label'] }} — Compliance &amp; Workplace Integrity Solutions</span>
                     <h2 class="home-pillar__heading" id="{{ $pillar['id'] }}-title">{{ $pillar['heading'] }}</h2>
                     <p class="home-pillar__content">{{ $pillar['content'] }}</p>
                     <div class="home-pillar__svc-grid hp-stagger">
                        @foreach($pillar['services'] as $svc)
                           <div class="home-pillar__svc-card">
                              <span class="home-pillar__svc-icon" aria-hidden="true"><i class="{{ $svc['icon'] }}"></i></span>
                              <div>
                                 <strong>{{ $svc['title'] }}</strong>
                                 <span>{{ $svc['text'] }}</span>
                              </div>
                           </div>
                        @endforeach
                     </div>
                     <div style="margin-top: 24px;">
                        <a href="{{ route('projectenquiries') }}" class="home-pillar__cta theme-btn one">{{ $pillar['cta'] }} <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>

            @elseif($pillar['layout'] === 'ops-hub')
               <div class="home-wfm-hub hp-reveal">
                  <div class="home-wfm-hub__visual">
                     <img src="{{ asset($pillar['image']) }}" alt="{{ $pillar['image_alt'] }}" loading="lazy" width="520" height="480">
                     <span class="home-wfm-hub__visual-badge">{{ $pillar['label'] }}</span>
                     <div class="home-wfm-hub__visual-caption">
                        <strong>{{ $pillar['section'] }}</strong>
                        <span>Payroll, policy, records and remote HR — one operating rhythm.</span>
                     </div>
                  </div>
                  <div class="home-wfm-hub__body">
                     <span class="home-pillar__label">{{ $pillar['label'] }} — {{ $pillar['section'] }}</span>
                     <h2 id="{{ $pillar['id'] }}-title">{{ $pillar['heading'] }}</h2>
                     <p class="home-wfm-hub__intro">{{ $pillar['content'] }}</p>
                     <div class="home-wfm-hub__rail hp-stagger">
                        @foreach($pillar['services'] as $i => $svc)
                           <article class="home-wfm-hub__item">
                              <span class="home-wfm-hub__item-icon" aria-hidden="true"><i class="{{ $svc['icon'] }}"></i></span>
                              <div>
                                 <strong>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}. {{ $svc['title'] }}</strong>
                                 <p>{{ $svc['text'] }}</p>
                              </div>
                           </article>
                        @endforeach
                     </div>
                     <a href="{{ route($pillar['cta_route'] ?? 'projectenquiries') }}" class="home-wfm-hub__cta theme-btn one">
                        {{ $pillar['cta'] }} <i class="ri-arrow-right-line" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>

            @elseif($pillar['layout'] === 'boardroom')
               <div class="home-pillar__intro-row hp-reveal">
                  <div>
                     <span class="home-pillar__label">{{ $pillar['label'] }} — {{ $pillar['section'] ?? 'Leadership & Organizational Excellence' }}</span>
                     <h2 class="home-pillar__heading" id="{{ $pillar['id'] }}-title">{{ $pillar['heading'] }}</h2>
                     <p class="home-pillar__content">{{ $pillar['content'] }}</p>
                     <a href="{{ route($pillar['cta_route'] ?? 'projectenquiries') }}" class="home-pillar__cta theme-btn one">{{ $pillar['cta'] }} <i class="ri-arrow-right-line" aria-hidden="true"></i></a>
                  </div>
                  <div class="home-pillar__media">
                     <img src="{{ asset($pillar['image']) }}" alt="{{ $pillar['image_alt'] }}" loading="lazy" width="480" height="280">
                     <span class="home-pillar__media-badge">{{ $pillar['label'] }}</span>
                  </div>
               </div>
               <div class="home-pillar__mosaic hp-stagger hp-reveal">
                  @foreach($pillar['services'] as $svc)
                     <div class="home-pillar__mosaic-item">
                        <i class="{{ $svc['icon'] }}" aria-hidden="true"></i>
                        <div>
                           <strong>{{ $svc['title'] }}</strong>
                           <span>{{ $svc['text'] }}</span>
                        </div>
                     </div>
                  @endforeach
               </div>

            @elseif($pillar['layout'] === 'talent-spine')
               <div class="home-talent-spine">
                  <header class="home-talent-spine__header hp-reveal">
                     <span class="home-pillar__label">{{ $pillar['label'] }} — {{ $pillar['section'] }}</span>
                     <p class="home-talent-spine__intro">{{ $pillar['content'] }}</p>
                  </header>

                  <div class="home-talent-spine__deck hp-reveal">
                     <div class="home-talent-spine__visual">
                        <img src="{{ asset($pillar['image']) }}" alt="{{ $pillar['image_alt'] }}" loading="lazy" width="360" height="320">
                        <span class="home-talent-spine__visual-label">Extended hiring partner</span>
                     </div>
                     <div class="home-talent-spine__body">
                        <h2 id="{{ $pillar['id'] }}-title">{{ $pillar['heading'] }}</h2>
                        <div class="home-talent-spine__matrix hp-stagger">
                           @foreach($pillar['services'] as $i => $svc)
                              <article class="home-talent-spine__cell">
                                 <span class="home-talent-spine__cell-icon" aria-hidden="true"><i class="{{ $svc['icon'] }}"></i></span>
                                 <div class="home-talent-spine__cell-text">
                                    <strong><em>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</em>{{ $svc['title'] }}</strong>
                                    <p>{{ $svc['text'] }}</p>
                                 </div>
                              </article>
                           @endforeach
                        </div>
                        <div class="home-talent-spine__foot">
                           <span class="home-talent-spine__foot-label">Recruitment &amp; staffing</span>
                           <a href="{{ route($pillar['cta_route'] ?? 'projectenquiries') }}" class="home-talent-spine__cta theme-btn one">
                              {{ $pillar['cta'] }} <i class="ri-arrow-right-line" aria-hidden="true"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>

            @elseif($pillar['layout'] === 'hraas-suite')
               <div class="home-hraas-suite">
                  <header class="home-hraas-suite__header hp-reveal">
                     <span class="home-pillar__label">{{ $pillar['label'] }} — {{ $pillar['section'] }}</span>
                     <p class="home-hraas-suite__intro">{{ $pillar['content'] }}</p>
                  </header>
                  <div class="home-hraas-suite__panel hp-reveal">
                     <div class="home-hraas-suite__main">
                        <h2 id="{{ $pillar['id'] }}-title">{{ $pillar['heading'] }}</h2>
                        <ul class="home-hraas-suite__list hp-stagger">
                           @foreach($pillar['services'] as $svc)
                              <li class="home-hraas-suite__item">
                                 <span class="home-hraas-suite__item-icon" aria-hidden="true"><i class="{{ $svc['icon'] }}"></i></span>
                                 <div>
                                    <strong>{{ $svc['title'] }}</strong>
                                    <p>{{ $svc['text'] }}</p>
                                 </div>
                              </li>
                           @endforeach
                        </ul>
                        <a href="{{ route($pillar['cta_route'] ?? 'projectenquiries') }}" class="home-hraas-suite__cta theme-btn one">
                           {{ $pillar['cta'] }} <i class="ri-arrow-right-line" aria-hidden="true"></i>
                        </a>
                     </div>
                     <aside class="home-hraas-suite__aside">
                        <img src="{{ asset($pillar['image']) }}" alt="{{ $pillar['image_alt'] }}" loading="lazy" width="400" height="480">
                        <div class="home-hraas-suite__aside-cap">
                           <strong>{{ $pillar['label'] }}</strong>
                           <span>HR expertise, systems and execution — without building a large in-house team from day one.</span>
                        </div>
                     </aside>
                  </div>
               </div>
            @endif

         </div>
      </section>
   @endforeach
</div>

<script>
(function () {
   var pillars = document.querySelectorAll('[data-hp-section]');
   if (!pillars.length) return;
   var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
   if (reduced) {
      pillars.forEach(function (el) { el.classList.add('hp-is-active'); });
      return;
   }
   var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
         if (!entry.isIntersecting) return;
         entry.target.classList.add('hp-is-active');
         observer.unobserve(entry.target);
      });
   }, { rootMargin: '0px 0px -10% 0px', threshold: 0.12 });
   pillars.forEach(function (el) { observer.observe(el); });
})();
</script>

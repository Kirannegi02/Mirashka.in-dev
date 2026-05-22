<?php

/**
 * Mirashka FAQ categories (reusable partial).
 *
 * Include on any page:
 *   @include('frontend.layouts.common.sections.faqs.category', ['categoryKey' => 'compliance'])
 *
 * Keys: compliance | workforce | leadership | talent | hraas
 *
 * ui: dashed = type_one accordion (compliance, workforce, leadership)
 *     boxed  = type_two accordion (talent, hraas)
 */
return [
    'categories' => [
        'compliance' => [
            'title' => 'Compliance & Workplace Integrity Solutions',
            'subtitle' => 'Top 10 FAQs & Answers',
            'ui' => 'dashed',
            'items' => [
                ['question' => 'Why is compliance important for startups and MSMEs?', 'answer' => 'Compliance helps avoid legal penalties, employee disputes, and reputational damage. It also builds credibility with clients, investors, and partners.'],
                ['question' => 'What is included in Mirashka’s compliance services?', 'answer' => 'Policy creation, legal audits, employee handbook development, POSH training, labor law compliance, and safety audits—covering every HR compliance need.'],
                ['question' => 'How often should HR audits be conducted?', 'answer' => 'Ideally, once a year. For fast-growing companies, biannual audits are recommended to keep policies aligned with expansion.'],
                ['question' => 'Does Mirashka assist with legal updates?', 'answer' => 'Yes, we monitor legal changes and update your policies & processes to ensure your business always stays compliant.'],
                ['question' => 'What happens if a company violates labor laws unknowingly?', 'answer' => 'Even unintentional violations attract penalties. Mirashka’s compliance audits ensure you stay protected and proactive, reducing risk.'],
                ['question' => 'Is POSH training mandatory?', 'answer' => 'Yes, under the POSH Act, 2013, all companies with 10+ employees must conduct regular sexual harassment prevention training.'],
                ['question' => 'Can Mirashka help design a whistleblower policy?', 'answer' => 'Absolutely. We create custom whistleblower policies to foster ethical reporting and safe workplace culture.'],
                ['question' => 'Do employee handbooks have legal value?', 'answer' => 'Yes, they serve as a critical reference in disputes if aligned properly with labor laws. Mirashka ensures they are legally sound.'],
                ['question' => 'What industries does Mirashka cover for compliance?', 'answer' => 'We cover IT, manufacturing, retail, hospitality, e-commerce, startups, family businesses, and more.'],
                ['question' => 'Can compliance help attract better talent?', 'answer' => 'Yes! Ethical and compliant workplaces attract top talent who value safety, fairness, and transparency.'],
            ],
        ],
        'workforce' => [
            'title' => 'Workforce Management & Process Optimization',
            'subtitle' => 'Top 10 FAQs & Answers',
            'ui' => 'dashed',
            'items' => [
                ['question' => 'What HR processes can be outsourced?', 'answer' => 'Payroll, compliance, employee record-keeping, onboarding, policy creation, performance tracking, and employee engagement can all be outsourced.'],
                ['question' => 'How does payroll outsourcing work with Mirashka?', 'answer' => 'We manage salary processing, deductions, statutory compliance, benefits, and payslips, ensuring error-free and timely payroll.'],
                ['question' => 'What’s included in policy design?', 'answer' => 'We design, review, and update HR policies for hiring, leave, performance, grievances, ethics, remote work, and more.'],
                ['question' => 'How does remote HR support work?', 'answer' => 'We act as your virtual HR team, available online to handle hiring, records, compliance, and employee queries—without needing onsite HR.'],
                ['question' => 'Is payroll compliance covered in HRaaS?', 'answer' => 'Yes, all payroll-related compliances such as PF, ESI, TDS, PT, and gratuity calculations are handled by us.'],
                ['question' => 'Can Mirashka manage multi-location payroll?', 'answer' => 'Absolutely! We manage centralized payroll for businesses across multiple states, ensuring location-specific compliance.'],
                ['question' => 'Can policies be customized for our industry?', 'answer' => 'Yes, all policies are tailored to your sector, workforce type, culture, and specific legal landscape.'],
                ['question' => 'Does remote HR support include recruitment?', 'answer' => 'Yes, remote hiring, screening, and onboarding are part of our remote HR package.'],
                ['question' => 'How does Mirashka ensure process efficiency?', 'answer' => 'We use automation tools, standard templates, and pre-defined workflows to minimize errors and speed up processes.'],
                ['question' => 'Can outsourcing HR save money?', 'answer' => 'Yes! Compared to a full in-house HR team, you save significantly by paying only for what you need.'],
            ],
        ],
        'leadership' => [
            'title' => 'Leadership & Organizational Excellence Solutions',
            'subtitle' => 'Top 10 FAQs & Answers',
            'ui' => 'dashed',
            'items' => [
                ['question' => 'What is executive search?', 'answer' => 'It’s a specialized service to identify and recruit senior leadership talent, ensuring alignment with business vision and culture.'],
                ['question' => 'Why do boards need advisory services?', 'answer' => 'External advisors bring independent expertise, governance best practices, and market insights to help boards make better decisions.'],
                ['question' => 'What’s the importance of CEO succession planning?', 'answer' => 'Planned CEO transitions ensure leadership stability, cultural continuity, and smooth handover, safeguarding long-term growth.'],
                ['question' => 'How does leadership assessment work?', 'answer' => 'We use psychometric tools, behavioral interviews, and 360-degree feedback to evaluate leadership strengths and gaps.'],
                ['question' => 'Can Mirashka help family businesses with leadership succession?', 'answer' => 'Absolutely! We specialize in succession planning, governance structuring, and leadership grooming for family-owned businesses.'],
                ['question' => 'Why does digital transformation need HR support?', 'answer' => 'Because technology adoption fails if employees resist change. We help manage the people side of digital shifts.'],
                ['question' => 'What does DEI consulting include?', 'answer' => 'Creating inclusive hiring policies, diversity audits, bias training, and strategies to foster belonging for diverse talent.'],
                ['question' => 'How does sustainability fit into HR?', 'answer' => 'We help leaders align purpose, culture, and ESG goals—creating a workforce aligned with sustainability efforts.'],
                ['question' => 'What is CEO performance acceleration?', 'answer' => 'It’s a structured coaching and performance review process to help newly appointed CEOs excel faster.'],
                ['question' => 'How does restructuring impact HR?', 'answer' => 'During restructuring, redeployment, layoff management, culture preservation, and legal compliance are all critical HR priorities we manage.'],
            ],
        ],
        'talent' => [
            'title' => 'Talent Acquisition & Staffing Excellence',
            'subtitle' => 'Top 10 FAQs & Answers',
            'ui' => 'boxed',
            'items' => [
                ['question' => 'What’s the difference between staffing and recruitment?', 'answer' => 'Staffing is usually short-term and project-based, while recruitment is permanent hiring for long-term roles.'],
                ['question' => 'What’s covered under IT staffing?', 'answer' => 'Full-cycle hiring for tech talent including developers, analysts, architects, and data specialists.'],
                ['question' => 'How does RPO work?', 'answer' => 'We act as your external recruitment arm, managing sourcing, screening, interviewing, and offer management.'],
                ['question' => 'What industries does Mirashka staff for?', 'answer' => 'IT, manufacturing, retail, hospitality, e-commerce, startups and MSMEs across sectors.'],
                ['question' => 'What is NAPS staffing?', 'answer' => 'We help businesses leverage the National Apprenticeship Promotion Scheme to hire apprentices while enjoying government incentives.'],
                ['question' => 'Can you help with bulk hiring?', 'answer' => 'Yes, we specialize in volume hiring drives with structured screening processes.'],
                ['question' => 'How do you ensure culture fit in hiring?', 'answer' => 'We conduct culture-fit assessments aligned with your company values and team dynamics.'],
                ['question' => 'Can you hire CXOs for startups?', 'answer' => 'Absolutely! Our Executive Search focuses heavily on leadership hiring for growth-stage companies.'],
                ['question' => 'What’s your average hiring turnaround time?', 'answer' => 'For staffing—5 to 7 days. For leadership roles—2 to 4 weeks.'],
                ['question' => 'Do you offer replacement guarantees?', 'answer' => 'Yes! We provide a free replacement period if a hired candidate exits prematurely.'],
            ],
        ],
        'hraas' => [
            'title' => 'HR as a Service (HRaaS)',
            'subtitle' => 'FAQs for Mirashka’s HRaaS Services',
            'ui' => 'boxed',
            'items' => [
                ['question' => 'What exactly is HRaaS and how does it work?', 'answer' => 'HRaaS (Human Resource as a Service) is a flexible, on-demand HR outsourcing model where businesses access expert HR services without hiring a full-time HR team. Mirashka manages your entire HR function — from recruitment and payroll to compliance, performance management, and employee engagement — tailored to your needs.'],
                ['question' => 'How is HRaaS different from hiring an in-house HR team?', 'answer' => 'With HRaaS, you get instant access to a team of specialists across HR functions, at a fraction of the cost of building an in-house department. It’s flexible, scalable, and evolves with your business, unlike static in-house teams.'],
                ['question' => 'What size of business benefits most from HRaaS?', 'answer' => 'HRaaS is ideal for startups, MSMEs, and fast-growing companies who need expert HR support without the overhead. It’s perfect for businesses scaling rapidly or those without dedicated HR expertise.'],
                ['question' => 'Can I customize the HR services I need?', 'answer' => 'Absolutely! Mirashka’s HRaaS is designed to be modular and pay-as-you-go, so you only pay for the services you actually need — from recruitment and payroll to compliance audits, employee surveys, and leadership hiring.'],
                ['question' => 'How does HRaaS support compliance and risk management?', 'answer' => 'We ensure your HR policies, payroll, labor law adherence, and workplace practices are fully compliant with Indian laws and evolving regulations. Our team monitors legal changes, keeping your business safe from penalties and legal risks.'],
                ['question' => 'What’s included in Mirashka’s payroll management under HRaaS?', 'answer' => 'We handle salary processing, tax deductions, EPF/ESI filings, benefits administration, statutory compliance, payslips generation, and leave tracking — all managed accurately and on time.'],
                ['question' => 'How does Mirashka support hiring under HRaaS?', 'answer' => 'We act as your dedicated recruitment partner, handling job postings, candidate sourcing, shortlisting, initial interviews, and background checks — ensuring you hire faster, smarter, and in alignment with your culture.'],
                ['question' => 'What if my business grows rapidly? Can HRaaS scale with me?', 'answer' => 'Yes! Scalability is built into HRaaS. Whether you need to double your workforce or add new locations, Mirashka easily scales up your HR support to match your growth—without delays or costly restructuring.'],
                ['question' => 'Can HRaaS help improve employee retention and engagement?', 'answer' => 'Definitely. We offer custom engagement strategies, employee surveys, performance tracking, reward & recognition programs, and culture development initiatives to ensure high retention and strong morale.'],
                ['question' => 'How is HRaaS priced? Is it affordable for startups?', 'answer' => 'Mirashka offers flexible, pay-as-you-go pricing. You get essential services under fixed plans and pay for any additional hours or specialized needs as you grow. This cost-effective approach ensures startups only spend what they need.'],
            ],
        ],
    ],
];

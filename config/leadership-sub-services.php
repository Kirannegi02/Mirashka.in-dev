<?php

/**
 * Leadership & Organization — sub-service landing pages.
 */
return [
    'shared' => [
        'parent_route' => 'leadership-organization',
        'parent_label' => 'Leadership & Organization',
        'cta' => [
            'heading' => 'Start Leadership Readiness Review',
            'content' => 'Review succession readiness, leadership pipeline gaps and advisory priorities with actionable recommendations.',
            'button' => 'Start Leadership Readiness Review',
            'secondary' => 'Speak to a Leadership Advisor',
            'image' => 'assets/frontend/img/leadership/ldr-cta-advisory.png',
            'bg_image' => 'assets/frontend/img/leadership/ldr-hero-boardroom.png',
        ],
    ],
    'services' => [
        'executive-search-leadership-hiring' => [
            'meta' => [
                'title' => 'Executive Search & Leadership Hiring | Mirashka',
                'description' => 'Find leaders who match ambition, culture and execution needs. Role mapping, evaluation and onboarding support.',
                'keywords' => 'executive search, leadership hiring, senior hiring, mirashka',
            ],
            'card' => [
                'title' => 'Executive Search & Leadership Hiring',
                'image' => 'assets/frontend/img/leadership/ldr-card-executive-search.png',
            ],
            'hero' => [
                'label' => 'Executive Search & Leadership Hiring',
                'heading' => 'Find leaders who match ambition, culture and execution needs',
                'content' => 'Mirashka supports senior leadership hiring through role mapping, market research, candidate sourcing, evaluation, culture-fit assessment and onboarding support.',
                'image' => 'assets/frontend/img/leadership/ldr-card-executive-search.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Leadership hiring with rigor and confidentiality',
                'steps' => [
                    [
                        'title' => 'Leadership Role Definition',
                        'text' => 'Mandate, success profile, compensation band and stakeholder alignment.',
                        'icon' => 'ri-file-user-line',
                    ],
                    [
                        'title' => 'Market Mapping',
                        'text' => 'Target company and candidate landscape research for your sector.',
                        'icon' => 'ri-global-line',
                    ],
                    [
                        'title' => 'Candidate Evaluation',
                        'text' => 'Structured interviews, references and competency-based assessment.',
                        'icon' => 'ri-user-search-line',
                    ],
                    [
                        'title' => 'Culture & Business Fit',
                        'text' => 'Alignment to values, governance style and growth stage realities.',
                        'icon' => 'ri-heart-line',
                    ],
                    [
                        'title' => 'Offer & Onboarding Support',
                        'text' => 'Offer negotiation support and first-90-day onboarding rhythm.',
                        'icon' => 'ri-handshake-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Leadership hiring with rigor and confidentiality',
                'content' => 'Mirashka structures executive search & leadership hiring across Leadership Role Definition, Market Mapping, Candidate Evaluation, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Start Executive Search',
                'tabs' => [
                    [
                        'label' => 'Role Map',
                        'heading' => 'Role Map',
                        'content' => 'Clear mandate and evaluation criteria before search begins.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Shortlist',
                        'heading' => 'Shortlist',
                        'content' => 'Confidential outreach and curated leadership candidate panels.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Evaluation',
                        'heading' => 'Evaluation',
                        'content' => 'Assessment reports your board and CEO can compare objectively.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Onboarding',
                        'heading' => 'Onboarding',
                        'content' => 'Transition support so new leaders land with momentum.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Executive candidate shortlist dashboard — leadership profiles that match your mandate',
                'content' => 'We help you hire leaders who can execute today and scale with your next chapter.',
                'cta' => 'Start Executive Search',
                'items' => [
                    [
                        'label' => 'Confidential executive search',
                        'icon' => 'ri-lock-line',
                    ],
                    [
                        'label' => 'Culture-fit assessment',
                        'icon' => 'ri-team-line',
                    ],
                    [
                        'label' => 'Board-ready evaluation reports',
                        'icon' => 'ri-file-chart-line',
                    ],
                    [
                        'label' => 'Onboarding coordination',
                        'icon' => 'ri-rocket-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Executive Search & Leadership Hiring',
                'title' => 'Executive candidate shortlist dashboard — leadership profiles that match your mandate',
                'content' => 'We help you hire leaders who can execute today and scale with your next chapter.',
                'image' => 'assets/frontend/img/leadership/ldr-deliverable-search.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Start Executive Search',
                'secondary' => 'Speak to a Leadership Advisor',
            ],
        ],
        'board-ceo-advisory' => [
            'meta' => [
                'title' => 'Board & CEO Advisory | Mirashka',
                'description' => 'Strategic advisory for boards, CEOs and growth-focused leadership teams. Governance, performance and planning.',
                'keywords' => 'board advisory, ceo advisory, governance, strategic planning, mirashka',
            ],
            'card' => [
                'title' => 'Board & CEO Advisory',
                'image' => 'assets/frontend/img/leadership/ldr-card-board-advisory.png',
            ],
            'hero' => [
                'label' => 'Board & CEO Advisory',
                'heading' => 'Strategic advisory for boards, CEOs and growth-focused leadership teams',
                'content' => 'We help leadership teams strengthen governance, decision systems, performance reviews, organizational structure and long-term strategic planning.',
                'image' => 'assets/frontend/img/leadership/ldr-card-board-advisory.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Advisory rhythm boards and CEOs can rely on',
                'steps' => [
                    [
                        'title' => 'Board Advisory Scope',
                        'text' => 'Define governance priorities, risk visibility and meeting cadence.',
                        'icon' => 'ri-government-line',
                    ],
                    [
                        'title' => 'CEO Decision Support',
                        'text' => 'Facilitation on org design, leadership team performance and key decisions.',
                        'icon' => 'ri-vip-crown-line',
                    ],
                    [
                        'title' => 'Governance Rhythm',
                        'text' => 'Agenda design, reporting packs and accountability loops.',
                        'icon' => 'ri-calendar-event-line',
                    ],
                    [
                        'title' => 'Performance Review Architecture',
                        'text' => 'Executive and leadership team review frameworks that drive outcomes.',
                        'icon' => 'ri-bar-chart-box-line',
                    ],
                    [
                        'title' => 'Strategic Planning Workshops',
                        'text' => 'Facilitated sessions aligning people strategy with business priorities.',
                        'icon' => 'ri-presentation-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Advisory rhythm boards and CEOs can rely on',
                'content' => 'Mirashka structures board & ceo advisory across Board Advisory Scope, CEO Decision Support, Governance Rhythm, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Speak to a Leadership Advisor',
                'tabs' => [
                    [
                        'label' => 'Governance',
                        'heading' => 'Governance',
                        'content' => 'Board packs, risk dashboards and compliance visibility for directors.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'CEO Support',
                        'heading' => 'CEO Support',
                        'content' => 'Decision frameworks for restructuring, hiring and performance.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Performance',
                        'heading' => 'Performance',
                        'content' => 'Review cadence, KPIs and leadership accountability.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Strategy',
                        'heading' => 'Strategy',
                        'content' => 'Workshops connecting growth plans to organization design.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Boardroom strategy session with leadership alignment charts',
                'content' => 'Practical advisory that strengthens how your board and CEO lead — not slide decks without follow-through.',
                'cta' => 'Speak to a Leadership Advisor',
                'items' => [
                    [
                        'label' => 'Board meeting facilitation support',
                        'icon' => 'ri-discuss-line',
                    ],
                    [
                        'label' => 'CEO performance architecture',
                        'icon' => 'ri-trophy-line',
                    ],
                    [
                        'label' => 'Governance rhythm design',
                        'icon' => 'ri-time-line',
                    ],
                    [
                        'label' => 'Strategic planning workshops',
                        'icon' => 'ri-lightbulb-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Board & CEO Advisory',
                'title' => 'Boardroom strategy session with leadership alignment charts',
                'content' => 'Practical advisory that strengthens how your board and CEO lead — not slide decks without follow-through.',
                'image' => 'assets/frontend/img/leadership/ldr-board-advisory.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Speak to a Leadership Advisor',
                'secondary' => 'Start Leadership Readiness Review',
            ],
        ],
        'ceo-succession-performance-acceleration' => [
            'meta' => [
                'title' => 'CEO Succession & Performance | Mirashka',
                'description' => 'Structured CEO succession, transition calendars and 90-day performance plans with coaching support.',
                'keywords' => 'ceo succession, leadership transition, performance acceleration, mirashka',
            ],
            'card' => [
                'title' => 'CEO Succession & Performance Acceleration',
                'image' => 'assets/frontend/img/leadership/ldr-card-succession.png',
            ],
            'hero' => [
                'label' => 'CEO Succession & Performance Acceleration',
                'heading' => 'Make leadership transitions structured, smooth and performance-led',
                'content' => 'Mirashka helps companies plan CEO succession, transition responsibilities, define performance expectations and support new leaders during the critical early months.',
                'image' => 'assets/frontend/img/leadership/ldr-card-succession.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Succession with continuity and measurable early wins',
                'steps' => [
                    [
                        'title' => 'Succession Readiness Audit',
                        'text' => 'Assess internal and external successor readiness and risk exposure.',
                        'icon' => 'ri-search-eye-line',
                    ],
                    [
                        'title' => 'Successor Role Clarity',
                        'text' => 'Define mandate, authority, reporting and stakeholder expectations.',
                        'icon' => 'ri-file-list-3-line',
                    ],
                    [
                        'title' => 'Transition Calendar',
                        'text' => 'Phased handover of relationships, decisions and critical initiatives.',
                        'icon' => 'ri-calendar-line',
                    ],
                    [
                        'title' => '90-Day Performance Plan',
                        'text' => 'Prioritized outcomes, metrics and stakeholder communication.',
                        'icon' => 'ri-flag-line',
                    ],
                    [
                        'title' => 'Leadership Coaching Support',
                        'text' => 'Coaching for incoming and outgoing leaders through the transition window.',
                        'icon' => 'ri-user-voice-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Succession with continuity and measurable early wins',
                'content' => 'Mirashka structures ceo succession & performance acceleration across Succession Readiness Audit, Successor Role Clarity, Transition Calendar, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Plan CEO Succession',
                'tabs' => [
                    [
                        'label' => 'Readiness',
                        'heading' => 'Readiness',
                        'content' => 'Succession audit with risk flags and recommendation paths.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Transition',
                        'heading' => 'Transition',
                        'content' => 'Calendar of handovers, announcements and stakeholder touchpoints.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => '90-Day Plan',
                        'heading' => '90-Day Plan',
                        'content' => 'Performance priorities with review cadence and success metrics.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Coaching',
                        'heading' => 'Coaching',
                        'content' => 'Executive coaching support during the critical early months.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Leadership transition timeline — from announcement to sustained performance',
                'content' => 'We reduce succession risk with structure, empathy and clear performance expectations.',
                'cta' => 'Plan CEO Succession',
                'items' => [
                    [
                        'label' => 'Succession readiness audit',
                        'icon' => 'ri-clipboard-line',
                    ],
                    [
                        'label' => 'Transition calendar & communications',
                        'icon' => 'ri-mail-line',
                    ],
                    [
                        'label' => '90-day performance framework',
                        'icon' => 'ri-speed-line',
                    ],
                    [
                        'label' => 'Leadership coaching',
                        'icon' => 'ri-mental-health-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'CEO Succession & Performance Acceleration',
                'title' => 'Leadership transition timeline — from announcement to sustained performance',
                'content' => 'We reduce succession risk with structure, empathy and clear performance expectations.',
                'image' => 'assets/frontend/img/leadership/ldr-deliverable-succession.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Plan CEO Succession',
                'secondary' => 'Speak to a Leadership Advisor',
            ],
        ],
        'leadership-assessment-consulting' => [
            'meta' => [
                'title' => 'Leadership Assessment & Consulting | Mirashka',
                'description' => 'Assess leadership capability before critical decisions. Behavioral evaluation and development roadmaps.',
                'keywords' => 'leadership assessment, executive assessment, role readiness, mirashka',
            ],
            'card' => [
                'title' => 'Leadership Assessment & Consulting',
                'image' => 'assets/frontend/img/leadership/ldr-card-assessment.png',
            ],
            'hero' => [
                'label' => 'Leadership Assessment & Consulting',
                'heading' => 'Assess leadership capability before making critical decisions',
                'content' => 'We evaluate leadership strengths, gaps, decision maturity, team influence, communication style and role readiness to help companies build stronger leadership pipelines.',
                'image' => 'assets/frontend/img/leadership/ldr-card-assessment.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Evidence-based leadership decisions',
                'steps' => [
                    [
                        'title' => 'Leadership Assessment Framework',
                        'text' => 'Competency model aligned to role level and business context.',
                        'icon' => 'ri-layout-grid-line',
                    ],
                    [
                        'title' => 'Behavioral & Strategic Evaluation',
                        'text' => 'Interviews, tools and scenarios revealing decision and influence patterns.',
                        'icon' => 'ri-psychotherapy-line',
                    ],
                    [
                        'title' => 'Role Readiness Mapping',
                        'text' => 'Fit scoring against mandate, team dynamics and growth stage.',
                        'icon' => 'ri-map-pin-line',
                    ],
                    [
                        'title' => 'Development Roadmap',
                        'text' => 'Targeted coaching, exposure and learning paths for high-potential leaders.',
                        'icon' => 'ri-road-map-line',
                    ],
                    [
                        'title' => 'Review with Management',
                        'text' => 'Facilitated debrief with board or CEO on findings and recommendations.',
                        'icon' => 'ri-group-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Evidence-based leadership decisions',
                'content' => 'Mirashka structures leadership assessment & consulting across Leadership Assessment Framework, Behavioral & Strategic Evaluation, Role Readiness Mapping, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Assess Leadership Capability',
                'tabs' => [
                    [
                        'label' => 'Framework',
                        'heading' => 'Framework',
                        'content' => 'Custom competency matrix for your leadership context.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Evaluation',
                        'heading' => 'Evaluation',
                        'content' => 'Structured assessment with documented evidence.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Readiness',
                        'heading' => 'Readiness',
                        'content' => 'Role-fit analysis for promotions and external hires.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Development',
                        'heading' => 'Development',
                        'content' => 'Individual and pipeline development recommendations.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Leadership competency matrix — assess before you appoint',
                'content' => 'Reduce costly leadership mismatches with structured assessment and clear development paths.',
                'cta' => 'Assess Leadership Capability',
                'items' => [
                    [
                        'label' => 'Leadership competency framework',
                        'icon' => 'ri-grid-line',
                    ],
                    [
                        'label' => 'Assessment reports for management',
                        'icon' => 'ri-file-chart-line',
                    ],
                    [
                        'label' => 'Role readiness scoring',
                        'icon' => 'ri-star-line',
                    ],
                    [
                        'label' => 'Development roadmap',
                        'icon' => 'ri-seedling-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Leadership Assessment & Consulting',
                'title' => 'Leadership competency matrix — assess before you appoint',
                'content' => 'Reduce costly leadership mismatches with structured assessment and clear development paths.',
                'image' => 'assets/frontend/img/leadership/ldr-card-assessment.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Assess Leadership Capability',
                'secondary' => 'Start Leadership Readiness Review',
            ],
        ],
        'hr-talent-strategy-advisory' => [
            'meta' => [
                'title' => 'HR & Talent Strategy Advisory | Mirashka',
                'description' => 'Align people strategy with business strategy. Workforce planning, talent pipelines and culture initiatives.',
                'keywords' => 'talent strategy, workforce planning, hr advisory, people strategy, mirashka',
            ],
            'card' => [
                'title' => 'HR & Talent Strategy Advisory',
                'image' => 'assets/frontend/img/leadership/ldr-card-talent-strategy.png',
            ],
            'hero' => [
                'label' => 'HR & Talent Strategy Advisory',
                'heading' => 'Align people strategy with business strategy',
                'content' => 'Mirashka helps organizations plan workforce structure, talent pipelines, succession layers, performance systems, culture initiatives and hiring roadmaps aligned with business goals.',
                'image' => 'assets/frontend/img/leadership/ldr-card-talent-strategy.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'People strategy your leadership can execute',
                'steps' => [
                    [
                        'title' => 'Workforce Planning',
                        'text' => 'Headcount, skills and structure aligned to revenue and expansion plans.',
                        'icon' => 'ri-team-line',
                    ],
                    [
                        'title' => 'Talent Gap Analysis',
                        'text' => 'Identify critical roles, skills shortages and succession vulnerabilities.',
                        'icon' => 'ri-pie-chart-2-line',
                    ],
                    [
                        'title' => 'Organization Structure',
                        'text' => 'Design spans, layers and accountability for the next growth phase.',
                        'icon' => 'ri-organization-chart',
                    ],
                    [
                        'title' => 'Culture & Performance Strategy',
                        'text' => 'Connect values, engagement and performance systems to business outcomes.',
                        'icon' => 'ri-heart-2-line',
                    ],
                    [
                        'title' => 'Talent Pipeline Roadmap',
                        'text' => 'Hiring, development and retention priorities with timelines.',
                        'icon' => 'ri-route-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'People strategy your leadership can execute',
                'content' => 'Mirashka structures hr & talent strategy advisory across Workforce Planning, Talent Gap Analysis, Organization Structure, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Build Talent Strategy',
                'tabs' => [
                    [
                        'label' => 'Workforce Plan',
                        'heading' => 'Workforce Plan',
                        'content' => '12–24 month workforce view linked to business milestones.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Gap Analysis',
                        'heading' => 'Gap Analysis',
                        'content' => 'Critical role and skills gap visibility for leadership.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Org Design',
                        'heading' => 'Org Design',
                        'content' => 'Structure recommendations with transition considerations.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Roadmap',
                        'heading' => 'Roadmap',
                        'content' => 'Integrated hiring, development and culture action plan.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'People strategy roadmap connecting business goals to hiring and culture',
                'content' => 'We translate strategy into workforce decisions your HR and leadership teams can implement quarter by quarter.',
                'cta' => 'Build Talent Strategy',
                'items' => [
                    [
                        'label' => 'Workforce planning workshop',
                        'icon' => 'ri-presentation-line',
                    ],
                    [
                        'label' => 'Talent gap & pipeline analysis',
                        'icon' => 'ri-filter-3-line',
                    ],
                    [
                        'label' => 'Organization structure advisory',
                        'icon' => 'ri-node-tree',
                    ],
                    [
                        'label' => '12-month talent roadmap',
                        'icon' => 'ri-calendar-check-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'HR & Talent Strategy Advisory',
                'title' => 'People strategy roadmap connecting business goals to hiring and culture',
                'content' => 'We translate strategy into workforce decisions your HR and leadership teams can implement quarter by quarter.',
                'image' => 'assets/frontend/img/leadership/ldr-deliverable-talent.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Build Talent Strategy',
                'secondary' => 'Speak to a Leadership Advisor',
            ],
        ],
    ],
];

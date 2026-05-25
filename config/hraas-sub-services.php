<?php

/**
 * HR as a Service — sub-service landing pages.
 */
return [
    'shared' => [
        'parent_route' => 'hr-as-a-service',
        'parent_label' => 'HR as a Service',
        'cta' => [
            'heading' => 'Build My HRaaS Plan',
            'content' => 'Tailored HRaaS scope with modules, reporting rhythm and technology priorities for your growth stage.',
            'button' => 'Build My HRaaS Plan',
            'secondary' => 'Speak to an HR Advisor',
            'image' => 'assets/admin/image/case-study/jyogi-team.webp',
            'bg_image' => 'assets/admin/image/banner/hr-advisory.webp',
        ],
    ],
    'services' => [
        'hr-outsourcing' => [
            'meta' => [
                'title' => 'HR Outsourcing | Mirashka',
                'description' => 'Outsource HR operations without losing control. Lifecycle, payroll coordination and monthly reviews.',
                'keywords' => 'hr outsourcing, hr operations, employee lifecycle, mirashka hraas',
            ],
            'card' => [
                'title' => 'HR Outsourcing',
                'image' => 'assets/frontend/img/hraas/hraas-v3-card-outsourcing.png',
            ],
            'hero' => [
                'label' => 'HR Outsourcing',
                'heading' => 'Outsource your HR function without losing control',
                'content' => 'Mirashka manages day-to-day HR operations including documentation, employee lifecycle support, payroll coordination, compliance follow-ups, onboarding, exits and HR reporting.',
                'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Controlled outsourcing with leadership visibility',
                'steps' => [
                    [
                        'title' => 'HR Outsourcing Scope',
                        'text' => 'Define modules, authority levels and escalation paths with leadership.',
                        'icon' => 'ri-file-list-3-line',
                    ],
                    [
                        'title' => 'Employee Lifecycle Support',
                        'text' => 'Hire-to-retire coordination with documented checkpoints.',
                        'icon' => 'ri-loop-left-line',
                    ],
                    [
                        'title' => 'Payroll & Compliance Coordination',
                        'text' => 'Payroll inputs, statutory follow-ups and register hygiene.',
                        'icon' => 'ri-shield-check-line',
                    ],
                    [
                        'title' => 'Documentation Management',
                        'text' => 'Contracts, policies, acknowledgements and employee files.',
                        'icon' => 'ri-folder-shield-line',
                    ],
                    [
                        'title' => 'Monthly HR Review',
                        'text' => 'Leadership session on workforce metrics, risks and priorities.',
                        'icon' => 'ri-calendar-check-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Controlled outsourcing with leadership visibility',
                'content' => 'Mirashka structures hr outsourcing across HR Outsourcing Scope, Employee Lifecycle Support, Payroll & Compliance Coordination, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Outsource HR Operations',
                'tabs' => [
                    [
                        'label' => 'Operations',
                        'heading' => 'Operations',
                        'content' => 'Day-to-day HR desk for employee and manager queries.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Lifecycle',
                        'heading' => 'Lifecycle',
                        'content' => 'Onboarding, changes, exits and documentation.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Compliance',
                        'heading' => 'Compliance',
                        'content' => 'Follow-ups, filings support and audit readiness.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Reporting',
                        'heading' => 'Reporting',
                        'content' => 'Monthly HR summary leadership can act on.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'External HR desk with process dashboard — control without building a department',
                'content' => 'HR outsourcing that keeps founders informed and employees supported every day.',
                'cta' => 'Outsource HR Operations',
                'items' => [
                    [
                        'label' => 'Dedicated HR outsourcing desk',
                        'icon' => 'ri-customer-service-line',
                    ],
                    [
                        'label' => 'Payroll & compliance coordination',
                        'icon' => 'ri-money-dollar-circle-line',
                    ],
                    [
                        'label' => 'Documentation control',
                        'icon' => 'ri-file-shield-2-line',
                    ],
                    [
                        'label' => 'Monthly leadership review',
                        'icon' => 'ri-presentation-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'HR Outsourcing',
                'title' => 'External HR desk with process dashboard — control without building a department',
                'content' => 'HR outsourcing that keeps founders informed and employees supported every day.',
                'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Outsource HR Operations',
                'secondary' => 'Build My HRaaS Plan',
            ],
        ],
        'employer-branding' => [
            'meta' => [
                'title' => 'Employer Branding | Mirashka',
                'description' => 'Position your company where good people want to work. EVP, career pages and employee storytelling.',
                'keywords' => 'employer branding, evp, career page, hiring brand, mirashka',
            ],
            'card' => [
                'title' => 'Employer Branding',
                'image' => 'assets/frontend/img/hraas/hraas-v3-card-branding.png',
            ],
            'hero' => [
                'label' => 'Employer Branding',
                'heading' => 'Position your company as a place where good people want to work',
                'content' => 'We help businesses communicate their culture, growth opportunities, leadership vision, employee stories and workplace strengths across hiring channels and digital platforms.',
                'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Employer brand that attracts fit — not just volume',
                'steps' => [
                    [
                        'title' => 'Employer Brand Audit',
                        'text' => 'Review careers touchpoints, messaging and competitor positioning.',
                        'icon' => 'ri-search-eye-line',
                    ],
                    [
                        'title' => 'EVP Development',
                        'text' => 'Define employee value proposition authentic to your culture.',
                        'icon' => 'ri-heart-line',
                    ],
                    [
                        'title' => 'Career Page Content',
                        'text' => 'Roles, culture proof points and conversion-focused careers content.',
                        'icon' => 'ri-window-line',
                    ],
                    [
                        'title' => 'Social Hiring Content',
                        'text' => 'Posts, campaigns and stories that reach passive candidates.',
                        'icon' => 'ri-share-line',
                    ],
                    [
                        'title' => 'Employee Storytelling',
                        'text' => 'Real stories and visuals that build trust with applicants.',
                        'icon' => 'ri-chat-quote-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Employer brand that attracts fit — not just volume',
                'content' => 'Mirashka structures employer branding across Employer Brand Audit, EVP Development, Career Page Content, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Build Employer Brand',
                'tabs' => [
                    [
                        'label' => 'Audit',
                        'heading' => 'Audit',
                        'content' => 'Gap analysis across careers site, social and hiring collateral.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'EVP',
                        'heading' => 'EVP',
                        'content' => 'Messaging framework for culture, growth and leadership.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Careers',
                        'heading' => 'Careers',
                        'content' => 'Career page structure and content that converts.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Stories',
                        'heading' => 'Stories',
                        'content' => 'Employee stories for social and interview conversations.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Career page mockup with employee testimonials — brand candidates believe',
                'content' => 'Employer branding that makes your hiring story consistent, credible and differentiated.',
                'cta' => 'Build Employer Brand',
                'items' => [
                    [
                        'label' => 'Employer brand audit',
                        'icon' => 'ri-clipboard-line',
                    ],
                    [
                        'label' => 'EVP & messaging framework',
                        'icon' => 'ri-megaphone-line',
                    ],
                    [
                        'label' => 'Career page content',
                        'icon' => 'ri-layout-line',
                    ],
                    [
                        'label' => 'Social hiring campaigns',
                        'icon' => 'ri-instagram-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Employer Branding',
                'title' => 'Career page mockup with employee testimonials — brand candidates believe',
                'content' => 'Employer branding that makes your hiring story consistent, credible and differentiated.',
                'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Build Employer Brand',
                'secondary' => 'Build My HRaaS Plan',
            ],
        ],
        'candidate-sourcing' => [
            'meta' => [
                'title' => 'Candidate Sourcing | Mirashka',
                'description' => 'Curated candidate pipelines for your hiring needs. Research, shortlists and pipeline reporting.',
                'keywords' => 'candidate sourcing, recruitment pipeline, talent sourcing, mirashka',
            ],
            'card' => [
                'title' => 'Candidate Sourcing',
                'image' => 'assets/frontend/img/hraas/hraas-v3-card-sourcing.png',
            ],
            'hero' => [
                'label' => 'Candidate Sourcing',
                'heading' => 'Curated candidate pipelines for your hiring needs',
                'content' => 'Mirashka identifies and builds relevant candidate pipelines based on role requirements, skill fit, location, salary expectations and organizational culture.',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Pipelines built before urgency hits',
                'steps' => [
                    [
                        'title' => 'Role Mapping',
                        'text' => 'Skills, experience band, location and compensation alignment.',
                        'icon' => 'ri-map-2-line',
                    ],
                    [
                        'title' => 'Candidate Research',
                        'text' => 'Targeted search across networks, databases and referrals.',
                        'icon' => 'ri-search-line',
                    ],
                    [
                        'title' => 'Shortlist Creation',
                        'text' => 'Screened candidates with fit notes for hiring managers.',
                        'icon' => 'ri-list-check-2',
                    ],
                    [
                        'title' => 'Screening Support',
                        'text' => 'Phone screens and coordination before client interviews.',
                        'icon' => 'ri-phone-line',
                    ],
                    [
                        'title' => 'Pipeline Reporting',
                        'text' => 'Weekly pipeline health, aging and conversion metrics.',
                        'icon' => 'ri-bar-chart-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Pipelines built before urgency hits',
                'content' => 'Mirashka structures candidate sourcing across Role Mapping, Candidate Research, Shortlist Creation, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Source Candidates',
                'tabs' => [
                    [
                        'label' => 'Mapping',
                        'heading' => 'Mapping',
                        'content' => 'Role definitions and sourcing strategy per hire family.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Research',
                        'heading' => 'Research',
                        'content' => 'Active and passive candidate identification.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Shortlist',
                        'heading' => 'Shortlist',
                        'content' => 'Ready-to-interview panels with screening notes.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Pipeline',
                        'heading' => 'Pipeline',
                        'content' => 'Reporting on volume, quality and time-to-shortlist.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Candidate database with filters and shortlist tags',
                'content' => 'Sourcing that gives hiring managers head start — not a blank inbox when roles open.',
                'cta' => 'Source Candidates',
                'items' => [
                    [
                        'label' => 'Role-based pipeline building',
                        'icon' => 'ri-filter-3-line',
                    ],
                    [
                        'label' => 'Screened shortlists',
                        'icon' => 'ri-user-follow-line',
                    ],
                    [
                        'label' => 'Passive candidate outreach',
                        'icon' => 'ri-mail-line',
                    ],
                    [
                        'label' => 'Weekly pipeline reports',
                        'icon' => 'ri-file-chart-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Candidate Sourcing',
                'title' => 'Candidate database with filters and shortlist tags',
                'content' => 'Sourcing that gives hiring managers head start — not a blank inbox when roles open.',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Source Candidates',
                'secondary' => 'Start Hiring Support',
            ],
        ],
        'employee-engagement-performance' => [
            'meta' => [
                'title' => 'Employee Engagement & Performance | Mirashka',
                'description' => 'Engagement programs, performance frameworks, KRAs and feedback systems that improve productivity and retention.',
                'keywords' => 'employee engagement, performance management, kra design, mirashka',
            ],
            'card' => [
                'title' => 'Employee Engagement & Performance',
                'image' => 'assets/frontend/img/hraas/hraas-v3-card-engagement.png',
            ],
            'hero' => [
                'label' => 'Employee Engagement & Performance',
                'heading' => 'Keep teams aligned, motivated and accountable',
                'content' => 'We design engagement programs, performance review structures, goal-setting frameworks, feedback systems and manager communication routines to improve employee productivity and retention.',
                'image' => 'assets/admin/image/banner/hr-advisory.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Engagement and performance that managers actually use',
                'steps' => [
                    [
                        'title' => 'Engagement Diagnostic',
                        'text' => 'Baseline on drivers, manager practices and team sentiment.',
                        'icon' => 'ri-pulse-line',
                    ],
                    [
                        'title' => 'Performance Framework',
                        'text' => 'Review cycles, ratings approach and documentation standards.',
                        'icon' => 'ri-award-line',
                    ],
                    [
                        'title' => 'Goal & KRA Design',
                        'text' => 'Cascading goals aligned to business outcomes and role clarity.',
                        'icon' => 'ri-focus-2-line',
                    ],
                    [
                        'title' => 'Review Cadence',
                        'text' => 'Monthly check-ins, quarterly reviews and annual summaries.',
                        'icon' => 'ri-calendar-event-line',
                    ],
                    [
                        'title' => 'Feedback Loops',
                        'text' => '360, peer and upward feedback where appropriate.',
                        'icon' => 'ri-feedback-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Engagement and performance that managers actually use',
                'content' => 'Mirashka structures employee engagement & performance across Engagement Diagnostic, Performance Framework, Goal & KRA Design, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Improve Team Performance',
                'tabs' => [
                    [
                        'label' => 'Engagement',
                        'heading' => 'Engagement',
                        'content' => 'Programs, rituals and communications that build belonging.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Goals',
                        'heading' => 'Goals',
                        'content' => 'KRA templates and goal libraries by role family.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Reviews',
                        'heading' => 'Reviews',
                        'content' => 'Performance review workflows and manager guides.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Feedback',
                        'heading' => 'Feedback',
                        'content' => 'Continuous feedback tools and team routines.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Team performance dashboard with goals and feedback',
                'content' => 'Practical engagement and performance systems — not annual paperwork exercises alone.',
                'cta' => 'Improve Team Performance',
                'items' => [
                    [
                        'label' => 'Engagement program design',
                        'icon' => 'ri-emotion-line',
                    ],
                    [
                        'label' => 'KRA & goal frameworks',
                        'icon' => 'ri-target-line',
                    ],
                    [
                        'label' => 'Performance review system',
                        'icon' => 'ri-file-chart-line',
                    ],
                    [
                        'label' => 'Manager communication playbooks',
                        'icon' => 'ri-book-open-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Employee Engagement & Performance',
                'title' => 'Team performance dashboard with goals and feedback',
                'content' => 'Practical engagement and performance systems — not annual paperwork exercises alone.',
                'image' => 'assets/admin/image/banner/hr-advisory.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Improve Team Performance',
                'secondary' => 'Build My HRaaS Plan',
            ],
        ],
        'employee-surveys-retention' => [
            'meta' => [
                'title' => 'Employee Surveys & Retention | Mirashka',
                'description' => 'Listen early with pulse checks, satisfaction studies, exit analysis and retention action plans.',
                'keywords' => 'employee surveys, retention strategy, exit interviews, pulse survey, mirashka',
            ],
            'card' => [
                'title' => 'Employee Surveys & Retention',
                'image' => 'assets/frontend/img/hraas/hraas-v3-card-surveys.png',
            ],
            'hero' => [
                'label' => 'Employee Surveys & Retention',
                'heading' => 'Listen early. Act before good people leave.',
                'content' => 'Mirashka creates employee surveys, pulse checks, satisfaction studies, exit analysis and retention action plans to help leadership understand workforce sentiment.',
                'image' => 'assets/admin/image/case-study/media/jyogi-gallery-engagement.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'From sentiment data to retention action',
                'steps' => [
                    [
                        'title' => 'Survey Design',
                        'text' => 'Questions aligned to drivers of engagement and retention risk.',
                        'icon' => 'ri-survey-line',
                    ],
                    [
                        'title' => 'Employee Pulse Checks',
                        'text' => 'Lightweight frequent pulses between annual studies.',
                        'icon' => 'ri-pulse-line',
                    ],
                    [
                        'title' => 'Retention Risk Analysis',
                        'text' => 'Identify teams and roles with elevated flight risk.',
                        'icon' => 'ri-alert-line',
                    ],
                    [
                        'title' => 'Exit Feedback Review',
                        'text' => 'Structured exit interviews and theme analysis.',
                        'icon' => 'ri-door-open-line',
                    ],
                    [
                        'title' => 'Action Planning',
                        'text' => 'Leadership workshops turning insights into owned initiatives.',
                        'icon' => 'ri-task-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'From sentiment data to retention action',
                'content' => 'Mirashka structures employee surveys & retention across Survey Design, Employee Pulse Checks, Retention Risk Analysis, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Run Employee Survey',
                'tabs' => [
                    [
                        'label' => 'Surveys',
                        'heading' => 'Surveys',
                        'content' => 'Annual and pulse survey programs with anonymity norms.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Analysis',
                        'heading' => 'Analysis',
                        'content' => 'Heat maps, themes and manager-level insights.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Exit',
                        'heading' => 'Exit',
                        'content' => 'Exit interview protocols and trend reporting.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Action',
                        'heading' => 'Action',
                        'content' => 'Retention plans with owners and timelines.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Employee sentiment dashboard with satisfaction and risk scores',
                'content' => 'Surveys that drive decisions — not reports that sit unread on shared drives.',
                'cta' => 'Run Employee Survey',
                'items' => [
                    [
                        'label' => 'Custom survey design',
                        'icon' => 'ri-questionnaire-line',
                    ],
                    [
                        'label' => 'Pulse check programs',
                        'icon' => 'ri-heart-pulse-line',
                    ],
                    [
                        'label' => 'Exit interview analysis',
                        'icon' => 'ri-chat-poll-line',
                    ],
                    [
                        'label' => 'Retention action workshops',
                        'icon' => 'ri-group-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Employee Surveys & Retention',
                'title' => 'Employee sentiment dashboard with satisfaction and risk scores',
                'content' => 'Surveys that drive decisions — not reports that sit unread on shared drives.',
                'image' => 'assets/admin/image/case-study/media/jyogi-gallery-engagement.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Run Employee Survey',
                'secondary' => 'Build My HRaaS Plan',
            ],
        ],
        'hr-technology-solutions' => [
            'meta' => [
                'title' => 'HR Technology Solutions | Mirashka',
                'description' => 'Digitize HR with tool selection, implementation, workflow automation and analytics.',
                'keywords' => 'hr technology, hr software, hr automation, hr analytics, mirashka',
            ],
            'card' => [
                'title' => 'HR Technology Solutions',
                'image' => 'assets/frontend/img/hraas/hraas-v3-card-tech.png',
            ],
            'hero' => [
                'label' => 'HR Technology Solutions',
                'heading' => 'Digitize HR processes with the right tools and workflows',
                'content' => 'Mirashka helps companies select, implement and optimize HR software, recruitment tools, employee databases, HR analytics dashboards and automation workflows.',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'HR tech that teams adopt — not shelfware',
                'steps' => [
                    [
                        'title' => 'HR Tech Need Assessment',
                        'text' => 'Map processes, pain points and integration requirements.',
                        'icon' => 'ri-search-eye-line',
                    ],
                    [
                        'title' => 'Tool Selection Support',
                        'text' => 'Shortlist vendors against budget, scale and India compliance needs.',
                        'icon' => 'ri-apps-line',
                    ],
                    [
                        'title' => 'Implementation Roadmap',
                        'text' => 'Phased rollout, data migration and change communication.',
                        'icon' => 'ri-road-map-line',
                    ],
                    [
                        'title' => 'Workflow Automation',
                        'text' => 'Automate onboarding, leave, approvals and hiring handoffs.',
                        'icon' => 'ri-flow-chart',
                    ],
                    [
                        'title' => 'Analytics & Reporting',
                        'text' => 'Dashboards leadership and HR use every month.',
                        'icon' => 'ri-bar-chart-box-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'HR tech that teams adopt — not shelfware',
                'content' => 'Mirashka structures hr technology solutions across HR Tech Need Assessment, Tool Selection Support, Implementation Roadmap, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Digitize My HR',
                'tabs' => [
                    [
                        'label' => 'Assessment',
                        'heading' => 'Assessment',
                        'content' => 'Current-state process and tool gap analysis.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Selection',
                        'heading' => 'Selection',
                        'content' => 'Vendor comparison and recommendation memo.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Implement',
                        'heading' => 'Implement',
                        'content' => 'Rollout plan, training and adoption support.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Automate',
                        'heading' => 'Automate',
                        'content' => 'Workflow design connecting HR, hiring and payroll.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'HR tech stack visual with connected apps and automation flows',
                'content' => 'Technology advisory grounded in how Indian SMEs actually hire, pay and engage people.',
                'cta' => 'Digitize My HR',
                'items' => [
                    [
                        'label' => 'HR tech needs assessment',
                        'icon' => 'ri-clipboard-line',
                    ],
                    [
                        'label' => 'Vendor selection support',
                        'icon' => 'ri-store-2-line',
                    ],
                    [
                        'label' => 'Implementation & training',
                        'icon' => 'ri-graduation-cap-line',
                    ],
                    [
                        'label' => 'HR analytics dashboards',
                        'icon' => 'ri-dashboard-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'HR Technology Solutions',
                'title' => 'HR tech stack visual with connected apps and automation flows',
                'content' => 'Technology advisory grounded in how Indian SMEs actually hire, pay and engage people.',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Digitize My HR',
                'secondary' => 'Build My HRaaS Plan',
            ],
        ],
    ],
];

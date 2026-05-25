<?php

/**
 * Mirashka HRaaS landing page (/hraas).
 */
return [
    'meta' => [
        'title' => 'Mirashka HRaaS — Your Extended HR, Talent & Compliance Partner',
        'description' => 'Hire better. Stay compliant. Build stronger teams. Mirashka HRaaS helps startups, SMEs, and growing companies manage HR with enterprise structure and partner agility.',
        'keywords' => 'hraas, hr as a service, hr outsourcing, payroll, compliance, recruitment, mirashka hr',
    ],

    'hero' => [
        'label' => 'Mirashka HRaaS',
        'title' => 'Your HR Department, Built as a Service',
        'tagline' => null,
        'intro' => 'Mirashka helps growing businesses manage hiring, payroll, compliance, leadership, culture and employee experience through one integrated HRaaS model.',
        'image' => 'assets/frontend/img/hraas/hraas-hero-split.webp',
        'primary_cta' => 'Book HR Discovery Call',
        'secondary_cta' => 'Get HR Health Check',
    ],

    'trust_strip' => [
        'heading' => 'Built for businesses that are growing faster than their HR systems',
        'content' => 'Startups, SMEs, family businesses, service companies, franchises and growth-stage organizations often face the same challenge — people are increasing, complexity is rising, but HR systems remain informal. Mirashka brings structure, compliance and execution.',
        'segments' => [
            ['label' => 'Startups', 'icon' => 'ri-rocket-line'],
            ['label' => 'SMEs', 'icon' => 'ri-building-2-line'],
            ['label' => 'Family Businesses', 'icon' => 'ri-home-heart-line'],
            ['label' => 'Franchises', 'icon' => 'ri-store-2-line'],
            ['label' => 'Growth Companies', 'icon' => 'ri-line-chart-line'],
        ],
    ],

    'problem' => [
        'before_title' => 'The Challenge',
        'heading' => 'Growth is exciting. Managing people without structure is risky.',
        'content' => 'Hiring delays, unclear policies, payroll errors, compliance gaps, weak documentation, low engagement and leadership mismatches can slow down even promising businesses. Mirashka simplifies these moving parts through a practical HR operating model.',
        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
        'scattered_tasks' => [
            'Hiring Delays',
            'Unclear Policies',
            'Payroll Errors',
            'Compliance Gaps',
            'Weak Documentation',
            'Low Engagement',
        ],
        'dashboard_modules' => ['Payroll', 'Compliance', 'Hiring', 'Policies', 'Leadership', 'Engagement'],
    ],

    'handles' => [
        'before_title' => 'What Mirashka Handles',
        'heading' => 'One partner for the complete people function',
        'items' => [
            ['label' => 'Compliance & Policies', 'icon' => 'ri-shield-check-line'],
            ['label' => 'Payroll & Administration', 'icon' => 'ri-money-dollar-circle-line'],
            ['label' => 'Recruitment & Staffing', 'icon' => 'ri-user-search-line'],
            ['label' => 'Leadership Hiring', 'icon' => 'ri-vip-crown-line'],
            ['label' => 'Employee Engagement', 'icon' => 'ri-emotion-happy-line'],
            ['label' => 'HR Technology', 'icon' => 'ri-dashboard-3-line'],
            ['label' => 'Performance Systems', 'icon' => 'ri-bar-chart-grouped-line'],
            ['label' => 'Workforce Advisory', 'icon' => 'ri-team-line'],
        ],
    ],

    'categories' => [
        'before_title' => 'HRaaS Categories',
        'heading' => 'Choose the HR solution your business needs today — scale into the rest tomorrow',
        'engine_label' => 'People Growth Engine',
        'engine_tagline' => 'Integrated. Scalable. People-Centric.',
        'items' => [
            [
                'label' => 'Compliance & Workplace Integrity',
                'icon' => 'ri-shield-check-line',
                'image' => 'assets/admin/image/banner/hr-advisory.webp',
                'route' => 'compliance',
            ],
            [
                'label' => 'Workforce Management & Process Optimization',
                'icon' => 'ri-settings-3-line',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                'route' => 'workforce',
            ],
            [
                'label' => 'Leadership & Organizational Excellence',
                'icon' => 'ri-vip-crown-line',
                'image' => 'assets/admin/image/banner/senior-leaders.webp',
                'route' => 'leadership-organization',
            ],
            [
                'label' => 'Talent Acquisition & Staffing Excellence',
                'icon' => 'ri-user-search-line',
                'image' => 'assets/admin/image/banner/staffing-manpower.webp',
                'route' => 'talent-acquisition',
            ],
            [
                'label' => 'HR as a Service',
                'icon' => 'ri-service-line',
                'image' => 'assets/admin/image/banner/hraas-solutions.webp',
                'route' => 'hr-as-a-service',
            ],
        ],
    ],

    'expert_digital' => [
        'before_title' => 'Human + Digital',
        'heading' => 'Human guidance. Structured process. Digital visibility.',
        'content' => 'Mirashka combines senior HR advisory, execution teams, recruitment support, compliance checklists, documentation systems and digital dashboards to create a dependable HR operating layer for your business.',
        'image' => 'assets/frontend/img/hraas/hraas-expert-digital.webp',
    ],

    'process' => [
        'before_title' => 'How It Works',
        'heading' => 'From HR chaos to HR clarity',
        'steps' => [
            ['title' => 'Discover', 'text' => 'Understand your business, team size and HR pain points', 'icon' => 'ri-search-eye-line'],
            ['title' => 'Diagnose', 'text' => 'Audit policies, payroll, compliance, hiring and culture gaps', 'icon' => 'ri-file-search-line'],
            ['title' => 'Design', 'text' => 'Create the HR operating framework', 'icon' => 'ri-pencil-ruler-2-line'],
            ['title' => 'Deploy', 'text' => 'Implement hiring, policies, payroll, engagement and reporting', 'icon' => 'ri-rocket-line'],
            ['title' => 'Drive', 'text' => 'Review performance, risks and workforce outcomes every month', 'icon' => 'ri-line-chart-line'],
        ],
    ],

    'health_check' => [
        'before_title' => 'HR Health Check',
        'heading' => 'Not sure where your HR stands? Start with an HR Health Check.',
        'content' => 'Get a structured review of your policies, documentation, payroll process, hiring system, compliance exposure and people management practices.',
        'cta' => 'Request HR Health Check',
        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
    ],

    'business_types' => [
        'before_title' => 'Who We Serve',
        'heading' => 'Designed for every stage of business growth',
        'blocks' => [
            [
                'tag' => 'Startup',
                'title' => 'For Startups',
                'text' => 'Build HR from zero',
                'icon' => 'ri-rocket-line',
                'image' => 'assets/admin/image/case-study/edtech-cs-team.webp',
            ],
            [
                'tag' => 'SME',
                'title' => 'For SMEs',
                'text' => 'Standardize people operations',
                'icon' => 'ri-building-2-line',
                'image' => 'assets/admin/image/case-study/manufacturing-overview.webp',
            ],
            [
                'tag' => 'Family',
                'title' => 'For Family Businesses',
                'text' => 'Professionalize leadership and succession',
                'icon' => 'ri-home-heart-line',
                'image' => 'assets/admin/image/case-study/family-biz-team.webp',
            ],
            [
                'tag' => 'Franchise',
                'title' => 'For Franchises',
                'text' => 'Create uniform HR systems across locations',
                'icon' => 'ri-store-2-line',
                'image' => 'assets/admin/image/case-study/media/ecommerce-gallery-retail.webp',
            ],
            [
                'tag' => 'Scaling',
                'title' => 'For Scaling Companies',
                'text' => 'Build leadership, hiring and retention systems',
                'icon' => 'ri-line-chart-line',
                'image' => 'assets/admin/image/case-study/media/liv-india-gallery-growth.webp',
            ],
        ],
    ],

    'dashboard' => [
        'before_title' => 'HR Visibility',
        'heading' => 'Visibility that leadership can act on',
        'content' => 'Track hiring status, employee records, payroll milestones, compliance tasks, engagement scores, retention signals and performance review cycles in one structured HR reporting format.',
        'cta' => 'Request HR Consultation',
        'tabs' => [
            [
                'label' => 'Hiring Pipeline',
                'heading' => 'Hiring Pipeline',
                'content' => 'See applications, screening stages, interviews, offers and time-to-hire in one view — so hiring bottlenecks are visible before they slow growth.',
                'icon' => 'ri-user-search-line',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
            ],
            [
                'label' => 'Payroll Status',
                'heading' => 'Payroll Status',
                'content' => 'Monitor payroll runs, statutory deductions, benefits and month-end close with clear status indicators leadership can trust.',
                'icon' => 'ri-money-dollar-circle-line',
                'image' => 'assets/admin/image/case-study/fintech-team.webp',
            ],
            [
                'label' => 'Compliance Calendar',
                'heading' => 'Compliance Calendar',
                'content' => 'Stay ahead of filings, policy renewals and audit milestones with a calendar view of mandatory and recommended HR tasks.',
                'icon' => 'ri-calendar-check-line',
                'image' => 'assets/admin/image/banner/hr-advisory.webp',
            ],
            [
                'label' => 'Engagement Pulse',
                'heading' => 'Engagement Pulse',
                'content' => 'Track survey scores, retention signals and team sentiment so managers can act before disengagement becomes turnover.',
                'icon' => 'ri-pulse-line',
                'image' => 'assets/admin/image/case-study/media/jyogi-gallery-engagement.webp',
            ],
        ],
    ],

    'people_excellence' => [
        'sidebar' => [
            'label' => 'Insights, Tools & Resources',
            'heading' => 'Smarter HR decisions begin with better knowledge',
            'content' => 'Practical HR tools, checklists and templates from Mirashka\'s knowledge hub — built to help you hire, comply and engage with confidence.',
            'cta' => 'Request HR Consultation',
        ],
        'cards' => [
            [
                'tag' => 'Leadership Hiring',
                'title' => 'Because the right people change the direction of business',
                'content' => 'Mirashka supports both volume hiring and leadership hiring — from sourcing candidates to assessing culture fit, leadership potential and long-term business alignment.',
                'image' => 'assets/admin/image/banner/senior-leaders.webp',
                'image_position' => 'center 30%',
            ],
            [
                'tag' => 'Employee Experience',
                'title' => 'Attract better talent. Engage existing teams. Retain your best people.',
                'content' => 'We help organizations build employer branding, employee communication, feedback systems, engagement initiatives and performance frameworks that make employees feel valued and aligned.',
                'image' => 'assets/admin/image/case-study/media/jyogi-gallery-culture.webp',
                'image_position' => 'center center',
                'quotes' => [
                    ['text' => 'I love the supportive team culture', 'class' => 'hraas-focus-quote--tl'],
                    ['text' => 'Great place to grow and make an impact', 'class' => 'hraas-focus-quote--bl'],
                    ['text' => 'Working here feels rewarding every day', 'class' => 'hraas-focus-quote--tr'],
                ],
            ],
        ],
    ],

    'resources' => [
        'before_title' => 'Knowledge Hub',
        'heading' => 'Smarter HR decisions begin with better knowledge',
        'showcase_image' => 'assets/admin/image/case-study/family-biz-team.webp',
        'items' => [
            ['label' => 'HR Compliance Checklist', 'icon' => 'ri-shield-check-line'],
            ['label' => 'Payroll Readiness Guide', 'icon' => 'ri-money-dollar-circle-line'],
            ['label' => 'Employee Handbook Template', 'icon' => 'ri-book-open-line'],
            ['label' => 'Hiring Cost Calculator', 'icon' => 'ri-calculator-line'],
            ['label' => 'Leadership Hiring Scorecard', 'icon' => 'ri-award-line'],
            ['label' => 'Employee Engagement Survey Format', 'icon' => 'ri-survey-line'],
        ],
    ],

    'final_cta' => [
        'heading' => 'Let Mirashka become your extended HR office',
        'content' => 'Whether you need one HR process fixed or a complete HR department built as a service, Mirashka brings the strategy, systems and execution to support your next stage of growth.',
        'cta' => 'Book Your HR Strategy Call',
        'bg_image' => 'assets/admin/image/banner/hr-advisory.webp',
        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
    ],
];

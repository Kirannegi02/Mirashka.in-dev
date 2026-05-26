<?php

/**
 * Home page — Section 12: Integrated HR & Workforce Services
 */
return [
    'label' => 'What We Do',
    'heading' => 'Integrated HR & Workforce Services',
    'subheading' => 'Explore the HR solutions that help businesses hire, manage, comply, engage and scale.',
    'cta' => 'Explore All Services',
    'cta_route' => 'whatwedo',
    'services' => [
        [
            'title' => 'HRaaS & HR Outsourcing',
            'subtitle' => 'Your dedicated HR partner for everyday HR operations.',
            'image' => 'assets/frontend/img/hraas/hraas-v3-card-outsourcing.png',
            'icon' => 'ri-team-line',
            'route' => 'hr-as-a-service',
            'route_params' => [],
        ],
        [
            'title' => 'Compliance & Workplace Integrity',
            'subtitle' => 'Policies, audits, legal support and workplace ethics.',
            'image' => 'assets/frontend/img/compliance/cwi-card-policy.png',
            'icon' => 'ri-shield-check-line',
            'route' => 'compliance',
            'route_params' => [],
        ],
        [
            'title' => 'Payroll & Workforce Administration',
            'subtitle' => 'Payroll coordination, records, documentation and employee lifecycle.',
            'image' => 'assets/frontend/img/workforce/wfm-card-payroll.png',
            'icon' => 'ri-wallet-3-line',
            'route' => 'workforce.sub',
            'route_params' => ['payroll-outsourcing-administration'],
        ],
        [
            'title' => 'Talent Acquisition & Staffing',
            'subtitle' => 'IT staffing, general staffing, RPO and candidate sourcing.',
            'image' => 'assets/frontend/img/talent-acquisition/ta-card-general-staffing.png',
            'icon' => 'ri-user-search-line',
            'route' => 'talent-acquisition',
            'route_params' => [],
        ],
        [
            'title' => 'Leadership Hiring & Executive Search',
            'subtitle' => 'CXO, senior leadership and board-level hiring support.',
            'image' => 'assets/frontend/img/leadership/ldr-card-executive-search.png',
            'icon' => 'ri-vip-crown-line',
            'route' => 'leadership-organization.sub',
            'route_params' => ['executive-search-leadership-hiring'],
        ],
        [
            'title' => 'Employee Engagement & Performance',
            'subtitle' => 'Surveys, KRAs, performance reviews and retention systems.',
            'image' => 'assets/frontend/img/hraas/hraas-v3-card-engagement.png',
            'icon' => 'ri-pulse-line',
            'route' => 'hr-as-a-service.sub',
            'route_params' => ['employee-engagement-performance'],
        ],
        [
            'title' => 'HR Technology & Analytics',
            'subtitle' => 'HR software, automation, dashboards and reporting.',
            'image' => 'assets/frontend/img/hraas/hraas-v3-card-tech.png',
            'icon' => 'ri-dashboard-3-line',
            'route' => 'hr-as-a-service.sub',
            'route_params' => ['hr-technology-solutions'],
        ],
        [
            'title' => 'HR & Talent Strategy Advisory',
            'subtitle' => 'Workforce planning, transformation and organization structure.',
            'image' => 'assets/frontend/img/leadership/ldr-card-talent-strategy.png',
            'icon' => 'ri-compass-3-line',
            'route' => 'leadership-organization.sub',
            'route_params' => ['hr-talent-strategy-advisory'],
        ],
    ],
];

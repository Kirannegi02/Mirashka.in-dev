<?php

/**
 * Category page: Workforce Management & Process Optimization
 */
return [
    'sections' => [
        'hero',
        'risk',
        'services',
        'framework',
        'remote_desk',
        'payroll_workflow',
        'reporting_dashboard',
        'sub_services',
    ],

    'meta' => [
        'title' => 'Workforce Management & Process Optimization | Mirashka',
        'description' => 'Streamline HR operations with policy design, payroll administration and remote HR support. Structured, accurate and scalable people operations.',
        'keywords' => 'workforce management, hr operations, payroll outsourcing, remote hr, policy audit, mirashka',
    ],
    'hero' => [
        'label' => 'Workforce Management',
        'title' => 'Workforce Management & Process Optimization',
        'tagline' => 'Streamlining HR operations to drive efficiency, compliance and business growth.',
        'content' => 'Mirashka helps companies move from person-dependent HR operations to process-driven HR systems. We design policies, manage payroll, optimize employee records and provide remote HR support so leadership can focus on business growth.',
        'headline' => 'Make HR operations structured, accurate and scalable',
        'image' => 'assets/frontend/img/workforce/wfm-hero.png',
        'primary_cta' => 'Optimize Your HR Operations',
        'secondary_cta' => 'Speak to an HR Advisor',
    ],
    'risk' => [
        'before_title' => 'Problem',
        'heading' => 'Manual HR creates delays, errors and confusion',
        'lead' => 'When HR lives in spreadsheets, memory and ad-hoc messages, payroll slips, documentation gaps and employee queries pile up fast.',
        'content' => 'Growing teams need repeatable processes — not heroic effort from one overloaded HR person. Mirashka builds the operating rhythm, records and reporting your leadership can trust.',
        'image' => 'assets/frontend/img/workforce/wfm-risk.png',
        'list_label' => 'Operational HR pain points',
        'visual_alt' => 'Manual HR operations and payroll process gaps affecting growing teams',
        'visual_caption_title' => 'From scattered HR to structured ops',
        'visual_caption_text' => 'Payroll rhythm, records control and monthly reporting leadership can trust.',
        'cta' => 'Speak to an HR Advisor',
        'risks' => [
            'Payroll inputs scattered across email and chat',
            'Policies that managers interpret differently',
            'Employee records without version control',
            'Compliance follow-ups missed in busy months',
            'No monthly HR visibility for leadership',
            'Onboarding and exits handled inconsistently',
        ],
    ],
    'services' => [
        'before_title' => 'Services Overview',
        'heading' => 'Structured support across core HR operations',
        'content' => 'From policy audits and payroll coordination to records control, remote HR desk support and monthly reporting — one integrated path to scalable people operations.',
        'image' => 'assets/frontend/img/workforce/wfm-services-center.png',
        'image_alt' => 'Structured HR operations across payroll, policies and remote HR support',
        'items' => [
            [
                'step' => '01',
                'title' => 'Policy Design & Compliance Audit',
                'text' => 'Create, review and audit HR policies that stay legally aligned and practical for managers.',
                'icon' => 'ri-file-shield-2-line',
            ],
            [
                'step' => '02',
                'title' => 'Payroll Outsourcing & Administration',
                'text' => 'Accurate payroll coordination, statutory inputs, payslips and structured reporting.',
                'icon' => 'ri-money-dollar-circle-line',
            ],
            [
                'step' => '03',
                'title' => 'Remote HR Solutions',
                'text' => 'Your external HR desk for onboarding, records, compliance follow-ups and monthly reporting.',
                'icon' => 'ri-computer-line',
            ],
            [
                'step' => '04',
                'title' => 'HR Documentation & Records',
                'text' => 'Employee master data, contracts and lifecycle files with version control and audit-ready hygiene.',
                'icon' => 'ri-folder-user-line',
            ],
        ],
    ],
    'framework' => [
        'before_title' => 'HR Process Map',
        'heading' => 'Policy, payroll, records, reporting',
        'content' => 'A clear HR process map that connects everyday operations to leadership visibility — built for growing Indian businesses.',
        'steps' => [
            [
                'title' => 'Policy',
                'subtitle' => 'Foundation',
                'text' => 'Gap review, creation, revision and manager implementation guides with a review calendar.',
                'icon' => 'ri-file-shield-2-line',
            ],
            [
                'title' => 'Payroll',
                'subtitle' => 'Accuracy',
                'text' => 'Input collection, salary coordination, compliance inputs and query resolution.',
                'icon' => 'ri-calculator-line',
            ],
            [
                'title' => 'Records',
                'subtitle' => 'Control',
                'text' => 'Employee master data, documentation, onboarding and exit workflows.',
                'icon' => 'ri-folder-user-line',
            ],
            [
                'title' => 'Reporting',
                'subtitle' => 'Visibility',
                'text' => 'Monthly HR dashboards leadership can act on — not scattered updates.',
                'icon' => 'ri-bar-chart-box-line',
            ],
        ],
    ],
    'payroll_workflow' => [
        'layout' => 'tabs',
        'before_title' => 'Payroll & Documentation',
        'heading' => 'Payroll & documentation workflow',
        'content' => 'Structured inputs, version-controlled employee records and statutory coordination — so payroll and documentation stay accurate month after month.',
        'image' => 'assets/frontend/img/workforce/wfm-payroll-v2-input.png',
        'image_alt' => 'Payroll and HR documentation workflow for growing teams',
        'read_more_label' => 'Explore payroll services',
        'cta_box' => [
            'text' => 'Speak to an HR Advisor',
            'url' => null,
            'icon' => 'icon-phone-call',
        ],
        'tabs' => [
            [
                'tab_label' => '01. Input collection',
                'pane_title' => 'Structured input collection',
                'text' => 'Standardized payroll inputs, attendance and variable pay captured in one rhythm — so every payroll run starts from clean, complete data.',
                'icon' => 'ri-inbox-archive-line',
                'image' => 'assets/frontend/img/workforce/wfm-payroll-v2-input.png',
            ],
            [
                'tab_label' => '02. Salary coordination',
                'pane_title' => 'Salary coordination & statutory inputs',
                'text' => 'Payslip support, statutory deductions and compliance inputs handled with discipline — aligned to your payroll provider or in-house process.',
                'icon' => 'ri-calculator-line',
                'image' => 'assets/frontend/img/workforce/wfm-payroll-v2-salary.png',
            ],
            [
                'tab_label' => '03. Record control',
                'pane_title' => 'Record control & documentation',
                'text' => 'Employee master data, contracts and lifecycle documents with version control — so audits and employee queries never depend on memory.',
                'icon' => 'ri-folder-user-line',
                'image' => 'assets/frontend/img/workforce/wfm-payroll-v2-records.png',
            ],
            [
                'tab_label' => '04. Query resolution',
                'pane_title' => 'Payroll query resolution',
                'text' => 'Employee payroll queries tracked and closed — not lost in chat threads — with a visible log leadership can review monthly.',
                'icon' => 'ri-customer-service-2-line',
                'image' => 'assets/frontend/img/workforce/wfm-payroll-v2-queries.png',
            ],
        ],
    ],

    'remote_desk' => [
        'eyebrow' => 'Remote HR Desk Model',
        'heading' => 'Your extended HR team — without full-time overhead',
        'content' => 'Mirashka acts as your remote HR desk: dedicated coordination, employee communication, compliance follow-ups and monthly reporting so founders stay focused on growth.',
        'image' => 'assets/frontend/img/workforce/wfm-remote-feature.png',
        'image_alt' => 'Remote HR desk team supporting operations and employee lifecycle',
        'theme' => 'dark',
        'features' => [
            [
                'title' => 'Dedicated HR coordinator',
                'text' => 'A named point of contact for employee queries, documentation and monthly rhythm.',
                'icon' => 'ri-user-voice-line',
            ],
            [
                'title' => 'Lifecycle support',
                'text' => 'Recruitment coordination, onboarding, records management and structured exits.',
                'icon' => 'ri-loop-left-line',
            ],
        ],
        'float_cards' => [
            [
                'title' => 'Onboarding & exits',
                'text' => 'Checklists, documentation and communication templates executed consistently.',
                'icon' => 'ri-user-add-line',
                'link' => null,
            ],
            [
                'title' => 'Compliance follow-ups',
                'text' => 'Registers, filings and policy actions tracked with monthly closure discipline.',
                'icon' => 'ri-shield-check-line',
                'link' => null,
            ],
        ],
        'cta' => 'Speak to an HR Advisor',
        'trust_name' => 'Mirashka People Operations',
        'trust_role' => 'Workforce management & HR operations specialists',
    ],

    'reporting_dashboard' => [
        'layout' => 'standout-grid',
        'before_title' => 'Reporting Dashboard',
        'heading' => 'Monthly HR visibility leadership can act on',
        'grid' => [
            'left_image' => 'assets/frontend/img/workforce/wfm-reporting-team-hands.png',
            'left_image_alt' => 'HR team collaboration and workforce planning',
            'left_card' => [
                'icon' => 'ri-team-line',
                'title' => 'Headcount snapshot',
                'text' => 'Live workforce visibility with attrition trends, open roles and headcount movement leadership can act on.',
            ],
            'center' => [
                'icon' => 'ri-bar-chart-box-line',
                'title' => 'Operational reporting rhythm',
                'text' => 'Operational dashboards with payroll status, headcount movement, compliance items and open HR actions — not scattered updates in email.',
                'list' => [
                    'Headcount and attrition snapshot',
                    'Payroll and statutory status',
                    'Open compliance and documentation items',
                    'Workforce insights for leadership reviews',
                ],
                'cta' => 'Speak to an HR Advisor',
            ],
            'right_card' => [
                'icon' => 'ri-file-shield-2-line',
                'title' => 'Compliance & records',
                'text' => 'Registers, filings and documentation hygiene tracked with monthly closure discipline.',
            ],
            'right_image' => 'assets/frontend/img/workforce/wfm-reporting-team-work.png',
            'right_image_alt' => 'HR operations and workforce reporting',
        ],
    ],
    'cta' => [
        'heading' => 'Optimize Your HR Operations',
        'content' => 'A focused review of your HR processes, payroll workflow and documentation — with a practical plan to make operations structured and scalable.',
        'button' => 'Optimize Your HR Operations',
        'secondary' => 'Speak to an HR Advisor',
        'image' => 'assets/frontend/img/workforce/wfm-cta-person-v2.png',
        'bg_image' => 'assets/frontend/img/workforce/wfm-cta-bg-v2.png',
    ],
];

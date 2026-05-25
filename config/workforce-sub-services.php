<?php

/**
 * Workforce Management — sub-service landing pages.
 */
return [
    'shared' => [
        'parent_route' => 'workforce',
        'parent_label' => 'Workforce Management',
        'cta' => [
            'heading' => 'Optimize Your HR Operations',
            'content' => 'Structured HR operations review with practical recommendations for policy, payroll and remote HR desk setup.',
            'button' => 'Optimize Your HR Operations',
            'secondary' => 'Speak to an HR Advisor',
            'image' => 'assets/admin/image/case-study/jyogi-team.webp',
            'bg_image' => 'assets/admin/image/banner/hr-advisory.webp',
        ],
    ],
    'services' => [
        'policy-design-compliance-audit' => [
            'meta' => [
                'title' => 'Policy Design & Compliance Audit | Mirashka',
                'description' => 'Design policies that work in real business situations. Gap review, creation, compliance alignment and manager implementation guides.',
                'keywords' => 'hr policy audit, policy design, compliance alignment, hr policies, mirashka',
            ],
            'card' => [
                'title' => 'Policy Design & Compliance Audit',
                'image' => 'assets/frontend/img/workforce/wfm-card-policy.png',
            ],
            'hero' => [
                'label' => 'Policy Design & Compliance Audit',
                'heading' => 'Design policies that work in real business situations',
                'content' => 'We create, review and audit HR policies so they remain legally aligned, practical for managers and clear for employees — with a review calendar your team can maintain.',
                'image' => 'assets/admin/image/case-study/jyogi-team.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'From policy gaps to an audit-ready HR foundation',
                'steps' => [
                    [
                        'title' => 'Policy Gap Review',
                        'text' => 'Assess existing policies, registers and manager practices against statutory and business needs.',
                        'icon' => 'ri-search-eye-line',
                    ],
                    [
                        'title' => 'Policy Creation & Revision',
                        'text' => 'Draft or update policies that reflect how your business actually operates.',
                        'icon' => 'ri-file-edit-line',
                    ],
                    [
                        'title' => 'Compliance Alignment',
                        'text' => 'Align documentation with labour law, industry norms and your headcount stage.',
                        'icon' => 'ri-scales-3-line',
                    ],
                    [
                        'title' => 'Manager Implementation Guide',
                        'text' => 'Practical playbooks so leaders apply policies consistently across teams.',
                        'icon' => 'ri-team-line',
                    ],
                    [
                        'title' => 'Review Calendar',
                        'text' => 'Scheduled reviews when laws, roles or operating models change.',
                        'icon' => 'ri-calendar-check-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'From policy gaps to an audit-ready HR foundation',
                'content' => 'Mirashka structures policy design & compliance audit across Policy Gap Review, Policy Creation & Revision, Compliance Alignment, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Audit My HR Policies',
                'tabs' => [
                    [
                        'label' => 'Gap Review',
                        'heading' => 'Gap Review',
                        'content' => 'Structured assessment of policy coverage, documentation quality and implementation risk.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Policy Suite',
                        'heading' => 'Policy Suite',
                        'content' => 'Handbooks, codes of conduct, leave, discipline and role-specific addenda tailored to you.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Compliance',
                        'heading' => 'Compliance',
                        'content' => 'Statutory alignment checks with prioritized remediation actions.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Implementation',
                        'heading' => 'Implementation',
                        'content' => 'Rollout communication, acknowledgements and manager briefing support.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Policy documents with approval workflow — audit-ready and manager-friendly',
                'content' => 'We balance legal requirements with language your teams understand, so policies protect the business and guide everyday decisions.',
                'cta' => 'Audit My HR Policies',
                'items' => [
                    [
                        'label' => 'Policy gap assessment report',
                        'icon' => 'ri-file-search-line',
                    ],
                    [
                        'label' => 'Custom policy creation & revision',
                        'icon' => 'ri-file-shield-2-line',
                    ],
                    [
                        'label' => 'Manager implementation guide',
                        'icon' => 'ri-book-open-line',
                    ],
                    [
                        'label' => 'Annual review calendar',
                        'icon' => 'ri-calendar-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Policy Design & Compliance Audit',
                'title' => 'Policy documents with approval workflow — audit-ready and manager-friendly',
                'content' => 'We balance legal requirements with language your teams understand, so policies protect the business and guide everyday decisions.',
                'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Audit My HR Policies',
                'secondary' => 'Optimize Your HR Operations',
            ],
        ],
        'payroll-outsourcing-administration' => [
            'meta' => [
                'title' => 'Payroll Outsourcing & Administration | Mirashka',
                'description' => 'Accurate payroll, timely processing and smoother administration. Salary coordination, statutory inputs and reporting.',
                'keywords' => 'payroll outsourcing, payroll administration, salary processing, mirashka hr',
            ],
            'card' => [
                'title' => 'Payroll Outsourcing & Administration',
                'image' => 'assets/frontend/img/workforce/wfm-card-payroll.png',
            ],
            'hero' => [
                'label' => 'Payroll Outsourcing & Administration',
                'heading' => 'Accurate payroll, timely processing and smoother administration',
                'content' => 'Mirashka manages payroll coordination, salary processing support, statutory inputs, employee data, leave inputs, reimbursement records and payroll reporting with structured accuracy.',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Payroll rhythm your finance and HR teams can trust',
                'steps' => [
                    [
                        'title' => 'Payroll Input Collection',
                        'text' => 'Structured collection of attendance, leave, reimbursements and variable pay inputs.',
                        'icon' => 'ri-inbox-line',
                    ],
                    [
                        'title' => 'Salary Processing Coordination',
                        'text' => 'Timely coordination with your payroll provider or internal process for accurate runs.',
                        'icon' => 'ri-money-dollar-circle-line',
                    ],
                    [
                        'title' => 'Compliance Inputs',
                        'text' => 'PF, ESI, PT, TDS and other statutory inputs tracked and validated each cycle.',
                        'icon' => 'ri-shield-check-line',
                    ],
                    [
                        'title' => 'Payslip & Report Support',
                        'text' => 'Payslip distribution, payroll summaries and cost-centre reporting for leadership.',
                        'icon' => 'ri-file-chart-line',
                    ],
                    [
                        'title' => 'Query Resolution',
                        'text' => 'Employee payroll queries handled with documentation and closure tracking.',
                        'icon' => 'ri-customer-service-2-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Payroll Dashboard',
                'heading' => 'Payroll rhythm your finance and HR teams can trust',
                'content' => 'Mirashka structures payroll outsourcing & administration across Payroll Input Collection, Salary Processing Coordination, Compliance Inputs, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Outsource Payroll Operations',
                'tabs' => [
                    [
                        'label' => 'Inputs',
                        'heading' => 'Inputs',
                        'content' => 'Centralized input collection with validation before processing begins.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Processing',
                        'heading' => 'Processing',
                        'content' => 'Salary run coordination with audit trail and approval checkpoints.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Statutory',
                        'heading' => 'Statutory',
                        'content' => 'Compliance inputs, filings support and register hygiene.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Reports',
                        'heading' => 'Reports',
                        'content' => 'Payslips, summaries and leadership-ready payroll insights.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Payroll dashboard with salary, tax, attendance and benefits visibility',
                'content' => 'Structured administration that reduces errors, delays and month-end stress for HR and finance.',
                'cta' => 'Outsource Payroll Operations',
                'items' => [
                    [
                        'label' => 'Monthly payroll coordination',
                        'icon' => 'ri-calendar-check-line',
                    ],
                    [
                        'label' => 'Statutory input management',
                        'icon' => 'ri-government-line',
                    ],
                    [
                        'label' => 'Payslip & report distribution',
                        'icon' => 'ri-mail-send-line',
                    ],
                    [
                        'label' => 'Employee query desk',
                        'icon' => 'ri-question-answer-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Payroll Outsourcing & Administration',
                'title' => 'Payroll dashboard with salary, tax, attendance and benefits visibility',
                'content' => 'Structured administration that reduces errors, delays and month-end stress for HR and finance.',
                'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Outsource Payroll Operations',
                'secondary' => 'Speak to an HR Advisor',
            ],
        ],
        'remote-hr-solutions' => [
            'meta' => [
                'title' => 'Remote HR Solutions | Mirashka',
                'description' => 'Your external HR desk for everyday people operations — onboarding, records, compliance and monthly reporting.',
                'keywords' => 'remote hr, hr outsourcing desk, virtual hr team, mirashka',
            ],
            'card' => [
                'title' => 'Remote HR Solutions',
                'image' => 'assets/frontend/img/workforce/wfm-card-remote.png',
            ],
            'hero' => [
                'label' => 'Remote HR Solutions',
                'heading' => 'Your external HR desk for everyday people operations',
                'content' => 'Mirashka acts as your remote HR team, supporting recruitment coordination, onboarding, documentation, employee records, communication, compliance follow-ups and monthly HR reporting.',
                'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Dedicated remote HR without building a full department',
                'steps' => [
                    [
                        'title' => 'What Remote HR Covers',
                        'text' => 'Scope definition across hiring support, lifecycle, compliance and reporting.',
                        'icon' => 'ri-list-check-2',
                    ],
                    [
                        'title' => 'Dedicated HR Coordinator',
                        'text' => 'Named coordinator for employees, managers and leadership queries.',
                        'icon' => 'ri-user-star-line',
                    ],
                    [
                        'title' => 'Employee Record Management',
                        'text' => 'Master data, documents, acknowledgements and audit-ready files.',
                        'icon' => 'ri-folder-user-line',
                    ],
                    [
                        'title' => 'Onboarding and Exit Support',
                        'text' => 'Structured checklists, communication and documentation for every transition.',
                        'icon' => 'ri-user-shared-line',
                    ],
                    [
                        'title' => 'Monthly HR Reporting',
                        'text' => 'Workforce snapshot, open compliance items and operational priorities.',
                        'icon' => 'ri-bar-chart-grouped-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Dedicated remote HR without building a full department',
                'content' => 'Mirashka structures remote hr solutions across What Remote HR Covers, Dedicated HR Coordinator, Employee Record Management, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Build My Remote HR Desk',
                'tabs' => [
                    [
                        'label' => 'HR Desk',
                        'heading' => 'HR Desk',
                        'content' => 'Virtual HR desk covering day-to-day people operations and employee communication.',
                        'image' => 'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
                    ],
                    [
                        'label' => 'Onboarding',
                        'heading' => 'Onboarding',
                        'content' => 'Joining kits, documentation, induction coordination and first-week check-ins.',
                        'image' => 'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
                    ],
                    [
                        'label' => 'Records',
                        'heading' => 'Records',
                        'content' => 'Employee files, policy acknowledgements and document version control.',
                        'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                    ],
                    [
                        'label' => 'Reporting',
                        'heading' => 'Reporting',
                        'content' => 'Monthly leadership report with headcount, risks and action items.',
                        'image' => 'assets/admin/image/case-study/jyogi-team.webp',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Virtual HR desk connecting employees, managers and leadership',
                'content' => 'Remote HR that feels present — responsive coordination, clear documentation and monthly visibility.',
                'cta' => 'Build My Remote HR Desk',
                'items' => [
                    [
                        'label' => 'Dedicated HR coordinator',
                        'icon' => 'ri-headphone-line',
                    ],
                    [
                        'label' => 'Recruitment & onboarding support',
                        'icon' => 'ri-user-add-line',
                    ],
                    [
                        'label' => 'Compliance follow-up tracking',
                        'icon' => 'ri-shield-line',
                    ],
                    [
                        'label' => 'Monthly HR leadership report',
                        'icon' => 'ri-file-chart-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Remote HR Solutions',
                'title' => 'Virtual HR desk connecting employees, managers and leadership',
                'content' => 'Remote HR that feels present — responsive coordination, clear documentation and monthly visibility.',
                'image' => 'assets/frontend/img/hraas/hraas-health-check.webp',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Build My Remote HR Desk',
                'secondary' => 'Optimize Your HR Operations',
            ],
        ],
    ],
];

<?php

/**
 * Talent Acquisition & Staffing — sub-service landing pages.
 */
return [
    'shared' => [
        'parent_route' => 'talent-acquisition',
        'parent_label' => 'Talent Acquisition & Staffing',
        'cta' => [
            'heading' => 'Start Hiring Support',
            'content' => 'Hiring assessment with role prioritization, recommended channels and staffing model for your timeline and budget.',
            'button' => 'Start Hiring Support',
            'secondary' => 'Speak to a Hiring Advisor',
            'image' => 'assets/frontend/img/talent-acquisition/ta-cta-hiring.png',
            'bg_image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
        ],
    ],
    'services' => [
        'it-staffing' => [
            'meta' => [
                'title' => 'IT Staffing | Mirashka',
                'description' => 'Skilled technology talent for developers, cloud, data, cybersecurity and support roles.',
                'keywords' => 'it staffing, tech staffing, developers, cloud engineers, mirashka',
            ],
            'card' => [
                'title' => 'IT Staffing',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-staffing.png',
            ],
            'hero' => [
                'label' => 'IT Staffing',
                'heading' => 'Skilled technology talent for modern business needs',
                'content' => 'Mirashka supports IT staffing for developers, testers, cloud engineers, data specialists, cybersecurity roles, support engineers and emerging technology profiles.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-staffing.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Technology talent deployed with continuity',
                'steps' => [
                    [
                        'title' => 'Role Requirement Mapping',
                        'text' => 'Stack, seniority, project context and deployment timeline clarity.',
                        'icon' => 'ri-file-code-line',
                    ],
                    [
                        'title' => 'Tech Skill Screening',
                        'text' => 'Structured technical screening before client interviews.',
                        'icon' => 'ri-code-box-line',
                    ],
                    [
                        'title' => 'Candidate Shortlisting',
                        'text' => 'Curated panels with skill notes and availability.',
                        'icon' => 'ri-list-check',
                    ],
                    [
                        'title' => 'Deployment Support',
                        'text' => 'Joining coordination, documentation and day-one readiness.',
                        'icon' => 'ri-rocket-line',
                    ],
                    [
                        'title' => 'Replacement & Continuity',
                        'text' => 'Backup and replacement protocols to protect delivery timelines.',
                        'icon' => 'ri-refresh-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Technology talent deployed with continuity',
                'content' => 'Mirashka structures it staffing across Role Requirement Mapping, Tech Skill Screening, Candidate Shortlisting, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Hire IT Talent',
                'tabs' => [
                    [
                        'label' => 'Tech Roles',
                        'heading' => 'Tech Roles',
                        'content' => 'Developers, QA, DevOps, data and security profiles.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-staffing.png',
                    ],
                    [
                        'label' => 'Screening',
                        'heading' => 'Screening',
                        'content' => 'Skill validation aligned to your technical bar.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
                    ],
                    [
                        'label' => 'Deployment',
                        'heading' => 'Deployment',
                        'content' => 'Onboarding and project integration support.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Continuity',
                        'heading' => 'Continuity',
                        'content' => 'Replacement SLAs and bench strength planning.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Tech talent profile cards — skills matched to your delivery timeline',
                'content' => 'IT staffing that keeps projects moving with vetted technical talent and structured deployment.',
                'cta' => 'Hire IT Talent',
                'items' => [
                    [
                        'label' => 'Full-stack & specialist developers',
                        'icon' => 'ri-code-s-slash-line',
                    ],
                    [
                        'label' => 'Cloud & DevOps profiles',
                        'icon' => 'ri-cloud-line',
                    ],
                    [
                        'label' => 'Data & cybersecurity talent',
                        'icon' => 'ri-database-2-line',
                    ],
                    [
                        'label' => 'Replacement continuity',
                        'icon' => 'ri-shield-check-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'IT Staffing',
                'title' => 'Tech talent profile cards — skills matched to your delivery timeline',
                'content' => 'IT staffing that keeps projects moving with vetted technical talent and structured deployment.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-staffing.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Hire IT Talent',
                'secondary' => 'Start Hiring Support',
            ],
        ],
        'general-staffing' => [
            'meta' => [
                'title' => 'General Staffing | Mirashka',
                'description' => 'Reliable manpower for sales, operations, admin, customer support and field teams.',
                'keywords' => 'general staffing, manpower, business staffing, mirashka',
            ],
            'card' => [
                'title' => 'General Staffing',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-general-staffing.png',
            ],
            'hero' => [
                'label' => 'General Staffing',
                'heading' => 'Reliable manpower for business operations',
                'content' => 'We support hiring for sales, operations, administration, customer support, field teams, back-office, accounts and other non-technical roles across industries.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-general-staffing.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Operational hiring with consistent quality',
                'steps' => [
                    [
                        'title' => 'Role Understanding',
                        'text' => 'KPIs, work environment and manager expectations documented upfront.',
                        'icon' => 'ri-file-text-line',
                    ],
                    [
                        'title' => 'Candidate Sourcing',
                        'text' => 'Multi-channel sourcing tuned to location and role family.',
                        'icon' => 'ri-user-search-line',
                    ],
                    [
                        'title' => 'Screening & Coordination',
                        'text' => 'Phone screens, coordination and shortlists hiring managers trust.',
                        'icon' => 'ri-phone-line',
                    ],
                    [
                        'title' => 'Joining Support',
                        'text' => 'Offer follow-up, documentation and day-one communication.',
                        'icon' => 'ri-user-add-line',
                    ],
                    [
                        'title' => 'Staffing Reports',
                        'text' => 'Pipeline and fill-rate reporting for operations leadership.',
                        'icon' => 'ri-file-chart-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Operational hiring with consistent quality',
                'content' => 'Mirashka structures general staffing across Role Understanding, Candidate Sourcing, Screening & Coordination, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Build My Workforce',
                'tabs' => [
                    [
                        'label' => 'Operations',
                        'heading' => 'Operations',
                        'content' => 'Sales, admin, accounts and back-office hiring.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-general-staffing.png',
                    ],
                    [
                        'label' => 'Customer',
                        'heading' => 'Customer',
                        'content' => 'Support and front-line customer-facing roles.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Field',
                        'heading' => 'Field',
                        'content' => 'Field teams with location and mobility requirements.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                    [
                        'label' => 'Reporting',
                        'heading' => 'Reporting',
                        'content' => 'Weekly staffing metrics and open role visibility.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-rpo.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Business operations team — reliable hires for everyday scale',
                'content' => 'General staffing that understands operational roles, not just generic job descriptions.',
                'cta' => 'Build My Workforce',
                'items' => [
                    [
                        'label' => 'Sales & operations hiring',
                        'icon' => 'ri-briefcase-line',
                    ],
                    [
                        'label' => 'Customer support staffing',
                        'icon' => 'ri-customer-service-line',
                    ],
                    [
                        'label' => 'Field team recruitment',
                        'icon' => 'ri-map-pin-line',
                    ],
                    [
                        'label' => 'Staffing performance reports',
                        'icon' => 'ri-bar-chart-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'General Staffing',
                'title' => 'Business operations team — reliable hires for everyday scale',
                'content' => 'General staffing that understands operational roles, not just generic job descriptions.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-general-staffing.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Build My Workforce',
                'secondary' => 'Start Hiring Support',
            ],
        ],
        'naps-apprenticeship-support' => [
            'meta' => [
                'title' => 'NAPS Apprenticeship Support | Mirashka',
                'description' => 'Build future-ready talent through apprenticeship models with sourcing and documentation support.',
                'keywords' => 'naps, apprenticeship hiring, apprentice staffing, mirashka',
            ],
            'card' => [
                'title' => 'NAPS Apprenticeship Support',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-naps.png',
            ],
            'hero' => [
                'label' => 'NAPS Apprenticeship Support',
                'heading' => 'Build future-ready talent through apprenticeship models',
                'content' => 'Mirashka helps companies explore apprenticeship-based workforce models, candidate sourcing, onboarding support and documentation coordination under NAPS-aligned talent development structures.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-naps.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Apprenticeship hiring with compliance coordination',
                'steps' => [
                    [
                        'title' => 'Apprenticeship Need Mapping',
                        'text' => 'Role families, batch size and training outcomes aligned to operations.',
                        'icon' => 'ri-compass-3-line',
                    ],
                    [
                        'title' => 'Candidate Identification',
                        'text' => 'Sourcing young talent with motivation and basic skill fit.',
                        'icon' => 'ri-user-search-line',
                    ],
                    [
                        'title' => 'Documentation Support',
                        'text' => 'Coordination on NAPS-aligned paperwork and onboarding records.',
                        'icon' => 'ri-file-paper-2-line',
                    ],
                    [
                        'title' => 'Training Coordination',
                        'text' => 'Alignment with training partners and workplace induction schedules.',
                        'icon' => 'ri-graduation-cap-line',
                    ],
                    [
                        'title' => 'Reporting Support',
                        'text' => 'Progress tracking and workforce reporting for program sponsors.',
                        'icon' => 'ri-bar-chart-box-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Apprenticeship hiring with compliance coordination',
                'content' => 'Mirashka structures naps apprenticeship support across Apprenticeship Need Mapping, Candidate Identification, Documentation Support, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Explore Apprenticeship Hiring',
                'tabs' => [
                    [
                        'label' => 'Program Design',
                        'heading' => 'Program Design',
                        'content' => 'Map apprenticeship needs to operational roles and batches.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-naps.png',
                    ],
                    [
                        'label' => 'Sourcing',
                        'heading' => 'Sourcing',
                        'content' => 'Identify motivated apprentice candidates at scale.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Documentation',
                        'heading' => 'Documentation',
                        'content' => 'Support NAPS-aligned documentation and onboarding.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                    [
                        'label' => 'Reporting',
                        'heading' => 'Reporting',
                        'content' => 'Training progress and workforce outcome reporting.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-rpo.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Apprentices in workplace training — building tomorrow\'s workforce today',
                'content' => 'Structured apprenticeship support that connects talent development to real business roles.',
                'cta' => 'Explore Apprenticeship Hiring',
                'items' => [
                    [
                        'label' => 'NAPS-aligned documentation support',
                        'icon' => 'ri-file-shield-line',
                    ],
                    [
                        'label' => 'Apprentice candidate sourcing',
                        'icon' => 'ri-user-add-line',
                    ],
                    [
                        'label' => 'Training coordination',
                        'icon' => 'ri-book-open-line',
                    ],
                    [
                        'label' => 'Program reporting',
                        'icon' => 'ri-pie-chart-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'NAPS Apprenticeship Support',
                'title' => 'Apprentices in workplace training — building tomorrow\'s workforce today',
                'content' => 'Structured apprenticeship support that connects talent development to real business roles.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-naps.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Explore Apprenticeship Hiring',
                'secondary' => 'Start Hiring Support',
            ],
        ],
        'it-recruitment' => [
            'meta' => [
                'title' => 'IT Recruitment | Mirashka',
                'description' => 'Specialist hiring for technology roles with focused sourcing, screening and offer support.',
                'keywords' => 'it recruitment, tech hiring, developer recruitment, mirashka',
            ],
            'card' => [
                'title' => 'IT Recruitment',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
            ],
            'hero' => [
                'label' => 'IT Recruitment',
                'heading' => 'Specialist hiring for technology and innovation roles',
                'content' => 'Mirashka helps businesses recruit high-quality technology professionals through focused sourcing, screening, technical evaluation coordination and offer-stage support.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Permanent and specialist tech hiring done right',
                'steps' => [
                    [
                        'title' => 'Tech Hiring Strategy',
                        'text' => 'Channel mix, employer pitch and timeline for hard-to-fill roles.',
                        'icon' => 'ri-lightbulb-line',
                    ],
                    [
                        'title' => 'Sourcing Channels',
                        'text' => 'Networks, platforms and referral paths for niche skills.',
                        'icon' => 'ri-links-line',
                    ],
                    [
                        'title' => 'Screening Process',
                        'text' => 'Structured screens before technical interview coordination.',
                        'icon' => 'ri-filter-line',
                    ],
                    [
                        'title' => 'Interview Coordination',
                        'text' => 'Panel scheduling, feedback loops and candidate experience.',
                        'icon' => 'ri-calendar-check-line',
                    ],
                    [
                        'title' => 'Offer Closure Support',
                        'text' => 'Negotiation support and join-date follow-through.',
                        'icon' => 'ri-handshake-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Permanent and specialist tech hiring done right',
                'content' => 'Mirashka structures it recruitment across Tech Hiring Strategy, Sourcing Channels, Screening Process, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Start IT Recruitment',
                'tabs' => [
                    [
                        'label' => 'Strategy',
                        'heading' => 'Strategy',
                        'content' => 'Hiring plan for critical tech roles and timelines.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
                    ],
                    [
                        'label' => 'Sourcing',
                        'heading' => 'Sourcing',
                        'content' => 'Targeted outreach for niche technology profiles.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Interviews',
                        'heading' => 'Interviews',
                        'content' => 'Coordination and feedback discipline across panels.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Offers',
                        'heading' => 'Offers',
                        'content' => 'Closure support to reduce drop-offs at the finish line.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-staffing.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Tech hiring dashboard — from sourcing to signed offer',
                'content' => 'IT recruitment with the rigor technology leaders expect and the speed growth companies need.',
                'cta' => 'Start IT Recruitment',
                'items' => [
                    [
                        'label' => 'Niche technology sourcing',
                        'icon' => 'ri-search-eye-line',
                    ],
                    [
                        'label' => 'Technical screen coordination',
                        'icon' => 'ri-code-box-line',
                    ],
                    [
                        'label' => 'Interview scheduling desk',
                        'icon' => 'ri-calendar-line',
                    ],
                    [
                        'label' => 'Offer closure support',
                        'icon' => 'ri-check-double-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'IT Recruitment',
                'title' => 'Tech hiring dashboard — from sourcing to signed offer',
                'content' => 'IT recruitment with the rigor technology leaders expect and the speed growth companies need.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Start IT Recruitment',
                'secondary' => 'Hire IT Talent',
            ],
        ],
        'recruitment-process-outsourcing' => [
            'meta' => [
                'title' => 'Recruitment Process Outsourcing (RPO) | Mirashka',
                'description' => 'Your extended recruitment team for full-cycle hiring with dedicated recruiter support.',
                'keywords' => 'rpo, recruitment outsourcing, hiring pipeline, mirashka',
            ],
            'card' => [
                'title' => 'Recruitment Process Outsourcing',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-rpo.png',
            ],
            'hero' => [
                'label' => 'Recruitment Process Outsourcing',
                'heading' => 'Your extended recruitment team for full-cycle hiring',
                'content' => 'Mirashka manages end-to-end recruitment operations including job descriptions, sourcing, screening, interview coordination, candidate communication, tracking and hiring reports.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-rpo.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'RPO that feels in-house — with external scale',
                'steps' => [
                    [
                        'title' => 'RPO Engagement Model',
                        'text' => 'Scope, SLAs, roles in scope and reporting cadence agreed upfront.',
                        'icon' => 'ri-contract-line',
                    ],
                    [
                        'title' => 'Dedicated Recruiter Support',
                        'text' => 'Named recruiters embedded in your hiring rhythm.',
                        'icon' => 'ri-user-star-line',
                    ],
                    [
                        'title' => 'Hiring Pipeline Management',
                        'text' => 'Stage discipline, aging alerts and candidate communication.',
                        'icon' => 'ri-git-branch-line',
                    ],
                    [
                        'title' => 'Interview & Follow-up System',
                        'text' => 'Scheduling, reminders and feedback capture every time.',
                        'icon' => 'ri-calendar-event-line',
                    ],
                    [
                        'title' => 'Weekly Hiring Dashboard',
                        'text' => 'Open roles, funnel metrics and offer pipeline for leadership.',
                        'icon' => 'ri-dashboard-3-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'RPO that feels in-house — with external scale',
                'content' => 'Mirashka structures recruitment process outsourcing across RPO Engagement Model, Dedicated Recruiter Support, Hiring Pipeline Management, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Outsource Recruitment',
                'tabs' => [
                    [
                        'label' => 'Engagement',
                        'heading' => 'Engagement',
                        'content' => 'RPO model tailored to volume, roles and hiring managers.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-rpo.png',
                    ],
                    [
                        'label' => 'Pipeline',
                        'heading' => 'Pipeline',
                        'content' => 'Full-funnel tracking with SLA accountability.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-rpo.png',
                    ],
                    [
                        'label' => 'Coordination',
                        'heading' => 'Coordination',
                        'content' => 'Interview and candidate communication managed end-to-end.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Dashboard',
                        'heading' => 'Dashboard',
                        'content' => 'Weekly hiring command center for leadership.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Recruitment command center — full-cycle hiring visibility',
                'content' => 'RPO that gives you recruiting capacity without building a large internal team overnight.',
                'cta' => 'Outsource Recruitment',
                'items' => [
                    [
                        'label' => 'Dedicated recruiter team',
                        'icon' => 'ri-team-line',
                    ],
                    [
                        'label' => 'JD writing & job marketing',
                        'icon' => 'ri-article-line',
                    ],
                    [
                        'label' => 'Candidate communication desk',
                        'icon' => 'ri-mail-send-line',
                    ],
                    [
                        'label' => 'Weekly hiring dashboard',
                        'icon' => 'ri-bar-chart-grouped-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Recruitment Process Outsourcing',
                'title' => 'Recruitment command center — full-cycle hiring visibility',
                'content' => 'RPO that gives you recruiting capacity without building a large internal team overnight.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-rpo.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Outsource Recruitment',
                'secondary' => 'Start Hiring Support',
            ],
        ],
        'executive-search' => [
            'meta' => [
                'title' => 'Executive Search | Mirashka',
                'description' => 'Leadership hiring for roles that shape the business. Confidential outreach and structured evaluation.',
                'keywords' => 'executive search, senior leadership hiring, c-suite hiring, mirashka',
            ],
            'card' => [
                'title' => 'Executive Search',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-executive-search.png',
            ],
            'hero' => [
                'label' => 'Executive Search',
                'heading' => 'Leadership hiring for roles that shape the business',
                'content' => 'We identify and place senior leaders who can bring strategic direction, operational discipline, cultural alignment and measurable business impact.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-executive-search.png',
            ],
            'process' => [
                'before_title' => 'What We Cover',
                'heading' => 'Confidential search for business-critical leaders',
                'steps' => [
                    [
                        'title' => 'Leadership Mandate Understanding',
                        'text' => 'Strategic outcomes, stakeholder map and success profile.',
                        'icon' => 'ri-focus-3-line',
                    ],
                    [
                        'title' => 'Market Mapping',
                        'text' => 'Target sectors, companies and passive candidate landscapes.',
                        'icon' => 'ri-global-line',
                    ],
                    [
                        'title' => 'Confidential Outreach',
                        'text' => 'Discreet approach to high-caliber leaders not on job boards.',
                        'icon' => 'ri-lock-line',
                    ],
                    [
                        'title' => 'Evaluation & Shortlisting',
                        'text' => 'Structured assessment and board-ready comparison reports.',
                        'icon' => 'ri-file-chart-line',
                    ],
                    [
                        'title' => 'Final Selection Support',
                        'text' => 'References, offer alignment and onboarding transition.',
                        'icon' => 'ri-checkbox-circle-line',
                    ],
                ],
            ],
            'dashboard' => [
                'before_title' => 'Service Focus',
                'heading' => 'Confidential search for business-critical leaders',
                'content' => 'Mirashka structures executive search across Leadership Mandate Understanding, Market Mapping, Confidential Outreach, and more — with practical guidance, documented outputs and progress your leadership team can track.',
                'cta' => 'Begin Executive Search',
                'tabs' => [
                    [
                        'label' => 'Mandate',
                        'heading' => 'Mandate',
                        'content' => 'Define what success looks like for the role and the business.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-executive-search.png',
                    ],
                    [
                        'label' => 'Market',
                        'heading' => 'Market',
                        'content' => 'Mapping and long-list development with confidentiality.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-executive.png',
                    ],
                    [
                        'label' => 'Evaluate',
                        'heading' => 'Evaluate',
                        'content' => 'Assessment and shortlist discipline.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Close',
                        'heading' => 'Close',
                        'content' => 'Selection support through offer and transition.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'Senior leader profile selection — leaders who shape outcomes',
                'content' => 'Executive search for roles where the wrong hire is far costlier than the search investment.',
                'cta' => 'Begin Executive Search',
                'items' => [
                    [
                        'label' => 'Confidential executive outreach',
                        'icon' => 'ri-lock-2-line',
                    ],
                    [
                        'label' => 'Board-ready assessment reports',
                        'icon' => 'ri-file-chart-line',
                    ],
                    [
                        'label' => 'Strategic fit evaluation',
                        'icon' => 'ri-star-line',
                    ],
                    [
                        'label' => 'Transition & onboarding support',
                        'icon' => 'ri-rocket-line',
                    ],
                ],
            ],
            'focus' => [
                'tag' => 'Executive Search',
                'title' => 'Senior leader profile selection — leaders who shape outcomes',
                'content' => 'Executive search for roles where the wrong hire is far costlier than the search investment.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-executive.png',
                'image_position' => 'center center',
            ],
            'page_cta' => [
                'button' => 'Begin Executive Search',
                'secondary' => 'Speak to a Leadership Advisor',
            ],
        ],
    ],
];

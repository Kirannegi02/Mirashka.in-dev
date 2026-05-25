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
                'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
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
                'before_title' => 'In Detail',
                'heading' => 'Technology talent deployed with continuity',
                'content' => 'Explore how Mirashka delivers IT Staffing — with practical guidance, documented outputs and progress your leadership team can track at every step.',
                'cta' => 'Hire IT Talent',
                'tabs' => [
                    [
                        'label' => 'Role Requirement Mapping',
                        'heading' => 'Role Requirement Mapping',
                        'content' => 'Stack, seniority, project context and deployment timeline clarity.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Tech Skill Screening',
                        'heading' => 'Tech Skill Screening',
                        'content' => 'Structured technical screening before client interviews.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
                    ],
                    [
                        'label' => 'Candidate Shortlisting',
                        'heading' => 'Candidate Shortlisting',
                        'content' => 'Curated panels with skill notes and availability.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                    [
                        'label' => 'Deployment Support',
                        'heading' => 'Deployment Support',
                        'content' => 'Joining coordination, documentation and day-one readiness.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Replacement & Continuity',
                        'heading' => 'Replacement & Continuity',
                        'content' => 'Backup and replacement protocols to protect delivery timelines.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-rpo.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'How Mirashka supports you',
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
            'outcome' => [
                'before_title' => 'Outcome',
                'heading' => 'Replacement & Continuity',
                'content' => 'Backup and replacement protocols to protect delivery timelines.',
                'button' => 'Hire IT Talent',
                'secondary' => 'Start Hiring Support',
            ],
            'page_cta' => [
                'button' => 'Hire IT Talent',
                'secondary' => 'Start Hiring Support',
            ],
            'standout' => [
                'before_title' => 'Why Mirashka',
                'heading' => 'Stand Out From The Rest',
                'grid' => [
                    'left_image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
                    'left_card' => [
                        'icon' => 'ri-file-code-line',
                        'title' => 'Role Requirement Mapping',
                        'text' => 'Stack, seniority, project context and deployment timeline clarity.',
                    ],
                    'center' => [
                        'icon' => 'ri-list-check-2',
                        'title' => 'What We Deliver',
                        'text' => 'Structured it staffing with practical guidance and documented outputs your leadership team can track.',
                        'list' => [
                            'Role Requirement Mapping',
                            'Tech Skill Screening',
                            'Candidate Shortlisting',
                            'Deployment Support',
                            'Replacement & Continuity',
                        ],
                        'cta' => 'Hire IT Talent',
                    ],
                    'right_card' => [
                        'icon' => 'ri-refresh-line',
                        'title' => 'Replacement & Continuity',
                        'text' => 'Backup and replacement protocols to protect delivery timelines.',
                    ],
                    'right_image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                ],
            ],
            'experience' => [
                'heading' => 'Skilled technology talent for modern business needs',
                'content' => 'Mirashka supports IT staffing for developers, testers, cloud engineers, data specialists, cybersecurity roles, support engineers and emerging technology profiles.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
                'badge_icon' => 'ri-file-code-line',
                'cta' => 'Hire IT Talent',
                'cta_url' => null,
                'pillars' => [
                    [
                        'num' => '01',
                        'title' => 'Role Requirement Mapping',
                    ],
                    [
                        'num' => '02',
                        'title' => 'Tech Skill Screening',
                    ],
                    [
                        'num' => '03',
                        'title' => 'Candidate Shortlisting',
                    ],
                ],
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
                'before_title' => 'In Detail',
                'heading' => 'Operational hiring with consistent quality',
                'content' => 'Explore how Mirashka delivers General Staffing — with practical guidance, documented outputs and progress your leadership team can track at every step.',
                'cta' => 'Build My Workforce',
                'tabs' => [
                    [
                        'label' => 'Role Understanding',
                        'heading' => 'Role Understanding',
                        'content' => 'KPIs, work environment and manager expectations documented upfront.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
                    ],
                    [
                        'label' => 'Candidate Sourcing',
                        'heading' => 'Candidate Sourcing',
                        'content' => 'Multi-channel sourcing tuned to location and role family.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Screening & Coordination',
                        'heading' => 'Screening & Coordination',
                        'content' => 'Phone screens, coordination and shortlists hiring managers trust.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                    [
                        'label' => 'Joining Support',
                        'heading' => 'Joining Support',
                        'content' => 'Offer follow-up, documentation and day-one communication.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-naps.png',
                    ],
                    [
                        'label' => 'Staffing Reports',
                        'heading' => 'Staffing Reports',
                        'content' => 'Pipeline and fill-rate reporting for operations leadership.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-cta-hiring.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'How Mirashka supports you',
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
                'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                'image_position' => 'center center',
            ],
            'outcome' => [
                'before_title' => 'Outcome',
                'heading' => 'Staffing Reports',
                'content' => 'Pipeline and fill-rate reporting for operations leadership.',
                'button' => 'Build My Workforce',
                'secondary' => 'Start Hiring Support',
            ],
            'page_cta' => [
                'button' => 'Build My Workforce',
                'secondary' => 'Start Hiring Support',
            ],
            'standout' => [
                'before_title' => 'Why Mirashka',
                'heading' => 'Stand Out From The Rest',
                'grid' => [
                    'left_image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    'left_card' => [
                        'icon' => 'ri-file-text-line',
                        'title' => 'Role Understanding',
                        'text' => 'KPIs, work environment and manager expectations documented upfront.',
                    ],
                    'center' => [
                        'icon' => 'ri-list-check-2',
                        'title' => 'What We Deliver',
                        'text' => 'Structured general staffing with practical guidance and documented outputs your leadership team can track.',
                        'list' => [
                            'Role Understanding',
                            'Candidate Sourcing',
                            'Screening & Coordination',
                            'Joining Support',
                            'Staffing Reports',
                        ],
                        'cta' => 'Build My Workforce',
                    ],
                    'right_card' => [
                        'icon' => 'ri-file-chart-line',
                        'title' => 'Staffing Reports',
                        'text' => 'Pipeline and fill-rate reporting for operations leadership.',
                    ],
                    'right_image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                ],
            ],
            'experience' => [
                'heading' => 'Reliable manpower for business operations',
                'content' => 'We support hiring for sales, operations, administration, customer support, field teams, back-office, accounts and other non-technical roles across industries.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-general-staffing.png',
                'badge_icon' => 'ri-file-text-line',
                'cta' => 'Build My Workforce',
                'cta_url' => null,
                'pillars' => [
                    [
                        'num' => '01',
                        'title' => 'Role Understanding',
                    ],
                    [
                        'num' => '02',
                        'title' => 'Candidate Sourcing',
                    ],
                    [
                        'num' => '03',
                        'title' => 'Screening & Coordination',
                    ],
                ],
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
                'before_title' => 'In Detail',
                'heading' => 'Apprenticeship hiring with compliance coordination',
                'content' => 'Explore how Mirashka delivers NAPS Apprenticeship Support — with practical guidance, documented outputs and progress your leadership team can track at every step.',
                'cta' => 'Explore Apprenticeship Hiring',
                'tabs' => [
                    [
                        'label' => 'Apprenticeship Need Mapping',
                        'heading' => 'Apprenticeship Need Mapping',
                        'content' => 'Role families, batch size and training outcomes aligned to operations.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
                    ],
                    [
                        'label' => 'Candidate Identification',
                        'heading' => 'Candidate Identification',
                        'content' => 'Sourcing young talent with motivation and basic skill fit.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Documentation Support',
                        'heading' => 'Documentation Support',
                        'content' => 'Coordination on NAPS-aligned paperwork and onboarding records.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Training Coordination',
                        'heading' => 'Training Coordination',
                        'content' => 'Alignment with training partners and workplace induction schedules.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                    [
                        'label' => 'Reporting Support',
                        'heading' => 'Reporting Support',
                        'content' => 'Progress tracking and workforce reporting for program sponsors.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-general-staffing.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'How Mirashka supports you',
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
                'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                'image_position' => 'center center',
            ],
            'outcome' => [
                'before_title' => 'Outcome',
                'heading' => 'Reporting Support',
                'content' => 'Progress tracking and workforce reporting for program sponsors.',
                'button' => 'Explore Apprenticeship Hiring',
                'secondary' => 'Start Hiring Support',
            ],
            'page_cta' => [
                'button' => 'Explore Apprenticeship Hiring',
                'secondary' => 'Start Hiring Support',
            ],
            'standout' => [
                'before_title' => 'Why Mirashka',
                'heading' => 'Stand Out From The Rest',
                'grid' => [
                    'left_image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    'left_card' => [
                        'icon' => 'ri-compass-3-line',
                        'title' => 'Apprenticeship Need Mapping',
                        'text' => 'Role families, batch size and training outcomes aligned to operations.',
                    ],
                    'center' => [
                        'icon' => 'ri-list-check-2',
                        'title' => 'What We Deliver',
                        'text' => 'Structured naps apprenticeship support with practical guidance and documented outputs your leadership team can track.',
                        'list' => [
                            'Apprenticeship Need Mapping',
                            'Candidate Identification',
                            'Documentation Support',
                            'Training Coordination',
                            'Reporting Support',
                        ],
                        'cta' => 'Explore Apprenticeship Hiring',
                    ],
                    'right_card' => [
                        'icon' => 'ri-bar-chart-box-line',
                        'title' => 'Reporting Support',
                        'text' => 'Progress tracking and workforce reporting for program sponsors.',
                    ],
                    'right_image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                ],
            ],
            'experience' => [
                'heading' => 'Build future-ready talent through apprenticeship models',
                'content' => 'Mirashka helps companies explore apprenticeship-based workforce models, candidate sourcing, onboarding support and documentation coordination under NAPS-aligned talent development structures.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-naps.png',
                'badge_icon' => 'ri-compass-3-line',
                'cta' => 'Explore Apprenticeship Hiring',
                'cta_url' => null,
                'pillars' => [
                    [
                        'num' => '01',
                        'title' => 'Apprenticeship Need Mapping',
                    ],
                    [
                        'num' => '02',
                        'title' => 'Candidate Identification',
                    ],
                    [
                        'num' => '03',
                        'title' => 'Documentation Support',
                    ],
                ],
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
                'before_title' => 'In Detail',
                'heading' => 'Permanent and specialist tech hiring done right',
                'content' => 'Explore how Mirashka delivers IT Recruitment — with practical guidance, documented outputs and progress your leadership team can track at every step.',
                'cta' => 'Start IT Recruitment',
                'tabs' => [
                    [
                        'label' => 'Tech Hiring Strategy',
                        'heading' => 'Tech Hiring Strategy',
                        'content' => 'Channel mix, employer pitch and timeline for hard-to-fill roles.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Sourcing Channels',
                        'heading' => 'Sourcing Channels',
                        'content' => 'Networks, platforms and referral paths for niche skills.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-staffing.png',
                    ],
                    [
                        'label' => 'Screening Process',
                        'heading' => 'Screening Process',
                        'content' => 'Structured screens before technical interview coordination.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Interview Coordination',
                        'heading' => 'Interview Coordination',
                        'content' => 'Panel scheduling, feedback loops and candidate experience.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
                    ],
                    [
                        'label' => 'Offer Closure Support',
                        'heading' => 'Offer Closure Support',
                        'content' => 'Negotiation support and join-date follow-through.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-rpo.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'How Mirashka supports you',
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
                'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                'image_position' => 'center center',
            ],
            'outcome' => [
                'before_title' => 'Outcome',
                'heading' => 'Offer Closure Support',
                'content' => 'Negotiation support and join-date follow-through.',
                'button' => 'Start IT Recruitment',
                'secondary' => 'Hire IT Talent',
            ],
            'page_cta' => [
                'button' => 'Start IT Recruitment',
                'secondary' => 'Hire IT Talent',
            ],
            'standout' => [
                'before_title' => 'Why Mirashka',
                'heading' => 'Stand Out From The Rest',
                'grid' => [
                    'left_image' => 'assets/frontend/img/talent-acquisition/ta-card-it-staffing.png',
                    'left_card' => [
                        'icon' => 'ri-lightbulb-line',
                        'title' => 'Tech Hiring Strategy',
                        'text' => 'Channel mix, employer pitch and timeline for hard-to-fill roles.',
                    ],
                    'center' => [
                        'icon' => 'ri-list-check-2',
                        'title' => 'What We Deliver',
                        'text' => 'Structured it recruitment with practical guidance and documented outputs your leadership team can track.',
                        'list' => [
                            'Tech Hiring Strategy',
                            'Sourcing Channels',
                            'Screening Process',
                            'Interview Coordination',
                            'Offer Closure Support',
                        ],
                        'cta' => 'Start IT Recruitment',
                    ],
                    'right_card' => [
                        'icon' => 'ri-handshake-line',
                        'title' => 'Offer Closure Support',
                        'text' => 'Negotiation support and join-date follow-through.',
                    ],
                    'right_image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                ],
            ],
            'experience' => [
                'heading' => 'Specialist hiring for technology and innovation roles',
                'content' => 'Mirashka helps businesses recruit high-quality technology professionals through focused sourcing, screening, technical evaluation coordination and offer-stage support.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-it-recruitment.png',
                'badge_icon' => 'ri-lightbulb-line',
                'cta' => 'Start IT Recruitment',
                'cta_url' => null,
                'pillars' => [
                    [
                        'num' => '01',
                        'title' => 'Tech Hiring Strategy',
                    ],
                    [
                        'num' => '02',
                        'title' => 'Sourcing Channels',
                    ],
                    [
                        'num' => '03',
                        'title' => 'Screening Process',
                    ],
                ],
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
                'before_title' => 'In Detail',
                'heading' => 'RPO that feels in-house — with external scale',
                'content' => 'Explore how Mirashka delivers Recruitment Process Outsourcing — with practical guidance, documented outputs and progress your leadership team can track at every step.',
                'cta' => 'Outsource Recruitment',
                'tabs' => [
                    [
                        'label' => 'RPO Engagement Model',
                        'heading' => 'RPO Engagement Model',
                        'content' => 'Scope, SLAs, roles in scope and reporting cadence agreed upfront.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
                    ],
                    [
                        'label' => 'Dedicated Recruiter Support',
                        'heading' => 'Dedicated Recruiter Support',
                        'content' => 'Named recruiters embedded in your hiring rhythm.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                    [
                        'label' => 'Hiring Pipeline Management',
                        'heading' => 'Hiring Pipeline Management',
                        'content' => 'Stage discipline, aging alerts and candidate communication.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Interview & Follow-up System',
                        'heading' => 'Interview & Follow-up System',
                        'content' => 'Scheduling, reminders and feedback capture every time.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Weekly Hiring Dashboard',
                        'heading' => 'Weekly Hiring Dashboard',
                        'content' => 'Open roles, funnel metrics and offer pipeline for leadership.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-cta-hiring.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'How Mirashka supports you',
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
            'outcome' => [
                'before_title' => 'Outcome',
                'heading' => 'Weekly Hiring Dashboard',
                'content' => 'Open roles, funnel metrics and offer pipeline for leadership.',
                'button' => 'Outsource Recruitment',
                'secondary' => 'Start Hiring Support',
            ],
            'page_cta' => [
                'button' => 'Outsource Recruitment',
                'secondary' => 'Start Hiring Support',
            ],
            'standout' => [
                'before_title' => 'Why Mirashka',
                'heading' => 'Stand Out From The Rest',
                'grid' => [
                    'left_image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    'left_card' => [
                        'icon' => 'ri-contract-line',
                        'title' => 'RPO Engagement Model',
                        'text' => 'Scope, SLAs, roles in scope and reporting cadence agreed upfront.',
                    ],
                    'center' => [
                        'icon' => 'ri-list-check-2',
                        'title' => 'What We Deliver',
                        'text' => 'Structured recruitment process outsourcing with practical guidance and documented outputs your leadership team can track.',
                        'list' => [
                            'RPO Engagement Model',
                            'Dedicated Recruiter Support',
                            'Hiring Pipeline Management',
                            'Interview & Follow-up System',
                            'Weekly Hiring Dashboard',
                        ],
                        'cta' => 'Outsource Recruitment',
                    ],
                    'right_card' => [
                        'icon' => 'ri-dashboard-3-line',
                        'title' => 'Weekly Hiring Dashboard',
                        'text' => 'Open roles, funnel metrics and offer pipeline for leadership.',
                    ],
                    'right_image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                ],
            ],
            'experience' => [
                'heading' => 'Your extended recruitment team for full-cycle hiring',
                'content' => 'Mirashka manages end-to-end recruitment operations including job descriptions, sourcing, screening, interview coordination, candidate communication, tracking and hiring reports.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-rpo.png',
                'badge_icon' => 'ri-contract-line',
                'cta' => 'Outsource Recruitment',
                'cta_url' => null,
                'pillars' => [
                    [
                        'num' => '01',
                        'title' => 'RPO Engagement Model',
                    ],
                    [
                        'num' => '02',
                        'title' => 'Dedicated Recruiter Support',
                    ],
                    [
                        'num' => '03',
                        'title' => 'Hiring Pipeline Management',
                    ],
                ],
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
                'before_title' => 'In Detail',
                'heading' => 'Confidential search for business-critical leaders',
                'content' => 'Explore how Mirashka delivers Executive Search — with practical guidance, documented outputs and progress your leadership team can track at every step.',
                'cta' => 'Begin Executive Search',
                'tabs' => [
                    [
                        'label' => 'Leadership Mandate Understanding',
                        'heading' => 'Leadership Mandate Understanding',
                        'content' => 'Strategic outcomes, stakeholder map and success profile.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
                    ],
                    [
                        'label' => 'Market Mapping',
                        'heading' => 'Market Mapping',
                        'content' => 'Target sectors, companies and passive candidate landscapes.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-card-executive-search.png',
                    ],
                    [
                        'label' => 'Confidential Outreach',
                        'heading' => 'Confidential Outreach',
                        'content' => 'Discreet approach to high-caliber leaders not on job boards.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                    ],
                    [
                        'label' => 'Evaluation & Shortlisting',
                        'heading' => 'Evaluation & Shortlisting',
                        'content' => 'Structured assessment and board-ready comparison reports.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-deliverable-shortlists.png',
                    ],
                    [
                        'label' => 'Final Selection Support',
                        'heading' => 'Final Selection Support',
                        'content' => 'References, offer alignment and onboarding transition.',
                        'image' => 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
                    ],
                ],
            ],
            'sidebar' => [
                'label' => 'What You Receive',
                'heading' => 'How Mirashka supports you',
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
            'outcome' => [
                'before_title' => 'Outcome',
                'heading' => 'Final Selection Support',
                'content' => 'References, offer alignment and onboarding transition.',
                'button' => 'Begin Executive Search',
                'secondary' => 'Speak to a Leadership Advisor',
            ],
            'page_cta' => [
                'button' => 'Begin Executive Search',
                'secondary' => 'Speak to a Leadership Advisor',
            ],
            'standout' => [
                'before_title' => 'Why Mirashka',
                'heading' => 'Stand Out From The Rest',
                'grid' => [
                    'left_image' => 'assets/frontend/img/talent-acquisition/ta-card-executive-search.png',
                    'left_card' => [
                        'icon' => 'ri-focus-3-line',
                        'title' => 'Leadership Mandate Understanding',
                        'text' => 'Strategic outcomes, stakeholder map and success profile.',
                    ],
                    'center' => [
                        'icon' => 'ri-list-check-2',
                        'title' => 'What We Deliver',
                        'text' => 'Structured executive search with practical guidance and documented outputs your leadership team can track.',
                        'list' => [
                            'Leadership Mandate Understanding',
                            'Market Mapping',
                            'Confidential Outreach',
                            'Evaluation & Shortlisting',
                            'Final Selection Support',
                        ],
                        'cta' => 'Begin Executive Search',
                    ],
                    'right_card' => [
                        'icon' => 'ri-checkbox-circle-line',
                        'title' => 'Final Selection Support',
                        'text' => 'References, offer alignment and onboarding transition.',
                    ],
                    'right_image' => 'assets/frontend/img/talent-acquisition/ta-candidate-quality.png',
                ],
            ],
            'experience' => [
                'heading' => 'Leadership hiring for roles that shape the business',
                'content' => 'We identify and place senior leaders who can bring strategic direction, operational discipline, cultural alignment and measurable business impact.',
                'image' => 'assets/frontend/img/talent-acquisition/ta-card-executive-search.png',
                'badge_icon' => 'ri-focus-3-line',
                'cta' => 'Begin Executive Search',
                'cta_url' => null,
                'pillars' => [
                    [
                        'num' => '01',
                        'title' => 'Leadership Mandate Understanding',
                    ],
                    [
                        'num' => '02',
                        'title' => 'Market Mapping',
                    ],
                    [
                        'num' => '03',
                        'title' => 'Confidential Outreach',
                    ],
                ],
            ],
        ],
    ],
];

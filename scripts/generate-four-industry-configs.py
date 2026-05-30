# -*- coding: utf-8 -*-
"""Generate technology, automobile, industrial-energy, financial-services industry PHP configs."""
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
OUT = ROOT / 'config' / 'industry-categories'


def php_str(s: str) -> str:
    return "'" + s.replace("\\", "\\\\").replace("'", "\\'") + "'"


def php_export(val, indent=1) -> str:
    sp = '    ' * indent
    if isinstance(val, dict):
        if not val:
            return '[]'
        lines = ['[']
        for k, v in val.items():
            key = php_str(k) if not str(k).isdigit() else str(k)
            lines.append(f'{sp}{key} => {php_export(v, indent + 1)},')
        lines.append('    ' * (indent - 1) + ']')
        return '\n'.join(lines)
    if isinstance(val, list):
        if not val:
            return '[]'
        if val and isinstance(val[0], dict):
            lines = ['[']
            for item in val:
                lines.append(f'{sp}{php_export(item, indent + 1)},')
            lines.append('    ' * (indent - 1) + ']')
            return '\n'.join(lines)
        return '[' + ', '.join(php_export(x, 0) for x in val) + ']'
    if isinstance(val, bool):
        return 'true' if val else 'false'
    if val is None:
        return 'null'
    return php_str(str(val))


def build_config(comment: str, data: dict) -> str:
    body = php_export(data, 1)
    return f"""<?php

/**
 * {comment}
 */
return {body};
"""


def card(title, text, icon):
    return {'title': title, 'text': text, 'icon': icon}


def compliance_card(title, text, icon, image, active=None):
    c = {'title': title, 'text': text, 'icon': icon, 'image': image}
    if active:
        c['active'] = True
    return c


def sub_card(title, kicker, subs, desc, cta, href, image, fallback):
    return {
        'title': title,
        'kicker': kicker,
        'subcategories': subs,
        'description': desc,
        'cta': cta,
        'href': href,
        'image': image,
        'image_fallback': fallback,
    }


def use_case(tab_id, tab_label, title, pane, challenge, approach, outcome, image, fallback):
    return {
        'tab_id': tab_id,
        'tab_label': tab_label,
        'title': title,
        'pane_heading': pane,
        'challenge': challenge,
        'approach': approach,
        'outcome': outcome,
        'image': image,
        'image_fallback': fallback,
    }


def faq(q, a):
    return {'question': q, 'answer': a}


def pulse_card(letter, title, subtitle, text, fallback):
    return {
        'letter': letter,
        'title': title,
        'subtitle': subtitle,
        'text': text,
        'image': f'assets/img/{title.lower()}.png' if letter != 'P' else 'assets/img/protect.png',
        'image_fallback': fallback,
    }


# Fix pulse images to match healthcare template
PULSE_IMAGES = {
    'P': ('assets/img/protect.png', 'assets/frontend/img/compliance/cwi-card-policy.png'),
    'U': ('assets/img/unify.png', 'assets/frontend/img/workforce/wfm-card-payroll.png'),
    'L': ('assets/img/lead.png', 'assets/frontend/img/leadership/ldr-board-advisory.png'),
    'S': ('assets/img/source.png', 'assets/frontend/img/talent-acquisition/ta-card-executive-search.png'),
    'E': ('assets/img/empower.png', 'assets/frontend/img/hraas/hraas-card-engagement.png'),
}


def pulse_cards(items):
    cards = []
    for letter, title, subtitle, text in items:
        img, fb = PULSE_IMAGES[letter]
        cards.append({
            'letter': letter,
            'title': title,
            'subtitle': subtitle,
            'text': text,
            'image': img,
            'image_fallback': fb,
        })
    return cards


IMG = {
    'hero': 'assets/frontend/img/Whatwedo/we-build-influence-banner.webp',
    'bg': 'assets/frontend/img/tab-sec-bg.jpg',
    'challenge': 'assets/frontend/img/industries/healthcare-workforce-challenge.webp',
    'risk': 'assets/frontend/img/compliance/cwi-risk.png',
    'meeting': 'assets/frontend/img/compliance/cwi-bento-meeting.png',
    'training': 'assets/frontend/img/compliance/cwi-card-training.png',
    'integrity': 'assets/frontend/img/compliance/cwi-integrity.png',
    'advisor': 'assets/frontend/img/compliance/cwi-bento-advisor.png',
    'services': 'assets/frontend/img/compliance/cwi-services.png',
    'policy': 'assets/frontend/img/compliance/cwi-card-policy.png',
    'payroll': 'assets/frontend/img/workforce/wfm-card-payroll.png',
    'hraas_split': 'assets/frontend/img/hraas/hraas-hero-split.webp',
    'wfm_hands': 'assets/frontend/img/workforce/wfm-reporting-team-hands.png',
    'home_hero': 'assets/frontend/img/home/home-why-mirashka-hero.png',
    'hraas_hero': 'assets/frontend/img/hraas/hraas-v3-hero.png',
    'hraas_partner': 'assets/frontend/img/hraas/hraas-page-partner.png',
    'hiring': 'assets/frontend/img/industries/healthcare-hiring-workforce-strategy.webp',
    'ta_recruit': 'assets/frontend/img/talent-acquisition/ta-services-recruitment.png',
    'compliance_ops': 'assets/frontend/img/industries/healthcare-compliance-documentation-hr-operations.webp',
    'wfm_hero': 'assets/frontend/img/workforce/wfm-hero.png',
    'form': 'assets/frontend/img/industries/industry-form-consultant.webp',
}


def reality_block(name, before, heading, paragraphs, pain_points, cta, alt, icon, center_title):
    left5, right5 = pain_points[:5], pain_points[5:]
    return {
        'section_name': name,
        'before_title': before,
        'label': before,
        'heading': heading,
        'paragraphs': paragraphs,
        'challenges_heading': 'Key Challenges',
        'pain_points': pain_points,
        'cta': cta,
        'cta_href': '#industry-form',
        'section_bg': IMG['bg'],
        'image': IMG['challenge'],
        'image_fallback': IMG['risk'],
        'image_alt': alt,
        'standout': {
            'before_title': before,
            'heading': heading,
            'list_use_fontawesome': True,
            'grid': {
                'left_image': IMG['meeting'],
                'left_image_fallback': IMG['training'],
                'left_card': {'icon': icon, 'title': 'Key Challenges', 'list': left5},
                'center': {
                    'icon': icon,
                    'title': center_title,
                    'paragraphs': paragraphs,
                    'cta': cta,
                    'cta_url': '#industry-form',
                },
                'right_card': {'icon': 'ri-shield-check-line', 'title': 'Key Challenges', 'list': right5},
                'right_image': IMG['integrity'],
                'right_image_fallback': IMG['advisor'],
            },
        },
    }


INDUSTRIES = {}

# --- TECHNOLOGY ---
INDUSTRIES['technology'] = {
    'comment': 'Technology industry category page content.',
    'meta': {
        'title': 'Technology HR Solutions | Software, SaaS & IT | Mirashka',
        'description': 'Mirashka HR solutions for technology — IT recruitment, tech staffing, leadership hiring, HRaaS, remote HR, payroll coordination and employee engagement for SaaS, infrastructure and emerging tech businesses.',
        'keywords': 'technology HR solutions, IT recruitment, tech staffing, SaaS hiring, remote HR, developer recruitment, Mirashka technology',
    },
    'hero': {
        'label': 'Technology HR Solutions',
        'heading': 'People Systems for Fast-Moving Technology Businesses',
        'subheading': [
            'Technology companies need people who can build, solve, scale, support, innovate and adapt continuously.',
            'Mirashka helps technology businesses build stronger HR systems through IT recruitment, tech staffing, leadership hiring, HRaaS, payroll coordination, employee engagement, policy documentation, remote HR support and HR technology solutions.',
            'Whether you are a SaaS startup, software development company, IT infrastructure provider, hardware business, AI company, cybersecurity firm or emerging technology venture, Mirashka works as your extended HR partner to help you hire, manage and retain high-performing teams.',
        ],
        'ctas': [
            {'label': 'Book Technology HR Consultation', 'href': '#industry-form'},
            {'label': 'Request Technology HR Health Check', 'href': '#industry-health-check'},
        ],
        'image': IMG['hero'],
        'image_fallback': IMG['hero'],
    },
}

tech_pain = [
    'Shortage of skilled technical talent',
    'Delayed hiring for critical technology roles',
    'High competition for developers and engineers',
    'Remote and hybrid workforce complexity',
    'Salary benchmarking challenges',
    'Attrition in technology teams',
    'Weak onboarding for technical roles',
    'Leadership gaps in product, engineering and delivery',
    'Project-based staffing pressure',
    'Need for HR systems that scale with growth',
]
tech_paras = [
    'Technology businesses move fast, but hiring often becomes the bottleneck. Product timelines, client delivery, platform stability, support quality and innovation depend on having the right people in the right roles at the right time.',
    'The technology sector faces skill shortages, salary competition, remote team complexity, leadership gaps, project-based hiring pressure, retention challenges and constant need for upskilling.',
    'Mirashka understands that technology HR is not only about filling technical positions. It is about building scalable, agile and performance-oriented people systems.',
]

INDUSTRIES['technology'].update({
    'reality': reality_block(
        'Technology HR Reality',
        'The Technology Talent Challenge',
        'In technology, the right talent can accelerate or delay growth',
        tech_paras,
        tech_pain,
        'Discuss Technology Workforce Challenges',
        'Product delivery pressure and technology hiring pipeline dashboard',
        'ri-cpu-line',
        'Why Technology Workforce Management Is Different',
    ),
    'sub_industries': {
        'label': 'Technology Segments',
        'heading': 'HR solutions for every major technology business model',
        'content': 'Technology is not one workforce model. A SaaS company, hardware company and AI startup need different hiring methods, skill evaluation, team structures and leadership systems. Mirashka builds HR solutions according to the technology business model.',
        'kicker': 'Technology',
        'section_bg': IMG['bg'],
        'cta': 'Speak to a Technology HR Advisor',
        'cta_href': '#industry-form',
        'cards': [
            sub_card(
                'Software & SaaS', 'Technology',
                ['Software developers', 'Frontend engineers', 'Backend engineers', 'Full-stack developers', 'Product managers', 'QA engineers', 'DevOps engineers', 'UI/UX designers', 'Customer success teams', 'Sales teams', 'Technology leaders'],
                'For software companies, SaaS platforms, product startups, web application businesses and digital product companies, Mirashka supports developer hiring, product roles, sales hiring, customer success hiring, HRaaS, leadership hiring and employee engagement.',
                'Explore Software & SaaS HR Solutions', '#software-saas', IMG['meeting'], IMG['services'],
            ),
            sub_card(
                'Hardware & Infrastructure', 'Technology',
                ['Network engineers', 'System administrators', 'Field engineers', 'Infrastructure sales executives', 'Project managers', 'Cloud engineers', 'Support engineers', 'Presales consultants', 'Service teams', 'Business leaders'],
                'For IT infrastructure companies, hardware providers, networking businesses, system integrators, cloud infrastructure providers and data centre solution companies, Mirashka supports technical hiring, field teams, project teams, sales teams, service engineers and leadership roles.',
                'Explore Hardware & Infrastructure HR Solutions', '#hardware-infrastructure', IMG['hraas_split'], IMG['integrity'],
            ),
            sub_card(
                'Emerging Technologies', 'Technology',
                ['AI engineers', 'Data scientists', 'Cybersecurity analysts', 'Automation engineers', 'IoT specialists', 'Machine learning engineers', 'Cloud security professionals', 'Product innovators', 'Research teams', 'Emerging technology leaders'],
                'For AI, cybersecurity, IoT, blockchain, automation, robotics, data analytics and next-generation technology ventures, Mirashka supports specialist hiring, leadership search, remote team management, HRaaS and scalable people systems.',
                'Explore Emerging Technologies HR Solutions', '#emerging-technologies', IMG['wfm_hands'], IMG['advisor'],
            ),
        ],
    },
    'pulse': {
        'label': 'PULSE for Technology',
        'heading': 'A technology-ready people framework for hiring speed, skill quality and scalable growth',
        'content': 'Mirashka applies its PULSE Framework to technology businesses by connecting compliance, workforce operations, leadership hiring, tech recruitment and HRaaS into one agile people system.',
        'cards': pulse_cards([
            ('P', 'Protect', 'Compliance & Workplace Integrity', 'Protect technology businesses through employee documentation, IP and confidentiality guidelines, HR policies, workplace ethics, POSH readiness and compliance discipline.'),
            ('U', 'Unify', 'Workforce Management', 'Unify onboarding, payroll inputs, remote employee records, role documentation, attendance, performance communication and HR reporting.'),
            ('L', 'Lead', 'Leadership & Organizational Excellence', 'Build leadership capability through CTO, product, engineering, delivery, sales, operations and business leadership hiring.'),
            ('S', 'Source', 'Talent Acquisition & Staffing', 'Source technology talent across software, cloud, infrastructure, support, cybersecurity, AI, product, sales and leadership roles.'),
            ('E', 'Empower', 'HR as a Service', 'Empower technology businesses with HR outsourcing, employer branding, engagement, retention strategy, HR technology and remote HR support.'),
        ]),
        'cta': {'label': 'Apply PULSE to My Technology Business', 'href': '#industry-form'},
    },
    'services': {
        'label': 'What Mirashka Delivers',
        'heading': 'Complete HR support for technology companies that need speed without losing structure',
        'image': IMG['home_hero'],
        'image_fallback': IMG['hraas_hero'],
        'image_secondary': IMG['services'],
        'image_secondary_fallback': IMG['hraas_partner'],
        'cards': [
            card('IT Recruitment', 'Hiring support for developers, engineers, QA, DevOps, cloud, cybersecurity, data, product and technical roles.', 'ri-code-s-slash-line'),
            card('Tech Staffing', 'Flexible staffing for project teams, field engineers, support teams, contract roles and specialized technology assignments.', 'ri-cpu-line'),
            card('Leadership Hiring', 'Hiring support for CTOs, technology heads, product heads, engineering managers, delivery heads, sales leaders and CXO roles.', 'ri-user-star-line'),
            card('HRaaS & HR Outsourcing', 'Dedicated HR support for technology companies that need professional HR execution without building a large internal HR team.', 'ri-customer-service-2-line'),
            card('Remote HR Solutions', 'Support for remote onboarding, employee records, engagement, documentation, reporting and distributed workforce coordination.', 'ri-global-line'),
            card('Payroll & Workforce Administration', 'Payroll input coordination, attendance records, reimbursement tracking, salary change data and employee lifecycle documentation.', 'ri-money-dollar-circle-line'),
            card('Policy & Documentation Support', 'Employee handbooks, offer letters, appointment letters, IP guidelines, confidentiality clauses, code of conduct and HR policies.', 'ri-file-list-3-line'),
            card('Employee Engagement & Retention', 'Employee surveys, retention plans, performance communication, tech team engagement and culture-building support.', 'ri-emotion-happy-line'),
            card('Employer Branding', 'Positioning support to make technology companies more attractive to developers, engineers and specialist talent.', 'ri-megaphone-line'),
            card('HR Technology & Reporting', 'Dashboards for hiring, employee records, onboarding, payroll, attrition, engagement, performance and HR actions.', 'ri-computer-line'),
        ],
        'cta': {'label': 'Explore Technology HR Services', 'href': 'whatwedo'},
    },
})

def hiring_strategy(label, heading, intro, groups, cta_label, alt, secondary_alt):
    return {
        'section_id': 'industry-hiring-strategy',
        'label': label,
        'heading': heading,
        'intro': intro,
        'groups': groups,
        'image': IMG['hiring'],
        'image_fallback': IMG['ta_recruit'],
        'image_alt': alt,
        'image_secondary': IMG['challenge'],
        'image_secondary_fallback': IMG['hraas_hero'],
        'image_secondary_alt': secondary_alt,
        'cta': {'label': cta_label, 'href': '#industry-form'},
    }


def tail(lead_type, segments, services, submit, consult_label, faq_heading, faqs, blog_cta,
         health_heading, health_content, health_covers, health_cta,
         form_heading, form_content,
         hiring, compliance, use_cases):
    return {
        'hiring_strategy': hiring,
        'compliance': compliance,
        'use_cases': use_cases,
        'health_check': {
            'label': 'Start With Diagnosis',
            'heading': health_heading,
            'content': health_content,
            'covers': health_covers,
            'output': 'A practical HR improvement roadmap with risk areas, priority actions and recommended Mirashka service plan.',
            'cta': {'label': health_cta, 'href': '#industry-form'},
            'image': IMG['meeting'],
            'image_fallback': IMG['hraas_hero'],
        },
        'form': {
            'label': 'Talk to Mirashka',
            'heading': form_heading,
            'content': form_content,
            'lead_type': lead_type,
            'segments': segments,
            'services': services,
            'submit': submit,
            'secondary_cta': {'label': consult_label, 'href': 'https://calendly.com/elevateonemedia/30min'},
            'image': IMG['advisor'],
            'image_fallback': IMG['hraas_partner'],
        },
        'faq_blog': {
            'label': 'Learn More',
            'heading': faq_heading,
            'faqs': faqs,
            'blogs': [],
            'cta': {'label': blog_cta, 'href': '/blog'},
            'image': IMG['form'],
            'image_fallback': IMG['advisor'],
        },
    }


INDUSTRIES['technology'].update(tail(
    'technology_hr_enquiry',
    ['Software & SaaS', 'Hardware & Infrastructure', 'Emerging Technologies', 'IT Services', 'System Integration', 'Cybersecurity', 'Cloud Services', 'AI / Data / Automation', 'Other Technology Business'],
    ['IT Recruitment', 'Tech Staffing', 'Leadership Hiring', 'HRaaS / HR Outsourcing', 'Payroll Support', 'Policy Documentation', 'Remote HR Support', 'Employee Engagement', 'Employer Branding', 'HR Technology', 'Not Sure — Need Consultation'],
    'Submit Technology HR Enquiry',
    'Book 30-Minute Technology HR Consultation',
    'Technology HR questions answered',
    [
        faq('What technology roles can Mirashka help hire for?', 'Mirashka can support hiring for developers, QA engineers, DevOps engineers, cloud engineers, infrastructure professionals, cybersecurity talent, product roles, sales teams and leadership roles.'),
        faq('Can Mirashka support IT staffing for project-based requirements?', 'Yes. Mirashka can support staffing for project teams, field engineers, support teams, contract roles and specialized technology assignments.'),
        faq('Does Mirashka provide HRaaS for technology startups?', 'Yes. Mirashka HRaaS is suitable for SaaS startups, software firms, IT services companies, product companies and emerging technology ventures.'),
        faq('Can Mirashka help with remote team HR management?', 'Yes. Mirashka can support remote onboarding, employee records, policy documentation, engagement, payroll coordination and HR reporting.'),
        faq('Can Mirashka support technology leadership hiring?', 'Yes. Mirashka supports leadership hiring for CTO, product head, engineering head, delivery head, sales head, operations head and CXO roles.'),
    ],
    'Read Technology HR Insights',
    'How ready is your technology HR system for scale?',
    'Mirashka\'s Technology HR Health Check helps software companies, SaaS startups, infrastructure businesses and emerging technology ventures identify gaps in hiring, onboarding, documentation, payroll, employee engagement, leadership and HR technology.',
    ['Hiring process quality', 'Role clarity and KRAs', 'Technology stack hiring gaps', 'Onboarding process', 'Employee documentation', 'Remote work policy readiness', 'Payroll and reimbursement process', 'IP and confidentiality documentation', 'POSH and workplace ethics readiness', 'Attrition and retention risk', 'Leadership gap assessment', 'HR technology readiness', 'Reporting and dashboard maturity'],
    'Request Technology HR Health Check',
    'Build a stronger technology workforce with Mirashka',
    'Share your technology HR requirement. Mirashka will help identify whether you need IT recruitment, tech staffing, HRaaS, payroll coordination, leadership hiring, employee engagement, HR documentation or a complete people operating model.',
    hiring_strategy('Talent Strategy', 'Technology hiring needs skill-fit, culture-fit, delivery-fit and growth-fit',
        ['Technology hiring cannot be handled through keyword matching alone. A developer must fit the stack and the delivery culture. A DevOps engineer must understand uptime and responsibility. A product manager must think in users and business outcomes. A technology leader must balance innovation, execution and people management.',
         'Mirashka helps technology companies define the role before sourcing. We map technology stack, project stage, experience level, business model, reporting structure, salary range, remote working expectations, delivery responsibility and long-term growth fit.'],
        [{'title': 'Hiring Strategy Includes', 'items': ['Role and KRA definition', 'Technology stack mapping', 'Experience and project exposure mapping', 'Candidate sourcing strategy', 'Screening and shortlisting', 'Technical evaluation coordination', 'Culture and communication fit review', 'Salary and expectation alignment', 'Offer and joining support', 'Weekly hiring dashboard']},
         {'title': 'Workforce Strategy Includes', 'items': ['Project-wise manpower planning', 'Remote and hybrid team coordination', 'Onboarding documentation', 'Employee lifecycle management', 'Retention and engagement planning', 'Performance review formats', 'HR reporting structure', 'Leadership and succession planning']}],
        'Build My Technology Talent Pipeline',
        'Technology hiring funnel with filters: Skill Fit, Stack Fit, Culture Fit, Delivery Fit and Growth Fit',
        'Technology workforce planning and structured hiring support'),
    {'label': 'Compliance & HR Operations', 'heading': 'Build HR discipline for teams that create intellectual value',
     'intro': ['Technology companies need structured employment documentation, confidentiality clauses, intellectual property guidelines, remote work policies, attendance systems, payroll records, performance frameworks and exit documentation.',
               'Mirashka helps technology businesses create HR operations that protect the organization, support employees and give leadership better visibility.'],
     'image': IMG['compliance_ops'], 'image_fallback': IMG['policy'], 'image_alt': 'Technology employee file, IP policy document and HR handbook visual',
     'cta': 'Request Technology HR Documentation Review', 'cta_href': '#industry-form',
     'cards': [
         compliance_card('Employee Documentation', 'Offer letters, appointment letters, joining forms, employee records, ID proofs, qualification details, experience records and employment files.', 'ri-file-list-3-line', IMG['policy']),
         compliance_card('IP & Confidentiality Guidelines', 'Confidentiality clauses, IP ownership references, data access expectations, device usage guidelines and exit handover process.', 'ri-lock-line', IMG['meeting'], True),
         compliance_card('Policy Framework', 'Leave policy, remote work policy, attendance policy, reimbursement policy, code of conduct, workplace behavior guidelines and escalation process.', 'ri-book-2-line', IMG['risk']),
         compliance_card('Payroll & Workforce Administration', 'Attendance inputs, salary changes, reimbursements, incentive inputs, freelance or contract coordination and payroll communication.', 'ri-money-dollar-circle-line', IMG['payroll'], True),
         compliance_card('HR Audit & Risk Review', 'Review of employee records, documentation gaps, policy readiness, POSH compliance, exit process and HR operating discipline.', 'ri-search-eye-line', IMG['integrity']),
         compliance_card('Exit Management', 'Resignation documentation, project handover, access revocation checklist, device return, full and final coordination and exit feedback.', 'ri-logout-box-r-line', IMG['services'], True),
     ]},
    {'label': 'Technology HR Support in Action', 'heading': 'Practical people solutions for technology workforce challenges',
     'tags': ['Faster Hiring', 'Better Stack Fit', 'Stronger HR Structure', 'Leadership Readiness'],
     'cards': [
         use_case('saas-dev', 'SaaS', 'Case Study 1: Developer Hiring for a SaaS Product Team', 'Technology stack mapping and weekly hiring dashboard for product teams.',
                  'A SaaS company needed developers urgently but was receiving irrelevant profiles.',
                  'Mapped the technology stack, defined role expectations, improved sourcing filters and created a weekly hiring dashboard.',
                  'Better candidate relevance, faster shortlisting and improved hiring visibility.', IMG['ta_recruit'], IMG['meeting']),
         use_case('infra-field', 'Infrastructure', 'Case Study 2: IT Infrastructure Field Team Hiring', 'Location-wise hiring plan for engineers and support professionals.',
                  'An infrastructure business needed engineers and support professionals across multiple locations.',
                  'Created location-wise hiring plan, technical screening checklist, interview coordination process and joining tracker.',
                  'Improved field team readiness and stronger manpower visibility.', IMG['advisor'], IMG['ta_recruit']),
         use_case('startup-hraas', 'HRaaS', 'Case Study 3: HRaaS for a Lean Technology Startup', 'Documentation, onboarding and employee records without a full internal HR team.',
                  'A growing tech startup needed HR structure but could not build a full internal HR department.',
                  'Provided HRaaS support, created documentation, onboarding process, employee records and engagement rhythm.',
                  'Cleaner HR operations, stronger employee experience and reduced founder dependency.', IMG['wfm_hero'], IMG['services']),
         use_case('tech-leadership', 'Leadership', 'Case Study 4: Leadership Hiring for Technology Expansion', 'Senior leader for product, engineering or delivery scale.',
                  'A technology company needed a senior leader to manage product, engineering or delivery scale.',
                  'Defined leadership mandate, mapped relevant talent, evaluated business fit and supported interview discussions.',
                  'Improved leadership alignment and stronger growth readiness.', IMG['policy'], IMG['integrity']),
     ], 'cta': {'label': 'Discuss a Similar Technology Case', 'href': '#industry-form'}},
))

# --- AUTOMOBILE ---
auto_pain = ['Shortage of skilled automobile technicians', 'High attrition in sales and service roles', 'Workshop and service team coordination issues', 'Need for trained accessories installation teams', 'Payroll and incentive coordination complexity', 'Weak onboarding and training discipline', 'Customer-facing communication gaps', 'Attendance and shift tracking challenges', 'Multi-location dealership or service network management', 'Leadership gaps in showroom, service and operations teams']
auto_paras = ['Automobile businesses operate in a highly customer-sensitive environment. A poorly trained technician, delayed service advisor, weak sales consultant, careless installation executive or unstructured workshop team can affect customer satisfaction, repeat business and brand reputation.', 'The automobile sector needs people who are technically skilled, process-oriented, disciplined, presentable and customer-focused. HR must support hiring, onboarding, payroll, attendance, documentation, training, retention and performance clarity.', 'Mirashka understands that automobile HR is not only about filling vacancies. It is about building a service-ready, sales-ready and customer-ready workforce.']

INDUSTRIES['automobile'] = {
    'comment': 'Automobile industry category page content.',
    'meta': {'title': 'Automobile HR Solutions | Accessories, Services & Dealerships | Mirashka', 'description': 'Mirashka HR solutions for automobile — technician hiring, service advisor recruitment, dealership sales staffing, HRaaS, payroll coordination and leadership hiring for accessories, service and mobility businesses.', 'keywords': 'automobile HR solutions, car service staffing, dealership hiring, automobile technician recruitment, Mirashka automobile'},
    'hero': {'label': 'Automobile HR Solutions', 'heading': 'People Systems for Automobile Sales, Service and Mobility Growth', 'subheading': ['Automobile businesses need people who can sell with trust, service with skill, manage customers with care and execute operations with discipline.', 'Mirashka helps automobile companies build structured HR systems through technician hiring, service advisor recruitment, sales staffing, accessories team hiring, payroll coordination, HRaaS, compliance documentation, employee engagement and leadership hiring.', 'Whether you operate an automobile accessories business, detailing studio, car service centre, dealership, mobility company, workshop chain or automotive retail business, Mirashka helps you build a workforce that supports growth, service quality and customer trust.'], 'ctas': [{'label': 'Book Automobile HR Consultation', 'href': '#industry-form'}, {'label': 'Request Automobile HR Health Check', 'href': '#industry-health-check'}], 'image': IMG['hero'], 'image_fallback': IMG['hero']},
    'reality': reality_block('Automobile HR Reality', 'The Automobile Workforce Challenge', 'In automobile businesses, people decide the customer\'s trust before the vehicle moves', auto_paras, auto_pain, 'Discuss Automobile Workforce Challenges', 'Automobile workshop and HR dashboard for manpower, training and payroll', 'ri-car-line', 'Why Automobile Workforce Management Is Different'),
    'sub_industries': {'label': 'Automobile Segments', 'heading': 'HR solutions for every major automobile business model', 'content': 'Automobile accessories, service businesses and dealerships operate differently. An accessories business needs installation and product knowledge. A service centre needs technicians and service advisors. A dealership needs sales, CRM, finance, insurance, delivery and operations teams. Mirashka builds HR solutions according to each business model.', 'kicker': 'Automobile', 'section_bg': IMG['bg'], 'cta': 'Speak to an Automobile HR Advisor', 'cta_href': '#industry-form', 'cards': [
        sub_card('Automobile Accessories', 'Automobile', ['Accessories sales executives', 'Fitment technicians', 'Installation specialists', 'Store managers', 'Inventory executives', 'Product advisors', 'Customer support teams', 'Channel sales executives', 'Business leaders'], 'For automobile accessories brands, car accessory retailers, fitment centres, car audio businesses, aftermarket product companies and accessories distributors, Mirashka supports sales hiring, installation technician hiring, store staffing, customer support, payroll coordination and leadership hiring.', 'Explore Automobile Accessories HR Solutions', '#automobile-accessories', IMG['meeting'], IMG['services']),
        sub_card('Automobile Services', 'Automobile', ['Service advisors', 'Automobile technicians', 'Detailing professionals', 'PPF installers', 'Ceramic coating experts', 'Washing staff', 'Workshop supervisors', 'Quality controllers', 'Customer care executives', 'Operations managers'], 'For car service centres, detailing studios, car care businesses, workshop chains, PPF and coating studios, repair workshops and maintenance businesses, Mirashka supports technician hiring, service advisor recruitment, detailing staff hiring, payroll coordination, HRaaS and operations leadership hiring.', 'Explore Automobile Services HR Solutions', '#automobile-services', IMG['hraas_split'], IMG['integrity']),
        sub_card('Automobile Dealerships & Mobility', 'Automobile', ['Sales consultants', 'Team leaders', 'CRM executives', 'Finance executives', 'Insurance executives', 'Delivery coordinators', 'Showroom managers', 'Fleet coordinators', 'Operations managers', 'Business heads'], 'For automobile dealerships, EV dealerships, used car businesses, mobility companies, fleet operators, leasing businesses and automotive retail groups, Mirashka supports sales teams, CRM, finance and insurance roles, delivery teams, operations staffing and leadership hiring.', 'Explore Automobile Dealerships & Mobility HR Solutions', '#automobile-dealerships-mobility', IMG['wfm_hands'], IMG['advisor']),
    ]},
    'pulse': {'label': 'PULSE for Automobile', 'heading': 'A people framework for technical skill, customer trust and operational scale', 'content': 'Mirashka applies its PULSE Framework to automobile businesses by connecting workforce discipline, HR operations, leadership hiring, technical staffing and HRaaS into one practical people system.', 'cards': pulse_cards([('P', 'Protect', 'Compliance & Workplace Integrity', 'Protect automobile businesses through employee documentation, workplace policies, POSH readiness, workshop conduct guidelines, customer handling standards and HR audits.'), ('U', 'Unify', 'Workforce Management', 'Unify payroll inputs, attendance records, shift data, employee files, onboarding, exits, workshop records, showroom records and HR reporting.'), ('L', 'Lead', 'Leadership & Organizational Excellence', 'Build leadership capability through showroom leaders, service heads, workshop managers, operations heads, sales heads and business leaders.'), ('S', 'Source', 'Talent Acquisition & Staffing', 'Source technicians, service advisors, sales consultants, accessories fitment teams, detailing professionals, CRM teams and leadership talent.'), ('E', 'Empower', 'HR as a Service', 'Empower automobile businesses with HR outsourcing, employee engagement, retention systems, employer branding, performance communication and HR technology.')]), 'cta': {'label': 'Apply PULSE to My Automobile Business', 'href': '#industry-form'}},
    'services': {'label': 'What Mirashka Delivers', 'heading': 'Complete HR support for automobile businesses that need skilled teams and customer-ready execution', 'image': IMG['home_hero'], 'image_fallback': IMG['hraas_hero'], 'image_secondary': IMG['services'], 'image_secondary_fallback': IMG['hraas_partner'], 'cards': [card('Automobile Technician Hiring', 'Hiring support for mechanics, service technicians, electrical technicians, diagnostic technicians and workshop staff.', 'ri-tools-line'), card('Service Advisor Recruitment', 'Recruitment for service advisors, customer care executives, workshop coordinators and service reception teams.', 'ri-customer-service-line'), card('Accessories & Fitment Team Hiring', 'Hiring support for accessories sales executives, fitment technicians, installation experts, product advisors and store teams.', 'ri-store-2-line'), card('Detailing & Car Care Staffing', 'Hiring support for car wash teams, detailing professionals, PPF installers, coating experts, polishers and quality controllers.', 'ri-drop-line'), card('Dealership Sales Hiring', 'Recruitment for sales consultants, team leaders, showroom executives, CRM teams, finance executives and insurance executives.', 'ri-car-line'), card('Operations & Workshop Leadership Hiring', 'Search support for workshop managers, showroom managers, operations heads, service heads, sales heads and business leaders.', 'ri-user-star-line'), card('HRaaS & HR Outsourcing', 'Dedicated HR support for automobile businesses that need structured HR execution without building a large internal HR department.', 'ri-customer-service-2-line'), card('Payroll, Attendance & Incentive Coordination', 'Attendance inputs, shift records, overtime data, incentives, commissions, salary changes, deductions and payroll communication.', 'ri-money-dollar-circle-line'), card('Policy, Documentation & HR Audits', 'Employee handbooks, appointment letters, workshop conduct guidelines, customer handling standards, exit documents, HR audits and compliance checklists.', 'ri-file-list-3-line'), card('HR Technology & Reporting', 'Dashboards for hiring, attendance, payroll, training, employee records, workshop manpower, sales teams, attrition and HR action plans.', 'ri-computer-line')], 'cta': {'label': 'Explore Automobile HR Services', 'href': 'whatwedo'}},
}
INDUSTRIES['automobile'].update(tail('automobile_hr_enquiry', ['Automobile Accessories', 'Automobile Services', 'Automobile Dealerships & Mobility', 'Car Care / Detailing Studio', 'EV Dealership', 'Used Car Business', 'Workshop Chain', 'Automotive Retail Business', 'Other Automobile Business'], ['Technician Hiring', 'Service Advisor Hiring', 'Accessories Team Hiring', 'Detailing / PPF / Coating Staff Hiring', 'Dealership Sales Hiring', 'CRM / Customer Support Hiring', 'Workshop / Operations Leadership Hiring', 'HRaaS / HR Outsourcing', 'Payroll & Incentive Coordination', 'Policy Documentation', 'Training Records & HR Reporting', 'Employee Engagement', 'HR Technology', 'Not Sure — Need Consultation'], 'Submit Automobile HR Enquiry', 'Book 30-Minute Automobile HR Consultation', 'Automobile HR questions answered', [faq('What automobile roles can Mirashka help hire for?', 'Mirashka can support hiring for technicians, service advisors, sales consultants, accessories fitment teams, detailing professionals, CRM executives, workshop managers, showroom managers and leadership roles.'), faq('Can Mirashka support hiring for car care and detailing businesses?', 'Yes. Mirashka can support hiring for detailers, PPF installers, coating experts, washing teams, quality controllers, service advisors and studio managers.'), faq('Can Mirashka help with dealership sales hiring?', 'Yes. Mirashka can support hiring for sales consultants, team leaders, CRM executives, finance executives, insurance executives, delivery coordinators and showroom managers.'), faq('Does Mirashka provide HRaaS for automobile businesses?', 'Yes. Mirashka HRaaS is suitable for accessories businesses, service centres, dealerships, detailing studios, workshop chains and mobility companies.'), faq('Can Mirashka help with payroll and incentive coordination?', 'Yes. Mirashka can support attendance inputs, salary data, incentives, commissions, overtime, deductions, reimbursements and payroll communication.')], 'Read Automobile HR Insights', 'How ready is your automobile HR system for growth?', 'Mirashka\'s Automobile HR Health Check helps accessories businesses, service centres, detailing studios, dealerships, mobility companies and workshop chains identify gaps in hiring, payroll, attendance, documentation, employee engagement, training, leadership and HR technology.', ['Hiring process quality', 'Role clarity and KRAs', 'Technician and service team gaps', 'Showroom or workshop manpower gaps', 'Attendance and shift process', 'Payroll and incentive input discipline', 'Employee documentation', 'Training and skill record readiness', 'POSH and workplace ethics readiness', 'Attrition and retention risk', 'Customer-facing behavior standards', 'Leadership gap assessment', 'HR technology readiness', 'Reporting and dashboard maturity'], 'Request Automobile HR Health Check', 'Build a stronger automobile workforce with Mirashka', 'Share your automobile HR requirement. Mirashka will help identify whether you need technician hiring, service advisor recruitment, accessories staffing, dealership sales hiring, HRaaS, payroll coordination, documentation, employee engagement or a complete people operating model.', hiring_strategy('Workforce Strategy', 'Automobile hiring needs skill-fit, service-fit, sales-fit and reliability-fit', ['Automobile roles are highly practical and customer-facing. A technician must diagnose accurately. A service advisor must communicate clearly. A sales consultant must build trust. A detailing professional must work with precision. A workshop manager must control people, quality, timelines and customer experience.', 'Mirashka helps automobile businesses define workforce needs before sourcing. We map role expectations, technical skill, customer interaction level, showroom or workshop requirement, location needs, salary range, incentive structure, training needs and retention risk.'], [{'title': 'Hiring Strategy Includes', 'items': ['Role and KRA definition', 'Location-wise manpower planning', 'Workshop or showroom team mapping', 'Candidate sourcing and screening', 'Technical skill and service-fit review', 'Customer communication-fit review', 'Interview coordination', 'Salary and incentive alignment', 'Joining and documentation checklist', 'Weekly hiring dashboard']}, {'title': 'Workforce Strategy Includes', 'items': ['Workshop manpower planning', 'Service bay and technician mapping', 'Showroom staffing structure', 'Attendance and shift coordination', 'Incentive and commission tracking support', 'Training and onboarding support', 'Attrition tracking', 'Performance communication rhythm', 'Monthly HR reporting']}], 'Build My Automobile Talent Pipeline', 'Automobile hiring funnel with filters: Technical Fit, Service Fit, Sales Fit, Customer Fit and Retention Fit', 'Automobile workforce planning and structured hiring support'), {'label': 'HR Operations', 'heading': 'Create people discipline across workshops, showrooms, studios and service teams', 'intro': ['Automobile businesses often operate through workshops, service bays, showrooms, accessories stores, detailing studios, field teams and customer support desks. This creates the need for structured attendance, payroll inputs, incentives, employee documentation, onboarding, training records and exit processes.', 'Mirashka helps automobile businesses create HR operating systems that improve workforce visibility, reduce confusion and support consistent customer experience.'], 'image': IMG['compliance_ops'], 'image_fallback': IMG['policy'], 'image_alt': 'Automobile employee file, attendance dashboard and workshop conduct handbook visual', 'cta': 'Request Automobile HR Documentation Review', 'cta_href': '#industry-form', 'cards': [compliance_card('Employee Documentation', 'Appointment letters, joining forms, ID proofs, qualification records, experience records, skill records and employee files.', 'ri-file-list-3-line', IMG['policy']), compliance_card('Attendance & Shift Process', 'Shift rosters, attendance inputs, weekly offs, late marks, overtime, leave records and manager approvals.', 'ri-calendar-check-line', IMG['meeting'], True), compliance_card('Workshop & Showroom Conduct Guidelines', 'Customer handling standards, uniform rules, service discipline, tool usage, vehicle handling process, escalation protocol and workplace behavior guidelines.', 'ri-book-2-line', IMG['risk']), compliance_card('Incentive & Payroll Coordination', 'Salary inputs, attendance data, incentives, commissions, overtime, deductions, reimbursements and payroll communication.', 'ri-money-dollar-circle-line', IMG['payroll'], True), compliance_card('Training & Skill Records', 'Technician training records, product training, service advisor training, detailing process training, SOP acknowledgement and performance improvement tracking.', 'ri-graduation-cap-line', IMG['integrity']), compliance_card('Exit Management', 'Resignation documentation, tool or asset return, customer handover, clearance checklist, full and final coordination and exit feedback.', 'ri-logout-box-r-line', IMG['services'], True)]}, {'label': 'Automobile HR Support in Action', 'heading': 'Practical people solutions for automobile growth challenges', 'tags': ['Skilled Technicians', 'Better Service', 'Stronger Sales', 'Cleaner Payroll'], 'cards': [use_case('tech-hiring', 'Technicians', 'Case Study 1: Technician Hiring for Service Centre Expansion', 'Workshop-wise manpower plan and technical screening for service expansion.', 'An automobile service business needed skilled technicians, service advisors and workshop support staff for expansion.', 'Created workshop-wise manpower plan, technical screening checklist, sourcing process and joining coordination system.', 'Faster hiring, better technical fit and stronger service centre readiness.', IMG['ta_recruit'], IMG['meeting']), use_case('detailing', 'Detailing', 'Case Study 2: Detailing Studio Workforce Structuring', 'Structured hiring for detailers, PPF installers and coating experts.', 'A car care and detailing business needed structured hiring for detailers, PPF installers, coating experts and washing teams.', 'Defined role expectations, mapped skill requirements, created training and onboarding checklist and hiring dashboard.', 'Improved staffing clarity, stronger process discipline and better customer experience consistency.', IMG['advisor'], IMG['ta_recruit']), use_case('dealership', 'Dealership', 'Case Study 3: Dealership Sales Team Hiring', 'Showroom-wise hiring plan with communication-fit screening.', 'An automobile dealership needed sales consultants, CRM executives and delivery coordinators to improve showroom performance.', 'Created showroom-wise hiring plan, communication-fit screening and interview coordination process.', 'Better customer-facing fit, faster shortlisting and stronger showroom team visibility.', IMG['wfm_hero'], IMG['services']), use_case('payroll', 'Payroll', 'Case Study 4: Payroll and Incentive Structuring', 'Attendance input rhythm and incentive tracking across sales and service teams.', 'An automobile business had unclear attendance, incentive and commission inputs across sales and service teams.', 'Designed attendance input rhythm, incentive tracking format, payroll coordination process and monthly HR dashboard.', 'Cleaner payroll inputs, better management visibility and reduced internal confusion.', IMG['policy'], IMG['integrity'])], 'cta': {'label': 'Discuss a Similar Automobile Case', 'href': '#industry-form'}}))

# --- INDUSTRIAL & ENERGY ---
ind_pain = ['Shortage of skilled technical manpower', 'Plant and site workforce coordination', 'Shift-based attendance and payroll complexity', 'Safety and compliance documentation gaps', 'High dependency on supervisors and operators', 'Contract and permanent workforce management', 'Field technician and project manpower pressure', 'High attrition in operational roles', 'Leadership gaps in production, operations and projects', 'Weak HR reporting across plants, sites and locations']
ind_paras = ['Industrial and energy businesses operate in environments where people discipline matters every hour. A missing operator, untrained technician, weak supervisor, delayed engineer or incomplete safety documentation can affect production schedules, plant efficiency, compliance readiness and worker safety.', 'These businesses need people who are skilled, punctual, safety-conscious, process-oriented and capable of working in demanding operational environments.', 'Mirashka understands that industrial HR is not only about hiring manpower. It is about building a structured workforce system that supports productivity, compliance, safety and continuity.']

INDUSTRIES['industrial-energy'] = {
    'comment': 'Industrial & Energy industry category page content.',
    'meta': {'title': 'Industrial & Energy HR Solutions | Manufacturing, Oil & Gas & Renewable | Mirashka', 'description': 'Mirashka HR solutions for industrial and energy — technical manpower hiring, plant staffing, safety role recruitment, HRaaS, payroll coordination and leadership hiring for manufacturing, oil & gas and renewable energy businesses.', 'keywords': 'industrial HR solutions, manufacturing staffing, oil gas workforce, renewable energy hiring, plant manpower, Mirashka industrial energy'},
    'hero': {'label': 'Industrial & Energy HR Solutions', 'heading': 'People Systems for Operations, Safety and Industrial Growth', 'subheading': ['Industrial and energy businesses need people who can work with discipline, technical skill, safety awareness and operational responsibility.', 'Mirashka helps manufacturing companies, oil and gas businesses, renewable energy companies, industrial service providers and plant-led organizations build structured HR systems through manpower hiring, technical staffing, payroll coordination, compliance documentation, HRaaS, employee engagement, workforce planning and leadership hiring.', 'Whether you need plant workers, engineers, supervisors, safety officers, operators, field technicians, project teams, maintenance staff, production leaders or business heads, Mirashka helps you build a reliable people system for industrial scale.'], 'ctas': [{'label': 'Book Industrial HR Consultation', 'href': '#industry-form'}, {'label': 'Request Industrial HR Health Check', 'href': '#industry-health-check'}], 'image': IMG['hero'], 'image_fallback': IMG['hero']},
    'reality': reality_block('Industrial & Energy HR Reality', 'The Industrial Workforce Challenge', 'In industrial businesses, workforce gaps directly affect production, safety and delivery', ind_paras, ind_pain, 'Discuss Industrial Workforce Challenges', 'Manufacturing plant operations and industrial workforce HR dashboard', 'ri-building-2-line', 'Why Industrial Workforce Management Is Different'),
    'sub_industries': {'label': 'Industrial & Energy Segments', 'heading': 'HR solutions for operations-heavy and safety-sensitive industries', 'content': 'Manufacturing, oil and gas, and renewable energy businesses have very different workforce models. A factory floor, an oilfield project and a solar energy site need different hiring, safety, payroll, attendance and leadership systems. Mirashka builds HR solutions according to operating realities.', 'kicker': 'Industrial & Energy', 'section_bg': IMG['bg'], 'cta': 'Speak to an Industrial HR Advisor', 'cta_href': '#industry-form', 'cards': [
        sub_card('Manufacturing', 'Industrial & Energy', ['Production operators', 'Machine operators', 'Quality executives', 'Maintenance technicians', 'Supervisors', 'Plant HR', 'Store executives', 'Purchase teams', 'Production managers', 'Plant heads', 'Operations leaders'], 'For manufacturing units, factories, industrial product companies, automotive component manufacturers, packaging units, engineering companies and production-led businesses, Mirashka supports plant manpower hiring, technical recruitment, supervisor hiring, payroll coordination, HRaaS, compliance documentation and leadership hiring.', 'Explore Manufacturing HR Solutions', '#manufacturing', IMG['meeting'], IMG['services']),
        sub_card('Oil & Gas', 'Industrial & Energy', ['Field technicians', 'Safety officers', 'Project engineers', 'Site supervisors', 'Maintenance teams', 'Logistics coordinators', 'Operations staff', 'Project managers', 'HSE professionals', 'Senior leaders'], 'For oil and gas companies, energy contractors, field service providers, EPC businesses, equipment suppliers and project-based energy operations, Mirashka supports technical manpower hiring, safety role hiring, site workforce planning, payroll coordination, documentation and leadership hiring.', 'Explore Oil & Gas HR Solutions', '#oil-gas', IMG['hraas_split'], IMG['integrity']),
        sub_card('Renewable Energy', 'Industrial & Energy', ['Solar technicians', 'Project engineers', 'Installation teams', 'Site supervisors', 'O&M teams', 'Sales executives', 'Energy consultants', 'Safety officers', 'Project managers', 'Business leaders'], 'For solar, wind, bioenergy, EV infrastructure, energy storage and green technology businesses, Mirashka supports project manpower hiring, technical staffing, sales hiring, field service teams, HRaaS, compliance documentation and leadership search.', 'Explore Renewable Energy HR Solutions', '#renewable-energy', IMG['wfm_hands'], IMG['advisor']),
    ]},
    'pulse': {'label': 'PULSE for Industrial & Energy', 'heading': 'A workforce framework for safety, productivity and operational scale', 'content': 'Mirashka applies its PULSE Framework to industrial and energy businesses by connecting compliance discipline, workforce management, leadership hiring, manpower sourcing and HRaaS into one structured people system.', 'cards': pulse_cards([('P', 'Protect', 'Compliance & Workplace Integrity', 'Protect industrial businesses through employee documentation, safety records, workplace policies, HR audits, POSH readiness, conduct guidelines and compliance documentation.'), ('U', 'Unify', 'Workforce Management', 'Unify attendance, shift records, payroll inputs, employee files, onboarding, exits, contractor records, site manpower and HR reporting.'), ('L', 'Lead', 'Leadership & Organizational Excellence', 'Build leadership capability through plant heads, operations heads, project heads, production leaders, safety leaders and business heads.'), ('S', 'Source', 'Talent Acquisition & Staffing', 'Source technical, operational, field, plant, project, safety, maintenance, sales and leadership talent.'), ('E', 'Empower', 'HR as a Service', 'Empower industrial businesses with HR outsourcing, employee engagement, retention systems, workforce reporting and HR technology.')]), 'cta': {'label': 'Apply PULSE to My Industrial Business', 'href': '#industry-form'}},
    'services': {'label': 'What Mirashka Delivers', 'heading': 'Complete HR support for businesses that need skilled manpower and workforce control', 'image': IMG['home_hero'], 'image_fallback': IMG['hraas_hero'], 'image_secondary': IMG['services'], 'image_secondary_fallback': IMG['hraas_partner'], 'cards': [card('Technical Manpower Hiring', 'Hiring support for technicians, operators, engineers, maintenance staff, quality teams and production professionals.', 'ri-tools-line'), card('Plant & Site Staffing', 'Support for plant workers, site teams, supervisors, store teams, project manpower and field service professionals.', 'ri-building-2-line'), card('Manufacturing Workforce Support', 'Recruitment and HR support for production, maintenance, quality, purchase, stores, administration and plant operations.', 'ri-settings-3-line'), card('Energy Project Workforce Support', 'Hiring support for oil and gas projects, renewable energy sites, installation teams, O&M teams and project execution roles.', 'ri-flashlight-line'), card('Safety & Compliance Role Hiring', 'Recruitment support for safety officers, HSE professionals, compliance coordinators, audit support executives and training coordinators.', 'ri-shield-check-line'), card('Leadership Hiring', 'Hiring support for plant heads, production heads, project heads, operations heads, safety leaders, regional heads and CXO roles.', 'ri-user-star-line'), card('HRaaS & HR Outsourcing', 'Dedicated HR support for industrial businesses that need structured HR execution without building a large internal HR team.', 'ri-customer-service-2-line'), card('Payroll, Attendance & Shift Coordination', 'Attendance inputs, shift records, overtime data, contractor records, salary changes, deductions and payroll communication.', 'ri-money-dollar-circle-line'), card('Policy, Documentation & HR Audits', 'Employee handbooks, appointment letters, safety documentation, conduct rules, exit documents, HR audits and compliance checklists.', 'ri-file-list-3-line'), card('HR Technology & Reporting', 'Dashboards for hiring, attendance, payroll, manpower deployment, employee records, compliance, attrition and HR action plans.', 'ri-computer-line')], 'cta': {'label': 'Explore Industrial & Energy HR Services', 'href': 'whatwedo'}},
}
INDUSTRIES['industrial-energy'].update(tail('industrial_energy_hr_enquiry', ['Manufacturing', 'Oil & Gas', 'Renewable Energy', 'Industrial Services', 'Engineering Company', 'EPC / Project Business', 'Energy Equipment Business', 'Other Industrial Business'], ['Technical Manpower Hiring', 'Plant Staffing', 'Site Workforce Planning', 'Safety / HSE Hiring', 'Leadership Hiring', 'HRaaS / HR Outsourcing', 'Payroll & Attendance Coordination', 'Shift Workforce Planning', 'Policy Documentation', 'HR Compliance Audit', 'Employee Engagement', 'HR Technology', 'Not Sure — Need Consultation'], 'Submit Industrial HR Enquiry', 'Book 30-Minute Industrial HR Consultation', 'Industrial & energy HR questions answered', [faq('What industrial and energy roles can Mirashka help hire for?', 'Mirashka can support hiring for operators, technicians, engineers, supervisors, safety officers, project teams, plant staff, maintenance teams, quality teams and leadership roles.'), faq('Can Mirashka support plant and site manpower planning?', 'Yes. Mirashka can help create plant-wise or site-wise manpower plans, shift rosters, attendance input systems and HR reporting formats.'), faq('Does Mirashka provide HRaaS for manufacturing and energy companies?', 'Yes. Mirashka HRaaS is suitable for manufacturing units, industrial service providers, oil and gas contractors, renewable energy businesses and project-led companies.'), faq('Can Mirashka help with payroll and overtime coordination?', 'Yes. Mirashka can support attendance inputs, shift records, overtime data, contractor inputs, reimbursements, salary changes and payroll communication.'), faq('Can Mirashka help with safety and compliance documentation?', 'Yes. Mirashka can support employee records, safety induction records, PPE acknowledgement, training records, policy documentation and HR audit checklists.')], 'Read Industrial & Energy HR Insights', 'How ready is your industrial HR system for scale and compliance?', 'Mirashka\'s Industrial & Energy HR Health Check helps manufacturing units, oil and gas businesses, renewable energy companies and project-led organizations identify gaps in hiring, attendance, payroll, safety documentation, compliance, employee engagement, leadership and HR technology.', ['Hiring process quality', 'Role clarity and KRAs', 'Plant or site manpower gaps', 'Attendance and shift process', 'Payroll and overtime input discipline', 'Employee documentation', 'Safety and training records', 'Contractor workforce records', 'POSH and workplace ethics readiness', 'Attrition and retention risk', 'Leadership gap assessment', 'HR technology readiness', 'Reporting and dashboard maturity'], 'Request Industrial HR Health Check', 'Build a stronger industrial workforce with Mirashka', 'Share your industrial or energy HR requirement. Mirashka will help identify whether you need technical manpower hiring, plant staffing, site workforce planning, safety hiring, HRaaS, payroll coordination, documentation or a complete people operating model.', hiring_strategy('Workforce Strategy', 'Industrial hiring needs skill-fit, safety-fit, shift-fit and reliability-fit', ['Industrial roles require discipline and practical capability. A machine operator must understand process. A technician must respond quickly. A supervisor must manage people and output. A safety officer must protect both workers and the organization. A plant leader must balance productivity, cost and compliance.', 'Mirashka helps industrial businesses define workforce requirements before sourcing. We map skill requirements, shift expectations, safety exposure, site location, experience level, salary range, contractor or permanent role type, reporting structure and productivity expectations.'], [{'title': 'Hiring Strategy Includes', 'items': ['Role and KRA definition', 'Skill and experience mapping', 'Plant-wise or site-wise manpower planning', 'Shift requirement mapping', 'Candidate sourcing and screening', 'Safety and reliability-fit review', 'Interview coordination', 'Salary and expectation alignment', 'Joining and documentation checklist', 'Weekly hiring dashboard']}, {'title': 'Workforce Strategy Includes', 'items': ['Plant-wise manpower planning', 'Site deployment planning', 'Shift roster visibility', 'Contract and permanent workforce separation', 'Attendance input discipline', 'Overtime coordination', 'Training and safety record tracking', 'HR reporting structure', 'Leadership and succession planning']}], 'Build My Industrial Workforce Plan', 'Industrial hiring funnel with filters: Skill Fit, Safety Fit, Shift Fit, Site Fit and Reliability Fit', 'Industrial workforce planning and structured hiring support'), {'label': 'HR Operations', 'heading': 'Create workforce discipline across plants, sites, shifts and project locations', 'intro': ['Industrial and energy businesses often operate through shifts, plants, sites, warehouses, project locations and field teams. This creates the need for structured attendance, payroll inputs, overtime records, safety documentation, employee files, onboarding and exit processes.', 'Mirashka helps industrial businesses create HR operating systems that improve visibility, reduce confusion and support consistent execution.'], 'image': IMG['compliance_ops'], 'image_fallback': IMG['policy'], 'image_alt': 'Industrial employee file, shift roster, safety checklist and compliance shield visual', 'cta': 'Request Industrial HR Documentation Review', 'cta_href': '#industry-form', 'cards': [compliance_card('Employee Documentation', 'Appointment letters, joining forms, ID proofs, qualification records, experience records, skill records and employee files.', 'ri-file-list-3-line', IMG['policy']), compliance_card('Attendance & Shift Process', 'Shift rosters, attendance inputs, late marks, overtime records, weekly offs, leave records and supervisor approvals.', 'ri-calendar-check-line', IMG['meeting'], True), compliance_card('Safety & Training Records', 'Safety induction records, PPE acknowledgement, site training documentation, SOP acknowledgement and safety compliance checklists.', 'ri-shield-check-line', IMG['risk']), compliance_card('Contractor & Site Workforce Records', 'Contract manpower records, site deployment lists, supervisor mapping, work allocation records and monthly workforce reporting.', 'ri-team-line', IMG['integrity']), compliance_card('Payroll Coordination', 'Salary inputs, attendance data, overtime, deductions, reimbursements, incentives, contractor inputs and payroll communication.', 'ri-money-dollar-circle-line', IMG['payroll'], True), compliance_card('Exit Management', 'Resignation documentation, tool or asset return, handover process, clearance checklist, full and final coordination and exit feedback.', 'ri-logout-box-r-line', IMG['services'], True)]}, {'label': 'Industrial & Energy HR Support in Action', 'heading': 'Practical people solutions for industrial workforce challenges', 'tags': ['Skilled Manpower', 'Safer Operations', 'Better Control', 'Stronger Leadership'], 'cards': [use_case('plant-manpower', 'Plant', 'Case Study 1: Plant Manpower Planning for a Manufacturing Unit', 'Plant-wise manpower plan and shift roster visibility.', 'A manufacturing unit needed structured manpower planning across production, maintenance and quality teams.', 'Created plant-wise manpower plan, shift roster visibility, attendance input rhythm and HR reporting format.', 'Improved workforce visibility, better shift control and stronger production readiness.', IMG['ta_recruit'], IMG['meeting']), use_case('energy-project', 'Energy', 'Case Study 2: Energy Project Workforce Deployment', 'Site deployment planning for installation and O&M teams.', 'A renewable energy business needed installation and O&M teams across multiple project sites.', 'Mapped site-wise manpower needs, created deployment plan, hiring tracker and contractor record structure.', 'Improved project staffing speed and stronger site workforce control.', IMG['advisor'], IMG['ta_recruit']), use_case('safety-docs', 'Safety', 'Case Study 3: Safety Documentation Structuring', 'Safety induction records, PPE acknowledgement and training documentation.', 'An industrial company had incomplete safety induction records and inconsistent training documentation.', 'Designed safety induction checklist, PPE acknowledgement format, training record structure and HR audit report.', 'Stronger safety documentation discipline and improved compliance readiness.', IMG['wfm_hero'], IMG['services']), use_case('ind-leadership', 'Leadership', 'Case Study 4: Industrial Leadership Hiring', 'Plant or operations leader for productivity, safety and team discipline.', 'A growing industrial business needed a plant or operations leader to manage productivity, safety and team discipline.', 'Defined leadership mandate, mapped relevant industrial talent and supported structured evaluation.', 'Better leadership alignment and stronger operational scale readiness.', IMG['policy'], IMG['integrity'])], 'cta': {'label': 'Discuss a Similar Industrial Case', 'href': '#industry-form'}}))

# --- FINANCIAL SERVICES (8 service cards) ---
fin_pain = ['Compliance-sensitive hiring', 'High attrition in sales and advisory roles', 'Need for trust and background verification', 'Documentation and policy discipline', 'Branch and field workforce management', 'Payroll and incentive complexity', 'Leadership hiring for growth roles', 'Employee engagement and retention', 'Role clarity and performance measurement', 'Customer-facing behavior standards']
fin_paras = ['Financial services organizations depend on people who can manage sensitive information, follow process discipline, communicate clearly, handle customer responsibility and work within compliance expectations.', 'A weak hiring process, poor documentation, unclear roles, high attrition or leadership gaps can directly affect customer trust, operational stability and regulatory confidence.', 'Mirashka understands that financial services HR needs both speed and caution. The right talent must be hired quickly, but with strong verification, role clarity, documentation and performance alignment.']

INDUSTRIES['financial-services'] = {
    'comment': 'Financial Services industry category page content.',
    'meta': {'title': 'Financial Services HR Solutions | Banking, Insurance & Asset Management | Mirashka', 'description': 'Mirashka HR solutions for financial services — recruitment, leadership hiring, HRaaS, compliance support, payroll coordination and policy documentation for banking, insurance and asset management businesses.', 'keywords': 'financial services HR, banking recruitment, insurance hiring, asset management HR, compliance HR, Mirashka financial services'},
    'hero': {'label': 'Financial Services HR Solutions', 'heading': 'People Systems for Trust-Driven Financial Businesses', 'subheading': ['Banking, insurance and asset management businesses operate in a world where people decisions directly affect trust, compliance, customer experience and business continuity.', 'Mirashka helps financial services companies build reliable people systems through recruitment, HRaaS, compliance support, payroll coordination, policy documentation, leadership hiring, employee engagement and workforce strategy.', 'Whether you are building a sales team, strengthening branch operations, hiring senior leaders, managing compliance documentation or setting up structured HR processes, Mirashka works as your extended HR partner.'], 'ctas': [{'label': 'Book Financial Services HR Consultation', 'href': '#industry-form'}, {'label': 'Request HR Health Check', 'href': '#industry-health-check'}], 'image': IMG['hero'], 'image_fallback': IMG['hero']},
    'reality': reality_block('Financial Services HR Reality', 'The Financial Services Reality', 'In financial services, HR is not only about hiring. It is about trust, risk and continuity.', fin_paras, fin_pain, 'Discuss Financial Services HR Challenges', 'Financial services professionals and compliance process dashboard', 'ri-bank-line', 'Why Financial Services Workforce Management Is Different'),
    'sub_industries': {'label': 'Financial Services Segments', 'heading': 'HR solutions for every major financial services business model', 'content': 'Financial services is not one industry. A bank, an insurance company and an asset management firm have different people needs, sales structures, compliance expectations and leadership requirements. Mirashka builds HR solutions accordingly.', 'kicker': 'Financial Services', 'section_bg': IMG['bg'], 'cta': 'Speak to a Financial Services HR Advisor', 'cta_href': '#industry-form', 'cards': [
        sub_card('Banking', 'Financial Services', ['Branch managers', 'Relationship managers', 'Credit officers', 'Operations executives', 'Customer service teams', 'Sales teams', 'Compliance coordinators', 'Senior leadership roles'], 'For banks, NBFCs, fintech-enabled lenders and branch-led financial institutions, Mirashka supports hiring, payroll coordination, compliance documentation, branch workforce structuring, leadership hiring and employee engagement.', 'Explore Banking HR Solutions', '#banking', IMG['meeting'], IMG['services']),
        sub_card('Insurance', 'Financial Services', ['Insurance sales managers', 'Advisors', 'Branch heads', 'Relationship officers', 'Operations teams', 'Claims support', 'Training managers', 'Regional leadership roles'], 'For life insurance, general insurance, health insurance, insurance brokers and distribution-led insurance businesses, Mirashka supports sales hiring, advisor onboarding, compliance documentation, incentive structures, employee engagement and leadership hiring.', 'Explore Insurance HR Solutions', '#insurance', IMG['hraas_split'], IMG['integrity']),
        sub_card('Asset Management', 'Financial Services', ['Relationship managers', 'Wealth advisors', 'Fund operations professionals', 'Compliance executives', 'Research analysts', 'Business development managers', 'Senior leadership roles'], 'For asset management companies, wealth advisory firms, PMS firms, investment platforms and financial advisory organizations, Mirashka supports specialist hiring, leadership recruitment, compliance-oriented HR systems, employee policies and retention strategy.', 'Explore Asset Management HR Solutions', '#asset-management', IMG['wfm_hands'], IMG['advisor']),
    ]},
    'pulse': {'label': 'PULSE for Financial Services', 'heading': 'A financial-services-ready people framework', 'content': 'Mirashka applies the PULSE Framework to financial services businesses by combining compliance awareness, structured HR operations, leadership strength, talent sourcing and employee empowerment.', 'cards': pulse_cards([('P', 'Protect', 'Compliance & Workplace Integrity', 'Protect financial services businesses through HR policies, documentation, employee handbooks, workplace ethics, POSH training and HR risk reviews.'), ('U', 'Unify', 'Workforce Management', 'Unify payroll, attendance, incentives, employee records, onboarding, documentation and HR operations across branches, teams and locations.'), ('L', 'Lead', 'Leadership & Organizational Excellence', 'Build leadership capability through executive search, board and CEO advisory, succession planning, leadership assessment and transformation support.'), ('S', 'Source', 'Talent Acquisition & Staffing', 'Source reliable financial services talent for banking, insurance, wealth, operations, sales, compliance and leadership roles.'), ('E', 'Empower', 'HR as a Service', 'Empower financial businesses with HR outsourcing, employer branding, employee engagement, retention strategies and HR technology.')]), 'cta': {'label': 'Apply PULSE to My Financial Services Business', 'href': '#industry-form'}},
    'services': {'label': 'What Mirashka Delivers', 'heading': 'Complete HR support for regulated, trust-led and performance-driven businesses', 'image': IMG['home_hero'], 'image_fallback': IMG['hraas_hero'], 'image_secondary': IMG['services'], 'image_secondary_fallback': IMG['hraas_partner'], 'cards': [
        card('Financial Services Recruitment', 'Role mapping, sourcing, screening, interview coordination and closure support for sales, operations, compliance and management roles.', 'ri-user-search-line'),
        card('Leadership Hiring', 'CXO, regional head, business head, branch leadership, sales leadership and strategic hiring support.', 'ri-user-star-line'),
        card('HRaaS & HR Outsourcing', 'Dedicated HR support for companies that need professional HR management without a large internal HR team.', 'ri-customer-service-2-line'),
        card('Policy Documentation', 'Employee handbooks, HR policies, appointment formats, exit documents, code of conduct and workplace guidelines.', 'ri-file-list-3-line'),
        card('Payroll & Incentive Coordination', 'Salary inputs, incentive data coordination, attendance tracking, reimbursement support and structured payroll communication.', 'ri-money-dollar-circle-line'),
        card('Compliance & Risk Assessment', 'HR audits, documentation checks, workplace risk reviews and corrective action planning.', 'ri-shield-check-line'),
        card('Employee Engagement', 'Employee surveys, retention plans, performance communication, feedback systems and engagement programs.', 'ri-emotion-happy-line'),
        card('HR Technology & Reporting', 'Dashboards for hiring pipeline, employee records, attrition, payroll status, compliance calendar and HR actions.', 'ri-computer-line'),
    ], 'cta': {'label': 'Explore Financial Services HR Services', 'href': 'whatwedo'}},
}
INDUSTRIES['financial-services'].update(tail('financial_services_hr_enquiry', ['Banking', 'Insurance', 'Asset Management', 'NBFC', 'Wealth Advisory', 'Fintech', 'Other Financial Services'], ['Recruitment / Staffing', 'Leadership Hiring', 'HRaaS / HR Outsourcing', 'Payroll Support', 'Compliance Audit', 'Policy Documentation', 'POSH / Workplace Training', 'Employee Engagement', 'HR Technology', 'Not Sure — Need Consultation'], 'Submit Financial Services HR Enquiry', 'Book 30-Minute Consultation', 'Financial services HR questions answered', [faq('What financial services roles can Mirashka help hire for?', 'Mirashka can support hiring for sales, relationship management, branch operations, customer support, compliance, HR, operations, wealth advisory and leadership roles.'), faq('Can Mirashka support insurance sales hiring?', 'Yes. Mirashka can support insurance sales teams, advisors, branch-level roles, regional sales roles and leadership hiring.'), faq('Does Mirashka provide HRaaS for small financial firms?', 'Yes. Mirashka HRaaS is suitable for small and growing financial services firms that need professional HR support without a large internal HR department.'), faq('Can Mirashka help with employee documentation and policies?', 'Yes. Mirashka supports employee handbooks, HR policies, appointment formats, exit documents, conduct guidelines and compliance documentation.'), faq('Can Mirashka support leadership hiring in financial services?', 'Yes. Mirashka supports senior leadership hiring, CXO search, business head hiring, regional leadership and succession planning.')], 'Read Financial Services HR Insights', 'How ready is your financial services HR system?', 'Mirashka\'s Financial Services HR Health Check helps banking, insurance and asset management businesses identify gaps across hiring, documentation, compliance, payroll, employee engagement, leadership and HR technology.', ['Hiring process quality', 'Role clarity and KRAs', 'Employee documentation', 'Appointment and exit formats', 'Payroll and incentive coordination', 'Compliance exposure', 'Employee handbook readiness', 'POSH and ethics readiness', 'Attrition and retention risk', 'Leadership gap assessment', 'HR technology readiness', 'Reporting and dashboard maturity'], 'Request Financial Services HR Health Check', 'Build a stronger people system for your financial services business', 'Share your financial services HR requirement. Mirashka will help identify whether you need recruitment, HRaaS, payroll coordination, compliance documentation, leadership hiring, employee engagement or a complete people operating model.', hiring_strategy('Talent Strategy', 'Hire people who understand responsibility, process and customer trust', ['Financial services hiring cannot be handled only through resume matching. Every role needs context — customer responsibility, product understanding, compliance sensitivity, documentation discipline, communication ability and long-term reliability.', 'Mirashka helps businesses define the role properly before sourcing. We map expectations, required skills, reporting relationships, performance metrics and cultural fit before starting the hiring process.'], [{'title': 'Hiring Support Includes', 'items': ['Job description and role clarity', 'Candidate sourcing strategy', 'Screening and shortlisting', 'Interview coordination', 'Culture and communication fit review', 'Salary and expectation alignment', 'Joining coordination', 'Replacement and continuity support', 'Hiring dashboard and weekly reporting']}, {'title': 'Roles Mirashka Can Support', 'items': ['Relationship Managers', 'Branch Managers', 'Insurance Sales Managers', 'Wealth Advisors', 'Credit Officers', 'Operations Executives', 'Compliance Executives', 'Customer Support Teams', 'Business Development Managers', 'Regional Sales Leaders', 'CXO and senior leadership roles']}], 'Start Financial Services Hiring Support', 'Financial services recruitment pipeline with candidate stages', 'Financial services hiring and workforce strategy support'), {'label': 'Compliance & Integrity', 'heading': 'Build documentation discipline before people issues become business risks', 'intro': ['In financial services, documentation, policy clarity and employee conduct standards are critical. Mirashka helps businesses build HR systems that reduce confusion, improve consistency and support workplace integrity.', 'Mirashka supports employee handbooks, HR policy frameworks, HR audits, POSH training and exit documentation for trust-led organizations.'], 'image': IMG['compliance_ops'], 'image_fallback': IMG['policy'], 'image_alt': 'Compliance checklist, employee handbook and financial office visual', 'cta': 'Request Compliance & Documentation Review', 'cta_href': '#industry-form', 'cards': [compliance_card('Employee Handbooks', 'Clear employee policies, code of conduct, leave rules, escalation process and workplace expectations.', 'ri-book-2-line', IMG['policy']), compliance_card('HR Policy Frameworks', 'Policies aligned with business culture, role requirements, workplace discipline and compliance awareness.', 'ri-file-list-3-line', IMG['meeting'], True), compliance_card('HR Audit & Risk Review', 'Review of employee records, documentation gaps, payroll coordination, exit process and workplace compliance readiness.', 'ri-search-eye-line', IMG['risk']), compliance_card('POSH & Workplace Ethics Training', 'Awareness programs to promote safe, respectful and legally aware workplaces.', 'ri-group-2-line', IMG['integrity']), compliance_card('Exit & Disciplinary Documentation', 'Structured formats and processes for exits, warnings, disciplinary actions and handovers.', 'ri-logout-box-r-line', IMG['services'], True)]}, {'label': 'Relevant Use Cases', 'heading': 'Practical HR solutions for real financial services situations', 'tags': ['Faster Hiring', 'Cleaner Records', 'Stronger Leadership', 'Lower HR Risk'], 'cards': [use_case('rm-team', 'RM Team', 'Case Study 1: Scaling a Relationship Manager Team', 'Role mapping, sourcing and interview coordination for customer-facing roles.', 'A growing financial services company needed faster hiring for customer-facing roles.', 'Role mapping, candidate sourcing, screening process and interview coordination.', 'Better hiring clarity, faster shortlisting and stronger candidate fit.', IMG['ta_recruit'], IMG['meeting']), use_case('branch-hr', 'Branch HR', 'Case Study 2: Creating HR Structure for a Branch-Led Business', 'Documentation framework and employee lifecycle tracking.', 'Employee records, joining documents, attendance and payroll inputs were scattered.', 'HR documentation framework, payroll coordination rhythm and employee lifecycle tracking.', 'Cleaner HR operations and better leadership visibility.', IMG['advisor'], IMG['ta_recruit']), use_case('fs-leadership', 'Leadership', 'Case Study 3: Leadership Hiring for Expansion', 'Leadership role definition, talent mapping and evaluation support.', 'The company needed a senior leader who could manage growth, teams and process discipline.', 'Leadership role definition, talent mapping, evaluation and interview support.', 'Better leadership alignment and stronger growth readiness.', IMG['wfm_hero'], IMG['services']), use_case('compliance-review', 'Compliance', 'Case Study 4: Compliance Readiness Review', 'Policy review, employee handbook creation and HR audit.', 'HR documentation and workplace policies were not standardized.', 'Policy review, employee handbook creation, HR audit and action plan.', 'Reduced HR risk and improved workplace clarity.', IMG['policy'], IMG['integrity'])], 'cta': {'label': 'Discuss a Similar Case', 'href': '#industry-form'}}))

for slug, cfg in INDUSTRIES.items():
    comment = cfg.pop('comment')
    path = OUT / f'{slug}.php'
    path.write_text(build_config(comment, cfg), encoding='utf-8')
    print(f'Wrote {path.name}')


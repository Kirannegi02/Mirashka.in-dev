<?php

/**
 * HRaaS hub — five category tabs (What We Do megamenu alignment).
 */
return [
    'tabs' => [
        [
            'key' => 'compliance-integrity',
            'label' => 'Compliance & Workplace Integrity',
            'nav_label' => 'Compliance',
            'route' => 'compliance',
            'page_config' => 'compliance-workplace-integrity',
            'sub_services_config' => 'compliance-sub-services',
            'sub_route' => 'compliance.sub',
            'faq_key' => 'compliance',
            'show_open_link' => true,
        ],
        [
            'key' => 'workforce-efficiency',
            'label' => 'Workforce Management',
            'nav_label' => 'Workforce',
            'route' => 'hraas.category.workforce',
            'page_config' => 'workforce-management',
            'sub_services_config' => 'workforce-sub-services',
            'sub_route' => 'hraas.sub.workforce',
            'faq_key' => 'hraas',
            'show_open_link' => true,
        ],
        [
            'key' => 'leadership-mastery',
            'label' => 'Leadership & Organization',
            'nav_label' => 'Leadership',
            'route' => 'hraas.category.leadership',
            'page_config' => 'leadership-organization',
            'sub_services_config' => 'leadership-sub-services',
            'sub_route' => 'hraas.sub.leadership',
            'faq_key' => 'hraas',
            'show_open_link' => true,
        ],
        [
            'key' => 'hiring-excellence',
            'label' => 'Talent Acquisition & Staffing',
            'nav_label' => 'Talent & Staffing',
            'route' => 'hraas.category.hiring',
            'page_config' => 'talent-acquisition-staffing',
            'sub_services_config' => 'hiring-sub-services',
            'sub_route' => 'hraas.sub.hiring',
            'faq_key' => 'hraas',
            'show_open_link' => true,
        ],
        [
            'key' => 'hraas-solutions',
            'label' => 'HR as a Service',
            'nav_label' => 'HRaaS',
            'route' => 'hraas',
            'page_config' => 'hraas-hub',
            'sub_services_config' => 'hraas-sub-services',
            'sub_route' => 'hraas.sub.core',
            'faq_key' => 'hraas',
            'show_open_link' => true,
        ],
    ],
];

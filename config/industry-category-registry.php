<?php

/**
 * Registry for industry category pages (e.g. Healthcare, Financial Services).
 * Page content lives under config/industry-categories/{slug}.php
 */
return [
    'healthcare' => [
        'label' => 'Healthcare',
        'route_name' => 'industries.healthcare',
        'page_config' => 'industry-categories.healthcare',
    ],
    'financial-services' => [
        'label' => 'Financial Services',
        'route_name' => 'industries.financial-services',
        'page_config' => 'industry-categories.financial-services',
    ],
    'technology' => [
        'label' => 'Technology',
        'route_name' => 'industries.technology',
        'page_config' => 'industry-categories.technology',
    ],
    'consumer-retail' => [
        'label' => 'Consumer & Retail',
        'route_name' => 'industries.consumer-retail',
        'page_config' => 'industry-categories.consumer-retail',
    ],
    'industrial-energy' => [
        'label' => 'Industrial & Energy',
        'route_name' => 'industries.industrial-energy',
        'page_config' => 'industry-categories.industrial-energy',
    ],
    'automobile' => [
        'label' => 'Automobile',
        'route_name' => 'industries.automobile',
        'page_config' => 'industry-categories.automobile',
    ],
];

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
];

<?php

/**
 * Central font configuration for Mirashka.
 *
 * To change the site font later, update this file only (family name + font file path).
 * CSS variables are injected via resources/views/components/mirashka-fonts.blade.php.
 */
return [

    /** Display name used in @font-face and font-family stacks */
    'family' => 'Bricolage Grotesque',

    /** System fallbacks when custom font is loading or unavailable */
    'fallback' => 'system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif',

    /**
     * Variable font (covers weights 200–800). Path relative to /public.
     */
    'variable' => [
        'path' => 'assets/frontend/fonts/bricolage-grotesque/BricolageGrotesque-Variable.ttf',
        'weight_min' => 200,
        'weight_max' => 800,
    ],

    /**
     * CSS custom property names — used across frontend, admin, and auth.
     */
    'css_vars' => [
        'primary' => '--mirashka-font-primary',
        'secondary' => '--mirashka-font-secondary',
        'sans' => '--font-sans',
        'heading' => '--mirashka-font-heading',
    ],

    /**
     * Legacy Creote theme variables (theme-css.css). Mapped automatically.
     */
    'legacy' => [
        'creote_family_one' => '--creote-family-one',
        'creote_family_two' => '--creote-family-two',
    ],
];

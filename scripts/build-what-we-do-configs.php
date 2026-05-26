<?php
/**
 * Generate What We Do category + sub-service config files.
 * Does NOT touch compliance-workplace-integrity.php or compliance-sub-services.php.
 *
 * Usage: php scripts/build-what-we-do-configs.php
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$configDir = $root . '/config';

$protected = [
    'compliance-workplace-integrity.php',
    'compliance-sub-services.php',
];

$images = [
    'assets/admin/image/banner/hr-advisory.webp',
    'assets/frontend/img/hraas/hraas-hr-dashboard.webp',
    'assets/frontend/img/hraas/hraas-problem-dashboard.webp',
    'assets/frontend/img/hraas/hraas-health-check.webp',
    'assets/admin/image/case-study/jyogi-team.webp',
    'assets/admin/image/case-study/media/jyogi-gallery-engagement.webp',
];

function img_at(int $i): string
{
    global $images;
    return $images[$i % count($images)];
}

function pad_step(int $n): string
{
    return str_pad((string) $n, 2, '0', STR_PAD_LEFT);
}

function build_process(array $steps, string $before = 'How It Works', string $heading = ''): array
{
    $out = [];
    foreach ($steps as $i => $s) {
        $out[] = [
            'title' => $s['title'],
            'text' => $s['text'],
            'icon' => $s['icon'] ?? 'ri-checkbox-circle-line',
        ];
    }
    return [
        'before_title' => $before,
        'heading' => $heading ?: ($steps[0]['title'] ?? 'How we deliver'),
        'steps' => $out,
    ];
}

function build_dashboard(
    string $before,
    string $heading,
    string $content,
    string $cta,
    array $tabs
): array {
    $tabRows = [];
    foreach ($tabs as $i => $t) {
        $tabRows[] = [
            'label' => $t['label'],
            'heading' => $t['heading'] ?? $t['label'],
            'content' => $t['content'],
            'image' => $t['image'] ?? img_at($i + 1),
        ];
    }
    return [
        'before_title' => $before,
        'heading' => $heading,
        'content' => $content,
        'cta' => $cta,
        'tabs' => $tabRows,
    ];
}

function build_sidebar(string $label, string $heading, string $content, string $cta, array $items): array
{
    $rows = [];
    foreach ($items as $item) {
        $rows[] = [
            'label' => $item['label'],
            'icon' => $item['icon'] ?? 'ri-check-line',
        ];
    }
    return [
        'label' => $label,
        'heading' => $heading,
        'content' => $content,
        'cta' => $cta,
        'items' => $rows,
    ];
}

function build_dash_tabs_from_process(array $steps, string $fallbackImage): array
{
    $tabs = [];
    foreach ($steps as $i => $step) {
        $tabs[] = [
            'label' => $step['title'],
            'heading' => $step['title'],
            'content' => $step['text'],
            'image' => $step['image'] ?? $fallbackImage,
        ];
    }
    return $tabs;
}

/** @var array<string, array<string, array{hero: string, focus: string, card: string, steps: string[]}>> $subServiceImages */
$subServiceImages = require __DIR__ . '/sub-service-images.php';
/** @var array<string, array<string, array{standout?: array, experience?: array}>> $subExtraSections */
$subExtraSections = require __DIR__ . '/sub-service-extra-sections.php';

function build_sub_standout(array $d, array $imgMap): array
{
    $steps = $d['process_steps'] ?? [];
    $stepImages = $imgMap['steps'] ?? [];
    $hero = $imgMap['hero'] ?? img_at(0);
    $focus = $imgMap['focus'] ?? $hero;
    $last = $steps !== [] ? $steps[count($steps) - 1] : null;
    $first = $steps[0] ?? null;
    $second = $steps[1] ?? null;

    $leftImg = $stepImages[1] ?? $stepImages[0] ?? $focus;
    $rightImg = $stepImages[2] ?? $stepImages[3] ?? $hero;
    if ($leftImg === $rightImg && isset($stepImages[3])) {
        $rightImg = $stepImages[3];
    }

    return [
        'before_title' => 'Why Mirashka',
        'heading' => 'Stand Out From The Rest',
        'grid' => [
            'left_image' => $leftImg,
            'left_card' => [
                'icon' => $first['icon'] ?? 'ri-lightbulb-line',
                'title' => $first['title'] ?? 'Our Approach',
                'text' => $first['text'] ?? ($d['hero_content'] ?? ''),
            ],
            'center' => [
                'icon' => 'ri-list-check-2',
                'title' => $d['standout_center_title'] ?? 'What We Deliver',
                'text' => $d['standout_center_text'] ?? sprintf(
                    'Structured %s with practical guidance and documented outputs your leadership team can track.',
                    strtolower($d['title'])
                ),
                'list' => array_map(
                    static fn (array $s): string => $s['title'],
                    $steps !== [] ? $steps : [['title' => $d['title']]]
                ),
                'cta' => $d['primary_cta'],
            ],
            'right_card' => [
                'icon' => $last['icon'] ?? 'ri-award-line',
                'title' => $last['title'] ?? 'Ready to Get Started',
                'text' => $last['text'] ?? ($d['focus_content'] ?? ''),
            ],
            'right_image' => $rightImg,
        ],
    ];
}

function build_sub_experience(array $d, array $imgMap): array
{
    $steps = $d['process_steps'] ?? [];
    $pillars = [];
    foreach (array_slice($steps, 0, 3) as $i => $step) {
        $pillars[] = [
            'num' => pad_step($i + 1),
            'title' => $step['title'],
        ];
    }
    $expImage = $imgMap['hero'] ?? img_at(0);
    if ($expImage === ($imgMap['focus'] ?? '')) {
        $stepImages = $imgMap['steps'] ?? [];
        $expImage = $stepImages[0] ?? $expImage;
    }

    $firstStep = $steps[0] ?? null;

    return [
        'heading' => $d['experience_heading'] ?? ($d['hero_heading'] ?? $d['title']),
        'content' => $d['experience_content'] ?? ($d['hero_content'] ?? ''),
        'image' => $expImage,
        'badge_icon' => $d['experience_badge_icon'] ?? ($firstStep['icon'] ?? 'ri-customer-service-2-line'),
        'cta' => $d['primary_cta'],
        'cta_url' => $d['experience_cta_url'] ?? null,
        'pillars' => $pillars,
    ];
}

function apply_sub_extra_sections(array $svc, array $d, string $category, string $slug): array
{
    global $subServiceImages, $subExtraSections;
    $imgMap = $subServiceImages[$category][$slug] ?? [];
    $override = $subExtraSections[$category][$slug] ?? [];

    $svc['standout'] = $override['standout'] ?? build_sub_standout($d, $imgMap);
    $svc['experience'] = $override['experience'] ?? build_sub_experience($d, $imgMap);

    return $svc;
}

function apply_sub_service_images(array $d, string $category, string $slug): array
{
    global $subServiceImages;
    $map = $subServiceImages[$category][$slug] ?? null;
    if ($map === null) {
        return $d;
    }
    $d['image'] = $map['card'] ?? $d['image'] ?? null;
    $d['hero_image'] = $map['hero'] ?? $d['hero_image'] ?? $d['image'] ?? null;
    $d['focus_image'] = $map['focus'] ?? $d['focus_image'] ?? $d['image'] ?? null;
    $d['focus_position'] = $map['focus_position'] ?? $d['focus_position'] ?? 'center center';
    if (! empty($map['bottom_cta'])) {
        $ctaBgs = [
            'compliance' => 'assets/frontend/img/compliance/cwi-cta-bg.png',
            'workforce' => 'assets/frontend/img/workforce/wfm-cta-bg-v2.png',
            'leadership' => 'assets/frontend/img/leadership/ldr-hero-boardroom.png',
            'talent-acquisition' => 'assets/frontend/img/talent-acquisition/ta-hero-hiring.png',
            'hraas' => 'assets/frontend/img/hraas/hraas-v3-cta-bg.png',
        ];
        $d['bottom_cta'] = array_merge($d['bottom_cta'] ?? [], [
            'image' => $map['bottom_cta'],
            'bg_image' => $ctaBgs[$category] ?? $ctaBgs['compliance'],
        ]);
    }
    if (! empty($map['steps']) && ! empty($d['process_steps'])) {
        foreach ($d['process_steps'] as $i => &$step) {
            $step['image'] = $map['steps'][$i] ?? $map['hero'];
        }
        unset($step);
    }
    return $d;
}

function build_sub_service(array $d): array
{
    $img = $d['hero_image'] ?? $d['image'] ?? img_at(0);
    $cardImg = $d['image'] ?? $img;
    $steps = $d['process_steps'] ?? [];
    $lastStep = $steps !== [] ? $steps[count($steps) - 1] : null;

    $dashContent = $d['dash_content'] ?? sprintf(
        'Explore how Mirashka delivers %s — with practical guidance, documented outputs and progress your leadership team can track at every step.',
        $d['title']
    );

    $outcomeHeading = $d['outcome_heading'] ?? ($lastStep['title'] ?? 'Ready to move forward');
    $outcomeContent = $d['outcome_content'] ?? ($lastStep['text'] ?? ($d['focus_content'] ?? $d['hero_content'] ?? ''));

    return [
        'meta' => [
            'title' => $d['meta_title'],
            'description' => $d['meta_description'],
            'keywords' => $d['meta_keywords'],
        ],
        'card' => [
            'title' => $d['title'],
            'image' => $cardImg,
        ],
        'hero' => [
            'label' => $d['title'],
            'heading' => $d['hero_heading'],
            'content' => $d['hero_content'],
            'image' => $img,
        ],
        'process' => build_process(
            $steps,
            $d['process_before'] ?? 'What We Cover',
            $d['process_heading'] ?? ('How ' . $d['title'] . ' works')
        ),
        'dashboard' => build_dashboard(
            $d['dash_before'] ?? 'In Detail',
            $d['dash_heading'] ?? ($d['process_heading'] ?? $d['title']),
            $dashContent,
            $d['primary_cta'],
            build_dash_tabs_from_process($steps, $img)
        ),
        'sidebar' => build_sidebar(
            $d['sidebar_label'] ?? 'What You Receive',
            $d['sidebar_heading'] ?? 'How Mirashka supports you',
            $d['sidebar_content'] ?? ($d['focus_content'] ?? $d['hero_content'] ?? ''),
            $d['primary_cta'],
            $d['sidebar_items']
        ),
        'focus' => [
            'tag' => $d['focus_tag'] ?? $d['title'],
            'title' => $d['focus_title'],
            'content' => $d['focus_content'],
            'image' => $d['focus_image'] ?? $d['image'] ?? $img,
            'image_position' => $d['focus_position'] ?? $d['focus_image_position'] ?? 'center center',
        ],
        'outcome' => [
            'before_title' => $d['outcome_before'] ?? 'Outcome',
            'heading' => $outcomeHeading,
            'content' => $outcomeContent,
            'button' => $d['primary_cta'],
            'secondary' => $d['secondary_cta'],
        ],
        'page_cta' => [
            'button' => $d['primary_cta'],
            'secondary' => $d['secondary_cta'],
        ],
    ];
}

function build_services_overview(array $items, string $before, string $heading, string $content, int $imgIdx = 0, ?string $image = null): array
{
    $rows = [];
    foreach ($items as $i => $item) {
        $rows[] = [
            'step' => pad_step($i + 1),
            'title' => $item['title'],
            'text' => $item['text'],
            'icon' => $item['icon'] ?? 'ri-arrow-right-line',
        ];
    }
    return [
        'before_title' => $before,
        'heading' => $heading,
        'content' => $content,
        'image' => $image ?? img_at($imgIdx),
        'image_alt' => $heading,
        'items' => $rows,
    ];
}

function build_framework(array $steps, string $before, string $heading, string $content): array
{
    $rows = [];
    foreach ($steps as $s) {
        $rows[] = [
            'title' => $s['title'],
            'subtitle' => $s['subtitle'],
            'text' => $s['text'],
            'icon' => $s['icon'] ?? 'ri-settings-3-line',
        ];
    }
    return [
        'before_title' => $before,
        'heading' => $heading,
        'content' => $content,
        'steps' => $rows,
    ];
}

function build_category_page(array $d): array
{
    return [
        'meta' => [
            'title' => $d['meta_title'],
            'description' => $d['meta_description'],
            'keywords' => $d['meta_keywords'],
        ],
        'hero' => [
            'label' => $d['label'],
            'title' => $d['title'],
            'tagline' => $d['tagline'],
            'content' => $d['content'],
            'headline' => $d['headline'],
            'image' => $d['hero_image'] ?? img_at(0),
            'primary_cta' => $d['primary_cta'],
            'secondary_cta' => $d['secondary_cta'],
        ],
        'risk' => [
            'before_title' => $d['risk_before'] ?? 'Challenge',
            'heading' => $d['risk_heading'],
            'lead' => $d['risk_lead'],
            'content' => $d['risk_content'],
            'image' => $d['risk_image'] ?? img_at(2),
            'list_label' => $d['risk_list_label'] ?? null,
            'visual_alt' => $d['risk_visual_alt'] ?? null,
            'visual_caption_title' => $d['risk_visual_caption_title'] ?? null,
            'visual_caption_text' => $d['risk_visual_caption_text'] ?? null,
            'cta' => $d['secondary_cta'],
            'risks' => $d['risks'],
        ],
        'services' => build_services_overview(
            $d['service_items'],
            $d['services_before'] ?? 'Services Overview',
            $d['services_heading'],
            $d['services_content'],
            1,
            $d['services_image'] ?? null
        ),
        'framework' => build_framework(
            $d['framework_steps'],
            $d['framework_before'] ?? 'Framework',
            $d['framework_heading'],
            $d['framework_content']
        ),
        'workplace_integrity' => [
            'eyebrow' => $d['integrity_eyebrow'],
            'heading' => $d['integrity_heading'],
            'content' => $d['integrity_content'],
            'image' => $d['integrity_image'] ?? img_at(5),
            'image_alt' => $d['integrity_heading'],
            'theme' => 'dark',
            'features' => $d['integrity_features'],
            'float_cards' => $d['integrity_float_cards'],
            'cta' => $d['secondary_cta'],
            'trust_name' => 'Mirashka People Operations',
            'trust_role' => $d['trust_role'],
        ],
        'deliverables' => [
            'before_title' => 'Deliverables',
            'heading' => $d['deliverables_heading'],
            'content' => $d['deliverables_content'],
            'cards' => $d['deliverable_cards'],
        ],
        'suitable_for' => [
            'before_title' => 'Suitable For',
            'heading' => $d['suitable_heading'],
            'segments' => $d['suitable_segments'],
        ],
        'cta' => [
            'heading' => $d['primary_cta'],
            'content' => $d['cta_content'],
            'button' => $d['primary_cta'],
            'secondary' => $d['secondary_cta'],
            'image' => $d['cta_image'] ?? 'assets/admin/image/case-study/jyogi-team.webp',
            'bg_image' => $d['cta_bg_image'] ?? 'assets/admin/image/banner/hr-advisory.webp',
        ],
    ];
}

function export_php(mixed $value, int $depth = 0): string
{
    $pad = str_repeat('    ', $depth);
    if ($value === null) {
        return 'null';
    }
    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }
    if (is_int($value)) {
        return (string) $value;
    }
    if (is_string($value)) {
        return "'" . str_replace(["\\", "'"], ["\\\\", "\\'"], $value) . "'";
    }
    if (!is_array($value)) {
        return var_export($value, true);
    }
    $isList = array_keys($value) === range(0, count($value) - 1);
    if ($value === []) {
        return '[]';
    }
    $lines = ['['];
    foreach ($value as $k => $v) {
        $exported = export_php($v, $depth + 1);
        if ($isList) {
            $lines[] = $pad . '    ' . $exported . ',';
        } else {
            $key = is_int($k) ? (string) $k : "'" . str_replace("'", "\\'", (string) $k) . "'";
            $lines[] = $pad . '    ' . $key . ' => ' . $exported . ',';
        }
    }
    $lines[] = $pad . ']';
    return implode("\n", $lines);
}

function write_config(string $path, string $docblock, array $data): void
{
    global $protected;
    $basename = basename($path);
    if (in_array($basename, $protected, true)) {
        throw new RuntimeException("Refusing to overwrite protected file: {$basename}");
    }
    $body = "<?php\n\n/**\n * {$docblock}\n */\nreturn " . export_php($data) . ";\n";
    file_put_contents($path, $body);
}

// --- Category + sub-service definitions loaded from part 2 ---
require __DIR__ . '/build-what-we-do-configs-data.php';

/** @var array<string, array<string, mixed>> $categoryPageImages */
$categoryPageImages = require __DIR__ . '/category-images.php';

function apply_category_page_images(array $page, string $configKey): array
{
    global $categoryPageImages;
    $map = $categoryPageImages[$configKey] ?? [];
    if ($map === []) {
        return $page;
    }
    if (! empty($map['hero_image'])) {
        $page['hero']['image'] = $map['hero_image'];
    }
    if (! empty($map['risk_image'])) {
        $page['risk']['image'] = $map['risk_image'];
    }
    foreach (['risk_list_label', 'risk_visual_alt', 'risk_visual_caption_title', 'risk_visual_caption_text'] as $riskKey) {
        if (! empty($map[$riskKey])) {
            $page['risk'][$riskKey] = $map[$riskKey];
        }
    }
    if (! empty($map['services_image'])) {
        $page['services']['image'] = $map['services_image'];
    }
    if (! empty($map['integrity_image'])) {
        $page['workplace_integrity']['image'] = $map['integrity_image'];
    }
    if (! empty($map['cta_image'])) {
        $page['cta']['image'] = $map['cta_image'];
    }
    if (! empty($map['cta_bg_image'])) {
        $page['cta']['bg_image'] = $map['cta_bg_image'];
    }
    if (! empty($map['deliverable_images']) && ! empty($page['deliverables']['cards'])) {
        foreach ($page['deliverables']['cards'] as $i => &$card) {
            if (isset($map['deliverable_images'][$i])) {
                $card['image'] = $map['deliverable_images'][$i];
            }
        }
        unset($card);
    }

    return $page;
}

$workforceCategory = apply_category_page_images($workforceCategory, 'workforce-management');
$leadershipCategory = apply_category_page_images($leadershipCategory, 'leadership-organization');
$talentCategory = apply_category_page_images($talentCategory, 'talent-acquisition-staffing');
$hraasCategory = apply_category_page_images($hraasCategory, 'hr-as-a-service');

$outputs = [
    ['workforce-management.php', 'Category page: Workforce Management & Process Optimization', $workforceCategory],
    ['workforce-sub-services.php', 'Workforce Management — sub-service landing pages.', $workforceSubServices],
    ['leadership-organization.php', 'Category page: Leadership & Organizational Excellence Solutions', $leadershipCategory],
    ['leadership-sub-services.php', 'Leadership & Organization — sub-service landing pages.', $leadershipSubServices],
    ['talent-acquisition-staffing.php', 'Category page: Talent Acquisition & Staffing Excellence', $talentCategory],
    ['talent-acquisition-sub-services.php', 'Talent Acquisition & Staffing — sub-service landing pages.', $talentSubServices],
    ['hr-as-a-service.php', 'Category page: HR as a Service', $hraasCategory],
    ['hraas-sub-services.php', 'HR as a Service — sub-service landing pages.', $hraasSubServices],
];

echo "Building What We Do configs...\n\n";
$results = [];
foreach ($outputs as [$file, $doc, $data]) {
    $path = $configDir . '/' . $file;
    write_config($path, $doc, $data);
    $lines = count(file($path));
    $results[] = [$file, $lines];
    echo "  Created {$file} ({$lines} lines)\n";
}

echo "\nDone. " . count($results) . " files written.\n";

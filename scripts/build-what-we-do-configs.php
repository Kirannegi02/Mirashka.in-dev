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

function build_sub_service(array $d): array
{
    $img = $d['image'] ?? img_at(0);
    $steps = $d['process_steps'] ?? [];
    $stepTitles = array_map(static fn (array $s): string => $s['title'], $steps);
    $stepSummary = $stepTitles !== []
        ? implode(', ', array_slice($stepTitles, 0, 3)) . (count($stepTitles) > 3 ? ', and more' : '')
        : 'the core phases below';

    $dashContent = $d['dash_content'] ?? sprintf(
        'Mirashka structures %s across %s — with practical guidance, documented outputs and progress your leadership team can track.',
        strtolower($d['title']),
        $stepSummary
    );

    return [
        'meta' => [
            'title' => $d['meta_title'],
            'description' => $d['meta_description'],
            'keywords' => $d['meta_keywords'],
        ],
        'card' => [
            'title' => $d['title'],
            'image' => $img,
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
            $d['dash_before'] ?? 'Service Focus',
            $d['dash_heading'] ?? ($d['process_heading'] ?? $d['title']),
            $dashContent,
            $d['primary_cta'],
            $d['dash_tabs']
        ),
        'sidebar' => build_sidebar(
            $d['sidebar_label'] ?? 'What You Receive',
            $d['sidebar_heading'] ?? ($d['focus_title'] ?? $d['title']),
            $d['sidebar_content'] ?? ($d['focus_content'] ?? $d['hero_content'] ?? ''),
            $d['primary_cta'],
            $d['sidebar_items']
        ),
        'focus' => [
            'tag' => $d['focus_tag'] ?? $d['title'],
            'title' => $d['focus_title'],
            'content' => $d['focus_content'],
            'image' => $d['focus_image'] ?? $d['image'] ?? $img,
            'image_position' => $d['focus_position'] ?? 'center center',
        ],
        'page_cta' => [
            'button' => $d['primary_cta'],
            'secondary' => $d['secondary_cta'],
        ],
    ];
}

function build_services_overview(array $items, string $before, string $heading, string $content, int $imgIdx = 0): array
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
        'image' => img_at($imgIdx),
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
            'image' => img_at(2),
            'cta' => $d['secondary_cta'],
            'risks' => $d['risks'],
        ],
        'services' => build_services_overview(
            $d['service_items'],
            $d['services_before'] ?? 'Services Overview',
            $d['services_heading'],
            $d['services_content'],
            1
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
            'image' => img_at(5),
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
            'image' => 'assets/admin/image/case-study/jyogi-team.webp',
            'bg_image' => 'assets/admin/image/banner/hr-advisory.webp',
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

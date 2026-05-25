<?php

declare(strict_types=1);

/** @var array<string, array<string, array<string, mixed>>> $maps */
$maps = require __DIR__ . '/sub-service-images.php';
$complianceMaps = $maps['compliance'] ?? [];
/** @var array<string, array<string, array{standout?: array, experience?: array}>> $extraSections */
$extraSections = require __DIR__ . '/sub-service-extra-sections.php';
$complianceExtra = $extraSections['compliance'] ?? [];

function patch_export_php(mixed $value, int $depth = 0): string
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
    if (! is_array($value)) {
        return var_export($value, true);
    }
    $isList = array_keys($value) === range(0, count($value) - 1);
    if ($value === []) {
        return '[]';
    }
    $lines = ['['];
    foreach ($value as $k => $v) {
        $exported = patch_export_php($v, $depth + 1);
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

$focusTitles = [
    'expert-legal-hr-consultations' => 'Practical HR and legal guidance before critical people decisions',
    'policy-documentation-excellence' => 'Employee handbooks and policies your teams understand and follow',
    'compliance-risk-assessments' => 'HR risk visibility with clear low, medium and high priorities',
    'workplace-ethics-training' => 'Facilitator-led ethics and POSH training with audit-ready records',
];

$path = dirname(__DIR__) . '/config/compliance-sub-services.php';
$cfg = require $path;

$cfg['shared']['cta']['image'] = 'assets/frontend/img/compliance/cwi-deliverable-audit.png';
$cfg['shared']['cta']['bg_image'] = 'assets/frontend/img/compliance/cwi-cta-bg.png';

foreach ($cfg['services'] as $slug => &$svc) {
    $map = $complianceMaps[$slug] ?? null;
    if ($map === null) {
        continue;
    }

    $svc['card']['image'] = $map['card'];
    $svc['hero']['image'] = $map['hero'];
    $svc['focus']['image'] = $map['focus'];
    $svc['focus']['image_position'] = $map['focus_position'] ?? 'center center';
    if (isset($focusTitles[$slug])) {
        $svc['focus']['title'] = $focusTitles[$slug];
    }

    $steps = $svc['process']['steps'] ?? [];
    $tabs = [];
    foreach ($steps as $i => $step) {
        $tabs[] = [
            'label' => $step['title'],
            'heading' => $step['title'],
            'content' => $step['text'],
            'image' => $map['steps'][$i] ?? $map['hero'],
        ];
    }
    if ($tabs !== []) {
        $svc['dashboard']['tabs'] = $tabs;
    }

    $svc['bottom_cta'] = [
        'image' => $map['bottom_cta'],
        'bg_image' => 'assets/frontend/img/compliance/cwi-cta-bg.png',
    ];

    if (isset($complianceExtra[$slug]['standout'])) {
        $svc['standout'] = $complianceExtra[$slug]['standout'];
    }
    if (isset($complianceExtra[$slug]['experience'])) {
        $svc['experience'] = $complianceExtra[$slug]['experience'];
        if (empty($svc['experience']['badge_icon'])) {
            $firstStep = $svc['process']['steps'][0] ?? null;
            $svc['experience']['badge_icon'] = $firstStep['icon'] ?? 'ri-customer-service-2-line';
        }
    }

    if ($slug === 'expert-legal-hr-consultations') {
        $svc['outcome'] = [
            'before_title' => 'Outcome',
            'heading' => 'Faster, safer HR decisions',
            'content' => 'Move from informal advice to documented, defensible people decisions — with clarity on risk, process and documentation before you act on terminations, discipline, exits or workplace disputes.',
            'button' => $svc['page_cta']['button'] ?? 'Speak to an HR Advisor',
            'secondary' => $svc['page_cta']['secondary'] ?? null,
        ];
    } elseif ($slug === 'policy-documentation-excellence') {
        $svc['outcome'] = [
            'before_title' => 'Ready to formalize your HR documentation?',
            'heading' => 'Build Your HR Policy Kit',
            'content' => 'Get customized handbooks, policies, appointment formats and communication templates — aligned to your culture, approved by leadership and ready for your team to follow.',
            'button' => 'Build Your HR Policy Kit',
            'secondary' => 'Speak to an HR Advisor',
        ];
    } elseif ($slug === 'compliance-risk-assessments') {
        $svc['outcome'] = [
            'before_title' => 'Ready to see where you stand?',
            'heading' => 'Request HR Risk Audit',
            'content' => 'Get a structured review of documentation, payroll, records, policy implementation and statutory adherence — with risk grading and a corrective action plan your leadership can execute.',
            'button' => 'Request HR Risk Audit',
            'secondary' => 'Speak to an HR Advisor',
        ];
    } elseif ($slug === 'workplace-ethics-training') {
        $svc['outcome'] = [
            'before_title' => 'Ready to strengthen your workplace culture?',
            'heading' => 'Schedule Workplace Training',
            'content' => 'Book ethics, anti-harassment and POSH awareness sessions for your teams — with manager sensitization and audit-ready attendance records.',
            'button' => 'Schedule Workplace Training',
            'secondary' => 'Speak to an HR Advisor',
        ];
    }
}
unset($svc);

$body = "<?php\n\n/**\n * Compliance & Workplace Integrity — sub-service landing pages.\n */\nreturn " . patch_export_php($cfg) . ";\n";
file_put_contents($path, $body);
echo "Patched compliance-sub-services.php (unique images + focus alignment).\n";

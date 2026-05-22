@php
    $fonts = config('fonts');
    $family = $fonts['family'];
    $fallback = $fonts['fallback'];
    $stack = "'{$family}', {$fallback}";
    $vars = $fonts['css_vars'];
    $variable = $fonts['variable'];
    $fontUrl = asset($variable['path']);
@endphp
{{-- Mirashka fonts: change family/file in config/fonts.php --}}
<style id="mirashka-fonts">
@font-face {
    font-family: '{{ $family }}';
    src: url('{{ $fontUrl }}') format('truetype');
    font-weight: {{ $variable['weight_min'] }} {{ $variable['weight_max'] }};
    font-style: normal;
    font-display: swap;
}

:root {
    {{ $vars['primary'] }}: {!! $stack !!};
    {{ $vars['secondary'] }}: {!! $stack !!};
    {{ $vars['sans'] }}: {!! $stack !!};
    {{ $vars['heading'] }}: {!! $stack !!};
}
</style>

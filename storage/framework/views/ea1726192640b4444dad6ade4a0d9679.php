<?php
    $fonts = config('fonts');
    $family = $fonts['family'];
    $fallback = $fonts['fallback'];
    $stack = "'{$family}', {$fallback}";
    $vars = $fonts['css_vars'];
    $variable = $fonts['variable'];
    $fontUrl = asset($variable['path']);
?>

<style id="mirashka-fonts">
@font-face {
    font-family: '<?php echo e($family); ?>';
    src: url('<?php echo e($fontUrl); ?>') format('truetype');
    font-weight: <?php echo e($variable['weight_min']); ?> <?php echo e($variable['weight_max']); ?>;
    font-style: normal;
    font-display: swap;
}

:root {
    <?php echo e($vars['primary']); ?>: <?php echo $stack; ?>;
    <?php echo e($vars['secondary']); ?>: <?php echo $stack; ?>;
    <?php echo e($vars['sans']); ?>: <?php echo $stack; ?>;
    <?php echo e($vars['heading']); ?>: <?php echo $stack; ?>;
}
</style>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/components/mirashka-fonts.blade.php ENDPATH**/ ?>
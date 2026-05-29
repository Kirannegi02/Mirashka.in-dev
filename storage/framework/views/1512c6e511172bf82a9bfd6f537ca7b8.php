


<?php
    $flashMessages = [];
    
    if (session('success'))
        $flashMessages[] = ['type' => 'success', 'message' => strip_tags(session('success'))];
    
    if (session('error'))
        $flashMessages[] = ['type' => 'error', 'message' => strip_tags(session('error'))];
    
    if (session('warning'))
        $flashMessages[] = ['type' => 'warning', 'message' => strip_tags(session('warning'))];
    
    if (session('info'))
        $flashMessages[] = ['type' => 'info', 'message' => strip_tags(session('info'))];
    
    if (session('errors') && session('errors')->any())
        $flashMessages[] = ['type' => 'error', 'message' => strip_tags(session('errors')->first())];
?>

<?php $__currentLoopData = $flashMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="js-flash-message" 
     data-type="<?php echo e($flash['type']); ?>" 
     data-message="<?php echo e(e($flash['message'])); ?>" 
     style="display:none;"></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH F:\xampp\htdocs\Mirashka.in-dev\resources\views/components/notification.blade.php ENDPATH**/ ?>
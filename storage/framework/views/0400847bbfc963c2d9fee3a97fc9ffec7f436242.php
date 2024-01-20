<?php $__env->startSection('title',trans('Plan')); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make($theme.'sections.investment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(basicControl()->deposit_withdrawals): ?>
        <?php echo $__env->make($theme.'sections.deposit-withdraw', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->make($theme.'sections.we-accept', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make($theme.'sections.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/plan.blade.php ENDPATH**/ ?>
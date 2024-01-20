<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get($title); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- POLICY -->
<section id="contact-section">
    <div class="overlay pb-150">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="section-header py-5 my-5">
                        <h4 class="sub-title"><?php echo app('translator')->get('Welcome To Our'); ?></h4>
                        <h4 class="title"><?php echo app('translator')->get(@$title); ?></h4>
                        <div class="getLinkDescription">
                            <?php echo app('translator')->get(@$description); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /POLICY -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/getLink.blade.php ENDPATH**/ ?>
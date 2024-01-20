
<?php if(isset($templates['we-accept'][0]) && $weAccept = $templates['we-accept'][0]): ?>
    <section id="payment-section">
        <img class="img img-1 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-1.png')); ?>" alt="<?php echo app('translator')->get('ellipse-1-image'); ?>">
        <img class="img img-2 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-2.png')); ?>" alt="<?php echo app('translator')->get('ellipse-2-image'); ?>">
        <img class="img img-3 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-3.png')); ?>" alt="<?php echo app('translator')->get('ellipse-3-image'); ?>">
        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="section-header">
                            <h4 class="sub-title"><?php echo app('translator')->get(@$weAccept->description->title); ?></h4>
                            <h3 class="title"><?php echo app('translator')->get(@$weAccept->description->sub_title); ?></h3>
                            <p class="area-para"><?php echo app('translator')->get(@$weAccept->description->short_details); ?></p>
                        </div>
                    </div>
                </div>

                <div class="<?php echo e((session()->get('rtl') == 1) ? 'payment-carousel-rtl': 'payment-carousel'); ?> wow fadeInUp">
                    <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div class="single-item">
                            <img src="<?php echo e(getFile(config('location.gateway.path').@$gateway->image)); ?>" alt="<?php echo e(@$gateway->name); ?>" class="p-2">
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- payment method end -->


<?php endif; ?>
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/sections/we-accept.blade.php ENDPATH**/ ?>
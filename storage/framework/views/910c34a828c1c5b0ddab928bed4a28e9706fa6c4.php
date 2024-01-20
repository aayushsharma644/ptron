<?php if(isset($templates['investor'][0]) && $investor = $templates['investor'][0]): ?>

    <?php if(0 < count($investors)): ?>
<!-- INVESTOR -->
<section id="top-investor-section">
    <div class="overlay pt-150 pb-150">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="section-header">
                        <h4 class="sub-title"><?php echo app('translator')->get(@$investor->description->title); ?></h4>
                        <h3 class="title"><?php echo app('translator')->get(@$investor->description->sub_title); ?></h3>
                        <p class="area-para"><?php echo app('translator')->get(@$investor->description->short_title); ?></p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-md-center">
                <?php $__currentLoopData = $investors->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 justify-content-center wow fadeInLeft mb-3">
                    <div class="single-item text-center">
                        <img src="<?php echo e(getFile(config('location.user.path').optional($item->user)->image)); ?>"
                        alt="<?php echo app('translator')->get('Investor Image Missing'); ?>" class="investor-img-circle">
                        <div class="text-area text-center">
                            <h2 class="title"><?php echo app('translator')->get(optional($item->user)->username); ?></h2>
                            <p><?php echo app('translator')->get('Investor'); ?></p>
                        </div>
                        <div class="icon-area">
                            <?php echo app('translator')->get('Invest'); ?>: <?php echo e($basic->currency_symbol); ?><?php echo e(getAmount($item->totalAmount)); ?>

                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<!-- INVESTOR -->

    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/sections/investor.blade.php ENDPATH**/ ?>
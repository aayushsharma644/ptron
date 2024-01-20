<?php if(isset($templates['news-letter-referral'][0]) && 0 < count($referralLevel) && $newsLetterReferral = $templates['news-letter-referral'][0]): ?>
    <!-- affiliate partner start -->
    <section id="affiliate-partner">
        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="left-area d-flex">
                            <img src="<?php echo e(asset('assets/themes/lightorange/images/Affiliate-Partner.png')); ?>" alt="<?php echo app('translator')->get('affiliate image'); ?>">
                            <span class="border"></span>
                            <div class="text-area">
                                <h3><?php echo app('translator')->get(@$newsLetterReferral->description->referral_title); ?></h3>
                                <h2><?php echo app('translator')->get(@$newsLetterReferral->description->referral_sub_title); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-end align-items-center justify-cen">
                        <div class="right-area">
                            <a class="cmn-btn" href="<?php echo e(route('register')); ?>"><?php echo e(trans('join us now')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="referral-commisson">
            <div class="px-5">
                <div class="referral-box">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h4 class="sub-title"><?php echo app('translator')->get(@$newsLetterReferral->description->sub_title); ?></h4>
                                <h3 class="title"><?php echo app('translator')->get(@$newsLetterReferral->description->title); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="commission-box">
                        <div class="row d-flex justify-content-between">
                            <?php $__currentLoopData = $referralLevel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-4 wow fadeInLeftBig pb-4">
                                <div class="single-item justify-content-center d-flex">
                                    <div class="left-item">
                                        <div class="icon-box">
                                            <img src="<?php echo e(asset('assets/themes/lightorange/images/referrel.png')); ?>" alt="<?php echo app('translator')->get('referrel image'); ?>">
                                        </div>
                                    </div>
                                    <div class="right-area">
                                        <p><?php echo e(trans('Level')); ?> <?php echo e($data->level); ?> <?php echo e(trans('Instant')); ?></p>
                                        <span class="number"><strong class="themecolor"><?php echo e($data->percent); ?>%</strong></span>
                                        <p><?php echo app('translator')->get('Bonus Reward'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- affiliate partner end -->
<?php endif; ?>
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/sections/referral.blade.php ENDPATH**/ ?>
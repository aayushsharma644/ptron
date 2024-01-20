<?php $__env->startSection('title',trans($title)); ?>

<?php $__env->startSection('content'); ?>
    <!-- CONTACT -->

        <!-- deposited start -->
        <section id="profit-deposited" class="pt-150 pb-150 contact">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInLeftBig">
                        <div class="single-item text-center">
                            <div class="icon-area">
                                <img src="<?php echo e(asset($themeTrue.'images/icon/contact_icon_3.png')); ?>" alt="<?php echo app('translator')->get('Phone image'); ?>">
                            </div>
                            <div class="text-area">
                                <p class="top">Call</p>
                                <p class="area-para"><?php echo app('translator')->get(@$contact->phone); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="single-item text-center">
                            <div class="icon-area">
                                <img src="<?php echo e(asset($themeTrue.'images/icon/contact_icon_2.png')); ?>" alt="<?php echo app('translator')->get('Email image'); ?>">
                            </div>
                            <div class="text-area">
                                <p class="top"><?php echo app('translator')->get('Email'); ?></p>
                                <p class="area-para"><?php echo app('translator')->get(@$contact->email); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInRightBig">
                        <div class="single-item text-center">
                            <div class="icon-area">
                                <img src="<?php echo e(asset($themeTrue.'images/icon/contact_icon_1.png')); ?>" alt="<?php echo app('translator')->get('address image'); ?>">
                            </div>
                            <div class="text-area">
                                <p class="top"><?php echo app('translator')->get('Location'); ?></p>
                                <p class="area-para"><?php echo app('translator')->get(@$contact->address); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deposited end -->

        <!-- contact Us start -->
        <section id="contact-section">
            <div class="overlay pb-150">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-10">
                            <div class="section-header">
                                <h4 class="sub-title"><?php echo app('translator')->get(@$contact->heading); ?></h4>
                                <h3 class="title"><?php echo app('translator')->get(@$contact->sub_heading); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <form class="contact-form" action="<?php echo e(route('contact.send')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-4 wow fadeInLeftBig">
                                    <div class="form-group mb-30">
                                        <label><?php echo app('translator')->get('Type Your Name'); ?></label>
                                        <input type="text" class="name text-dark" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo app('translator')->get('Name'); ?>">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInUp">
                                    <div class="form-group mb-30">
                                        <label><?php echo app('translator')->get('Type Your E-mail'); ?></label>
                                        <input type="email" class="text-dark" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->get('Email Address'); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInRightBig">
                                    <div class="form-group mb-30">
                                        <label><?php echo app('translator')->get('Type Subject'); ?></label>
                                        <input type="text" class="text-dark" name="subject" value="<?php echo e(old('subject')); ?>" placeholder="<?php echo app('translator')->get('Subject'); ?>">
                                        <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp">
                                    <div class="form-group textarea mb-30">
                                        <label><?php echo app('translator')->get('Type Your Message'); ?></label>
                                        <textarea name="message" class="text-dark" placeholder="<?php echo app('translator')->get('Something write here...'); ?>" cols="50" rows="7"><?php echo e(old('message')); ?></textarea>
                                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-12 btn-area text-right">
                                    <button type="submit" class="cmn-btn"><?php echo e(trans('Send Message')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- /CONTACT -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/contact.blade.php ENDPATH**/ ?>
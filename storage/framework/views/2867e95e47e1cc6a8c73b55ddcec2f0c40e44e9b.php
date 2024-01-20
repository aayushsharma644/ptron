<?php $__env->startSection('title',__('Login')); ?>

<?php $__env->startSection('content'); ?>

    <!-- login start -->
    <section id="login-section">
        <img class="img img-4 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-4.png')); ?>" alt="<?php echo app('translator')->get('ellipse-4-image'); ?>">
        <img class="img img-3 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-3.png')); ?>" alt="<?php echo app('translator')->get('ellipse-5-image'); ?>">
        <img class="img img-6 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-6.png')); ?>" alt="<?php echo app('translator')->get('ellipse-6-image'); ?>">
        <img class="img img-7 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-7.png')); ?>" alt="<?php echo app('translator')->get('ellipse-7-image'); ?>">

        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-6">
                        <div class="card-area">
                            <h2 class="mb-30 color-one font-weight-bolder"><?php echo app('translator')->get('Sign Your Account'); ?></h2>
                            <form class="login-form wow fadeInUp" action="<?php echo e(route('login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-30">
                                            <input type="text" class="username" name="username"  placeholder="<?php echo app('translator')->get('Email Or Username'); ?>">
                                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-30">
                                            <input type="password" name="password" placeholder="<?php echo app('translator')->get('Password'); ?>">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger mt-1"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <?php if(basicControl()->reCaptcha_status_registration): ?>
                                        <div class="col-md-6 box mb-4 form-group">
                                            <?php echo NoCaptcha::renderJs(session()->get('trans')); ?>

                                            <?php echo NoCaptcha::display($basic->theme == 'deepblack' ? ['data-theme' => 'dark'] : []); ?>

                                            <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-lg-12">
                                        <div class="form-group d-flex justify-content-between d-none">
                                            <div class="input-checkbox d-flex justify-content-between">
                                                <label class="box-area"><?php echo app('translator')->get('Remember me'); ?>
                                                    <input id="remember" type="checkbox" class="custom-control-input" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="forgot-area">
                                                <a class="forgot" href="<?php echo e(route('password.request')); ?>"><?php echo app('translator')->get("Forgot password?"); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 btn-area">
                                        <button type="submit" class="cmn-btn"><?php echo app('translator')->get('Login'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/auth/login.blade.php ENDPATH**/ ?>
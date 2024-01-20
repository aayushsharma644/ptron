<?php $__env->startSection('title','Register'); ?>


<?php $__env->startSection('content'); ?>
    <!-- register start -->
    <section id="login-section" class="register">
        <img class="img img-4 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-4.png')); ?>" alt="<?php echo app('translator')->get('ellipse-4-image'); ?>">
        <img class="img img-3 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-3.png')); ?>" alt="<?php echo app('translator')->get('ellipse-5-image'); ?>">
        <img class="img img-6 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-6.png')); ?>" alt="<?php echo app('translator')->get('ellipse-6-image'); ?>">
        <img class="img img-7 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-7.png')); ?>" alt="<?php echo app('translator')->get('ellipse-7-image'); ?>">

        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-9">
                        <div class="card-area">
                            <h2 class="mb-30"><?php echo app('translator')->get('Create New Account'); ?></h2>
                            <form class="login-form wow fadeInUp" action="<?php echo e(route('register')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <?php if(session()->get('sponsor') != null): ?>
                                        <div class="col-md-12">
                                            <div class="form-group mb-30">
                                                <label><?php echo app('translator')->get('Sponsor Name'); ?></label>
                                                <input type="text" name="sponsor" class="form-control" id="sponsor"
                                                    placeholder="<?php echo e(trans('Sponsor By')); ?>"
                                                    value="<?php echo e(session()->get('sponsor')); ?>" readonly>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input type="text" class="username" name="firstname"
                                            value="<?php echo e(old('firstname')); ?>" placeholder="<?php echo app('translator')->get('First Name'); ?>">

                                            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger  mt-1"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input type="text" class="username" name="lastname"
                                            value="<?php echo e(old('lastname')); ?>" placeholder="<?php echo app('translator')->get('Last Name'); ?>">

                                            <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger  mt-1"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input type="text" class="email" name="username"
                                            value="<?php echo e(old('username')); ?>" placeholder="<?php echo app('translator')->get('Username'); ?>">

                                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger  mt-1"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input type="text" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->get('Email Address'); ?>">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger  mt-1"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-30">
                                            <?php
                                                $country_code = (string) @getIpInfo()['code'] ?: null;
                                                $myCollection = collect(config('country'))->map(function($row) {
                                                    return collect($row);
                                                });
                                                $countries = $myCollection->sortBy('code');
                                            ?>

                                            <div class="input-group ">
                                                <div class="input-group-prepend w-50">
                                                    <select name="phone_code" class="form-control country_code dialCode-change" style="height: calc(2.5em + .75rem + 2px);">
                                                        <?php $__currentLoopData = config('country'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($value['phone_code']); ?>"
                                                                    data-name="<?php echo e($value['name']); ?>"
                                                                    data-code="<?php echo e($value['code']); ?>"
                                                                <?php echo e($country_code == $value['code'] ? 'selected' : ''); ?>

                                                            > <?php echo e($value['name']); ?> (<?php echo e($value['phone_code']); ?>)

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <input type="text" name="phone" class="form-control dialcode-set" value="<?php echo e(old('phone')); ?>" placeholder="<?php echo app('translator')->get('Your Phone Number'); ?>" style="height: calc(2.5em + .75rem + 2px);">
                                            </div>


                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger mt-1"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <input type="hidden" name="country_code" value="<?php echo e(old('country_code')); ?>"
                                                   class="text-dark">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
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

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input type="password" name="password_confirmation" placeholder="<?php echo app('translator')->get('Confirm Password'); ?>">
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
                                            <div class="form-group d-flex justify-content-between d-none">
                                                <div class="input-checkbox d-flex justify-content-between">
                                                    <label class="box-area"><?php echo app('translator')->get('I agree terms & conditions'); ?>
                                                        <input type="checkbox" checked="checked" required>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="forgot-area">
                                                <a class="forgot" href="<?php echo e(route('password.request')); ?>"><?php echo app('translator')->get("Already have an account? Login"); ?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 btn-area">
                                        <button type="submit" class="cmn-btn"><?php echo app('translator')->get('Sign Up'); ?></button>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register end -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        $(document).ready(function () {
            setDialCode();
            $(document).on('change', '.dialCode-change', function () {
                setDialCode();
            });
            function setDialCode() {
                let currency = $('.dialCode-change').val();
                $('.dialcode-set').val(currency);
            }

        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/auth/register.blade.php ENDPATH**/ ?>
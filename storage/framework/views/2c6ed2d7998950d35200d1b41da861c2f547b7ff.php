
<!-- footer-section start -->
    <footer id="inner-footer-section">
        <div class="wrapper-top">
            <div class="clip"></div>
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-top pt-150 pb-150">
                                <div class="row text-center">
                                    <div class="col-lg-12">
                                        <?php if(isset($contentDetails['social'])): ?>
                                            <div class="social-icon">
                                                <ul class="icon-area d-flex justify-content-center">
                                                    <?php $__currentLoopData = $contentDetails['social']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="social-nav">
                                                        <a href="<?php echo e(@$data->content->contentMedia->description->link); ?>">
                                                            <i class="<?php echo e(@$data->content->contentMedia->description->icon); ?>"></i>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>

                                        <?php if(isset($newsLetter['news-letter'][0]) && $newsLetter = $newsLetter['news-letter'][0]): ?>
                                            <div class="footer-text">
                                                <h2 class="sub-title"><?php echo app('translator')->get(@$newsLetter->description->sub_title); ?></h2>
                                                <h2 class="title"><?php echo app('translator')->get(@$newsLetter->description->title); ?></h2>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                        <div class="col-lg-6 mt-2">
                                            <form action="<?php echo e(route('subscribe')); ?>" method="post">
                                                <div class="subscribe d-flex">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="email" name="email" type="email" class="text-dark" placeholder="<?php echo app('translator')->get('Email Address'); ?>">
                                                    <button class="subscribe-btn" type="submit"><?php echo e(trans('Subscribe')); ?></button>

                                                </div>
                                            </form>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 col-md-4 justify-cen d-flex justify-content-start">
                            <div class="left-area">
                                <a class="site-logo site-title" href="<?php echo e(url('/')); ?>">
                                    <img src="<?php echo e(getFile(config('location.logoIcon.path').'logo.png')); ?>"
                                    alt="<?php echo e(config('basic.site_title')); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 justify-cen d-flex justify-content-end align-items-center">
                            <ul class="d-flex">

                                <li>
                                    <a href="<?php echo e(route('home')); ?>"> <?php echo app('translator')->get('Home'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('about')); ?>"> <?php echo app('translator')->get('About'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('faq')); ?>"> <?php echo app('translator')->get('FAQ'); ?></a>
                                </li>
                                <?php if(isset($contentDetails['support'])): ?>
                                <?php $__currentLoopData = $contentDetails['support']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('getLink', [slug($data->description->title), $data->content_id])); ?>">
                                            <?php echo app('translator')->get($data->description->title); ?>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-area text-center">
                                <p><?php echo app('translator')->get('Copyright'); ?> &copy; <?php echo e(date('Y')); ?> <?php echo app('translator')->get($basic->site_title); ?> <?php echo app('translator')->get('All Rights Reserved'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- footer-section end -->
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/partials/footer.blade.php ENDPATH**/ ?>
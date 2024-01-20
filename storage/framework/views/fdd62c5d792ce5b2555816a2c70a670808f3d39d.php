<!-- PAGE-BANNER -->
<?php if(!request()->routeIs('home')): ?>
    <section id="inner-banner">
        <div class="overlay bg_img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="banner-content">
                            <div class="banner-text text-center">
                                <h2 class="title"><?php echo $__env->yieldContent('title'); ?></h2>
                            </div>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(trans('Home')); ?></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $__env->yieldContent('title'); ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /PAGE-BANNER -->
<?php endif; ?>
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/partials/banner.blade.php ENDPATH**/ ?>
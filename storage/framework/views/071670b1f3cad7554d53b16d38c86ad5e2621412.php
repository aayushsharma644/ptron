<?php if(isset($templates['why-chose-us'][0]) && $whyChoseUs = $templates['why-chose-us'][0]): ?>

    <section id="choose-us-section">
        <img class="img img-4 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-4.png')); ?>" alt="<?php echo app('translator')->get('ellipse-4-image'); ?>">
        <img class="img img-5 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-5.png')); ?>" alt="<?php echo app('translator')->get('ellipse-5-image'); ?>">
        <img class="img img-6 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-6.png')); ?>" alt="<?php echo app('translator')->get('ellipse-6-image'); ?>">
        <img class="img img-7 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-7.png')); ?>" alt="<?php echo app('translator')->get('ellipse-7-image'); ?>">

        <div class="overlay pt-150 pb-150">
            <div class="container">

                <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-10">
                            <div class="section-header">
                                <h4 class="sub-title"><?php echo app('translator')->get($whyChoseUs->description->title); ?></h4>
                                <h3 class="title"><?php echo app('translator')->get($whyChoseUs->description->sub_title); ?></h3>
                                <p class="area-para"><?php echo app('translator')->get($whyChoseUs->description->short_details); ?></p>
                            </div>
                        </div>
                </div>

                <?php if(isset($contentDetails['why-chose-us'])): ?>

                    <div class=" <?php echo e((session()->get('rtl') == 1) ? 'choose-us-carousel-rtl': 'choose-us-carousel'); ?> wow fadeInUp" >
                        <?php $__currentLoopData = $contentDetails['why-chose-us']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col">
                                <div class="single-item d-flex">
                                    <div class="left-area">
                                        <div class="icon-box d-flex justify-content-center align-items-center">
                                            <img src="<?php echo e(getFile(config('location.content.path').@$item->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('why-choose-us image'); ?>">
                                        </div>
                                    </div>
                                    <div class="right-area">
                                        <h2><?php echo app('translator')->get(@$item->description->title); ?></h2>
                                        <p><?php echo app('translator')->get(@$item->description->information); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<!-- why choose us end -->
<?php endif; ?>
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/sections/why-chose-us.blade.php ENDPATH**/ ?>
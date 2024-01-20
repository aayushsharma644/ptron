<?php if(isset($templates['how-it-work'][0]) && $howItWork = $templates['how-it-work'][0]): ?>
    <section id="about-us-section" class="pt-150 pb-150">
        <img class="img-1 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-1.png')); ?>" alt="<?php echo app('translator')->get('ellipse-1-image'); ?>">
        <img class="img-2 zoomInOutInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-2.png')); ?>" alt="<?php echo app('translator')->get('ellipse-2-image'); ?>">
        <img class="img-3 zoomInOut2sInfinite" src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-3.png')); ?>" alt="<?php echo app('translator')->get('ellipse-3-image'); ?>">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 d-flex align-items-center justify-content-md-center wow fadeInLeftBig">
                    <div class="video-area">
                        <div class="content d-flex justify-content-center align-items-center">
                            <img src="<?php echo e(getFile(config('location.content.path').@$howItWork->templateMedia()->image)); ?>" alt="<?php echo app('translator')->get('how-it-work-image'); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRightBig">
                    <div class="right-area">
                        <div class="section-head">
                            <h3 class="title font-weight-bold"><?php echo app('translator')->get(@$howItWork->description->title); ?></h3>
                        </div>
                        <div class="single-item">
                            <?php if(isset($contentDetails['how-it-work'])): ?>
                            <?php $__currentLoopData = $contentDetails['how-it-work']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k =>  $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="btn-top d-flex">
                                    <div class="icon-area">
                                        <img src="<?php echo e(getFile(config('location.content.path').@$item->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('how-it-work-image'); ?>">
                                        
                                    </div>
                                    <div class="text-area">
                                        <h5 class="font-weight-bold" style="color:#33406A"><?php echo app('translator')->get(@$item->description->title); ?></h5>
                                        <div style="color:#526288"><?php echo app('translator')->get(@$item->description->short_description); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/sections/how-it-work.blade.php ENDPATH**/ ?>
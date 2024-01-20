<?php if(isset($templates['know-more-us'][0]) && $knowMoreUs = $templates['know-more-us'][0]): ?>

    <section id="investor-history-section">
        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-7">
                        <div class="section-header">
                            <h4 class="sub-title"><?php echo app('translator')->get(@$knowMoreUs->description->title); ?></h4>
                            <h3 class="title"><?php echo app('translator')->get(@$knowMoreUs->description->sub_title); ?></h3>
                            <p class="area-para"><?php echo app('translator')->get(@$knowMoreUs->description->short_details); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-md-center">
                    <?php if(isset($contentDetails['know-more-us'])): ?>
                    <?php $__currentLoopData = $contentDetails['know-more-us']->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k =>  $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 wow fadeInLeftBig">
                        <div class="single-item justify-content-center d-flex">
                            <div class="left-item">
                                <div class="icon-box">
                                    <img src="<?php echo e(getFile(config('location.content.path').@$item->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('know-more-us-image'); ?>">
                                </div>
                            </div>
                            <div class="right-area">
                                <span class="number"><?php echo app('translator')->get(@$item->description->number); ?></span>
                                <p><?php echo app('translator')->get(@$item->description->title); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/sections/know-more-us.blade.php ENDPATH**/ ?>
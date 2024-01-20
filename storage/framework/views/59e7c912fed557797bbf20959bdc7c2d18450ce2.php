<?php if(isset($contentDetails['feature'])): ?>
    <?php if(0 < count($contentDetails['feature'])): ?>
        <section id="profit-deposited" class="pt-150 pb-150">
            <div class="container">
                <div class="row d-flex justify-content-md-center">
                    <?php $__currentLoopData = $contentDetails['feature']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 mb-md-4 wow fadeInLeft">
                            <div class="single-item text-center">
                                <div class="icon-area">
                                    <img
                                        src="<?php echo e(getFile(config('location.content.path').@$feature->content->contentMedia->description->image)); ?>"
                                        alt="<?php echo app('translator')->get('feature image'); ?>">
                                </div>
                                <div class="number">
                                    <span><?php echo app('translator')->get(@$feature->description->information); ?></span>
                                </div>
                                <div class="title-area">
                                    <h2 class="area-title"><?php echo app('translator')->get(@$feature->description->title); ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/sections/feature.blade.php ENDPATH**/ ?>
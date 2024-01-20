<?php if(isset($templates['testimonial'][0]) && $testimonial = $templates['testimonial'][0]): ?>
    <section id="testmonial-section">
        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="section-header">
                            <h4 class="sub-title"><?php echo app('translator')->get($testimonial->description->title); ?></h4>
                            <h3 class="title"><?php echo app('translator')->get($testimonial->description->sub_title); ?></h3>
                            <p class="area-para"><?php echo app('translator')->get($testimonial->description->short_title); ?></p>
                        </div>
                    </div>
                </div>
                <div class=" <?php echo e((session()->get('rtl') == 1) ? 'testmonial-carousel-rtl': 'testmonial-carousel'); ?> wow fadeInUp">
                    <?php if(isset($contentDetails['testimonial'])): ?>
                        <?php $__currentLoopData = $contentDetails['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col">
                                <div class="single-item">
                                    <div class="top-area d-flex align-items-center">
                                        <img
                                            src="<?php echo e(getFile(config('location.content.path').@$data->content->contentMedia->description->image)); ?>"
                                            class="testmonial-img-circle" alt="<?php echo app('translator')->get('testimonial image'); ?>">
                                        <div class="text-area">
                                            <h2><?php echo app('translator')->get(@$data->description->name); ?></h2>
                                            <p><?php echo app('translator')->get(@$data->description->designation); ?></p>
                                        </div>
                                    </div>
                                    <div class="bottom-area">
                                        <p><span>“</span><?php echo app('translator')->get(@$data->description->description); ?><span>”</span></p>
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
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/sections/testimonial.blade.php ENDPATH**/ ?>
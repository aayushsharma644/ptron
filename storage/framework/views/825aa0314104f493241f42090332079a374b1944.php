<?php if(isset($templates['faq'][0]) && $faq = $templates['faq'][0]): ?>
    <?php if(0 < count($contentDetails['faq'])): ?>
        <section id="faq-section">
            <div class="overlay pt-150 pb-150">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-10">
                            <div class="section-header">
                                <h4 class="sub-title"><?php echo app('translator')->get(@$faq->description->title); ?></h4>
                                <h3 class="title"><?php echo app('translator')->get(@$faq->description->sub_title); ?></h3>
                                <p class="area-para"><?php echo app('translator')->get(@$faq->description->short_details); ?></p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content mb-30-none" id="myTabContentFaq">
                                <div class="tab-pane fade show active wow fadeInUp" id="basicarea" role="tabpanel"
                                     aria-labelledby="basic-tab">
                                    <div id="basic" class="accordion">
                                        <?php if(isset($contentDetails['faq'])): ?>
                                            <?php $__currentLoopData = $contentDetails['faq']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="card card-rounded">
                                                    <div class="card-header" id="faq<?php echo e($k); ?>">
                                                        <a href="#"
                                                           class="btn btn-header-link <?php echo e(($k == 0) ? '' : 'collapsed'); ?>"
                                                           data-toggle="collapse" data-target="#faq1<?php echo e($k); ?>"
                                                           aria-expanded="true"
                                                           aria-controls="faqbasic1<?php echo e($k); ?>"><?php echo app('translator')->get(@$data->description->title); ?></a>
                                                    </div>
                                                    <div id="faq1<?php echo e($k); ?>" class="collapse <?php echo e(($k == 0) ? 'show' : ''); ?>"
                                                         aria-labelledby="faq<?php echo e($k); ?>" data-parent="#basic">
                                                        <div class="card-body ">
                                                            <?php echo app('translator')->get(@$data->description->description); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/sections/faq.blade.php ENDPATH**/ ?>
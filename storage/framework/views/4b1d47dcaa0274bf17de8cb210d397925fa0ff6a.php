<?php if(isset($templates['blog'][0]) && $blog = $templates['blog'][0]): ?><!-- blog start -->
<?php if(0 < count($contentDetails['blog'])): ?>
    <section id="blog-section">
        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="section-header">
                            <h4 class="sub-title"><?php echo app('translator')->get(@$blog->description->title); ?></h4>
                            <h3 class="title"><?php echo app('translator')->get(@$blog->description->sub_title); ?></h3>
                            <p class="area-para"><?php echo app('translator')->get(@$blog->description->short_title); ?></p>
                        </div>
                    </div>
                </div>

                <?php if(isset($contentDetails['blog'])): ?>
                    <div class="row d-flex justify-content-md-center">
                        <?php $__currentLoopData = $contentDetails['blog']->take(3)->sortDesc(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp">
                                <div class="single-item">
                                    <?php if($k%2 !== 0): ?>
                                        <div class="img-area">
                                            <img
                                                src="<?php echo e(getFile(config('location.content.path').'thumb_'.@$data->content->contentMedia->description->image)); ?>"
                                                alt="<?php echo app('translator')->get('blog-image'); ?>" style="">
                                        </div>
                                    <?php endif; ?>
                                    <div class="text-area">
                                        <a href="<?php echo e(route('blogDetails',[slug(@$data->description->title), $data->content_id])); ?>">
                                            <h2 class="font-weight-bold"><?php echo e(\Illuminate\Support\Str::limit(@$data->description->title,40)); ?></h2>
                                        </a>
                                        <a href="<?php echo e(route('blogDetails',[slug(@$data->description->title), $data->content_id])); ?>">
                                            <p class="color-two">
                                                <?php echo app('translator')->get(\Illuminate\Support\Str::limit(strip_tags(@$data->description->description), 120)); ?>
                                            </p>
                                        </a>
                                        <div class="icon-area d-flex justify-content-between">
                                            <a href="<?php echo e(route('blogDetails',[slug(@$data->description->title), $data->content_id])); ?>">
                                                <i class="icofont-user-alt-4"></i> <?php echo e(trans('Posted By- Admin')); ?>

                                            </a>
                                            <a href="<?php echo e(route('blogDetails',[slug(@$data->description->title), $data->content_id])); ?>">
                                                <i class="icofont-calendar"></i>
                                                <?php echo e(dateTime(@$data->created_at,'d M Y')); ?>

                                            </a>
                                        </div>
                                    </div>
                                    <?php if($k%2 == 0): ?>
                                        <div class="img-area">
                                            <img
                                                src="<?php echo e(getFile(config('location.content.path').'thumb_'.@$data->content->contentMedia->description->image)); ?>"
                                                alt="<?php echo app('translator')->get('blog-image'); ?>" style="">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- blog end -->
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/sections/blog.blade.php ENDPATH**/ ?>
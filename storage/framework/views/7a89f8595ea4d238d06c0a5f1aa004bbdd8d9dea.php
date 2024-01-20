<?php if(isset($templates['deposit-withdraw'][0]) && $depositWithdraw = $templates['deposit-withdraw'][0]): ?>

    <?php if( 0 < (count($deposits) +count($withdraws))): ?>
        <!-- START DEPOSIT-WITHDRAW -->
        <section id="transaction-section">
            <div class="overlay pt-150 pb-150">
                <img class="img-4 zoomInOutInfinite"
                     src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-4.png')); ?>"
                     alt="<?php echo app('translator')->get('ellipse-4-image'); ?>">
                <img class="img-5 zoomInOut2sInfinite"
                     src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-5.png')); ?>"
                     alt="<?php echo app('translator')->get('ellipse-5-image'); ?>">
                <img class="img-6 zoomInOut2sInfinite"
                     src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-6.png')); ?>"
                     alt="<?php echo app('translator')->get('ellipse-6-image'); ?>">
                <img class="img-7 zoomInOutInfinite"
                     src="<?php echo e(asset('assets/themes/lightorange/images/home/ellipse-7.png')); ?>"
                     alt="<?php echo app('translator')->get('ellipse-7-image'); ?>">


                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-9">
                            <div class="section-header">
                                <h4 class="sub-title"><?php echo app('translator')->get(@$depositWithdraw->description->title); ?></h4>
                                <h3 class="title"><?php echo app('translator')->get(@$depositWithdraw->description->sub_title); ?></h3>
                                <p class="area-para"><?php echo app('translator')->get(@$depositWithdraw->description->short_title); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs" id="myTabTrans" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="deposite-tab" data-toggle="tab" href="#deposite"
                                       role="tab" aria-controls="deposite" aria-selected="true"><?php echo e(trans('Deposit')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab"
                                       aria-controls="withdraw" aria-selected="false"><?php echo e(trans('Withdraw')); ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <div class="tab-content" id="myTabContentTrans">
                                <div class="tab-pane fade show active" id="deposite" role="tabpanel"
                                     aria-labelledby="deposite-tab">
                                    <div class="table-responsive wow fadeInUpBig">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo app('translator')->get('Name'); ?></th>
                                                <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                                                <th scope="col"><?php echo app('translator')->get('Gateway'); ?></th>
                                                <th scope="col"><?php echo app('translator')->get('Date'); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th scope="row">
                                                        <img
                                                            src="<?php echo e(getFile(config('location.user.path').optional($item->user)->image)); ?>"
                                                            class="deposit-img-circle"
                                                            alt="<?php echo app('translator')->get('doposit user image'); ?>"><span><?php echo e(optional($item->user)->fullname); ?></span>
                                                    </th>
                                                    <td><?php echo e($basic->currency_symbol); ?> <?php echo e(getAmount($item->amount)); ?></td>
                                                    <td><?php echo e(optional($item->gateway)->name); ?></td>
                                                    <td><?php echo e(dateTime($item->created_at)); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo app('translator')->get('Name'); ?></th>
                                                <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                                                <th scope="col"><?php echo app('translator')->get('Gateway'); ?></th>
                                                <th scope="col"><?php echo app('translator')->get('Date'); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th scope="row"><img
                                                            src="<?php echo e(getFile(config('location.user.path').optional($item->user)->image)); ?>"
                                                            alt="<?php echo app('translator')->get('doposit user image'); ?>"
                                                            class="deposit-img-circle"><span><?php echo e(optional($item->user)->fullname); ?></span>
                                                    </th>
                                                    <td><?php echo e($basic->currency_symbol); ?> <?php echo e(getAmount($item->amount)); ?></td>
                                                    <td><?php echo e(optional($item->method)->name); ?></td>
                                                    <td><?php echo e(dateTime($item->created_at)); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DEPOSIT-WITHDRAW -->
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH E:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/sections/deposit-withdraw.blade.php ENDPATH**/ ?>

<?php if(0 < count($plans)): ?>
<?php if(isset($templates['investment'][0]) && $investment = $templates['investment'][0]): ?>
<section id="plan-section">
    <div class="overlay pt-150 pb-150">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="section-header">
                        <h4 class="sub-title"><?php echo app('translator')->get(@$investment->description->title); ?></h4>
                        <h3 class="title"><?php echo app('translator')->get(@$investment->description->sub_title); ?></h3>
                        <p class="area-para"><?php echo app('translator')->get(@$investment->description->short_details); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTabPlan" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show bg-transparent" id="plangrid-tab" data-toggle="tab" href="#plangrid" role="tab" aria-controls="plangrid" aria-selected="true">
                            <i class="fas fa-th"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-transparent" id="planlist-tab" data-toggle="tab" href="#planlist" role="tab" aria-controls="planlist" aria-selected="false">
                        <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>


                <div class="tab-content" id="myTabContentPlan">
                    <div class="tab-pane fade show active" id="plangrid" role="tabpanel" aria-labelledby="plangrid-tab">
                        <?php $__currentLoopData = $plans->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $planColumns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row d-flex justify-content-md-center mb-5">
                            <?php
                            $i = 0;
                            ?>
                            <?php $__currentLoopData = $planColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php
                                    $getTime = \App\Models\ManageTime::where('time', $data->schedule)->first();
                                ?>
                                <div class="col-lg-4 col-md-6 wow  mb-40
                                    <?php if($i == 0): ?> fadeInLeftBig <?php elseif($i == 1): ?> fadeInUp <?php elseif($i == 2): ?> fadeInRightBig <?php endif; ?> ">
                                    <div class="single-item text-center  mb-40">
                                        <div class="icon-area">
                                            <img src="<?php echo e(asset('assets/themes/lightorange/images/plan.png')); ?>" alt="<?php echo app('translator')->get('plan image'); ?>">
                                        </div>
                                        <div class="mid-area">
                                            <div class="title-area">
                                                <h2 class="area-title"><?php echo app('translator')->get($data->name); ?></h2>
                                            </div>
                                            <div class="amount">
                                                <span><?php echo e($data->price); ?></span>
                                            </div>
                                            <div class="percentage">
                                                <span>
                                                    <?php if($data->profit_type == 1): ?>
                                                        <span class="highlight"><?php echo e(getAmount($data->profit)); ?><?php echo e('%'); ?></span>
                                                    <?php else: ?>
                                                        <span class="highlight"><small><sup><?php echo e(trans($basic->currency_symbol)); ?></sup></small><?php echo e(getAmount($data->profit)); ?></span>
                                                    <?php endif; ?>
                                                     <?php echo app('translator')->get('Every'); ?> <?php echo e(trans($getTime->name)); ?>

                                                </span>
                                            </div>

                                            <div class="min-max">
                                                <span><?php echo app('translator')->get('Profit For'); ?>  <?php echo e(($data->is_lifetime ==1) ? trans('Lifetime') : trans('Every').' '.trans($getTime->name)); ?></span><br>

                                                <span>
                                                    <?php echo app('translator')->get('Capital will back'); ?> :
                                                    <span class="badge badge-<?php echo e(($data->is_capital_back ==1) ? 'success':'danger'); ?> px-2 py-1 text-white"><?php echo e(($data->is_capital_back ==1) ? trans('Yes'): trans('No')); ?></span>
                                                </span><br>

                                                <span>
                                                    <?php if($data->is_lifetime == 0): ?>
                                                        <?php echo app('translator')->get('Total'); ?>   <?php echo e(trans($data->profit*$data->repeatable)); ?> <?php echo e(($data->profit_type == 1) ? '%': trans($basic->currency)); ?>

                                                        <?php if($data->is_capital_back == 1): ?>
                                                            + <span class="badge badge-success text-white"><?php echo app('translator')->get('Capital'); ?></span>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php echo app('translator')->get('Lifetime Earning'); ?>
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="btn-area">
                                            <a href="javascript:void(0)" class="cmn-btn investNow" type="button"
                                                data-toggle="modal"
                                                data-target="#investNowModal"
                                                data-price="<?php echo e($data->price); ?>"
                                                data-resource="<?php echo e($data); ?>"
                                                >
                                                <?php echo app('translator')->get('Invest Now'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    ++$i;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                    <div class="tab-pane fade" id="planlist" role="tabpanel" aria-labelledby="planlist-tab">
                        <div class="row">

                            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-12 mb-4">
                                <?php
                                    $getTime = \App\Models\ManageTime::where('time', $data->schedule)->first();
                                ?>
                                    <div class="list-single-item d-flex justify-content-between align-items-center">
                                        <div class="number-area">
                                            <span><?php echo e($data->price); ?></span>
                                        </div>
                                        <div class="btn-first">
                                            <a href="javascript:void(0)" class="cmn-btn"><?php echo app('translator')->get($data->name); ?></a>
                                        </div>
                                        <div class="deposit-area d-flex">
                                            <img src="<?php echo e(asset('assets/themes/lightorange/images/plan2.png')); ?>" alt="<?php echo app('translator')->get('plan image'); ?>">
                                            <div class="min-max">
                                                <p><?php echo app('translator')->get('Profit For'); ?>  <?php echo e(($data->is_lifetime ==1) ? trans('Lifetime') : trans('Every').' '.trans($getTime->name)); ?> </p>

                                                <p><?php echo app('translator')->get('Capital will back'); ?> :
                                                    <span class="badge badge-<?php echo e(($data->is_capital_back ==1) ? 'success':'danger'); ?> px-2 py-1 text-white"><?php echo e(($data->is_capital_back ==1) ? trans('Yes'): trans('No')); ?></span></> </p>

                                                <p><?php if($data->is_lifetime == 0): ?>
                                                    <?php echo app('translator')->get('Total'); ?> <?php echo e(trans($data->profit*$data->repeatable)); ?> <?php echo e(($data->profit_type == 1) ? '%': trans($basic->currency)); ?>

                                                    <?php if($data->is_capital_back == 1): ?>
                                                        + <span class="badge badge-success text-white"><?php echo app('translator')->get('Capital'); ?></span>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php echo app('translator')->get('Lifetime Earning'); ?>
                                                <?php endif; ?> </p>
                                            </div>
                                        </div>
                                        <div class="terms-area d-flex align-items-center ">
                                            <img src="<?php echo e(asset('assets/themes/lightorange/images/plan3.png')); ?>" alt="<?php echo app('translator')->get('plan image'); ?>">
                                            <div class="right-area">
                                                <?php if($data->profit_type == 1): ?>
                                                    <h3><?php echo e(getAmount($data->profit)); ?><?php echo e('%'); ?></h3>
                                                <?php else: ?>
                                                    <h3><small><sup><?php echo e(trans($basic->currency_symbol)); ?></sup></small><?php echo e(getAmount($data->profit)); ?></h3>
                                                <?php endif; ?>
                                                <p><?php echo app('translator')->get('Every'); ?> <?php echo e(trans($getTime->name)); ?></p>
                                            </div>
                                        </div>
                                        <div class="btn-last">
                                            <a href="javascript:void(0)" class="cmn-btn investNow" type="button"
                                                data-toggle="modal"
                                                data-target="#investNowModal"
                                                data-price="<?php echo e($data->price); ?>"
                                                data-resource="<?php echo e($data); ?>"
                                            >
                                            <?php echo app('translator')->get('Invest Now'); ?>
                                        </a>
                                        </div>
                                    </div>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- plan start end -->
<?php endif; ?>


<!-- INVEST-NOW MODAL -->
<div class="modal fade" id="investNowModal" tabindex="-1" data-backdrop="static"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Invest Now'); ?></h5>
          <button type="button" class="close btn-close-investment" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-dark">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-block">
                <form class="login-form" id="invest-form" action="<?php echo e(route('user.purchase-plan')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="signin ">
                        <h3 class="title plan-name"></h3>

                        <?php if($basic->theme == 'lightorange'): ?>
                            <p class="text-center price-range font-20 planDetails"></p>
                            <p class="text-center profit-details font-18 planDetails"></p>
                            <p class="text-center profit-validity pb-3 font-18 planDetails"></p>
                        <?php else: ?>
                            <p class="text-success text-center price-range font-20"></p>
                            <p class="text-success text-center profit-details font-18"></p>
                            <p class="text-success text-center profit-validity pb-3 font-18"></p>
                        <?php endif; ?>

                        <div class="form-group mb-30">
                            <strong class="mb-2 d-block modal_text_level"><?php echo app('translator')->get('Select wallet'); ?></strong>
                            <select class="form-control" name="balance_type">
                                <?php if(auth()->guard()->check()): ?>
                                    <option
                                        value="balance"><?php echo app('translator')->get('Deposit Balance - '.$basic->currency_symbol.getAmount(auth()->user()->balance)); ?></option>
                                    <option
                                        value="interest_balance"><?php echo app('translator')->get('Interest Balance -'.$basic->currency_symbol.getAmount(auth()->user()->interest_balance)); ?></option>
                                <?php endif; ?>
                                <option value="checkout"><?php echo app('translator')->get('Checkout'); ?></option>
                            </select>
                        </div>

                        <div class="form-group mb-30">
                            <input type="text" class="form-control invest-amount" id="amount" name="amount"
                                   value="<?php echo e(old('amount')); ?>"
                                   onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                   autocomplete="off">
                        </div>
                        <input type="hidden" name="plan_id" class="plan-id">

                        <div class="btn-area mb-30">
                            <button type="submit" class="linear-btn btn-block"><?php echo app('translator')->get('Invest Now'); ?></button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
      </div>
    </div>
  </div>
<!-- INVEST-NOW MODAL -->

<?php endif; ?>

<?php if($basic->theme == 'lightorange'): ?>
    <?php $__env->startPush('script'); ?>
        <script>
            "use strict";
            (function ($) {
                $(document).on('click', '.investNow', function () {
                    $("#investNowModal").toggleClass("modal-open");
                    let data = $(this).data('resource');
                    let price = $(this).data('price');
                    let symbol = "<?php echo e(trans($basic->currency_symbol)); ?>";
                    let currency = "<?php echo e(trans($basic->currency)); ?>";
                    $('.price-range').text(`<?php echo app('translator')->get('Invest'); ?>: ${price}`);

                    if (data.fixed_amount == '0') {
                        $('.invest-amount').val('');
                        $('#amount').attr('readonly', false);
                    } else {
                        $('.invest-amount').val(data.fixed_amount);
                        $('#amount').attr('readonly', true);
                    }

                    $('.profit-details').html(`<strong> <?php echo app('translator')->get('Interest'); ?>: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}  </strong>`);
                    $('.profit-validity').html(`<strong>  <?php echo app('translator')->get('Per'); ?> ${data.schedule} <?php echo app('translator')->get('hours'); ?> ,  ${(data.is_lifetime == '0') ? `${data.repeatable} <?php echo app('translator')->get('times'); ?>` : `<?php echo app('translator')->get('Lifetime'); ?>`} </strong>`);
                    $('.plan-name').text(data.name);
                    $('.plan-id').val(data.id);
                });



                $(".btn-close-investment").on('click',function(){
                    $("#investNowModal").removeClass("modal-open");
                });

            })(jQuery);


        </script>


        <?php if(count($errors) > 0 ): ?>
            <script>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                Notiflix.Notify.Failure("<?php echo app('translator')->get($error); ?>");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </script>
        <?php endif; ?>


    <?php $__env->stopPush(); ?>
<?php else: ?>
    <?php $__env->startPush('script'); ?>
        <script>
            "use strict";
            (function ($) {
                $(document).on('click', '.investNow', function () {
                    $("#modal-login").toggleClass("modal-open");
                    let data = $(this).data('resource');
                    let price = $(this).data('price');


                    let symbol = "<?php echo e(trans($basic->currency_symbol)); ?>";
                    let currency = "<?php echo e(trans($basic->currency)); ?>";


                    $('.price-range').text(`<?php echo app('translator')->get('Invest'); ?>: ${price}`);

                    if (data.fixed_amount == '0') {
                        $('.invest-amount').val('');
                        $('#amount').attr('readonly', false);
                    } else {
                        $('.invest-amount').val(data.fixed_amount);
                        $('#amount').attr('readonly', true);
                    }

                    $('.profit-details').html(`<strong> <?php echo app('translator')->get('Interest'); ?>: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}  </strong>`);
                    $('.profit-validity').html(`<strong>  <?php echo app('translator')->get('Per'); ?> ${data.schedule} <?php echo app('translator')->get('hours'); ?> ,  ${(data.is_lifetime == '0') ? `${data.repeatable} <?php echo app('translator')->get('times'); ?>` : `<?php echo app('translator')->get('Lifetime'); ?>`} </strong>`);
                    $('.plan-name').text(data.name);
                    $('.plan-id').val(data.id);
                });
            })(jQuery);


        </script>


        <?php if(count($errors) > 0 ): ?>
            <script>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                Notiflix.Notify.Failure("<?php echo app('translator')->get($error); ?>");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </script>
        <?php endif; ?>

    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH E:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/sections/investment.blade.php ENDPATH**/ ?>
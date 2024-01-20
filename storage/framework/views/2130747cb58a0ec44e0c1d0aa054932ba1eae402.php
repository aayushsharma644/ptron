<!-- TOPBAR -->
    <div class="header-top d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex justify-content-start align-items-center justify-cen order-div">
                    <div class="header-left">
                        <?php if(isset($contactUs['contact-us'][0]) && $contact = $contactUs['contact-us'][0]): ?>
                        <ul class="d-flex justify-content-between">
                            <li class="header-left-list">
                                <p class="header-left-area">
                                    <span class="header-left-icon">
                                        <i class="icofont-email"></i>
                                        <a href="mailto:<?php echo app('translator')->get(@$contact->description->email); ?>"><?php echo app('translator')->get(@$contact->description->email); ?></a>
                                    </span>
                                </p>
                            </li>
                            <li class="header-left-list">
                                <p class="header-left-area">
                                    <span class="header-left-icon">
                                        <i class="icofont-android-tablet"></i>
                                        <a href="tel:<?php echo app('translator')->get(@$contact->description->phone); ?>"><?php echo app('translator')->get(@$contact->description->phone); ?></a>
                                    </span>
                                </p>
                            </li>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end justify-cen">
                    <div class="language-select-list d-flex flex-wrap">
                        <div class="language-wrapper">
                            <div class="control-plugin">
                                <div class="language"
                                     data-input-name="country3"
                                     data-selected-country="<?php echo e(app()->getLocale() ? : 'US'); ?>"
                                     data-button-size="btn-sm"
                                     data-button-type="btn-info"
                                     data-scrollable="true"
                                     data-scrollable-height="250px"
                                     data-countries='<?php echo e($languages); ?>'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if(auth()->guard()->guest()): ?>
                        <div class="header-right-area">
                            <div class="header-right d-flex flex-wrap align-items-baseline">
                                <div class="header-action d-flex justify-content-between">
                                    <a href="<?php echo e(route('login')); ?>">
                                        <i class="icofont-user-alt-4"></i><?php echo app('translator')->get('Login'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="header-right-area">
                            <div class="header-right d-flex flex-wrap align-items-baseline">
                                <div class="header-action d-flex justify-content-between">
                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                      <i class="icofont-power"></i><?php echo app('translator')->get('Logout'); ?>
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<!-- /TOPBAR -->
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/partials/topbar.blade.php ENDPATH**/ ?>
<?php if(isset($templates['request-a-call'][0]) && $requestACall = $templates['request-a-call'][0]): ?>
    <section id="contact-support-section">
        <div class="overlay pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 wow fadeInLeftBig">
                        <div class="left-area d-flex">
                            <div class="icon-area">
                                <img src="<?php echo e(asset($themeTrue.'images/icon/contact_icon_3.png')); ?>" alt="image">
                            </div>
                            <span class="border"></span>
                            <div class="text-area">
                                <h3><?php echo app('translator')->get(@$requestACall->description->title); ?></h3>
                                <h2 class="area-title"><?php echo app('translator')->get(@$requestACall->description->sub_title); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 call-support d-flex justify-content-end align-items-center wow fadeInRightBig">
                        <div class="right-area">
                            <a href="<?php echo e(@$requestACall->templateMedia()->button_link); ?>" class="cmn-btn"><?php echo app('translator')->get(@$requestACall->description->button_name); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/sections/request-a-call.blade.php ENDPATH**/ ?>
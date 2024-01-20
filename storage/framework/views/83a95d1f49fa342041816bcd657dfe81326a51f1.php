<?php if(isset($templates['hero'][0]) && $hero = $templates['hero'][0]): ?>

    <section id="banner-section" class="wow">
        <div class="overlay bg_img">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9">
                        <h2 class="banner-text title text-center">
                            <span class="light"><?php echo app('translator')->get(@$hero['description']->title); ?></span>
                            <span class="medium"><?php echo app('translator')->get(@$hero['description']->sub_title); ?></span>
                            
                        </h2>
                        <div class="text-bottom text-center">
                            <p><?php echo app('translator')->get(@$hero['description']->short_description); ?></p>
                            <a class="linear-btn" href="<?php echo e(@$hero->templateMedia()->button_link); ?>"><?php echo app('translator')->get(@$hero['description']->button_name); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- calculator-section start -->
    <section id="calculator-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 wow fadeInLeft">
                    <div class="calculate-left">
                        <div class="d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- calculator-section end -->

<?php endif; ?>
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/partials/heroBanner.blade.php ENDPATH**/ ?>
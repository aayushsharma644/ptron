<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en" <?php if(session()->get('rtl') == 1): ?> dir="rtl" <?php endif; ?> >
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">


    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/jquery-ui.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/bootstrap.min.css')); ?>"/>

    <?php echo $__env->yieldPushContent('css-lib'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/magnific-popup.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/flags.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/icofont.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/all.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'css/style.css')); ?>">

    <script src="<?php echo e(asset($themeTrue.'js/modernizr.custom.js')); ?>"></script>

    <style>
        @media  only screen and (max-width: 423px) {
            .xs-dropdown-menu {
                transform: translateX(-20px) !important;
            }

        }
    </style>

<?php echo $__env->yieldPushContent('style'); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- start preloader -->
<div class="preloader" id="preloader">
    <div class="preloader-thumb">
        <img src="<?php echo e(asset('assets/themes/lightorange/images/preloader.gif')); ?>" alt="<?php echo app('translator')->get('preloader'); ?>">
    </div>
</div>
<!-- end preloader -->

<a href="#" class="scrollToTop"><i class="icofont-simple-up"></i></a>


<header id="header-section">
    <div class="overlay">

        <!-- TOPBAR -->
    <?php echo $__env->make($theme.'partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /TOPBAR -->

        <!-- NAVBAR -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light header-bottom sticky nav-lightorange">
            <div class="container ">

                <div class="nav-area">
                    <div class="logo-section">
                        <a class="site-logo site-title" href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(getFile(config('location.logoIcon.path').'logo.png')); ?>"
                                 alt="<?php echo e(config('basic.site_title')); ?>">
                        </a>
                    </div>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icofont-navigation-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse nav-main justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ml-auto">
                            <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                            <li><a href="<?php echo e(route('plan')); ?>"><?php echo e(trans('Plan')); ?></a></li>
                            <li><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('About Us'); ?></a></li>
                            <li><a href="<?php echo e(route('blog')); ?>"><?php echo app('translator')->get('Blog'); ?></a></li>
                            <li><a href="<?php echo e(route('faq')); ?>"><?php echo app('translator')->get('FAQ'); ?></a></li>
                            <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
                        </ul>
                    </div>

                    <?php if(auth()->guard()->guest()): ?>
                        <div class="right-btn">
                            <a class="cmn-btn" href="<?php echo e(route('register')); ?>"><?php echo e(trans('join now')); ?></a>
                        </div>
                    <?php else: ?>
                        <div class="right-btn">
                            <a class="cmn-btn" href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('Dashboard')); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <!--/ NAVBAR -->
    </div>
</header>


<?php echo $__env->make($theme.'partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make($theme.'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldPushContent('extra-content'); ?>


<script src="<?php echo e(asset($themeTrue.'js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset($themeTrue.'js/jquery.magnific-popup.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'js/slick.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'js/wow.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'js/jquery.flagstrap.min.js')); ?>"></script>

<?php echo $__env->yieldPushContent('extra-js'); ?>

<script src="<?php echo e(asset('assets/global/js/notiflix-aio-2.7.0.min.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'js/fontawesome.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/global/js/pusher.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/vue.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/axios.min.js')); ?>"></script>

<script src="<?php echo e(asset($themeTrue.'js/script.js')); ?>"></script>



<?php echo $__env->yieldPushContent('script'); ?>
<?php if(session()->has('success')): ?>
    <script>
        Notiflix.Notify.Success("<?php echo app('translator')->get(session('success')); ?>");
    </script>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <script>
        Notiflix.Notify.Failure("<?php echo app('translator')->get(session('error')); ?>");
    </script>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <script>
        Notiflix.Notify.Warning("<?php echo app('translator')->get(session('warning')); ?>");
    </script>
<?php endif; ?>


<script>
    $(document).ready(function () {
        $(".language").find("select").change(function () {
            window.location.href = "<?php echo e(route('language')); ?>/" + $(this).val()
        })
    })

</script>

<script>
    var root = document.querySelector(':root');
    root.style.setProperty('--main-color', '<?php echo e(config('basic.base_color')??'#ff5400'); ?>');
</script>

<?php echo $__env->make('plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH H:\XAMPP\htdocs\ptron\resources\views/themes/lightorange/layouts/app.blade.php ENDPATH**/ ?>
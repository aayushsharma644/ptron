<div id="sidebarBadge">

    <?php
        $user = \Illuminate\Support\Facades\Auth::user();
        $user_rankings = \App\Models\Ranking::where('rank_lavel', $user->last_lavel)->first();
    ?>

    <?php if($user->last_lavel != null && $user_rankings): ?>
        <div class="level-box">
            <h4><?php echo app('translator')->get(@$user->rank->rank_lavel); ?></h4>
            <p><?php echo app('translator')->get(@$user->rank->rank_name); ?></p>
            <img src="<?php echo e(getFile(config('location.rank.path').@$user->rank->rank_icon)); ?>" alt="" class="level-badge"/>
        </div>
    <?php endif; ?>

    <div class="wallet-wrapper">
        <div class="wallet-box d-none d-lg-block">
            <h4><?php echo app('translator')->get('Account Balance'); ?>
                <span class="tag"><?php echo e($basic->currency); ?></span></h4>
            <h5> <?php echo app('translator')->get('Main Balance'); ?> <span><?php echo e($basic->currency_symbol); ?><?php echo e(@$user->balance); ?></span></h5>
            <h5 class="mb-0"> <?php echo app('translator')->get('Interest Balance'); ?>
                <span><?php echo e($basic->currency_symbol); ?><?php echo e(@$user->interest_balance); ?></span></h5>
        </div>
        <div class="d-flex justify-content-between my-2">
            <a class="btn-custom" href="<?php echo e(route('user.addFund')); ?>"> <?php echo app('translator')->get('Deposit'); ?></a>
            <a class="btn-custom" href="<?php echo e(route('plan')); ?>"><i class="fa fa-dollar"></i> <?php echo app('translator')->get('Invest'); ?></a>
        </div>
    </div>

</div>

<div class="scroll-sidebar">
    <a class="das-nav nav-item <?php echo e(menuActive('user.home')); ?> " href="<?php echo e(route('user.home')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_1.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Dashboard'); ?></span>
        </div>
    </a>


    <a class="das-nav nav-item <?php echo e(menuActive(['user.invest-history'])); ?>" href="<?php echo e(route('user.invest-history')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_5.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Invest History'); ?></span>
        </div>
    </a>


    <a class="das-nav nav-item <?php echo e(menuActive(['user.addFund', 'user.addFund.confirm'])); ?>" href="<?php echo e(route('user.addFund')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_acc_3.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Add Fund'); ?></span>
        </div>
    </a>


    <a class="das-nav nav-item <?php echo e(menuActive(['user.fund-history', 'user.fund-history.search'])); ?>" href="<?php echo e(route('user.fund-history')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_3.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Fund History'); ?></span>
        </div>
    </a>




    <a class="das-nav nav-item <?php echo e(menuActive(['user.money-transfer'])); ?>" href="<?php echo e(route('user.money-transfer')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_3.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Transfer'); ?></span>
        </div>
    </a>



    <a class="das-nav nav-item <?php echo e(menuActive(['user.transaction', 'user.transaction.search'])); ?>" href="<?php echo e(route('user.transaction')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_1.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Transaction'); ?></span>
        </div>
    </a>





    <a class="das-nav nav-item  <?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>" href="<?php echo e(route('user.payout.money')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/refferal_3.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Payout'); ?> </span>
        </div>
    </a>

    <a class="das-nav nav-item  <?php echo e(menuActive(['user.payout.history','payout.history.search'])); ?>" href="<?php echo e(route('user.payout.history')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/feature_2.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Payout History'); ?></span>
        </div>
    </a>

    <a class="das-nav nav-item <?php echo e(menuActive(['user.referral'])); ?>" href="<?php echo e(route('user.referral')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_acc_4.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('My Referral'); ?></span>
        </div>
    </a>


    <a class="das-nav nav-item <?php echo e(menuActive(['user.referral.bonus', 'user.referral.bonus.search'])); ?>" href="<?php echo e(route('user.referral.bonus')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_4.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Referral Bonus'); ?></span>
        </div>
    </a>


    <a class="das-nav nav-item <?php echo e(menuActive(['user.badges'])); ?>" href="<?php echo e(route('user.badges')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_5.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Badges'); ?></span>
        </div>
    </a>



    <a class="das-nav nav-item <?php echo e(menuActive(['user.profile'])); ?>" href="<?php echo e(route('user.profile')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/feature_1.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Profile Settings'); ?></span>
        </div>
    </a>


    <a class="das-nav nav-item <?php echo e(menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])); ?>" href="<?php echo e(route('user.ticket.list')); ?>">
        <div class="icon-wrapper">
            <div class="nav-icon">
                <img src="<?php echo e(asset($themeTrue.'images/icon/feature_3.png')); ?>" alt="Icon Missing">
            </div>
            <span><?php echo app('translator')->get('Support Ticket'); ?></span>
        </div>
    </a>

</div>
<?php /**PATH /home/u498872279/domains/ptrontrade.in/public_html/resources/views/themes/lightorange/partials/sidebar.blade.php ENDPATH**/ ?>
<div class="col-xl-3 col-lg-3 mb-30">
        <div class="dashboard-sidebar">
            <button type="button" class="dashboard-sidebar-close"><i class="fas fa-times"></i></button>
            <div class="dashboard-sidebar-inner">
                <div class="dashboard-sidebar-wrapper-inner">
                    <h5 class="menu-header-title"><?php echo app('translator')->get('Buyer Account'); ?></h5>
                    <ul id="sidebar-main-menu" class="sidebar-main-menu">
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.buyer.dashboard')?'open':''); ?> ">
                            <a href="<?php echo e(route('user.buyer.dashboard')); ?>">
                                <i class="lab la-buffer"></i> <span class="title"><?php echo app('translator')->get('Buyer Dashboard'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.job.index') || request()->routeIs('user.job.edit') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.job.index')); ?>">
                                <i class="las la-list"></i> <span class="title"><?php echo app('translator')->get('Manage Job'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.job.create')?'open':''); ?>">
                            <a href="<?php echo e(route('user.job.create')); ?>">
                                <i class="las la-plus"></i> <span class="title"><?php echo app('translator')->get('Create Job'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.service.favorite')?'open':''); ?>">
                            <a href="<?php echo e(route('user.service.favorite')); ?>">
                                <i class="las la-crown"></i> <span class="title"><?php echo app('translator')->get('Favorite Service'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.software.favorite')?'open':''); ?>">
                            <a href="<?php echo e(route('user.software.favorite')); ?>">
                                <i class="las la-heart"></i> <span class="title"><?php echo app('translator')->get('Favorite Software'); ?></span>
                            </a>
                        </li>
                    </ul>

                    
                    <h5 class="menu-header-title"><?php echo app('translator')->get('PURCHASES'); ?></h5>
                    <ul id="sidebar-main-menu" class="sidebar-main-menu">

                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.buyer.hire.employ') || request()->routeIs('user.buyer.hire.employ.details') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.buyer.hire.employ')); ?>">
                                <i class="lab la-hire-a-helper"></i> <span class="title"><?php echo app('translator')->get('Employees List'); ?></span>
                            </a>
                        </li>

                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.buyer.service.booked') || request()->routeIs('user.buyer.service.booked.details')?'open':''); ?>">
                            <a href="<?php echo e(route('user.buyer.service.booked')); ?>">
                                <i class="las la-exchange-alt"></i> <span class="title"><?php echo app('translator')->get('Service Booked'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.software.purchases') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.software.purchases')); ?>">
                                <i class="las la-history"></i> <span class="title"><?php echo app('translator')->get('Software Purchases'); ?></span>
                            </a>
                        </li>
                        
                         <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.buyer.transactions') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.buyer.transactions')); ?>">
                                <i class="las la-money-check-alt"></i> <span class="title"><?php echo app('translator')->get('Transaction Log'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.deposit') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.deposit')); ?>">
                                <i class="las la-money-check-alt"></i> <span class="title"><?php echo app('translator')->get('Deposit Money'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.deposit.history') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.deposit.history')); ?>">
                                <i class="las la-history"></i> <span class="title"><?php echo app('translator')->get('Deposit History'); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/partials/buyer_sidebar.blade.php ENDPATH**/ ?>
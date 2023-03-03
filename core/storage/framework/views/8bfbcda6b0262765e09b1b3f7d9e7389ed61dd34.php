<div class="col-xl-3 col-lg-3 mb-30">
        <div class="dashboard-sidebar">
            <button type="button" class="dashboard-sidebar-close"><i class="fas fa-times"></i></button>
            <div class="dashboard-sidebar-inner">
                <div class="dashboard-sidebar-wrapper-inner">
                    <h5 class="menu-header-title"><?php echo app('translator')->get('Seller Account'); ?></h5>
                    <ul id="sidebar-main-menu" class="sidebar-main-menu">
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.home')?'open':''); ?> ">
                            <a href="<?php echo e(route('user.home')); ?>">
                                <i class="lab la-buffer"></i> <span class="title"><?php echo app('translator')->get('Seller Dashboard'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.service.index') || request()->routeIs('user.service.edit') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.service.index')); ?>">
                                <i class="las la-list"></i> <span class="title"><?php echo app('translator')->get('Manage Services'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.service.create')?'open':''); ?>">
                            <a href="<?php echo e(route('user.service.create')); ?>">
                                <i class="las la-plus"></i> <span class="title"><?php echo app('translator')->get('Create Service'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.software.index') || request()->routeIs('user.software.edit')?'open':''); ?>">
                            <a href="<?php echo e(route('user.software.index')); ?>">
                                <i class="lab la-microsoft"></i> <span class="title"><?php echo app('translator')->get('Manage Software'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.software.create')?'open':''); ?>">
                            <a href="<?php echo e(route('user.software.create')); ?>">
                                <i class="las la-plus"></i> <span class="title"><?php echo app('translator')->get('Upload Software'); ?></span>
                            </a>
                        </li>
                    </ul>
                    <h5 class="menu-header-title"><?php echo app('translator')->get('Sales'); ?></h5>
                    <ul id="sidebar-main-menu" class="sidebar-main-menu">
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.booking.service') || request()->routeIs('user.booking.service.details') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.booking.service')); ?>">
                                <i class="las la-exchange-alt"></i> <span class="title"><?php echo app('translator')->get('Service Booking'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.software.sales')?'open':''); ?>">
                            <a href="<?php echo e(route('user.software.sales')); ?>">
                                <i class="las la-history"></i> <span class="title"><?php echo app('translator')->get('Software Sales'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.job.vacancy') || request()->routeIs('user.seller.job.list.details')?'open':''); ?>">
                            <a href="<?php echo e(route('user.job.vacancy')); ?>">
                                <i class="las la-caret-square-up"></i> <span class="title"><?php echo app('translator')->get('Job List'); ?></span>
                            </a>
                        </li>

                         <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.seller.transactions') ?'open':''); ?>">
                            <a href="<?php echo e(route('user.seller.transactions')); ?>">
                                <i class="las la-money-check-alt"></i> <span class="title"><?php echo app('translator')->get('Transaction Log'); ?></span>
                            </a>
                        </li>

                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.withdraw')?'open':''); ?>">
                            <a href="<?php echo e(route('user.withdraw')); ?>">
                                <i class="las la-money-check-alt"></i> <span class="title"><?php echo app('translator')->get('Withdraw Money'); ?></span>
                            </a>
                        </li>
                        <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('user.withdraw.history')?'open':''); ?>">
                            <a href="<?php echo e(route('user.withdraw.history')); ?>">
                                <i class="las la-history"></i> <span class="title"><?php echo app('translator')->get('Withdraw History'); ?></span>
                            </a>
                        </li>

                         <li class="sidebar-single-menu nav-item <?php echo e(request()->routeIs('ticket') || request()->routeIs('ticket.view')?'open':''); ?>">
                            <a href="<?php echo e(route('ticket')); ?>">
                                <i class="las la-ticket-alt"></i> <span class="title"><?php echo app('translator')->get('Support Ticket'); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH /opt/lampp/htdocs/up/core/resources/views/templates/basic/partials/seller_sidebar.blade.php ENDPATH**/ ?>
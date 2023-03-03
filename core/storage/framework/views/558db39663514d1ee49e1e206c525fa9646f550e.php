<header class="header-section">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container-fluid">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="site-logo site-title" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>" alt="<?php echo e(__($general->sitename)); ?>"></a>
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <button type="button" class="short-menu-open-btn"><i class="fas fa-align-center"></i></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ms-auto me-auto">
                                <li>
                                    <a href="<?php echo e(route('service')); ?>" <?php if(request()->routeIs('service')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Service'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('software')); ?>" <?php if(request()->routeIs('software')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Software'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('job')); ?>" <?php if(request()->routeIs('job')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Job'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('user.buyer.dashboard')); ?>" <?php if(request()->routeIs('user.buyer.dashboard')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Buyer'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('user.home')); ?>" <?php if(request()->routeIs('user.home')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Seller'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.conversation.inbox')); ?>" <?php if(request()->routeIs('user.conversation.inbox') || request()->routeIs('user.conversation.chat')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Inbox'); ?></a></li>
                                <li><a href="<?php echo e(route('ticket.open')); ?>" <?php if(request()->routeIs('ticket.open')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Get Support'); ?></a></li>
                            </ul>
                            <div class="language-select-area">
                                <select class="language-select langSel">
                                     <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->code); ?>" <?php if(session('lang') == $item->code): ?> selected  <?php endif; ?>><?php echo e(__($item->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="header-right dropdown">
                                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="header-user-area d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="header-user-thumb">
                                            <a href="JavaScript:Void(0);"><img src="<?php echo e(getImage('assets/images/user/profile/'.auth()->user()->image, '400x400')); ?>" alt="client"></a>
                                        </div>
                                        <div class="header-user-content">
                                            <span><?php echo app('translator')->get('Account'); ?></span>
                                        </div>
                                        <span class="header-user-icon"><i class="las la-chevron-circle-down"></i></span>
                                    </div>
                                </button>
                                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 dropdown-menu-right">
                                    <a href="<?php echo e(route('user.profile.setting')); ?>" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                        <i class="dropdown-menu__icon las la-user-circle"></i>
                                        <span class="dropdown-menu__caption"><?php echo app('translator')->get('Profile Settings'); ?></span>
                                    </a>
                                    <a href="<?php echo e(route('user.change.password')); ?>" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                        <i class="dropdown-menu__icon las la-key"></i>
                                        <span class="dropdown-menu__caption"><?php echo app('translator')->get('Change Password'); ?></span>
                                    </a>
                                    <a href="<?php echo e(route('user.twofactor')); ?>" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                        <i class="dropdown-menu__icon las la-lock"></i>
                                        <span class="dropdown-menu__caption"><?php echo app('translator')->get('2FA Security'); ?></span>
                                    </a>
                                    <a href="<?php echo e(route('user.logout')); ?>" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                        <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                                        <span class="dropdown-menu__caption"><?php echo app('translator')->get('Logout'); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="header-short-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="short-menu">
                            <li class="short-menu-close-btn-area"> <button type="button" class="short-menu-close-btn">Close</button></li>
                             <?php $__currentLoopData = $categorys->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('service.category', [slug($category->name),$category->id])); ?>"><?php echo e(__($category->name)); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/partials/user_header.blade.php ENDPATH**/ ?>
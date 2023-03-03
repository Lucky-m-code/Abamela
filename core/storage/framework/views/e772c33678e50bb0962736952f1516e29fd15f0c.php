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
                                <li><a href="<?php echo e(route('home')); ?>" <?php if(request()->routeIs('home')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Home'); ?></a></li>
                                <li><a href="<?php echo e(route('service')); ?>" <?php if(request()->routeIs('service')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Service'); ?></a></li>
                                <li><a href="<?php echo e(route('software')); ?>" <?php if(request()->routeIs('software')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Software'); ?></a></li>
                                <li><a href="<?php echo e(route('job')); ?>" <?php if(request()->routeIs('job')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Job'); ?></a></li>
                                <li><a href="<?php echo e(route('blog')); ?>" <?php if(request()->routeIs('blog') || request()->routeIs('blog.details')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Blog'); ?></a></li>
                                <li><a href="<?php echo e(route('contact')); ?>" <?php if(request()->routeIs('contact')): ?>class="active" <?php endif; ?>><?php echo app('translator')->get('Contact'); ?></a></li>
                            </ul>
                            <div class="language-select-area">
                                <select class="language-select langSel">
                                    <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->code); ?>" <?php if(session('lang') == $item->code): ?> selected  <?php endif; ?>><?php echo e(__($item->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                          
                            <div class="header-action">
                                <?php if(auth()->guard()->guest()): ?>
                                    <a href="<?php echo e(route('user.login')); ?>" class="btn--base active"><?php echo app('translator')->get('Sign In'); ?></a>
                                    <a href="<?php echo e(route('user.register')); ?>" class="btn--base"><?php echo app('translator')->get('Sign Up'); ?></a>
                                <?php endif; ?>

                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('user.home')); ?>" class="btn--base"><?php echo app('translator')->get('Dashboard'); ?></a>
                                <?php endif; ?>
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
                            <li class="short-menu-close-btn-area"> <button type="button" class="short-menu-close-btn"><?php echo app('translator')->get('Close'); ?></button></li>
                            <?php $__currentLoopData = $categorys->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('service.category', [slug($category->name),$category->id])); ?>"><?php echo e(__($category->name)); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/partials/header.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="item-section">
                        <div class="container">
                            <div class="item-top-area d-flex flex-wrap justify-content-between align-items-center">
                                <div class="item-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="item-wrapper-left d-flex flex-wrap align-items-center">
                                        <div class="item-value">
                                            <span><?php echo app('translator')->get('Showing item'); ?>:&nbsp <span class="result"><?php echo e($services->firstItem()); ?> of <?php echo e($services->lastItem()); ?></span></span>
                                        </div>
                                    </div>
                                    <ul class="view-btn-list">
                                        <li><button type="button" class="grid-view-btn list-btn"><i class="lab la-buromobelexperte"></i></button></li>
                                        <li class="active"><button type="button" class="list-view-btn list-btn"><i class="las la-list"></i></button></li>
                                    </ul>
                                </div>
                                <div class="item-wrapper-right">
                                    <form class="search-from" action="<?php echo e(route('service.search')); ?>" method="GET">
                                        <input type="search" name="search" class="form-control" value="<?php echo e(@$search); ?>" placeholder="<?php echo app('translator')->get('Search here'); ?>...">
                                        <button type="submit"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="item-bottom-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-9 col-lg-9 mb-30">
                                        <div class="item-card-wrapper list-view">
                                            <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="item-card">
                                                    <div class="item-card-thumb">
                                                        <img src="<?php echo e(getImage('assets/images/service/'.$service->image,imagePath()['service']['size'])); ?>" alt="<?php echo app('translator')->get('Service Image'); ?>">
                                                        <?php if($service->featured == 1): ?>
                                                            <div class="item-level"><?php echo app('translator')->get('Featured'); ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="item-card-content">
                                                        <div class="item-card-content-top">
                                                            <div class="left">
                                                                <div class="author-thumb">
                                                                    <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $service->user->image, 'profile_image')); ?>" alt="<?php echo e(__($service->user->username)); ?>">
                                                                </div>
                                                                <div class="author-content">
                                                                    <h5 class="name"><a href="<?php echo e(route('profile', $service->user->username)); ?>"><?php echo e(__($service->user->username)); ?></a> <span class="level-text"> <?php echo e(__(@$service->user->rank->level)); ?></span></h5>
                                                                    <div class="ratings">
                                                                        <i class="fas fa-star"></i>
                                                                        <span class="rating me-2"><?php echo e(__(getAmount($service->rating, 2))); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="right">
                                                                <div class="item-amount"><?php echo e(__($general->cur_sym)); ?><?php echo e(__(showAmount($service->price))); ?></div>
                                                            </div>
                                                        </div>
                                                        <h3 class="item-card-title"><a href="<?php echo e(route('service.details', [slug($service->title), encrypt($service->id)])); ?>"><?php echo e(__($service->title)); ?></a></h3>
                                                    </div>
                                                    <div class="item-card-footer">
                                                        <div class="left">
                                                            <a href="javascript:void(0)" class="item-love me-2 loveHeartAction" data-serviceid="<?php echo e($service->id); ?>"><i class="fas fa-heart"></i> <span class="give-love-amount">(<?php echo e(__($service->favorite)); ?>)</span></a>
                                                            <a href="javascript:void(0)" class="item-like"><i class="las la-thumbs-up"></i> (<?php echo e($service->likes); ?>)</a>
                                                        </div>
                                                        <div class="right">
                                                            <div class="order-btn">
                                                                <a href="<?php echo e(route('user.service.booking', [slug($service->title), encrypt($service->id)])); ?>" class="btn--base"><i class="las la-shopping-cart"></i> <?php echo app('translator')->get('Order Now'); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <div class="empty-message-box bg--gray">
                                                    <div class="icon"><i class="las la-frown"></i></div>
                                                    <p class="caption"><?php echo e(__($emptyMessage)); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <nav>
                                            <?php echo e($services->links()); ?>

                                        </nav>
                                    </div>
                                   <?php echo $__env->make($activeTemplate.'partials.home_filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<?php echo $__env->make($activeTemplate.'partials.end_ad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        'use strict';
        $('#defaultSearch').on('change', function(){
            this.form.submit();
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/service.blade.php ENDPATH**/ ?>
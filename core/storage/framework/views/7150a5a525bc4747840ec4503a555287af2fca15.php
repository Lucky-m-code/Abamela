
<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="item-section">
                        <div class="container">
                            <div class="item-category-area">
                                <div class="category-slider">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $subCategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                <div class="category-item-box">
                                                    <a href="<?php echo e(route('software.sub.category', [slug($subCategory->name), encrypt($subCategory->id)])); ?>">
                                                        <img src="<?php echo e(getImage(imagePath()['subcategory']['path'].'/'. $subCategory->image,imagePath()['subcategory']['size'])); ?>" alt="<?php echo app('translator')->get('sub category'); ?>">
                                                        <div class="category-item-content">
                                                            <h4 class="title text-white"><?php echo e(__($subCategory->name)); ?></h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="slider-prev">
                                        <i class="las la-angle-left"></i>
                                    </div>
                                    <div class="slider-next">
                                        <i class="las la-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-top-area d-flex flex-wrap justify-content-between align-items-center">
                                <div class="item-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="item-wrapper-left d-flex flex-wrap align-items-center">
                                        <div class="item-value">
                                         <span><?php echo app('translator')->get('Showing item'); ?>:&nbsp <span class="result"><?php echo e($softwares->firstItem()); ?> of <?php echo e($softwares->lastItem()); ?></span></span>
                                        </div>
                                    </div>
                                    <ul class="view-btn-list">
                                        <li><button type="button" class="grid-view-btn list-btn"><i class="lab la-buromobelexperte"></i></button></li>
                                        <li class="active"><button type="button" class="list-view-btn list-btn"><i class="las la-list"></i></button></li>
                                    </ul>
                                </div>
                                <div class="item-wrapper-right">
                                    <form class="search-from" action="<?php echo e(route('software.search')); ?>" method="GET">
                                        <input type="search" name="search" value="<?php echo e(@$search); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Search here'); ?>...">
                                        <button type="submit"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="item-bottom-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-9 col-lg-9 mb-30">
                                        <div class="item-card-wrapper custom-card-wrapper list-view">
                                        <?php $__empty_1 = true; $__currentLoopData = $softwares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $software): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <div class="item-card">
                                                <div class="item-card-thumb">
                                                    <img src="<?php echo e(getImage('assets/images/software/'.$software->image,imagePath()['software']['size'])); ?>" alt="<?php echo app('translator')->get('software image'); ?>">
                                                </div>
                                                <div class="item-card-content">
                                                    <div class="item-card-content-top">
                                                        <div class="left">
                                                            <div class="author-thumb">
                                                                <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $software->user->image,'profile_image')); ?>" alt="<?php echo e(__($software->user->username)); ?>">
                                                            </div>
                                                            <div class="author-content">
                                                                <h5 class="name"><a href="<?php echo e(route('profile', $software->user->username)); ?>"><?php echo e(__($software->user->username)); ?></a> <span class="level-text"><?php echo e(__(@$software->user->rank->level)); ?></span></h5>
                                                                <div class="ratings">
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="rating me-2"><?php echo e(showAmount($software->rating)); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="item-amount"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($software->amount)); ?></div>
                                                        </div>
                                                    </div>
                                                    <h3 class="item-card-title"><a href="<?php echo e(route('software.details', [slug($software->title), encrypt($software->id)])); ?>"><?php echo e(__($software->title)); ?></a></h3>
                                                </div>
                                                <div class="item-card-footer">
                                                    <div class="left">
                                                        <a href="javascript:void(0)" class="item-love me-2 loveHeartActionSoftware" data-softwareid="<?php echo e($software->id); ?>"><i class="fas fa-heart"></i> <span class="give-love-amount">(<?php echo e(__($software->favorite)); ?>)</span></a>
                                                        <a href="javascript:void(0)" class="item-like"><i class="las la-thumbs-up"></i> (<?php echo e(__($software->likes)); ?>)</a>
                                                        <a href="<?php echo e(route('user.software.buy',[slug($software->title), encrypt($software->id)])); ?>" class="btn--base active buy-btn"><i class="las la-shopping-cart"></i> <?php echo app('translator')->get('Buy Now'); ?></a>
                                                    </div>
                                                    <div class="right">
                                                        <div class="order-btn">
                                                            <a href="<?php echo e($software->demo_url); ?>" target="__blank" class="btn--base"><i class="las la-desktop"></i> <?php echo app('translator')->get('Preview'); ?></a>
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
                                            <?php echo e($softwares->links()); ?>

                                        </nav>
                                    </div>
                                    <?php echo $__env->make($activeTemplate.'partials.software_category_filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/software_category.blade.php ENDPATH**/ ?>
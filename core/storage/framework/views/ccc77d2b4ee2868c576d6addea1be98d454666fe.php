
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
                                            <span><?php echo app('translator')->get('Showing page'); ?>:&nbsp <span class="result"><?php echo e($jobs->firstItem()); ?> <?php echo app('translator')->get('of'); ?> <?php echo e($jobs->lastItem()); ?></span></span>
                                        </div>
                                    </div>
                                    <ul class="view-btn-list">
                                        <li><button type="button" class="grid-view-btn list-btn"><i class="lab la-buromobelexperte"></i></button></li>
                                        <li class="active"><button type="button" class="list-view-btn list-btn"><i class="las la-list"></i></button></li>
                                    </ul>
                                </div>
                                <div class="item-wrapper-right">
                                    <form class="search-from" action="<?php echo e(route('job.search')); ?>" method="GET">
                                        <input type="search" name="search" value="<?php echo e(@$search); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Search here'); ?>...">
                                        <button type="submit"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="item-bottom-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-9 col-lg-9 mb-30">
                                        <div class="item-card-wrapper list-view">
                                        <?php $__empty_1 = true; $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <div class="item-card">
                                                <div class="item-card-thumb">
                                                    <img src="<?php echo e(getImage('assets/images/job/'.$job->image,'590x300')); ?>" alt="<?php echo app('translator')->get('Job Image'); ?>">
                                                </div>
                                                <div class="item-card-content">
                                                    <div class="item-card-content-top">
                                                        <div class="left">
                                                            <div class="author-thumb">
                                                                <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $job->user->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('author'); ?>">
                                                            </div>
                                                            <div class="author-content">
                                                                <h5 class="name"><a href="<?php echo e(route('profile', $job->user->username)); ?>"><?php echo e($job->user->username); ?></a> <span class="level-text"><?php echo e(__(@$job->user->rank->level)); ?></span></h5>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="item-amount"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($job->amount)); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="item-tags order-3">
                                                        <?php $__currentLoopData = $job->skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <a href="javascript:void(0)"><?php echo e(__($skill)); ?></a>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                    <h3 class="item-card-title"><a href="<?php echo e(route('job.details', [slug($job->title), encrypt($job->id)])); ?>"><?php echo e(__($job->title)); ?></a></h3>
                                                </div>
                                                <div class="item-card-footer mb-10-none">
                                                    <div class="left mb-10">
                                                        <a href="javascript:void(0)" class="btn--base active date-btn"><?php echo e($job->delivery_time); ?> <?php echo app('translator')->get('Days'); ?></a>
                                                        <a href="javascript:void(0)" class="btn--base bid-btn"><?php echo app('translator')->get('Total Bids'); ?>(<?php echo e($job->jobBiding->count()); ?>)</a>
                                                    </div>
                                                    <div class="right mb-10">
                                                        <div class="order-btn">
                                                            <a href="<?php echo e(route('job.details', [slug($job->title), encrypt($job->id)])); ?>" class="btn--base"><i class="las la-shopping-cart"></i> <?php echo app('translator')->get('Bid Now'); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <div class="empty-message-box bg--gray">
                                                <div class="icon"><i class="las la-frown"></i></div>
                                                <p class="caption"><?php echo e($emptyMessage); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        </div>
                                        <nav>
                                            <?php echo e($jobs->links()); ?>

                                        </nav>
                                    </div>
                                    <?php echo $__env->make($activeTemplate.'partials.job_filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/up/core/resources/views/templates/basic/job.blade.php ENDPATH**/ ?>
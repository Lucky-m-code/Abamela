
<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="item-section item-overview-section">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-3 col-lg-3 mb-30">
                                    <div class="sidebar">
                                        <div class="widget mb-30">
                                            <div class="profile-widget">
                                                <div class="profile-widget-header">
                                                    <div class="profile-widget-thumb">
                                                        <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user_bg']['path'].'/'. $user->bg_image,'background_image')); ?>" alt="item-banner">
                                                        <?php if($user->isOnline()): ?>
                                                            <span class="badge-offline bg--success"><?php echo app('translator')->get('Online'); ?></span>
                                                        <?php else: ?>
                                                            <span class="badge-offline bg--warning"><?php echo app('translator')->get('Offline'); ?></span>
                                                        <?php endif; ?>
                                                        <?php if(auth()->check()): ?>
                                                            <?php if(auth()->user()->following->find($user->id)): ?>
                                                                <a href="<?php echo e(route('user.follow', $user->id)); ?>">
                                                                    <span class="badge-follow bg--success">
                                                                        <?php echo app('translator')->get('Following'); ?>
                                                                    </span>
                                                                </a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('user.follow', $user->id)); ?>">
                                                                    <span class="badge-follow bg--info">
                                                                        <?php echo app('translator')->get('Follow'); ?>
                                                                    </span>
                                                                </a>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('user.follow', $user->id)); ?>">
                                                                <span class="badge-follow bg--info">
                                                                    <?php echo app('translator')->get('Follow'); ?>
                                                                </span>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="profile-widget-author">
                                                        <div class="thumb">
                                                            <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $user->image,'profile_image')); ?>" alt="<?php echo e(__($user->username)); ?>">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="name">
                                                                <a href="<?php echo e(route('profile', $user->username)); ?>"><?php echo e(__($user->username)); ?></a>
                                                            </h4>
                                                            <span class="designation"><?php echo e(@$user->designation); ?></span>
                                                            <div class="ratings">
                                                                <span><i class="las la-star text--warning"></i> <?php echo e(getAmount($reviewAvg, 2)); ?> (<?php echo e($reviewCount); ?> <?php echo app('translator')->get('reviews'); ?>)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="profile-list-area">
                                                    <ul class="details-list">
                                                         <li><span><?php echo app('translator')->get('Total Service'); ?></span> <span><?php echo e($user->services->count()); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Work Complete'); ?></span> <span><?php echo e($workCompleteCount); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Total Software'); ?></span> <span><?php echo e($user->softwares->count()); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Work Pending'); ?></span> <span><?php echo e($workPendingCount); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Total Job'); ?></span> <span><?php echo e($user->jobs->count()); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Country'); ?></span> <span><?php echo e(@$user->address->country); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Member since'); ?></span> <span><?php echo e(showDateTime($user->created_at, 'd M Y')); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Verified User'); ?></span> 
                                                            <?php if($user->status == 1): ?>
                                                                <span class="text--success"><?php echo app('translator')->get('Yes'); ?></span>
                                                            <?php else: ?>
                                                                <span class="text--success"><?php echo app('translator')->get('No'); ?></span>
                                                            <?php endif; ?>
                                                        </li>
                                                    </ul>
                                                    <div class="widget-btn mt-20">
                                                        <?php if(auth()->guard()->check()): ?>
                                                            <?php if($conversion): ?>
                                                                <a href="<?php echo e(route('user.conversation.inbox')); ?>" class="btn--base w-100"><?php echo app('translator')->get('Inbox'); ?></a>
                                                            <?php else: ?>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#depoModal" class="btn--base w-100"><?php echo app('translator')->get('Contact Now'); ?></a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php if(auth()->guard()->guest()): ?>
                                                            <a href="<?php echo e(route('user.login')); ?>" class="btn--base w-100"><?php echo app('translator')->get('Contact Now'); ?></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget custom-widget mb-30">
                                            <h3 class="widget-title"><?php echo app('translator')->get('About ME'); ?></h3>
                                            <p><?php echo e(__(@$user->about_me)); ?></p>
                                        </div>
                                        <div class="widget custom-widget">
                                            <div class="follow-tab">
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <button class="nav-link active" id="followers-tab" data-bs-toggle="tab" data-bs-target="#followers"
                                                            type="button" role="tab" aria-controls="followers" aria-selected="true"><?php echo app('translator')->get('Followers'); ?> (<?php echo e($user->followers()->count()); ?>)</button>
                                                        <button class="nav-link" id="following-tab" data-bs-toggle="tab" data-bs-target="#following" type="button"
                                                            role="tab" aria-controls="following" aria-selected="false"><?php echo app('translator')->get('Following'); ?> (<?php echo e($user->following()->count()); ?>)</button>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                                                        <?php $__empty_1 = true; $__currentLoopData = $user->followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <div class="follow-widget-area">
                                                                <div class="follow-widget-author">
                                                                    <div class="thumb">
                                                                        <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $value->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('client'); ?>">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h5 class="name"><a href="<?php echo e(route('profile', $value->username)); ?>"><?php echo e($value->username); ?></a></h5>
                                                                        <span class="level"><?php echo e(@$value->rank->level); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-btn">
                                                                    <a href="<?php echo e(route('user.follow', $user->id)); ?>" class="btn--base active"><i class="fas fa-user-plus"></i> <?php echo app('translator')->get('Unfollow'); ?></a>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                    <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
                                                    <?php $__empty_2 = true; $__currentLoopData = $user->following; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                        <div class="follow-widget-area">
                                                            <div class="follow-widget-author">
                                                                <div class="thumb">
                                                                    <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $value->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('client'); ?>">
                                                                </div>
                                                                <div class="content">
                                                                    <h5 class="name"><a href="<?php echo e(route('profile', $value->username)); ?>"><?php echo e($value->username); ?></a></h5>
                                                                    <span class="level"><?php echo e(@$value->rank->level); ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="follow-btn">
                                                                <a href="<?php echo e(route('user.follow', $user->id)); ?>" class="btn--base active"><i class="fas fa-user-plus"></i> <?php echo app('translator')->get('Follow'); ?></a>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 mb-30">
                                    <div class="item-details-area">
                                        <div class="product-tab">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button"
                                                        role="tab" aria-controls="service" aria-selected="true"><?php echo app('translator')->get('Services'); ?></button>
                                                    <button class="nav-link" id="software-tab" data-bs-toggle="tab" data-bs-target="#software" type="button"
                                                        role="tab" aria-controls="software" aria-selected="false"><?php echo app('translator')->get('Software'); ?></button>
                                                    <button class="nav-link" id="job-tab" data-bs-toggle="tab" data-bs-target="#job" type="button"
                                                        role="tab" aria-controls="job" aria-selected="false"><?php echo app('translator')->get('Job'); ?></button>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="service-tab">
                                                    <div class="item-card-wrapper border-0 p-0 grid-view mt-30">
                                                    <?php $__currentLoopData = $userServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="item-card">
                                                            <div class="item-card-thumb">
                                                                <img src="<?php echo e(getImage('assets/images/service/'.$service->image, imagePath()['service']['size'])); ?>" alt="<?php echo app('translator')->get('Service Image'); ?>">
                                                                <?php if($service->featured == 1): ?>
                                                                    <div class="item-level"><?php echo app('translator')->get('Featured'); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="item-card-content">
                                                                <div class="item-card-content-top">
                                                                    <div class="left">
                                                                        <div class="author-thumb">
                                                                            <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $service->user->image,'profile_image')); ?>" alt="<?php echo e(__($service->user->username)); ?>">
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

                                                                    <a href="javascript:void(0)" class="item-love me-2 loveHeartAction"  data-serviceid="<?php echo e($service->id); ?>"><i class="fas fa-heart"></i> <span class="give-love-amount">(<?php echo e(__($service->favorite)); ?>)</span></a>
                                                                    
                                                                    <a href="javascript:void(0)" class="item-like"><i class="las la-thumbs-up"></i> (<?php echo e($service->likes); ?>)</a>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="order-btn">
                                                                        <a href="<?php echo e(route('user.service.booking', [slug($service->title), encrypt($service->id)])); ?>" class="btn--base"><i class="las la-shopping-cart"></i> <?php echo app('translator')->get('Order Now'); ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                                <div class="widget-btn text-center mt-4">
                                                    <?php if($userServices->total() > 6): ?>
                                                        <a href="<?php echo e(route('profile.service', $user->username)); ?>" class="btn--base showMoreService"  data-page="2" data-link="<?php echo e(route('profile', $user->username)); ?>?page="><?php echo app('translator')->get('Show More'); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                                <div class="tab-pane fade" id="software" role="tabpanel" aria-labelledby="software-tab">
                                                    <div class="item-card-wrapper border-0 p-0 grid-view mt-30">
                                                    <?php $__currentLoopData = $userSoftwares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $software): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="item-card">
                                                            <div class="item-card-thumb">
                                                                <img src="<?php echo e(getImage('assets/images/software/'.$software->image,'590x300')); ?>" alt="<?php echo app('translator')->get('item-software'); ?>">
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
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>

                                                <div class="widget-btn text-center mt-4">
                                                    <?php if($userSoftwares->total() > 6): ?>
                                                        <a href="<?php echo e(route('profile.software', $user->username)); ?>" class="btn--base"><?php echo app('translator')->get('Show More'); ?></a>
                                                    <?php endif; ?>
                                                </div>

                                                </div>
                                                <div class="tab-pane fade" id="job" role="tabpanel" aria-labelledby="job-tab">
                                                    <div class="item-card-wrapper border-0 p-0 grid-view mt-30" id="viewMoreJob">
                                                    <?php $__currentLoopData = $userJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                            <div class="item-card-footer">
                                                                <div class="left">
                                                                    <a href="javascript:void(0)" class="btn--base active date-btn"><?php echo e(__($job->delivery_time)); ?> <?php echo app('translator')->get('Days'); ?></a>
                                                                    <a href="<?php echo e(route('job.details', [slug($job->title), encrypt($job->id)])); ?>" class="btn--base bid-btn"><?php echo app('translator')->get('Total Bids'); ?>(<?php echo e($job->jobBiding->count()); ?>)</a>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="order-btn">
                                                                        <a href="<?php echo e(route('job.details', [slug($job->title), encrypt($job->id)])); ?>" class="btn--base"><i class="las la-shopping-cart"></i> <?php echo app('translator')->get('Bid Now'); ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                                    <div class="widget-btn text-center mt-4">
                                                        <?php if($userJobs->total() > 1): ?>
                                                            <a href="<?php echo e(route('profile.job', $user->username)); ?>" class="btn--base"><?php echo app('translator')->get('Show More'); ?></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-reviews-content mt-40">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="section-header">
                                                        <h2 class="section-title"><?php echo app('translator')->get('Seller Reviews'); ?></h2>
                                                    </div>
                                                    <ul class="comment-list" id="reviewShow">
                                                    <?php $__currentLoopData = $userReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="comment-container d-flex flex-wrap">
                                                            <div class="comment-avatar">
                                                                <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $review->user->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('client'); ?>">
                                                            </div>
                                                            <div class="comment-box">
                                                                <div class="ratings-container">
                                                                    <div class="product-ratings">
                                                                        <?php if(intval($review->rating) == 1): ?>
                                                                            <i class="las la-star"></i>
                                                                        <?php elseif(intval($review->rating) == 2): ?>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                        <?php elseif(intval($review->rating) == 3): ?>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                        <?php elseif(intval($review->rating) == 4): ?>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                        <?php elseif(intval($review->rating) == 5): ?>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                            <i class="las la-star"></i>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-info mb-1">
                                                                    <h4 class="avatar-name"><?php echo e($review->user->fullname); ?></h4> - <span class="comment-date"><?php echo e(showDateTime($review->created_at, 'd M Y')); ?></span>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p><?php echo e(__($review->review)); ?></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    <?php if($userReviews->total() > 6): ?>
                                                        <div class="view-more-btn text-center mt-4">
                                                            <a href="javascript:void(0)" class="btn--base reviewMore" data-page="2" data-link="<?php echo e(route('profile', $user->username)); ?>?page="> <?php echo app('translator')->get('View More'); ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('Start new conversation'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('user.conversation.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="recevier_id" value="<?php echo e($user->id); ?>">

                        <div class="form-group">
                            <label for="subject" class="font-weight-bold"><?php echo app('translator')->get('Subject'); ?></label>
                            <input type="text" class="form-control" name="subject" placeholder="<?php echo app('translator')->get('Enter Subject'); ?>" maxlength="255" required>
                        </div>
                         
                        <div class="form-group">
                            <label for="message" class="font-weight-bold"><?php echo app('translator')->get('Message'); ?></label>
                            <textarea rows="8" class="form-control" name="message" maxlength="500" placeholder="<?php echo app('translator')->get('Enter Message'); ?>" required></textarea>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn--base" style="width:100%;"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger btn-rounded text-white" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
<script>
    'use strict';
    $('.reviewMore').on('click',function(){
        var link = $(this).data('link');
        var page = $(this).data('page');
        var href = link + page;
        var reviewCount = <?php echo e($reviewCount); ?>;
        $.get(href, function(response){
            var html = $(response).find("#reviewShow").html();
            $("#reviewShow").append(html);
            var loadMoreCount = 6 * page;
            if(loadMoreCount > reviewCount){
                $('.reviewMore').hide()
            }
        });
        $(this).data('page', (parseInt(page) +1));
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/profile.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="item-section item-details-section">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-9 col-lg-9 mb-30">
                                    <div class="item-details-area">
                                        <div class="item-details-box">
                                            <div class="item-details-thumb-area">
                                                <div class="item-details-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="item-details-thumb">
                                                                <img src="<?php echo e(getImage('assets/images/job/'.$job->image,'590x300')); ?>" alt="<?php echo app('translator')->get('item-banner'); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-details-content">
                                                    <h2 class="title"><?php echo e(__($job->title)); ?></h2>
                                                    <div class="item-details-footer">
                                                        <div class="left">
                                                            <div class="item-details-tag p-0 m-0 border-0">
                                                                <ul class="tags-wrapper">
                                                                    <li class="caption"><?php echo app('translator')->get('Skill'); ?></li>
                                                                    <?php $__currentLoopData = $job->skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><a href="javascript:void(0)"><?php echo e(__($skill)); ?></a></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="social-area">
                                                                <ul class="footer-social">
                                                                    <li>
                                                                        <a href="http://www.facebook.com/sharer.php?u=http://www.example.com" target="__blank"><i class="fab fa-facebook-f"></i></a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="http://twitter.com/share?url=http://www.example.com&text=Simple Share Buttons&hashtags=simplesharebuttons" target="__blank"><i class="fab fa-twitter"></i></a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.example.com" target="__blank"><i class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tab mt-40">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button"
                                                        role="tab" aria-controls="des" aria-selected="true"><?php echo app('translator')->get('Description'); ?></button>
                                                    <button class="nav-link" id="req-tab" data-bs-toggle="tab" data-bs-target="#req" type="button"
                                                        role="tab" aria-controls="req" aria-selected="false"><?php echo app('translator')->get('Requirements'); ?></button>
                                                  
                                                    <button class="nav-link" id="bids-tab" data-bs-toggle="tab" data-bs-target="#bids" type="button"
                                                        role="tab" aria-controls="bids" aria-selected="false"><?php echo app('translator')->get('Bids'); ?></button>
                                                  

                                                    <button class="nav-link" id="comment-tab" data-bs-toggle="tab" data-bs-target="#comment" type="button"
                                                        role="tab" aria-controls="comment" aria-selected="false"><?php echo app('translator')->get('Buyer Comments'); ?></button>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                                                    <div class="product-desc-content">
                                                        <?php echo $job->description ?>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="req" role="tabpanel" aria-labelledby="req-tab">
                                                    <div class="product-desc-content">
                                                        <?php echo $job->requirements ?>
                                                    </div>
                                                </div>
                                                
                                            <div class="tab-pane fade" id="bids" role="tabpanel" aria-labelledby="bids-tab">
                                            	<?php if(auth()->check()): ?>
                                                <?php if($job->user_id != auth()->user()->id): ?>
                                                    <div class="card custom--card mt-20">
                                                        <div class="card-body">
                                                            <div class="card-form-wrapper">
                                                                <form action="<?php echo e(route('user.job.biding.store')); ?>" method="post" role="form">
                                                                    <?php echo csrf_field(); ?>
                                                                    <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>">
                                                                    <div class="row justify-content-center mb-20-none">
                                                                        <div class="col-xl-12 form-group">
                                                                            <label><?php echo app('translator')->get('Title'); ?>*</label>
                                                                            <input type="text" name="title" class="form-control" placeholder="<?php echo app('translator')->get('Enter Title'); ?>" value="<?php echo e(old('title')); ?>" required="">
                                                                        </div>

                                                                        <div class="col-xl-6 form-group">
                                                                            <label><?php echo app('translator')->get('Price'); ?>*</label>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control" name="amount" value="<?php echo e(old('amount')); ?>" placeholder="<?php echo app('translator')->get('Enter Price'); ?>" required="">
                                                                              <span class="input-group-text" id="basic-addon2"><?php echo e(__($general->cur_text)); ?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-6 form-group">
                                                                            <label><?php echo app('translator')->get('Any One Can Order'); ?>*</label>
                                                                            <select class="form-control bg--gray" name="order_type" required="">
                                                                                <option value="1"><?php echo app('translator')->get('Yes'); ?></option>
                                                                                <option value="2"><?php echo app('translator')->get('No'); ?></option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-xl-12 form-group">
                                                                            <label><?php echo app('translator')->get('Description'); ?>*</label>
                                                                            <textarea class="form-control bg--gray" name="description" placeholder="<?php echo app('translator')->get('Description'); ?>" rows="8" required=""><?php echo e(old('description')); ?></textarea>
                                                                        </div>
                                                                        <div class="col-xl-12 form-group">
                                                                            <button type="submit" class="submit-btn w-100"><?php echo app('translator')->get('BID NOW'); ?></button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php endif; ?>

                                                    <?php if($job->jobBiding->isNotEmpty()): ?>
                                                        <div class="item-card-wrapper item-card-wrapper--style border-0 p-0 list-view justify-content-center mt-30" id="jobBidingShow">
                                                        <?php $__currentLoopData = $jobBidings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biding): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="item-card">
                                                                <div class="item-card-content">
                                                                        <div class="item-card-content-top">
                                                                            <div class="item-top-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                                                                <h3 class="item-card-title"><?php echo e(__($biding->title)); ?></h3>
                                                                                <div class="right">
                                                                                    <div class="item-amount"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($biding->price)); ?></div>
                                                                                </div>
                                                                            </div>
                                                                            <p><?php echo e(__($biding->description)); ?></p>
                                                                            <div class="item-footer-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                                                                <div class="left">
                                                                                    <div class="author-thumb">
                                                                                        <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $biding->user->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('author'); ?>">
                                                                                    </div>
                                                                                    <div class="author-content">
                                                                                        <h5 class="name"><a href="<?php echo e(route('profile', $biding->user->username)); ?>"><?php echo e(__($biding->user->username)); ?></a> <span class="level-text"><?php echo e(__(@$biding->user->rank->level)); ?></span></h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <div class="order-btn">
                                                                                        <a href="<?php echo e(route('user.job.biding.order', [slug($biding->title), encrypt($biding->id)])); ?>" class="btn--base"><i class="las la-shopping-cart"></i> <?php echo app('translator')->get('Order Now'); ?></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        <?php if($jobBidings->total() > 5): ?>
                                                            <div class="view-more-btn text-center mt-4">
                                                                <a href="javascript:void(0)" class="btn--base jobBidingMore" data-page="2" data-link="<?php echo e(route('job.details', [slug($job->title), encrypt($job->id)])); ?>?page="> <?php echo app('translator')->get('View More'); ?></a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                
                                                <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="comment-tab">
                                                    <div class="product-reviews-content product-comment-content">
                                                        <div class="comment-form-area mb-40">
                                                            <form class="comment-form" action="<?php echo e(route('user.comment.store')); ?>" method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>">
                                                                <textarea class="form-control h-auto" name="comment" placeholder="<?php echo app('translator')->get('Write Comment'); ?>" rows="8" required=""></textarea>
                                                                <button type="submit" class="submit-btn mt-20"><?php echo app('translator')->get('Post Comment'); ?></button>
                                                            </form>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <h3 class="reviews-title"><?php echo e($job->commentCount->count()); ?> <?php echo app('translator')->get('comments'); ?></h3>
                                                                <ul class="comment-list" id="commentShow">
                                                                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="comment-container d-flex flex-wrap">
                                                                            <div class="comment-avatar">
                                                                                <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $comment->user->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('client'); ?>">
                                                                            </div>
                                                                            <div class="comment-box">
                                                                                <div class="comment-top-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                                                                    <div class="left">
                                                                                        <div class="comment-info">
                                                                                            <h4 class="avatar-name"><?php echo e(__($comment->user->username)); ?></h4> - <span class="comment-date"><?php echo e(showDateTime($comment->created_at, 'd M Y')); ?></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="comment-text">
                                                                                    <p><?php echo e(__($comment->comments)); ?></p>
                                                                                </div>
                                                                                <button class="reply-btn mt-20">
                                                                                    <i class="fas fa-reply"></i>
                                                                                    <span><?php echo app('translator')->get('Reply'); ?></span>
                                                                                </button>
                                                                                <div class="reply-form-area mt-30 mb-40">
                                                                                    <form class="comment-form" method="POST" action="<?php echo e(route('user.comment.reply')); ?>">
                                                                                        <?php echo csrf_field(); ?>
                                                                                        <input type="hidden" value="<?php echo e($comment->id); ?>" name="comment_id">
                                                                                        <input type="hidden" value="<?php echo e($job->id); ?>" name="job_id">
                                                                                        <textarea class="form-control h-auto" placeholder="<?php echo app('translator')->get('Write Reply'); ?>" rows="8" name="comment" required=""></textarea>
                                                                                        <button type="submit" class="submit-btn mt-20"><?php echo app('translator')->get('Comment'); ?></button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    <?php $__currentLoopData = $comment->commentReply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $replyComment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="comment-container reply-container d-flex flex-wrap">
                                                                            <div class="comment-avatar">
                                                                                <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $replyComment->user->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('client'); ?>">
                                                                            </div>
                                                                            <div class="comment-box">
                                                                                <div class="comment-top-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                                                                    <div class="left">
                                                                                        <div class="comment-info">
                                                                                            <h4 class="avatar-name"><?php echo e(__($replyComment->user->username)); ?></h4> - <span class="comment-date"><?php echo e(showDateTime($replyComment->created_at, 'd M Y')); ?></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="comment-text">
                                                                                    <p><?php echo e(__($replyComment->comments)); ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>

                                                                <?php if($comments->total() > 7): ?>
                                                                    <div class="view-more-btn text-center mt-4">
                                                                        <a href="javascript:void(0)" class="btn--base commentMore" data-page="2" data-link="<?php echo e(route('job.details', [slug($job->title), encrypt($job->id)])); ?>?page="> <?php echo app('translator')->get('View More'); ?></a>
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
                                <div class="col-xl-3 col-lg-3 mb-30">
                                    <div class="sidebar">
                                        <div class="widget custom-widget mb-30">
                                            <h3 class="widget-title"><?php echo app('translator')->get('SHORT DETAILS'); ?></h3>
                                            <ul class="details-list">
                                                <li><span><?php echo app('translator')->get('Delivery Time'); ?></span> <span><?php echo e($job->delivery_time); ?> <?php echo app('translator')->get('Days'); ?></span></li>
                                                <li><span><?php echo app('translator')->get('Budget'); ?></span> <span><?php echo e(showAmount($job->amount)); ?> <?php echo e($general->cur_text); ?></span></li>
                                            </ul>
                                        </div>

                                        <div class="widget">
                                            <div class="profile-widget">
                                                <div class="profile-widget-header">
                                                    <div class="profile-widget-thumb">
                                                        <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user_bg']['path'].'/'. $job->user->bg_image, 'background_image')); ?>" alt="<?php echo app('translator')->get('User bg image'); ?>">
                                                    </div>
                                                    <div class="profile-widget-author">
                                                        <div class="thumb">
                                                            <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $job->user->image,'profile_image')); ?>" alt="<?php echo e(__($job->user->username)); ?>">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="name">
                                                                <a href="<?php echo e(route('profile', $job->user->username)); ?>"><?php echo e(__($job->user->username)); ?></a>
                                                            </h4>
                                                            <span class="designation"><?php echo e(__(@$job->user->designation)); ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-widget-author-meta">
                                                        <div class="location">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <span><?php echo e(__(@$job->user->address->country)); ?></span>
                                                        </div>
                                                        <div class="btn-area">
                                                            <a href="<?php echo e(route('profile', $job->user->username)); ?>" class="btn--base"><?php echo app('translator')->get('View Profile'); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="profile-list-area">
                                                    <ul class="details-list">
                                                        <li><span><?php echo app('translator')->get('Total Service'); ?></span> <span><?php echo e($totalService); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('In Progress'); ?></span> <span><?php echo e($workInprogress); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Rating'); ?></span> <span> <span class="ratings"><i class="las la-star text--warning"></i></span> (<?php echo e(getAmount($reviewRataingAvg, 2)); ?>)</span>
                                                        </li>
                                                        <li><span><?php echo app('translator')->get('Member Since'); ?></span> <span><?php echo e(showDateTime($job->user->created_at, 'd M Y')); ?></span></li>
                                                        <li><span><?php echo app('translator')->get('Verified User'); ?></span>
                                                            <?php if($job->user->status == 1): ?>
                                                                <span class="text--success"><?php echo app('translator')->get('Yes'); ?></span>
                                                            <?php else: ?>
                                                                <span class="text--danger"><?php echo app('translator')->get('No'); ?></span>
                                                            <?php endif; ?>
                                                        </li>
                                                    </ul>
                                                    <div class="widget-btn mt-20">
                                                        <a href="<?php echo e(route('profile', $job->user->username)); ?>" class="btn--base w-100"><?php echo app('translator')->get('Hire Me'); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                         
                            <?php if($otherServices->isNotEmpty()): ?>
                                <div class="item-bottom-area pt-100">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <div class="section-header">
                                                <h2 class="section-title"><?php echo app('translator')->get('Other services by'); ?> <?php echo e(__($job->user->username)); ?></h2>
                                            </div>
                                            <div class="item-card-wrapper border-0 p-0 grid-view">
                                            <?php $__currentLoopData = $otherServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="item-card">
                                                    <div class="item-card-thumb">
                                                        <img src="<?php echo e(getImage('assets/images/service/'.$other->image, imagePath()['service']['size'])); ?>" alt="<?php echo app('translator')->get('service-banner'); ?>">
                                                        <?php if($other->featured == 1): ?>
                                                            <div class="item-level"><?php echo app('translator')->get('Featured'); ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="item-card-content">
                                                        <div class="item-card-content-top">
                                                            <div class="left">
                                                                <div class="author-thumb">
                                                                    <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $other->user->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('author'); ?>">
                                                                </div>
                                                                <div class="author-content">
                                                                    <h5 class="name"><a href="<?php echo e(route('profile', $other->user->username)); ?>"><?php echo e(__($other->user->username)); ?></a> <span
                                                                            class="level-text"><?php echo e(__(@$other->user->rank->level)); ?></span></h5>
                                                                    <div class="ratings">
                                                                        <i class="fas fa-star"></i>
                                                                        <span class="rating me-2"><?php echo e(__(getAmount($other->rating, 2))); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="right">
                                                                <div class="item-amount"><?php echo e(__($general->cur_sym)); ?><?php echo e(getAmount($other->price)); ?></div>
                                                            </div>
                                                        </div>
                                                        <h3 class="item-card-title"><a href="<?php echo e(route('service.details', [slug($other->title), encrypt($other->id)])); ?>"><?php echo e(__($other->title)); ?></a></h3>
                                                    </div>
                                                    <div class="item-card-footer">
                                                        <div class="left">
                                                            <a href="javascript:void(0)" class="item-love me-2 loveHeartAction" data-serviceid="<?php echo e($other->id); ?>"><i class="fas fa-heart"></i> <span
                                                                    class="give-love-amount">(<?php echo e(__($other->favorite)); ?>)</span></a>
                                                            <a href="javascript:void(0)" class="item-like"><i class="las la-thumbs-up"></i> (<?php echo e(__($other->likes)); ?>)</a>
                                                        </div>
                                                        <div class="right">
                                                            <div class="order-btn">
                                                                <a href="<?php echo e(route('user.service.booking', [slug($other->title), encrypt($other->id)])); ?>" class="btn--base"><i class="las la-shopping-cart"></i> <?php echo app('translator')->get('Order
                                                                    Now'); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
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
    "use strict";
    $('.commentMore').on('click',function(){
        var link = $(this).data('link');
        var page = $(this).data('page');
        var href = link + page;
        var commentCount = <?php echo e($comments->total()); ?>;
        $.get(href, function(response){
            var html = $(response).find("#commentShow").html();
            $("#commentShow").append(html);
            var loadMoreCount = 7 * page;
            if(loadMoreCount > commentCount){
                $('.commentMore').hide()
            }
        });
        $(this).data('page', (parseInt(page) +1));        
    });

    $('.jobBidingMore').on('click',function(){
        var link = $(this).data('link');
        var page = $(this).data('page');
        var href = link + page;
        var jobBidingCount = <?php echo e($jobBidings->total()); ?>;
        $.get(href, function(response){
            var html = $(response).find("#jobBidingShow").html();
            $("#jobBidingShow").append(html);
            var loadMoreCount = 5 * page;
            if(loadMoreCount > jobBidingCount){
                $('.jobBidingMore').hide()
            }
        });
        $(this).data('page', (parseInt(page) +1));
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/job_details.blade.php ENDPATH**/ ?>
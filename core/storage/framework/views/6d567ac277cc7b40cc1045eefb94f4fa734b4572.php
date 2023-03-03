
<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="item-section">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-9 col-lg-9 mb-30">
                                    <div class="item-details-area">
                                        <div class="item-card-wrapper border-0 p-0 list-view">
                                            <div class="item-card">
                                                <div class="item-card-thumb">
                                                    <img src="<?php echo e(getImage('assets/images/job/'.$jobBiding->job->image, imagePath()['job']['size'])); ?>" alt="<?php echo app('translator')->get('item-banner'); ?>">
                                                </div>
                                                <div class="item-card-content">
                                                    <div class="item-card-content-top">
                                                        <div class="left">
                                                            <div class="author-thumb">
                                                                  <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $jobBiding->user->image,'profile_image')); ?>" alt="<?php echo e(__($jobBiding->user->username)); ?>">
                                                            </div>
                                                            <div class="author-content">
                                                                <h5 class="name"><a href="<?php echo e(route('profile', $jobBiding->user->username)); ?>"><?php echo e(__($jobBiding->user->username)); ?></a> <span class="level-text"> <?php echo e(__(@$jobBiding->user->rank->level)); ?></span></h5>
                                                            </div>
                                                        </div>
                                                        <div class="right d-flex flex-wrap align-items-center">
                                                            <div class="item-amount"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($jobBiding->price)); ?></div>
                                                        </div>
                                                    </div>
                                                    <h3 class="item-card-title"><a href="javascript:void(0)"><?php echo e(__($jobBiding->title)); ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="product-desc mt-80">
                                            <div class="product-desc-content pt-0">
                                                <?php echo $jobBiding->description ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 mb-30">
                                    <div class="sidebar">
                                        <div class="widget custom-widget mb-30">
                                            <h3 class="widget-title"><?php echo app('translator')->get('Hire Employees'); ?></h3>
                                            <ul class="details-list">
                                                <li><span><?php echo app('translator')->get('Biding Price'); ?> :</span> <span><?php echo e($general->cur_sym); ?><?php echo e(getAmount($jobBiding->price)); ?></span>
                                                </li>
                                               
                                                <li><span><?php echo app('translator')->get('Subtotal'); ?> :</span> <span><?php echo e($general->cur_sym); ?><?php echo e(getAmount($jobBiding->price)); ?></span>
                                                </li>
                                            </ul>
                                            <div class="total-price-area d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left">
                                                    <h4 class="title"><?php echo app('translator')->get('Total'); ?> :</h4>
                                                </div>
                                                <div class="right">
                                                    <h4 class="title"><?php echo e($general->cur_sym); ?><span id="paymentPrice"><?php echo e(getAmount($jobBiding->price)); ?></span></h4>
                                                </div>
                                            </div>
                                            <div class="widget-btn mt-20">
                                                 <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#serviceModal" class="btn--base w-100"><i class="las la-sign-in-alt"></i> <?php echo app('translator')->get('Checkout'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if($otherServices->isNotEmpty()): ?>
                                <div class="item-bottom-area  item-details-section pt-100">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <div class="section-header">
                                                <h2 class="section-title"><?php echo app('translator')->get('Other services by'); ?> <?php echo e(__($jobBiding->user->username)); ?></h2>
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
                                                                    <img src="<?php echo e(getImage(imagePath()['profile']['user']['path'].'/'. $other->user->image,'profile_image')); ?>" alt="<?php echo app('translator')->get('author'); ?>">
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
                                                            <a href="javascript:void(0)" class="item-love me-2 loveHeartAction"
                                                             data-serviceid="<?php echo e($service->id); ?>"><i class="fas fa-heart"></i> <span
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

<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('Payment for hire employees'); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('user.hire.employ')); ?>">
                    <?php echo csrf_field(); ?>
                        <input type="hidden" name="job_biding_id" value="<?php echo e($jobBiding->id); ?>">
                        <div class="form-group">
                            <h5><?php echo app('translator')->get('How you want to pay'); ?></h5>
                            <select class="form-control" name="payment">
                                <option value="wallet"><?php echo e(__($general->sitename)); ?> <?php echo app('translator')->get('wallet'); ?></option>
                                <option value="checkout"><?php echo app('translator')->get('Checkout'); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn--base" style="width:100%;"><?php echo app('translator')->get('Confirm'); ?></button>
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

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/biding_order.blade.php ENDPATH**/ ?>
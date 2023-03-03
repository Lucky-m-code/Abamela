
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.seller_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="deposit-area">
                        <div class="row justify-content-center mb-30-none">
                            <?php $__currentLoopData = $gatewayCurrency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                                    <div class="deposit-item">
                                        <div class="deposit-item-header section--bg text-white text-center">
                                            <span class="title"><i class="lab la-paypal"></i> <?php echo e(__($currency->name)); ?></span>
                                        </div>
                                        <div class="deposit-item-body">
                                            <div class="deposit-thumb">
                                                <img src="<?php echo e($currency->methodImage()); ?>" alt="<?php echo e(__($currency->name)); ?>">
                                            </div>
                                        </div>
                                        <div class="deposit-item-footer bg--base">
                                            <div class="deposit-btn text-center">
                                                <form action="<?php echo e(route('user.payment.insert')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="booking_number" value="<?php echo e(session()->get('booking')); ?>">
                                                    <input type="hidden" name="currency" value="<?php echo e($currency->currency); ?>">
                                                    <input type="hidden" name="method_code" value="<?php echo e($currency->method_code); ?>">
                                                    <button type="submit" class="btn btn--base text-white btn-block btn-icon icon-left"><i class="las la-money-bill"></i> <?php echo app('translator')->get('PayNow'); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/payment.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.buyer_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="deposit-area deposit-preview-area">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-8">
                                <div class="deposit-item">
                                    <div class="deposit-item-header section--bg text-white text-center">
                                        <span class="title"><i class="lab la-paypal"></i> <?php echo e($data->gatewayCurrency()->name); ?></span>
                                    </div>
                                    <div class="deposit-item-body">
                                        <div class="deposit-thumb-area">
                                            <div class="deposit-thumb">
                                                <img src="<?php echo e($data->gatewayCurrency()->methodImage()); ?>" alt="<?php echo app('translator')->get('payment'); ?>">
                                            </div>
                                        </div>
                                        <div class="deposit-content text-center">
                                            <ul class="deposit-list">
                                                <li><?php echo app('translator')->get('Amount'); ?>: <span><?php echo e(getAmount($data->amount)); ?></span> <?php echo e(__($general->cur_text)); ?></li>
                                                <li><?php echo app('translator')->get('Charge'); ?>: <span><?php echo e(getAmount($data->charge)); ?></span> <?php echo e(__($general->cur_text)); ?></li>
                                                <li><?php echo app('translator')->get('Payable'); ?>: <span><?php echo e(getAmount($data->amount + $data->charge)); ?>

                                                </span> <?php echo e($general->cur_text); ?></li>
                                                <li> <?php echo app('translator')->get('Conversion Rate'); ?>: <strong>1 <?php echo e(__($general->cur_text)); ?> = <?php echo e(getAmount($data->rate)); ?>  <?php echo e(__($data->baseCurrency())); ?></strong>
                                                </li>
                                                <li><?php echo app('translator')->get('In'); ?> <?php echo e($data->baseCurrency()); ?>:
                                                    <strong><?php echo e(getAmount($data->final_amo)); ?></strong>
                                                </li>
                                                <?php if($data->gateway->crypto==1): ?>
                                                    <li>
                                                        <?php echo app('translator')->get('Conversion with'); ?>
                                                        <b> <?php echo e(__($data->method_currency)); ?></b> <?php echo app('translator')->get('and final value will Show on next step'); ?>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="deposit-item-footer bg--base">
                                        <div class="deposit-btn text-center">
                                            <?php if( 1000 >$data->method_code): ?>
                                                <a href="<?php echo e(route('user.deposit.confirm')); ?>" class="btn btn--base text-white btn-block btn-icon icon-left"><i class="las la-money-bill"></i><?php echo app('translator')->get('Pay Now'); ?></a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('user.deposit.manual.confirm')); ?>" class="btn btn--base text-white btn-block btn-icon icon-left"><?php echo app('translator')->get('Pay Now'); ?></a>
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
    </div>
</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/payment/preview.blade.php ENDPATH**/ ?>
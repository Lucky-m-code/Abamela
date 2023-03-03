<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.buyer_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="deposit-area">
                        <div class="row justify-content-center mb-30-none">
                            <?php $__currentLoopData = $gatewayCurrency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                                    <div class="deposit-item">
                                        <div class="deposit-item-header section--bg text-white text-center">
                                            <span class="title"> <?php echo e(__($data->name)); ?></span>
                                        </div>
                                        <div class="deposit-item-body">
                                            <div class="deposit-thumb">
                                                <img src="<?php echo e($data->methodImage()); ?>" alt="<?php echo e(__($data->name)); ?>">
                                            </div>
                                        </div>
                                        <div class="deposit-item-footer bg--base">
                                            <div class="deposit-btn text-center">
                                                <a href="javascript:void(0)" data-id="<?php echo e($data->id); ?>"
                                                   data-name="<?php echo e($data->name); ?>"
                                                   data-currency="<?php echo e($data->currency); ?>"
                                                   data-method_code="<?php echo e($data->method_code); ?>"
                                                   data-min_amount="<?php echo e(getAmount($data->min_amount)); ?>"
                                                   data-max_amount="<?php echo e(getAmount($data->max_amount)); ?>"
                                                   data-base_symbol="<?php echo e($data->baseSymbol()); ?>"
                                                   data-fix_charge="<?php echo e(getAmount($data->fixed_charge)); ?>"
                                                   data-percent_charge="<?php echo e(getAmount($data->percent_charge)); ?>" class="btn btn--base text-white btn-block btn-icon icon-left deposit" data-bs-toggle="modal" data-bs-target="#depoModal">
                                                    <?php echo app('translator')->get('Deposit Now'); ?></a>
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


<div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title method-name" id="ModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="<?php echo e(route('user.deposit.insert')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <p class="text-danger depositLimit"></p>
                    <p class="text-danger depositCharge"></p>

                    <input type="hidden" name="currency" class="edit-currency">
                    <input type="hidden" name="method_code" class="edit-method-code">

                    <div class="form-group">
                        <h5><?php echo app('translator')->get('Enter Deposit Amount'); ?></h5>
                        <div class="input-group-append">
                            <input type="text" name="amount"  value="<?php echo e(old('amount')); ?>" class="form-control" placeholder="<?php echo app('translator')->get("Enter Amount"); ?>" />
                            <span class="input-group-text"><?php echo e(__($general->cur_text)); ?></span>
                        </div>
                    </div>
                
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn--danger btn-rounded text-white" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn btn--base btn-rounded text-white"><?php echo app('translator')->get('Confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $('.deposit').on('click', function () {
                var name = $(this).data('name');
                var currency = $(this).data('currency');
                var method_code = $(this).data('method_code');
                var minAmount = $(this).data('min_amount');
                var maxAmount = $(this).data('max_amount');
                var baseSymbol = "<?php echo e($general->cur_text); ?>";
                var fixCharge = $(this).data('fix_charge');
                var percentCharge = $(this).data('percent_charge');

                var depositLimit = `<?php echo app('translator')->get('Deposit Limit'); ?>: ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                $('.depositLimit').text(depositLimit);
                var depositCharge = `<?php echo app('translator')->get('Charge'); ?>: ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
                $('.depositCharge').text(depositCharge);
                $('.method-name').text(`<?php echo app('translator')->get('Payment By '); ?> ${name}`);
                $('.currency-addon').text(baseSymbol);
                $('.edit-currency').val(currency);
                $('.edit-method-code').val(method_code);
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('style'); ?>
<style type="text/css">

</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/payment/deposit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.buyer_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="dashboard-section">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-lg-12 mb-30">
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('Referral Link'); ?></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-controller" id="referralURL" value="<?php echo e(route('home')); ?>?reference=<?php echo e(auth()->user()->username); ?>" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-copy"></i> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="dashboard-item bg--primary">
                                    <a href="<?php echo e(route('user.buyer.transactions')); ?>" class="dash-btn"><?php echo app('translator')->get('View all'); ?></a>
                                    <div class="dashboard-icon">
                                        <i class="las la-wallet"></i>
                                    </div>
                                    <div class="dashboard-content">
                                        <div class="num text-white"><?php echo e($general->cur_sym); ?><?php echo e(showAmount(auth()->user()->balance)); ?></div>
                                        <h3 class="title text-white"><?php echo app('translator')->get('Current balance'); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="dashboard-item bg--danger">
                                    <a href="<?php echo e(route('user.buyer.transactions')); ?>" class="dash-btn"><?php echo app('translator')->get('View all'); ?></a>
                                    <div class="dashboard-icon">
                                        <i class="las la-wallet"></i>
                                    </div>
                                    <div class="dashboard-content">
                                        <div class="num text-white"><?php echo e($totaltransactions); ?></div>
                                        <h3 class="title text-white"><?php echo app('translator')->get('Total Transactions'); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="dashboard-item bg--info">
                                    <a href="<?php echo e(route('user.job.index')); ?>" class="dash-btn"><?php echo app('translator')->get('View all'); ?></a>
                                    <div class="dashboard-icon">
                                        <i class="las la-compass"></i>
                                    </div>
                                    <div class="dashboard-content">
                                        <div class="num text-white"><?php echo e($totalJob); ?></div>
                                        <h3 class="title text-white"><?php echo app('translator')->get('Total Job'); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="dashboard-item bg--warning">
                                    <a href="<?php echo e(route('user.buyer.service.booked')); ?>" class="dash-btn"><?php echo app('translator')->get('View all'); ?></a>
                                    <div class="dashboard-icon">
                                       <i class="las la-shopping-bag"></i>
                                    </div>
                                    <div class="dashboard-content">
                                        <div class="num text-white"><?php echo e($serviceBookings); ?></div>
                                        <h3 class="title text-white"><?php echo app('translator')->get('Total Service Booked'); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="dashboard-item bg--success">
                                    <a href="<?php echo e(route('user.software.purchases')); ?>" class="dash-btn"><?php echo app('translator')->get('View all'); ?></a>
                                    <div class="dashboard-icon">
                                        <i class="las la-cart-arrow-down"></i>
                                    </div>
                                    <div class="dashboard-content">
                                        <div class="num text-white"><?php echo e($softwarePurchases); ?></div>
                                        <h3 class="title text-white"><?php echo app('translator')->get('Total Purchase Software'); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="dashboard-item section--bg">
                                    <a href="<?php echo e(route('user.buyer.hire.employ')); ?>" class="dash-btn"><?php echo app('translator')->get('View all'); ?></a>
                                    <div class="dashboard-icon">
                                       <i class="lab la-hire-a-helper"></i>
                                    </div>
                                    <div class="dashboard-content">
                                        <div class="num text-white"><?php echo e($hireEmploys); ?></div>
                                        <h3 class="title text-white"><?php echo app('translator')->get('Total Hire Employees'); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-section pt-60">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="table-area">
                                    <table class="custom-table">
                                        <thead>
                                            <tr>
                                                <th><?php echo app('translator')->get('Date'); ?></th>
                                                <th><?php echo app('translator')->get('TRX'); ?></th>
                                                <th><?php echo app('translator')->get('Amount'); ?></th>
                                                <th><?php echo app('translator')->get('Charge'); ?></th>
                                                <th><?php echo app('translator')->get('Post Balance'); ?></th>
                                                <th><?php echo app('translator')->get('Detail'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td data-label="<?php echo app('translator')->get('Date'); ?>">
                                                        <?php echo e(showDateTime($transaction->created_at)); ?>

                                                        <br>
                                                        <?php echo e(diffforhumans($transaction->created_at)); ?>


                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('TRX'); ?>"><?php echo e($transaction->trx); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                                                        <strong
                                                            <?php if($transaction->trx_type == '+'): ?> class="text--success" <?php else: ?> class="text--danger" <?php endif; ?>>
                                                            <?php echo e(($transaction->trx_type == '+') ? '+':'-'); ?>

                                                            <?php echo e(getAmount($transaction->amount)); ?> <?php echo e($general->cur_text); ?>

                                                        </strong>
                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('Charge'); ?>"><?php echo e(getAmount($transaction->charge)); ?> <?php echo e($general->cur_text); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Post Balance'); ?>"><?php echo e(getAmount($transaction->post_balance)); ?> <?php echo e($general->cur_text); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Detail'); ?>"><?php echo e(__($transaction->details)); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
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

<?php $__env->startPush('script'); ?>
<script>
    (function ($) {
        "use strict";
        $('.planModal').on('click', function () {
            var modal = $('#planModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.find($('#planModalLabel').text($(this).data('name')));
        });
        $('.copyBoard').click(function(){
            "use strict";
                var copyText = document.getElementById("referralURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                /*For mobile devices*/
                document.execCommand("copy");
                iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
          });
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/buyer/dashboard.blade.php ENDPATH**/ ?>
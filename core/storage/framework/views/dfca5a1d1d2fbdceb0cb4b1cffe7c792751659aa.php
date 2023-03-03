
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.seller_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="table-section">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="table-area">
                                    <table class="custom-table">
                                        <thead>
                                            <tr>
                                                <th><?php echo app('translator')->get('Software'); ?></th>
                                                <th><?php echo app('translator')->get('Order Number'); ?></th>
                                                <th><?php echo app('translator')->get('Buyer'); ?></th>
                                                <th><?php echo app('translator')->get('Amount'); ?></th>
                                                <th><?php echo app('translator')->get('Discount'); ?></th>
                                                <th><?php echo app('translator')->get('Status'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $salesSoftwares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td data-label="<?php echo app('translator')->get('Software'); ?>" class="text-start">
                                                        <div class="author-info">
                                                            <div class="thumb">
                                                                <img src="<?php echo e(getImage('assets/images/software/'.$booking->software->image,'590x300')); ?>" alt="<?php echo app('translator')->get('Software Image'); ?>">
                                                            </div>
                                                            <div class="content"><a href="<?php echo e(route('software.details', [slug($booking->software->title), $booking->software->id])); ?>"><?php echo e(__(str_limit($booking->software->title, 20))); ?></a></div>
                                                        </div>
                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('Order Number'); ?>"><?php echo e(__($booking->order_number)); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Buyer'); ?>">
                                                    	 <span class="font-weight-bold"><?php echo e(__($booking->user->fullname)); ?></span>
					                                    <br>
					                                    <span class="text--info">
					                                    <a href="<?php echo e(route('profile',@$booking->user->username)); ?>"><span>@</span><?php echo e($booking->user->username); ?></a>
					                                    </span>
                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(showAmount($booking->amount)); ?> <?php echo e(__($general->cur_text)); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Discount'); ?>">
                                                        <?php if($booking->discount == 0): ?>
                                                            <span><?php echo app('translator')->get('N/A'); ?></span>
                                                        <?php else: ?>
                                                            <?php echo e(showAmount($booking->discount)); ?> <?php echo e(__($general->cur_text)); ?>

                                                        <?php endif; ?>
                                                    </td>

                                                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                                        <?php if($booking->status == 3): ?>
                                                            <span class="badge badge--success"><?php echo app('translator')->get('Paid'); ?></span>
                                                             <br>
                                                            <span><?php echo e(diffforhumans($booking->updated_at)); ?></span>
                                                        <?php else: ?>
                                                            <span class="badge badge--danger"><?php echo app('translator')->get('N/A'); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <?php echo e($salesSoftwares->links()); ?>

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



<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/seller/sales_software.blade.php ENDPATH**/ ?>
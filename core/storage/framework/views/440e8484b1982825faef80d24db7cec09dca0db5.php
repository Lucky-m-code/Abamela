
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.buyer_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                                <th><?php echo app('translator')->get('Seller'); ?></th>
                                                <th><?php echo app('translator')->get('Amount'); ?></th>
                                                <th><?php echo app('translator')->get('Discount'); ?></th>
                                                <th><?php echo app('translator')->get('Software'); ?></th>
                                                <th><?php echo app('translator')->get('Document'); ?></th>
                                                <th><?php echo app('translator')->get('Status'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $softwarePurchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $softwarePurchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td data-label="<?php echo app('translator')->get('Service'); ?>" class="text-start">
                                                        <div class="author-info">
                                                            <div class="thumb">
                                                                <img src="<?php echo e(getImage('assets/images/software/'.$softwarePurchase->software->image,'590x300')); ?>" alt="<?php echo app('translator')->get('Service Image'); ?>">
                                                            </div>
                                                            <div class="content"><a href="<?php echo e(route('software.details', [slug($softwarePurchase->software->title), $softwarePurchase->software->id])); ?>"><?php echo e(__(str_limit($softwarePurchase->software->title, 10))); ?></a></div>
                                                        </div>
                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('Order Number'); ?>"><?php echo e(__($softwarePurchase->order_number)); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Seller'); ?>">
                                                    	 <span class="font-weight-bold"><?php echo e(__(@$softwarePurchase->software->user->fullname)); ?></span>
					                                    <br>
					                                    <span class="text--info">
					                                    <a href="<?php echo e(route('profile',@$softwarePurchase->software->user->username)); ?>"><span>@</span><?php echo e($softwarePurchase->software->user->username); ?></a>
					                                    </span>
                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(showAmount($softwarePurchase->amount)); ?> <?php echo e(__($general->cur_text)); ?></td>

                                                     <td data-label="<?php echo app('translator')->get('Discount'); ?>">
                                                        <?php if($softwarePurchase->discount == 0): ?>
                                                            <span><?php echo app('translator')->get('N/A'); ?></span>
                                                        <?php else: ?>
                                                            <?php echo e(showAmount($softwarePurchase->discount)); ?> <?php echo e(__($general->cur_text)); ?>

                                                        <?php endif; ?>
                                                        </td>

                                                     <td data-label="<?php echo app('translator')->get('Software'); ?>">
                                                         <a href="<?php echo e(route('user.buyer.software.file.download', encrypt($softwarePurchase->id))); ?>" class="btn btn--primary text-white"><i class="las la-arrow-down"></i></a>
                                                     </td>

                                                     <td data-label="<?php echo app('translator')->get('Document'); ?>">
                                                         <a href="<?php echo e(route('user.buyer.software.document.download', encrypt($softwarePurchase->id))); ?>" class="btn btn--primary text-white"><i class="las la-arrow-down"></i></a>
                                                     </td>
                                                    
                                                     <td data-label="<?php echo app('translator')->get('Status'); ?>">
			                                            <?php if($softwarePurchase->status == 3): ?>
			                                                <span class="badge badge--success"><?php echo app('translator')->get('Paid'); ?></span>
                                                            <br>
                                                            <span><?php echo e(diffforhumans($softwarePurchase->updated_at)); ?></span>
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
                                    <?php echo e($softwarePurchases->links()); ?>

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

<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/buyer/software_purchases.blade.php ENDPATH**/ ?>
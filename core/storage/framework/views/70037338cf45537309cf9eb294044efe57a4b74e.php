
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
                                                <th><?php echo app('translator')->get('Title'); ?></th>
                                                <th><?php echo app('translator')->get('Category'); ?></th>
                                                <th><?php echo app('translator')->get('Amount'); ?></th>
                                                <th><?php echo app('translator')->get('Delivery Time'); ?></th>
                                                <th><?php echo app('translator')->get('Status'); ?></th>
                                                <th><?php echo app('translator')->get('Last Update'); ?></th>
                                                <th><?php echo app('translator')->get('Action'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td data-label="<?php echo app('translator')->get('Title'); ?>" class="text-start">
                                                        <div class="author-info">
                                                            <div class="thumb">
                                                                <img src="<?php echo e(getImage('assets/images/service/'.$service->image,'590x300')); ?>" alt="<?php echo app('translator')->get('Service Image'); ?>">
                                                            </div>
                                                            <div class="content"><?php echo e(__(str_limit($service->title, 30))); ?></div>
                                                        </div>
                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('Category'); ?>"><?php echo e(__($service->category->name)); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(showAmount($service->price)); ?> <?php echo e($general->cur_text); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Delivery Time'); ?>"><?php echo e($service->delivery_time); ?> <?php echo app('translator')->get('Days'); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                                        <?php if($service->status == 1): ?>
                                                            <span class="badge badge--success"><?php echo app('translator')->get('Approved'); ?></span>
                                                            <br>
                                                            <?php echo e(diffforhumans($service->created_at)); ?>

                                                        <?php elseif($service->status == 2): ?>
                                                            <span class="badge badge--danger"><?php echo app('translator')->get('Cancel'); ?></span>
                                                            <br>
                                                            <?php echo e(diffforhumans($service->created_at)); ?>

                                                        <?php else: ?>
                                                            <span class="badge badge--primary"><?php echo app('translator')->get('Pending'); ?></span>
                                                            <br>
                                                            <?php echo e(diffforhumans($service->created_at)); ?>

                                                        <?php endif; ?>
                                                        </td>
                                                    <td data-label="<?php echo app('translator')->get('Last Update'); ?>">
                                                        <?php echo e(showDateTime($service->updated_at)); ?>

                                                        <br>
                                                        <?php echo e(diffforhumans($service->updated_at)); ?>

                                                    </td>
                                                    <td data-label="Action">
                                                        <a href="<?php echo e(route('user.service.edit', [$service->id, slug($service->title)])); ?>" class="btn btn--primary text-white"><i class="fa fa-pencil-alt"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <?php echo e($services->links()); ?>

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

<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/seller/service/index.blade.php ENDPATH**/ ?>

<?php $__env->startSection('panel'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card b-radius--10 ">
            <div class="card-body p-0">
                <div class="table-responsive--md  table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                        <tr>
                            <th><?php echo app('translator')->get('Title'); ?></th>
                            <th><?php echo app('translator')->get('Buyer'); ?></th>
                            <th><?php echo app('translator')->get('Category / SubCategory'); ?></th>
                            <th><?php echo app('translator')->get('Budget'); ?></th>
                            <th><?php echo app('translator')->get('Delivery Time'); ?></th>
                            <th><?php echo app('translator')->get('Status'); ?></th>
                            <th><?php echo app('translator')->get('Last Update'); ?></th>
                            <th><?php echo app('translator')->get('Action'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr <?php if($loop->odd): ?> class="table-light" <?php endif; ?>>
                            <td data-label="<?php echo app('translator')->get('Title'); ?>">
                                <div class="user">
                                    <div class="thumb"><img src="<?php echo e(getImage('assets/images/job/'.$job->image,'590x300')); ?>" alt="<?php echo app('translator')->get('image'); ?>"></div>
                                    <span class="name"><?php echo e(__(str_limit($job->title, 10))); ?></span>
                                </div>
                            </td>

                            <td data-label="<?php echo app('translator')->get('Buyer'); ?>">
                                <span class="font-weight-bold"><?php echo e($job->user->fullname); ?></span>
                                <br>
                                <span class="small">
                                <a href="<?php echo e(route('admin.users.detail', $job->user_id)); ?>"><span>@</span><?php echo e($job->user->username); ?></a>
                                </span>
                            </td>

                            <td data-label="<?php echo app('translator')->get('Category / SubCategory'); ?>">
                                <span class="font-weight-bold"><?php echo e(__($job->category->name)); ?></span>
                                <br>
                                <?php if($job->sub_category_id): ?>
                                    <span><?php echo e(__($job->subCategory->name)); ?></span>
                                <?php else: ?>
                                    <span><?php echo app('translator')->get('N/A'); ?></span>
                                <?php endif; ?>
                            </td>

                            <td data-label="<?php echo app('translator')->get('Budget'); ?>">
                               <span class="font-weight-bold"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($job->amount)); ?></span>
                            </td>

                             <td data-label="<?php echo app('translator')->get('Delivery Time'); ?>">
                               <span class="font-weight-bold"><?php echo e(($job->delivery_time)); ?> <?php echo app('translator')->get('Days'); ?></span>
                            </td>

                            <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                <?php if($job->status == 1): ?>
                                    <span class="font-weight-normal badge--success"><?php echo app('translator')->get('Approved'); ?></span>
                                    <br>
                                    <?php echo e(diffforhumans($job->created_at)); ?>

                                <?php elseif($job->status == 2): ?>
                                    <span class="font-weight-normal badge--warning"><?php echo app('translator')->get('Closed'); ?></span>
                                     <br>
                                    <?php echo e(diffforhumans($job->created_at)); ?>

                                <?php elseif($job->status == 3): ?>
                                    <span class="font-weight-normal badge--danger"><?php echo app('translator')->get('Cancel'); ?></span>
                                     <br>
                                    <?php echo e(diffforhumans($job->created_at)); ?>

                                <?php elseif($job->status == 0): ?>
                                    <span class="font-weight-normal badge--primary"><?php echo app('translator')->get('Pending'); ?></span>
                                     <br>
                                    <?php echo e(diffforhumans($job->created_at)); ?>

                                <?php endif; ?>
                            </td>

                            <td data-label="<?php echo app('translator')->get('Last Update'); ?>">
                                <span><?php echo e(showDateTime($job->updated_at)); ?></span>
                                <br>
                                 <?php echo e(diffforhumans($job->updated_at)); ?>

                            </td>

                            <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                <?php if($job->status == 0): ?>
                                    <button class="icon-btn btn--success ml-1 approved" data-toggle="tooltip" data-id="<?php echo e($job->id); ?>" data-original-title="<?php echo app('translator')->get('Approved'); ?>">
                                        <i class="las la-check"></i>
                                    </button>

                                    <button class="icon-btn btn--danger ml-1 cancel" data-toggle="tooltip" title="" data-original-title="<?php echo app('translator')->get('Cancel'); ?>" data-id="<?php echo e($job->id); ?>">
                                        <i class="las la-times"></i>
                                    </button>
                                <?php endif; ?>

                                <?php if($job->status == 1): ?>
                                    <button class="icon-btn btn--warning ml-1 closed" data-toggle="tooltip" title="" data-original-title="<?php echo app('translator')->get('Closed'); ?>" data-id="<?php echo e($job->id); ?>"><?php echo app('translator')->get('Closed'); ?></button>
                                <?php endif; ?>

                                <a href="<?php echo e(route('admin.job.biding.list', $job->id)); ?>" class="icon-btn btn--info ml-1" data-toggle="tooltip" data-original-title="<?php echo app('translator')->get('Biding list'); ?>"><?php echo app('translator')->get('Biding List'); ?></a>

                                <a href="<?php echo e(route('admin.job.details', $job->id)); ?>" class="icon-btn ml-1" data-toggle="tooltip" data-original-title="<?php echo app('translator')->get('Details'); ?>"><?php echo app('translator')->get('Details'); ?></a>
                               
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td class="text-muted text-center" colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                            </tr>
                        <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-4">
                <?php echo e(paginateLinks($jobs)); ?>

            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="approvedby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" lass="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Approval Confirmation'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            
            <form action="<?php echo e(route('admin.job.approvedBy')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p><?php echo app('translator')->get('Are you sure to approved this job post?'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn btn--success"><?php echo app('translator')->get('Confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="cancelBy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" lass="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Cancel Confirmation'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            
            <form action="<?php echo e(route('admin.job.cancelBy')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p><?php echo app('translator')->get('Are you sure to cancel this job post?'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn btn--success"><?php echo app('translator')->get('Confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="closedBy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" lass="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Closed Confirmation'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            
            <form action="<?php echo e(route('admin.job.closedBy')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p><?php echo app('translator')->get('Are you sure to closed this job post?'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn btn--success"><?php echo app('translator')->get('Confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('breadcrumb-plugins'); ?>
    <form action="<?php echo e(route('admin.job.search', $scope ?? str_replace('admin.job.', '', request()->route()->getName()))); ?>" method="GET" class="form-inline float-sm-right bg--white mb-2 ml-0 ml-xl-2 ml-lg-0">
        <div class="input-group has_append">
            <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('Username or amount'); ?>" value="<?php echo e($search ?? ''); ?>">
            <div class="input-group-append">
                <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>


    <form action="<?php echo e(route('admin.job.category')); ?>" method="GET" class="form-inline float-sm-right bg--white">
        <div class="input-group has_append">
            <select class="form-control" name="category">
                <option>----<?php echo app('translator')->get('Select Category'); ?>----</option> 
                <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(@$searchCategory == $category->id): ?>
                        <option value="<?php echo e($category->id); ?>" selected=""><?php echo e(__($category->name)); ?></option> 
                    <?php else: ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e(__($category->name)); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
            <div class="input-group-append">
                <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
<?php $__env->stopPush(); ?>



<?php $__env->startPush('script'); ?>
<script>
    'use strict';
    $('.approved').on('click', function () {
        var modal = $('#approvedby');
        modal.find('input[name=id]').val($(this).data('id'))
        modal.modal('show');
    });

    $('.cancel').on('click', function () {
        var modal = $('#cancelBy');
        modal.find('input[name=id]').val($(this).data('id'))
        modal.modal('show');
    });

    $('.closed').on('click', function () {
        var modal = $('#closedBy');
        modal.find('input[name=id]').val($(this).data('id'))
        modal.modal('show');
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/admin/job/index.blade.php ENDPATH**/ ?>
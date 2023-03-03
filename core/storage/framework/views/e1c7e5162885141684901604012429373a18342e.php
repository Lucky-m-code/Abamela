
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--md  table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('Name'); ?></th>
                                <th><?php echo app('translator')->get('Username'); ?></th>
                                <th><?php echo app('translator')->get('Email'); ?></th>
                                <th><?php echo app('translator')->get('Password'); ?></th>
                                <th><?php echo app('translator')->get('Joined At'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="<?php echo app('translator')->get('Name'); ?>">
                                        <span class="font-weight-bold"><?php echo e($staff->name); ?></span>
                                    </td>

                                     <td data-label="<?php echo app('translator')->get('Username'); ?>">
                                        <span class="font-weight-bold"><?php echo e($staff->username); ?></span>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Email'); ?>">
                                        <span class="font-weight-bold"><?php echo e($staff->email); ?></span>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Password'); ?>">
                                        <?php if($staff->status == 0): ?>
                                            <span class="font-weight-bold"><?php echo e(decrypt($staff->show_password)); ?></span>
                                        <?php else: ?>
                                             <span class="font-weight-bold"><?php echo app('translator')->get('N/A'); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Joined At'); ?>">
                                        <?php echo e(showDateTime($staff->created_at)); ?> <br> <?php echo e(diffForHumans($staff->created_at)); ?>

                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                        <a href="<?php echo e(route('admin.staff.edit', $staff->id)); ?>" class="icon-btn mr-2" data-toggle="tooltip" title="" data-original-title="<?php echo app('translator')->get('Edit'); ?>">
                                            <i class="las la-edit text--shadow"></i>
                                        </a>

                                        <?php if($staff->status==0): ?>
                                             <a href="javascript:void(0)" data-id="<?php echo e($staff->id); ?>" class="icon-btn btn--danger delete" data-toggle="tooltip" title="" data-original-title="<?php echo app('translator')->get('Delete'); ?>">
                                                <i class="las la-trash text--shadow"></i>
                                            </a>
                                        <?php endif; ?>
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
                    <?php echo e(paginateLinks($staffs)); ?>

                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="deleteStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" lass="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Delete Confirmation'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            
            <form action="<?php echo e(route('admin.staff.delete')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p><?php echo app('translator')->get('Are you sure to delete this staff?'); ?></p>
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


<?php $__env->startPush('script'); ?>
<script>
    'use strict';
    $('.delete').on('click', function () {
        var modal = $('#deleteStaff');
        modal.find('input[name=id]').val($(this).data('id'))
        modal.modal('show');
    });
</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/admin/staff/index.blade.php ENDPATH**/ ?>
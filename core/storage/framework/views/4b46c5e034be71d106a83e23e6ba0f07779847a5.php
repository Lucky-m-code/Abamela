
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="<?php echo e(route('admin.staff.update', $staff->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("POST"); ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="name" class="font-weight-bold"><?php echo app('translator')->get('Name'); ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" maxlength="40" value="<?php echo e($staff->name); ?>" name="name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="username" class="font-weight-bold"><?php echo app('translator')->get('User Name'); ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="username" maxlength="40"  value="<?php echo e($staff->username); ?>" name="username" required>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="row">
                                <div class="col-lg-12">  
                                    <div class="form-group">
                                        <label for="email" class="font-weight-bold"><?php echo app('translator')->get('Email'); ?> <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" value="<?php echo e($staff->email); ?>" name="email" maxlength="40" placeholder="<?php echo app('translator')->get('Enter Email'); ?>" required>
                                    </div>     
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">  
                                    <div class="form-group">
                                        <label for="password" class="font-weight-bold"><?php echo app('translator')->get('Password'); ?> <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo app('translator')->get('Enter Password'); ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12"> 
                                    <div class="form-group">
                                        <label for="confirm_password" class="font-weight-bold"><?php echo app('translator')->get('Confirm Password'); ?> <span class="text-danger">*</span></label>
                                        <input type="password" id="confirm_password" class="form-control"
                                            name="password_confirmation" placeholder="<?php echo app('translator')->get('Confirm Password'); ?>" autocomplete="new-password">
                                            <p id="message"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="font-weight-bold"><?php echo app('translator')->get('Staff Permission'); ?> <span class="text-danger">*</span></label>
                                        </div>
                                        <?php $__currentLoopData = $permissions->chunk(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-3">
                                            <div class="form-group form-check">
                                            <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <input type="checkbox" class="form-check-input" name="permission[]"
                                                <?php if(!empty($staff->staff_access)): ?>
                                                    <?php $__empty_1 = true; $__currentLoopData = $staff->staff_access; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <?php if($val == $value->id): ?>
                                                            checked
                                                        <?php endif; ?> 
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                value="<?php echo e($value->id); ?>" id="<?php echo e($value->id); ?>">
                                                <label class="form-check-label" for="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></label>
                                                <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn--primary btn-block"><?php echo app('translator')->get('Update Staff'); ?></button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="<?php echo e(route('admin.staff.index')); ?>" class="btn btn-sm btn--primary box--shadow1 text--small"><i class="la la-fw la-backward"></i><?php echo app('translator')->get('Go Back'); ?></a>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
    $(function () {
    'use strict';
        $('#confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('<i class="las la-info-circle"></i> Password Matched').css('color', 'green');
            } 
            else 
                $('#message').html('<i class="las la-info-circle"></i> Password Does Not Matched').css('color', 'red');
        });
    })(jQuery)
</script>
<?php $__env->stopPush(); ?>









<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/admin/staff/edit.blade.php ENDPATH**/ ?>
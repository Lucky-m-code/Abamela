<?php $__env->startSection('panel'); ?>

    <div class="row mb-none-30">

        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive table-responsive--sm">
                        <table class="table align-items-center table--light">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('Short Code'); ?></th>
                                <th><?php echo app('translator')->get('Description'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>{{name}}</th>
                                <td><?php echo app('translator')->get('Name'); ?></td>
                            </tr>
                            <tr>
                                <th>{{message}}</th>
                                <td><?php echo app('translator')->get('Message'); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin.sms.template.global')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><?php echo app('translator')->get('Global Template'); ?> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('SMS API Configuration'); ?>" name="sms_api" value="<?php echo e($general->sms_api); ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-block btn--primary mr-2"><?php echo app('translator')->get('Submit'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
    <div id="testSMSModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Test Mail Setup'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.sms.template.test.sms')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label><?php echo app('translator')->get('Sent to'); ?> <span class="text-danger">*</span></label>
                                <input type="text" name="mobile" class="form-control" placeholder="<?php echo app('translator')->get('Moble'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn--success"><?php echo app('translator')->get('Send'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/admin/sms_template/sms_template.blade.php ENDPATH**/ ?>
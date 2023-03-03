<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.buyer_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                        <div class="card custom--card">
                            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                <h4 class="card-title mb-0">
                                    <?php echo e(__($pageTitle)); ?>

                                </h4>
                            </div>
                            <div class="card-body">
                        <form action="<?php echo e(route('user.deposit.manual.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="text-center"><?php echo app('translator')->get('You have requested'); ?> <b class="text-success"><?php echo e(getAmount($data['amount'])); ?> <?php echo e(__($general->cur_text)); ?></b> , <?php echo app('translator')->get('Please pay'); ?>
                                        <b class="text-success"><?php echo e(getAmount($data['final_amo']) .' '.$data['method_currency']); ?> </b> <?php echo app('translator')->get('for successful payment'); ?>
                                    </p>
                                    <h4 class="text-center mb-4"><?php echo app('translator')->get('Please follow the instruction below'); ?></h4>
                                    <p class="my-2 text-center"><?php echo  $data->gateway->description ?></p>
                                </div>

                                <?php if($method->gateway_parameter): ?>
                                    <?php $__currentLoopData = json_decode($method->gateway_parameter); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if($v->type == "text"): ?>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><strong><?php echo e(__(inputTitle($v->field_level))); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                    <input type="text" class="form-control form-control-lg" name="<?php echo e($k); ?>" value="<?php echo e(old($k)); ?>" placeholder="<?php echo e(__($v->field_level)); ?>">
                                                </div>
                                            </div>
                                        <?php elseif($v->type == "textarea"): ?>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><strong><?php echo e(__(inputTitle($v->field_level))); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                        <textarea name="<?php echo e($k); ?>"  class="form-control"  placeholder="<?php echo e(__($v->field_level)); ?>" rows="3"><?php echo e(old($k)); ?></textarea>

                                                    </div>
                                                </div>
                                        <?php elseif($v->type == "file"): ?>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><strong><?php echo e(__($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                    <br>

                                                    <div class="fileinput fileinput-new " data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail withdraw-thumbnail" data-trigger="fileinput">
                                                            <img src="<?php echo e(asset(getImage('/'))); ?>" alt="<?php echo app('translator')->get('Image'); ?>">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail wh-200-150"></div>

                                                        <div class="img-input-div">
                                                            <span class="btn btn-info btn-file">
                                                                <span class="fileinput-new text-white"> <?php echo app('translator')->get('Select'); ?> <?php echo e(__($v->field_level)); ?></span>
                                                                <span class="fileinput-exists text-white"> <?php echo app('translator')->get('Change'); ?></span>
                                                                <input type="file" name="<?php echo e($k); ?>" accept="image/*" >
                                                            </span>
                                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                            data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <div class="col-md-12">
                                    <div class="deposit-item-footer bg--base">
                                        <div class="deposit-btn text-center">
                                            <button type="submit" class="btn btn--base text-white btn-block btn-icon icon-left"><?php echo app('translator')->get('Pay Now'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style>
    .withdraw-thumbnail{
        max-width: 220px;
        max-height: 220px
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script-lib'); ?>
<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/bootstrap-fileinput.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('style-lib'); ?>
<link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/bootstrap-fileinput.css')); ?>">
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/manual_payment/manual_confirm.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.seller_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="withdraw-area">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-30">
                                <div class="card custom--card">
                                    <div class="card-header">
                                        <div class="card-title"> <?php echo app('translator')->get('Withdraw Log'); ?></div>
                                    </div>
                                    <div class="withdraw-log-area">
                                        <ul class="withdraw-log-list">
                                            <li><?php echo app('translator')->get('Request Amount'); ?> : <span><?php echo e(getAmount($withdraw->amount)); ?> <?php echo e(__($general->cur_text)); ?></span></li>
                                            <li><?php echo app('translator')->get('Withdrawal Charge'); ?> : <span class="text--danger"><?php echo e(getAmount($withdraw->charge)); ?> <?php echo e(__($general->cur_text)); ?></span></li>
                                            <li><?php echo app('translator')->get('After Charge'); ?> : <span><?php echo e(getAmount($withdraw->after_charge)); ?> <?php echo e(__($general->cur_text)); ?></span></li>
                                            <li><?php echo app('translator')->get('Conversion Rate'); ?> :</li>
                                            <li>1 <?php echo e(__($general->cur_text)); ?> = <span><?php echo e(getAmount($withdraw->rate)); ?> <?php echo e(__($withdraw->currency)); ?></span></li>
                                            <li><?php echo app('translator')->get('You Will Get'); ?> : <span class="text--success"><?php echo e(getAmount($withdraw->final_amount)); ?> <?php echo e(__($withdraw->currency)); ?></span></li>
                                        </ul>
                                        <form class="withdraw-form mt-20">
                                            <div class="form-group">
                                                <label><?php echo app('translator')->get('Balance Will Be'); ?> :</label>
                                                <div class="input-group-append">
                                                    <input type="text" name="amount" value="<?php echo e(getAmount($withdraw->user->balance - ($withdraw->amount))); ?>" class="form-control" />
                                                    <span class="input-group-text"><?php echo e(__($general->cur_text)); ?></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mb-30">
                                <div class="card custom--card">
                                    <div class="card-header">
                                        <div class="card-title"> <?php echo app('translator')->get('Current Balance'); ?> <?php echo e(getAmount(auth()->user()->balance)); ?>  <?php echo e(__($general->cur_text)); ?></div>
                                    </div>
                                    <div class="withdraw-form-area">
                                        <form class="panel-form" action="<?php echo e(route('user.withdraw.submit')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="row justify-content-center">
                                            <?php if($withdraw->method->user_data): ?>
                                                <?php $__currentLoopData = $withdraw->method->user_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($v->type == "text"): ?>
                                                        <div class="form-group">
                                                            <label><strong><?php echo e(__($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                            <input type="text" name="<?php echo e($k); ?>" class="form-control" value="<?php echo e(old($k)); ?>" placeholder="<?php echo e(__($v->field_level)); ?>" <?php if($v->validation == "required"): ?> required <?php endif; ?>>
                                                            <?php if($errors->has($k)): ?>
                                                                <span class="text-danger"><?php echo e(__($errors->first($k))); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php elseif($v->type == "textarea"): ?>
                                                        <div class="form-group">
                                                            <label><strong><?php echo e(__($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                            <textarea name="<?php echo e($k); ?>"  class="form-control"  placeholder="<?php echo e(__($v->field_level)); ?>" rows="3" <?php if($v->validation == "required"): ?> required <?php endif; ?>><?php echo e(old($k)); ?></textarea>
                                                            <?php if($errors->has($k)): ?>
                                                                <span class="text-danger"><?php echo e(__($errors->first($k))); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php elseif($v->type == "file"): ?>
                                                        <label><strong><?php echo e(__($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                        <div class="form-group">
                                                            <div class="fileinput fileinput-new " data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                                     data-trigger="fileinput">
                                                                    <img class="w-100" src="<?php echo e(getImage('/')); ?>" alt="<?php echo app('translator')->get('Image'); ?>">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail wh-200-150"></div>
                                                                <div class="img-input-div">
                                                                    <span class="btn btn-info btn-file">
                                                                        <span class="fileinput-new text-white"> <?php echo app('translator')->get('Select'); ?> <?php echo e(__($v->field_level)); ?></span>
                                                                        <span class="fileinput-exists text-white"> <?php echo app('translator')->get('Change'); ?></span>
                                                                        <input type="file" name="<?php echo e($k); ?>" accept="image/*" <?php if($v->validation == "required"): ?> required <?php endif; ?>>
                                                                    </span>
                                                                    <a href="#" class="btn btn-danger fileinput-exists"
                                                                    data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                                                </div>
                                                            </div>
                                                            <?php if($errors->has($k)): ?>
                                                                <br>
                                                                <span class="text-danger"><?php echo e(__($errors->first($k))); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                <?php if(auth()->user()->ts): ?>
                                                <div class="form-group">
                                                    <label><?php echo app('translator')->get('Google Authenticator Code'); ?></label>
                                                    <input type="text" name="authenticator_code" class="form-control" required>
                                                </div>
                                                <?php endif; ?>
                                                <div class="col-lg-12 form-group">
                                                    <button type="submit" class="submit-btn w-100"><?php echo app('translator')->get('CONFIRM'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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

<?php $__env->startPush('script-lib'); ?>
    <script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/bootstrap-fileinput.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/bootstrap-fileinput.css')); ?>">
<?php $__env->stopPush(); ?>


<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/withdraw/preview.blade.php ENDPATH**/ ?>
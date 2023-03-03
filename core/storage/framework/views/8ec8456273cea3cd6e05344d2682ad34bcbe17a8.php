<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.seller_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="card-area">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 mb-30">
                                <div class="card custom--card">
                                    <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                        <h4 class="card-title mb-0">
                                            <?php echo app('translator')->get('Two Factor Authenticator'); ?>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <?php if(Auth::user()->ts): ?>
                                            <div class="form-group mx-auto text-center">
                                                <a href="javascript:void(0)" class="btn btn--danger text-white" data-bs-toggle="modal" data-bs-target="#disableModal"><?php echo app('translator')->get('Disable Two Factor Authenticator'); ?></a>
                                            </div>
                                        <?php else: ?>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="key" value="<?php echo e($secret); ?>" class="form-control" id="referralURL"
                                                        readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text copytext" id="copyBoard" onclick="myFunction()"> <i
                                                                class="fa fa-copy"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mx-auto text-center">
                                                <img class="mx-auto" src="<?php echo e($qrCodeUrl); ?>">
                                            </div>
                                            <div class="form-group mx-auto text-center">
                                                <a href="javascript:void(0)" class="btn--base" data-bs-toggle="modal" data-bs-target="#enableModal"><?php echo app('translator')->get('Enable Two Factor Authenticator'); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 mb-30">
                                <div class="card custom--card">
                                    <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                        <h4 class="card-title mb-0">
                                            <?php echo app('translator')->get('Google Authenticator'); ?>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="text-uppercase mb-2"><?php echo app('translator')->get('Download Google Authenticator App'); ?></h4>
                                        <p><?php echo app('translator')->get('Google Authenticator is a product based authenticator by Google that executes two-venture confirmation administrations for verifying clients of any programming applications'); ?>.</p>
                                        <hr />
                                        <a class="btn--base"
                                            href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank"><?php echo app('translator')->get('DOWNLOAD APP'); ?></a>
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

<div class="modal fade" id="enableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('Verify Your Otp'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('user.twofactor.enable')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="hidden" name="key" value="<?php echo e($secret); ?>">
                        <input type="text" class="form-control" name="code" placeholder="<?php echo app('translator')->get('Enter Google Authenticator Code'); ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn--base" style="width:100%;"><?php echo app('translator')->get('Verify'); ?></button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger btn-rounded text-white" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="disableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('Verify Your Otp'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('user.twofactor.disable')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="hidden" name="key" value="<?php echo e($secret); ?>">
                        <input type="text" class="form-control" name="code" placeholder="<?php echo app('translator')->get('Enter Google Authenticator Code'); ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn--base" style="width:100%;"><?php echo app('translator')->get('Verify'); ?></button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger btn-rounded text-white" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        (function($){
            "use strict";
            $('.copytext').on('click',function(){
                var copyText = document.getElementById("referralURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/seller/twofactor.blade.php ENDPATH**/ ?>
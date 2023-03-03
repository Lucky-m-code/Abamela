<?php $__env->startSection('content'); ?>
<?php
    $content = getContent('breadcrumbs.content', true);
?>
<section class="account-section ptb-80 bg-overlay-white bg_img" data-background="<?php echo e(getImage('assets/images/frontend/breadcrumbs/'.$content->data_values->background_image,'1920x1200')); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="account-form-area">
                    <div class="account-logo-area text-center">
                        <div class="account-logo">
                            <h4 class="title"><?php echo app('translator')->get('Please Verify Your Google Authenticator'); ?></h4>
                        </div>
                    </div>
                    <form class="account-form" method="POST" action="<?php echo e(route('user.go2fa.verify')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row ml-b-20">
                            <div class="col-lg-12 form-group">
                                <label><?php echo app('translator')->get('Verification Code'); ?></label>
                                <input type="text" name="code" class="form-control form--control" maxlength="7" id="code">
                            </div>

                            <div class="col-lg-12 form-group text-center">
                                <button type="submit" class="submit-btn w-100"><?php echo app('translator')->get('Submit'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>                    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    (function($){
        "use strict";
        $('#code').on('input change', function () {
          var xx = document.getElementById('code').value;
          
              $(this).val(function (index, value) {
                 value = value.substr(0,7);
                  return value.replace(/\W/gi, '').replace(/(.{3})/g, '$1 ');
              });
          
      });
    })(jQuery)
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/auth/authorization/2fa.blade.php ENDPATH**/ ?>
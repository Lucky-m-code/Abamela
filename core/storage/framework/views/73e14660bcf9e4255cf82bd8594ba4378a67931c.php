<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.seller_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <form class="user-profile-form" action="" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card custom--card">
                            <div class="profile-settings-wrapper">
                                <div class="preview-thumb profile-wallpaper">
                                    <div class="avatar-preview">
                                        <div class="profilePicPreview bg_img" data-background="<?php echo e(userDefaultImage(imagePath()['profile']['user_bg']['path'].'/'. $user->bg_image,'background_image')); ?>"></div>
                                    </div>
                                    <div class="avatar-edit">
                                        <input type='file' class="profilePicUpload" name="bg_image" id="profilePicUpload1" accept=".png, .jpg, .jpeg" />
                                        <label for="profilePicUpload1"><i class="las la-cloud-upload-alt me-1"></i> <?php echo app('translator')->get('Update'); ?></label>
                                    </div>
                                </div>
                                <div class="profile-thumb-content">
                                    <div class="preview-thumb profile-thumb">
                                        <div class="avatar-preview">
                                            <div class="profilePicPreview bg_img" data-background="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $user->image,'profile_image')); ?>">
                                            </div>
                                        </div>
                                        <div class="avatar-edit">
                                            <input type='file' class="profilePicUpload" name="image" id="profilePicUpload2"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="profilePicUpload2"><i class="las la-pen"></i></label>
                                        </div>
                                    </div>
                                    <div class="profile-content">
                                        <h6 class="username"><?php echo e(__($user->username)); ?></h6>
                                        <ul class="user-info-list mt-md-2">
                                            <li><i class="las la-envelope"></i><?php echo e(__($user->email)); ?></li>
                                            <li><i class="las la-phone"></i> <?php echo e(__($user->mobile)); ?></li>
                                            <li><i class="las la-map-marked-alt"></i> <?php echo e(__(@$user->address->country)); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-form-wrapper">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('First Name'); ?>*</label>
                                            <input type="text" name="firstname" value="<?php echo e(__($user->firstname)); ?>" class="form-control" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('Last Name'); ?>*</label>
                                            <input type="text" name="lastname" value="<?php echo e(__($user->lastname)); ?>" class="form-control" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('Designation'); ?>*</label>
                                            <input type="text" name="designation" value="<?php echo e(__($user->designation)); ?>" class="form-control" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('Address'); ?>*</label>
                                            <input type="text" name="address" value="<?php echo e(__($user->address->address)); ?>" class="form-control" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('State'); ?>*</label>
                                            <input type="text" name="state" class="form-control" value="<?php echo e(__($user->address->state)); ?>" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('Zip Code'); ?>*</label>
                                            <input type="text" name="zip" class="form-control" value="<?php echo e(__($user->address->zip)); ?>" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('City'); ?>*</label>
                                            <input type="text" name="city" class="form-control" value="<?php echo e(__($user->address->city)); ?>" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                            <label><?php echo app('translator')->get('About Me'); ?>*</label>
                                            <textarea class="form-control" name="about_me" rows="5" required=""><?php echo e(__($user->about_me)); ?></textarea>
                                        </div>
                                        <div class="col-xl-12 form-group">
                                            <button type="submit" class="submit-btn mt-20 w-100"><?php echo app('translator')->get('Update Profile'); ?></button>
                                        </div>
                                    </div>
                                </div>
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
    "use strict";
    function proPicURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var preview = $(input).parents('.preview-thumb').find('.profilePicPreview');
                $(preview).css('background-image', 'url(' + e.target.result + ')');
                $(preview).addClass('has-image');
                $(preview).hide();
                $(preview).fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".profilePicUpload").on('change', function () {
        proPicURL(this);
    });

    $(".remove-image").on('click', function () {
        $(".profilePicPreview").css('background-image', 'none');
        $(".profilePicPreview").removeClass('has-image');
    })
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/seller/profile_setting.blade.php ENDPATH**/ ?>
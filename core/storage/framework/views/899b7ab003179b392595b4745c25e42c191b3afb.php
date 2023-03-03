<?php $__env->startSection('content'); ?>
<?php
    $content = getContent('breadcrumbs.content', true);
?>
<section class="account-section ptb-80 bg-overlay-white bg_img" data-background="<?php echo e(getImage('assets/images/frontend/breadcrumbs/'.$content->data_values->background_image,'1920x1200')); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="account-form-area">
                    <div class="account-logo-area text-center">
                        <div class="account-logo">
                            <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>" alt="<?php echo e(__($general->sitename)); ?>"></a>
                        </div>
                    </div>
                    <div class="account-header text-center">
                        <h3 class="title"><?php echo app('translator')->get('Create your account'); ?></h3>
                    </div>
                    <form class="account-form" action="<?php echo e(route('user.register')); ?>" method="POST" onsubmit="return submitUserForm();">
                        <?php echo csrf_field(); ?>
                        <div class="row ml-b-20">
                            <?php if(session()->get('reference') != null): ?>
                            <div class="col-lg-12 form-group">
                                <label for="firstname"><?php echo app('translator')->get('Reference By'); ?>*</label>
                                <input type="text" class="form-control form--control" value="<?php echo e(session()->get('reference')); ?>" placeholder="<?php echo app('translator')->get('First name'); ?>" readonly>
                            </div>
                            <?php endif; ?>
                            <div class="col-lg-6 form-group">
                                <label for="firstname"><?php echo app('translator')->get('First Name'); ?>*</label>
                                <input type="text" class="form-control form--control" id="firstname" name="firstname" value="<?php echo e(old('firstname')); ?>" required="" placeholder="<?php echo app('translator')->get('First name'); ?>">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="lastname"><?php echo app('translator')->get('Last Name'); ?>*</label>
                                <input type="text" class="form-control form--control" name="lastname" value="<?php echo e(old('lastname')); ?>" required="" placeholder="<?php echo app('translator')->get('Last name'); ?>">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label id="email"><?php echo app('translator')->get('Email address'); ?>*</label>
                                <input type="email" class="form-control form--control checkUser" name="email" value="<?php echo e(old('email')); ?>" required="" placeholder="<?php echo app('translator')->get('Email address'); ?>">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label id="username"><?php echo app('translator')->get('Username'); ?>*</label>
                                <input type="text" class="form-control form--control checkUser" name="username" value="<?php echo e(old('username')); ?>" required="" placeholder="<?php echo app('translator')->get('username'); ?>">
                                <small class="text-danger usernameExist"></small>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label id="country"><?php echo app('translator')->get('Country'); ?>*</label>
                                <select name="country" id="country" class="form-control form--control">
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option data-mobile_code="<?php echo e($country->dial_code); ?>" value="<?php echo e($country->country); ?>" data-code="<?php echo e($key); ?>"><?php echo e(__($country->country)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="mobile"><?php echo app('translator')->get('Mobile'); ?></label>
                                <div class="input-group country-code">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mobile-code">
                                            
                                        </span>
                                        <input type="hidden" name="mobile_code">
                                        <input type="hidden" name="country_code">
                                    </div>
                                    <input type="text" name="mobile" id="mobile" value="<?php echo e(old('mobile')); ?>" class="form-control form--control checkUser" placeholder="<?php echo app('translator')->get('Your Phone Number'); ?>">
                                </div>
                                <small class="text-danger mobileExist"></small>
                            </div>
                        
                            
                           
                            <div class="col-lg-6 form-group hover-input-popup">
                                <label for="password"><?php echo app('translator')->get('Password'); ?>*</label>
                                <input type="password" class="form-control form--control" id="password" name="password" required="" placeholder="<?php echo app('translator')->get("Enter password"); ?>">
                                <?php if($general->secure_password): ?>
                                    <div class="input-popup">
                                      <p class="error lower"><?php echo app('translator')->get('1 small letter minimum'); ?></p>
                                      <p class="error capital"><?php echo app('translator')->get('1 capital letter minimum'); ?></p>
                                      <p class="error number"><?php echo app('translator')->get('1 number minimum'); ?></p>
                                      <p class="error special"><?php echo app('translator')->get('1 special character minimum'); ?></p>
                                      <p class="error minimum"><?php echo app('translator')->get('6 character password'); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label><?php echo app('translator')->get('Confirm Password'); ?>*</label>
                                <input type="password" class="form-control form--control" name="password_confirmation" required="" placeholder="<?php echo app('translator')->get("Enter confirm password"); ?>">
                            </div>


                            <div class="col-lg-6 form-group">
    <label for="userType"><?php echo app('translator')->get('User Type'); ?>*</label>
    <select name="userType" id="userType" class="form-control form--control" required="">
      <option value="" disabled selected>Select User Type</option>
      <option value="client">I'm a client, hiring for a project</option>
      <option value="freelancer">I am a freelancer, looking for work</option>
    </select>
  </div>


                            <div class="col-lg-12 form-group">
                                <?php echo loadReCaptcha() ?>
                            </div>

                            <?php echo $__env->make($activeTemplate.'partials.custom_captcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php if($general->agree): ?>
                                <div class="col-lg-12 form-group">
                                    <div class="form-group custom-check-group">
                                        <input type="checkbox" name="agree" id="level-1">
                                        <label for="level-1"><?php echo app('translator')->get('I have read agreed with the'); ?><a href="#0" class="text--base"><?php echo app('translator')->get('Privacy & Policy'); ?></a></label>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-lg-12 form-group text-center">
                                <button type="submit" class="submit-btn w-100"><?php echo app('translator')->get('Register Now'); ?></button>
                            </div>

                            <div class="col-lg-12 text-center">
                                <div class="account-item mt-10">
                                    <label><?php echo app('translator')->get('Already Have An Account'); ?>? <a href="<?php echo e(route('user.login')); ?>" class="text--base"><?php echo app('translator')->get('Sign In'); ?></a></label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('You are with us'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <h6><?php echo app('translator')->get('You already have an account please Sign in '); ?></h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger btn-rounded text-white" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                <a href="" class="btn btn--primary btn-rounded text-white"><?php echo app('translator')->get('Login'); ?></a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style>
    .country-code .input-group-prepend .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
    }
    .hover-input-popup {
        position: relative;
    }
    .hover-input-popup:hover .input-popup {
        opacity: 1;
        visibility: visible;
    }
    .input-popup {
        position: absolute;
        bottom: 70%;
        left: 50%;
        width: 280px;
        background-color: #1e2746;
        color: #fff;
        padding: 20px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }
    .input-popup::after {
        position: absolute;
        content: '';
        bottom: -19px;
        left: 50%;
        margin-left: -5px;
        border-width: 10px 10px 10px 10px;
        border-style: solid;
        border-color: transparent transparent #1a1a1a transparent;
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .input-popup p {
        padding-left: 20px;
        position: relative;
    }
    .input-popup p::before {
        position: absolute;
        content: '';
        font-family: 'Line Awesome Free';
        font-weight: 900;
        left: 0;
        top: 4px;
        line-height: 1;
        font-size: 18px;
    }
    .input-popup p.error {
        text-decoration: line-through;
    }
    .input-popup p.error::before {
        content: "\f057";
        color: #ea5455;
    }
    .input-popup p.success::before {
        content: "\f058";
        color: #28c76f;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script-lib'); ?>
<script src="<?php echo e(asset('assets/global/js/secure_password.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script>
      "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger"><?php echo app('translator')->get("Captcha field is required."); ?></span>';
                return false;
            }
            return true;
        }
        (function ($) {
            <?php if($mobile_code): ?>
            $(`option[data-code=<?php echo e($mobile_code); ?>]`).attr('selected','');
            <?php endif; ?>

            $('select[name=country]').change(function(){
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            <?php if($general->secure_password): ?>
                $('input[name=password]').on('input',function(){
                    secure_password($(this));
                });
            <?php endif; ?>

            $('.checkUser').on('focusout',function(e){
                var url = '<?php echo e(route('user.checkUser')); ?>';
                var value = $(this).val();
                var token = '<?php echo e(csrf_token()); ?>';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {mobile:mobile,_token:token}
                }
                if ($(this).attr('name') == 'email') {
                    var data = {email:value,_token:token}
                }
                if ($(this).attr('name') == 'username') {
                    var data = {username:value,_token:token}
                }
                $.post(url,data,function(response) {
                  if (response['data'] && response['type'] == 'email') {
                    $('#existModalCenter').modal('show');
                  }else if(response['data'] != null){
                    $(`.${response['type']}Exist`).text(`${response['type']} already exist`);
                  }else{
                    $(`.${response['type']}Exist`).text('');
                  }
                });
            });

        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/up/core/resources/views/templates/basic/user/auth/register.blade.php ENDPATH**/ ?>
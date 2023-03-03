<?php $__env->startSection('content'); ?>
<?php
    $content = getContent('contact_us.content', true);
?>
<section class="contact-section pt-60 ptb-60">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-area">
                <div class="row justify-content-center m-0">
                    <div class="col-xl-5 col-lg-6 p-0">
                        <div class="contact-info-item-area">
                            <div class="contact-info-item-inner mb-30-none">
                                <div class="contact-info-header mb-30">
                                    <h3 class="header-title"><?php echo e(__(@$content->data_values->heading)); ?></h3>
                                    <p><?php echo e(__(@$content->data_values->subheading)); ?></p>
                                </div>
                                <div class="contact-info-item d-flex flex-wrap align-items-center mb-40">
                                    <div class="contact-info-icon">
                                        <i class="fas fa fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h3 class="title"><?php echo app('translator')->get('Address'); ?></h3>
                                        <p><?php echo e(__(@$content->data_values->contact_details)); ?></p>
                                    </div>
                                </div>
                                <div class="contact-info-item d-flex flex-wrap align-items-center mb-40">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h3 class="title"><?php echo app('translator')->get('Email Address'); ?></h3>
                                        <p><?php echo e(__(@$content->data_values->email_address)); ?></p>
                                    </div>
                                </div>
                                <div class="contact-info-item d-flex flex-wrap align-items-center mb-40">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h3 class="title"><?php echo app('translator')->get('Phone Number'); ?></h3>
                                        <p><?php echo e(__(@$content->data_values->contact_number)); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 p-0">
                        <div class="contact-form-area">
                            <h3 class="title"><?php echo e(__(@$content->data_values->title)); ?></h3>
                            <p><?php echo e(__(@$content->data_values->short_details)); ?></p>
                            <form class="contact-form" method="post" action="">
                                <?php echo csrf_field(); ?>
                                <div class="row justify-content-center mb-10-none">
                                    <div class="col-lg-6 col-md-6 form-group">
                                        <input type="text" name="name" <?php if(auth()->user()): ?> value="<?php echo e(auth()->user()->fullname); ?>" <?php endif; ?> <?php if(auth()->user()): ?> readonly <?php endif; ?> class="form--control" placeholder="<?php echo app('translator')->get('Enter name'); ?>" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 form-group">
                                        <input type="email" name="email" value="<?php if(auth()->user()): ?> <?php echo e(auth()->user()->email); ?> <?php else: ?> <?php echo e(old('email')); ?> <?php endif; ?>"  <?php if(auth()->user()): ?> readonly <?php endif; ?> class="form--control" placeholder="<?php echo app('translator')->get('Enter email'); ?>" required="">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <input type="text" name="subject" class="form--control"
                                            placeholder="<?php echo app('translator')->get('Enter subject'); ?>" value="<?php echo e(old('subject')); ?>" required="">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea class="form--control" name="message" placeholder="<?php echo app('translator')->get("Enter Message"); ?>" required=""><?php echo e(old('message')); ?></textarea>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <button type="submit" class="submit-btn mt-20"><?php echo app('translator')->get('Send Message'); ?></button>
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

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/contact.blade.php ENDPATH**/ ?>
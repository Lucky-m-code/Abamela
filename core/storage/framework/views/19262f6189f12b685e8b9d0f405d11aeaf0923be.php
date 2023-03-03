
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.buyer_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <form class="user-profile-form" action="<?php echo e(route('user.job.update', $job->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card custom--card">
                            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                <h4 class="card-title mb-0">
                                    <?php echo e(__($pageTitle)); ?>

                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="card-form-wrapper">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12 col-lg-12 form-group">
                                            <label><?php echo app('translator')->get('Title'); ?>*</label>
                                            <input type="text" name="title" maxlength="255" value="<?php echo e(__($job->title)); ?>" class="form-control" placeholder="<?php echo app('translator')->get("Enter Title"); ?>" required="">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Category'); ?>*</label>
                                            <select class="form-control bg--gray" name="category" id="category" required="">
                                                    <option selected="" disabled=""><?php echo app('translator')->get('Select Category'); ?></option>
                                                   <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e(($category->id)); ?>"  
                                                            <?php if($category->id==$job->category_id): ?>
                                                                selected 
                                                            <?php endif; ?> 
                                                        ><?php echo e(__($category->name)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label for="subCategorys"><?php echo app('translator')->get('Sub Category'); ?></label>
                                                <select name="subcategory" class="form-control mySubCatgry" id="subCategorys">
                                                    <?php $__currentLoopData = $categorys->find($job->category_id)->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option 
                                                            <?php if($sub->id==$job->sub_category_id): ?>
                                                                selected 
                                                            <?php endif; ?>
                                                        value="<?php echo e($sub->id); ?>"><?php echo e($sub->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                        </div>

                                       
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Budget'); ?>*</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="amount" value="<?php echo e(getAmount($job->amount)); ?>" placeholder="<?php echo app('translator')->get('Enter Budget'); ?>" required="">
                                              <span class="input-group-text" id="basic-addon2"><?php echo e(__($general->cur_text)); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Delivery Time'); ?></label>
                                                <div class="input-group mb-3">
                                                  <input type="text" class="form-control" name="delivery" value="<?php echo e($job->delivery_time); ?>" placeholder="<?php echo app('translator')->get('Delivery Time'); ?>" required="">
                                                  <span class="input-group-text" id="basic-addon2"><?php echo app('translator')->get('Days'); ?></span>
                                                </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Image'); ?></label>
                                            <div class="custom-file-wrapper removeImage">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image" id="customFile">
                                                    <label class="custom-file-label" for="customFile"><?php echo app('translator')->get('Choose file'); ?></label>
                                                     <small><?php echo app('translator')->get('Supported files: jpeg, jpg, png. Image will be resized into 590x300 px'); ?></small>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-6 col-lg-6 form-group select2Tag">
                                            <label><?php echo app('translator')->get('Skill'); ?>*</label>
                                            <select class="form-control select2" name="skill[]" multiple="multiple" required="">
                                                 <?php $__currentLoopData = $job->skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($name); ?>" selected="true"><?php echo e(__($name)); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <small><?php echo app('translator')->get('Tag and enter press'); ?></small>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 form-group">
                                            <label><?php echo app('translator')->get('Description'); ?>*</label>
                                            <textarea class="form-control bg--gray nicEdit" name="description">
                                                <?php echo $job->description ?>
                                            </textarea>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 form-group">
                                            <label><?php echo app('translator')->get('Requirement'); ?>*</label>
                                            <textarea class="form-control bg--gray nicEdit" name="requirement">
                                                 <?php echo $job->requirements ?>
                                            </textarea>
                                        </div>

                                        <div class="col-xl-12 form-group">
                                            <button type="submit" class="submit-btn mt-20 w-100"><?php echo app('translator')->get('Update Job'); ?></button>
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


<?php $__env->startPush('style'); ?>
<style>
    .select2Tag input{
        background-color: transparent !important;
        padding: 0 !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/select2.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-lib'); ?>
    <script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/nicEdit.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
    "use strict";
    $(document).ready(function() {
        $('.select2').select2({
            tags: true
        });
    });

    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });

    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });
    })(jQuery);


    $(document).on("change",".custom-file-input",function(){
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });


    $('#category').on('change', function(){
        var category = $(this).val();
            $.ajax({
                type:"GET",
                url:"<?php echo e(route('user.category')); ?>",
                data: {category : category},
                success:function(data){
                    var html = '';
                    if(data.error){
                        $("#subCategorys").empty(); 
                        html += `<option value="" selected disabled>${data.error}</option>`;
                        $(".mySubCatgry").html(html);
                    }
                    else{
                        $("#subCategorys").empty(); 
                        html += `<option value="" selected disabled><?php echo app('translator')->get('Select Sub Category'); ?></option>`;
                        $.each(data, function(index, item) {
                            html += `<option value="${item.id}">${item.name}</option>`;
                            $(".mySubCatgry").html(html);
                        });
                    }
                }
        });   
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/buyer/job/edit.blade.php ENDPATH**/ ?>
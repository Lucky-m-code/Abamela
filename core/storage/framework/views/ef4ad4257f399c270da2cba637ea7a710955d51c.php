
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.seller_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <form class="user-profile-form" action="<?php echo e(route('user.software.store')); ?>" method="POST" enctype="multipart/form-data">
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
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <div class="image-upload">
                                                <div class="thumb">
                                                    <div class="avatar-preview">
                                                        <div class="profilePicPreview bg_img" data-background="<?php echo e(getImage('/')); ?>">
                                                            <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-edit">
                                                        <input type="file" class="profilePicUpload" name="image" id="profilePicUpload2" accept=".png, .jpg, .jpeg"
                                                            required="">
                                                        <label for="profilePicUpload2" class="text-light"><?php echo app('translator')->get('Image'); ?></label>
                                                        <small><?php echo app('translator')->get('Supported files'); ?>: <?php echo app('translator')->get('jpeg'); ?>, <?php echo app('translator')->get('jpg'); ?>, <?php echo app('translator')->get('png'); ?>. <?php echo app('translator')->get('Image will be resized into 590x300 px'); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <div class="card custom--card p-0 mb-3">
                                                <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                                    <h4 class="card-title mb-0">
                                                        <?php echo app('translator')->get('Screenshot'); ?>
                                                    </h4>
                                                    <div class="card-btn">
                                                        <button type="button" class="btn--base addExtraImage"><i class="las la-plus"></i> <?php echo app('translator')->get('Add New'); ?></button>
                                                    </div>
                                                </div>
                                                <div class="card-body addImage">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 form-group">
                                            <label><?php echo app('translator')->get('Title'); ?>*</label>
                                            <input type="text" name="title" maxlength="255" value="<?php echo e(old('title')); ?>" class="form-control" placeholder="<?php echo app('translator')->get("Enter Title"); ?>" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Category'); ?>*</label>
                                            <select class="form-control bg--gray" name="category" id="category">
                                                    <option selected="" disabled=""><?php echo app('translator')->get('Select Category'); ?></option>
                                                <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e(__($category->id)); ?>"><?php echo e(__($category->name)); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label for="subCategorys"><?php echo app('translator')->get('Sub Category'); ?></label>
                                                <select name="subcategory" class="form-control mySubCatgry" id="subCategorys">
                                                </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Include Feature'); ?>*</label>
                                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-group custom-check-group">
                                                    <input type="checkbox" name="features[]" id="<?php echo e($feature->id); ?>" value="<?php echo e($feature->id); ?>">
                                                    <label for="<?php echo e($feature->id); ?>"><?php echo e(__($feature->name)); ?></label>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Price'); ?>*</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="amount" value="<?php echo e(old('amount')); ?>" placeholder="<?php echo app('translator')->get('Enter Price'); ?>" required="">
                                              <span class="input-group-text" id="basic-addon2"><?php echo e(__($general->cur_text)); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group select2Tag">
                                            <label><?php echo app('translator')->get('Tag'); ?>*</label>
                                            <select class="form-control select2" name="tag[]" multiple="multiple" required="">
                                            </select>
                                            <small><?php echo app('translator')->get('Tag and enter press'); ?></small>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group select2Tag">
                                            <label><?php echo app('translator')->get('File Include'); ?>*</label>
                                            <select class="form-control select2" name="file_include[]" multiple="multiple" required="">
                                            </select>
                                            <small><?php echo app('translator')->get('File and enter press'); ?></small>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Demo Url'); ?>*</label>
                                            <input type="text" name="url" maxlength="255" value="<?php echo e(old('url')); ?>" class="form-control" placeholder="<?php echo app('translator')->get("Enter url"); ?>" required="">
                                            <small><?php echo app('translator')->get('https://example.com/'); ?></small>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label><?php echo app('translator')->get('Documentation File'); ?>*</label>
                                            <div class="custom-file-wrapper">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="document" id="customFile" required>
                                                    <label class="custom-file-label" for="customFile"><?php echo app('translator')->get('Choose file'); ?></label>
                                                </div>
                                                <small><?php echo app('translator')->get('Supported file: only pdf file'); ?></small>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 form-group">
                                            <label><?php echo app('translator')->get('Upload Software'); ?>*</label>
                                            <div class="custom-file-wrapper">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="uploadSoftware" id="customFile" required>
                                                    <label class="custom-file-label" for="customFile"><?php echo app('translator')->get('Choose file'); ?></label>
                                                </div>
                                                <small><?php echo app('translator')->get('Supported file: only zip file'); ?></small>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 form-group">
                                            <label><?php echo app('translator')->get('Description'); ?>*</label>
                                            <textarea class="form-control bg--gray nicEdit" name="description"><?php echo e(old('description')); ?></textarea>
                                        </div>

                                        <div class="col-xl-12 form-group">
                                            <button type="submit" class="submit-btn mt-20 w-100"><?php echo app('translator')->get('UPLOAD SOFTWARE'); ?></button>
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

    
    $(document).ready(function() {
        $('.select2').select2({
            tags: true
        });
    });

    $(".remove-image").on('click', function () {
        $(".profilePicPreview").css('background-image', 'none');
        $(".profilePicPreview").removeClass('has-image');
    })

    $(document).on('click', '.removeBtn', function () {
        $(this).closest('.extraServiceRemove').remove();
    });

    $('.addExtraImage').on('click',function(){
        var html = `
                <div class="custom-file-wrapper removeImage">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="screenshot[]" id="customFile" required>
                        <label class="custom-file-label" for="customFile"><?php echo app('translator')->get('Choose file'); ?></label>
                    </div>
                    <button class="btn btn--danger text-white border--rounded removeExtraImage"><i class="fa fa-times"></i></button>
                </div>`;
        $('.addImage').append(html);
    });

    $(document).on('click', '.removeExtraImage', function (){
        $(this).closest('.removeImage').remove();
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
        console.log(category);
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
<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/seller/software/create.blade.php ENDPATH**/ ?>
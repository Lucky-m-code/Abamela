<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($general->sitename(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/bootstrap.min.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/favicon.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue. 'frontend/css/chosen.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/line-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/bootstrap-fileinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'frontend/css/custom.css')); ?>">
    <?php echo $__env->yieldPushContent('style-lib'); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
    <link href="<?php echo e(asset($activeTemplateTrue . 'frontend/css/color.php')); ?>?color=<?php echo e($general->base_color); ?>&secondColor=<?php echo e($general->secondary_color); ?>" rel="stylesheet"/>
</head>
<body>
<?php echo $__env->yieldPushContent('fbComment'); ?>


<div class="preloader">
    <div class="box-loader">
        <div class="loader animate">
            <svg class="circular" viewBox="50 50 100 100">
                <circle class="path" cx="75" cy="75" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                <line class="line" x1="127" x2="150" y1="0" y2="0" stroke="black" stroke-width="3" stroke-linecap="round" />
            </svg>
        </div>
    </div>
</div>


<?php echo $__env->make($activeTemplate.'partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make($activeTemplate.'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/jquery-3.5.1.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/chosen.jquery.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'frontend/js/main.js')); ?>"></script>
<?php echo $__env->yieldPushContent('script-lib'); ?>
<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    (function ($) {
        "use strict";
        $(".langSel").on("change", function() {
            window.location.href = "<?php echo e(route('home')); ?>/change/"+$(this).val() ;
        });

        $(document).on("click", ".loveHeartAction", function(){
            let id = $(this).data('serviceid');
            $.ajax({
                headers: {"X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>",},
                url:"<?php echo e(route('user.favorite.service')); ?>",
                method:"POST",
                dataType: "json",
                data:{id:id},
                success:function(response)
                {
                    if(response.success) {
                        notify('success', response.success);
                    }
                    else{
                        $.each(response, function (i, val) {
                            notify('error', val);
                        });
                    }
                }
            });
        });


        $(document).on("click", ".loveHeartActionSoftware", function(){
            let id = $(this).data('softwareid');
            $.ajax({
                headers: {"X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>",},
                url:"<?php echo e(route('user.favorite.software')); ?>",
                method:"POST",
                dataType: "json",
                data:{id:id},
                success:function(response)
                {
                    if(response.success) {
                        notify('success', response.success);
                    }else{
                        $.each(response, function (i, val) {
                            notify('error', val);
                        });
                    }
                }
            });
        });
    })(jQuery);
</script>

</body>
</html><?php /**PATH /opt/lampp/htdocs/up/core/resources/views/templates/basic/layouts/frontend.blade.php ENDPATH**/ ?>
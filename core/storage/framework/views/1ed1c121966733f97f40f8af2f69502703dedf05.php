<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="blog-details-section blog-section">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-9 col-lg-9 mb-30">
                                    <div class="blog-item-area">
                                        <div class="blog-item">
                                            <div class="blog-thumb">
                                                <img src="<?php echo e(getImage('assets/images/frontend/blog/'.$blog->data_values->blog_image_1,'728x465')); ?>" alt="<?php echo app('translator')->get('blog'); ?>">
                                                <div class="blog-date text-center">
                                                    <h3 class="title"><?php echo e(showDateTime($blog->created_at, 'd')); ?></h3>
                                                    <span class="sub-title"><?php echo e(showDateTime($blog->created_at, 'M')); ?></span>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-inner">
                                                    <h3 class="title"><?php echo e(__($blog->data_values->title)); ?></h3>
                                                    	<?php echo $blog->data_values->description ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-social-area d-flex flex-wrap justify-content-between align-items-center">
                                            <h3 class="title"><?php echo app('translator')->get('Share This Post'); ?></h3>
                                            <ul class="blog-social">
                                                <li><a href="http://www.facebook.com/sharer.php?u=http://www.example.com" target="__blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="http://twitter.com/share?url=http://www.example.com&text=Simple Share Buttons&hashtags=simplesharebuttons" target="__blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.example.com" target="__blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="col-xl-3 col-lg-3 mb-30">
                                    <div class="sidebar">
                                        <div class="widget mb-30">
                                            <h3 class="widget-title"><?php echo app('translator')->get('CATEGORIES'); ?></h3>
                                            <ul class="category-list">
                                            	<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                                <li><a href="<?php echo e(route('service.category', [slug($category->name),$category->id])); ?>"><?php echo e(__($category->name)); ?></a></li>
	                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <div class="widget">
                                            <h3 class="widget-title"><?php echo app('translator')->get('FEATURED SERVICE'); ?></h3>
                                            <ul class="small-item-list" id="featuredService">
                                                <?php $__currentLoopData = $fservices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="small-single-item">
                                                        <div class="thumb">
                                                            <img src="<?php echo e(getImage('assets/images/service/'.$ser->image, imagePath()['service']['size'])); ?>" alt="<?php echo app('translator')->get('service image'); ?>">
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="<?php echo e(route('service.details', [slug($ser->title), encrypt($ser->id)])); ?>"><?php echo e(__($ser->title)); ?></a></h5>
                                                            <div class="ratings">
                                                                <i class="fas fa-star text--warning"></i>
                                                                <span class="rating">(<?php echo e($ser->rating); ?>)</span>
                                                                <p class="author-like d-inline-flex flex-wrap align-items-center ms-2"><span class="las la-thumbs-up text--base"></span> (<?php echo e(__($ser->likes)); ?>)</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <div class="widget-btn text-center">
                                            <?php if($fservices->total() > 4): ?>
                                                <a href="javascript:void(0)" class="btn--base readMore" data-page="2" data-link="<?php echo e(route('home')); ?>?page="><?php echo app('translator')->get('Show More'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<?php echo $__env->make($activeTemplate.'partials.end_ad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('fbComment'); ?>
	<?php echo loadFbComment() ?>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>
<script>
    'use strict';
    $('.readMore').on('click',function(){
       var link = $(this).data('link');
       var page = $(this).data('page');
       var href = link + page;
       var featuredServiceCount = <?php echo e($fservices->total()); ?>;
       $.get(href, function(response){
            var html = $(response).find("#featuredService").html();
            $("#featuredService").append(html);
            var loadMoreCount = 4 * page;
            if(loadMoreCount >= featuredServiceCount){
                $('.readMore').hide()
            }
       });
       $(this).data('page', (parseInt(page) +1));
        
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/blog_details.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>

<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="blog-section">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                            	<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
	                                    <div class="blog-item">
	                                        <div class="blog-thumb">
	                                            <img src="<?php echo e(getImage('assets/images/frontend/blog/thumb_'.$blog->data_values->blog_image_1,'728x465')); ?>" alt="blog">
	                                            <div class="blog-date text-center">
	                                                <h3 class="title"><?php echo e(showDateTime($blog->created_at, 'd')); ?></h3>
	                                                <span class="sub-title"><?php echo e(showDateTime($blog->created_at, 'M')); ?></span>
	                                            </div>
	                                        </div>
	                                        <div class="blog-content">
	                                            <div class="blog-content-inner">
	                                                <h3 class="title"><a href="<?php echo e(route('blog.details',[$blog->id,slug($blog->data_values->title)])); ?>"><?php echo e(__($blog->data_values->title)); ?></a></h3>
	                                                <p><?php echo e(str_limit(strip_tags(@$blog->data_values->description), 100)); ?></p>
	                                                <div class="blog-btn">
	                                                    <a href="<?php echo e(route('blog.details',[$blog->id,slug($blog->data_values->title)])); ?>" class="btn--base text-center w-100"><?php echo app('translator')->get('Read More'); ?></a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <nav>
                                <?php echo e($blogs->links()); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/blog.blade.php ENDPATH**/ ?>

<div class="col-xl-3 col-lg-3 mb-30">
    <div class="sidebar">
        <div class="widget mb-30">
            <h3 class="widget-title"><?php echo app('translator')->get('CATEGORIES'); ?></h3>
            <ul class="category-list">
                <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('software.category', [slug($category->name),$category->id])); ?>"><?php echo e(__($category->name)); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <form action="<?php echo e(route('software.search.filter')); ?>" method="GET">
            <div class="widget mb-30">
                <h3 class="widget-title"><?php echo app('translator')->get('FILTER BY LEVEL'); ?></h3>
                <?php $__currentLoopData = $ranks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-group custom-check-group">
                        <input type="checkbox" id="<?php echo e($rank->id); ?>.'s'" name="level[]" value="<?php echo e($rank->id); ?>" class="userLevel" 
                        <?php if(!empty($level)): ?>
                            <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($val == $rank->id): ?>
                                    checked
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        >
                        <label for="<?php echo e($rank->id); ?>.'s'"><?php echo e(__($rank->level)); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="widget mb-30">
                <h3 class="widget-title"><?php echo app('translator')->get('SERVICE INCLUDES'); ?></h3>
                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-group custom-check-group">
                        <input type="checkbox" id="<?php echo e($feature->id); ?>.'f'" name="feature[]" value="<?php echo e($feature->id); ?>" class="featureService"
                        <?php if(!empty($searchData)): ?>
                            <?php $__currentLoopData = $searchData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($val == $feature->id): ?>
                                    checked
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                                >
                        <label for="<?php echo e($feature->id); ?>.'f'"><?php echo e(__($feature->name)); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="widget mb-30">
                <h3 class="widget-title"><?php echo app('translator')->get('FILTER BY PRICE'); ?></h3>
                <div class="widget-range-area">
                    <div id="slider-range"></div>
                    <div class="price-range">
                        <div class="filter-btn">
                            <button type="submit" class="btn--base active"><?php echo app('translator')->get('Filter Now'); ?></button>
                        </div>
                        <input type="text" id="amount" name="price" readonly>
                    </div>
                </div>
            </div>
        </form>

        <?php echo $__env->make($activeTemplate.'partials.left_ad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="widget mb-30">
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
        <div class="widget-btn text-center mb-30">
            <?php if($fservices->total() > 4): ?>
                <a href="javascript:void(0)" class="btn--base readMore" data-page="2" data-link="<?php echo e(route('home')); ?>?page="><?php echo app('translator')->get('Show More'); ?></a>
            <?php endif; ?>
        </div>

          <?php echo $__env->make($activeTemplate.'partials.left_ad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


<?php $__env->startPush('script'); ?>
<script>
    'use strict';
    $('.userLevel').on('click', function(){
        this.form.submit();
    });

    $('.featureService').on('click', function(){
        this.form.submit();
    });

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
    <?php if(session()->has('range')): ?>
        var data1 = <?php echo e(session('range')[0]); ?>;
        var data2 = <?php echo e(session('range')[1]); ?>;
    <?php else: ?>
        var data1 = 0;
        var data2 = <?php echo e($general->search_max); ?>;
    <?php endif; ?>  
       
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: <?php echo e($general->search_max); ?>,
      values: [data1, data2],
      slide: function (event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        $('input[name=min_price]').val(ui.values[0]);
        $('input[name=max_price]').val(ui.values[1]);
      },
      change: function () {
        var brand = [];
        $('.brand-filter input:checked').each(function () {
          brand.push(parseInt($(this).attr('value')));
        });
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
</script>
<?php $__env->stopPush(); ?><?php /**PATH /opt/lampp/htdocs/up/core/resources/views/templates/basic/partials/software_filter.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="item-section">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-9 col-lg-9 mb-30">
                                    <div class="item-details-area">
                                        <div class="item-card-wrapper border-0 p-0 list-view">
                                            <div class="item-card">
                                                <div class="item-card-thumb">
                                                    <img src="<?php echo e(getImage('assets/images/service/'.$service->image, imagePath()['service']['size'])); ?>" alt="<?php echo app('translator')->get('item-banner'); ?>">
                                                    <?php if($service->featured == 1): ?>
                                                        <div class="item-level"><?php echo app('translator')->get('Featured'); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="item-card-content">
                                                    <div class="item-card-content-top">
                                                        <div class="left">
                                                            <div class="author-thumb">
                                                                  <img src="<?php echo e(userDefaultImage(imagePath()['profile']['user']['path'].'/'. $service->user->image,'profile_image')); ?>" alt="<?php echo e(__($service->user->username)); ?>">
                                                            </div>
                                                            <div class="author-content">
                                                                <h5 class="name"><a href="<?php echo e(route('profile', $service->user->username)); ?>"><?php echo e(__($service->user->username)); ?></a> <span class="level-text"> <?php echo e(__(@$service->user->rank->level)); ?></span></h5>
                                                                <div class="ratings">
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="rating me-2"><?php echo e(__($service->rating)); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right d-flex flex-wrap align-items-center">
                                                            <select class="select me-3 selectQty" id="qty">
                                                                <?php for($i=1; $i<=50; $i++): ?>
                                                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                                                <?php endfor; ?>
                                                            </select>
                                                            <div class="item-amount"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($service->price)); ?></div>
                                                        </div>
                                                    </div>
                                                    <h3 class="item-card-title"><a href="<?php echo e(route('service.details', [slug($service->title), encrypt($service->id)])); ?>"><?php echo e(__($service->title)); ?></a></h3>
                                                </div>
                                                <div class="item-card-footer">
                                                    <div class="left">
                                                        <a href="javascript:void(0)" class="item-love me-2 loveHeartAction" data-serviceid="<?php echo e($service->id); ?>"><i class="fas fa-heart"></i> <span
                                                                class="give-love-amount">(<?php echo e($service->favorite); ?>)</span></a>
                                                        <a href="javascript:void(0)" class="item-like"><i class="las la-thumbs-up"></i> (<?php echo e($service->likes); ?>)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php if($service->extraService->isNotEmpty()): ?>
                                        <div class="service-card mt-60">
                                            <div class="service-card-header bg--gray text-center">
                                                <h4 class="title"><?php echo app('translator')->get('Extra Service'); ?></h4>
                                            </div>
                                            <div class="service-card-body">
                                                <div class="service-card-form">
                                                    <?php $__currentLoopData = $service->extraService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="form-row">
                                                            <div class="left">
                                                                <div class="form-group custom-check-group">
                                                                    <input type="checkbox" id="<?php echo e($key); ?>" data-key="<?php echo e($key); ?>" data-id="<?php echo e($extra->id); ?>" value="<?php echo e(getAmount($extra->price)); ?>" class="extraService">
                                                                    <label for="<?php echo e($key); ?>"><?php echo e(__($extra->title)); ?></label>
                                                                </div>
                                                            </div>
                                                            <div class="right">
                                                                <span class="value"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($extra->price)); ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                        <div class="product-desc mt-80">
                                            <div class="section-header">
                                                <h2 class="section-title"><?php echo app('translator')->get('Service Description'); ?></h2>
                                            </div>
                                            <div class="product-desc-content pt-0">
                                                <?php echo $service->description ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 mb-30">
                                    <div class="sidebar">
                                        <div class="widget custom-widget mb-30">
                                            <h3 class="widget-title"><?php echo app('translator')->get('Your Order'); ?></h3>
                                            <ul class="details-list">
                                                <li><span><?php echo app('translator')->get('Service Price'); ?> :</span>
                                                    <div class="order-price-tags">
                                                        <span><?php echo e($general->cur_sym); ?></span>
                                                        <span id="servicePrice"><?php echo e(getAmount($service->price)); ?></span>
                                                    </div>
                                                </li>
                                                <li><span><?php echo app('translator')->get('Extras Price'); ?> :</span>
                                                    <div class="order-price-tags">
                                                        <span><?php echo e($general->cur_sym); ?></span>
                                                        <span id="extraPrice">0.00</span>
                                                    </div>
                                                </li>
                                                <li><span><?php echo app('translator')->get('Quantity'); ?> :</span>
                                                    <span id="qunatity">1</span>
                                                </li>
                                                <li><span><?php echo app('translator')->get('Subtotal'); ?> :</span>
                                                    <div class="order-price-tags">
                                                        <span><?php echo e($general->cur_sym); ?></span>
                                                        <span id="totalPrice"><?php echo e(getAmount($service->price)); ?></span>
                                                    </div>
                                                </li>

                                                <div id="discount">

                                                </div>

                                            </ul>
                                            <div class="total-price-area d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left">
                                                    <h4 class="title"><?php echo app('translator')->get('Total'); ?> :</h4>
                                                </div>
                                                <div class="right">
                                                    <h4 class="title"><?php echo e($general->cur_sym); ?><span id="paymentPrice"><?php echo e(getAmount($service->price)); ?></span></h4>
                                                </div>
                                            </div>
                                            <?php if($coupon): ?>
                                                <form class="coupon-form mt-20">
                                                    <input type="text" class="form-control" id="couponCode" placeholder="<?php echo app('translator')->get('Coupon Code'); ?>">
                                                    <button type="button" class="coupon-form-btn" id="couponApply"><i class="las la-angle-right"></i></button>
                                                </form>
                                            <?php endif; ?>
                                            <div class="widget-btn mt-20">
                                                 <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#serviceModal" class="btn--base w-100"><i class="las la-sign-in-alt"></i> <?php echo app('translator')->get('Checkout'); ?></a>
                                            </div>
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
<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('Payment You Order'); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="<?php echo e(route('user.service.booked')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <input type="hidden" name="serviceId" value="<?php echo e($service->id); ?>">
                    <input type="hidden" name="extraservice" value="" id="extraId">
                    <input type="hidden" name="qty" value="1" id="serviceQuantity">
                    <div class="form-group">
                        <h5><?php echo app('translator')->get('How you want to pay'); ?></h5>
                        <select class="form-control" name="payment">
                            <option value="wallet"><?php echo e(__($general->sitename)); ?> <?php echo app('translator')->get('wallet'); ?></option>
                            <option value="checkout"><?php echo app('translator')->get('Checkout'); ?></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--danger btn-rounded text-white" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn btn--base btn-rounded text-white"><?php echo app('translator')->get('Confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    'use strict';
    (function($){
        var extraTotal = 0;
        var extraId = [];
        var discount = 0;

        $("#couponApply").on("click", function(){
            var couponCode = $("#couponCode").val();
            var serviceId = <?php echo e($service->id); ?>;
            var qty = $("#serviceQuantity").val();
            if(couponCode)
            {
                $.ajax({
                    type:"GET",
                    url:"<?php echo e(route('user.service.coupon.apply')); ?>",
                    data : {couponCode : couponCode, serviceId: serviceId, qty : qty},
                    success:function(response){
                        if(response.error){
                            notify('error', response.error)
                        }else{
                            notify('success',response.success);
                            $("#discount").html(`
                                <li>
                                  <span>Discount (${response.code})</span>
                                  <span><?php echo e($general->cur_sym); ?>${parseFloat(response.amount.toFixed(8))}</span>
                                </li>
                                `)
                            discount = 1;
                            $("#qty").attr("disabled", true);
                            var discountAmount = response.amount;
                            var totalPrice = $("#paymentPrice").text();
                            var final = parseFloat(totalPrice) - parseFloat(discountAmount);
                            $("#paymentPrice").text(`${parseFloat(final.toFixed(8))}`);
                        }
                    }
                });
            }
            else{
                notify('error', "Please Enter Coupon Code");
            }
        });


        $("#qty").change(function() {
            if(discount != 1)
            {
                $("#qty").attr('disabled',false);
                var servicePrice = $("#servicePrice").text();
                var qty = $("#qty").val();
                var extraPrice = $("#extraPrice").text();
                var total = (parseFloat(servicePrice * qty) + parseFloat(extraPrice));
                $("#totalPrice").text(`${parseFloat(total.toFixed(8))}`);
                $("#paymentPrice").text(`${parseFloat(total.toFixed(8))}`);
                $("#qunatity").text(`${qty}`);
                $("#serviceQuantity").val(qty);
            }else
            {
                notify('error', 'The coupon has already been applied');
            }
        });

        $(".extraService").change(function() {
            $('.extraService').is(":checked");
            var key = $(this).data("key");
            var extraPrice = $(this).val();
            if ($(`#${key}`).is(":checked"))
            {
                extraTotal = parseFloat(extraTotal) + parseFloat(extraPrice);
                var serviceSubtotal = $("#totalPrice").text();
                var serviceTotal = $("#paymentPrice").text();
                var subTotal =  parseFloat(serviceSubtotal) + parseFloat(extraPrice);
                var total =  parseFloat(serviceTotal) + parseFloat(extraPrice);
                $("#totalPrice").text(`${parseFloat(subTotal.toFixed(8))}`);
                $("#paymentPrice").text(`${parseFloat(total.toFixed(8))}`);
                var eId = $(this).data("id");
                extraId.push(eId);
            }
            else
            {
                extraTotal = parseFloat(extraTotal) - parseFloat(extraPrice);
                var serviceSubtotal = $("#totalPrice").text();
                var serviceTotal = $("#paymentPrice").text();
                var subTotal = parseFloat(serviceSubtotal) - parseFloat(extraPrice);
                var total = parseFloat(serviceTotal) - parseFloat(extraPrice);
                $("#totalPrice").text(`${parseFloat(subTotal.toFixed(8))}`);
                $("#paymentPrice").text(`${parseFloat(total.toFixed(8))}`);

                var eId = $(this).data("id");
                extraId.splice($.inArray(eId, extraId), 1);
            }
            $("#extraPrice").text(`${extraTotal.toFixed(2)}`)
            $("#extraId").val(extraId);
        });
    })(jQuery)
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/service_booking.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.buyer_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="card custom--card">
                        <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                            <h4 class="card-title mb-0">
                                <?php echo e(__($pageTitle)); ?>

                            </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                              <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                <?php echo app('translator')->get('Service Price'); ?>
                                <span><?php echo e(__($general->cur_sym)); ?><?php echo e(showAmount($booking->service->price)); ?></span>
                              </li>

                              <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                <?php echo app('translator')->get('Quantity'); ?>
                                <span><?php echo e(__($booking->qty)); ?></span>
                              </li>

                            <?php if($booking->extra_service != null): ?>
                              <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                <?php echo app('translator')->get('Extra Price'); ?>
                                <span><?php echo e(__($general->cur_sym)); ?><?php echo e($extraPrice); ?></span>
                              </li>
                            <?php endif; ?>

                            <?php if($booking->discount != 0): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                    <?php echo app('translator')->get('Discount'); ?>
                                    <span><?php echo e(__($general->cur_sym)); ?><?php echo e(showAmount($booking->discount)); ?></span>
                                </li>
                            <?php endif; ?>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Amount'); ?>
                            <span><?php echo e(__($general->cur_sym)); ?><?php echo e(showAmount($booking->amount)); ?></span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Order Number'); ?>
                            <span><?php echo e(__($booking->order_number)); ?></span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Delivery Date'); ?>
                            <span><?php echo e(showDateTime($booking->created_at->addDays($booking->service->delivery_time), ('d M Y'))); ?></span>
                          </li>

                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo app('translator')->get('Working Status'); ?>
                                <?php if($booking->working_status == 0): ?>
                                    <span class="badge badge--primary"><?php echo app('translator')->get('Pending'); ?></span>
                                <?php elseif($booking->working_status == 1): ?>
                                    <span class="badge badge--success"><?php echo app('translator')->get('Completed'); ?></span>
                                <?php elseif($booking->working_status == 2): ?>
                                    <span class="badge badge--secondary"><?php echo app('translator')->get('Delivered'); ?></span>
                                <?php elseif($booking->working_status == 3): ?>
                                    <span class="badge badge--danger"><?php echo app('translator')->get('Cancel'); ?></span>
                                <?php elseif($booking->working_status == 4): ?>
                                    <span class="badge badge--info"><?php echo app('translator')->get('In Progress'); ?></span>
                                <?php elseif($booking->working_status == 5): ?>
                                    <span class="badge badge--danger"><?php echo app('translator')->get('Delivery Expired'); ?></span>
                                <?php elseif($booking->working_status == 6): ?>
                                    <div>
                                        <span class="badge badge--warning"><?php echo app('translator')->get('Dispute'); ?></span>
                                        <button class="btn-info btn-rounded text-white  badge disputeShow" data-dispute="<?php echo e($booking->dispute_report); ?>"><i class="fa fa-info"></i></button>
                                    </div>
                                <?php endif; ?>
                              </li>

                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo app('translator')->get('Status'); ?>
                                    <?php if($booking->status == 1): ?>
                                        <span class="badge badge--success"><?php echo app('translator')->get('Running'); ?></span>
                                    <?php elseif($booking->status == 2): ?>
                                        <span class="badge badge--warning"><?php echo app('translator')->get('Payable Both'); ?></span>
                                    <?php elseif($booking->status == 3): ?>
                                        <span class="badge badge--success"><?php echo app('translator')->get('Paid'); ?></span>
                                    <?php elseif($booking->status == 4): ?>
                                        <span class="badge badge--info"><?php echo app('translator')->get('Refund'); ?></span>
                                    <?php endif; ?>
                              </li>
                            </ul>

                            <?php if($booking->extra_service): ?>
                                <div class="table-area mt-3">
                                <h4 class="text-center"><?php echo app('translator')->get('Extra Service'); ?></h4>
                                    <table class="custom-table">
                                        <thead>
                                            <tr>
                                                <th><?php echo app('translator')->get('Title'); ?></th>
                                                <th><?php echo app('translator')->get('Price'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = explode(",",$booking->extra_service); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $extraService = App\Models\ExtraService::find($value) ?>    
                                                <tr>
                                                    <td data-label="<?php echo app('translator')->get('Title'); ?>"><?php echo e(__($extraService->title)); ?></td>
                                                    <td data-label="<?php echo app('translator')->get('Price'); ?>"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($extraService->price)); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>

                            <?php if($booking->workFile->isNotEmpty()): ?>
                                <div class="mt-3">
                                <h4 class="text-center"><?php echo app('translator')->get('Work Delivery'); ?></h4>
                                    <?php $__currentLoopData = $booking->workFile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="text-center mt-2">
                                        <h5><?php echo app('translator')->get('Delivery Details'); ?></h5>
                                        <p><?php echo e(__($file->details)); ?></p>
                                        <a href="<?php echo e(route('user.work.delivery.download', encrypt($file->id))); ?>" class="btn btn--primary btn-rounded text-white"><?php echo app('translator')->get('File Download'); ?></a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="disputeModalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('Dispute Report'); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="dispute-detail">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger btn-rounded text-white" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php $__env->startPush('script'); ?>
<script>
     'use strict';
    $('.disputeShow').on('click', function () {
        var modal = $('#disputeModalShow');
        var feedback = $(this).data('dispute');
        modal.find('.dispute-detail').html(`<p> ${feedback} </p>`);
        modal.modal('show');
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/buyer/service_booking_details.blade.php ENDPATH**/ ?>
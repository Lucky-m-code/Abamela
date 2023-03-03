
<?php $__env->startSection('panel'); ?>
    <div class="row mb-none-30">
        <div class="col-xl-4 col-md-6 mb-30">
            <div class="card b-radius--10 overflow-hidden box--shadow1">
                <div class="card-body">
                    <h5 class="mb-10 text-muted"><?php echo app('translator')->get('Service Details'); ?></h5>
                    <h6 class="mb-20 text-muted"><a href="<?php echo e(route('admin.service.details', $booking->service_id)); ?>"><?php echo e(__($booking->service->title)); ?></a></h6>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Date'); ?>
                            <span class="font-weight-bold"><?php echo e(showDateTime($booking->created_at)); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Order Number'); ?>
                            <span class="font-weight-bold"><?php echo e($booking->order_number); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Seller'); ?>
                            <span class="font-weight-bold">
                                <a href="<?php echo e(route('admin.users.detail', $booking->service->user_id)); ?>"><?php echo e(@$booking->service->user->username); ?></a>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Buyer'); ?>
                            <span class="font-weight-bold">
                                <a href="<?php echo e(route('admin.users.detail', $booking->user_id)); ?>"><?php echo e(@$booking->user->username); ?></a>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Delivery Data'); ?>
                            <span class="font-weight-bold"><?php echo e(showDateTime($booking->created_at->addDays($booking->service->delivery_time), 'd M Y')); ?></span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Service Price'); ?>
                            <span class="font-weight-bold"><?php echo e(getAmount($booking->service->price)); ?> <?php echo e($general->cur_text); ?></span>
                          </li>

                         <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Quantity'); ?>
                            <span class="font-weight-bold"><?php echo e(__($booking->qty)); ?></span>
                          </li>

                        <?php if($booking->extra_service != null): ?>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Extra Price'); ?>
                            <span class="font-weight-bold"><?php echo e(__($general->cur_sym)); ?><?php echo e($extraPrice); ?></span>
                          </li>
                        <?php endif; ?>

                        <?php if($booking->discount != 0): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo app('translator')->get('Discount'); ?>
                                <span class="font-weight-bold"><?php echo e(__($general->cur_sym)); ?><?php echo e(showAmount($booking->discount)); ?></span>
                            </li>
                        <?php endif; ?>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Amount'); ?>
                            <span class="font-weight-bold"><?php echo e(getAmount($booking->amount )); ?> <?php echo e(__($general->cur_text)); ?></span>
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
                                <span class="badge badge--dark"><?php echo app('translator')->get('In Progress'); ?></span>
                            <?php elseif($booking->working_status == 5): ?>
                                <span class="badge badge--danger"><?php echo app('translator')->get('Expired'); ?></span>
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
                                <span class="badge badge--primary"><?php echo app('translator')->get('Running'); ?></span>
                            <?php elseif($booking->status == 2): ?>
                                <span class="badge badge--warning"><?php echo app('translator')->get('Payable Both'); ?></span>
                            <?php elseif($booking->status == 3): ?>
                                <span class="badge badge--success"><?php echo app('translator')->get('Paid'); ?></span>
                            <?php elseif($booking->status == 4): ?>
                                <span class="badge badge--success"><?php echo app('translator')->get('Refund'); ?></span>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-xl-8 col-md-6 mb-30">
            <div class="card b-radius--10 overflow-hidden box--shadow1">
                <div class="card-body">
                    <h5 class="card-title border-bottom pb-2 text-right"><?php echo app('translator')->get('Other Information'); ?></h5>
                        <div class="row mt-2 text-center">

                            <?php if($booking->extra_service): ?>
                                <div class="col-md-12">
                                    <h5 class="card-title"><?php echo app('translator')->get('Extra Service'); ?></h5>
                                   <div class="table-responsive--md  table-responsive">
                                        <table class="table table--light style--two">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><?php echo app('translator')->get('Title'); ?></th>
                                                    <th scope="col"><?php echo app('translator')->get('Price'); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = explode(",",$booking->extra_service); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $extraService = App\Models\ExtraService::find($value) ?>    
                                                    <tr>
                                                        <td data-label="<?php echo app('translator')->get('Title'); ?>"><?php echo e(__($extraService->title)); ?></td>
                                                        <td data-label="<?php echo app('translator')->get('Price'); ?>"><span class="font-weight-bold"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($extraService->price)); ?></span></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php endif; ?>


                            <div class="col-md-12 mt-2">
                                <?php $__currentLoopData = $booking->workFile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card-title text-center font-weight-bold">
                                        <a href="<?php echo e(route('admin.work.delivery.download', encrypt($value->id))); ?>" class="icon-btn btn--primary"><i class="las la-download"></i>
                                        </a>
                                    </div>
                                    <div class="card-title text-center"><?php echo app('translator')->get('Delivery Details'); ?></div>
                                    <p class="card-text"><?php echo e(__($value->details)); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo app('translator')->get('Seller Payment'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.booking.service.payment')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <input type="hidden" name="payment" value="seller">
                <div class="modal-body">
                    <p><?php echo app('translator')->get('Are you sure to pay this service seller?'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn btn--success"><?php echo app('translator')->get('Confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="refundModel" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo app('translator')->get('Refund Money'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.booking.service.payment')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <input type="hidden" name="payment" value="buyer">
                <div class="modal-body">
                     <p><?php echo app('translator')->get('Are you sure to refund money to this buyer?'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn btn--success"><?php echo app('translator')->get('Confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="disputeModalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" lass="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Dispute Report'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="dispute-detail">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('breadcrumb-plugins'); ?>
 <?php if($booking->status == 2): ?>
    <button class="btn btn--success ml-1 approveBtn"
            data-toggle="tooltip" data-id="<?php echo e($booking->id); ?>" data-original-title="<?php echo app('translator')->get('Seller Payment'); ?>"><i class="fas fa-ban"></i>
        <?php echo app('translator')->get('Seller Payment'); ?>
    </button>

    <button class="btn btn--info ml-1 refundBtn"
            data-toggle="tooltip" data-id="<?php echo e($booking->id); ?>" data-original-title="<?php echo app('translator')->get('Buyer Payment'); ?>"><i class="fas fa-ban"></i>
        <?php echo app('translator')->get('Buyer Payment'); ?>
    </button>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        $('.approveBtn').on('click', function () {
            var modal = $('#approveModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.modal('show');
        });

        $('.refundBtn').on('click', function () {
            var modal = $('#refundModel');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.modal('show');
        });

        $('.disputeShow').on('click', function () {
            var modal = $('#disputeModalShow');
            var feedback = $(this).data('dispute');
            modal.find('.dispute-detail').html(`<p> ${feedback} </p>`);
            modal.modal('show');
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/admin/booking/details.blade.php ENDPATH**/ ?>
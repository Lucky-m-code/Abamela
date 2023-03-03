
<?php $__env->startSection('content'); ?>
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="item-section">
                        <div class="container">
                            <div class="card-area">
                                <div class="row justify-content-center">
                                    <div class="col-xl-10 col-md-10 col-sm-12">

                                        <div class="card custom--card">
                                            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                                <h4 class="card-title text-lowercase mb-0">
                                                    <?php if($my_ticket->status == 0): ?>
                                                        <span class="badge badge--success text-capitalize text-white"><?php echo app('translator')->get('Open'); ?></span>
                                                    <?php elseif($my_ticket->status == 1): ?>
                                                        <span class="badge badge--primary text-capitalize text-white"><?php echo app('translator')->get('Answered'); ?></span>
                                                    <?php elseif($my_ticket->status == 2): ?>
                                                        <span class="badge badge--warning text-capitalize text-white"><?php echo app('translator')->get('Replied'); ?></span>
                                                    <?php elseif($my_ticket->status == 3): ?>
                                                        <span class="badge badge--danger text-capitalize text-white"><?php echo app('translator')->get('Closed'); ?></span>
                                                    <?php endif; ?> [<?php echo app('translator')->get('Ticket'); ?>#<?php echo e($my_ticket->ticket); ?>] <?php echo e($my_ticket->subject); ?>

                                                </h4>
                                                <div class="card-btn">
                                                    <button class="btn btn--danger text-white border--rounded close-button" type="button" title="Close Ticket" data-bs-toggle="modal"
                                                        data-bs-target="#DelModal"><i class="fa fa-lg fa-times-circle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-form-wrapper">
                                                 <?php if($my_ticket->status != 4): ?>
                                                    <form action="<?php echo e(route('ticket.reply', $my_ticket->id)); ?>" method="post" role="form" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="replayTicket" value="1">
                                                        <div class="row justify-content-center mb-20-none">
                                                            <div class="col-xl-12 col-lg-12 form-group">
                                                                <textarea class="form-control bg--gray" name="message" rows="8" placeholder="<?php echo app('translator')->get('Your Reply'); ?> ..." required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-between mt-30">
                                                            <div class="col-md-8 ">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-md-11">
                                                                        <div class="form-group">
                                                                            <div class="input-group ticket-input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text text-white" id="inputGroupFileAddon01"><?php echo app('translator')->get('Upload'); ?></span>
                                                                                </div>
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" name="attachments[]" id="inputAttachments"
                                                                                        aria-describedby="inputGroupFileAddon01">
                                                                                    <label class="custom-file-label" for="inputGroupFile01"><?php echo app('translator')->get('Choose file'); ?></label>
                                                                                </div>
                                                                            </div>
                                                        
                                                                            <div id="fileUploadsContainer"></div>
                                                                            <p class="my-2 ticket-attachments-message"><?php echo app('translator')->get('Allowed File Extensions'); ?>: .<?php echo app('translator')->get('jpg'); ?>, .<?php echo app('translator')->get('jpeg'); ?>, .<?php echo app('translator')->get('png'); ?>,
                                                                                .<?php echo app('translator')->get('doc'); ?>, .<?php echo app('translator')->get('docx'); ?></p>
                                                                        </div>
                                                        
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="form-group">
                                                                            <a href="javascript:void(0)" class="btn--base addFile">
                                                                                <i class="fa fa-plus"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button type="submit" class="btn--base">
                                                                    <i class="fa fa-reply"></i> <?php echo app('translator')->get('Reply'); ?> </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                <?php endif; ?>

                                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($message->admin_id == 0): ?>
                                                        <div class="row border--success border--rounded my-3 py-3 mx-2">
                                                            <div class="col-md-3 border-end text-end">
                                                                <h5 class="my-3"><?php echo e($message->ticket->name); ?></h5>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <p class="fw-bold my-2">
                                                                    <?php echo app('translator')->get('Posted on'); ?> <?php echo e($message->created_at->format('l, dS F Y @ H:i')); ?></p>
                                                                <p><?php echo e($message->message); ?></p>
                                                                <?php if($message->attachments()->count() > 0): ?>
                                                                    <div class="mt-2">
                                                                        <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <a href="<?php echo e(route('ticket.download',encrypt($image->id))); ?>" class="me-3"><i class="fa fa-file"></i>  <?php echo app('translator')->get('Attachment'); ?> <?php echo e(++$k); ?> </a>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="row border--success border--rounded my-3 py-3 mx-2">
                                                            <div class="col-md-3 border-end text-end">
                                                                <h5 class="my-3"><?php echo e($message->admin->name); ?></h5>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <p class="fw-bold my-2">
                                                                    <?php echo app('translator')->get('Posted on'); ?> <?php echo e($message->created_at->format('l, dS F Y @ H:i')); ?></p>
                                                                <p><?php echo e($message->message); ?></p>
                                                                <?php if($message->attachments()->count() > 0): ?>
                                                                    <div class="mt-2">
                                                                        <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <a href="<?php echo e(route('ticket.download',encrypt($image->id))); ?>" class="me-3"><i class="fa fa-file"></i>  <?php echo app('translator')->get('Attachment'); ?> <?php echo e(++$k); ?> </a>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
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

<div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalLabel"><?php echo app('translator')->get('Confirmation'); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
                <form method="POST" action="<?php echo e(route('ticket.reply', $my_ticket->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="replayTicket" value="2">
                    <div class="modal-body">
                        <p><?php echo app('translator')->get('Are you sure you want to close this support ticket'); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--danger btn-rounded text-white" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                         <button type="submit" class="btn btn--success btn-rounded text-white"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
<script>
    $(document).on("change",".custom-file-input",function(){
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

     $('.addFile').on('click',function(){
        $("#fileUploadsContainer").append(
            `<div class="input-group ticket-input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text text-white" id="inputGroupFileAddon01"><?php echo app('translator')->get('Upload'); ?></span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="attachments[]" id="inputAttachments"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01"><?php echo app('translator')->get('Choose file'); ?></label>
                </div>
            <span class="btn btn--danger text-white remove-btn ms-2"><i class="las la-times"></i></span>
        </div>`
        )
    });
    $(document).on('click','.remove-btn',function(){
        $(this).closest('.input-group').remove();
    });
</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/ticket_view.blade.php ENDPATH**/ ?>
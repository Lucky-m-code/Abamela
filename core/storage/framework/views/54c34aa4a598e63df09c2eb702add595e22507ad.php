
<?php $__env->startSection('content'); ?>
<section class="all-sections ptb-60">
    <div class="container-fluid">
        <div class="section-wrapper">
            <div class="row justify-content-center mb-30-none">
                <?php echo $__env->make($activeTemplate . 'partials.seller_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <div class="col-xl-9 col-lg-12 mb-30">
                    <div class="dashboard-sidebar-open"><i class="las la-bars"></i> <?php echo app('translator')->get('Menu'); ?></div>
                    <div class="card-area">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="card custom--card chat-box">
                                    <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                        <h4 class="card-title mb-0">
                                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($loop->first): ?>
                                                <?php if($message->sender_id != auth()->user()->id): ?>
                                                    <?php echo e($message->sender->username); ?>

                                                <?php else: ?>
                                                    <?php echo e($message->receiver->username); ?>

                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h4>
                                    </div>
                                <div class="card-body p-0">
                                    <div class="ps-container">
                                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($message->sender_id != auth()->user()->id): ?>
                                                <div class="media media-chat">
                                                    <img class="avatar" src="<?php echo e(getImage(imagePath()['profile']['user']['path'].'/'.$message->sender->image,imagePath()['profile']['user']['size'])); ?>" alt="client">
                                                    <div class="media-body">
                                                        <?php if(!empty($message->message)): ?>
                                                            <p><?php echo e($message->message); ?></p>
                                                        <?php endif; ?>
                                                        <?php if(!empty($message->file)): ?>
                                                            <div class="media-chat-thumb text-end">
                                                                <img src="<?php echo e(getImage(imagePath()['message']['path'].'/'. $message->file)); ?>" alt="item-banner">
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="media media-chat media-chat-reverse">
                                                    <img class="avatar" src="<?php echo e(getImage(imagePath()['profile']['user']['path'].'/'.$message->sender->image,imagePath()['profile']['user']['size'])); ?>" alt="client">
                                                    <div class="media-body">
                                                        <?php if(!empty($message->message)): ?>
                                                            <p><?php echo e($message->message); ?></p>
                                                        <?php endif; ?>
                                                        <?php if(!empty($message->file)): ?>
                                                            <div class="media-chat-thumb text-end">
                                                                <img src="<?php echo e(getImage(imagePath()['message']['path'].'/'. $message->file)); ?>" alt="item-banner">
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->last): ?>
                                            <form class="chat-form" method="POST" action="<?php echo e(route('user.message.store')); ?>" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php if($message->sender_id != auth()->user()->id): ?>
                                                    <input type="hidden" value="<?php echo e(encrypt($message->sender_id)); ?>" name="receiver_id">
                                                <?php else: ?>
                                                    <input type="hidden" value="<?php echo e(encrypt($message->receiver_id)); ?>" name="receiver_id">
                                                <?php endif; ?>
                                                <input type="hidden" value="<?php echo e(encrypt($conversionId)); ?>" name="conversion_id">
                                                <div class="publisher">
                                                    <div class="chatbox-message-part">
                                                        <img class="avatar" src="<?php echo e(getImage(imagePath()['profile']['user']['path'].'/'.auth()->user()->image,imagePath()['profile']['user']['size'])); ?>" alt="client">
                                                        <input class="publisher-input" type="text" name="message" placeholder="<?php echo app('translator')->get('Write something'); ?>">
                                                    </div>
                                                    <div class="chatbox-send-part d-flex flex-wrap align-items-center">
                                                        <span class="publisher-btn file-group me-3">
                                                            <input type="file" name="image" id="data">
                                                            <label for="data"><i class="fa fa-paperclip"></i></label>
                                                        </span>
                                                        <button type="submit" class="btn--base btn-md"><?php echo app('translator')->get('Submit'); ?></button>
                                                    </div>
                                                </div>
                                            </form>
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
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/templates/basic/user/message/chat.blade.php ENDPATH**/ ?>
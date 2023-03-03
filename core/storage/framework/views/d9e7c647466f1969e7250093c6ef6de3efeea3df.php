
<?php $__env->startSection('panel'); ?>
    <div class="row mb-none-30">
        <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12">
            <div class="card b-radius--10 overflow-hidden box--shadow1">
                <div class="card-body p-0">
                    <div class="p-3 bg--white">
                        <div>
                            <img src="<?php echo e(getImage('assets/images/service/'. $service->image)); ?>" alt="<?php echo app('translator')->get('Service image'); ?>"
                                 class="b-radius--10 w-100">
                        </div>
                        <div class="mt-10">
                            <h4 class=""><?php echo e(__($service->title)); ?></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card b-radius--10 overflow-hidden mt-30 box--shadow1">
                <div class="card-body">
                    <h5 class="mb-20 text-muted"><?php echo app('translator')->get('Seller Information'); ?></h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Username'); ?>
                            <span class="font-weight-bold"><?php echo e(__($service->user->username)); ?></span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Status'); ?>
                            <?php if($service->user->status == 1): ?>
                                <span class="badge badge-pill bg--success"><?php echo app('translator')->get('Active'); ?></span>
                            <?php elseif($service->user->status == 0): ?>
                                <span class="badge badge-pill bg--danger"><?php echo app('translator')->get('Banned'); ?></span>
                            <?php endif; ?>
                        </li>

                         <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo app('translator')->get('Balance'); ?>
                            <span class="font-weight-bold"><?php echo e(getAmount($service->user->balance)); ?>  <?php echo e(__($general->cur_text)); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 mt-10">
            <?php if($service->optionalImage->count() != 0): ?>
                <div class="row mb-30">
                    <div class="col-lg-12">
                        <div class="card border--dark">
                            <h5 class="card-header bg--dark"><?php echo app('translator')->get('Optional Image'); ?></h5>
                            <div class="card-body">
                                 <div class="row my-2">
                                    <?php $__currentLoopData = $service->optionalImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="<?php echo e(getImage('assets/images/optionalService/'. $optional->image)); ?>" target="_blank">
                                                <img src="<?php echo e(getImage('assets/images/optionalService/'. $optional->image)); ?>" class="b-radius--10 w-80 ml-2 my-3" alt="<?php echo app('translator')->get('Optional Image'); ?>">
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row mb-30">
                <div class="col-lg-6 mt-2">
                    <div class="card border--dark">
                        <h5 class="card-header bg--dark"><?php echo app('translator')->get('Service Main Information'); ?></h5>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Category'); ?>
                                  <span><?php echo e(__($service->category->name)); ?></span>
                                </li>
                                <?php if(!empty($service->sub_category_id)): ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                      <?php echo app('translator')->get('Sub Category'); ?>
                                      <span><?php echo e(__($service->subCategory->name)); ?></span>
                                    </li>
                                <?php endif; ?>
                              
                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Service Price'); ?>
                                  <span><?php echo e(getAmount($service->price)); ?> <?php echo e($general->cur_text); ?></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Delivery Time'); ?>
                                    <span><?php echo e($service->delivery_time); ?> <?php echo app('translator')->get('Days'); ?></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Last Update'); ?>
                                  <span><?php echo e(diffforhumans($service->updated_at)); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-2">
                    <div class="card border--dark">
                        <h5 class="card-header bg--dark"><?php echo app('translator')->get('Service Other Information'); ?></h5>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Status'); ?>
                                    <?php if($service->status == 1): ?>
                                        <span class="font-weight-normal badge--success badge--sm"><?php echo app('translator')->get('Approved'); ?></span>
                                    <?php elseif($service->status == 2): ?>
                                        <span class="font-weight-normal badge--danger badge--sm"><?php echo app('translator')->get('Cancel'); ?></span>
                                    <?php else: ?>
                                        <span class="font-weight-normal badge--primary badge--sm"><?php echo app('translator')->get('Pending'); ?></span>
                                    <?php endif; ?>
                                </li>
                              
                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Featured Item'); ?>
                                    <?php if($service->featured == 0): ?>
                                        <span class="font-weight-normal badge--warning badge--sm"><?php echo app('translator')->get('Not Include'); ?></span>
                                    <?php else: ?>
                                        <span class="font-weight-normal badge--primary badge--sm"><?php echo app('translator')->get('Include'); ?></span>
                                    <?php endif; ?>
                                </li>

                                 <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Rating'); ?>
                                  <span><?php echo e(getAmount($service->rating)); ?></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Like'); ?>
                                  <span><?php echo e($service->likes); ?></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                                  <?php echo app('translator')->get('Dislike'); ?>
                                    <span><?php echo e($service->dislike); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb-30">
                <div class="col-lg-6 mt-2">
                    <div class="card border--dark">
                        <h5 class="card-header bg--dark"><?php echo app('translator')->get('Features'); ?></h5>
                        <div class="card-body">
                            <ul>
                                <?php $__currentLoopData = $service->featuresService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $features): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="font-weight-bold"><?php echo e($loop->iteration); ?>. <?php echo e(__($features->name)); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-2">
                    <div class="card border--dark">
                        <h5 class="card-header bg--dark"><?php echo app('translator')->get('Tag'); ?></h5>
                        <div class="card-body">
                            <ul>
                                <?php $__currentLoopData = $service->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="font-weight-bold"><?php echo e($loop->iteration); ?>. <?php echo e(__($value)); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($service->extraService->count() != 0): ?>
                <div class="row mb-30">
                    <div class="col-lg-12">
                        <div class="card border--dark">
                            <h5 class="card-header bg--dark"><?php echo app('translator')->get('Extra Service'); ?></h5>
                            <div class="card-body">
                                <div class="table-responsive--md  table-responsive">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th scope="col"><?php echo app('translator')->get('Title'); ?></th>
                                                <th scope="col"><?php echo app('translator')->get('Price'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $service->extraService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td data-label="<?php echo app('translator')->get('Title'); ?>">
                                                        <?php echo e($extra_service->title); ?>

                                                    </td>
                                                    <td data-label="<?php echo app('translator')->get('Price'); ?>"><?php echo e(getAmount($extra_service->price)); ?> <?php echo e($general->cur_text); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row mb-30">
                <div class="col-lg-12">
                    <div class="card border--dark">
                        <h5 class="card-header bg--dark"><?php echo app('translator')->get('Description'); ?></h5>
                        <div class="card-body">
                            <?php echo $service->description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="<?php echo e(route('admin.service.index')); ?>" class="btn btn-sm btn--primary box--shadow1 text--small"><i class="la la-fw la-backward"></i><?php echo app('translator')->get('Go Back'); ?></a>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/up/core/resources/views/admin/service/details.blade.php ENDPATH**/ ?>
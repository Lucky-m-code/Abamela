
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->get('Name'); ?></th>
                                    <th><?php echo app('translator')->get('Category'); ?></th>
                                    <th><?php echo app('translator')->get('Last Update'); ?></th>
                                    <th><?php echo app('translator')->get('Action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $subCategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                     <td data-label="<?php echo app('translator')->get('Gateway'); ?>">
                                        <div class="user">

                                            <div class="thumb"><img src="<?php echo e(getImage(imagePath()['subcategory']['path'].'/'. $subCategory->image,imagePath()['subcategory']['size'])); ?>" alt="<?php echo app('translator')->get('image'); ?>"></div>
                                            <span class="name"><?php echo e(__($subCategory->name)); ?></span>
                                        </div>
                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Category'); ?>">
                                        <span class="font-weight-bold"><?php echo e($subCategory->category->name); ?></span>
                                    </td>
                                 
                                    <td data-label="<?php echo app('translator')->get('Last Update'); ?>">
                                        <?php echo e(showDateTime($subCategory->updated_at)); ?> <br> <?php echo e(diffForHumans($subCategory->updated_at)); ?>

                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                        <a href="javascript:void(0)" class="icon-btn btn--primary ml-1 updateCategory"
                                            data-id="<?php echo e($subCategory->id); ?>" 
                                            data-name="<?php echo e($subCategory->name); ?>" 
                                            data-category_id="<?php echo e($subCategory->category_id); ?>" >
                                            <i class="las la-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td class="text-muted text-center" colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                </tr>
                            <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <?php echo e(paginateLinks($subCategorys)); ?>

                </div>
            </div>
        </div>
    </div>


    <div id="addModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Add Sub Category'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.category.subcategory.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="form-control-label font-weight-bold"><?php echo app('translator')->get('Name'); ?></label>
                            <input type="text" class="form-control form-control-lg" name="name" placeholder="<?php echo app('translator')->get("Enter Name"); ?>"  maxlength="100" required="">
                        </div>

                        <div class="form-group">
                            <label for="category_id" class="form-control-label font-weight-bold"><?php echo app('translator')->get('Select Category'); ?></label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option><?php echo app('translator')->get('Select Category'); ?></option>
                                <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e(__($category->name)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="symbol" class="form-control-label font-weight-bold"><?php echo app('translator')->get('Image'); ?></label>
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="customFileLangHTML">
                              <label class="custom-file-label" for="customFileLangHTML" data-browse="<?php echo app('translator')->get('Choose Image'); ?>"><?php echo app('translator')->get('Image'); ?></label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn--primary"><i class="fa fa-fw fa-paper-plane"></i><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="updateCategoryModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Update Category'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.category.subcategory.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="form-control-label font-weight-bold"><?php echo app('translator')->get('Name'); ?></label>
                            <input type="text" class="form-control form-control-lg" name="name" placeholder="<?php echo app('translator')->get("Enter Name"); ?>"  maxlength="100" required="">
                        </div>

                        <div class="form-group">
                            <label for="category_id" class="form-control-label font-weight-bold"><?php echo app('translator')->get('Select Category'); ?></label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option><?php echo app('translator')->get('Select Category'); ?></option>
                                <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e(__($category->name)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="symbol" class="form-control-label font-weight-bold"><?php echo app('translator')->get('Image'); ?></label>
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="customFileLangHTML">
                              <label class="custom-file-label" for="customFileLangHTML" data-browse="<?php echo app('translator')->get('Choose Image'); ?>"><?php echo app('translator')->get('Image'); ?></label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn--primary"><i class="fa fa-fw fa-paper-plane"></i><?php echo app('translator')->get('Update'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="javascript:void(0)" class="btn btn-sm btn--primary box--shadow1 text--small addCategory" ><i class="las la-plus"></i><?php echo app('translator')->get('Add Sub Category'); ?></a>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        $('.addCategory').on('click', function() {
            $('#addModal').modal('show');
        });

        $('.updateCategory').on('click', function () {
            var modal = $('#updateCategoryModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.find('input[name=name]').val($(this).data('name'));
            modal.find('select[name=category_id]').val($(this).data('category_id'));
            modal.modal('show');
        });

         $(document).on("change",".custom-file-input",function(){
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abamela\core\resources\views/admin/category/sub_index.blade.php ENDPATH**/ ?>
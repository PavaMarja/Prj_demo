<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.productCategory.title')); ?>

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.product-categories.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.productCategory.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($productCategory->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.productCategory.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($productCategory->name); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.productCategory.fields.description')); ?>

                        </th>
                        <td>
                            <?php echo e($productCategory->description); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.productCategory.fields.photo')); ?>

                        </th>
                        <td>
                            <?php if($productCategory->photo): ?>
                                <a href="<?php echo e($productCategory->photo->getUrl()); ?>" target="_blank" style="display: inline-block">
                                    <img src="<?php echo e($productCategory->photo->getUrl('thumb')); ?>">
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.product-categories.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pmarjano/osobniportal/resources/views/admin/productCategories/show.blade.php ENDPATH**/ ?>
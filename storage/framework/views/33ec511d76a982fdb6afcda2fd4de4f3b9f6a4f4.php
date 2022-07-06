<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.contentPage.title')); ?>

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.content-pages.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.contentPage.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($contentPage->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.contentPage.fields.title')); ?>

                        </th>
                        <td>
                            <?php echo e($contentPage->title); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.contentPage.fields.category')); ?>

                        </th>
                        <td>
                            <?php $__currentLoopData = $contentPage->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label label-info"><?php echo e($category->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.contentPage.fields.tag')); ?>

                        </th>
                        <td>
                            <?php $__currentLoopData = $contentPage->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label label-info"><?php echo e($tag->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.contentPage.fields.page_text')); ?>

                        </th>
                        <td>
                            <?php echo $contentPage->page_text; ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.contentPage.fields.excerpt')); ?>

                        </th>
                        <td>
                            <?php echo e($contentPage->excerpt); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.contentPage.fields.featured_image')); ?>

                        </th>
                        <td>
                            <?php if($contentPage->featured_image): ?>
                                <a href="<?php echo e($contentPage->featured_image->getUrl()); ?>" target="_blank" style="display: inline-block">
                                    <img src="<?php echo e($contentPage->featured_image->getUrl('thumb')); ?>">
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.content-pages.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pmarjano/osobniportal/resources/views/admin/contentPages/show.blade.php ENDPATH**/ ?>
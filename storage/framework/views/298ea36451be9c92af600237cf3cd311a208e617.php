<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.currency.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.currencies.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="name"><?php echo e(trans('cruds.currency.fields.name')); ?></label>
                <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text" name="name" id="name" value="<?php echo e(old('name', '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.currency.fields.name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="code"><?php echo e(trans('cruds.currency.fields.code')); ?></label>
                <input class="form-control <?php echo e($errors->has('code') ? 'is-invalid' : ''); ?>" type="text" name="code" id="code" value="<?php echo e(old('code', '')); ?>" required>
                <?php if($errors->has('code')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('code')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.currency.fields.code_helper')); ?></span>
            </div>
            <div class="form-group">
                <div class="form-check <?php echo e($errors->has('main_currency') ? 'is-invalid' : ''); ?>">
                    <input type="hidden" name="main_currency" value="0">
                    <input class="form-check-input" type="checkbox" name="main_currency" id="main_currency" value="1" <?php echo e(old('main_currency', 0) == 1 ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="main_currency"><?php echo e(trans('cruds.currency.fields.main_currency')); ?></label>
                </div>
                <?php if($errors->has('main_currency')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('main_currency')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.currency.fields.main_currency_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pmarjano/osobniportal/resources/views/admin/currencies/create.blade.php ENDPATH**/ ?>
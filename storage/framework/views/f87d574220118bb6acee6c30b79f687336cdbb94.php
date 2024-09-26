<?php $__env->startSection('title', 'ویرایش'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش</p>
                <form wire:submit.prevent="store" class="padding-10" role="form">
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">
                        <div class="form-group col-4">
                            <input wire:model.lazy="role.name" type="text" placeholder="عنوان سطح دسترسی" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <input wire:model.lazy="role.latinName" type="text" placeholder="نام لاتین سطح دسترسی" class="form-control">
                        </div>
                        <div class="form-group col-4 mb-2">
                            <select wire:model="permission_id" wire:change="addId" class="form-control">
                                <option value="">دسترسی های مجاز</option>
                                <?php $__currentLoopData = $permissions->groupBy('sectionName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="" disabled class="bg-secondary text-white"><?php echo e($key); ?></option>
                                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>">
                                            <?php echo e($item->operationName); ?> <?php echo e($item->sectionName); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($role->permissions_count > 0): ?>
                                <div class="alert">
                                    <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="badge border text-dark mb-2">
                                            <i wire:click="deleteId(<?php echo e($item->id); ?>)"
                                               class="bi bi-x font-size-15 cursor-pointer"></i>
                                            <?php echo e($item->operationName); ?> <?php echo e($item->sectionName); ?>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/role/update.blade.php ENDPATH**/ ?>
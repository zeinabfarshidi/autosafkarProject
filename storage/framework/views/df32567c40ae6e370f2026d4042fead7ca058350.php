<?php $__env->startSection('title', 'سطوح دسترسی'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e(request()->routeIs('roles.index') ? 'is-active' : ''); ?>"
                   href="<?php echo e(route('roles.index')); ?>"><?php echo $__env->yieldContent('title'); ?></a>
                |
                <a class="tab__item"><?php echo e(__('app.search')); ?> </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
                <a href="<?php echo e(route('roles.trashed')); ?>" class="tab__item btn btn-danger text-white float-end mt-2">
                    سطل زباله (<?php echo e(\App\Models\Role::onlyTrashed()->count()); ?>)
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>سطح کاربری</th>
                            <th>نام لاتین</th>
                            <th>دسترسی های مجاز</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr role="row">
                                    <td><?php echo e($role->name); ?></td>
                                    <td><?php echo e($role->latinName); ?></td>
                                    <td>
                                        <?php if($role->latinName != 'admin'): ?>
                                            <select class="form-control">
                                                <option>مشاهده</option>
                                                <?php $__currentLoopData = $role->permissions->groupBy('sectionName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option disabled class="bg-secondary text-white"><?php echo e($key); ?></option>
                                                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option disabled>
                                                            <?php echo e($item->operationName); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button wire:click="delete(<?php echo e($role->id); ?>)"
                                                class="mlg-15 cursor-pointer" id="delete<?php echo e($role->id); ?>"
                                                title="حذف"></button>
                                        <a onclick="deleteItem(event, <?php echo e($role->id); ?>)"
                                           class="item-delete mlg-15 cursor-pointer"
                                           title="حذف"></a>
                                        <a href="<?php echo e(route('roles.update', $role->id)); ?>" class="item-edit "
                                           title="ویرایش"></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <?php echo e($roles->render()); ?>

                        <?php else: ?>
                            <div class="alert-loading"><?php echo e(__('app.loading')); ?></div>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white">
                <p class="box__title">افزودن</p>
                <form wire:submit.prevent="store" class="padding-10" role="form">
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="role.name" type="text" placeholder="عنوان سطح دسترسی"
                               class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="role.latinName" type="text" placeholder="نام لاتین سطح دسترسی"
                               class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <select wire:model="permission_id" wire:change="addId" class="form-control">
                            <option value="">دسترسی های مجاز</option>
                            <?php $__currentLoopData = $permissions->groupBy('sectionName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="" disabled class="bg-secondary text-white"><?php echo e($key); ?></option>
                                <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->operationName); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if(count($ids) > 0): ?>
                            <div class="alert">
                                <?php $__currentLoopData = $ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="badge border text-dark mb-2">
                                        <i wire:click="deleteId(<?php echo e(\App\Models\Permission::find($id)->id); ?>)"
                                           class="bi bi-x font-size-15 cursor-pointer"></i>
                                        <?php echo e(\App\Models\Permission::find($id)->operationName); ?> <?php echo e(\App\Models\Permission::find($id)->sectionName); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/role/index.blade.php ENDPATH**/ ?>
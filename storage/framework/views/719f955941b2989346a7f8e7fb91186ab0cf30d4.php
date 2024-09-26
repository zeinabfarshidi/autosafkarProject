<?php $__env->startSection('title', 'مناطق'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item" href="<?php echo e(route('state.index')); ?>">استانها</a>
                <a class="tab__item" href="<?php echo e(route('city.index')); ?>">شهرها</a>
                <a class="tab__item is-active" href="<?php echo e(route('area.index')); ?>"><?php echo $__env->yieldContent('title'); ?></a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20" placeholder="جستجو...">
                    </form>
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>منطقه</th>
                            <th>شهر</th>
                            <th>استان</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr role="row">
                                    <td><?php echo e($area->name); ?></td>
                                    <td><?php echo e($area->city->name); ?></td>
                                    <td><?php echo e($area->city->state->name); ?></td>
                                    <td>
                                        <div class="d-flex jsc-center alc-center">
                                            <a wire:click="delete(<?php echo e($area->id); ?>)" class="item-delete mlg-15" title="حذف"></a>
                                            <a href="<?php echo e(route('area.update', $area->id)); ?>" class="item-edit" title="ویرایش"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <?php echo e($areas->render()); ?>

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
                        <select wire:model.lazy="area.city_id" name="city_id" class="form-control">
                            <option value="">انتخاب شهر</option>
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="area.name" type="text" placeholder="نام منطقه" class="form-control">
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/area/index.blade.php ENDPATH**/ ?>
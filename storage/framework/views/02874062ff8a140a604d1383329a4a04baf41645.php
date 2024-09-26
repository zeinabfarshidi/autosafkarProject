<?php $__env->startSection('title', 'اشتراک'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e(request()->routeIs('subscribe.index') ? 'is-active' : ''); ?>" href="<?php echo e(request()->url()); ?>">
                    <?php echo $__env->yieldContent('title'); ?>
                </a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20" placeholder="جستجو...">
                    </form>
                </a>
                <a href="<?php echo e(route('category.trashed')); ?>" class="tab__item btn btn-danger text-white float-end mt-2">
                    سطل زباله (<?php echo e(\App\Models\Category::onlyTrashed()->count()); ?>)
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>اشتراک</th>
                            <th>قیمت</th>
                            <th>دسترسی های مجاز</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php $__currentLoopData = $subscribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr role="row">
                                    <td><?php echo e($subscribe->name); ?></td>
                                    <td><?php echo e($subscribe->price); ?></td>
                                    <td>
                                        <select class="form-control">
                                            <option>مشاهده</option>
                                            <?php $__currentLoopData = $subscribe->permissions->groupBy('sectionName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option disabled class="bg-secondary text-white"><?php echo e($key); ?></option>
                                                <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option disabled>
                                                        <?php echo e($item->operationName); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </td>
                                    <td>
                                        <button wire:click="delete(<?php echo e($subscribe->id); ?>)"
                                                class="mlg-15 cursor-pointer" id="delete<?php echo e($subscribe->id); ?>"
                                                title="حذف"></button>
                                        <a onclick="deleteItem(event, <?php echo e($subscribe->id); ?>)"
                                           class="item-delete mlg-15 cursor-pointer"
                                           title="حذف"></a>
                                        <a href="<?php echo e(route('category.update', $subscribe->id)); ?>" class="item-edit " title="ویرایش"></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <?php echo e($subscribes->render()); ?>

                        <?php else: ?>
                            <div class="alert-loading"><?php echo e(__('app.loading')); ?></div>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white pb-5 h-fit-content">
                <p class="box__title">ایجاد اشتراک</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="subscribe.name" type="text" placeholder="نام" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="subscribe.price" type="text" placeholder="قیمت" class="form-control">
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
                    <div class="form-group mb-2">
                        <textarea wire:model.lazy="subscribe.description" class="form-control" placeholder="توضیحات"></textarea>
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', ()=>{
            let progressSection = document.querySelector('#progressbar'),
                progressBar = document.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', ()=>{
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', ()=>{
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', ()=>{
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event)=>{
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });
        })
    </script>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/subscribe/index.blade.php ENDPATH**/ ?>
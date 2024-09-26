<?php $__env->startSection('title', 'کاربران'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e(request()->routeIs('ad.index') ? 'is-active' : ''); ?>" href="<?php echo e(route('ad.index')); ?>"><?php echo $__env->yieldContent('title'); ?></a>
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
                            <th>نام</th>
                            <th>ایمیل</th>
                            <th>شماره موبایل</th>
                            <th>سطح کاربری</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr role="row">
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->mobile); ?></td>
                                    <td>
                                        <?php if($user->role): ?>
                                            <?php echo e($user->role->name); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo e(asset('storage/' . $user->img)); ?>" class="border-radius-3" width="100" height="100" alt="img">
                                    </td>
                                    <td>
                                        <a wire:click="delete(<?php echo e($user->id); ?>)" class="item-delete mlg-15" title="حذف"></a>
                                        <a href="<?php echo e(route('user.update', $user->id)); ?>" class="item-edit " title="ویرایش"></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <?php echo e($users->render()); ?>

                        <?php else: ?>
                            <div class="alert-loading"><?php echo e(__('app.loading')); ?></div>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white">
                <p class="box__title">افزودن کاربر جدید</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.name" type="text" placeholder="نام" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.email" type="text" placeholder="ایمیل" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.mobile" type="text" placeholder="شماره موبایل" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <select wire:model.lazy="user.role_id" name="role_id" class="form-control">
                            <option value="">سطح دسترسی</option>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>



















                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.pass" type="password" placeholder="رمز عبور" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" wire:model.lazy="img" class="form-control">
                        <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                        <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                            <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                        </div>
                    </div>
                    <div>
                        <?php if($img): ?>
                            <img src="<?php echo e($img->temporaryUrl()); ?>" width="400" alt="" class="form-control mt-3 mb-3">
                        <?php endif; ?>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/user/index.blade.php ENDPATH**/ ?>
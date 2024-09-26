<?php $__env->startSection('title', 'بنرهای تبلیغاتی'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e(request()->routeIs('adCategory.index') ? 'is-active' : ''); ?>" href="<?php echo e(request()->url()); ?>">
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
                            <th><?php echo $__env->yieldContent('title'); ?></th>
                            <td>آدرس لینک</td>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr role="row">
                                    <td><img src="<?php echo e(asset('storage/' . $banner->img)); ?>" width="100" alt="img"></td>
                                    <td><a href="<?php echo e($banner->link); ?>" target="_blank"><?php echo e($banner->link); ?></a></td>
                                    <td>
                                        <button wire:click="delete(<?php echo e($banner->id); ?>)"
                                                class="mlg-15 cursor-pointer" id="delete<?php echo e($banner->id); ?>"
                                                title="حذف"></button>
                                        <a onclick="deleteItem(event, <?php echo e($banner->id); ?>)"
                                           class="item-delete mlg-15 cursor-pointer"
                                           title="حذف"></a>
                                        <a href="<?php echo e(route('banner.update', $banner->id)); ?>" class="item-edit " title="ویرایش"></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <?php echo e($banners->render()); ?>

                        <?php else: ?>
                            <div class="alert-loading"><?php echo e(__('app.loading')); ?></div>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white pb-5 h-fit-content">
                <p class="box__title">افزودن دسته بندی جدید</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group mb-3">
                        <input type="text" wire:model.lazy="banner.link" class="form-control" placeholder="آدرس لینک">
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
                    <button class="btn btn-brand mt-3">آپلود</button>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/banner/index.blade.php ENDPATH**/ ?>
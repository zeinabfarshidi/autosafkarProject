<?php $__env->startSection('title', 'ویرایش'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white">
                <p class="box__title"><?php echo $__env->yieldContent('title'); ?></p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">
                        <div class="form-group col-6 mb-2">
                            <input wire:model.lazy="adCategory.name" type="text" placeholder="نام" class="form-control">
                        </div>
                        <div class="form-group col-6 mb-2">
                            <input wire:model.lazy="adCategory.latinName" type="text" placeholder="نام لاتین"
                                   class="form-control">
                        </div>
                        <div class="form-group col-6 mb-2">
                            <select wire:model.lazy="adCategory.ad_category_id" name="ad_category_id"
                                    class="form-control">
                                <option value="">انتخاب دسته بندی والد</option>
                                <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($parent->id); ?>"><?php echo e($parent->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <input type="file" wire:model.lazy="img" class="form-control">
                            <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                            <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 box-img">
                        <?php if($img): ?>
                            <img src="<?php echo e($img->temporaryUrl()); ?>" alt="" class="form-control mt-3 mb-3">
                        <?php else: ?>
                            <img src="<?php echo e(asset('storage/' . $adCategory->img)); ?>" width="400" alt=""
                                 class="form-control mt-3 mb-3">
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-2">
                        <textarea wire:model.lazy="adCategory.description" class="form-control"
                                  placeholder="توضیحات"><?php echo $adCategory->description; ?></textarea>
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = document.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', () => {
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });
        })
    </script>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/ad-category/update.blade.php ENDPATH**/ ?>
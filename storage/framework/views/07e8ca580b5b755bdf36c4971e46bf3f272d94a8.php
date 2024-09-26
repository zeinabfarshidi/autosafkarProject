<?php $__env->startSection('title', 'ویرایش کاربر'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش</p>
                <form wire:submit.prevent="store" class="padding-10" role="form">
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <dic class="row">
                        <div class="form-group col-4">
                            <input wire:model.lazy="user.name" type="text" placeholder="نام" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <input wire:model.lazy="user.email" type="text" placeholder="ایمیل" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <input wire:model.lazy="user.mobile" type="text" placeholder="شماره موبایل" class="form-control">
                        </div>
                        <div class="form-group col-4 mt-3">
                            <select wire:model.lazy="user.role_id" name="role_id" id="" class="form-control">
                                <option value="">سطح دسترسی</option>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-4 mt-3">
                            <input wire:model="password" type="password" placeholder="رمز عبور" class="form-control">
                        </div>
                        <div class="form-group col-4 mt-3">
                            <input type="file" wire:model.lazy="img" class="form-control">
                            <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                            <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                            </div>
                            <?php if($img): ?>
                                <img src="<?php echo e($img->temporaryUrl()); ?>" width="400" alt="" class="form-control mt-3 mb-3">
                            <?php endif; ?>
                        </div>
                    </dic>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/user/update.blade.php ENDPATH**/ ?>
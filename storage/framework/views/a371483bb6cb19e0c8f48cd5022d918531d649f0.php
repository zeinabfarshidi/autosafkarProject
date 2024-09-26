<?php $__env->startSection('title', 'نوشتن مقاله'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row">
            <div class="col-12 bg-white pb-5">
                <p class="box__title"><?php echo $__env->yieldContent('title'); ?></p>
                <form action="<?php echo e(route('posts.store')); ?>" method="post" class="padding-10" enctype="multipart/form-data" role="form">
                    <?php echo csrf_field(); ?>
                    <div class="row w-div-32 mb-3 jsc-space-between">
                        <div class="mb-3">
                            <input type="text" name="title" placeholder="عنوان مقاله"
                                   class="form-control">
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger mt-2 font-size-12"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div>
                            <select wire:model="category_id" wire:change="categoryPost" class="form-control mb-3">
                                <option value="">انتخاب دسته بندی</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e($category->id); ?>" <?php echo e($category->id == $category->category_id ? 'selected' : ''); ?>>
                                        <?php echo e($category->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['categories'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger mt-2 font-size-12"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php if(count($categoryArr) > 0): ?>
                                <div class="alert">
                                    <?php $__currentLoopData = $categoryArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item): ?>
                                            <div class="badge border text-dark mb-2">
                                                <i wire:click="deleteCategory(<?php echo e($item['id']); ?>)"
                                                   class="bi bi-x font-size-15 cursor-pointer"></i>
                                                <?php echo e($item['name']); ?>

                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                            <input type="hidden" name="categories" value="<?php echo e(json_encode($categoryArr)); ?>" class="form-control ">
                        </div>
                        <div>
                            <div>
                                <input type="file" wire:model.lazy="img" name="img" class="form-control">
                                <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                                <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                                </div>
                            </div>
                            <div>
                                <?php if($img): ?>
                                    <img src="<?php echo e($img->temporaryUrl()); ?>" width="400" alt="" class="form-control mt-3 mb-3 border-0">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div wire:ignore>
                        <textarea class="form-control" name="text" id="content"></textarea>
                        <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger mt-2 font-size-12"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button class="btn btn-brand mt-3 mb-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
     <?php $__env->slot('scripts', null, []); ?> 
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('text', {
                language: 'fa',
                filebrowserUploadUrl: '<?php echo e(route("editor-upload", ["_token"=>csrf_token()])); ?>',
                filebrowserUploadMethod: 'form',
            })



            
            
            
            
            
            
            
            
            
            
            
            
        </script>
     <?php $__env->endSlot(); ?>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/post/create.blade.php ENDPATH**/ ?>
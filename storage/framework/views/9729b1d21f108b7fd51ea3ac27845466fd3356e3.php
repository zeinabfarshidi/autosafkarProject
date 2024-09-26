<?php $__env->startSection('title', 'مدارک فنی'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l2245717189-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2245717189-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2245717189-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2245717189-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2245717189-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header d-flex jsc-space-between alc-center mb-4">
                            <h1 class="form_title"><?php echo $__env->yieldContent('title'); ?></h1>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                           <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1">
                               <?php $__currentLoopData = $technicalDegrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <div class="card post_item position-relative">
                                       <div class="card-header p-0">
                                           <a href="<?php echo e(route('technical-degree.show', $item->id)); ?>" target="_blank">
                                               <img src="<?php echo e(asset('storage/' . $item->img)); ?>" alt="img">
                                           </a>
                                       </div>
                                       <div wire:click="delete(<?php echo e($item->id); ?>)" class="card-footer item-delete text-center bg-danger text-white"></div>
                                   </div>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                            <div class="border border-radius-3 post_form h-fit-content">
                                <p class="box__title border" style="background: lightgray !important;">ثبت مدرک فنی</p>
                                <form wire:submit.prevent="store" class="p-3" enctype="multipart/form-data" role="form">
                                    <div class="form-group">
                                        <input type="file" wire:model.lazy="img" id="img" class="form-control">
                                        <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="error"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                </div>
            </div>
        </div>
    </main>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/technical-degree/index.blade.php ENDPATH**/ ?>
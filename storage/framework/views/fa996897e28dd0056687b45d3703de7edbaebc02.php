<?php $__env->startSection('title', 'ورود به مناقصه '); ?>
<div>
    <main class="body">
        <div class="container post_container">
            <div class="card border-0">
                <div class="card-header border-0">
                    <h1 class="form_title"><?php echo $__env->yieldContent('title'); ?></h1>
                </div>
                <div class="card-body pt-0 border-0">
                    <form wire:submit.prevent="store()" class="post_form">
                        <button class="btn btn-primary mt-5">ورود به مناقصه</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/tender/create.blade.php ENDPATH**/ ?>
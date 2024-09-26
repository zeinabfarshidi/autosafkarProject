<?php $__env->startSection('title', 'ذخیره ها'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l638710950-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l638710950-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l638710950-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l638710950-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l638710950-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title"><?php echo $__env->yieldContent('title'); ?></h1>
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                <div class="table__box w-100" wire:init="loadInformation">
                                    <table class="table table_ad">
                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                            <?php if($likes): ?>
                                                <?php $__currentLoopData = $likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row">
                                                        <td><?php echo e($like->likeable->modelTitle()); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            </tbody>
                                            <?php echo e($likes->render()); ?>

                                        <?php else: ?>
                                            <div class="alert-loading"><?php echo e(__('app.loading')); ?></div>
                                        <?php endif; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/like/index.blade.php ENDPATH**/ ?>
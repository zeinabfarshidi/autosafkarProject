<?php $__env->startSection('title', 'مناقصه'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l59825321-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l59825321-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l59825321-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l59825321-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l59825321-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                                            <?php $__currentLoopData = $tenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($tender->order): ?>
                                                    <tr role="row">
                                                        <td class="td-ad-img">
                                                            <a href="<?php echo e(route('order.show', $tender->order->id)); ?>" target="_blank">
                                                                <img src="<?php echo e(asset('storage/' . $tender->order->img)); ?>" class="border-radius-3" alt="img">
                                                            </a>
                                                        </td>
                                                        <td class="td-ad-info">
                                                            <a href="<?php echo e(route('order.show', $tender->order->id)); ?>" class="title_h2" target="_blank">
                                                                <?php echo e($tender->order->problem); ?>

                                                                <p class="content_col mt-4"><?php echo $tender->order->description; ?></p>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($tenders->render()); ?>

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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/tender/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'درخواست های حذف شده'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l599144025-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l599144025-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l599144025-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l599144025-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l599144025-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title"><?php echo $__env->yieldContent('title'); ?></h1>
                                <a href="<?php echo e(route('order.trashed')); ?>" class="btn btn-danger text-white">سطل زباله (<?php echo e(\App\Models\Order::onlyTrashed()->count()); ?>)</a>
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                <div class="table__box w-100" wire:init="loadInformation">
                                    <table class="table table_ad">
                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row">
                                                    <td class="td-ad-img">
                                                        <?php if($order->img): ?>
                                                            <a href="<?php echo e(route('order.show', $order->id)); ?>" target="_blank">
                                                                <img src="<?php echo e(asset('storage/' . $order->img)); ?>" class="border-radius-3" alt="img">
                                                            </a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="td-ad-info">
                                                        <a href="<?php echo e(route('order.show', $order->id)); ?>" target="_blank" class="content_col">
                                                            <?php echo $order->description; ?>

                                                        </a>
                                                    </td>
                                                    <td class="position-relative">
                                                        <div class="position-absolute bottom-0 left-0 w-100">
                                                            <a wire:click="restore(<?php echo e($order->id); ?>)" class="cursor-pointer" title="بازیابی">
                                                                <i class="bi bi-arrow-counterclockwise"></i>
                                                            </a>
                                                            <button wire:click="delete(<?php echo e($order->id); ?>)"
                                                                    class="mlg-15 cursor-pointer" id="delete<?php echo e($order->id); ?>"
                                                                    title="حذف"></button>
                                                            <a onclick="deleteItem(event, <?php echo e($order->id); ?>)"
                                                               class="item-delete mlg-15 cursor-pointer"
                                                               title="حذف"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($orders->render()); ?>

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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/order/trashed.blade.php ENDPATH**/ ?>
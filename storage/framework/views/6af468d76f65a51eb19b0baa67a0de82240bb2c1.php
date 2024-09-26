<?php $__env->startSection('title', 'درخواست های من'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l1666380496-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1666380496-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1666380496-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1666380496-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1666380496-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                                            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row">
                                                    <td class="td-ad-img">
                                                        <?php if($request->img): ?>
                                                            <a href="<?php echo e(route('order.show', $request->id)); ?>" target="_blank">
                                                                <img src="<?php echo e(asset('storage/' . $request->img)); ?>" class="border-radius-3" alt="img">
                                                            </a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="td-ad-info">
                                                        <a href="<?php echo e(route('order.show', $request->id)); ?>" target="_blank" class="font-weight-bold">
                                                            <?php echo e($request->problem); ?>

                                                        </a>
                                                        <p class="content_col mt-3"><?php echo $request->description; ?></p>
                                                    </td>
                                                    <td class="position-relative">
                                                        <div class="position-absolute bottom-0 left-0 w-100">
                                                            <button wire:click="delete(<?php echo e($request->id); ?>)"
                                                                    class="mlg-15 cursor-pointer" id="delete<?php echo e($request->id); ?>"
                                                                    title="حذف"></button>
                                                            <a onclick="deleteItem(event, <?php echo e($request->id); ?>)"
                                                               class="item-delete mlg-15 cursor-pointer"
                                                               title="حذف"></a>
                                                            <a href="<?php echo e(route('order.update', $request->id)); ?>"
                                                               class="item-edit " title="ویرایش"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>

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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/request/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'سطل زباله'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l1732080150-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1732080150-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1732080150-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1732080150-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1732080150-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title"><?php echo $__env->yieldContent('title'); ?></h1>
                                <div>
                                    <a href="<?php echo e(route('ad.create')); ?>"
                                       class="btn btn-primary text-white d-flex jsc-space-between alc-center pt-0 pb-0 w-100">
                                        <i class="bi bi-plus ml-1 font-size-24"></i>
                                        <span>ثبت آگهی</span>
                                    </a>
                                    <a href="<?php echo e(route('ad.trashed')); ?>"
                                       class="btn btn-danger text-white float-end mt-2 mb-2 w-100">
                                        سطل زباله (<?php echo e(\App\Models\Ad::onlyTrashed()->count()); ?>)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                <div class="table__box w-100" wire:init="loadInformation">
                                    <table class="table table_ad">
                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                            <?php if($ads): ?>
                                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row">
                                                        <td class="td-ad-img">
                                                            <?php if($ad->adImages->where('originalPhoto', true)->first()): ?>
                                                                <a href="<?php echo e(route('ad.show', $ad->id)); ?>"
                                                                   target="_blank">
                                                                    <img
                                                                        src="<?php echo e(asset('storage/' . $ad->adImages->where('originalPhoto', true)->first()->img)); ?>"
                                                                        width="" alt="img">
                                                                </a>
                                                            <?php endif; ?>
                                                            <span class="badge font-size-14 <?php if($ad->status == 'تایید شده' ): ?>
                                                                    bg-success
                                                                <?php elseif($ad->status == 'رد شده'): ?>
                                                                    bg-danger
                                                                <?php else: ?>
                                                                    bg-primary
                                                                <?php endif; ?>">
                                                                <?php if($ad->status == 'تایید شده' ): ?>
                                                                    تایید شده
                                                                <?php elseif($ad->status == 'رد شده'): ?>
                                                                    رد شده
                                                                <?php else: ?>
                                                                    در انتطار تایید
                                                                <?php endif; ?>
                                                            </span>
                                                        </td>
                                                        <td class="td-ad-info">
                                                            <h2 class="title_h2"><a
                                                                    href="<?php echo e(route('ad.show', $ad->id)); ?>"
                                                                    target="_blank"><?php echo e($ad->title); ?></a></h2>
                                                            <p>
                                                                <time><?php echo e($ad->created_at_difference()); ?></time>
                                                            </p>
                                                            <p><?php echo e($ad->state->name . ' , ' . $ad->city->name . ' , ' . $ad->area->name); ?></p>
                                                            <strong>از <?php echo e($ad->minPrice); ?> تومان تا <?php echo e($ad->maxPrice); ?>

                                                                تومان</strong>
                                                        </td>
                                                        <td class="position-relative">
                                                            <div class="position-absolute bottom-0 left-0 w-100">
                                                                <button wire:click="delete(<?php echo e($ad->id); ?>)"
                                                                        class="mlg-15 cursor-pointer"
                                                                        id="delete<?php echo e($ad->id); ?>"
                                                                        title="حذف"></button>
                                                                <a onclick="deleteItem(event, <?php echo e($ad->id); ?>)"
                                                                   class="item-delete mlg-15 cursor-pointer"
                                                                   title="حذف"></a>
                                                                <a wire:click="restore(<?php echo e($ad->id); ?>)" class="item-checkouts" title="بازیابی"></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            </tbody>
                                            <?php if($ads): ?>
                                                <?php echo e($ads->render()); ?>

                                            <?php endif; ?>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/ad/trashed.blade.php ENDPATH**/ ?>
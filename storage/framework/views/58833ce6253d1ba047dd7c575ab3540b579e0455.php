<?php $__env->startSection('title', 'آگهی ها'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e($status == 'all' ? 'is-active' : ''); ?>" wire:click="all"><?php echo $__env->yieldContent('title'); ?></a>
                <a class="tab__item <?php echo e($status == 'تایید شده' ? 'is-active' : ''); ?>" wire:click="confirmed">آگهی های
                    تایید شده</a>
                <a class="tab__item <?php echo e($status == 'رد شده' ? 'is-active' : ''); ?>" wire:click="rejected">آگهی های رد
                    شده</a>
                <a class="tab__item <?php echo e($status == null ? 'is-active' : ''); ?>" wire:click="adAwaitingConfirmation">آگهی
                    های در انتظار تایید</a>
                <a class="tab__item <?php echo e($status == 'adsRemoved' ? 'is-active' : ''); ?>" wire:click="adsRemoved">
                    آگهی های حذف شده
                </a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table table_ad">
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php if($ads): ?>
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ad->adImages->where('originalPhoto', true)->first()): ?>
                                        <tr role="row">
                                            <td class="td-ad-img">
                                                <a href="<?php echo e(route('ad.show', $ad->id)); ?>" class="myAd">
                                                    <img
                                                        src="<?php echo e(asset('storage/' . $ad->adImages->where('originalPhoto', true)->first()->img)); ?>"
                                                        class="border-radius-3" alt="img">
                                                    <?php if($ad->upgrades->count() > 0): ?>
                                                        <div>
                                                            <?php $__currentLoopData = $ad->upgrades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upgrade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <span class="badge"><?php echo e($upgrade->title); ?></span>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </a>
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
                                                        href="<?php echo e(route('ad.show', $ad->id)); ?>"><?php echo e($ad->title); ?></a></h2>
                                                <p>
                                                    <time><?php echo e($ad->created_at_difference()); ?></time>
                                                </p>
                                                <p><?php echo e($ad->state->name . ' , ' . $ad->city->name . ' , ' . $ad->area->name); ?></p>
                                                <p><strong><?php echo e($ad->price); ?></strong> تومان</p>
                                            </td>
                                            <td class="position-relative">
                                                <?php if($status != 'adsRemoved'): ?>
                                                    <button wire:click="confirmation(<?php echo e($ad->id); ?>)"
                                                            class="btn p-2 border-radius-0 font-size-12 btn-success">تایید
                                                    </button>
                                                    <button wire:click="reject(<?php echo e($ad->id); ?>)"
                                                            class="btn p-2 border-radius-0 font-size-12 btn-danger">عدم
                                                        تایید
                                                    </button>
                                                    <button wire:click="awaitingConfirmation(<?php echo e($ad->id); ?>)"
                                                            class="btn p-2 border-radius-0 font-size-12 btn-primary">در
                                                        انتظار تایید
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/ad/index.blade.php ENDPATH**/ ?>
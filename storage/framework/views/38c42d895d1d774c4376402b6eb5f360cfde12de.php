<?php $__env->startSection('title', 'مدارک فنی کاربران'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e($status == 'all' ? 'is-active' : ''); ?>" wire:click="all"><?php echo $__env->yieldContent('title'); ?></a>
                <a class="tab__item <?php echo e($status == 'تایید شده' ? 'is-active' : ''); ?>" wire:click="confirmed">مدارک
                    تایید شده</a>
                <a class="tab__item <?php echo e($status == 'رد شده' ? 'is-active' : ''); ?>" wire:click="rejected">مدارک رد
                    شده</a>
                <a class="tab__item <?php echo e($status == null ? 'is-active' : ''); ?>" wire:click="adAwaitingConfirmation">
                    مدارک در انتظار تایید
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table table_ad">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>تصویر مدارک</th>
                            <th>کاربر</th>
                            <th>فعالیت اصلی</th>
                            <th></th>
                        </tr>
                        </thead>
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php if($technicalDegrees): ?>
                                <?php $__currentLoopData = $technicalDegrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $technicalDegree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr role="row">
                                        <td class="td-ad-img">
                                                <a href="<?php echo e(route('technical-degree.show', $technicalDegree->id)); ?>" target="_blank">
                                                    <img
                                                        src="<?php echo e(asset('storage/' . $technicalDegree->img)); ?>"
                                                        class="border-radius-3" alt="img">
                                                </a>
                                                <span class="badge font-size-14 <?php if($technicalDegree->status == 'تایید شده' ): ?>
                                                                    bg-success
                                                                <?php elseif($technicalDegree->status == 'رد شده'): ?>
                                                                    bg-danger
                                                                <?php else: ?>
                                                                    bg-primary
                                                                <?php endif; ?>">
                                                                <?php if($technicalDegree->status == 'تایید شده' ): ?>
                                                        تایید شده
                                                    <?php elseif($technicalDegree->status == 'رد شده'): ?>
                                                        رد شده
                                                    <?php else: ?>
                                                        در انتطار تایید
                                                    <?php endif; ?>
                                                            </span>
                                            </td>
                                        <td><?php echo e($technicalDegree->user->name); ?></td>
                                        <td>
                                            <?php if($technicalDegree->user->profile->adCategory): ?>
                                                <?php echo e($technicalDegree->user->profile->adCategory->name); ?>

                                            <?php endif; ?>
                                        </td>
                                            <td class="position-relative">
                                                <button wire:click="confirmation(<?php echo e($technicalDegree->id); ?>)"
                                                        class="btn p-2 border-radius-0 font-size-12 btn-success">تایید
                                                </button>
                                                <button wire:click="reject(<?php echo e($technicalDegree->id); ?>)"
                                                        class="btn p-2 border-radius-0 font-size-12 btn-danger">عدم
                                                    تایید
                                                </button>
                                                <button wire:click="awaitingConfirmation(<?php echo e($technicalDegree->id); ?>)"
                                                        class="btn p-2 border-radius-0 font-size-12 btn-primary">در
                                                    انتظار تایید
                                                </button>
                                            </td>
                                        </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </tbody>
                            <?php if($technicalDegrees): ?>
                                <?php echo e($technicalDegrees->render()); ?>

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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/technical-degree/index.blade.php ENDPATH**/ ?>
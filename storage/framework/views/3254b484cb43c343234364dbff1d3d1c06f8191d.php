<?php $__env->startSection('title', 'نظرات'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e($status == 'all' ? 'is-active' : ''); ?>" wire:click="all"><?php echo $__env->yieldContent('title'); ?></a>
                <a class="tab__item <?php echo e($status == 'تایید شده' ? 'is-active' : ''); ?>" wire:click="confirmed">تایید شده</a>
                <a class="tab__item <?php echo e($status == 'رد شده' ? 'is-active' : ''); ?>" wire:click="rejected">رد شده</a>
                <a class="tab__item <?php echo e($status == null ? 'is-active' : ''); ?>" wire:click="adAwaitingConfirmation">در انتظار تایید</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
                <a class="float-left">
                    <select wire:model="commentable_type" class="form-control">
                        <option value="">انتخاب نظرات هر قسمت</option>
                        <?php $__currentLoopData = \App\Models\Comment::groupBy('commentable_type')->get('commentable_type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="<?php echo e($item->commentable_type); ?>">
                                    <?php echo e($item->commentable_type::persiannameOfTheModel()); ?>

                                </option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <?php if($readyToLoad): ?>
                    <div class="bg-white p-3">
                        <?php echo e($comments->render()); ?>

                        <div class="table__box">
                            <table class="table">
                                <thead role="rowgroup">
                                <tr role="row" class="title-row">
                                    <th>فرستنده</th>
                                    <th>دریافت کننده</th>
                                    <th>دیدگاه</th>
                                    <th>تاریخ</th>
                                    <th>تعداد پاسخ ها</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr role="row">
                                        <td><?php echo e($comment->user->name); ?></td>
                                        <td><?php echo e($comment->commentable->user->name); ?></td>
                                        <td align="right"><?php echo $comment->text; ?></td>
                                        <td><?php echo e(verta($comment->created_at)->format('Y/m/d')); ?></td>
                                        <td><?php echo e($comment->comments->count()); ?></td>
                                        <td class="<?php if($comment->status == 'تایید شده'): ?> text-success <?php elseif($comment->status == 'رد شده'): ?> text-danger <?php else: ?> text-primary <?php endif; ?>">
                                            <?php if($comment->status): ?>
                                                <?php echo e($comment->status); ?>

                                            <?php else: ?>
                                                در انتظار تایید
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <button wire:click="delete(<?php echo e($comment->id); ?>)"
                                                    class="mlg-15 cursor-pointer" id="delete<?php echo e($comment->id); ?>"
                                                    title="حذف"></button>
                                            <a onclick="deleteItem(event, <?php echo e($comment->id); ?>, 'پاسخ های این کامنت هم حذف می شود')"
                                               class="item-delete mlg-15 cursor-pointer"
                                               title="حذف"></a>

                                            <a wire:click="reject(<?php echo e($comment->id); ?>)" class="item-reject mlg-15" title="رد"></a>

                                            <a href="<?php echo e(route('comment.show', $comment->id)); ?>" target="_blank" class="item-eye mlg-15"
                                               title="مشاهده"></a>

                                            <a wire:click="confirm(<?php echo e($comment->id); ?>)" class="item-confirm mlg-15" title="تایید"></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="alert-loading"><?php echo e(__('app.loading')); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/comment/index.blade.php ENDPATH**/ ?>
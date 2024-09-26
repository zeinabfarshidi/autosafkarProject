<?php $__env->startSection('title', 'مقالات'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item <?php echo e($status == 'all' ? 'is-active' : ''); ?>" wire:click="all"><?php echo $__env->yieldContent('title'); ?></a>
                <a class="tab__item <?php echo e($status == 'تایید شده' ? 'is-active' : ''); ?>" wire:click="confirmed">تایید
                    شده</a>
                <a class="tab__item <?php echo e($status == 'رد شده' ? 'is-active' : ''); ?>" wire:click="rejected">رد شده</a>
                <a class="tab__item <?php echo e($status == null ? 'is-active' : ''); ?>" wire:click="adAwaitingConfirmation">در
                    انتظار تایید</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
                <div class="float-end d-flex">
                    <?php if(\App\Http\Livewire\Admin\Dashboard\Sidebar::permissionToView($section, 'create')): ?>
                        <a href="<?php echo e(route('post.create')); ?>"
                           class="tab__item btn btn-primary text-white mt-2 d-flex alc-center pt-0 pb-0"
                           style="margin-left: 5px">
                            <i class="bi bi-plus ml-1 font-size-24"></i>
                            نوشتن مقاله
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo e(route('category.trashed')); ?>" class="tab__item btn btn-danger text-white mt-2">
                        سطل زباله (<?php echo e(\App\Models\Post::onlyTrashed()->count()); ?>)
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <?php if($readyToLoad): ?>
                    <div class="bg-white p-3">
                        <?php echo e($posts->render()); ?>

                        <div class="table__box">
                            <table class="table">
                                <thead role="rowgroup">
                                <tr role="row" class="title-row">
                                    <th>مقاله</th>
                                    <th>نویسنده</th>
                                    <th>تصویر</th>
                                    <th>تاریخ</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr role="row">
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e($post->user->name); ?></td>
                                        <td><img src="<?php echo e(asset('storage/' . $post->img)); ?>" width="100" alt=""></td>
                                        <td><?php echo e(verta($post->created_at)->format('Y/m/d')); ?></td>
                                        <td>
                                            <button wire:click="delete(<?php echo e($post->id); ?>)"
                                                    class="mlg-15 cursor-pointer" id="delete<?php echo e($post->id); ?>"></button>
                                            <a onclick="deleteItem(event, <?php echo e($post->id); ?>)"
                                               class="item-delete mlg-15 cursor-pointer"></a>

                                            <a href="<?php echo e(route('post.show', $post->id)); ?>" target="_blank"
                                               class="item-eye mlg-15"></a>

                                            <a href="<?php echo e(route('post.update', $post->id)); ?>" target="_blank"
                                               class="item-edit mlg-15"></a>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/post/index.blade.php ENDPATH**/ ?>
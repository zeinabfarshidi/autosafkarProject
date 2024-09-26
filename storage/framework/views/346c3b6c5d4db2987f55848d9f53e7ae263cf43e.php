<?php $__env->startSection('title', 'تیکت ها'); ?>
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a href="<?php echo e(route('tickets.index')); ?>" class="tab__item is-active"><?php echo $__env->yieldContent('title'); ?></a>
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
                        <thead role="rowgroup">
                        <tr class="title-row">
                            <th>بخش مربوطه</th>
                            <th>محتوای تیکت</th>
                            <th></th>
                        </tr>
                        </thead>
                        <?php if($readyToLoad): ?>
                            <tbody>
                            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr role="row">
                                    <td><?php echo e($ticket->ticketable->name()); ?></td>
                                    <td><?php echo $ticket->text; ?></td>
                                    <td class="position-relative">
                                        <div class="position-absolute bottom-0 left-0 w-100">
                                            <a href="<?php echo e(route('ticket.show', $ticket->id)); ?>"
                                               target="_blank"
                                               class="item-eye " title="مشاهده"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <?php if($tickets): ?>
                                <?php echo e($tickets->render()); ?>

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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/ticket/index.blade.php ENDPATH**/ ?>
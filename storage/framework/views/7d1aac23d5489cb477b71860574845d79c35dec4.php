<?php $__env->startSection('title', 'تیکت ها'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l1717696015-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1717696015-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1717696015-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1717696015-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1717696015-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                                            <thead role="rowgroup">
                                            <tr class="title-row">
                                                <th>بخش مربوطه</th>
                                                <th>محتوای تیکت</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if($tickets): ?>
                                                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row">
                                                        <td><?php echo e($ticket->ticketable->modelTitle()); ?></td>
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
                                            <?php endif; ?>
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
            </div>
        </div>
    </main>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/ticket/index.blade.php ENDPATH**/ ?>
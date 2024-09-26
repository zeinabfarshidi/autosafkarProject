<?php $__env->startSection('title', 'نظرات'); ?>
<div>
    <div class="single-page-container" style="margin-top: 200px" id="contents" wire:init="loadInformation">
        <div class="comments" id="comments">
            <h3 class="post-card-title"><?php echo e($comment->commentable->modelTitle()); ?></h3>
            <div class="comments__list">
                <?php echo $__env->make('livewire.home.comments.comment', $comment, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('livewire.home.comments.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/comment/show.blade.php ENDPATH**/ ?>
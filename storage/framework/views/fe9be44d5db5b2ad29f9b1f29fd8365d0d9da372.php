<div class="comments__subset  comment__id__confirmation">
    <div id="comment-4">
        <div class="comments__box">
            <div class="comments__inner">
                <div class="comments__header">
                    <div class="comments__row">
                        <div class="d-flex flex-grow-1">
                            <div class="comments__details d-flex alc-start" id="comments__details13">
                                <h5 class="comments__author ml-4 d-flex flex-direction-column">
                                <span class="comments__author-name font-weight-bold mb-2">
                                    <?php echo e($reply->user->name); ?>

                                </span>
                                    <span class="comments__author-name font-weight-bold">
                                    <?php echo e($reply->user->email); ?>

                                </span>
                                </h5>
                                <div class="answer__date">
                                    <span class="comments_date"><?php echo e($reply->created_at_difference()); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments__body">
                    <?php if($reply->score): ?>
                        <strong class=""><?php echo e($reply->score); ?> امتیاز</strong>
                    <?php endif; ?>
                    <p class="status__body font-size-13"><?php echo $reply->text; ?></p>
                    <a href="#comments">
                        <i wire:click="commentId(<?php echo e($reply->id); ?>)"
                           class="bi bi-reply-fill cursor-pointer" title="پاسخ"></i>
                    </a>
                    <?php if($reply->comments->where('status', 'تایید شده')->count() > 0): ?>
                        <span class="font-weight-bold showAnswer cursor-pointer"
                              onclick="showReplies(event, <?php echo e($reply->id); ?>)">
                            <i class="bi bi-chevron-down"></i>
                        نمایش <?php echo e($reply->comments->where('status', 'تایید شده')->count()); ?> پاسخ
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($reply->comments->where('status', 'تایید شده')->count() > 0): ?>
                <div class="d-none" id="replies<?php echo e($reply->id); ?>">
                    <?php $__currentLoopData = $reply->comments->where('status', 'تایید شده'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('livewire.home.comments.replies', ['reply' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/comments/replies.blade.php ENDPATH**/ ?>
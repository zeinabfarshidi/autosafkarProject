<div id="comment-13" class="comment__id__confirmation border-bottom pb-3">
    <div class="comments__box comments__subset_border-right">
        <div class="comments__inner">
            <div class="comments__header">
                <div class="comments__row">
                    <div class="d-flex flex-grow-1">
                        <div class="comments__details d-flex alc-start" id="comments__details13">
                            <h5 class="comments__author ml-4 d-flex flex-direction-column">
                                <span class="comments__author-name font-weight-bold mb-2">
                                    <?php echo e($comment->user->name); ?>

                                </span>
                                <span class="comments__author-name font-weight-bold">
                                    <?php echo e($comment->user->email); ?>

                                </span>
                            </h5>
                            <div class="answer__date">
                                <span class="comments_date"><?php echo e($comment->created_at_difference()); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comments__body">
                <?php if($comment->score): ?>
                    <strong class=""><?php echo e($comment->score); ?> امتیاز</strong>
                <?php endif; ?>
                <p class="font-size-13" id="content_reply_13">
                    <?php echo $comment->text; ?>

                </p>
                <a href="#comments">
                    <i wire:click="commentId(<?php echo e($comment->id); ?>)"
                       class="bi bi-reply-fill cursor-pointer" title="پاسخ"></i>
                </a>
                <?php if($comment->comments->where('status', 'تایید شده')->count() > 0): ?>
                    <span class="font-weight-bold showAnswer cursor-pointer"
                          onclick="showAnswer(event, <?php echo e($comment->id); ?>)">
                        <i class="bi bi-chevron-down"></i>
                        نمایش <?php echo e($comment->comments->where('status', 'تایید شده')->count()); ?> پاسخ
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <?php if($comment->comments->where('status', 'تایید شده')->count() > 0): ?>
            <div class="d-none" id="answers<?php echo e($comment->id); ?>">
                <?php $__currentLoopData = $comment->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('livewire.home.comments.replies', ['reply' => $reply], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/comments/comment.blade.php ENDPATH**/ ?>
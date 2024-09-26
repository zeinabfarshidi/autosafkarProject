<?php $__env->startSection('title', 'تیکت'); ?>
<div>
    <main class="body border-bottom" wire:init="loadInformation">
        <div class="single-page-container">
            <header class="postHeader">

                <div class="post-author">
                    <div class="post-author-img">
                        <?php if($ticket->user->img): ?>
                            <img alt="" src="<?php echo e(asset('storage/' . $ticket->user->img)); ?>">
                        <?php else: ?>
                            <img alt="" src="<?php echo e(asset('home/img/profile.jpg')); ?>">
                        <?php endif; ?>
                    </div>
                    <span><?php echo e($ticket->user->name); ?></span>
                </div>
                <div class="post-details mt-3">
                    <span class=""><?php echo e(verta($ticket->created_at)->format('Y/m/d')); ?></span>
                </div>
            </header>
            <div class="d-flex jsc-space-between alc-start single-page-post-content">
                <div class="single-page-right">
                    <div class="post-content">
                        <div class="post-content-text"><?php echo $ticket->text; ?></div>
                    </div>
                </div>
            </div>
            <?php if($ticket->tickets_count > 0): ?>
                <span class="font-weight-bold">پاسخ ها: </span>
                <?php $__currentLoopData = $ticket->tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="comment__id__confirmation pb-3 border-radius-3">
                        <div class="comments__box">
                            <div class="comments__inner">
                                <div class="comments__header">
                                    <div class="comments__row">
                                        <div class="d-flex flex-grow-1">
                                            <div class="comments__details" id="comments__details13">
                                                <div class="answer__date">
                                                    <span class="comments_date"><?php echo e($reply->created_at_difference()); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="comments__body font-size-13" id="content_reply_13"><?php echo $reply->text; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </main>

    <div class="single-page-container mb-5">
        <span class="font-weight-bold mb-3">پاسخ</span>
        <form wire:submit.prevent="store">
            <textarea wire:model="text" id="" cols="30" rows="10" class="form-control"
                      placeholder="پاسخ به تیکت"></textarea>
            <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="text-center">
                <button class="btn btn-primary mt-4 btn-primary-box-shadow">ارسال</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/ticket/show.blade.php ENDPATH**/ ?>
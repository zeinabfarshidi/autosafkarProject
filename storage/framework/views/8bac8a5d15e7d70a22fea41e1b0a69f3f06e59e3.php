<?php if(auth()->user()): ?>
    <div class="post-card mb-5" id="comments">
        <form wire:submit.prevent="store()">
            <?php echo csrf_field(); ?>
            <textarea wire:model="text" name="text" id="" cols="30" rows="10" class="form-control"
                      placeholder="نظر خود را بنویسید"></textarea>
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
            <div class="mt-5 text-center">
                <span class="font-weight-bold ml-3">امتیاز: </span>
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <i wire:click="scoreNumber(<?php echo e($i); ?>)"
                       class="bi ml-3 cursor-pointer <?php if($i <= $score): ?> text-orange bi-star-fill <?php else: ?> bi-star <?php endif; ?>"></i>
                <?php endfor; ?>
            </div>
            <?php $__errorArgs = ['score'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error mt-1 text-center"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="text-center">
                <button class="btn btn-primary mt-4 btn-primary-box-shadow">ثبت نظر</button>
            </div>
        </form>
    </div>
<?php else: ?>
    <div class="alert alert-primary mt-5 d-flex jsc-space-between alc-center">
        <p>برای ارسال نظر باید وارد سایت شوید</p>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary text-white">ورود به سایت</a>
    </div>
<?php endif; ?>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/comments/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'ورود'); ?>
<div>
    <main class="bg--white h-100-vh">
        <div class="container">
            <div class="sign-page">
                <div class="login__form pb-5">
                    <h1 class="sign-page__title">ورود/ثبت نام</h1>
                    <form class="sign-page__form" wire:submit.prevent="store">
                        <?php echo csrf_field(); ?>
                        <div>
                            <input type="text" wire:model.lazy="user.mobile" name="mobile" class="text text--right"
                                   placeholder="تلفن"/>
                            <?php $__errorArgs = ['user.mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="error"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php if($sendSMSMessage): ?>
                                <div class="alert alert-success" style="font-size: 12px"><?php echo $sendSMSMessage; ?></div>
                            <?php endif; ?>
                        </div>
                        <?php if($readyToLoad): ?>
                            <div>
                                <input type="text" wire:model.lazy="user.code" name="code" class="text text--right"
                                       placeholder="کد تایید"/>
                                <?php $__errorArgs = ['user.code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <p class="error"><?php echo e($error); ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($readyToLoadRegister): ?>
                            <div>
                                <input type="text" wire:model.lazy="user.name" class="text text--right"
                                       placeholder="نام و نام خانوادگی"/>
                                <?php $__errorArgs = ['user.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div>
                                <input type="password" wire:model.lazy="user.pass" name="password"
                                       class="text text--left"
                                       placeholder="رمز عبور"/>
                                <?php $__errorArgs = ['user.pass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div>
                                <input type="password" wire:model.lazy="user.pass_confirmation" class="text text--left"
                                       placeholder="تکرار رمز عبور"/>
                                <?php $__errorArgs = ['user.pass_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <?php $__errorArgs = ['user.role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="error"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php endif; ?>



                        <button class="btn btn-primary mt-3" type="submit">ورود</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/auth/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'حساب من'); ?>
<div>
    <main class="body">
        <div class="container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l1028396962-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1028396962-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1028396962-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1028396962-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1028396962-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="content">
                    <div class="card border-0 font-size-14">
                            <div class="card-header d-flex jsc-space-between alc-center">
                                <h1 class="form_title">پروفایل</h1>
                                <div class="alert alert-warning d-flex jsc-space-between alc-center alert-profile p-2">
                                    <p>اطلاعات پروفایل خود را کامل کنید</p>
                                    <a href="<?php echo e(route('profile.update')); ?>" class="text-primary font-weight-bold ">ویرایش</a>
                                </div>
                            </div>
                            <div class="card-body w-div-49 d-flex jsc-space-between">
                                <div>
                                    <div class="mb-3"><strong><?php echo e(auth()->user()->name); ?></strong></div>
                                    <div class="mb-3"><strong><?php echo e(auth()->user()->email); ?></strong></div>
                                    <div class="mb-3"><strong><?php echo e(auth()->user()->mobile); ?></strong></div>
                                </div>
                                <?php if(auth()->user()->profile && auth()->user()->profile->adCategory): ?>
                                    <div>
                                        <div class="mb-3">حوزه اصلی فعالیت: <strong>
                                                <?php echo e(auth()->user()->profile->adCategory->name); ?>

                                            </strong>
                                        </div>
                                        <div class="mb-3">
                                            حوزه فعالیت های فرعی:
                                            <p>
                                                <?php $__currentLoopData = auth()->user()->subActivities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subActivity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="badge bg-secondary p-2 font-weight-normal"><?php echo e($subActivity->title); ?></span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        </div>
                                        <div class="mb-3">ساعت کاری: <strong><?php echo e(auth()->user()->profile->workTime); ?></strong></div>
                                        <div class="mb-3">محدوده فعالیت: <strong>
                                                <?php echo e(auth()->user()->profile->state->name . ' , ' . auth()->user()->profile->city->name . ' , ' . auth()->user()->profile->area->name); ?>

                                            </strong></div>
                                        <div class="mb-3">
                                            <?php $__currentLoopData = auth()->user()->socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e($socialMedia->link); ?>" class="text-primary ml-3"><?php echo e($socialMedia->name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        توضیحات:
                                        <p><?php echo auth()->user()->profile->description; ?></p>
                                    </div>
                                    <div class="w-100">
                                        تمایز من:
                                        <p><?php echo auth()->user()->profile->myDistinction; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/profile/index.blade.php ENDPATH**/ ?>
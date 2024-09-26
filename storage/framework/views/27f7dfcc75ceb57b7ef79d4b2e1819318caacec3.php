<?php $__env->startSection('title', 'صفحه اصلی'); ?>
<div>
    <main class="body">
        <div class="landing_slider">
            <div class="d-flex container_slider_content">
                <div class="text_service">
                    <h1 class="services_title">صافکاری بی رنگ ماشین خارجی و داخلی</h1>
                    <h3 class="service_desc">کمترین قیمت صافکاری بی رنگ با دستگاه در ایران</h3>
                </div>
                <div class="service_btn">
                    <div class="d-flex jsc-end">
                        <div class="service_btn_box">
                            <div>
                                <a href="<?php echo e(route('ad.create')); ?>" class="button btn_warning">ثبت رایگان آگهی صافکاری یا
                                    تعمیرگاه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post_container mt-5" style="margin-bottom: 300px">
            <div class="d-flex jsc-start alc-center w-div-24">
                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card post_card cardAd ad-item box-shadow">
                        <div class="card-header p-0 position-relative">
                            <a href="<?php echo e(route('ad.show', $ad->id)); ?>" target="_blank" class="">
                                <img src="<?php echo e(asset('storage/' . $ad->adImages->where('originalPhoto', true)->first()->img)); ?>" alt="" class="" width="100%">
                                <?php if($ad->upgrades->count() > 0): ?>
                                    <div class="ad_upgrade_list">
                                        <?php $__currentLoopData = $ad->upgrades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upgrade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span><?php echo e($upgrade->title); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex jsc-space-between alc-center">
                                <span class="badge bg-primary"><?php echo e($ad->adCategory->name); ?></span>
                                <span class="badge bg-secondary"><?php echo e($ad->state->name); ?> / <?php echo e($ad->city->name); ?></span>
                                <span class="badge bg-success">مورد تایید</span>
                            </div>
                            <div class="post_content">
                                <h2 class="post_title">
                                    <a href="<?php echo e(route('ad.show', $ad->id)); ?>" class="" target="_blank"><?php echo e($ad->title); ?></a>
                                </h2>
                                <div class="d-flex jsc-space-between alc-center post_user">
                                    <div>متعلق به: <span><?php echo e($ad->user->name); ?></span></div>
                                </div>
                                <p class="post_description"><?php echo $ad->description; ?></p>
                                <div class="post_contact_us">
                                    <a class="btn btn-light border text-primary w-100">
                                        <i class="bi bi-telephone"></i>
                                        <?php echo e($ad->mobile); ?>

                                    </a>
                                    <a class="btn btn-light border text-primary">
                                        <i class="bi bi-geo-alt"></i>
                                        لوکیشن
                                    </a>
                                    <a class="btn btn-light border text-primary">
                                        <i class="bi bi-chat-dots"></i>
                                        چت
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <a class="text-primary w-auto"><i class="bi bi-suit-heart"></i></a>
                                <time class="font-size-12"><?php echo e($ad->created_at_difference()); ?></time>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


    </main>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', $adCategory->name); ?>
<div>
    <main class="body border-bottom" wire:init="loadInformation">
        <article class="single-page-container">
            <header class="postHeader">
                <h1 class="title_h"><?php echo e($adCategory->name); ?></h1>
                <div class="post-details">
                    <?php $__currentLoopData = $adCategory->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('adCategory.show', $children->id)); ?>" class="post-categories"><?php echo e($children->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <span class=""><?php echo e(verta($adCategory->created_at)->format('Y/m/d')); ?></span>
            </header>
            <div class="d-flex jsc-space-between alc-start single-page-post-content">
                <div class="single-page-right">
                    <div class="post-content">
                        <img src="<?php echo e(asset('storage/' . $adCategory->img)); ?>" alt="" class="mt-0">
                        <div class="post-content-text mt-4"><?php echo $adCategory->description; ?></div>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <div class="single-page-container mt-0 mb-5">
        <div class="slider mt-5">
            <div class="slider__head">
                <strong class="hottest-content-of-day-title">آگهی های <?php echo e($adCategory->name); ?></strong>
            </div>
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if($adCategory->ads_count > 0): ?>
                            <?php $__currentLoopData = $adCategory->ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="swiper-slide">
                                    <div class="slider__box">
                                        <div class="slider__image">
                                            <img src="<?php echo e(asset('storage/' . $ad->img)); ?>" class="slider__img"
                                                 alt="">
                                        </div>
                                        <div class="study-lists border">
                                            <span class="font-weight-bold"><?php echo e($ad->title); ?></span>
                                            <p>در این مجموعه‌ی مطالعاتی، جذاب‌ترین ترفندها و آموزش‌ها برای استفاده از نهایت
                                                پتانسیل گوشی اندرویدی‌تان را بیاموزید.</p>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            هیچ آگهی در این دسته بندی ثبت نشده است
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">&#10095</div>
            <div class="swiper-button-prev">&#10094</div>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/ad-category/show.blade.php ENDPATH**/ ?>
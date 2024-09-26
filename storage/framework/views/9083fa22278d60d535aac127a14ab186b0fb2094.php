<?php $__env->startSection('title', 'پروفایل ' . $user->name); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container">
            <div class="post-card basic-profile-information">
                <div class="d-flex jsc-space-between profile-info">
                    <div class="d-flex">
                        <div class="profile-img ml-4">
                            <?php if($user->img): ?>
                                <img src="<?php echo e(asset('storage/' . $user->img)); ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(asset('home/img/profile.jpg')); ?>" alt="">
                            <?php endif; ?>
                            <div class="user-id">کاربر شماره: <strong><?php echo e($user->id); ?></strong></div>
                        </div>
                        <div>
                            <div><h1 class="profile-title"><?php echo e($user->name); ?></h1></div>
                            <div>حوزه فعالیت: <?php if($user->profile->adCategory): ?>
                                    <strong><?php echo e($user->profile->adCategory->name); ?></strong>
                                <?php endif; ?></div>
                            <div>وضعیت کاربر: <strong><?php echo e($user->ads->count() > 0 ? 'فعال' : 'غیرفعال'); ?></strong></div>
                        </div>
                    </div>
                    <div class="profile-activity">
                        <div>امتیاز از نگاه مشتریان: <strong><?php echo e(round($user->profile->comments->avg('score'))); ?> از 5
                                امتیاز</strong></div>
                        <div>نوع اشتراک: <strong>طلایی</strong></div>
                        <div>تعداد آگهی: <strong><?php echo e($user->ads->count()); ?></strong></div>
                    </div>
                    <div class="btns-request">
                        <a href="<?php echo e(route('order.create', $user->id)); ?>" class="btn btn-primary text-white">
                            <i class="bi bi-check2-square"></i>
                            ثبت درخواست خدمات
                        </a>
                        <a <?php if(auth()->guard()->check()): ?> wire:click="ticket" <?php else: ?> href="<?php echo e(route('login')); ?>"  <?php endif; ?> class="btn btn-primary text-white"><i
                                class="bi bi-exclamation-triangle"></i> گزارش مشکل
                        </a>
                    </div>
                </div>
                <div class="profile-contact d-flex">
                    <div>
                        <ul>
                            <li class="li-profile-contact">
                                <a class="btn btn-light border text-primary">
                                    <i class="bi bi-telephone"></i>
                                    <?php echo e($user->mobile); ?>

                                </a>
                                <a class="btn btn-light border text-primary">
                                    <i class="bi bi-chat-dots"></i>
                                    چت
                                </a>
                                <a class="btn btn-light border text-primary">
                                    <i class="bi bi-geo-alt"></i>
                                    لوکیشن
                                </a>
                            </li>
                            <li class="d-flex jsc-space-between alc-start li-social-media">
                                <p>شبکه های اجتماعی:</p>
                                <div class="d-flex jsc-space-between alc-start flex-grow-1">
                                    <?php $__currentLoopData = $user->socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($socialMedia->name == 'telegram'): ?>
                                            <a href="<?php echo e($socialMedia->link); ?>" class="text-primary telegram" title="telegram"><i
                                                    class="bi bi-telegram"></i></a>
                                        <?php elseif($socialMedia->name == 'instagram'): ?>
                                            <a href="<?php echo e($socialMedia->link); ?>" class="instagram" title="instagram"><i class="bi bi-instagram"></i></a>
                                        <?php elseif($socialMedia->name == 'aparat'): ?>
                                            <a href="<?php echo e($socialMedia->link); ?>" class="text-primary video" title="aparat">
                                                <img alt="Aparat SVG Vector Icon" fetchpriority="high" width="250" height="250"
                                                     decoding="async" data-nimg="1" src="<?php echo e(asset('img/aparat.png')); ?>">
                                            </a>
                                        <?php elseif($socialMedia->name == 'youtube'): ?>
                                            <a href="<?php echo e($socialMedia->link); ?>" class="text-danger youtube" title="youtube"><i class="bi bi-youtube"></i></a>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex alc-start share jsc-end">
                        <a <?php if(auth()->user()): ?> wire:click="like" <?php else: ?> href="<?php echo e(route('login')); ?>" <?php endif; ?>
                        class="single-page__like ml-4 cursor-pointer
                              <?php if(auth()->user() && $user->profile->likes->where('user_id', auth()->user()->id)->first()): ?>
                               single-page__like--is-active
<?php endif; ?>"></a>
                        <a class="btn btn-light border-0 text-primary">
                            <i class="bi bi-share"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="profile-menu border-bottom">
                <ul>
                    <li><a href="#ad">آگهی ها</a></li>
                    <li><a href="#technicalDegrees">مدارک فنی</a></li>
                    <li><a href="#confirmations">تاییدیه ها</a></li>
                    <li><a href="#performance-statistics">آمار عملکرد</a></li>
                    <li><a href="#hours-and-scope-of-activity">ساعت و محدوده فعالیت</a></li>
                    <li><a href="#more-details">توضیحات بیشتر</a></li>
                    <li><a href="#exampleWorks">نمونه کارها</a></li>
                    <li><a href="#comments">نظرات</a></li>
                </ul>
            </div>
            <div class="slider card-view-page mt-5 profile-menu-responsive">
                <div class="slider__head">
                    <span class="slider__title"></span>
                </div>
                <div class="slider__content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        آگهی ها
                                    </div>
                                </div>
                            </a>
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        مدارک فنی
                                    </div>
                                </div>
                            </a>
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        تاییدیه ها
                                    </div>
                                </div>
                            </a>
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        آمار عملکرد
                                    </div>
                                </div>
                            </a>
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        ساعت و محدوده فعالیت
                                    </div>
                                </div>
                            </a>
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        توضیحات بیشتر
                                    </div>
                                </div>
                            </a>
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        نمونه کارها
                                    </div>
                                </div>
                            </a>
                            <a class="swiper-slide">
                                <div class="slider__box">
                                    <div
                                        class="slider__image d-flex jsc-center alc-center font-weight-bold text-dark slide-pmi">
                                        نظرات
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">&#10095</div>
                <div class="swiper-button-prev">&#10094</div>
            </div>
            <div class="slider card-view-page mt-5" id="ad">
                <div class="slider__head">
                    <span class="slider__title">آگهی ها</span>
                </div>
                <div class="slider__content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $user->ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ad->adImages->where('originalPhoto', true)->first()): ?>
                                    <a class="swiper-slide">
                                        <div class="slider__box">
                                            <div class="slider__image">
                                                <img
                                                    src="<?php echo e(asset('storage/' . $ad->adImages->where('originalPhoto', true)->first()->img)); ?>"
                                                    class="slider__img" alt="">
                                            </div>
                                            <strong class="mt-4"><?php echo e($ad->title); ?></strong>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">&#10095</div>
                <div class="swiper-button-prev">&#10094</div>
            </div>
            <div class="banner">
                <a href="<?php echo e($banners->first()->link); ?>">
                    <img src="<?php echo e(asset('storage/' . $banners->first()->img)); ?>" alt="">
                </a>
            </div>
            <div class="post-card">
                <div class="d-flex jsc-space-between alc-start w-div-49 flex-wrap">
                    <div id="technicalDegrees">
                        <h2 class="post-card-title">مدارک فنی</h2>
                        <div class="d-flex jsc-space-between alc-start w-div-32 flex-wrap documents">
                            <?php $__currentLoopData = $user->technicalDegrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $technicalDegree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <a href="<?php echo e(route('technical-degree.show', $technicalDegree->id)); ?>">
                                        <img src="<?php echo e(asset('storage/' . $technicalDegree->img)); ?>" alt="">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="confirmations">
                        <h2 class="post-card-title">تاییدیه ها</h2>
                        <div class="d-flex jsc-space-between alc-start w-div-32 flex-wrap documents">
                            <div><img src="<?php echo e(asset('storage/home/images/ad/1723974405_280x280.jpg')); ?>" alt=""></div>
                            <div><img src="<?php echo e(asset('storage/home/images/ad/1723974405_280x280.jpg')); ?>" alt=""></div>
                            <div><img src="<?php echo e(asset('storage/home/images/ad/1723974405_280x280.jpg')); ?>" alt=""></div>
                        </div>
                    </div>
                    <div id="performance-statistics">
                        <h2 class="post-card-title">آمار عملکرد</h2>
                        <ul>
                            <li>سابقه فعالیت: <span
                                    class="font-weight-bold">عضو اتوصافکار از تاریخ <?php echo e(verta($user->created_at)->format('Y/m/d')); ?></span>
                            </li>
                            <li>امتیاز کاربران:
                                <span class="font-weight-bold">
                                    <?php echo e(round($user->profile->comments->avg('score'))); ?> از 5 امتیاز
                                </span>
                            </li>
                            <li>حوزه های فعالیت: <span class="font-weight-bold">
                                    <?php if($user->profile->adCategory): ?>
                                        <?php echo e($user->profile->adCategory->name); ?>

                                    <?php endif; ?>
                                </span></li>
                            <li>تعداد خدمات: <span class="font-weight-bold"><?php echo e(count($requests)); ?></span></li>
                            <li>امتیاز سایت: <span class="font-weight-bold"></span></li>
                        </ul>
                    </div>
                    <div id="hours-and-scope-of-activity">
                        <h2 class="post-card-title">ساعت و محدوده فعالیت</h2>
                        <ul>
                            <li>ایام هفته: <span class="font-weight-bold"><?php echo e($user->profile->workTime); ?></span></li>
                            <li>ساعت: <span class="font-weight-bold"><?php echo e($user->profile->workTime); ?></span></li>
                            <li>محدوده فعالیت: <span class="font-weight-bold">
                                    <?php if($user->profile->state && $user->profile->city && $user->profile->area): ?>
                                        <?php echo e($user->profile->state->name . ' , ' . $user->profile->city->name . ' , ' . $user->profile->area->name); ?>

                                    <?php endif; ?>
                                </span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="banner">
                <a href="<?php echo e($banners->last()->link); ?>">
                    <img src="<?php echo e(asset('storage/' . $banners->last()->img)); ?>" alt="">
                </a>
            </div>
            <div class="pt-5 pb-5 ad-expiration">
                <p class="font-size-14" id="more-details">توضیحات بیشتر: </p>
                <p class="line-height-3 font-size-13">توضیحاتی را جب این کاربر</p>
                <div class="mt-4">
                    <p class="font-size-14">تمایز من: </p>
                    <p class="line-height-3 font-size-13">توضیحاتی راجب این کاربر</p>
                </div>
            </div>
            <?php if($user->example_works_count > 0): ?>
                <div class="slider card-view-page mt-5" id="exampleWorks">
                    <div class="slider__head">
                        <span class="slider__title">نمونه کارها</span>
                    </div>
                    <div class="slider__content">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $user->exampleWorks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exampleWork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="swiper-slide">
                                        <div class="slider__box">
                                            <div class="slider__image">
                                                <img src="<?php echo e(asset('storage/' . $exampleWork->img)); ?>"
                                                     class="slider__img"
                                                     alt="">
                                            </div>
                                            <strong class="mt-4"><?php echo e($exampleWork->title); ?></strong>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next">&#10095</div>
                    <div class="swiper-button-prev">&#10094</div>
                </div>
            <?php endif; ?>
            <?php if($user->profile->adCategory): ?>
                <div class="slider card-view-page mt-5">
                    <div class="slider__head">
                        <span class="slider__title">کاربران فعال در صافکاری - نقاشی</span>
                    </div>
                    <div class="slider__content">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $user->profile->adCategory->profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="swiper-slide">
                                        <div class="slider__box">
                                            <div class="slider__image">
                                                <img src="<?php echo e(asset('storage/' . $profile->user->img)); ?>"
                                                     class="slider__img" alt="">
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next">&#10095</div>
                    <div class="swiper-button-prev">&#10094</div>
                </div>
            <?php endif; ?>

            <?php if($comments->count() > 0): ?>
                <div class="container post-card" id="contents">
                    <div class="comments" id="comments">
                        <h3 class="post-card-title">نظر کاربران</h3>
                        <div class="comments__list">
                            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('livewire.home.comments.comment', $comment, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php echo $__env->make('livewire.home.comments.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php if($formTicket): ?>
            <div class="swalContainer">
                <div class="swalConfirm d-flex jsc-center alc-center">
                    <div class="card bg-white">
                        <div class="card-header d-flex jsc-space-between alc-center pb-3">
                            <h2 class="swalConfirmTitle">مشکل چیست؟</h2>
                            <span class="font-size-24 cursor-pointer" wire:click="close">x</span>
                        </div>
                        <div class="card-body p-0">
                            <form wire:submit.prevent="sendTicket()">
                            <textarea wire:model="text"
                                      class="form-control mt-3 textarea font-size-13" placeholder="بنویسید">
                            </textarea>
                                <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger font-size-12 mt-2"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <button class="btn btn-danger w-100 mt-4">
                                    تایید
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/profile/show.blade.php ENDPATH**/ ?>
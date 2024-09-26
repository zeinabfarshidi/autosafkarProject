<?php $__env->startSection('title', $ad->title); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container">
            <div class="card post-card post-card-responsive">
                <div class="card-header border-0"><h1 class="listing-title text-center"><?php echo e($ad->title); ?></h1></div>
                <div class="card-body">
                    <div class="w-div-49 listing-ad-info">
                        <div class="d-flex jsc-start flex-direction">
                            <div>ارسال شده توسط: <strong><?php echo e($ad->user->name); ?></strong></div>
                            <div>
                                <nav class="nav-ad">
                                    <ul class="d-flex jsc-start alc-center">
                                        <li class="d-flex alc-center jsc-start">
                                            <a href=""><?php echo e($ad->state->name); ?></a>
                                        </li>
                                        <li class="d-flex alc-center jsc-start">
                                            <i class="bi bi-chevron-left"></i>
                                            <a href=""><?php echo e($ad->city->name); ?></a>
                                        </li>
                                        <li class="d-flex alc-center jsc-start">
                                            <i class="bi bi-chevron-left"></i>
                                            <a href=""><?php echo e($ad->area->name); ?></a>
                                        </li>
                                        <li class="d-flex alc-center jsc-start">
                                            <i class="bi bi-chevron-left"></i>
                                            <a href="" class=""><?php echo e($ad->adCategory->name); ?></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="text-left">
                            <div class="btns-request">
                                <a wire:click="requestRegister"
                                   class="btn btn-primary text-white">
                                    <i class="bi bi-check2-square"></i>
                                    ثبت درخواست خدمات
                                </a>
                                <a <?php if(auth()->guard()->check()): ?> wire:click="ticket" <?php else: ?> href="<?php echo e(route('login')); ?>" <?php endif; ?> class="btn btn-primary text-white"><i
                                        class="bi bi-exclamation-triangle"></i> گزارش مشکل
                                </a>
                            </div>
                            <div class="ad-viewing-info">
                                <div>بازدیدها: <strong><?php echo e($ad->views); ?></strong></div>
                                <div>تاریخ انتشار: <strong><?php echo e(verta($ad->created_at)->format('Y/m/d')); ?></strong></div>
                                <div>کد آگهی: <strong><?php echo e($ad->id); ?></strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-light border text-primary bg-white"><i
                                class="bi bi-telephone"></i> <?php echo e($ad->mobile); ?>

                        </a>
                        <a class="btn btn-light border text-primary bg-white"><i class="bi bi-chat-dots"></i> چت</a>
                        <a href="#price-work" class="btn btn-light border text-primary bg-white"><i
                                class="i-my__purchases"></i>
                            قیمت انجام کار</a>
                        <a href="#description" class="btn btn-light border text-primary bg-white"><i
                                class="bi bi-chat-left-text"></i> توضیحات</a>
                        <a href="<?php echo e(route('profile.show', $ad->user->id)); ?>"
                           class="btn btn-light border text-primary bg-white"
                           target="_blank">
                            <i class="bi bi-person"></i>
                            مشاهده پروفایل
                        </a>
                        <a href="#location" class="btn btn-light border text-primary bg-white"><i
                                class="bi bi-geo-alt"></i>
                            لوکیشن</a>
                    </div>
                </div>
                <div class="card-footer text-left border-0">
                    <a <?php if(auth()->guard()->check()): ?> wire:click="like" <?php else: ?> href="<?php echo e(route('login')); ?>" <?php endif; ?> wire:init="likedLoad" class="ml-3 cursor-pointer single-page__like <?php if($liked): ?> single-page__like--is-active <?php endif; ?>"></a>
                    <a class="btn btn-light border-0 text-primary bg-white">
                        <i class="bi bi-share"></i>
                    </a>
                </div>
            </div>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $ad)): ?>
                <div class="pt-5 pb-5 ad-expiration">
                    <p>4 روز مانده تا انقضا آگهی</p>
                    <div class="mt-3">
                        <a href="<?php echo e(route('ad.update', $ad->id)); ?>"
                           class="btn btn-light border text-primary bg-white"><i
                                class="item-edit"></i> ویرایش آگهی</a>
                        <a href="<?php echo e(route('adUpgrade.index', $ad->id)); ?>" target="_blank"
                           class="btn btn-light border text-primary bg-white"><i class="bi bi-alt"></i> ارتقا آگهی</a>
                    </div>
                </div>
            <?php endif; ?>
            <div class="slider card-view-page mt-5">
                <div class="slider__head">
                    <span class="slider__title">تصاویر آگهی</span>
                </div>
                <div class="slider__content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $ad->adImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="swiper-slide">
                                    <div class="slider__box">
                                        <div class="slider__image">
                                            <img src="<?php echo e(asset('storage/' . $image->img)); ?>" class="slider__img" alt="">
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
            <div class="post-card" id="price-work">
                <div class="">
                    <strong>لیست قیمت آگهی های <?php echo e($ad->adCategory->name); ?></strong>
                    <div class="mt-3 ad-price-list">
                        <div>کمترین قیمت: <strong><?php echo e($minPrice); ?> تومان</strong></div>
                        <div>میانگین قیمت: <strong><?php echo e($avgPrice); ?> تومان</strong></div>
                        <div>بیشترین قیمت: <strong><?php echo e($maxPrice); ?> تومان</strong></div>
                    </div>
                </div>
                <div class="mt-5">
                    <strong>قیمت آگهی <?php echo e($ad->title); ?></strong>
                    <div class="d-flex jsc-space-between alc-center mt-3">
                        <p><?php echo e($ad->minPrice); ?> تومان  الی <?php echo e($ad->maxPrice); ?> تومان</p>
                    </div>
                </div>
            </div>
            <div class="post-card" id="description">
                توضیحات:
                <p class="mt-3"><?php echo $ad->description; ?></p>
            </div>
            <div class="post-card" id="location">
                لوکیشن:
            </div>
            <div class="slider card-view-page mt-5 mb-5">
                <div class="slider__head">
                    <span class="slider__title">آگهی های مشابه</span>
                </div>
                <div class="slider__content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $adCategory->ads->where('id', '!=', $ad->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similarAd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($similarAd->adImages->where('originalPhoto', true)->first()): ?>
                                    <a href="<?php echo e(route('ad.show', $similarAd->id)); ?>" class="swiper-slide"
                                       target="_blank">
                                        <div class="slider__box">
                                            <div class="slider__image">
                                                <img
                                                    src="<?php echo e(asset('storage/' . $similarAd->adImages->where('originalPhoto', true)->first()->img)); ?>"
                                                    class="slider__img" alt="">
                                            </div>
                                            <p class="mt-3 text-dark"><?php echo e($similarAd->title); ?></p>
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
        </div>

        <?php if($formTicket): ?>
            <div class="swalContainer">
                <div class="swalConfirm d-flex jsc-center alc-center">
                    <div class="card bg-white">
                        <div class="card-header d-flex jsc-space-between alc-center pb-3">
                            <h2 class="swalConfirmTitle">مشکل آگهی چیست؟</h2>
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
     <?php $__env->slot('scripts', null, []); ?> 
        <script>
            
            
            
            
            
            
            
            
            
            
            
            
        </script>
     <?php $__env->endSlot(); ?>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/ad/show.blade.php ENDPATH**/ ?>
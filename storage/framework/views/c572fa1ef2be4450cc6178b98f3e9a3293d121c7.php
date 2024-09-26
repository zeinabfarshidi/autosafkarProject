<?php $__env->startSection('title', $post->title); ?>
<div>
    <main class="body border-bottom" wire:init="loadInformation">
        <article class="single-page-container">
            <header class="postHeader">
                <h1 class="title_h"><?php echo e($post->title); ?></h1>
                <div class="post-details">
                    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="post-categories"><?php echo e($category->name); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <span class="publicationDate"><?php echo e(verta($post->created_at)->format('Y/m/d')); ?></span>
                </div>
                <div class="post-author">
                    <div class="post-author-img">
                        <?php if($post->user->img): ?>
                            <img alt="" src="<?php echo e(asset('storage/' . $post->user->img)); ?>">
                        <?php else: ?>
                            <img alt="" src="<?php echo e(asset('home/img/profile.jpg')); ?>">
                        <?php endif; ?>
                    </div>
                    <span><?php echo e($post->user->name); ?></span>
                </div>
            </header>
            <div class="d-flex jsc-space-between alc-start singlePagePostContent single-page-post-content">
                <div class="stickySidebar">
                    <aside class="stickySidebarMenu">
                        <div><a href="" class=""><i class="bi bi-chat"></i></a></div>
                        <div><a href="" class=""><i class="bi bi-heart"></i></a></div>
                        <div><a href="" class=""><i class="bi bi-bookmark"></i></a></div>
                        <div><a href="" class=""><i class="bi bi-share"></i></a></div>
                    </aside>
                </div>
                <div class="single-page-right">
                    <div class="post-content">
                        <img src="<?php echo e(asset('storage/' . $post->img)); ?>" alt="" class="mt-0 mb-3">
                        <div class="card card-post-ad border-0">
                            <div class="card-header position-relative">
                                <div class="card-post-ad-title closeAd" title="بستن تبلیغات">
                                    <i class="bi bi-x font-size-15 cursor-pointer"></i>
                                    <span>تبلیغات</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                                        src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="post-content-text"><?php echo $post->text; ?></div>
                    </div>
                    <div class="card card-post-comment">
                        <div class="card-header d-flex jsc-space-between alc-center p-2">
                            <h6 class="title_h6">مقاله رو دوست داشتی؟</h6>
                            <div>
                                <a <?php if(auth()->user()): ?> wire:click="like" <?php else: ?> href="<?php echo e(route('login')); ?>" <?php endif; ?>
                                class="single-page__like cursor-pointer likePost
                              <?php if(auth()->user() && $post->likes->where('user_id', auth()->user()->id)->first()): ?>
                               single-page__like--is-active
<?php endif; ?>"></a>
                                لایک
                            </div>
                            <div class="d-flex alc-center">
                                <h6 class="title_h6 ml-3">نظرت چیه؟</h6>
                                <a href="#postCommentOnArticle">
                                    <i class="bi bi-chat"></i>
                                    ارسال نظر
                                </a>
                            </div>
                            <div><button class="">
                                    <i class="bi bi-bookmark"></i>
                                    بوکمارک
                                </button></div>
                            <div><button class="">
                                    <i class="bi bi-share"></i>
                                    اشتراک گذاری
                                </button></div>
                        </div>
                        <div class="card-body d-flex jsc-space-between alc-center">
                            <div class="post-author">
                                <div class="post-author-img">
                                    <img alt="" src="https://api2.zoomit.ir/media/658738525760b195fc9b4e01?q=75">
                                </div>
                                <span><?php echo e($post->user->name); ?></span>
                            </div>
                            <button class="btn btn-light border text-dark d-flex jsc-space-between alc-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="var(--text)"
                                     width="16" height="16" style="margin-left: 10px">
                                    <path
                                        d="M5.973 11c.234 0 .41.194.468.467.118.666.059 1.333-.175 1.933-.41 1-1.288 1.6-2.225 1.6-.996 0-1.932-.667-2.4-1.867-.176-.533-.176-1.133-.06-1.666.06-.267.293-.467.528-.467zm8.096-1c.24 0 .419.09.419.368.04.955-.02 1.632-.18 2.032-.418 1-1.315 1.6-2.272 1.6-1.017 0-1.974-.733-2.393-1.867-.18-.533-.18-1.133-.06-1.666.06-.267.3-.467.539-.467zM4 2c1.74 0 3 1.486 3 3.429 0 .685-.12 1.142-.24 1.657-.18.571-.36 1.2-.36 2.343 0 .342-.24.571-.6.571H2.2c-.3 0-.54-.171-.6-.457C1.6 9.486 1 7.2 1 5.429 1 3.486 2.26 2 4 2zm8-1c1.74 0 3 1.486 3 3.429 0 1.714-.6 4-.6 4.114-.06.286-.3.457-.6.457h-3.6c-.36 0-.6-.229-.6-.571 0-1.143-.18-1.772-.36-2.343C9.12 5.57 9 5.114 9 4.429 9 2.486 10.26 1 12 1z"
                                        transform="translate(-1452 -1035) translate(1452 1035)"></path>
                                </svg>
                                دنبال کردن
                            </button>
                        </div>
                    </div>
                    <div class="card mt-4 card-post-ad border-0">
                        <div class="card-header position-relative">
                            <div class="card-post-ad-title closeAd" title="بستن تبلیغات">
                                <i class="bi bi-x font-size-15 cursor-pointer"></i>
                                <span>تبلیغات</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                                    src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="hottest-content-of-day">
                        <strong class="hottest-content-of-day-title">داغ‌ترین مطالب روز</strong>
                        <div class="hottest-content-of-day-list">
                            <a href="">
                                <div class="hottest-content-of-day-img">
                                    <img
                                        src="<?php echo e(asset('storage/home/images/post/Best-foldable-phones-66e9553b880241bd74145914.webp')); ?>"
                                        alt="">
                                </div>
                                <div class="hottest-content-of-day-content">
                                    <span>گزارش ماه آگوست اسپیدتست؛ سرعت اینترنت ثابت و همراه کاهش پیدا کرد</span>
                                    <p>گوشی‌های تاشو در چند سال گذشته جای خود را در بازار پیدا کرده‌اند؛ اما فهرست
                                        بهترین گوشی تاشو بازار شامل چه مدل‌هایی می‌شود؟</p>
                                    <div class="hottest-content-of-day-details">
                                        <span>
                                        <i class="bi bi-chat"></i>
                                        22
                                    </span>
                                        <span>
                                        <i class="bi bi-calendar"></i>
                                        یک روز پیش
                                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <aside class="post-sidebar">
                    <div class="card card-post-ad border-0">
                        <div class="card-header position-relative">
                            <div class="card-post-ad-title closeAd" title="بستن تبلیغات">
                                <i class="bi bi-x font-size-15 cursor-pointer"></i>
                                <span>تبلیغات</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                                    src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>"
                                    alt=""></a>
                            <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                                    src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="new-content">
                        <strong class="hottest-content-of-day-title">جدیدترین مطالب</strong>
                        <ul>
                            <li>
                                <a href="">
                                    <div class="new-content-img">
                                        <img
                                            src="<?php echo e(asset('storage/home/images/post/2022-3-manage-restrict-data-usage-smartphones-638bb71ae60c0026b8253e17.webp')); ?>"
                                            alt="" class="">
                                    </div>
                                    <span>دلیل زود تمام شدن اینترنت گوشی و راه حل</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="new-content-img">
                                        <img
                                            src="<?php echo e(asset('storage/home/images/post/2022-3-manage-restrict-data-usage-smartphones-638bb71ae60c0026b8253e17.webp')); ?>"
                                            alt="" class="">
                                    </div>
                                    <span>دلیل زود تمام شدن اینترنت گوشی و راه حل</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card card-post-ad border-0">
                        <div class="card-header position-relative">
                            <div class="card-post-ad-title closeAd" title="بستن تبلیغات">
                                <i class="bi bi-x font-size-15 cursor-pointer"></i>
                                <span>تبلیغات</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                                    src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>"
                                    alt=""></a>
                            <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                                    src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>"
                                    alt=""></a>
                        </div>
                    </div>
                </aside>
            </div>
        </article>
    </main>
    <div class="single-page-container mt-0" id="postBottom">
        <div class="card card-post-ad border-0" style="margin-top: 50px">
            <div class="card-header position-relative">
                <div class="card-post-ad-title closeAd" title="بستن تبلیغات">
                    <i class="bi bi-x font-size-15 cursor-pointer"></i>
                    <span>تبلیغات</span>
                </div>
            </div>
            <div class="card-body" style="height: 150px">
                <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                        src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>" alt=""></a>
            </div>
        </div>
        <div class="comment-card">
            <div class="comment-card-header border-bottom">
                <h3 class="hottest-content-of-day-title" id="postCommentOnArticle">نظرات</h3>
                <?php if(auth()->guard()->check()): ?>
                    <?php echo $__env->make('livewire.home.comments.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <div class="comment-svg">
                        <svg width="130" height="148" viewBox="0 0 130 148" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="49.967%" y1="-2.316%" x2="49.967%" y2="101.081%" id="nirt7ohw4c">
                                    <stop offset="0%" stop-color="#FDFEFF"></stop>
                                    <stop offset="99.64%" stop-color="#ECF0F5"></stop>
                                </linearGradient>
                                <linearGradient x1="0%" y1="49.999%" x2="100%" y2="49.999%" id="a1kqhhmuld">
                                    <stop offset="0%" stop-color="#E4002B"></stop>
                                    <stop offset="96%" stop-color="#A2002B"></stop>
                                </linearGradient>
                                <filter x="-58.3%" y="-28.9%" width="216.6%" height="180.9%"
                                        filterUnits="objectBoundingBox"
                                        id="roza4s0zma">
                                    <feOffset dy="11" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="11" in="shadowOffsetOuter1"
                                                    result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix
                                        values="0 0 0 0 0.396078431 0 0 0 0 0.478431373 0 0 0 0 0.576470588 0 0 0 0.27 0"
                                        in="shadowBlurOuter1"></feColorMatrix>
                                </filter>
                                <path
                                    d="M96.527 87.3c-8.935 9.703-21.736 15.779-35.954 15.779a48.65 48.65 0 0 1-30.09-10.358V12.758c0-2.645 2.13-4.806 4.787-4.806h47.487l13.77 13.82v65.529z"
                                    id="69rqnfpgrb"></path>
                            </defs>
                            <g fill="none">
                                <path
                                    d="M64.185 113.841c27.004 0 48.897-21.886 48.897-48.988s-21.99-48.996-48.897-48.996c-27.004 0-48.896 21.894-48.896 48.996 0 27.102 21.892 48.988 48.896 48.988zM117.513 34.83a3.953 3.953 0 0 0 3.954-3.955 3.958 3.958 0 0 0-3.954-3.954 3.958 3.958 0 0 0-3.954 3.954 3.953 3.953 0 0 0 3.954 3.955zM121.3 16.404a2.703 2.703 0 0 0 0-5.404 2.702 2.702 0 0 0 0 5.404zM22.506 22.732a2.697 2.697 0 1 0 0-5.396 2.698 2.698 0 1 0 0 5.396z"
                                    fill="#EAEEF9"></path>
                                <path
                                    d="M9.015 86.815a5.015 5.015 0 0 0 5.015-5.019 5.013 5.013 0 0 0-5.015-5.011A5.013 5.013 0 0 0 4 81.796a5.015 5.015 0 0 0 5.015 5.02z"
                                    fill="#F1F3F9"></path>
                                <g transform="translate(4 11)">
                                    <use fill="#000" filter="url(#roza4s0zma)" xlink:href="#69rqnfpgrb"></use>
                                    <use fill="url(#nirt7ohw4c)" xlink:href="#69rqnfpgrb"></use>
                                </g>
                                <path
                                    d="M53.801 97.31h-6.916c-.257 0-.464-.671-.464-1.474 0-.802.207-1.474.464-1.474h6.916c.258 0 .464.672.464 1.474 0 .934-.206 1.474-.464 1.474zM69.018 35.532H47.356c-.503 0-.935-.68-.935-1.474 0-.786.432-1.465.935-1.465h21.662c.504 0 .936.68.936 1.465 0 .794-.432 1.474-.936 1.474zM52.7 42.394h-5.647c-.34 0-.632-.68-.632-1.466 0-.794.292-1.474.632-1.474h5.598c.342 0 .633.68.633 1.474 0 .786-.291 1.466-.583 1.466zM86.881 80.64H48.122c-.36 0-.72.613-.72 1.465 0 .737.288 1.474.72 1.474h38.759c.361 0 .722-.614.722-1.474-.072-.852-.36-1.466-.722-1.466zM86.88 72.795H48.124c-.362 0-.723.614-.723 1.466 0 .737.29 1.474.723 1.474H86.88c.361 0 .723-.614.723-1.474-.072-.852-.362-1.466-.723-1.466zM87.91 65.926H48.14c-.37 0-.738.614-.738 1.473 0 .737.295 1.474.738 1.474H87.837c.368 0 .737-.614.737-1.474.074-.736-.295-1.473-.664-1.473zM87.852 58.082H48.133c-.366 0-.732.614-.732 1.473 0 .737.293 1.474.731 1.474H87.78c.512 0 .804-.614.804-1.474 0-.736-.292-1.473-.73-1.473zM86.37 19.295v10.546a3.274 3.274 0 0 0 3.275 3.276h11.313"
                                    fill="#D5DDEA"></path>
                                <path
                                    d="M57.233 40.741V71.12c0 3.553-2.91 6.14-6.144 6.14h-1.617v8.082c0 1.94-2.263 2.587-3.557 1.294l-8.084-9.376H6.143C2.587 77.26 0 74.353 0 71.12V40.74c0-3.553 2.91-6.14 6.143-6.14H51.09c3.234 0 6.144 2.906 6.144 6.14z"
                                    fill="url(#a1kqhhmuld)" transform="translate(4 11)"></path>
                                <path
                                    d="M19.198 67.577v-6.46c0-.975.646-1.622 1.616-1.622h7.114c.97 0 1.617.647 1.617 1.622v7.426c0 1.94 0 3.562-.324 4.847-.317 1.27-.945 1.916-1.882 2.858-.039.033-.08.073-.126.098-.808.508-2.033.819-3.506 1.08a.81.81 0 0 1-.953-.802v-1.228c0-.41.303-.745.696-.851 1.831-.475 2.861-1.753 2.861-4.062 0 0-.29-.646-.647-.646h-4.279a.816.816 0 0 1-.454-.14c-.897-.597-1.733-1.22-1.733-2.12zm15.843 0v-6.46c0-.975.647-1.622 1.617-1.622h7.114c.97 0 1.616.647 1.616 1.622v7.426c0 1.94 0 3.562-.323 4.847-.317 1.27-.944 1.916-1.883 2.858-.038.033-.079.073-.125.098-.808.508-2.034.819-3.507 1.08a.81.81 0 0 1-.952-.802v-1.228c0-.41.302-.745.697-.851 1.83-.475 2.86-1.753 2.86-4.062 0 0-.29-.646-.646-.646h-4.28a.816.816 0 0 1-.454-.14c-.896-.597-1.734-1.22-1.734-2.12z"
                                    fill="#FFF"></path>
                            </g>
                        </svg>
                        <p class="font-weight-bold">47 دیدگاه ثبت شده، نظر تو چیه؟</p>
                        <p class="desc">برای درج نظر وارد شو یا ثبت‌نام کن</p>
                        <a href="<?php echo e(route('login')); ?>" class="btn btnDark">ورود / ثبت‌نام</a>
                    </div>
                <?php endif; ?>

                <div class="comment-filter">
                    <button class="btn border is-active">همه</button>
                    <button class="btn border">دیدگاه ها</button>
                    <button class="btn border">سوالات</button>
                </div>
            </div>
            <div class="comment-card-body">
                <?php if($post->comments->where('status', 'تایید شده')->count() > 0): ?>
                    <div class="container post-card" id="contents">
                        <div class="comments" id="comments">
                            <h3 class="post-card-title">نظر کاربران</h3>
                            <div class="comments__list">
                                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $__env->make('livewire.home.comments.comment', $comment, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="card card-post-ad border-0" style="margin-top: 50px">
            <div class="card-header position-relative">
                <div class="card-post-ad-title closeAd" title="بستن تبلیغات">
                    <i class="bi bi-x font-size-15 cursor-pointer"></i>
                    <span>تبلیغات</span>
                </div>
            </div>
            <div class="card-body" style="height: 150px">
                <a href="<?php echo e(\App\Models\Banner::all()->random()->link); ?>"><img
                        src="<?php echo e(asset('storage/' . \App\Models\Banner::all()->random()->img)); ?>" alt=""></a>
            </div>
        </div>
        <div class="slider mt-5">
            <div class="slider__head">
                <strong class="hottest-content-of-day-title">فهرست‌های مطالعاتی</strong>
            </div>
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                    <p>در این مجموعه‌ی مطالعاتی، جذاب‌ترین ترفندها و آموزش‌ها برای استفاده از نهایت
                                        پتانسیل گوشی اندرویدی‌تان را بیاموزید.</p>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                    <p>در این مجموعه‌ی مطالعاتی، جذاب‌ترین ترفندها و آموزش‌ها برای استفاده از نهایت
                                        پتانسیل گوشی اندرویدی‌تان را بیاموزید.</p>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">&#10095</div>
            <div class="swiper-button-prev">&#10094</div>
        </div>
        <div class="slider mt-5">
            <div class="slider__head">
                <strong class="hottest-content-of-day-title">مقایسه قیمت و مشخصات</strong>
                <div class="mt-3">
                    <button class="btn btnDark">داغ‌ترین محصولات 🔥</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                </div>
            </div>
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                    <p>در این مجموعه‌ی مطالعاتی، جذاب‌ترین ترفندها و آموزش‌ها برای استفاده از نهایت
                                        پتانسیل گوشی اندرویدی‌تان را بیاموزید.</p>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">&#10095</div>
            <div class="swiper-button-prev">&#10094</div>
        </div>
        <div class="slider mt-5">
            <div class="slider__head">
                <strong class="hottest-content-of-day-title">بهترین مقالات زومیت</strong>
                <div class="mt-3">
                    <button class="btn btnDark">پربازدید‌ترین‌های ماه</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                </div>
            </div>
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                    <p>در این مجموعه‌ی مطالعاتی، جذاب‌ترین ترفندها و آموزش‌ها برای استفاده از نهایت
                                        پتانسیل گوشی اندرویدی‌تان را بیاموزید.</p>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">&#10095</div>
            <div class="swiper-button-prev">&#10094</div>
        </div>
        <div class="slider mt-5">
            <div class="slider__head">
                <strong class="hottest-content-of-day-title">پیشنهاد زومیت</strong>
                <div class="mt-3">
                    <button class="btn btnDark">پربازدید‌ترین‌های ماه</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                </div>
            </div>
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                    <p>در این مجموعه‌ی مطالعاتی، جذاب‌ترین ترفندها و آموزش‌ها برای استفاده از نهایت
                                        پتانسیل گوشی اندرویدی‌تان را بیاموزید.</p>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">&#10095</div>
            <div class="swiper-button-prev">&#10094</div>
        </div>
        <div class="slider mt-5">
            <div class="slider__head">
                <strong class="hottest-content-of-day-title">با چشم باز خرید کنید</strong>
                <div class="mt-3">
                    <button class="btn btnDark">پربازدید‌ترین‌های ماه</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                    <button class="btn btnDark">ورود / ثبت‌نام</button>
                </div>
            </div>
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide">
                            <div class="slider__box">
                                <div class="slider__image">
                                    <img src="<?php echo e(asset('storage/' . $post->img)); ?>" class="slider__img" alt="">
                                </div>
                                <div class="study-lists border">
                                    <span class="font-weight-bold">ترفند ها و آموزش های اندروید</span>
                                    <p>در این مجموعه‌ی مطالعاتی، جذاب‌ترین ترفندها و آموزش‌ها برای استفاده از نهایت
                                        پتانسیل گوشی اندرویدی‌تان را بیاموزید.</p>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">&#10095</div>
            <div class="swiper-button-prev">&#10094</div>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/post/show.blade.php ENDPATH**/ ?>
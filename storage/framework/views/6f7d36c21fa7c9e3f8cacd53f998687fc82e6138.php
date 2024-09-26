<header class="c-header">
    <div class="container container--responsive container--white">
        <div class="c-header__row ">
            <div class="c-header__right">
                <div class="logo">
                    <a class="logo__img">صافکاری و سپرسازی</a>
                </div>
                <div><a class="c-button__link c-button--login bg-warning text-dark register-ad-responsive"
                        href="<?php echo e(route('ad.create')); ?>">ثبت آگهی رایگان</a></div>
                <div class="c-search width-100 ">
                    <form action="" class="c-search__form position-relative">
                        <input type="text" class="c-search__input" placeholder="جستجو در بین خدمات ما ...">
                        <button class="c-search__button"></button>
                    </form>
                </div>
            </div>
            <div class="c-header__left">
                <div class="c-header__icons">
                    <div class="c-header__button-search "></div>
                    <div class="c-header__button-nav"></div>
                </div>
                <div><a class="c-button__link c-button--login bg-warning text-dark register-ad"
                        href="<?php echo e(route('ad.create')); ?>">ثبت آگهی رایگان</a></div>
                <?php if(auth()->guard()->guest()): ?>
                    <div class="c-button__login-regsiter">
                        <div><a class="c-button__link c-button--login border" href="<?php echo e(route('login')); ?>">ورود/ثبت
                                نام</a></div>
                    </div>
                <?php else: ?>
                    <div class="navbar__action">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="header__account">
                            <span class="auth__user-name"><?php echo e(auth()->user()->name); ?></span>
                            <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none"
                                 id="account__dropdown">
                                <div class="header__dropdown-content">
                                    <a href="<?php echo e(route('profile.index')); ?>" class="header__account-link">حساب من</a>
                                    <a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                       class="header__account-link">خروج</a>
                                    <form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form"><?php echo csrf_field(); ?></form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <nav class="nav" id="nav">
        <?php if(auth()->guard()->guest()): ?>
            <div class="c-button__login-regsiter d-none">
                <div><a class="c-button__link c-button--login" href="<?php echo e(route('login')); ?>">ورود/ثبت نام</a></div>
            </div>
        <?php else: ?>
            <div class="navbar__action navbar__action-response">
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="header__account">
                    <span class="auth__user-name--responsive"><?php echo e(auth()->user()->name); ?></span>
                    <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none"
                         id="account__dropdown-responsive">
                        <div class="header__dropdown-content">
                            <a href="<?php echo e(route('profile.index')); ?>" class="header__account-link">حساب من</a>
                            <a href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                               class="header__account-link">خروج</a>
                            <form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form"><?php echo csrf_field(); ?></form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="container container--nav container_nav">
            <ul class="nav__ul">
                <li class="nav__item"><a href="<?php echo e(route('home.index')); ?>" class="nav__link">صفحه اصلی</a></li>
                <li class="nav__item"><a href="<?php echo e(route('profile.index')); ?>" class="nav__link">حساب من</a></li>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </ul>
            <?php if(auth()->user() && auth()->user()->tenders->count() == 0): ?>
                <a class="c-button__link c-button--login d-flex alc-center bg-primary text-dark border-primary btn_tender"
                   href="<?php echo e(route('tender.create')); ?>">شرکت در مناقصه</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/header.blade.php ENDPATH**/ ?>
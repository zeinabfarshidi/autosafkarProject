<div class="border sidebar">
    <div class="user-info d-flex jsc-space-between alc-center">
        <div class="user-info-img d-flex jsc-space-between alc-center">
            <?php if(auth()->user()->img): ?>
                <img src="<?php echo e(asset('storage/' . auth()->user()->img)); ?>" alt="">
            <?php else: ?>
                <img src="<?php echo e(asset('home/img/profile.jpg')); ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="user-info-edit d-flex jsc-space-between alc-center">
            <span class="font-size-15"><?php echo e(auth()->user()->name); ?></span>
            <a href="<?php echo e(route('profile.update')); ?>" class="i-edit"></a>
        </div>
    </div>
    <ul class="listUl">
        <li><a href="<?php echo e(route('profile.show', auth()->user()->id)); ?>" class="i-users">پروفایل من</a></li>
        <li><a href="<?php echo e(route('technical-degree.index')); ?>" class="i-slideshow">مدارک فنی</a></li>
        <li><a href="<?php echo e(route('exampleWork.index')); ?>" class="i-slideshow">نمونه کار</a></li>
        <li><a href="<?php echo e(route('ad.index')); ?>" class="i-slideshow">آگهی های من</a></li>
        <li><a href="<?php echo e(route('order.index')); ?>" class="i-articles">مدیریت سفارش ها</a></li>
        <li><a href="<?php echo e(route('request.index')); ?>" class=""><i class="bi bi-check2-square"></i> درخواست های من</a></li>
        <?php if(auth()->user()->tenders->count() > 0): ?>
            <li><a href="<?php echo e(route('tender.index')); ?>" class=""><i class="bi bi-check2-square"></i> مناقصه</a></li>
        <?php endif; ?>
        
        <li><a href="" class="i-dashboard">بسته های من</a></li>
        
        
        <li><a href="<?php echo e(route('like.index')); ?>" class="i-my__purchases">ذخیره ها</a></li>
        <li><a href="<?php echo e(route('ticket.index')); ?>" class="i-my__purchases">تیکت ها</a></li>
        <li><a href="" class="i-my__purchases">تماس با پشتیبانی</a></li>
        <li>
            <a>
                <form action="<?php echo e(route('logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button href="<?php echo e(route('logout')); ?>" class="i-logout">خروج از حساب کاربری</button>
                </form>
            </a>
        </li>
    </ul>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/profile/sidebar.blade.php ENDPATH**/ ?>
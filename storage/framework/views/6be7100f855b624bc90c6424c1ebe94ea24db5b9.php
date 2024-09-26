<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href=""></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img">
            <img src="<?php echo e(asset('adminPanel/img/pro.jpg')); ?>" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>

        <span class="profile__name"><?php echo e(auth()->user()->name); ?></span>
    </div>
    <ul>
        <li class="item-li i-dashboard d-flex jsc-space-between alc-center <?php echo e(request()->routeIs('dashboard') ? 'is-active' : ''); ?>">
            <a href="<?php echo e(route('dashboard')); ?>">داشبورد</a>
        </li>
        <?php if($this->permissionToView('role', 'view')): ?>
            <li class="item-li i-courses <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'is-active' : ''); ?> d-flex">
                <a href="<?php echo e(route('roles.index')); ?>">سطوح کاربری</a>
            </li>
        <?php endif; ?>
        <?php if($this->permissionToView('user', 'view')): ?>
            <li class="item-li i-users <?php echo e(request()->is('admin/user') || request()->is('admin/user/*') ? 'is-active' : ''); ?> d-flex">
                <a href="<?php echo e(route('user.index')); ?>"> کاربران</a>
            </li>
        <?php endif; ?>
        <?php if($this->permissionToView('ad', 'view')): ?>
            <li class="item-li i-slideshow <?php echo e(request()->is('admin/ad') || request()->is('admin/ad/*') ? 'is-active' : ''); ?>">
                <a href="<?php echo e(route('ad_index')); ?>"
                   class="item-link">آگهی ها</a>
                <div class="submenu">
                    <?php if($this->permissionToView('adCategory', 'view')): ?>
                        <div>
                            <a href="<?php echo e(route('adCategory.index')); ?>"
                               class="submenuLink <?php echo e(request()->is('admin/adCategory') || request()->is('admin/adCategory/*') ? 'is-active' : ''); ?>">
                                <i class="bi bi-activity"></i>
                                دسته بندی
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if($this->permissionToView('state', 'view')): ?>
                        <div>
                            <a href="<?php echo e(route('state.index')); ?>"
                               class="submenuLink <?php echo e(request()->is('admin/state') || request()->is('admin/state/*') ? 'is-active' : ''); ?>">
                                <i class="bi bi-activity"></i>
                                شهر و منطقه
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if($this->permissionToView('tenderPrice', 'view')): ?>
                        <div>
                            <a href="<?php echo e(route('tenderPrice.index')); ?>"
                               class="submenuLink <?php echo e(request()->is('admin/tenderPrice') || request()->is('admin/tenderPrice/*') ? 'is-active' : ''); ?>">
                                <i class="bi bi-activity"></i>
                                قیمت گذاری
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if($this->permissionToView('upgrade', 'view')): ?>
                        <div>
                            <a href="<?php echo e(route('upgrade.index')); ?>"
                               class="submenuLink <?php echo e(request()->is('admin/upgrade') || request()->is('admin/upgrade/*') ? 'is-active' : ''); ?>">
                                <i class="bi bi-activity"></i>
                                ارتقاء
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </li>
        <?php endif; ?>

        <?php if($this->permissionToView('post', 'view')): ?>
            <li class="item-li i-slideshow <?php echo e(request()->is('admin/post') || request()->is('admin/post/*') ? 'is-active' : ''); ?>">
                <a href="<?php echo e(route('post.index')); ?>"
                   class="item-link">مقالات</a>
                <div class="submenu">
                    <?php if($this->permissionToView('Category', 'view')): ?>
                        <div>
                            <a href="<?php echo e(route('category.index')); ?>"
                               class="submenuLink <?php echo e(request()->is('admin/category') || request()->is('admin/category/*') ? 'is-active' : ''); ?>">
                                <i class="bi bi-activity"></i>
                                دسته بندی
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </li>
        <?php endif; ?>
        <?php if($this->permissionToView('comment', 'view')): ?>
            <li class="item-li i-comments <?php echo e(request()->routeIs('comment.index') ? 'is-active' : ''); ?> d-flex">
                <a href="<?php echo e(route('comment.index')); ?>"> نظرات</a>
            </li>
        <?php endif; ?>
        <?php if($this->permissionToView('tickets', 'view')): ?>
            <li class="item-li i-comments <?php echo e(request()->routeIs('tickets.index') ? 'is-active' : ''); ?> d-flex">
                <a href="<?php echo e(route('tickets.index')); ?>"> تیکت ها</a>
            </li>
        <?php endif; ?>
        <?php if($this->permissionToView('subscribe', 'view')): ?>
            <li class="item-li i-comments <?php echo e(request()->routeIs('subscribe.index') ? 'is-active' : ''); ?> d-flex">
                <a href="<?php echo e(route('subscribe.index')); ?>"> اشتراک</a>
            </li>
        <?php endif; ?>
        <?php if($this->permissionToView('technicalDegree', 'view')): ?>
            <li class="item-li i-comments <?php echo e(request()->routeIs('technicalDegree.index') ? 'is-active' : ''); ?> d-flex">
                <a href="<?php echo e(route('technicalDegree.index')); ?>"> مدارک فنی کاربران</a>
            </li>
        <?php endif; ?>
        <?php if($this->permissionToView('banner', 'view')): ?>
            <li class="item-li i-comments <?php echo e(request()->routeIs('banner.index') ? 'is-active' : ''); ?> d-flex">
                <a href="<?php echo e(route('banner.index')); ?>"> بنرهای تبلیغاتی</a>
            </li>
        <?php endif; ?>
        <li class="item-li i-user__inforamtion <?php echo e(request()->routeIs('profile') ? 'is-active' : ''); ?> d-flex item-li-hover">
            <a href="<?php echo e(route('profile')); ?>">پروفایل</a>
        </li>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </ul>

</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/dashboard/sidebar.blade.php ENDPATH**/ ?>
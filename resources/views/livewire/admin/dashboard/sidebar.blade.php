<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href=""></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img">
            <img src="{{ asset('adminPanel/img/pro.jpg') }}" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>

        <span class="profile__name">{{ auth()->user()->name }}</span>
    </div>
    <ul>
        <li class="item-li i-dashboard d-flex jsc-space-between alc-center {{ request()->routeIs('dashboard') ? 'is-active' : '' }}">
            <a href="{{ route('dashboard') }}">داشبورد</a>
        </li>
        @if($this->permissionToView('role', 'view'))
            <li class="item-li i-courses {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'is-active' : '' }} d-flex">
                <a href="{{ route('roles.index') }}">سطوح کاربری</a>
            </li>
        @endif
        @if($this->permissionToView('user', 'view'))
            <li class="item-li i-users {{ request()->is('admin/user') || request()->is('admin/user/*') ? 'is-active' : '' }} d-flex">
                <a href="{{ route('user.index') }}"> کاربران</a>
            </li>
        @endif
        @if($this->permissionToView('ad', 'view'))
            <li class="item-li i-slideshow {{ request()->is('admin/ad') || request()->is('admin/ad/*') ? 'is-active' : '' }}">
                <a href="{{ route('ad_index') }}"
                   class="item-link">آگهی ها</a>
                <div class="submenu">
                    @if($this->permissionToView('adCategory', 'view'))
                        <div>
                            <a href="{{ route('adCategory.index') }}"
                               class="submenuLink {{ request()->is('admin/adCategory') || request()->is('admin/adCategory/*') ? 'is-active' : '' }}">
                                <i class="bi bi-activity"></i>
                                دسته بندی
                            </a>
                        </div>
                    @endif
                    @if($this->permissionToView('state', 'view'))
                        <div>
                            <a href="{{ route('state.index') }}"
                               class="submenuLink {{ request()->is('admin/state') || request()->is('admin/state/*') ? 'is-active' : '' }}">
                                <i class="bi bi-activity"></i>
                                شهر و منطقه
                            </a>
                        </div>
                    @endif
                    @if($this->permissionToView('tenderPrice', 'view'))
                        <div>
                            <a href="{{ route('tenderPrice.index') }}"
                               class="submenuLink {{ request()->is('admin/tenderPrice') || request()->is('admin/tenderPrice/*') ? 'is-active' : '' }}">
                                <i class="bi bi-activity"></i>
                                قیمت گذاری
                            </a>
                        </div>
                    @endif
                    @if($this->permissionToView('upgrade', 'view'))
                        <div>
                            <a href="{{ route('upgrade.index') }}"
                               class="submenuLink {{ request()->is('admin/upgrade') || request()->is('admin/upgrade/*') ? 'is-active' : '' }}">
                                <i class="bi bi-activity"></i>
                                ارتقاء
                            </a>
                        </div>
                    @endif
                </div>
            </li>
        @endif

        @if($this->permissionToView('post', 'view'))
            <li class="item-li i-slideshow {{ request()->is('admin/post') || request()->is('admin/post/*') ? 'is-active' : '' }}">
                <a href="{{ route('post.index') }}"
                   class="item-link">مقالات</a>
                <div class="submenu">
                    @if($this->permissionToView('Category', 'view'))
                        <div>
                            <a href="{{ route('category.index') }}"
                               class="submenuLink {{ request()->is('admin/category') || request()->is('admin/category/*') ? 'is-active' : '' }}">
                                <i class="bi bi-activity"></i>
                                دسته بندی
                            </a>
                        </div>
                    @endif
                </div>
            </li>
        @endif
        @if($this->permissionToView('comment', 'view'))
            <li class="item-li i-comments {{ request()->routeIs('comment.index') ? 'is-active' : '' }} d-flex">
                <a href="{{ route('comment.index') }}"> نظرات</a>
            </li>
        @endif
        @if($this->permissionToView('tickets', 'view'))
            <li class="item-li i-comments {{ request()->routeIs('tickets.index') ? 'is-active' : '' }} d-flex">
                <a href="{{ route('tickets.index') }}"> تیکت ها</a>
            </li>
        @endif
        @if($this->permissionToView('subscribe', 'view'))
            <li class="item-li i-comments {{ request()->routeIs('subscribe.index') ? 'is-active' : '' }} d-flex">
                <a href="{{ route('subscribe.index') }}"> اشتراک</a>
            </li>
        @endif
        @if($this->permissionToView('technicalDegree', 'view'))
            <li class="item-li i-comments {{ request()->routeIs('technicalDegree.index') ? 'is-active' : '' }} d-flex">
                <a href="{{ route('technicalDegree.index') }}"> مدارک فنی کاربران</a>
            </li>
        @endif
        @if($this->permissionToView('banner', 'view'))
            <li class="item-li i-comments {{ request()->routeIs('banner.index') ? 'is-active' : '' }} d-flex">
                <a href="{{ route('banner.index') }}"> بنرهای تبلیغاتی</a>
            </li>
        @endif
        <li class="item-li i-user__inforamtion {{ request()->routeIs('profile') ? 'is-active' : '' }} d-flex item-li-hover">
            <a href="{{ route('profile') }}">پروفایل</a>
        </li>

        {{--        <hr style="margin-left: 25px">--}}
        {{--        <li class="item-li i-slideshow"><a href="slideshow.html">اسلایدشو</a></li>--}}
        {{--        <li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>--}}
        {{--        <li class="item-li i-articles"><a href="articles.html">مقالات</a></li>--}}
        {{--        <li class="item-li i-ads"><a href="ads.html">تبلیغات</a></li>--}}
        {{--        <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>--}}
        {{--        <li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>--}}
        {{--        <li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>--}}
        {{--        <li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>--}}
        {{--        <li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>--}}
        {{--        <li class="item-li i-checkout__request "><a href="checkout-request.html">درخواست تسویه </a></li>--}}
        {{--        <li class="item-li i-my__purchases"><a href="mypurchases.html">خرید های من</a></li>--}}
        {{--        <li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>--}}
        {{--        </li>--}}
    </ul>

</div>

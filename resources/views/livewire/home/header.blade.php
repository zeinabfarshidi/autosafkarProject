<header class="c-header">
    <div class="container container--responsive container--white">
        <div class="c-header__row ">
            <div class="c-header__right">
                <div class="logo">
                    <a class="logo__img">صافکاری و سپرسازی</a>
                </div>
                <div><a class="c-button__link c-button--login bg-warning text-dark register-ad-responsive"
                        href="{{ route('ad.create') }}">ثبت آگهی رایگان</a></div>
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
                        href="{{ route('ad.create') }}">ثبت آگهی رایگان</a></div>
                @guest
                    <div class="c-button__login-regsiter">
                        <div><a class="c-button__link c-button--login border" href="{{ route('login') }}">ورود/ثبت
                                نام</a></div>
                    </div>
                @else
                    <div class="navbar__action">
                        {{--                        <div class="header__basket">--}}
                        {{--                            <a class="header__basket-icon"></a>--}}
                        {{--                            <span class="header__basket-count">0</span>--}}
                        {{--                            <div class="header__dropdown d-none" id="header__dropdown-basket">--}}
                        {{--                                <div class="header__dropdown-content header__dropdown-content--overflow">--}}
                        {{--                                    @if(count($inbox) > 0)--}}
                        {{--                                        @foreach($inbox as $note)--}}
                        {{--                                            <div class="header__basket-item">--}}
                        {{--                                                <div class="header__basket-details">--}}
                        {{--                                                    <h5><a href="{{ route('notes.show', $note->id) }}"--}}
                        {{--                                                           class="header__basket-title">{!! $note->content !!}</a>--}}
                        {{--                                                    </h5>--}}
                        {{--                                                    <div class="header__basket-price">{{ $note->user->name }}</div>--}}
                        {{--                                                    --}}{{----}}{{--                                                <a href="" class="header__basket-remove">حذف</a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        @endforeach--}}
                        {{--                                        <div class="header__basket-btn @if(count($inbox) < 4) btn__basket @endif">--}}
                        {{--                                            <a href="{{ route('notes.index') }}"--}}
                        {{--                                               class="btn btn--boxshadow btn--brand w--100 text-center text-white">--}}
                        {{--                                                مشاهده--}}
                        {{--                                                لیست کامل--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                    @else--}}
                        {{--                                        <div class="header__basket-item" style="font-size: 13px">--}}
                        {{--                                            موردی برای نمایش وجود ندارد--}}
                        {{--                                        </div>--}}
                        {{--                                    @endif--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="header__account">
                            <span class="auth__user-name">{{ auth()->user()->name }}</span>
                            <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none"
                                 id="account__dropdown">
                                <div class="header__dropdown-content">
                                    <a href="{{ route('profile.index') }}" class="header__account-link">حساب من</a>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                       class="header__account-link">خروج</a>
                                    <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endguest

            </div>
        </div>
    </div>
    <nav class="nav" id="nav">
        @guest
            <div class="c-button__login-regsiter d-none">
                <div><a class="c-button__link c-button--login" href="{{ route('login') }}">ورود/ثبت نام</a></div>
            </div>
        @else
            <div class="navbar__action navbar__action-response">
                {{--                <div class="header__basket">--}}
                {{--                    <a class="header__basket-icon" id="header__basket-icon-responsive"></a>--}}
                {{--                    <span class="header__basket-count">0</span>--}}
                {{--                    <div class="header__dropdown d-none" id="header__dropdown-basket-responsive">--}}
                {{--                        <div class="header__dropdown-content header__dropdown-content--overflow">--}}
                {{--                            @if(count($inbox) > 0)--}}
                {{--                                @foreach($inbox as $note)--}}
                {{--                                    <div class="header__basket-item">--}}
                {{--                                        --}}{{----}}{{--                                        <a href="" class="header__basket-link">--}}
                {{--                                        --}}{{----}}{{--                                            <img src="img/big-pic.jpg" class="header__basket-img">--}}
                {{--                                        --}}{{----}}{{--                                        </a>--}}
                {{--                                        <div class="header__basket-details">--}}
                {{--                                            <h5><a href="{{ route('notes.show', $note->id) }}"--}}
                {{--                                                   class="header__basket-title">{!! $note->content !!}</a>--}}
                {{--                                            </h5>--}}
                {{--                                            <div class="header__basket-price">{{ $note->user->name }}</div>--}}
                {{--                                            --}}{{----}}{{--                                                <a href="" class="header__basket-remove">حذف</a>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                @endforeach--}}
                {{--                                <div class="header__basket-btn @if(count($inbox) < 4) btn__basket @endif">--}}
                {{--                                    <a href="{{ route('notes.index') }}"--}}
                {{--                                       class="btn btn--boxshadow btn--brand w--100 text-center text-white">--}}
                {{--                                        مشاهده--}}
                {{--                                        لیست کامل--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            @else--}}
                {{--                                <div class="header__basket-item" style="font-size: 13px">--}}
                {{--                                    موردی برای نمایش وجود ندارد--}}
                {{--                                </div>--}}
                {{--                            @endif--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="header__account">
                    <span class="auth__user-name--responsive">{{ auth()->user()->name }}</span>
                    <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none"
                         id="account__dropdown-responsive">
                        <div class="header__dropdown-content">
                            <a href="{{ route('profile.index') }}" class="header__account-link">حساب من</a>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                               class="header__account-link">خروج</a>
                            <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                        </div>
                    </div>
                </div>
            </div>
        @endguest
        <div class="container container--nav container_nav">
            <ul class="nav__ul">
                <li class="nav__item"><a href="{{ route('home.index') }}" class="nav__link">صفحه اصلی</a></li>
                <li class="nav__item"><a href="{{ route('profile.index') }}" class="nav__link">حساب من</a></li>
                {{--                @foreach($categories as $category)--}}
                {{--                    <li class="nav__item @if(count($category->children) > 0) nav__item--has-sub @endif">--}}
                {{--                        <a @if(count($category->children) == 0 && $category->link) href="{{ $category->link }}"--}}
                {{--                           @endif class="nav__link">{{ $category->name }}</a>--}}
                {{--                        <div class="nav__sub">--}}
                {{--                            <div class="container d-flex item-center flex-wrap container--nav">--}}
                {{--                                @foreach($category->children as $childCategory)--}}
                {{--                                    <a @if($childCategory->link) href="{{ $childCategory->link }}"--}}
                {{--                                       @endif class="nav__link">{{ $childCategory->name }}</a>--}}
                {{--                                @endforeach--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                @endforeach--}}
            </ul>
            @if(auth()->user() && auth()->user()->tenders->count() == 0)
                <a class="c-button__link c-button--login d-flex alc-center bg-primary text-dark border-primary btn_tender"
                   href="{{ route('tender.create') }}">شرکت در مناقصه</a>
            @endif
        </div>
    </nav>
</header>

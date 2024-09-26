<div class="border sidebar">
    <div class="user-info d-flex jsc-space-between alc-center">
        <div class="user-info-img d-flex jsc-space-between alc-center">
            @if(auth()->user()->img)
                <img src="{{ asset('storage/' . auth()->user()->img) }}" alt="">
            @else
                <img src="{{ asset('home/img/profile.jpg') }}" alt="">
            @endif
        </div>
        <div class="user-info-edit d-flex jsc-space-between alc-center">
            <span class="font-size-15">{{ auth()->user()->name }}</span>
            <a href="{{ route('profile.update') }}" class="i-edit"></a>
        </div>
    </div>
    <ul class="listUl">
        <li><a href="{{ route('profile.show', auth()->user()->id) }}" class="i-users">پروفایل من</a></li>
        <li><a href="{{ route('technical-degree.index') }}" class="i-slideshow">مدارک فنی</a></li>
        <li><a href="{{ route('exampleWork.index') }}" class="i-slideshow">نمونه کار</a></li>
        <li><a href="{{ route('ad.index') }}" class="i-slideshow">آگهی های من</a></li>
        <li><a href="{{ route('order.index') }}" class="i-articles">مدیریت سفارش ها</a></li>
        <li><a href="{{ route('request.index') }}" class=""><i class="bi bi-check2-square"></i> درخواست های من</a></li>
        @if(auth()->user()->tenders->count() > 0)
            <li><a href="{{ route('tender.index') }}" class=""><i class="bi bi-check2-square"></i> مناقصه</a></li>
        @endif
        {{--                        <li><a href="" class="i-my__purchases">خریدهای من</a></li>--}}
        <li><a href="" class="i-dashboard">بسته های من</a></li>
        {{--                        <li><a href="" class="i-transactions">پرداخت های من</a></li>--}}
        {{--                        <li><a href="" class="i-discounts">فروشگاه من</a></li>--}}
        <li><a href="{{ route('like.index') }}" class="i-my__purchases">ذخیره ها</a></li>
        <li><a href="{{ route('ticket.index') }}" class="i-my__purchases">تیکت ها</a></li>
        <li><a href="" class="i-my__purchases">تماس با پشتیبانی</a></li>
        <li>
            <a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button href="{{ route('logout') }}" class="i-logout">خروج از حساب کاربری</button>
                </form>
            </a>
        </li>
    </ul>
</div>

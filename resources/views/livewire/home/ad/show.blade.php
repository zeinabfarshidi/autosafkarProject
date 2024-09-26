@section('title', $ad->title)
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container">
            <div class="card post-card post-card-responsive">
                <div class="card-header border-0"><h1 class="listing-title text-center">{{ $ad->title }}</h1></div>
                <div class="card-body">
                    <div class="w-div-49 listing-ad-info">
                        <div class="d-flex jsc-start flex-direction">
                            <div>ارسال شده توسط: <strong>{{ $ad->user->name }}</strong></div>
                            <div>
                                <nav class="nav-ad">
                                    <ul class="d-flex jsc-start alc-center">
                                        <li class="d-flex alc-center jsc-start">
                                            <a href="">{{ $ad->state->name }}</a>
                                        </li>
                                        <li class="d-flex alc-center jsc-start">
                                            <i class="bi bi-chevron-left"></i>
                                            <a href="">{{ $ad->city->name }}</a>
                                        </li>
                                        <li class="d-flex alc-center jsc-start">
                                            <i class="bi bi-chevron-left"></i>
                                            <a href="">{{ $ad->area->name }}</a>
                                        </li>
                                        <li class="d-flex alc-center jsc-start">
                                            <i class="bi bi-chevron-left"></i>
                                            <a href="" class="">{{ $ad->adCategory->name }}</a>
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
                                <a @auth wire:click="ticket" @else href="{{ route('login') }}" @endauth class="btn btn-primary text-white"><i
                                        class="bi bi-exclamation-triangle"></i> گزارش مشکل
                                </a>
                            </div>
                            <div class="ad-viewing-info">
                                <div>بازدیدها: <strong>{{ $ad->views }}</strong></div>
                                <div>تاریخ انتشار: <strong>{{ verta($ad->created_at)->format('Y/m/d') }}</strong></div>
                                <div>کد آگهی: <strong>{{ $ad->id }}</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-light border text-primary bg-white"><i
                                class="bi bi-telephone"></i> {{ $ad->mobile }}
                        </a>
                        <a class="btn btn-light border text-primary bg-white"><i class="bi bi-chat-dots"></i> چت</a>
                        <a href="#price-work" class="btn btn-light border text-primary bg-white"><i
                                class="i-my__purchases"></i>
                            قیمت انجام کار</a>
                        <a href="#description" class="btn btn-light border text-primary bg-white"><i
                                class="bi bi-chat-left-text"></i> توضیحات</a>
                        <a href="{{ route('profile.show', $ad->user->id) }}"
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
                    <a @auth wire:click="like" @else href="{{ route('login') }}" @endauth wire:init="likedLoad" class="ml-3 cursor-pointer single-page__like @if($liked) single-page__like--is-active @endif"></a>
                    <a class="btn btn-light border-0 text-primary bg-white">
                        <i class="bi bi-share"></i>
                    </a>
                </div>
            </div>
            @can('update', $ad)
                <div class="pt-5 pb-5 ad-expiration">
                    <p>4 روز مانده تا انقضا آگهی</p>
                    <div class="mt-3">
                        <a href="{{ route('ad.update', $ad->id) }}"
                           class="btn btn-light border text-primary bg-white"><i
                                class="item-edit"></i> ویرایش آگهی</a>
                        <a href="{{ route('adUpgrade.index', $ad->id) }}" target="_blank"
                           class="btn btn-light border text-primary bg-white"><i class="bi bi-alt"></i> ارتقا آگهی</a>
                    </div>
                </div>
            @endcan
            <div class="slider card-view-page mt-5">
                <div class="slider__head">
                    <span class="slider__title">تصاویر آگهی</span>
                </div>
                <div class="slider__content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($ad->adImages as $image)
                                <a class="swiper-slide">
                                    <div class="slider__box">
                                        <div class="slider__image">
                                            <img src="{{ asset('storage/' . $image->img) }}" class="slider__img" alt="">
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">&#10095</div>
                <div class="swiper-button-prev">&#10094</div>
            </div>
            <div class="post-card" id="price-work">
                <div class="">
                    <strong>لیست قیمت آگهی های {{ $ad->adCategory->name }}</strong>
                    <div class="mt-3 ad-price-list">
                        <div>کمترین قیمت: <strong>{{ $minPrice }} تومان</strong></div>
                        <div>میانگین قیمت: <strong>{{ $avgPrice }} تومان</strong></div>
                        <div>بیشترین قیمت: <strong>{{ $maxPrice }} تومان</strong></div>
                    </div>
                </div>
                <div class="mt-5">
                    <strong>قیمت آگهی {{ $ad->title }}</strong>
                    <div class="d-flex jsc-space-between alc-center mt-3">
                        <p>{{ $ad->minPrice }} تومان  الی {{ $ad->maxPrice }} تومان</p>
                    </div>
                </div>
            </div>
            <div class="post-card" id="description">
                توضیحات:
                <p class="mt-3">{!! $ad->description !!}</p>
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
                            @foreach($adCategory->ads->where('id', '!=', $ad->id) as $similarAd)
                                @if($similarAd->adImages->where('originalPhoto', true)->first())
                                    <a href="{{ route('ad.show', $similarAd->id) }}" class="swiper-slide"
                                       target="_blank">
                                        <div class="slider__box">
                                            <div class="slider__image">
                                                <img
                                                    src="{{ asset('storage/' . $similarAd->adImages->where('originalPhoto', true)->first()->img) }}"
                                                    class="slider__img" alt="">
                                            </div>
                                            <p class="mt-3 text-dark">{{ $similarAd->title }}</p>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">&#10095</div>
                <div class="swiper-button-prev">&#10094</div>
            </div>
        </div>

        @if($formTicket)
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
                                @error('text')
                                <p class="text-danger font-size-12 mt-2">{{ $message }}</p>
                                @enderror
                                <button class="btn btn-danger w-100 mt-4">
                                    تایید
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
    <x-slot name="scripts">
        <script>
            {{--$('#likeAd').on('click', function () {--}}
            {{--    fetch('{{ route("ad.like", $ad->title) }}', {--}}
            {{--        method: 'post',--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
            {{--        }--}}
            {{--    }).then((response) => {--}}
            {{--        if (response.ok) {--}}
            {{--            $('#likeAd').toggleClass('single-page__like--is-active');--}}
            {{--        }--}}
            {{--    })--}}
            {{--})--}}
        </script>
    </x-slot>
</div>

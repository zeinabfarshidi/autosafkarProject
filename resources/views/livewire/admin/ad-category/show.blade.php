@section('title', $adCategory->name)
<div>
    <main class="body border-bottom" wire:init="loadInformation">
        <article class="single-page-container">
            <header class="postHeader">
                <h1 class="title_h">{{ $adCategory->name }}</h1>
                <div class="post-details">
                    @foreach($adCategory->children as $children)
                        <a href="{{ route('adCategory.show', $children->id) }}" class="post-categories">{{ $children->name }}</a>
                    @endforeach
                </div>
                <span class="">{{ verta($adCategory->created_at)->format('Y/m/d') }}</span>
            </header>
            <div class="d-flex jsc-space-between alc-start single-page-post-content">
                <div class="single-page-right">
                    <div class="post-content">
                        <img src="{{ asset('storage/' . $adCategory->img) }}" alt="" class="mt-0">
                        <div class="post-content-text mt-4">{!! $adCategory->description !!}</div>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <div class="single-page-container mt-0 mb-5">
        <div class="slider mt-5">
            <div class="slider__head">
                <strong class="hottest-content-of-day-title">آگهی های {{ $adCategory->name }}</strong>
            </div>
            <div class="slider__content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @if($adCategory->ads_count > 0)
                            @foreach($adCategory->ads as $ad)
                                <a class="swiper-slide">
                                    <div class="slider__box">
                                        <div class="slider__image">
                                            <img src="{{ asset('storage/' . $ad->img) }}" class="slider__img"
                                                 alt="">
                                        </div>
                                        <div class="study-lists border">
                                            <span class="font-weight-bold">{{ $ad->title }}</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            هیچ آگهی در این دسته بندی ثبت نشده است
                        @endif
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">&#10095</div>
            <div class="swiper-button-prev">&#10094</div>
        </div>
    </div>
</div>

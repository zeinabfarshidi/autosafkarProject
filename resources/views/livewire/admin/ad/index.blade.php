@section('title', 'آگهی ها')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ $status == 'all' ? 'is-active' : '' }}" wire:click="all">@yield('title')</a>
                <a class="tab__item {{ $status == 'تایید شده' ? 'is-active' : '' }}" wire:click="confirmed">آگهی های
                    تایید شده</a>
                <a class="tab__item {{ $status == 'رد شده' ? 'is-active' : '' }}" wire:click="rejected">آگهی های رد
                    شده</a>
                <a class="tab__item {{ $status == null ? 'is-active' : '' }}" wire:click="adAwaitingConfirmation">آگهی
                    های در انتظار تایید</a>
                <a class="tab__item {{ $status == 'adsRemoved' ? 'is-active' : '' }}" wire:click="adsRemoved">
                    آگهی های حذف شده
                </a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table table_ad">
                        @if($readyToLoad)
                            <tbody>
                            @if($ads)
                                @foreach($ads as $ad)
                                    @if($ad->adImages->where('originalPhoto', true)->first())
                                        <tr role="row">
                                            <td class="td-ad-img">
                                                <a href="{{ route('ad.show', $ad->id) }}" class="myAd">
                                                    <img
                                                        src="{{ asset('storage/' . $ad->adImages->where('originalPhoto', true)->first()->img) }}"
                                                        class="border-radius-3" alt="img">
                                                    @if($ad->upgrades->count() > 0)
                                                        <div>
                                                            @foreach($ad->upgrades as $upgrade)
                                                                <span class="badge">{{ $upgrade->title }}</span>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </a>
                                                <span class="badge font-size-14 @if($ad->status == 'تایید شده' )
                                                                    bg-success
                                                                @elseif($ad->status == 'رد شده')
                                                                    bg-danger
                                                                @else
                                                                    bg-primary
                                                                @endif">
                                                                @if($ad->status == 'تایید شده' )
                                                        تایید شده
                                                    @elseif($ad->status == 'رد شده')
                                                        رد شده
                                                    @else
                                                        در انتطار تایید
                                                    @endif
                                                            </span>
                                            </td>
                                            <td class="td-ad-info">
                                                <h2 class="title_h2"><a
                                                        href="{{ route('ad.show', $ad->id) }}">{{ $ad->title }}</a></h2>
                                                <p>
                                                    <time>{{ $ad->created_at_difference() }}</time>
                                                </p>
                                                <p>{{ $ad->state->name . ' , ' . $ad->city->name . ' , ' . $ad->area->name }}</p>
                                                <p><strong>{{ $ad->price }}</strong> تومان</p>
                                            </td>
                                            <td class="position-relative">
                                                @if($status != 'adsRemoved')
                                                    <button wire:click="confirmation({{ $ad->id }})"
                                                            class="btn p-2 border-radius-0 font-size-12 btn-success">تایید
                                                    </button>
                                                    <button wire:click="reject({{ $ad->id }})"
                                                            class="btn p-2 border-radius-0 font-size-12 btn-danger">عدم
                                                        تایید
                                                    </button>
                                                    <button wire:click="awaitingConfirmation({{ $ad->id }})"
                                                            class="btn p-2 border-radius-0 font-size-12 btn-primary">در
                                                        انتظار تایید
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                            </tbody>
                            @if($ads)
                                {{ $ads->render() }}
                            @endif
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

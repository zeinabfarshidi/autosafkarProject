@section('title', 'مدارک فنی کاربران')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ $status == 'all' ? 'is-active' : '' }}" wire:click="all">@yield('title')</a>
                <a class="tab__item {{ $status == 'تایید شده' ? 'is-active' : '' }}" wire:click="confirmed">مدارک
                    تایید شده</a>
                <a class="tab__item {{ $status == 'رد شده' ? 'is-active' : '' }}" wire:click="rejected">مدارک رد
                    شده</a>
                <a class="tab__item {{ $status == null ? 'is-active' : '' }}" wire:click="adAwaitingConfirmation">
                    مدارک در انتظار تایید
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table table_ad">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>تصویر مدارک</th>
                            <th>کاربر</th>
                            <th>فعالیت اصلی</th>
                            <th></th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @if($technicalDegrees)
                                @foreach($technicalDegrees as $technicalDegree)
                                    <tr role="row">
                                        <td class="td-ad-img">
                                                <a href="{{ route('technical-degree.show', $technicalDegree->id) }}" target="_blank">
                                                    <img
                                                        src="{{ asset('storage/' . $technicalDegree->img) }}"
                                                        class="border-radius-3" alt="img">
                                                </a>
                                                <span class="badge font-size-14 @if($technicalDegree->status == 'تایید شده' )
                                                                    bg-success
                                                                @elseif($technicalDegree->status == 'رد شده')
                                                                    bg-danger
                                                                @else
                                                                    bg-primary
                                                                @endif">
                                                                @if($technicalDegree->status == 'تایید شده' )
                                                        تایید شده
                                                    @elseif($technicalDegree->status == 'رد شده')
                                                        رد شده
                                                    @else
                                                        در انتطار تایید
                                                    @endif
                                                            </span>
                                            </td>
                                        <td>{{ $technicalDegree->user->name }}</td>
                                        <td>
                                            @if($technicalDegree->user->profile->adCategory)
                                                {{ $technicalDegree->user->profile->adCategory->name }}
                                            @endif
                                        </td>
                                            <td class="position-relative">
                                                <button wire:click="confirmation({{ $technicalDegree->id }})"
                                                        class="btn p-2 border-radius-0 font-size-12 btn-success">تایید
                                                </button>
                                                <button wire:click="reject({{ $technicalDegree->id }})"
                                                        class="btn p-2 border-radius-0 font-size-12 btn-danger">عدم
                                                    تایید
                                                </button>
                                                <button wire:click="awaitingConfirmation({{ $technicalDegree->id }})"
                                                        class="btn p-2 border-radius-0 font-size-12 btn-primary">در
                                                    انتظار تایید
                                                </button>
                                            </td>
                                        </tr>
                                @endforeach
                            @endif
                            </tbody>
                            @if($technicalDegrees)
                                {{ $technicalDegrees->render() }}
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

@section('title', 'آگهی های من')
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <livewire:home.profile.sidebar/>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title">@yield('title')</h1>
                                <div>
                                    <a href="{{ route('ad.create') }}"
                                       class="btn btn-primary text-white d-flex jsc-space-between alc-center pt-0 pb-0 w-100">
                                        <i class="bi bi-plus ml-1 font-size-24"></i>
                                        <span>ثبت آگهی</span>
                                    </a>
                                    <a href="{{ route('ad.trashed') }}"
                                       class="btn btn-danger text-white float-end mt-2 w-100">
                                        سطل زباله ({{ \App\Models\Ad::onlyTrashed()->count() }})
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex btn-status">
                                <button
                                    class="btn text-dark border-radius-0 {{ $status == 'تایید شده' ? 'btn-active' : '' }}"
                                    wire:click="activeAd">فعال
                                </button>
                                <button
                                    class="btn text-dark border-radius-0 {{ $status == 'رد شده' ? 'btn-active' : '' }}"
                                    wire:click="inactiveAd">غیرفعال
                                </button>
                                <button class="btn text-dark border-radius-0 {{ !$status ? 'btn-active' : '' }}"
                                        wire:click="awaitingConfirmation">در انتظار تایید
                                </button>
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                <div class="table__box w-100" wire:init="loadInformation">
                                    <table class="table table_ad">
                                        @if($readyToLoad)
                                            <tbody>
                                            @if($ads)
                                                @foreach($ads as $ad)
                                                    <tr role="row">
                                                        <td class="td-ad-img">
                                                            @if($ad->adImages->where('originalPhoto', true)->first())
                                                                <a onclick="viewAd(event, {{ $ad->id }})" href="{{ route('ad.show', $ad->id) }}"
                                                                   target="_blank" class="myAd">
                                                                    <img
                                                                        src="{{ asset('storage/' . $ad->adImages->where('originalPhoto', true)->first()->img) }}"
                                                                        width="" alt="img">
                                                                    @if($ad->upgrades->count() > 0)
                                                                        <div>
                                                                            @foreach($ad->upgrades as $upgrade)
                                                                                <span class="badge">{{ $upgrade->title }}</span>
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                </a>
                                                            @endif
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
                                                                    href="{{ route('ad.show', $ad->id) }}"
                                                                    target="_blank">{{ $ad->title }}</a></h2>
                                                            <p>
                                                                <time>{{ $ad->created_at_difference() }}</time>
                                                            </p>
                                                            <p>{{ $ad->state->name . ' , ' . $ad->city->name . ' , ' . $ad->area->name }}</p>
                                                            <strong>از {{ $ad->minPrice }} تومان تا {{ $ad->maxPrice }}
                                                                تومان</strong>
                                                        </td>
                                                        <td class="position-relative">
                                                            <div class="position-absolute bottom-0 left-0 w-100">
                                                                <button wire:click="delete({{ $ad->id }})"
                                                                        class="mlg-15 cursor-pointer"
                                                                        id="delete{{ $ad->id }}"
                                                                        title="حذف"></button>
                                                                <a onclick="deleteItem(event, {{ $ad->id }})"
                                                                   class="item-delete mlg-15 cursor-pointer"
                                                                   title="حذف"></a>
                                                                <a href="{{ route('ad.update', $ad->id) }}"
                                                                   class="item-edit " title="ویرایش"></a>
                                                            </div>
                                                        </td>
                                                    </tr>
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
            </div>
        </div>
    </main>
    <script>
        Livewire.emit('postAdded')
    </script>
</div>

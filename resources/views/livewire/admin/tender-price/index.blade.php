@section('title', 'قیمت مناقصه')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->is('admin/tenderPrice') ? 'is-active' : '' }}"
                   href="{{ route('tenderPrice.index') }}">
                    @yield('title')
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
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>قیمت</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($tenderPrices as $tenderPrice)
                                <tr role="row">
                                    <td>{{ $tenderPrice->price }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $tenderPrices->render() }}
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white pb-5 h-fit-content">
                <p class="box__title">ثبت قیمت مناقصه</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    @include('errors.error')
                    <div class="form-group mb-2">
                        <input type="text" wire:model.lazy="tenderPrice.price" class="form-control" placeholder="تومان"
                               onkeypress="return isNumberKey(this, event);"
                               oninput="this.value = this.value.replace(/^0/g, '');">
                    </div>
                    <button class="btn btn-brand mt-3">ثبت قیمت</button>
                </form>
            </div>
        </div>
    </div>
</div>

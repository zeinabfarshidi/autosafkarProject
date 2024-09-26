@section('title', 'مناطق')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item" href="{{ route('state.index') }}">استانها</a>
                <a class="tab__item" href="{{ route('city.index') }}">شهرها</a>
                <a class="tab__item is-active" href="{{ route('area.index') }}">@yield('title')</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20" placeholder="جستجو...">
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
                            <th>منطقه</th>
                            <th>شهر</th>
                            <th>استان</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($areas as $area)
                                <tr role="row">
                                    <td>{{ $area->name }}</td>
                                    <td>{{ $area->city->name }}</td>
                                    <td>{{ $area->city->state->name }}</td>
                                    <td>
                                        <div class="d-flex jsc-center alc-center">
                                            <a wire:click="delete({{ $area->id }})" class="item-delete mlg-15" title="حذف"></a>
                                            <a href="{{ route('area.update', $area->id) }}" class="item-edit" title="ویرایش"></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $areas->render() }}
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white">
                <p class="box__title">افزودن</p>
                <form wire:submit.prevent="store" class="padding-10" role="form">
                    @include('errors.error')
                    <div class="form-group mb-2">
                        <select wire:model.lazy="area.city_id" name="city_id" class="form-control">
                            <option value="">انتخاب شهر</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="area.name" type="text" placeholder="نام منطقه" class="form-control">
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('title', 'شهر ها')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item" href="{{ route('state.index') }}">استانها</a>
                <a class="tab__item is-active" href="{{ route('city.index') }}">@yield('title')</a>
                <a class="tab__item" href="{{ route('state.index') }}">مناطق</a>
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
                            <th>شهر</th>
                            <th>استان</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($cities as $city)
                                <tr role="row">
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->state->name }}</td>
                                    <td>
                                        <div class="d-flex jsc-center alc-center">
                                            <a wire:click="delete({{ $city->id }})" class="item-delete mlg-15" title="حذف"></a>
                                            <a href="{{ route('city.show', $city->id) }}" class="item-eye mlg-15"></a>
                                            <a href="{{ route('city.update', $city->id) }}" class="item-edit" title="ویرایش"></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $cities->render() }}
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
                        <select wire:model.lazy="city.state_id" name="state_id" class="form-control">
                            <option value="">انتخاب استان</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="city.name" type="text" placeholder="نام شهر" class="form-control">
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

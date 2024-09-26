@section('title', 'استانها')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('state.index') }}">@yield('title')</a>
                <a class="tab__item" href="{{ route('city.index') }}">شهرها</a>
                <a class="tab__item" href="{{ route('area.index') }}">مناطق</a>
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
                            <th>استان</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($states as $state)
                                <tr role="row">
                                    <td>{{ $state->name }}</td>
                                    <td>
                                        <div class="d-flex jsc-center alc-center">
                                            <a wire:click="delete({{ $state->id }})" class="item-delete mlg-15" title="حذف"></a>
                                            <a href="{{ route('state.show', $state->id) }}" class="item-eye mlg-15"></a>
                                            <a href="{{ route('state.update', $state->id) }}" class="item-edit" title="ویرایش"></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $states->render() }}
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
                        <input wire:model.lazy="state.name" type="text" placeholder="نام استان" class="form-control">
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

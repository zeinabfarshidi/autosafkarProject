@section('title', 'ارتقا آگهی')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->is('admin/upgrade') ? 'is-active' : '' }}"
                   href="{{ route('upgrade.index') }}">
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
                            <th>عنوان ارتقاء</th>
                            <th>قیمت</th>
                            <th>الویت نمایش</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($upgrades as $upgrade)
                                <tr role="row">
                                    <td>{{ $upgrade->title }}</td>
                                    <td>{{ $upgrade->price }}</td>
                                    <td>{{ $upgrade->showNumber }}</td>
                                    <td>
                                        <button wire:click="delete({{ $upgrade->id }})"
                                                class="mlg-15 cursor-pointer" id="delete{{ $upgrade->id }}"
                                                title="حذف"></button>
                                        <a onclick="deleteItem(event, {{ $upgrade->id }})"
                                           class="item-delete mlg-15 cursor-pointer"
                                           title="حذف"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $upgrades->render() }}
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
                        <input type="text" wire:model.lazy="upgrade.title" class="form-control" placeholder="عنوان ارتقاء">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" wire:model.lazy="upgrade.price" class="form-control" placeholder="قیمت (تومان)"
                               onkeypress="return isNumberKey(this, event);"
                               oninput="this.value = this.value.replace(/^0/g, '');">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" wire:model.lazy="upgrade.showNumber" class="form-control" placeholder="اولویت نمایش"
                               onkeypress="return isNumberKey(this, event);"
                               oninput="this.value = this.value.replace(/^0/g, '');">
                    </div>
                    <button class="btn btn-brand mt-3">ثبت قیمت</button>
                </form>
            </div>
        </div>
    </div>
</div>

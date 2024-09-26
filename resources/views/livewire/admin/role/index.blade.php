@section('title', 'سطوح دسترسی')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->routeIs('roles.index') ? 'is-active' : '' }}"
                   href="{{ route('roles.index') }}">@yield('title')</a>
                |
                <a class="tab__item">{{ __('app.search') }} </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
                <a href="{{ route('roles.trashed') }}" class="tab__item btn btn-danger text-white float-end mt-2">
                    سطل زباله ({{ \App\Models\Role::onlyTrashed()->count() }})
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>سطح کاربری</th>
                            <th>نام لاتین</th>
                            <th>دسترسی های مجاز</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($roles as $role)
                                <tr role="row">
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->latinName }}</td>
                                    <td>
                                        @if($role->latinName != 'admin')
                                            <select class="form-control">
                                                <option>مشاهده</option>
                                                @foreach($role->permissions->groupBy('sectionName') as $key => $value)
                                                    <option disabled class="bg-secondary text-white">{{ $key }}</option>
                                                    @foreach($value as $item)
                                                        <option disabled>
                                                            {{ $item->operationName }}
                                                        </option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        @endif
                                    </td>
                                    <td>
                                        <button wire:click="delete({{ $role->id }})"
                                                class="mlg-15 cursor-pointer" id="delete{{ $role->id }}"
                                                title="حذف"></button>
                                        <a onclick="deleteItem(event, {{ $role->id }})"
                                           class="item-delete mlg-15 cursor-pointer"
                                           title="حذف"></a>
                                        <a href="{{ route('roles.update', $role->id) }}" class="item-edit "
                                           title="ویرایش"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $roles->render() }}
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
                        <input wire:model.lazy="role.name" type="text" placeholder="عنوان سطح دسترسی"
                               class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="role.latinName" type="text" placeholder="نام لاتین سطح دسترسی"
                               class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <select wire:model="permission_id" wire:change="addId" class="form-control">
                            <option value="">دسترسی های مجاز</option>
                            @foreach($permissions->groupBy('sectionName') as $key => $value)
                                <option value="" disabled class="bg-secondary text-white">{{ $key }}</option>
                                @foreach($value as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->operationName }}
                                    </option>
                                @endforeach
                            @endforeach
                        </select>
                        @if(count($ids) > 0)
                            <div class="alert">
                                @foreach($ids as $id)
                                    <div class="badge border text-dark mb-2">
                                        <i wire:click="deleteId({{ \App\Models\Permission::find($id)->id }})"
                                           class="bi bi-x font-size-15 cursor-pointer"></i>
                                        {{ \App\Models\Permission::find($id)->operationName }} {{ \App\Models\Permission::find($id)->sectionName }}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

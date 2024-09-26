@section('title', 'سطل زباله')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->routeIs('roles.trashed') ? 'is-active' : '' }}"
                   href="{{ route('roles.trashed') }}">@yield('title')</a>
{{--                |--}}
{{--                <a class="tab__item">جستجو: </a>--}}
{{--                <a class="t-header-search">--}}
{{--                    <form action="" onclick="event.preventDefault();">--}}
{{--                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20" placeholder="جستجو...">--}}
{{--                    </form>--}}
{{--                </a>--}}
                <a href="{{ route('roles.trashed') }}" class="tab__item btn btn-danger text-white float-end">
                    سطل زباله ({{ \App\Models\Role::onlyTrashed()->count() }})
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>سطح کاربری</th>
                            <th>نام لاتین</th>
                            <th>سطح کاربری پیش فرض</th>
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
                                        <button wire:click="updateDefaultRole({{ $role->id }})" class="bg-transparent @if($role->default_role) item-confirm @else item-reject @endif"></button>
                                    </td>
                                    <td>
                                        <a wire:click="restore({{ $role->id }})" class="item-checkouts" title="بازیابی"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $roles->render() }}
                        @else
                            <div class="alert alert-warning text-left direction-ltr">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

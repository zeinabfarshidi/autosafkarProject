@section('title', 'سطل زباله')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->routeIs('category.trashed') ? 'is-active' : '' }}"
                   href="{{ route('category.trashed') }}">@yield('title')</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
                <a href="{{ route('category.trashed') }}" class="tab__item btn btn-danger text-white float-end">
                    سطل زباله ({{ \App\Models\AdCategory::onlyTrashed()->count() }})
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>نام</th>
                            <th>نام لاتین</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($categories as $category)
                                <tr role="row">
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->latinName }}</td>
                                    <td><img src="{{ asset('storage/' . $category->img) }}" width="100" alt="img"></td>
                                    <td>
                                        <a wire:click="restore({{ $category->id }})" class="item-checkouts"
                                           title="بازیابی"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $categories->render() }}
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('title', 'مناطق شهر ' . $city->name)
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active"
                   href="{{ route('city.show', $city->id) }}">@yield('title')</a>
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
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>منطقه</th>
                            <th>شهر</th>
                            <th>استان</th>
                            <th>وضعیت</th>
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
                                        <button wire:click="updateStatus({{ $area->id }})" class="badge @if($area->status) btn-success @else btn-danger @endif">
                                            @if($area->status) فعال @else غیرفعال @endif
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex jsc-center alc-center">
                                            <a wire:click="delete({{ $area->id }})" class="item-delete mlg-15" title="حذف"></a>
                                            <a href="{{ route('state.update', $area->id) }}" class="item-edit mlg-15" title="ویرایش"></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $areas->render() }}
                        @else
                            <div class="alert alert-warning">در حال خواندن اطلاعات ...</div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

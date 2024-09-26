@section('title', 'مقالات')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ $status == 'all' ? 'is-active' : '' }}" wire:click="all">@yield('title')</a>
                <a class="tab__item {{ $status == 'تایید شده' ? 'is-active' : '' }}" wire:click="confirmed">تایید
                    شده</a>
                <a class="tab__item {{ $status == 'رد شده' ? 'is-active' : '' }}" wire:click="rejected">رد شده</a>
                <a class="tab__item {{ $status == null ? 'is-active' : '' }}" wire:click="adAwaitingConfirmation">در
                    انتظار تایید</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
                <div class="float-end d-flex">
                    @if(\App\Http\Livewire\Admin\Dashboard\Sidebar::permissionToView($section, 'create'))
                        <a href="{{ route('post.create') }}"
                           class="tab__item btn btn-primary text-white mt-2 d-flex alc-center pt-0 pb-0"
                           style="margin-left: 5px">
                            <i class="bi bi-plus ml-1 font-size-24"></i>
                            نوشتن مقاله
                        </a>
                    @endif
                    <a href="{{ route('category.trashed') }}" class="tab__item btn btn-danger text-white mt-2">
                        سطل زباله ({{ \App\Models\Post::onlyTrashed()->count() }})
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                @if($readyToLoad)
                    <div class="bg-white p-3">
                        {{ $posts->render() }}
                        <div class="table__box">
                            <table class="table">
                                <thead role="rowgroup">
                                <tr role="row" class="title-row">
                                    <th>مقاله</th>
                                    <th>نویسنده</th>
                                    <th>تصویر</th>
                                    <th>تاریخ</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr role="row">
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td><img src="{{ asset('storage/' . $post->img) }}" width="100" alt=""></td>
                                        <td>{{ verta($post->created_at)->format('Y/m/d') }}</td>
                                        <td>
                                            <button wire:click="delete({{ $post->id }})"
                                                    class="mlg-15 cursor-pointer" id="delete{{ $post->id }}"></button>
                                            <a onclick="deleteItem(event, {{ $post->id }})"
                                               class="item-delete mlg-15 cursor-pointer"></a>

                                            <a href="{{ route('post.show', $post->id) }}" target="_blank"
                                               class="item-eye mlg-15"></a>

                                            <a href="{{ route('post.update', $post->id) }}" target="_blank"
                                               class="item-edit mlg-15"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="alert-loading">{{ __('app.loading') }}</div>
                @endif
            </div>
        </div>
    </div>
</div>

@section('title', 'نظرات')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ $status == 'all' ? 'is-active' : '' }}" wire:click="all">@yield('title')</a>
                <a class="tab__item {{ $status == 'تایید شده' ? 'is-active' : '' }}" wire:click="confirmed">تایید شده</a>
                <a class="tab__item {{ $status == 'رد شده' ? 'is-active' : '' }}" wire:click="rejected">رد شده</a>
                <a class="tab__item {{ $status == null ? 'is-active' : '' }}" wire:click="adAwaitingConfirmation">در انتظار تایید</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
                <a class="float-left">
                    <select wire:model="commentable_type" class="form-control">
                        <option value="">انتخاب نظرات هر قسمت</option>
                        @foreach(\App\Models\Comment::groupBy('commentable_type')->get('commentable_type') as $item)
{{--                            @if($item->commentable_type::persiannameOfTheModel() != 'پاسخ ها')--}}
                                <option value="{{ $item->commentable_type }}">
                                    {{ $item->commentable_type::persiannameOfTheModel() }}
                                </option>
{{--                            @endif--}}
                        @endforeach
                    </select>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                @if($readyToLoad)
                    <div class="bg-white p-3">
                        {{ $comments->render() }}
                        <div class="table__box">
                            <table class="table">
                                <thead role="rowgroup">
                                <tr role="row" class="title-row">
                                    <th>فرستنده</th>
                                    <th>دریافت کننده</th>
                                    <th>دیدگاه</th>
                                    <th>تاریخ</th>
                                    <th>تعداد پاسخ ها</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr role="row">
                                        <td>{{ $comment->user->name }}</td>
                                        <td>{{ $comment->commentable->user->name }}</td>
                                        <td align="right">{!! $comment->text !!}</td>
                                        <td>{{ verta($comment->created_at)->format('Y/m/d') }}</td>
                                        <td>{{ $comment->comments->count() }}</td>
                                        <td class="@if($comment->status == 'تایید شده') text-success @elseif($comment->status == 'رد شده') text-danger @else text-primary @endif">
                                            @if($comment->status)
                                                {{ $comment->status }}
                                            @else
                                                در انتظار تایید
                                            @endif
                                        </td>
                                        <td>
                                            <button wire:click="delete({{ $comment->id }})"
                                                    class="mlg-15 cursor-pointer" id="delete{{ $comment->id }}"
                                                    title="حذف"></button>
                                            <a onclick="deleteItem(event, {{ $comment->id }}, 'پاسخ های این کامنت هم حذف می شود')"
                                               class="item-delete mlg-15 cursor-pointer"
                                               title="حذف"></a>

                                            <a wire:click="reject({{ $comment->id }})" class="item-reject mlg-15" title="رد"></a>

                                            <a href="{{ route('comment.show', $comment->id) }}" target="_blank" class="item-eye mlg-15"
                                               title="مشاهده"></a>

                                            <a wire:click="confirm({{ $comment->id }})" class="item-confirm mlg-15" title="تایید"></a>
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

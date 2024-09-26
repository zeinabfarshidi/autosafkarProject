@section('title', 'سفارشات من')
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <livewire:home.profile.sidebar/>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title">@yield('title')</h1>
                                <a href="{{ route('order.trashed') }}" class="btn btn-danger text-white">سطل زباله ({{ \App\Models\Order::onlyTrashed()->count() }})</a>
                            </div>
                            {{--                                                        <div class="d-flex btn-status">--}}
                            {{--                                                            <button class="btn text-dark border-radius-0 {{ $status == 'تایید شده' ? 'btn-active' : '' }}" wire:click="activeAd">فعال</button>--}}
                            {{--                                                            <button class="btn text-dark border-radius-0 {{ $status == 'رد شده' ? 'btn-active' : '' }}" wire:click="inactiveAd">غیرفعال</button>--}}
                            {{--                                                            <button class="btn text-dark border-radius-0 {{ !$status ? 'btn-active' : '' }}" wire:click="awaitingConfirmation">در انتظار تایید</button>--}}
                            {{--                                                        </div>--}}
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                <div class="table__box w-100" wire:init="loadInformation">
                                    <table class="table table_ad">
                                        @if($readyToLoad)
                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr role="row">
                                                    <td class="td-ad-img">
                                                        @if($order->img)
                                                            <a href="{{ route('order.show', $order->id) }}" target="_blank">
                                                                <img src="{{ asset('storage/' . $order->img) }}" class="border-radius-3" alt="img">
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td class="td-ad-info">
                                                        <a href="{{ route('order.show', $order->id) }}" target="_blank">
                                                            {{ $order->problem }}
                                                        </a>
                                                        <p class="content_col">{!! $order->description !!}</p>
                                                    </td>
                                                    <td class="position-relative">
                                                        <div class="position-absolute bottom-0 left-0 w-100">
                                                            <button wire:click="delete({{ $order->id }})"
                                                                    class="mlg-15 cursor-pointer" id="delete{{ $order->id }}"
                                                                    title="حذف"></button>
                                                            <a onclick="deleteItem(event, {{ $order->id }})"
                                                               class="item-delete mlg-15 cursor-pointer"
                                                               title="حذف"></a>
                                                            <a href="{{ route('order.update', $order->id) }}"
                                                               class="item-edit " title="ویرایش"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            {{ $orders->render() }}
                                        @else
                                            <div class="alert-loading">{{ __('app.loading') }}</div>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

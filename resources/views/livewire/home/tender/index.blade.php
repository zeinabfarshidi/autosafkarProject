@section('title', 'مناقصه')
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
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                <div class="table__box w-100" wire:init="loadInformation">
                                    <table class="table table_ad">
                                        @if($readyToLoad)
                                            <tbody>
                                            @foreach($tenders as $tender)
                                                @if($tender->order)
                                                    <tr role="row">
                                                        <td class="td-ad-img">
                                                            <a href="{{ route('order.show', $tender->order->id) }}" target="_blank">
                                                                <img src="{{ asset('storage/' . $tender->order->img) }}" class="border-radius-3" alt="img">
                                                            </a>
                                                        </td>
                                                        <td class="td-ad-info">
                                                            <a href="{{ route('order.show', $tender->order->id) }}" class="title_h2" target="_blank">
                                                                {{ $tender->order->problem }}
                                                                <p class="content_col mt-4">{!! $tender->order->description !!}</p>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                            {{ $tenders->render() }}
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

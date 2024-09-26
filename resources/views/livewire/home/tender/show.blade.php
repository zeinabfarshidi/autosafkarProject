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
                            {{--                            <div class="d-flex btn-status">--}}
                            {{--                                <button class="btn text-dark border-radius-0 {{ $status == 'تایید شده' ? 'btn-active' : '' }}" wire:click="activeAd">فعال</button>--}}
                            {{--                                <button class="btn text-dark border-radius-0 {{ $status == 'رد شده' ? 'btn-active' : '' }}" wire:click="inactiveAd">غیرفعال</button>--}}
                            {{--                                <button class="btn text-dark border-radius-0 {{ !$status ? 'btn-active' : '' }}" wire:click="awaitingConfirmation">در انتظار تایید</button>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                {!! $tender->request->description  !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

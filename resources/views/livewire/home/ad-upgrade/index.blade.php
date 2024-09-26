@section('title', 'افزایش بازدید')
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
                        <div class="card-body d-flex jsc-space-between p-0 m-0">
                            <div class="w-100 ad-upgrade-list">
                                <small>این امکان، آگهی شما رو به اول لیست آگهی‌ها برمی‌گردونه.</small>
                                <ul>
                                    @foreach($upgrades as $upgrade)
                                        <li class="d-flex jsc-start alc-center border-bottom">
                                            <div>
                                                <input type="checkbox"
                                                           @if($ad->upgrades->where('id', $upgrade->id)->first())
                                                               checked disabled
                                                           @endif
                                                       onchange="upgradeItem(event, {{ $upgrade->id }})"
                                                       value="{{ $upgrade->price }}"
                                                       name="switch"
                                                       class="switch_chk" id="switch{{ $upgrade->id }}">
                                                <label for="switch{{ $upgrade->id }}"
                                                       class="switch"><span></span></label>
                                            </div>
                                            <strong>{{ $upgrade->title }}</strong>
                                            <strong>{{ $upgrade->price }} تومان</strong>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-upgrade-payment border">
                                <div class="card-upgrade-payment-header border-bottom">
                                    <form action="">
                                        <div class="d-flex jsc-space-between alc-center discount-code">
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="کد تخفیف‌تون رو وارد کنید">
                                            <button class="btn">
                                                اعمال کد
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <form action="{{ route('adUpgrade.store') }}" method="post">
                                    @csrf
                                    <div class="card-upgrade-payment-body">
                                        <strong class="">خلاصه پرداخت</strong>
                                        <input type="hidden" value="{{ json_encode($upgradeIds) }}" name="upgradeIds"
                                               id="upgradeIds" class="form-control">
                                        <input type="hidden" name="ad_id" value="{{ $ad->id }}" class="form-control">
                                        <div class="d-flex jsc-space-between alc-center">
                                            <span>قیمت</span>
                                            <span><span class="totalPayment">0</span> تومان</span>
                                        </div>
                                        <div class="d-flex jsc-space-between alc-center">
                                            <span>تخفیف</span>
                                            <span>0 تومان</span>
                                        </div>
                                    </div>
                                    <div class="card-upgrade-payment-footer">
                                        <div class="d-flex jsc-space-between alc-center">
                                            <span>جمع پرداختی</span>
                                            <span><span class="totalPayment">0</span> تومان</span>
                                        </div>
                                        <button class="btn btn-primary mt-5 w-100">پرداخت <span
                                                class="totalPayment">0</span>
                                            تومان
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-slot name="scripts">
        <script>
            var array = [];
            var upgradeIds = jQuery.parseJSON($('#upgradeIds').val());
            function upgradeItem(event, id){
                var price = $('#switch' + id).val();
                var obj = {};
                if ($('#switch' + id).prop('checked')){
                    array.push(Number(price))
                    upgradeIds.push(id)
                }
                else{
                    array = array.filter((n) => {return n != price});
                    upgradeIds = upgradeIds.filter((n) => {return n != id});
                }
                var sum = 0;
                for (const i in array) {
                    sum = sum + array[i];
                }
                $('.totalPayment').text(sum);
                $('#upgradeIds').val(JSON.stringify(upgradeIds));
            }
        </script>
    </x-slot>
</div>

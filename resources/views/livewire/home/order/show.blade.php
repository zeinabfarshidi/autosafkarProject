@section('title', $order->problem)
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
                                <div class="">
                                    <div class="font-size-12">تاریخ سفارش:
                                        <strong>{{ verta($order->created_at)->format('Y/m/d') }}</strong>
                                    </div>
                                    @if(auth()->user()->id == $order->user_id && !$order->tender)
                                        <a href="{{ route('tender.create', $order->id) }}"
                                           class="btn btn-primary text-white mt-3 w-100">مناقصه</a>
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex btn-status">
                                <button
                                    class="btn text-dark border-radius-0 {{ $view == 'description' ? 'btn-active' : '' }}"
                                    wire:click="desc">توضیحات
                                </button>
                                <button
                                    class="btn text-dark border-radius-0 {{ $view == 'serviceProviders' ? 'btn-active' : '' }}"
                                    wire:click="serviceProviders">خدمات دهنده ها
                                </button>
                                @can('orderConfirmation', $order)
                                    <button
                                        class="btn text-dark border-radius-0 {{ $view == 'requestConfirmation' ? 'btn-active' : '' }}"
                                        wire:click="requestConfirmation">
                                        ثبت پیشنهاد
                                    </button>
                                @endcan
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            @if($view == 'description')
                                <img src="{{ asset('storage/'. $order->img) }}"
                                     class="w-100 border-radius-3 single-page-request-img" alt="">
                                <p class="mt-4">{!! $order->description !!}</p>
                            @elseif($view == 'serviceProviders' && $order->offers->count() > 0)
                                <div class="table__box w-100">
                                    <table class="table table_ad">
                                        <tbody>
                                        @foreach($order->offers as $offer)
                                            <tr role="row" align="right">
                                                <td class="tenderOffer">
                                                    <img src="{{ asset('storage/' . $offer->user->img) }}"
                                                         alt=""
                                                         class="border-radius-3">
                                                </td>
                                                <td class="td-ad-img">
                                                    <h3 class="title_h2">{{ $offer->user->name }}</h3>
                                                    <strong>{{ $offer->user->mobile }}</strong>
                                                    <div>قیمت : <strong class="">{{ $offer->price }}
                                                            تومان</strong></div>
                                                    <div>مدت زمان انجام کار: <strong>{{ $offer->numberDays . ' روز' }}</strong></div>
                                                </td>
                                                <td>
                                                    <p class="content_col">{!! $offer->description !!}</p>
                                                </td>
                                                <td>
                                                    <input type="radio" wire:change="cooperation({{ $offer->id }})"
                                                           {{ $offer->cooperation ? 'checked' : '' }} value="366"
                                                           name="switch" class="switch_chk" id="switch{{ $offer->id }}">
                                                    <label for="switch{{ $offer->id }}"
                                                           class="switch"><span></span></label>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @elseif($view == 'requestConfirmation')
                                <div class="w-div-49 w-100">
                                    <div class="m-auto">
                                        <form wire:submit.prevent="store()">
                                            <div>
                                                <label for="price">قیمت انجام کار</label>
                                                <input type="text" wire:model.lazy="price" id="price"
                                                       class="form-control"
                                                       onkeypress="return isNumberKey(this, event);"
                                                       oninput="this.value = this.value.replace(/^0/g, '');"
                                                       placeholder="تومان">
                                                @error('price')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="numberDays">مدت زمان انجام کار</label>
                                                <input type="text" wire:model.lazy="numberDays" id="numberDays"
                                                       class="form-control"
                                                       onkeypress="return isNumberKey(this, event);"
                                                       oninput="this.value = this.value.replace(/^0/g, '');"
                                                       placeholder="تعداد روز">
                                                @error('numberDays')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="description">توضیحات و نحوه انجام کار</label>
                                                <textarea wire:model.lazy="description" id="description"
                                                          class="form-control"
                                                          placeholder="توضیحات"></textarea>
                                                @error('description')
                                                <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button class="btn btn-primary text-white mt-3">ارسال</button>
                                        </form>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @if($this->cooperationExpirationDate())
        <div class="swalContainer">
            <div class="swalConfirm d-flex jsc-center alc-center" >
                <div class="card bg-white">
                    <div class="card-header d-flex jsc-space-between alc-center pb-3">
                        <h2 class="swalConfirmTitle">سفارش شما توسط {{ $order->cooperation->offer->user->name }} انجام شد؟</h2>
                        <span class="font-size-24 cursor-pointer" wire:click="close">x</span>
                    </div>
                    <div class="card-body p-0">
                        <form wire:submit.prevent="resultCooperation()">
                            <div class="d-flex jsc-space-between alc-center mt-3">
                                <div>
                                    <input type="radio" wire:model="do" name="do" value="do" id="done">
                                    <label for="done">انجام شد</label>
                                </div>
                                <div>
                                    <input type="radio" wire:model="do" name="do" value="not-done" id="not-done">
                                    <label for="not-done">انجام نشد</label>
                                </div>
                            </div>
                            @if($do == 'not-done')
                                <div class="notificationGroup mt-3">
                                    <input type="checkbox" wire:model="delay" name="delay" class="form-control" id="option4">
                                    <label for="option4">اعلام تاخیر: </label>
                                </div>
                            @endif
                            @if($do == 'do')
                                <div class="border mt-4 p-4 border-radius-3">
                                    <p class="text-center">خدمات {{ $order->cooperation->offer->user->name }} چطور بود؟</p>
                                    <div class="d-flex jsc-space-around alc-center">
                                        <div>
                                            <input type="radio" wire:model="result" name="result" id="satisfaction" value="satisfaction">
                                            <label for="satisfaction">رضایت</label>
                                        </div>
                                        <div>
                                            <input type="radio" wire:model="result" name="result" id="dissatisfaction" value="dissatisfaction">
                                            <label for="dissatisfaction">عدم رضایت</label>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($do)
                                <textarea wire:model="opinion" class="form-control mt-3 textarea font-size-13"
                                          placeholder="@if($do == 'do') نظرتان را درباره خدمات ارائه شده اینجا بنویسید @elseif($do == 'not-done') چرا انجام نشد؟ توضیح دهید @endif"></textarea>
                            @endif
                            <button class="btn btn-primary w-100 mt-4" @if(!$do || $do == 'do' && !$result) disabled @endif>ثبت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif





</div>

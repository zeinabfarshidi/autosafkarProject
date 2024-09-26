@section('title', 'ورود')
<div>
    <main class="bg--white h-100-vh">
        <div class="container">
            <div class="sign-page">
                <div class="login__form pb-5">
                    <h1 class="sign-page__title">ورود/ثبت نام</h1>
                    <form class="sign-page__form" wire:submit.prevent="store">
                        @csrf
                        <div>
                            <input type="text" wire:model.lazy="user.mobile" name="mobile" class="text text--right"
                                   placeholder="تلفن"/>
                            @error('user.mobile')
                            <p class="error">{{ $message }}</p>
                            @enderror
                            @if($sendSMSMessage)
                                <div class="alert alert-success" style="font-size: 12px">{!! $sendSMSMessage !!}</div>
                            @endif
                        </div>
                        @if($readyToLoad)
                            <div>
                                <input type="text" wire:model.lazy="user.code" name="code" class="text text--right"
                                       placeholder="کد تایید"/>
                                @error('user.code')
                                <p class="error">{{ $message }}</p>
                                @enderror
                                <p class="error">{{ $error }}</p>
                            </div>
                        @endif
                        @if($readyToLoadRegister)
                            <div>
                                <input type="text" wire:model.lazy="user.name" class="text text--right"
                                       placeholder="نام و نام خانوادگی"/>
                                @error('user.name')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <input type="password" wire:model.lazy="user.pass" name="password"
                                       class="text text--left"
                                       placeholder="رمز عبور"/>
                                @error('user.pass')
                                <p class="error">{{ $message }}</p>
                                @enderror
                                @error('password')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <input type="password" wire:model.lazy="user.pass_confirmation" class="text text--left"
                                       placeholder="تکرار رمز عبور"/>
                                @error('user.pass_confirmation')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            @error('user.role_id')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        @endif
{{--                        <div>--}}
{{--                            ارسال مجدد بعد از: <span id="countdown"></span>--}}
{{--                        </div>--}}
                        <button class="btn btn-primary mt-3" type="submit">ورود</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

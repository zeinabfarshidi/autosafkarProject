<x-app-layout>

    <x-slot name="title">
        - ورود
    </x-slot>
    <main class="bg--white">
        <div class="container">
            <div class="sign-page">
                <div class="login__form">
                    <h1 class="sign-page__title">ثبت نام</h1>
                    <form class="sign-page__form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="mobile" class="text text--right" placeholder="تلفن"/>
                            @error('mobile')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="name" class="text text--right" placeholder="نام و نام خانوادگی"/>
                            @error('name')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password" class="text text--left" placeholder="رمز عبور"/>
                            @error('password')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password_confirmation" class="text text--left"
                                   placeholder="تکرار رمز عبور"/>
                            @error('password_confirmation')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn btn--blue btn--shadow-blue width-100 mb-10" type="submit">
                            ثبت نام
                        </button>
                        <div class="sign-page__footer">
                            <span>عضو هستید ؟ </span>
                            <a href="{{ route('login') }}" class="color--46b2f0">صفحه ورود</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

<div>
    <div class="main-content  ">
        <div class="user-info bg-white padding-30 font-size-13">
            <form action="">
                <div class="profile__info border cursor-pointer text-center">
                    <div class="avatar__img"><img src="{{ asset('adminPanel/img/pro.jpg') }}" class="avatar___img">
                        <input type="file" accept="image/*" class="hidden avatar-img__input">
                        <div class="v-dialog__container" style="display: block;"></div>
                        <div class="box__camera default__avatar"></div>
                    </div>
                    <span class="profile__name">{{ auth()->user()->name }}</span>
                </div>
                <input class="text" placeholder="نام کاربری" value="نت کپی">
                <input class="text text-left" placeholder="ایمیل" value="admin@netcop.yir">
                <input class="text text-left" placeholder="شماره موبایل" value="09376108107">
                <input class="text text-left" placeholder="شماره کارت بانکی">
                <input class="text text-left" placeholder="شماره شبا بانکی">
                <input class="text text-left" placeholder="نام کاربری و آدرس پروفایل">
                <p class="input-help text-left margin-bottom-12" dir="ltr">
                    https://netcopy.ir/tutors/
                    <a href="https//netcopy/tutors/"></a>
                </p>
                <input class="text text-left" placeholder="رمز عبور">
                <p class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای
                    غیر الفبا مانند <strong>!@#$%^&amp;*()</strong> باشد.</p>
                <br>
                <textarea class="text" placeholder="درباره من مخصوص مدرسین"></textarea>
                <br>
                <br>
                <button class="btn btn-netcopy_net">ذخیره تغییرات</button>
            </form>
        </div>

    </div>
</div>

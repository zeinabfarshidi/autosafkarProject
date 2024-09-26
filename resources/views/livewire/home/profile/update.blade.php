@section('title', 'ویرایش')
<div>
    <main class="body">
        <div class="container post_container">
            <div class="card border-0">
                <div class="card-header border-0">
                    <h1 class="form_title">ویرایش</h1>
                </div>
                <div class="card-body pt-0 border-0">
                    <form wire:submit.prevent="store()" class="">
                        <div class="d-flex w-div-49 jsc-space-between flex-wrap flex-direction">
                            <div class="mb-0">
                                <div class="form-group mb-2">
                                    <label for="name" class="font-size-12 font-weight-bold mb-2">نام و نام
                                        خانوادگی</label>
                                    <input type="text" wire:model.lazy="user.name" class="form-control" id="name">
                                    @error('user.name')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="mobile" class="font-size-12 font-weight-bold mb-2">شماره موبایل</label>
                                    <div class="form-control" id="mobile">{{ $user->mobile }}</div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="font-size-12 font-weight-bold mb-2">ایمیل</label>
                                    <input type="text" wire:model.lazy="user.email" class="form-control" id="email">
                                    @error('user.email')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-0">
                                <div class="form-group mb-2">
                                    <label for="mainActivity" class="font-size-12 font-weight-bold mb-2">حوزه اصلی
                                        فعالیت</label>
                                    <select wire:model.lazy="user.ad_category_id" name="ad_category_id"
                                            class="form-control">
                                        <option value="">حوزه اصلی فعالیت</option>
                                        @foreach($adCategories as $adCategory)
                                            <option value="{{ $adCategory->id }}"
                                                    @if($user->profile && $adCategory->id == $user->profile->ad_category_id) selected @endif>
                                                {{ $adCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user.ad_category_id')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="workTime" class="font-size-12 font-weight-bold mb-2">ساعت کار</label>
                                    <input type="text" wire:model.lazy="user.workTime"
                                           value="@if($user->rofile) {{ $user->profile->workTime }} @endif"
                                           class="form-control"
                                           id="workTime" placeholder="ایام هفته و ساعت کاری در روز">
                                    @error('user.workTime')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="workTime" class="font-size-12 font-weight-bold mb-2">محدوده
                                        فعالیت</label>
                                    <div class="d-flex w-div-32 jsc-space-between alc-center flex-wrap flex-direction">
                                        <div>
                                            <select wire:model.lazy="user.state_id" wire:change="stateItem"
                                                    name="state_id" id=""
                                                    class="form-control mb-2">
                                                <option value="">استان</option>
                                                @foreach($states as $state)
                                                    <option value="{{ $state->id }}"
                                                        {{ $user->rofile && $state->id == $user->profile->state_id ? 'selected' : '' }}>
                                                        {{ $state->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('user.state_id')
                                            <p class="error mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <select wire:model.lazy="user.city_id" wire:change="cityItem" name="city_id"
                                                    id=""
                                                    class="form-control mb-2">
                                                <option value="">شهر</option>
                                                @foreach($listOfCities as $city)
                                                    <option value="{{ $city->id }}"
                                                        {{ $user->profile &&  $state->id == $user->profile->city_id ? 'selected' : '' }}>
                                                        {{ $city->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('user.city_id')
                                            <p class="error mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <select wire:model.lazy="user.area_id" name="area_id"
                                                    class="form-control">
                                                <option value="">منطقه</option>
                                                @foreach($listOfRegions as $area)
                                                    <option value="{{ $area->id }}"
                                                        {{ $user->profile &&  $state->id == $user->profile->area_id ? 'selected' : '' }}>
                                                        {{ $area->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('user.area_id')
                                            <p class="error mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="description" class="font-size-12 font-weight-bold mb-2">توضیحات</label>
                                <textarea wire:model.lazy="user.description" class="form-control textarea" rows="2"
                                          id="description">
                                    @if($user->profile)
                                        {!! $state->id == $user->profile->description !!}
                                    @endif
                                </textarea>
                                @error('user.description')
                                <p class="error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="myDistinction" class="font-size-12 font-weight-bold mb-2">تمایز من</label>
                                <textarea wire:model.lazy="user.myDistinction" class="form-control textarea" rows="2"
                                          id="myDistinction">
                                    @if($user->profile)
                                        {!! $state->id == $user->profile->myDistinction !!}
                                    @endif
                                </textarea>
                                @error('user.myDistinction')
                                <p class="error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <hr class="mt-4 mb-4 bg-primary" style="height: 2px">
                        <div class="d-flex w-div-49 jsc-space-between flex-wrap flex-direction">
                            <div class="form-group mb-2">
                                <label for="name" class="font-size-12 font-weight-bold mb-2">فعالیت های فرعی (حداکثر
                                    5 مورد): </label>
                                <div class="d-flex jsc-start alc-center item">
                                    <a wire:click="subActivityAdd"
                                            class="btn btn-primary text-white cursor-pointer ml-3">
                                        افزودن
                                    </a>
                                    <input type="text" wire:model="subActivityTitle" class="form-control" id="name">
                                </div>
                                <div class="alert">
                                    @foreach($user->subActivities as $subActivity)
                                        <div class="badge border text-dark mb-2">
                                            <i wire:click="deleteSubActivity({{ $subActivity->id }})"
                                               class="bi bi-x font-size-15 cursor-pointer"></i>
                                            {{ $subActivity->title }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="font-size-12 font-weight-bold mb-2">شبکه های اجتماعی: </label>
                                <div class="d-flex jsc-start alc-center item">
                                    <span wire:click="addSocialMedia"
                                          class="btn btn-primary ml-3 text-white cursor-pointer">افزودن</span>
                                    <select wire:model="socialMediaName" class="form-control">
                                        <option value="">شبکه اجتماعی</option>
                                        <option value="telegram">تلگرام</option>
                                        <option value="instagram">اینستاگرام</option>
                                        <option value="aparat">آپارات</option>
                                        <option value="youtube">یوتوب</option>
                                    </select>
                                    <input type="text" wire:model="socialMediaLink" class="form-control"
                                           placeholder="لینک" id="name">
                                </div>
                                <div class="alert">
                                    @foreach($user->socialMedias as $socialMedia)
                                        <div class="badge border text-dark mb-2">
                                            <i wire:click="deleteSocialMedia({{ $socialMedia->id }})"
                                               class="bi bi-x font-size-15 cursor-pointer"></i>
                                            <a href="{{ $socialMedia->link }}">{{ $socialMedia->name }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">ثبت تغییرات</button>
                    </form>
                </div>
            </div>
        </div>


    </main>
    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = document.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', () => {
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });
        })
    </script>
</div>

<div>
    <main class="body">
        <div class="container post_container">
            <div class="card border-0">
                <div class="card-header border-0">
                    <h1 class="form_title">ثبت آگهی</h1>
                </div>
                <div class="card-body pt-0 border-0">
                    <form wire:submit.prevent="store()" class="post_form">
                        <div class="d-flex w-div-49 jsc-space-between flex-wrap flex-direction">
                            <div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.ad_category_id" name="ad_category_id"
                                            class="form-control">
                                        <option value="">انتخاب دسته بندی آگهی</option>
                                        @foreach($adCategories as $adCategory)
                                            <option value="{{ $adCategory->id }}">{{ $adCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('ad.ad_category_id')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.state_id" wire:change="stateItem" name="state_id" id=""
                                            class="form-control">
                                        <option value="">استان</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('ad.state_id')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.city_id" wire:change="cityItem" name="city_id" id=""
                                            class="form-control">
                                        <option value="">شهر</option>
                                        @foreach($listOfCities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('ad.city_id')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.area_id" name="area_id" id="" class="form-control">
                                        <option value="">منطقه</option>
                                        @foreach($listOfRegions as $area)
                                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('ad.area_id')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input wire:model.lazy="ad.title" type="text" placeholder="عنوان آگهی"
                                           class="form-control">
                                    @error('ad.title')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input wire:model.lazy="ad.mobile" type="text" placeholder="شماره تماس با آگهی"
                                           class="form-control">
                                    @error('ad.mobile')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-2 w-div-49 d-flex jsc-space-between alc-center">
                                    <div>
                                        <input wire:model.lazy="ad.minPrice" type="text" placeholder="کمترین قیمت"
                                               class="form-control" onkeypress="return isNumberKey(this, event);"
                                               oninput="this.value = this.value.replace(/^0/g, '');">
                                        @error('ad.minPrice')
                                        <p class="error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <input wire:model.lazy="ad.maxPrice" type="text" placeholder="بیشترین قیمت"
                                               class="form-control" onkeypress="return isNumberKey(this, event);"
                                               oninput="this.value = this.value.replace(/^0/g, '');">
                                        @error('ad.maxPrice')
                                        <p class="error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <textarea wire:model.lazy="ad.description" class="form-control textarea" rows="2"
                                              id="description" placeholder="توضیحات"
                                              style="box-shadow: none;"></textarea>
                                    @error('ad.description')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h2 class="form_label" id="form_label">انتخاب عکس</h2>
                                <div
                                    class="d-flex w-div-22 jsc-start flex-wrap flex-direction position-relative input_file_row">
                                    @if(count($images) < 7)
                                        <div class="form-group d-flex jsc-center alc-center p-0 input_file_box upload_box">
                                            <input type="file" wire:model.lazy="img"
                                                   wire:change="addImage" class="input_file">
                                        </div>
                                    @endif
                                    @foreach($images as $key => $value)
                                        <div class="card d-flex jsc-center alc-center p-0 input_file_box mr-20">
                                            <div class="card-header">
                                                <div class="header__account">
                                                    <span class="auth__user-name text-dark" onclick="photoFeatures(event, {{ $key }})"><i class="bi bi-three-dots-vertical"></i></span>
                                                    <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none" id="photoFeatures{{ $key }}">
                                                        <div class="header__dropdown-content">
                                                            <a wire:click="original_photo({{ $key }})" class="header__account-link">انتخاب به عنوان عکس اصلی</a>
                                                            <a wire:click="delete({{ $key }})" class="header__account-link">حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{ $value->temporaryUrl() }}" alt="">
                                            @if($key + 1 == $originalPhoto)
                                                <div class="card-footer originalPhoto">تصویر اصلی</div>
                                            @endif
                                        </div>
                                    @endforeach
                                    @if($img)
                                        <div class="card d-flex jsc-center alc-center p-0 input_file_box mr-20">
                                            <div class="card-header">
                                                <div class="header__account">
                                                    <span class="auth__user-name text-dark" onclick="photoFeatures(event, 'Img')">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </span>
                                                    <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none" id="photoFeaturesImg">
                                                        <div class="header__dropdown-content">
                                                            <a wire:click="original_photo_img" class="header__account-link">انتخاب به عنوان عکس اصلی</a>
                                                            <a wire:click="deleteImg" class="header__account-link">حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{ $img->temporaryUrl() }}" alt="">
                                            @if($originalPhoto == 'img')
                                                <div class="card-footer originalPhoto">تصویر اصلی</div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                                <span class="mt-4 text-danger font-size-12 mb-1" wire:loading
                                      wire:target="img">در حال آپلود ...</span>
                                <div wire:ignore class="progress" id="progressbar" style="display: none">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                                </div>
                                <div class="form-group">
                                    @error('img')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                    @error('originalPhoto')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                    <button class="btn btn-primary mt-5">ثبت آگهی</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--        <div class="swalContainer" wire:click="close">--}}
{{--            <div class="swalConfirm d-flex jsc-center alc-center" >--}}
{{--                <div class="card bg-white">--}}
{{--                    <div class="card-header d-flex jsc-space-between alc-center pb-3">--}}
{{--                        <h2 class="swalConfirmTitle">امکانات عکس</h2>--}}
{{--                        <span class="font-size-24 cursor-pointer" wire:click="close">x</span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <input type="text" class="form-control" value="{{ $imgId }}">--}}
{{--                        <ul>--}}
{{--                            <li class="border-bottom" wire:click="originalPhoto">انتخاب به عنوان عکس اصلی</li>--}}
{{--                            <li wire:click="delete">حذف عکس</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
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

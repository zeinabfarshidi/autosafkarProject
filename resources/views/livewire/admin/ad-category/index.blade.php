@section('title', 'دسته بندی آگهی ها')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->routeIs('adCategory.index') ? 'is-active' : '' }}" href="{{ route('ad.index') }}">@yield('title')</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20" placeholder="جستجو...">
                    </form>
                </a>
                <a href="{{ route('adCategory.trashed') }}" class="tab__item btn btn-danger text-white float-end mt-2">
                    سطل زباله ({{ \App\Models\AdCategory::onlyTrashed()->count() }})
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>دسته بندی</th>
                            <th>نام لاتین</th>
                            <th>تصویر</th>
                            <th>دسته بندی والد</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($adCategories as $adCategory)
                                <tr role="row">
                                    <td>{{ $adCategory->name }}</td>
                                    <td>{{ $adCategory->latinName }}</td>
                                    <td><img src="{{ asset('storage/' . $adCategory->img) }}" width="100" alt="img"></td>
                                    <td>
                                        @if($adCategory->parent)
                                            {{ $adCategory->parent->name }}
                                        @else
                                            ندارد
                                        @endif
                                    </td>
                                    <td>
                                        <button wire:click="delete({{ $adCategory->id }})"
                                                class="mlg-15 cursor-pointer" id="delete{{ $adCategory->id }}"
                                                title="حذف"></button>
                                        <a onclick="deleteItem(event, {{ $adCategory->id }}, 'آگهی های این دسته بندی هم حذف می شود')"
                                           class="item-delete mlg-15 cursor-pointer"
                                           title="حذف"></a>
                                        <a href="{{ route('adCategory.show', $adCategory->id) }}" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                                        <a href="{{ route('adCategory.update', $adCategory->id) }}" class="item-edit " title="ویرایش"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $adCategories->render() }}
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white pb-5 h-fit-content">
                <p class="box__title">افزودن دسته بندی جدید</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    @include('errors.error')
                    <div class="form-group mb-2">
                        <input wire:model.lazy="adCategory.name" type="text" placeholder="نام" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="adCategory.latinName" type="text" placeholder="نام لاتین" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <select wire:model.lazy="adCategory.ad_category_id" name="ad_category_id" class="form-control">
                            <option value="">انتخاب دسته بندی والد</option>
                            @foreach($adCategories as $adCategory)
                                <option value="{{ $adCategory->id }}">{{ $adCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <textarea wire:model.lazy="adCategory.description" class="form-control" placeholder="توضیحات"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" wire:model.lazy="img" class="form-control">
                        <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                        <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                            <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                        </div>
                    </div>
                    <div>

                        @if($img)
                            <img src="{{ $img->temporaryUrl() }}" width="400" alt="" class="form-control mt-3 mb-3">
                        @endif
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', ()=>{
            let progressSection = document.querySelector('#progressbar'),
                progressBar = document.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', ()=>{
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', ()=>{
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', ()=>{
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event)=>{
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });
        })
    </script>
</div>

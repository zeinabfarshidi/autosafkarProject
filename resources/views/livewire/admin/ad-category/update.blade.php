@section('title', 'ویرایش')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white">
                <p class="box__title">@yield('title')</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    @include('errors.error')
                    <div class="row">
                        <div class="form-group col-6 mb-2">
                            <input wire:model.lazy="adCategory.name" type="text" placeholder="نام" class="form-control">
                        </div>
                        <div class="form-group col-6 mb-2">
                            <input wire:model.lazy="adCategory.latinName" type="text" placeholder="نام لاتین"
                                   class="form-control">
                        </div>
                        <div class="form-group col-6 mb-2">
                            <select wire:model.lazy="adCategory.ad_category_id" name="ad_category_id"
                                    class="form-control">
                                <option value="">انتخاب دسته بندی والد</option>
                                @foreach($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <input type="file" wire:model.lazy="img" class="form-control">
                            <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                            <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 box-img">
                        @if($img)
                            <img src="{{ $img->temporaryUrl() }}" alt="" class="form-control mt-3 mb-3">
                        @else
                            <img src="{{ asset('storage/' . $adCategory->img) }}" width="400" alt=""
                                 class="form-control mt-3 mb-3">
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <textarea wire:model.lazy="adCategory.description" class="form-control"
                                  placeholder="توضیحات">{!! $adCategory->description !!}</textarea>
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
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

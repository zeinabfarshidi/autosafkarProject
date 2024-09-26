@section('title', 'ویرایش')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white">
                <p class="box__title">@yield('title')</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    @include('errors.error')
                    <div class="d-flex w-div-49 jsc-space-between">
                        <div class="form-group mb-3">
                            <input type="text" wire:model.lazy="banner.link" class="form-control" placeholder="آدرس لینک">
                        </div>
                        <div class="form-group">
                            <input type="file" wire:model.lazy="img" class="form-control">
                            <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                            <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                            </div>
                            @if($img)
                                <img src="{{ $img->temporaryUrl() }}" width="400" alt="" class="form-control mt-3 mb-3">
                            @else
                                <img src="{{ asset('storage/' . $banner->img) }}" width="400" alt="" class="form-control mt-3 mb-3">
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-brand mt-3">ویرایش</button>
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

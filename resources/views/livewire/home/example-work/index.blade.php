@section('title', 'نمونه کارها')
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <livewire:home.profile.sidebar />
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header d-flex jsc-space-between alc-center mb-4">
                            <h1 class="form_title">@yield('title')</h1>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                @foreach($exampleWorks as $item)
                                    <div class="card post_item position-relative">
                                        <div class="card-header p-0 border-0">
                                            <a wire:click="show({{ $item->id }})" target="_blank">
                                                <img src="{{ asset('storage/' . $item->img) }}" alt="img">
                                            </a>
                                        </div>
                                        <div class="card-body border-0">{{ $item->title }}</div>
                                        <div wire:click="delete({{ $item->id }})" class="card-footer item-delete text-center bg-danger text-white"></div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="border border-radius-3 post_form h-fit-content">
                                <p class="box__title border" style="background: lightgray !important;">ثبت نمونه کار</p>
                                <form wire:submit.prevent="store" class="p-3" enctype="multipart/form-data" role="form">
                                    <div class="form-group">
                                        <input type="text" wire:model.lazy="exampleWork.title" class="form-control" placeholder="عنوان نمونه کار">
                                        @error('exampleWork.title')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="file" wire:model.lazy="img" id="img" class="form-control">
                                        @error('img')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
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
                                    <button class="btn btn-brand mt-3">ارسال</button>
                                </form>
                            </div>
                        </div>
                    </div>
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

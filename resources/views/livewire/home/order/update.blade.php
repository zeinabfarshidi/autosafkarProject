@section('title', 'ویرایش سفارش در ' . $order->ad->title)
<div>
    <main class="body">
        <div class="container post_container">
            <div class="card border-0">
                <div class="card-header border-0">
                    <h1 class="form_title">@yield('title')</h1>
                </div>
                <div class="card-body pt-0 border-0">
                    <form wire:submit.prevent="store()" class="post_form">
                        <div class="d-flex w-div-49 jsc-space-between flex-wrap flex-direction">
                            <div>
                                <div class="form-group mb-5">
                                    <input type="text" wire:model.lazy="order.problem" class="form-control"
                                           placeholder="مشکل چیست؟">
                                    @error('order.problem')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <textarea wire:model.lazy="order.description" class="form-control textarea"
                                              rows="2" id="description" placeholder="شرح مشکل"
                                              style="box-shadow: none;"></textarea>
                                    @error('order.description')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h2 class="form_label" id="form_label">ویرایش عکس</h2>
                                <div
                                    class="d-flex w-div-22 jsc-start flex-wrap flex-direction position-relative input_file_row">
                                    <div class="card form-group d-flex jsc-center alc-center p-0 input_file_box upload_box">
                                        <div class="card-header">
                                            <div class="header__account">
                                                <span class="auth__user-name text-dark"><i class="bi bi-three-dots-vertical"></i></span>
                                                <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none">
                                                    <div class="header__dropdown-content">
                                                        <a wire:click="deleteImg" class="header__account-link">حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" wire:model.lazy="img" class="input_file originalImg w-100">
                                        @if($img)
                                            <img src="{{ $img->temporaryUrl() }}" alt="">
                                        @elseif($order->img)
                                            <img src="{{ asset('storage/' . $order->img) }}" alt="">
                                        @endif
                                    </div>
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
                                    @error('originalPhotoId')
                                    <p class="error mt-2">{{ $message }}</p>
                                    @enderror
                                    <button class="btn btn-primary mt-5">ارسال</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = document.querySelector('.progress-bar');
            var input_file_box = $('.input_file_box');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
                input_file_box.removeClass('upload_box');
                input_file_box.style.width = '100% !important';
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

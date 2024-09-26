@section('title', 'نوشتن مقاله')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row">
            <div class="col-12 bg-white pb-5">
                <p class="box__title">@yield('title')</p>
                <form action="{{ route('posts.store') }}" method="post" class="padding-10" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="row w-div-32 mb-3 jsc-space-between">
                        <div class="mb-3">
                            <input type="text" name="title" placeholder="عنوان مقاله"
                                   class="form-control">
                            @error('title')
                            <p class="text-danger mt-2 font-size-12">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <select wire:model="category_id" wire:change="categoryPost" class="form-control mb-3">
                                <option value="">انتخاب دسته بندی</option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}" {{ $category->id == $category->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('categories')
                            <p class="text-danger mt-2 font-size-12">{{ $message }}</p>
                            @enderror
                            @if(count($categoryArr) > 0)
                                <div class="alert">
                                    @foreach($categoryArr as $item)
                                        @if($item)
                                            <div class="badge border text-dark mb-2">
                                                <i wire:click="deleteCategory({{ $item['id'] }})"
                                                   class="bi bi-x font-size-15 cursor-pointer"></i>
                                                {{ $item['name'] }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                            <input type="hidden" name="categories" value="{{ json_encode($categoryArr) }}" class="form-control ">
                        </div>
                        <div>
                            <div>
                                <input type="file" wire:model.lazy="img" name="img" class="form-control">
                                <span class="mt-2 text-danger" wire:loading wire:target="img">در حال آپلود ...</span>
                                <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                                </div>
                            </div>
                            <div>
                                @if($img)
                                    <img src="{{ $img->temporaryUrl() }}" width="400" alt="" class="form-control mt-3 mb-3 border-0">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div wire:ignore>
                        <textarea class="form-control" name="text" id="content"></textarea>
                        @error('text')
                        <p class="text-danger mt-2 font-size-12">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-brand mt-3 mb-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('text', {
                language: 'fa',
                filebrowserUploadUrl: '{{ route("editor-upload", ["_token"=>csrf_token()]) }}',
                filebrowserUploadMethod: 'form',
            })



            {{--ClassicEditor--}}
            {{--    .create( document.querySelector( '#content' ), {--}}
            {{--        language: {--}}
            {{--            ui: 'fa',--}}
            {{--            content: 'fa'--}}
            {{--        },--}}
            {{--        filebrowserUploadUrl: '{{ route("editor-upload") }}',--}}
            {{--        filebrowserUploadMethod: 'form',--}}
            {{--    })--}}
            {{--    .catch( error => {--}}
            {{--        console.error( error );--}}
            {{--    } );--}}
        </script>
    </x-slot>
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

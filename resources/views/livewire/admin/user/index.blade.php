@section('title', 'کاربران')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->routeIs('ad.index') ? 'is-active' : '' }}" href="{{ route('ad.index') }}">@yield('title')</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20" placeholder="جستجو...">
                    </form>
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>نام</th>
                            <th>ایمیل</th>
                            <th>شماره موبایل</th>
                            <th>سطح کاربری</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($users as $user)
                                <tr role="row">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>
                                        @if($user->role)
                                            {{ $user->role->name }}
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $user->img) }}" class="border-radius-3" width="100" height="100" alt="img">
                                    </td>
                                    <td>
                                        <a wire:click="delete({{ $user->id }})" class="item-delete mlg-15" title="حذف"></a>
                                        <a href="{{ route('user.update', $user->id) }}" class="item-edit " title="ویرایش"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $users->render() }}
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white">
                <p class="box__title">افزودن کاربر جدید</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    @include('errors.error')
                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.name" type="text" placeholder="نام" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.email" type="text" placeholder="ایمیل" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.mobile" type="text" placeholder="شماره موبایل" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <select wire:model.lazy="user.role_id" name="role_id" class="form-control">
                            <option value="">سطح دسترسی</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name}}</option>
                            @endforeach
                        </select>
                    </div>



















                    <div class="form-group mb-2">
                        <input wire:model.lazy="user.pass" type="password" placeholder="رمز عبور" class="form-control">
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

@section('title', 'اشتراک')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ request()->routeIs('subscribe.index') ? 'is-active' : '' }}" href="{{ request()->url() }}">
                    @yield('title')
                </a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20" placeholder="جستجو...">
                    </form>
                </a>
                <a href="{{ route('category.trashed') }}" class="tab__item btn btn-danger text-white float-end mt-2">
                    سطل زباله ({{ \App\Models\Category::onlyTrashed()->count() }})
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>اشتراک</th>
                            <th>قیمت</th>
                            <th>دسترسی های مجاز</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($subscribes as $subscribe)
                                <tr role="row">
                                    <td>{{ $subscribe->name }}</td>
                                    <td>{{ $subscribe->price }}</td>
                                    <td>
                                        <select class="form-control">
                                            <option>مشاهده</option>
                                            @foreach($subscribe->permissions->groupBy('sectionName') as $key => $value)
                                                <option disabled class="bg-secondary text-white">{{ $key }}</option>
                                                @foreach($value as $item)
                                                    <option disabled>
                                                        {{ $item->operationName }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <button wire:click="delete({{ $subscribe->id }})"
                                                class="mlg-15 cursor-pointer" id="delete{{ $subscribe->id }}"
                                                title="حذف"></button>
                                        <a onclick="deleteItem(event, {{ $subscribe->id }})"
                                           class="item-delete mlg-15 cursor-pointer"
                                           title="حذف"></a>
                                        <a href="{{ route('category.update', $subscribe->id) }}" class="item-edit " title="ویرایش"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $subscribes->render() }}
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white pb-5 h-fit-content">
                <p class="box__title">ایجاد اشتراک</p>
                <form wire:submit.prevent="store" class="padding-10" enctype="multipart/form-data" role="form">
                    @include('errors.error')
                    <div class="form-group mb-2">
                        <input wire:model.lazy="subscribe.name" type="text" placeholder="نام" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <input wire:model.lazy="subscribe.price" type="text" placeholder="قیمت" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <select wire:model="permission_id" wire:change="addId" class="form-control">
                            <option value="">دسترسی های مجاز</option>
                            @foreach($permissions->groupBy('sectionName') as $key => $value)
                                <option value="" disabled class="bg-secondary text-white">{{ $key }}</option>
                                @foreach($value as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->operationName }}
                                    </option>
                                @endforeach
                            @endforeach
                        </select>
                        @if(count($ids) > 0)
                            <div class="alert">
                                @foreach($ids as $id)
                                    <div class="badge border text-dark mb-2">
                                        <i wire:click="deleteId({{ \App\Models\Permission::find($id)->id }})"
                                           class="bi bi-x font-size-15 cursor-pointer"></i>
                                        {{ \App\Models\Permission::find($id)->operationName }} {{ \App\Models\Permission::find($id)->sectionName }}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <textarea wire:model.lazy="subscribe.description" class="form-control" placeholder="توضیحات"></textarea>
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

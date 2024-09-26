@section('title', 'ویرایش')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش</p>
                <form wire:submit.prevent="store" class="padding-10" role="form">
                    @include('errors.error')
                    <div class="row">
                        <div class="form-group col-4">
                            <input wire:model.lazy="role.name" type="text" placeholder="عنوان سطح دسترسی" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <input wire:model.lazy="role.latinName" type="text" placeholder="نام لاتین سطح دسترسی" class="form-control">
                        </div>
                        <div class="form-group col-4 mb-2">
                            <select wire:model="permission_id" wire:change="addId" class="form-control">
                                <option value="">دسترسی های مجاز</option>
                                @foreach($permissions->groupBy('sectionName') as $key => $value)
                                    <option value="" disabled class="bg-secondary text-white">{{ $key }}</option>
                                    @foreach($value as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->operationName }} {{ $item->sectionName }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                            @if($role->permissions_count > 0)
                                <div class="alert">
                                    @foreach($role->permissions as $item)
                                        <div class="badge border text-dark mb-2">
                                            <i wire:click="deleteId({{ $item->id }})"
                                               class="bi bi-x font-size-15 cursor-pointer"></i>
                                            {{ $item->operationName }} {{ $item->sectionName }}
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

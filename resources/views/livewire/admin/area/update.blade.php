@section('title', 'ویرایش')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white pb-5">
                <p class="box__title">ویرایش</p>
                <form wire:submit.prevent="store" class="padding-10" role="form">
                    @include('errors.error')
                    <div class="row">
                        <div class="form-group mb-2 col-6">
                            <select wire:model.lazy="area.city_id" name="city_id" class="form-control">
                                <option value="">انتخاب شهر</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2 col-6">
                            <input wire:model.lazy="area.name" type="text" placeholder="نام منطقه" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

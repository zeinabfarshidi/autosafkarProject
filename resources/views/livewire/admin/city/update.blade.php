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
                           <select wire:model.lazy="city.state_id" name="state_id" class="form-control">
                               <option value="">انتخاب استان</option>
                               @foreach($states as $state)
                                   <option value="{{ $state->id }}">{{ $state->name }}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="form-group mb-2 col-6">
                           <input wire:model.lazy="city.name" type="text" placeholder="نام شهر" class="form-control">
                       </div>
                   </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

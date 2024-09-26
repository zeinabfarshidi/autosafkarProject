@section('title', 'ویرایش')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="row ">
            <div class="col-12 bg-white pb-5">
                <p class="box__title">ویرایش</p>
                <form wire:submit.prevent="store" class="padding-10" role="form">
                    @include('errors.error')
                    <div class="form-group mb-2 col-6">
                        <input wire:model.lazy="state.name" type="text" placeholder="استان" class="form-control">
                    </div>
                    <button class="btn btn-brand mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
</div>

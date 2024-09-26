<?php

namespace App\Http\Livewire\Admin\TenderPrice;

use App\Models\Acces;
use App\Models\Permission;
use App\Models\TenderPrice;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;

    public TenderPrice $tenderPrice;

    public function mount()
    {
        $this->tenderPrice = new TenderPrice();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'tenderPrice.price' => 'required|string',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function store()
    {
        $this->validate();
        $this->tenderPrice->user_id = auth()->user()->id;
        if (TenderPrice::count() == 0)
            TenderPrice::create($this->tenderPrice->getAttributes());
        else{
            $tenderPrice = TenderPrice::first();
            $tenderPrice->update($this->tenderPrice->getAttributes());
        }
        foreach ($this->tenderPrice->getAttributes() as $key => $value) {
            $this->tenderPrice->{$key} = '';
        }

        Permission::store('tenderPrice', 'قیمت مناقصه');
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function delete($id)
    {
        $tenderPrice = TenderPrice::find($id);
        $tenderPrice->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $tenderPrices = $this->readyToLoad ?
            TenderPrice::where('price', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        return view('livewire.admin.tender-price.index', compact('tenderPrices'));
    }
}

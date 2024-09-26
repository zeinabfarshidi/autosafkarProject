<?php

namespace App\Http\Livewire\Home\Tender;

use App\Models\Order;
use App\Models\Permission;
use App\Models\Tender;
use App\Models\TenderPrice;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Create extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public $img;
    public Tender $tender;
    public Order $order;

    public function mount(Order $order)
    {
        $this->tender = new Tender();
        $this->order = $order;
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'tender.description'=> 'nullable|string',
    ];

    public function store()
    {
        $this->validate();
        $this->tender->user_id = auth()->user()->id;
        $this->tender->order_id = $this->order->id;
        $tenderPrice = TenderPrice::first();
        if ($tenderPrice)
            $this->tender->tender_price_id = $tenderPrice->id;
        $this->tender->expired_at = Carbon::now()->addDays(30);

        if ($this->order)
            $tender = auth()->user()->tenders->where('order_id', $this->order->id)->first();
        else
            $tender = auth()->user()->tenders->where('order_id', null)->first();

        Permission::store('tender', 'مناقصه');

        if (!$tender || Carbon::now() > $tender->expired_at){
            Tender::create($this->tender->getAttributes());
            return redirect()->route('tender.index');
        }
        else
            abort(403);
    }

    public function render()
    {
        $tender = $this->tender;
        return view('livewire.home.tender.create', compact('tender'))->layout('layouts.app');
    }
}

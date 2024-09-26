<?php

namespace App\Http\Livewire\Home\Order;

use App\Models\Order;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Order $order;

    public function mount()
    {
        $this->order = new Order();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        $this->emit('toast', 'success', "حذف شد");
    }

    public function render()
    {
        $orders = $this->readyToLoad ?
            auth()->user()->orders()->latest()->paginate() : [];
        return view('livewire.home.order.index', compact('orders'))->layout('layouts.app');
    }
}

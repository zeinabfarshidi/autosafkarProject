<?php

namespace App\Http\Livewire\Home\Order;

use App\Models\Order;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Trashed extends Component
{
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

    public function restore($id)
    {
        $order = Order::withTrashed()->find($id);
        $order->restore();
        $this->emit('toast', 'success', 'با موفقیت بازیابی شد');
    }

    public function delete($id)
    {
        $order = Order::withTrashed()->find($id);
        if ($order->img)
            File::delete(public_path('storage/' . $order->img));
        $order->forceDelete();
    }

    public function render()
    {
        $orders = $this->readyToLoad ?
            auth()->user()->orders()->onlyTrashed()->latest()->paginate() : [];
        return view('livewire.home.order.trashed', compact('orders'))->layout('layouts.app');
    }
}

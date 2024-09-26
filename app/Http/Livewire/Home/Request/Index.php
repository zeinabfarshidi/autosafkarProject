<?php

namespace App\Http\Livewire\Home\Request;

use App\Models\Order;
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

    public function render()
    {
        $requests = [];
        foreach (Order::all() as $order){
            if ($order->ad->user_id == auth()->user()->id)
                $requests[] = $order;
        }

        $requests = $this->readyToLoad ? $requests : [];
        return view('livewire.home.request.index', compact('requests'))->layout('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Home\Order;

use App\Models\Order;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Update extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public $img;
    public Order $order;

    public function mount($id)
    {
        $this->order = Order::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'order.problem'=> 'required|string',
        'order.description'=> 'required|string',
        'img'=> 'nullable|image',
    ];

    public function store()
    {
        $this->validate();
        if ($this->img){
            File::delete(public_path('storage/' . $this->order->img));
            $this->order->img = $this->uploadImage();
        }
        $this->order->description = nl2br($this->order->description);
        $this->order->update($this->order->getAttributes());
        alert()->success('ثبت شد', 'درخواست شما با موفقیت ویرایش شد');
        return redirect()->route('order.index');
    }
    public function uploadImage()
    {
        $directory = "home/images/order";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function deleteImg()
    {
        if ($this->order->img){
            File::delete(public_path('storage/' . $this->order->img));
            $this->order->update([
                'img'=>null
            ]);
        }
        elseif ($this->img)
            $this->img = null;
    }

    public function render()
    {
        $order = $this->order;
        return view('livewire.home.order.update', compact('order'))->layout('layouts.app');
    }
}

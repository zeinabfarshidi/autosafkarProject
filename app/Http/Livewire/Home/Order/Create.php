<?php

namespace App\Http\Livewire\Home\Order;

use App\Models\Ad;
use App\Models\Order;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
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
    public Order $order;
    public Ad $ad;

    public function mount(Ad $ad)
    {
        $this->order = new Order();
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
        $this->order->user_id = auth()->user()->id;
        $this->order->ad_id = $this->ad->id;
        if ($this->img)
            $this->order->img = $this->uploadImage();
        $this->order->description = nl2br($this->order->description);
        if (Gate::authorize('requestRegister', $this->ad)->allowed()){
            Order::create($this->order->getAttributes());
            alert()->success('ثبت شد', 'درخواست شما با موفقیت ثبت شد');
            return redirect()->route('order.index');
        }
    }
    public function uploadImage()
    {
        $directory = "home/images/order";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        if ($order->img)
            File::delete(public_path('storage/' . $order->img));
        $order->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $ad = $this->ad;
        if (Gate::authorize('requestRegister', $ad)->allowed())
            return view('livewire.home.order.create', compact('ad'))->layout('layouts.app');
    }
}

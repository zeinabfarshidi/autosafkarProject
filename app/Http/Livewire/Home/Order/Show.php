<?php

namespace App\Http\Livewire\Home\Order;

use App\Models\Cooperation;
use App\Models\Offer;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Show extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Order $order;
    public $view = 'description';

    public function mount($id)
    {
        $this->order = Order::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

//    public function registerOffer()
//    {
//        foreach ($this->order->offers as $offer){
//            if ($offer->cooperation && Carbon::now() > $offer->timeToDoWork && !$offer->cooperation->do && auth()->user()->id != $this->order->user_id){
//                return false;
//            }
//            elseif ($offer->cooperation->do == 'do')
//                return false;
//            elseif ($offer->cooperation->do == 'not-done')
//                return true;
//        }
//    }

    public function cooperationExpirationDate()
    {
        foreach ($this->order->offers as $offer){
            if ($offer->cooperation && Carbon::now() > $offer->timeToDoWork && !$offer->cooperation->do && auth()->user()->id == $this->order->user_id){
                return true;
            }
            else
                return false;
        }
    }

    public function desc()
    {
        $this->view = 'description';
    }

    public function serviceProviders()
    {
        $this->view = 'serviceProviders';
    }

    public function requestConfirmation()
    {
        $this->view = 'requestConfirmation';
    }

    public $price;
    public $numberDays;
    public $description;
    protected $rules = [
        'price' => 'required',
        'numberDays' => 'required|integer',
        'description' => 'nullable|string',
    ];

    public function store()
    {
        if (Gate::authorize('orderConfirmation', $this->order)->allowed()){
            $user = auth()->user();
            $ad = $this->order->ad;
            $data = $this->validate();
            $tender = $this->order->tender;
            $data['user_id'] = $user->id;
            $data['description'] = nl2br($this->description);
            $data['order_id'] = $this->order->id;
            $data['timeToDoWork'] = Carbon::now()->addDays($this->numberDays);
            if ($ad->user_id == $user->id){
                $offer = Offer::where('user_id', $user->id)->where('order_id', $this->order->id)->first();
            }
            else{
                $data['tender_id'] = $tender->id;
                $offer = Offer::where('user_id', $user->id)->where('tender_id', $tender->id)->first();
            }
            if ($offer)
                $offer->update($data);
            else
                Offer::create($data);
            $this->price = '';
            $this->description = '';
            $this->numberDays = '';
            $this->emit('toast', 'success', 'پیشنهاد شما با موفقیت ثبت شد');
        }
    }

    public function cooperation($id)
    {
        $cooperation = Cooperation::where('order_id', $this->order->id)->first();
        if ($cooperation){
            $cooperation->update([
                'offer_id'=>$id,
            ]);
        }
        else{
            Cooperation::create([
                'user_id'=>auth()->user()->id,
                'order_id'=>$this->order->id,
                'offer_id'=>$id,
            ]);
        }
    }

    public $do;
    public $result;
    public $delay;
    public $opinion;

    public function resultCooperation()
    {
        $cooperation = $this->order->cooperation;
        $tender = $cooperation->order->tender;
        $cooperation->update([
            'do'=>$this->do,
            'delay'=>$this->delay,
            'result'=>$this->result,
            'opinion'=>nl2br($this->opinion),
        ]);
        if ($cooperation->do == 'do' && $cooperation->result == 'satisfaction'){
            if ($tender)
                $tender->delete();
            return redirect()->route('order.index');
        }
        else
            $this->emit('toast', 'success', 'میتوانید پیشنهاد دیگری را انتخاب کنید');
    }

    public function render()
    {
        $order = $this->order;
        return view('livewire.home.order.show', compact('order'))->layout('layouts.app');
    }
}

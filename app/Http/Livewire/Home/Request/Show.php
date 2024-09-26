<?php

namespace App\Http\Livewire\Home\Request;

use App\Models\Cooperation;
use App\Models\Offer;
use App\Models\Request;
use App\Models\Response;
use App\Models\Tender;
use App\Models\TenderOffer;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
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
    public Request $request;
    public $view = 'description';

    public function mount($id)
    {
        $this->request = Request::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
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
        if (Gate::authorize('requestConfirmation', $this->request)->allowed()){
            $user = auth()->user();
            $ad = $this->request->ad;
            $data = $this->validate();
            $tender = $this->request->tender;
            $data['user_id'] = $user->id;
            $data['description'] = nl2br($this->description);
            $data['request_id'] = $this->request->id;
            $data['timeToDoWork'] = Carbon::now()->addDays($this->numberDays);
            if ($ad->user_id == $user->id){
                $offer = Offer::where('user_id', $user->id)->where('request_id', $this->request->id)->first();
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
        $cooperation = Cooperation::where('request_id', $this->request->id)->first();
        if ($cooperation){
            $cooperation->update([
                'offer_id'=>$id,
            ]);
        }
        else{
            Cooperation::create([
                'user_id'=>auth()->user()->id,
                'request_id'=>$this->request->id,
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
        $cooperation = $this->request->cooperation;
        $tender = $cooperation->request->tender;
        $cooperation->update([
            'do'=>$this->do,
            'delay'=>$this->delay,
            'result'=>$this->result,
            'opinion'=>nl2br($this->opinion),
        ]);
        if ($cooperation->do == 'do' && $cooperation->result == 'satisfaction'){
            $tender->delete();
            return redirect()->route('request.index');
        }
        else
            $this->emit('toast', 'success', 'میتوانید پیشنهاد دیگری را انتخاب کنید');
    }

    public function render()
    {
        $request = $this->request;
        return view('livewire.home.request.show', compact('request'))->layout('layouts.app');
    }
}

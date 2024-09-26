<?php

namespace App\Http\Livewire\Home\Ad;

use App\Http\Controllers\Home\CommentController;
use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\AdImage;
use App\Models\City;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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
    public Ad $ad;
    public $text;
    public $formTicket = false;

    public function mount($id)
    {
        $this->ad = Ad::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    protected $rules = [
        'text' => 'required|string',
    ];

    public function requestRegister()
    {
        if (\auth()->user()){
            if (\auth()->user()->id == $this->ad->user_id)
                $this->emit('toast', 'error', 'امکان ثبت درخواست در آگهی که خودتان منتشر کرده اید وجود ندارد');
            else
                return redirect()->route('order.create', $this->ad->id);
        }
        else
            return redirect()->route('login');
    }

    public function ticket()
    {
        if ($this->ad->tickets->where('user_id', \auth()->user()->id)->first())
            $this->emit('toast', 'error', 'قبلاً برای این آگهی گزارش ثبت کرده‌اید و نمی‌توانید دوباره برای آن گزارش ثبت کنید');
        else
            $this->formTicket = true;
    }

    public function close()
    {
        $this->formTicket = false;
    }

    public function sendTicket()
    {
        $this->validate();
        $ad = $this->ad;
        $ad->tickets()->create([
            'user_id'=>\auth()->user()->id,
            'text'=>nl2br($this->text)
        ]);
        $this->formTicket = false;
        $this->emit('toast', 'success', 'بازخورد شما دریافت شد. ممنون از شما');
    }

    public $liked;

    public function likedLoad()
    {
        if (\auth()->user() && $this->ad->likes->where('user_id', \auth()->user()->id)->first())
            $this->liked = true;
        else
            $this->liked = false;

    }

    public function like()
    {
        $ad = $this->ad;
        $like = $ad->likes->where('user_id', \auth()->user()->id)->first();
        if ($like){
            $like->delete();
            $this->liked = false;
        }
        else{
            $ad->likes()->create([
                'user_id'=>\auth()->user()->id
            ]);
            $this->liked = true;
        }
    }

    public function render()
    {
        $ad = $this->ad;
        $ad->load(['user', 'adCategory', 'adImages', 'state', 'city', 'area'])
        ->loadCount(['adImages'])->append('is_user_liked');
        $adCategory = $ad->adCategory;

        $minPrice = $adCategory->ads->min('minPrice');
        $maxPrice = $adCategory->ads->max('maxPrice');
        $avgPrice = ($minPrice + $maxPrice) / 2;

        return view('livewire.home.ad.show',
            compact('ad', 'adCategory', 'minPrice', 'maxPrice', 'avgPrice'))
            ->layout('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Home\Ad;

use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\AdImage;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use UxWeb\SweetAlert\SweetAlert;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];

    public $readyToLoad = false;

    public Ad $ad;
    public $status = 'تایید شده';

    public function mount()
    {
        $this->ad = new Ad();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    public function activeAd()
    {
        $this->status = 'تایید شده';
    }

    public function inactiveAd()
    {
        $this->status = 'رد شده';
    }
    public function awaitingConfirmation()
    {
        $this->status = null;
    }

    public function delete($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        $this->emit('toast', 'success', "حذف شد");
    }

    public function render()
    {
        if ($this->status == 'تایید شده')
            $ads = auth()->user()->ads()->where('status', 'تایید شده')->latest()->paginate()  ;
        elseif ($this->status == 'رد شده')
            $ads = auth()->user()->ads()->where('status', 'رد شده')->latest()->paginate() ;
        else
            $ads = auth()->user()->ads()->where('status', null)->latest()->paginate() ;
        return view('livewire.home.ad.index', compact('ads'))->layout('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Home\Ad;

use App\Models\Ad;
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
    public Ad $ad;
    public $status;

    public function mount()
    {
        $this->ad = new Ad();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function restore($id)
    {
        $ad = Ad::withTrashed()->find($id);
        $ad->restore();
        $this->emit('toast', 'success', 'با موفقیت بازیابی شد');
    }

    public function delete($id)
    {
        $ad = Ad::withTrashed()->find($id);
        foreach ($ad->adImages as $adImage){
            File::delete(public_path('storage/' . $adImage->img));
        }
        $ad->forceDelete();
        $this->emit('toast', 'success', 'به طور کامل شد');
    }

    public function render()
    {
        $ads = $this->readyToLoad ?
            Ad::onlyTrashed()->latest()->paginate() : [];
        return view('livewire.home.ad.trashed', compact('ads'))->layout('layouts.app');
    }
}

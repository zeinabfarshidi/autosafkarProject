<?php

namespace App\Http\Livewire\Admin\Ad;

use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\Area;
use App\Models\City;
use App\Models\State;
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
    public $status = 'all';
    public Ad $ad;

    public function mount()
    {
        $this->ad = new Ad();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }
    public function confirmation($id)
    {
        $ad = Ad::find($id);
        $ad->update([
            'status' => 'تایید شده'
        ]);
    }
    public function reject($id)
    {
        $ad = Ad::find($id);
        $ad->update([
            'status' => 'رد شده'
        ]);
    }
    public function awaitingConfirmation($id)
    {
        $ad = Ad::find($id);
        $ad->update([
            'status' => null
        ]);
    }

    public function delete($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function all()
    {
        $this->status = 'all';
    }
    public function confirmed()
    {
        $this->status = 'تایید شده';
    }
    public function rejected()
    {
        $this->status = 'رد شده';
    }
    public function adAwaitingConfirmation()
    {
        $this->status = null;
    }

    public function adsRemoved()
    {
        $this->status = 'adsRemoved';
    }

    public function render()
    {
        if ($this->status == 'all')
            $listAds =  Ad::where('title', 'LIKE', "%{$this->search}%")
                ->where('description', 'LIKE', "%{$this->search}%")
                ->latest()->paginate();
        elseif ($this->status == 'adsRemoved')
            $listAds = Ad::onlyTrashed()->where('title', 'LIKE', "%{$this->search}%")
                ->where('description', 'LIKE', "%{$this->search}%")
                ->latest()->paginate();
        else
            $listAds =  Ad::where('status', $this->status)
                ->where('title', 'LIKE', "%{$this->search}%")
                ->where('description', 'LIKE', "%{$this->search}%")
                ->latest()->paginate();

        $ads = $this->readyToLoad ?
            $listAds : [];
        return view('livewire.admin.ad.index', compact('ads'));
    }
}

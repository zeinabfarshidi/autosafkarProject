<?php

namespace App\Http\Livewire\Home\AdUpgrade;

use App\Models\Ad;
use App\Models\Upgrade;
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
    public Upgrade $upgrade;
    public Ad $ad;

    public function mount(Ad $ad)
    {
        $this->upgrade = new Upgrade();
        $this->ad = $ad;
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $upgrades = $this->readyToLoad ?
            Upgrade::orderBy('showNumber', 'asc')->paginate() : [];
        $ad = $this->ad;
        $upgradeIds = [];
        foreach ($ad->upgrades as $upgrade){
            $upgradeIds[] = $upgrade->id;
        }
        return view('livewire.home.ad-upgrade.index', compact('upgrades', 'ad', 'upgradeIds'))
            ->layout('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Home\Profile;

use App\Http\Kernel;
use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\AdImage;
use App\Models\City;
use App\Models\State;
use Livewire\Component;
use Livewire\Livewire;
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
    public function loadInfo()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.home.profile.index')->layout('layouts.app');
    }
}

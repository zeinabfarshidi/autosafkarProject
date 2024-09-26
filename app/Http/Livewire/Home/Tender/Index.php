<?php

namespace App\Http\Livewire\Home\Tender;

use App\Models\Request;
use App\Models\Tender;
use App\Models\TenderPrice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
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
    public Tender $tender;

    public function mount()
    {
        $this->tender = new Tender();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $tenders = $this->readyToLoad ?
            Tender::latest()->paginate() : [];
        if (Gate::authorize('view', $this->tender))
            return view('livewire.home.tender.index', compact('tenders'))->layout('layouts.app');
    }
}

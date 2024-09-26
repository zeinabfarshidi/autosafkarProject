<?php

namespace App\Http\Livewire\Home\Tender;

use App\Models\Tender;
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
    public Tender $tender;

    public function mount(Tender $tender)
    {
        $this->tender = $tender;
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $tender = $this->tender;
        return view('livewire.home.tender.show', compact('tender'))->layout('layouts.app');
    }
}

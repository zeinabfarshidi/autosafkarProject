<?php

namespace App\Http\Livewire\Admin\AdCategory;

use App\Models\AdCategory;
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
    public AdCategory $adCategory;

    public function mount($id)
    {
        $this->adCategory = AdCategory::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    public function render()
    {
        $adCategory = $this->adCategory;
        $adCategory->load(['ads'])->loadCount(['ads']);
        return view('livewire.admin.ad-category.show', compact('adCategory'))
            ->layout('layouts.app');
    }
}

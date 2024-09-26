<?php

namespace App\Http\Livewire\Admin\AdCategory;

use App\Models\AdCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Trashed extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    protected $queryString = ['search'];

    public $readyToLoad = false;

    public AdCategory $adCategory;

    public function mount()
    {
        $this->role = new AdCategory();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function restore($id)
    {
        $adCategory = AdCategory::withTrashed()->find($id);
        $adCategory->restore();
        $this->emit('toast', 'success', 'با موفقیت بازیابی شد');
    }

    public function render()
    {
        $adCategories = $this->readyToLoad ?
            AdCategory::onlyTrashed()->latest()->paginate() : [];
        return view('livewire.admin.ad-category.trashed', compact('adCategories'));
    }
}

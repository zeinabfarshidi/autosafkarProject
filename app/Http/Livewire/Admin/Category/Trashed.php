<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Trashed extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Category $category;

    public function mount()
    {
        $this->category = new Category();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function restore($id)
    {
        $category = Category::withTrashed()->find($id);
        $category->restore();
        $this->emit('toast', 'success', 'با موفقیت بازیابی شد');
    }

    public function render()
    {
        $categories = $this->readyToLoad ?
            Category::onlyTrashed()->where('name', 'LIKE', "%{$this->search}%")
                ->where('latinName', 'LIKE', "%{$this->search}%")->latest()->paginate() : [];
        return view('livewire.admin.category.trashed', compact('categories'));
    }
}

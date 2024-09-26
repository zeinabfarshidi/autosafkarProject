<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Acces;
use App\Models\Category;
use App\Models\Permission;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $img;
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

    protected $rules = [
        'category.name' => 'required|string',
        'category.latinName' => 'required|string',
        'img'=>'required',
        'category.category_id'=>'nullable|exists:categories,id',
        'category.text' => 'required|string',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function store()
    {
        $this->validate();
        if ($this->img)
            $this->category->img = $this->uploadImage();
        $this->category->user_id = auth()->user()->id;
        if ($this->category->category_id == '')
            $this->category->category_id = null;
        $this->category->text = nl2br($this->category->text);
        Category::create($this->category->getAttributes());
        foreach ($this->category->getAttributes() as $key => $value) {
            $this->category->{$key} = '';
        }
        $this->img = null;
        Permission::store('category', 'دسته بندی ها');
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $directory = "admin/images/category";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function delete(Category $category)
    {
        File::delete(public_path($category->img));
        $category->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $categories = $this->readyToLoad ?
            Category::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('latinName', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        return view('livewire.admin.category.index', compact('categories'));
    }
}

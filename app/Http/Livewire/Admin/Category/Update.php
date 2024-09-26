<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Update extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $img;
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Category $category;

    public function mount($id)
    {
        $this->category = Category::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'category.name' => 'required|string',
        'category.latinName' => 'required|string',
        'img' => 'required',
        'category.category_id' => 'nullable|exists:categories,id',
        'category.text'=>'nullable|string'
    ];

    public function store()
    {
        $this->validate();
        if ($this->img){
            if ($this->category->img)
                File::delete(public_path('storage/admin/images/category/' . $this->category->img));
            $this->category->img = $this->uploadImage();
        }
        $this->category->text = nl2br($this->category);
        $this->category->update($this->category->getAttributes());

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
        return redirect()->route('category.index');
    }

    public function uploadImage()
    {
        $directory = "admin/images/category";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function render()
    {
        $category = $this->category;
        $parents = Category::where('id', '<', $category->id)->get();
        return view('livewire.admin.category.update', compact('category', 'parents'));
    }
}

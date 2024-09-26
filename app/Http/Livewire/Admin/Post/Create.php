<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use App\Models\AdCategory;
use App\Models\AdImage;
use App\Models\City;
use App\Models\State;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Create extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public $img;
    public Post $post;
    public $category_id;
    public $categoryArr = [];

    public function mount()
    {
        $this->post = new Post();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'post.title' => 'required|string',
        'post.text' => 'required|string',
        'category_id' => 'required|exists:categories,id',
    ];
    public function categoryPost()
    {
        $category = Category::find($this->category_id);
        $this->categoryArr[] = $category;
        $this->category_id = collect($this->categoryArr)->last()['id'];
    }

    public function deleteCategory($id)
    {
        foreach ($this->categoryArr as $key => $value){
            if ($value['id'] == $id)
                unset($this->categoryArr[$key]);
            if (count($this->categoryArr) > 0)
                $this->category_id = collect($this->categoryArr)->last()['id'];
            else
                $this->category_id = null;
        }
    }

    public function delete($id)
    {
        if ($this->originalPhoto == $id + 1)
            $this->originalPhoto = null;
        unset($this->images[$id]);
    }

    public function deleteImg()
    {
        if ($this->originalPhoto == 'img')
            $this->originalPhoto = null;
        $this->img = null;
    }

    public function uploadImage()
    {
        $directory = "admin/images/post";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.post.create', compact('categories'));
    }
}

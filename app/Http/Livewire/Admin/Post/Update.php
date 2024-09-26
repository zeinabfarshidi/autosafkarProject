<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\AdCategory;
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
    public Post $post;
    public $category_id;

    public function mount($id)
    {
        $this->post = Post::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'post.title' => 'required|string',
        'post.text' => 'required|string',
        'category_id' => 'nullable|exists:categories,id',
    ];

    public function categoryPost()
    {
        $category = Category::find($this->category_id);
        $this->post->categories()->save($category);
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $this->post->categories()->detach($category);
    }

    public function store()
    {
        if ($this->post->categories->count() == 0)
            $this->rules['category_id'] = 'required';
        $this->validate();
        $this->post->text = nl2br($this->post->text);
        $this->post->img = $this->uploadImage();
        $this->post->update($this->post->getAttributes());
        alert()->success('در سایت نمایش داده می شود', 'مقاله با موفقیت منتشر شد');
        return redirect()->route('post.index');
    }

    public function uploadImage()
    {
        $directory = "admin/images/ad";
        $name = $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function render()
    {
        $post = $this->post;
        $post->load(['categories'])->loadCount(['categories']);
        $categories = Category::all();
        return view('livewire.admin.post.update', compact('post', 'categories'));
    }
}

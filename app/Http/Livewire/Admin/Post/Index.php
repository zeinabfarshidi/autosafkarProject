<?php

namespace App\Http\Livewire\Admin\Post;

use App\Http\Livewire\Admin\Dashboard\Sidebar;
use App\Models\Post;
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
    public Post $post;
    public $status;

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
        'img'=>'required',
        'post.text' => 'required|string',
    ];

    public function store()
    {
        $this->validate();
        if ($this->img)
            $this->post->img = $this->uploadImage();
        $this->post->user_id = auth()->user()->id;
        $this->post->text = nl2br($this->post->text);
        Post::create($this->post->getAttributes());
        foreach ($this->post->getAttributes() as $key => $value) {
            $this->post->{$key} = '';
        }
        $this->img = null;
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $directory = "admin/images/post";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function delete(Post $post)
    {
        File::delete(public_path($post->img));
        $post->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $posts = $this->readyToLoad ?
            Post::where('title', 'LIKE', "%{$this->search}%")
                ->orWhere('text', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];

        $array = explode('/', request()->route()->uri());
        $section = collect($array)->last();

        return view('livewire.admin.post.index', compact('posts', 'section'));
    }
}

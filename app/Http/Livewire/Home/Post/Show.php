<?php

namespace App\Http\Livewire\Home\Post;

use App\Models\Comment;
use App\Models\Post;
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
    public Post $post;
    public $text;
    public $comment_id;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public $score;
    public function scoreNumber($id)
    {
        $this->score = $id;
    }

    protected $rules = [
        'text'=>'required|string',
        'score'=>'required|integer',
        'comment_id'=>'nullable|exists:comments,id',
    ];

    public function store()
    {
        $this->validate();
        if ($this->comment_id){
            $comment = Comment::find($this->comment_id);
            $comment->comments()->create([
                'user_id'=>auth()->user()->id,
                'text'=>nl2br($this->text),
                'score'=>$this->score,
            ]);
        }
        else{
            $post = $this->post;
            $post->comments()->create([
                'user_id'=>auth()->user()->id,
                'text'=>nl2br($this->text),
                'score'=>$this->score,
            ]);
        }

        $this->text = '';
        $this->comment_id = null;
        $this->score = null;
        $this->emit('toast', 'success', 'دیدگاه با موفقیت ثبت شد در صورت تایید نمایش داده می شود');
    }

    public function commentId($id)
    {
        $this->comment_id = $id;
    }

    public function like()
    {
        $post = $this->post;
        $like = $post->likes->where('user_id', \auth()->user()->id)->first();
        if ($like){
            $like->delete();
        }
        else{
            $post->likes()->create([
                'user_id'=>\auth()->user()->id
            ]);
        }
    }

    public function render()
    {
        $post = $this->post;
        $post->load(['user', 'categories', 'likes'])
            ->loadCount(['categories']);
        return view('livewire.home.post.show', compact('post'))->layout('layouts.app');
    }
}

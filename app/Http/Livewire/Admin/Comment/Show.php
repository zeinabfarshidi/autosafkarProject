<?php

namespace App\Http\Livewire\Admin\Comment;

use App\Models\Comment;
use App\Models\AdCategory;
use App\Models\State;
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
    public Comment $comment;
    public $score;
    public $text;
    public $comment_id;

    public function mount(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

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
        if ($this->comment_id)
            $comment = Comment::find($this->comment_id);
        else
            $comment = $this->comment;
        $comment->comments()->create([
            'user_id'=>auth()->user()->id,
            'text'=>nl2br($this->text),
            'score'=>$this->score,
            'status'=>'تایید شده',
        ]);

        $this->text = '';
        $this->comment_id = null;
        $this->score = null;
        $this->emit('toast', 'success', 'دیدگاه با موفقیت ثبت شد در صورت تایید نمایش داده می شود');
    }

    public function commentId($id)
    {
        $this->comment_id = $id;
    }

    public function render()
    {
        $comment = $this->comment;
        return view('livewire.admin.comment.show', compact('comment'))->layout('layouts.app');
    }
}

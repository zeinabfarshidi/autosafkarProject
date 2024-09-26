<?php

namespace App\Http\Livewire\Admin\Comment;

use App\Models\Ad;
use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;

    public Comment $comment;
    public $status = 'all';

    public function mount()
    {
        $this->comment = new Comment();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function delete(Comment $comment)
    {
        $comment->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }
    public function reject(Comment $comment)
    {
        $comment->update([
            'status'=>'رد شده'
        ]);
        $this->emit('toast', 'success', 'با موفقیت رد شد');
    }
    public function confirm(Comment $comment)
    {
        $comment->update([
            'status'=>'تایید شده'
        ]);
        $this->emit('toast', 'success', 'با موفقیت تایید شد');
    }

    public function all()
    {
        $this->status = 'all';
    }
    public function confirmed()
    {
        $this->status = 'تایید شده';
    }
    public function rejected()
    {
        $this->status = 'رد شده';
    }
    public function adAwaitingConfirmation()
    {
        $this->status = null;
    }

    public $commentable_type;

    public function render()
    {
        if ($this->status == 'all' && !$this->commentable_type)
            $commentList =  Comment::where('text', 'LIKE', "%{$this->search}%")
                ->latest()->paginate();
        else
            $commentList =  Comment::where('status', $this->status)
                ->orWhere('commentable_type', $this->commentable_type)
                ->where('text', 'LIKE', "%{$this->search}%")->with('commentable')->latest()->paginate();

        $comments = $this->readyToLoad ?
            $commentList : [];
        return view('livewire.admin.comment.index', compact('comments'));
    }
}

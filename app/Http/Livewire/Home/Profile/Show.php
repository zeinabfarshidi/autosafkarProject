<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Banner;
use App\Models\Comment;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
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
    public User $user;
    public $formTicket = false;
    public $text;
    public $comment_id;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
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
            $profile = $this->user->profile;
            $profile->comments()->create([
                'user_id'=>auth()->user()->id,
                'text'=>nl2br($this->text),
                'score'=>$this->score,
            ]);
        }

        $this->text = '';
        $this->comment_id = null;
        $this->score = null;
        $this->emit('toast', 'success', 'نظر شما با موفقیت ثبت شد. نظر شما در صورت تایید نمایش داده می شود');
    }

    public function ticket()
    {
        if ($this->user->profile->tickets->where('user_id', \auth()->user()->id)->first())
            $this->emit('toast', 'error', 'قبلاً در پروفایل این کاربر گزارش ثبت کرده‌اید و نمی‌توانید دوباره برای آن گزارش ثبت کنید');
        else
            $this->formTicket = true;
    }

    public function close()
    {
        $this->formTicket = false;
    }

    public function sendTicket()
    {
        $this->rules['score'] = 'nullable';
        $this->rules['comment_id'] = 'nullable';
        $this->validate();
        $profile = $this->user->profile;
        $profile->tickets()->create([
            'user_id'=>\auth()->user()->id,
            'text'=>nl2br($this->text)
        ]);
        $this->formTicket = false;
        $this->emit('toast', 'success', 'بازخورد شما دریافت شد. ممنون از شما');
    }

    public function like()
    {
        $profile = $this->user->profile;
        $like = $profile->likes->where('user_id', \auth()->user()->id)->first();
        if ($like){
            $like->delete();
        }
        else{
            $profile->likes()->create([
                'user_id'=>\auth()->user()->id
            ]);
        }
    }

    public function commentId($id)
    {
        $this->comment_id = $id;
    }

    public function render()
    {
        $user = $this->user;
        $user->load(['profile', 'ads', 'exampleWorks', 'technicalDegrees', 'socialMedias'])
        ->loadCount(['ads', 'exampleWorks', 'technicalDegrees'=>function($query){
            $query->where('status', 'تایید شده');
        }]);
        $comments = $user->profile->comments->where('status', 'تایید شده');
        $requests = [];
        foreach (Order::all() as $order){
            if ($order->ad->user_id == $user->id && $order->cooperation && $order->cooperation->do == 'do'){
                $requests[] = $order;
            }
        }

        $banners = Banner::all()->random(2);

        return view('livewire.home.profile.show', compact('user', 'comments', 'requests', 'banners'))
            ->layout('layouts.app');
    }
}

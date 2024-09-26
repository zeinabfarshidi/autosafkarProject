<?php

namespace App\Http\Livewire\Home\Like;

use App\Models\Like;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Like $like;

    public function mount()
    {
        $this->like = new Like();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $likes = $this->readyToLoad ?
            auth()->user()->likes()->latest()->paginate() : [];
        return view('livewire.home.like.index', compact('likes'))->layout('layouts.app');
    }
}

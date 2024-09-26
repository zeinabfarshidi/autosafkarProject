<?php

namespace App\Http\Livewire\Home\Request;

use App\Models\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Trashed extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Request $request;

    public function mount()
    {
        $this->request = new Request();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function restore($id)
    {
        $request = Request::withTrashed()->find($id);
        $request->restore();
        $this->emit('toast', 'success', 'با موفقیت بازیابی شد');
    }

    public function render()
    {
        $requests = $this->readyToLoad ?
            auth()->user()->requests()->onlyTrashed()->latest()->paginate() : [];
        return view('livewire.home.request.trashed', compact('requests'))->layout('layouts.app');
    }
}

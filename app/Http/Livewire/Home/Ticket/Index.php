<?php

namespace App\Http\Livewire\Home\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Ticket $ticket;
    public $status = 'تایید شده';

    public function mount()
    {
        $this->ticket = new Ticket();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function activeAd()
    {
        $this->status = 'تایید شده';
    }

    public function inactiveAd()
    {
        $this->status = 'رد شده';
    }
    public function awaitingConfirmation()
    {
        $this->status = null;
    }

    public function delete($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        $this->emit('toast', 'success', "حذف شد");
    }

    public function render()
    {
//        if ($this->status == 'تایید شده')
//            $ads = auth()->user()->ads()->where('status', 'تایید شده')->latest()->paginate()  ;
//        elseif ($this->status == 'رد شده')
//            $ads = auth()->user()->ads()->where('status', 'رد شده')->latest()->paginate() ;
//        else
//            $ads = auth()->user()->ads()->where('status', null)->latest()->paginate() ;

        $tickets = $this->readyToLoad ?
            auth()->user()->tickets()->latest()->paginate() : [];
        return view('livewire.home.ticket.index', compact('tickets'))->layout('layouts.app');
    }
}

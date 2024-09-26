<?php

namespace App\Http\Livewire\Home\Ticket;

use App\Models\Permission;
use App\Models\Ticket;
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
    public Ticket $ticket;
    public $text;

    public function mount($id)
    {
        $this->ticket = Ticket::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'text' => 'required|string',
    ];

    public function store()
    {
        $this->validate();
        $ticket = new Ticket();
        $ticket->user_id = auth()->user()->id;
        $ticket->text = nl2br($this->text);
        $this->ticket->tickets()->save($ticket);
        $this->text = '';
        Permission::store('ticket', 'تیکت ها');

        $this->emit('toast', 'success', 'ثبت شد');
    }

    public function render()
    {
        $ticket = $this->ticket;
        $ticket->load(['user', 'tickets'])->loadCount(['tickets']);
        return view('livewire.home.ticket.show', compact('ticket'))->layout('layouts.app');
    }
}

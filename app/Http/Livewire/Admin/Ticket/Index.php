<?php

namespace App\Http\Livewire\Admin\Ticket;

use App\Models\Ticket;
use App\Models\Permission;
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
    public Ticket $ticket;

    public function mount()
    {
        $this->ticket = new Ticket();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $tickets = $this->readyToLoad ?
            Ticket::where('text', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        return view('livewire.admin.ticket.index', compact('tickets'));
    }
}

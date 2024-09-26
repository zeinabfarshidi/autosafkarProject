<?php

namespace App\Http\Livewire\Admin\State;

use App\Models\State;
use App\Models\City;
use Livewire\Component;

class Show extends Component
{
    protected $paginationTheme = 'bootstrap';

    public $search;
    protected $queryString = ['search'];

    public $readyToLoad = false;

    public State $state;

    public function mount($id)
    {
        $this->state = State::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function render()
    {
        $state = $this->state;
        $cities = $state->cities()->paginate();
        return view('livewire.admin.state.show', compact('state', 'cities'));
    }
}

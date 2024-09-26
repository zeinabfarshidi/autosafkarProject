<?php

namespace App\Http\Livewire\Admin\State;

use App\Models\State;
use Livewire\Component;

class Update extends Component
{
    protected $paginationTheme = 'bootstrap';

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

    protected $rules = [
        'state.name' => 'required|string',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function store()
    {
        $this->validate();
        $this->state->update($this->state->getAttributes());

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
        return redirect()->route('state.index');
    }

    public function render()
    {
        $state = $this->state;
        return view('livewire.admin.state.update', compact('state'));
    }
}

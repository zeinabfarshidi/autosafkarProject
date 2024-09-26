<?php

namespace App\Http\Livewire\Admin\State;

use App\Models\Acces;
use App\Models\Permission;
use App\Models\State;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    protected $queryString = ['search'];

    public $readyToLoad = false;

    public State $state;

    public function mount()
    {
        $this->state = new State();
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
        $this->state->user_id = auth()->user()->id;
        State::create($this->state->getAttributes());
        foreach ($this->state->getAttributes() as $key => $value) {
            $this->state->{$key} = '';
        }

        Permission::store('state', 'شهر و منطقه');
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function delete($id)
    {
        $state = State::find($id);
        $state->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $states = $this->readyToLoad ?
            State::where('name', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        return view('livewire.admin.state.index', compact('states'));
    }
}

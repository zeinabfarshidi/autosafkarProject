<?php

namespace App\Http\Livewire\Admin\City;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class Update extends Component
{
    protected $paginationTheme = 'bootstrap';

    public $readyToLoad = false;

    public City $city;

    public function mount($id)
    {
        $this->city = City::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'city.state_id' => 'required|exists:states,id',
        'city.name' => 'required|string',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function store()
    {
        $this->validate();
        $this->city->update($this->city->getAttributes());

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
        return redirect()->route('city.index');
    }

    public function render()
    {
        $city = $this->city;
        $states = State::where('status', true)->get();
        return view('livewire.admin.city.update', compact('city', 'states'));
    }
}

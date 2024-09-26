<?php

namespace App\Http\Livewire\Admin\City;

use App\Models\City;
use Livewire\Component;

class Show extends Component
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

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function render()
    {
        $city = $this->city;
        $areas = $city->areas()->paginate();
        return view('livewire.admin.city.show', compact('city', 'areas'));
    }
}

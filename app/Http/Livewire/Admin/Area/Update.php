<?php

namespace App\Http\Livewire\Admin\Area;

use App\Models\Area;
use App\Models\City;
use App\Models\State;
use Livewire\Component;

class Update extends Component
{
    protected $paginationTheme = 'bootstrap';

    public $readyToLoad = false;

    public Area $area;

    public function mount($id)
    {
        $this->area = Area::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'area.city_id' => 'required|exists:cities,id',
        'area.name' => 'required|string',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function store()
    {
        $this->validate();
        $this->area->update($this->area->getAttributes());

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
        return redirect()->route('area.index');
    }

    public function render()
    {
        $area = $this->area;
        $cities = City::where('status', true)->get();
        return view('livewire.admin.area.update', compact('area', 'cities'));
    }
}

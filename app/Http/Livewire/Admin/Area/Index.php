<?php

namespace App\Http\Livewire\Admin\Area;

use App\Models\Area;
use App\Models\City;
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

    public Area $area;

    public function mount()
    {
        $this->area = new Area();
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
        $this->area->user_id = auth()->user()->id;
        Area::create($this->area->getAttributes());
        foreach ($this->area->getAttributes() as $key => $value) {
            $this->area->{$key} = '';
        }

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function delete($id)
    {
        $area = City::find($id);
        $area->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $areas = $this->readyToLoad ?
            Area::where('name', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        $cities = City::all();
        return view('livewire.admin.area.index', compact('areas', 'cities'));
    }
}

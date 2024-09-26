<?php

namespace App\Http\Livewire\Admin\City;

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

    public City $city;

    public function mount()
    {
        $this->city = new City();
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
        $this->city->user_id = auth()->user()->id;
        City::create($this->city->getAttributes());
        foreach ($this->city->getAttributes() as $key => $value) {
            $this->city->{$key} = '';
        }

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function delete($id)
    {
        $city = City::find($id);
        $city->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $cities = $this->readyToLoad ?
            City::where('name', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        $states = State::all();
        return view('livewire.admin.city.index', compact('cities', 'states'));
    }
}

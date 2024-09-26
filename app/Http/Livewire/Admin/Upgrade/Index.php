<?php

namespace App\Http\Livewire\Admin\Upgrade;

use App\Models\Acces;
use App\Models\Permission;
use App\Models\Upgrade;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;

    public Upgrade $upgrade;

    public function mount()
    {
        $this->upgrade = new Upgrade();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'upgrade.title' => 'required|string',
        'upgrade.price' => 'required',
        'upgrade.showNumber' => 'required|integer|unique:upgrades,showNumber',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function store()
    {
        $this->validate();
        $this->upgrade->user_id = auth()->user()->id;
        Upgrade::create($this->upgrade->getAttributes());
        foreach ($this->upgrade->getAttributes() as $key => $value) {
            $this->upgrade->{$key} = '';
        }

        Permission::store('upgrade', 'ارتقاء آگهی');

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function delete($id)
    {
        $upgrade = Upgrade::find($id);
        $upgrade->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $upgrades = $this->readyToLoad ?
            Upgrade::where('title', 'LIKE', "%{$this->search}%")
                ->orWhere('price', $this->search)
                ->latest()->paginate() : [];
        return view('livewire.admin.upgrade.index', compact('upgrades'));
    }
}

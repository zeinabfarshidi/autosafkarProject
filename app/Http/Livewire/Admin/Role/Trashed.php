<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Trashed extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    protected $queryString = ['search'];

    public $readyToLoad = false;

    public Role $role;

    public function mount()
    {
        $this->role = new Role();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function restore($id)
    {
        $role = Role::withTrashed()->find($id);
        $role->restore();
        $this->emit('toast', 'success', 'با موفقیت بازیابی شد');
    }

    public function render()
    {
        $roles = $this->readyToLoad ?
            Role::onlyTrashed()
//                ->where('name', 'LIKE', "%{$this->search}%")
//                ->orWhere('latinName', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        return view('livewire.admin.role.trashed', compact('roles'));
    }
}

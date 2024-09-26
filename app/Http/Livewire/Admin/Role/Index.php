<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Acces;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Role $role;
    public $permission_id;
    public $ids = [];

    public function mount()
    {
        $this->role = new Role();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'role.name' => 'required|string',
        'role.latinName' => 'required|string',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function addId()
    {
        $this->ids[] = $this->permission_id;
        $this->ids = array_unique($this->ids);
        $this->permission_id = collect($this->ids)->last();
    }

    public function deleteId($id)
    {
        foreach ($this->ids as $key => $value) {
            if ($value == $id) {
                unset($this->ids[$key]);
            }
        }
        if (count($this->ids) > 0)
            $this->permission_id = collect($this->ids)->last();
        else
            $this->permission_id = null;
    }

    public function store()
    {
        $this->validate();
        $role = Role::create($this->role->getAttributes());
        foreach ($this->ids as $id){
            $permission = Permission::find($id);
            $role->permissions()->save($permission);
        }
        $this->ids = [];
        foreach ($this->role->getAttributes() as $key => $value) {
            $this->role->{$key} = '';
        }
        Permission::store('role', 'سطوح دسترسی');
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $roles = $this->readyToLoad ?
            Role::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('latinName', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        $permissions = Permission::all();
        return view('livewire.admin.role.index', compact('roles', 'permissions'));
    }
}

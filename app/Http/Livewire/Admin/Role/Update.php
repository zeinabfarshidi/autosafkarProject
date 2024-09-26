<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Acces;
use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;

class Update extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $readyToLoad = false;
    public Role $role;
    public $permission_id;

    public function mount($id)
    {
        $this->role = Role::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'role.name' => 'required|string',
        'role.latinName' => 'required|string',
        'permission_id'=>'nullable|exists:permissions,id',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function addId()
    {
        if (!$this->role->permissions->where('id', $this->permission_id)->first()) {
            $permission = Permission::find($this->permission_id);
            $this->role->permissions()->save($permission);
        }
    }

    public function deleteId($id)
    {
        $permission = Permission::find($id);
        $this->role->permissions()->detach($permission);
    }

    public function store()
    {
        $this->validate();
        if ($this->role->permissions->count() == 0)
            $this->rules['permission_id'] = ['required'];
        $this->role->update($this->role->getAttributes());

        alert()->success('تغییرات با موفقیت ثبت شد', 'ثبت شد');
        return redirect()->route('roles.index');
    }

    public function render()
    {
        $role = $this->role;
        $role->load(['permissions'])->loadCount(['permissions']);
        $permissions = Permission::all();
        return view('livewire.admin.role.update', compact('role', 'permissions'));
    }
}

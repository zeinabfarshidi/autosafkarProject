<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Acces;
use App\Models\Role;
use Livewire\Component;

class Sidebar extends Component
{
    public function permissionToView($section, $operation)
    {
        $role = auth()->user()->role;
        if ($role->latinName == 'admin' || $role->permissions->where('section', $section)->where('operation', $operation)->first())
            return true;
        else
            return false;
    }

    public function render()
    {
        return view('livewire.admin.dashboard.sidebar');
    }
}

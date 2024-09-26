<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Role;
use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        $roles = Role::where('id', '!=', auth()->user()->role_id)->get();
        return view('livewire.admin.dashboard.settings', compact('roles'));
    }
}

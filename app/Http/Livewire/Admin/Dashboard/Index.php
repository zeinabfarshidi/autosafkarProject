<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Acces;
use Illuminate\Http\Request;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.index');
    }
}

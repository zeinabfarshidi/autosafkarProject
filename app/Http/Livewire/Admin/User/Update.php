<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Update extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $readyToLoad = false;

    public User $user;
    public $img;

    public $password;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required|email',
        'user.mobile' => 'required|string',
        'user.role_id' => 'required|exists:roles,id',
        'password' => 'required|string|min:8',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function store()
    {
        $this->validate();
        if ($this->img){
            if ($this->user->img)
                File::delete(public_path('storage/admin/images/user/' . $this->user->img));
            $this->user->img = $this->uploadImage();
        }
        $this->user->update([
            'name'=>$this->user->name,
            'email'=>$this->user->email,
            'mobile'=>$this->user->mobile,
            'role_id'=>$this->user->role_id,
            'password'=>Hash::make($this->password)
        ]);

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
        return redirect()->route('user.index');
    }

    public function uploadImage()
    {
        $directory = "admin/images/user";
        $name = $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function render()
    {
        $user = $this->user;
        $roles = Role::all();
        return view('livewire.admin.user.update', compact('user', 'roles'));
    }
}

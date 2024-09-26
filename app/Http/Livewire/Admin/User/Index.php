<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $img;
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public User $user;
    public $class_name = User::class;

    public function mount()
    {
        $this->user = new User();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required|email',
        'user.mobile' => 'required|numeric|digits:11|unique:users,mobile',
        'user.role_id' => 'required|exists:roles,id',
        'user.pass' => 'required|string|min:8',
    ];

    public function store()
    {
        $this->validate();
        if ($this->img)
            $this->user->img = $this->uploadImage();
        $data = $this->user->getAttributes();
        $data['password'] = Hash::make($this->user->pass);
        $user = User::create($data);
        foreach ($this->user->getAttributes() as $key => $value) {
            $this->user->{$key} = '';
        }
        $this->img = null;

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $directory = "admin/images/user";
        $name = $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user->img)
            File::delete(public_path('storage/admin/images/user/' . $this->user->img));
        $user->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $users = $this->readyToLoad ?
            User::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('email', 'LIKE', "%{$this->search}%")
                ->orWhere('mobile', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        $roles = Role::all();
        return view('livewire.admin.user.index', compact('users', 'roles'));
    }
}

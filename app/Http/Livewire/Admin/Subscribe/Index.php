<?php

namespace App\Http\Livewire\Admin\Subscribe;

use App\Models\Permission;
use App\Models\Subscribe;
use Illuminate\Support\Facades\File;
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
    public Subscribe $subscribe;
    public $permission_id;
    public $ids = [];
    public $status;

    public function mount()
    {
        $this->subscribe = new Subscribe();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'subscribe.name' => 'required|string',
        'subscribe.price' => 'required|string',
        'subscribe.description' => 'required|string',
    ];

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
        $subscribe = Subscribe::create($this->subscribe->getAttributes());
        foreach ($this->ids as $id){
            $permission = Permission::find($id);
            $subscribe->permissions()->save($permission);
        }
        $this->ids = [];
        foreach ($this->subscribe->getAttributes() as $key => $value) {
            $this->subscribe->{$key} = '';
        }
        Permission::store('permission', 'اشتراک');
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function delete(Subscribe $subscribe)
    {
        $subscribe->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $subscribes = $this->readyToLoad ?
            Subscribe::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('price', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        $permissions = Permission::all();

        return view('livewire.admin.subscribe.index', compact('subscribes', 'permissions'));
    }
}

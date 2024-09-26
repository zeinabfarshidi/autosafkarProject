<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Models\Banner;
use App\Models\Permission;
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
    public Banner $banner;

    public function mount()
    {
        $this->banner = new Banner();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'banner.link' => 'required|string|url',
        'img' => 'required|image',
    ];

    public function store()
    {
        $this->validate();
        $this->banner->user_id = auth()->user()->id;
        $this->banner->img = $this->uploadImage();
        Banner::create($this->banner->getAttributes());
        $this->banner->link = '';
        $this->img = null;
        Permission::store('banner', 'بنرهای تبلیغاتی');
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $directory = "admin/images/banner";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function delete(Banner $banner)
    {
        File::delete(public_path('storage/' . $banner->img));
        $banner->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $banners = $this->readyToLoad ?
            Banner::latest()->paginate() : [];
        return view('livewire.admin.banner.index', compact('banners'));
    }
}

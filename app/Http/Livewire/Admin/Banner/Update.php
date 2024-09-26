<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Update extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $img;
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Banner $banner;

    public function mount(Banner $banner)
    {
        $this->banner = $banner;
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
        if ($this->img){
            if ($this->banner->img)
                File::delete(public_path('storage/admin/images/banner/' . $this->banner->img));
            $this->banner->img = $this->uploadImage();
        }
        $this->banner->update($this->banner->getAttributes());

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
        return redirect()->route('banner.index');
    }

    public function uploadImage()
    {
        $directory = "admin/images/banner";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function render()
    {
        $banner = $this->banner;
        return view('livewire.admin.banner.update', compact('banner'));
    }
}

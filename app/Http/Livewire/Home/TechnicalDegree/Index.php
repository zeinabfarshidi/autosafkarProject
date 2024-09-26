<?php

namespace App\Http\Livewire\Home\TechnicalDegree;

use App\Models\Permission;
use App\Models\TechnicalDegree;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public $img;
    public TechnicalDegree $technicalDegree;

    public function mount()
    {
        $this->technicalDegree = new TechnicalDegree();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'img'=> 'required|image'
    ];

    public function store()
    {
        $this->validate();
        $this->technicalDegree->user_id = auth()->user()->id;
        $this->technicalDegree->img = $this->uploadImage();
        TechnicalDegree::create($this->technicalDegree->getAttributes());
        $this->img = null;
        Permission::store('technicalDegree', 'مدارک فنی');
        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }
    public function uploadImage()
    {
        $directory = "home/images/technicalDegree";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function show(TechnicalDegree $technicalDegree)
    {
        if (public_path('storage/' . $technicalDegree->img)){
            $file_path = public_path('storage/' . $technicalDegree->img);
            return response()->file($file_path);
        }
        else {
            alert()->error('فایلی برای نمایش وجود ندارد', 'خطایی رخ داده');
            return back();
        }
    }

    public function delete($id)
    {
        $technicalDegree = TechnicalDegree::findOrFail($id);
        File::delete(public_path('storage/' . $technicalDegree->file));
        $technicalDegree->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $technicalDegrees = auth()->user()->technicalDegrees()->paginate();
        return view('livewire.home.technical-degree.index', compact('technicalDegrees'))->layout('layouts.app');
    }
}

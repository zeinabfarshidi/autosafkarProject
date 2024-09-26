<?php

namespace App\Http\Livewire\Home\ExampleWork;

use App\Models\Acces;
use App\Models\ExampleWork;
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
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public $img;
    public ExampleWork $exampleWork;

    public function mount()
    {
        $this->exampleWork = new ExampleWork();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'exampleWork.title'=> 'required|string',
        'img'=> 'required|image',
    ];

    public function store()
    {
        $this->validate();
        $this->exampleWork->user_id = auth()->user()->id;
        $this->exampleWork->img = $this->uploadImage();
        ExampleWork::create($this->exampleWork->getAttributes());
        foreach ($this->exampleWork->getAttributes() as $key => $value){
            $this->exampleWork->{$key} = '';
        }
        $this->img = null;

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }
    public function uploadImage()
    {
        $directory = "home/images/exampleWork";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function show($id)
    {
        $technicalDegree = ExampleWork::findOrFail($id);
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
        $exampleWork = ExampleWork::findOrFail($id);
        File::delete(public_path('storage/' . $exampleWork->file));
        $exampleWork->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $exampleWorks = auth()->user()->exampleWorks()->paginate();
        return view('livewire.home.example-work.index', compact('exampleWorks'))->layout('layouts.app');
    }
}

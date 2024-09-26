<?php

namespace App\Http\Livewire\Home\Request;

use App\Models\Request;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Update extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public $img;
    public Request $request;

    public function mount($id)
    {
        $this->request = Request::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'request.description'=> 'required|string',
        'img'=> 'nullable|image',
    ];

    public function store()
    {
        $this->validate();
        if ($this->img){
            File::delete(public_path('storage/' . $this->request->img));
            $this->request->img = $this->uploadImage();
        }
        $this->request->description = nl2br($this->request->description);
        $this->request->update($this->request->getAttributes());
        alert()->success('ثبت شد', 'درخواست شما با موفقیت ویرایش شد');
        return redirect()->route('request.index');
    }
    public function uploadImage()
    {
        $directory = "home/images/request";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function deleteImg()
    {
        if ($this->request->img){
            File::delete(public_path('storage/' . $this->request->img));
            $this->request->update([
                'img'=>null
            ]);
        }
        elseif ($this->img)
            $this->img = null;
    }

    public function render()
    {
        $request = $this->request;
        return view('livewire.home.request.update', compact('request'))->layout('layouts.app');
    }
}

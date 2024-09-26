<?php

namespace App\Http\Livewire\Home\Request;

use App\Models\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Create extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public $img;
    public Request $request;
    public Ad $ad;

    public function mount(Ad $ad)
    {
        $this->request = new Request();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'request.problem'=> 'required|string',
        'request.description'=> 'required|string',
        'img'=> 'nullable|image',
    ];

//    public function requestRegister()
//    {
//        if (Gate::authorize('requestRegister', $this->ad)->allowed())
//    }

    public function store()
    {
        $this->validate();
        $this->request->user_id = auth()->user()->id;
        $this->request->ad_id = $this->ad->id;
        if ($this->img)
            $this->request->img = $this->uploadImage();
        $this->request->description = nl2br($this->request->description);
        if (Gate::authorize('requestRegister', $this->ad)->allowed()){
            Request::create($this->request->getAttributes());
            alert()->success('ثبت شد', 'درخواست شما با موفقیت ثبت شد');
            return redirect()->route('request.index');
        }
    }
    public function uploadImage()
    {
        $directory = "home/images/request";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function delete($id)
    {
        $request = Request::findOrFail($id);
        if ($request->img)
            File::delete(public_path('storage/' . $request->img));
        $request->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $ad = $this->ad;
        if (Gate::authorize('requestRegister', $ad)->allowed())
            return view('livewire.home.request.create', compact('ad'))->layout('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Home\Ad;

use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\AdImage;
use App\Models\City;
use App\Models\State;
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
    public $originalPhoto_img;

    public Ad $ad;
    public $listOfCities = [];
    public $listOfRegions = [];

    public function mount($id)
    {
        $this->ad = Ad::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
//        'ad.ad_category_id' => 'required|exists:ad_categories,id',
        'ad.state_id' => 'required|exists:states,id',
        'ad.city_id' => 'required|exists:cities,id',
        'ad.area_id' => 'required|exists:areas,id',
        'ad.title' => 'required|string',
//        'ad.mobile' => 'required|numeric|digits:11',
        'ad.minPrice' => 'required',
        'ad.maxPrice' => 'required',
        'ad.description' => 'nullable|string',
        'ad.status' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    public function stateItem()
    {
        $state = State::find($this->ad->state_id);
        $this->listOfCities = $state->cities;
    }

    public function cityItem()
    {
        $city = City::find($this->ad->city_id);
        $this->listOfRegions = $city->areas;
    }

    public function addImage()
    {
        if ($this->ad->adImages->count() < 8 && $this->img){
            $ad = $this->ad;
            $adImage = new AdImage();
            $adImage->user_id = auth()->user()->id;
            $adImage->img = $this->uploadImage();
            if ($this->originalPhoto_img)
                $adImage->originalPhoto = true;
            else
                $adImage->originalPhoto = false;
            $ad->adImages()->save($adImage);
            $this->originalPhoto_img = null;
        }
    }

    public function delete($id)
    {
        $adImage = AdImage::find($id);
        if ($adImage->originalPhoto || !$this->ad->adImages->where('originalPhoto', true)->first()){
            $adImg = $this->ad->adImages->first();
            $adImg->update([
                'originalPhoto'=>true
            ]);
        }
        File::delete(public_path('storage/' . $adImage->img));
        $adImage->delete();
    }

    public function originalPhoto($id)
    {
        if ($this->ad->adImages->where('originalPhoto', true)->first()){
            $originalPhoto = $this->ad->adImages->where('originalPhoto', true)->first();
            $originalPhoto->update([
                'originalPhoto'=>false
            ]);
        }
        $adImage = AdImage::find($id);
        $adImage->update([
            'originalPhoto'=>true
        ]);

    }

    public function deleteImg()
    {
        $this->img = null;
    }

    public function original_image()
    {
        $image = $this->ad->adImages->where('originalPhoto', true)->first();
        if ($image)
            $image->update([
                'originalPhoto'=>false
            ]);
        $this->originalPhoto_img = true;
    }


    public function store()
    {
        $this->validate();
        $this->ad->description = nl2br($this->ad->description);
        $data = $this->ad->getAttributes();
        unset($data['ad_category_id']);
        unset($data['mobile']);
        $this->ad->update($data);
        if ($this->img){
            $adImage = new AdImage();
            $adImage->user_id = auth()->user()->id;
            $adImage->img = $this->uploadImage();
            if ($this->originalPhoto_img)
                $adImage->originalPhoto = true;
            else
                $adImage->originalPhoto = false;
            $this->ad->adImages()->save($adImage);
        }

        alert()->success('آگهی در صورت تایید نمایش داده می شود', 'تغییرات آگهی شما با موفقیت ثبت شده و در انتظار تاییده');
        return redirect()->route('ad.index');
    }
    public function uploadImage()
    {
        if ($this->img){
            $directory = "home/images/ad";
            $name = time() . '_' . $this->img->getClientOriginalName();
            $this->img->storeAs($directory, $name);
            return "$directory/$name";
        }
    }

    public function render()
    {
        $ad = $this->ad;
        $ad->load(['adImages'])->loadCount(['adImages']);
        $adCategories = AdCategory::all();
        $states = State::all();
        $this->listOfCities = $ad->state->cities;
        $this->listOfRegions = $ad->city->areas;
        return view('livewire.home.ad.update', compact('adCategories', 'states'))->layout('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Home\Ad;

use App\Models\Acces;
use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\AdImage;
use App\Models\City;
use App\Models\Permission;
use App\Models\State;
use App\Models\Upgrade;
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
    public Ad $ad;
    public $listOfCities = [];
    public $listOfRegions = [];

    public function mount()
    {
        $this->ad = new Ad();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }
    public $originalPhoto = 'img';

    protected $rules = [
        'ad.ad_category_id' => 'required|exists:ad_categories,id',
        'ad.state_id' => 'required|exists:states,id',
        'ad.city_id' => 'required|exists:cities,id',
        'ad.area_id' => 'required|exists:areas,id',
        'ad.title' => 'required|string',
        'ad.mobile' => 'required|numeric|digits:11',
        'ad.minPrice' => 'required',
        'ad.maxPrice' => 'required',
        'ad.description' => 'nullable|string',
        'ad.status' => 'nullable',
        'img'=>'required',
        'originalPhoto'=>'required',
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

    public $images = [];
    public function addImage()
    {
        if ($this->img && count($this->images) < 7){
            $this->images[] = $this->img;
            $this->img = null;
            $this->originalPhoto = 1;
        }
    }
    public function original_photo($id)
    {
        $this->originalPhoto = $id + 1;
    }
    public function original_photo_img()
    {
        $this->originalPhoto = 'img';
    }
    public function close()
    {
        $this->loadSwalContainer = false;
    }
    public function store()
    {
        if (count($this->images) > 0)
            $this->rules['img'] = 'nullable';
        $this->validate();
        $this->ad->user_id = auth()->user()->id;
        $this->ad->description = nl2br($this->ad->description);
        $ad = Ad::create($this->ad->getAttributes());
        foreach ($this->images as $key => $value){
            $adImage = new AdImage();
            $adImage->user_id = auth()->user()->id;
            $adImage->img = $this->uploadImage($value);
            if ($this->originalPhoto == intval($key) + 1)
                $adImage->originalPhoto = true;
            else
                $adImage->originalPhoto = false;
            $ad->adImages()->save($adImage);
        }
        if ($this->img){
            if ($this->originalPhoto == 'img')
                $originalPhoto = true;
            else
                $originalPhoto = false;
            AdImage::create([
                'user_id'=>auth()->user()->id,
                'ad_id'=>$ad->id,
                'img' => $this->uploadImage($this->img),
                'originalPhoto'=>$originalPhoto
            ]);
        }

        Permission::store('ad', 'آگهی ها');

        alert()->success('آگهی شما در صورت تایید نمایش داده می شود.', 'آگهی شما با موفقیت ثبت شده و در انتظار تاییده');
        if (Upgrade::count() > 0)
            return redirect()->route('adUpgrade.index', compact('ad'));
        else
            return redirect()->route('ad.index');
    }

    public function delete($id)
    {
        if ($this->originalPhoto == $id + 1)
            $this->originalPhoto = null;
        unset($this->images[$id]);
    }

    public function deleteImg()
    {
        if ($this->originalPhoto == 'img')
            $this->originalPhoto = null;
        $this->img = null;
    }

    public function uploadImage($picture)
    {
        $directory = "home/images/ad";
        $name = time() . '_' . $picture->getClientOriginalName();
        $picture->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function updateStatus($id)
    {
        $ad = Ad::find($id);
        $ad->update([
            'status' => !$ad->status
        ]);
        if ($ad->status)
            $status = 'فعال';
        else
            $status = 'غیرفعال';
        $this->emit('toast', 'success', "وضعیت آگهی با موفقیت $status شد");
    }

//    public $img;
//    public function delete($imgName)
//    {
//        $this->{$imgName} = null;
//    }

    public function render()
    {
        $adCategories = AdCategory::all();
        $states = State::all();
        return view('livewire.home.ad.create', compact('adCategories', 'states'))->layout('layouts.app');
    }
}

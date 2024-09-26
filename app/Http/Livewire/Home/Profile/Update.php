<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Confirmation;
use App\Models\ExampleWork;
use App\Models\Profile;
use App\Models\SocialMedia;
use App\Models\SocialNetwork;
use App\Models\SubActivity;
use App\Models\TechnicalDegree;
use App\Models\User;
use App\Models\AdCategory;
use App\Models\City;
use App\Models\State;
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

    public User $user;
    public $listOfCities = [];
    public $listOfRegions = [];

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required|email',
        'user.ad_category_id' => 'required|exists:ad_categories,id',
        'user.workTime' => 'required|string',
        'user.state_id' => 'required|exists:states,id',
        'user.city_id' => 'required|exists:cities,id',
        'user.area_id' => 'required|exists:areas,id',
        'user.description' => 'required|string',
        'user.myDistinction' => 'required|string',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function stateItem()
    {
        $state = State::find($this->user->state_id);
        $this->listOfCities = $state->cities;
    }

    public function cityItem()
    {
        $city = City::find($this->user->city_id);
        $this->listOfRegions = $city->areas;
    }

    public $subActivityTitle;
    public $subActivityArr = [];
    public function subActivityAdd()
    {
        if ($this->subActivityTitle && count($this->user->subActivities) < 5){
            $subActivity = new SubActivity();
            $subActivity->user_id = $this->user->id;
            $subActivity->title = $this->subActivityTitle;
            $this->user->subActivities()->save($subActivity);
        }
        $this->subActivityTitle = '';
    }
    public function deleteSubActivity($id)
    {
        $subActivity = SubActivity::findOrFail($id);
        $subActivity->delete();
    }
    public $socialMediaName;
    public $socialMediaLink;
    public $socialMedias;
    public function addSocialMedia()
    {
        if ($this->socialMediaName && $this->socialMediaLink && !$this->user->socialMedias->where('name', $this->socialMediaName)->first()){
           $socialMedia = new SocialMedia();
            $socialMedia->user_id = $this->user->id;
            $socialMedia->name = $this->socialMediaName;
            $socialMedia->link = $this->socialMediaLink;
           $this->user->socialMedias()->save($socialMedia);
        }
        $this->socialMediaName = '';
        $this->socialMediaLink = '';
    }

    public function deleteSocialMedia($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->delete();
    }

    public function store()
    {
        $this->validate();
        $user = auth()->user();
        $user->update([
            'name'=>$this->user->name,
            'email'=>$this->user->email,
        ]);
        $this->user->user_id = $user->id;
        $this->user->description = nl2br($this->user->description);
        $this->user->myDistinction = nl2br($this->user->myDistinction);
        if ($this->user->profile){
           $profile = $this->user->profile;
           $profile->update($this->user->getAttributes());
        }
        else
            $profile = Profile::create($this->user->getAttributes());

        alert()->success('ثبت شد', 'اطلاعات پروفایل شما با موفقیت ثبت شد');
        return redirect()->route('profile.index');
    }

    public function uploadImage($image)
    {
        $directory = "home/images/exampleWork";
        $name = time() . '_' . $image->getClientOriginalName();
        $image->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function render()
    {
        $user = $this->user;
        $user->load(['profile', 'subActivities', 'socialMedias']);
        $adCategories = AdCategory::all();
        $states = State::all();
        return view('livewire.home.profile.update', compact('user', 'adCategories', 'states'))->layout('layouts.app');
    }
}

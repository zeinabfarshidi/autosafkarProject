<?php

namespace App\Http\Livewire\Admin\AdCategory;

use App\Models\Acces;
use App\Models\AdCategory;
use App\Models\Permission;
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

    public AdCategory $adCategory;

    public function mount()
    {
        $this->adCategory = new AdCategory();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'adCategory.name' => 'required|string',
        'adCategory.latinName' => 'required|string',
        'img'=>'required',
        'adCategory.description'=>'nullable|string',
        'adCategory.ad_category_id'=>'nullable|exists:ad_categories,id',
    ];

    public function store()
    {
        $this->validate();
        if ($this->img)
            $this->adCategory->img = $this->uploadImage();
        $this->adCategory->user_id = auth()->user()->id;
        $this->adCategory->description = nl2br($this->adCategory->description);
        if ($this->adCategory->ad_category_id == '')
            $this->adCategory->ad_category_id = null;
        AdCategory::create($this->adCategory->getAttributes());
        foreach ($this->adCategory->getAttributes() as $key => $value) {
            $this->adCategory->{$key} = '';
        }
        $this->img = null;

        Permission::store('adCategory', 'دسته بندی آگهی ها');

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $directory = "admin/images/adCategory";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function delete($id)
    {
        $adCategory = AdCategory::find($id);
        $adCategory->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        $adCategories = $this->readyToLoad ?
            AdCategory::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('latinName', 'LIKE', "%{$this->search}%")
                ->latest()->paginate() : [];
        return view('livewire.admin.ad-category.index', compact('adCategories'));
    }
}

<?php

namespace App\Http\Livewire\Admin\AdCategory;

use App\Models\AdCategory;
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

    public AdCategory $adCategory;

    public function mount($id)
    {
        $this->adCategory = AdCategory::findOrFail($id);
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'adCategory.name' => 'required|string',
        'adCategory.latinName' => 'required|string',
        'img' => 'nullable',
        'adCategory.description' => 'nullable|string',
        'adCategory.ad_category_id' => 'nullable|exists:ad_categories,id',
    ];

    public function store()
    {
        $this->validate();
        if ($this->img){
            if ($this->adCategory->img)
                File::delete(public_path('storage/' . $this->adCategory->img));
            $this->adCategory->img = $this->uploadImage();
        }
        $this->adCategory->description = nl2br($this->adCategory->description);
        $this->adCategory->update($this->adCategory->getAttributes());
        foreach ($this->adCategory->getAttributes() as $key => $value) {
            $this->adCategory->{$key} = '';
        }
        $this->img = null;

        $this->emit('toast', 'success', 'با موفقیت ثبت شد');
        return redirect()->route('adCategory.index');
    }

    public function uploadImage()
    {
        $directory = "admin/images/adCategory";
        $name = time() . '_' . $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function render()
    {
        $adCategory = $this->adCategory;
        $parents = AdCategory::where('id', '<', $adCategory->id)->get();
        return view('livewire.admin.ad-category.update',
            compact('adCategory', 'parents'));
    }
}

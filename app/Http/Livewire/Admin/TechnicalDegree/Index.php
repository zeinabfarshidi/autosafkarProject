<?php

namespace App\Http\Livewire\Admin\TechnicalDegree;

use App\Models\Ad;
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
    public $img;
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public TechnicalDegree $technicalDegree;
    public $status = 'all';

    public function mount()
    {
        $this->technicalDegree = new TechnicalDegree();
    }

    public function loadInformation()
    {
        $this->readyToLoad = true;
    }

    public function confirmation($id)
    {
        $technicalDegree = TechnicalDegree::find($id);
        $technicalDegree->update([
            'status' => 'تایید شده'
        ]);
    }
    public function reject($id)
    {
        $technicalDegree = TechnicalDegree::find($id);
        $technicalDegree->update([
            'status' => 'رد شده'
        ]);
    }
    public function awaitingConfirmation($id)
    {
        $technicalDegree = TechnicalDegree::find($id);
        $technicalDegree->update([
            'status' => null
        ]);
    }

    public function all()
    {
        $this->status = 'all';
    }
    public function confirmed()
    {
        $this->status = 'تایید شده';
    }
    public function rejected()
    {
        $this->status = 'رد شده';
    }
    public function adAwaitingConfirmation()
    {
        $this->status = null;
    }

    public function delete(TechnicalDegree $technicalDegree)
    {
        File::delete(public_path('storage/' . $technicalDegree->img));
        $technicalDegree->delete();
        $this->emit('toast', 'success', 'با موفقیت حذف شد');
    }

    public function render()
    {
        if ($this->status == 'all')
            $technicalDegreeList =  TechnicalDegree::latest()->paginate();
        else
            $technicalDegreeList =  TechnicalDegree::where('status', $this->status)
                ->latest()->paginate();

        $technicalDegrees = $this->readyToLoad ?
            $technicalDegreeList : [];

        return view('livewire.admin.technical-degree.index', compact('technicalDegrees'));
    }
}

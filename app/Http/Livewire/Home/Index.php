<?php

namespace App\Http\Livewire\Home;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $ads = Ad::orderBy('showNumber', 'asc')->where('status', 'تایید شده')
            ->where('showNumber', '!=', null)->paginate(8);
        foreach ($ads as $ad){
            $showNumber = $ad->upgrades->min('showNumber');
            $ad->update([
                'showNumber'=>$showNumber
            ]);
        }
        foreach (Ad::where('showNumber', null)->paginate(8) as $item){
            $ads[] = $item;
        }
        return view('livewire.home.index', compact('ads'))->layout('layouts.app');
    }
}

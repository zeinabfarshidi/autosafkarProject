<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdUpgrade;
use App\Models\Upgrade;
use Illuminate\Http\Request;

class AdUpgradeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'upgradeIds'=>'required|string',
            'ad_id'=>'required|exists:ads,id'
        ]);
        $ad = Ad::find($request->ad_id);
        foreach (json_decode($request->upgradeIds) as $id){
            if (!$ad->upgrades->where('id', $id)->first()){
                $upgrade = Upgrade::find($id);
                $ad->upgrades()->save($upgrade);
            }
        }

        return redirect()->route('ad.index');
    }
}

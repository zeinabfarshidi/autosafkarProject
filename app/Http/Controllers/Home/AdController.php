<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdController extends Controller
{
    public function viewAd(Request $request)
    {
        $ad = Ad::find($request->id);
        $cookieName = 'viewAd_' . $request->id;
        if (!$request->cookie($cookieName)) {
            $ad->update([
                'views'=>$ad->views + 1
            ]);
            $response = new Response();
            $response->withCookie(cookie($cookieName, $request->id, 1440));
            return $response;
        }
    }
}

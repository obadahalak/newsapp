<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\newsAds;
use Illuminate\Http\Request;

class AdminAdsNewsController extends Controller
{
    public function listAds(){
        $ListAds=newsAds::latest()->get();
        return view('NewsBanner',compact('ListAds'));
    }
    public function createAdsNews(Request $Request) {
     //   dd($Request);
     $listOfAds=$Request->ListNewsAds;

        foreach($Request->ListNewsAds as $tt){
            // return
            newsAds::create([
                'body' => $tt['body'],
            ]);
        }
    }
}

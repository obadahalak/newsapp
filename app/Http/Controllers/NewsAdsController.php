<?php

namespace App\Http\Controllers;

use App\Models\newsAds;
use Illuminate\Http\Request;

class NewsAdsController extends Controller
{
    public function listAds()
    {
        $ads = NewsAds::query()->pluck('body');
        return response()->json($ads);
    }
}

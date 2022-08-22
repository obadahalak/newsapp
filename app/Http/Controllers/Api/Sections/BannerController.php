<?php

namespace App\Http\Controllers\Api\Sections;

use App\Http\Controllers\Controller;
use App\Models\Baner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function ListImage(){
        $images=Baner::select('image')->get();
        return response()->json($images);
    }
}

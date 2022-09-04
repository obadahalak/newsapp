<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\UserCountry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use App\Http\Resources\UserCountryResourcce;

class DashBoardController extends Controller
{

    public function  userCountry(){
        // $Countries=UserCountry::select('country')->get();
        // // return $Countries;
        // $data=UserCountry::where('country','Brunei')->count();

        return     UserCountryResourcce::collection(UserCountry::all());

    }

    public function DasahBoardView(Request $request){

        return view('Dashboard');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\Http\Request;
use App\Http\Resources\SiteInfoResource;
use App\Models\ContactUs;

class SiteInfoController extends Controller
{
    public function languages($lan): bool
    {
        $langs = array('ar', 'en');
        if (in_array($lan, $langs)) {
            return true;
        } else {
            return false;
        }
    }
    public function getSiteInfo($lan)
    {
        if ($this->languages($lan)) {
            if ($lan == 'ar'){

           return      SiteInfoResource::collection(SiteInfo::select('name_ar', 'value_ar')->get());
            }


            else{

                return SiteInfoResource::collection(SiteInfo::select('name', 'value')->get());
            }
        }
    }
    public function contactUs(){
        $data=ContactUs::select('value')->first();
        if($data){

            return json_decode($data->value);
        }
    }
}

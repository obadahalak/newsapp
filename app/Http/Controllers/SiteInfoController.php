<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\Http\Request;
use App\Http\Resources\SiteInfoResource;

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
}

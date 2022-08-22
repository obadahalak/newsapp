<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonSection;
use App\Http\Resources\CommonSectionResource;

class CommonSectionController extends Controller
{
    public function getCommonSections($lan ,$cat ){

        if($lan =='ar')

            return  CommonSectionResource::collection(CommonSection::where('type',$cat)->select('id','name_ar','details_ar','type_ar','link')->lazy());

    return  CommonSectionResource::collection(CommonSection::where('type',$cat)->select('id','name','details','type','link')->lazy());


    }
}

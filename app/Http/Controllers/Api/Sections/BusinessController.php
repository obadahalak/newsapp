<?php

namespace App\Http\Controllers\Api\Sections;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessResource;

class BusinessController extends Controller
{
    public function getBusiness($lan ,$CatId){
        if($lan=='ar')
       return  BusinessResource::collection(Business::where('category_id',$CatId)->select('id','name_ar','body_ar','link')->lazy());
    else
    return  BusinessResource::collection(Business::where('category_id',$CatId)->select('id','name','body','link')->lazy());
    }
}

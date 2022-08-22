<?php

namespace App\Http\Controllers;

use App\Models\IfmisMember;
use Illuminate\Http\Request;
use App\Http\Resources\IfmisMemberResource;

class IfmisMemberController extends Controller
{
    public function getListOfMembers($lan){
     //  return IfmisMember::all();
       return  $lan=="ar" ?
        IfmisMemberResource::collection(IfmisMember::select('id','name_ar','job_ar','country_ar','imageProfile','imageFlag')->lazy())
        :  //else
        IfmisMemberResource::collection(IfmisMember::select('id','name','job','country','imageProfile','imageFlag')->lazy());

    }
}

<?php

namespace App\Http\Controllers\Api\Sections;

use App\Models\Research;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResearchRequest;
use App\Http\Resources\ResearchResource;

class ResearchController extends Controller
{
    public function getResearch($lan, $catId){
        if($lan=='ar')
            return ResearchResource::collection(Research::Accepted()->where('category_id',$catId)->select('id','title_ar','body_ar','link')->lazy());
        else
        return ResearchResource::collection(Research::Accepted()->where('category_id',$catId)->select('id','title','body','link')->lazy());
    }

    public function createResearch(ResearchRequest $request){
            Research::create($request->validated()+[
                'category_id'=>11,
                'user_id'=>auth('sanctum')->user()->id,
            ]);
    }

}

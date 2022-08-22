<?php

namespace App\Http\Controllers\Api\Sections;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogsResource;

class BlogController extends Controller
{
    public function getBlog($lan,$catId){
        if($lan=='ar')
            return BlogsResource::collection(Blog::where('category_id',$catId)->select('id','title_ar','body_ar')->lazy());
    else
        return BlogsResource::collection(Blog::where('category_id',$catId)->select('id','title','body')->lazy());

    }
}

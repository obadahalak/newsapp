<?php

namespace App\Http\Controllers\Api\Sections;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{
    public function getArticle($lan , $catId){
        if($lan=='ar')
            return ArticleResource::collection(Article::where('category_id',$catId)->select('id','title_ar','body_ar')->lazy());
        else
            return ArticleResource::collection(Article::where('category_id',$catId)->select('id','title','body')->lazy());

    }
}

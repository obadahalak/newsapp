<?php

namespace App\Http\Controllers\Api\sections;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResouce;
use App\Http\services\CategoryService;
use App\Http\Traits\Translate;
use App\Models\News;
use Faker\Factory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use CategoryService;



    public function getNews($lan, $CatId)
    {
        if ($lan == 'ar') {
            return NewsResouce::collection(News::where('category_id', $CatId)->select('id', 'title_ar', 'body_ar','link')->lazy());
        } else
            return NewsResouce::collection(News::where('category_id', $CatId)->select('id', 'title', 'body','link')->lazy());
    }
}

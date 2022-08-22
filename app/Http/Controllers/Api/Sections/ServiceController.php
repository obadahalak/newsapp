<?php

namespace App\Http\Controllers\Api\Sections;

use Error;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\services\LikeService;
use App\Http\Traits\ListForClasses;
use App\Http\Controllers\Controller;
use App\Http\services\SearchService;
use App\Http\Requests\CommentRequest;
use App\Http\services\CommentService;
use App\Http\services\CategoryService;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ServiceLikeValidation;

class ServiceController extends Controller
{
    use LikeService, CommentService, CategoryService , SearchService;

    public function CreateLike(ServiceLikeValidation $request, $model, $id)
    {


        try {

            $pathModel = $model::getPath();

            $newModel =  new $pathModel;
        } catch (Error $th) {

            return $this->LikeClasses();
        }

        $token = auth('sanctum')->id();

        return $this->createLikeModel($newModel, $id, $request->is_like, $token);
    }

    public function CretaeComment($model, $id, CommentRequest $request)
    {


        try {
            $pathModel = $model::getPath();

            $getModel =  new $pathModel;
        } catch (Error $th) {
            return  $this->CommentClasses();
        }
        $token = auth('sanctum')->id();

        return $this->createCommentModel($getModel, $id, $token, $request->comment);
    }
    public function AvailableComment(){
       return  $this->CommentClasses();
    }
    public function AvailableLike(){
        return $this->LikeClasses();
    }

    public function AvailableSearch(){
        return $this->listOfSearchServices();
    }

    public function getCategoryFromModel($sectionName, $lan)
    {
        return    $this->getCategories($sectionName, $lan);
    }
    public function search( $lan, Request $request, $modelName){
        return $this->searchObject($lan,$modelName, $request->TextSearch);

    }
}

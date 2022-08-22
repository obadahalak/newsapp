<?php

namespace  App\Http\services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;

trait LikeService
{
    /*
    Like Serivce Trait  => Creates Like  for all Models in LikeClasses()

    requires => {

        Model-Name, => It must be in  LikeClasses()

            id,         => id Model
            token,      => token User
            is_like     => True Or False
    }

    */

    ///List For Every Model supported Like service //
    public  function LikeClasses()
    {
        return response()->json(

            [
                'tables For Create Like' => [

                    // 'Product',
                    'PostCompatition',
                    'Course',
                    'Research',
                    'News',
                    //'BlogClass',
                    // 'ArtileClass',
                    'Business',
                    'Competition',
                ],
            ]
        );
    }
    ///Create New Like  If User does not have Like //
    public function createNewLike($get_model, $is_like, $token)
    {
        try {
            $get_model->likes()->create([
                'is_like' => $is_like,
                'user_id' => $token,
            ]);
        } catch (\BadMethodCallException $er) {
            return response()->error($er->getMessage());
        }

        return response()->success('', ' Like-Created');
    }

    ///Update Status Like  (IsLike => True ,False);
    public function UpdateStatusLike($get_model, $is_like)
    {

        $status = $get_model->likes[0]->is_like;
        $getRow = $get_model->likes[0];

        if (!$status && $is_like == true) {
            $getRow->update([
                'is_like' => true,
            ]);
            return response()->success('', $is_like);
        } else if ($status && $is_like == false) {

            $getRow->update([
                'is_like' => false,
            ]);

            return response()->success('', $is_like);
        }
    }
    ///This function does get Relation and test this Relation [1]///
    public function getModelWithLikes($model, $id, $token, $is_like)
    {

        $get_model = $model::whereId($id)->with(['likes' => function ($q)  use ($token) {

            $q->where('user_id', $token)

                ->select('id', 'likeable_type', 'likeable_id', 'user_id', 'is_like');
        }])->first();

        if (count($get_model->likes) == 0)
            return $this->createNewLike($get_model, $is_like, $token);
        else
            return $this->UpdateStatusLike($get_model, $is_like);
    }
    ///this function Make sure there is a Model  [0]
    public function createLikeModel($model, $id, $is_like, $token)
    {
        $getModel = $model::find($id);
        if (!$getModel) {
            return response()->json(' Id ' .  $id  . '   From Table  ' . class_basename($model) . '   NotFound', Response::HTTP_NOT_FOUND);
        } else {
            return   $this->getModelWithLikes($model, $id, $token, $is_like);
        }
    }
}

<?php

namespace App\Http\services;

use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Model;

Trait CommentService
{

     /*
    Comment Serivce Trait  => Creates Comment  for all Models in  CommentClasses()

    requires => {

          Model-Name, => It must be in  CommentClasses()

            id,         => id Model
            token,      => token User
            comment     => String
    }

    */

    public  function CommentClasses()
    {
        return response()->json([

                'tables For Create Comment',

                    'Course',
                    'Research',
                    'News',
                    'business',
                    'Competition',
                    'Post'
        ]


        ,401);
    }

    public function  createCommentModel($model , $id, $token, $comment)
    {
        $getModel = $model::find($id);

        if (!$getModel) {

            return response()->json(' Id ' .  $id  . '   From Table  ' . class_basename($model) . '   NotFound', Response::HTTP_NOT_FOUND);

        } else {
            try {
                $getModel->comments()->create([
                    'comment' => $comment,
                    'user_id' => $token,
                ]);
            } catch (\BadMethodCallException $th) {

               return response()->error($th->getMessage());
            }

            return response()->success('', 'comment Created');
       }
    }
}

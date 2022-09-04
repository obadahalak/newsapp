<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuizeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if($this->question_ar!=null){

            return [

                'id'=>$this->id,
                'course_id'=>$this->course_id,
                'question'=>$this->question_ar,
                'correct_answer'=>$this->correct_answer,
            ];
        }else{

            return [

                'id'=>$this->id,
                'course_id'=>$this->course_id,
                'question'=>$this->question,
                'correct_answer'=>$this->correct_answer,
            ];
        }
    }
}

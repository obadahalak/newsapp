<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompetitionResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        if($this->name_ar !=null){
            return [
                'id'=>$this->id,
                'name'=>$this->name_ar,
                'details'=>$this->details_ar,
                'prize'=>$this->prize_ar,
                'images' => ImagesResource::collection($this->prize_files),
            ];
        }
            else {
                return [
                    'id'=>$this->id,
                    'name'=>$this->name,
                    'details'=>$this->details,
                    'prize'=>$this->prize,
                    'images' => ImagesResource::collection($this->prize_files),
                ];
            }
        }
    }

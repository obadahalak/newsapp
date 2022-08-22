<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->name_ar != null) {

            return [
                'id'=>$this->id,
                'category_id'=>$this->category_id,
                'name'=>$this->name_ar,
                'lang'=>$this->lang,
                'lat'=>$this->lat,
                'images'=>ImagesResource::collection($this->images),

            ];
        } else {
            return [
                'id'=>$this->id,
                'category_id'=>$this->category_id,
                'name'=>$this->name,
                'lang'=>$this->lang,
                'lat'=>$this->lat,
                'images'=>ImagesResource::collection($this->images),
            ];
        }
    }
}

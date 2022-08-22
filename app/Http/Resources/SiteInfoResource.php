<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiteInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if($this->name_ar==null){
            return [
                'name'=>$this->name,
                'value'=>$this->value,
            ];
        }else{
            return [
                'name'=>$this->name_ar,
                'value'=>$this->value_ar,
            ];
        }
    }
}

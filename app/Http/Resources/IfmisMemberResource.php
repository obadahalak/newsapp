<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IfmisMemberResource extends JsonResource
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
                'id'=>$this->id,
                'name'=>$this->name,
                'country'=>$this->country,
                'jop'=>$this->job,
                'imageProfile'=>$this->imageProfile,
                'imageFlag'=>$this->imageFlag,
            ];
        }else{
            return [
                'id'=>$this->id,
                'name'=>$this->name_ar,
                'country'=>$this->country_ar,
                'jop'=>$this->job_ar,
                'imageProfile'=>$this->imageProfile,
                'imageFlag'=>$this->imageFlag,
            ];
        }
    }
}

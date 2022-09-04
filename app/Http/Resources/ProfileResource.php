<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'email'=>$this->email,
            'phone'=>$this->phone ?? 'Please Complete the profile',
            'country'=>$this->country ?? 'Please Complete the profile',
            'user_name'=>$this->user_name,
            'image'=>$this->image ?? 'no Image',
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JoinUsersList extends JsonResource
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
            'id'=>$this->user->id,
            'email'=>$this->user->email,
            'phone'=>$this->user->phone ?? 'Please Complete the profile',
            'country'=>$this->user->country ?? 'Please Complete the profile',
            'user_name'=>$this->user->user_name,
            'image'=>$this->user->image ?? 'no Image',
        ];

    }
}

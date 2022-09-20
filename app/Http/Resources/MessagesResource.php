<?php

namespace App\Http\Resources;

use App\Models\JoinRoom;
use Illuminate\Http\Resources\Json\JsonResource;

class MessagesResource extends JsonResource
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
            'user'=>new UserResouce($this->user),
            'message'=>$this->message,

        ];
    }
}

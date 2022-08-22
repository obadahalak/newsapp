<?php

namespace App\Http\Resources;

use App\Http\Resources\PostCompatitionResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CompetitionMembersResourse extends JsonResource
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
            'user_name' =>$this->user->user_name,
            'image' => $this->user->image,
            'post' => $this->user->postCompetition(10),
        ];
    }
}

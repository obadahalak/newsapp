<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompetitionByIdResourse extends JsonResource
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
                'id' => $this->id,
                'name' => $this->name_ar,
                'details' => $this->details_ar,
                'prize' => $this->prize_ar,
                'posts' => PostCompatitionResource::collection($this->postCompatition),
                //  'members'=>   CompetitionMembersResourse::collection($this->members),
            ];
        } else {


            return [
                'id' => $this->id,
                'name' => $this->name,
                'details' => $this->details,
                'prize' => $this->prize,
                'posts' => PostCompatitionResource::collection($this->postCompatition),
                //  'members'=>   CompetitionMembersResourse::collection($this->members),
            ];
        }
    }
}

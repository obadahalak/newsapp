<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->name_ar == null) {
            return [
                'id' => $this->id,
                'store_id' => $this->store_id,
                'link'=>$this->link,
                'image' => ImagesResource::collection($this->images),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
            ];
        } else {
            return [
                'id' => $this->id,
                'store_id' => $this->store_id,
                'link'=>$this->link,
                'image' => ImagesResource::collection($this->images),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
            ];
        }
    }
}

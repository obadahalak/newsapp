<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommonSectionResource extends JsonResource
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
            return  [
                'id'=>$this->id,
                'name'=>$this->name,
                'details'=>$this->details,
                'type'=>$this->type,
                'link'=>$this->link,
                'images' => ImagesResource::collection($this->images),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
                'comments' => CommentsResoruce::collection($this->comments),
            ];
        } else {
            return [
                'id'=>$this->id,
                'name'=>$this->name_ar,
                'details'=>$this->details_ar,
                'type'=>$this->type_ar,
                'link'=>$this->link,
                'images' => ImagesResource::collection($this->images),
                'likes' => count(LikesResoruce::collection($this->likes)),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
                'comments' => CommentsResoruce::collection($this->comments),
            ];
        }
    }
}

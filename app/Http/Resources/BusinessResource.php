<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BusinessResource extends JsonResource
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
                'body' => $this->body_ar,
                'link'=>$this->link,
                'files' => ImagesResource::collection($this->files),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
                'comments' => CommentsResoruce::collection($this->comments),
            ];
        } else {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'body' => $this->body,
                'link'=>$this->link,
                'files' => ImagesResource::collection($this->files),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
                'comments' => CommentsResoruce::collection($this->comments),
            ];
        }
    }
}

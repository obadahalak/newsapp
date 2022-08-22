<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        if ($this->title_ar != null) {
            return [
                'id' => $this->id,
                'title' => $this->title_ar,
                'body' => $this->body_ar,
                'images' => ImagesResource::collection($this->images),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
                'comments' => CommentsResoruce::collection($this->comments),
            ];
        } else {
            return [
                'id' => $this->id,
                'title' => $this->title,
                'body' => $this->body,
                'images' => ImagesResource::collection($this->images),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
                'comments' => CommentsResoruce::collection($this->comments),
            ];
        }
    }
}

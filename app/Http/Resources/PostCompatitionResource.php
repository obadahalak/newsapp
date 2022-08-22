<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostCompatitionResource extends JsonResource
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
            'body'=>$this->body,
            'video'=>$this->video,
            'user'=>(new UserResouce($this->user)),
            'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
            'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
            'is_like' => auth('sanctum')->check() === true ? LikesResoruce::collection($this->Mylikes) : null,
            'comments' => CommentsResoruce::collection($this->comments),
        ];
    }
}

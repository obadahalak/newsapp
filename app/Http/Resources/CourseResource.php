<?php

namespace App\Http\Resources;

use App\Http\Resources\ImagesResource;
use App\Models\Like;
use Illuminate\Http\Resources\Json\JsonResource;

    class CourseResource extends JsonResource
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
                'images' => ImagesResource::collection($this->images),
                'comments'=>CommentsResoruce::collection($this->comments),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like'=>auth('sanctum')->check() == true ? LikesResoruce::collection($this->Mylikes ) : null,
            ];
        } else {

            return [
                'id' => $this->id,
                'name' => $this->name,
                'details' => $this->details,
                'images' => ImagesResource::collection($this->images),
                'comments'=>CommentsResoruce::collection($this->comments),
                'likes' => count( LikesResoruce::collection($this->likes->where('is_like',1) )),
                'desLike' => count( LikesResoruce::collection($this->likes->where('is_like',0) )),
                'is_like'=> auth('sanctum')->check() == true ? LikesResoruce::collection($this->Mylikes ) : null,

            ];
        }
    }
}

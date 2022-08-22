<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LessionResource extends JsonResource
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
                'id'=>$this->id,
                'name' => $this->name_ar,
                'files' => ImagesResource::collection($this->images),
            ];
        }
            else{
                return [
                    'id'=>$this->id,
                    'name' => $this->name,
                    'files' => ImagesResource::collection($this->images),
                ];
            }
        }
    }

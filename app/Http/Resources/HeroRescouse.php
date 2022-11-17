<?php

namespace App\Http\Resources;

use App\Http\Resources\DetaileRescouse;
use App\Models\details;
use Illuminate\Http\Resources\Json\JsonResource;

class HeroRescouse extends JsonResource
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
            'id' => $this->id,
            'para1' => $this->para1,
            'para' => $this->para2,
            'para3' => $this->para3,
            'title' => $this->title,

            'cover' => $this->cover,
            'time' => $this->time,
            'authorName' => $this->authorName,
            'authorImg' => $this->authorImg,
            'details' => new DetaileRescouse(details::find($this->detail_id))
        ];
    }
}
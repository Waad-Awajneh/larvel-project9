<?php

namespace App\Http\Resources;

use App\Models\details;
use App\Models\catgeory;
use App\Http\Resources\DetaileRescouse;
use App\Http\Resources\CatgeoryRescouse;
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
            'popular' => $this->popular,
            'PaidContent' => $this->PaidContent,
            'cover' => $this->cover,
            'time' => $this->time,
            'authorName' => $this->authorName,
            'authorImg' => $this->authorImg,
            'details' => new DetaileRescouse(details::find($this->detail_id)),
            'catgeory' => new CatgeoryRescouse(catgeory::find($this->catgeory_id))
        ];
    }
}

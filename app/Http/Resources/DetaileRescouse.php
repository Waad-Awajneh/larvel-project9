<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetaileRescouse extends JsonResource
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
            'quote' => $this->quote,
            'title' => $this->title,
            'para1' => $this->para1,
            'para2' => $this->para2,
            'para3' => $this->para3,
        ];
    }
}

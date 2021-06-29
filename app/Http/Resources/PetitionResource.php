<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //all model attribute will be returned
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'author' => $this->author
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class vendeursResource extends JsonResource
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
            'id'=>(string)$this->id,
            'type'=>'vendeurs',
            'attributes'=>[
                'name'=>$this->name,
                'e-mail'=>$this->email,
                'telephone'=>$this->telephone,

            ]

        ];    }
}

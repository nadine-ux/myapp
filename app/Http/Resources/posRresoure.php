<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class posRresoure extends JsonResource
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
            'type'=>'points de vente',
            'attributes'=>[
                'Nom_POS'=>$this->Nom_POS,
                'Adresse'=>$this->Adresse,
                'Statut'=>$this->Statut,
                'telephone'=>$this->telephone,
                //'user_id'=>$this->user_id,
                'user_id'=>new UsersResource($this->user_id),
                'created'=>$this->created_at,
                'updated'=>$this->updated_at

            ]

        ];
    }
}
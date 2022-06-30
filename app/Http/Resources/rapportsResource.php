<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class rapportsResource extends JsonResource
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
            'type'=>'rapports',
            'attributes'=>[
                'Etat'=>$this->Etat,
                'Date_rapport'=>$this->Date_rapport,
                'description'=>$this->description,
                'created'=>$this->created_at,
                'updated'=>$this->updated_at



            ]];
    }
}
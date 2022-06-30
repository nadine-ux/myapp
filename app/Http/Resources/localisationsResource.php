<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\posRresoure;
class localisationsResource extends JsonResource
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
            'type'=>'localisation',
            'attributes'=>[
                'lattitude'=>$this->lattitude,
                'longetude'=>$this->longetude,
               'pos_id' => $this->pos_id,
               //'pos_id' => new posRresoure  ($this->pos_id),


            ]];
    }
}
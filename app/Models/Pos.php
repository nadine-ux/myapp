<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pos extends Model
{
   
    public function rapport()
{ 
    return $this->belongsTo('App\models\Rapport'); 
}
    use HasFactory;
    protected $fillable = [
        'num','nom', 'adress','etat',
    ];
   
}

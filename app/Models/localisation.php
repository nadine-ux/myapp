<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'lattitude','longetude','pos_id',


    ];
    public function pos()
    {
        return $this->hasOne(pos::class);
    }
}
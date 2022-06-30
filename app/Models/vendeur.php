<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',

        'telephone',
        'pos_id',
    ];
    public function pos()
    {
        return $this->hasOne(pdv::class);
    }
}
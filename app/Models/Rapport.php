<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rapport extends Model
{
    use HasFactory;
    protected $fillable = [
        'Etat',
        'Date_rapport',
        'description',
        'user_id',
        'pos_id',

    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function pos()
    {
        return $this->belongsTo(pos::class);
    }
}

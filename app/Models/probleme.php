<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class probleme extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'Etat',
        'user_id',
        'pos_id',



    ];
    public function pos()
    {
        return $this->belongsTo(pos::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

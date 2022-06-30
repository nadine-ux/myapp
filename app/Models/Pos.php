<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pos extends Model
{
    use HasFactory;
    protected $fillable = [
    'Nom_POS',
    'Adresse',
    'Statut',
    'telephone',
    'user_id',



    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function localisation()
    {
        return $this->belongsTo(localisation::class);
    }
    public function vendeur()
    {
        return $this->belongsTo(vendeur::class);
    }
    public function problemes()
    {
        return $this->hasMany(probleme::class);
    }
    public function rapports()
    {
        return $this->hasMany(rapport::class);
    }
}

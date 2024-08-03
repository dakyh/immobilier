<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'intitule',
        'description',
        'surface',
        'prix',
        'type',
        'adresse',
        'datePublication',
        'etat',
        'nombreDePieces',
        'nombreDeChambres',
        'nombreDeSallesDeBain',
        'cloture',
        'nombreDAppartements',
    ];

    public static $types = [
        'terrains',
        'appartements',
        'immeubles',
        // Ajoutez d'autres types ici si nécessaire
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function accompagnements()
    {
        return $this->belongsToMany(Accompagnement::class);
    }
}

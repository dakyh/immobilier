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
        'typebien_id',
        'adresse',
        'datePublication',
        'etat',
        'nombreDePieces',
        'nombreDeChambres',
        'nombreDeSallesDeBain',
        'cloture',
        'nombreDAppartements',
    ];

    public function typebien()
    {
        return $this->belongsTo(TypeBien::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class); // Si chaque bien a une seule image principale
    }

    public function accompagnements()
    {
        return $this->belongsToMany(Accompagnement::class);
    }
}

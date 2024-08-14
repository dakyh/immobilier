<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;
    protected $casts = [
        'datePublication' => 'date',
    ];
    

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

    public function typebien()
    {
        // return $this->belongsTo(TypeBien::class, 'type', 'name');
        return $this->belongsTo(TypeBien::class, 'type', 'id');
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

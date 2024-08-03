<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accompagnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
        'type',
        'datePublication'
    ];

    public static $types = [
        'administratifs',
        'conciergerie',
        'crédit bancaire',
        // Ajoutez d'autres types ici si nécessaire
    ];

    public function biens()
    {
        return $this->belongsToMany(Bien::class);
    }
}

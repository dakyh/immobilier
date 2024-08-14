<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accompagnement extends Model
{
    use HasFactory;
    protected $casts = [
        'datePublication' => 'date',
    ];
    
    protected $fillable = [
        'intitule',
        'description',
        'type',
        'datePublication'
    ];

    public function biens()
    {
        return $this->belongsToMany(Bien::class);
    }

    public function typeac()
    {
        return $this->belongsTo(TypeAC::class,'type', 'name'); // Ajout de la clé étrangère
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    use HasFactory;

    protected $table = 'typebiens'; // Nom correct de la table

    protected $fillable = ['nom'];

    public function biens()
    {
        return $this->hasMany(Bien::class);
    }
}

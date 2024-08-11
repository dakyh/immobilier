<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    use HasFactory;
    protected $table = 'typebiens';  // Indique explicitement le nom de la table
    protected $fillable = ['name'];

    public function biens()
    {
        return $this->hasMany(Bien::class);
    }
}

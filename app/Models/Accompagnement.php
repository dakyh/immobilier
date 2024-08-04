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
        'typeac_id',
        'datePublication'
    ];

    public function biens()
    {
        return $this->belongsToMany(Bien::class);
    }

    public function typeac()
    {
        return $this->belongsTo(TypeAC::class);
    }
}

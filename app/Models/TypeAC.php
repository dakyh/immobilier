<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAC extends Model
{
    use HasFactory;

    protected $table = 'typeacs';  // Assurez-vous que cela correspond au nom de votre table
    protected $fillable = ['name'];

    public function accompagnements()
    {
        return $this->hasMany(Accompagnement::class);
    }

    
}

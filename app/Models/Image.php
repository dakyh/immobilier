<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'url',
        'bien_id', // Clé étrangère
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class); // Relation N:1 avec Bien
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAC extends Model {
    use HasFactory;
    protected $fillable = ['name'];
    public function accompagnements() {
        return $this->hasMany(Accompagnement::class);
    }
}

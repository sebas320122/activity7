<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public function usuario() { 
        return $this->belongsTo(Usuario::class); 
      } 

    public function curso() { 
        return $this->hasMany(Curso::class); 
      } 
}

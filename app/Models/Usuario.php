<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{   
    use HasFactory;

    public function grupo() { 
        return $this->hasOne(Grupo::class); 
      } 
}

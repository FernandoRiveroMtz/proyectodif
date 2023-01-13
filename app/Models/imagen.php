<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    public function publicaciones(){
        return $this->belongsTo(Publicacion::class, 'id_publicacion');
    }

    
}

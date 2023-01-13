<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table= 'publicaciones';

    protected $fillable= ['nombre', 'descripcion', 'fecha_publicacion', 'id_persona', 'id_tipo_publicacion'];

    public function imagen(){  //una publicacion puede tener varias imagenes
        return $this->hasMany(Imagen::class, 'id_publicacion');
    }
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'categoria_id'];

    // Un producto pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
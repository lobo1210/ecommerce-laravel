<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'activo',
        'category_id'
    ];

    // Relación: un producto pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

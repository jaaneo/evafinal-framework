<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }
    public function sucursales(){
        return $this->belongsToMany(Sucursal::class,'producto_sucursal');
    }
}

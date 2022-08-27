<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    public function productos(){
	    return $this->belongsToMany(Producto::class)->withPivot('cantidad');
    }
}

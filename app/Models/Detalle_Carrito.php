<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Carrito extends Model
{
    use HasFactory;
    
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'Id_producto');
    }
}

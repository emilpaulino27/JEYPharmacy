<?php

namespace App\Models;

use App\Producto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCarrito extends Model
{
    use HasFactory;
    protected $table = 'detalle__carrito';

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'Id_producto');
    }

    public function precioTotal()
    {
        return $this->cantidad_producto * $this->precio_unitario;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoCompra extends Model
{
    use HasFactory;
    protected $fillable = ['Id_usuario', 'Fecha'];
    public function detallesCarrito()
    {
        return $this->hasMany(DetalleCarrito::class, 'Id_carrito_compra');
    }
}

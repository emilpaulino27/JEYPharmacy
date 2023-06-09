<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleCarrito
 *
 * @property $id
 * @property $Id_carrito_compra
 * @property $Id_producto
 * @property $Cantidad_producto
 * @property $created_at
 * @property $updated_at
 *
 * @property CarritoCompra $carritoCompra
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleCarrito extends Model
{
    
    static $rules = [
		'Id_carrito_compra' => 'required',
		'Id_producto' => 'required',
		'Cantidad_producto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_carrito_compra','Id_producto','Cantidad_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carritoCompra()
    {
        return $this->hasOne('App\Models\CarritoCompra', 'Id_carrito_compra', 'Id_carrito_compra');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'Id_producto');
    }
    

}

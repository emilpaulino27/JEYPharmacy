<?php

namespace App\Models;

<<<<<<< HEAD
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
    

=======
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
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
}

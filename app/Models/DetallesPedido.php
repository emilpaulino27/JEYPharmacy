<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesPedido
 *
 * @property $id
 * @property $Id_pedido
 * @property $Id_producto
 * @property $Cantidad_producto_pedido
 * @property $created_at
 * @property $updated_at
 *
 * @property Pedido $pedido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesPedido extends Model
{
    
    static $rules = [
		'Id_pedido' => 'required',
		'Id_producto' => 'required',
		'Cantidad_producto_pedido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_pedido','Id_producto','Cantidad_producto_pedido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pedido()
    {
        return $this->hasOne('App\Models\Pedido', 'Id_pedido', 'Id_pedido');
    }
    

=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesPedido extends Model
{
    use HasFactory;
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
}

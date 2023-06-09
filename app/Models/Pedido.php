<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $Id_pedido
 * @property $Id_usuario
 * @property $Fecha_pedido
 * @property $Direccion
 * @property $Estado_pedido
 * @property $Opcion_pago
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallesPedido[] $detallesPedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'Id_pedido' => 'required',
		'Id_usuario' => 'required',
		'Fecha_pedido' => 'required',
		'Direccion' => 'required',
		'Estado_pedido' => 'required',
		'Opcion_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_pedido','Id_usuario','Fecha_pedido','Direccion','Estado_pedido','Opcion_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesPedidos()
    {
        return $this->hasMany('App\Models\DetallesPedido', 'Id_pedido', 'Id_pedido');
    }
    

}

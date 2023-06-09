<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoPedido
 *
 * @property $Id_estado_pedido
 * @property $Descripcion_pedido
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstadoPedido extends Model
{
    
    static $rules = [
		'Id_estado_pedido' => 'required',
		'Descripcion_pedido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_estado_pedido','Descripcion_pedido'];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $imagen
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $Id_categoria
 * @property $cant_disponible
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleCarrito[] $detalleCarritos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'imagen' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'Id_categoria' => 'required',
		'cant_disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen','nombre','descripcion','precio','Id_categoria','cant_disponible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleCarritos()
    {
        return $this->hasMany('App\Models\DetalleCarrito', 'Id_producto', 'id');
    }
    

}

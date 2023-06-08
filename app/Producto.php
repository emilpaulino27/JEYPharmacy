<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $imagen
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $id_categoria
 * @property $cant_disponible
 * @property $created_at
 * @property $updated_at
 *
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
		'id_categoria' => 'required',
		'cant_disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen','nombre','descripcion','precio','id_categoria','cant_disponible'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    public function detallesCarrito()
    {
        return $this->hasMany(DetalleCarrito::class, 'Id_producto');
    }
}

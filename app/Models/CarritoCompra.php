<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

/**
 * Class CarritoCompra
 *
 * @property $Id_carrito_compra
 * @property $Id_usuario
 * @property $Fecha
 * @property $Estado_carrito
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleCarrito[] $detalleCarritos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CarritoCompra extends Model
{
    
    static $rules = [
		'Id_carrito_compra' => 'required',
		'Id_usuario' => 'required',
		'Fecha' => 'required',
		'Estado_carrito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_carrito_compra','Id_usuario','Fecha','Estado_carrito'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleCarritos()
    {
        return $this->hasMany('App\Models\DetalleCarrito', 'Id_carrito_compra', 'Id_carrito_compra');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'Id_usuario', 'Id_usuario');
    }
    

=======
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
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
}

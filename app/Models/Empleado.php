<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $Id_empleado
 * @property $Nombre
 * @property $Numero_tel
 * @property $Email
 * @property $Direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
  protected $primaryKey = 'Id_empleado';
    
    static $rules = [
		'Id_empleado' => 'required',
		'Nombre' => 'required',
		'Numero_tel' => 'required',
		'Email' => 'required',
		'Direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_empleado','Nombre','Numero_tel','Email','Direccion'];



}

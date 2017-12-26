<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Personas
 * @package App\Models
 * @version May 26, 2017, 12:34 am UTC
 */
class Personas extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'direccion',
        'telefono',
        'tipodocumento',
        'documento',
        'expedicion',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'direccion' => 'string',
        'telefono' => 'string',
        'tipodocumento' => 'string',
        'documento' => 'string',
        'expedicion' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'direccion' => 'required',
        'documento' => 'required|max:20',
        'expedicion' => 'required',
        'estado' => 'max:10'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
     public function archivosactividadescontratos()
     {
         return $this->hasMany(\App\Models\usuarioscreados::class);
     }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function archivospersonas()
    {
        return $this->hasMany(\App\Models\archivospersonas::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pnaturales()
    {
        return $this->hasMany(\App\Models\pnaturales::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pjuridicas()
    {
        return $this->hasMany(\App\Models\pjuridicas::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function contratos()
    {
        return $this->hasMany(\App\Models\contratos::class);
    }
}

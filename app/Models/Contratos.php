<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contratos
 * @package App\Models
 * @version May 26, 2017, 1:44 am UTC
 */
class Contratos extends Model
{
    use SoftDeletes;

    public $table = 'contratos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'entidadcontratante',
        'objetocontrato',
        'nocontrato',
        'ncontrato',
        'apodocontrato',
        'valorcontratol',
        'valorcontrato',
        'valoranticipol',
        'valoranticipo',
        'porcentajeanticipo',
        'formapago',
        'valoradicional',
        'valoranticipoadicional',
        'plazoinicial',
        'fechainiciacion',
        'fechafinalizacion',
        'tipocontrato',
        'estado',
        'idpersonas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'entidadcontratante' => 'string',
        'nocontrato' => 'string',
        'ncontrato' => 'string',
        'apodocontrato' => 'string',
        'valorcontratol' => 'string',
        'valoranticipol' => 'string',
        'formapago' => 'string',
        'valoranticipoadicional' => 'double',
        'plazoinicial' => 'string',
        'fechainiciacion' => 'date',
        'fechafinalizacion' => 'date',
        'tipocontrato' => 'string',
        'estado' => 'string',
        'idpersonas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ncontrato' => 'required',
        'valorcontrato' => 'required',
        'estado' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function archivoscontratos()
    {
        return $this->hasMany(\App\Models\archivoscontratos::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function entidadescontratantes()
    {
        return $this->hasMany(\App\Models\entidadescontratantes::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function datosejecucionfisicofinancieras()
    {
        return $this->hasMany(\App\Models\datosejecucionfisicofinanciera::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tiposcontratos()
    {
        return $this->hasMany(\App\Models\tiposcontratos::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function subcontratos()
    {
        return $this->hasMany(\App\Models\subcontratos::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function polizas()
    {
        return $this->hasMany(\App\Models\polizas::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function estadopolizas()
    {
        return $this->hasMany(\App\Models\estadopolizas::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function actividadescontratos()
    {
        return $this->hasMany(\App\Models\actividadescontratos::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function balancesfinancieros()
    {
        return $this->hasMany(\App\Models\balancesfinancieros::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function novedadfechas()
    {
        return $this->hasMany(\App\Models\novedadfecha::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function personas()
    {
        return $this->belongsTo(\App\Models\personas::class, 'idpersonas', 'id');
    }
}

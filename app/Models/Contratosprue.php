<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contratosprue
 * @package App\Models
 * @version June 17, 2017, 4:18 pm UTC
 */
class Contratosprue extends Model
{
    use SoftDeletes;

    public $table = 'contratosprues';
    

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
        'idpersonas',
        'identidadescontratantes',
        'idtiposcontratos'
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
        'valorcontrato' => 'double',
        'valoranticipol' => 'string',
        'valoranticipo' => 'double',
        'porcentajeanticipo' => 'double',
        'formapago' => 'string',
        'valoradicional' => 'double',
        'valoranticipoadicional' => 'double',
        'plazoinicial' => 'string',
        'fechainiciacion' => 'date',
        'fechafinalizacion' => 'date',
        'tipocontrato' => 'string',
        'estado' => 'string',
        'idpersonas' => 'integer',
        'identidadescontratantes' => 'integer',
        'idtiposcontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'entidadcontratante' => 'required',
        'ncontrato' => 'required',
        'valorcontrato' => 'required',
        'tipocontrato' => 'required',
        'estado' => 'required'
    ];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function entidadescontratantes()
    {
        return $this->belongsTo(\App\Models\entidadescontratantes::class, 'identidadescontratantes', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tiposcontratos()
    {
        return $this->belongsTo(\App\Models\tiposcontratos::class, 'idtiposcontratos', 'id');
    }
}

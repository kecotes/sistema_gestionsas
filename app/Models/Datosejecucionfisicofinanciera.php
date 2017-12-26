<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Datosejecucionfisicofinanciera
 * @package App\Models
 * @version May 26, 2017, 4:10 am UTC
 */
class Datosejecucionfisicofinanciera extends Model
{
    use SoftDeletes;

    public $table = 'datosejecucionfisicofinancieras';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'item',
        'tema',
        'descripcion',
        'ejecucionacumitem',
        'estado',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item' => 'double',
        'tema' => 'string',
        'descripcion' => 'string',
        'ejecucionacumitem' => 'string',
        'estado' => 'string',
        'idcontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'item' => 'required',
        'tema' => 'required',
        'descripcion' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function anexosejecucionfisicofinancieras()
    {
        return $this->hasMany(\App\Models\anexosejecucionfisicofinanciera::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ejecucionfisicofinancieras()
    {
        return $this->hasMany(\App\Models\ejecucionfisicofinanciera::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'idcontratos', 'id');
    }
}

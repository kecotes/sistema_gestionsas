<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ejecucionfisicofinanciera
 * @package App\Models
 * @version June 15, 2017, 4:56 am UTC
 */
class Ejecucionfisicofinanciera extends Model
{
    use SoftDeletes;

    public $table = 'ejecucionfisicofinancieras';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'item',
        'tema',
        'descripcion',
        'unidad',
        'valunitario',
        'proyectadocantidad',
        'proyectadototalunitario',
        'proyectadoporcentaje',
        'ejecutadocantidad',
        'ejecutadototalunitario',
        'ejecutadoporcentaje',
        'porejecutarcantidad',
        'porejecutartotalunitario',
        'porejecutarporcentaje',
        'iddatosejecucion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item' => 'string',
        'tema' => 'string',
        'descripcion' => 'string',
        'unidad' => 'string',
        'valunitario' => 'double',
        'proyectadocantidad' => 'double',
        'proyectadototalunitario' => 'double',
        'proyectadoporcentaje' => 'double',
        'ejecutadocantidad' => 'double',
        'ejecutadototalunitario' => 'double',
        'ejecutadoporcentaje' => 'double',
        'porejecutarcantidad' => 'double',
        'porejecutartotalunitario' => 'double',
        'porejecutarporcentaje' => 'double',
        'iddatosejecucion' => 'integer'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function datosejecucionfisicofinanciera()
    {
        return $this->belongsTo(\App\Models\datosejecucionfisicofinanciera::class, 'iddatosejecucion', 'id');
    }
}

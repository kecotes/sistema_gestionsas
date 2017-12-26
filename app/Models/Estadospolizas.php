<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estadospolizas
 * @package App\Models
 * @version July 28, 2017, 5:30 am UTC
 */
class Estadospolizas extends Model
{
    use SoftDeletes;

    public $table = 'estadospolizas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'amparo',
        'vigenciadesde',
        'vigenciahasta',
        'valorasegurado',
        'estadopoliza',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'amparo' => 'string',
        'vigenciadesde' => 'date',
        'vigenciahasta' => 'date',
        'valorasegurado' => 'string',
        'estadopoliza' => 'string',
        'idcontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vigenciadesde' => 'required',
        'vigenciahasta' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'idcontratos', 'id');
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Novedadesfechas
 * @package App\Models
 * @version May 26, 2017, 3:55 am UTC
 */
class Novedadesfechas extends Model
{
    use SoftDeletes;

    public $table = 'novedadesfechas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'plazoinicial',
        'fechainiciacion',
        'fechafinalizacion',
        'fechasuspension',
        'fechareinicio',
        'adicciontiempo',
        'fechafinalizacionadiccion',
        'agregar',
        'estado',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'plazoinicial' => 'string',
        'fechainiciacion' => 'datetime',
        'fechafinalizacion' => 'datetime',
        'fechasuspension' => 'datetime',
        'fechareinicio' => 'datetime',
        'adicciontiempo' => 'string',
        'fechafinalizacionadiccion' => 'datetime',
        'agregar' => 'string',
        'estado' => 'string',
        'idcontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'idcontratos', 'id');
    }
}

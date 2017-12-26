<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Archivoscontratos
 * @package App\Models
 * @version July 31, 2017, 6:50 am UTC
 */
class Archivoscontratos extends Model
{
    use SoftDeletes;

    public $table = 'archivoscontratos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'archivo',
        'titulo',
        'descripcion',
        'tipo',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'archivo' => 'string',
        'titulo' => 'string',
        'descripcion' => 'string',
        'tipo' => 'string',
        'idcontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'archivo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'icontratos', 'id');
    }
}

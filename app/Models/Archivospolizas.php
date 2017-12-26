<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Archivospolizas
 * @package App\Models
 * @version July 28, 2017, 5:37 am UTC
 */
class Archivospolizas extends Model
{
    use SoftDeletes;

    public $table = 'archivospolizas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'archivo',
        'titulo',
        'descripcion',
        'idpolizas'
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
        'idpolizas' => 'integer'
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
    public function polizas()
    {
        return $this->belongsTo(\App\Models\polizas::class, 'idpolizas', 'id');
    }
}

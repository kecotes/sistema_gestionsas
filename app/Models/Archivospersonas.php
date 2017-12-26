<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Archivospersonas
 * @package App\Models
 * @version May 26, 2017, 12:35 am UTC
 */
class Archivospersonas extends Model
{
    use SoftDeletes;

    public $table = 'archivospersonas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'archivo',
        'titulo',
        'descripcion',
        'idpersonas'
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
        'idpersonas' => 'integer'
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
    public function personas()
    {
        return $this->belongsTo(\App\Models\personas::class, 'idpersonas', 'id');
    }
}

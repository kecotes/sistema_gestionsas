<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Adicciones
 * @package App\Models
 * @version February 8, 2018, 3:07 am UTC
 *
 * @property \App\Models\contratos contratos
 * @property decimal valoradicional
 * @property decimal valoranticipoadicional
 * @property integer idcontratos
 */
class Adicciones extends Model
{
    use SoftDeletes;

    public $table = 'adicciones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'valoradicional',
        'valoranticipoadicional',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
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

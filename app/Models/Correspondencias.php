<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Correspondencias
 * @package App\Models
 * @version February 20, 2018, 5:26 am UTC
 *
 * @property \App\Models\contratos contratos
 * @property string destinatario
 * @property string remitente
 * @property string asunto
 * @property string archivo
 * @property date fecha
 * @property integer idcontratos
 */
class Correspondencias extends Model
{
    use SoftDeletes;

    public $table = 'correspondencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'destinatario',
        'remitente',
        'asunto',
        'archivo',
        'fecha',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'destinatario' => 'string',
        'remitente' => 'string',
        'asunto' => 'string',
        'archivo' => 'string',
        'fecha' => 'date',
        'idcontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'destinatario' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'icontratos', 'id');
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Polizas
 * @package App\Models
 * @version July 28, 2017, 5:37 am UTC
 */
class Polizas extends Model
{
    use SoftDeletes;

    public $table = 'polizas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fechaexpedicion',
        'tipopoliza',
        'npoliza',
        'tipocertificado',
        'observaciones',
        'estado',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fechaexpedicion' => 'date',
        'tipopoliza' => 'string',
        'npoliza' => 'string',
        'tipocertificado' => 'string',
        'observaciones' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function archivospolizas()
    {
        return $this->hasMany(\App\Models\archivospolizas::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'idcontratos', 'id');
    }
}
